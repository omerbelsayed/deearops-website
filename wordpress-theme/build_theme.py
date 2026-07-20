#!/usr/bin/env python3
"""
Ports the static DeeAROps site (../deearops-website/*.html) into WordPress
page templates for the theme in ./deearops/.

ponytail: this is a one-shot generator, not a build pipeline — run once,
inspect the output, this script's job is done. Re-run if the static
site's content changes and needs re-porting.
"""
import re
from pathlib import Path

SRC = Path(__file__).resolve().parent.parent / "deearops-website"
THEME = Path(__file__).resolve().parent / "deearops"

# slug -> static filename (home = the front page)
PAGES = {
    "home": "index.html",
    "about": "about.html",
    "services": "services.html",
    "solutions": "solutions.html",
    "industries": "industries.html",
    "technology": "technology.html",
    "insights": "insights.html",
    "contact": "contact.html",
}

HREF_RE = re.compile(r'href="(index|about|services|solutions|industries|technology|insights|contact)\.html(#[\w-]+)?"')
SRC_RE = re.compile(r'src="assets/([^"]+)"')


def php_str(s: str) -> str:
    """Escape a string for embedding in a PHP single-quoted literal."""
    return s.replace("\\", "\\\\").replace("'", "\\'")


def extract(tag_pattern, html, default=""):
    m = re.search(tag_pattern, html, re.DOTALL)
    return m.group(1).strip() if m else default


def rewrite_links(html: str) -> str:
    def href_sub(m):
        slug = "home" if m.group(1) == "index" else m.group(1)
        frag = m.group(2) or ""
        return f'href="<?php echo esc_url( deearops_url(\'{slug}\') ); ?>{frag}"'

    html = HREF_RE.sub(href_sub, html)
    html = SRC_RE.sub(
        lambda m: f'src="<?php echo esc_url( get_template_directory_uri() . \'/assets/{m.group(1)}\' ); ?>"',
        html,
    )
    return html


def main_content(html: str) -> str:
    start = html.index('<main id="main">')
    end = html.index("</main>", start) + len("</main>")
    return html[start:end]


seo_entries = []
title_entries = []

for slug, filename in PAGES.items():
    html = (SRC / filename).read_text(encoding="utf-8")

    title = extract(r"<title>(.*?)</title>", html)
    desc = extract(r'<meta name="description" content="(.*?)">', html)
    og_title = extract(r'<meta property="og:title" content="(.*?)">', html)
    og_desc = extract(r'<meta property="og:description" content="(.*?)">', html)
    page_title = title.split(" — ")[0].strip() if " — " in title else title.split("|")[0].strip()

    seo_entries.append(
        f"    '{slug}' => array( 'title' => '{php_str(title)}', 'desc' => '{php_str(desc)}', "
        f"'og_title' => '{php_str(og_title)}', 'og_desc' => '{php_str(og_desc)}' ),"
    )
    if slug != "home":
        title_entries.append(f"    '{slug}' => '{php_str(page_title)}',")

    content = rewrite_links(main_content(html))
    template_name = "front-page.php" if slug == "home" else f"page-{slug}.php"
    (THEME / template_name).write_text(
        f"<?php\n/**\n * Template for the '{slug}' page — ported 1:1 from {filename}.\n */\nget_header();\n?>\n\n{content}\n\n<?php get_footer(); ?>\n",
        encoding="utf-8",
    )
    print(f"wrote {template_name}")

seo_php = "array(\n" + "\n".join(seo_entries) + "\n)"
titles_php = "array(\n" + "\n".join(title_entries) + "\n)"

functions_path = THEME / "functions.php"
functions = functions_path.read_text(encoding="utf-8")
functions = functions.replace("/*__SEO_META__*/", seo_php)
functions = functions.replace("/*__PAGE_TITLES__*/", titles_php)
functions_path.write_text(functions, encoding="utf-8")
print("patched functions.php")
