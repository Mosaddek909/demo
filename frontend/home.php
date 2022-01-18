 <?php require_once "partials/header.php";?>
    <main>
        <!--? slider Area Start -->
        <?php require_once "home/slider.php"?>
        <!-- slider Area End-->
        <!-- ? New Product Start -->
       <?php require_once "home/product.php";?>
        <!--  New Product End -->
        <!--? Gallery Area Start -->
       <?php require_once "home/galary.php";  ?>
        <!-- Gallery Area End -->
        <?php require_once "home/popular.php";  ?>
        <?php require_once "home/info.php";  ?>
        
     
    </main>
  <?php require_once "partials/footer.php";?>
    <!--? Search model Begin -->
    <div class="search-model-box">
        <div class="h-100 d-flex align-items-center justify-content-center">
            <div class="search-close-btn">+</div>
            <form class="search-model-form">
                <input type="text" id="search-input" placeholder="Searching key.....">
            </form>
        </div>
    </div>
    <!-- Search model end -->

    <!-- JS here -->

    <script src="frontend/assets/js/vendor/modernizr-3.5.0.min.js"></script>
    <!-- Jquery, Popper, Bootstrap -->
    <script src="frontend/assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="frontend/assets/js/popper.min.js"></script>
    <script src="frontend/assets/js/bootstrap.min.js"></script>
    <!-- Jquery Mobile Menu -->
    <script src="frontend/assets/js/jquery.slicknav.min.js"></script>

    <!-- Jquery Slick , Owl-Carousel Plugins -->
    <script src="frontend/assets/js/owl.carousel.min.js"></script>
    <script src="frontend/assets/js/slick.min.js"></script>

    <!-- One Page, Animated-HeadLin -->
    <script src="frontend/assets/js/wow.min.js"></script>
    <script src="frontend/assets/js/animated.headline.js"></script>
    <script src="frontend/assets/js/jquery.magnific-popup.js"></script>

    <!-- Scrollup, nice-select, sticky -->
    <script src="frontend/assets/js/jquery.scrollUp.min.js"></script>
    <script src="frontend/assets/js/jquery.nice-select.min.js"></script>
    <script src="frontend/assets/js/jquery.sticky.js"></script>
    
    <!-- contact js -->
    <script src="frontend/assets/js/contact.js"></script>
    <script src="frontend/assets/js/jquery.form.js"></script>
    <script src="frontend/assets/js/jquery.validate.min.js"></script>
    <script src="frontend/assets/js/mail-script.js"></script>
    <script src="frontend/assets/js/jquery.ajaxchimp.min.js"></script>
    
    <!-- Jquery Plugins, main Jquery -->	
    <script src="frontend/assets/js/plugins.js"></script>
    <script src="frontend/assets/js/main.js"></script>
    
</body>
</html>