<?php
/*
Plugin Name: HomePage redirection
Description: Redirects all pages and link to the home page.
Author: Les Génies du Web (contact@lesgeniesduweb.fr)
Version: 1.0
*/


add_action('template_redirect', 'redirect_all_to_home');
function redirect_all_to_home() {
    if (!is_front_page()) {
        wp_redirect(home_url(), 301);
        exit;
    }
}
