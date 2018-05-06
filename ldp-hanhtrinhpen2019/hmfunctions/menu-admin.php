<?php
add_action( 'admin_menu', 'my_admin_menu' );

function my_admin_menu() {
    add_menu_page('Hocmai Manager', 'Contact', 'edit_others_posts', 'hocmai-manager','hm_adminpage_data1' );
}

function custom_menu_page_removing() {
    remove_menu_page( 'hocmai-install' );
}
add_action( 'admin_menu', 'custom_menu_page_removing' );