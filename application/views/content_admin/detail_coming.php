<aside class="right-side">
                <!-- Content Header (Page header) -->
                <section class="content-header" style="margin-top: 45px;">
                    <h1>
                       Detail Coming Soon
                    </h1>
                    <ol class="breadcrumb">
                        <li><i class="fa fa-dashboard"></i>Youth Coming Soon</li>
                        <li class="active">Kelola Coming Soon</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <!-- left column -->
                        <div>
                            <div class="col-md-1">
                            </div><!--/.col (left) -->

                            <div class="col-md-10">
                                <!-- general form elements -->
                                <div class="box box-primary">
                                    <!--Mulai Tampilkan Data Table-->
                                    <div class="box-body" style="align-content: center; min-height: 450px;">
                                        <div style="padding-bottom: 10px">
                                            <div class="col-sm-12">
                                               <H3 style="text-align: center;"><?php echo $id_coming->nama_coming;?></H3>
                                               <hr color="red">
                                            </div>
                                        </div>
                                            <!--Gambar Produk-->
                                            <div class="col-sm-4" style="padding-top: 20px; text-align: center;">
                                                <div style="height:250px; width: 250px">
                                                    <img style="border: solid currentColor; height:100%" src="<?php echo base_url('asset/upload_img_coming/'.$id_coming->path_gambar); ?>">
                                                </div>
                                            </div>

                                            <!--Detail Produk-->
                                            <div class="col-sm-8" style="padding-top: 20px;">
                                                <div >
                                                    <div style="padding: 10px">
                                                        <table class="table">
                                                            
                                                            <tr>
                                                                <td style="width:25%;"><label>Deksripsi Produk</label></td>
                                                                <td style="width:1%;"><label>:</label></td>
                                                                <td><label> <?php echo $id_coming->deskripsi_coming;?> </label></td>
                                                            </tr>
                                                        </table>
                                                    </div>
                                                </div>    

                                            </div>
                                            <div style="padding-left: 330px; padding-right: 20px; text-align: justify;">
                                                <p></p>
                                            </div>                                  
                                    </div><!-- /.box-body -->
                                </div><!-- /.box -->
                            </div><!--/.col (left) -->
                            <div class="col-md-4" style="padding-left: 155px; position: absolute; margin-top: 390px;">
                                <?php if($id_coming->status==1){?>
                                    <!-- Tombol kembali -->
									<a href="<?php echo site_url('KelolaComing');?>"><button class="btn btn-warning btn-sm"><i class="glyphicon glyphicon-arrow-left" ></i> Kembali</button></a>
                                    <!-- Tombol Edit -->
                                    <a href="<?php echo site_url('KelolaComing/edit_comming_soon/'.$id_coming->id_coming);?>"><button id="edit-button-coming" type="submit" class="btn btn-info btn-sm"><i class="glyphicon glyphicon-pencil" ></i> Edit</button></a>
									<!-- Tombol Hapus -->
									<a href="<?php echo site_url('KelolaComing/delete_detail_coming/'.$id_coming->id_coming);?>"><button class="btn btn-danger btn-sm"><i class="glyphicon glyphicon-trash" ></i> Hapus</button></a>
                            </div>
                                <?php } else {?>
                            <div class="col-md-10" style="position: absolute; margin-left: -47px;">    
                                    <!-- Tombol kembali -->
                                    <a href="<?php echo site_url('KelolaComing/validasi_Coming');?>"><button class="btn btn-warning btn-sm"><i class="glyphicon glyphicon-arrow-left" ></i> Kembali</button></a>
                                    <!-- Tombol Edit -->
                                    <a href="<?php echo site_url('KelolaComing/edit_comming_soon/'.$id_coming->id_coming);?>"><button id="edit-button-coming" type="submit" class="btn btn-info btn-sm"><i class="glyphicon glyphicon-pencil" ></i> Edit</button></a>
                                    <!-- Tombol Setuju -->
                                    <a href="<?php echo site_url('KelolaComing/setuju_detail_coming/'.$id_coming->id_coming);?>"><button id="success-button-coming" type="submit" class="btn btn-success btn-sm"><i class="glyphicon glyphicon-ok" ></i> Setuju</button></a>
                                    <!-- Tombol Hapus -->
                                    <a href="<?php echo site_url('KelolaComing/tolak_detail_coming/'.$id_coming->id_coming);?>"><button  id="delete-button-coming" type="submit" class="btn btn-danger btn-sm"><i class="glyphicon glyphicon-remove" ></i> Tolak</button>
                            </div>
                                <?php }?>
                            
                            <div class="col-md-1">
                            </div><!--/.col (left) -->
                        </div>
                    </div>   <!-- /.row -->
                </section><!-- /.content -->
            </aside><!-- /.right-side -->