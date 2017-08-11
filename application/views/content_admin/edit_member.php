<aside class="right-side">
                <!-- Content Header (Page header) -->
                <section class="content-header" style="margin-top: 45px;">
                    <h1>
                       Edit Member
                    </h1>
					<div id="instafeed"></div>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i>Member Control</a></li>
                        <li class="active">Edit Member</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <!-- left column -->
                        

                        <div class="col-md-8">
                            <!-- general form elements -->
                            <div class="box box-primary">

                                <!-- form start -->	
                                <form role="form" enctype="multipart/form-data" action="<?php echo site_url('KelolaMember/edit_member/'.$idMember);?>" method="POST">
                                    <div class="box-body">
                                        <div style="margin-top:10px; margin-bottom:30px">
                                            <?php if($this->session->flashdata('msg_gagal')!=''){?>
                                                <div class="alert alert-danger alert-dismissable">
                                                    <i class="glyphicon glyphicon-remove"></i>
                                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                    <?php echo $this->session->flashdata('msg_gagal');?> 
                                                </div>
                                            <?php }?>
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Username :</label>
                                            <input type="text" required name="username" class="form-control" id="exampleInputEmail1" value="<?php echo htmlspecialchars($username); ?>">
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Nama Member :</label>
                                            <input type="text" required name="nama_member" class="form-control" id="exampleInputEmail1" value="<?php echo htmlspecialchars($nama_member); ?>">
                                        </div>
										
										<div class="form-group">
                                            <label for="exampleInputEmail1">Email :</label>
                                            <input type="text" required name="email" class="form-control" id="exampleInputEmail1" value="<?php echo htmlspecialchars($email); ?>">
                                        </div>
										
										<div class="form-group">
                                            <label for="exampleInputEmail1">Telepon :</label>
                                            <input type="text" required name="telepon" class="form-control" id="exampleInputEmail1" value="<?php echo htmlspecialchars($telepon); ?>">
                                        </div>
										
										<div class="form-group" id="resetPassword">
                                            <a href="#" onclick="resetPassword()"><label for="exampleInputEmail1">Reset Password ?</label></a>
                                        </div>
										
										<div class="form-group" id="resetPassword2" style="display:none">
											
                                            <label for="exampleInputEmail1">Password Baru :</label>
                                            <input type="hidden" required name="passwordbaru" class="form-control" id="password1">
											
											<label for="exampleInputEmail1">Ulangi Password Baru :</label>
                                            <input type="hidden" required name="re_password" class="form-control" id="password2" onkeyup="validate()">
											<br/>
											<label for="exampleInputEmail1" id="validate-status" style="font-size:20px"></label>
                                        </div>


                                        <div class='box-header'>
                                            <label>Foto Member :</label>
                                        </div>

                                        <div class='box-header'>                
                                            <img style="height: 250px; padding: 4px; max-width:250px; border: solid 1px black" src="<?php echo base_url('asset/upload_img_member/'.$path_foto); ?>"/>
                                        </div>
                                        
                                        <label class='box-header' style="color: blue;" id="ganti">Ganti Gambar ?</label><br>
                                        <div class="ganti_gambar">
                                            <input class="form" type="file" name="filefoto" >
											<b><p style="color:red;">File diizinkan: jpg, jpeg, dan png (Max 2Mb)</p></b>
                                        </div>
                                    </div><!-- /.box-body -->
                                    <input type="hidden" name="id_member" value="<?php echo $idMember; ?>">
                                    <input type="hidden" name="passwordlama" value="<?php echo htmlspecialchars($password); ?>">
                                    <div class="box-footer">
                                        <button type="submit" name="save" value="1" class="btn btn-primary" id="submitSave"><i class="glyphicon glyphicon-floppy-saved"></i> Simpan</button>
                                       <a href="<?php echo site_url('KelolaMember/');?>"><button type="button" name="submit" class="btn btn-danger">Batal</button>
                                    </div>
                                </form>
                            </div><!-- /.box -->
                        </div><!--/.col (left) -->

                        <div class="col-md-2"></div>
                    </div>   <!-- /.row -->
                </section><!-- /.content -->
            </aside><!-- /.right-side -->
			<script type="text/javascript">
				function resetPassword(){
					document.getElementById("resetPassword").style.display = "none";
					document.getElementById("resetPassword2").style.display = "block";
					document.getElementById("password1").type = "password";
					document.getElementById("password2").type = "password";
					document.getElementById("submitSave").disabled = true;
				}
				
				$(document).ready(function() {
				  $("#password2").keyup(validate);
				});

				
				function validate() {
				
				  var password1 = $("#password1").val();
				  var password2 = $("#password2").val();

					
				 
					if(password1 == password2) {
					   document.getElementById("validate-status").style.color = "green";
					   $("#validate-status").text("valid"); 
					   document.getElementById("submitSave").disabled = false;
					}
					else {
						document.getElementById("validate-status").style.color = "red";
						$("#validate-status").text("invalid");  
					}
					
				}
			</script>