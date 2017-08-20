
      <!--Main Content-->
      <section>
        <div class="container">
            <div class="row">
               <div class="col-md-12 col-sm-12 col-xs-12">
               		<div class="section listing">
               			 <div class="col-md-1"></div>

	                    <div class="col-md-10 col-sm-8 col-xs-12 nopadding" style="background-color: white; border-top: solid 1px #f44a56; border-bottom: solid 1px #f44a56; box-shadow: 0 1px 10px #f44a56;">
		               	  	<div style="text-align: center;">
		       					<h3><strong>Formulir Reset Password</h3>
		       					<hr style="border: solid 1px #f44a56; margin-top: auto; opacity: 0.4;"></hr>
		       			  	</div>
		                  	<div class="contact-form">
			                   
									<div id="div_username">
			                        <div class="col-md-3"></div>
			                        <div class="col-md-6 col-sm-12 col-xs-12">
			                           <div class="form-group">
			                              <textarea cols="12" rows="1" placeholder="Username" id="username" name="username" class="form-control" required ></textarea>
			                           </div>
									   <b><div class="form-group" id="validate_username"></div></b>
									   
									    <div style="padding-top: 20px; padding-bottom: 20px;" class="col-md-7 col-sm-12 col-xs-12">
			                            	<button class="btn btn-colored-blog pull-right" type="submit" value="1" name="submit" id="submit_username" onclick="openPertanyaan()" disabled="disabled"><i class="glyphicon glyphicon-registration-mark"></i>Submit</button>
										</div>
			                        </div>
			                        <div class="col-md-3"></div>
									</div>
									
									<div id="div_pertanyaan" style="display:none">
									<div class="col-md-3"></div>
			                        <div class="col-md-6 col-sm-12 col-xs-12">
										<b id="pertanyaan_rahasia"></b><br/>
										<input placeholder="Jawaban" id="jawaban" name="jawaban" class="form-control" required="" type="text">
										<b><div class="form-group" id="jawaban_rahasia"></div></b>
										
										<div style="padding-top: 20px;" class="col-md-7 col-sm-12 col-xs-12">
			                            <button class="btn btn-colored-blog pull-right" type="submit" value="1" name="submit" id="submit_jawaban" onclick="openReset()" disabled="disabled"><i class="glyphicon glyphicon-registration-mark"></i>Submit</button>
										</div>
									</div>
									<div class="col-md-3"></div>
									</div>  
									
									<div id="div_password" style="display:none">
										<div class="col-md-3"></div>
										<div class="col-md-6 col-sm-12 col-xs-12">
											   <div class="form-group">
												  <input placeholder="Password Baru" id="password_baru" name="password_baru" class="form-control" required="" type="password">
											   </div>
											   <div class="form-group">
												  <input placeholder="Ulangi Password" id="ulangi_password" name="ulangi_password" class="form-control" required="" type="password">
												  <b><div class="form-group" id="validate_password"></div></b>
											   </div>
											<div style="padding-top: 20px;" class="col-md-7 col-sm-12 col-xs-12">
												<button class="btn btn-colored-blog pull-right" type="submit" value="1" name="submit" id="submit_password" onclick="resetpassword()" disabled="disabled"><i class="glyphicon glyphicon-registration-mark"></i>Submit</button>
											</div>
										</div>
										<div class="col-md-3"></div>
			                        </div>
									
									<div id="div_success" style="display:none">
										<div class="col-md-3"></div>
										<div class="col-md-6 col-sm-12 col-xs-12">
											<h4 color="green">Password berhasil di reset.</h4>
											<button class="btn btn-colored-blog"><a href="<?php echo base_url();?>"><i class="glyphicon glyphicon-home"></i> Home </a></button>
										
										</div>
										<div class="col-md-3"></div>
									</div>
									
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
	  <script>
	  var jawaban_rahasia;
	  $(document).ready(function() {
		  $("#username").keyup(validateUsername);
	  });
	  
	  $(document).ready(function() {
		  $("#jawaban").keyup(validateJawaban);
	  });
	  
	  $(document).ready(function() {
		  $("#ulangi_password").keyup(validatePassword);
	  });
	  
	  function validateUsername() {
		
		  var username = $("#username").val();
		  $.ajax({
			url: 'validate_username',	
			type: 'POST',
			data: {username:username},
			success: function(dataUsername){
						if(dataUsername!=0) {
						   document.getElementById("validate_username").style.color = "green";
						   $("#validate_username").text("* Username terdaftar"); 
						   document.getElementById("submit_username").disabled = false;
						}
						else {
							document.getElementById("validate_username").style.color = "red";
							$("#validate_username").text("* Username tidak terdaftar");  
							document.getElementById("submit_username").disabled = true;
						}
					},
			error: function(){
						alert('GAGAL');
					}
					
			});
		
		}
		
		function openPertanyaan(){
			document.getElementById("div_username").style.display = "none";
			document.getElementById("div_pertanyaan").style.display = "block";
			var username = $("#username").val();
			
			
			$.ajax({
			url: 'get_pertanyaan',	
			type: 'POST',
			data: {username:username},
			dataType: "json",
			success: function(dataPertanyaan){
						var dataPertanyaan = JSON.parse(JSON.stringify(dataPertanyaan));
						jawaban_rahasia = dataPertanyaan.jawaban_rahasia;
						if(dataPertanyaan.pertanyaan_rahasia==1) {
						    document.getElementById("pertanyaan_rahasia").style.color = "black";
						   $("#pertanyaan_rahasia").text("Siapa nama gadis Ibu Anda ?"); 
						}
						if(dataPertanyaan.pertanyaan_rahasia==2) {
						    document.getElementById("pertanyaan_rahasia").style.color = "black";
						   $("#pertanyaan_rahasia").text("Apa judul buku yang pertama Anda baca ?"); 
						}
					},
			error: function(){
						alert('GAGAL');
					}
					
			});
		}
		
		function validateJawaban(){
			var jawaban = $("#jawaban").val();
			if(jawaban.toLowerCase()==jawaban_rahasia.toLowerCase()) {
			   document.getElementById("jawaban_rahasia").style.color = "green";
			   $("#jawaban_rahasia").text("* Jawaban benar"); 
			   document.getElementById("submit_jawaban").disabled = false;
			} else {
				document.getElementById("jawaban_rahasia").style.color = "red";
			   $("#jawaban_rahasia").text("* Jawaban salah"); 
			   document.getElementById("submit_jawaban").disabled = true;
			}
		}
		
		function openReset(){
			document.getElementById("div_pertanyaan").style.display = "none";
			document.getElementById("div_password").style.display = "block";
		}
		
		function validatePassword(){
			var password1 = $("#password_baru").val();
			var password2 = $("#ulangi_password").val();
			if(password1==password2) {
			   document.getElementById("validate_password").style.color = "green";
			   $("#validate_password").text("* Password sama"); 
			   document.getElementById("submit_password").disabled = false;
			} else {
				document.getElementById("validate_password").style.color = "red";
			   $("#validate_password").text("* Password tidak sama"); 
			   document.getElementById("submit_password").disabled = true;
			}
		}
		
		function resetpassword(){
			
			var password_baru = $("#password_baru").val();
			var username = $("#username").val();
			
			
			$.ajax({
			url: 'reset_password',	
			type: 'POST',
			data: {password_baru:password_baru,username:username},
			success: function(data){
					document.getElementById("div_password").style.display = "none";
					document.getElementById("div_success").style.display = "block";
					},
			error: function(){
						alert('GAGAL');
					}
					
			});
		}
	  </script>