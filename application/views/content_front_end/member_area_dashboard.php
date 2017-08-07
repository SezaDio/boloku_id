	<section class="my-breadcrumb">
         <div class="container page-banner">
            <div class="row">
               <div class="col-sm-12 col-md-12 col-xs-12">
                  <h1>Profil Mu</h1>
               </div>
            </div>
         </div>
      </section>

      <section>
        <div class="container">
            <div class="row">
               <div class="col-md-12 col-sm-12 col-xs-12">
	                <div class="parallel-post-style">

	                	<!--Kolom kiri untuk navigasi menu member area-->
	                	<div class="col-md-3 col-sm-4 col-xs-12">
	                       <div class="item" style="border-top:solid 1px #f44a56; box-shadow: 0 1px 6px #f44a56;">
	                          <div class="latest-news-grid grid-1">
	                             <div class="detail">
	                                <div class="col-md-12">
			                             <div class="picture">
			                             	<div style="margin-bottom: 15px;" class="ad-div style-box">
					                           <a href="<?php echo base_url('asset/img/author3.jpg'); ?>" class="tt-lightbox">
					                              <img alt="" class="img-responsive" src="<?php echo base_url('asset/upload_img_member/'.$path_foto); ?>">
					                           </a>
					                        </div>
			                             </div>
			                             <div class="caption" style="text-align: center;">
		                                   <h5 style="font-size: 1.2em;">
		                                      <label><?php echo $nama_member?></label>
		                                   </h5>
		                                 </div>
		                            </div>
		                                 	<hr style="margin-top: auto; border: solid 1px #f44a56; opacity: 0.4;">
	                                <table class="table">
	                                	<tr>
	                                		<td style="padding: inherit;">
                                				<a id="dashboard-member" style="text-align: left; width: 100%;" href="javascript:void(0)" class="btn btn-colored-blog-member-area">
                                					<i class="glyphicon glyphicon-dashboard"></i> My Published Event
                                				</a>
	                                		</td>
	                                	</tr>
	                                	<tr>
	                                		<td style="padding: inherit;">
	                                			<a id="tambah-event" style="text-align: left; width: 100%;" href="javascript:void(0)" class="btn btn-colored-blog-member-area">
	                                				<i class="glyphicon glyphicon-plus"></i> Buat Event Baru 
	                                			</a>
	                                		</td>
	                                	</tr>
	                                	<tr>
	                                		<td style="padding: inherit;">
	                                			<a id="edit-profil" style="text-align: left; width: 100%;" href="javascript:void(0)" class="btn btn-colored-blog-member-area">
	                                				<i class="glyphicon glyphicon-pencil"></i> Edit Profilmu
	                                			</a>
	                                		</td>
	                                	</tr>
	                                </table>
	                                <hr style="margin-top: auto; border: solid 1px #f44a56; opacity: 0.4;">
	                                <div class="col-md-12" style="text-align: center;">
                                       <a style="width: 100%;" href="" class="btn btn-colored-blog"><i class="glyphicon glyphicon-log-out"></i> Sign Out </a>
                                    </div>
	                             </div>
	                          </div>
	                       </div>
	            		</div>

	            		<!--Content kolom kanan Riwayat Event, edit profile, edit event, dan post event baru-->
	            		<div class="col-md-9 col-sm-4 col-xs-12" id="kolom1">
	                       <div class="item" style="border-top:solid 1px #f44a56; box-shadow: 0 1px 6px #f44a56;">
	                          <div class="latest-news-grid grid-1">

	                          	<!--Content menu riwayat event member-->
	                             <div id="dashboard-content" class="detail">
	                             	<div class="col-md-12">
	                             		<h4><strong>My Published Event</strong></h4>
	                             		<hr style="border: solid 1px #f44a56; margin-top: auto; opacity: 0.4;"></hr>
	                             	</div>
									<?php foreach($listEvent as $event){ ?>
	                             	
									
									<div class="col-md-9">
	                             		<div class="col-md-2" style="text-align: center;"> 
	                             			<img alt="" src="<?php echo base_url('asset/upload_img_coming/thumb83_'.$event['path_gambar']); ?>">
	                             		</div>
	                                    <div style="padding-left: 10px;" class="caption">
	                                    	<a href="<?php echo base_url('FrontControl_Event/event_click/'.$event['id_coming']); ?>"><label><?php echo $event['nama_coming'];?></label></a>
	                                    </div>
	                                    <ul style="padding-left: 10px;" class="post-tools">
	                                        <li title="Testimoni"> <i class="ti-thought"></i> 105 </li>
	                                        <li title="Dilihat"> <i class="glyphicon glyphicon-eye-open"></i> 105 </li>
	                                        <li title="Disukai"> <i class="glyphicon glyphicon-thumbs-up"></i> 105 </li>
	                                    </ul>
	                                    <br>
	                                    <a style="margin-left: 10px; margin-top: -25px;" href="#" class=" btn btn-xs btn-green"><i class="ti-money"></i> <?php if($event['jenis_event']==0){?>Berbayar<?php } else{ ?>Gratis<?php } ?></a>
	                                   	<a style="margin-top: -25px;" href="#" class=" btn btn-xs btn-dark-red"><?php echo $event['kategori_coming']; ?></a>
	                                   	<a style="margin-top: -25px;" href="#" class=" btn btn-xs btn-orange"><?php echo $event['tipe_event']; ?></a>
	                                </div>
	                                <br>
	                                <div class="col-md-3" style="text-align: right;">
	                                	<!-- Tombol Edit -->
                                        <a href="javascript:void(0)" onclick="editEvent(<?php echo $event['id_coming']?>)"><button id="edit-button-coming" type="submit" class="btn btn-info btn-sm"><i class="glyphicon glyphicon-pencil" ></i> Edit</button></a>
                                        <!-- Tombol Hapus -->
                                        <a  href="<?php //echo site_url('KelolaComing/delete_detail_coming/'.$id_coming->id_coming);?>"><button class="btn btn-danger btn-sm"><i class="glyphicon glyphicon-trash" ></i> Hapus</button></a>
										<?php if($event['status']==2){?>
										<br/>
										<br/>
										<a  href="#" class=" btn btn-xs btn-dark-red"><b>Menunggu Verifikasi</b></a>
										<?php } ?>
	                                </div>
	                                <div class="col-md-12">
	                             		<hr style="border: solid 1px grey; margin-top: auto; opacity: 0.3;"></hr>
	                             	</div>
									<?php } ?>
	                             </div>

	                             <!--Content menu buat event baru-->
	                             <div style="display: none;" id="event-baru-content" class="detail">
	                             	<div class="col-md-12">
	                             		<h4><strong>Buat Event Baru</strong></h4>
	                             		<hr style="border: solid 1px #f44a56; margin-top: auto; opacity: 0.4;"></hr>
	                             	</div>
	                             	<div class="col-md-12 col-sm-8 col-xs-12 nopadding" style="padding:10px;"">
					                  <div class="contact-form">
					                      <form role="form" enctype="multipart/form-data" action="<?php echo site_url('KelolaMember/tambah_event/');?>" method="POST">
					                        <div class="col-md-12 col-sm-6 col-xs-12">
					                           <div class="form-group">
					                              <input required placeholder="Nama Kegiatanmu" id="name" name="judul_coming" class="form-control" required type="text" value="<?php 
													if (isset($dataComing['judul_coming']))
													{
														echo htmlspecialchars($dataComing['judul_coming']);
													}
													?>"> 
					                           </div>

					                           <div class="row">
						                            <div class="col-md-2">
			                                            <label for="exampleInputEmail1">Jenis Event   :</label>
			                                        </div>
			                                        <div class="col-md-4">
		                                                <label>
		                                                    <input style="opacity: 1;" type="radio" name="jenis_event" value=1 required onclick="gratis()">
		                                                     Gratis
		                                                </label>
		                                                <label>
		                                                    <input style="opacity: 1;" type="radio" name="jenis_event" value=0 required onclick="bayar()">
		                                                     Berbayar
		                                                </label><br>
		                                                <div class="form-group" id="jenis_event" style="display:none">
				                                            <input type="number" placeholder="Harga Tiket Masuk"	name="harga" class="form-control" value="<?php 
				                                                /*if (isset($dataComing['harga']))
				                                                {
				                                                    echo htmlspecialchars($dataComing['harga']);
				                                                }*/
				                                            ?>"> 
				                                        </div>
			                                        </div>
			                                       
			                                        <div class="col-md-2" style="width: 70px;">
			                                        	<label for="exampleInputEmail1">Seat   :</label>
			                                        </div>
			                                        <div class="col-md-4">
		                                                <label>
		                                                    <input style="opacity: 1;" type="radio" name="seat" value=1 required onclick="limitedSeat()">
		                                                     Limited Seat
		                                                </label>
		                                                <label>
		                                                    <input style="opacity: 1;" type="radio" name="seat" value=0 required onclick="openSeat()">
		                                                     Open Seat
		                                                </label>
		                                                <div class="form-group" id="limitedseat" style="display:none">
				                                            <input placeholder="Jumlah Seat" type="number" 	name="jumlah_seat" class="form-control" id="exampleInputEmail1" value="<?php 
				                                                /*if (isset($dataComing['seat']))
				                                                {
				                                                    echo htmlspecialchars($dataComing['seat']);
				                                                }*/
				                                            ?>"> 
				                                        </div>
			                                        </div>
				                                    
			                                    </div>
			                                    
			                                    <br>

		                                        <div class="row">
		                                        	<div class="col-md-6">
				                                        <div class="form-group">
				                                            <label for="exampleInputEmail1">Kategori Event  :</label><br>
				                                            <select name="kategori" required class="form-control" id="kategori">
				                                                <option value="">--Pilih Kategori Event--</option>
				                                                <?php
				                                                    foreach ($kategori_coming as $key=>$kategori) 
				                                                    {
				                                                        
				                                                        echo '<option value="'.$key.'">'.$kategori.'</option>';   
				                                                        
				                                                    }
				                                                ?>
				                                            </select>
				                                        </div>
				                                    </div>

				                                    <div class="col-md-6">
				                                        <div class="form-group">
				                                            <label for="exampleInputEmail1">Tipe Event  :</label><br>
				                                            <select name="tipe" required class="form-control" id="kategori">
				                                                <option value="">--Pilih Tipe Event--</option>
				                                                <?php
				                                                    foreach ($tipe_event as $key=>$tipe) 
				                                                    {
				                                                      
				                                                        echo '<option value="'.$key.'">'.$tipe.'</option>';   
				                                                    }
				                                                ?>
				                                            </select>
				                                        </div>
				                                    </div>
			                                    </div>

			                                    <div class="row">
			                                    	<div class="col-md-6">
					                                   	<div class="form-group">
				                                            <!-- Date range -->
				                                            <label>Tanggal Event :</label>
				                                            <div class="input-group">
				                                                <div class="input-group-addon">
				                                                    <i class="glyphicon glyphicon-calendar"></i>
				                                                </div>
				                                                <input type="text" required name="tgl_event" class="form-control pull-right" id="reservation"
				                                                    value="<?php /*
				                                                        if (isset($tgl_event))
				                                                        {
				                                                            echo $tgl_event;
				                                                        } */
				                                                    ?>"/>
				                                                <input type="hidden" id="tgl_mulai" name='tgl_mulai' value="<?php //echo date('Y-m-d') ?>" />
				                                                  
				                                                <input type="hidden"  id="tgl_selesai" name='tgl_selesai' value="<?php //echo date('Y-m-d') ?>" />
				                                                    
				                                            </div><!-- /.input group -->
				                                        </div>
				                                    </div>

				                                    <div class="col-md-6">
				                                        <div class="form-group">
				                                            <label>Jam Event Dimulai & Berakhir:</label>
				                                            <div class='row'>
			                                                    <div class="col-md-6">
			                                                        <select name="jam_mulai" required class="form-control" id="jam_mulai" style="width: auto;">
			                                                            <option value="">--Waktu Dimulai--</option>
			                                                            <?php
			                                                                foreach ($jam_event as $key=>$jam) 
			                                                                {
			                                                                    echo '<option value="'.$key.'">'.$jam.'</option>';   
			                                                                }
			                                                            ?>
			                                                        </select>
			                                                    </div>

			                                                    <div class="col-md-6">
			                                                        <select name="jam_selesai" required class="form-control" id="jam_selesai" style="width: auto;">
			                                                            <option value="">--Waktu Berakhir--</option>
			                                                            <?php 
			                                                                foreach ($jam_event as $key=>$jam) 
			                                                                {
			                                                                    echo '<option value="'.$key.'">'.$jam.'</option>';   
			                                                                } 
			                                                            ?>
			                                                        </select>
			                                                    </div>
				                                            </div>
				                                        </div>
				                                    </div>
			                                    </div>

			                                    <div class="row">
		                                        	<div class="col-md-4">
				                                        <div class="form-group">
				                                            <label for="exampleInputEmail1">Institusi Penyelenggara :</label><br>
															<input placeholder="Institusi" type="text" name="institusi" class="form-control">
				                                        </div>
				                                    </div>
													<div class="col-md-4">
				                                        <div class="form-group">
				                                            <label for="exampleInputEmail1">Kota Lokasi Event :</label><br>
															<input placeholder="Kota Lokasi" type="text" name="kota" class="form-control">
				                                            <!--<select name="kategori" required class="form-control" id="kategori">
				                                                <option value="">--Pilih Kota--</option>
				                                                <?php
				                                                    /*foreach ($kategori_coming as $key=>$kategori) 
				                                                    {
				                                                        
				                                                        echo '<option value="'.$key.'">'.$kategori.'</option>';   
				                                                        
				                                                    }*/
				                                                ?>
				                                            </select>-->
				                                        </div>
				                                    </div>
													<div class="col-md-4">
														<div class="form-group">
															<label for="exampleInputEmail1">Gunakan fasilitas pendaftaran ? </label><br>
															<input style="opacity: 1;" type="radio" name="pendaftaran" value=1 required ><label>Ya</label>&nbsp&nbsp&nbsp&nbsp
															<label><input style="opacity: 1;" type="radio" name="pendaftaran" value=0 required >Tidak</label>
														</div>
														
													</div>
				                                    
				                                </div>
												<div class="row">
													<div class="col-md-6">
				                                        <div class="form-group">
				                                            <label for="exampleInputEmail1">Alamat :</label><br>
															<input placeholder="Alamat" type="text" name="alamat" class="form-control">
				                                        </div>
				                                    </div>
													<div class="col-md-6">
			                                            <label for="exampleInputFile">Unggah File Gambar Poster :</label>
			                                            <div class="input-group">
			                                                <input class="form" type="file" name="filefoto" required >
			                                            </div>
			                                            <p style="margin-top: auto; font-size: 1.0em; color:red;">*Tipe file diizinkan: jpg, jpeg, dan png (Max 2Mb)</p>
				                                    </div>
												</div>
											</div>
					                        <input type="hidden" name="id_member" value="<?php echo $id_member; ?>">
					                        <input type="hidden" name="nama_member" value="<?php echo $nama_member; ?>">
					                        <input type="hidden" name="email" value="<?php echo $email; ?>">
					                        <input type="hidden" name="telepon" value="<?php echo $telepon; ?>">
					                        <input type="hidden" name="passwordlama" value="<?php echo $password; ?>" id="passwordlama">
					                        <div class="col-md-12 col-sm-12 col-xs-12">
					                           <div class="form-group">
					                              <textarea cols="12" rows="5" placeholder="Keterangan tambahan event . . ." id="message" name="deskripsi_coming" class="form-control" required></textarea>
					                           </div>
					                           <div class="form-group">
					                              <button class="btn btn-colored-blog pull-right" type="submit" value="1"><i class="glyphicon glyphicon-send"></i> Submit Event</button>
					                           </div>
					                        </div>
					                     </form>
					                  </div>
					               </div>
	                             </div>

	                             <!--Content menu edit profil member-->
	                             <div style="display: none;" id="edit-profil-content" class="detail">
	                             	<div class="col-md-12">
	                             		<h4><strong>Edit Profil</strong></h4>
	                             		<hr style="border: solid 1px #f44a56; margin-top: auto; opacity: 0.4;"></hr>
	                             	</div>
	                             	<div class="col-md-12 col-sm-8 col-xs-12 nopadding" style="padding:10px;"">
					                  <div class="contact-form">
					                      <form role="form" enctype="multipart/form-data" action="<?php echo site_url('KelolaMember/edit_member_area/'.$id_member);?>" method="POST">
					                     	<div class="row">
						                        <div style="text-align: center;" class="col-md-4 col-sm-6 col-xs-12">
						                        	<div class='box-header'>
						                        		
			                                            <?php
			                                                if (empty($path_foto))
			                                                {
			                                                    echo '<img style="height: 250px; padding: 4px; max-width:250px; border: solid 1px black" src="'.base_url('asset/img/author3.jpg').'"/>';
			                                                }
			                                                else
			                                                {
			                                                    echo '<img style="height: 250px; padding: 4px; max-width:250px; border: solid 1px black" src="'.base_url('asset/upload_img_member/'.$path_foto).'"/>';
			                                                }
			                                            ?>   
			                                        </div>
			                                       
			                                        <a class="caption" href="javascript:void(0)" class='box-header' style="font-size: 1.0em; color: blue;" id="ganti">
			                                        	<button type="button" class="btn btn-xs btn-primary"><i class="glyphicon glyphicon-pencil"></i> Ganti Gambar ?</button>
			                                        </a><br><br>
			                                        <div class="ganti_gambar">
			                                            <input style="margin-left: 17px;" class="form" type="file" name="filefoto" >
														<p style="font-size: 1.0em; color:red;">*Tipe file diizinkan: jpg, jpeg, dan png (Max 2Mb)</p>
			                                        </div>
			                                        <br>
						                        </div>
					                     		<div class="col-md-8 col-sm-6 col-xs-12">
					                     			<div class="row">
								                        <div class="col-md-6 col-sm-6 col-xs-12">
								                        	<div class="form-group">
								                        	  <label>Nama Lengkap :</label>
								                              <input required id="nama_lengkap" name="edit_nama_member" class="form-control" required type="text" value="<?php echo $nama_member?>">
								                           </div>
								                        </div>
								                        <div class="col-md-6 col-sm-6 col-xs-12">
								                        	<div class="form-group">
								                        	  <label>Username :</label>
								                              <input required id="username" name="edit_username" class="form-control" required type="text" value="<?php echo $username?>">
								                           </div>
								                        </div>
								                    </div>
								                    <div class="row">
								                        <div class="col-md-6 col-sm-6 col-xs-12">
								                        	<div class="form-group">
								                        	  <label>E-Mail :</label>
								                              <input required id="name" name="edit_email" class="form-control" required type="text" value="<?php echo $email?>">
								                           </div>
								                        </div>
								                        <div class="col-md-6 col-sm-6 col-xs-12">
								                        	<div class="form-group">
								                        	  <label>Telepon :</label>
								                              <input required id="name" name="edit_telepon" class="form-control" required type="text" value="<?php echo $telepon?>">
								                           </div>
								                        </div>
								                    </div>
													
													<div class="row" id="editPassword">
														<div class="col-md-4 col-sm-4 col-xs-12">
															<div class="form-group">
																<a href="javascript:void(0)" onclick="editPassword()"><label>Ubah Password ?</label></a>
															</div>
														</div>
													
													</div>
													
													<div class="row" id="editPassword2" style="display:none">
														<div class="col-md-4 col-sm-4 col-xs-12">
								                        	<div class="form-group">
								                        	  <label>Password Lama :</label>
								                              <input id="password_lama" name="password_lama" class="form-control" type="text" >
								                           </div>
								                        </div>
								                        <div class="col-md-4 col-sm-4 col-xs-12">
								                        	<div class="form-group">
								                        	  <label>Password Baru :</label>
								                              <input id="edit_password" name="edit_password" class="form-control" type="text" >
								                           </div>
								                        </div>
								                        <div class="col-md-4 col-sm-4 col-xs-12">
								                        	<div class="form-group">
								                        	  <label>Ulangi Password :</label>
								                              <input id="ulangi_password" name="ulangi_password" class="form-control" type="text" >
								                           </div>
								                        </div>
								                    </div>
													<label for="exampleInputEmail1" id="validate_username" style="font-size:20px"></label>
													<br/>
													<label for="exampleInputEmail1" id="validate-passlama" style="font-size:20px"></label>
													<br/>
													<label for="exampleInputEmail1" id="validate-passsama" style="font-size:20px"></label>
								                    <div class="row">
								                        <div class="col-md-6 col-sm-6 col-xs-12">
								                        	
								                        </div>
								                        <div class="col-md-6 col-sm-6 col-xs-12">
								                        	<br>
								                        	<div class="form-group">
								                              <button class="btn btn-colored-blog pull-right" type="submit" value="1" class="btn btn-primary" id="submitSave"><i class="glyphicon glyphicon-floppy-disk"></i> Simpan</button>
								                           </div>
								                        </div>
								                    </div>
					                     		</div>
						                        
						                    </div>
					                     	
						                    
					                     </form>
					                  </div>
					                </div>
	                             </div>

	                          </div>
	                       </div>
	                    </div>
						
						<div class="col-md-9 col-sm-4 col-xs-12" id="kolom2" style="display:none"> 
	                       <div class="item" style="border-top:solid 1px #f44a56; box-shadow: 0 1px 6px #f44a56;">
	                          <div class="latest-news-grid grid-1">
								<!--Content menu buat event baru-->
	                             <div id="edit-event-content" class="detail">
	                             	<div class="col-md-12">
	                             		<h4><strong>Edit Event</strong></h4>
	                             		<h3><strong><label  id="nama_event"></label></strong></h3>
	                             		<hr style="border: solid 1px #f44a56; margin-top: auto; opacity: 0.4;"></hr>
	                             	</div>
	                             	<div class="col-md-12 col-sm-8 col-xs-12 nopadding" style="padding:10px;"">
					                  <div class="contact-form">
					                      
					                        <div class="col-md-12 col-sm-6 col-xs-12">
					                           <div class="form-group">
					                              <input id="edit_nama" name="edit_nama_event" class="form-control" required type="text" > 
					                           </div>

					                           <div class="row">
						                            <div class="col-md-2">
			                                            <label for="exampleInputEmail1">Jenis Event   :</label>
			                                        </div>
			                                        <div class="col-md-4">
		                                                <label>
		                                                    <input style="opacity: 1;" type="radio" name="jenis_event" value=1 required onclick="gratis()" id="edit_jenis_gratis">
		                                                     Gratis
		                                                </label>
		                                                <label>
		                                                    <input style="opacity: 1;" type="radio" name="jenis_event" value=0 required onclick="bayar()" id="edit_jenis_berbayar">
		                                                     Berbayar
		                                                </label><br>
		                                                <div class="form-group" id="form_harga" style="display:none">
				                                            <input type="number" placeholder="Harga Tiket Masuk"	name="harga" class="form-control" id="edit_harga"> 
				                                        </div>
			                                        </div>
			                                       
			                                        <div class="col-md-2" style="width: 70px;">
			                                        	<label for="exampleInputEmail1">Seat   :</label>
			                                        </div>
			                                        <div class="col-md-4">
		                                                <label>
		                                                    <input style="opacity: 1;" type="radio" name="seat" value=1 required onclick="limitedSeat()" id="edit_seat_limit">
		                                                     Limited Seat
		                                                </label>
		                                                <label>
		                                                    <input style="opacity: 1;" type="radio" name="seat" value=0 required onclick="openSeat()" id="edit_seat_open">
		                                                     Open Seat
		                                                </label>
		                                                <div class="form-group" id="limitedseat" style="display:none">
				                                            <input placeholder="Jumlah Seat" type="number" 	name="jumlah_seat" class="form-control" id="exampleInputEmail1" id="edit_jumlah_seat"> 
				                                        </div>
			                                        </div>
				                                    
			                                    </div>
			                                    
			                                    <br>

		                                        <div class="row">
		                                        	<div class="col-md-6">
				                                        <div class="form-group">
				                                            <label for="exampleInputEmail1">Kategori Event  :</label><br>
				                                            <select name="edit_kategori" required class="form-control" id="kategori">
				                                                <option value="">--Pilih Kategori Event--</option>
				                                                <?php
				                                                    foreach ($kategori_coming as $key=>$kategori) 
				                                                    {
				                                                        
				                                                        echo '<option value="'.$key.'" id="kategori_'.$key.'">'.$kategori.'</option>';   
				                                                        
				                                                    }
				                                                ?>
				                                            </select>
				                                        </div>
				                                    </div>

				                                    <div class="col-md-6">
				                                        <div class="form-group">
				                                            <label for="exampleInputEmail1">Tipe Event  :</label><br>
				                                            <select name="edit_tipe" required class="form-control" id="kategori">
				                                                <option value="">--Pilih Tipe Event--</option>
				                                                <?php
				                                                    foreach ($tipe_event as $key=>$tipe) 
				                                                    {
				                                                      
				                                                        echo '<option value="'.$key.'" id="tipe_'.$key.'">'.$tipe.'</option>';   
				                                                    }
				                                                ?>
				                                            </select>
				                                        </div>
				                                    </div>
			                                    </div>

			                                    <div class="row">
			                                    	<div class="col-md-6">
					                                   	<div class="form-group">
				                                            <!-- Date range -->
				                                            <label>Tanggal Event :</label>
				                                            <div class="input-group">
				                                                <div class="input-group-addon">
				                                                    <i class="glyphicon glyphicon-calendar"></i>
				                                                </div>
				                                                <input type="text" required name="tgl_event" class="form-control pull-right" id="reservation2"/>
				                                                <input type="hidden" id="edit_tgl_mulai" name='edit_tgl_mulai'/>
				                                                  
				                                                <input type="hidden"  id="edit_tgl_selesai" name='edit_tgl_selesai' />
				                                                    
				                                            </div><!-- /.input group -->
				                                        </div>
				                                    </div>

				                                    <div class="col-md-6">
				                                        <div class="form-group">
				                                            <label>Jam Event Dimulai & Berakhir:</label>
				                                            <div class='row'>
			                                                    <div class="col-md-6">
			                                                        <select name="edit_jam_mulai" required class="form-control" id="edit_jam_mulai" style="width: auto;">
			                                                            <option value="">--Waktu Dimulai--</option>
			                                                            <?php
			                                                                foreach ($jam_event as $key=>$jam) 
			                                                                {
			                                                                    echo '<option value="'.$key.'" id="jam_mulai_'.$key.'">'.$jam.'</option>';   
			                                                                }
			                                                            ?>
			                                                        </select>
			                                                    </div>

			                                                    <div class="col-md-6">
			                                                        <select name="edit_jam_selesai" required class="form-control" id="edit_jam_selesai" style="width: auto;">
			                                                            <option value="">--Waktu Berakhir--</option>
			                                                            <?php 
			                                                                foreach ($jam_event as $key=>$jam) 
			                                                                {
			                                                                    echo '<option value="'.$key.'" id="jam_selesai_'.$key.'">'.$jam.'</option>';   
			                                                                } 
			                                                            ?>
			                                                        </select>
			                                                    </div>
				                                            </div>
				                                        </div>
				                                    </div>
			                                    </div>

			                                    <div class="row">
		                                        	<div class="col-md-4">
				                                        <div class="form-group">
				                                            <label for="exampleInputEmail1">Institusi Penyelenggara :</label><br>
															<input type="text" name="edit_institusi" id="edit_institusi" class="form-control">
				                                        </div>
				                                    </div>
													<div class="col-md-4">
				                                        <div class="form-group">
				                                            <label for="exampleInputEmail1">Kota Lokasi Event :</label><br>
															<input type="text" name="edit_kota" id="edit_kota" class="form-control">
				                                            <!--<select name="kategori" required class="form-control" id="kategori">
				                                                <option value="">--Pilih Kota--</option>
				                                                <?php
				                                                    /*foreach ($kategori_coming as $key=>$kategori) 
				                                                    {
				                                                        
				                                                        echo '<option value="'.$key.'">'.$kategori.'</option>';   
				                                                        
				                                                    }*/
				                                                ?>
				                                            </select>-->
				                                        </div>
				                                    </div>
													
													<div class="col-md-4">
														<div class="form-group">
															<label for="exampleInputEmail1">Gunakan fasilitas pendaftaran ? </label><br>
															<input style="opacity: 1;" type="radio" name="edit_pendaftaran" value=1 required id="edit_pendaftaran_ya"><label>Ya</label>&nbsp&nbsp&nbsp&nbsp
															<label><input style="opacity: 1;" type="radio" name="edit_pendaftaran" value=0 required id="edit_pendaftaran_tidak">Tidak</label>
														</div>
														
													</div>
				                                    
				                                </div>
												<div class="row">													
													<div class="col-md-6">
				                                        <div class="form-group">
				                                            <label for="exampleInputEmail1">Alamat  :</label><br>
															<input type="text" name="edit_alamat" id="edit_alamat" class="form-control">
				                                        </div>
				                                    </div>
													<div class="col-md-6">
			                                            <label for="exampleInputFile">Unggah File Gambar Poster :</label>
			                                            <div class="input-group">
			                                                <input class="form" type="file" name="filefoto" required >
			                                            </div>
			                                            <p style="margin-top: auto; font-size: 1.0em; color:red;">*Tipe file diizinkan: jpg, jpeg, dan png (Max 2Mb)</p>
				                                    </div>
												</div>
											</div>
											<input type="hidden" name="edit_id_event" id="edit_id_event">
					                        <input type="hidden" name="id_member" value="<?php echo $id_member; ?>">
					                        <input type="hidden" name="nama_member" value="<?php echo $nama_member; ?>">
					                        <input type="hidden" name="email" value="<?php echo $email; ?>">
					                        <input type="hidden" name="telepon" value="<?php echo $telepon; ?>">
					                        <input type="hidden" name="passwordlama" value="<?php echo $password; ?>" id="passwordlama">
					                        <div class="col-md-12 col-sm-12 col-xs-12">
					                           <div class="form-group">
					                              <textarea cols="12" rows="5" placeholder="Keterangan tambahan event . . ." id="edit_deskripsi_event" name="edit_deskripsi_coming" class="form-control" required></textarea>
					                           </div>
					                           <div class="form-group">
					                              
					                              <button class="btn btn-colored-blog pull-right" onclick="simpanEvent()"><i class="glyphicon glyphicon-send"></i> Simpan Event</button>
												  <button class="btn btn-colored-blog " onclick="batal()"><i class="glyphicon glyphicon-arrow-left"></i> Kembali</button>
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
	        </div>
	    </div>
	  </section>

	  <script src="<?php echo base_url('asset/js/daterangepicker/daterangepicker.js?ver=b1.0'); ?>" type="text/javascript"></script>

	  <script type="text/javascript">
		var check_passlama = 0;
	  	function bayar()
	  	{
			document.getElementById("jenis_event").style.display = "block";
		}
				
		function gratis()
		{
			document.getElementById("jenis_event").style.display = "none";
		}

		function limitedSeat()
		{
			document.getElementById("limitedseat").style.display = "block";
		}
				
		function openSeat(){
			document.getElementById("limitedseat").style.display = "none";
		}

		// Script untuk onchange ganti gambar
        $(".ganti_gambar").hide();
        $("#ganti").click(function(){
            $(".ganti_gambar").toggle();
        });

		$(document).ready( function () {

        //Date range picker tambah event
            $('#reservation').daterangepicker({format: 'YYYY-MM-DD'},function(start, end) {
                $('#tgl_mulai').val(start.format('YYYY-MM-DD'));
                $('#tgl_selesai').val(end.format('YYYY-MM-DD'));
            });
        });
		
		$(document).ready( function () {

        //Date range picker tambah event
            $('#reservation2').daterangepicker({format: 'YYYY-MM-DD'},function(start, end) {
                $('#edit_tgl_mulai').val(start.format('YYYY-MM-DD'));
                $('#edit_tgl_selesai').val(end.format('YYYY-MM-DD'));
            });
        });
		
		function editPassword(){
			document.getElementById("editPassword").style.display = "none";
			document.getElementById("editPassword2").style.display = "block";
			document.getElementById("password_lama").type = "password";
			document.getElementById("edit_password").type = "password";
			document.getElementById("ulangi_password").type = "password";
			document.getElementById("submitSave").disabled = true;
			
		}
		
		$(document).ready(function() {
		  $("#ulangi_password").keyup(validate);
		});
		
		$(document).ready(function() {
		  $("#password_lama").keyup(validate_passlama);
		});

		
		function validate() {
		
		  var password1 = $("#edit_password").val();
		  var password2 = $("#ulangi_password").val();

			if(password1 == password2) {
			   document.getElementById("validate-passsama").style.color = "green";
			   $("#validate-passsama").text("Password valid"); 
			   check_passsama = 1;
			   if(check_passlama==1){
					document.getElementById("submitSave").disabled = false;
			   }
			}
			else {
				document.getElementById("validate-passsama").style.color = "red";
				$("#validate-passsama").text("Password tidak sama");  
				document.getElementById("submitSave").disabled = true;
			}
			
		}
		
		function validate_passlama() {
		
		  var password1 = $("#passwordlama").val();
		  var password2 = $("#password_lama").val();
		  $.ajax({
			url: 'validate_passlama',	
			type: 'POST',
			data: {password2:password2},
			success: function(password){
						password2 = password;
						if(password1 == password2) {
						   document.getElementById("validate-passlama").style.color = "green";
						   $("#validate-passlama").text("Password lama benar"); 
						   check_passlama = 1;
						   if(check_passsama==1)
								document.getElementById("submitSave").disabled = false;
						   {}
						}
						else {
							document.getElementById("validate-passlama").style.color = "red";
							$("#validate-passlama").text("Password lama salah");  
							document.getElementById("submitSave").disabled = true;
						}
					},
			error: function(){
						alert('GAGAL');
					}
					
			});
			
			
			
			
		}
		
		function editEvent(id_event){
			document.getElementById("kolom1").style.display = "none";
			document.getElementById("kolom2").style.display = "block";
			$.ajax({
			url: '../KelolaComing/get_data_event',	
			type: 'POST',
			data: {id_event:id_event},
			dataType: "json",
			success: function(dataEvent){
						var dataEvent = JSON.parse(JSON.stringify(dataEvent));
						var id_event = dataEvent.id_coming;
						var nama_event = dataEvent.nama_coming;
						var kategori_event = dataEvent.kategori_coming;
						var tipe_event = dataEvent.tipe_event;
						var harga = dataEvent.harga;
						var jenis_event =dataEvent.jenis_event;
						var institusi =	dataEvent.institusi;
						var telepon	= dataEvent.telepon;
						var email =	dataEvent.email;
						var tgl_mulai = dataEvent.tgl_mulai;
						var tgl_selesai	= dataEvent.tgl_selesai;
						var jam_mulai = dataEvent.jam_mulai;
						var	jam_selesai = dataEvent.jam_selesai;
						var deskripsi_event	= dataEvent.deskripsi_coming;
						var posted_by = dataEvent.posted_by;
						var seat = dataEvent.seat;
						var jumlah_seat	= dataEvent.jumlah_seat;
						var kota_lokasi	= dataEvent.kota_lokasi;
						var top_event = dataEvent.top_event;
						var pendaftaran = dataEvent.pendaftaran;
						var alamat = dataEvent.alamat;
						var path_gambar = dataEvent.path_gambar;
						

						$("#nama_event").text(nama_event);
						$("#edit_id_event").val(id_event);
						$("#edit_nama").val(nama_event);
						$("#reservation2").val(tgl_mulai+" s/d "+tgl_selesai);
						document.getElementById("kategori_"+kategori_event+"").selected = true;
						document.getElementById("tipe_"+tipe_event+"").selected = true;
						document.getElementById("jam_mulai_"+jam_mulai+"").selected = true;
						document.getElementById("jam_selesai_"+jam_selesai+"").selected = true;
						
						$("#edit_kota").val(kota_lokasi);
						$("#edit_tgl_mulai").val(tgl_mulai);
						$("#edit_tgl_selesai").val(tgl_selesai);
						$("#edit_deskripsi_event").val(deskripsi_event);
						$("#edit_alamat").val(alamat);
						$("#edit_institusi").val(institusi);
						
						/*edit jenis event*/
						if (jenis_event==0){document.getElementById("edit_jenis_berbayar").checked = true;} 
						else {document.getElementById("edit_jenis_gratis").checked = true;}
						
						/*edit harga*/
						$("#edit_harga").val(harga);
						
						/*edit jenis event*/
						if (seat==0){document.getElementById("edit_seat_open").checked = true;} 
						else {document.getElementById("edit_seat_limit").checked = true;}
							
						/*edit pendaftaran*/
						if (pendaftaran==1){document.getElementById("edit_pendaftaran_ya").checked = true;} 
						else {document.getElementById("edit_pendaftaran_tidak").checked = true;}
						
						
						/*edit harga*/
						$("#edit_jumlah_seat").val(jumlah_seat);
						
						
					},
			error: function(){
						alert('GAGAL');
					}
					
			});
		}
		
		function batal(){
			document.getElementById("kolom1").style.display = "block";
			document.getElementById("kolom2").style.display = "none";
		}
		
		function simpanEvent(){
			var id_event = $("#edit_id_event").val();
			if(document.getElementById("edit_jenis_berbayar").checked){
				var jenis_event=0;
				var harga = $("#edit_harga").val();
			} else {
				var jenis_event=1;
				var harga = 0;
			}
			
			
			if(document.getElementById("edit_seat_open").checked){
				var seat=0;
				var jumlah_seat = 0;
			} else {
				var seat=1;
				var jumlah_seat = $("#jumlah_seat").val();
			}
			
			if(document.getElementById("edit_pendaftaran_ya").checked){
				var pendaftaran=1;
			} else {
				var pendaftaran=0;
			}
			
			var dataEvent = {
				nama_coming : $("#edit_nama").val(),
				jenis_event : jenis_event,
				harga : harga,
				seat : seat,
				jumlah_seat : jumlah_seat,
				kategori_coming : $("#edit_kategori").val(),
				tipe_event : $("#edit_tipe").val(),
				tgl_mulai : $("#edit_tgl_mulai").val(),
				tgl_selesai : $("#edit_tgl_selesai").val(),
				jam_mulai : $("#edit_jam_mulai").val(),
				jam_selesai : $("#edit_jam_selesai").val(),
				institusi : $("#edit_institusi").val(),
				kota_lokasi : $("#edit_kota").val(),
				alamat : $("#edit_alamat").val(),
				deskripsi_coming : $("#edit_deskripsi_event").val(),
				
			};
			
			$.ajax({
			url: '../KelolaComing/update_event',	
			type: 'POST',
			data: {id_event:id_event,dataEvent:dataEvent},
			dataType: "json",
			success: function(data){
			}
			});
			
		}
		
		$(document).ready(function() {
		  $("#username").keyup(validateUsername);
	  });
	  
	  function validateUsername() {
		
		  var username1 = $("#username").val();
		  var username = $("#username").val();
		  if(username==''){
			$("#validate_username").text("* Username masih kosong"); 
			document.getElementById("submitSave").disabled = true;
		  }
		  else{
		  $.ajax({
			url: 'validate_username',	
			type: 'POST',
			data: {username:username},
			success: function(dataUsername){
						if(dataUsername!=0) {
						   document.getElementById("validate_username").style.color = "red";
						   $("#validate_username").text("* Username tidak tersedia"); 
						   document.getElementById("submitSave").disabled = true;
						}
						else {
							document.getElementById("validate_username").style.color = "green";
							$("#validate_username").text("* Username tersedia");  
							document.getElementById("submitSave").disabled = false;
						}
					},
			error: function(){
						alert('GAGAL');
					}
					
			});}
		
		}
	  </script>



            
                


	 


