<?php include 'connect.php' ?>
<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Submission Form</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">

    <!-- CSS here -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!--<link rel="stylesheet" href="assets/css/slicknav.css">
    <link rel="stylesheet" href="assets/css/flaticon.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/nice-select.css">-->
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<!--? Contact form Start -->
        <div class="contact-form-main pb-top">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-5 col-xl-5">
                        <img class="d-none d-lg-block" src="assets/img/gallery/form.jpg" alt="">
                    </div>
                    <div class="col-xl-7 col-lg-7">
                        <div class="form-wrapper">
                            <!--Section Tittle  -->
                            <div class="form-tittle">
                                <div class="row ">
                                    <div class="col-xl-12">
                                        <div class="section-tittle section-tittle2 mb-70">
                                            <h2>Put up Animals for Adoption !</h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--End Section Tittle  -->
                            <form id="contact-form" action="connect.php" method="POST" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-box user-icon mb-30">
                                            <input type="text" name="name" placeholder="Name" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-box user-icon mb-30">
                                            <input type="phone" name="phone" placeholder="Phone" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-box user-icon mb-30">
                                            <input type="Email" name="email" placeholder="Email" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-box user-icon mb-30">
                                            <input type="location" name="location" placeholder="location" required>
                                        </div>
                                        <div class="form-box user-icon mb-30">
                                        <input type="file" name="fileToUpload" id="fileToUpload" required>
                                        </div>
                                        <div class="submit-info">
                                            <button class="btn submit-btn2" name="entry" type="submit">Submit Now</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- contact left Img-->
           <!--  <div class="from-left d-none d-lg-block">
                
            </div> -->
        </div>
         <!-- JS here -->
    
    <script src="./assets/js/vendor/modernizr-3.5.0.min.js"></script>
    <!-- Jquery, Popper, Bootstrap -->
    <script src="./assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="./assets/js/popper.min.js"></script>
    <script src="./assets/js/bootstrap.min.js"></script>
    <!-- Jquery Mobile Menu -->
    <script src="./assets/js/jquery.slicknav.min.js"></script>

    <!-- Jquery Slick , Owl-Carousel Plugins -->
    <script src="./assets/js/owl.carousel.min.js"></script>
    <script src="./assets/js/slick.min.js"></script>
    <!-- One Page, Animated-HeadLin -->
    <script src="./assets/js/wow.min.js"></script>
    <script src="./assets/js/animated.headline.js"></script>
    <script src="./assets/js/jquery.magnific-popup.js"></script>

    <!-- Nice-select, sticky -->
    <script src="./assets/js/jquery.nice-select.min.js"></script>
    <script src="./assets/js/jquery.sticky.js"></script>
    
    <!-- contact js -->
    <script src="./assets/js/contact.js"></script>
    <script src="./assets/js/jquery.form.js"></script>
    <script src="./assets/js/jquery.validate.min.js"></script>
    <script src="./assets/js/mail-script.js"></script>
    <script src="./assets/js/jquery.ajaxchimp.min.js"></script>
    
    <!-- Jquery Plugins, main Jquery -->    
    <script src="./assets/js/plugins.js"></script>
    <script src="./assets/js/main.js"></script>
        
    </body>
</html>