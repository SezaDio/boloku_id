	<section class="my-breadcrumb" style="background-image: url(asset/img/contact_us.jpg);">
         <div class="container page-banner">
            <div class="row">
               <div class="col-sm-12 col-md-12 col-xs-12">
                  <h1>Contact Us</h1>
               </div>
            </div>
         </div>
      </section>

      <!--Main Content Ngerti Rak-->
      <section class="main-content">
         <div class="container">
            <?php if($this->session->flashdata('msg_berhasil')!=''){?>
                 <div class="alert alert-success alert-dismissable">
                     <i class="glyphicon glyphicon-ok"></i>
                     <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                     <?php echo $this->session->flashdata('msg_berhasil');?> 
                 </div>
             <?php }?>
            <div class="row">
               <div class="col-md-12 col-sm-2 col-xs-12">
                  	<div class="row">
	                    <div class="parallel-post-style">

	                    	<!--Profil boloku.id-->
	                    	<div class="col-md-6 col-sm-6 col-xs-12" style="padding-bottom: 15px;">
	                    		<div class="item" style="padding:10px; box-shadow: 0 1px 2px grey;">
	                              <div class="latest-news-grid grid-1">
	                                <div class="heading colored">
                           				<h2 class="main-heading"><strong>Profil Kami</strong></h2>
                           			</div>
	                                 
                                    <div class="caption" style="text-align: center;">
                                       Profil singkat mengenai boloku.id . . .
                                    </div>
                                    	                                 
	                              </div>
	                           </div>
	                    	</div>

	                    	<!--Info Sekretariat-->
	                    	<div class="col-md-6 col-sm-6 col-xs-12" style="padding-bottom: 15px;">
	                    		<div class="item" style="padding:10px; box-shadow: 0 1px 1px grey;">
	                              <div class="latest-news-grid grid-1">
	                              	<div class="heading colored">
                           				<h2 class="main-heading"><strong>Sekretariat boloku.id</strong></h2>
                           			</div>
	                                <div class="row">
	                                    <div class="col-md-12">
	                                       <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d277.7825577283518!2d110.43940061224967!3d-7.0542051502300716!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xbc879cababcd8f0!2sUNDIP+Career+Center!5e0!3m2!1sen!2sid!4v1501829200020" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
	                                    </div>
	                                </div>
	                                
                              <div class="contact-detail-box">
                                 <div class="row">
                                    <div class="col-md-2" style="padding-left: 30px;">
      				                     <div class="icon-box">
      				                        <i class="ti-home"></i>
      				                     </div>
                                    </div>
                                    <div class="col-md-10">
      				                     <div class="content-area">
      				                       
                                          <p>Gedung PKM Lama Universitas Diponegoro<br>Jl. Prof Soedarto, SH<br>Kampus UNDIP Tembalang Semarang<br>50275</p>
      				                     </div>
                                    </div>
                                 </div>
					                </div>
					                <div class="contact-detail-box">
                                 <div class="row">
                                    <div class="col-md-2" style="padding-left: 30px;">
   					                     <div class="icon-box">
   					                        <i class="ti-mobile"></i>
   					                     </div>
                                    </div>
                                    <div class="col-md-10">
                                       <div class="content-area">
                                          <h4>Telepon</h4>
                                          <p>(024) 769 226 40</p>
                                       </div>
                                    </div>
                                 </div>
					                </div>
					                <div class="contact-detail-box">
                                 <div class="row">
                                    <div class="col-md-2" style="padding-left: 30px;">
   					                     <div class="icon-box">
   					                        <i class="ti-email"></i>
   					                     </div>
                                    </div>
                                    <div class="col-md-10">
   					                     <div class="content-area">
   					                        <h4>Email</h4>
   					                        <p>bolokuid@gmail.com</p>
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

               <div class="col-md-2 col-sm-6 col-xs-12">
                  
               </div>
               <div class="col-md-8 col-sm-8 col-xs-12 nopadding" style="padding:10px; box-shadow: 0 1px 1px grey;">
               	  <div class="heading colored">
       				<h2 class="main-heading"><strong>Hubungi Kami</strong></h2>
       			  </div>
                  <div class="contact-form">
                     <!--Captcha Script-->
                     <script src='https://www.google.com/recaptcha/api.js'></script>
                     <script type="text/javascript">
                         function validasi_captcha()
                         {
                           var captchaValue = $("#g-recaptcha-response").val();

                           if(captchaValue == '')
                           {
                             alert("Silakan centang captcha.");

                             return false;
                           }
                           return true;
                         }
                     </script>
                     <form onsubmit="return validasi_captcha();" method="post" action="<?php echo site_url('FrontControl_ContactUs/kirim_pesan_hubungi_kami/');?>">
                        <div class="row">
                           <div class="col-md-12">
                              <div class="col-md-6 col-sm-6 col-xs-12">
                                 <div class="form-group">
                                    <input placeholder="Nama Anda" id="name" name="nama_lengkap" class="form-control" required="" type="text">
                                 </div>
                              </div>
                              <div class="col-md-6 col-sm-6 col-xs-12">
                                 <div class="form-group">
                                    <input placeholder="Email" id="email" name="email" class="form-control" required="" type="email">
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-md-12">
                              <div class="col-md-6 col-sm-6 col-xs-12">
                                 <div class="form-group">
                                    <input placeholder="Telepon" id="phone" name="telepon" class="form-control" required="" type="text">
                                 </div>
                              </div>
                              <div class="col-md-6 col-sm-6 col-xs-12">
                                 <div class="form-group">
                                    <input placeholder="Subject" id="subject" name="subject" class="form-control" required="" type="text">
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-md-12 col-sm-12 col-xs-12">
                              <div class="col-md-12">
                                 <div class="form-group">
                                    <textarea cols="12" rows="5" placeholder="Pesan..." id="message" name="pesan" class="form-control" required></textarea>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-md-12">
                              <div class="col-md-6" style="padding-left: 25px;">
                                 <div class="g-recaptcha" data-sitekey="6Ld-nCsUAAAAAIjW1QQJqaUJArycjt_ffSazV_Qc"></div>
                              </div>
                              <div class="col-md-6" style="padding-right: 30px; padding-top: 15px;">
                                 <div class="form-group">
                                    <button name="submit" class="btn btn-colored-blog pull-right" value="1" type="submit"><i class="glyphicon glyphicon-send"></i> Kirim Pesan</button>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </form>
                  </div>
               </div>
               <div class="col-md-2 col-sm-6 col-xs-12">
                  
               </div>
            </div>
         </div>
      </section>