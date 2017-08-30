	<section class="my-breadcrumb" style="background-image: url(<?php echo base_url('asset/img/memberarea.jpg') ; ?>);">
         <div class="container page-banner">
            <div class="row">
               <div class="col-sm-12 col-md-12 col-xs-12">
                  <h1>&nbsp;</h1>
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
	                       <div class="item" style="background-color: white; border-top:solid 1px #f44a56; box-shadow: 0 1px 6px #f44a56;">
	                          <div class="latest-news-grid grid-1">
	                             <div class="detail">
	                                <div class="col-md-12">
			                             <div class="picture">
			                             	<div style="margin-bottom: 15px;" class="ad-div style-box">
			                             		<?php
                                                if (empty($path_foto))
                                                {
                                                    echo '<img style="height: 250px; padding: 4px; max-width:250px; border: solid 1px black" src="'.base_url('asset/img/empty.png').'"/>';
                                                }
                                                else
                                                {
                                                	echo '<a href="'.base_url('asset/upload_img_member/'.$path_foto).'" class="tt-lightbox">
						                              <img style="max-height: 250px; width:100%; border: solid 1px black" alt="" class="img-responsive" src="'.base_url('asset/upload_img_member/'.$path_foto).'">';
						                           	echo "</a>";
                                                }
                                            ?>

					                           
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
                                				<a id="dashboard-member" style="text-align: left; width: 100%;" href="javascript:void(0)" class="btn btn-colored-blog-member-area" onclick="closeEdit()">
                                					<i class="glyphicon glyphicon-dashboard"></i> My Published Event
                                				</a>
	                                		</td>
	                                	</tr>
	                                	<tr>
	                                		<td style="padding: inherit;">
	                                			<a id="tambah-event" style="text-align: left; width: 100%;" href="javascript:void(0)" class="btn btn-colored-blog-member-area" onclick="closeEdit()">
	                                				<i class="glyphicon glyphicon-plus"></i> Buat Event Baru 
	                                			</a>
	                                		</td>
	                                	</tr>
	                                	<tr>
	                                		<td style="padding: inherit;">
	                                			<a id="edit-profil" style="text-align: left; width: 100%;" href="javascript:void(0)" class="btn btn-colored-blog-member-area" onclick="closeEdit()">
	                                				<i class="glyphicon glyphicon-pencil"></i> Edit Profilmu
	                                			</a>
	                                		</td>
	                                	</tr>
	                                </table>
	                                <hr style="margin-top: auto; border: solid 1px #f44a56; opacity: 0.4;">
	                                <div class="col-md-12" style="text-align: center;">
                                       <a style="width: 100%;" href="<?php echo base_url('Account/logout_member	');?>" class="btn btn-colored-blog"><i class="glyphicon glyphicon-log-out"></i> Sign Out </a>
                                    </div>
	                             </div>
	                          </div>
	                       </div>
	            		</div>

	            		<!--Content kolom kanan Riwayat Event, edit profile, edit event, dan post event baru-->
	            		<div class="col-md-9 col-sm-4 col-xs-12" id="kolom1">
	                       <div class="item" style="background-color: white; border-top:solid 1px #f44a56; box-shadow: 0 1px 6px #f44a56;">
	                          <div class="latest-news-grid grid-1">

	                          	<!--Content menu riwayat event member-->
	                            <div id="dashboard-content" class="detail">
	                             	<div class="col-md-12">
										
	                            		<?php 
	                            			if($this->session->flashdata('msg_berhasil')!=''){?>
							                <div class="alert alert-success alert-dismissable">
							                     <i class="glyphicon glyphicon-ok"></i>
							                     <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
							                     <?php echo $this->session->flashdata('msg_berhasil');?> 
							                </div>
						            	<?php }
						            		  elseif($this->session->flashdata('msg_gagal')!=''){ ?>
						            		  
						            			<div class="alert alert-success alert-dismissable">
								                     <i class="glyphicon glyphicon-ok"></i>
								                     <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
								                     <?php echo $this->session->flashdata('msg_gagal');?> 
								                </div>
						            	<?php } ?>
	                             		<h4><strong>My Published Event</strong></h4>
	                             		<hr style="border: solid 1px #f44a56; margin-top: auto; opacity: 0.4;"></hr>
	                             	</div>
									<?php
										if (empty($listEvent)) 
										{
											echo "<h5 style='text-align: center;'>Belum ada event yang pernah kamu publish . . .</h5s>";
										}
										else
										{
											foreach($listEvent as $event)
											{ ?>
												<div class="row">
													<div class="col-md-8">
					                             		<div class="col-md-2" style="padding-bottom: 10px; text-align: center;"> 
					                             			<img alt="" src="<?php echo base_url('asset/upload_img_coming/thumb83_'.$event['path_gambar']); ?>">
					                             		</div>
					                                    <div style="padding-left: 10px;" class="caption">
					                                    	<a href="<?php echo base_url('FrontControl_Event/event_click/'.$event['id_coming']); ?>"><label><?php echo $event['nama_coming'];?></label></a><span><?php 
															if($event['status']==2)
															{?>
																
																<label  href="#" class=" btn btn-xs btn-dark-red"><b>Menunggu Verifikasi</b></label>
													  <?php }
													  		else
													  		{ ?>
													  			
																<label href="#" class=" btn btn-xs btn-success"><b>Publish</b></label>
													  <?php } ?></span>
					                                    </div>
					                                    <ul style="padding-left: 10px;" class="post-tools">
					                                        <li title="Testimoni"> <i class="ti-thought"></i> 15 </li>
					                                        <li title="Dilihat"> <i class="glyphicon glyphicon-eye-open"></i> <?php echo $event['hits']; ?> </li>
					                                        <li title="Disukai"> <i class="glyphicon glyphicon-thumbs-up"></i> <?php echo $event['like']; ?> </li>
					                                    </ul>
					                                    <br>
			                                     		<a style="margin-left: 10px; margin-top: -25px;" href="#" class=" btn btn-xs btn-green"><i class="ti-money"></i> <?php if($event['jenis_event']==0){?>Berbayar<?php } else{ ?>Gratis<?php } ?></a>
					                                   	<a style="margin-top: -25px;" href="#" class=" btn btn-xs btn-dark-red"><?php echo $event['kategori_coming']; ?></a>
					                                   	<a style="margin-top: -25px;" href="#" class=" btn btn-xs btn-orange"><?php echo $event['tipe_event']; ?></a>                                  	
					                                </div>
					                                <br>
					                                <div class="col-md-4" style="text-align: right; padding-bottom: 20px; padding-right: 30px;">

		                                				<!-- Tombol Download Rekap Pendaftar -->
		                                				<a href="<?php echo site_url("KelolaPendaftar/export_excel_respon/".$event['id_coming']); ?>" id="btn_export">
			                                        		<button style="
			                                        			<?php if ($event['pendaftaran'] ==1)
			                                        	 		{
			                                        	 			echo "display: content;";
			                                        	 		}
			                                        	 		else
			                                        	 		{
			                                        	 			echo "display: none;";
			                                        	 		}
			                                        	 		?>"  id="edit-button-coming" type="submit" class="btn btn-info btn-sm"><i class="glyphicon glyphicon-download-alt" ></i> Data Pendaftar</button>
			                                        	 </a>
				                                	
					                                	<!-- Tombol Edit -->
				                                       <button onclick="editEvent(<?php echo $event['id_coming']?>)" id="edit-button-coming" type="submit" class="btn btn-warning btn-sm"><i class="glyphicon glyphicon-pencil" ></i> Edit</button>
				                                    	
				                                    	<!-- Tombol Hapus -->
				                                        <button onclick="delete_coming_dashboard_member_ajax(<?php echo $event['id_coming']; ?>)" class="btn btn-danger btn-sm"><i class="glyphicon glyphicon-trash" ></i> Hapus</button>
					                                </div>
					                            </div>

				                                <div class="col-md-12">
				                             		<hr style="border: solid 1px grey; margin-top: auto; opacity: 0.3;"></hr>
				                             	</div>
											<?php } 
										} ?>
	                            </div>

	                             <!--Content menu buat event baru-->
	                             <div style="background-color: white; display: none;" id="event-baru-content" class="detail">
	                             	<div class="col-md-12">
	                             		<h4><strong>Buat Event Baru</strong></h4>
	                             		<hr style="border: solid 1px #f44a56; margin-top: auto; opacity: 0.4;"></hr>
	                             	</div>
	                             	<div class="col-md-12 col-sm-8 col-xs-12 nopadding" style="padding:10px;"">
					                  <div class="contact-form">

					                      <form role="form" enctype="multipart/form-data" action="<?php echo site_url('KelolaMember/tambah_event/');?>" method="POST">
					                        <div class="col-md-12 col-sm-6 col-xs-12">
					                           <div class="form-group">
					                           	   <label for="exampleInputEmail1">Nama Event :</label><br>
					                              <input required id="name" name="judul_coming" class="form-control" required type="text" value="<?php 
													if (isset($dataComing['judul_coming']))
													{
														echo htmlspecialchars($dataComing['judul_coming']);
													}
													?>"> 
					                           </div>

					                           <div class="row">
													<div class="col-md-4">
				                                        <div class="form-group">
				                                            <label for="exampleInputEmail1">Institusi Penyelenggara :</label><br>
															<input required type="text" name="institusi" class="form-control">
				                                        </div>
				                                    </div>
													<div class="col-md-4">
				                                        <div class="form-group">
				                                            <label for="exampleInputEmail1">E-mail :</label><br>
															<input required type="email" name="email" class="form-control">
				                                        </div>
				                                    </div>
				                                    <div class="col-md-4">
				                                        <div class="form-group">
				                                            <label for="exampleInputEmail1">Nomor Telepon :</label><br>
															<input required type="number" name="telepon" class="form-control">
				                                        </div>
				                                    </div>
												</div>

					                           <div class="row">
						                            <div class="col-md-2">
			                                            <label for="exampleInputEmail1">Jenis Event   :</label>
			                                        </div>
			                                        <div class="col-md-10">
		                                                <label>
		                                                    <input style="opacity: 1;" type="radio" name="jenis_event" value=1 required onclick="gratis()">
		                                                     Gratis
		                                                </label>
		                                                <label>
		                                                    <input style="opacity: 1;" type="radio" name="jenis_event" value=0 required onclick="bayar()">
		                                                     Berbayar
		                                                </label><br>
														<div class="row" id="jenis_event"  style="display:none">
															<div class="form-group col-md-3" >
																<input type="text" placeholder="Nama Tiket"	name="nama_tiket[]" class="form-control" required> 
															</div>
															<div class="form-group col-md-4" >
																<div class="row">
																	<div class="col-md-12" id="divqty1">
																		<select class="form-control" name="jenisqty[]" id="quantity" onchange="changeQty()" required>
																			<option value="">-Qty-</option>
																			<option value="open">Open</option>
																			<option value="limit">Limit</option>
																		</select>
																	</div>
																	<div class="col-md-6" id="divqty2" style="display:none">
																		<input type="number" class="form-control" name="qty[]" id="qty" placeholder="Qty Seat">
																	</div>
																</div>
															</div>
															<div class="form-group col-md-3" >
																<input type="number" placeholder="Harga Tiket"	name="harga[]" class="form-control" required> 
															</div>
															<div class="col-md-2" style="text-align: center;">
																<label for="exampleInputEmail1">&nbsp;</label>
																<a id="add_field" href="javascript:void(0)">
																	<button type="button" class="btn btn-primary">
																		<i class="glyphicon glyphicon-plus"></i>
																	</button>
																</a>
															</div>
														</div>
														<br>
														<div  id="tambah_field">
														</div>
														
			                                        </div>
			                                       
			                                    <br>

		                                        <div class="row">
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
													<div class="col-md-6">
				                                        <div class="form-group">
				                                            <label for="exampleInputEmail1">Kota Lokasi Event :</label><br>
															<!--<input required type="text" name="kota" class="form-control">-->
				                                            <select name="kota" required class="form-control" id="kota">
				                                                <option value="">--Pilih Kota Lokasi--</option>
				                                                <?php
				                                                    foreach ($kotaLokasi as $key=>$kota) 
				                                                    {
				                                                        
				                                                        echo '<option value="'.$key.'">'.$kota['lokasi_nama'].'</option>';   
				                                                        
				                                                    }
				                                                ?>
				                                            </select>
				                                        </div>
				                                    </div>
		                                        	<div class="col-md-6">
		                                        		<div class="form-group">
				                                            <label for="exampleInputEmail1">Alamat Event :</label><br>
															<input required type="text" name="alamat" class="form-control">
				                                        </div>
				                                    </div>
				                                </div>

												<div class="row">
													<div class="col-md-6">
														<label for="exampleInputEmail1">Gunakan fasilitas pendaftaran ? </label><br>
														<input style="opacity: 1;" type="radio" name="pendaftaran" value=1 required ><label>Ya</label>
														<label><input style="opacity: 1;" type="radio" name="pendaftaran" value=0 required >Tidak</label>
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
					                        
					                        <div class="col-md-12 col-sm-12 col-xs-12">
					                           <div class="form-group">
					                           	  <label for="exampleInputFile">Keterangan Tambahan Event :</label>
					                              <textarea cols="12" rows="5" id="message" name="deskripsi_coming" class="form-control" required></textarea>
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
	                             <div style="background-color: white; display: none;" id="edit-profil-content" class="detail">
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
								                        	<input type="hidden" name="passwordlama" value="<?php echo $password; ?>" id="passwordlama">
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
	                    </div>
						
						<div class="col-md-9 col-sm-4 col-xs-12" id="kolom2" style="display:none"> 
	                       <div class="item" style="background-color: white; border-top:solid 1px #f44a56; box-shadow: 0 1px 6px #f44a56;">
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
					                    <form role="form" enctype="multipart/form-data" action="<?php echo site_url('KelolaComing/edit_event/');?>" method="POST">  
					                        <div class="col-md-12 col-sm-6 col-xs-12">
					                           <div class="form-group">
												  <label for="exampleInputEmail1">Nama Event :</label><br>
					                              <input id="edit_nama" name="edit_nama_event" class="form-control" required type="text" > 
					                           </div>
											   <div class="row">
													<div class="col-md-4">
														<div class="form-group">
															<label for="exampleInputEmail1">Institusi Penyelenggara :</label><br>
															<input required type="text" name="edit_institusi" id="edit_institusi" class="form-control">
														</div>
													</div>
													<div class="col-md-4">
														<div class="form-group">
															<label for="exampleInputEmail1">Email :</label><br>
															<input required type="email" name="edit_email" id="edit_email" class="form-control">
														</div>
													</div>
													<div class="col-md-4">
														<div class="form-group">
															<label for="exampleInputEmail1">Telepon :</label><br>
															<input required type="number" name="edit_telepon" id="edit_telepon" class="form-control">
														</div>
													</div>
											   </div>
					                           <div class="row">
						                            <div class="col-md-2">
			                                            <label for="exampleInputEmail1">Jenis Event   :</label>
			                                        </div>
													
			                                        <div class="col-md-10">
		                                                <label>
		                                                    <input style="opacity: 1;" type="radio" name="edit_jenis_event" value=1 required onclick="gratis2()" id="edit_jenis_gratis">
		                                                     Gratis
		                                                </label>
		                                                <label>
		                                                    <input style="opacity: 1;" type="radio" name="edit_jenis_event" value=0 required onclick="bayar2()" id="edit_jenis_berbayar">
		                                                     Berbayar
		                                                </label><br>
		                                                
														<div class="row" id="edit_jenis_event"  style="display:block">
															
														</div>
														<br>
														<div  id="edit_tambah_field">
														</div>
														
													</div>	
			                                        
				                                    
			                                    </div>
			                                    
			                                    <br>

		                                        <div class="row">
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
		                                        	
													<div class="col-md-6">
				                                        <div class="form-group">
				                                            <label for="exampleInputEmail1">Kota Lokasi Event :</label><br>
															<select name="edit_kota" required class="form-control" id="edit_kota">
				                                                <option value="">--Pilih Kota Lokasi--</option>
				                                                <?php
				                                                    foreach ($kotaLokasi as $key=>$kota) 
				                                                    {
				                                                        
				                                                        echo '<option value="'.$key.'" id="kota'.$key.'">'.$kota['lokasi_nama'].'</option>';   
				                                                        
				                                                    }
				                                                ?>
				                                            </select>
															
				                                        </div>
				                                    </div>
													<div class="col-md-6">
				                                        <div class="form-group">
				                                            <label for="exampleInputEmail1">Alamat  :</label><br>
															<input type="text" name="edit_alamat" id="edit_alamat" class="form-control">
				                                        </div>
				                                    </div>
													
				                                    
				                                </div>
												<div class="row">													
													
													<div class="col-md-6">
														
														<label for="exampleInputEmail1">Gunakan fasilitas pendaftaran ? </label><br>
														<input style="opacity: 1;" type="radio" name="edit_pendaftaran" value=1 required id="edit_pendaftaran_ya"><label>Ya</label>&nbsp&nbsp&nbsp&nbsp
														<label><input style="opacity: 1;" type="radio" name="edit_pendaftaran" value=0 required id="edit_pendaftaran_tidak">Tidak</label>
														
														
													</div>
													<div class="col-md-6">
														<label for="exampleInputEmail1">Poster Event</label><br>
														<div class="row">
															<div class="col-md-3">
																<img alt="" id="gambar_event" >
															</div>
															<div class="col-md-9" id="trig_ganti_gambar" >
																<a onclick="gantiGambar()"><label for="exampleInputEmail1">Ingin ganti poster ?</label></a>
															</div>
															<div class="col-md-9" id="ganti_gambar" style="display:none">
																<label for="exampleInputFile">Unggah File Gambar Poster :</label>
																<div class="input-group">
																	<input class="form" type="file" name="filefoto">
																</div>
																<p style="margin-top: auto; font-size: 1.0em; color:red;">*Tipe file diizinkan: jpg, jpeg, dan png (Max 2Mb)</p>
															</div>
														</div>
				                                    </div>
												</div>
											</div>
											<input type="hidden" name="edit_id_event" id="edit_id_event">
					                        <input type="hidden" name="id_member" value="<?php echo $id_member; ?>">
					                        <input type="hidden" name="nama_member" value="<?php echo $nama_member; ?>">
					                        <input type="hidden" name="email" value="<?php echo $email; ?>">
					                        <input type="hidden" name="telepon" value="<?php echo $telepon; ?>">
					                        <div class="col-md-12 col-sm-12 col-xs-12">
					                           <div class="form-group">
					                              <textarea cols="12" rows="5" placeholder="Keterangan tambahan event . . ." id="edit_deskripsi_event" name="edit_deskripsi_coming" class="form-control" required></textarea>
					                           </div>
					                           <div class="form-group">
					                              
					                              <button class="btn btn-colored-blog pull-right" value="2" type="submit"><i class="glyphicon glyphicon-send"></i> Simpan Event</button>
												  <button class="btn btn-colored-blog " onclick="batal()"><i class="glyphicon glyphicon-arrow-left"></i> Kembali</button>
					                           </div>
					                        </div>
					                    </form> 
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
		
		function bayar2()
	  	{
			document.getElementById("edit_jenis_event").style.display = "block";
		}
				
		function gratis2()
		{
			document.getElementById("edit_jenis_event").style.display = "none";
		}

		function limitedSeat2()
		{
			document.getElementById("edit_seat").style.display = "block";
		}
				
		function openSeat2(){
			document.getElementById("edit_seat").style.display = "none";
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
		
		function gantiGambar(){
			document.getElementById("ganti_gambar").style.display = "block";
			document.getElementById("trig_ganti_gambar").style.display = "none";
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
		function closeEdit(){
			document.getElementById("kolom1").style.display = "block";
			document.getElementById("kolom2").style.display = "none";
		}
		
		var counter2 = 0;
		function editEvent(id_event){
			document.getElementById("kolom1").style.display = "none";
			document.getElementById("kolom2").style.display = "block";
			var getUrl = window.location;
			var baseUrl = getUrl .protocol + "//"+ getUrl.pathname.split('/')[1];
			$.ajax({
			url: '../KelolaComing/get_data_event',	
			type: 'POST',
			data: {id_event:id_event},
			dataType: "json",
			success: function(dataEvent){
						var dataEvent = JSON.parse(JSON.stringify(dataEvent));
						var event = dataEvent["data_event"];
						var tiket = dataEvent["tiket"];
						var id_event = event.id_coming;
						var nama_event = event.nama_coming;
						var kategori_event = event.kategori_coming;
						var tipe_event = event.tipe_event;
						var harga = event.harga;
						var jenis_event =event.jenis_event;
						var institusi =	event.institusi;
						var telepon	= event.telepon;
						var email =	event.email;
						var tgl_mulai = event.tgl_mulai;
						var tgl_selesai	= event.tgl_selesai;
						var jam_mulai = event.jam_mulai;
						var	jam_selesai = event.jam_selesai;
						var deskripsi_event	= event.deskripsi_coming;
						var posted_by = event.posted_by;
						var seat = event.seat;
						var jumlah_seat	= event.jumlah_seat;
						var kota_lokasi	= event.id_lokasi;
						var top_event = event.top_event;
						var pendaftaran = event.pendaftaran;
						var alamat = event.alamat;
						var path_gambar = event.path_gambar;
						
						for (var i = 0; i < tiket.length; i++) {
							var divtiket='';
							if(tiket[i].seat==0){
								var open = 'selected="selected"';
							} else {
								var limit = 'selected="selected"';
							}
							divtiket += '<div id="tiket_'+i+'">';
							divtiket += '<div class="form-group col-md-3" >';
								divtiket += '<input type="text" placeholder="Nama Tiket"	name="edit_nama_tiket[]" id="edit_nama_tiket'+i+'" class="form-control" required value="'+tiket[i].nama_tiket+'">';
								divtiket += '<input type="hidden" name="edit_id_jenis_tiket[]" id="edit_id_jenis_tiket'+i+'" class="form-control" required value="'+tiket[i].id_jenis_tiket+'">';
							divtiket += '</div>';
							divtiket += '<div class="form-group col-md-4" >';
								divtiket += '<div class="row">';
									divtiket += '<div class="col-md-12" id="edit_divqty1'+i+'">';
										divtiket += '<select class="form-control" name="edit_jenisqty[]" id="edit_quantity'+i+'" onchange="editchangeQty('+i+')" required>';
											divtiket += '<option value="0">-Qty-</option>';
											divtiket += '<option value="open" '+open+'>Open</option>';
											divtiket += '<option value="limit" '+limit+'>Limit</option>';
										divtiket += '</select>';
									divtiket += '</div>';
									divtiket += '<div class="col-md-6" id="edit_divqty2'+i+'" style="display:none">';
										divtiket += '<input type="number" class="form-control" name="edit_qty[]" id="edit_qty'+i+'" placeholder="Qty Seat" value="'+tiket[i].seat+'">';
									divtiket += '</div>';
								divtiket += '</div>';
							divtiket += '</div>';
							divtiket += '<div class="form-group col-md-3" >';
								divtiket += '<input type="number" placeholder="Harga Tiket"	name="edit_harga[]" id="edit_harga'+i+'" class="form-control" required value="'+tiket[i].harga+'">';
							divtiket += '</div>';
							if(i==0){
							divtiket += '<div class="col-md-2" style="text-align: center;">';
								divtiket += '<label for="exampleInputEmail1">&nbsp;</label>';
								divtiket += '<a onclick="add_field2()" href="javascript:void(0)">';
									divtiket += '<button type="button" class="btn btn-primary">';
										divtiket += '<i class="glyphicon glyphicon-plus"></i>';
									divtiket += '</button>';
								divtiket += '</a>';
							divtiket += '</div>';
							} else {
							divtiket += '<div class="col-md-2" style="text-align: center;">';
								divtiket += '<label for="exampleInputEmail1">&nbsp;</label>';
								divtiket += '<a onclick="delete_field2('+i+')" href="javascript:void(0)">';
								divtiket += '<button type="button" class="btn btn-danger">';
									divtiket += '<i class="glyphicon glyphicon-minus"></i>';
								divtiket += '</button>';
								divtiket += '</a>';
							divtiket += '</div>';
							divtiket += '</div>';	
							divtiket += '</div>';	
							}
							$('#edit_jenis_event').append(divtiket);
							counter2 = i;
						}
						
						
						$("#nama_event").text(nama_event);
						$("#edit_id_event").val(id_event);
						$("#edit_nama").val(nama_event);
						$("#reservation2").val(tgl_mulai+" s/d "+tgl_selesai);
						document.getElementById("kategori_"+kategori_event+"").selected = true;
						document.getElementById("tipe_"+tipe_event+"").selected = true;
						document.getElementById("jam_mulai_"+jam_mulai+"").selected = true;
						document.getElementById("jam_selesai_"+jam_selesai+"").selected = true;
						document.getElementById("kota"+kota_lokasi+"").selected = true;
						
						$("#edit_kota").val(kota_lokasi);
						$("#edit_tgl_mulai").val(tgl_mulai);
						$("#edit_tgl_selesai").val(tgl_selesai);
						$("#edit_deskripsi_event").val(deskripsi_event);
						$("#edit_alamat").val(alamat);
						$("#edit_institusi").val(institusi);
						$("#edit_email").val(email);
						$("#edit_telepon").val(telepon);
						$("#gambar_event").attr("src",""+baseUrl+"/asset/upload_img_coming/thumb83_"+path_gambar+"");
						
						/*edit jenis event*/
						if (jenis_event==0){document.getElementById("edit_jenis_berbayar").checked = true; document.getElementById("edit_jenis_event").style.display = "block";} 
						else {document.getElementById("edit_jenis_gratis").checked = true;}
						
						/*edit harga*/
						$("#edit_harga").val(harga);
						
						/*edit jenis event*/
						if (seat==0){document.getElementById("edit_seat_open").checked = true;} 
						else {document.getElementById("edit_seat_limit").checked = true; document.getElementById("edit_seat").style.display = "block";}
						
						/*edit pendaftaran*/
						if (pendaftaran==1){document.getElementById("edit_pendaftaran_ya").checked = true;} 
						else {document.getElementById("edit_pendaftaran_tidak").checked = true;}
						
						/*edit seat*/
						$("#edit_jumlah_seat").val(jumlah_seat);
						
						$(document).ready( function () {

				        //Date range picker tambah event
				            $('#reservation2').daterangepicker({format: 'YYYY-MM-DD',startDate: tgl_mulai,
				                                                                endDate: tgl_selesai},function(start, end) {
				                $('#edit_tgl_mulai').val(start.format('YYYY-MM-DD'));
				                $('#edit_tgl_selesai').val(end.format('YYYY-MM-DD'));
				            });
				        });

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
				id_lokasi : $("#edit_kota").val(),
				alamat : $("#edit_alamat").val(),
				deskripsi_coming : $("#edit_deskripsi_event").val(),
				
			};
			
			$.ajax({
			url: '../KelolaComing/update_event',	
			type: 'POST',
			data: {id_event:id_event,dataEvent:dataEvent},
			dataType: "json",
			success: function(data1){
				alert(data1);	
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

		function delete_coming_dashboard_member_ajax(id_coming)
		{
			if (confirm("Anda yakin ingin menghapus Event ini beserta data didalamnya ?"))
			{;
				$.ajax({
					url: '../KelolaComing/delete_coming',
					type: 'POST',
					data: {id_coming:id_coming},
					success: function(){
								alert('Delete Event beserta data yang berkaitan berhasil');
								location.reload();
							},
					error: function(){
								alert('Delete Event gagal');
							}
				});
			}
			else
			{
				alert(id_coming + "Gagal dihapus");
			}
		}
		
				function changeQty(){
					var x = document.getElementById("quantity").value;
					if(x=="limit"){
						document.getElementById("divqty1").className = "col-md-6";
						document.getElementById("divqty2").style.display = "block";
					} else {
						document.getElementById("divqty1").className = "col-md-12";
						document.getElementById("divqty2").style.display = "none";
					}
				}
				
				function changeQty2(y){
					var x = document.getElementById("quantity"+y+"").value;
					if(x=="limit"){
						document.getElementById("divqty1"+y+"").className = "col-md-6";
						document.getElementById("divqty2"+y+"").style.display = "block";
					} else {
						document.getElementById("divqty1"+y+"").className = "col-md-12";
						document.getElementById("divqty2"+y+"").style.display = "none";
					}
				}
				
				var counter = 0;
				
                $('a#add_field').click(function(){
                    counter += 1;
					var tambah_field = '';
					tambah_field += '<div class="row" id="field_'+counter+'">';
					tambah_field += '<hr style="border: solid 1px grey; margin-top: auto; opacity: 0.4;"></hr>';
					tambah_field += '<div class="col-md-3"><input class="form-control" id="field_' + counter + '" name="nama_tiket[]' + '" type="text" placeholder="Nama Tiket" /><br /></div>';
                    tambah_field += '<div class="col-md-4"><div class="row"><div class="col-md-12" id="divqty1'+counter+'"><select name="jenisqty[]" required class="form-control" onchange="changeQty2('+counter+')" id="quantity'+counter+'"><option value="">-Qty-</option><option value="open">Open</option><option value="limit">Limit</option></select></div><div class="col-md-6" id="divqty2'+counter+'" style="display:none" ><input class="form-control" name="qty[]" id="qty" placeholder="Qty Seat"></div></div><br /></div>';
					tambah_field += '<div class="col-md-3"><input class="form-control" id="field_' + counter + '" name="harga[]' + '" type="text" placeholder="Harga Tiket" /><br /></div>'
					tambah_field += '<div class="col-md-2" style="text-align: center;">';
						tambah_field += '<label for="exampleInputEmail1">&nbsp;</label>';
						tambah_field += '<a onclick="delete_field('+counter+')" href="javascript:void(0)">';
						tambah_field += '<button type="button" class="btn btn-danger">';
							tambah_field += '<i class="glyphicon glyphicon-minus"></i>';
						tambah_field += '</button>';
						tambah_field += '</a>';
					tambah_field += '</div>';
					tambah_field += '</div><br/>';
					$('#tambah_field').append(tambah_field);
					
                });
				
				function add_field2(){
                    counter2 += 1;
					var divtiket='';
						divtiket += '<div id="tiket_'+counter2+'">';
						divtiket += '<div class="form-group col-md-3" >';
							divtiket += '<input type="text" placeholder="Nama Tiket"	name="edit_nama_tiket[]" id="edit_nama_tiket'+counter2+'" class="form-control" required ">';
							divtiket += '<input type="hidden" name="edit_id_jenis_tiket[]" id="edit_id_jenis_tiket'+counter2+'" class="form-control" required">';
						divtiket += '</div>';
						divtiket += '<div class="form-group col-md-4" >';
							divtiket += '<div class="row">';
								divtiket += '<div class="col-md-12" id="edit_divqty1'+counter2+'">';
									divtiket += '<select class="form-control" name="edit_jenisqty[]" id="edit_quantity'+counter2+'" onchange="editchangeQty('+counter2+')" required>';
										divtiket += '<option value="">-Qty-</option>';
										divtiket += '<option value="open">Open</option>';
										divtiket += '<option value="limit">Limit</option>';
									divtiket += '</select>';
								divtiket += '</div>';
								divtiket += '<div class="col-md-6" id="edit_divqty2'+counter2+'" style="display:none">';
									divtiket += '<input type="number" class="form-control" name="edit_qty[]" id="edit_qty'+counter2+'" placeholder="Qty Seat"">';
								divtiket += '</div>';
							divtiket += '</div>';
						divtiket += '</div>';
						divtiket += '<div class="form-group col-md-3" >';
							divtiket += '<input type="number" placeholder="Harga Tiket"	name="edit_harga[]" id="edit_harga'+counter2+'" class="form-control" required ">';
						divtiket += '</div>';
						divtiket += '<div class="col-md-2" style="text-align: center;">';
							divtiket += '<label for="exampleInputEmail1">&nbsp;</label>';
							divtiket += '<a onclick="delete_field2('+counter2+')" href="javascript:void(0)">';
							divtiket += '<button type="button" class="btn btn-danger">';
								divtiket += '<i class="glyphicon glyphicon-minus"></i>';
							divtiket += '</button>';
							divtiket += '</a>';
						divtiket += '</div>';
						divtiket += '</div>';	
						divtiket += '</div>';	
						$('#edit_jenis_event').append(divtiket);
					
                }
				
				function delete_field(z){
					document.getElementById('field_'+z+'').remove();
				}
				
				function delete_field2(z){
					alert(document.getElementById('edit_nama_tiket'+z+'').value);
					document.getElementById('edit_nama_tiket'+z+'').value = "DELETE";
					alert(document.getElementById('edit_nama_tiket'+z+'').value);
					document.getElementById('edit_quantity'+z+'').value = "open";
					alert(document.getElementById('edit_nama_tiket'+z+'').value);
					document.getElementById('edit_qty'+z+'').value = 0;
					alert(document.getElementById('edit_nama_tiket'+z+'').value);
					document.getElementById('edit_harga'+z+'').value = 0;
					alert("berhasil");
					
					document.getElementById('tiket_'+z+'').style.display = "none";
				}
				
				function editchangeQty(y){
					var x = document.getElementById("edit_quantity"+y+"").value;
					if(x=="limit"){
						document.getElementById("edit_divqty1"+y+"").className = "col-md-6";
						document.getElementById("edit_divqty2"+y+"").style.display = "block";
					} else {
						document.getElementById("edit_divqty1"+y+"").className = "col-md-12";
						document.getElementById("edit_divqty2"+y+"").style.display = "none";
					}
				}
	  </script>



            
                


	 


