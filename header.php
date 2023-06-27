<!DOCTYPE html>
<html lang="en">
<head>
 
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

<?php

wp_head();
?>



</head>
<body>
   <div class="container">
    <section id="top">
   <div class="menu-wrapper">
     <nav>
       <div class="col-2">
        <div class="logo-wrapper">
          <div class="logo">
            <!-------output logo-------------->
            <?php the_custom_logo();?>
        <!---    
         <?php
         // echo get_bloginfo('name'); ?>---->
           <!------ <img src="/wp_start/wp-content/themes/newtheme/assets/images/logo.png">------>
          </div>
         
        </div>
         
       </div>
       <div class="col-8">

        <?php
        wp_nav_menu(
          array(
            
            'menu' => 'header',
            'container'=>'',
            
            'theme_location'=>'header',
            'items_wrap'=>'<ul id="" class="menu-list">%3$s</ul>'

          )


        );
        ?>
        
       </div>
     </nav>
   </div>

 </section>
 <section class="search-form" >
 <div class="row">
  <div class="row" >
    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">

  <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4" style="padding: 2px;">
            <p style="font-weight: bold; font-size: 20px;padding: 8px;">Follow Me</p>
        </div>

        <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8" style="padding: 8px;">
          
            <i class='fab fa-facebook-square icon-3x' style='font-weight: bold;font-size:40px;color:#009bb7;padding: 2px; '></i>
            <i class='fab fa-linkedin' style='font-weight: bold;font-size:40px;color:#009bb7;padding: 7px;'></i>
            <i class='  fab fa-google-plus-g icon-3x' style='font-weight: bold;font-size:40px;color:#009bb7;padding: 2px; '></i>
            <i class='fab a-twitter' style='font-weight: bold;font-size:40px;color:#009bb7;padding: 2px;'></i>
            <i class='fab fa-instagram' style='font-weight: bold;font-size:40px;color:#009bb7;padding: 2px;'></i>
            <i class='fab fa-youtube' style='font-weight: bold;font-size:40px;color:#009bb7;padding: 2px;'></i>
            
          </div>
        </div>
  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6"  align="right">
 <?php
   get_search_form();
   ?>
 </div>
</div>
</section>
 