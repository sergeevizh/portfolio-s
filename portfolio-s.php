<?php
/*
Plugin Name: Portfolio by Systemo
Plugin URI: https://github.com/systemo-biz/portfolio-s/
Description: Portfolio by Systemo for public cases, projects and works
Version: 0.1
License: GPL
Author: Systemo
Author URI: http://systemo.biz
*/


require_once 'inc/core.php';
require_once 'inc/shortcode.php';


register_activation_hook( __FILE__, 'activation_portfolio_s' );
function activation_portfolio_s() {

  //сброс правил перезаписи, чтобы ссылки открывались как следует
  flush_rewrite_rules();

}


register_deactivation_hook( __FILE__, 'deactivation_portfolio_s' );
function deactivation_portfolio_s() {

  flush_rewrite_rules();

}
