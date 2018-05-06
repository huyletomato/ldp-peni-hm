<?php
function adminStyleScript() {
    wp_enqueue_media();
    wp_register_script( 'adminjs', plugin_dir_url( __FILE__ ) . '../js/adminjs.js',array(),false,true);
    wp_enqueue_script( 'adminjs' );
    wp_localize_script('adminjs', 'admin_ajax', array('url' => admin_url('admin-ajax.php')));

}
add_action('admin_enqueue_scripts', 'adminStyleScript' );