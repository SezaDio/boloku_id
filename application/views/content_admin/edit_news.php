<aside class="right-side">
                <!-- Content Header (Page header) -->
                <section class="content-header" style="margin-top: 45px;">
                    <h1>
                       Edit News
                    </h1>
					<div id="instafeed"></div>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i>Kelola News</a></li>
                        <li class="active">Edit News</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <!-- left column -->
                        
                        <div class="col-md-12">
                            <!-- general form elements -->
                            <div class="box box-primary">
                                
                                <!-- form start -->
                                <form role="form" enctype="multipart/form-data" action="<?php echo site_url('KelolaNews/edit_news/'.$idNews);?>" method="POST">
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
                                            <label for="exampleInputEmail1">Kategori News :</label><br>
                                            <select name="kategori" required class="form-control" id="kategori">
                                                <option value="">--Pilih Kategori News--</option>
                                                <?php
                                                    foreach ($kategori_news as $key=>$kategori) 
                                                    {
                                                        if ($key==$dataNews['kategori_news']){
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
                                            <label for="exampleInputEmail1">Penulis :</label>
                                            <input type="text" required name="posted_by" class="form-control" id="exampleInputEmail1" value="<?php echo htmlspecialchars($dataNews['posted_by']); ?>">
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Judul News   :</label>
                                            <input type="text" required name="judul_news" class="form-control" id="exampleInputEmail1" value="<?php echo htmlspecialchars($dataNews['judul_news']); ?>"> 
                                        </div>

										<div class="form-group">
											<div class='box-header'>
												 <label>Deskripsi Wow :</label>
											</div>
											<div class='box-body pad'>
												<textarea required id="editor_wow" name="deskripsi_news" rows="10" cols="80">
													<?php 
                                                        echo htmlspecialchars($dataNews['isi_news']);
                                                    ?>
												</textarea>                                    
											</div>
                                        </div>

                                        <div class='box-header'>
                                            <label>Gambar News :</label>
                                        </div>

                                        <div class='box-header'>                
                                                <img style="height: 250px; padding: 4px; max-width:250px; border: solid 1px black" src="<?php echo base_url('asset/upload_img_news/'.$dataNews['gambar_news']); ?>"/>
                                        </div>
                                        
                                        <label class='box-header' style="color: blue;" id="ganti">Ganti Gambar ?</label><br>
                                        <div class="ganti_gambar">
                                            <input class="form" type="file" name="filefoto" >
                                            <b><p style="color:red;">File diizinkan: jpg, jpeg, dan png (Max 2Mb)</p></b>
                                        </div>
                                    </div><!-- /.box-body -->

                                    <input type="hidden" name="id_news" value="<?php echo $idNews; ?>">
                                    <input type="hidden" name="jenis_berita" value="<?php echo $jenis; ?>">
                                    <div class="box-footer">
									
                                        <button type="submit" name="save" value="1" class="btn btn-primary"><i class="glyphicon glyphicon-floppy-saved"></i> Simpan</button>
                                        <a href="<?php echo site_url('KelolaNews/');?>"><button type="button" name="submit" class="btn btn-danger">Batal</button>
									</div>
                                </form>
								<div style="margin-top:-42px;margin-left:145px">
									<?php if($dataNews['status']==2){?>
										    <!-- Tombol Setuju -->
											<a href="<?php echo site_url('KelolaNews/setuju_detail_news/'.$idNews);?>"><button id="success-button-coming" type="submit" class="btn btn-success btn-sm"><i class="glyphicon glyphicon-ok" ></i> Setuju</button></a>
											<!-- Tombol Hapus -->
											<a href="<?php echo site_url('KelolaNews/tolak_detail_news/'.$idNews);?>"><button  id="delete-button-coming" type="submit" class="btn btn-danger btn-sm"><i class="glyphicon glyphicon-remove" ></i> Tolak</button>
									<?php } ?>
								</div>
                            </div><!-- /.box -->
                        </div><!--/.col (left) -->

                        
                    </div>   <!-- /.row -->
                </section><!-- /.content -->
            </aside><!-- /.right-side -->