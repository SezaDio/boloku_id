<footer class="footer-2">
         <div class="footer-top">
            <div class="container">
               <div class="row">
                  <div class="col-md-12 col-sm-12 col-xs-12">
                     <div class="footer-block">
                        <img src="<?php echo base_url('asset/img/logo-footer.png'); ?>" alt="" class="logo-footer">
                        <div class="social-media-icons">
                           <ul>
                              <li> <a href=""><i class="ti-facebook"></i></a></li>
                              <li> <a href=""><i class="ti-twitter"></i></a></li>
                              <li> <a href=""><i class="ti-instagram"></i></a></li>
                              <li> <a href=""><i class="ti-linkedin"></i></a></li>
                              <li> <a href=""><i class="ti-google"></i></a></li>
                              <li> <a href=""><i class="ti-vimeo"></i></a></li>
                              <li> <a href=""><i class="ti-pinterest"></i></a></li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-md-12 col-sm-12 col-xs-12">
                     <div class="footer-footer-area">
                        <div class="copyright"><span>&copy; 2017 All rights reserved.  Designed By <a href="">Youth.SM</a></span></div>
                        <ul>
                           <li><a href="#">Home </a></li>
                           <li><a href="#">About Us</a></li>
                           <li><a href="#">Blog</a></li>
                           <li><a href="#">FAQ</a></li>
                           <li><a href="#">Privacy Policy </a></li>
                           <li><a href="#">Contact Us</a></li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="footer-link">
            <div class="container">
            </div>
         </div>
      </footer>
      <a href="#" class="scrollup"><i class="fa fa-chevron-up"></i></a>

      <!-- ======================================== script tags =============================================== -->

      <!-- Core Jquery --> 
      <script type="text/javascript" src="<?php echo base_url('asset/js/jquery.min.js'); ?>"></script>

      <!-- Mega Menu Script -->
      <script src="<?php echo base_url('asset/js/megaMenu.min.js'); ?>" type="text/javascript"></script>

      <!-- Bootstrap Core Js --> 
      <script type="text/javascript" src="<?php echo base_url('asset/bootstrap/js/bootstrap.min.js'); ?>"></script>

      <!-- Slider Js --> 
      <script type="text/javascript" src="<?php echo base_url('asset/js/slider/responsiveslides.min.js'); ?>"></script>

      <script>
          // You can also use "$(window).load(function() {"
          $(function () {
            // Slideshow 1
            $("#slider1").responsiveSlides({
              maxwidth: 900,
              speed: 800,
              before: function(){},
              after: function(){}
            });
            
            $("#form-login").validate();

         });
      </script>

      <!-- MODERNIZR JS --> 
      <script src="<?php echo base_url('asset/js/modernizr.js'); ?>" type="text/javascript"></script> 


      <!-- Jquery Plugin --> 
      <script src="<?php echo base_url('asset/js/jquery-migrate.min.js'); ?>" type="text/javascript"></script> 

      <!-- Owl Slider --> 
      <script src="<?php echo base_url('asset/js/owl.carousel.min.js'); ?>" type="text/javascript"></script> 
      <script src="<?php echo base_url('asset/js/breakingNews.js'); ?>" type="text/javascript"></script>
      <script src="<?php echo base_url('asset/js/theia-sticky-sidebar.js'); ?>" type="text/javascript"></script>
      <script>
          $(document).ready(function() {
            $("#owl-demo").owlCarousel({
              items : 3,
              loop : true,
              autoplay : true,
              lazyLoad : true,
              autoplayTimeout:3000,
              navigation : true,
              navigationText :  false,
              pagination : false,
            });
          });
      </script>

      <!-- Gallery Magnify  -->
      <script src="<?php echo base_url('asset/js/jquery.magnific-popup.min.js'); ?>" type="text/javascript"></script>

      <!--Style Switcher -->
      <script src="<?php echo base_url('asset/js/color-switcher.js'); ?>"></script>
      
      <!-- Template Custom Js --> 
      <script src="<?php echo base_url('asset/js/custom.js'); ?>" type="text/javascript"></script> 
   </body>
</html>