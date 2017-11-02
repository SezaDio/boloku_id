      <!--Main Content-->
      <section>
        <div class="container">
            <div class="row">
              <div class="col-md-12">
                <div class="section listing">
                      <div class="col-md-4"></div>
                      <div class="col-md-4" style="padding: 10px; background-color: white; border-bottom: 1px solid #f44a56; border: 1px solid #f44a56; box-shadow: 0 1px 10px #f44a56;">
                          <div class="row">
                            <div class="col-md-3"></div>
                            <div class="col-md-6">
                              <img style="padding-top: 10px; text-align: center;" src="<?php echo base_url('asset/img/Logo_Boloku_new3.png'); ?>" class="img-responsive" alt="logo">
                            </div>
                            <div class="col-md-3"></div>
                          </div>

                          <!--Spinner loading-->
                          <div class="row">
                              <div class="col-md-12" style="text-align: -webkit-center;">
                                <?php
                                  if ($status == "5511") 
                                  {
                                    echo "<p>Terimakasih telah melakukan pembelian<br>Silahkan selesaikan proses pembayaran anda ...</p>";
                                  }
                                  elseif ($status != "5511" AND $status != "0000") 
                                  {
                                    echo "<p>Maaf proses transaksi GAGAL<br>Silahkan coba kembali ...</p>";
                                  }

                                ?>
                              </div>
                          </div>
                      </div>
                      <div class="col-md-4"></div>
                </div>
              </div>
            </div>
        </div>
      </section>


