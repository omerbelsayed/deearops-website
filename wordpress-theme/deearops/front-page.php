<?php
/**
 * Template for the 'home' page — ported 1:1 from index.html.
 */
get_header();
?>

<main id="main">

  <!-- ============ HERO ============ -->
  <section class="hero on-dark">
    <div class="container">
      <div class="hero-inner">
        <div>
          <span class="hero-eyebrow">Data Protection · Backup · Disaster Recovery</span>
          <h1 class="display">Your business never stops.<br>Neither do we.</h1>
          <p class="lead">Policy-driven backup, replication and disaster recovery — designed, implemented, tested, documented and managed. Across on-premises and every major cloud.</p>
          <div class="hero-ctas">
            <a class="btn btn-primary" href="<?php echo esc_url( deearops_url('contact') ); ?>">Talk to Our Experts</a>
            <a class="btn btn-secondary" href="<?php echo esc_url( deearops_url('services') ); ?>">Explore Our Capabilities</a>
          </div>
        </div>
        <div class="hero-visual" aria-hidden="true">
          <svg viewBox="0 0 560 460" role="presentation" focusable="false">
            <path class="net-line" d="M120 350 C 180 250, 260 170, 400 120"></path>
            <path class="net-flow" d="M120 350 C 180 250, 260 170, 400 120"></path>
            <path class="net-line" d="M120 350 C 230 360, 330 330, 440 250"></path>
            <path class="net-flow f2" d="M120 350 C 230 360, 330 330, 440 250"></path>
            <path class="net-line" d="M400 120 C 430 170, 445 200, 440 250"></path>
            <path class="net-flow f3" d="M400 120 C 430 170, 445 200, 440 250"></path>
            <path class="net-line" d="M120 350 C 90 300, 90 260, 130 210" stroke-dasharray="3 6"></path>
            <path class="net-line" d="M440 250 C 470 300, 460 350, 410 380" stroke-dasharray="3 6"></path>
            <circle class="net-node" cx="130" cy="210" r="7"></circle>
            <circle class="net-node" cx="410" cy="380" r="7"></circle>
            <circle class="net-node" cx="250" cy="120" r="5"></circle>
            <path class="net-line" d="M250 120 C 300 105, 350 105, 400 120" stroke-dasharray="3 6"></path>
            <circle class="net-pulse" cx="120" cy="350" r="26"></circle>
            <circle class="net-node net-node-core" cx="120" cy="350" r="16"></circle>
            <rect x="112" y="342" width="16" height="16" rx="3" fill="none" stroke="#fff" stroke-width="1.5"></rect>
            <text class="net-label" x="98" y="398">PRIMARY SITE</text>
            <circle class="net-pulse p2" cx="400" cy="120" r="26"></circle>
            <circle class="net-node net-node-core" cx="400" cy="120" r="16"></circle>
            <path d="M392 123 a5 5 0 0 1 1-9.8 a6.5 6.5 0 0 1 12.6-1.4 a4.8 4.8 0 0 1 2 9.4 z" fill="none" stroke="#fff" stroke-width="1.5" stroke-linejoin="round"></path>
            <text class="net-label" x="378" y="88">CLOUD</text>
            <circle class="net-pulse p3" cx="440" cy="250" r="26"></circle>
            <circle class="net-node net-node-core" cx="440" cy="250" r="16"></circle>
            <path d="M433 250 h14 M440 243 v14" stroke="#fff" stroke-width="1.5" stroke-linecap="round" fill="none"></path>
            <text class="net-label" x="466" y="254">RECOVERY SITE</text>
            <path class="net-line" d="M30 330 h40 M50 330 v-24 h20" stroke-opacity="0.2"></path>
            <rect x="24" y="326" width="8" height="8" fill="none" stroke="#7E9BD4" stroke-opacity="0.35"></rect>
            <path class="net-line" d="M530 140 h-40 M510 140 v24 h-20" stroke-opacity="0.2"></path>
            <rect x="528" y="136" width="8" height="8" fill="none" stroke="#7E9BD4" stroke-opacity="0.35"></rect>
          </svg>
        </div>
      </div>
    </div>
    <div class="stats-strip">
      <div class="container">
        <div class="grid grid-4">
          <div class="stat">
            <div class="stat-num">100%</div>
            <div class="stat-label">Focused on DR &amp; backup</div>
            <div class="stat-sub">One discipline, mastered</div>
          </div>
          <div class="stat">
            <div class="stat-num">7+</div>
            <div class="stat-label">Cloud &amp; on-prem platforms</div>
            <div class="stat-sub">Protected wherever data lives</div>
          </div>
          <div class="stat">
            <div class="stat-num">3-2-1-1-0</div>
            <div class="stat-label">Backup rule we build to</div>
            <div class="stat-sub">Policy-driven by design</div>
          </div>
          <div class="stat">
            <div class="stat-num">24/7</div>
            <div class="stat-label">Monitoring &amp; response</div>
            <div class="stat-sub">For critical incidents</div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ============ INTRODUCTION ============ -->
  <section class="section">
    <div class="container">
      <div class="two-col">
        <div class="reveal">
          <span class="eyebrow">Who we are</span>
          <h2>A specialist, not a generalist.</h2>
          <p class="lead" style="margin-top:16px;">DeeAROps is a specialized IT services company focused entirely on data protection, backup, disaster recovery and replication — helping organizations protect critical services, ensure business continuity, and meet recovery objectives across on-premises and cloud.</p>
          <p style="margin-top:16px;">Every solution is architected, implemented, tested, documented and managed — end to end.</p>
          <p style="margin-top:24px;"><a class="text-link" href="<?php echo esc_url( deearops_url('about') ); ?>">More about DeeAROps <span class="arr" aria-hidden="true">→</span></a></p>
        </div>
        <div>
          <div class="value-row reveal">
            <div class="idx">01</div>
            <div>
              <h4>Specialists, not generalists</h4>
              <p class="muted" style="margin-top:4px;">Data protection is not a line on a service menu. It is everything we do, every day.</p>
            </div>
          </div>
          <div class="value-row reveal reveal-d1">
            <div class="idx">02</div>
            <div>
              <h4>Business-aligned recovery</h4>
              <p class="muted" style="margin-top:4px;">RPO and RTO are business promises, not technical settings. We design around what the business cannot afford to lose.</p>
            </div>
          </div>
          <div class="value-row reveal reveal-d2">
            <div class="idx">03</div>
            <div>
              <h4>Certainty, not hope</h4>
              <p class="muted" style="margin-top:4px;">Recovery that is tested, documented, monitored — and ready before it is ever needed.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ============ WHY IT MATTERS ============ -->
  <section class="section bg-paper">
    <div class="container">
      <div class="section-head reveal">
        <span class="eyebrow">Why it matters</span>
        <h2>IT failure is not a matter of if — it is a matter of when.</h2>
        <p class="lead">Every hour of downtime costs an organization on three fronts at once. Most companies hope their IT will recover. We make it a guarantee.</p>
      </div>
      <div class="grid grid-3">
        <div class="card reveal">
          <div class="card-icon" aria-hidden="true">
            <svg viewBox="0 0 24 24" fill="none" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M3 17l5-6 4 3 6-8"></path><path d="M21 21H3V3"></path></svg>
          </div>
          <h3>Lost revenue</h3>
          <p>Every minute offline is transactions, orders and productivity that never return — quantified in hundreds of thousands per hour for critical systems.</p>
        </div>
        <div class="card reveal reveal-d1">
          <div class="card-icon" aria-hidden="true">
            <svg viewBox="0 0 24 24" fill="none" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M12 3l8 4v5c0 5-3.5 8-8 9-4.5-1-8-4-8-9V7z"></path><path d="M9 12l2 2 4-4"></path></svg>
          </div>
          <h3>Regulatory exposure</h3>
          <p>Banks, hospitals and government face strict mandates for documented recovery. Failure triggers fines and audit findings.</p>
        </div>
        <div class="card reveal reveal-d2">
          <div class="card-icon" aria-hidden="true">
            <svg viewBox="0 0 24 24" fill="none" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="8" r="4"></circle><path d="M4 21c0-4 3.6-6 8-6s8 2 8 6"></path></svg>
          </div>
          <h3>Reputational damage</h3>
          <p>Customers and regulators remember outages. Trust lost in a disruption takes years — and marketing spend — to rebuild.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- ============ CORE CAPABILITIES (tabs) ============ -->
  <section class="section">
    <div class="container">
      <div class="section-head reveal">
        <span class="eyebrow">Core capabilities</span>
        <h2>We turn IT recovery from a hope into a guarantee.</h2>
      </div>
      <div data-tabs class="reveal">
        <div class="tabs" role="tablist" aria-label="Core capabilities">
          <button class="tab-btn" role="tab" aria-selected="true" id="tab-dr" aria-controls="panel-dr">Disaster Recovery</button>
          <button class="tab-btn" role="tab" aria-selected="false" tabindex="-1" id="tab-backup" aria-controls="panel-backup">Backup &amp; Recovery</button>
          <button class="tab-btn" role="tab" aria-selected="false" tabindex="-1" id="tab-policy" aria-controls="panel-policy">Policy &amp; Assessment</button>
          <button class="tab-btn" role="tab" aria-selected="false" tabindex="-1" id="tab-managed" aria-controls="panel-managed">Managed Services</button>
        </div>
        <div class="tab-panel" role="tabpanel" id="panel-dr" aria-labelledby="tab-dr">
          <div class="grid grid-3">
            <div>
              <h4>The challenge</h4>
              <p class="muted" style="margin-top:8px;">A primary site failure with no governed replication strategy means critical services stay down — with recovery improvised under pressure.</p>
            </div>
            <div>
              <h4>Our approach</h4>
              <p class="muted" style="margin-top:8px;">Replication strategies across secondary data centers and cloud — designed, governed and operated. Architecture, resource planning, job configuration, evaluation, training and documentation.</p>
            </div>
            <div>
              <h4>The business value</h4>
              <p class="muted" style="margin-top:8px;">When something goes wrong with your IT — and it will — your business keeps running as if nothing happened.</p>
            </div>
          </div>
          <p style="margin-top:24px;"><a class="text-link" href="<?php echo esc_url( deearops_url('services') ); ?>#disaster-recovery">Disaster Recovery services <span class="arr" aria-hidden="true">→</span></a></p>
        </div>
        <div class="tab-panel" role="tabpanel" id="panel-backup" aria-labelledby="tab-backup" hidden>
          <div class="grid grid-3">
            <div>
              <h4>The challenge</h4>
              <p class="muted" style="margin-top:8px;">Backups that exist but are never verified are assumptions, not protection — discovered only when a restore fails.</p>
            </div>
            <div>
              <h4>Our approach</h4>
              <p class="muted" style="margin-top:8px;">System design, repository sizing, job configuration with verification, recovery validation, training, documentation and tier-2 support — built to the 3-2-1-1-0 rule.</p>
            </div>
            <div>
              <h4>The business value</h4>
              <p class="muted" style="margin-top:8px;">Verified, restorable copies of what the business cannot afford to lose — with evidence, not assumptions.</p>
            </div>
          </div>
          <p style="margin-top:24px;"><a class="text-link" href="<?php echo esc_url( deearops_url('services') ); ?>#backup-recovery">Backup &amp; Recovery services <span class="arr" aria-hidden="true">→</span></a></p>
        </div>
        <div class="tab-panel" role="tabpanel" id="panel-policy" aria-labelledby="tab-policy" hidden>
          <div class="grid grid-3">
            <div>
              <h4>The challenge</h4>
              <p class="muted" style="margin-top:8px;">Without defined RPO and RTO per service, recovery objectives are undocumented hopes — and regulators notice.</p>
            </div>
            <div>
              <h4>Our approach</h4>
              <p class="muted" style="margin-top:8px;">Defining RPO and RTO, building recovery scenarios and runbooks per service, developing operator OLAs, and assessing existing environments.</p>
            </div>
            <div>
              <h4>The business value</h4>
              <p class="muted" style="margin-top:8px;">Recovery promises the board, customers and auditors can rely on — documented, auditable, testable.</p>
            </div>
          </div>
          <p style="margin-top:24px;"><a class="text-link" href="<?php echo esc_url( deearops_url('services') ); ?>#service-levels">Policy &amp; Assessment services <span class="arr" aria-hidden="true">→</span></a></p>
        </div>
        <div class="tab-panel" role="tabpanel" id="panel-managed" aria-labelledby="tab-managed" hidden>
          <div class="grid grid-3">
            <div>
              <h4>The challenge</h4>
              <p class="muted" style="margin-top:8px;">Backup and replication estates need daily operation, monitoring and audit evidence — capacity most IT teams cannot staff around the clock.</p>
            </div>
            <div>
              <h4>Our approach</h4>
              <p class="muted" style="margin-top:8px;">Continuous operation and monitoring, audit-evidence response, periodic evaluation, status reporting and tier-3 vendor escalation.</p>
            </div>
            <div>
              <h4>The business value</h4>
              <p class="muted" style="margin-top:8px;">Accountability that stays — we remain your partner long after go-live, measured against contractual SLAs.</p>
            </div>
          </div>
          <p style="margin-top:24px;"><a class="text-link" href="<?php echo esc_url( deearops_url('services') ); ?>#sla">Managed Services &amp; SLAs <span class="arr" aria-hidden="true">→</span></a></p>
        </div>
      </div>
    </div>
  </section>

  <!-- ============ SERVICE LEVEL MODEL ============ -->
  <section class="section bg-paper">
    <div class="container">
      <div class="section-head reveal">
        <span class="eyebrow">How we deliver</span>
        <h2>Three ways we deliver — one clear scope.</h2>
        <p class="lead">Whether the workload is backup or replication, every engagement follows the same three service levels — with a transparent split between what DeeAROps owns and what the customer provides.</p>
      </div>
      <div class="grid grid-3">
        <div class="card reveal">
          <div class="step-num" aria-hidden="true">01</div>
          <h3>Build</h3>
          <p>Design and implement the backup or replication system for existing IT services — sized, configured, verified and documented.</p>
        </div>
        <div class="card reveal reveal-d1">
          <div class="step-num" aria-hidden="true">02</div>
          <h3>Policy &amp; Assess</h3>
          <p>Define RPO/RTO, recovery scenarios, per-service runbooks and operator OLAs — or assess and improve an existing environment.</p>
        </div>
        <div class="card reveal reveal-d2">
          <div class="step-num" aria-hidden="true">03</div>
          <h3>Managed Service</h3>
          <p>Operate and monitor day to day — evidence response, periodic evaluation, status reporting and tier-3 vendor escalation.</p>
        </div>
      </div>
      <p class="reveal" style="margin-top:32px;"><a class="text-link" href="<?php echo esc_url( deearops_url('services') ); ?>">See the full responsibility matrices <span class="arr" aria-hidden="true">→</span></a></p>
    </div>
  </section>

  <!-- ============ SLA BAND ============ -->
  <section class="section band-navy on-dark">
    <div class="container">
      <div class="section-head reveal">
        <span class="eyebrow">Measured, not promised</span>
        <h2>Every managed engagement is measured against clear, contractual targets — and reported monthly.</h2>
      </div>
      <div class="grid grid-4">
        <div class="reveal">
          <div class="stat-num">99.5%</div>
          <div class="stat-label">Backup success rate</div>
          <div class="stat-sub">of all scheduled backup jobs</div>
        </div>
        <div class="reveal reveal-d1">
          <div class="stat-num">99.9%</div>
          <div class="stat-label">Replication health</div>
          <div class="stat-sub">RPO adherence across sites</div>
        </div>
        <div class="reveal reveal-d2">
          <div class="stat-num">99%</div>
          <div class="stat-label">Recovery-test success</div>
          <div class="stat-sub">verified monthly restores</div>
        </div>
        <div class="reveal reveal-d3">
          <div class="stat-num">24/7</div>
          <div class="stat-label">Monitoring &amp; response</div>
          <div class="stat-sub">for critical incidents</div>
        </div>
      </div>
      <div class="hero-ctas reveal" style="margin-top:48px;">
        <a class="btn btn-primary" href="<?php echo esc_url( deearops_url('solutions') ); ?>">Explore SLA commitments</a>
      </div>
    </div>
  </section>

  <!-- ============ TECHNOLOGY & SOLUTIONS ECOSYSTEM ============ -->
  <section class="section" id="ecosystem">
    <div class="container">
      <div class="section-head center reveal" style="margin-inline:auto;text-align:center;">
        <span class="eyebrow">Technology &amp; Solutions Ecosystem</span>
        <h2>Powered by the World's Leading Technology Ecosystem</h2>
        <p class="lead">We combine industry-leading technologies, platforms, and strategic partnerships to design, implement, operate, and protect mission-critical enterprise environments.</p>
      </div>

      <div class="eco-filters reveal" role="tablist" aria-label="Filter technologies by category">
        <button type="button" class="eco-filter" data-filter="all" role="tab" aria-selected="true">All</button>
        <button type="button" class="eco-filter" data-filter="cloud" role="tab" aria-selected="false">Cloud &amp; Hybrid Cloud</button>
        <button type="button" class="eco-filter" data-filter="dc" role="tab" aria-selected="false">Data Center &amp; Virtualization</button>
        <button type="button" class="eco-filter" data-filter="storage" role="tab" aria-selected="false">Storage &amp; Data Protection</button>
        <button type="button" class="eco-filter" data-filter="backup" role="tab" aria-selected="false">Backup &amp; Disaster Recovery</button>
        <button type="button" class="eco-filter" data-filter="security" role="tab" aria-selected="false">Cybersecurity &amp; Network Security</button>
        <button type="button" class="eco-filter" data-filter="infra" role="tab" aria-selected="false">Enterprise Infrastructure</button>
        <button type="button" class="eco-filter" data-filter="monitoring" role="tab" aria-selected="false">Monitoring &amp; IT Operations</button>
        <button type="button" class="eco-filter" data-filter="database" role="tab" aria-selected="false">Database &amp; Enterprise Platforms</button>
      </div>

      <div class="eco-grid reveal">
        <button type="button" class="eco-card" data-category="cloud" data-cat-label="Cloud &amp; Hybrid Cloud">
          <span class="eco-mark" style="--eco-c:#0078D4" aria-hidden="true">Az</span>
          <span class="eco-name">Microsoft Azure</span>
          <span class="eco-hint">We design and operate Azure Site Recovery, Azure Backup and hybrid connectivity so Azure workloads meet the same recovery objectives as on-premises systems.</span>
        </button>
        <button type="button" class="eco-card" data-category="cloud" data-cat-label="Cloud &amp; Hybrid Cloud">
          <span class="eco-mark" style="--eco-c:#FF9900" aria-hidden="true">AWS</span>
          <span class="eco-name">Amazon Web Services</span>
          <span class="eco-hint">We extend the same 3-2-1-1-0 discipline to AWS — cross-region replication, immutable backup copies and tested failover runbooks.</span>
        </button>
        <button type="button" class="eco-card" data-category="cloud" data-cat-label="Cloud &amp; Hybrid Cloud">
          <span class="eco-mark" style="--eco-c:#4285F4" aria-hidden="true">GCP</span>
          <span class="eco-name">Google Cloud</span>
          <span class="eco-hint">Google Cloud sits inside the same vendor-neutral protection model as every other platform we operate — consistent policy, replication and recovery testing.</span>
        </button>
        <button type="button" class="eco-card" data-category="cloud" data-cat-label="Cloud &amp; Hybrid Cloud">
          <span class="eco-mark" style="--eco-c:#C74634" aria-hidden="true">OCI</span>
          <span class="eco-name">Oracle Cloud Infrastructure</span>
          <span class="eco-hint">For Oracle-centric estates we combine OCI-native tooling with Oracle Data Guard and our own backup discipline for a tested, known recovery state.</span>
        </button>
        <button type="button" class="eco-card" data-category="dc" data-cat-label="Data Center &amp; Virtualization">
          <span class="eco-mark" style="--eco-c:#717D85" aria-hidden="true">VMw</span>
          <span class="eco-name">VMware</span>
          <span class="eco-hint">VMware is core to the majority of estates we protect — from vSphere backup integration to Site Recovery Manager-based failover.</span>
        </button>
        <button type="button" class="eco-card" data-category="dc" data-cat-label="Data Center &amp; Virtualization">
          <span class="eco-mark" style="--eco-c:#024DA1" aria-hidden="true">Ntx</span>
          <span class="eco-name">Nutanix</span>
          <span class="eco-hint">We design backup and replication for Nutanix AHV and hyperconverged estates to the same recovery-objective discipline applied across every platform.</span>
        </button>
        <button type="button" class="eco-card" data-category="dc" data-cat-label="Data Center &amp; Virtualization">
          <span class="eco-mark" style="--eco-c:#EE0000" aria-hidden="true">RHT</span>
          <span class="eco-name">Red Hat OpenShift</span>
          <span class="eco-hint">From Red Hat Enterprise Linux and virtualization to OpenShift container platforms, we bring consistent backup and recovery testing to Red Hat estates.</span>
        </button>
        <button type="button" class="eco-card" data-category="storage" data-cat-label="Storage &amp; Data Protection">
          <span class="eco-mark" style="--eco-c:#0067C5" aria-hidden="true">NtA</span>
          <span class="eco-name">NetApp</span>
          <span class="eco-hint">We operate NetApp storage replication alongside our backup platforms, so storage-layer resilience and application-consistent recovery work together.</span>
        </button>
        <button type="button" class="eco-card" data-category="storage" data-cat-label="Storage &amp; Data Protection">
          <span class="eco-mark" style="--eco-c:#FF6D3A" aria-hidden="true">Pure</span>
          <span class="eco-name">Pure Storage</span>
          <span class="eco-hint">We integrate Pure Storage replication into wider recovery designs, matching storage performance to the recovery-time objectives the business needs.</span>
        </button>
        <button type="button" class="eco-card" data-category="backup" data-cat-label="Backup &amp; Disaster Recovery">
          <span class="eco-mark" style="--eco-c:#00B336" aria-hidden="true">Vee</span>
          <span class="eco-name">Veeam</span>
          <span class="eco-hint">Veeam is one of our core backup and replication platforms — configured to the 3-2-1-1-0 rule, with recovery verified on a schedule, not assumed.</span>
        </button>
        <button type="button" class="eco-card" data-category="backup" data-cat-label="Backup &amp; Disaster Recovery">
          <span class="eco-mark" style="--eco-c:#E31937" aria-hidden="true">CV</span>
          <span class="eco-name">Commvault</span>
          <span class="eco-hint">For larger, heterogeneous estates we design and operate Commvault backup policy across applications, databases and virtual infrastructure.</span>
        </button>
        <button type="button" class="eco-card" data-category="security" data-cat-label="Cybersecurity &amp; Network Security">
          <span class="eco-mark" style="--eco-c:#EE3124" aria-hidden="true">Ftn</span>
          <span class="eco-name">Fortinet</span>
          <span class="eco-hint">We align backup and DR designs with Fortinet security controls so the recovery path is never the weak link in the architecture.</span>
        </button>
        <button type="button" class="eco-card" data-category="security" data-cat-label="Cybersecurity &amp; Network Security">
          <span class="eco-mark" style="--eco-c:#E3241B" aria-hidden="true">CP</span>
          <span class="eco-name">Check Point</span>
          <span class="eco-hint">We factor Check Point security architecture into recovery-site design, so failover environments inherit production's security posture.</span>
        </button>
        <button type="button" class="eco-card" data-category="security" data-cat-label="Cybersecurity &amp; Network Security">
          <span class="eco-mark" style="--eco-c:#E4002B" aria-hidden="true">F5</span>
          <span class="eco-name">F5</span>
          <span class="eco-hint">F5 application delivery is part of how we keep services reachable through a failover event — not just data recovered, but the path to it kept alive.</span>
        </button>
        <button type="button" class="eco-card" data-category="security" data-cat-label="Cybersecurity &amp; Network Security">
          <span class="eco-mark" style="--eco-c:#4FB74A" aria-hidden="true">Inf</span>
          <span class="eco-name">Infoblox</span>
          <span class="eco-hint">Core network services like DNS and DHCP have to fail over cleanly too — we account for Infoblox-managed services in every DR runbook we design.</span>
        </button>
        <button type="button" class="eco-card" data-category="infra" data-cat-label="Enterprise Infrastructure">
          <span class="eco-mark" style="--eco-c:#1BA0D7" aria-hidden="true">Csco</span>
          <span class="eco-name">Cisco</span>
          <span class="eco-hint">Cisco networking and data-center infrastructure underpins many of the estates we operate — protected and failed over as part of the same recovery plan.</span>
        </button>
        <button type="button" class="eco-card" data-category="infra" data-cat-label="Enterprise Infrastructure">
          <span class="eco-mark" style="--eco-c:#007DB8" aria-hidden="true">Dell</span>
          <span class="eco-name">Dell Technologies</span>
          <span class="eco-hint">From PowerEdge servers to PowerProtect and Dell EMC storage, we design backup and DR around Dell infrastructure already in place.</span>
        </button>
        <button type="button" class="eco-card" data-category="monitoring" data-cat-label="Monitoring &amp; IT Operations">
          <span class="eco-mark" style="--eco-c:#FF7615" aria-hidden="true">ME</span>
          <span class="eco-name">ManageEngine</span>
          <span class="eco-hint">ManageEngine tooling gives us the operational visibility to monitor backup jobs, replication health and recovery readiness continuously.</span>
        </button>
        <button type="button" class="eco-card" data-category="monitoring" data-cat-label="Monitoring &amp; IT Operations">
          <span class="eco-mark" style="--eco-c:#F7941D" aria-hidden="true">SW</span>
          <span class="eco-name">SolarWinds</span>
          <span class="eco-hint">SolarWinds monitoring feeds the same audit-ready reporting we provide on every engagement — proof protection is working, not just configured.</span>
        </button>
        <button type="button" class="eco-card" data-category="database" data-cat-label="Database &amp; Enterprise Platforms">
          <span class="eco-mark" style="--eco-c:#C74634" aria-hidden="true">Ora</span>
          <span class="eco-name">Oracle Database</span>
          <span class="eco-hint">Oracle Data Guard and our own backup discipline combine to protect Oracle Database estates to the same objectives as every other critical system.</span>
        </button>
        <button type="button" class="eco-card" data-category="database" data-cat-label="Database &amp; Enterprise Platforms">
          <span class="eco-mark" style="--eco-c:#A4373A" aria-hidden="true">SQL</span>
          <span class="eco-name">Microsoft SQL Server</span>
          <span class="eco-hint">We design SQL Server protection around Always On Availability Groups and application-consistent backup for data integrity on recovery.</span>
        </button>
        <button type="button" class="eco-card" data-category="database" data-cat-label="Database &amp; Enterprise Platforms">
          <span class="eco-mark" style="--eco-c:#0FAAFF" aria-hidden="true">SAP</span>
          <span class="eco-name">SAP</span>
          <span class="eco-hint">SAP and SAP HANA landscapes get the same Business Impact Analysis-driven treatment as every other critical system we protect.</span>
        </button>
      </div>

      <p class="reveal" style="margin-top:32px;text-align:center;"><a class="text-link" href="<?php echo esc_url( deearops_url('technology') ); ?>">Explore the full technology ecosystem <span class="arr" aria-hidden="true">→</span></a></p>
    </div>
  </section>

  <dialog class="eco-modal" id="eco-modal" aria-labelledby="eco-modal-title">
    <div class="eco-modal-inner">
      <button type="button" class="eco-modal-close" aria-label="Close">×</button>
      <span class="eco-mark" id="eco-modal-mark" aria-hidden="true"></span>
      <span class="pill" id="eco-modal-cat"></span>
      <h3 id="eco-modal-title"></h3>
      <p id="eco-modal-desc"></p>
      <a class="btn btn-primary" href="<?php echo esc_url( deearops_url('contact') ); ?>">Talk to Our Experts</a>
    </div>
  </dialog>

  <!-- ============ INDUSTRIES ============ -->
  <section class="section bg-paper">
    <div class="container">
      <div class="section-head reveal">
        <span class="eyebrow">Industries</span>
        <h2>Where downtime costs the most.</h2>
        <p class="lead">We prioritize the sectors where the cost of downtime, regulatory pressure and the duty to recover are highest.</p>
      </div>
      <div class="grid grid-3">
        <a class="card reveal" href="<?php echo esc_url( deearops_url('industries') ); ?>#banking" style="text-decoration:none;">
          <h3>Banking &amp; Finance</h3>
          <p>Strict mandates for documented recovery. Downtime measured in transactions lost per minute.</p>
          <span class="text-link">Industry view <span class="arr" aria-hidden="true">→</span></span>
        </a>
        <a class="card reveal reveal-d1" href="<?php echo esc_url( deearops_url('industries') ); ?>#healthcare" style="text-decoration:none;">
          <h3>Healthcare</h3>
          <p>Patient records and clinical systems that can never be unavailable — or unprotected.</p>
          <span class="text-link">Industry view <span class="arr" aria-hidden="true">→</span></span>
        </a>
        <a class="card reveal reveal-d2" href="<?php echo esc_url( deearops_url('industries') ); ?>#government" style="text-decoration:none;">
          <h3>Government</h3>
          <p>Citizen services and audit obligations that demand provable, tested recovery.</p>
          <span class="text-link">Industry view <span class="arr" aria-hidden="true">→</span></span>
        </a>
        <a class="card reveal" href="<?php echo esc_url( deearops_url('industries') ); ?>#telecom" style="text-decoration:none;">
          <h3>Telecom &amp; ISPs</h3>
          <p>Always-on infrastructure where every minute offline is immediately visible to customers.</p>
          <span class="text-link">Industry view <span class="arr" aria-hidden="true">→</span></span>
        </a>
        <a class="card reveal reveal-d1" href="<?php echo esc_url( deearops_url('industries') ); ?>#insurance-energy" style="text-decoration:none;">
          <h3>Insurance &amp; Energy</h3>
          <p>Regulated, high-stakes operations with strict continuity and audit requirements.</p>
          <span class="text-link">Industry view <span class="arr" aria-hidden="true">→</span></span>
        </a>
        <a class="card reveal reveal-d2" href="<?php echo esc_url( deearops_url('industries') ); ?>#education-retail" style="text-decoration:none;">
          <h3>Education &amp; Retail</h3>
          <p>Growing estates where a right-sized, policy-driven approach delivers protection without overspend.</p>
          <span class="text-link">Industry view <span class="arr" aria-hidden="true">→</span></span>
        </a>
      </div>
    </div>
  </section>

  <!-- ============ WHY DEEAROPS ============ -->
  <section class="section">
    <div class="container">
      <div class="two-col">
        <div class="reveal sticky-aside">
          <span class="eyebrow">Why DeeAROps</span>
          <h2>100% vendor-agnostic. Every recommendation earns its place.</h2>
          <p class="lead" style="margin-top:16px;">We are not aligned with any single software vendor, platform or cloud provider. Recommendations are driven by customer requirements, security, scalability and best practice — not by vendor incentives.</p>
          <div class="hero-ctas">
            <a class="btn btn-secondary" href="<?php echo esc_url( deearops_url('about') ); ?>">How we work</a>
          </div>
        </div>
        <div>
          <div class="value-row reveal">
            <div class="idx" aria-hidden="true">✓</div>
            <div>
              <h4>Vendor independent</h4>
              <p class="muted" style="margin-top:4px;">No reseller margins or quotas driving the architecture.</p>
            </div>
          </div>
          <div class="value-row reveal">
            <div class="idx" aria-hidden="true">✓</div>
            <div>
              <h4>Technology agnostic</h4>
              <p class="muted" style="margin-top:4px;">Fluent across every major platform, not locked to one stack.</p>
            </div>
          </div>
          <div class="value-row reveal">
            <div class="idx" aria-hidden="true">✓</div>
            <div>
              <h4>Best-of-breed solutions</h4>
              <p class="muted" style="margin-top:4px;">The right tool for the workload — matched to fit, not familiarity.</p>
            </div>
          </div>
          <div class="value-row reveal">
            <div class="idx" aria-hidden="true">✓</div>
            <div>
              <h4>Customer-centric architecture</h4>
              <p class="muted" style="margin-top:4px;">Designed around business objectives, not vendor roadmaps.</p>
            </div>
          </div>
          <div class="value-row reveal">
            <div class="idx" aria-hidden="true">✓</div>
            <div>
              <h4>An extension of your team</h4>
              <p class="muted" style="margin-top:4px;">We operate on behalf of partners and IT service providers — delivering under their standards, brand and account relationships.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ============ FINAL CTA ============ -->
  <section class="section band-navy on-dark cta-band">
    <div class="container reveal">
      <span class="eyebrow">Let's talk</span>
      <h2 class="display">Turn recovery into a guarantee.</h2>
      <p class="lead">Tell us what your business cannot afford to lose. A DeeAROps specialist will show you how it stays protected — designed, tested and managed.</p>
      <div class="hero-ctas">
        <a class="btn btn-primary" href="<?php echo esc_url( deearops_url('contact') ); ?>">Talk to Our Experts</a>
        <a class="btn btn-secondary" href="<?php echo esc_url( deearops_url('services') ); ?>">Explore Our Capabilities</a>
      </div>
    </div>
  </section>

</main>

<?php get_footer(); ?>
