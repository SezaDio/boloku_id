
  <section class="zerogrid-section">
         <div class="container-fluid">
            <div class="row">
               <div class="col-md-12 col-xs-12 col-sm-12">
                  <div class="zerogrid">
                     <div class="row">
                        <div class="col-2-4">
                           <div class="wrap-col">
                              <div class="grid-item">
                                 <div> 
                                    <ul class="rslides" id="slider1">
									  <?php foreach($listSlider as $item){ ?>
                                      <li class="thumb"><img alt="" src="<?php echo base_url('asset/upload_img_slider/'.$item['path_gambar']); ?>"></li>
									  <?php } ?>
                                    </ul> 
                                 </div>
                              </div>
                           </div>
                        </div>
						
                        <div class="col-1-4">
						   <?php foreach($headNews->result() as $news){ ?>
                           <div class="wrap-col">
                              <div class="grid-item">
                                 <div class="post-content">
                                    <div class="catname">
                                       <a class="btn btn-green" href="#">
                                          <div><?php echo $news->kategori_news?></div>
                                       </a>
                                    </div>
                                    <h5> <a href="#"><?php echo $news->judul_news?></a> </h5>
                                    <ul class="post-tools">
                                       <li>  <?php $splitTimeStamp = explode(" ",$news->waktu_posting); echo $splitTimeStamp[0]; ?> </li>
                                       <li> <a href=""><i class="ti-thought"></i> 49</a> </li>
                                    </ul>
                                 </div>
                                 <div class="post-thumb thumb"> <img alt="" src="<?php echo base_url('asset/upload_img_news/thumb_'.$news->gambar_news); ?>"> </div>
                              </div>
                           </div>
						   <?php } ?> 
                           <div class="wrap-col">
                              <div class="grid-item">
                                 <div class="post-content">
                                    <div class="catname">
                                       <a class="btn btn-red" href="#">
                                          <div>Fashion</div>
                                       </a>
                                    </div>
                                    <h5> <a href="#">A gorgeous 1890 postcard tour of ...</a> </h5>
                                    <ul class="post-tools">
                                       <li>  July 31, 2016 </li>
                                       <li> <a href=""><i class="ti-thought"></i> 96</a> </li>
                                    </ul>
                                 </div>
                                 <div class="post-thumb thumb"> <img alt="" src="<?php echo base_url('asset/img/slide-14.jpg'); ?>"> </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-1-4">
						   <?php foreach($headComming->result() as $comming){ ?>
                           <div class="wrap-col">
                              <div class="grid-item">
                                 <div class="post-content">
                                    <div class="catname">
                                       <a class="btn btn-maroon" href="#">
                                          <div><?php echo $comming->kategori_coming?></div>
                                       </a>
                                    </div>
                                    <h5> <a href="#"><?php echo $comming->nama_coming?></a> </h5>
                                    <ul class="post-tools">
                                       <li>  <?php $splitTimeStamp = explode(" ",$comming->tanggal_posting); echo $splitTimeStamp[0]; ?> </li>
                                       <li> <a href=""><i class="ti-thought"></i> 67 </a></li>
                                    </ul>
                                 </div>
                                 <div class="post-thumb thumb"> <img alt="" src="<?php echo base_url('asset/upload_img_coming/thumb_'.$comming->path_gambar); ?>"> </div>
                              </div>
                           </div>
							 <?php } ?>
							 <?php foreach($headShopping->result() as $shopping){ ?>
                           <div class="wrap-col">
                              <div class="grid-item">
                                 <div class="post-content">
                                    <div class="catname">
                                       <a class="btn btn-gray" href="#">
                                          <div>Food and Health</div>
                                       </a>
                                    </div>
                                    <h5> <a href="#"><?php echo $shopping->nama_produk?></a> </h5>
                                    <ul class="post-tools">
                                       <li>  <?php $splitTimeStamp = explode(" ",$shopping->tanggal_posting); echo $splitTimeStamp[0]; ?> </li>
                                       <li><a href=""> <i class="ti-thought"></i> 16</a> </li>
                                    </ul>
                                 </div>
                                 <div class="post-thumb thumb"> <img alt="" src="<?php echo base_url('asset/upload_img_shopping/thumb_'.$shopping->path_gambar); ?>"> </div>
                              </div>
                           </div>
						   <?php } ?>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>

      <section class="main-content">
         <div class="container">
            <div class="row">
               <div class="col-md-8 col-sm-12 col-xs-12">

                  <!--Section News-->
                  <div class="section">
                     <div class="col-md-12 col-xs-12 col-sm-12 nopadding">
                        <div class="heading colored">
                           <h2 class="main-heading"><strong>Whats News</strong></h2>
                           <span class="heading-ping"></span>
                           <span class="heading-read-more">
                           <a href="#" class="btn btn-black">See all</a>
                           </span>
                        </div>
                     </div>
                     <div class="row">
						<?php foreach($newsSM->result() as $SM){ ?>
                        <article class="col-md-6 col-sm-6 col-xs-12">
                           <div class="grid-1">
                              <div class="picture">
                                 <div class="category-image">
                                    <a href="standard-post.html">
                                    <img alt="" class="img-responsive" src="<?php echo base_url('asset/upload_img_news/thumb_'.$SM->gambar_news); ?>">
                                    </a>
                                    <div class="catname">
                                       <a class="btn btn-green" href="#">
                                          <div>SM</div>
                                       </a>
                                    </div>
                                    <div class="hover-show-div">
                                       <a href="" class="post-type">
                                       <i class="ti-music-alt"></i>
                                       </a>
                                    </div>
                                 </div>
                              </div>
                              <div class="detail">
                                 <div class="caption">
                                    <h5>
                                       <a href="standard-post.html"><?php echo $SM->judul_news;?></a>
                                    </h5>
                                 </div>
                                 <ul class="post-tools">
                                    <li> by <a href=""> <strong> <?php echo $SM->posted_by;?></strong> </a></li>
                                    <li>  5 Hours Ago </li>
                                    <li><a href=""> <i class="ti-thought"></i> 57</a> </li>
                                 </ul>
                              </div>
                           </div>
                        </article>
						<?php } ?>
						<?php foreach($newsRecommend->result() as $recommend){ ?>
                        <article class="col-md-6 col-sm-6 col-xs-12">
                           <div class="grid-1">
                              <div class="picture">
                                 <div class="category-image">
                                    <a href="standard-post.html">
                                    <img alt="" class="img-responsive" src="<?php echo base_url('asset/upload_img_news/thumb_'.$recommend->gambar_news); ?>">
                                    </a>
                                    <div class="catname">
                                       <a class="btn btn-pink" href="#">
                                          <div>Recommended</div>
                                       </a>
                                    </div>
                                    <div class="hover-show-div">
                                       <a href="" class="post-type">
                                       <i class="ti-quote-left"></i>
                                       </a>
                                    </div>
                                 </div>
                              </div>
                              <div class="detail">
                                 <div class="caption">
                                    <h5>
                                       <a href="standard-post.html"><?php echo $recommend->judul_news ?></a>
                                    </h5>
                                 </div>
                                 <ul class="post-tools">
                                    <li> by <a href=""> <strong> <?php echo $recommend->posted_by?></strong> </a></li>
                                    <li>  3 Hours ago </li>
                                    <li><a href=""> <i class="ti-thought"></i> 57</a> </li>
                                 </ul>
                              </div>
                           </div>
                        </article>
						<?php } ?>
						<?php foreach($newsYouther->result() as $youther){ ?>
                        <article class="col-md-6 col-sm-6 col-xs-12">
                           <div class="grid-1">
                              <div class="picture">
                                 <div class="category-image">
                                    <a href="standard-post.html">
                                    <img alt="" class="img-responsive" src="<?php echo base_url('asset/upload_img_news/thumb_'.$youther->gambar_news); ?>">
                                    </a>
                                    <div class="catname">
                                       <a class="btn btn-lightblue" href="#">
                                          <div>Youther</div>
                                       </a>
                                    </div>
                                    <div class="hover-show-div">
                                       <a href="" class="post-type">
                                       <i class="ti-image"></i>
                                       </a>
                                    </div>
                                 </div>
                              </div>
                              <div class="detail">
                                 <div class="caption">
                                    <h5>
                                       <a href="standard-post.html"><?php echo $youther->judul_news ?></a>
                                    </h5>
                                 </div>
                                 <ul class="post-tools">
                                    <li> by <a href=""> <strong> <?php echo $youther->posted_by ?></strong> </a></li>
                                    <li>  5 mins Ago </li>
                                    <li><a href=""> <i class="ti-thought"></i> 57</a> </li>
                                 </ul>
                              </div>
                           </div>
                        </article>
						<?php } ?>
						<?php foreach($newsCommunity->result() as $community){ ?>
                        <article class="col-md-6 col-sm-6 col-xs-12">
                           <div class="grid-1">
                              <div class="picture">
                                 <div class="category-image">
                                    <a href="standard-post.html">
                                    <img alt="" class="img-responsive" src="<?php echo base_url('asset/upload_img_news/thumb_'.$community->gambar_news); ?>">
                                    </a>
                                    <div class="catname">
                                       <a class="btn btn-maroon" href="#">
                                          <div>Community</div>
                                       </a>
                                    </div>
                                    <div class="hover-show-div">
                                       <a href="" class="post-type">
                                       <i class="ti-music-alt"></i>
                                       </a>
                                    </div>
                                 </div>
                              </div>
                              <div class="detail">
                                 <div class="caption">
                                    <h5>
                                       <a href="standard-post.html"><?php echo $community->judul_news?></a>
                                    </h5>
                                 </div>
                                 <ul class="post-tools">
                                    <li> by <a href=""> <strong> <?php echo $community->posted_by?></strong> </a></li>
                                    <li>  1 Month Ago </li>
                                    <li><a href=""> <i class="ti-thought"></i> 57</a> </li>
                                 </ul>
                              </div>
                           </div>
                        </article>
						<?php } ?>
                     </div>
                  </div>

                  <!--Section Karepmu-->
                  <div class="section">
                     <div class="col-md-12 col-xs-12 col-sm-12 nopadding">
                        <div class="heading colored">
                           <h2 class="main-heading"><Strong>Topik Karepmu</Strong></h2>
                           <span class="heading-ping"></span>
                           <span class="heading-read-more">
                           <a href="#" class="btn btn-black">See all</a>
                           </span>
                        </div>
                     </div>
                     <div class="row">
                        <article class="col-md-6 col-sm-6 col-xs-12">
                           <div class="latest-news-grid grid-1">
                              <div class="picture">
                                 <div class="category-image">
                                    <a href="standard-post.html">
                                    <img alt="" class="img-responsive" src="<?php echo base_url('asset/img/1.jpg'); ?>">
                                    </a>
                                    <div class="catname">
                                       <a class="btn btn-gray" href="#">
                                          <div>Food and Health</div>
                                       </a>
                                    </div>
                                    <div class="hover-show-div">
                                       <a href="" class="post-type">
                                       <i class="ti-music-alt"></i>
                                       </a>
                                    </div>
                                 </div>
                              </div>
                              <div class="detail">
                                 <div class="caption">
                                    <h5>
                                       <a href="standard-post.html">New cookie dough shop opens in NYC to be your best friend</a>
                                    </h5>
                                 </div>
                                 <ul class="post-tools">
                                    <li> by <a href=""><strong> Arsoo</strong> </a></li>
                                    
                                    <li>  March 10, 2017 </li>
                                    
                                    <li><a href=""> <i class="ti-thought"></i> 57</a> </li>
                                 </ul>
                                 <p> Lorem Ipsum is simply dummy text of the printing and typesetting industry. It is a standard dummy text ever since the 1500s. <a href="" class="readmore">Read More</a> </p>
                              </div>
                           </div>
                        </article>
                        <ul class="small-grid">
                           <li class="col-md-6 col-sm-6 col-xs-12">
                              <div class="small-post">
                                 <!--<div class="small-thumb"> <a href="standard-post.html"><img class="" src="images/small-posts/small-7.jpg" alt=""></a> </div>-->

                                 <div class="post-content">
                                    <h3> <a href="standard-post.html">Dogs have great smelling capacity </a> </h3>
                                    <ul class="post-tools">
                                       
                                       <li>  January 09, 2016 </li>
                                       <li title="Comments"> <a href=""><i class="ti-thought"></i> 35 </a></li>
                                    </ul>
                                 </div>
                              </div>
                           </li>
                           <li class="col-md-6 col-sm-6 col-xs-12">
                              <div class="small-post">
                                 <!--<div class="small-thumb"> <a href="standard-post.html"><img class="" src="images/small-posts/small-7.jpg" alt=""></a> </div>-->

                                 <div class="post-content">
                                    <h3> <a href="standard-post.html">People paid migrant workers to stand in line overnight for barbecue pork</a> </h3>
                                    <ul class="post-tools">
                                       
                                       <li>  April 12, 2016 </li>
                                       <li title="Comments"> <a href=""><i class="ti-thought"></i> 56</a> </li>
                                    </ul>
                                 </div>
                              </div>
                           </li>
                           <li class="col-md-6 col-sm-6 col-xs-12">
                              <div class="small-post">
                                 <!--<div class="small-thumb"> <a href="standard-post.html"><img class="" src="images/small-posts/small-7.jpg" alt=""></a> </div>-->

                                 <div class="post-content">
                                    <h3> <a href="standard-post.html">Get a stern talking-to from your parents with Kit Kat's Lunar</a> </h3>
                                    <ul class="post-tools">
                                       
                                       <li>  April 02, 2016 </li>
                                       <li title="Comments"> <a href=""><i class="ti-thought"></i> 90</a> </li>
                                    </ul>
                                 </div>
                              </div>
                           </li>
                           <li class="col-md-6 col-sm-6 col-xs-12">
                              <div class="small-post">
                                 <!--<div class="small-thumb"> <a href="standard-post.html"><img class="" src="images/small-posts/small-7.jpg" alt=""></a> </div>-->

                                 <div class="post-content">
                                    <h3> <a href="standard-post.html">Taco Bell's newest creation may be the grossest fast food invention yet</a> </h3>
                                    <ul class="post-tools">
                                       <li>  July 25, 2016 </li>
                                       <li title="Comments"> <a href=""><i class="ti-thought"></i> 60</a> </li>
                                    </ul>
                                 </div>
                              </div>
                           </li>
                        </ul>
                     </div>
                  </div>

                  <!--Menu Section Shopping-->
                  <div class="section">
                     <div class="col-md-12 col-xs-12 col-sm-12 nopadding">
                        <div class="heading colored">
                           <h2 class="main-heading"><Strong>Shopping</Strong></h2>
                           <span class="heading-ping"></span>
                           <span class="heading-read-more">
                           <a href="#" class="btn btn-black">See all</a>
                           </span>
                        </div>
                     </div>
                     <div class="container">
                        <div class="row">
                           <div class="col-md-8 col-sm-8 col-xs-12">
                              <div id="owl-demo" class="owl-carousel owl-theme">
                                 <!-- Samsung Note 4 -->
                                  <div class="item" style="padding: 10px;">
                                    <div class="post-content">
                                       <img src="<?php echo base_url('asset/img/slide-25.jpg'); ?>"/>
                                       <div style="text-align: center;">
                                          <h4> <a href="#"><strong>Emotions Behind the Photos...</strong></a> </h4>
                                          <div class="product-pic-info-price-cart">
                                             <div class="product-pic-info-price">
                                                <span>Rp 5000000</span>
                                                
                                             </div>
                                             <div class="product-pic-info-cart">
                                                <a class="p-btn" href="#">Lihat Produk</a>
                                             </div>
                                             <div class="clearfix"> </div>
                                          </div>
                                       </div>
                                    </div>
                                  </div>

                                  <!-- Samsung Note 4 -->
                                  <div class="item" style="padding: 10px;">
                                    <div class="post-content">
                                       <img src="<?php echo base_url('asset/img/slide-25.jpg'); ?>"/>
                                       <div style="text-align: center;">
                                          <h4> <a href="#"><strong>Emotions Behind the Photos...</strong></a> </h4>
                                          <div class="product-pic-info-price-cart">
                                             <div class="product-pic-info-price">
                                                <span>Rp 5000000</span>
                                                
                                             </div>
                                             <div class="product-pic-info-cart">
                                                <a class="p-btn" href="#">Lihat Produk</a>
                                             </div>
                                             <div class="clearfix"> </div>
                                          </div>
                                       </div>
                                    </div>
                                  </div>

                                  <!-- Samsung Note 4 -->
                                  <div class="item" style="padding: 10px;">
                                    <div class="post-content">
                                       <img src="<?php echo base_url('asset/img/slide-25.jpg'); ?>"/>
                                       <div style="text-align: center;">
                                          <h4> <a href="#"><strong>Emotions Behind the Photos...</strong></a> </h4>
                                          <div class="product-pic-info-price-cart">
                                             <div class="product-pic-info-price">
                                                <span>Rp 5000000</span>
                                                
                                             </div>
                                             <div class="product-pic-info-cart">
                                                <a class="p-btn" href="#">Lihat Produk</a>
                                             </div>
                                             <div class="clearfix"> </div>
                                          </div>
                                       </div>
                                    </div>
                                  </div>

                                  <!-- Samsung Note 4 -->
                                  <div class="item" style="padding: 10px;">
                                    <div class="post-content">
                                       <img src="<?php echo base_url('asset/img/slide-25.jpg'); ?>"/>
                                       <div style="text-align: center;">
                                          <h4> <a href="#"><strong>Emotions Behind the Photos...</strong></a> </h4>
                                          <div class="product-pic-info-price-cart">
                                             <div class="product-pic-info-price">
                                                <span>Rp 5000000</span>
                                                
                                             </div>
                                             <div class="product-pic-info-cart">
                                                <a class="p-btn" href="#">Lihat Produk</a>
                                             </div>
                                             <div class="clearfix"> </div>
                                          </div>
                                       </div>
                                    </div>
                                  </div>

                                  <!-- Samsung Note 4 -->
                                  <div class="item" style="padding: 10px;">
                                    <div class="post-content">
                                       <img src="<?php echo base_url('asset/img/slide-25.jpg'); ?>"/>
                                       <div style="text-align: center;">
                                          <h4> <a href="#"><strong>Emotions Behind the Photos...</strong></a> </h4>
                                          <div class="product-pic-info-price-cart">
                                             <div class="product-pic-info-price">
                                                <span>Rp 5000000</span>
                                                
                                             </div>
                                             <div class="product-pic-info-cart">
                                                <a class="p-btn" href="#">Lihat Produk</a>
                                             </div>
                                             <div class="clearfix"> </div>
                                          </div>
                                       </div>
                                    </div>
                                  </div>

                                  <!-- Samsung Note 4 -->
                                  <div class="item" style="padding: 10px;">
                                    <div class="post-content">
                                       <img src="<?php echo base_url('asset/img/slide-25.jpg'); ?>"/>
                                       <div style="text-align: center;">
                                          <h4> <a href="#"><strong>Emotions Behind the Photos...</strong></a> </h4>
                                          <div class="product-pic-info-price-cart">
                                             <div class="product-pic-info-price">
                                                <span>Rp 5000000</span>
                                                
                                             </div>
                                             <div class="product-pic-info-cart">
                                                <a class="p-btn" href="#">Lihat Produk</a>
                                             </div>
                                             <div class="clearfix"> </div>
                                          </div>
                                       </div>
                                    </div>
                                  </div>

                                  <!-- Samsung Note 4 -->
                                  <div class="item" style="padding: 10px;">
                                    <div class="post-content">
                                       <img src="<?php echo base_url('asset/img/slide-25.jpg'); ?>"/>
                                       <div style="text-align: center;">
                                          <h4> <a href="#"><strong>Emotions Behind the Photos...</strong></a> </h4>
                                          <div class="product-pic-info-price-cart">
                                             <div class="product-pic-info-price">
                                                <span>Rp 5000000</span>
                                                
                                             </div>
                                             <div class="product-pic-info-cart">
                                                <a class="p-btn" href="#">Lihat Produk</a>
                                             </div>
                                             <div class="clearfix"> </div>
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

               <!--Fitur Wow Fact-->
               <div class="col-md-4 col-sm-12 col-xs-12" id="sidebar">
                  <aside>
                     <div class="widget widget-bg ">
                        <div class="heading">
                           <h2 class="main-heading"><strong>Wow Fact</strong></h2>
                           <span class="heading-ping"></span>
                        </div>
                        <div class="featured-post-slider-single-post owl-carousel owl-theme" style="margin-top: -10px;">
                           <div class="item">
                              <div class="latest-news-grid grid-1">
                                 <div class="picture">
                                    <div class="category-image">
                                       <a href="standard-post.html">
                                       <img alt="" class="img-responsive" src="<?php echo base_url('asset/img/19.jpg'); ?>">
                                       </a>
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
                                          <a href="#">Computer issue forces ground-stop for United Airlines in the U.S.</a>
                                       </h5>
                                    </div>
                                    <p style="text-align: center; font-size: inherit;">
                                       Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim minim veniam, quis nostrud exercitation .
                                    </p><br>
                                    <div class="col-md-12" style="text-align: center;">
                                       <a href="" class="btn btn-colored-blog"> Read More</a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="item">
                              <div class="latest-news-grid grid-1">
                                 <div class="picture">
                                    <div class="category-image">
                                       <a href="standard-post.html">
                                       <img alt="" class="img-responsive" src="<?php echo base_url('asset/img/19.jpg'); ?>">
                                       </a>
                                       <div class="catname">
                                          <a class="btn btn-green" href="#">
                                             <div>Travel</div>
                                          </a>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="detail">
                                    <div class="caption" style="text-align: center;">
                                       <h5>
                                          <a href="#">Computer issue forces ground-stop for United Airlines in the U.S.</a>
                                       </h5>
                                    </div>
                                    <p style="text-align: center; font-size: inherit;">
                                       Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim minim veniam, quis nostrud exercitation .
                                    </p><br>
                                    <div class="col-md-12" style="text-align: center;">
                                       <a href="" class="btn btn-colored-blog"> Read More</a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="item">
                              <div class="latest-news-grid grid-1">
                                 <div class="picture">
                                    <div class="category-image">
                                       <a href="standard-post.html">
                                       <img alt="" class="img-responsive" src="<?php echo base_url('asset/img/19.jpg'); ?>">
                                       </a>
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
                                          <a href="#">Computer issue forces ground-stop for United Airlines in the U.S.</a>
                                       </h5>
                                    </div>
                                    <p style="text-align: center; font-size: inherit;">
                                       Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim minim veniam, quis nostrud exercitation .
                                    </p><br>
                                    <div class="col-md-12" style="text-align: center;">
                                       <a href="" class="btn btn-colored-blog"> Read More</a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="item">
                              <div class="latest-news-grid grid-1">
                                 <div class="picture">
                                    <div class="category-image">
                                       <a href="standard-post.html">
                                       <img alt="" class="img-responsive" src="<?php echo base_url('asset/img/19.jpg'); ?>">
                                       </a>
                                       <div class="catname">
                                          <a class="btn btn-lightblue" href="#">
                                             <div>technology</div>
                                          </a>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="detail">
                                    <div class="caption" style="text-align: center;">
                                       <h5>
                                          <a href="#">Computer issue forces ground-stop for United Airlines in the U.S.</a>
                                       </h5>
                                    </div>
                                    <p style="text-align: center; font-size: inherit;">
                                       Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim minim veniam, quis nostrud exercitation .
                                    </p><br>
                                    <div class="col-md-12" style="text-align: center;">
                                       <a href="" class="btn btn-colored-blog"> Read More</a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>

                     <!--Fitur Search Pepak-->
                     <div class="widget widget-bg">
                        <div class="heading">
                           <h2 class="main-heading"><Strong>Pepak Semarangan</Strong></h2>
                           <span class="heading-ping"></span> 
                        </div>
                        <div class="search-widget">
                              <div class="form-group">
                                 <input placeholder="Goleki" name="search" class="form-control" type="text" id="kata_kunci">
                                 <button onclick="cariKata()"> <i class="fa fa-search"></i></button>
                              </div>
                        </div>
						<div class="detail" style="background:white; padding:10px; display:none" id="notFound">
							<p>Kata tidak ditemukan !</p>
							<p>Tambah kata <b><a id="kata"></a></b> ke dalam <b>Pepak Semarangan</b> ? </p>
							<a onclick="tambah()"><strong>Ya</strong></a>
						</div>
						<div class="detail" style="background:white; padding:10px; display:none" id="hasil">
							<p id="arti"></p>
							<p id="deskripsikata"></p>
						</div>
						<div class="detail" style="background:white; padding:10px; display:none" id="tambah">
							<p>Tambahkan kata <b><a id="katatambah"></a></b></p><br/>
								<input placeholder="Jawa" name="jawa" class="form-control" type="text" id="jawa2"><br/>
								<input placeholder="Indonesia" name="indonesia" class="form-control" type="text" id="indonesia2"><br/>
								<textarea placeholder="Deskripsi Kata" class="form-control" id="deskripsi2"></textarea>
								<button onclick="tambah_pepak()"><i class="glyphicon glyphicon-save" ></i> Tambah</button>
						</div>
                     </div>

                     <!--Fitur Comming Soon-->
                     <div class="widget widget-bg">
                        <div class="heading">
                           <h2 class="main-heading"><strong>Comming Soon</strong></h2>
                           <span class="heading-ping"></span>
                        </div>
                        <div class="ad-div style-box">
                           <a href="<?php echo base_url('asset/img/anforcom2.jpg'); ?>" class="tt-lightbox">
                              <img src="<?php echo base_url('asset/img/anforcom2.jpg'); ?>" class="img-responsive " alt="">
                           </a>
                        </div>
                        <div class="detail">
                           <div class="caption" style="text-align: center;">
                              <h5>
                                 <a href="#"><strong>Judul</strong></a>
                              </h5>
                           </div>
                           <p style="text-align: center;">by <strong> Seza </strong> / on <strong> March 10, 2017</strong></p>
                        </div>
                     </div>

                     <!--Fitur Update Instagram-->
                     <div class="widget widget-bg">
                        <div class="heading">
                           <h2 class="main-heading"><Strong>Update</Strong></h2>
                           <span class="heading-ping"></span> 
                        </div>
                        <div class="col-md-12" style="text-align: center;">
                           <div class="insta-gallery">
                              <a href="<?php echo base_url('asset/img/12.jpg'); ?>" class="tt-lightbox" style="width: 90px;"> 
                                 <img class="img-responsive center-block" alt="" src="<?php echo base_url('asset/img/12.jpg'); ?>">
                              </a>
                              <a href="<?php echo base_url('asset/img/12.jpg'); ?>" class="tt-lightbox" style="width: 90px;"> 
                                 <img class="img-responsive center-block" alt="" src="<?php echo base_url('asset/img/12.jpg'); ?>">
                              </a>
                              <a href="<?php echo base_url('asset/img/12.jpg'); ?>" class="tt-lightbox" style="width: 90px;"> 
                                 <img class="img-responsive center-block" alt="" src="<?php echo base_url('asset/img/12.jpg'); ?>">
                              </a>
                              <a href="<?php echo base_url('asset/img/12.jpg'); ?>" class="tt-lightbox" style="width: 90px;"> 
                                 <img class="img-responsive center-block" alt="" src="<?php echo base_url('asset/img/12.jpg'); ?>">
                              </a>
                              <a href="<?php echo base_url('asset/img/12.jpg'); ?>" class="tt-lightbox" style="width: 90px;"> 
                                 <img class="img-responsive center-block" alt="" src="<?php echo base_url('asset/img/12.jpg'); ?>">
                              </a>
                              <a href="<?php echo base_url('asset/img/12.jpg'); ?>" class="tt-lightbox" style="width: 90px;"> 
                                 <img class="img-responsive center-block" alt="" src="<?php echo base_url('asset/img/12.jpg'); ?>">
                              </a>
                              <a href="<?php echo base_url('asset/img/12.jpg'); ?>" class="tt-lightbox" style="width: 90px;"> 
                                 <img class="img-responsive center-block" alt="" src="<?php echo base_url('asset/img/12.jpg'); ?>">
                              </a>
                              <a href="<?php echo base_url('asset/img/12.jpg'); ?>" class="tt-lightbox" style="width: 90px;"> 
                                 <img class="img-responsive center-block" alt="" src="<?php echo base_url('asset/img/12.jpg'); ?>">
                              </a>
                              <a href="<?php echo base_url('asset/img/12.jpg'); ?>" class="tt-lightbox" style="width: 90px;"> 
                                 <img class="img-responsive center-block" alt="" src="<?php echo base_url('asset/img/12.jpg'); ?>">
                              </a>
                           </div>
                        </div>
                     </div>
                  </aside>
               </div>

            </div>
         </div>
      </section>

      <!--Fitur Ranking Point Member-->
      <section class="photo-gallery-section">
         <div class="col-md-1"></div>
         
            <div class="col-sm-3">
               <hr class="omb_hrOr" style="border-top-width: 2px; border-color: steelblue;">
            </div>
             <div class="col-sm-4">
               <div class="heading colored" style="background-color: white;">
                  <h5 class="main-heading" style="float: unset; text-align: center; border-color: steelblue; color: steelblue;border-radius: 10px;">
                     <Strong>Hyperactive Member</Strong>
                  </h5>
               </div>
            </div>
             <div class="col-sm-3">
               <hr class="omb_hrOr" style="border-top-width: 2px; border-color: steelblue;">
            </div>
         
         <div class="col-md-1"></div>
         <div class="container-flude">
            <div class="row">
               <div class="col-md-12 col-xs-12 col-sm-12" style="padding-bottom: 20px;">
                  <div class="col-sm-1"></div>   
                  <div class="item col-md-2">
                     <a href="<?php echo base_url('asset/img/1.jpg'); ?>" class="tt-lightbox"> 
                        <img class="img-responsive center-block" alt="" src="<?php echo base_url('asset/img/1.jpg'); ?>"> 
                     </a>
                  </div>
                  <div class="item col-md-2">
                     <a href="<?php echo base_url('asset/img/1.jpg'); ?>" class="tt-lightbox"> 
                        <img class="img-responsive center-block" alt="" src="<?php echo base_url('asset/img/1.jpg'); ?>"> 
                     </a>
                  </div>
                  <div class="item col-md-2">
                     <a href="<?php echo base_url('asset/img/1.jpg'); ?>" class="tt-lightbox"> 
                        <img class="img-responsive center-block" alt="" src="<?php echo base_url('asset/img/1.jpg'); ?>"> 
                     </a>
                  </div>
                  <div class="item col-md-2">
                     <a href="<?php echo base_url('asset/img/1.jpg'); ?>" class="tt-lightbox"> 
                        <img class="img-responsive center-block" alt="" src="<?php echo base_url('asset/img/1.jpg'); ?>"> 
                     </a>
                  </div>
                  <div class="item col-md-2">
                     <a href="<?php echo base_url('asset/img/1.jpg'); ?>" class="tt-lightbox"> 
                        <img class="img-responsive center-block" alt="" src="<?php echo base_url('asset/img/1.jpg'); ?>"> 
                     </a>
                  </div>
                  <div class="col-sm-1"></div>
                  
               </div>
            </div>
         </div>
      </section>





	  <script type="text/javascript">
	  function parseXml(str) {
		  if (window.ActiveXObject) {
			var doc = new ActiveXObject('Microsoft.XMLDOM');
			doc.loadXML(str);
			return doc;
		  } else if (window.DOMParser) {
			return (new DOMParser).parseFromString(str, 'text/xml');
		  }
		}

	function cariKata() {
			var kata=document.getElementById("kata_kunci").value;
			$.post('<?php echo site_url('KelolaPepak/cari_kata/'); ?>'+kata, function(dataKata){
			
				var xml = parseXml(dataKata);
				var getKata = xml.documentElement.getElementsByTagName("kata");
				
				if(getKata.length==0){
				
					document.getElementById("hasil").style.display = "none";
					document.getElementById("notFound").style.display = "block";
					document.getElementById("kata").innerHTML = kata;
				}
				else {
				document.getElementById("notFound").style.display = "none";
				document.getElementById("hasil").style.display = "block";
				for (var i = 0; i < getKata.length; i++) {
				  
				  var jawa = getKata[i].getAttribute("jawa");
				  var indonesia=getKata[i].getAttribute("indonesia");
				  var deskripsi_jawa=getKata[i].getAttribute("deskripsi_jawa");
				  
				  document.getElementById("arti").innerHTML = "<b>"+jawa+"</b> yang berarti <b>"+indonesia+"</b>";
				  document.getElementById("deskripsikata").innerHTML = "<strong>"+deskripsi_jawa+"</strong>";
				}
				}
			},"text");
	}
	
	function tambah(){
		var kata=document.getElementById("kata_kunci").value;
		document.getElementById("hasil").style.display = "none";
		document.getElementById("notFound").style.display = "none";
		document.getElementById("tambah").style.display = "block";
		document.getElementById("katatambah").innerHTML = kata;
	}
	
	function tambah_pepak()
	{
		var jawa=document.getElementById("jawa2").value;
		var indonesia=document.getElementById("indonesia2").value;
		var deskripsi=document.getElementById("deskripsi2").value;
			$.ajax({
				url: 'Welcome/tambah_pepak',
				type: 'POST',
				data: {jawa:jawa,indonesia:indonesia,deskripsi:deskripsi},
				success: function(){
							alert('Pepak berhasil ditambahkan');
							location.reload();
						},
				error: function(){
							alert('Pepak gagal ditambahkan');
						}
			});
		
		
	}
	
</script>