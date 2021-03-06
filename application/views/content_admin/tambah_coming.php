<aside class="right-side">
                <!-- Content Header (Page header) -->
                <section class="content-header" style="margin-top: 45px;">
                    <h1>
                       Tambah Event
                    </h1>
					<div id="instafeed"></div>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i>Kelola Event</a></li>
                        <li class="active">Tambah Event</li>
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
								
                                <form role="form" enctype="multipart/form-data" action="<?php echo site_url('KelolaComing/tambah_coming_check/');?>" method="POST">
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
                                            <label for="exampleInputEmail1">Judul Event   :</label>
                                            <input type="text" required name="judul_coming" class="form-control" id="exampleInputEmail1" value="<?php 
                                                if (isset($dataComing['judul_coming']))
                                                {
                                                    echo htmlspecialchars($dataComing['judul_coming']);
                                                }
                                            ?>"> 
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Jenis Event   :</label>
                                            <div class="radio">
                                                <label>
                                                    <input style="opacity: 1;" type="radio" name="jenis_event" value=1 required onclick="gratis()">
                                                     Gratis
                                                </label>
                                                <label>
                                                    <input style="opacity: 1;" type="radio" name="jenis_event" value=0 required onclick="bayar()">
                                                     Berbayar
                                                </label>
                                            </div>
                                        </div>
										
										<div class="form-group" id="jenis_event" style="display:none">
                                            
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <label for="exampleInputEmail1">Nama Tiket :</label>
                                                    <input type="text" name="nama_tiket[]" class="form-control" id="exampleInputEmail1" value="<?php 
                                                        if (isset($dataComing['harga']))
                                                        {
                                                            echo htmlspecialchars($dataComing['harga']);
                                                        }
                                                    ?>">
                                                </div>
                                                <div class="col-md-4">
													
                                                    <label for="exampleInputEmail1">Quantity :</label>
													<div class="row">
														<div class="col-md-12" id="divqty1">
															<select name="jenisqty[]" class="form-control" onchange="changeQty()" id="quantity">  
																<option value="">-Qty-</option>
																<option value="open">Open</option>
																<option value="limit">Limit</option>
															</select>
														</div>
														<div class="col-md-6" id="divqty2" style="display:none" >
															<input type="number" class="form-control" name="qty[]" id="qty">
														</div>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <label for="exampleInputEmail1">Harga :</label>
                                                    <input type="text" name="harga[]" class="form-control" id="exampleInputEmail1" value="<?php 
                                                        if (isset($dataComing['harga']))
                                                        {
                                                            echo htmlspecialchars($dataComing['harga']);
                                                        }
                                                    ?>">
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
                                            <div class="row">
                                                <div id="container" class="col-md-3">
                                                    
                                                </div>
                                                <div id="container2" class="col-md-4">
													
                                                </div>
                                                <div id="container3" class="col-md-3">
                                                    
                                                </div>
                                            </div> 
                                        </div>

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

                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Penulis Event   :</label>
                                            <input type="text" required name="posted_by" class="form-control" id="exampleInputEmail1" value="<?php 
                                                if (isset($dataComing['posted_by']))
                                                {
                                                    echo htmlspecialchars($dataComing['posted_by']);
                                                }
                                            ?>"> 
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Institusi Penyelenggara Event   :</label>
                                            <input type="text" required name="institusi" class="form-control" id="exampleInputEmail1" value="<?php 
                                                if (isset($dataComing['posted_by']))
                                                {
                                                    echo htmlspecialchars($dataComing['institusi']);
                                                }
                                            ?>"> 
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputEmail1">No. Telepon   :</label>
                                            <input type="text" required name="telepon" class="form-control" id="exampleInputEmail1" value="<?php 
                                                if (isset($dataComing['posted_by']))
                                                {
                                                    echo htmlspecialchars($dataComing['telepon']);
                                                }
                                            ?>"> 
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputEmail1">E-mail   :</label>
                                            <input type="text" required name="email" class="form-control" id="exampleInputEmail1" value="<?php 
                                                if (isset($dataComing['posted_by']))
                                                {
                                                    echo htmlspecialchars($dataComing['email']);
                                                }
                                            ?>"> 
                                        </div>


                                        <div class="form-group">
                                            <!-- Date range -->
                                            <label>Tanggal Event :</label>
                                            <div class="input-group">
                                                <div class="input-group-addon">
                                                    <i class="glyphicon glyphicon-calendar"></i>
                                                </div>
                                                <input type="text" required name="tgl_event" class="form-control pull-right" id="reservation"
                                                    value="<?php
                                                        if (isset($tgl_event))
                                                        {
                                                            echo $tgl_event;
                                                        }
                                                    ?>"/>
                                                <input type="hidden" id="tgl_mulai" name='tgl_mulai' value="<?php echo date('Y-m-d') ?>" />
                                                  
                                                <input type="hidden"  id="tgl_selesai" name='tgl_selesai' value="<?php echo date('Y-m-d') ?>" />
                                                    
                                            </div><!-- /.input group -->
                                        </div>

                                        <div class="form-group">
                                            <div class='box-header'>
                                                <label>Jam Event Dimulai & Berakhir:</label>
                                                <div class="col-md-12" style="margin-left:-30px;">
                                                    <div class="col-md-4">
                                                        <select name="jam_mulai" required class="form-control" id="jam_mulai" style="width: 186px;">
                                                            <option value="">--Pilih Waktu Dimulai--</option>
                                                            <?php
                                                                foreach ($jam_event as $key=>$jam) 
                                                                {
                                                                    echo '<option value="'.$key.'">'.$jam.'</option>';   
                                                                }
                                                            ?>
                                                        </select>
                                                    </div>

                                                    <div class="col-md-4">
                                                        <select name="jam_selesai" required class="form-control" id="jam_selesai" style="width: auto;">
                                                            <option value="">--Pilih Waktu Berakhir--</option>
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

										<div class="form-group">
											<div class='box-header'>
												 <label>Deskripsi Event :</label>
											</div>
											
											<textarea required name="deskripsi_coming" rows="10" cols="80"><?php if (isset($dataComing['deskripsi']))
                                                    {
                                                        echo htmlspecialchars($dataComing['deskripsi']);
                                                    }
                                                ?></textarea>
											                                    
											
                                        </div>
										
                                        <!--
										<div class="form-group">
                                            <label for="exampleInputEmail1">Seat   :</label>
                                            <div class="radio">
                                                <label>
                                                    <input style="opacity: 1;" type="radio" name="seat" value=1 required onclick="limitedSeat()">
                                                     Limited Seat
                                                </label>
                                                <label>
                                                    <input style="opacity: 1;" type="radio" name="seat" value=0 required onclick="openSeat()">
                                                     Open Seat
                                                </label>
                                            </div>
                                        </div> -->
										
										<div class="form-group" id="limitedseat" style="display:none">
                                            <label for="exampleInputEmail1">Jumlah Seat  :</label>
                                            <input type="text" 	name="jumlah_seat" class="form-control" id="exampleInputEmail1" value="<?php 
                                                if (isset($dataComing['seat']))
                                                {
                                                    echo htmlspecialchars($dataComing['seat']);
                                                }
                                            ?>"> 
                                        </div>
										<div class="form-group">
											<label>Kota Lokasi :</label>
											<select name="kota" required class="form-control" id="kota" >
												<option value="">--Pilih Kota Lokasi--</option>
												<?php
													foreach ($kotaLokasi as $key=>$kota) 
													{
														
														echo '<option value="'.$key.'">'.$kota['lokasi_nama'].'</option>';   
														
													}
												?>
											</select>
                                        </div>
										
										<div class="form-group">
                                            <label for="exampleInputEmail1">Alamat  :</label>
                                            <input required type="text" 	name="alamat" class="form-control" id="exampleInputEmail1" value="<?php 
                                                if (isset($dataComing['alamat']))
                                                {
                                                    echo htmlspecialchars($dataComing['alamat']);
                                                }
                                            ?>"> 
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputFile">Unggah File Gambar :</label>
                                            <div class="input-group">
                                                <input class="form" type="file" name="filefoto" required >
                                            </div>
                                            <b><p style="color:red;">File diizinkan: jpg, jpeg, dan png (Max 2Mb)</p></b>
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Apakah anda ingin menggunakan fasilitas pendaftaran kami ?</label>
                                            <div class="radio">
                                                <label>
                                                    <input style="opacity: 1;" type="radio" name="pendaftaran" value=1 required>
                                                     Ya
                                                </label>
                                                <label>
                                                    <input style="opacity: 1;" type="radio" name="pendaftaran" value=0 required>
                                                     Tidak
                                                </label>
                                            </div>
                                        </div>
                                    </div><!-- /.box-body -->

                                    <div class="box-footer">
                                        <button type="submit" name="submit" value="1" class="btn btn-primary"><i class="glyphicon glyphicon-floppy-saved"></i> Simpan</button>
                                    </div>
                                </form>
                            </div><!-- /.box -->
                        </div><!--/.col (left) -->

                        <div class="col-md-2"></div>
                    </div>   <!-- /.row -->
                </section><!-- /.content -->
            </aside><!-- /.right-side -->

            <!-- daterangepicker -->
            <script src="<?php echo base_url('asset/js/daterangepicker/daterangepicker.js?ver=b1.0'); ?>" type="text/javascript"></script>

            <script>
                $(document).ready( function () {

                //Date range picker tambah event
                    $('#reservation').daterangepicker({format: 'YYYY-MM-DD'},function(start, end) {
                        $('#tgl_mulai').val(start.format('YYYY-MM-DD'));
                        $('#tgl_selesai').val(end.format('YYYY-MM-DD'));
                    });
                });

                var counter = 0;
                $('a#add_field').click(function(){
                    counter += 1;
                    $('#container').append(
                        '<input class="form-control" id="field_' + counter + '" name="nama_tiket[]' + '" type="text" /><br />'
                    );
                });

                var counter2 = 0;
                $('a#add_field').click(function(){
                    counter2 += 1;
                    $('#container2').append(
						'<div class="row"><div class="col-md-12" id="divqty1'+counter2+'"><select name="jenisqty[]" class="form-control" onchange="changeQty2('+counter2+')" id="quantity'+counter2+'"><option value="">-Qty-</option><option value="open">Open</option><option value="limit">Limit</option></select></div><div class="col-md-6" id="divqty2'+counter2+'" style="display:none" ><input type="number" class="form-control" name="qty[]" id="qty"></div></div><br />'
                    );
                });

                var counter3 = 0;
                $('a#add_field').click(function(){
                    counter3 += 1;
                    $('#container3').append(
                        '<input class="form-control" id="field_' + counter3 + '" name="harga[]' + '" type="text" /><br />'
                    );
                });
				
				function limitedSeat(){
					document.getElementById("limitedseat").style.display = "block";
				}
				
				function openSeat(){
					document.getElementById("limitedseat").style.display = "none";
				}
				
				function bayar(){
					document.getElementById("jenis_event").style.display = "block";
                    document.getElementById("add_field").style.display = "block";
				}
				
				function gratis(){
					document.getElementById("jenis_event").style.display = "none";
                    document.getElementById("add_field").style.display = "none";
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
            </script>