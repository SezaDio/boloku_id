	<section class="my-breadcrumb" style="background-image: url(asset/img/eventsbanner2-960x250.jpg);">
         <div class="container page-banner">
            <div class="row">
               <div class="col-sm-12 col-md-12 col-xs-12">
                  <h1>Event</h1>
               </div>
            </div>
         </div>
      </section>

      <!-- Event Search Feature -->
      <div class="color-switcher" id="choose_color" style="width:300px;"> <a href="#." class="picker_close"><i class="glyphicon glyphicon-search"></i></a>
        <h5>Cari Event . . .</h5>
        <div class="col-md-12">
                <div class="box-body">
					<div class="form-group">                     
                        <select name="cari_by_lokasi" placeholder="Lokasi Event" required class="form-control" id="cari_lokasi">
                            <option value="All">--Lokasi Event--</option>
                            <option value="Semarang">Semarang</option>
                            <option value="Jakarta">Jakarta</option>
                            <option value="Jogja">Jogja</option>
                            <option value="Bandung">Bandung</option>
                            <option value="Surabaya">Surabaya</option>
                            <option value="Bogor">Bogor</option>
                            <option value="Padang">Padang</option>
                        </select>
                    </div>

                    <div class="form-group">                     
                        <select name="cari_by_kategori" placeholder="Kategori Event" required class="form-control" id="cari_kategori">
                        	<option value="All">--Kategori Event--</option>
                            <option value="All">All</option>
                            <option value="Seni">Seni</option>
                            <option value="Hobi">Hobi</option>
                            <option value="Bisnis">Bisnis</option>
                            <option value="Musik">Musik</option>
                            <option value="Spirituality">Spirituality</option>
                            <option value="Travel dan Outdoor">Travel & Outdoor</option>
                            <option value="Science dan Teknologi">Science & Tech</option>
                            <option value="Keluarga dan Pendidikan">Keluarga & Pendidikan</option>
                            <option value="Lain-Lain">Lain-lain</option>
                        </select>
                    </div>

                    <div class="form-group">                     
                        <select name="cari_by_tipe" placeholder="Tipe Event" required class="form-control" id="cari_tipe">
                        	<option value="All">--Tipe Event--</option>
                            <option value="All">All</option>
                            <option value="Attraction">Attraction</option>
                            <option value="Class">Class</option>
                            <option value="Conference">Conference</option>
                            <option value="Expo">Expo</option>
                            <option value="Festival">Festival</option>
                            <option value="Game">Game</option>
                            <option value="Party">Party</option>
                            <option value="Performance">Performance</option>
                            <option value="Seminar">Seminar</option>
                            <option value="Tour">Tour</option>
                            <option value="Lain-Lain">Lain-lain</option>
                        </select>
                    </div>

                    <div class="form-group">                     
                        <select name="cari_by_date" placeholder="Date Event" required class="form-control" id="cari_date">
                        	<option value="All">--Date Event--</option>
                            <option value="All">All</option>
                            <option value="Today">Today</option>
                            <option value="Tomorrow">Tomorrow</option>
                            <option value="This Week">This Week</option>
                            <option value="Next Week">Next Week</option>
                            <option value="This Month">This Month</option>
                        </select>
                    </div>

                    <div class="form-group">                     
                        <select name="cari_by_harga" placeholder="Harga Event" required class="form-control" id="cari_harga">
                        	<option value="All">--Harga Event--</option>
                            <option value="1">Gratis</option>
                            <option value="0">Berbayar</option>
                        </select>
                    </div>
                    <div class="form-group">
                    	<button style="width: 100%;" name="cari" class="btn btn-colored-blog pull-right" href="javascript:void(0)" onclick="cariEvent()"><i class="glyphicon glyphicon-search"></i> Cari</button>
                    </div>
                </div>
        </div>
        <div class="clr"> </div>
      </div>

      <section>
        <div class="container">
        <div class="row" >
               <div class="col-md-12 col-sm-12 col-xs-12">
               		<div class="section listing">
               			 <div class="col-md-1"></div>
	                     <article class="col-md-10 col-sm-12 col-xs-12">
	                        <div class="row" id="div_all">
							
	                        <?php foreach($listEvent as $event){ ?>
	                           <div class="grid-1" style="border-top:solid 1px #f44a56; box-shadow: 0 1px 10px #f44a56;">
	                           	 <a href="<?php echo base_url('FrontControl_Event/event_click/'.$event['id_coming']); ?>">
	                              <ul>
	                              	<div class="col-md-12" style="padding: 10px;">
		                                 <li class="col-md-4 col-sm-3 col-xs-12 nopadding">
		                                    <div class="thumb"> <img src="<?php echo base_url('asset/upload_img_coming/thumb_'.$event['path_gambar']); ?>" alt="">
		                                    </div>
		                                 </li>
		                                 <li class="col-md-8 col-sm-9 col-xs-12">
		                                    <div class="desc post-content">
		                                       <h5><a href="<?php echo base_url('FrontControl_Event/event_click/'.$event['id_coming']); ?>"><?php echo $event['nama_coming'];?></a></h5>
		                                       <ul class="post-tools">
		                                          <li>by <a href=""><strong> <?php echo $event['posted_by'];?></strong> </a></li>
		                                          <li>  <?php echo $event['tanggal_posting'];?></li>
		                                          
		                                       </ul>
		                                       <p> <?php echo $event['deskripsi_coming'];?><a href="<?php echo base_url('FrontControl_Event/event_click/'.$event['id_coming']); ?>" class="readmore"><strong>Read More</strong></a> </p>
			                                   <hr style="border: solid 1px #f44a56; margin-top: auto; opacity: 0.4;"></hr>

			                                   	<div class="row">
			                                   		<div class="col-md-12">
					                                   	<a style="margin-top: -25px;" href="javascript:void(0)" class=" btn btn-green btn-small" onclick="byLabel('jenis_event','<?php echo $event['jenis_event']?>')"><i class="ti-money"></i> <?php if($event['jenis_event']==0){?>Berbayar<?php } else{ ?>Gratis<?php } ?></a>

					                                   	<a style="margin-top: -25px;" href="javascript:void(0)" class=" btn btn-dark-red" onclick="byLabel('kategori_coming','<?php echo $event['kategori_coming']?>')"><?php echo $event['kategori_coming']; ?></a>
					                                   	
					                                   	<a style="margin-top: -25px;" href="javascript:void(0)" class=" btn btn-orange" onclick="byLabel('tipe_event','<?php echo $event['tipe_event']?>')"><?php echo $event['tipe_event']; ?></a>
					                                </div>
				                                </div>
		                                    </div>
		                                 </li>
		                            </div>
	                              </ul>
	                             </a>
	                           </div>
		                    <?php } ?>   
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
							<div class="row" id="div_kategori"></div>
	                     </article>


	                     <div class="col-md-1"></div>
                  
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
					
	  function byLabel(label,value){
		$.post('<?php echo site_url('KelolaComing/by_label/'); ?>', {label: label,value:value}, function(dataEvent){
		
			var xml = parseXml(dataEvent);
			var getEvent = xml.documentElement.getElementsByTagName("event");
			if(value==1){value="Gratis";} 
			if(value==0) {value="Berbayar";}			
			document.getElementById("div_all").style.display = "none";
			document.getElementById("div_kategori").style.display = "block";
			var divkategori='';
			divkategori += '<div class="parallel-post-style">';
			divkategori += '<div class="alert alert-success alert-dismissable">';
                    divkategori += '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true" onclick="byAll()">&times;</span></button>';
                    divkategori += '<div><h3><b>'+getEvent.length+'</b> event untuk pencarian <b>'+value+'</b></h3><br/></div>';
                divkategori += '</div>';
			
			for (var i = 0; i < getEvent.length; i++) {
			  
			  var id_event = getEvent[i].getAttribute("id_event");
			  var nama_event = getEvent[i].getAttribute("nama_event");
			  var deskripsi_event = getEvent[i].getAttribute("deskripsi_event");
			  var posted_by = getEvent[i].getAttribute("posted_by");
			  var tanggal_posting = getEvent[i].getAttribute("tanggal_posting");
			  var kategori_event = getEvent[i].getAttribute("kategori_event");
			  var tipe_event = getEvent[i].getAttribute("tipe_event");
			  var jenis_event = getEvent[i].getAttribute("jenis_event");
			  var path_gambar = getEvent[i].getAttribute("path_gambar");
			  		  
			  var jenis='';
			  if (jenis_event==0) {jenis += 'Berbayar';}
			  if (jenis_event==1) {jenis += 'Gratis';}
			  var label_jenis = "'jenis_event'";
			  var label_kategori = "'kategori_coming'";
			  var label_tipe = "'tipe_event'";
			  
			  var value_jenis = "'"+jenis_event+"'";
			  var value_kategori = "'"+kategori_event+"'";
			  var value_tipe = "'"+tipe_event+"'";
			  
			  var getUrl = window.location;
			  var baseUrl = getUrl .protocol + "//" + getUrl.host + "/" + getUrl.pathname.split('/')[1];
			  divkategori += '<div class="grid-1" style="border-top:solid 1px #f44a56; box-shadow: 0 1px 10px #f44a56;">';
	            divkategori += '<a href="'+baseUrl+'/FrontControl_Event/event_click/'+id_event+'">'
	                divkategori += '<ul>';
	                    divkategori += '<div class="col-md-12" style="padding: 10px;">';
		                    divkategori += '<li class="col-md-4 col-sm-3 col-xs-12 nopadding">';
		                        divkategori += '<div class="thumb"> <img src="'+baseUrl+'/asset/upload_img_coming/thumb_'+path_gambar+'" alt=""></div>';
		                    divkategori += '</li>';
		                    divkategori += '<li class="col-md-8 col-sm-9 col-xs-12">';
								divkategori += '<div class="desc post-content">';
									divkategori += '<h5><a href="'+baseUrl+'/FrontControl_Event/event_click/'+id_event+'">'+nama_event+'</a></h5>';
		                            divkategori += '<ul class="post-tools">';
									    divkategori += '<li>by <a href=""><strong> '+posted_by+'</strong> </a></li>';
		                                divkategori += '<li>'+tanggal_posting+'</li>';
		                            divkategori += '</ul>';
		                            divkategori += '<p>'+deskripsi_event+'<a href="'+baseUrl+'/FrontControl_Event/event_click/'+id_event+'" class="readmore"><strong>Read More</strong></a> </p>';
			                        divkategori += '<hr style="border: solid 1px #f44a56; margin-top: auto; opacity: 0.4;"></hr>';
			                        divkategori += '<a style="margin-top: -25px;" href="javascript:void(0)" class=" btn btn-green btn-small" onclick="byLabel('+label_jenis+','+value_jenis+')"><i class="ti-money"></i>'+jenis+'</a>';
			                        divkategori += '<a style="margin-top: -25px;" href="javascript:void(0)" class=" btn btn-dark-red" onclick="byLabel('+label_kategori+','+value_kategori+')">'+kategori_event+'</a>';
			                        divkategori += '<a style="margin-top: -25px;" href="javascript:void(0)" class=" btn btn-orange" onclick="byLabel('+label_tipe+','+value_tipe+')">'+tipe_event+'</a>';
		                        divkategori += '</div>';
		                    divkategori += '</li>';
		                divkategori += '</div>';
	                divkategori += '</ul>';
	            divkategori += '</a>';
	          divkategori += '</div>';
			}
			divkategori += "</div>";
			document.getElementById("div_kategori").innerHTML = divkategori;
			//}
		},"text");
	  }
	  
	  function cariEvent(){
		var lokasi = $("#cari_lokasi").val();
		var kategori = $("#cari_kategori").val();
		var tipe = $("#cari_tipe").val();
		var date = $("#cari_date").val();
		var harga = $("#cari_harga").val();
		
		$.post('<?php echo site_url('KelolaComing/cari_event/'); ?>', {lokasi:lokasi,kategori:kategori,tipe:tipe,date:date,harga:harga}, function(dataEvent){
		
			var xml = parseXml(dataEvent);
			var getEvent = xml.documentElement.getElementsByTagName("event");
			
			if(lokasi=="All"){lokasi='';}
			if(kategori=="All"){kategori='';}
			if(tipe=="All"){tipe='';}
			if(date=="All"){date='';}
			
			if(harga==1){harga='Gratis';}
			if(harga==0){harga='Berbayar';}
			if(harga=="All"){harga='';}
			document.getElementById("div_all").style.display = "none";
			document.getElementById("div_kategori").style.display = "block";
			var divkategori='';
			divkategori += '<div class="parallel-post-style">';
				divkategori += '<div class="alert alert-success alert-dismissable">';
                    divkategori += '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true" onclick="byAll()">&times;</span></button>';
                    divkategori += '<div><h3><b>'+getEvent.length+'</b> event untuk pencarian <b><i>'+lokasi+'</i></b>&nbsp<b><i>'+kategori+'</i></b>&nbsp<b></i>'+tipe+'</i></b>&nbsp<b><i>'+date+'</i></b>&nbsp<b><i>'+harga+'</i></b></h3><br/></div>';                          
                divkategori += '</div>';
			
			for (var i = 0; i < getEvent.length; i++) {
			  
			  var id_event = getEvent[i].getAttribute("id_event");
			  var nama_event = getEvent[i].getAttribute("nama_event");
			  var deskripsi_event = getEvent[i].getAttribute("deskripsi_event");
			  var posted_by = getEvent[i].getAttribute("posted_by");
			  var tanggal_posting = getEvent[i].getAttribute("tanggal_posting");
			  var kategori_event = getEvent[i].getAttribute("kategori_event");
			  var tipe_event = getEvent[i].getAttribute("tipe_event");
			  var jenis_event = getEvent[i].getAttribute("jenis_event");
			  var path_gambar = getEvent[i].getAttribute("path_gambar");
			  		  
			  var jenis='';
			  if (jenis_event==0) {jenis += 'Berbayar';}
			  if (jenis_event==1) {jenis += 'Gratis';}
			  var label_jenis = "'jenis_event'";
			  var label_kategori = "'kategori_coming'";
			  var label_tipe = "'tipe_event'";
			  
			  var value_jenis = "'"+jenis_event+"'";
			  var value_kategori = "'"+kategori_event+"'";
			  var value_tipe = "'"+tipe_event+"'";
			  
			  var getUrl = window.location;
			  var baseUrl = getUrl .protocol + "//" + getUrl.host + "/" + getUrl.pathname.split('/')[1];
			  divkategori += '<div class="grid-1" style="border-top:solid 1px #f44a56; box-shadow: 0 1px 10px #f44a56;">';
	            divkategori += '<a href="'+baseUrl+'/FrontControl_Event/event_click/'+id_event+'">'
	                divkategori += '<ul>';
	                    divkategori += '<div class="col-md-12" style="padding: 10px;">';
		                    divkategori += '<li class="col-md-4 col-sm-3 col-xs-12 nopadding">';
		                        divkategori += '<div class="thumb"> <img src="'+baseUrl+'/asset/upload_img_coming/thumb_'+path_gambar+'" alt=""></div>';
		                    divkategori += '</li>';
		                    divkategori += '<li class="col-md-8 col-sm-9 col-xs-12">';
								divkategori += '<div class="desc post-content">';
									divkategori += '<h5><a href="'+baseUrl+'/FrontControl_Event/event_click/'+id_event+'">'+nama_event+'</a></h5>';
		                            divkategori += '<ul class="post-tools">';
									    divkategori += '<li>by <a href=""><strong> '+posted_by+'</strong> </a></li>';
		                                divkategori += '<li>'+tanggal_posting+'</li>';
		                            divkategori += '</ul>';
		                            divkategori += '<p>'+deskripsi_event+'<a href="'+baseUrl+'/FrontControl_Event/event_click/'+id_event+'" class="readmore"><strong>Read More</strong></a> </p>';
			                        divkategori += '<hr style="border: solid 1px #f44a56; margin-top: auto; opacity: 0.4;"></hr>';
			                        divkategori += '<a style="margin-top: -25px;" href="javascript:void(0)" class=" btn btn-green btn-small" onclick="byLabel('+label_jenis+','+value_jenis+')"><i class="ti-money"></i>'+jenis+'</a>';
			                        divkategori += '<a style="margin-top: -25px;" href="javascript:void(0)" class=" btn btn-dark-red" onclick="byLabel('+label_kategori+','+value_kategori+')">'+kategori_event+'</a>';
			                        divkategori += '<a style="margin-top: -25px;" href="javascript:void(0)" class=" btn btn-orange" onclick="byLabel('+label_tipe+','+value_tipe+')">'+tipe_event+'</a>';
		                        divkategori += '</div>';
		                    divkategori += '</li>';
		                divkategori += '</div>';
	                divkategori += '</ul>';
	            divkategori += '</a>';
	          divkategori += '</div>';
			}
			divkategori += "</div>";
			document.getElementById("div_kategori").innerHTML = divkategori;
			//}
		},"text");
	  }
	  
	  </script>