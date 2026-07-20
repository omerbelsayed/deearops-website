<?php
/**
 * DeeAROps theme bootstrap.
 *
 * A faithful WordPress port of the static deearops-website site: same
 * css/main.css and js/main.js (untouched), same 8 pages, same SEO metadata.
 * No page builder, no custom post types, no ACF — this is a fixed 8-page
 * corporate site, not a general-purpose CMS theme, so it doesn't pretend
 * to be one.
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

define( 'DEEAROPS_VERSION', '1.0.0' );

add_theme_support( 'title-tag' );
add_theme_support( 'post-thumbnails' );

/**
 * Enqueue the ported stylesheet, fonts and script exactly as the static site did.
 */
function deearops_assets() {
	wp_enqueue_style(
		'deearops-fonts',
		'https://fonts.googleapis.com/css2?family=Manrope:wght@400;600;700&family=Sora:wght@500;600;700&display=swap',
		array(),
		null
	);
	wp_enqueue_style( 'deearops-main', get_template_directory_uri() . '/css/main.css', array(), DEEAROPS_VERSION );
	wp_enqueue_script( 'deearops-main', get_template_directory_uri() . '/js/main.js', array(), DEEAROPS_VERSION, true );
}
add_action( 'wp_enqueue_scripts', 'deearops_assets' );

/**
 * Resolve a static page's front-end URL by slug ('home' = site root).
 * ponytail: get_page_by_path is soft-deprecated but still functional and
 * the simplest correct option for an 8-page fixed site — no need for a
 * full WP_Query for this.
 */
function deearops_url( $slug ) {
	if ( 'home' === $slug ) {
		return home_url( '/' );
	}
	$page = get_page_by_path( $slug );
	return $page ? get_permalink( $page ) : home_url( '/' . $slug . '/' );
}

/**
 * SEO metadata per page, ported verbatim from each static page's <head>.
 */
function deearops_seo_meta_map() {
	return array(
    'home' => array( 'title' => 'DeeAROps — Data Protection, Backup &amp; Disaster Recovery Specialists', 'desc' => 'DeeAROps is a specialized IT services company focused entirely on data protection, backup, disaster recovery and replication — policy-driven, vendor-neutral, across on-premises and every major cloud.', 'og_title' => 'DeeAROps — Your business never stops. Neither do we.', 'og_desc' => 'Policy-driven backup, replication and disaster recovery — designed, implemented, tested, documented and managed.' ),
    'about' => array( 'title' => 'About DeeAROps — Specialists in Data Protection &amp; Disaster Recovery', 'desc' => 'DeeAROps does one thing — data protection, backup, disaster recovery and replication — as a vendor-neutral extension of our partners\' teams, across regions and time zones.', 'og_title' => 'About DeeAROps — A specialist, not a generalist', 'og_desc' => 'One discipline, mastered. Policy-driven data protection, backup and disaster recovery.' ),
    'services' => array( 'title' => 'Services — Disaster Recovery, Backup &amp; Managed Services | DeeAROps', 'desc' => 'DeeAROps services: disaster recovery design and implementation, backup and recovery built to the 3-2-1-1-0 rule, policy and assessment, and fully managed services with contractual SLAs.', 'og_title' => 'DeeAROps Services — Designed, governed and operated', 'og_desc' => 'Disaster recovery, backup &amp; recovery, policy &amp; assessment, and managed services — with a transparent responsibility split.' ),
    'solutions' => array( 'title' => 'Solutions — From Business Risk to Guaranteed Recovery | DeeAROps', 'desc' => 'DeeAROps solutions organized around your business problem: build protection right, prove you can recover, and run it 24/7 — with recovery tiers and contractual SLAs.', 'og_title' => 'DeeAROps Solutions — Start from what you cannot afford to lose', 'og_desc' => 'Business challenge → DeeAROps approach → technology → outcome.' ),
    'industries' => array( 'title' => 'Industries — Banking, Healthcare, Government &amp; More | DeeAROps', 'desc' => 'DeeAROps serves the sectors where downtime costs the most: banking and finance, healthcare, government, telecom, insurance and energy, education and retail.', 'og_title' => 'DeeAROps Industries — Where downtime costs the most', 'og_desc' => 'Industry challenge → DeeAROps capability → technology approach → business outcome.' ),
    'technology' => array( 'title' => 'Technology Ecosystem — Cross-Platform Data Protection | DeeAROps', 'desc' => 'The DeeAROps technology ecosystem: infrastructure, virtualization, cloud platforms, operating systems, databases, backup and replication toolsets, storage, networking and monitoring — 100% vendor-agnostic.', 'og_title' => 'DeeAROps Technology — Cross-platform by design', 'og_desc' => 'We protect critical data wherever it lives — on-premises and across every major cloud.' ),
    'insights' => array( 'title' => 'Insights — Perspectives on Recovery, Backup &amp; Continuity | DeeAROps', 'desc' => 'DeeAROps perspectives on data protection, the 3-2-1-1-0 backup rule, RPO and RTO as business promises, tested recovery, and ransomware-resilient backups.', 'og_title' => 'DeeAROps Insights — Recovery is a plan, not a hope', 'og_desc' => 'Perspectives on business continuity from the specialists in data protection and disaster recovery.' ),
    'contact' => array( 'title' => 'Contact — Talk to Our Experts | DeeAROps', 'desc' => 'Talk to a DeeAROps specialist about data protection, backup, disaster recovery and managed services. Riyadh, Saudi Arabia — serving organizations across regions and time zones.', 'og_title' => 'Talk to Our Experts — DeeAROps', 'og_desc' => 'Turn recovery into a guarantee. Start the conversation.' ),
);
}

