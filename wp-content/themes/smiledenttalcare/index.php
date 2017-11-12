<?php get_header(); ?>
<?php  
    if ( function_exists( 'ot_get_option' ) ) {
	  $title_about = ot_get_option( 'title_about' );
	  $description_about = ot_get_option( 'description_about' );
	  $img_about = ot_get_option( 'img_about' );
	  $facebook = ot_get_option( 'facebook' );
	  $linkedin = ot_get_option( 'linkedin' );
	  $call = ot_get_option( 'phone' );
	  $address = ot_get_option( 'address' );
	}
    ?>
<!-- Banner Slider Section starts here-->
<section class="slider">
<div class="owl-carousel owl-theme">
		<?php 
		if ( function_exists( 'ot_get_option' ) ) {			
		  $slides = ot_get_option( 'banner', array() );	
		  if ( ! empty( $slides ) ) {
			foreach( $slides as $slide ) {
			  echo '
			  <div class="item">
              <img src="' . $slide['image'] . '" alt="slider" />
              <div class="caption-banner">
              	<div class="container">
              	<h4>' . $slide['title'] . '</h4>
              	<p class="color-white">' . $slide['description'] . '</p>
              	</div>
              </div>
            </div> ';
			}
		  }
		}	
	  ?>	
          </div>
</section>
<!-- Banner Slider Section ends here--> 

<!-- Meet Team Section starts here-->
<section class="meet-team padding-section">
  <div class="container">
    <div class="row vertical-middle stack-xs">
      <div class="col-md-5 col-sm-4 text-center-xs">
		  <img src="<?php echo $img_about; ?>" alt="team" class="img-responsive img-circle width-400 display-inline-xs"></div>
      <div class="col-md-7 col-sm-8">
        <div class="team-text margin-xs-top">
          <h2><?php echo $title_about; ?></h2>
			<?php echo $description_about; ?>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Meet Team Section ends here--> 

<!-- Appointment Section starts here-->
<section class="appointment">
  <div class="container">
    <div class="row vertical-middle stack-sm">
      <div class="col-md-9 col-sm-12">
        <h6 class="color-white text-uppercase no-padding">Schedule an appointment to get the best dental solution.</h6>
      </div>
      <div class="col-md-3 col-md-offset-0 col-sm-6 col-sm-offset-3 width-365 margin-auto-xs">
        <div class="request scrolling"> <a href="#contact-us" class="animated-button button-one">Request Appointment</a> </div>
      </div>
    </div>
  </div>
</section>
<!-- Appointment Section ends here--> 

<!-- Features Section starts here-->
<section class="features padding-section">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <h2 class="text-center">Services of our clinic</h2>
      </div>
      <div class="col-lg-3 col-sm-6 icon-box">
        <div class="icon"> <i class="fa fa-stethoscope"></i>
          <h6>Modern Equipment</h6>
          <p>We use the most modern equipments for our patients certified by ISO.</p>
        </div>
      </div>
      <div class="col-lg-3 col-sm-6 icon-box">
        <div class="icon"> <i class="fa fa-user-md"></i>
          <h6>Supportive Staff</h6>
          <p>One of the best feature of our clinic is our supportive and well trained staff members.</p>
        </div>
      </div>
      <div class="col-lg-3 col-sm-6 icon-box">
        <div class="icon"> <i class="fa fa-building"></i>
          <h6>Comfortable Atmosphere</h6>
          <p>Our aim is to provide the most comfortable environment to the patients where they can feel at comfort.</p>
        </div>
      </div>
      <div class="col-lg-3 col-sm-6 icon-box">
        <div class="icon"> <i class="fa fa-plus-square"></i>
          <h6>Low Cost Services</h6>
          <p>We treat all of our patients important and always work to keep the cost low with the best treatment possible.</p>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Features Section ends here--> 

<!-- Dental Features Section starts here-->
<section class="detail-features">
  <div class="container-fluid">
    <div class="row">
		<div class="col-sm-12">
        <h2 class="text-center text_center">Offers</h2>
      </div>
      <div class="col-sm-4 no-padding overflow-hidden feature-container">
        <div class="display-table fancy-box-1">
          <div class="info"> <i class="fa fa-ambulance"></i> <a href="#">
            <p class="color-white text-bold">Emergency Care</p>
            </a>
            <div class="animate-text"> <a href="family-dentistry.html" class="btn btn-trasnparent">Read More</a> </div>
          </div>
        </div>
      </div>
      <div class="col-sm-4 no-padding overflow-hidden feature-container">
        <div class="display-table fancy-box-2">
          <div class="info"> <i class="fa fa-user-md"></i> <a href="#">
            <p class="color-white text-bold">General Dental Services</p>
            </a>
            <div class="animate-text"> <a href="services.html" class="btn btn-trasnparent">Read More</a> </div>
          </div>
        </div>
      </div>
      <div class="col-sm-4 no-padding overflow-hidden feature-container">
        <div class="display-table fancy-box-3">
          <div class="info"> <i class="fa fa-medkit"></i> <a href="#">
            <p class="color-white text-bold">Dental Implants</p>
            </a>
            <div class="animate-text"> <a href="implants.html" class="btn btn-trasnparent">Read More</a> </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Dental Features Section ends here--> 
<!-- Contact Us starts here--> 
<section class="contact-us grey-bg padding-section text-center" id="contact-us">
  <div class="container">  
    <span class="heading-underline centered link-color no-margin-top span-small-border-bottom">CONTACT US</span>
    <h2>Request an Appointment</h2>
    <p >Fill out the form below and we will contact you during our working hours.</p>
    <div class="row">
      <div class="col-md-offset-1 col-md-10 col-md-offset-1">
        <?php
				  $lang = custom_get_current_lang();
    				if($lang == 'ar'){
						 echo do_shortcode('[contact-form-7 id="15" title="Contact"]'); 
						}elseif($lang == 'en'){
						echo do_shortcode('[contact-form-7 id="15" title="Contact"]'); 
					};
				  	?>
      </div>
    </div>
  </div>
</section>
<!-- Contact Us ends here--> 
<?php get_footer(); ?>