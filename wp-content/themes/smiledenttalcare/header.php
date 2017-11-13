<!DOCTYPE html>
<html <?php get_bloginfo('language') ?>>
<?php  
    if ( function_exists( 'ot_get_option' ) ) {
	  $logo = ot_get_option( 'logo' );
	  $favicon = ot_get_option( 'favicon' );
	  $instagram = ot_get_option( 'instagram' );
	  $facebook = ot_get_option( 'facebook' );
	  $linkedin = ot_get_option( 'linkedin' );
	  $call = ot_get_option( 'phone' );
	  $email = ot_get_option( 'email' );
	}
    ?>
	<head>
		<meta charset="<?php bloginfo('charset'); ?>"/>
		<title><?php wp_title('|','true','right'); ?><?php bloginfo('name'); ?></title>
		<meta name="keywords" content="">
		<meta name="description" content="">
		<meta http-equiv="X-UA-Compatible" content="IE=Edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="shortcut icon" type="image/ico" href="<?php echo $favicon; ?>" />
		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
		<?php wp_head(); ?>
	</head>
	<body>
	<!--Preload section starts here-->
<div class="preload"> <i class="fa fa-heartbeat"></i> </div>
<!--Preload section ends here--> 

<!--Search section starts here-->
<!--Search section ends here--> 

<!--header section starts here-->
<header>
  <div class="container">
    <div class="row">
      <div class="col-md-3 col-sm-12 col-xs-12">
		  <a href="<?php bloginfo('url'); ?>" class="brand">
			  <img src="<?php echo $logo; ?>" alt="logo" class="img-responsive">
		  </a>
		</div>
      <div class="col-xs-3 hidden-sm hidden-md hidden-lg">
        <nav class="navbar navbar-default">
          <div class="container-fluid"> 
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-menu-dropdown" aria-expanded="false"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
            </div>
          </div>
        </nav>
      </div>
      <div class="col-md-9 col-sm-12 col-xs-12">
        <nav class="navbar navbar-default">
          <div class="container-fluid"> 
            
            <div class="collapse navbar-collapse" id="main-menu-dropdown">
              <ul class="main-menu text-center">
				   <?php
  	$lang = custom_get_current_lang();
	if($lang == 'ar'){
		 echo '<li><a href="#">الرئيسية</a></li>
                <li><a href="#about">عن الشركة</a></li>
                <li><a href="#services">الخدمات</a></li>
                <li><a href="#offers">العروض</a></li>
                <li><a href="#">وظايف خالية</a></li>
                <li><a href="#contact">اتصل بنا</a></li>'; 
		}elseif($lang == 'en'){
		echo ' <li><a href="#">Home</a></li>
                <li><a href="#about">About Us</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="#offers">Offers</a></li>
                <li><a href="#">Careers</a></li>
                <li><a href="#contact">Contact Us</a></li>'; 
	};
	?>
				 <li>  <?php
					if(is_active_sidebar('header')){
					dynamic_sidebar('header');
					}
					?></li>
              </ul>
            </div>
          </div>
        </nav>
      </div>
    </div>
  </div>
</header>
<!--header section ends here--> 

<!-- sticky header section starts here-->
<header class="stuck up hidden-xs hidden-sm">
  <div class="container">
    <div class="row">
      <div class="col-md-4">
		  <a href="<?php bloginfo('url'); ?>" class="brand">
			  <img src="<?php echo $logo; ?>" alt="logo">
		  </a>
		</div>
      <div class="col-md-8">
        <ul class="main-menu">
           <?php
  	$lang = custom_get_current_lang();
	if($lang == 'ar'){
		 echo '<li><a href="#">الرئيسية</a></li>
                <li><a href="#about">عن الشركة</a></li>
                <li><a href="#services">الخدمات</a></li>
                <li><a href="#offers">العروض</a></li>
                <li><a href="#">وظايف خالية</a></li>
                <li><a href="#contact">اتصل بنا</a></li>'; 
		}elseif($lang == 'en'){
		echo ' <li><a href="#">Home</a></li>
                <li><a href="#about">About Us</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="#offers">Offers</a></li>
                <li><a href="#">Careers</a></li>
                <li><a href="#contact">Contact Us</a></li>'; 
	};
	?>
			
        </ul>
      </div>
    </div>
  </div>
</header>
<!-- sticky header section ends here-->