	  <section class="my-breadcrumb">
         <div class="container page-banner">
            <div class="row">
               <div class="col-sm-12 col-md-12 col-xs-12">
                  <h1>Ayooo Dadi Boloku</h1>
               </div>
            </div>
         </div>
      </section>

      <!--Main Content-->
      <section>
        <div class="container">
            <div class="row">
               <div class="col-md-12 col-sm-12 col-xs-12">
               		<div class="section listing">
               			 <div class="col-md-1"></div>

	                    <div class="col-md-10 col-sm-8 col-xs-12 nopadding" style="box-shadow: 0 1px 10px #f44a56;">
		               	  	<div style="text-align: center;">
		       					<h3><strong>Formulir Pendaftaran</strong></h3>
		       					<hr style="border: solid 1px #f44a56; margin-top: auto; opacity: 0.4;"></hr>
		       			  	</div>
		                  	<div class="contact-form">
			                     <form role="form" enctype="multipart/form-data" action="<?php echo site_url('KelolaMember/member_baru_check/');?>" method="POST">
			                        <div class="col-md-6 col-sm-6 col-xs-12">
			                           <div class="form-group">
			                              <input placeholder="Nama Lengkap" id="name" name="nama_member" class="form-control" required="" type="text" value="<?php 
                                                    if (isset($dataMember['nama_member']))
                                                    {
                                                        echo htmlspecialchars($dataMember['nama_member']);
                                                    }
                                            ?>">
			                           </div>
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
			                        <div class="col-md-6 col-sm-6 col-xs-12">
			                           <div class="form-group">
			                              <input placeholder="Email" id="email" name="email" class="form-control" required="" type="email" value="<?php 
                                                    if (isset($dataMember['email']))
                                                    {
                                                        echo htmlspecialchars($dataMember['email']);
                                                    }
                                            ?>">
			                           </div>
			                        </div>
			                        <div class="col-md-6 col-sm-6 col-xs-12">
			                           <div class="form-group">
			                              <input placeholder="Nomor Telepon" id="telepon" name="telepon" class="form-control" required="" type="text">
			                           </div>
			                        </div>
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
			                              <input placeholder="Jawaban" id="jawaban" name="jawaban" class="form-control" required="" type="text">
			                           </div>
			                        </div>
			                        <div class="col-md-3"></div>
			                        <div class="col-md-6 col-sm-12 col-xs-12">
			                           <div class="form-group">
			                              <textarea cols="12" rows="1" placeholder="Password" id="message" name="password" class="form-control" required ></textarea>
			                           </div>
			                        </div>
			                        <div class="col-md-3"></div>
									
			                        <div style="padding-top: 20px;" class="col-md-7 col-sm-12 col-xs-12">
			                            <button class="btn btn-colored-blog pull-right" type="submit" value="1" name="submit" id="submit_daftar"><i class="glyphicon glyphicon-registration-mark"></i> Dadi Bolomu</button>
			                        </div>
		                           	<div class="col-md-3"></div>
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
		  $("#username").keyup(validateUsername);
	  });
	  
	  function validateUsername() {
		
		  var username = $("#username").val();
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
	  </script>