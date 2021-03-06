<?php include("auth.php"); ?>

<!DOCTYPE html>
<html lang="en"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>CareRott</title>

    <!-- Bootstrap Core CSS -->
    <link href="CareRott_files/bootstrap.css" rel="stylesheet">

    <!-- Bootstrap Core CSS -->
    <link href="owl-carousel/dist/assets/owl.theme.default.min.css" rel="stylesheet">
    <link href="owl-carousel/dist/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="owl-carousel/dist/assets/owl.theme.green.min.css"  rel="stylesheet">
    <link href="css/owl-carousel.css" rel="stylesheet">
    <link href="css/nav.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="CareRott_files/agency.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="CareRott_files/font-awesome.css" rel="stylesheet" type="text/css">
    <link href="CareRott_files/css_002.css" rel="stylesheet" type="text/css">
    <link href="CareRott_files/css_003.css" rel="stylesheet" type="text/css">
    <link href="CareRott_files/css.css" rel="stylesheet" type="text/css">
    <link href="CareRott_files/css_004.css" rel="stylesheet" type="text/css">
    <link href="css/reset.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- <style class="firebugResetStyles" type="text/css" charset="utf-8">/* See license.txt for terms of usage */

    </style> -->
</head>

<body id="page-top" class="index">

    <!-- Navigation -->
    <?php include 'nav.php' ?>
    <!-- Header -->
    <header>
        <div class="owl-carousel owl-theme owl-loaded owl-drag">
            <div class="item">
            <img src="img/fridge-2.png" alt="" />
            <div class="inner">
                <div class="row row-content">
                    <div class="col-md-12">
                        <div class="headline-wrap">
                            <h1><span class="reveal-text">Mobile Fridge</span></h1>
                        </div>
                    </div>
                </div>
                <div class="row row-cta">
                    <div class="col-md-12 cta-wrap">
                        <a class="cta-main btn btn-sm" href="#contact"><span class="cta-text reveal-text">Book Now</span></a>
                    </div>
                </div>
                </div>
            </div>
            <div class="item">
            <img src="img/toilet-1.jpg" alt="" />
            <div class="inner">
                <div class="row row-content">
                    <div class="col-md-12">
                            <div class="headline-wrap">
                            <h1><span class="reveal-text">Mobile Toilet</span></h1>
                        </div>
                    </div>
                </div>
                <div class="row row-cta">
                    <div class="col-md-12 cta-wrap js-cta-wrap">
                        <a class="cta-main btn btn-sm" href="#contact"><span class="cta-text reveal-text">Book Now</span></a>
                    </div>
                </div>
                </div>
            </div>  
    </div>
    </header>
 
    <!-- Team Section -->
    <section id="team" class="bg-light-gray">
        <div class="container">
            <div class="row">
                <!-- <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Our Amazing Team</h2>
                    <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>
            </div> -->
            <div class="row">
            <div class="col-sm-6">
                    <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h1>about us</h1>
                                    <h4 class="subheading">Meet the team</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">Linomtha is an affiliate-marketing agency designed to help fuel
                                     innovation and economic growth in South Africa, by building sustainable micro-franchise model that 
                                    involves a network of entrepreneurs and SMME’s within the hiring services sector linking them 
                                    together through a shared business operations that includes comprehensive guidelines for:</p>
                                    
                                    <ul>
                                        <li>Technology Selection</li>
                                        <li>Supply Chain Management</li>
                                        <li>Customer service</li>
                                        <li>Quality Control</li>
                                        <li>Branding &amp; Marketing</li>
                                        <li>Data Analytics &amp; Reporting</li>
                                    </ul>
                                </div>
                            </div>
                </div>
                <div class="col-sm-3">
                    <div class="team-member">
                        <img src="CareRott_files/2.jpg" class="img-responsive img-circle" alt="">
                        <h4>Lusindiso Qhusheka</h4>
                        <p class="text-muted">Operations</p>
                        <ul class="list-inline social-buttons">
                            <li><a href="#"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
               
            </div>
            <div class="row">
                <div class="col-lg-12 col-lg-offset-0 text-center">
               
                </div>
            </div>
        </div>
    </div></section>
    
    <!-- Contact Section -->
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Contact Us</h2>
                    <h3 class="section-subheading text-muted">Stay connected...</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <form name="sentMessage" id="contactForm" novalidate="">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input aria-invalid="false" class="form-control" placeholder="Your Name *" id="name" required="" data-validation-required-message="Please enter your name." type="text">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input aria-invalid="false" class="form-control" placeholder="Your Email *" id="email" required="" data-validation-required-message="Please enter your email address." type="email">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input aria-invalid="false" class="form-control" placeholder="Your Phone *" id="phone" required="" data-validation-required-message="Please enter your phone number." type="tel">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <textarea aria-invalid="false" class="form-control" placeholder="Your Message *" id="message" required="" data-validation-required-message="Please enter a message."></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-lg-12 text-center">
                                <div id="success"></div>
                                <button type="submit" class="btn btn-xl">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <span class="copyright">Copyright © CareRott 2015</span>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline social-buttons">
                        <li><a href="#"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline quicklinks">
                        <li><a href="#">Privacy Policy</a>
                        </li>
                        <li><a href="#">Terms of Use</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <!-- Portfolio Modals -->
    <!-- Use the modals below to showcase details about your portfolio projects! -->

    <!-- Portfolio Modal 1 -->
    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <!-- Project Details Go Here -->
                            <h2>Project Name</h2>
                            <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                            <img class="img-responsive img-centered" src="CareRott_files/roundicons-free.png" alt="">
                            <p>Use this area to describe your project. 
Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis
 dolorem culpa incidunt minus dignissimos deserunt repellat aperiam 
