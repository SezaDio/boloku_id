<aside class="right-side">
                <!-- Content Header (Page header) -->
                <section class="content-header" style="margin-top: 45px;">
                    <h1>
                       Tambah Challenge Update
                    </h1>
					<div id="instafeed"></div>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i>Kelola Challenge Update</a></li>
                        <li class="active">Tambah Challenge Update</li>
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
								
                                <form role="form" enctype="multipart/form-data" action="<?php echo site_url('KelolaChallenge/tambah_challenge_check/');?>" method="POST">
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
                                            <label for="exampleInputEmail1">Judul Challange Update  :</label>
                                            <input type="text" required name="judul_challenge" class="form-control" id="exampleInputEmail1" value="<?php 
                                                    if (isset($dataChallenge['judul_challenge']))
                                                    {
                                                        echo htmlspecialchars($dataChallenge['judul_challenge']);
                                                    }
                                            ?>">
                                            
                                        </div>
										
										<div class="form-group">
											<div class='box-header'>
												 <label>Deskripsi Challenge Update :</label>
											</div>
											<div class='box-body pad'>
												<textarea required id="editor_wow" name="deskripsi" rows="10" cols="80">
													<?php 
                                                        if (isset($dataChallenge['deskripsi']))
                                                        {
                                                            echo htmlspecialchars($dataChallenge['deskripsi']);
                                                        }
                                                    ?>
												</textarea>                                    
											</div>
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