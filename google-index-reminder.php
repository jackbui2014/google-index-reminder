<?php 
/*
Plugin Name: Goole index reminder
Plugin URI: http://wordpress.org/plugins/google-index-reminder/
Description: Remind developer check Google index status for current website
Author: Jack Bui
Version: 1.0
Author URI: 
Network: True
*/
function jb_admin_notice__error() {
	$blog_public = get_option('blog_public', 0);
	if( $blog_public == 0 ){
		$message = '<h2>Discourage Search Engines is <strong style="color:red">ENABLED</strong>!  That mean Google will <strong style="color:red">NO INDEX</strong> your webisite. Be careful if you are on LIVE SITE</h2>';
	}
	else{
		$message = '<h2 >Discourage Search Engines is <strong style="color:red">DISABLED</strong>!  That mean Google will <strong style="color:red">INDEX</strong> your webisite. Be careful if you are on DEVELOPMENT OR STAGING SITE </h2>';
	}
	$class = 'notice notice-warning is-dismissible';	
	printf( '<div class="%1$s"><p>%2$s</p></div>', $class, $message ); 
}
add_action( 'admin_notices', 'jb_admin_notice__error' );