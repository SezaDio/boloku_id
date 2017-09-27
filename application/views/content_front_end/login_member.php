
      <!--Main Content-->
      <section>
        <div class="container">
            <div class="row">
               <div class="col-md-12 col-sm-12 col-xs-12">
               		<div class="section listing">
               			 <div class="col-md-1"></div>

	                    <div class="col-md-10 col-sm-8 col-xs-12 nopadding" style="background-color: white; border-top: solid 1px #f44a56; border-bottom: solid 1px #f44a56; box-shadow: 0 1px 10px #f44a56;">
		               	  	<div style="text-align: center;">
		       					<h3><strong>Login Member</h3>
		       					<hr style="border: solid 1px #f44a56; margin-top: auto; opacity: 0.4;"></hr>
		       			  	</div>
		                  	<div class="contact-form">
		                  	<form class="omb_loginForm" id="form-login" action="<?php echo site_url('Account/login_member'); ?>" autocomplete="on" method="POST">
			                
									
										<div class="col-md-3"></div>
										<div class="col-md-6 col-sm-12 col-xs-12">
									       <div class="form-group">
									           <?php echo $this->session->flashdata('notification'); ?>   
									       </div>
										   <div class="form-group">
											  <input type="email" class="form-control" name="email" id="email_login" placeholder="Email" required>
										   </div>
										   <div class="form-group">
											 <input  type="password" class="form-control" name="password" id="password_login" placeholder="Password" required >
										   </div>
											<div  class="col-md-7 col-sm-12 col-xs-12" style="padding-bottom: 10px;">
												<button class="btn btn-colored-blog pull-right" type="submit" value="1" name="submit" ><i class="glyphicon glyphicon-log-in"></i> Login</button>
											</div>
										</div>
										<div class="col-md-3"></div>
							</form>		
							</div>			                      
						</div>
		            </div>
			</div>

	                    <div class="col-md-1"></div>
                  </div>
               </div>
            </div>
        </div>
      </section>
	  