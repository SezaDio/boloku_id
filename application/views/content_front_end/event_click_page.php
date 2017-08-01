	<section>
        <div class="container">
            <div class="row">
               <div class="col-md-12 col-sm-12 col-xs-12">
	                <div class="parallel-post-style">
	                	<div class="col-md-9 col-sm-4 col-xs-12">
	                       <div class="item" style="box-shadow: 0 1px 5px grey;">
	                          <div class="latest-news-grid grid-1">
	                             <div class="col-md-6">
		                             <div class="picture">
		                             	<div style="padding-top: 15px; margin-bottom: 15px;" class="ad-div style-box">
				                           <a href="<?php echo base_url('asset/upload_img_coming/'.$path_gambar); ?>" class="tt-lightbox">
				                              <img alt="" class="img-responsive" src="<?php echo base_url('asset/upload_img_coming/thumb_'.$path_gambar); ?>">
				                           </a>
				                        </div>
		                             </div>
	                             </div>
	                             <div class="detail">
	                                <div class="caption" style="text-align: center;">
	                                   <h5>
	                                      <a href="#"><label><?php echo $nama_event; ?></label></a>
	                                   </h5>
	                                </div>
	                                <p style="text-align: center; font-size: inherit;">
	                                   by <strong> <?php echo $posted_by; ?> </strong> / on <strong> <?php echo $tanggal_posting; ?></strong>
	                                </p><br><br>
	                                
	                                <div class="col-md-12" style="text-align: center;">
	                                	<button style="color:white;" class="btn btn-success" type="submit"><i class="glyphicon glyphicon-thumbs-up"></i> 100</button>
	                                	<button style="color:white;" class="btn btn-warning" type="submit"><i class="glyphicon glyphicon-eye-open"></i> 100</button>
	                                	<button style="color:white;" class="btn btn-primary" type="submit"><i class="glyphicon glyphicon-share"></i> 100</button>
	                                </div><br><br><br>

	                                <hr style="border: solid 1px #f44a56; opacity: 0.4;">
	                                <a style="margin-top: -15px;" href="#" class=" btn btn-dark-red"><?php echo $kategori_event; ?></a>
			                        <a style="margin-top: -15px;" href="#" class=" btn btn-orange"><?php echo $tipe_event; ?></a>
	                             </div>
	                          </div>
	                       </div>
	            		</div>

	            		<div class="col-md-3 col-sm-4 col-xs-12">
	                       <div class="item" style="box-shadow: 0 1px 5px grey;">
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
	                                		<td></td>
	                                	</tr>
	                                	<tr>
	                                		<td>Waktu Event</td>
	                                		<td>:</td>
	                                		<td></td>
	                                	</tr>
	                                	<tr>
	                                		<td>Harga Tiket</td>
	                                		<td>:</td>
	                                		<td><?php if($jenis_event==0){ echo $harga;} else { echo "-";}?></td>
	                                	</tr>
	                                	<tr>
	                                		<td>Jumlah Seat</td>
	                                		<td>:</td>
	                                		<td><?php if($seat==1){ echo $jumlah_seat;} else { echo "-";}?></td>
	                                	</tr>
	                                	<tr>
	                                		<td>Contact Person</td>
	                                		<td>:</td>
	                                		<td><?php echo $telepon;?></td>
	                                	</tr>
	                                	<tr>
	                                		<td>Email</td>
	                                		<td>:</td>
	                                		<td><?php echo $email;?></td>
	                                	</tr>
	                                </table>
	                                <div class="col-md-12" style="text-align: center;">
                                       <a style="width: 100%;" href="" class="btn btn-colored-blog"> Daftar </a>
                                    </div>
	                             </div>
	                          </div>
	                       </div>
	            		</div>

	            		<div class="col-md-9 col-sm-4 col-xs-12" id="sidebar">
	                       <div class="item" style="box-shadow: 0 1px 5px grey;">
	                          <div class="latest-news-grid grid-1">
	                             <div class="widget widget-bg">
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
			                                    	<p><?php echo $deskripsi_event; ?></p> 
			                                    </div>
			                                 </div>

			                                 <!--Tab Testimoni-->
			                                 <div class="tab-pane" id="testimoni" role="tabpanel">
			                                    <div class="reviews">
							                        <h3>Total Coments (46)</h3>
													<?php foreach($listTestimoni as $testimoni){?>
						                            <div style="padding-top: 10px;" class="col-md-12 comment-info">
						                                 <div class="col-md-2">
						                                 	<img style="width: 100%;" class="pull-left hidden-xs" src="<?php echo base_url('asset/img/author3.jpg'); ?>" alt="author">
						                                 </div>
						                                 
						                                 <div class="author-desc">
						                                    <div class="author-title">
						                                       <strong><a href=""><?php echo $testimoni['penulis_testimoni']?></a></strong>
						                                       <ul class="list-inline pull-right">
						                                          <li style="color: black;"><label><?php echo $testimoni['tgl_posting']; ?></label></li>
						                                       </ul>
						                                    </div>
						                                    <div class="col-md-10">
						                                    	<p><?php echo $testimoni['isi_testimoni']; ?></p>
						                                    </div>
						                                 </div>
						                            </div> 
													<?php } ?>
						                            
							                     </div>
							                     <br><br>
							                     <!--Form comentar baru-->
							                     <div style="padding-top: 10px;" class="col-md-12 comment-info">
												 <?php if(isset( $this->session->userdata['is_logged_in'])){?>
												  <div class="col-md-2">
					                                 	<img style="width: 100%;" class="pull-left hidden-xs" src="" alt="author">
					                                 </div>
					                                 
					                                 <div class="author-desc">
					                                    <div class="author-title">
					                                       <strong><a href=""><?php echo $this->session->userdata['nama_member']?></a></strong>
					                                    </div>
					                                    <form class="col-md-10" role="form" enctype="multipart/form-data" action="<?php //echo site_url('KelolaArtikel/tambah_artikel_check/');?>" method="POST">
					                                    	
															<textarea style="width: 100%" required name="komentar" rows="3"></textarea>
																
															<br>    
															<a href="" class="btn btn-colored-blog"><i class="glyphicon glyphicon-send"></i> Kirim </a>

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
											     <?php } ?>
						                         </div>
			                                 </div>

			                                 <!--Tab Liputan-->
			                                 <div class="tab-pane" id="liputan" role="tabpanel">
			                                    <ul class="tabs-posts">
												<?php foreach($listPressRelease as $pressrelease){?>
			                                       <li>
			                                          <div class="pic"> <a href="standard-post.html"><img alt="" class="img-responsive" src="<?php echo base_url('asset/upload_img_news/thumb_'.$pressrelease['gambar_news']); ?>"></a> </div>
			                                          <div class="caption"> <a href="#"><?php echo $pressrelease['judul_news']; ?> </a> </div>
			                                          <ul class="post-tools">
			                                             <li title="Comments"> <i class="ti-thought"></i> 105 </li>
			                                          </ul>
			                                    <?php } ?>   
			                                    </ul>
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