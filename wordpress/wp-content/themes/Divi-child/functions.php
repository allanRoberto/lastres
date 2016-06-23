<?php 



wp_enqueue_script( 'bootstrap-js', get_template_directory_uri()."-child/js/bootstrap.js", array('jquery'), '1.0' );
wp_enqueue_style( 'bootstrap-css', get_template_directory_uri()."-child/css/bootstrap.css", array(), '1.0');