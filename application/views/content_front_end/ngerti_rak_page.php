      <section class="my-breadcrumb">
         <div class="container page-banner">
            <div class="row">
               <div class="col-sm-12 col-md-12 col-xs-12">
                  <h1>Ngerti Rak ?</h1>
               </div>
            </div>
         </div>
      </section>

      <section class="main-content">
         <div class="container">
            <div class="row">
               <div class="col-md-12 col-sm-12 col-xs-12">
               		<!--Section Wow-->
                    <div class="col-md-12 col-xs-12 col-sm-12 nopadding">
                        <div class="heading colored">
                           <h2 class="main-heading"><strong>Ngerti Rak ?</strong></h2>
                           <span class="heading-ping"></span>
                           <span class="heading-read-more">
	                            <a href="#" class="btn btn-black">all</a>
                                <a href="#" class=" btn btn-green">Seni</a>
                                <a href="#" class="btn btn-purple">Hobi</a>
                                <a href="#" class=" btn btn-dark-red">Musik</a>
                                <a href="#" class=" btn btn-red">Bisnis</a>
                                <a href="#" class=" btn btn-orange">Spirituality</a>
                                <a href="#" class="btn btn-gray">Science & Tech</a>
                                <a href="#" class="btn btn-blue">Travel & Outdoor</a>
                                <a href="#" class=" btn btn-yellow">Keluarga & Pendidikan</a>
                                <a href="#" class="btn btn-red">Lain-lain</a>
                           </span>
                        </div>
                    </div>
               		<div class="row">
	                    <div class="parallel-post-style">
							<?php foreach($listNgertiRak as $ngertirak){?>
	                    	<div class="col-md-4 col-sm-4 col-xs-12">
	                           <div class="item" style="box-shadow: 0 1px 10px #f44a56;">
	                              <div class="latest-news-grid grid-1">
	                                 <div class="picture">
	                                    <div class="category-image">
	                                       
	                                       <img alt="" class="img-responsive" src="<?php echo base_url('asset/upload_img_wow/thumb_'.$ngertirak['path_gambar']); ?>">
	                                       
	                                       <div class="catname">
	                                          <a class="btn btn-maroon" href="#">
	                                             <div>Sports</div>
	                                          </a>
	                                       </div>
	                                    </div>
	                                 </div>
	                                 <div class="detail">
	                                    <div class="caption" style="text-align: center;">
	                                       <h5>
	                                          <a href="#"><?php echo $ngertirak['judul_wow'];?></a>
	                                       </h5>
	                                    </div>
	                                    <p style="text-align: center; font-size: inherit;">
	                                       <?php echo $ngertirak['deskripsi'];	?>
	                                    </p><br>
	                                    
	                                 </div>
	                              </div>
	                           </div>
                    		</div>
							<?php } ?>
                    		

	                    </div>
               		</div>
            	</div>

            	
        	</div>
        </div>
      </section>