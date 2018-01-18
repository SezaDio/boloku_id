<!DOCTYPE html>
<html lang="en">
   <head>
      <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta name="description" content="">
      <meta name="author" content="boloku.id">

      <title> boloku.id | Pending Payment Page </title>

      <!-- Core Bootstrap File -->
      <link href="<?php echo base_url('asset/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet" type="text/css" />

      <!-- Template Core Css -->
      <link href="<?php echo base_url('asset/css/style_front_end.css'); ?>" rel="stylesheet" type="text/css">
      <link href="<?php echo base_url('asset/css/magnific-popup.css'); ?>" rel="stylesheet" type="text/css">

      <!-- Font Awesome Icons -->
      <link href="<?php echo base_url('asset/css/font-awesome.min.css'); ?>" rel="stylesheet" type="text/css">
      <link rel="stylesheet" href="<?php echo base_url('asset/css/themify-icons.css'); ?>" type="text/css">

      <!-- Theme Color -->
      <link rel="stylesheet" id="color" href="<?php echo base_url('asset/css/colors/defualt.css'); ?>">
   </head>
      
   <body>
      <!--Main Content-->
      <section id="pending-page-save">
        <div class="container">
            <div class="row">
              <div class="col-md-12">
                <div class="section listing">
                      <div class="col-md-3"></div>
                      <div class="col-md-6" style="padding: 10px; background-color: white; border-bottom: 1px solid #f44a56; border: 1px solid #f44a56; box-shadow: 0 1px 10px #f44a56;">
                          <div class="row">
                            <div class="col-md-3"></div>
                            <div class="col-md-6">
                              <img style="padding-top: 10px; text-align: center;" src="<?php echo base_url('asset/img/Logo_Boloku_new3.png'); ?>" class="img-responsive" alt="logo">
                            </div>
                            <div class="col-md-3"></div>
                          </div>

                          <!--Kode Pembayaran-->
                          <div class="row">
                              <div class="col-md-12" style="text-align: center; padding-left: 15px; padding-right: 15px; padding-bottom: 15px; padding-top: 30px;">
                                  <p>Kode Pembayaran Anda</p>
                                  <strong style="color: #f44a56; font-size: x-large;"><?php echo $data_doku->paymentcode; ?></strong>
                              </div>
                          </div>

                          <!--Keterangan Total Harga dan Nomor Invoice-->
                          <div class="row">
                              <div class="col-md-12" style="padding-left: 30px; padding-right: 30px; padding-top: 20px;">
                                  <table class="table">
                                      <tr>
                                        <td> <strong>Total Harga</strong> </td>
                                        <td> <strong>Rp <?php echo number_format($data_doku->totalamount); ?>.00</strong> </td>
                                      </tr>
                                      <tr>
                                        <td> <strong>Nomor Invoice</strong> </td>
                                        <td> <strong> <?php echo $data_doku->transidmerchant; ?></strong> </td>
                                      </tr>
                                      <tr>
                                        <td> <strong>Batas Akhir Pembayaran</strong> </td>
                                        <td> 
                                          <strong style="color: red;"> 
                                                <?php
                                                    $tanggal_pesan = $data_doku->payment_date_time;
                                                    $tanggal = date ('d F Y | H:i:s', strtotime($tanggal_pesan.'+3 hours')); 
                                                    echo $tanggal." WIB";
                                                ?>
                                            </strong>  
                                        </td>
                                      </tr>
                                  </table>
                              </div>
                          </div>

                          <!--Keterangan Cara pembayaran-->
                          <div class="row">
                              <div class="col-md-12" style="padding-left: 30px; padding-right: 30px; padding-bottom: 30px;">
                                  <?php 
                                    if ($data_doku->payment_channel == 35) 
                                    { ?>
                                        <strong style="color: #f44a56;">Cara membayar melalui gerai ALFA Group</strong>
                                        <ol style="margin-left: -20px;" type="number">
                                          <li style="padding-bottom: 5px;"> 
                                              Catat kode pembayaran di atas dan datang ke gerai Alfamart, Alfa Midi, Alfa Express, Lawson atau DAN+DAN terdekat. 
                                          </li>
                                          <li style="padding-bottom: 5px;">
                                              Beritahukan ke kasir bahwa anda ingin melakukan pembayaran DOKU.
                                          </li>
                                          <li style="padding-bottom: 5px;">
                                              Jika kasir tidak mengetahui mengenai pembayaran DOKU, informasikan ke kasir untuk membuka terminal e-transaction, pilih "<b style="color: #f44a56;">2</b>", lalu "<b style="color: #f44a56;">2</b>", lalu "<b style="color: #f44a56;">2</b>" yang akan menampilkan pilihan DOKU.  
                                          </li>
                                          <li style="padding-bottom: 5px;">
                                              Kasir akan menanyakan kode pembayaran. Berikan kode pembayaran anda <strong style="color: #f44a56;"><?php echo $data_doku->paymentcode; ?></strong>. Kasir akan menginformasikan nominal yang harus dibayarkan.
                                          </li>
                                          <li style="padding-bottom: 5px;">
                                              Lakukan pembayaran ke kasir sesuai dengan nominal yang disebutkan. Pembayaran dapat menggunakan uang tunai ayau non tunai. 
                                          </li>
                                          <li style="padding-bottom: 5px;">
                                              Terima struk sebagai bukti bahwa pembayaran telah sudah sukses dilakukan. Notifikasi pembayaran akan langsung diterima oleh Merchant. 
                                          </li>
                                          <li style="padding-bottom: 5px;">
                                              Selesai.
                                          </li>
                                        </ol>
                              <?php } 
                                    elseif ($data_doku->payment_channel == 36) 
                                    { ?>
                                        <strong style="color: #f44a56;">Cara membayar melalui ATM Transfer</strong>
                                        <ol style="margin-left: -20px;" type="number">
                                          <li style="padding-bottom: 5px;"> 
                                              Masukkan PIN. 
                                          </li>
                                          <li style="padding-bottom: 5px;">
                                              Pilih "Transfer". Apabila menggunakan ATM BCA, pilih "Transaksi lainnya" lalu "Transfer".
                                          </li>
                                          <li style="padding-bottom: 5px;">
                                              Pilih "Ke Rek Bank Lain".
                                          </li>
                                          <li style="padding-bottom: 5px;">
                                              Masukkan Kode Bank Permata (013) diikuti 16 digit kode bayar <strong style="color: #f44a56;"><?php echo $data_doku->paymentcode; ?></strong> sebagai rekening tujuan, kemudian tekan "Benar". 
                                          </li>
                                          <li style="padding-bottom: 5px;">
                                              Masukkan Jumlah pembayaran sebesar Rp <?php echo number_format($data_doku->totalamount); ?> (Jumlah yang ditransfer harus sama persis, tidak boleh lebih dan kurang). Jumlah nominal yang tidak sesuai dengan tagihan akan menyebabkan transaksi gagal.
                                          </li>
                                          <li style="padding-bottom: 5px;">
                                              Muncul Layar Konfirmasi Transfer yang berisi nomor rekening tujuan Bank Permata dan Nama beserta jumlah yang dibayar, jika sudah benar, Tekan "Benar".
                                          </li>
                                          <li style="padding-bottom: 5px;">
                                              Selesai.
                                          </li>
                                        </ol>
                                        <br>
                                        <strong style="color: #f44a56;">Cara membayar melalui Internet Banking</strong><br>
                                        <p style="color: blue;"><strong>*Keterangan:</strong> Pembayaran tidak bisa dilakukan di Internet Banking BCA (KlikBCA)</p>
                                        
                                        <ol style="margin-left: -20px;" type="number">
                                          <li style="padding-bottom: 5px;"> 
                                              Login ke dalam akun Internet Banking.
                                          </li>
                                          <li style="padding-bottom: 5px;">
                                              Pilih "Transfer" dan pilih "Bank Lainnya". Pilih Bank Permata (013) sebagai rekening tujuan.
                                          </li>
                                          <li style="padding-bottom: 5px;">
                                              Masukkan jumlah pembayaran sebesar Rp <?php echo number_format($data_doku->totalamount); ?>.
                                          </li>
                                          <li style="padding-bottom: 5px;">
                                              Isi nomor rekening tujuan dengan 16 digit kode pembayaran <strong style="color: #f44a56;"><?php echo $data_doku->paymentcode; ?></strong>. 
                                          </li>
                                          <li style="padding-bottom: 5px;">
                                              Muncul layar konfirmasi Transfer yang berisi nomor rekening tujuan Bank Permata dan Nama beserta jumlah yang dibayar. Jika sudah benar, tekan "Benar".
                                          </li>
                                          <li style="padding-bottom: 5px;">
                                              Selesai.
                                          </li>
                                        </ol>
                              <?php } ?>
                              </div>
                          </div>

                          <!--Tombol Aksi-->
                          <div class="row">
                            <div class="col-md-12" style="padding-bottom: 15px; text-align: center;">
                              <?php 
                                if ($data_doku->response_code == "5511") 
                                { ?>
                                    <a href="<?php echo base_url(''); ?>">
                                        <button class="btn btn-colored-blog">
                                            <i class="glyphicon glyphicon-home"></i> Back to Home
                                        </button>
                                    </a>
                                    <button onclick="PrintDoc()" class="btn btn-primary hidden-print">
                                        <i class="glyphicon glyphicon-floppy-save"></i> Save
                                    </button>
                          <?php } 
                                elseif ($data_doku->response_code != "5511" AND $data_doku->response_code != "0000")
                                { ?>
                                    <a href="<?php echo base_url(''); ?>">
                                        <button class="btn btn-colored-blog">
                                            <i class="glyphicon glyphicon-home"></i> Back to Home
                                        </button>
                                    </a>
                          <?php }?>
                            </div>
                          </div>
                      </div>
                      <div class="col-md-3"></div>
                </div>
              </div>
            </div>
        </div>
      </section>
  </body>

  <script type="text/javascript">
    /*--This JavaScript method for Print command--*/
      function PrintDoc()
      {
        var toPrint = document.getElementById('pending-page-save');
        var popupWin = window.open('');
        popupWin.document.open();
        popupWin.document.write('<html><link rel="stylesheet" type="text/css" href="<?php echo base_url('asset/bootstrap/css/bootstrap.min.css'); ?>" /></head><body onload="window.print()">');
        popupWin.document.write(toPrint.outerHTML);
        popupWin.document.write('</html>');
        popupWin.document.close();
      }
  </script>


