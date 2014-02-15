<?php
/*
Plugin Name: Wow Such Domain
Plugin URI: http://github.com/nathancarnes/wow-such-domain
Description: Stops WordPress from redirecting based on the siteurl option by setting siteurl to the current domain. Useful for multiple domains pointed at the same site, local testing, and preventing the dreaded www redirect loop. Or possibly totally useless. Definitely the smallest plugin ever.
Author: Nathan Carnes
Version: 0.01
Author URI: http://carnesmedia.com
*/

function set_domain(){
  return "//" . $_SERVER['SERVER_NAME'];
}

add_filter("option_siteurl", "set_domain");
add_filter("option_home", "set_domain");
