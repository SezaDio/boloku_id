<aside class="right-side">
                <!-- Content Header (Page header) -->
                <section class="content-header" style="margin-top: 45px;">
                    <h1>
                       Tambah Pendaftar
                    </h1>
					<div id="instafeed"></div>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i>Kelola Pendaftar</a></li>
                        <li class="active">Tambah Pendaftar</li>
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
								
                                <form role="form" enctype="multipart/form-data" action="<?php echo site_url('KelolaPendaftar/tambah_pendaftar_check/');?>" method="POST">
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
                                            <label for="exampleInputEmail1">Nama  :</label>
                                            <input type="text" required name="nama_pendaftar" class="form-control" id="exampleInputEmail1" value="<?php 
                                                    if (isset($dataPendaftar['nama_pendaftar']))
                                                    {
                                                        echo htmlspecialchars($dataPendaftar['nama_pendaftar']);
                                                    }
                                            ?>">
                                            
                                        </div>
										
										<div class="form-group">
                                            <label for="exampleInputEmail1">Email  :</label>
                                            <input type="text" required name="email" class="form-control" id="exampleInputEmail1" value="<?php 
                                                    if (isset($dataPendaftar['email']))
                                                    {
                                                        echo htmlspecialchars($dataPendaftar['email']);
                                                    }
                                            ?>">
                                            
                                        </div>
										
										<div class="form-group">
                                            <label for="exampleInputEmail1">Telepon  :</label>
                                            <input type="text" required name="telepon" class="form-control" id="exampleInputEmail1" value="<?php 
                                                    if (isset($dataPendaftar['telepon']))
                                                    {
                                                        echo htmlspecialchars($dataPendaftar['telepon']);
                                                    }
                                            ?>">
                                            
                                        </div>
										<div class="form-group">
                                            <label for="exampleInputEmail1">Alamat  :</label>
                                            <input type="text" required name="alamat" class="form-control" id="exampleInputEmail1" value="<?php 
                                                    if (isset($dataPendaftar['alamat']))
                                                    {
                                                        echo htmlspecialchars($dataPendaftar['alamat']);
                                                    }
                                            ?>">
                                            
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