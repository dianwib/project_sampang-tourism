<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, hrink-to-fit=yes">

    <title>Topbuilder Construction Template</title>

    <!-- Favicon -->
<link rel="icon" href="images/favicon.png" type="image/x-icon" />
    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Animate CSS -->
    <link href="vendors/animate/animate.css" rel="stylesheet">
    <!-- Icon CSS-->
	<link rel="stylesheet" href="vendors/font-awesome/css/font-awesome.min.css">
    <!-- Camera Slider -->
    <link rel="stylesheet" href="vendors/camera-slider/camera.css">
    <!-- Owlcarousel CSS-->
	<link rel="stylesheet" type="text/css" href="vendors/owl_carousel/owl.carousel.css" media="all">

    <!--Theme Styles CSS-->
	<link rel="stylesheet" type="text/css" href="css/style.css" media="all" />

    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.min.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
</head>
<body>
    <!-- Preloader -->
    <div class="preloader"></div>

	<!-- Top Header_Area -->
	<!-- End Top Header_Area -->

	<!-- Header_Area -->
    <nav class="navbar navbar-default header_aera" id="main_navbar">
        <div class="container">
            <!-- searchForm -->
            <div class="searchForm">
                <form action="#" class="row m0">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-search"></i></span>
                        <input type="search" name="search" class="form-control" placeholder="Type & Hit Enter">
                        <span class="input-group-addon form_hide"><i class="fa fa-times"></i></span>
                    </div>
                </form>
            </div><!-- End searchForm -->
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="col-md-2 p0">
                <div class="navbar-header" >
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#min_navbar" >
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    </button>

                    <a class="navbar-brand"  href="<?php echo base_url().'home'?>"><img src="images/logo.png"></a>
                </div>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="col-md-10 p0">
                <div class="collapse navbar-collapse" id="min_navbar">
                         <?php $this->load->view('home/menu');?>
	  
                </div><!-- /.navbar-collapse -->
            </div>
        </div><!-- /.container -->
    </nav>
	<!-- End Header_Area -->
    <!-- Slider area -->
    <section class="slider_area row m0">
        <!-- <div class="slider_inner">
            <div data-thumb="images/slider-1.jpg" data-src="images/slider-1.jpg">
                <div class="camera_caption">
                   <div class="container">
                   	<h5 class=" wow fadeInUp animated">01</h5>
                         <h5 class=" wow fadeInUp animated">Welcome to our</h5>
                        <h3 class=" wow fadeInUp animated" data-wow-delay="0.5s">CLEAN, MODERN, MULTIPURPOSE THEME</h3>
                        <p class=" wow fadeInUp animated" data-wow-delay="0.8s">Our team of professionals will help you turn your dream home or flat into a reality fast. The Love Boat promises something for everyone. Now the world don't move to the beat of just one</p>
                        <a class=" wow fadeInUp animated" data-wow-delay="1s" href="#">Read More</a>
                   </div>
                </div>
            </div>
            <div data-thumb="images/slider-2.jpg" data-src="images/slider-2.jpg">
                 <div class="camera_caption">
                   <div class="container">
                   	<h5 class=" wow fadeInUp animated">02</h5>
                        <h5 class=" wow fadeInUp animated">Welcome to our</h5>
                        <h3 class=" wow fadeInUp animated" data-wow-delay="0.5s">CLEAN ,MODERN, MULTIPURPOSE THEME</h3>
                        <p class=" wow fadeInUp animated" data-wow-delay="0.8s">Our team of professionals will help you turn your dream home or flat into a reality fast. The Love Boat promises something for everyone. Now the world don't move to the beat of just one</p>
                        <a class=" wow fadeInUp animated" data-wow-delay="1s" href="#">Read More</a> 
                   </div>
                </div>
            </div>
        <div data-thumb="images/slider-1.jpg" data-src="images/slider-1.jpg">
         <div class="camera_caption">
                   <div class="container">
                        <h5 class=" wow fadeInUp animated">03</h5>
                         <h5 class=" wow fadeInUp animated">Welcome to our</h5>
                        <h3 class=" wow fadeInUp animated" data-wow-delay="0.5s">CLEAN, MODERN, MULTIPURPOSE THEME</h3>
                        <p class=" wow fadeInUp animated" data-wow-delay="0.8s">Our team of professionals will help you turn your dream home or flat into a reality fast. The Love Boat promises something for everyone. Now the world don't move to the beat of just one</p>
                        <a class=" wow fadeInUp animated" data-wow-delay="1s" href="#">Read More</a> 
                   </div>
                </div>
            </div>
            <div data-thumb="images/slider-2.jpg" data-src="images/slider-2.jpg">
   <div class="camera_caption">
                   <div class="container">
                        <h5 class=" wow fadeInUp animated">04</h5>
                         <h3 class=" wow fadeInUp animated" data-wow-delay="0.5s">CLEAN ,MODERN, MULTIPURPOSE THEME</h3>
                        <p class=" wow fadeInUp animated" data-wow-delay="0.8s">Our team of professionals will help you turn your dream home or flat into a reality fast. The Love Boat promises something for everyone. Now the world don't move to the beat of just one</p>
                        <a class=" wow fadeInUp animated" data-wow-delay="1s" href="#">Read More</a>
                   </div>
                </div>
            </div>
        </div> -->
 
