<?php
///////////add dyniamic titles/////////////////////

function newtheme_theme_support()
{
	add_theme_support('title-tag');
	add_theme_support('custom-logo');
	add_theme_support('post-thumbnails');
}

add_action('after_setup_theme','newtheme_theme_support');

function newtheme_menus()
{
	$locations=array(

'primary'=> 'Desktop Primary sidebar',
'header'=> 'Top Header',
'footer' =>'Footer Menu Items'


	);
	register_nav_menus($locations);

}
add_action('init','newtheme_menus');





function newtheme_register_styles()
{
	wp_enqueue_style('newtheme-style',get_template_directory_uri() ."/style.css",array('newtheme-bootstrap'),'1.0','all');
	wp_enqueue_style('newtheme-bootstrap',get_template_directory_uri() ."/assets/bootstrap/bootstrap.min.css",array(),'3.4.1','all');

	wp_enqueue_style('newtheme-fontowesom',"https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap",array(),'1.0','all');
	

	
}
add_action('wp_enqueue_scripts','newtheme_register_styles');



function newtheme_register_scripts()
{
	wp_enqueue_script('newtheme-bootstrap',get_template_directory_uri() ."/assets/bootstrap/bootstrap.bundle.min.js",array(),'3.4.1','all');
	wp_enqueue_script('newtheme-jquery',get_template_directory_uri() ."/assets/bootstrap/jquery.min.js",array(),'3.6.4','all');

	
}
add_action('wp_enqueue_scripts','newtheme_register_scripts');
function newtheme_widget_areas()
{
	register_sidebar(

array(  

  'before_title'=>'',
  'after_title'=>'',
  'before_widget'=>'',
  'after_widget'=>'',
  'name'=>'sidebar Area',
  'id'=>'sidebar-1',
  'description'=>'sidebar widget area'


)
);

	
	register_sidebar(

array(  

  'before_title'=>'',
  'after_title'=>'',
  'before_widget'=>'',
  'after_widget'=>'',
  'name'=>'footer Area',
  'id'=>'footer-1',
  'description'=>'footer widget area'


)

	);
}
add_action('widgets_init' ,'newtheme_widget_areas');

?>