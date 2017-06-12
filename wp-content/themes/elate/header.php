<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?> > <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?> > <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" <?php language_attributes(); ?> > <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?> > <!--<![endif]-->
	<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<!--<title>Elate &mdash; 100% Free Fully Responsive HTML5 Template by FREEHTML5.co</title>-->
	<title><?php bloginfo( 'title' ) ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Template by FREEHTML5.CO" />
	<meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
	<meta name="author" content="FREEHTML5.CO" />

    <!-- 
	//////////////////////////////////////////////////////

	FREE HTML5 TEMPLATE 
	DESIGNED & DEVELOPED by FREEHTML5.CO
		
	Website: 		http://freehtml5.co/
	Email: 			info@freehtml5.co
	Twitter: 		http://twitter.com/fh5co
	Facebook: 		https://www.facebook.com/fh5co

	//////////////////////////////////////////////////////
	 -->

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">

    <?php wp_head(); ?>
    </head>
    <body>
		<header role="banner" id="fh5co-header">
			<div class="container">
				<!-- <div class="row"> -->
			    <nav class="navbar navbar-default">
		        	<div class="navbar-header">
						<!-- Mobile Toggle Menu Button -->
						<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"><i></i></a>
						<a class="navbar-brand" href="index.html">Elate</a> 
						</div>
						<div id="navbar" class="navbar-collapse collapse">
						<ul class="nav navbar-nav navbar-right">
							<li class="active"><a href="#" data-nav-section="home"><span>Home</span></a></li>
							<li><a href="#" data-nav-section="work"><span>Work</span></a></li>
							<li><a href="#" data-nav-section="testimonials"><span>Testimonials</span></a></li>
							<li><a href="#" data-nav-section="services"><span>Services</span></a></li>
							<li><a href="#" data-nav-section="about"><span>About</span></a></li>
							<li><a href="#" data-nav-section="contact"><span>Contact</span></a></li>
						</ul>
					</div>
			    </nav>
			  <!-- </div> -->
			  </div>
			  <?php 
			  	$args = array(
					'dropdown' => 0, // Hiển thị dạng đổ xuống, thiết lập giá trị là 1 nó sẽ thành dạng đổ xuống (default: 0)
					'show_names' => 0, // Hiển thị tên ngôn ngữ, giá trị là 1 nó sẽ hiển thị tên ngôn ngữ (default: 1)
					'display_name_as' =>  'name', // Hiển thị tên ngôn ngữ theo “name” hoặc “slug” (default: ‘name’)
					'show_flags' => 1, // Hiển thị lá cờ nếu giá trị là 1 (default: 0)
					'hide_if_empty' => 0, // Ẩn các ngôn ngữ nếu ngôn ngữ dó chưa có post hoặc page tương ứng, giá trị 1 là ẩn (default: 1)
					'force_home' => 0, // Sử dụng đường dẫn trang chủ nếu giá trị là 1, nếu giá trị là 0 thì nó sẽ chuyển trang hiện tại sang ngôn ngữ đã chọn (default: 0)
					'echo' => 1, // echoes if set to 1, returns a string if set to 0 (default: 1)
					'hide_if_no_translation' => 0, // Ẩn ngôn ngữ nếu ngôn ngữ đó chưa có giá trị nào được dịch (default: 0)
					'hide_current' => 0, // Ẩn ngôn ngữ hiện tại đang chọn nếu giá trị là 1 (default: 0)
					'post_id' => null, // Nếu giá trị này thiết lập thì phần ngôn ngữ đó sẽ trỏ tới một post hoặc page chỉ định qua ID (default: null)
					'raw' => 0 // Nếu bạn muốn tự viết lại CSS cho phần này thì thiết lập giá trị là 1 (default:0)
				);
			  	pll_the_languages($args);
			  ?>
		</header>
    