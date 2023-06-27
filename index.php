<?php
get_header();
?>
    <?php
    if(have_posts())
    {
      while(have_posts())
      {
        the_post();
       get_template_part('template-parts/content','archive');
      }
    }
    ?>
    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12  ">
       
        <?php

       
        the_posts_pagination();
    ?>

      
    </div>
  </div>
    



 <?php
   get_footer();
   ?>
 
   




  