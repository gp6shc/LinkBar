<?php 

defined('ABSPATH') or die("Nope.");
    
if( is_admin() && ( !defined( 'DOING_AJAX' ) || !DOING_AJAX ) ) {
  require 'LB-admin.php';
  require 'LB-generator.php';
}else{
  require 'LB-generator.php';
}

?>