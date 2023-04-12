<?php
/*
	Plugin Name: 	Your-JS - Add custom JS to your WordPress site
	Plugin URI: 	https://owino.xyz/Your-JS
	Description: 	Add custom JS to your WordPress site
	Author: 		Weknow Creators
	Version: 		1.1
	Author URI: 	https://mikeowino.com
	*/

    function add_custom_js() {
        ?>
        <script> 
            // script here
            // example whatsapp api script
            // tawk.to code 
        </script>
        <script id="id" type="text/javascript" src="https://script.com"></script>
        <?php
    }
    add_action( 'wp_head', 'add_custom_js' );
