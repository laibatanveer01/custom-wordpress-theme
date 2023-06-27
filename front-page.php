
  

  
  





<?php
get_header();
?>
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

    <?php
    if(have_posts())
    {
      while(have_posts())
      {
        the_post();
        the_content();
      }
    }
    ?>




 <?php
   get_footer();
   ?>
   </div>
 

   




  