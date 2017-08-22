	<section>
        <div class="container">
            <div class="row">
               <div class="col-md-12 col-sm-12 col-xs-12">
	                <div class="parallel-post-style">
	                	<?php if($this->session->flashdata('msg_berhasil')!=''){?>
                            <div class="alert alert-success alert-dismissable">
                                <i class="glyphicon glyphicon-ok"></i>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <?php echo $this->session->flashdata('msg_berhasil');?> 
                            </div>
                        <?php }?>
	                	<div class="col-md-8 col-sm-4 col-xs-12">
	                       <div class="item" style="background-color: white; box-shadow: 0 1px 5px grey;">
	                          <div class="latest-news-grid grid-1">
	                          	<div class="row">
	                          		<div class="col-md-12">
			                            <div class="col-md-6">
				                             <div class="picture">
				                             	<div style="padding-top: 15px; margin-bottom: 15px;" class="ad-div style-box">
						                           <a href="<?php echo base_url('asset/upload_img_coming/'.$path_gambar); ?>" class="tt-lightbox">
						                              <img alt="" class="img-responsive" src="<?php echo base_url('asset/upload_img_coming/thumb_'.$path_gambar); ?>">
						                           </a>
						                        </div>
				                             </div>
			                            </div>

			                            <div class="col-md-6">
				                            <div class="detail">
				                                <div class="caption" style="text-align: center;">
				                                   <h5>
				                                      <a href="#"><h3><strong><?php echo $nama_event; ?></strong></h3></a>
				                                   </h5>
				                                </div>
				                                <p style="text-align: center; font-size: inherit;">
				                                	Diselenggarakan oleh: <br><strong><?php echo $institusi; ?></strong><br>by <strong> <?php echo $posted_by; ?> </strong> / on <strong> <?php echo $tanggal_posting; ?></strong>
				                                   
				                                </p><br>
				                             
				                                <div class="col-md-12" style="text-align: center;">
				                                	<button value="<?php echo $like; ?>" onclick="update_like_ajax(<?php echo $id_event; ?>)" style="color:white;" class="btn btn-success" type="submit"><i class="glyphicon glyphicon-thumbs-up"></i> <span id="like"> <?php echo $like; ?></span></button>
													
													<button style="color:white;" class="btn btn-warning" type="submit"><i class="glyphicon glyphicon-eye-open"></i> <?php echo $hits; ?></button>
				                                	
				                                	<a title="facebook" href="http://www.facebook.com/sharer.php?u=<?php echo current_url(); ?>" target="_blank">
				                                		<button style="color:white;" class="btn btn-primary" type="submit"><i class="fa fa-facebook"></i> </button>
				                                	</a>
								                    <a title="google +" href="https://plus.google.com/share?url=<?php echo current_url(); ?>" target="_blank"><button style="color:white;" class="btn btn-danger" type="submit"><i class="fa fa-google"></i></button></a>

								                    <a title="twitter" href="http://twitter.com/share?url=<?php echo current_url(); ?>" target="_blank"><button style="color:white;" class="btn btn-info" type="submit"><i class="fa fa-twitter"></i></button></a>
				                                </div>
				                            </div>
				                        </div>
				                    </div>
		                        </div>

		                        <div class="row" style="padding-bottom: 20px">
		                        	<div class="col-md-12">
		                        		<div class="col-md-12">
		                        		<hr style="border: solid 1px #f44a56; opacity: 0.4;">
		                        		<?php
		                                    if ($tipe_event == "Attraction")
		                                    { ?>
		                                       <a style="margin-top: -15px;" class="btn btn-yellow" href="">
		                                          <div>
		                                             # <?php echo $tipe_event; ?>
		                                          </div>
		                                       </a>
		                              <?php }
		                                    elseif ($tipe_event == "Class")
		                                    { ?>
		                                       <a style="margin-top: -15px;" class="btn btn-grey" href="">
		                                          <div>
		                                             # <?php echo $tipe_event; ?>
		                                          </div>
		                                       </a>
		                              <?php }
		                                    elseif ($tipe_event == "Conference")
		                                    { ?>
		                                       <a style="margin-top: -15px;" class="btn btn-dark-blue" href="">
		                                          <div>
		                                             # <?php echo $tipe_event; ?>
		                                          </div>
		                                       </a>
		                              <?php }
		                                    elseif ($tipe_event == "Expo")
		                                    { ?>
		                                       <a style="margin-top: -15px;" class="btn btn-dark-red" href="">
		                                          <div>
		                                             # <?php echo $tipe_event; ?>
		                                          </div>
		                                       </a>
		                              <?php }
		                                    elseif ($tipe_event == "Festival")
		                                    { ?>
		                                       <a style="margin-top: -15px;" class="btn btn-orange" href="">
		                                          <div>
		                                             # <?php echo $tipe_event; ?>
		                                          </div>
		                                       </a>
		                              <?php }
		                                    elseif ($tipe_event == "Game")
		                                    { ?>
		                                       <a style="margin-top: -15px;" class="btn btn-green" href="">
		                                          <div>
		                                             # <?php echo $tipe_event; ?>
		                                          </div>
		                                       </a>
		                              <?php }
		                                    elseif ($tipe_event == "Party")
		                                    { ?>
		                                       <a style="margin-top: -15px;" class="btn btn-red" href="">
		                                          <div>
		                                             # <?php echo $tipe_event; ?>
		                                          </div>
		                                       </a>
		                              <?php }
		                                    elseif ($tipe_event == "Performance")
		                                    { ?>
		                                       <a style="margin-top: -15px;" class="btn btn-purple" href="">
		                                          <div>
		                                             # <?php echo $tipe_event; ?>
		                                          </div>
		                                       </a>
		                              <?php }
		                                    elseif ($tipe_event == "Seminar")
		                                    { ?>
		                                       <a style="margin-top: -15px;" class="btn btn-blue" href="">
		                                          <div>
		                                             # <?php echo $tipe_event; ?>
		                                          </div>
		                                       </a>
		                              <?php }
		                                    elseif ($tipe_event == "Tour")
		                                    { ?>
		                                       <a style="margin-top: -15px;" class="btn btn-success" href="">
		                                          <div>
		                                             # <?php echo $tipe_event; ?>
		                                          </div>
		                                       </a>
		                              <?php }
		                                    elseif ($tipe_event == "Lain-Lain")
		                                    { ?>
		                                       <a style="margin-top: -15px;" class="btn btn-gray" href="">
		                                          <div>
		                                             # <?php echo $tipe_event; ?>
		                                          </div>
		                                       </a>
		                              <?php } 
		                                 ?>
				                        
		                                <!--Label Kategori event-->
			                              <?php
			                                    if ($kategori_event == "Seni")
			                                    { ?>
			                                       <a style="margin-top: -15px;" class="btn btn-purple" href="">
			                                          <div>
			                                             # <?php echo $kategori_event; ?>
			                                          </div>
			                                       </a>
			                              <?php }
			                                    elseif ($kategori_event == "Hobi")
			                                    { ?>
			                                       <a style="margin-top: -15px;" class="btn btn-orange" href="">
			                                          <div>
			                                             # <?php echo $kategori_event; ?>
			                                          </div>
			                                       </a>
			                              <?php }
			                                    elseif ($kategori_event == "Bisnis")
			                                    { ?>
			                                       <a style="margin-top: -15px;" class="btn btn-primary" href="">
			                                          <div>
			                                             # <?php echo $kategori_event; ?>
			                                          </div>
			                                       </a>
			                              <?php }
			                                    elseif ($kategori_event == "Musik")
			                                    { ?>
			                                       <a style="margin-top: -15px;" class="btn btn-dark-red" href="">
			                                          <div>
			                                             # <?php echo $kategori_event; ?>
			                                          </div>
			                                       </a>
			                              <?php }
			                                    elseif ($kategori_event == "Spirituality")
			                                    { ?>
			                                       <a style="margin-top: -15px;" class="btn btn-yellow" href="">
			                                          <div>
			                                             # <?php echo $kategori_event; ?>
			                                          </div>
			                                       </a>
			                              <?php }
			                                    elseif ($kategori_event == "Travel dan Outdoor")
			                                    { ?>
			                                       <a style="margin-top: -15px;" class="btn btn-success" href="">
			                                          <div>
			                                             # <?php echo $kategori_event; ?>
			                                          </div>
			                                       </a>
			                              <?php }
			                                    elseif ($kategori_event == "Science dan Teknologi")
			                                    { ?>
			                                       <a style="margin-top: -15px;" class="btn btn-dark-green" href="">
			                                          <div>
			                                             # <?php echo $kategori_event; ?>
			                                          </div>
			                                       </a>
			                              <?php }
			                                    elseif ($kategori_event == "Keluarga dan Pendidikan")
			                                    { ?>
			                                       <a style="margin-top: -15px;" class="btn btn-blue" href="">
			                                          <div>
			                                             # <?php echo $$kategori_event; ?>
			                                          </div>
			                                       </a>
			                              <?php }
			                                    elseif ($kategori_event == "Seminar")
			                                    { ?>
			                                       <a style="margin-top: -15px;" class="btn btn-blue" href="">
			                                          <div>
			                                             # <?php echo $kategori_event; ?>
			                                          </div>
			                                       </a>
			                              <?php }
			                                    elseif ($kategori_event == "Lain-Lain")
			                                    { ?>
			                                       <a style="margin-top: -15px;" class="btn btn-gray" href="">
			                                          <div>
			                                             # <?php echo $kategori_event; ?>
			                                          </div>
			                                       </a>
			                              <?php } 
			                                 ?>
		                        		</div>
		                        	</div>
		                        </div>

	                          </div>
	                       </div>
	            		</div>

	            		<div class="col-md-4 col-sm-4 col-xs-12">
	                       <div class="item" style="background-color: white; box-shadow: 0 1px 5px grey;">
	                          <div class="latest-news-grid grid-1">
	                             <div class="detail">
	                                <div class="caption" style="text-align: center;">
	                                   <h5>
	                                      <label>Detail Info Event</label>
	                                   </h5>
	                                </div>
	                                <table class="table">
	                                	<tr>
	                                		<td style="width: 120px;">Tanggal Event</td>
	                                		<td>:</td>
	                                		<td>
	                                			<?php
                                                    $tgl_mulai=date('d-F-Y', strtotime($tgl_mulai));
                                                    $tgl_selesai=date('d-F-Y', strtotime($tgl_selesai));

                                                    if ($tgl_mulai  == $tgl_selesai) 
                                                    {
                                                        echo $tgl_mulai;   
                                                    }
                                                    else
                                                    {
                                                        echo $tgl_mulai." s/d ".$tgl_selesai;
                                                    }
                                                ?>
	                                		</td>
	                                	</tr>
	                                	<tr>
	                                		<td>Waktu Event</td>
	                                		<td>:</td>
	                                		<td>
	                                			<?php
                                                    if ($jam_mulai  == $jam_selesai) 
                                                    {
                                                        echo $jam_mulai;   
                                                    }
                                                    else
                                                    {
                                                        echo $jam_mulai." s/d ".$jam_selesai;
                                                    }
                                                ?>
	                                		</td>
	                                	</tr>
	                                	<tr>
	                                		<td>Alamat</td>
	                                		<td>:</td>
	                                		<td><?php echo $alamat; ?></td>
	                                	</tr>
	                                	<tr>
	                                		<td>Harga Tiket</td>
	                                		<td>:</td>
	                                		<td><?php if($jenis_event==0){ echo "Rp ".$harga;} else { echo "Free";}?></td>
	                                	</tr>
	                                	<tr>
	                                		<td>Jumlah Seat</td>
	                                		<td>:</td>
	                                		<td><?php if($seat==1){ echo $jumlah_seat;} else { echo "Open Seat";}?></td>
	                                	</tr>
	                                	<tr>
	                                		<td>Contact Person</td>
	                                		<td>:</td>
	                                		<td><?php echo $telepon;?></td>
	                                	</tr>
	                                	
	                                </table>
	                                <hr style="border: solid 1px #f44a56; opacity: 0.4;">
	                                
	                                <div class="col-md-12" style="text-align: center;">
	                                	<?php
	                                		if($pendaftaran == 1)
	                                		{ ?>
                                       			<a style="height: 53px; font-size: 1.7em; width: 100%;" href="<?php echo base_url('mendaftar_event/'.$id_event); ?>" class="btn btn-colored-blog"><i class="glyphicon glyphicon-pencil"></i> Daftar </a>
	                                  <?php }

	                                	?>
                                    </div>
	                             </div>
	                          </div>
	                       </div>
	            		</div>

	            		<div class="col-md-8 col-sm-4 col-xs-12" id="sidebar">
	                       <div class="item" style="background-color: white; box-shadow: 0 1px 5px grey;">
	                          <div class="latest-news-grid grid-1">
	                             <div class="widget widget-bg" style="background-color: white;">
			                        <div class="tabs">
			                            <div role="tabpanel">
			                              <!-- Nav tabs -->
			                              <ul class="nav nav-tabs nav-justified" role="tablist">
			                                 <li class="active" role="presentation"> 
			                                 	<a aria-controls="popular" aria-expanded="true" data-toggle="tab"
			                                    href="#popular" role="tab">Deskripsi</a> 
			                                 </li>
			                                 <li class="" role="presentation"> 
			                                 	<a aria-controls="testimoni" aria-expanded="false"
			                                    data-toggle="tab" href="#testimoni" role=
			                                    "tab">Testimoni</a> 
			                                 </li>
			                                 <li class="" role="presentation"> 
			                                 	<a aria-controls="liputan" aria-expanded="false"
			                                    data-toggle="tab" href="#liputan" role=
			                                    "tab">Liputan</a> 
			                                 </li>
			                              </ul>

			                              
			                              <div class="tab-content">

			                              	 <!--Tab Deskripsi Event-->
			                                 <div class="tab-pane active" id="popular" role="tabpanel">
			                                    <div class="caption">
			                                    	<br>
			                                    	<?php
			                                    		$deskripsi_event = trim($deskripsi_event);
			                                    		if (empty($deskripsi_event))
			                                    		{
			                                    			echo "<p style='text-align: center;'>Tidak ada deskripsi tambahan terkait event ini</p>";
			                                    		}
			                                    		else
			                                    		{ ?>
			                                    			<p><?php echo $deskripsi_event; ?></p>
			                                      <?php } ?>
			                                    	
			                                    </div>
			                                 </div>

			                                 <!--Tab Testimoni-->
			                                 <div class="tab-pane" id="testimoni" role="tabpanel">
			                                    
						                        <h3>Total Testimoni (<?php echo $jumlahTestimoni; ?>)</h3>
												<?php foreach($listTestimoni as $testimoni){?>
													<div class="row">
							                            <div style="padding-bottom: 20px; padding-top: 10px;" class="col-md-12">
							                                 <div class="col-md-2">
							                                 	<img style="width: 100%;" class="pull-left" src="<?php echo base_url('asset/upload_img_member/thumb85_'.$testimoni['path_foto']); ?>" alt="author">
							                                 </div>
							                                 
							                                 <div class="col-md-10">
							                                 	<div class="row">
							                                 		<div class="col-md-12">
									                                    <div class="col-md-8">
									                                       <strong><?php echo $testimoni['nama_member']?></strong>
									                                    </div>
									                                    <div class="col-md-4 pull-right">
								                                           <label><?php echo $testimoni['tgl_posting']; ?></label>
								                                       	</div>
								                                    </div>
								                                </div>
							                                    <div class="col-md-10">
							                                    	<p><?php echo $testimoni['isi_testimoni']; ?></p>
							                                    </div>
							                                 </div>
							                                 
							                            </div>
							                           	<hr style="border: solid 1px #f44a56; opacity: 0.4;">
							                        </div>
												<?php } ?>
							                     <br><br>

							                     <!--Form comentar baru-->
							                     <div style="padding-top: 10px;" class="col-md-12 comment-info">
												 	<?php 
												 		if(isset( $this->session->userdata['is_logged_in']))
												 		{?>
														  	<div class="col-md-2">
							                                 	<img style="width: 100%;" class="pull-left hidden-xs" src="<?php echo base_url('asset/upload_img_member/thumb85_'.$this->session->userdata('path_foto')); ?>" alt="author">
							                                </div>

							                                <div class="author-desc">
							                                    <div class="author-title">
							                                       <strong><a href=""><?php echo $this->session->userdata('nama_member')?></a></strong>
							                                    </div>
							                                    <form class="col-md-10" role="form" enctype="multipart/form-data" action="<?php echo site_url('KelolaComing/tambah_testimoni/'.$this->session->userdata('id_member'));?>" method="POST">
							                                    	
																	<textarea style="width: 100%" required name="isi_testimoni" rows="3"></textarea>
																		
																	<br>
																	<input type="hidden" name="id_event" value="<?php echo $id_event?>">	
																	<button class="btn btn-colored-blog" type="submit" value="1" name="submit"><i class="glyphicon glyphicon-send"></i> Kirim </a></button>
																	

																  	<button style="float: right;" type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
																    	Stiker <span class="caret"></span>
																  	</button><br>
																  	<ul style="float: right;" class="dropdown-menu">
																	    <li><a href="#">Action</a></li>
																	    <li><a href="#">Another action</a></li>
																	    <li><a href="#">Something else here</a></li>
																	    <li role="separator" class="divider"></li>
																	    <li><a href="#">Separated link</a></li>
																  	</ul>
							                                    </form>
							                                </div>
											     	<?php } 
											     		  else
											     		  {
											     		  	echo "<p style='text-align: center;'>Silahkan Login terlebih dahulu untuk memberikan Testimoni.</p>";
											     		  }?>
						                         </div>
			                                 </div>

			                                 <!--Tab Liputan-->
			                                 <div class="tab-pane" id="liputan" role="tabpanel">
			                                 	<?php
		                                    		if (empty($listPressRelease))
		                                    		{
		                                    			echo "<br>";
		                                    			echo "<p style='text-align: center;'>Belum ada liputan terkait event ini</p>";
		                                    		}
		                                    		else
		                                    		{ ?>
		                                    			<ul class="tabs-posts">
														<?php foreach($listPressRelease as $pressrelease){?>
					                                       <li>
					                                          <div class="pic"> <a href="standard-post.html"><img alt="" class="img-responsive" src="<?php echo base_url('asset/upload_img_news/thumb_'.$pressrelease['gambar_news']); ?>"></a> </div>
					                                          <div class="caption"> <a href="<?php echo base_url('halaman_baca_artikel_pra_event/'.$pressrelease['id_news']); ?>"><?php echo $pressrelease['judul_news']; ?> </a> </div>
					                                          <ul class="post-tools">
					                                             <li title="Comments"> <i class="ti-thought"></i> 105 </li>
					                                          </ul>
					                                    <?php } ?>   
					                                    </ul>
		                                      <?php } ?>
		                                    </div>
			                              </div>
			                           </div>
			                        </div>
			                     </div>
	                          </div>
	                       </div>
	                    </div>
	            	</div>
            	</div>
            </div>
        </div>
    </section>