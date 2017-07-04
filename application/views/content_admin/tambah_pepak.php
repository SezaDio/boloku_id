<aside class="right-side">
                <!-- Content Header (Page header) -->
                <section class="content-header" style="margin-top: 45px;">
                    <h1>
                       Tambah Pepak
                    </h1>
					<div id="instafeed"></div>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i>Kelola Pepak</a></li>
                        <li class="active">Tambah Pepak</li>
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
								
                                <form role="form" enctype="multipart/form-data" action="<?php echo site_url('KelolaPepak/tambah_pepak_check/');?>" method="POST">
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
                                            <label for="exampleInputEmail1">Kata Jawa   :</label>
                                            <input type="text" required name="kata_jawa" class="form-control" id="exampleInputEmail1" value="<?php 
                                                    if (isset($dataPepak['jawa']))
                                                    {
                                                        echo htmlspecialchars($dataPepak['jawa']);
                                                    }
                                            ?>">
                                            
                                        </div>
										
										<div class="form-group">
                                            <label for="exampleInputEmail1">Kata Indonesia   :</label>
                                            <input type="text" required name="kata_indonesia" class="form-control" id="exampleInputEmail1" value="<?php 
                                                    if (isset($dataPepak['indonesia']))
                                                    {
                                                        echo htmlspecialchars($dataPepak['indonesia']);
                                                    }
                                            ?>">
                                            
                                        </div>
										
										<div class="form-group">
											<div class='box-header'>
												 <label>Deskripsi Kata Jawa :</label>
											</div>
											<div class='box-body pad'>
												<textarea required id="editor_wow" name="deskripsi_jawa" rows="10" cols="80">
													<?php 
                                                        if (isset($dataPepak['deskripsi_jawa']))
                                                        {
                                                            echo htmlspecialchars($dataPepak['deskripsi_jawa']);
                                                        }
                                                    ?>
												</textarea>                                    
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