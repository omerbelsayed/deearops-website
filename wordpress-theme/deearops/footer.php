<?php
/**
 * Site footer — ported 1:1 from the static site's shared footer markup.
 */
?>
<footer class="site-footer">
  <div class="container">
    <div class="footer-main">
      <div class="footer-brand">
        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/logo-mark-white.png' ); ?>" alt="DeeAROps logo" width="80" height="44">
        <p class="tagline">Your Data Protected. Your Business Uninterrupted.</p>
      </div>
      <nav class="footer-col" aria-label="Company">
        <h4>Company</h4>
        <ul>
          <li><a href="<?php echo esc_url( deearops_url( 'about' ) ); ?>">About DeeAROps</a></li>
          <li><a href="<?php echo esc_url( deearops_url( 'industries' ) ); ?>">Industries</a></li>
          <li><a href="<?php echo esc_url( deearops_url( 'insights' ) ); ?>">Insights</a></li>
          <li><a href="<?php echo esc_url( deearops_url( 'contact' ) ); ?>">Contact</a></li>
        </ul>
      </nav>
      <nav class="footer-col" aria-label="Services">
        <h4>Services</h4>
        <ul>
          <li><a href="<?php echo esc_url( deearops_url( 'services' ) ); ?>#disaster-recovery">Disaster Recovery</a></li>
          <li><a href="<?php echo esc_url( deearops_url( 'services' ) ); ?>#backup-recovery">Backup &amp; Recovery</a></li>
          <li><a href="<?php echo esc_url( deearops_url( 'services' ) ); ?>#service-levels">Policy &amp; Assessment</a></li>
          <li><a href="<?php echo esc_url( deearops_url( 'services' ) ); ?>#sla">Managed Services</a></li>
        </ul>
      </nav>
      <div class="footer-col">
        <h4>Contact</h4>
        <ul>
          <li><a href="mailto:info@deearops.com">info@deearops.com</a></li>
          <li><a href="tel:+971505978576">+971 505 978 576</a></li>
          <li><a href="tel:+249912864609">+249 912 864 609</a></li>
          <li>Riyadh, Olaya Street<br>Saudi Arabia</li>
        </ul>
      </div>
    </div>
    <div class="footer-bottom">
      <span>&copy; <?php echo esc_html( date( 'Y' ) ); ?> DeeAROps. All rights reserved.</span>
      <span>Data Protection &middot; Backup &middot; Disaster Recovery &middot; Replication</span>
    </div>
  </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
