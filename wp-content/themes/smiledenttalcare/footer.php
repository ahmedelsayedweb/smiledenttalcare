<!-- FOOTER-->
<?php  
    if ( function_exists( 'ot_get_option' ) ) {
	  $logo = ot_get_option( 'logo' );
	  $description_footer = ot_get_option( 'description_footer' );
	  $opening_hours = ot_get_option( 'opening_hours' );
	  $facebook = ot_get_option( 'facebook' );
	  $linkedin = ot_get_option( 'linkedin' );
	  $twitter = ot_get_option( 'twitter' );
	  $address = ot_get_option( 'address' );
	  $phone = ot_get_option( 'phone' );
	  $email = ot_get_option( 'email' );
	}
    ?>
  <!-- Footer Widgets Section starts here-->
<section class="footer-widget">
  <div class="container">
    <div class="row">
      <div class="col-sm-4">
        <ul class="location">
          <li>
			  <?php echo $address; ?>
			</li>
        </ul>
      </div>
      <div class="col-sm-4">
        <ul class="mobile">
          <li>
            <h4><a href="tel:<?php echo $phone; ?>"><?php echo $phone; ?></a></h4>
            <span>Give us a call today!</span></li>
        </ul>
      </div>
      <div class="col-sm-4">
        <ul class="calender">
          <li>
            <h4>Book Appointment</h4>
            <span><a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a></span></li>
        </ul>
      </div>
    </div>
  </div>
</section>
<!-- Footer Widgets Section ends here--> 

<!-- Footer starts here-->
<footer class="footer blue-bg">
  <div class="container">
    <div class="row">
      <div class="col-md-4 col-sm-6">
		  <h4 class="color-white heading2-underline">About Us</h4>
        <p class="color-white"><?php echo $description_footer; ?></p>
        <h4 class="color-white social-heading">Follow Us</h4>
        <ul class="social-links list-inline font-40">
          <li><a href="<?php echo $facebook; ?>"><i class="fa fa-facebook"></i></a></li>
          <li><a href="<?php echo $twitter; ?>"><i class="fa fa-twitter"></i></a></li>
          <li><a href="<?php echo $linkedin; ?>"><i class="fa fa-linkedin"></i></a></li>
        </ul>
      </div>
      <div class="col-md-4 col-sm-6">
        <h4 class="color-white heading2-underline">Our Services</h4>
        <ul class="footer-list list-unstyled">
          <li><a href="#">General Dentistry</a></li>
          <li><a href="#">Family Dentistry</a></li>
          <li><a href="#">Dental Prevention</a></li>
          <li><a href="#">Teeth Whitening</a></li>
          <li><a href="#">Dental Implants</a></li>
          <li><a href="s#">Dental Sedation</a></li>
        </ul>
      </div>
      <div class="col-md-4 col-sm-12">
        <h4 class="color-white heading2-underline">Opening Hours</h4>
        <?php echo $opening_hours; ?>
      </div>
    </div>
  </div>
</footer>
  <div class="copyrights text-center">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 color-white">© <?php echo date ('Y'); ?>. All Rights Reserved | Design & Developer by psolvingegypt</div>
      </div>
    </div>
  </div>
        <!--End Footer-->
<?php wp_footer(); ?>
</body>	
</html>