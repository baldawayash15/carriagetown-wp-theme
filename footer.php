<!-- Footer Starts Here -->
<footer>
  <div class="container">
    <div class="row">
      <div class="col-md-3 footer-item">
        <img class="img-fluid logo" src="<?php echo bloginfo( 'template_directory' ) . '/assets/images/white-logo.png' ?>" />

        <p class="mt-3">
          Your content goes here Your content goes here Your content goes
          here Your content goes her
        </p>

        <ul class="social-icons">
            <?php 
                if( get_theme_mod( 'cc_facebook_handle' ) ) { ?> 
                    <li>
                      <a href="<?php echo get_theme_mod( 'cc_facebook_handle' ) ?>" target="_blank" rel="noopener noreferrer">
                        <i class="fa fa-facebook"></i>
                      </a>
                   </li>
          <?php  } ?>
          </li>
        </ul>
      </div>

      <div class="col-md-4 footer-item">
        <h4>Contact Us</h4>

        <p>
          <?php 
                if( get_theme_mod( 'cc_address_handle' ) ) { ?> 
                      <a href="https://goo.gl/maps/mzuMRAubrfxqDBWG7" target="_blank" rel="noopener noreferrer">
                        <i class="fa fa-map-marker mr-2"></i> <?php echo get_theme_mod( 'cc_address_handle' ); ?>
                      </a>
          <?php  } ?>
        </p>

        <p>
          <?php 
                if( get_theme_mod( 'cc_telephone_handle' ) ) { ?> 
                      <a href="tel:<?php echo get_theme_mod( 'cc_telephone_handle' );  ?>" target="_blank" rel="noopener">
                        <i class="fa fa-phone mr-2"></i> <?php echo get_theme_mod( 'cc_telephone_handle' ); ?>
                      </a>
          <?php  } ?>
        </p>

        <p>
          <?php 
                if( get_theme_mod( 'cc_email_handle' ) ) { ?> 
                      <a href="tel:<?php echo get_theme_mod( 'cc_email_handle' );  ?>" target="_blank" rel="noopener">
                        <i class="fa fa-envelope mr-2"></i> <?php echo get_theme_mod( 'cc_email_handle' ); ?>
                      </a>
          <?php  } ?>
        </p>
      </div>

      <div class="col-md-2 footer-item">
        <h4>Useful Links</h4>
        <?php 
              if( has_nav_menu( 'footer-menu' ) ) {
                wp_nav_menu( array(
                    'theme_location' => 'footer-menu',
                    'container' => 'ul',
                    'menu_class' =>  'menu-list',
                    'fallback_cb' => false,
                    'depth' => 1,
                 ));
              }
            ?>
      </div>

      <div class="col-md-3 footer-item last-item">
        <h4>Get In Touch</h4>

        <div class="contact-form">
          <form id="contact footer-contact" action="" method="post">
            <!-- <div class="row">
              <div class="col-lg-12 col-md-12 col-sm-12">
                <fieldset>
                  <input
                    name="name"
                    type="text"
                    class="form-control"
                    id="name"
                    placeholder="Full Name"
                    required=""
                  />
                </fieldset>
              </div>

              <div class="col-lg-12 col-md-12 col-sm-12">
                <fieldset>
                  <input
                    name="email"
                    type="text"
                    class="form-control"
                    id="email"
                    pattern="[^ @]*@[^ @]*"
                    placeholder="E-Mail Address"
                    required=""
                  />
                </fieldset>
              </div>

              <div class="col-lg-12">
                <fieldset>
                  <textarea
                    name="message"
                    rows="6"
                    class="form-control"
                    id="message"
                    placeholder="Your Message"
                    required=""
                  ></textarea>
                </fieldset>
              </div>

              <div class="col-lg-12">
                <fieldset>
                  <button
                    type="submit"
                    id="form-submit"
                    class="filled-button"
                  >
                    Send Message
                  </button>
                </fieldset>
              </div>
            </div> -->
            <?php 
              echo do_shortcode( '[contact-form-7 id="26" title="Get In Touch Form"]' );
            ?>
          </form>
        </div>
      </div>
    </div>
  </div>
</footer>

<div class="sub-footer">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <p class="m-0 text-center text-white">
          &copy; <?php echo date_i18n( 'Y' ); ?>
          <a class="text-white font-weight-bold" href="<?php echo esc_url( home_url( '/' ) ); ?>"
            ><?php echo get_bloginfo( 'name' ); ?></a
          >. All Rights Reserved.
        </p>
      </div>
    </div>
  </div>
</div>

<!-- Back to Top -->

<a href="#" class="btn btn-lg back-to-top"
  ><i class="fa fa-angle-double-up"></i
></a>

<?php wp_footer(); ?>
</body>