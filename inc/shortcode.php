<?php


/**
 * Shortcode [portfolio-s]
 * get_posts
 */
class Portfolio_SC_S
{

  function __construct()
  {
    add_shortcode('portfolio-s', array($this, 'sc_callback'));


  }


  function sc_callback($atts) {


    extract( shortcode_atts( array(
        'post_type'       => 'portfolio',
        'template'        => 'list',
        'id'              => '',
      	'offset'          => 0,
      	'category'        => '',
      	'orderby'         => 'post_date',
      	'order'           => 'DESC',
      	'include'         => '',
      	'exclude'         => '',
      	'meta_key'        => '',
      	'meta_value'      => '',
      	'post_parent'     => '',
        'posts_per_page'  => get_option( 'posts_per_page' ),
        'post_status'     => 'publish',
        'slides_per_view' => 5,
        'size'            => 'thumbnail',
        'show_title'      => '',
        'url'             => '',
  	 ), $atts ) );


     $query = new WP_Query(array(
       'post_type'       => $post_type,
       'offset'          => $offset,
       'posts_per_page'  => $posts_per_page,
       'category'        => $category,
       'orderby'         => $orderby,
       'order'           => $order,
       'include'         => $include,
       'exclude'         => $exclude,
       'meta_key'        => $meta_key,
       'meta_value'      => $meta_value,
       'post_parent'     => $post_parent,
       'post_status'     => $post_status,
     ));

     ob_start();

     if ( $query->have_posts() ):
      include( dirname( __FILE__ ) . '/templates/' . $template . ".php" );
     else:
      echo '<p>Нет данных</p>';
     endif;


     wp_reset_postdata();

     $html = ob_get_contents();
     ob_get_clean();
     return $html;
  }

}
$ThePortfolio_SC_S = new Portfolio_SC_S;
