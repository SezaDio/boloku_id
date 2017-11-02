<!DOCTYPE html>
<html lang="en">
   <head>
      <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta name="description" content="">
      <meta name="author" content="boloku.id">

      <title> boloku.id | Invoice Page </title>

      <link rel="shortcut icon" href="<?php echo base_url('asset/img/favicon.ico'); ?>" type="image/x-icon">
      <link rel="icon" href="<?php echo base_url('asset/img/favicon.ico'); ?>" type="image/x-icon">

      <!-- Core Bootstrap File -->
      <link href="<?php echo base_url('asset/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet" type="text/css" />

      <!-- Mega Menu -->
      <link rel="stylesheet" type="text/css" href="<?php echo base_url('asset/css/megaMenu.css'); ?>">

      <!-- Template Core Css -->
      <link href="<?php echo base_url('asset/css/style_front_end.css'); ?>" rel="stylesheet" type="text/css">
      <link href="<?php echo base_url('asset/css/breakingNews.css'); ?>" rel="stylesheet" type="text/css">
      <link href="<?php echo base_url('asset/css/magnific-popup.css'); ?>" rel="stylesheet" type="text/css">

      <!-- ANIMATE CSS -->
      <link href="<?php echo base_url('asset/css/animate.min.css'); ?>" rel="stylesheet" type="text/css">

      <!-- ZERO GRID CSS -->
      <link href="<?php echo base_url('asset/css/zerogrid.css'); ?>" rel="stylesheet" type="text/css">

      <!-- Responsive slider CSS -->
      <link href="<?php echo base_url('asset/css/slider/responsiveslides.css'); ?>" rel="stylesheet" type="text/css">

      <!-- Font Awesome Icons -->
      <link href="<?php echo base_url('asset/css/font-awesome.min.css'); ?>" rel="stylesheet" type="text/css">
      <link rel="stylesheet" href="<?php echo base_url('asset/css/themify-icons.css'); ?>" type="text/css">

      <!-- Owl Slider Css -->
      <link href="<?php echo base_url('asset/css/owl.carousel.css'); ?>" rel="stylesheet" type="text/css">
      <link href="<?php echo base_url('asset/css/owl.theme.default.css'); ?>" rel="stylesheet" type="text/css">


      <!-- Theme Color -->
      <link rel="stylesheet" id="color" href="<?php echo base_url('asset/css/colors/defualt.css'); ?>">

      <!-- For Style Switcher -->
      <link rel="stylesheet" id="theme-color" type="text/css" href="#" />

      <script language="JavaScript" type="text/javascript" src="https://staging.doku.com/dateformat.js"></script>
      <script language="JavaScript" type="text/javascript" src="https://staging.doku.com/sha-1.js"></script>

      <script type="text/javascript">
         function getRequestDateTime() {
           var now = new Date();
           document.MerchatPaymentPage.REQUESTDATETIME.value = dateFormat(now, "yyyymmddHHMMss");  
         }

         function selesai()
         {
           document.MerchatPaymentPage.submit();
           clearTimeout(timeID);
         }

         function timer() 
         {
           timeID=setTimeout("selesai()",3000);
         }

         function randomString(STRlen) {
            var chars = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXTZabcdefghiklmnopqrstuvwxyz";
            var string_length = STRlen;
            var randomstring = '';
            for (var i=0; i<string_length; i++) {
               var rnum = Math.floor(Math.random() * chars.length);
               randomstring += chars.substring(rnum,rnum+1);
            }

            return randomstring;

         }

         function genSessionID() 
         {  
            document.MerchatPaymentPage.SESSIONID.value = randomString(20);
         }
        
      </script>
   </head>

   <body>
      <!--Main Content-->
      <section>
        <div class="container">
            <div class="row">
              <div class="col-md-12">
                <div class="section listing">
                    <div class="col-md-3"></div>

                    <!--Main Content-->
                    <div id="invoice-save" class="col-md-6" style="background-color: white; border-bottom: 1px solid #f44a56; border: 1px solid #f44a56; box-shadow: 0 1px 10px #f44a56;">
                        <div class="row" style="border-bottom: solid 1px #f44a56;">

                          <div class="col-xs-6">
                            <img style="margin-top: 15px; padding-top: 10px; text-align: center;" src="<?php echo base_url('asset/img/Logo_Boloku_new3.png'); ?>" class="img-responsive" alt="logo">
                            <br>
                            <h4 style="margin-top: -15px; text-align: center; color: #f44a56;"><strong>REGIST - PUBLISH - LARIS</strong></h4>
                          </div>
                          <div class="col-xs-6" style="padding-top: 10px;">
                            <table>
                              <tr>
                                <td style="width: 125px;">Date</td>
                                <td style="width: 10px;">:</td>
                                <td><?php echo date('d-M-Y'); ?></td>
                              </tr>
                              <tr>
                                <td>Transaction ID</td>
                                <td>:</td>
                                <td><?php echo $data_doku->transidmerchant; ?></td>
                              </tr>
                              <tr>
                                <td>Transaction Status</td>
                                <td>:</td>
                                <td><?php echo "SUCCESS"; ?></td>
                              </tr>
                              <tr>
                                <td>Payment Code</td>
                                <td>:</td>
                                <td><?php echo $data_doku->paymentcode; ?></td>
                              </tr>
                              <tr>
                                <td>Currency</td>
                                <td>:</td>
                                <td>Rupiah (360)</td>
                              </tr>
                            </table>
                          </div>
                          <br>
                        </div>

                        <!--Daftar Item & Harga-->
                        <div class="row">
                          <div class="col-md-12">
                              <table class="table">
                                <tr>
                                  <td style="width: 10px;">Name</td>
                                  <td style="width: 10px;">:</td>
                                  <td><?php echo $data_pendaftar->nama_pendaftar; ?></td>
                                </tr>
                                <tr>
                                  <td>E-mail</td>
                                  <td>:</td>
                                  <td><?php echo $data_pendaftar->email; ?></td>
                                </tr>
                                <tr>
                                  <td>Phone</td>
                                  <td>:</td>
                                  <td><?php echo $data_pendaftar->telepon; ?></td>
                                </tr>
                              </table>

                              <?php
                                $basket = $data_pendaftar->basket;
                                $data_basket = explode(",", $basket);
                                $item = $data_basket[0];
                                $harga_satuan = $data_basket[1];
                                $jumlah = $data_basket[2];
                                $total_harga = $data_basket[3];
                              ?>

                              <table class="table">
                                <tr>
                                  <td><strong>Item</strong></td>
                                  <td><strong>Amount</strong></td>
                                  <td><strong>Qty</strong></td>
                                  <td><strong>Total Amount</strong></td>
                                </tr>
                                <tr>
                                  <td><?php echo $item; ?></td>
                                  <td><?php echo "Rp ".number_format($harga_satuan,0,",","."); ?></td>
                                  <td><?php echo $jumlah; ?></td>
                                  <td><?php echo "Rp ".number_format($total_harga,0,",","."); ?></td>
                                </tr>
                              </table>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-12" style="padding-bottom: 15px; text-align: center;">
                            <a href="<?php echo base_url(''); ?>"><button class="btn btn-warning hidden-print"><i class="glyphicon glyphicon-home"></i> Back to Home</button></a>
                            <button onclick="PrintDoc()" class="btn btn-primary hidden-print"><i class="glyphicon glyphicon-floppy-save"></i> Save</button>
                          </div>
                        </div>
                        
                        <!--Footer Invoice-->
                        <div class="row" style="border-top: solid 1px #f44a56;">
                          <div class="col-md-12">
                            <div class="col-md-3"></div>
                            <div class="col-md-6" style="text-align: -webkit-center;">
                              Suported By :
                            </div>
                          </div>
                        </div>

                    </div>

                    <div class="col-md-3"></div>
                </div>
              </div>
            </div>
        </div>
      </section>

      <footer style="display: none;" class="footer-2">
         <div class="footer-top">
            <div class="container">
               <div class="row">
                  <div class="col-md-12 col-sm-12 col-xs-12">
                     <div class="footer-block">
                        <img src="<?php echo base_url('asset/img/logo_boloku_putih.png'); ?>" alt="" class="logo-footer">
                        <div class="social-media-icons">
                           <ul>
                              <li> <a href=""><i class="ti-facebook"></i></a></li>
                              <li> <a href=""><i class="ti-twitter"></i></a></li>
                              <li> <a href=""><i class="ti-instagram"></i></a></li>
                              <li> <a href=""><i class="ti-linkedin"></i></a></li>
                              <li> <a href=""><i class="ti-google"></i></a></li>
                              <li> <a href=""><i class="ti-vimeo"></i></a></li>
                              <li> <a href=""><i class="ti-pinterest"></i></a></li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-md-12 col-sm-12 col-xs-12">
                     <div class="footer-footer-area">
                        <div class="copyright"><span>&copy; <?php echo date('Y'); ?> All rights reserved.  Designed By IT Team<a href="">boloku.id</a></span></div>
                        <ul>
                           <li><a href="<?php echo base_url(''); ?>">Home </a></li>
                           <li><a href="<?php echo base_url('event_page'); ?>">Event</a></li>
                           <li><a href="<?php echo base_url('ngertirak'); ?>">Ngerti Rak ?</a></li>
                           <li><a href="<?php echo base_url('faq'); ?>">FAQ</a></li>
                           <li><a href="<?php echo base_url('contact_us'); ?>">Contact Us</a></li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="footer-link">
            <div class="container">
            </div>
         </div>
      </footer>
      <a href="#" class="scrollup"><i class="fa fa-chevron-up"></i></a>

      <!-- ======================================== script tags =============================================== -->

      <!-- Mega Menu Script -->
      <script src="<?php echo base_url('asset/js/megaMenu.min.js?v=2'); ?>" type="text/javascript"></script>

      <!-- Jquery Plugin --> 
      <script src="<?php echo base_url('asset/js/jquery-migrate.min.js'); ?>" type="text/javascript"></script> 

      <!-- Template Custom Js --> 
      <script src="<?php echo base_url('asset/js/custom.js'); ?>" type="text/javascript"></script> 

      <!--Google Analytics-->
      <script>
          (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
          })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
        
          ga('create', 'UA-105226877-1', 'auto');
          ga('send', 'pageview');

          /*--This JavaScript method for Print command--*/
          function PrintDoc() 
          {
            var toPrint = document.getElementById('invoice-save');
            var popupWin = window.open('');
            popupWin.document.open();
            popupWin.document.write('<html><link rel="stylesheet" type="text/css" href="<?php echo base_url('asset/bootstrap/css/bootstrap.min.css'); ?>" /></head><body onload="window.print()">');
            popupWin.document.write(toPrint.outerHTML);
            popupWin.document.write('</html>');
            popupWin.document.close();
          }
      </script>
   </body>
</html>


