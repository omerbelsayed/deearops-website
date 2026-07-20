<?php
/**
 * Template for the 'industries' page — ported 1:1 from industries.html.
 */
get_header();
?>

<main id="main">

  <section class="page-hero on-dark">
    <div class="container">
      <span class="eyebrow">Industries</span>
      <h1>Where downtime costs the most, we matter most.</h1>
      <p class="lead">We prioritize sectors by the cost of downtime, regulatory pressure and the duty to recover — because that is where a specialist earns their place.</p>
    </div>
  </section>

  <section class="section" id="banking">
    <div class="container">
      <div class="feature-panel reveal">
        <div style="display:flex;gap:12px;flex-wrap:wrap;align-items:center;">
          <span class="eyebrow" style="margin:0;">Banking &amp; Finance</span>
          <span class="pill">Very high downtime cost</span><span class="pill">Very high regulation</span>
        </div>
        <div class="grid grid-4" style="margin-top:24px;">
          <div><h4>Industry challenge</h4><p class="muted" style="margin-top:8px;">Core banking cannot stop. Regulators mandate documented, tested recovery — and every minute offline is transactions that never return.</p></div>
          <div><h4>DeeAROps capability</h4><p class="muted" style="margin-top:8px;">Tier-1 recovery design: RPO ≤ 15 minutes, RTO ≤ 1 hour for mission-critical services, with runbooks and audit evidence built in.</p></div>
          <div><h4>Technology approach</h4><p class="muted" style="margin-top:8px;">Replication across secondary data centers and cloud — Oracle Data Guard, SQL Server Always On, storage replication — governed and operated.</p></div>
          <div><h4>Business outcome</h4><p class="muted" style="margin-top:8px;">Recovery commitments the board and regulator can rely on, with monthly SLA evidence.</p></div>
        </div>
      </div>

      <div class="feature-panel reveal" style="margin-top:32px;" id="healthcare">
        <div style="display:flex;gap:12px;flex-wrap:wrap;align-items:center;">
          <span class="eyebrow" style="margin:0;">Healthcare</span>
          <span class="pill">Very high downtime cost</span><span class="pill">High regulation</span>
        </div>
        <div class="grid grid-4" style="margin-top:24px;">
          <div><h4>Industry challenge</h4><p class="muted" style="margin-top:8px;">Patient records and clinical systems must stay available and protected — data loss is measured in care disrupted, not just money.</p></div>
          <div><h4>DeeAROps capability</h4><p class="muted" style="margin-top:8px;">Policy-driven protection per service — patient records tiered for rapid recovery, with tested restore validation and documentation.</p></div>
          <div><h4>Technology approach</h4><p class="muted" style="margin-top:8px;">Backup built to the 3-2-1-1-0 rule across enterprise applications, databases and virtualized clinical workloads.</p></div>
          <div><h4>Business outcome</h4><p class="muted" style="margin-top:8px;">Continuity of care with provable recovery — ready for audit, ready for the worst day.</p></div>
        </div>
      </div>

      <div class="feature-panel reveal" style="margin-top:32px;" id="government">
        <div style="display:flex;gap:12px;flex-wrap:wrap;align-items:center;">
          <span class="eyebrow" style="margin:0;">Government</span>
          <span class="pill">High downtime cost</span><span class="pill">High regulation</span>
        </div>
        <div class="grid grid-4" style="margin-top:24px;">
          <div><h4>Industry challenge</h4><p class="muted" style="margin-top:8px;">Citizen services carry a public duty to recover, with strict mandates for documented recovery and audit findings when it fails.</p></div>
          <div><h4>DeeAROps capability</h4><p class="muted" style="margin-top:8px;">End-to-end engagements — assess, design, implement, manage — grounded in ISO 22301, NIST CSF and ITIL governance.</p></div>
          <div><h4>Technology approach</h4><p class="muted" style="margin-top:8px;">Cross-platform protection spanning on-premises, private cloud and sovereign-friendly hyperscaler regions.</p></div>
          <div><h4>Business outcome</h4><p class="muted" style="margin-top:8px;">E-services that keep serving citizens — with the audit evidence to prove readiness.</p></div>
        </div>
      </div>

      <div class="feature-panel reveal" style="margin-top:32px;" id="telecom">
        <div style="display:flex;gap:12px;flex-wrap:wrap;align-items:center;">
          <span class="eyebrow" style="margin:0;">Telecom &amp; ISPs</span>
          <span class="pill">Very high downtime cost</span><span class="pill">Strong fit</span>
        </div>
        <div class="grid grid-4" style="margin-top:24px;">
          <div><h4>Industry challenge</h4><p class="muted" style="margin-top:8px;">Always-on infrastructure where outages are instantly visible to every customer — and churn follows.</p></div>
          <div><h4>DeeAROps capability</h4><p class="muted" style="margin-top:8px;">Managed replication and 24/7 monitoring with severity-based response — P1 answered in 15 minutes.</p></div>
          <div><h4>Technology approach</h4><p class="muted" style="margin-top:8px;">Replication toolsets (Zerto, Veeam Replication, storage replication) operated across hybrid estates.</p></div>
          <div><h4>Business outcome</h4><p class="muted" style="margin-top:8px;">Service continuity customers never have to think about.</p></div>
        </div>
      </div>

      <div class="feature-panel reveal" style="margin-top:32px;" id="insurance-energy">
        <div style="display:flex;gap:12px;flex-wrap:wrap;align-items:center;">
          <span class="eyebrow" style="margin:0;">Insurance &amp; Energy</span>
          <span class="pill">High downtime cost</span><span class="pill">High regulation</span>
        </div>
        <div class="grid grid-4" style="margin-top:24px;">
          <div><h4>Industry challenge</h4><p class="muted" style="margin-top:8px;">Regulated, high-stakes operations where continuity obligations and audit requirements meet complex legacy estates.</p></div>
          <div><h4>DeeAROps capability</h4><p class="muted" style="margin-top:8px;">Policy &amp; assessment engagements that turn undocumented risk into defined RPO/RTO, runbooks and OLAs.</p></div>
          <div><h4>Technology approach</h4><p class="muted" style="margin-top:8px;">Vendor-neutral architecture across SAP, Oracle applications, databases and virtualization platforms.</p></div>
          <div><h4>Business outcome</h4><p class="muted" style="margin-top:8px;">Compliance evidence and recovery confidence — without re-platforming.</p></div>
        </div>
      </div>

      <div class="feature-panel reveal" style="margin-top:32px;" id="education-retail">
        <div style="display:flex;gap:12px;flex-wrap:wrap;align-items:center;">
          <span class="eyebrow" style="margin:0;">Education &amp; Retail</span>
          <span class="pill">Right-sized opportunity</span>
        </div>
        <div class="grid grid-4" style="margin-top:24px;">
          <div><h4>Industry challenge</h4><p class="muted" style="margin-top:8px;">Growing digital estates and lean IT teams — protection has to be effective without enterprise-scale budgets.</p></div>
          <div><h4>DeeAROps capability</h4><p class="muted" style="margin-top:8px;">Tiered recovery objectives from the Business Impact Analysis, so spend follows what actually matters.</p></div>
          <div><h4>Technology approach</h4><p class="muted" style="margin-top:8px;">Best-of-breed backup matched to fit — cloud, on-premises or hybrid — with verification built in.</p></div>
          <div><h4>Business outcome</h4><p class="muted" style="margin-top:8px;">Protection without overspend — and a specialist on call when it counts.</p></div>
        </div>
      </div>
    </div>
  </section>

  <!-- CTA -->
  <section class="section band-navy on-dark cta-band">
    <div class="container reveal">
      <h2 class="display">Your sector. Your risk profile. One conversation.</h2>
      <p class="lead">Tell us your industry and your critical services — we will map the recovery tiers that fit.</p>
      <div class="hero-ctas">
        <a class="btn btn-primary" href="<?php echo esc_url( deearops_url('contact') ); ?>">Talk to Our Experts</a>
      </div>
    </div>
  </section>

</main>

<?php get_footer(); ?>
