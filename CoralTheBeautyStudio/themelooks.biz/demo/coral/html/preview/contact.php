<?php include('assets/dbconnection.php'); 
 
if(isset($_POST['submit']))
    {

    $name=$_POST['name'];
    $email=$_POST['email'];
    $number=$_POST['number'];
    $message=$_POST['message'];

 
    $query=mysqli_query($con,"INSERT INTO tblmessage (name,email,mobileno,message) VALUES ('$name','$email','$number','$message') ");

    if ($query) {
            echo "<script>alert('Your message has been sent to the C O R A L .');</script>"; 
        } else {
            echo "<script>alert('Something Went Wrong. Please try again.');</script>";      
        }  
    }else{

    }
?>
<!DOCTYPE html>
<html >
<head><title>Coral | The Beauty Studio </title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <link rel="shortcut icon" href="favicon.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com/">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;1,900&family=Open+Sans:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/all.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/plugins/owlcarousel/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/plugins/magnific-popup/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/custom.css">
    <script type="text/javascript" src="custom.js"></script>
</head>
<body>
<div class="preloader">
    <div class="spinner-grow" role="status"><span class="sr-only">Loading...</span></div>
</div>
<?php include_once('header.php');?>
<div class="page-title-wrap" data-bg-img="assets/img/bg/page-title-bg.png">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="page-title"><h2>Contact us</h2>
                    <ul class="nav">
                        <li><a href="index-2.php">Home</a></li>
                        <li class="active">Contact us</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<section class="pt-120 pb-120">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="quick-contact" data-bg-img="assets/img/bg/quick-contact-bg.png"><h3>Quick Contact</h3>
                    <p>Owning successful salon locations passion to the small town.</p>
                    <ul class="quick-contact-list pt-2">
                        <li><i class="fas fa-phone-alt"></i> <a href="tel:02094857568">020 9485 7568</a></li>
                        <li><i class="fas fa-envelope"></i> <a href="mailto:info@coral.com">info@coral.com</a>
                        </li>
                        <li><i class="fas fa-map-marker-alt"></i> 85 Royal Street, Sydney<br>SD, Australia.</li>
                        <li><i class="fas fa-clock"></i> Sun - Sat: 9 am to 9 pm<br></li>
                    </ul>
                    <div class="socials"><a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i> </a><a
                            href="https://www.twitter.com/"><i class="fab fa-twitter"></i> </a><a
                            href="https://www.instagram.com/"><i class="fab fa-instagram"></i> </a><a
                            href="https://www.pinterest.com/"><i class="fab fa-pinterest"></i></a></div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="contact-form-wrap" data-bg-img="assets/img/bg/contact-form-bg.png"><h3>Send Message Us</h3>
                    <form method="post" class="contact-form">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group"><input type="text" name="name" class="form-control"
                                                               placeholder="Your Name" required></div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group"><input type="email" name="email" class="form-control"
                                                               placeholder="Your Email ID" required></div>
                            </div>
                            <div class="col-12">
                                <div class="form-group"><input type="text" name="number" class="form-control"
                                                               placeholder="Your Phone No."></div>
                            </div>
                            <div class="col-lg-12"><textarea class="form-control" name="message"
                                                             placeholder="Your Messages" required></textarea></div>
                            <div class="col-lg-12 mt-2">
                                <div class="d-flex align-items-center flex-wrap">
                                    <button type="submit" class="btn"><span>Send Now</span> <img
                                            src="assets/img/icon/btn-arrow.svg" alt="" class="svg"></button>
                                    <div class="form-response"></div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="map-wrap">
    <div class="map" data-trigger="map"
         data-map-options='{"latitude": "40.6835108", "longitude": "-73.9094194,13", "zoom": "14"}'></div>
    <div class="map-img-wrap"><img src="assets/img/media/map-house.png" alt=""></div>
