
      <section class="zerogrid-section" style="padding-bottom: 30px;">
         <div class="container-fluid">
            <div class="row">
               <ul class="rslides" id="slider1" style="max-height: 400px; max-width: 1350px;">
			         <?php foreach($listSlider as $item){ ?>
                    <li>
                        <img alt="" src="<?php echo base_url('asset/upload_img_header/'.$item['path_gambar']); ?>">
                    </li>
			         <?php } ?>
               </ul>
            </div>
         </div>
      </section>

      <!--Fitur Top Event-->
      <section class="photo-gallery-section">
         <div class="col-md-1"></div>
         
         <div class="col-sm-3">
            <hr class="omb_hrOr" style="border-top-width: 2px; border-color: #f44a56;">
         </div>
         <div class="col-sm-4">
            <div class="heading colored" style="background-color: white;">
               <h5 class="main-heading" style="float: unset; text-align: center; border-color: #f44a56; color: #f44a56;border-radius: 10px;">
                  <Strong>Top Event</Strong>
               </h5>
            </div>
         </div>
         <div class="col-sm-3">
            <hr class="omb_hrOr" style="border-top-width: 2px; border-color: #f44a56;">
         </div>
      
         <div class="col-md-1"></div>
         <div class="container-flude">
            <div class="row">
               <div class="col-md-12 col-xs-12 col-sm-12" style="padding-bottom: 20px;">
				  <?php foreach($listTopEvent as $topevent){ ?>
                  <a href="<?php echo site_url('/'.$topevent['id_coming'].'?ev='.strtolower(str_replace(" ","-",$topevent['nama_coming']))); ?>">
                     <div class="item col-md-4" style="padding-bottom: 10px; text-align: center;">
                        <div class="picture">
                           <div class="category-image">
                              <a href="<?php echo site_url('/'.$topevent['id_coming'].'?ev='.strtolower(str_replace(" ","-",$topevent['nama_coming']))); ?>"> 
                                 <img style="border: solid 3px #444;" class="img-responsive" alt="" src="<?php echo base_url('asset/upload_img_coming/thumb_'.$topevent['path_gambar']); ?>"> 
                              </a>
                           </div>
                        </div>
                        <?php
                           $tanggal_mulai = strtotime($topevent['tgl_mulai']);
                           $tanggal = date("j", $tanggal_mulai);
                           $bulan = date("M", $tanggal_mulai);
                        ?>
                        
                        <?php 
                           if ($topevent['tgl_selesai'] < date("Y-m-d")) 
                           { ?>
                              <div class="hover-show-div" style="margin-right: 20px; margin-top: -12px;  border: 2px solid #f44a56; border-radius:5px;">
                                 <div style="color: white; font-size: 1.5em; text-align: center; padding: 5px; background-color: #f44a56;">
                                    <strong>Closed</strong>
                                 </div>
                              </div>
                              
                              <div class="hover-show-div" style="margin-right: 30px; margin-top: 30px;  border: 2px solid #FAFAFA; border-radius:5px;  opacity: 0.8;">
                                  <div style="text-align: center; width: 60px; padding: 5px; background-color: #FAFAFA; font-size: 1.5em; opacity: 1"><strong><?php echo $bulan; ?></strong></div>
                                  <div style="font-size: 2em; text-align: center; padding: 5px; background-color: #FAFAFA; border-top:1px solid #E6E6E6 ;opacity: 1"><strong><?php echo $tanggal; ?></strong></div>
                              </div>
                     <?php } 
                           else
                           { ?>
                                <div class="hover-show-div" style="margin-right: 12px; margin-top: -12px;  border: 2px solid #FAFAFA; border-radius:5px;  opacity: 0.8;">
                                  <div style="text-align: center; width: 60px; padding: 5px; background-color: #FAFAFA; font-size: 1.5em; opacity: 1"><strong><?php echo $bulan; ?></strong></div>
                                  <div style="font-size: 2em; text-align: center; padding: 5px; background-color: #FAFAFA; border-top:1px solid #E6E6E6 ;opacity: 1"><strong><?php echo $tanggal; ?></strong></div>
                                </div>
                     <?php }?>
                        
                        <div class="post-content" style="background-color: #444;">
                           <div class="catname">
                              <?php if($topevent['jenis_event']==0){?><a href="javascript:void(0)" class=" btn btn-green btn-xs" onclick="byLabel('jenis_event','0')"><i class="ti-money" ></i>Berbayar<?php } else{ ?> <a href="javascript:void(0)" class=" btn btn-green btn-xs" onclick="byLabel('jenis_event','1')"><i class="ti-money" ></i>Gratis<?php } ?></a>
                                 
                                 <?php
                                    if ($topevent['tipe_event'] == "Attraction")
                                    { ?>
                                       <a class="btn btn-yellow btn-xs" href="javascript:void(0)" onclick="byLabel('tipe_event','Attraction')">
                                          <div>
                                             # <?php echo $topevent['tipe_event'] ?>
                                          </div>
                                       </a>
                              <?php }
                                    elseif ($topevent['tipe_event'] == "Class")
                                    { ?>
                                       <a class="btn btn-gray btn-xs" href="javascript:void(0)" onclick="byLabel('tipe_event','Class')">
                                          <div>
                                             # <?php echo $topevent['tipe_event'] ?>
                                          </div>
                                       </a>
                              <?php }
                                    elseif ($topevent['tipe_event'] == "Conference")
                                    { ?>
                                       <a class="btn btn-blue btn-xs" href="javascript:void(0)" onclick="byLabel('tipe_event','Class')">
                                          <div>
                                             # <?php echo $topevent['tipe_event'] ?>
                                          </div>
                                       </a>
                              <?php }
                                    elseif ($topevent['tipe_event'] == "Expo")
                                    { ?>
                                       <a class="btn btn-dark-red btn-xs" href="javascript:void(0)" onclick="byLabel('tipe_event','Expo')">
                                          <div>
                                             # <?php echo $topevent['tipe_event'] ?>
                                          </div>
                                       </a>
                              <?php }
                                    elseif ($topevent['tipe_event'] == "Festival")
                                    { ?>
                                       <a class="btn btn-orange btn-xs" href="javascript:void(0)" onclick="byLabel('tipe_event','Festival')">
                                          <div>
                                             # <?php echo $topevent['tipe_event'] ?>
                                          </div>
                                       </a>
                              <?php }
                                    elseif ($topevent['tipe_event'] == "Game")
                                    { ?>
                                       <a class="btn btn-green btn-xs" href="javascript:void(0)" onclick="byLabel('tipe_event','Game')">
                                          <div>
                                             # <?php echo $topevent['tipe_event'] ?>
                                          </div>
                                       </a>
                              <?php }
                                    elseif ($topevent['tipe_event'] == "Party")
                                    { ?>
                                       <a class="btn btn-red btn-xs" href="javascript:void(0)" onclick="byLabel('tipe_event','Party')">
                                          <div>
                                             # <?php echo $topevent['tipe_event'] ?>
                                          </div>
                                       </a>
                              <?php }
                                    elseif ($topevent['tipe_event'] == "Performance")
                                    { ?>
                                       <a class="btn btn-purple btn-xs" href="javascript:void(0)" onclick="byLabel('tipe_event','Performance')">
                                          <div>
                                             # <?php echo $topevent['tipe_event'] ?>
                                          </div>
                                       </a>
                              <?php }
                                    elseif ($topevent['tipe_event'] == "Seminar")
                                    { ?>
                                       <a class="btn btn-blue btn-xs" href="javascript:void(0)" onclick="byLabel('tipe_event','Seminar')">
                                          <div>
                                             # <?php echo $topevent['tipe_event'] ?>
                                          </div>
                                       </a>
                              <?php }
                                    elseif ($topevent['tipe_event'] == "Tour")
                                    { ?>
                                       <a class="btn btn-success btn-xs" href="javascript:void(0)" onclick="byLabel('tipe_event','Tour')">
                                          <div>
                                             # <?php echo $topevent['tipe_event'] ?>
                                          </div>
                                       </a>
                              <?php }
                                    elseif ($topevent['tipe_event'] == "Lain-Lain")
                                    { ?>
                                       <a class="btn btn-gray btn-xs" href="javascript:void(0)" onclick="byLabel('tipe_event','Lain-Lain')">
                                          <div>
                                             # <?php echo $topevent['tipe_event'] ?>
                                          </div>
                                       </a>
                              <?php } 
                                 ?>
                     
                              <!--Label Kategori event-->
                              <?php
                                    if ($topevent['kategori_coming'] == "Seni")
                                    { ?>
                                       <a class="btn btn-purple btn-xs" href="javascript:void(0)" onclick="byLabel('kategori_coming','Seni')">
                                          <div>
                                             # <?php echo $topevent['kategori_coming'] ?>
                                          </div>
                                       </a>
                              <?php }
                                    elseif ($topevent['kategori_coming'] == "Hobi")
                                    { ?>
                                       <a class="btn btn-orange btn-xs" href="javascript:void(0)" onclick="byLabel('kategori_coming','Hobi')">
                                          <div>
                                             # <?php echo $topevent['kategori_coming'] ?>
                                          </div>
                                       </a>
                              <?php }
                                    elseif ($topevent['kategori_coming'] == "Bisnis")
                                    { ?>
                                       <a class="btn btn-primary btn-xs" href="javascript:void(0)" onclick="byLabel('kategori_coming','Bisnis')">
                                          <div>
                                             # <?php echo $topevent['kategori_coming'] ?>
                                          </div>
                                       </a>
                              <?php }
                                    elseif ($topevent['kategori_coming'] == "Musik")
                                    { ?>
                                       <a class="btn btn-dark-red btn-xs" href="javascript:void(0)" onclick="byLabel('kategori_coming','Musik')">
                                          <div>
                                             # <?php echo $topevent['kategori_coming'] ?>
                                          </div>
                                       </a>
                              <?php }
                                    elseif ($topevent['kategori_coming'] == "Spirituality")
                                    { ?>
                                       <a class="btn btn-yellow btn-xs" href="javascript:void(0)" onclick="byLabel('kategori_coming','Spirituality')">
                                          <div>
                                             # <?php echo $topevent['kategori_coming'] ?>
                                          </div>
                                       </a>
                              <?php }
                                    elseif ($topevent['kategori_coming'] == "Travel dan Outdoor")
                                    { ?>
                                       <a class="btn btn-success btn-xs" href="javascript:void(0)" onclick="byLabel('kategori_coming','Travel dan Outdoor')">
                                          <div>
                                             # <?php echo $topevent['kategori_coming'] ?>
                                          </div>
                                       </a>
                              <?php }
                                    elseif ($topevent['kategori_coming'] == "Science dan Teknologi")
                                    { ?>
                                       <a class="btn btn-green btn-xs" href="javascript:void(0)" onclick="byLabel('kategori_coming','Science dana Technology')">
                                          <div>
                                             # <?php echo $topevent['kategori_coming'] ?>
                                          </div>
                                       </a>
                              <?php }
                                    elseif ($topevent['kategori_coming'] == "Keluarga dan Pendidikan")
                                    { ?>
                                       <a class="btn btn-blue btn-xs" href="javascript:void(0)" onclick="byLabel('kategori_coming','Keluarga dan Pendidikan')">
                                          <div>
                                             # <?php echo $topevent['kategori_coming'] ?>
                                          </div>
                                       </a>
                              <?php }
                                    elseif ($topevent['kategori_coming'] == "Lain-Lain")
                                    { ?>
                                       <a class="btn btn-gray btn-xs" href="javascript:void(0)" onclick="byLabel('kategori_coming','Lain-Lain')">
                                          <div>
                                             # <?php echo $topevent['kategori_coming'] ?>
                                          </div>
                                       </a>
                              <?php } 
                                 ?>

                           </div>
                           <h4 style="font-size: medium; color: white;"><strong> <a href="<?php echo site_url('/'.$topevent['id_coming'].'?ev='.strtolower(str_replace(" ","-",$topevent['nama_coming']))); ?>" style="color: white;"> <?php echo $topevent['nama_coming']; ?> </a></strong> </h4>
                           <div class="row">
                              <div class="col-md-12">
                                 <div class="col-md-2"></div>
                                    <div class="col-md-9">
                                       <ul class="post-tools">
                                          <li style="color: white;"> By <a href=""><strong style="color: white;"> <?php echo $topevent['posted_by']; ?></strong></a> </li>
                                          <li> <a style="color: white;" href=""><i class="glyphicon glyphicon-thumbs-up"></i> <?php echo $topevent['like']; ?></a> </li>
                                          <li style="color: white;"><i class="glyphicon glyphicon-eye-open"></i> <?php echo $topevent['hits']; ?></li>
                                       </ul>
                                    </div>
                                 <div class="col-md-1"></div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </a>
                <?php } ?>                    
               </div>
            </div>
         </div>
      </section>

      <section class="main-content">
         <div class="container">
            <div class="row">
               <div class="col-md-8 col-sm-12 col-xs-12">

                  <!--Section New Event-->
                  <div class="section">
                     <div class="col-md-12 col-xs-12 col-sm-12 nopadding">
                        <div class="heading colored">
                           <h2 class="main-heading"><strong>New Event</strong></h2>
                           <span class="heading-ping"></span>
                           <span class="heading-read-more">
                              <a href="<?php echo site_url('event_page'); ?>" class="btn btn-black">See all</a>
                           </span>
                        </div>
                     </div>

                     <!---Main content New Event ditampilkan 8 buah-->
                     <div class="row">
						   <?php foreach($listNewEvent as $newevent){ ?>
                        <a href="<?php echo site_url('/'.$newevent['id_coming'].'?ev='.strtolower(str_replace(" ","-",$newevent['nama_coming']))); ?>">
                           <article class="col-md-6 col-sm-6 col-xs-12">
                              <div class="grid-1" style="height: 377px; box-shadow: 0 1px 10px grey; background-color: white;">
                                 <div class="picture">
                                    <div class="category-image">
                                       <a href="<?php echo base_url('/'.$newevent['id_coming'].'?ev='.strtolower(str_replace(" ","-",$newevent['nama_coming']))); ?>">
                                          <img alt="" class="img-responsive" src="<?php echo base_url('asset/upload_img_coming/thumb_'.$newevent['path_gambar']); ?>">
                                       </a>
                                       <div class="catname">
                                          <?php if($newevent['jenis_event']==0){?><a href="javascript:void(0)" class=" btn btn-green btn-xs" onclick="byLabel('jenis_event','0')"><i class="ti-money" ></i>Berbayar<?php } else{ ?> <a href="javascript:void(0)" class=" btn btn-green btn-xs" onclick="byLabel('jenis_event','1')"><i class="ti-money" ></i>Gratis<?php } ?></a>
                                          <?php
											if ($newevent['tipe_event'] == "Attraction")
											{ ?>
											   <a class="btn btn-yellow btn-xs" href="javascript:void(0)" onclick="byLabel('tipe_event','Attraction')">
												  <div>
													 # <?php echo $newevent['tipe_event'] ?>
												  </div>
											   </a>
										  <?php }
												elseif ($newevent['tipe_event'] == "Class")
												{ ?>
												   <a class="btn btn-gray btn-xs" href="javascript:void(0)" onclick="byLabel('tipe_event','Class')">
													  <div>
														 # <?php echo $newevent['tipe_event'] ?>
													  </div>
												   </a>
										  <?php }
												elseif ($newevent['tipe_event'] == "Conference")
												{ ?>
												   <a class="btn btn-blue btn-xs" href="javascript:void(0)" onclick="byLabel('tipe_event','Conference')">
													  <div>
														 # <?php echo $newevent['tipe_event'] ?>
													  </div>
												   </a>
										  <?php }
												elseif ($newevent['tipe_event'] == "Expo")
												{ ?>
												   <a class="btn btn-dark-red btn-xs" href="javascript:void(0)" onclick="byLabel('tipe_event','Expo')">
													  <div>
														 # <?php echo $newevent['tipe_event'] ?>
													  </div>
												   </a>
										  <?php }
												elseif ($newevent['tipe_event'] == "Festival")
												{ ?>
												   <a class="btn btn-orange btn-xs" href="javascript:void(0)" onclick="byLabel('tipe_event','Festival')">
													  <div>
														 # <?php echo $newevent['tipe_event'] ?>
													  </div>
												   </a>
										  <?php }
												elseif ($newevent['tipe_event'] == "Game")
												{ ?>
												   <a class="btn btn-green btn-xs" href="javascript:void(0)" onclick="byLabel('tipe_event','Game')">
													  <div>
														 # <?php echo $newevent['tipe_event'] ?>
													  </div>
												   </a>
										  <?php }
												elseif ($newevent['tipe_event'] == "Party")
												{ ?>
												   <a class="btn btn-red btn-xs" href="javascript:void(0)" onclick="byLabel('tipe_event','Party')">
													  <div>
														 # <?php echo $newevent['tipe_event'] ?>
													  </div>
												   </a>
										  <?php }
												elseif ($newevent['tipe_event'] == "Performance")
												{ ?>
												   <a class="btn btn-purple btn-xs" href="javascript:void(0)" onclick="byLabel('tipe_event','Performance')">
													  <div>
														 # <?php echo $newevent['tipe_event'] ?>
													  </div>
												   </a>
										  <?php }
												elseif ($newevent['tipe_event'] == "Seminar")
												{ ?>
												   <a class="btn btn-blue btn-xs" href="javascript:void(0)" onclick="byLabel('tipe_event','Seminar')">
													  <div>
														 # <?php echo $newevent['tipe_event'] ?>
													  </div>
												   </a>
										  <?php }
												elseif ($newevent['tipe_event'] == "Tour")
												{ ?>
												   <a class="btn btn-success btn-xs" href="javascript:void(0)" onclick="byLabel('tipe_event','Tour')">
													  <div>
														 # <?php echo $newevent['tipe_event'] ?>
													  </div>
												   </a>
										  <?php }
												elseif ($newevent['tipe_event'] == "Lain-Lain")
												{ ?>
												   <a class="btn btn-gray btn-xs" href="javascript:void(0)" onclick="byLabel('tipe_event','Lain-Lain')">
													  <div>
														 # <?php echo $newevent['tipe_event'] ?>
													  </div>
												   </a>
										  <?php } 
											 ?>
								 
										  <!--Label Kategori event-->
										  <?php
												if ($newevent['kategori_coming'] == "Seni")
												{ ?>
												   <a class="btn btn-purple btn-xs" href="javascript:void(0)" onclick="byLabel('kategori_coming','Seni')">
													  <div>
														 # <?php echo $newevent['kategori_coming'] ?>
													  </div>
												   </a>
										  <?php }
												elseif ($newevent['kategori_coming'] == "Hobi")
												{ ?>
												   <a class="btn btn-orange btn-xs" href="javascript:void(0)" onclick="byLabel('kategori_coming','Hobi')">
													  <div>
														 # <?php echo $newevent['kategori_coming'] ?>
													  </div>
												   </a>
										  <?php }
												elseif ($newevent['kategori_coming'] == "Bisnis")
												{ ?>
												   <a class="btn btn-primary btn-xs" href="javascript:void(0)" onclick="byLabel('kategori_coming','Bisnis')">
													  <div>
														 # <?php echo $newevent['kategori_coming'] ?>
													  </div>
												   </a>
										  <?php }
												elseif ($newevent['kategori_coming'] == "Musik")
												{ ?>
												   <a class="btn btn-dark-red btn-xs" href="javascript:void(0)" onclick="byLabel('kategori_coming','Musik')">
													  <div>
														 # <?php echo $newevent['kategori_coming'] ?>
													  </div>
												   </a>
										  <?php }
												elseif ($newevent['kategori_coming'] == "Spirituality")
												{ ?>
												   <a class="btn btn-yellow btn-xs" href="javascript:void(0)" onclick="byLabel('kategori_coming','Spirituality')">
													  <div>
														 # <?php echo $newevent['kategori_coming'] ?>
													  </div>
												   </a>
										  <?php }
												elseif ($newevent['kategori_coming'] == "Travel dan Outdoor")
												{ ?>
												   <a class="btn btn-success btn-xs" href="javascript:void(0)" onclick="byLabel('kategori_coming','Travel dan Outdoor')">
													  <div>
														 # <?php echo $newevent['kategori_coming'] ?>
													  </div>
												   </a>
										  <?php }
												elseif ($newevent['kategori_coming'] == "Science dan Teknologi")
												{ ?>
												   <a class="btn btn-green btn-xs" href="javascript:void(0)" onclick="byLabel('kategori_coming','Science dana Technology')">
													  <div>
														 # <?php echo $newevent['kategori_coming'] ?>
													  </div>
												   </a>
										  <?php }
												elseif ($newevent['kategori_coming'] == "Keluarga dan Pendidikan")
												{ ?>
												   <a class="btn btn-blue btn-xs" href="javascript:void(0)" onclick="byLabel('kategori_coming','Keluarga dan Pendidikan')">
													  <div>
														 # <?php echo $newevent['kategori_coming'] ?>
													  </div>
												   </a>
										  <?php }
												elseif ($newevent['kategori_coming'] == "Lain-Lain")
												{ ?>
												   <a class="btn btn-gray btn-xs" href="javascript:void(0)" onclick="byLabel('kategori_coming','Lain-Lain')">
													  <div>
														 # <?php echo $newevent['kategori_coming'] ?>
													  </div>
												   </a>
										  <?php } 
											 ?>
                                       </div>
                                       <?php
                                          $tanggal_mulai = strtotime($newevent['tgl_mulai']);
                                          $tanggal = date("j", $tanggal_mulai);
                                          $bulan = date("M", $tanggal_mulai);
                                       ?>
                                       
                                       <?php 
                                           if ($newevent['tgl_selesai'] < date("Y-m-d")) 
                                           { ?>
                                              <div class="hover-show-div" style="margin-right: 10px; margin-top: -12px;  border: 2px solid #f44a56; border-radius:5px;">
                                                 <div style="color: white; font-size: 1.5em; text-align: center; padding: 5px; background-color: #f44a56;">
                                                    <strong>Closed</strong>
                                                 </div>
                                              </div>
                                              
                                              <div class="hover-show-div" style="margin-right: 20px; margin-top: 30px;  border: 2px solid #FAFAFA; border-radius:5px;  opacity: 0.8;">
                                                  <div style="text-align: center; width: 60px; padding: 5px; background-color: #FAFAFA; font-size: 1.5em; opacity: 1"><strong><?php echo $bulan; ?></strong></div>
                                                  <div style="font-size: 2em; text-align: center; padding: 5px; background-color: #FAFAFA; border-top:1px solid #E6E6E6 ;opacity: 1"><strong><?php echo $tanggal; ?></strong></div>
                                              </div>
                                     <?php } 
                                           else
                                           { ?>
                                                <div class="hover-show-div" style="margin-right: 12px; margin-top: -12px;  border: 2px solid #FAFAFA; border-radius:5px;  opacity: 0.8;">
                                                  <div style="text-align: center; width: 60px; padding: 5px; background-color: #FAFAFA; font-size: 1.5em; opacity: 1"><strong><?php echo $bulan; ?></strong></div>
                                                  <div style="font-size: 2em; text-align: center; padding: 5px; background-color: #FAFAFA; border-top:1px solid #E6E6E6 ;opacity: 1"><strong><?php echo $tanggal; ?></strong></div>
                                                </div>
                                     <?php }?>
                                       
                                    </div>
                                 </div>
                                 <div class="detail" style="padding-left: 20px;">
                                    <div class="caption" style="height: 60px;">
                                       <h5>
                                          <a href="<?php echo base_url('/'.$newevent['id_coming'].'?ev='.strtolower(str_replace(" ","-",$newevent['nama_coming']))); ?>">
                                             <?php
                                                $panjang = strlen($newevent['nama_coming']);
                                                if ($panjang > 50)
                                                {
                                                   $isi=strip_tags($newevent['nama_coming']);
                                                   $isi=substr($isi,0,53);
                                                   echo $isi." ...";
                                                }
                                                else
                                                {
                                                   echo $newevent['nama_coming'];
                                                }
                                                
                                             ?>
                                          </a>
                                       </h5>
                                    </div>
                                    
                                    <div class="row">
                                        <div class="col-md-12">
                                            <ul class="post-tools">
                                               <li> by <a href="#"> <strong> <?php echo $newevent['posted_by'];?></strong> </a></li>
                                               <li><i class="glyphicon glyphicon-thumbs-up"></i> <?php echo $newevent['like'];?></a></li>
                                               <li><i class="glyphicon glyphicon-eye-open"></i> <?php echo $newevent['hits'];?></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                       
                                 </div>
                              </div>
                           </article>
                        </a>
						      <?php } ?>
                     </div>

                     <!--Pagination untuk halaman new event-->
                     <div class="pagination-holder">
                        <nav>
                           <?php echo $pagination; ?>
                        </nav>
                     </div>
                  </div>
               </div>

               <!--Fitur Ngerti Rak ?-->
               <div class="col-md-4 col-sm-12 col-xs-12" id="sidebar">
                  <aside>
                     <div class="widget widget-bg" style="box-shadow: 0 1px 7px grey;">
                        <div class="heading">
                           <h2 class="main-heading"><strong>Ngerti Rak ?</strong></h2>
                           <span class="heading-ping"></span>
                        </div>
                        <div class="featured-post-slider-single-post owl-carousel owl-theme" style="margin-top: -10px;">
						<?php foreach($listNgertiRak as $ngertirak){ ?>
                           <div class="item">
                              <div class="latest-news-grid grid-1">
                                 <div class="picture">
                                    <div class="category-image">
                                       <a href="#">
                                          <img alt="" class="img-responsive" src="<?php echo base_url('asset/upload_img_wow/thumb_'.$ngertirak['path_gambar']); ?>">
                                       </a>
                                       <div class="catname">
                                          <?php if($ngertirak['kategori_wow']=='Seni'){?><a href="javascript:void(0)" class=" btn btn-green" onclick="byKategori('Seni')"><div>Seni</div></a><?php } ?>
                                          <?php if($ngertirak['kategori_wow']=='Hobi'){?><a href="javascript:void(0)" class="btn btn-purple" onclick="byKategori('Hobi')"><div>Hobi</div></a><?php } ?>
                                          <?php if($ngertirak['kategori_wow']=='Musik'){?><a href="javascript:void(0)" class=" btn btn-dark-red" onclick="byKategori('Musik')"><div>Musik</div></a><?php } ?>
                                          <?php if($ngertirak['kategori_wow']=='Bisnis'){?><a href="javascript:void(0)" class=" btn btn-red" onclick="byKategori('Bisnis')"><div>Bisnis</div></a><?php } ?>
                                          <?php if($ngertirak['kategori_wow']=='Spirituality'){?><a href="javascript:void(0)" class=" btn btn-orange" onclick="byKategori('Spirituality')"><div>Spirituality</div></a><?php } ?>
                                          <?php if($ngertirak['kategori_wow']=='Science dan Teknologi'){?><a href="javascript:void(0)" class="btn btn-gray" onclick="byKategori('Science dan Teknologi')"><div>Science & Tech</div></a><?php } ?>
                                          <?php if($ngertirak['kategori_wow']=='Travel dan Outdoor'){?><a href="javascript:void(0)" class="btn btn-blue" onclick="byKategori('Travel dan Outdoor')"><div>Travel & Outdoor</div></a><?php } ?>
                                          <?php if($ngertirak['kategori_wow']=='Keluarga dan Pendidikan'){?><a href="javascript:void(0)" class=" btn btn-yellow" onclick="byKategori('Keluarga dan Pendidikan')"><div>Keluarga & Pendidikan</div></a><?php } ?>
                                          <?php if($ngertirak['kategori_wow']=='Lain-Lain'){?><a href="javascript:void(0)" class="btn btn-red" onclick="byKategori('Lain-Lain')"><div>Lain-lain</div></a><?php } ?>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="detail">
                                    <div class="caption" style="text-align: center;">
                                       <h5>
                                          <?php echo $ngertirak['judul_wow'];?>
                                       </h5>
                                    </div>
                                    <p style="text-align: center; font-size: inherit;">
                                       <?php echo $ngertirak['deskripsi'];?>
                                    </p><br>
                                    <div class="col-md-12" style="text-align: center;">
                                       <a href="<?php echo site_url('ngertirak'); ?>" class="btn btn-colored-blog"> See More</a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        <?php } ?>   
                        </div>
                     </div>

                     <!--Fitur Search Pepak-->
                     <div class="widget widget-bg" style="box-shadow: 0 1px 7px grey;">
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

                     <!--Fitur Artikel-->
                     <div class="widget widget-bg" style="box-shadow: 0 1px 7px grey;">
                        <div class="heading">
                           <h2 class="main-heading"><strong>Artikel & Liputan</strong></h2>
                           <span class="heading-ping"></span>
                        </div>
                        
                        <div class="tabs">
                           <div role="tabpanel">
                              <!-- Nav tabs -->
                              <ul class="nav nav-tabs nav-justified" role="tablist">
                                 <li class="active" role="presentation"> 
                                    <a aria-controls="popular" aria-expanded="true" data-toggle="tab"
                                    href="#popular" role="tab">Artikel</a> 
                                 </li>
                                 <li class="" role="presentation"> 
                                    <a aria-controls="liputan" aria-expanded="false"
                                    data-toggle="tab" href="#liputan" role=
                                    "tab">Liputan</a> 
                                 </li>
                              </ul>

                              <div class="tab-content">
                                 <!--Tab Deskripsi Event-->
                                 <div style="background-color: white; padding: 10px;" class="tab-pane active" id="popular" role="tabpanel">
                                    <ul class="tabs-posts">
                                       <?php  $this->load->model('home_models/HomeModels'); foreach($listArtikel as $artikel){ ?>
                                       <li>
                                          <div class="pic"> <a href="<?php echo site_url('artikel/'.$artikel['id_artikel'].'?ev='.strtolower(str_replace(" ","-",$artikel['judul_artikel']))); ?>"><img alt="" class="img-responsive" src="<?php echo base_url('asset/upload_img_artikel/thumb85_'.$artikel['path_gambar']); ?>"></a> </div>
                                          <div class="caption"> <a href="<?php echo site_url('artikel/'.$artikel['id_artikel'].'?ev='.strtolower(str_replace(" ","-",$artikel['judul_artikel']))); ?>"><?php echo $artikel['judul_artikel']; ?></a> </div>
                                          <ul class="post-tools">
                                             <li><i class="glyphicon glyphicon-eye-open"></i> <?php echo $artikel['hits'];?></a></li>
                                             <li title="Comments"> <i class="ti-thought"></i> <?php echo $data['jumlahKomentar'] = $this->HomeModels->jumlah_komentar($artikel['id_artikel']); ?></li>
                                          </ul>
                                       </li>
                                       <?php } ?>
                                    </ul>
                                 </div>

                                 <!--Tab Liputan-->
                                 <div style="background-color: white; padding: 10px;" class="tab-pane" id="liputan" role="tabpanel">
                                    <ul class="tabs-posts">
                                       <?php foreach($listLiputan as $liputan){ ?>
                                       <li>
                                          <div class="pic"> 
                                             <a href="<?php echo site_url('liputan/'.$liputan['id_news'].'?ev='.strtolower(str_replace(" ","-",$liputan['judul_news']))); ?>"><img style="width: 100px;" alt="" class="img-responsive" src="<?php echo base_url('asset/upload_img_news/thumb_'.$liputan['gambar_news']); ?>"></a> 
                                          </div>
                                          <div class="caption"> <a href="<?php echo site_url('liputan/'.$liputan['id_news'].'?ev='.strtolower(str_replace(" ","-",$liputan['judul_news']))); ?>"><?php echo $liputan['judul_news']; ?></a> </div>
                                          <ul class="post-tools">
                                             <li><i class="glyphicon glyphicon-eye-open"></i> <?php echo $liputan['hits'];?></a></li>
                                             <li title="Comments"> <i class="ti-thought"></i> <?php echo $data['jumlahKomentar'] = $this->HomeModels->jumlah_komentar($liputan['id_news']); ?></li>
                                          </ul>
                                       </li>
                                       <?php } ?>
                                    </ul>
                                 </div>

                              </div>

                           </div>
                        </div>
                        
                     </div>

                     <!--Fitur Update challenge Instagram-->
                     <div class="widget widget-bg " style="box-shadow: 0 1px 7px grey;">
                        <div class="heading">
                           <h2 class="main-heading"><strong><?php foreach($namaChallenge->result() as $namachallenge){ echo $namachallenge->nama_challenge; }?></strong></h2>
                           <span class="heading-ping"></span>
                        </div>
                        <div class="featured-post-slider-single-post owl-carousel owl-theme" style="margin-top: -10px;">
						<?php foreach($listChallenge as $challenge){ ?>
                           <div class="item">
                              <div class="latest-news-grid grid-1">
                                 <div class="picture">
                                    <div class="category-image">
                                       <a href="<?php echo base_url('asset/upload_img_challenge/thumb_'.$challenge['path_gambar']); ?>">
                                          <img alt="" class="img-responsive" src="<?php echo base_url('asset/upload_img_challenge/thumb_'.$challenge['path_gambar']); ?>">
                                       </a>
                                    </div>
                                 </div>
                                 <div class="detail">
                                    <div class="caption" style="text-align: center;">
                                       <h5>
                                          <a href="#"><?php echo $challenge['judul_challenge'];?></a>
                                       </h5>
                                    </div>
                                    <p style="text-align: center; font-size: inherit;">
                                       <?php echo $challenge['deskripsi'];?>
                                    </p><br>
                                    
                                 </div>
                              </div>
                           </div>
						<?php } ?>   
                        </div>
                     </div>
                  </aside>
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
	
	function byLabel(label,value){
		var getUrl = window.location;
		var baseUrl = getUrl .protocol + "//"+ getUrl.host;
      
		$.ajax({
				url: ''+baseUrl+'/FrontControl_Event/get_labelvalue',
				type: 'POST',
				data: {label:label,value:value},
				success: function(){
					window.location.href = ""+baseUrl+"/event_page";
				}
		});
	}
	
</script>