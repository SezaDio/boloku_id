      <section class="my-breadcrumb" style="background-image: url(<?php echo base_url('asset/img/ngerti_rak.png') ; ?>);">
         <div class="container page-banner">
            <div class="row">
               <div class="col-sm-12 col-md-12 col-xs-12">
                  <h1 style="color: white;">&nbsp;</h1>
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
	                            <a href="javascript:void(0)" class="btn btn-black" onclick="byAll()">all</a>
                                <a href="javascript:void(0)" class=" btn btn-green" onclick="byKategori('Seni')">Seni</a>
                                <a href="javascript:void(0)" class="btn btn-purple" onclick="byKategori('Hobi')">Hobi</a>
                                <a href="javascript:void(0)" class=" btn btn-dark-red" onclick="byKategori('Musik')">Musik</a>
                                <a href="javascript:void(0)" class=" btn btn-red" onclick="byKategori('Bisnis')">Bisnis</a>
                                <a href="javascript:void(0)" class=" btn btn-orange" onclick="byKategori('Spirituality')">Spirituality</a>
                                <a href="javascript:void(0)" class="btn btn-gray" onclick="byKategori('Science dan Teknologi')">Science & Tech</a>
                                <a href="javascript:void(0)" class="btn btn-blue" onclick="byKategori('Travel dan Outdoor')">Travel & Outdoor</a>
                                <a href="javascript:void(0)" class=" btn btn-yellow" onclick="byKategori('Keluarga dan Pendidikan')">Keluarga & Pendidikan</a>
                                <a href="javascript:void(0)" class="btn btn-red" onclick="byKategori('Lain-Lain')">Lain-lain</a>
                           </span>
                        </div>
                    </div>
               		<div class="row" id="div_all">
	                    <div class="parallel-post-style">
							<?php foreach($listNgertiRak as $ngertirak){?>
	                    	<div class="col-md-4 col-sm-4 col-xs-12">
	                           <div class="item" style="box-shadow: 0 1px 10px #f44a56; background-color: white;">
	                              <div class="latest-news-grid grid-1" style="height: 486px;">
	                                 <div class="picture">
	                                    <div class="category-image">
	                                       
	                                       <img alt="" class="img-responsive" src="<?php echo base_url('asset/upload_img_wow/thumb_'.$ngertirak['path_gambar']); ?>">
	                                       
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
	                                 <div class="detail" style="padding: 15px;">
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
						<!--Pagination untuk halaman new event-->
	                    <div class="pagination-holder">
	                        <nav>
	                           <?php echo $pagination; ?>
	                        </nav>
	                    </div>
               		</div>
					<div class="row" id="div_kategori" style="display:none">
	                    
					</div>
            	</div>

            	
        	</div>
        </div>
      </section>
	  <script>
	  
	  function parseXml(str) {
		  if (window.ActiveXObject) {
			var doc = new ActiveXObject('Microsoft.XMLDOM');
			doc.loadXML(str);
			return doc;
		  } else if (window.DOMParser) {
			return (new DOMParser).parseFromString(str, 'text/xml');
		  }
	  }
	  
	  function byAll(){
		document.getElementById("div_all").style.display = "block";
		document.getElementById("div_kategori").style.display = "none";
	  }
					
	  function byKategori(kategori){
		$.post('<?php echo site_url('KelolaWow/by_kategori/'); ?>'+kategori, function(dataNgerti){
		
			var xml = parseXml(dataNgerti);
			var getNgerti = xml.documentElement.getElementsByTagName("ngerti");
						
			document.getElementById("div_all").style.display = "none";
			document.getElementById("div_kategori").style.display = "block";
			var divkategori='';
			divkategori += '<div class="parallel-post-style">';
			for (var i = 0; i < getNgerti.length; i++) {
			  
			  var id_ngerti = getNgerti[i].getAttribute("id_ngerti");
			  var judul_ngerti = getNgerti[i].getAttribute("judul_ngerti");
			  var deskripsi = getNgerti[i].getAttribute("deskripsi");
			  var tanggal_posting = getNgerti[i].getAttribute("tanggal_posting");
			  var path_gambar = getNgerti[i].getAttribute("path_gambar");
			  		  
			  var label='';
			  if (kategori=='Seni') {label += '<a href="#" class=" btn btn-green"><div>Seni</div></a>';}
			  if (kategori=='Hobi') {label += '<a href="#" class=" btn btn-purple"><div>Hobi</div></a>';}
			  if (kategori=='Musik') {label += '<a href="#" class=" btn btn-dark-red"><div>Musik</div></a>';}
			  if (kategori=='Bisnis') {label += '<a href="#" class=" btn btn-red"><div>Bisnis</div></a>';}
			  if (kategori=='Spirituality') {label += '<a href="#" class=" btn btn-orange"><div>Spirituality</div></a>';}
			  if (kategori=='Science dan Teknologi') {label += '<a href="#" class=" btn btn-gray"><div>Science & Tech</div></a>';}
			  if (kategori=='Travel dan Outdoor') {label += '<a href="#" class=" btn btn-blue"><div>Travel & Outdoor</div></a>';}
			  if (kategori=='Keluarga dan Pendidikan') {label += '<a href="#" class=" btn btn-yellow"><div>Keluarga & Pendidikan</div></a>';}
			  if (kategori=='Lain-Lain') {label += '<a href="#" class=" btn btn-red"><div>Lain-Lain</div></a>';}
			  
			  var getUrl = window.location;
			  var baseUrl = getUrl .protocol + "//"+ getUrl.host;
		 
			  divkategori += '<div class="col-md-4 col-sm-4 col-xs-12">';
	            divkategori += '<div class="item" style="box-shadow: 0 1px 10px #f44a56; background-color: white;">';
	                divkategori += '<div class="latest-news-grid grid-1" style="height: 486px;">';
	                    divkategori += '<div class="picture">';
	                        divkategori += '<div class="category-image">';
	                            divkategori += '<img alt="" class="img-responsive" src="'+baseUrl+'/asset/upload_img_wow/thumb_'+path_gambar+'">';
	                            divkategori += '<div class="catname">';
								divkategori += label;			
	                            divkategori += '</div>';
	                        divkategori += '</div>';
	                    divkategori += '</div>';
	                    divkategori += '<div class="detail" style="padding: 15px;">';
	                        divkategori += '<div class="caption" style="text-align: center;">';
	                            divkategori += '<h5><a href="#">'+judul_ngerti+'</a></h5>';
	                        divkategori += '</div>';
	                        divkategori += '<p style="text-align: center; font-size: inherit;">'+deskripsi+'</p><br>';
	                    divkategori += '</div>';
	                divkategori += '</div>';
	            divkategori += '</div>';
              divkategori += '</div>';
			  
			  
			}
			
			divkategori += "</div>";
			document.getElementById("div_kategori").innerHTML = divkategori;
			//}
		},"text");
	  }
	  
	  </script>