function deearops_current_slug() {
	if ( is_front_page() ) {
		return 'home';
	}
	global $post;
	return $post ? $post->post_name : '';
}

/**
 * ' aria-current="page"' when $slug is the page currently being rendered,
 * else ''. Used by header.php to mark the active nav link.
 */
function deearops_nav_current( $slug ) {
	return $slug === deearops_current_slug() ? ' aria-current="page"' : '';
}

/**
 * Document <title>, sourced from the same per-page metadata.
 */
function deearops_document_title( $title ) {
	$meta = deearops_seo_meta_map();
	$slug = deearops_current_slug();
	return isset( $meta[ $slug ] ) ? $meta[ $slug ]['title'] : $title;
}
add_filter( 'pre_get_document_title', 'deearops_document_title' );

/**
 * Meta description, canonical URL and Open Graph tags.
 */
function deearops_head_meta() {
	$meta = deearops_seo_meta_map();
	$slug = deearops_current_slug();
	if ( ! isset( $meta[ $slug ] ) ) {
		return;
	}
	$m   = $meta[ $slug ];
	$url = deearops_url( $slug );
	?>
	<meta name="description" content="<?php echo esc_attr( $m['desc'] ); ?>">
	<link rel="canonical" href="<?php echo esc_url( $url ); ?>">
	<meta property="og:type" content="website">
	<meta property="og:title" content="<?php echo esc_attr( $m['og_title'] ); ?>">
	<meta property="og:description" content="<?php echo esc_attr( $m['og_desc'] ); ?>">
	<meta property="og:url" content="<?php echo esc_url( $url ); ?>">
	<meta property="og:image" content="<?php echo esc_url( get_template_directory_uri() . '/assets/logo-icon.png' ); ?>">
	<?php
}
add_action( 'wp_head', 'deearops_head_meta', 1 );

/**
 * On activation: create the 7 interior pages (if missing) and switch
 * permalinks to /page-name/ so links read cleanly, matching the static
 * site's URL style. The front page needs no page row — front-page.php
 * is picked up by WordPress automatically for the site root.
 */
function deearops_page_titles() {
	return array(
    'about' => 'About DeeAROps',
    'services' => 'Services',
    'solutions' => 'Solutions',
    'industries' => 'Industries',
    'technology' => 'Technology Ecosystem',
    'insights' => 'Insights',
    'contact' => 'Contact',
);
}

function deearops_create_pages() {
	foreach ( deearops_page_titles() as $slug => $title ) {
		if ( get_page_by_path( $slug ) ) {
			continue;
		}
		wp_insert_post(
			array(
				'post_title'   => $title,
				'post_name'    => $slug,
				'post_status'  => 'publish',
				'post_type'    => 'page',
				'post_content' => '',
			)
		);
	}

	if ( '' === get_option( 'permalink_structure' ) ) {
		update_option( 'permalink_structure', '/%postname%/' );
	}
	flush_rewrite_rules();
}
add_action( 'after_switch_theme', 'deearops_create_pages' );
