<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
  <meta
    name="viewport"
    content="width=device-width, initial-scale=1, shrink-to-fit=no"
  />
  <meta name="description" content="This is a carriagetown cabinets website" />
  <meta name="author" content="Carriagetown Cabinets" />
<?php wp_head(); ?>
</head>

  <body <?php body_class(); ?>>
    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
      <div class="jumper">
        <div></div>
        <div></div>
        <div></div>
      </div>
    </div>

    <!-- ***** Preloader End ***** -->

    <!-- Header -->

    <div class="sub-header">
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-xs-12">
            <ul class="left-info">
              <?php 
                if( get_theme_mod( 'cc_email_handle' ) ) { ?> 
                      <li>
                        <a href="mailto:<?php echo get_theme_mod( 'cc_email_handle' ); ?>"
                          ><i class="fa fa-envelope-o"></i
                          ><?php echo get_theme_mod( 'cc_email_handle' ); ?></a
                        >
                    </li>
               <?php  } ?>

               <?php 
                if( get_theme_mod( 'cc_telephone_handle' ) ) { ?> 
                      <li>
                        <a href="tel:<?php echo get_theme_mod( 'cc_telephone_handle' ); ?>"
                          ><i class="fa fa-phone"></i
                          ><?php echo get_theme_mod( 'cc_telephone_handle' ); ?></a
                        >
                    </li>
               <?php  } ?>
            </ul>
          </div>

          <div class="col-md-4">
            <ul class="right-icons">
              <?php 
                if( get_theme_mod( 'cc_facebook_handle' ) ) { ?> 
                      <li>
                        <a href="<?php echo get_theme_mod( 'cc_facebook_handle' ); ?>" target="_blank" rel="noopener noreferrer">
                         <i class="fa fa-facebook"></i>
                       </a>
                    </li>
               <?php  } ?>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <header class="">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
             <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>">
                  <img class="img-fluid logo" src="<?php echo bloginfo( 'template_directory' ) . '/assets/images/logo.jpg' ?>" alt="<?php echo get_bloginfo( 'name' ); ?>"/>
             </a>
                              
          <button
            class="navbar-toggler"
            type="button"
            data-toggle="collapse"
            data-target="#navbarResponsive"
            aria-controls="navbarResponsive"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarResponsive">
            <?php 
              if( has_nav_menu( 'primary-menu' ) ) {
                wp_nav_menu( array(
                    'theme_location' => 'primary-menu',
                    'container' => 'ul',
                    'menu_class' =>  'navbar-nav ml-auto',
                    'fallback_cb' => false,
                    'depth' => 1,
                    'add_li_class' => 'nav-item',
                    'link_class' => 'nav-link'
                 ));
              }
            ?>
          </div>
        </div>
      </nav>
    </header>

    <!-- Page Content -->