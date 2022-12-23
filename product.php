<?php
  include "header.php";
  include "conf.php"; 
?>

<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Favicon -->
        
		
		<!-- all css here -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/animate.css">
        <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
        <link rel="stylesheet" href="assets/css/chosen.min.css">
        <link rel="stylesheet" href="assets/css/themify-icons.css">
        <link rel="stylesheet" href="assets/css/ionicons.min.css">
        <link rel="stylesheet" href="assets/css/meanmenu.min.css">
        <link rel="stylesheet" href="assets/css/bundle.css">
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/responsive.css">
        <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
    </head>
    <body style="background-color: #D5D8DC">
        <div class="wrapper">
            <!-- header start -->
            <!-- sidebar-cart start -->

            <div class="product-area pb-80" style="margin-top: 10%;">
                <div class="container">
                    <div class="section-title text-center mb-20">
                        <h2>Our Collection</h2>
                    </div>
                    <div class="product-tab-list text-center mb-60 nav product-menu-mrg" role="tablist">
                        <a class="active" href="#home1" data-toggle="tab" role="tab" aria-selected="true" aria-controls="home1">
                            <h4>Featured </h4>
                        </a>
                        <a href="#home2" data-toggle="tab" role="tab" aria-selected="false" aria-controls="home2">
                            <h4> Latest </h4>
                        </a>
                        <a href="#home3" data-toggle="tab" role="tab" aria-selected="false" aria-controls="home3">
                            <h4>Best Seller</h4>
                        </a>
                    </div>
                    <div class="tab-content">
                        <div class="tab-pane active" id="home1" role="tabpanel">
                            <div class="row">
                                <?php 
                                        $que = mysqli_query($con,"select * from product") or die("select error".mysqli_error());
                                        //$row = mysqli_fetch_array($que);
                                        
                                        while ($row = mysqli_fetch_array($que))
                                        {
                                        $id = $row['p_id'];
                                        $im = "admin/".$row['p_img'];
                                        $name = $row['p_name'];
                                        $price = $row['p_price'];
                                            //echo $row.'<br>'.$im.'<br>'.$name.'<br>'.$price.'<br>';
                                ?>
                                <div class="col-md-6 col-lg-4 col-xl-3">
                                    <div class="product-wrapper mb-45">
                                        <div class="product-img">
                                            <a href="#">
                                                <img src="<?php echo $im; ?>" alt="">
                                            </a>
                                            <div class="product-action">
                                                <div class="product-action-style">
                                                    <a class="action-plus" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                                        <i class="ti-plus"></i>
                                                    </a>
                                                    <a class="action-heart" title="Wishlist" href="#">
                                                        <i class="ti-heart"></i>
                                                    </a>
                                                    <a class="action-cart" title="Add To Cart" href="#">
                                                        <i class="ti-shopping-cart"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-content text-center">
                                            <h4><a href="product-details.html"><?php echo $name; ?></a></h4>
                                            <div class="product-price">
                                                <span><?php echo "₹".$price; ?></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
      <?php include"footer.php"?>
            <!-- modal -->
            
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-hidden="true">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span class="ion-android-close" aria-hidden="true"></span>
                </button>
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-body">
                            <?php 
                                    $que = mysqli_query($con,'select * from product where p_id = "'.$id.'"') or die("select error".mysqli_error());
                                    while ($row = mysqli_fetch_array($que))
                                        {
                                        $id = $row['p_id'];
                                        $im = "admin/".$row['p_img'];
                                        $name = $row['p_name'];
                                        $price = $row['p_price'];
                                        $mrp =  $row['p_mrp'];
                                        $des = $row['description'];
                                ?>
                            <div class="qwick-view-left">
                                <div class="quick-view-learg-img">
                                    <div class="quick-view-tab-content tab-content">
                                        <div class="tab-pane active show fade" id="modal1" role="tabpanel">
                                            <img src="<?php echo $im; ?>" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="qwick-view-right">
                                <div class="qwick-view-content">
                                    <h3><?php echo $name; ?></h3>
                                    <div class="price">
                                        <span class="new"><?php echo $price; ?></span>
                                        <span class="old"><?php echo $mrp; ?></span>
                                    </div>
                                    <p><?php echo $des; ?></p>
                                    <div class="quickview-plus-minus">
                                        <div class="cart-plus-minus">
											<input type="text" value="01" name="qtybutton" class="cart-plus-minus-box">
										</div>
                                        <div class="quickview-btn-cart">
                                            <a class="btn-style cr-btn" href="#"><span>add to cart</span></a>
                                        </div>
                                        <div class="quickview-btn-wishlist">
                                            <a class="btn-hover cr-btn" href="#"><span><i class="ion-ios-heart-outline"></i></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        
        
		
		
		
		
		
		
		
		
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
