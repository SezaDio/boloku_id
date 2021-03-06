	<section class="my-breadcrumb" style="background-image: url(<?php echo base_url('asset/img/article_and_report.png') ; ?>);">
         <div class="container page-banner">
            <div class="row">
               <div class="col-sm-12 col-md-12 col-xs-12">
                  <h1>&nbsp;</h1>
               </div>
            </div>
         </div>
      </section>

      <section class="main-content">
         <div class="container">
            <div class="row">
               <div class="col-md-8 col-sm-12 col-xs-12">
                  <div class="post-entry" style="padding: 20px; background-color: white;">
                     <h2><?php echo htmlspecialchars($judul_artikel); ?></h2>
                     
                     <ul class="post-tools">
                        <li> by <a href=""> <strong><?php echo htmlspecialchars($penulis_artikel); ?></strong> </a></li>
                        <li> <?php echo $tanggal_posting; ?></li>
                        <li><i class="ti-thought"></i> <?php echo $jumlahKomentar ?> </li>
                        <li> <i class="ti-eye"></i> <?php echo $hits; ?> </li>
                     </ul>

                     <ul class="social-share">
                        <li class="facebook">
                          <a title="facebook" href="http://www.facebook.com/sharer.php?u=<?php echo current_url(); ?>" target="_blank">
                            <i class="fa fa-facebook"></i> 
                          </a>
                        </li>
                        <li class="twitter">
                          <a title="twitter" href="http://twitter.com/share?url=<?php echo current_url(); ?>" target="_blank"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li class="google">
                          <a title="google +" href="https://plus.google.com/share?url=<?php echo current_url(); ?>" target="_blank"><i class="fa fa-google"></i></a>
                        </li>
                     </ul>

                     <div class="picture"> <img alt="" class="img-responsive" src="<?php echo base_url('asset/upload_img_artikel/thumb_'.$path_gambar); ?>"> </div>

                     <!--Kotak Content Artikel-->
                     <?php echo $isi_artikel;?>
                     <hr style="border: solid 1px #f44a56; margin-top: auto; opacity: 0.4;"></hr>

                     
                  </div>
                     <!--Kotak Komentar-->                     
                     <div class="reviews" style="background-color: white;">
                        <h3 style="padding: 20px;">Total Coments (<?php echo $jumlahKomentar; ?>)</h3>
						<?php foreach($listKomentar as $komentar){?>
							<div style="padding: 10px;" class="comment-info">
								 <div class="col-md-2">
									<img style="width: 100%;" class="pull-left hidden-xs" src="<?php echo base_url('asset/upload_img_member/thumb85_'.$komentar['path_foto']); ?>" alt="author">
								 </div>
					 
					            <div class="author-desc">
									<div class="author-title">
									   <strong><a href=""><?php echo htmlspecialchars($komentar['nama_member']);?></a></strong>
									   <ul class="list-inline pull-right">
										  <li style="color: black;"><label><?php echo $komentar['tgl_posting']; ?></label></li>
									   </ul>
									</div>
									<div class="col-md-10">
										<p><?php echo htmlspecialchars($komentar['isi_komentar']); ?></p>
									</div>
						            <br><br><br>
                                </div>
					            <hr style="border: solid 1px #f44a56; opacity: 0.4;">
				            </div>
			            <?php } ?>

                       <!--Form comentar baru-->
	                     <div style="margin-top: -10px; background-color: white; padding-top: 10px;" class="col-md-12 comment-info">
                          <?php if(isset($this->session->userdata['is_logged_in']))
                          {?>     
  							            <div class="col-md-2">
                              <img style="width: 100%;" class="pull-left hidden-xs" src="<?php echo base_url('asset/upload_img_member/thumb85_'.$this->session->userdata('path_foto')); ?>" alt="author">
                            </div>
                            <div class="author-desc">
                              <div class="author-title">
                                 <strong><a href=""><?php echo $this->session->userdata('nama_member');?></a></strong>
                              </div>
                              <form class="col-md-10" role="form" enctype="multipart/form-data" action="<?php echo site_url('KelolaArtikel/tambah_komentar/'.$this->session->userdata('id_member'));?>" method="POST"> 	
  							                <textarea style="width: 100%" required name="isi_komentar" rows="3"></textarea>
  										          <br>    
              									<input type="hidden" name="id_artikel" value="<?php echo $id_artikel; ?>">	
              									<input type="hidden" name="jml_komentar" value="<?php echo $jumlahKomentar; ?>">	
  									            <button class="btn btn-colored-blog" type="submit" value="1" name="submit"><i class="glyphicon glyphicon-send"></i> Kirim </a></button>

  								  	          <button disabled style="float: right;" type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
  								    	           Stiker <span class="caret"></span>
  								  	          </button><br>
            								  	<ul style="position: inherit; float: right;" class="dropdown-menu">
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
               </div>
               <div class="col-md-4 col-sm-2 col-xs-12">
                 <!--Fitur Artikel-->
                 <div class="widget widget-bg" style="background-color: white;">
                    <div class="heading">
                       <h2 class="main-heading"><strong>Artikel Lainnya</strong></h2>
                       <span class="heading-ping"></span>
                    </div>
                    <ul class="tabs-posts">
					   <?php $this->load->model('home_models/HomeModels'); foreach($listArtikel as $artikel){ ?>
                       <li>
                          <div class="pic"> <a href="<?php echo site_url('artikel/'.$artikel['id_artikel'].'?ev='.strtolower(str_replace(" ","-",$artikel['judul_artikel']))); ?>"><img alt="" class="img-responsive" src="<?php echo base_url('asset/upload_img_artikel/thumb85_'.$artikel['path_gambar']); ?>"></a> </div>
                          <div class="caption"> <a href="<?php echo site_url('artikel/'.$artikel['id_artikel'].'?ev='.strtolower(str_replace(" ","-",$artikel['judul_artikel']))); ?>"><?php echo $artikel['judul_artikel'];?></a> </div>
                          <ul class="post-tools">
                             <li title="Like"><i class="glyphicon glyphicon-eye-open"></i><?php echo $artikel['hits'];?> </li>
                             <li title="Comments"> <i class="ti-thought"></i> <?php echo $data['jumlahKomentar'] = $this->HomeModels->jumlah_komentar($artikel['id_artikel']);?></li>
                          </ul>
                       </li>
                     <?php } ?>
                    </ul>
                 </div>
               </div>
               
               <div class="col-md-4 col-sm-2 col-xs-12">
                 <!--Fitur Liputan-->
                 <div class="widget widget-bg" style="background-color: white;">
                    <div class="heading">
                       <h2 class="main-heading"><strong>Liputan Lainnya</strong></h2>
                       <span class="heading-ping"></span>
                    </div>
                    <ul class="tabs-posts">
                      <?php foreach($listnews as $news){ ?>
                       <li>
                          <div class="pic"> <a href="<?php echo site_url('liputan/'.$news['id_news'].'?ev='.strtolower(str_replace(" ","-",$news['judul_news']))); ?>"><img style="width: 100px;" alt="" class="img-responsive" src="<?php echo base_url('asset/upload_img_news/thumb_'.$news['gambar_news']); ?>"></a> </div>
                          <div class="caption"> <a href="<?php echo site_url('liputan/'.$news['id_news'].'?ev='.strtolower(str_replace(" ","-",$news['judul_news']))); ?>"><?php echo $news['judul_news'];?></a> </div>
                          <ul class="post-tools">
                             <li title="Like"><i class="glyphicon glyphicon-eye-open"></i><?php echo $news['hits'];?> </li>
                             <li title="Comments"> <i class="ti-thought"></i> <?php echo $data['jumlahKomentar'] = $this->HomeModels->jumlah_komentar($news['id_news']);?></li>
                          </ul>
                       </li>
                     <?php } ?>
                    </ul>
                 </div>
               </div>
               
            </div>
         </div>
      </section>