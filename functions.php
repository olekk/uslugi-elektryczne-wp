<?php

function load_stylesheets() {

    wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), 1, 'all');
    wp_enqueue_style('bootstrap');
    
    wp_register_style('mystyles', get_template_directory_uri() . '/css/style.css', array(), 1, 'all');
    wp_enqueue_style('mystyles');
    
    wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), 1, 'all');
    wp_enqueue_style('bootstrap');
    
}

add_action('wp_enqueue_scripts', 'load_stylesheets');
   

function load_scripts() {

    // wp_register_script('jquery2', get_template_directory_uri() . '/js/jquery-3.3.1.min.js', array(), 1, 1, 1);
    wp_enqueue_script('jquery');

    wp_register_script('jqueryscrollto', get_template_directory_uri() . '/js/jquery.scrollTo.min.js', array(), 1, 1, 1);
    wp_enqueue_script('jqueryscrollto');

    wp_register_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array(), 1, 1, 1);
    wp_enqueue_script('bootstrap');

    wp_register_script('quotes', get_template_directory_uri() . '/js/quotes.js', array(), 1, 1, 1);
    wp_enqueue_script('quotes');

    wp_register_script('scrollto', get_template_directory_uri() . '/js/scrollTo.js', array(), 1, 1, 1);
    wp_enqueue_script('scrollto');

}
add_action('wp_enqueue_scripts', 'load_scripts');

function getUserIP()
    {
        if (isset($_SERVER["HTTP_CF_CONNECTING_IP"])) {
                  $_SERVER['REMOTE_ADDR'] = $_SERVER["HTTP_CF_CONNECTING_IP"];
                  $_SERVER['HTTP_CLIENT_IP'] = $_SERVER["HTTP_CF_CONNECTING_IP"];
        }
        $client  = @$_SERVER['HTTP_CLIENT_IP'];
        $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
        $remote  = $_SERVER['REMOTE_ADDR'];

        if(filter_var($client, FILTER_VALIDATE_IP))
        {
            $ip = $client;
        }
        elseif(filter_var($forward, FILTER_VALIDATE_IP))
        {
            $ip = $forward;
        }
        else
        {
            $ip = $remote;
        }

        return $ip;
    }

?>