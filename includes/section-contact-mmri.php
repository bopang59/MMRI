<div id="contact-banner" style="background-image: url('<?php echo get_template_directory_uri() ?>/includes/theme_imgs/northCampus.jpg')">
  
    <div id="contact-title"><h1>Contact MMRI</h1></div>

     <?php
    //Get the Contact form from the Contact form 7 plugin 
    echo do_shortcode(
        '[contact-form-7 id="257" title="MMRI Contact"]'
    );
    ?>
</div>