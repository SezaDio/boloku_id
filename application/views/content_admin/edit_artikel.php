<aside class="right-side">
                <!-- Content Header (Page header) -->
                <section class="content-header" style="margin-top: 45px;">
                    <h1>
                       Edit Artikel
                    </h1>
					<div id="instafeed"></div>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i>Kelola Artikel</a></li>
                        <li class="active">Edit Artikel</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <!-- left column -->
                        

                        <div class="col-md-8">
                            <!-- general form elements -->
                            <div class="box box-primary">
                                <div style="margin-top:10px; margin-bottom:30px">
                                    <?php if($this->session->flashdata('msg_gagal')!=''){?>
                                        <div class="alert alert-danger alert-dismissable">
                                            <i class="glyphicon glyphicon-remove"></i>
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            <?php echo $this->session->flashdata('msg_gagal');?> 
                                        </div>
                                    <?php }?>
                                </div>
                                <!-- form start -->
								
                                <form role="form" enctype="multipart/form-data" action="<?php echo site_url('KelolaArtikel/edit_artikel/'.$idArtikel);?>" method="POST">
                                    <div class="box-body">
										
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Judul Artikel :</label>
                                            <input type="text" required name="judul_artikel" class="form-control" id="exampleInputEmail1" value="<?php echo htmlspecialchars($dataArtikel['judul_artikel']); ?>">
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Penulis Artikel :</label>
                                            <input type="text" required name="penulis_artikel" class="form-control" id="exampleInputEmail1" value="<?php echo htmlspecialchars($dataArtikel['penulis_artikel']); ?>">
                                        </div>
										
										<div class="form-group">
											<div class='box-header'>
												 <label>Isi Artikel:</label>
											</div>
											
												<textarea required id="editor_wow" name="isi_artikel" rows="10" cols="80">
												    <?php echo htmlspecialchars($dataArtikel['isi_artikel']); ?>
												</textarea>                                    
											
                                        </div>

                                        <div class='box-header'>
                                            <label>Gambar Artikel :</label>
                                        </div>

                                        <div class='box-header'>   
                                            <?php
                                                if (empty($dataArtikel['path_gambar']))
                                                {
                                                    echo '<img style="height: 250px; padding: 4px; max-width:250px; border: solid 1px black" src="'.base_url('asset/img/empty.png').'"/>';
                                                }
                                                else
                                                {
                                                    echo '<img style="height: 250px; padding: 4px; max-width:250px; border: solid 1px black" src="'.base_url('asset/upload_img_artikel/'.$dataArtikel['path_gambar']).'"/>';
                                                }
                                            ?>             
                                            
                                        </div>
                                        
                                        <label class='box-header' style="color: blue;" id="ganti">Ganti Gambar ?</label><br>
                                        <div class="ganti_gambar">
                                            <input class="form" type="file" name="filefoto" >
											<b><p style="color:red;">File diizinkan: jpg, jpeg, dan png (Max 2Mb)</p></b>
                                        </div>
                                    </div><!-- /.box-body -->
                                    <input type="hidden" name="id_artikel" value="<?php echo $idArtikel; ?>">
                                    <div class="box-footer">
                                        <button type="submit" name="save" value="1" class="btn btn-primary"><i class="glyphicon glyphicon-floppy-saved"></i> Simpan</button>
                                       <a href="<?php echo site_url('KelolaArtikel/');?>"><button type="button" name="submit" class="btn btn-danger"><i class="glyphicon glyphicon-remove"></i> Batal</button></a>
                                    </div>
                                </form>
                            </div><!-- /.box -->
                        </div><!--/.col (left) -->

                        <div class="col-md-2"></div>
                    </div>   <!-- /.row -->
                </section><!-- /.content -->
            </aside><!-- /.right-side -->