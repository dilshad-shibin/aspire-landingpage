<?php
error_reporting(0);
$source = '';
$source = $_GET['utm_source'];
$medium = '';
$medium = $_GET['utm_medium'];
?>
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="og:title" content="Chemex">
    <meta name="og:type" content="">
    <meta name="og:url" content="">
    <meta name="og:image" content="">
    <meta name="og:site_name" content="">
    <meta name="og:description" content="">
    <meta name="fb:page_id" content="">
    <meta name="og:email" content="">
    <meta name="og:phone_number" content="">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicon.png">
    <!-- Title  -->
    <title>Aspire Foundation</title>

    <!-- ***** All CSS Files ***** -->

    <!-- Style css -->
    <link rel="stylesheet" href="assets/css/style.css">

    <!-- Responsive css -->
    <link rel="stylesheet" href="assets/css/responsive.css">

    <!-- Additional Style css -->
    <link rel="stylesheet" href="assets/css/custom.css">

    <!-- cookiealert css -->
    <link rel="stylesheet" href="assets/css/cookiealert.css">




    <!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-KXRCRPR');</script>
<!-- End Google Tag Manager -->

</head>

<body class="homepage-1">


    <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KXRCRPR"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

    <div class="main">
        <!-- ***** Header Start ***** -->
        <header class="navbar navbar-sticky navbar-expand-lg navbar-dark">
            <div class="container position-relative nav-container">
                <div class="row">
                    <div class="col-12">
                        <a class="navbar-brand" href="#">
                            <img class="navbar-brand-regular" src="assets/img/logo/aspire-logo.png" alt="brand-logo">
                            <img class="navbar-brand-sticky" src="assets/img/logo/aspire-logo.png" alt="sticky brand-logo">
                        </a>
                    </div>
                </div>
                <div class="navbar-inner">
                </div>
            </div>
        </header>
        <!-- ***** Header End ***** -->

        <!-- ***** Welcome Area Start ***** -->
        <section id="home" class="section welcome-area">
            <div class="container-fluid p-0">
                <div class="row">
                    <!-- Welcome Intro Start -->
                    <div class="col-lg-7 col-md-12 p-0">

                        
                        <div class="banner-img">
                            <img src="assets/img/banner/hero-img4.jpg" alt="">
                            <div class="banner-caption">
                                <span>Lorem ipsum dolar sit</span>
                                <h1>Aspire to be the Leader you where born to be</h1>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-5 col-md-12 p-0 d-flex align-items-center welcome-form-wrap">

                        <div class="welcome-form">
                            <form name="form1" method="post" action="email.php">
                                <div class="form-title mx-5">
                                    <h2>Enquire</h2>
                                </div>

                                <div class="form-group mx-5">
                                    <input type="text" placeholder="Name" class="form-control" name="name" required>
                                </div>

                                <div class="form-group mx-5">
                                    <input placeholder="Phone" class="form-control" name="phone" required type="tel" pattern="[0-9]{10}" maxlength="10" oninvalid="this.setCustomValidity('Please Enter 10 Digit Number')" onchange="this.setCustomValidity('')">
                                </div>

                                <div class="form-group mx-5">
                                    <input type="email" placeholder="Email" class="form-control" name="email" required>
                                </div>

                                <div class="form-group form-group-btn mx-5">
                                    <input type="hidden" name="esource" value="<?php echo $source; ?>">
                                    <input type="hidden" name="emedium" value="<?php echo $medium; ?>">
                                    <input type="submit" value="Enquire" class="form-control" name="submit">
                                </div>
                            </form>
                        </div>

                    </div>

                </div>
        </section>

        <!-- ***** Dream Area ***** -->
        <section class="dream-area section bg-ash">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <div class="dream-head">
                            <h1 class="head-h1">Do you ever dream of</h1>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="dream-box d-flex align-items-center">
                            <div class="img">
                                <img src="assets/img/icons/1.png" alt="" class="hover-off">
                                <img src="assets/img/icons/white1.png" alt="" class="d-none hover-on">
                            </div>
                            <p>Owning your own business!</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="dream-box d-flex align-items-center">
                            <div class="img">
                                <img src="assets/img/icons/2.png" alt="" class="hover-off">
                                <img src="assets/img/icons/white2.png" alt="" class="d-none hover-on">
                            </div>
                            <p>Being your own boss!</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="dream-box d-flex align-items-center">
                            <div class="img">
                                <img src="assets/img/icons/3.png" alt="" class="hover-off">
                                <img src="assets/img/icons/white3.png" alt="" class="d-none hover-on">
                            </div>
                            <p>Giving employment to people!</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ***** Service Area ***** -->
        <section class="service-area section bg-ash">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <div class="ser-img">
                            <img src="assets/img/service.png" alt="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="ser-text">
                            <span>Our Services</span>
                            <h1 class="head-h1">Transform yourselves to become tomorrow's leaders!</h1>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                            <p>a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                            <div class="ser-btn"><a href="#" data-toggle="modal" data-target="#exampleModal0">Enquire Now</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ***** Our Services Area ***** -->
        <section class="our-service section">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <div class="ser-text mb-30">
                            <span>Our Services</span>
                            <h1 class="head-h1">Lorem Ipsum is simply dummy text of the printing</h1>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="pgm-box">
                            <div class="img"><img src="assets/img/services/01.jpg" alt=""></div>
                            <div class="inner">
                                <h3>Training program for students</h3>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
                                <div class="pgm-btn"><a href="#" data-toggle="modal" data-target="#exampleModal0">Join Now</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="pgm-box">
                            <div class="img"><img src="assets/img/services/02.jpg" alt=""></div>
                            <div class="inner">
                                <h3>Training program for startups</h3>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
                                <div class="pgm-btn"><a href="#" data-toggle="modal" data-target="#exampleModal0">Join Now</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="pgm-box">
                            <div class="img"><img src="assets/img/services/03.jpg" alt=""></div>
                            <div class="inner">
                                <h3>Other Business Service</h3>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
                                <div class="pgm-btn"><a href="#" data-toggle="modal" data-target="#exampleModal0">Join Now</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ***** Part Area ***** -->
        <section class="section part-area">
            <div class="container">
                <div class="row align-items-end">
                    <div class="col-lg-6 ">
                        <div class="part-head">
                            <h1>Become a part of our Entrepreneur Programme and live your dream!</h1>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="part-para">
                            <p>Our world is changing rapidly, so tomorrow’s young entrepreneurs should equip themselves with problem-solving skills. Entrepreneurship courses can assist anyone from any walk of life and everyone should explore the advantages of entrepreneurial education, beginning with innovative thinking. Make a difference in the world by unleashing your talent.</p>
                            <p>Aspire Foundation is an – All in One solution to all the problems that you encounter during your journey. So Dream On... We are with you. We welcome you to participate in the events conducted by the Aspire Foundation and utilize
                            this wonderful opportunity. Let’s work together and prosper together!</p>
                            <div class="part-btn"><a href="#" data-toggle="modal" data-target="#exampleModal0">view More</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ***** About us Area ***** -->
        <section class="about-area section">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <div class="ser-text about-text">
                            <span>About Us</span>
                            <h1 class="head-h1">Aspire to be the entrepreneurs of the future!</h1>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                            <p>a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                            <div class="abt-btn"><a href="#" data-toggle="modal" data-target="#exampleModal0">More About Us</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ***** testi Area ***** -->
        <section class="testi-area section bg-ash">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="ser-text testi-text">
                            <span>Testimonials</span>
                            <h1 class="head-h1">What our clients say</h1>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="testi-slider owl-carousel">
                            <div class="item-testi">
                                <div class="img"><img src="assets/img/quote.png" alt=""></div>
                                <h3>Lorem Ipsum is simply dummy text of the printing and typesetting.</h3>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived .</p>
                                <h4>Mr. Gopinath</h4>
                                <span>Trivandrum, Indi</span>
                            </div>
                            <div class="item-testi">
                                <div class="img"><img src="assets/img/quote.png" alt=""></div>
                                <h3>Lorem Ipsum is simply dummy text of the printing and typesetting.</h3>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived .</p>
                                <h4>Mr. Gopinath</h4>
                                <span>Trivandrum, Indi</span>
                            </div>
                            <div class="item-testi">
                                <div class="img"><img src="assets/img/quote.png" alt=""></div>
                                <h3>Lorem Ipsum is simply dummy text of the printing and typesetting.</h3>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived .</p>
                                <h4>Mr. Gopinath</h4>
                                <span>Trivandrum, Indi</span>
                            </div>
                            <div class="item-testi">
                                <div class="img"><img src="assets/img/quote.png" alt=""></div>
                                <h3>Lorem Ipsum is simply dummy text of the printing and typesetting.</h3>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived .</p>
                                <h4>Mr. Gopinath</h4>
                                <span>Trivandrum, Indi</span>
                            </div>
                            <div class="item-testi">
                                <div class="img"><img src="assets/img/quote.png" alt=""></div>
                                <h3>Lorem Ipsum is simply dummy text of the printing and typesetting.</h3>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived .</p>
                                <h4>Mr. Gopinath</h4>
                                <span>Trivandrum, Indi</span>
                            </div>
                            <div class="item-testi">
                                <div class="img"><img src="assets/img/quote.png" alt=""></div>
                                <h3>Lorem Ipsum is simply dummy text of the printing and typesetting.</h3>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived .</p>
                                <h4>Mr. Gopinath</h4>
                                <span>Trivandrum, Indi</span>
                            </div>
                            
                        </div>
                    </div>
                    <div class="col-12 text-center">
                        <div class="testi-btn"><a href="#" data-toggle="modal" data-target="#exampleModal0">Apply Now</a></div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ***** Contact form Area Start ***** -->
        <section class="section video-form-area nav-common">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4">
                        <div class="contact-head">
                            <h2>We would love to hear from you!</h2>
                        </div>
                    </div>
                    <div class="col-lg-8">

                        <div class="form-area">
                            <form name="form1" method="post" action="email.php">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" placeholder="Name" class="form-control contact-form" name="name" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input placeholder="Phone" class="form-control contact-form" name="phone" required type="tel" pattern="[0-9]{10}" maxlength="10" oninvalid="this.setCustomValidity('Please Enter 10 Digit Number')" onchange="this.setCustomValidity('')">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="email" placeholder="Email" class="form-control contact-form" name="email" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group form-group-btn">
                                            <input type="hidden" name="esource" value="<?php echo $source; ?>">
                                            <input type="hidden" name="emedium" value="<?php echo $medium; ?>">
                                            <input type="submit" value="Enquire" class="form-control contact-form contact-btn" name="submit">
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>

                    </div>

                </div>
        </section>

        <!-- Footer -->
        <footer class="footer-area section">
            <div class="container">
                <div class="row footer-top-row">
                    <div class="col-lg-4">
                        <div class="foot-logo">
                            <img src="assets/img/logo/aspire-footer-logo.png" alt="">
                        </div>
                    </div>
                    <!-- <div class="col-lg-3">
                       <div class="ft-social">
                            <h3>Follow Us</h3>
                            <ul class="foot-social">
                                <li>
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fab fa-youtube"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fab fa-linkedin"></i></a>
                                </li>
                            </ul>
                       </div>
                    </div> -->
                    <div class="col-lg-4">
                        <div class="ft-contact">
                            <h3>Contact</h3>
                            <a href="tel:+91 0123456789" class="call">+91 0123456789</a> 
                            <a href="mailto:mail@doaminame.com"><i class="fa fa-envelope"></i> mail@doaminame.com</a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="copy-right">
                            <p>Copyright © 2022 Aspire. All Rights Reserved. Designed by
                                <a href="https://www.theaptdigital.com/?utm_source=aspire" target="_blank">
                                    <img src="assets/img/logo/viralmafia.svg" alt="Viralmafia Deigital Agency">
                                </a>
                                <a href="#" data-toggle="modal" data-target="#myModal3">Privacy Policy</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
    </footer>


        <!-- ***** Popup Area Start ***** -->
        <div class="appoint-model">
            <div class="container">
                <div class="col-12">
                    <div class="row">
                        <div class="modal fade order-model" id="exampleModal0" tabindex="-1" role="dialog" aria-hidden="true">
                            <div class="modal-dialog log-sign row" role="document">
                                <div class="col-sm-6 p-0 text-center pp-left">
                                    <div class="popupleft-content">
                                        <!-- <h3>Get Our<br><span>PRODUCTS</span></h3> -->
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur non molestiae aliquid nam velit tempore.</p>
                                    </div>
                                </div>
                                <div class="col-sm-6 p-0">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <a href="#" class="download-close" data-dismiss="modal" aria-label="Close"><span>X</span></a>
                                        </div>
                                        <div id="letter5">
                                            <div class="letter_inner">
                                                <div class="heading color-b">
                                                    <h2>Enquire Now</h2>
                                                </div>
                                                <div class="model-project-details">
                                                    <div class="heading color-b">
                                                        <div class="tab-content">
                                                            <div role="tabpanel" class="tab-pane active tab-log" id="profile2">
                                                                <form name="form2" method="post" action="email.php">
                                                                    <div class="row">
                                                                        <div class="col-12 col-md-12">
                                                                            <div class="form-group">
                                                                                <input type="text" class="form-control" placeholder="Name" name="name" required>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-12 col-md-12">
                                                                            <div class="form-group">
                                                                                <input type="text" class="form-control" placeholder="Phone" name="phone" required type="tel" pattern="[0-9]{10}" maxlength="10" oninvalid="this.setCustomValidity('Please Enter 10 Digit Number')" onchange="this.setCustomValidity('')">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-12 col-md-12">
                                                                            <div class="form-group">
                                                                                <input type="email" class="form-control" placeholder="Email" name="email" required>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-12 col-md-12">
                                                                            <div class="form-group">
                                                                                <input type="hidden" name="esource" value="<?php echo $source; ?>">
                                                                                <input type="hidden" name="emedium" value="<?php echo $medium; ?>">
                                                                                <input type="submit" class="form-control" value="Submit" name="submit">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>




    </div>
    <!-- ***** MAIN END***** -->
    <a href="#" class="vertical_btn" data-toggle="modal" data-target="#exampleModal0">Enquire</a>
    <div class="cont_link_box">
        <a title="WhatsApp" target="_blank" href="https://api.whatsapp.com/send?phone=910123456789" class="whatsapp_icon"><i class="fab fa-whatsapp"></i></a>
        <a title="Call Now" target="_blank" href="tel:+919656039933" class="call_iconbtn"><i class="fa fa-phone-alt" aria-hidden="true"></i></a>
    </div>

    <!-- about Form-->
    <div class="modal fade popsec onload_pop" id="myModal3">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">

                <div class="modal-body">
                    <button type="button" class="btn-close pop_button" data-bs-dismiss="modal" aria-label="Close"></button>
                    <div class="privacy_onload">

                        <div class="pop-privacy-box">

                            <h4>Privacy Policy</h4>

                            <p>This privacy policy applies to the website( aspirefoundation.com ). We may collect personal information such as your name, address, phone number and email address. We use this information to offer services, deliver services on your request and inform you about events and promotions. We use "cookies" to personalize your online experience. We secure the personal information you provide.</p>

                            <h4>Cookies Policy</h4>

                            <p>We use cookies to improve your experience of our website and to analyze performance and traffic in our website.</p>

                        </div>

                    </div>

                </div>

            </div>
        </div>
    </div>

    <!-- START Bootstrap-Cookie-Alert -->
    <div class="alert text-center cookiealert" role="alert">
        <b>Do you like cookies?</b> &#x1F36A;

        <button type="button" class="btn btn-primary btn-sm acceptcookies">
            I agree
        </button>
    </div>
    <!-- END Bootstrap-Cookie-Alert -->


    <!-- ***** All jQuery Plugins ***** -->

    <!-- jQuery(necessary for all JavaScript plugins) -->
    <script src="assets/js/jquery/jquery-3.3.1.min.js"></script>

    <!-- Bootstrap js -->
    <script src="assets/js/bootstrap/popper.min.js"></script>
    <script src="assets/js/bootstrap/bootstrap.min.js"></script>

    <!-- Plugins js -->
    <script src="assets/js/plugins/plugins.min.js"></script>

    <!-- Active js -->
    <script src="assets/js/active.js"></script>

    <!-- cookiealert js -->
    <script src="assets/js/cookiealert.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            setTimeout(function() {
                $("#exampleModal0").modal('show');
            }, 7000);
        });
    </script>

</body>

</html>