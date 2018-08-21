  <footer>
    <div class="container">
      <p class="footerInfo">Location Information: <a href="https://maps.google.com/?q=770 Centre Street, Newton, MA 02458"
        target="_blank" class="footerLink">770 Centre Street, Newton, MA 02458</a>
        <a href="tel:(617) 969-6200" class="footerLink">(617) 969-6200</a> | Toll-Free <a href="tel:(800) 852-3131" class="footerLink">(800) 852-3131</a>
      </p>
    </div>
  </footer>
<div class="text-center pr-3 pl-3 footerTextContainer">
  <p class="footerText">
    © 2018 The Carroll Center for the Blind  |  <a href="#" class="footerText">Privacy Policy</a>  |  Website by
  </p>
  <a href="https://www.insegment.com/" target="_blank"><img src="<?php echo get_bloginfo( 'template_directory' ); ?>/images/logo1_img.png" class="footerLogo1" ></a>
</div>
<div class="container">

<div class="text-center pr-sm-3 pl-sm-3 pb-4">
  <div class="logo_imgContainer">
    <?php dynamic_sidebar('footer1'); ?>
  </div>
  <div class="logo_imgContainer">
    <?php dynamic_sidebar('footer2'); ?>
  </div>

  <!--<a href="#"><img src="<?php echo get_bloginfo( 'template_directory' ); ?>/images/logo2_img.png" class="footerLogo2 " ></a>
  <a href="#"><img src="<?php echo get_bloginfo( 'template_directory' ); ?>/images/logo3_img.png" class="footerLogo2 " ></a>-->
</div>
</div>
<?php wp_footer(); ?>
 </body>
</html>
