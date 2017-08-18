<aside class="right-side">
                <!-- Content Header (Page header) -->
                <section class="content-header" style="margin-top: 45px;">
                    <h1>
                       Detail Event
                    </h1>
                    <ol class="breadcrumb">
                        <li><i class="fa fa-dashboard"></i>Event & News Control</li>
                        <li class="active">Kelola Event</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <!-- left column -->
                        
                            <div class="col-md-1">
                            </div><!--/.col (left) -->

                            <div class="col-md-10">
                                <!-- general form elements -->
                                <div class="box box-primary">

                                    <!--Mulai Tampilkan Data Table-->
                                    <div class="box-body" style="align-content: center;">
                                        <H3 style="text-align: center;"><label><?php echo $id_coming->nama_coming;?></label></H3>
                                        <p style="text-align: center;">Diposting oleh : <?php echo $id_coming->posted_by;?></p>
                                        <hr>

                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="box-body">
                                                    <!--Gambar Event-->
                                                    <div style="height:250px; width: 250px; text-align:center;">
                                                        <img style="border: solid currentColor; height:100%" src="<?php echo base_url('asset/upload_img_coming/'.$id_coming->path_gambar); ?>">
                                                    </div><br>
                                                    <div style="margin-left: 20px;">
                                                        <?php if($id_coming->status==1){?>
                                                            <!-- Tombol kembali -->
                                                            <a href="<?php echo site_url('KelolaComing');?>"><button class="btn btn-warning btn-sm"><i class="glyphicon glyphicon-arrow-left" ></i> Kembali</button></a>
                                                            <!-- Tombol Edit -->
                                                            <a href="<?php echo site_url('KelolaComing/edit_comming_soon/'.$id_coming->id_coming);?>"><button id="edit-button-coming" type="submit" class="btn btn-info btn-sm"><i class="glyphicon glyphicon-pencil" ></i> Edit</button></a>
                                                            <!-- Tombol Hapus -->
                                                            <a href="<?php echo site_url('KelolaComing/delete_detail_coming/'.$id_coming->id_coming);?>"><button class="btn btn-danger btn-sm"><i class="glyphicon glyphicon-trash" ></i> Hapus</button></a>
                                                    </div>
                                                    <div style="width: 300px;">
                                                        <?php } else {?>
                                                        
                                                            <!-- Tombol kembali -->
                                                            <a href="<?php echo site_url('KelolaComing/validasi_Coming');?>"><button class="btn btn-warning btn-sm"><i class="glyphicon glyphicon-arrow-left" ></i> Kembali</button></a>
                                                            <!-- Tombol Edit -->
                                                            <a href="<?php echo site_url('KelolaComing/edit_comming_soon/'.$id_coming->id_coming);?>"><button id="edit-button-coming" type="submit" class="btn btn-info btn-sm"><i class="glyphicon glyphicon-pencil" ></i> Edit</button></a>
                                                            <!-- Tombol Setuju -->
                                                            <a href="<?php echo site_url('KelolaComing/setuju_detail_coming/'.$id_coming->id_coming);?>"><button id="success-button-coming" type="submit" class="btn btn-success btn-sm"><i class="glyphicon glyphicon-ok" ></i> Setuju</button></a>
                                                            <!-- Tombol Hapus -->
                                                            <a href="<?php echo site_url('KelolaComing/tolak_detail_coming/'.$id_coming->id_coming);?>"><button  id="delete-button-coming" type="submit" class="btn btn-danger btn-sm"><i class="glyphicon glyphicon-remove" ></i> Tolak</button></a>
                                                    
                                                        <?php }?>
                                                    </div>
                                                </div>
                                            </div>

                                            <!--Detail Event-->
                                            <div class="col-sm-8" style="padding-top: 10px;">   
                                                <div class="box-group" id="accordion">

                                                    <!--Accordion for information event-->
                                                    <div class="panel box box-primary">
                                                        <div class="box-header">
                                                            <h4 class="box-title">
                                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                                                                    <label>Informasi Event</label>
                                                                </a>
                                                            </h4>
                                                        </div>
                                                        <div id="collapseOne" class="panel-collapse collapse">
                                                            <div class="box-body">
                                                                <table class="table">
                                                                    <tr>
                                                                        <td>Institusi Penyelenggara</td>
                                                                        <td>:</td>
                                                                        <td style="text-align: left;"><?php echo $id_coming->institusi;?></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="width: 200px;">Kategori Event</td>
                                                                        <td style="width: 10px;">:</td>
                                                                        <td style="text-align: left;"><?php echo $id_coming->kategori_coming;?></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Tipe Event</td>
                                                                        <td>:</td>
                                                                        <td style="text-align: left;"><?php echo $id_coming->tipe_event;?></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Jenis Event</td>
                                                                        <td>:</td>
                                                                        <td style="text-align: left;">
                                                                            <?php 
                                                                                $jenis_event=$id_coming->jenis_event;

                                                                                if ($jenis_event == 1) 
                                                                                {
                                                                                    echo "Gratis";
                                                                                }
                                                                                else
                                                                                {
                                                                                    echo "Berbayar";
                                                                                }
                                                                            ?>   
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Pendaftaran</td>
                                                                        <td>:</td>
                                                                        <td style="text-align: left;">
                                                                           <?php 
                                                                                $pendaftaran=$id_coming->pendaftaran;

                                                                                if ($pendaftaran == 1) 
                                                                                {
                                                                                    echo "Ya";
                                                                                }
                                                                                else
                                                                                {
                                                                                    echo "Tidak";
                                                                                }
                                                                            ?>
                                                                        </td>
                                                                    </tr>
																	<tr>
                                                                        <td>Seat</td>
                                                                        <td>:</td>
                                                                        <td style="text-align: left;">
                                                                           <?php 
                                                                                $seat=$id_coming->seat;

                                                                                if ($seat == 1) 
                                                                                {
                                                                                    echo "Limited Seat";
                                                                                }
                                                                                else
                                                                                {
                                                                                    echo "Open Seat";
                                                                                }
                                                                            ?>
                                                                        </td>
                                                                    </tr>
																	<?php if($id_coming->seat==1){?>
																	<tr>
                                                                        <td>Jumlah Seat</td>
                                                                        <td>:</td>
                                                                        <td style="text-align: left;"><?php echo $id_coming->jumlah_seat;?></td>
                                                                    </tr>
																	<?php } ?>
                                                                    <tr>
                                                                        <td>Contact Person</td>
                                                                        <td>:</td>
                                                                        <td style="text-align: left;"><?php echo $id_coming->telepon;?></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>E-Mail</td>
                                                                        <td>:</td>
                                                                        <td style="text-align: left;"><?php echo $id_coming->email;?></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Tanggal Event</td>
                                                                        <td>:</td>
                                                                        <td>
                                                                            <?php
                                                                                $tgl_mulai=$id_coming->tgl_mulai;
                                                                                $tgl_selesai=$id_coming->tgl_selesai;

                                                                                if ($tgl_mulai  == $tgl_selesai) 
                                                                                {
                                                                                    echo $tgl_mulai;   
                                                                                }
                                                                                else
                                                                                {
                                                                                    echo $tgl_mulai." s/d ".$tgl_selesai;
                                                                                }
                                                                            ?>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Waktu Event</td>
                                                                        <td>:</td>
                                                                        <td>
                                                                            <?php
                                                                                $jam_mulai=$id_coming->jam_mulai;
                                                                                $jam_selesai=$id_coming->jam_selesai;

                                                                                if ($jam_mulai  == $jam_selesai) 
                                                                                {
                                                                                    echo $jam_mulai;   
                                                                                }
                                                                                else
                                                                                {
                                                                                    echo $jam_mulai." s/d ".$jam_selesai;
                                                                                }
                                                                            ?>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Keterangan Event</td>
                                                                        <td>:</td>
                                                                        <td><?php echo $id_coming->deskripsi_coming;?></td>
                                                                    </tr>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!--Accordion for Press Release List-->
                                                    <div class="panel box box-danger">
                                                        <div class="box-header">
                                                            <h4 class="box-title">
                                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                                                                    <label>Daftar Press Release News</label>
                                                                </a>
                                                            </h4>
                                                        </div>
                                                        <div id="collapseTwo" class="panel-collapse collapse">
                                                            <div class="box-body">
                                                               <table class="table">

                                                                    <?php
                                                                        if(count($dataNews->result_array())>0)
                                                                        {
                                                                            foreach ($dataNews->result() as $data)
                                                                            { ?>   
                                                                                <tr>
                                                                                    <td style="width: 400px;">
                                                                                        <b><a href="#"><?php echo $data->judul_news; ?></a></b><br>
                                                                                        <?php echo "Posted By: ".$data->posted_by; ?>
                                                                                    </td>
                                                                                    <td style="text-align: center; padding-top: 13px;">
                                                                                        <!-- Tombol Edit -->
                                                                                        <a href="<?php echo site_url('KelolaNews/edit_news/'.$data->id_news);?>"><button id="edit-button-coming" type="submit" class="btn btn-warning btn-sm"><i class="glyphicon glyphicon-pencil" ></i> Edit</button></a>

                                                                                        <!-- Tombol Hapus -->
                                                                                        <button onclick="delete_news_ajax(<?php echo $data->id_news; ?>)" id="delete-button-coming" type="submit" class="btn btn-danger btn-sm" value=1><i class="glyphicon glyphicon-trash" ></i> Hapus</button>
                                                                                    </td>
                                                                                    
                                                                                </tr>
                                                                            <?php }
                                                                         }
                                                                         else
                                                                         {?>
                                                                            <tr>
                                                                                <td>Data Press Release Kosong</td>
                                                                            </tr>
                                                                         <?php } ?>
                                                               </table>
                                                            </div> 
                                                        </div>
                                                    </div>

                                                    <!--Accordion for Testimoni List-->
                                                    <div class="panel box box-success">
                                                        <div class="box-header">
                                                            <h4 class="box-title">
                                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                                                                    <label>Daftar Testimoni</label>
                                                                </a>
                                                            </h4>
                                                        </div>
                                                        <div id="collapseThree" class="panel-collapse collapse">
                                                            <div class="box-body">
                                                                <table class="table">
                                                                    <?php
                                                                        if(count($dataTestimoni)>0)
                                                                        {
                                                                            foreach ($dataTestimoni as $testimoni) 
                                                                            {?>
                                                                                <tr>
                                                                                    <td style="width: 500px; padding-top: 12px;">
                                                                                        <i class="glyphicon glyphicon-user"></i> <?php echo $testimoni['nama_member']; ?> || <i class="glyphicon glyphicon-calendar"></i> <?php echo $testimoni['tgl_posting']; ?>
                                                                                        <br><br>
                                                                                        <?php echo $testimoni['isi_testimoni']; ?>
                                                                                    </td>
                                                                                    <td>
                                                                                        <!-- Tombol Hapus -->
                                                                                        <button onclick="delete_testimoni_ajax(<?php echo $testimoni['id_testimoni']; ?>)" id="delete-button-testimoni" type="submit" class="btn btn-danger btn-sm"><i class="glyphicon glyphicon-trash" ></i> Hapus</button>
                                                                                    </td>
                                                                                </tr>
                                                                                
                                                                            <?php } 
                                                                        }
                                                                        else
                                                                        {?>
                                                                            <tr>
                                                                                <td>Data Testimoni</td>
                                                                            </tr>
                                                                        <?php } ?>
                                                                    
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        

                                    </div><!-- /.box-body -->

                                </div><!-- /.box -->
                            </div><!--/.col (left) -->
                            
                            
                            <div class="col-md-1">
                            </div><!--/.col (left) -->
                        
                    </div>   <!-- /.row -->
                </section><!-- /.content -->
            </aside><!-- /.right-side -->