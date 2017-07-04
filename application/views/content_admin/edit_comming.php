<aside class="right-side">
                <!-- Content Header (Page header) -->
                <section class="content-header" style="margin-top: 45px;">
                    <h1>
                       Edit Comming Soon
                    </h1>
					<div id="instafeed"></div>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i>Kelola Comming Soon</a></li>
                        <li class="active">Edit Comming Soon</li>
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
                                            <label for="exampleInputEmail1">Judul Agenda Comming Soon :</label>
                                            <input type="text" required name="nama_coming" class="form-control" id="exampleInputEmail1" value="<?php echo htmlspecialchars($dataComing['nama_coming']); ?>">
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Penulis Agenda Comming Soon :</label>
                                            <input type="text" required name="posted_by" class="form-control" id="exampleInputEmail1" value="<?php echo htmlspecialchars($dataComing['posted_by']); ?>">
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Kategori Agenda Comming Soon :</label><br>
                                            
                                            <select name="kategori_coming" required class="form-control" id="kategori_coming">
                                                <option value="">--Pilih Kategori Agenda Comming Soon--</option>
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
											<div class='box-header'>
												 <label>Deskripsi Agenda Comming Soon :</label>
											</div>
											<textarea required id="editor_wow" name="deskripsi_coming" rows="10" cols="80">
											    <?php echo htmlspecialchars($dataComing['deskripsi_coming']); ?>
											</textarea>                                    
                                        </div>

                                        <div class='box-header'>
                                            <label>Poster Agenda Comming Soon :</label>
                                        </div>

                                        <div class='box-header'>                
                                            <img style="height: 250px; padding: 4px; max-width:250px; border: solid 1px black" src="<?php echo base_url('asset/upload_img_coming/'.$dataComing['path_gambar']); ?>"/>
                                        </div>
                                        
                                        <label class='box-header' style="color: blue;" id="ganti">Ganti Gambar ?</label><br>
                                        <div class="ganti_gambar">
                                            <input class="form" type="file" name="filefoto" >
											<b><p style="color:red;">File diizinkan: jpg, jpeg, dan png (Max 2Mb)</p></b>
                                        </div>
                                    </div><!-- /.box-body -->
                                    <input type="hidden" name="id_coming" value="<?php echo $idComing; ?>">
                                    <div class="box-footer">
                                        <button type="submit" name="save" value="1" class="btn btn-primary"><i class="glyphicon glyphicon-floppy-saved"></i> Simpan</button>
                                       <a href="<?php echo site_url('KelolaComing/');?>"><button type="button" name="submit" class="btn btn-danger">Batal</button>
                                    </div>
                                </form>
                            </div><!-- /.box -->
                        </div><!--/.col (left) -->

                        <div class="col-md-2"></div>
                    </div>   <!-- /.row -->
                </section><!-- /.content -->
            </aside><!-- /.right-side -->