</div>
<section class="trusted-partner pt-120 pb-120">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="section-title"><span class="subtitle">Partner</span>
                    <h2>Trusted Partner</h2>
                    <p>After owning two successful salon locations they decided<br>to move their passion to the small
                        town.</p></div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="company-logo-carousel bt-carousel owl-carousel" data-owl-items="4" data-owl-autoplay="true"
                     data-owl-nav="true" data-owl-margin="5"
                     data-owl-responsive='{"0": {"items": "1"}, "420": {"items": "2"}, "778": {"items": "3"}, "1024": {"items": "4"}}'>
                    <div class="company-logo"><img src="assets/img/media/company-logo1.png" alt=""></div>
                    <div class="company-logo"><img src="assets/img/media/company-logo2.png" alt=""></div>
                    <div class="company-logo"><img src="assets/img/media/company-logo3.png" alt=""></div>
                    <div class="company-logo"><img src="assets/img/media/company-logo4.png" alt=""></div>
                    <div class="company-logo"><img src="assets/img/media/company-logo2.png" alt=""></div>
                </div>
            </div>
        </div>
    </div>
</section>
<footer class="footer" data-bg-img="assets/img/bg/footer-bg.png">
    <div class="footer-main">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="widget widget_about"><h3 class="widget-title">About coral</h3>
                        <div class="menu-container"><p>I have been a beauty coral from march coral.</p>
                            <div class="socials"><a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i>
                            </a><a href="https://www.twitter.com/"><i class="fab fa-twitter"></i> </a><a
                                    href="https://www.instagram.com/"><i class="fab fa-instagram"></i> </a><a
                                    href="https://www.pinterest.com/"><i class="fab fa-pinterest"></i></a></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-sm-3">
                    <div class="widget widget_nav_menu"><h3 class="widget-title">Products</h3>
                        <div class="menu-container">
                            <ul class="menu">
                                <li><a href="shop.php">Products</a></li>
                                <li><a href="pricing.php">Pricing</a></li>
                                <li><a href="appointment.php">Appointment</a></li>
                                <li><a href="contact.php">Request us</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-sm-3">
                    <div class="widget widget_nav_menu"><h3 class="widget-title">About us</h3>
                        <div class="menu-container">
                            <ul class="menu">
                                <li><a href="about.php">coral</a></li>
                                <li><a href="contact.php">Contact us</a></li>
                                <li><a href="service.php">Our Services</a></li>
                                <li><a href="contact.php">Careers</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-sm-4 order-1 order-lg-0">
                    <div class="widget widget_nav_menu"><h3 class="widget-title">Resources</h3>
                        <div class="menu-container">
                            <ul class="menu">
                                <li><a href="contact.php">Help center</a></li>
                                <li><a href="appointment.php">Book a demo</a></li>
                                <li><a href="portfolio.php">Portfolio</a></li>
                                <li><a href="blog.php">Blog</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="widget widget_contact_info"><h3 class="widget-title">Get in Touch</h3>
                        <div class="menu-container"><p>I have been a beauty coral from march coral have.</p>
                            <ul class="contact-list">
                                <li><i class="fas fa-map-marker-alt"></i> 85 Royal Street, Sydney<br>SD, Australia.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <div class="footer-bottom-content justify-content-center justify-content-lg-start mb-4 mb-lg-0">
                        <div class="footer-logo"><img src="assets/img/footer-logo.svg" class="svg" alt=""></div>
                        <div class="copyright-text">Copyright © 2021. All right reserved.</div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="accept-cards text-center text-lg-end"><img src="assets/img/media/cards.png" data-rjs="2"
                                                                           alt=""></div>
                </div>
            </div>
        </div>
    </div>
</footer>

<a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/menu.min.js"></script>
<script src="assets/plugins/owlcarousel/owl.carousel.min.js"></script>
<script src="assets/plugins/magnific-popup/jquery.magnific-popup.min.js"></script>
<script src="assets/plugins/retinajs/retina.min.js"></script>
<script src="assets/plugins/counterup/waypoints.min.js"></script>
<script src="assets/plugins/counterup/jquery.counterup.min.js"></script>
<script src="assets/plugins/countdown-timer/countdown.min.js"></script>
<script src="assets/plugins/isotope/isotope.pkgd.min.js"></script>
<script src="assets/plugins/isotope/packery-mode.pkgd.min.js"></script>
<script src="assets/plugins/elevatezoom/jquery.elevateZoom-3.0.8.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjkssBA3hMeFtClgslO2clWFR6bRraGz0"></script>
<script src="assets/js/main.js"></script>
<script src="assets/js/custom.js"></script>
</body>
</html>
