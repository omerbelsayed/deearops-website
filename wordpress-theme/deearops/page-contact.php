<?php
/**
 * Template for the 'contact' page — ported 1:1 from contact.html.
 */
get_header();
?>

<main id="main">

  <section class="page-hero on-dark">
    <div class="container">
      <span class="eyebrow">Contact</span>
      <h1>Turn recovery into a guarantee.</h1>
      <p class="lead">Tell us what your business cannot afford to lose. A DeeAROps specialist will respond with a clear next step — an assessment, a scope, or simply a straight answer.</p>
    </div>
  </section>

  <section class="section">
    <div class="container">
      <div class="two-col">
        <!-- Contact details -->
        <div class="sticky-aside">
          <span class="eyebrow reveal">Reach us directly</span>
          <div class="value-row reveal">
            <div class="idx" aria-hidden="true">@</div>
            <div>
              <h4>Email</h4>
              <p style="margin-top:4px;"><a href="mailto:info@deearops.com">info@deearops.com</a></p>
            </div>
          </div>
          <div class="value-row reveal">
            <div class="idx" aria-hidden="true">☏</div>
            <div>
              <h4>Phone</h4>
              <p style="margin-top:4px;"><a href="tel:+971505978576">+971 505 978 576</a><br><a href="tel:+249912864609">+249 912 864 609</a></p>
            </div>
          </div>
          <div class="value-row reveal">
            <div class="idx" aria-hidden="true">⌂</div>
            <div>
              <h4>Address</h4>
              <p style="margin-top:4px;">Riyadh, Olaya Street<br>Saudi Arabia</p>
            </div>
          </div>
          <div class="value-row reveal">
            <div class="idx" aria-hidden="true">◷</div>
            <div>
              <h4>Coverage</h4>
              <p style="margin-top:4px;">24/7 follow-the-sun — EMEA, Americas, Africa, APAC. Remote and on-site.</p>
            </div>
          </div>
        </div>

        <!-- Form -->
        <div class="feature-panel reveal">
          <h2 style="font-size:1.5rem;">Talk to Our Experts</h2>
          <p class="muted" style="margin:8px 0 32px;">All fields marked <span class="req">*</span> are required.</p>
          <form id="contact-form" novalidate>
            <div class="form-grid">
              <div class="form-field">
                <label for="cf-name">Full name <span class="req" aria-hidden="true">*</span></label>
                <input id="cf-name" name="name" type="text" autocomplete="name" required aria-describedby="error-name">
                <p class="field-error" id="error-name" role="alert"></p>
              </div>
              <div class="form-field">
                <label for="cf-company">Company <span class="req" aria-hidden="true">*</span></label>
                <input id="cf-company" name="company" type="text" autocomplete="organization" required aria-describedby="error-company">
                <p class="field-error" id="error-company" role="alert"></p>
              </div>
              <div class="form-field">
                <label for="cf-email">Business email <span class="req" aria-hidden="true">*</span></label>
                <input id="cf-email" name="email" type="email" autocomplete="email" inputmode="email" placeholder="name@company.com" required aria-describedby="error-email">
                <p class="field-error" id="error-email" role="alert"></p>
              </div>
              <div class="form-field">
                <label for="cf-phone">Phone number</label>
                <input id="cf-phone" name="phone" type="tel" autocomplete="tel" inputmode="tel" aria-describedby="error-phone">
                <p class="field-error" id="error-phone" role="alert"></p>
              </div>
              <div class="form-field full">
                <label for="cf-interest">Area of interest <span class="req" aria-hidden="true">*</span></label>
                <select id="cf-interest" name="interest" required aria-describedby="error-interest">
                  <option value="">Select an area…</option>
                  <option>Disaster Recovery</option>
                  <option>Backup &amp; Recovery</option>
                  <option>Policy &amp; Assessment</option>
                  <option>Managed Services</option>
                  <option>Partnership / White-label delivery</option>
                  <option>Other</option>
                </select>
                <p class="field-error" id="error-interest" role="alert"></p>
              </div>
              <div class="form-field full">
                <label for="cf-message">Message <span class="req" aria-hidden="true">*</span></label>
                <textarea id="cf-message" name="message" rows="5" required aria-describedby="error-message" placeholder="Tell us about your environment, your critical services, or the challenge you're facing."></textarea>
                <p class="field-error" id="error-message" role="alert"></p>
              </div>
            </div>
            <div style="display:flex;flex-wrap:wrap;gap:16px;align-items:center;margin-top:32px;">
              <button class="btn btn-primary" type="submit">
                <span class="spinner" aria-hidden="true"></span>
                Send message
              </button>
              <p class="form-note">We respond within one business day.</p>
            </div>
            <div class="form-status" id="form-status" role="status" aria-live="polite"></div>
          </form>
        </div>
      </div>
    </div>
  </section>

</main>

<?php get_footer(); ?>
