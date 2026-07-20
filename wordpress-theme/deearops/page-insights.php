<?php
/**
 * Template for the 'insights' page — ported 1:1 from insights.html.
 */
get_header();
?>

<main id="main">

  <section class="page-hero on-dark">
    <div class="container">
      <span class="eyebrow">Insights</span>
      <h1>Recovery is a plan, not a hope.</h1>
      <p class="lead">Perspectives from the specialists — on the rules we design to, the promises recovery must keep, and the questions every board should ask.</p>
    </div>
  </section>

  <!-- Featured -->
  <section class="section">
    <div class="container">
      <details class="feature-panel insight-card reveal">
        <summary>
          <span class="eyebrow">Featured perspective</span>
          <h2>Is your recovery plan tested — or assumed?</h2>
          <p class="lead" style="margin-top:12px;">Most companies hope their IT will recover. Hope is not a strategy — and auditors know the difference.</p>
          <span class="text-link" style="margin-top:16px;">Read the perspective <span class="arr" aria-hidden="true">→</span></span>
        </summary>
        <div class="insight-body">
          <p>IT failure is not a matter of if — it is a matter of when. When it happens, every hour of downtime costs the organization on three fronts at once: revenue that never returns, regulatory exposure in sectors with strict mandates for documented recovery, and reputational damage that takes years to rebuild.</p>
          <p>The difference between a plan and an assumption is evidence. Recovery that is tested, documented and monitored — verified monthly restores, per-service runbooks, audit-ready reporting — turns a hope into a guarantee.</p>
          <p><a class="text-link" href="<?php echo esc_url( deearops_url('contact') ); ?>">Ask us to assess your recovery plan <span class="arr" aria-hidden="true">→</span></a></p>
        </div>
      </details>

      <div class="grid grid-3" style="margin-top:32px;">
        <details class="card insight-card reveal">
          <summary>
            <span class="pill">Backup strategy</span>
            <h3 style="margin-top:16px;">3-2-1-1-0: the backup rule we design every solution around</h3>
            <span class="text-link">Read <span class="arr" aria-hidden="true">→</span></span>
          </summary>
          <div class="insight-body">
            <p>Three copies of your data, on two different media, one off-site, one immutable or offline — and zero errors on verification. Every DeeAROps backup design is built to this rule, then proven with recovery validation rather than assumed.</p>
          </div>
        </details>
        <details class="card insight-card reveal reveal-d1">
          <summary>
            <span class="pill">Executive view</span>
            <h3 style="margin-top:16px;">RPO and RTO are business promises — treat them that way</h3>
            <span class="text-link">Read <span class="arr" aria-hidden="true">→</span></span>
          </summary>
          <div class="insight-body">
            <p>Recovery objectives are not technical settings buried in a console. They are commitments to customers, regulators and the board about how much data can be lost and how long a service can be down. That is why every engagement starts from the Business Impact Analysis — what can the business not afford to lose?</p>
          </div>
        </details>
        <details class="card insight-card reveal reveal-d2">
          <summary>
            <span class="pill">Resilience</span>
            <h3 style="margin-top:16px;">Ransomware-proof your backups</h3>
            <span class="text-link">Read <span class="arr" aria-hidden="true">→</span></span>
          </summary>
          <div class="insight-body">
            <p>When ransomware strikes, backups are the target as much as production. An immutable, verified copy — the "1" and the "0" in 3-2-1-1-0 — is what separates an incident from a catastrophe. Design for the worst day, every day.</p>
          </div>
        </details>
      </div>

      <div class="grid grid-2" style="margin-top:24px;">
        <details class="card insight-card reveal">
          <summary>
            <span class="pill">Cost of downtime</span>
            <h3 style="margin-top:16px;">Every hour of downtime costs more than a year of preparedness</h3>
            <span class="text-link">Read <span class="arr" aria-hidden="true">→</span></span>
          </summary>
          <div class="insight-body">
            <p>For critical systems, downtime is quantified in hundreds of thousands per hour — before counting fines and lost trust. Preparedness is not an insurance premium; it is the cheaper side of the ledger.</p>
          </div>
        </details>
        <details class="card insight-card reveal reveal-d1">
          <summary>
            <span class="pill">Sourcing strategy</span>
            <h3 style="margin-top:16px;">Why vendor-neutral architecture wins</h3>
            <span class="text-link">Read <span class="arr" aria-hidden="true">→</span></span>
          </summary>
          <div class="insight-body">
            <p>When the architect earns reseller margin, the architecture serves the margin. A vendor-neutral specialist matches the tool to the workload — requirements, security, scalability and best practice decide, not quotas.</p>
          </div>
        </details>
      </div>

      <p class="muted reveal" style="margin-top:48px;">More perspectives, case studies and company news will be published here. For a conversation about any of these topics, <a href="<?php echo esc_url( deearops_url('contact') ); ?>">talk to our experts</a>.</p>
    </div>
  </section>

  <!-- CTA -->
  <section class="section band-navy on-dark cta-band">
    <div class="container reveal">
      <h2 class="display">When disaster strikes, you want the specialist in the room.</h2>
      <div class="hero-ctas">
        <a class="btn btn-primary" href="<?php echo esc_url( deearops_url('contact') ); ?>">Talk to Our Experts</a>
      </div>
    </div>
  </section>

</main>

<?php get_footer(); ?>
