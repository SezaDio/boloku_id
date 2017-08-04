     <section class="my-breadcrumb">
         <div class="container page-banner">
            <div class="row">
               <div class="col-sm-12 col-md-12 col-xs-12">
                  <h1>Ticket Page</h1>
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

                       <div class="col-md-10 col-sm-8 col-xs-12 nopadding" style="border-bottom: 1px solid #f44a56; border-top: 1px solid #f44a56; box-shadow: 0 1px 10px #f44a56;">
                          <div class="row">
                            <div class="col-md-12">
                                <div class="col-md-2">
                                    <?php 
                                        if($jenis_event==0)
                                        { 
                                          echo "<h3 style='padding-top: 10px; text-align: center; color: green;'><strong>Rp ".$harga."</strong></h3>";
                                        } 
                                        else 
                                        { 
                                          echo "<h3 style='padding-top: 10px; text-align: center; color: green;'><strong>Free</strong></h3>";
                                        }
                                    ?>
                                </div>
                                <div class="col-md-8" style="border-right: solid 1px #f44a56; border-left: solid 1px #f44a56; text-align: center;">
                                   <h3><strong><?php echo $nama_event; ?></strong></h3>
                                   <h5><?php echo $kota_lokasi; ?></h5>
                                </div>
                                <div class="col-md-2" style="padding-top: 14px; text-align: center;">
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

                              <form onsubmit="return validasi_captcha();" role="form" enctype="multipart/form-data" action="<?php echo site_url('KelolaPendaftar/tambah_pendaftar_check_front/'.$id_event);?>" method="POST">
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

                                 <div class="row">
                                    <div class="col-md-12">
                                      <div class="col-md-4"></div>
                                      <div class="col-md-4">
                                        <div class="g-recaptcha" data-sitekey="6Ld-nCsUAAAAAIjW1QQJqaUJArycjt_ffSazV_Qc"></div>
                                      </div>
                                      <div class="col-md-4"></div>
                                    </div>
                                 </div>

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
