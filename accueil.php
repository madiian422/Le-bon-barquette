<?php

if (isset($_SESSION['name']) && !isset($_SESSION['id'])){
    
    header("location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="assets/img/ico/favicon.ico">
    <link rel="apple-touch-icon" sizes="144x144" href="img/ico/apple-touch-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="114x114" href="assets/img/ico/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="72x72" href="assets/img/ico/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" href="assets/img/ico/apple-touch-icon-57x57.png">

    <title>the barquette!</title>

    <!-- Bootstrap Core CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/animate.css" rel="stylesheet">
    <link href="assets/css/plugins.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="assets/font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="assets/css/pe-icons.css" rel="stylesheet">

</head>

<body id="page-top" class="regular-navigation">


    <div class="master-wrapper">

        <div class="preloader">
            <div class="preloader-img">
            	<span class="loading-animation animate-flicker"><img src="assets/img/loading.GIF" alt="loading" /></span>
            </div>
        </div>

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-fixed-top fadeInDown" data-wow-delay="0.2s">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header page-scroll">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#main-navigation">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand smoothie" href="index.html">THE <span class="theme-accent-color">BARQUETTE</span></a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="main-navigation">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#about" class="page-scroll">notre société</a></li>  
                        <li><a href="#the-menu" class="page-scroll">nos menus</a></li>    
                                       
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown">autre <span class="pe-7s-angle-down"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="404.html">mon compte</a></li>
                                <li><a  onclick="myFunction()">déconnexion</a></li>
                            </ul>
                        </li>
                        <li><a href="#search"><i class="fa fa-search"></i></a></li>
                    </ul>

                </div>
                <!-- /.navbar-collapse -->         

            </div>
            <!-- /.container-fluid -->
        </nav>

        <div id="search-wrapper">
            <button type="button" class="close">×</button>
            <form>
                <input type="search" value="" placeholder="Enter Search Term" />
                <button type="submit" class="btn btn-primary">Search</button>
            </form>
        </div>

        <!-- Header -->
        <header id="headerwrap" class="backstretched fullheight">
            <div class="container-fluid fullheight">
                <div class="vertical-center row">
                    <div class="col-sm-1 pull-left text-center slider-control match-height">
                        <a href="#" class="prev-bs-slide vertical-center wow fadeInLeft" data-wow-delay="0.8s"><i class="fa fa-long-arrow-left"></i></a>
                    </div>
                    <div class="intro-text text-center smoothie col-sm-10 match-height">                    
                        <div class="intro-heading wow fadeIn heading-font" data-wow-delay="0.8s"><img src="assets/img/intro-logo.png"></div>              
                    </div>
                    <div class="col-sm-1 pull-right text-center slider-control match-height">
                        <a href="#" class="next-bs-slide vertical-center wow fadeInRight" data-wow-delay="0.8s"><i class="fa fa-long-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </header>

        <section id="about" class="top-border-me">
            <div class="section-inner">

                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 text-center mb100">                        
                            <h2 class="section-heading">A <span class="theme-accent-color">Warm</span> Welcome</h2>
                            <hr class="thin-hr">
                            <h3 class="section-subheading secondary-font">Were very happy to see you.</h3>
                        </div>
                    </div>
                </div>

                <div>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-5 col-md-offset-1">
                                <h2 class="mb50">About <span class="theme-accent-color">DuJour</span></h2>
                                <p class="lead">Fish don't fry in the kitchen and beans don't burn on the grill. Took a whole lotta tryin' just to get up that hill. Love exciting and new. Come aboard were expecting you. Love life's sweetest reward Let it flow it floats back to you.</p>
                                <p>Here he comes Here comes Speed Racer. He's a demon on wheels. Believe it or not I'm walking on air. I never thought I could feel so free. Flying away on a wing and a prayer.</p>
                            </div>

                            <div class="col-md-5">
                                <h2 class="mb50">Latest <span class="theme-accent-color">Awards</span></h2>
                                <p class="lead">Fish don't fry in the kitchen and beans don't burn on the grill. Took a whole lotta tryin' just to get up that hill. Love exciting and new. Come aboard were expecting you. Love life's sweetest reward Let it flow it floats back to you.</p>
                                <p>Here he comes Here comes Speed Racer. He's a demon on wheels. Believe it or not I'm walking on air. I never thought I could feel so free. Flying away on a wing and a prayer.</p>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section>

       



        <section id="the-menu">
            <div class="section-inner">

                 <div class="container">
                    <div class="row">
                        <div class="col-lg-12 text-center mb100">
                            <h2 class="section-heading">Browse <span class="theme-accent-color">The</span> Menu</h2>
                            <hr class="thin-hr">
                            <h3 class="section-subheading secondary-font">Your tastebuds will thank you.</h3>
                        </div>
                    </div>
                </div>
                
                <div class="container">

                    <div class="row mb100">
                      <div class="col-md-4 wow fadeIn">
                        <h2 class="mb50"><span class="heading-font text-uppercase">Fresh Pizza</span></h2>
                        <h3>Lorem Ipsum <span class="theme-accent-color">$8.95</span></h3>
                        <p>No phone no lights no motor car not a single luxury. Like Robinson Crusoe it's primitive as can be.</p>
                        <h3>Lorem Ipsum <span class="theme-accent-color">$8.95</span></h3>
                        <p>No phone no lights no motor car not a single luxury. Like Robinson Crusoe it's primitive as can be.</p>
                        <h3>Lorem Ipsum <span class="theme-accent-color">$8.95</span></h3>
                        <p>No phone no lights no motor car not a single luxury. Like Robinson Crusoe it's primitive as can be.</p>
                        <h3>Lorem Ipsum <span class="theme-accent-color">$8.95</span></h3>
                        <p>No phone no lights no motor car not a single luxury. Like Robinson Crusoe it's primitive as can be.</p>
                      </div>

                      <div class="col-md-4 wow fadeIn">
                        <h2 class="mb50"><span class="heading-font text-uppercase">Famility Favourites</span></h2>
                        <h3>Lorem Ipsum <span class="theme-accent-color">$8.95</span></h3>
                        <p>No phone no lights no motor car not a single luxury. Like Robinson Crusoe it's primitive as can be.</p>
                        <h3>Lorem Ipsum <span class="theme-accent-color">$8.95</span></h3>
                        <p>No phone no lights no motor car not a single luxury. Like Robinson Crusoe it's primitive as can be.</p>
                        <h3>Lorem Ipsum <span class="theme-accent-color">$8.95</span></h3>
                        <p>No phone no lights no motor car not a single luxury. Like Robinson Crusoe it's primitive as can be.</p>
                        <h3>Lorem Ipsum <span class="theme-accent-color">$8.95</span></h3>
                        <p>No phone no lights no motor car not a single luxury. Like Robinson Crusoe it's primitive as can be.</p>
                      </div>

                      <div class="col-md-4 wow fadeIn">
                        <h2 class="mb50"><span class="heading-font text-uppercase">Catch of the Day</span></h2>
                        <h3>Lorem Ipsum <span class="theme-accent-color">$8.95</span></h3>
                        <p>No phone no lights no motor car not a single luxury. Like Robinson Crusoe it's primitive as can be.</p>
                        <h3>Lorem Ipsum <span class="theme-accent-color">$8.95</span></h3>
                        <p>No phone no lights no motor car not a single luxury. Like Robinson Crusoe it's primitive as can be.</p>
                        <h3>Lorem Ipsum <span class="theme-accent-color">$8.95</span></h3>
                        <p>No phone no lights no motor car not a single luxury. Like Robinson Crusoe it's primitive as can be.</p>
                        <h3>Lorem Ipsum <span class="theme-accent-color">$8.95</span></h3>
                        <p>No phone no lights no motor car not a single luxury. Like Robinson Crusoe it's primitive as can be.</p>
                      </div>
                    </div>
        </section>



        <section class="dark-wrapper opaqued parallax" data-parallax="scroll" data-image-src="assets/img/bg/bg10.jpg" data-speed="0.8">
            <div class="section-inner">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 text-center mb100">
                            <h2 class="section-heading">Our <span class="theme-accent-color">Happy</span> Customers</h2>
                            <hr class="thin-hr">
                            <h3 class="section-subheading secondary-font">Satisfaction, everytime.</h3>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <ul class="owl-carousel-paged testimonial-owl wow fadeIn list-unstyled" data-items="1" data-items-desktop="[1200,1]" data-items-desktop-small="[980,1]" data-items-tablet="[768,1]" data-items-mobile="[479,1]">
                                <li>
                                    <div class="row">
                                        <div class="col-xs-8 col-xs-offset-2 item-caption">
                                            <div class="row">
                                                <div class="col-sm-2">
                                                    <img src="assets/img/team/small1.jpg" class="img-responsive testimonial-author" alt="">
                                                </div>
                                                <div class="col-sm-10">                                                
                                                    <h4>Charles Davies</h4>
                                                    <p>Compellingly customize highly efficient outsourcing with premium quality vectors. Conveniently target customer directed relationships after highly efficient process improvements.</p>
                                                    <ul class="list-inline">
                                                        <li><i class="fa fa-star theme-accent-color"></i></li>
                                                        <li><i class="fa fa-star theme-accent-color"></i></li>
                                                        <li><i class="fa fa-star theme-accent-color"></i></li>
                                                        <li><i class="fa fa-star theme-accent-color"></i></li>
                                                        <li><i class="fa fa-star theme-accent-color"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="row">
                                        <div class="col-xs-8 col-xs-offset-2 item-caption">
                                            <div class="row">
                                                <div class="col-sm-2">
                                                    <img src="assets/img/team/small1.jpg" class="img-responsive testimonial-author" alt="">
                                                </div>
                                                <div class="col-sm-10">                                                
                                                    <h4>Charles Davies</h4>
                                                    <p>Compellingly customize highly efficient outsourcing with premium quality vectors. Conveniently target customer directed relationships after highly efficient process improvements.</p>
                                                    <ul class="list-inline">
                                                        <li><i class="fa fa-star theme-accent-color"></i></li>
                                                        <li><i class="fa fa-star theme-accent-color"></i></li>
                                                        <li><i class="fa fa-star theme-accent-color"></i></li>
                                                        <li><i class="fa fa-star theme-accent-color"></i></li>
                                                        <li><i class="fa fa-star theme-accent-color"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="dark-wrapper opaqued parallax" data-parallax="scroll" data-image-src="assets/img/bg/bg1.jpg" data-speed="0.8">
            <div class="section-inner">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 text-center mb100">
                            <h2 class="section-heading">Book <span class="theme-accent-color">Your</span> Table</h2>
                            <hr class="thin-hr">
                            <h3 class="section-subheading secondary-font">Satisfaction, everytime.</h3>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row mb100"> 
                        <!-- Address, Phone & Email -->
                        <div class="col-md-5 col-md-offset-1 wow fadeIn">
                            <h3 class="mb30">Address</h3>
                            <p class="lead">Florence Building</p>
                            <p class="lead">Kings Square<br>
                            London, LDN1 23 </p>
                            <p class="lead">+448754 658 048<br>
                        </div>

                        <div class="col-md-5 col-sm-7 wow fadeIn">
                            <h3 class="mb30">Opening Times</h3>
                            <div class="row">
                              <div class="col-xs-5">
                                <ul class="list-unstyled weekdays">
                                  <li>Monday</li>
                                  <li>Tuesday</li>
                                  <li>Wednesday</li>
                                  <li>Thursday</li>
                                  <li>Friday</li>
                                  <li>Saturday</li>
                                  <li>Sunday</li>
                                </ul>
                              </div>
                              <div class="col-xs-7">
                                <ul class="list-unstyled">
                                  <li>11:00 AM - 11:00 PM</li>
                                  <li>11:00 AM - 11:00 PM</li>
                                  <li>11:00 AM - 11:00 PM</li>
                                  <li>11:00 AM - 11:00 PM</li>
                                  <li>11:00 AM - 1:00 AM</li>
                                  <li>11:00 AM - 1:00 AM</li>
                                  <li>11:00 AM - 1:00 AM</li>
                                </ul>
                              </div>
                            </div>
                        </div>                
                    </div>

                    <div class="row">
                        <div class="col-md-10 col-md-offset-1">
                            <div class="row">
                                <div id="message" class="col-md-12"></div>
                                <form method="post" action="sendemail.php" id="contactform" class="form-group main-contact-form col-md-12 wow fadeIn" data-wow-delay="0.2s">
                                    <input type="text" class="form-control col-md-4" name="name" placeholder="Your Name *" id="name" required data-validation-required-message="Please enter your name." />
                                    <input type="text" class="form-control col-md-4" name="email" placeholder="Your Email *" id="email" required data-validation-required-message="Please enter your email address." />
                                    <input type="text" class="form-control col-md-4" name="website" placeholder="Your URL *" id="website" required data-validation-required-message="Please enter your web address." />
                                    <textarea name="comments" class="form-control" id="comments" placeholder="Your Message *" required data-validation-required-message="Please enter a message."></textarea>
                                    <input class="btn btn-primary btn-white mt30 pull-right" type="submit" name="submit" value="Submit" />
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    	</section>

        

        <footer class="white-wrapper">
            <div class="container-fluid">
                <div class="row text-center">
                    <div class="col-md-12 wow fadeIn mb30" data-wow-delay="0.2s">
                        <span class="copyright">Copyright 2019. Designed by DISTINCTIVE THEMES</span>
                    </div>
                    <div class="col-md-12">
                        <ul class="list-inline social-links wow fadeIn" data-wow-delay="0.2s">
                            <li>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-pinterest"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-dribbble"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-behance"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>

        <div id="bottom-frame"></div>

        <a href="#" id="back-to-top"><i class="fa fa-long-arrow-up"></i></a>

    </div>

    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/init.js"></script>

   
    
    <script type="text/javascript">
    $(document).ready(function(){
       'use strict';
        jQuery('#headerwrap').backstretch([
          "assets/img/bg/bg1.jpg",
          "assets/img/bg/bg2.jpg",
          "img/carry.jpg",
        ], {duration: 8000, fade: 500});
    });
    </script>
    <script>
    
    function myFunction() {
  var txt;
  var r = confirm("êtes vous sûr de vouloir vous déconnecter? y/n");
  if (r == true) {
    document.location.href="deconnexion.php";
  } else {
      location.reload();
  }
  
}
        

    </script>

</body>

</html>