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
					                              <img alt="" class="img-responsive" src="<?php echo base_url('asset/img/author3.jpg'); ?>">
					                           </a>
					                        </div>
			                             </div>
			                             <div class="caption" style="text-align: center;">
		                                   <h5 style="font-size: 1.2em;">
		                                      <label>Seza Dio Firmansyah</label>
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
	            		<div class="col-md-9 col-sm-4 col-xs-12">
	                       <div class="item" style="border-top:solid 1px #f44a56; box-shadow: 0 1px 6px #f44a56;">
	                          <div class="latest-news-grid grid-1">

	                          	<!--Content menu riwayat event member-->
	                             <div id="dashboard-content" class="detail">
	                             	<div class="col-md-12">
	                             		<h4><strong>My Published Event</strong></h4>
	                             		<hr style="border: solid 1px #f44a56; margin-top: auto; opacity: 0.4;"></hr>
	                             	</div>
	                             	<div class="col-md-6">
	                             		<div class="col-md-2" style="text-align: center;"> 
	                             			<img alt="" src="<?php echo base_url('asset/img/small-2.jpg'); ?>">
	                             		</div>
	                                    <div style="padding-left: 50px;" class="caption">
	                                    	<a href="<?php //echo base_url('FrontControl_Event/event_click/'.$event['id_coming']); ?>"><label>Color Run With Pak Ganjar</label></a>
	                                    </div>
	                                    <ul style="padding-left: 50px;" class="post-tools">
	                                        <li title="Testimoni"> <i class="ti-thought"></i> 105 </li>
	                                        <li title="Dilihat"> <i class="glyphicon glyphicon-eye-open"></i> 105 </li>
	                                        <li title="Disukai"> <i class="glyphicon glyphicon-thumbs-up"></i> 105 </li>
	                                    </ul>
	                                    <br>
	                                    <a style="margin-left: 50px; margin-top: -25px;" href="#" class=" btn btn-xs btn-green"><i class="ti-money"></i> Berbayar</a>
	                                   	<a style="margin-top: -25px;" href="#" class=" btn btn-xs btn-dark-red">Seminar</a>
	                                   	<a style="margin-top: -25px;" href="#" class=" btn btn-xs btn-orange">Hobi</a>
	                                   	
	                                </div>
	                                <br>
	                                <div class="col-md-6" style="text-align: right;">
	                                	<!-- Tombol Edit -->
                                        <a href="<?php //echo site_url('KelolaComing/edit_comming_soon/'.$id_coming->id_coming);?>"><button id="edit-button-coming" type="submit" class="btn btn-info btn-sm"><i class="glyphicon glyphicon-pencil" ></i> Edit</button></a>
                                        <!-- Tombol Hapus -->
                                        <a  href="<?php //echo site_url('KelolaComing/delete_detail_coming/'.$id_coming->id_coming);?>"><button class="btn btn-danger btn-sm"><i class="glyphicon glyphicon-trash" ></i> Hapus</button></a>
	                                </div>
	                                <div class="col-md-12">
	                             		<hr style="border: solid 1px grey; margin-top: auto; opacity: 0.3;"></hr>
	                             	</div>
	                             </div>

	                             <!--Content menu buat event baru-->
	                             <div style="display: none;" id="event-baru-content" class="detail">
	                             	<div class="col-md-12">
	                             		<h4><strong>Buat Event Baru</strong></h4>
	                             		<hr style="border: solid 1px #f44a56; margin-top: auto; opacity: 0.4;"></hr>
	                             	</div>
	                             	<div class="col-md-12 col-sm-8 col-xs-12 nopadding" style="padding:10px;"">
					                  <div class="contact-form">
					                     <form  method="post" action="#">
					                        <div class="col-md-12 col-sm-6 col-xs-12">
					                           <div class="form-group">
					                              <input required placeholder="Nama Kegiatanmu" id="name" name="nama_event" class="form-control" required type="text">
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
				                                                    /*foreach ($kategori_coming as $key=>$kategori) 
				                                                    {
				                                                        
				                                                        echo '<option value="'.$key.'">'.$kategori.'</option>';   
				                                                        
				                                                    }*/
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
				                                                    /*foreach ($tipe_event as $key=>$tipe) 
				                                                    {
				                                                      
				                                                        echo '<option value="'.$key.'">'.$tipe.'</option>';   
				                                                    }*/
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
			                                                                /*foreach ($jam_event as $key=>$jam) 
			                                                                {
			                                                                    echo '<option value="'.$key.'">'.$jam.'</option>';   
			                                                                }*/
			                                                            ?>
			                                                        </select>
			                                                    </div>

			                                                    <div class="col-md-6">
			                                                        <select name="jam_selesai" required class="form-control" id="jam_selesai" style="width: auto;">
			                                                            <option value="">--Waktu Berakhir--</option>
			                                                            <?php /*
			                                                                foreach ($jam_event as $key=>$jam) 
			                                                                {
			                                                                    echo '<option value="'.$key.'">'.$jam.'</option>';   
			                                                                } */
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
				                                            <select name="kategori" required class="form-control" id="kategori">
				                                                <option value="">--Pilih Kota--</option>
				                                                <?php
				                                                    /*foreach ($kategori_coming as $key=>$kategori) 
				                                                    {
				                                                        
				                                                        echo '<option value="'.$key.'">'.$kategori.'</option>';   
				                                                        
				                                                    }*/
				                                                ?>
				                                            </select>
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
					                        
					                        <div class="col-md-12 col-sm-12 col-xs-12">
					                           <div class="form-group">
					                              <textarea cols="12" rows="5" placeholder="Keterangan tambahan event . . ." id="message" name="message" class="form-control" required></textarea>
					                           </div>
					                           <div class="form-group">
					                              <button class="btn btn-colored-blog pull-right" type="submit"><i class="glyphicon glyphicon-send"></i> Submit Event</button>
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
					                     <form  method="post" action="#">
					                     	<div class="row">
						                        <div style="text-align: center;" class="col-md-4 col-sm-6 col-xs-12">
						                        	<div class='box-header'>
						                        		<img style="height: 250px; padding: 4px; max-width:250px; border: solid 1px black" src="<?php echo base_url('asset/img/author3.jpg'); ?>"/>
			                                            <?php
			                                                /*if (empty($dataComing['path_gambar']))
			                                                {
			                                                    echo '<img style="height: 250px; padding: 4px; max-width:250px; border: solid 1px black" src="'.base_url('asset/img/empty.png').'"/>';
			                                                }
			                                                else
			                                                {
			                                                    echo '<img style="height: 250px; padding: 4px; max-width:250px; border: solid 1px black" src="'.base_url('asset/upload_img_coming/'.$dataComing['path_gambar']).'"/>';
			                                                }*/
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
								                              <input required id="name" name="nama_member" class="form-control" required type="text">
								                           </div>
								                        </div>
								                        <div class="col-md-6 col-sm-6 col-xs-12">
								                        	<div class="form-group">
								                        	  <label>Username :</label>
								                              <input required id="name" name="username" class="form-control" required type="text">
								                           </div>
								                        </div>
								                    </div>
								                    <div class="row">
								                        <div class="col-md-6 col-sm-6 col-xs-12">
								                        	<div class="form-group">
								                        	  <label>E-Mail :</label>
								                              <input required id="name" name="email" class="form-control" required type="text">
								                           </div>
								                        </div>
								                        <div class="col-md-6 col-sm-6 col-xs-12">
								                        	<div class="form-group">
								                        	  <label>Telepon :</label>
								                              <input required id="name" name="telepon" class="form-control" required type="text">
								                           </div>
								                        </div>
								                    </div>
								                    <div class="row">
								                        <div class="col-md-6 col-sm-6 col-xs-12">
								                        	
								                        </div>
								                        <div class="col-md-6 col-sm-6 col-xs-12">
								                        	<br>
								                        	<div class="form-group">
								                              <button class="btn btn-colored-blog pull-right" type="submit"><i class="glyphicon glyphicon-floppy-disk"></i> Simpan</button>
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
	            </div>
	        </div>
	    </div>
	  </section>

	  <script src="<?php echo base_url('asset/js/daterangepicker/daterangepicker.js?ver=b1.0'); ?>" type="text/javascript"></script>

	  <script type="text/javascript">
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
	  </script>



            
                


	 


