<?php include('assets/dbconnection.php'); ?>

<!DOCTYPE html>
<html lang="en">
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
                <div class="page-title"><h2>SERVICE</h2>
                    <ul class="nav">
                        <li><a href="index-2.php">Home</a></li>
                        <li class="active">Service</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<section class="service pt-120 pb-90" data-bg-img="assets/img/bg/service-bg.png">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-8">
                <div class="section-title"><span class="subtitle">Service</span>
                        <h2>C O R A L - S E R V I C E</h2>
                    <p>Coral having the expertise in the services <br> Book your appointment now !! </p></div>
            </div>
            <div class="col-md-4 text-lg-end"><a href="service.php" class="btn mb-60 res-mt"><span>all Services</span>
                <img src="assets/img/icon/btn-arrow.svg" alt="" class="svg"></a></div>
        </div>
        <div class="row">
        <?php
        $ret=mysqli_query($con,"select *from  tblservices where is_deleted='N'");
        $cnt=1;
        while ($row=mysqli_fetch_array($ret)) {
        ?>
            <div class="col-lg-4 col-sm-6 ">
                <div class="single-service service-box img">
                   <a href="cart.php?serviceid=<?php echo $row['ID'];?>">
                    <div class="content"><h3><?php  echo $row['ServiceName'];?></h3>
                        <p><?php  echo '$'.$row['Cost'];?></p></div>
                        </a><a href="cart.php?serviceid=<?php echo $row['ID'];?>" class="btn"><span>Add to Cart</span> <img src="assets/img/icon/btn-arrow.svg" alt="" class="svg"></a>
                </div>
            </div>
        <?php } ?>
        </div>
    </div>
</section>
<section class="video-section pb-120 pt-120" data-bg-img="assets/img/bg/video-bg.png">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="video-content text-center"><h4>Your beauty is our profession</h4>
                    <h2>Skin Care</h2><a href="https://www.youtube.com/watch?v=k3Zr4zBJ5ho"
                                         class="mfp-iframe video-btn"><img src="assets/img/icon/play-icon.svg" alt=""
                                                                           class="svg"></a></div>
            </div>
        </div>
    </div>
</section>
<section class="pt-120 pb-90">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-8">
                <div class="section-title"><span class="subtitle">Pricing</span>
                    <h2>Pricing Plan</h2>
                    <p>After owning two successful salon locations they decided<br>to move their passion to the small
                        town.</p></div>
            </div>
            <div class="col-md-4 text-lg-end"><a href="pricing.php" class="btn mb-60 res-mt"><span>See all plan</span>
                <img src="assets/img/icon/btn-arrow.svg" alt="" class="svg"></a></div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-4 col-sm-6">
                <div class="single-price">
                    <div class="price-head"><h3>Massage Therapy</h3><h4>Starting From $25</h4></div>
                    <div class="price-body">
                        <ul>
                            <li>Hands Massage ………. $25</li>
                            <li>Custom Massage ………. $35</li>
                            <li>Stone Therapy ………. $50</li>
                            <li>Tropical Massage ………. $60</li>
                            <li>Korean Massage ………. $65</li>
                        </ul>
                        <a href="appointment.php" class="btn"><span>Appointment</span> <img
                                src="assets/img/icon/btn-arrow.svg" alt="" class="svg"></a></div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="single-price active">
                    <div class="price-head"><h3>Waxing Therapy</h3><h4>Starting From $25</h4></div>
                    <div class="price-body">
                        <ul>
                            <li>Eyebrows Waxing ………. $25</li>
                            <li>Back Waxing ………. $35</li>
                            <li>Leg Waxing ………. $50</li>
                            <li>Custom Waxing ………. $60</li>
                            <li>Full Waxing ………. $65</li>
                        </ul>
                        <a href="appointment.php" class="btn"><span>Appointment</span> <img
                                src="assets/img/icon/btn-arrow.svg" alt="" class="svg"></a></div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="single-price">
                    <div class="price-head"><h3>Makeup Therapy</h3><h4>Starting From $25</h4></div>
                    <div class="price-body">
                        <ul>
                            <li>Halekulani Basic ………. $25</li>
                            <li>Therapy Massage ………. $35</li>
                            <li>Zen Shiatsu Up ………. $50</li>
                            <li>Moisturising Wrap ………. $60</li>
                            <li>Radiance Mackup ………. $65</li>
                        </ul>
                        <a href="appointment.php" class="btn"><span>Appointment</span> <img
                                src="assets/img/icon/btn-arrow.svg" alt="" class="svg"></a></div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="pt-120 pb-70 section-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-sm-6">
                <div class="single-funfact style3 text-center"><img src="assets/img/icon/fun9.png" alt="">
                    <h2><span class="counter">36</span><span>k+</span></h2>
                    <h3>Client Feedback</h3></div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="single-funfact style3 text-center"><img src="assets/img/icon/fun10.png" alt="">
                    <h2><span class="counter">49</span><span>+</span></h2>
                    <h3>Service of Product</h3></div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="single-funfact style3 text-center"><img src="assets/img/icon/fun11.png" alt="">
                    <h2><span class="counter">99</span><span>+</span></h2>
                    <h3>Team Members</h3></div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="single-funfact style3 style--two text-center"><img src="assets/img/icon/fun12.png" alt="">
                    <h2><span class="counter">69</span><span>+</span></h2>
                    <h3>coral Branch</h3></div>
            </div>
        </div>
    </div>
</section>
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
                        <li><i class="fas fa-clock"></i> Sun - Sat: 9 am to 9 pm <span>Sunday: Closed.</span></li>
                    </ul>
                    <div class="socials"><a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i> </a><a
                            href="https://www.twitter.com/"><i class="fab fa-twitter"></i> </a><a
                            href="https://www.instagram.com/"><i class="fab fa-instagram"></i> </a><a
                            href="https://www.pinterest.com/"><i class="fab fa-pinterest"></i></a></div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="appointment-form-wrap" data-bg-img="assets/img/bg/contact-form-bg.png"><h3>Book Your
                    Appointment</h3>
                    <form action="http://themelooks.biz/democoral/html/preview/sendmail.php"
                          class="appointment-form">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="coral-select">
                                    <div class="input-group style--two"><select name="aa_service"
                                                                                id="appointment-treatment"
                                                                                class="form-control">
                                        <option value="">Select Treatment</option>
                                        <option value="Oil Massage">Oil Massage</option>
                                        <option value="Relax Day">Relax Day</option>
                                        <option value="Spa &amp; Beauty">Spa &amp; Beauty</option>
                                        <option value="Relax Day (for Two)">Relax Day</option>
                                    </select></div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="coral-select">
                                    <div class="input-group style--two"><select name="aa_visited" id="visited"
                                                                                class="form-control">
                                        <option value="">Have You Visited Us Before*</option>
                                        <option value="yes">Yes</option>
                                        <option value="no">No</option>
                                    </select></div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group"><input type="text" name="aa_date" class="form-control"
                                                               placeholder="Appointment Date*" required></div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group"><input type="text" name="aa_name" class="form-control"
                                                               placeholder="Your Name*" required></div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group"><input type="email" name="aa_email" class="form-control"
                                                               placeholder="Email Address*" required></div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group"><input type="text" name="aa_number" class="form-control"
                                                               placeholder="Phone Number*" required></div>
                            </div>
                            <div class="col-lg-12"><textarea class="form-control" name="aa_message"
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