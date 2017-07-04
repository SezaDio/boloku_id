<aside class="right-side">
                <!-- Content Header (Page header) -->
                <section class="content-header" style="margin-top: 45px;">
                    <h1>
                       Detail Pepak
                    </h1>
                    <ol class="breadcrumb">
                        <li><i class="fa fa-dashboard"></i>Youth Pepak</li>
                        <li class="active">Kelola Pepak</li>
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
                                               <H3 style="text-align: center;"><?php echo $id_pepak->jawa;?></H3>
                                               <hr color="red">
                                            </div>
                                        </div>
										<div style="padding-bottom: 10px">
                                            <div class="col-sm-12">
                                               <H3 style="text-align: center;"><?php echo $id_pepak->indonesia;?></H3>
                                               <hr color="red">
                                            </div>
                                        </div>
										<div style="padding-bottom: 10px">
                                            <div class="col-sm-12">
                                               <H5 style="text-align: center;"><?php echo $id_pepak->deskripsi_jawa;?></H5>
                                               <hr color="red">
                                            </div>
                                        </div>
                                        
                                                                             
                                    </div><!-- /.box-body -->
                                </div><!-- /.box -->
                            </div><!--/.col (left) -->
                            <div class="col-md-4" style="padding-left: 185px; position: absolute; margin-top: 390px;">
                                <?php if($id_pepak->status==1){?>
                                    <!-- Tombol kembali -->
									<a href="<?php echo site_url('KelolaPepak');?>"><button class="btn btn-warning btn-sm"><i class="glyphicon glyphicon-arrow-left" ></i> Kembali</button></a>

									<!-- Tombol Hapus -->
									<a href="<?php echo site_url('KelolaPepak/delete_detail_pepak/'.$id_pepak->id_pepak);?>"><button class="btn btn-danger btn-sm"><i class="glyphicon glyphicon-trash" ></i> Hapus</button></a>
                            </div>
                                <?php } else {?>
                            <div class="col-md-8" style="position: absolute; margin-left: -49px;">    
                                    <!-- Tombol kembali -->
                                    <a href="<?php echo site_url('KelolaPepak/validasi_pepak');?>"><button class="btn btn-warning btn-sm"><i class="glyphicon glyphicon-arrow-left" ></i> Kembali</button></a>
                                    <!-- Tombol Setuju -->
                                    <a href="<?php echo site_url('KelolaPepak/setuju_detail_pepak/'.$id_pepak->id_pepak);?>"><button id="success-button-pepak" type="submit" class="btn btn-success btn-sm"><i class="glyphicon glyphicon-ok" ></i> Setuju</button></a>
                                    <!-- Tombol Hapus -->
                                    <a href="<?php echo site_url('KelolaPepak/tolak_detail_pepak/'.$id_pepak->id_pepak);?>"><button  id="delete-button-pepak" type="submit" class="btn btn-danger btn-sm"><i class="glyphicon glyphicon-remove" ></i> Tolak</button>
                            </div>
                                <?php }?>
                            
                            <div class="col-md-1">
                            </div><!--/.col (left) -->
                        </div>
                    </div>   <!-- /.row -->
                </section><!-- /.content -->
            </aside><!-- /.right-side -->