<footer class="footer-2">
         <div class="footer-top">
            <div class="container">
               <div class="row">
                  <div class="col-md-12 col-sm-12 col-xs-12">
                     <div class="footer-block">
                        <img src="<?php echo base_url('asset/img/logo_boloku_putih.png'); ?>" alt="" class="logo-footer">
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
                        <div class="copyright"><span>&copy; <?php echo date('Y'); ?> All rights reserved.  Designed By IT Team<a href="">boloku.id</a></span></div>
                        <ul>
                           <li><a href="#">Home </a></li>
                           <li><a href="#">Event</a></li>
                           <li><a href="#">Ngerti Rak ?</a></li>
                           <li><a href="#">FAQ</a></li>
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
      
      <script type="text/javascript">
      var BASE_URL = "<?php echo base_url(); ?>";

        $("#event-baru-content").hide();
        $("#edit-profil-content").hide();

        $("#dashboard-member").click(function(){
            $("#event-baru-content").hide();
            $("#dashboard-content").show();
            $("#edit-profil-content").hide();
        });

        $("#tambah-event").click(function(){
            $("#event-baru-content").show();
            $("#dashboard-content").hide();
            $("#edit-profil-content").hide();
        });

         $("#edit-profil").click(function(){
            $("#event-baru-content").hide();
            $("#dashboard-content").hide();
            $("#edit-profil-content").show();
        });
		
		function loginMember(){
			var username = $("#username_login").val();
			var password = $("#password_login").val();
			
			$.ajax({
			url: 'FrontControl_Home/login_member',	
			type: 'POST',
			data: {username:username,password:password},
			success: function(data){
						if(data=="TRUE"){
						alert('berhasil login');
						}
					},
			error: function(){
						alert('GAGAL');
					}
					
			});
		}
		
		function logout(){
			$.ajax({
			url: 'FrontControl_Home/logout_member',
			success: function(){
					alert('Logout Berhasil');
					window.location.href = "/boloku_id";
						
					},
			error: function(){
						alert('Logout Gagal');
					}
					
			});
		}
		
     </script>

      <!-- Mega Menu Script -->
      <script src="<?php echo base_url('asset/js/megaMenu.min.js'); ?>" type="text/javascript"></script>

      

      <!-- Slider Js --> 
      <script type="text/javascript" src="<?php echo base_url('asset/js/slider/responsiveslides.min.js'); ?>"></script>

      <script>
          // You can also use "$(window).load(function() {"
          $(function () {
            // Slideshow 1
            $("#slider1").responsiveSlides({
              maxwidth: 1350,
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

      <!-- Ajax -->
      <script src="<?php echo base_url('asset/js/ajax.js'); ?>" type="text/javascript"></script>
   </body>
</html>