<?php 

function load_css()  
{   
    //  bootstrap style sheet
    wp_register_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css',
      array(), false, 'all' );
    wp_enqueue_style('bootstrap'); 
    
    // custm style css file
    wp_register_style( 'style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style('style'); 

    wp_deregister_style( 'fullpane' );
    wp_enqueue_style( 'fulllpane', get_template_directory_uri() . '/advance/fullpage.css', false, null, 'all');

}
add_action('wp_enqueue_scripts', 'load_css');


// load font awsome


function enqueue_load_fa() {
wp_enqueue_style( 'load-fa', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css' );
}
add_action( 'wp_enqueue_scripts', 'enqueue_load_fa' );

// javascript function and deafault jquery load

function load_js() {
    


    wp_deregister_script( 'jquery' );
    wp_enqueue_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js', false, null, true);
	
	wp_deregister_script( 'wow' );
    wp_enqueue_script( 'wow', 'https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js', false, null, true);

    wp_deregister_script( 'popper' );
    wp_enqueue_script( 'popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js', false, null, true);

    wp_enqueue_script('boostarap');
    wp_register_script('boostrapjs', get_template_directory_uri() . '/js/bootstrap.min.js' ,  'jquery' ,  false, true);
    wp_enqueue_script('boostrapjs');
    

  
	

	
	wp_deregister_script( 'scrollflow' );
    wp_enqueue_script( 'scrollflow', get_template_directory_uri() . '/advance/scrolloverflow.min.js', false, null, true);
	
	wp_deregister_script( 'fullpage' );
    wp_enqueue_script( 'fullpage', get_template_directory_uri() . '/advance/fullpage.js', false, null, true);

    wp_deregister_script( 'javascript' );
    wp_enqueue_script( 'javascript', get_template_directory_uri() . '/js/scripts.js', false, null, true);

    wp_deregister_script( 'daisy' );
    wp_enqueue_script( 'daisy', get_template_directory_uri() . '/js/daisy.js', false, null, true);

    wp_deregister_script( 'custom' );
    wp_enqueue_script( 'custom', get_template_directory_uri() . '/fullpage-custom.js', false, null, true);

    


}
add_action('wp_enqueue_scripts', 'load_js');






// Theme option

add_theme_support('menus');
add_theme_support('post-thumbnails');



// Menus

register_nav_menus(
    array(
        'top-menu' => __( 'Top Menu'),
        'mobile-menu' => __('Mobile Menu'),
        'footer-menu' => __( 'Footer Menu'),
    )
);


function my_first_post_new ()
{

}





