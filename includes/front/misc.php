<?php 

function cc_footer() { ?>
    <script language="text/Javascript">
        cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field

        function clearField(t) {
            //declaring the array outside of the

            if (!cleared[t.id]) {
            // function makes it static and global

            cleared[t.id] = 1; // you could use true and false, but that's more typing

            t.value = ''; // with more chance of typos

            t.style.color = '#fff';
    }
  }
<?php }

function cc_add_additional_class_on_li($classes, $item, $args) {
  if( isset( $args->add_li_class ) ) {
      $classes[] = $args->add_li_class;
  }
  return $classes;
}

function cc_add_menu_link_class( $atts, $item, $args ) {
  if ( property_exists( $args, 'link_class') ) {
    $atts['class'] = $args->link_class;
  }
  return $atts;
}