<aside class="right-side">
                <!-- Content Header (Page header) -->
                <section class="content-header" style="margin-top: 45px;">
                    <h1>
                       Edit Event
                    </h1>
					<div id="instafeed"></div>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i>Kelola Event</a></li>
                        <li class="active">Edit Event</li>
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
                                <form role="form" enctype="multipart/form-data" action="<?php echo site_url('KelolaComing/edit_comming_soon/'.$idComing);?>" method="POST">
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
                                            <label for="exampleInputEmail1">Judul Event :</label>
                                            <input type="text" required name="nama_coming" class="form-control" id="exampleInputEmail1" value="<?php echo htmlspecialchars($dataComing['nama_coming']); ?>">
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Jenis Event   :</label>
                                            <div class="radio">
                                                <label>
                                                    <input style="opacity: 1;" type="radio" onclick="gratis()"
                                                        <?php 
                                                            if ($dataComing['jenis_event'] == 1)
                                                            {
                                                                echo 'checked';
                                                            } 
                                                        ?> name="jenis_event" value=1 required>
                                                     Gratis
                                                </label>
                                                <label>
                                                    <input style="opacity: 1;" type="radio" onclick="bayar()"
                                                        <?php 
                                                            if ($dataComing['jenis_event'] == 0)
                                                            {
                                                                echo 'checked';
                                                            } 
                                                        ?> name="jenis_event" value=0 required>
                                                     Berbayar
                                                </label>
                                            </div>
                                        </div>
										
										<div class="form-group" id="jenis_event" style="display:none">
                                            
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <label for="exampleInputEmail1">Nama Tiket :</label>

                                                    <?php
                                                        foreach ($tiket as $harga_tiket) 
                                                        {
                                                            $id_tiket[] = $harga_tiket['id_jenis_tiket'];
                                                            $nama_tiket[] = $harga_tiket['nama_tiket'];
                                                            $harga_tiket_event[] = $harga_tiket['harga'];
                                                            $seat[] = $harga_tiket['seat'];
                                                            $id_coming = $harga_tiket['id_event'];
                                                            $status[] = $harga_tiket['status'];
                                                        }

                                                        foreach ($nama_tiket as $nama) 
                                                        { ?>
                                                            <input type="text" name="nama_tiket[]" class="form-control" id="exampleInputEmail1" value="<?php 
                                                                if (isset($nama_tiket))
                                                                {
                                                                    echo htmlspecialchars($nama);
                                                                }
                                                            ?>"><br>
                                                <?php   }

                                                    ?>
                                                </div>

                                                <?php
                                                    foreach ($id_tiket as $tiket) 
                                                    { ?>
                                                        <input type="hidden" name="id_jenis_tiket[]" value="<?php echo $tiket; ?>">
                                              <?php }
                                                ?>

                                                <div class="col-md-4">
                                                    <label for="exampleInputEmail1">Quantity :</label>
                                                    <?php
                                                        $counter = 0;
                                                        foreach ($seat as $jumlah_seat) 
                                                        { ?>
                                                            <div class="row">
                                                                <div class="col-md-6" id="divqty_<?php echo $counter; ?>">
                                                                    <select name="jenisqty[]" class="form-control" onchange="changeQty(<?php echo $counter; ?>)" id="quantity_<?php echo $counter; ?>">  
                                                                        <option value="">--Qty--</option>
                                                                  <?php if ($jumlah_seat == NULL)
                                                                        {
                                                                            echo '<option value="open" selected>Open</option>';
                                                                            echo '<option value="limit">Limit</option>';
                                                                        }
                                                                        elseif ($jumlah_seat != NULL)
                                                                        {
                                                                            echo '<option value="open">Open</option>';
                                                                            echo '<option value="limit" selected>Limit</option>';
                                                                        }
                                                                    ?>
                                                                    </select>
                                                                    <br>
                                                                </div>

                                                                <?php 
                                                                    if ($jumlah_seat == NULL)
                                                                    { ?>
                                                                        <div class="col-md-6" id="divqty2_<?php echo $counter; ?>" style="display:none" >
                                                                            <input type="number" class="form-control" name="qty[]" id="qty">
                                                                        </div>
                                                            <?php   }
                                                                    else
                                                                    { ?>
                                                                        <div class="col-md-6" id="divqty2_<?php echo $counter; ?>" style="display:block" >
                                                                            <input type="number" class="form-control" name="qty[]" id="qty" value="<?php echo $jumlah_seat; ?>">
                                                                        </div>
                                                            <?php   }?>
                                                                
                                                            </div>
                                                        <?php $counter = $counter + 1;
                                                        } ?>
                                                </div>

                                                <div class="col-md-3">
                                                    <label for="exampleInputEmail1">Harga :</label>
                                                    <?php foreach ($harga_tiket_event as $harganya) 
                                                        { ?>
                                                            <input type="text" name="harga[]" class="form-control" id="exampleInputEmail1" value="<?php 
                                                                if (isset($harganya))
                                                                {
                                                                    echo $harganya;
                                                                }
                                                            ?>"><br>
                                                <?php   }

                                                    ?>
                                                    
                                                </div>
                                                <div class="col-md-1" style="text-align: center;">
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
                                                <div id="container" class="col-md-4">
                                                    
                                                </div>
                                                <div id="container2" class="col-md-4">
                                                    
                                                </div>
                                                <div id="container3" class="col-md-3">
                                                    
                                                </div>
                                            </div> 
                                        </div>
										
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Kategori Event :</label><br>
                                            
                                            <select name="kategori" required class="form-control" id="kategori">
                                                <option value="">--Pilih Kategori Event--</option>
                                                <?php
                                                    foreach ($kategori_coming as $key=>$kategori) 
                                                    {
                                                        if ($key==$dataComing['kategori_coming']){
                                                            echo '<option value="'.$key.'" selected>'.$kategori.'</option>';
                                                        }
                                                        else
                                                        {
                                                            echo '<option value="'.$key.'">'.$kategori.'</option>';   
                                                        }
                                                    }
                                                ?>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Tipe Event  :</label><br>
                                            <select name="tipe" required class="form-control" id="tipe">
                                                <option value="">--Pilih Tipe Event--</option>
                                                <?php
                                                    foreach ($tipe_event as $key=>$tipe) 
                                                    {
                                                        if ($key==$dataComing['tipe_event']){
                                                            echo '<option value="'.$key.'" selected>'.$tipe.'</option>';
                                                        }
                                                        else
                                                        {
                                                            echo '<option value="'.$key.'">'.$tipe.'</option>';   
                                                        }
                                                    }
                                                ?>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Penulis Event :</label>
                                            <input type="text" required name="posted_by" class="form-control" id="exampleInputEmail1" value="<?php echo htmlspecialchars($dataComing['posted_by']); ?>">
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
                                                <input type="text" required name="tgl_event" class="form-control pull-right" id="reservation2" value="<?php echo $dataComing['tgl_mulai'] ."  s/d  ". $dataComing['tgl_selesai'];?>"/>
                                                <input type="hidden" id="tgl_mulai" name='tgl_mulai' value="<?php echo $dataComing['tgl_mulai'];?>"/>
                                                <input type="hidden" id="tgl_selesai" name='tgl_selesai' value="<?php echo $dataComing['tgl_selesai'];?>"/>
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
                                                                    if ($key==$dataComing['jam_mulai']){
                                                                        echo '<option value="'.$key.'" selected>'.$jam.'</option>';
                                                                    }
                                                                    else
                                                                    {
                                                                        echo '<option value="'.$key.'">'.$jam.'</option>';   
                                                                    }
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
                                                                    if ($key==$dataComing['jam_selesai']){
                                                                        echo '<option value="'.$key.'" selected>'.$jam.'</option>';
                                                                    }
                                                                    else
                                                                    {
                                                                        echo '<option value="'.$key.'">'.$jam.'</option>';   
                                                                    }
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
											<textarea required name="deskripsi_coming" rows="10" cols="80"><?php 
                                                    if (isset($dataComing['deskripsi_coming']))
                                                    {
                                                        echo htmlspecialchars($dataComing['deskripsi_coming']);
                                                    }
                                                ?></textarea>                                    
                                        </div>

                                        <div class='box-header'>
                                            <label>Poster Event :</label>
                                        </div>

                                        <div class='box-header'>
                                            <?php
                                                if (empty($dataComing['path_gambar']))
                                                {
                                                    echo '<img style="height: 250px; padding: 4px; max-width:250px; border: solid 1px black" src="'.base_url('asset/img/empty.png').'"/>';
                                                }
                                                else
                                                {
                                                    echo '<img style="height: 250px; padding: 4px; max-width:250px; border: solid 1px black" src="'.base_url('asset/upload_img_coming/'.$dataComing['path_gambar']).'"/>';
                                                }
                                            ?>   
                                        </div>
                                        
                                        <label class='box-header' style="color: blue;" id="ganti">Ganti Gambar ?</label><br>
                                        <div class="ganti_gambar">
                                            <input class="form" type="file" name="filefoto" >
											<b><p style="color:red;">File diizinkan: jpg, jpeg, dan png (Max 2Mb)</p></b>
                                        </div>
                                        <br>
										
										
										<div class="form-group">
											<label>Kota Lokasi :</label>
											<select name="kota" required class="form-control" id="kota" >
												<option value="">--Pilih Kota Lokasi--</option>
												<?php
													foreach ($kotaLokasi as $key=>$kota) 
													{
														if($dataComing['id_lokasi']==$key){
															echo '<option value="'.$key.'" selected="selected">'.$kota['lokasi_nama'].'</option>';   
														} else{
															echo '<option value="'.$key.'">'.$kota['lokasi_nama'].'</option>';   
														}
														
													}
												?>
											</select>
                                        </div>
										
										
										<div class="form-group">
                                            <label for="exampleInputEmail1">Alamat  :</label>
                                            <input type="text" required name="alamat" class="form-control" id="exampleInputEmail1" value="<?php 
                                                if (isset($dataComing['alamat']))
                                                {
                                                    echo htmlspecialchars($dataComing['alamat']);
                                                }
                                            ?>"> 
                                        </div>
										
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Apakah anda ingin menggunakan fasilitas pendaftaran kami ?</label>
                                            <div class="radio">
                                                <label>
                                                    <input style="opacity: 1;" type="radio" 
                                                        <?php 
                                                            if ($dataComing['pendaftaran'] == 1)
                                                            {
                                                                echo 'checked';
                                                            } 
                                                        ?> name="pendaftaran" value=1 required>
                                                     Ya
                                                </label>
                                                <label>
                                                    <input style="opacity: 1;" type="radio" 
                                                        <?php 
                                                            if ($dataComing['pendaftaran'] == 0)
                                                            {
                                                                echo 'checked';
                                                            } 
                                                        ?> name="pendaftaran" value=0 required>
                                                     Tidak
                                                </label>
                                            </div>
                                        </div>

                                    </div><!-- /.box-body -->
                                    <input type="hidden" name="id_coming" value="<?php echo $idComing; ?>">
                                    <div class="box-footer">
                                        <button type="submit" name="save" value="1" class="btn btn-primary"><i class="glyphicon glyphicon-floppy-saved"></i> Simpan</button>
                                       <a href="<?php echo site_url('KelolaComing/');?>"><button type="button" name="submit" class="btn btn-danger">Batal</button></a>
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

                    //Edit Event Date range picker
                    $('#reservation2').daterangepicker({format: 'YYYY-MM-DD',
                                                                startDate: '<?php echo $dataComing['tgl_mulai'];?>',
                                                                endDate: '<?php echo $dataComing['tgl_selesai'];?>'},function(start, end) {
                        $('#tgl_mulai').val(start.format('YYYY-MM-DD'));
                        $('#tgl_selesai').val(end.format('YYYY-MM-DD'));
                    });
                });
				
				function limitedSeat(){
					document.getElementById("limitedseat").style.display = "block";
				}
				
				function openSeat(){
					document.getElementById("limitedseat").style.display = "none";
				}
				
				function bayar(){
					document.getElementById("jenis_event").style.display = "block";
				}
				
				function gratis(){
					document.getElementById("jenis_event").style.display = "none";
				}

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
                        '<div class="row"><div class="col-md-12" id="divqty1'+counter2+'"><select name="jenisqty[]" class="form-control" onchange="changeQty2('+counter2+')" id="quantity'+counter2+'"><option value="">--Qty--</option><option value="open">Open</option><option value="limit">Limit</option></select></div><div class="col-md-6" id="divqty2'+counter2+'" style="display:none" ><input type="number" class="form-control" name="qty[]" id="qty"></div></div><br />'
                    );
                });

                var counter3 = 0;
                $('a#add_field').click(function(){
                    counter += 1;
                    $('#container3').append(
                        '<input class="form-control" id="field_' + counter3 + '" name="harga[]' + '" type="text" /><br />'
                    );
                });

                function changeQty(counter4){
                    var x = document.getElementById("quantity_"+ counter4).value;
                    if(x=="limit"){
                        document.getElementById("divqty_"+ counter4).className = "col-md-6";
                        document.getElementById("divqty2_"+ counter4).style.display = "block";
                    } else {
                        document.getElementById("divqty_"+ counter4).className = "col-md-12";
                        document.getElementById("divqty2_"+ counter4).style.display = "none";
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

            


        

                
           