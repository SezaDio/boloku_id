     <section class="my-breadcrumb" style="background-image: url(<?php echo base_url('asset/img/register_event.png') ; ?>);">
         <div class="container page-banner">
            <div class="row">
               <div class="col-sm-12 col-md-12 col-xs-12">
                  <h1>&nbsp;</h1>
               </div>
            </div>
         </div>
      </section>

      <!--Main Content-->
      <section>
        <div class="container">
            <div class="row">
               <div class="col-md-12 col-sm-12 col-xs-12">
                     <div class="section listing">
                         <div class="col-md-1"></div>
                        <form onsubmit="return validasi_captcha();" role="form" enctype="multipart/form-data" action="<?php echo site_url('KelolaPendaftar/tambah_pendaftar_check_front/'.$id_event);?>" method="POST">
                       <div class="col-md-10 col-sm-8 col-xs-12 nopadding" style="background-color: white; border-bottom: 1px solid #f44a56; border-top: 1px solid #f44a56; box-shadow: 0 1px 10px #f44a56;">
                          <div class="row">
                            <div class="col-md-12">
                                <div class="col-md-3">
                                    <?php 
                                        if($jenis_event==0)
                                        { 
										  ?><div  style="padding-top: 10px">
										  <h5 style="text-align: center; color: green;"><i class="fa fa-ticket"></i> <strong>Pilih Tiket</strong></h5>
                      <select name="tipe_tiket" required class="form-control" onchange="harga_tiket">
												<option value="">--Pilih Tiket--</option>
												<?php for($i=0;$i<count($tiket);$i++){?>
												<option value="<?php echo $tiket[$i]['nama_tiket']; ?>:<?php echo $tiket[$i]['harga']; ?>:<?php echo $tiket[$i]['id_jenis_tiket']; ?>"><strong><b><?php echo $tiket[$i]['nama_tiket'];?> - Rp. <?php echo $tiket[$i]['harga'];?></b></option>
										  <?php } ?>
                                          </select>
										  <h5 style="text-align: center; color: green;"><span id="harga_tiket"></span></h5>
										  </div>
                                        <?php } 
                                        else 
                                        { 
											
                                          echo "<input name='tipe_tiket' value='0' type='hidden'><h3 style='padding-top: 10px; text-align: center; color: green;'><strong>Free</strong></h3>";
                                        }
                                    ?>
                                </div>
                                <div class="col-md-6" style="border-right: solid 1px #f44a56; border-left: solid 1px #f44a56; text-align: center;">
                                   <h3><strong><?php echo $nama_event; ?></strong></h3>
                                   <h5><?php echo $alamat.", ".$namaKota; ?></h5>
                                </div>
                                <div class="col-md-3" style="padding-top: 14px; text-align: center;">
                                     <?php
                                        $tgl_mulai=date('d-F-Y', strtotime($tgl_mulai));
                                        $tgl_selesai=date('d-F-Y', strtotime($tgl_selesai));

                                        if ($tgl_mulai  == $tgl_selesai) 
                                        {
                                            echo "<h5><i class='glyphicon glyphicon-calendar'></i> ".$tgl_mulai."</h5>";   
                                        }
                                        else
                                        {
                                            echo "<h5> <i class='glyphicon glyphicon-calendar'></i> ".$tgl_mulai." s/d ".$tgl_selesai."</h5>";
                                        }
                                    ?>
                                    
                                    <?php
                                        if ($jam_mulai  == $jam_selesai) 
                                        {
                                            echo "<h5><i class='glyphicon glyphicon-time'></i> ".$jam_mulai."</h5>";   
                                        }
                                        else
                                        {
                                            echo "<h5><i class='glyphicon glyphicon-time'></i> ".$jam_mulai." s/d ".$jam_selesai."</h5>";
                                        }
                                    ?>
                                </div>
                            </div>
                          </div>
                          <hr style="border: solid 1px #f44a56; margin-top: auto; opacity: 0.4;"></hr>
                          
                           <div class="contact-form">
                              <!--Captcha Script-->
                              <script src='https://www.google.com/recaptcha/api.js'></script>
                              <script type="text/javascript">
                                  function validasi_captcha()
                                  {
                                    var captchaValue = $("#g-recaptcha-response").val();

                                    if(captchaValue == '')
                                    {
                                      alert("Silakan centang captcha.");

                                      return false;
                                    }
                                    return true;
                                  }
                              </script>

                              
                                <div class="row">
                                  <div class="col-md-12">
                                     <div class="col-md-6 col-sm-6 col-xs-12">
                                        <div class="form-group">
                                           <input placeholder="Nama Lengkap" id="name" name="nama_pendaftar" class="form-control" required="" type="text" value="<?php 
                                                        if (isset($dataMember['nama_member']))
                                                        {
                                                            echo htmlspecialchars($dataMember['nama_member']);
                                                        }
                                                ?>">
                                        </div>
                                     </div>
                                     <div class="col-md-6 col-sm-6 col-xs-12">
                                        <div class="form-group">
                                           <input placeholder="Email" id="email" name="email" class="form-control" required="" type="email" value="<?php 
                                                        if (isset($dataMember['email']))
                                                        {
                                                            echo htmlspecialchars($dataMember['email']);
                                                        }
                                                ?>">
                                        </div>
                                     </div>
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col-md-12">
                                     <div class="col-md-6 col-sm-6 col-xs-12">
                                        <div class="form-group">
                                           <input placeholder="Nomor Telepon" id="telepon" name="telepon" class="form-control" required="" type="text">
                                        </div>
                                     </div>
                                     <div class="col-md-6 col-sm-6 col-xs-12">
                                        <div class="form-group">
                                           <input placeholder="Alamat" id="username" name="alamat" class="form-control" required="" type="text" value="<?php 
                                                        if (isset($dataMember['username']))
                                                        {
                                                            echo htmlspecialchars($dataMember['username']);
                                                        }
                                                ?>">
                                        </div>
                                     </div>
                                  </div>
                                </div>

                                <!--Pilihan jenis metode pembayaran-->
                                <div class="row" style=" display: <?php if ($jenis_event == 1)
                                                  {
                                                    echo "none";
                                                  }
                                                  else
                                                  {
                                                    echo "block";
                                                  }
                                                  ?>">
                                    <div class="col-md-12">
                                      <div class="col-md-3"></div>
                                      <div class="col-md-6">
                                        <div class="row">
                                          <div class="col-md-12" style="text-align: center;">
                                              <label>Metode Pembayaran :</label>
                                          </div>
                                        </div>
                                        <div class="row">
                                          <div class="col-md-12" style="text-align: center;">
                                            <div class="radio">
                                                <label style="padding-right: 15px;">
                                                    <input onclick="transfer()" style="opacity: 1;" type="radio" name="metode_pembayaran" value=1 <?php if ($jenis_event == 0)
                                                      {
                                                        echo "required";
                                                      }
                                                      ?>>
                                                     Transfer via ATM
                                                </label>
                                                <label>
                                                    <input onclick="e_payment()" style="opacity: 1;" type="radio" name="metode_pembayaran" value=0 <?php if ($jenis_event == 0)
                                                      {
                                                        echo "required";
                                                      }
                                                      ?>>
                                                     E-Payment
                                                </label>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="col-md-3"></div>
                                    </div>
                                </div>

                                <!--Field keterangan metode pembayaran-->
                                <div class="row" style="display: none;" id="keterangan_metode1">
                                  <div class="col-md-12">
                                    <div class="col-md-3"></div>
                                    <div class="col-md-6" style="background-color: ghostwhite; border: 1px solid #f44a56;">
                                      <p>Pembayaran ini dilakukan dengan cara melakukan transfer melalui ATM atau Bank terdekat. Setelah itu peserta diwajibkan melakukan upload bukti transfer pembayaran.</p>
                                    </div>
                                    <div class="col-md-3"></div>
                                  </div>
                                </div>
                                <div class="row" style="display: none;" id="keterangan_metode2">
                                  <div class="col-md-12">
                                    <div class="col-md-3"></div>
                                    <div class="col-md-6" style="background-color: ghostwhite; border: 1px solid #f44a56;">
                                      <p>Pembayaran ini dilakukan secara online melalui situs resmi yang sudah menjalin kerjasama dengan boloku.id.</p>
                                    </div>
                                    <div class="col-md-3"></div>
                                  </div>
                                </div>

                                <!--Field Captcha-->
                                 <div class="row">
                                    <div class="col-md-12">
                                      <div class="col-md-4"></div>
                                      <div class="col-md-4">
                                        <div class="g-recaptcha" data-sitekey="6Ld-nCsUAAAAAIjW1QQJqaUJArycjt_ffSazV_Qc"></div>
                                      </div>
                                      <div class="col-md-4"></div>
                                    </div>
                                 </div>

                                 <input style="display: none;" type="text" name="seat" value=<?php 
                                                                    if($seat==1)
                                                                    { 
                                                                      echo $jumlah_seat;
                                                                    } 
                                                                    else 
                                                                    { 
                                                                      $jumlah_seat = 0;
                                                                      echo $jumlah_seat;
                                                                    }
                                                                ?>>

                                 <div class="row">
                                   <div class="col-md-12 col-sm-12 col-xs-12" style="padding-top: 10px; padding-bottom: 10px;">
                                      <div class="col-md-4"></div>
                                      <div class="col-md-4" style="text-align: center;">
                                        <button class="btn btn-colored-blog" type="submit" value="1" name="submit"><i class="glyphicon glyphicon-pencil"></i> Daftar</button>
                                      </div>
                                      <div class="col-md-4"></div>
                                   </div><br>
                                 </div>
                                 <div class="col-md-3"></div>
                              </form>
                           </div>
                     </div>

                       <div class="col-md-1"></div>
                  </div>
               </div>
            </div>
        </div>
      </section>

      <script type="text/javascript">
        // Fungsi untuk disable display keterangan metode pembayaran
        function transfer()
        {
          document.getElementById("keterangan_metode1").style.display = "block";
          document.getElementById("keterangan_metode2").style.display = "none";
        }
        function e_payment()
        {
          document.getElementById("keterangan_metode1").style.display = "none";
          document.getElementById("keterangan_metode2").style.display = "block";
        }
      </script>