quasi sunt officia expedita beatae cupiditate, maiores repudiandae, 
nostrum, reiciendis facere nemo!</p>
                            <p>
                                <strong>Want these icons in this portfolio item sample?</strong>You can download 60 of them for free, courtesy of <a href="https://getdpd.com/cart/hoplink/18076?referrer=bvbo4kax5k8ogc">RoundIcons.com</a>, or you can purchase the 1500 icon set <a href="https://getdpd.com/cart/hoplink/18076?referrer=bvbo4kax5k8ogc">here</a>.</p>
                            <ul class="list-inline">
                                <li>Date: July 2014</li>
                                <li>Client: Round Icons</li>
                                <li>Category: Graphic Design</li>
                            </ul>
                            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 2 -->
    <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>Project Heading</h2>
                            <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                            <img class="img-responsive img-centered" src="CareRott_files/startup-framework-preview.png" alt="">
                            <p><a href="http://designmodo.com/startup/?u=787">Startup Framework</a>
 is a website builder for professionals. Startup Framework contains 
components and complex blocks (PSD+HTML Bootstrap themes and templates) 
which can easily be integrated into almost any design. All of these 
components are made in the same style, and can easily be integrated into
 projects, allowing you to create hundreds of solutions for your future 
projects.</p>
                            <p>You can preview Startup Framework <a href="http://designmodo.com/startup/?u=787">here</a>.</p>
                            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 3 -->
    <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <!-- Project Details Go Here -->
                            <h2>Project Name</h2>
                            <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                            <img class="img-responsive img-centered" src="CareRott_files/treehouse-preview.png" alt="">
                            <p>Treehouse is a free PSD web template built by <a href="https://www.behance.net/MathavanJaya">Mathavan Jaya</a>. This is bright and spacious design perfect for people or startup companies looking to showcase their apps or other projects.</p>
                            <p>You can download the PSD template in this portfolio sample item at <a href="http://freebiesxpress.com/gallery/treehouse-free-psd-web-template/">FreebiesXpress.com</a>.</p>
                            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 4 -->
    <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <!-- Project Details Go Here -->
                            <h2>Project Name</h2>
                            <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                            <img class="img-responsive img-centered" src="CareRott_files/golden-preview.png" alt="">
                            <p>Start Bootstrap's Agency theme is based on Golden, a free PSD website template built by <a href="https://www.behance.net/MathavanJaya">Mathavan Jaya</a>.
 Golden is a modern and clean one page web template that was made 
exclusively for Best PSD Freebies. This template has a great portfolio, 
timeline, and meet your team sections that can be easily modified to fit
 your needs.</p>
                            <p>You can download the PSD template in this portfolio sample item at <a href="http://freebiesxpress.com/gallery/golden-free-one-page-web-template/">FreebiesXpress.com</a>.</p>
                            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 5 -->
    <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <!-- Project Details Go Here -->
                            <h2>Project Name</h2>
                            <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                            <img class="img-responsive img-centered" src="CareRott_files/escape-preview.png" alt="">
                            <p>Escape is a free PSD web template built by <a href="https://www.behance.net/MathavanJaya">Mathavan Jaya</a>.
 Escape is a one page web template that was designed with agencies in 
mind. This template is ideal for those looking for a simple one page 
solution to describe your business and offer your services.</p>
                            <p>You can download the PSD template in this portfolio sample item at <a href="http://freebiesxpress.com/gallery/escape-one-page-psd-web-template/">FreebiesXpress.com</a>.</p>
                            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 6 -->
    <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <!-- Project Details Go Here -->
                            <h2>Project Name</h2>
                            <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                            <img class="img-responsive img-centered" src="CareRott_files/dreams-preview.png" alt="">
                            <p>Dreams is a free PSD web template built by Mathavan Jaya</a>.
 Dreams is a modern one page web template designed for almost any 
purpose. It’s a beautiful template that’s designed with the Bootstrap 
framework in mind.</p>
                            <p>You can download the PSD template in this portfolio sample item at <a href="">FreebiesXpress.com</a>.</p>
                            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="owl-carousel/dist/owl.carousel.min.js">

    <!-- Bootstrap Core JavaScript -->
    <script src="CareRott_files/bootstrap.js"></script>

    <!-- Plugin JavaScript -->
    <script src="CareRott_files/classie.js"></script>
    <script src="CareRott_files/cbpAnimatedHeader.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="CareRott_files/jqBootstrapValidation.js"></script>
    <script src="CareRott_files/contact_me.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="CareRott_files/agency.js"></script>

    <!-- Custom Script JavaScript -->
    <script src="js/script.js"></script>    
</body>
</html>