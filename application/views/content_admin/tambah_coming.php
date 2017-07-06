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
                                            <label for="exampleInputEmail1">Penulis Event   :</label>
                                            <input type="text" required name="posted_by" class="form-control" id="exampleInputEmail1" value="<?php 
                                                if (isset($dataComing['posted_by']))
                                                {
                                                    echo htmlspecialchars($dataComing['posted_by']);
                                                }
                                            ?>"> 
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Kategori Event  :</label><br>
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
                                            </select></br>
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Tipe Event  :</label><br>
                                            <select name="tipe" required class="form-control" id="kategori">
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
                                            </select></br>
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
                                                <input type="hidden" id="tgl_mulai" name='tgl_mulai' value="<?php echo date('Y-m-d') ?>"
                                                    value="<?php
                                                        if (isset($tgl_mulai))
                                                        {
                                                            echo $tgl_mulai;
                                                        }
                                                        ?>"
                                                />
                                                <input type="hidden"  id="tgl_selesai" name='tgl_selesai' value="<?php echo date('Y-m-d') ?>"
                                                    value="<?php
                                                        if(isset($tgl_selesai))
                                                        {
                                                            echo $tgl_selesai;
                                                        }
                                                    ?>"/>
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
                                                                    if ($key==$dataComing['jam_event']){
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
                                                                    if ($key==$dataComing['jam_event']){
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
											
											<textarea required id="editor_wow" name="deskripsi_coming" rows="10" cols="80">
												<?php 
                                                    if (isset($dataComing['deskripsi']))
                                                    {
                                                        echo htmlspecialchars($dataComing['deskripsi']);
                                                    }
                                                ?>
											</textarea>                                    
											
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputFile">Unggah File Gambar :</label>
                                            <div class="input-group">
                                                <input class="form" type="file" name="filefoto" required >
                                            </div>
											<b><p style="color:red;">File diizinkan: jpg, jpeg, dan png (Max 2Mb)</p></b>
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