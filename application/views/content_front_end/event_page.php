	<section class="my-breadcrumb">
         <div class="container page-banner">
            <div class="row">
               <div class="col-sm-12 col-md-12 col-xs-12">
                  <h1>Event</h1>
               </div>
            </div>
         </div>
      </section>

      <!-- Color Switcher -->
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