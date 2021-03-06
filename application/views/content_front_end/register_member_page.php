	  <section class="my-breadcrumb" style="background-image: url(<?php echo base_url('asset/img/register.png') ; ?>);">
         <div class="container page-banner">
            <div class="row">
               <div class="col-sm-12 col-md-12 col-xs-12">
                  <h1>&nbsp;</h1>
               </div>
            </div>
         </div>
      </section>

      <!--Main Content-->
      <section>
        <div class="container">
            <div class="row">
               <div class="col-md-12 col-sm-12 col-xs-12">
               		<?php if($this->session->flashdata('msg_berhasil')!=''){?>
                        <div class="alert alert-success alert-dismissable">
                            <i class="glyphicon glyphicon-ok"></i>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <?php echo $this->session->flashdata('msg_berhasil');?> 
                        </div>
                    <?php }?>
               		<div class="section listing">
               			<div class="col-md-1"></div>

	                    <div class="col-md-10 col-sm-8 col-xs-12 nopadding" style="background-color: white; box-shadow: 0 1px 10px #f44a56;">
		               	  	<div style="text-align: center;">
		       					<h3><strong>Formulir Pendaftaran</strong></h3>
		       					<hr style="border: solid 1px #f44a56; margin-top: auto; opacity: 0.4;"></hr>
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
			                     <form onsubmit="return validasi_captcha();" role="form" enctype="multipart/form-data" action="<?php echo site_url('KelolaMember/member_baru_check/');?>" method="POST">
			                     	<div class="row">
			                     		<div class="col-md-12">
					                        <div class="col-md-6 col-sm-6 col-xs-12">
					                           <div class="form-group">
					                              <input placeholder="Nama Lengkap" id="nama_member" name="nama_member" class="form-control" required="" type="text" value="<?php 
		                                                    if (isset($dataMember['nama_member']))
		                                                    {
		                                                        echo htmlspecialchars($dataMember['nama_member']);
		                                                    }
		                                            ?>">
					                           </div>
					                          <b> <div class="form-group" id="validate_nama"></div></b>
					                        </div>
					                        <div class="col-md-6 col-sm-6 col-xs-12">
					                           <div class="form-group">
					                              <input placeholder="Username" id="username" name="username" class="form-control" required="" type="text" value="<?php 
		                                                    if (isset($dataMember['username']))
		                                                    {
		                                                        echo htmlspecialchars($dataMember['username']);
		                                                    }
		                                            ?>">
												  <b>
					                           <div class="form-group" id="validate_username">
					                              
					                           </div></b> 	
					                           </div>
					                        </div>
					                    </div>
					                </div>

					                <div class="row">
					                	<div class="col-md-12">
					                        <div class="col-md-6 col-sm-6 col-xs-12">
					                           <div class="form-group">
					                              <input placeholder="Email" id="email" name="email" class="form-control" required="" type="email" value="<?php 
		                                                    if (isset($dataMember['email']))
		                                                    {
		                                                        echo htmlspecialchars($dataMember['email']);
		                                                    }
		                                            ?>">
					                           </div>
					                           <b><div class="form-group" id="validate_email"></div></b>
					                        </div>
					                        <div class="col-md-6 col-sm-6 col-xs-12">
					                           <div class="form-group">
					                              <input placeholder="Nomor Telepon" id="telepon" name="telepon" class="form-control" required="" type="number">
					                           </div>
					                        </div>
					                    </div>
				                    </div>

									<div class="row">
										<div class="col-md-12">
											<div class="col-md-6 col-sm-6 col-xs-12">
					                           <div class="form-group">
												  <select name="pertanyaan" required class="form-control" id="pertanyaan" style="width: auto;">
													<option value="" disabled selected>--Pilih pertanyaan rahasia--</option>
													<option value="1">Siapa nama gadis ibu Anda ?</option>
													<option value="2">Apa judul buku yang pertama kali anda baca ?</option>
												  </select>
					                           </div>
					                        </div>
											<div class="col-md-6 col-sm-6 col-xs-12">
					                           <div class="form-group">
					                              <input placeholder="Jawaban" required id="jawaban" name="jawaban" class="form-control" required="" type="text">
					                           </div>
					                        </div>
					                    </div>
					                </div>

					                <div class="row">
					                	<div class="col-md-12">
					                       
					                        <div class="col-md-6 col-sm-12 col-xs-12">
					                           <div class="form-group">
					                              <input type="password" cols="12" rows="1" placeholder="Password" id="pass" name="password" class="form-control" required >
					                           </div>
					                        </div>
					                        <div class="col-md-6 col-sm-12 col-xs-12">
					                           <div class="form-group">
					                              <input type="password" cols="12" rows="1" placeholder="Ulangi Password" id="ulangi_pass" name="password2" class="form-control" required >
					                           </div>
					                           <b><div class="form-group" id="validate_pass"></div></b>
					                        </div>
					                        
					                        
					                    </div>
					                </div>

			                        <div class="row">
			                        	<div class="col-md-12">
					                        <div class="col-md-4"></div>
											<div class="col-md-6">
				                                <div class="g-recaptcha" data-sitekey="6Ld-nCsUAAAAAIjW1QQJqaUJArycjt_ffSazV_Qc"></div>
				                            </div>
				                            <div class="col-md-2"></div>
				                        </div>
			                        </div>

			                        <div class="row">
			                        	<div class="col-md-12">
					                        <div class="col-md-3"></div>
					                        <div style="text-align: center; padding: 25px;" class="col-md-6 col-sm-12 col-xs-12">
					                            <button class="btn btn-colored-blog" type="submit" value="1" name="submit" id="submit_daftar">Dadi Bolomu</button>
					                        </div>
				                           	<div class="col-md-3"></div>
				                        </div>
			                        </div>
			                     </form>
		                  	</div>
			            </div>

	                    <div class="col-md-1"></div>
                  </div>
               </div>
            </div>
        </div>
      </section>
	  <script>
	  $(document).ready(function() {
		  $("#nama_member").keyup(validateNama);
	  });
	  
	  $(document).ready(function() {
		  $("#username").keyup(validateUsername);
	  });
	  
	  $(document).ready(function() {
		  $("#email").keyup(validateEmail);
	  });
	  
	  
	  
	  
	  $(document).ready(function() {
		  $("#ulangi_pass").keyup(validatePass);
	  });
	  
	  function validateNama() {
		
		  var nama_member = $("#nama_member").val();
		  if(nama_member.replace(/\s+/g, '').length == 0){
		      document.getElementById("validate_nama").style.color = "red";
			  $("#validate_nama").text("* Nama member tidak boleh kosong"); 
			  document.getElementById("submit_daftar").disabled = true;
		  } else {
		      $("#validate_nama").text(""); 
			  document.getElementById("submit_daftar").disabled = false;
		  }
	  }
	  
	  function validateUsername() {
		
		  var username = $("#username").val();
		  if(username.replace(/\s+/g, '').length == 0){
		      document.getElementById("validate_username").style.color = "red";
			  $("#validate_username").text("* Username tidak boleh kosong"); 
			  document.getElementById("submit_daftar").disabled = true;
		  } else {
		  $.ajax({
			url: 'validate_username',	
			type: 'POST',
			data: {username:username},
			success: function(dataUsername){
						if(dataUsername!=0) {
						   document.getElementById("validate_username").style.color = "red";
						   $("#validate_username").text("* Username tidak tersedia"); 
						   document.getElementById("submit_daftar").disabled = true;
						}
						else {
							document.getElementById("validate_username").style.color = "green";
							$("#validate_username").text("* Username tersedia");  
							document.getElementById("submit_daftar").disabled = false;
						}
					},
			error: function(){
						alert('GAGAL');
					}
					
			});
		  }
		}
		
		function validateEmail() {
		
		  var email = $("#email").val();
		  if(email.replace(/\s+/g, '').length == 0){
		      document.getElementById("validate_email").style.color = "red";
			  $("#validate_email").text("* Email tidak boleh kosong"); 
			  document.getElementById("submit_daftar").disabled = true;
		  } else{
		  $.ajax({
			url: 'validate_email',	
			type: 'POST',
			data: {email:email},
			success: function(dataEmail){
						if(dataEmail!=0) {
						   document.getElementById("validate_email").style.color = "red";
						   $("#validate_email").text("* Email sudah terdaftar"); 
						   document.getElementById("submit_daftar").disabled = true;
						}
						else {
							document.getElementById("validate_email").style.color = "green";
							$("#validate_email").text("* Email belum terdaftar");  
							document.getElementById("submit_daftar").disabled = false;
						}
					},
			error: function(){
						alert('GAGAL');
					}
					
			});}
		
		}
		
		function validatePass() {
		
		  var pass1 = $("#pass").val();
		  var pass2 = $("#ulangi_pass").val();
		  if(pass1!=pass2){
			document.getElementById("validate_pass").style.color = "red";
			$("#validate_pass").text("* Password tidak sama"); 
			document.getElementById("submit_daftar").disabled = true;
		  } else {
			document.getElementById("validate_pass").style.color = "green";
			$("#validate_pass").text("* Password sama");  
			document.getElementById("submit_daftar").disabled = false;
		  }
		  
		
		}
	  </script>