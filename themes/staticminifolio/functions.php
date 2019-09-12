<?php 

function load_scripts() {
    // bootstrap fra links i index.php filen - derefter 'the path' (get_template_directory_uri(). connecter de to bootstraps)
    
wp_enqueue_style('bootstrap.min.css', get_template_directory_uri(). '/css/bootstrap.min.css'); 
wp_enqueue_style('jquery.fancybox.css', get_template_directory_uri(). '/css/jquery.fancybox.css'); 
wp_enqueue_style('main.css', get_template_directory_uri(). '/css/main.css');
wp_enqueue_style('responsive.css', get_template_directory_uri(). '/css/responsive.css');
wp_enqueue_style('animate.min.css', get_template_directory_uri(). '/css/animate.min.css'); 
wp_enqueue_style('font-awesome-min-css', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css'); 


// First paramenter is the id or name of the file we are adding (must be unique), 
// Second parameter is the path to the file we are adding
// Third parameter is dependency and typically there is no dependency (you will create an empty array)
// Fourth parameter is the version of the file we're adding (typically the value here is null)
// Fifth parameter tells whether you want to add the script in the footer section of your web-document 

wp_enqueue_script('jquery-min-js','https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js',array(),'1.11.3',true);
wp_enqueue_script('bootstrap-min-js',get_template_directory_uri(). '/js/bootstrap.min.js',array(),'null',true);
wp_enqueue_script('jquery-fancybox-pack-js', get_template_directory_uri().'/js/jquery.fancybox.pack.js',array(),'null',true);
wp_enqueue_script('jquery-waypoints-min-js',get_template_directory_uri().'/js/jquery.waypoints.min.js',array(),'null',true);
#wp_enqueue_script('retina-min-js',get_template_directory_uri().'/js/retina.min.js',array(),'null',true);
wp_enqueue_script('modernizr-js',get_template_directory_uri().'/js/modernizr.js',array(),'null',true);
wp_enqueue_script('main-js',get_template_directory_uri().'/js/main.js',array(),'null',true);
}

// This will execute scripts together with the function load_scripts 
add_action('wp_enqueue_scripts','load_scripts'); 

// This will execute widgets together with the function minifolio_sidebars 
add_action('widgets_init','minifolio_sidebars'); 

// Creating sidebars 
function minifolio_sidebars() {
    register_sidebar (
        array(
            'name' => 'Banner', 
            'id' => 'banner',
            'description' => 'Please drag your widgets here',
            'before_widget' => '<div class="widget_wrapper">', 
            'after_widget' => '</div>',
            'before_title' => '<h2 class="widget-title">', 
            'after_title' => '</h2>' 
            )
        ); 
        
        
          register_sidebar (
        array(
            'name' => 'About Me', 
            'id' => 'about-me',
            'description' => 'Please drag your widgets here',
            'before_widget' => '<div class="widget_wrapper">', 
            'after_widget' => '</div>',
            'before_title' => '<h2 class="widget-title">', 
            'after_title' => '</h2>' 
            )
        ); 
        
        
          register_sidebar (
        array(
            'name' => 'About Me 2', 
            'id' => 'about-me-2',
            'description' => 'Please drag your widgets here',
            'before_widget' => '<div class="widget_wrapper">', 
            'after_widget' => '</div>',
            'before_title' => '<h2 class="widget-title">', 
            'after_title' => '</h2>' 
            )
        ); 
        
          register_sidebar (
        array(
            'name' => 'Hire Me', 
            'id' => 'hire-me',
            'description' => 'Please drag your widgets here',
            'before_widget' => '<div class="widget_wrapper">', 
            'after_widget' => '</div>',
            'before_title' => '<h2 class="widget-title">', 
            'after_title' => '</h2>' 
            )
        ); 
        
        
          register_sidebar (
        array(
            'name' => 'Contact', 
            'id' => 'contact',
            'description' => 'Please drag your widgets here',
            'before_widget' => '<div class="widget_wrapper">', 
            'after_widget' => '</div>',
            'before_title' => '<h2 class="widget-title">', 
            'after_title' => '</h2>' 
            )
        ); 
        
         register_sidebar (
        array(
            'name' => 'Footer Area', 
            'id' => 'footer',
            'description' => 'Please drag your widgets here',
            'before_widget' => '<div class="widget_wrapper">', 
            'after_widget' => '</div>',
            'before_title' => '<h2 class="widget-title">', 
            'after_title' => '</h2>' 
            )
        ); 
} 

register_nav_menus(
    array(
      'primary' => 'The Main Menu',
      'social' => 'The Social Menu Icons'
        )
    );








