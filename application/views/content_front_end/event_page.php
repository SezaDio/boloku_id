	<section class="my-breadcrumb">
         <div class="container page-banner">
            <div class="row">
               <div class="col-sm-12 col-md-12 col-xs-12">
                  <h1>Event</h1>
               </div>
            </div>
         </div>
      </section>

      <!-- Event Search Feature -->
      <div class="color-switcher" id="choose_color" style="width:300px;"> <a href="#." class="picker_close"><i class="fa fa-angle-right"></i></a>
        <h5>Cari Event . . .</h5>
        <div class="col-md-12">
        	<form role="form" enctype="multipart/form-data" action="<?php //echo site_url('KelolaWow/edit_wow/'.$idWow);?>" method="POST">
                <div class="box-body">
					<div class="form-group">                     
                        <select name="lokasi_event" placeholder="Lokasi Event" required class="form-control" id="kategori">
                            <option value="" disabled selected>Lokasi Event</option>
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
                        <select name="kategori_event" placeholder="Lokasi Event" required class="form-control" id="kategori">
                        	<option value="" disabled selected>Kategori Event</option>
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
                        <select name="tipe_event" placeholder="Lokasi Event" required class="form-control" id="kategori">
                        	<option value="" disabled selected>Tipe Event</option>
                            <option value="All">All</option>
                            <option value="Seminar">Seminar</option>
                            <option value="Convention">Convention</option>
                            <option value="Class">Class</option>
                            <option value="Other">Other</option>
                            <option value="Party">Party</option>
                            <option value="Screening">Screening</option>
                        </select>
                    </div>

                    <div class="form-group">                     
                        <select name="date_event" placeholder="Lokasi Event" required class="form-control" id="kategori">
                        	<option value="" disabled selected>Date Event</option>
                            <option value="All">All</option>
                            <option value="Today">Today</option>
                            <option value="Tomorrow">Tomorrow</option>
                            <option value="This Week">This Week</option>
                            <option value="Next Week">Next Week</option>
                            <option value="This Month">This Month</option>
                        </select>
                    </div>

                    <div class="form-group">                     
                        <select name="harga_event" placeholder="Lokasi Event" required class="form-control" id="kategori">
                        	<option value="" disabled selected>Harga Event</option>
                            <option value="Gratis">Gratis</option>
                            <option value="Berbayar">Berbayar</option>
                        </select>
                    </div>
                    <div class="form-group">
                    	<button style="width: 100%;" type="submit" name="cari" class="btn btn-colored-blog pull-right"><i class="glyphicon glyphicon-search"></i> Cari</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="clr"> </div>
      </div>

      <section>
        <div class="container">
            <div class="row">
               <div class="col-md-12 col-sm-12 col-xs-12">
               		<div class="section listing">
               			 <div class="col-md-1"></div>
	                     <article class="col-md-10 col-sm-12 col-xs-12">
	                        <div class="row">
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
			                                   <a style="margin-top: -25px;" href="#" class=" btn btn-green btn-small"><i class="ti-money"></i> <?php if($event['jenis_event']==0){?>Berbayar<?php } else{ ?>Gratis<?php } ?></a>
			                                   <a style="margin-top: -25px;" href="#" class=" btn btn-dark-red"><?php echo $event['kategori_coming']; ?></a>
			                                   <a style="margin-top: -25px;" href="#" class=" btn btn-orange"><?php echo $event['tipe_event']; ?></a>
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
	                     </article>


	                     <div class="col-md-1"></div>
                  </div>
               </div>
            </div>
        </div>
      </section>