<div class="slider">
  <div class="slide active-slide" data-slide-no='0'>
      <h1>First Slide</h1>
      <img src = "images/slider-1.jpg">
  </div>     
            
  <div class="slide" data-slide-no='1'>
    <h1>Second Slide</h1>
    <img src ="images/slider-2.jpg">
  </div>

  <div class="slide" data-slide-no='2'>
    <h1>Third Slide</h1>
    <img src = "images/slider-1.jpg">
  </div>

  <div class="slide" data-slide-no='3'>
    <h1>Fourth Slide</h1>
    <img src = "images/slider-2.jpg">
  </div>
  
  
    <a href="#" class="arrow-prev">&#10096;</a>
  
    <ul class="slider-dots">
      <li class="dot active-dot" data-slide-control="0">&bull;</li>
      <li class="dot" data-slide-control="1">&bull;</li>
      <li class="dot" data-slide-control="2">&bull;</li>
      <li class="dot" data-slide-control="3">&bull;</li>
    </ul>

    <a href="#" class="arrow-next">&#10095;</a>
</div>

</section>
    <!-- Our Latest Blog Area -->
    <section class="latest_blog_area">
        <div class="container">
            <div class="tittle wow fadeInUp">
                <h2>Berita Terbaru</h2>
                <!-- <h4>Lorem Ipsum is simply dummy text of the printing and typesetting industry</h4> -->
            </div>
            <div class="row latest_blog">
                <div class="col-md-4 col-sm-6 blog_content">
                    <img src="images/blog/lb-1.jpg" alt="">
                    <a href="#" class="blog_heading">Our Latest Project</a>
                    <h4><small>by  </small><a href="#">Emran Khan</a><span>/</span><small>ON </small> October 15, 2016</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam sagittis iaculis velit in tristique. Curabitur ac urna urna. Sed sollicitudin at nisi sed accumsan... <a href="#">Read More</a></p>
                </div>
                <div class="col-md-4 col-sm-6 blog_content">
                    <img src="images/blog/lb-2.jpg" alt="">
                    <a href="#" class="blog_heading">Our Latest Project</a>
                    <h4><small>by  </small><a href="#">Prodip Ghosh</a><span>/</span><small>ON </small> October 15, 2016</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam sagittis iaculis velit in tristique. Curabitur ac urna urna. Sed sollicitudin at nisi sed accumsan... <a href="#">Read More</a></p>
                </div>
                <div class="col-md-4 col-sm-6 blog_content">
                    <img src="images/blog/lb-3.jpg" alt="">
                    <a href="#" class="blog_heading">Our Latest Project</a>
                    <h4><small>by  </small><a href="#">Prodip Ghosh</a><span>/</span><small>ON </small> October 15, 2016</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam sagittis iaculis velit in tristique. Curabitur ac urna urna. Sed sollicitudin at nisi sed accumsan... <a href="#">Read More</a></p>
                </div>
            </div>
        </div>
    </section>
   
    
    <!-- Our Services Area -->
    <section class="our_services_area">
        <div class="container">
            <div class="tittle wow fadeInUp">
                <h2>Destinasi Wisata</h2>
               <!--  <h4>Lorem Ipsum is simply dummy text of the printing and typesetting industry</h4> -->
            </div>
            <div class="portfolio_inner_area">
                <div class="portfolio_item">
                   <div class="grid-sizer"></div>
                    <div class="single_facilities col-xs-4 p0 painting photography adversting">
                       <div class="single_facilities_inner">
                          		<a href="#"> 
                          
                          	<img src="images/gallery/sv-1.jpg" alt="">
                            <div class="gallery_hover">
                               <h4 style="font-size: 200%;">Wisata<br>
                                Religi</h4>
                                 
                            </div>
                        </a>
                        </div>
                    </div>
                    <div class="single_facilities col-xs-4 p0 webdesign">
                       <div class="single_facilities_inner">
                          		<a href="#"> 
                          
                          	<img src="images/gallery/sv-2.jpg" alt="">
                            <div class="gallery_hover">
                               <h4 style="font-size: 200%;">Wisata<br>
                               Sejarah</h4>
                                
                            </div>
                        </a>
                        </div>
                    </div>
                    <div class="single_facilities col-xs-4 painting p0 photography branding">
                       <div class="single_facilities_inner">
                          		<a href="#"> 
                          
                          	<img src="images/gallery/sv-3.jpg" alt="">
                            <div class="gallery_hover">
                                <h4 style="font-size: 200%;">Wisata<br>
                               Budaya</h4>
                               
                            </div>
                        </a>
                        </div>
                    </div>
                    <div class="single_facilities col-xs-4 p0 adversting webdesign adversting">
                       <div class="single_facilities_inner">
                          		<a href="#"> 
                          
                          	<img src="images/gallery/sv-4.jpg" alt="">
                            <div class="gallery_hover">
                                <h4 style="font-size: 200%;">Wisata<br>
                               Belanja</h4>
                               
                            </div>
                        </a>
                        </div>
                    </div>
                    <div class="single_facilities col-xs-4 p0 painting adversting branding">
                       <div class="single_facilities_inner">
                          	<a href="#"> 
                          
                          	<img src="images/gallery/sv-5.jpg" alt="">
                            <div class="gallery_hover">
                                <h4 style="font-size: 200%;">Wisata<br>
                               Edukasi</h4>
                               
                            </div>
                        </a>
                        </div>
                    </div>
                    <div class="single_facilities col-xs-4 p0 webdesign photography magazine adversting">
                       <div class="single_facilities_inner">
                          	<a href="#"> 
                          	<img src="images/gallery/sv-6.jpg" alt="">
                            <div class="gallery_hover">
                                <h4 style="font-size: 200%;">Wisata<br>
                               Buatan</h4>
                               
                            </div>
                        </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Our Featured Works Area -->
    <section class="featured_works row" data-stellar-background-ratio="0.3">
        <div class="tittle wow fadeInUp">
            <h2>Event</h2>
            <!-- <h4>Lorem Ipsum is simply dummy text of the printing and typesetting industry</h4> -->
        </div>
        <div class="featured_gallery">
            <div class="col-md-3 col-sm-4 col-xs-6 gallery_iner p0">
                <img src="images/gallery/gl-1.jpg" alt="">
                <div class="gallery_hover">
                    <h4>Event 1</h4>
                    <a href="#">Lihat Event</a>
                </div>
            </div>
            <div class="col-md-3 col-sm-4 col-xs-6 gallery_iner p0">
                <img src="images/gallery/gl-2.jpg" alt="">
                <div class="gallery_hover">
                    <h4>Event 2</h4>
                    <a href="#">Lihat Event</a>
                </div>
            </div>
            <div class="col-md-3 col-sm-4 col-xs-6 gallery_iner p0">
                <img src="images/gallery/gl-3.jpg" alt="">
                <div class="gallery_hover">
                    <h4>Event 3</h4>
                    <a href="#">Lihat Event</a>
                </div>
            </div>
            <div class="col-md-3 col-sm-4 col-xs-6 gallery_iner p0">
                <img src="images/gallery/gl-4.jpg" alt="">
                <div class="gallery_hover">
                    <h4>Event 4</h4>
                    <a href="#">Lihat Event</a>
                </div>
            </div>
            <div class="col-md-3 col-sm-4 col-xs-6 gallery_iner p0">
                <img src="images/gallery/gl-5.jpg" alt="">
                <div class="gallery_hover">
                    <h4>Event 5</h4>
                    <a href="#">Lihat Event</a>
                </div>
            </div>
            <div class="col-md-3 col-sm-4 col-xs-6 gallery_iner p0">
                <img src="images/gallery/gl-6.jpg" alt="">
                <div class="gallery_hover">
                    <h4>Event 6</h4>
                    <a href="#">Lihat Event</a>
                </div>
            </div>
            <div class="col-md-3 col-sm-4 col-xs-6 gallery_iner p0">
                <img src="images/gallery/gl-7.jpg" alt="">
                <div class="gallery_hover">
                    <h4>Event 7</h4>
                    <a href="#">Lihat Event</a>
                </div>
            </div>
            <div class="col-md-3 col-sm-4 col-xs-6 gallery_iner p0">
                <img src="images/gallery/gl-8.jpg" alt="">
                <div class="gallery_hover">
                    <h4>Event 8</h4>
                    <a href="#">Lihat Event</a>
                </div>
            </div>
        </div>
    </section>
    <!-- End Our Featured Works Area -->

    
    <!-- End Our Latest Blog Area -->

    <!-- Our Partners Area -->
    <section class="our_partners_area">
        <div class="container">
            <div class="tittle wow fadeInUp">
                <h2>Partner Kita</h2>
                
            </div>
            <div class="partners">
                <div class="item"><img src="images/client_logo/client_logo-1.png" alt=""></div>
                <div class="item"><img src="images/client_logo/client_logo-2.png" alt=""></div>
                <div class="item"><img src="images/client_logo/client_logo-3.png" alt=""></div>
                <div class="item"><img src="images/client_logo/client_logo-4.png" alt=""></div>
                <div class="item"><img src="images/client_logo/client_logo-5.png" alt=""></div>
            </div>
        </div>
    </section>
    <!-- End Our Partners Area -->

    <!-- Footer Area -->
    <footer class="footer_area">
        <div class="container">
            <div class="footer_row row">
                <div class="col-md-3 col-sm-6 footer_about">
                    <img width="20%" height ="20%" src="images/logo.png"?>>
                     <p>Tentang aplikasi ......</p>


                </div>
                <div class="col-md-3 col-sm-6 footer_about quick">
                    <h2>Fitur Lain</h2>
                    <ul class="quick_link">
                        <li><a href="#"><i class="fa fa-chevron-right"></i>Ebook</a></li>
                    </ul>
                </div>
                <div class="col-md-3 col-sm-6 footer_about">
                    <h2>Mobile App</h2>
                    <a href="#">
      
                     <img width="70%" height ="70%" src="images/google_play.png"></a>
         
                </div>
                <div class="col-md-3 col-sm-6 footer_about">
                    <h2>CONTACT US</h2>
                    <address>
                        <ul class="my_address">
                            <li><a href="#"><i class="fa fa-envelope" aria-hidden="true"></i>info@thethemspro.com</a></li>
                            <li><a href="#"><i class="fa fa-phone" aria-hidden="true"></i>+880 123 456 789</a></li>
                            <li><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i><span>Sector # 10, Road # 05, Plot # 31, Uttara, Dhaka 1230 </span></a></li>
                        </ul>
                    </address>
                </div>
            </div>
        </div>
        <div class="copyright_area">
            Copyright 2019 All rights reserved ||
        </div>
    </footer>
    <!-- End Footer Area -->

    <!-- jQuery JS -->
    <script src="js/jquery-1.12.0.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Animate JS -->
    <script src="vendors/animate/wow.min.js"></script>
    <!-- Camera Slider -->
    <script src="vendors/camera-slider/jquery.easing.1.3.js"></script>
    <script src="vendors/camera-slider/camera.min.js"></script>
    <!-- Isotope JS -->
    <script src="vendors/isotope/imagesloaded.pkgd.min.js"></script>
    <script src="vendors/isotope/isotope.pkgd.min.js"></script>
    <!-- Progress JS -->
    <script src="vendors/Counter-Up/jquery.counterup.min.js"></script>
    <script src="vendors/Counter-Up/waypoints.min.js"></script>
    <!-- Owlcarousel JS -->
    <script src="vendors/owl_carousel/owl.carousel.min.js"></script>
    <!-- Stellar JS -->
    <script src="vendors/stellar/jquery.stellar.js"></script>
    <!-- Theme JS -->
    <script src="js/theme.js"></script>
</body>
</html>
