<?php
/**
 * Template for the 'technology' page — ported 1:1 from technology.html.
 */
get_header();
?>

<main id="main">

  <section class="page-hero on-dark">
    <div class="container">
      <span class="eyebrow">Technology ecosystem</span>
      <h1>Cross-platform by design.</h1>
      <p class="lead">We protect critical data wherever it lives — on-premises and across every major cloud. 100% vendor-agnostic: every recommendation earns its place.</p>
    </div>
  </section>

  <!-- Supported platforms -->
  <section class="section">
    <div class="container">
      <div class="section-head reveal">
        <span class="eyebrow">Coverage</span>
        <h2>Supported platforms</h2>
        <p class="lead">Hybrid and multi-cloud across every major platform — one protection discipline spanning all of them.</p>
      </div>
      <div class="grid grid-4">
        <div class="card reveal"><h4>On-Premises</h4><p>Traditional and virtualized data-center estates.</p></div>
        <div class="card reveal reveal-d1"><h4>Private Cloud</h4><p>Dedicated environments under your governance.</p></div>
        <div class="card reveal reveal-d2"><h4>Microsoft Azure</h4><p>Native protection and replication into Azure.</p></div>
        <div class="card reveal reveal-d3"><h4>Amazon Web Services</h4><p>Backup and DR workloads on AWS.</p></div>
        <div class="card reveal"><h4>Google Cloud</h4><p>Cross-platform protection on GCP.</p></div>
        <div class="card reveal reveal-d1"><h4>Oracle OCI</h4><p>Protection for Oracle-centric estates.</p></div>
        <div class="card reveal reveal-d2"><h4>Alibaba Cloud</h4><p>Coverage where your region requires it.</p></div>
        <div class="card reveal reveal-d3"><h4>Hybrid &amp; Multi-Cloud</h4><p>One recovery policy across all of the above.</p></div>
      </div>
    </div>
  </section>

  <!-- ============ TECHNOLOGY & SOLUTIONS ECOSYSTEM ============ -->
  <section class="section bg-paper" id="ecosystem">
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

  <!-- Also across the stack (depth beyond the featured partners above) -->
  <section class="section">
    <div class="container">
      <div class="section-head reveal">
        <span class="eyebrow">Full-stack depth</span>
        <h2>Also across the stack.</h2>
        <p class="lead">Beyond our featured technology partners above, we operate consistently across the following platforms, applications and toolsets.</p>
      </div>

      <div class="reveal">
        <h3>Infrastructure, virtualization &amp; additional cloud</h3>
        <div class="badge-grid" style="margin-top:16px;">
          <span class="tech-badge"><span class="abbr" aria-hidden="true">Omn</span>Omnissa</span>
          <span class="tech-badge"><span class="abbr" aria-hidden="true">H-V</span>Microsoft Hyper-V</span>
          <span class="tech-badge"><span class="abbr" aria-hidden="true">Ctx</span>Citrix</span>
          <span class="tech-badge"><span class="abbr" aria-hidden="true">HPE</span>HPE</span>
          <span class="tech-badge"><span class="abbr" aria-hidden="true">Lnv</span>Lenovo</span>
          <span class="tech-badge"><span class="abbr" aria-hidden="true">Jnp</span>Juniper</span>
          <span class="tech-badge"><span class="abbr" aria-hidden="true">Hwi</span>Huawei</span>
          <span class="tech-badge"><span class="abbr" aria-hidden="true">Ali</span>Alibaba Cloud</span>
          <span class="tech-badge"><span class="abbr" aria-hidden="true">IBM</span>IBM Cloud</span>
        </div>
      </div>

      <hr class="divider">

      <div class="reveal">
        <h3>Operating systems &amp; databases</h3>
        <div class="badge-grid" style="margin-top:16px;">
          <span class="tech-badge"><span class="abbr" aria-hidden="true">WS</span>Windows Server</span>
          <span class="tech-badge"><span class="abbr" aria-hidden="true">RHL</span>Red Hat Enterprise Linux</span>
          <span class="tech-badge"><span class="abbr" aria-hidden="true">Ubu</span>Ubuntu</span>
          <span class="tech-badge"><span class="abbr" aria-hidden="true">SUSE</span>SUSE</span>
          <span class="tech-badge"><span class="abbr" aria-hidden="true">OL</span>Oracle Linux</span>
          <span class="tech-badge"><span class="abbr" aria-hidden="true">UX</span>UNIX</span>
          <span class="tech-badge"><span class="abbr" aria-hidden="true">PG</span>PostgreSQL</span>
          <span class="tech-badge"><span class="abbr" aria-hidden="true">My</span>MySQL</span>
          <span class="tech-badge"><span class="abbr" aria-hidden="true">MDB</span>MariaDB</span>
          <span class="tech-badge"><span class="abbr" aria-hidden="true">Mgo</span>MongoDB</span>
          <span class="tech-badge"><span class="abbr" aria-hidden="true">HANA</span>SAP HANA</span>
        </div>
      </div>

      <hr class="divider">

      <div class="reveal">
        <h3>Enterprise applications &amp; additional backup platforms</h3>
        <div class="badge-grid" style="margin-top:16px;">
          <span class="tech-badge"><span class="abbr" aria-hidden="true">Exc</span>Exchange</span>
          <span class="tech-badge"><span class="abbr" aria-hidden="true">AD</span>Active Directory</span>
          <span class="tech-badge"><span class="abbr" aria-hidden="true">M365</span>Microsoft 365</span>
          <span class="tech-badge"><span class="abbr" aria-hidden="true">OrA</span>Oracle Applications</span>
          <span class="tech-badge"><span class="abbr" aria-hidden="true">Web</span>Web &amp; Middleware</span>
          <span class="tech-badge"><span class="abbr" aria-hidden="true">NBU</span>Veritas NetBackup</span>
          <span class="tech-badge"><span class="abbr" aria-hidden="true">Rbk</span>Rubrik</span>
          <span class="tech-badge"><span class="abbr" aria-hidden="true">Coh</span>Cohesity</span>
          <span class="tech-badge"><span class="abbr" aria-hidden="true">PP</span>Dell PowerProtect</span>
          <span class="tech-badge"><span class="abbr" aria-hidden="true">ISP</span>IBM Spectrum Protect</span>
        </div>
      </div>

      <hr class="divider">

      <div class="reveal">
        <h3>Additional replication &amp; storage</h3>
        <div class="badge-grid" style="margin-top:16px;">
          <span class="tech-badge"><span class="abbr" aria-hidden="true">ASR</span>Azure Site Recovery</span>
          <span class="tech-badge"><span class="abbr" aria-hidden="true">SRM</span>VMware Site Recovery Manager</span>
          <span class="tech-badge"><span class="abbr" aria-hidden="true">Zto</span>Zerto</span>
          <span class="tech-badge"><span class="abbr" aria-hidden="true">VR</span>Veeam Replication</span>
          <span class="tech-badge"><span class="abbr" aria-hidden="true">SR</span>Storage Replication</span>
          <span class="tech-badge"><span class="abbr" aria-hidden="true">ODG</span>Oracle Data Guard</span>
          <span class="tech-badge"><span class="abbr" aria-hidden="true">AO</span>SQL Server Always On</span>
          <span class="tech-badge"><span class="abbr" aria-hidden="true">EMC</span>Dell EMC</span>
          <span class="tech-badge"><span class="abbr" aria-hidden="true">HPE</span>HPE</span>
          <span class="tech-badge"><span class="abbr" aria-hidden="true">IBM</span>IBM Storage</span>
          <span class="tech-badge"><span class="abbr" aria-hidden="true">HV</span>Hitachi Vantara</span>
        </div>
      </div>

      <hr class="divider">

      <div class="reveal">
        <h3>Additional security &amp; monitoring</h3>
        <div class="badge-grid" style="margin-top:16px;">
          <span class="tech-badge"><span class="abbr" aria-hidden="true">PAN</span>Palo Alto Networks</span>
          <span class="tech-badge"><span class="abbr" aria-hidden="true">Sph</span>Sophos</span>
          <span class="tech-badge"><span class="abbr" aria-hidden="true">Ksp</span>Kaspersky</span>
          <span class="tech-badge"><span class="abbr" aria-hidden="true">Def</span>Microsoft Defender</span>
          <span class="tech-badge"><span class="abbr" aria-hidden="true">PRTG</span>PRTG</span>
          <span class="tech-badge"><span class="abbr" aria-hidden="true">Zbx</span>Zabbix</span>
          <span class="tech-badge"><span class="abbr" aria-hidden="true">Grf</span>Grafana</span>
          <span class="tech-badge"><span class="abbr" aria-hidden="true">Prm</span>Prometheus</span>
          <span class="tech-badge"><span class="abbr" aria-hidden="true">SCOM</span>SCOM</span>
        </div>
      </div>
    </div>
  </section>

  <!-- Governance -->
  <section class="section band-navy on-dark">
    <div class="container">
      <div class="section-head reveal">
        <span class="eyebrow">Governance</span>
        <h2>Standards, compliance &amp; best practices</h2>
        <p class="lead">Every engagement is grounded in internationally recognized frameworks — so recovery, security and operations hold up to audit.</p>
      </div>
      <div class="grid grid-4">
        <div class="card reveal">
          <h4>Management systems</h4>
          <p style="margin-top:8px;">ISO 27001 · ISO 22301 · ISO 20000 · ISO 9001</p>
        </div>
        <div class="card reveal reveal-d1">
          <h4>Security &amp; risk</h4>
          <p style="margin-top:8px;">NIST CSF · CIS Controls · PCI DSS · SOC 2 · GDPR</p>
        </div>
        <div class="card reveal reveal-d2">
          <h4>Governance &amp; service management</h4>
          <p style="margin-top:8px;">ITIL · COBIT</p>
        </div>
        <div class="card reveal reveal-d3">
          <h4>Cloud architecture frameworks</h4>
          <p style="margin-top:8px;">Microsoft Cloud Adoption Framework · Microsoft Well-Architected Framework · AWS Well-Architected Framework</p>
        </div>
      </div>
    </div>
  </section>

  <!-- CTA -->
  <section class="section cta-band">
    <div class="container reveal">
      <span class="eyebrow">Vendor-neutral by principle</span>
      <h2 class="display">The right tool for the workload.</h2>
      <p class="lead">No reseller margins. No quotas. Recommendations driven by your requirements, security, scalability and best practice.</p>
      <div class="hero-ctas">
        <a class="btn btn-primary" href="<?php echo esc_url( deearops_url('contact') ); ?>">Talk to Our Experts</a>
      </div>
    </div>
  </section>

</main>

<?php get_footer(); ?>
