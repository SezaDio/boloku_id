<aside class="right-side">
                <!-- Content Header (Page header) -->
                <section class="content-header" style="margin-top: 45px;">
                    <h1>
                       Kelola Slider
                    </h1>
                    <ol class="breadcrumb">
                        <li><i class="fa fa-dashboard"></i>Kelola Slider</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <!-- left column -->
                        <div class="col-md-12">
                            <!-- general form elements -->
                            <div class="box box-primary">

                                <!--Mulai Tampilkan Data Table-->
                                <div class="box-body">
									<div style="margin-top:10px; margin-bottom:30px">
										<?php if($this->session->flashdata('msg_berhasil')!=''){?>
                                            <div class="alert alert-success alert-dismissable">
                                                <i class="glyphicon glyphicon-ok"></i>
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                <?php echo $this->session->flashdata('msg_berhasil');?> 
                                            </div>
                                        <?php }?>
										<a href="<?php echo site_url('KelolaSlider/tambah_slider_check/');?>">
                                            <button type="submit" name="submit" class="btn btn-info"><i class="glyphicon glyphicon-plus"></i> Tambah Slider</button>
                                        </a><br/><br/><br/>
										<div>
											<div class="content">
												<div class="row">
													<?php foreach($listSlider as $item){ ?>
                                                    <div class="col-md-4" style="text-align: center">
													<div class="well" style="padding:10px">
															<input onclick="publish(<?php echo $item['id_slider']?>)" type="checkbox" name="slider" id="slider<?php echo $item['id_slider']?>" value="<?php echo $item['id_slider']?>" <?php if($item['status']==1){?>checked="checked"<?php } ?>>  
														<img height="100%" width="100%" alt="" src="<?php echo base_url('asset/upload_img_slider/'.$item['path_gambar']); ?>">
														<br/><?php 	echo $item['judul_slider']; ?>
														<br/>
														<!-- Tombol lihat detail -->
														<a href="<?php echo site_url('KelolaSlider/edit_slider/'.$item['id_slider']);?>"><button class="btn btn-warning btn-sm"><i class="glyphicon glyphicon-pencil" ></i> Edit</button></a>
														
														<!-- Tombol Hapus -->
														<a href="<?php echo site_url('KelolaSlider/delete_slider/'.$item['id_slider']);?>"><button class="btn btn-danger btn-sm"><i class="glyphicon glyphicon-trash" ></i> Hapus</button></a>
													</div>
													</div>
													<?php } ?>
												</div>
											</div>
										</div>
									</div>
                                    <div class="form-group">
                                        
                                    </div>
                                </div><!-- /.box-body -->

                            </div><!-- /.box -->
                        </div><!--/.col (left) -->
                    </div>   <!-- /.row -->
                </section><!-- /.content -->
            </aside><!-- /.right-side -->


            <script>
				function publish(idSlider){
					var check = document.getElementById("slider"+idSlider).checked;
						if(check){
							$.ajax({
							url: 'KelolaSlider/publish_slider',
							type: 'POST',
							data: {idSlider:idSlider},
							success: function(){
										alert('Content berhasil di publish');
										location.reload();
									},
							error: function(){
										alert('Content gagal di publish');
									}
							});
						} else{
							$.ajax({
							url: 'KelolaSlider/unpublish_slider',
							type: 'POST',
							data: {idSlider:idSlider},
							success: function(){
										alert('Content berhasil di unpublish');
										location.reload();
									},
							error: function(){
										alert('Content gagal di unpublish');
									}
							});
						}
				}
			</script>