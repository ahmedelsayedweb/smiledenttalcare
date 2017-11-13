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
<section id="about" class="meet-team padding-section">
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
	   <?php
  	$lang = custom_get_current_lang();
	if($lang == 'ar'){
		 echo '<div class="row vertical-middle stack-sm">
      <div class="col-md-9 col-sm-12">
        <h6 class="color-white text-uppercase no-padding">تحديد موعد للحصول على أفضل حل للأسنان.
</h6>
      </div>
      <div class="col-md-3 col-md-offset-0 col-sm-6 col-sm-offset-3 width-365 margin-auto-xs">
        <div class="request scrolling"> <a href="#contact-us" class="animated-button button-one">طلب كشف
</a> </div>
      </div>
    </div>'; 
		}elseif($lang == 'en'){
		echo ' <div class="row vertical-middle stack-sm">
      <div class="col-md-9 col-sm-12">
        <h6 class="color-white text-uppercase no-padding">Schedule an appointment to get the best dental solution.</h6>
      </div>
      <div class="col-md-3 col-md-offset-0 col-sm-6 col-sm-offset-3 width-365 margin-auto-xs">
        <div class="request scrolling"> <a href="#contact-us" class="animated-button button-one">Request Appointment</a> </div>
      </div>
    </div>'; 
	};
	?>
    
  </div>
</section>
<!-- Appointment Section ends here--> 

<!-- Features Section starts here-->
<section id="services" class="features padding-section">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
		   <?php
  	$lang = custom_get_current_lang();
	if($lang == 'ar'){
		 echo '<h2 class="text-center">الخدمات</h2>'; 
		}elseif($lang == 'en'){
		echo '<h2 class="text-center">Services</h2>'; 
	};
	?>
      </div>
		<?php
			$cats = [];
						$args = array(
								'post_type' => 'services',
								'posts_per_page' => 4,
						);
						$product_query = new WP_Query( $args );
							 ?>
						<?php if ( $product_query->have_posts() ) : ?>
			<?php $i = 1; ?>
							<?php while ($product_query->have_posts()) : $product_query->the_post(); 
			$categories = get_the_category();
			$cats = array_merge($cats, $categories);
			?>
			<?php endwhile; endif; ?>
		
		<?php if ( $product_query->have_posts() ) : ?>
			<?php $i = 0; ?>
			<?php while ($product_query->have_posts()) : $product_query->the_post();
			$categories = get_the_category();
			$slug = '';
			foreach($categories  as $cat){
			if(isset($cat->slug)){
				$slug .= $cat->slug;
			}
			}
			?>
      <div class="col-lg-3 col-sm-6 icon-box">
        <div class="icon"> <i class="<?php the_field('icons'); ?>"></i>
          <h6><?php the_title(); ?></h6>
          <?php the_excerpt(); ?>
        </div>
      </div>
		<?php $i++;
									?>
							
			<?php endwhile; endif; ?>
    </div>
  </div>
</section>
<!-- Features Section ends here--> 
<?php
			$cats = [];
						$args = array(
								'post_type' => 'offers',
								'posts_per_page' => 3,
						);
						$product_query = new WP_Query( $args );
							 ?>
						<?php if ( $product_query->have_posts() ) : ?>
			<?php $i = 1; ?>
							<?php while ($product_query->have_posts()) : $product_query->the_post(); 
			$categories = get_the_category();
			$cats = array_merge($cats, $categories);
			?>
			<?php endwhile; endif; ?>
<!-- Dental Features Section starts here-->
<section id="offers" class="detail-features">
  <div class="container-fluid">
    <div class="row">
		<div class="col-sm-12">
			<?php
  	$lang = custom_get_current_lang();
	if($lang == 'ar'){
		 echo '<h2 class="text-center text_center">العروض</h2>'; 
		}elseif($lang == 'en'){
		echo '<h2 class="text-center text_center">Offers</h2>'; 
	};
	?>
      </div>
		<?php if ( $product_query->have_posts() ) : ?>
			<?php $i = 0; ?>
			<?php while ($product_query->have_posts()) : $product_query->the_post();
			$categories = get_the_category();
			$slug = '';
			foreach($categories  as $cat){
			if(isset($cat->slug)){
				$slug .= $cat->slug;
			}
			}
			?>
      <div class="col-sm-4 no-padding overflow-hidden feature-container">
        <div class="display-table fancy-box-1">
          <div class="info"> <i class="<?php the_field('icons'); ?>"></i> <a href="#">
            <p class="color-white text-bold"><?php the_title(); ?></p>
            </a>
            <div class="animate-text"> <a href="#" class="btn btn-trasnparent">Read More</a> </div>
          </div>
        </div>
      </div>
		<?php $i++;
									?>
							
			<?php endwhile; endif; ?>
    </div>
  </div>
</section>
<!-- Dental Features Section ends here--> 
<!-- Contact Us starts here--> 
<section id="contact" class="contact-us grey-bg padding-section text-center" id="contact-us">
  <div class="container">
	  <?php
  	$lang = custom_get_current_lang();
	if($lang == 'ar'){
		 echo '<span class="heading-underline centered link-color no-margin-top span-small-border-bottom"> <h2>طلب موعد للكشف</h2></span>
    <p >املأ النموذج أدناه وسوف نتصل بك خلال ساعات العمل لدينا.</p>'; 
		}elseif($lang == 'en'){
		echo '<span class="heading-underline centered link-color no-margin-top span-small-border-bottom"> <h2>Request an Appointment</h2></span>
    <p >Fill out the form below and we will contact you during our working hours.</p>'; 
	};
	?>
    <div class="row">
      <div class="col-md-offset-1 col-md-10 col-md-offset-1">
        <?php
				  $lang = custom_get_current_lang();
    				if($lang == 'ar'){
						 echo do_shortcode('[contact-form-7 id="5" title="Contact ar"]'); 
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