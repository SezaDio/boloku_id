
      <section class="zerogrid-section">
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
      </section><br><br>

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
                  <div class="item col-md-4">
                     <a href="#" class="tt-lightbox"> 
                        <img class="img-responsive center-block" alt="" src="<?php echo base_url('asset/upload_img_coming/thumb_'.$topevent['path_gambar']); ?>"> 
                     </a>
                  </div>
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
                              <a href="#" class="btn btn-black">See all</a>
                           </span>
                        </div>
                     </div>

                     <!---Main content New Event ditampilkan 8 buah-->
                     <div class="row">
						   <?php foreach($listNewEvent as $newevent){ ?>
                           <article class="col-md-6 col-sm-6 col-xs-12">
                              <div class="grid-1">
                                 <div class="picture">
                                    <div class="category-image">
                                       <a href="standard-post.html">
                                       <img alt="" class="img-responsive" src="<?php echo base_url('asset/upload_img_coming/thumb_'.$newevent['path_gambar']); ?>">
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
                                          <a href="standard-post.html"><?php echo $newevent['nama_coming'];?></a>
                                       </h5>
                                    </div>
                                    <ul class="post-tools">
                                       <li> by <a href=""> <strong> <?php echo $newevent['posted_by'];?></strong> </a></li>
                                       <li>  5 Hours Ago </li>
                                       <li><a href=""> <i class="ti-thought"></i> 57</a> </li>
                                    </ul>
                                 </div>
                              </div>
                           </article>
						      <?php } ?>
                     </div>

                     <!--Pagination untuk halaman new event-->
                     <div class="pagination-holder">
                        <nav>
                           <ul class="pagination">
                              <li>
                                 <a aria-label="Previous" href=" #"><span aria-hidden="true"><i class="fa fa-angle-left"></i></span></a>
                              </li>
                              <li class="active">
                                 <a href=" #">1 <span class="sr-only">(current)</span></a>
                              </li>
                              <li>
                                 <a href=" #">2</a>
                              </li>
                              <li>
                                 <a href=" #">3</a>
                              </li>
                              <li>
                                 <a aria-label="Next" href=" #"><span aria-hidden="true"><i class="fa fa-angle-right"></i></span></a>
                              </li>
                           </ul>
                        </nav>
                     </div>
                  </div>
               </div>

               <!--Fitur Ngerti Rak ?-->
               <div class="col-md-4 col-sm-12 col-xs-12" id="sidebar">
                  <aside>
                     <div class="widget widget-bg ">
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
                                       <a href="standard-post.html">
                                       <img alt="" class="img-responsive" src="<?php echo base_url('asset/upload_img_wow/'.$ngertirak['path_gambar']); ?>">
                                       </a>
                                       <div class="catname">
                                          <a class="btn btn-maroon" href="#">
                                             <div><?php echo $ngertirak['kategori_wow'];?></div>
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
                                       <?php echo $ngertirak['deskripsi'];?>
                                    </p><br>
                                    <div class="col-md-12" style="text-align: center;">
                                       <a href="" class="btn btn-colored-blog"> See More</a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        <?php } ?>   
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

                     <!--Fitur Artikel-->
                     <div class="widget widget-bg">
                        <div class="heading">
                           <h2 class="main-heading"><strong>Artikel</strong></h2>
                           <span class="heading-ping"></span>
                           <span class="heading-read-more">
                              <a href="#" class="btn btn-black">See all</a>
                           </span>
                        </div>
                        <ul class="tabs-posts">
						<?php foreach($listArtikel as $artikel){ ?>
                           <li>
                              <div class="pic"> <a href="standard-post.html"><img alt="" class="img-responsive" src="<?php echo base_url('asset/upload_img_artikel/thumb_'.$artikel['path_gambar']); ?>"></a> </div>
                              <div class="caption"> <a href="#"><?php echo $artikel['judul_artikel']; ?></a> </div>
                              <ul class="post-tools">
                                 <li title="Comments"> <i class="ti-thought"></i> 105 </li>
                              </ul>
                           </li>
						<?php } ?>
                        </ul>
                     </div>

                     <!--Fitur Update challenge Instagram-->
                     <div class="widget widget-bg ">
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
                                       <a href="standard-post.html">
                                       <img alt="" class="img-responsive" src="<?php echo base_url('asset/upload_img_challenge/'.$challenge['path_gambar']); ?>">
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
	
</script>