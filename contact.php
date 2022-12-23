<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Favicon -->
        
		
		<!-- all css here -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/animate.css">
        <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
        <link rel="stylesheet" href="assets/css/chosen.min.css">
        <link rel="stylesheet" href="assets/css/meanmenu.min.css">
        <link rel="stylesheet" href="assets/css/themify-icons.css">
        <link rel="stylesheet" href="assets/css/ionicons.min.css">
        <link rel="stylesheet" href="assets/css/bundle.css">
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/responsive.css">
        <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
    </head>
    <body style="background-color: #D5D8DC">
        <div class="wrapper">
            <!-- header start -->
            <?php include"header.php"?>
            <div class="header-height"></div>
            <!-- main-search start -->
            <!--<div class="main-search-active">
                <div class="sidebar-search-icon">
                    <button class="search-close"><span class="ti-close"></span></button>
                </div>
                <div class="sidebar-search-input">
                    <form>
                        <div class="form-search">
                            <input id="search" class="input-text" value="" placeholder="Search Entire Store" type="search">
                            <button>
                                <i class="ti-search"></i>
                            </button>
                        </div>
                    </form>
                </div>
            </div>-->
            <div class="breadcrumb-area mt-37 hm-4-padding">
                <div class="container-fluid">
                    <div class="breadcrumb-content text-center">
                        <h2>Contact Us</h2>
                        <ul>
                            <li>
                                <a href="#">home</a>
                            </li>
                            <li> Contact us </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="contact-area hm-4-padding">
                <!--<div class="container-fluid">
                    <div class="contact-map">
                        <div id="map"></div>
                    </div>
                </div>-->
                <div class="all-info ptb-130">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="contact-info-wrapper">
                                    <h4 class="contact-title">INFORMATION</h4>
                                    <div class="communication-info">
                                        <div class="single-communication">
                                            <div class="communication-icon">
                                                <i class="ti-home" aria-hidden="true"></i>
                                            </div>
                                            <div class="communication-text">
                                                <h4>Address:</h4>
                                                <p>Marwadi university, rajkot-morbi highway</p>
                                            </div>
                                        </div>
                                        <div class="single-communication">
                                            <div class="communication-icon">
                                                <i class="ti-mobile" aria-hidden="true"></i>
                                            </div>
                                            <div class="communication-text">
                                                <h4>Phone:</h4>
                                                <p>8511316895 - 9484489018</p>
                                            </div>
                                        </div>
                                        <div class="single-communication">
                                            <div class="communication-icon">
                                                <i class="ti-email" aria-hidden="true"></i>
                                            </div>
                                            <div class="communication-text">
                                                <h4>Email:</h4>
                                                <p><a href="#">jay62213@gmail.com</a><br><a href="#">milan.sojitra16986@marwadieducation.edu.in</a></p>
                                            </div>
                                        </div>
                                        <div class="single-communication">
                                            <div class="communication-icon">
                                                <i class="ti-world" aria-hidden="true"></i>
                                            </div>
                                            <div class="communication-text">
                                                <h4>Website:</h4>
                                                <p><a href="#">file:///E:/6th%20sem/WP/contact.html</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="contact-message-wrapper">
                                    <h4 class="contact-title">GET IN TOUCH</h4>
                                    <div class="contact-message">
                                        <form id="contact-form" action="contact.php" method="post">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="contact-form-style mb-20">
                                                        <input name="name" placeholder="Full Name" type="text" id="in">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="contact-form-style mb-20">
                                                        <input name="email" placeholder="Email Address" type="email" id="ie">
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="contact-form-style mb-20">
                                                        <input name="subject" placeholder="Subject" type="text" id="is">
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="contact-form-style">
                                                        <textarea name="massage" placeholder="Massage" id="im"></textarea>
                                                        <button class="submit cr-btn btn-style" type="submit" id="ib" name="send" value="SEND MASSAGE"><span><a>SEND MASSAGE</a></span></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                        <p class="form-messege"></p>
                                    </div>
                                </div>
                            </div>
                            
                            <?php
                                if(isset($_POST["send"])){
                                        $name = @$_POST['name'];
                                        $email = @$_POST['email'];
                                        $sub = @$_POST['subject'];
                                        $msg = @$_POST['massage'];
                                        echo $name ."<br>".$email."<br>".$sub ."<br>".$msg ."<br>";
                                        //$pass1 = md5(@$_POST['cpassword']);
                                        //echo $pass1 ."<br>";
                                    //mysqli_query($con,"insert into inquiry (Name, Email, Subject, Massage) VALUES ('$name','$email','$sub','$msg')") or die("insert error".mysqli_error());
                                    }
                            ?>
                            
                        </div>
                    </div>
                </div>
            </div>
           
        </div>
        
        <?php include"footer.php"?>
        
		
		
		
		
		
		
		
		
		<!-- all js here -->
        <script src="assets/js/vendor/jquery-1.12.0.min.js"></script>
        <script src="assets/js/popper.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/isotope.pkgd.min.js"></script>
        <script src="assets/js/imagesloaded.pkgd.min.js"></script>
        <script src="assets/js/jquery.counterup.min.js"></script>
        <script src="assets/js/waypoints.min.js"></script>
        <script src="assets/js/ajax-mail.js"></script>
        <script src="assets/js/owl.carousel.min.js"></script>
        <script src="assets/js/plugins.js"></script>
        <script src="assets/js/main.js"></script>
    </body>
</html>
