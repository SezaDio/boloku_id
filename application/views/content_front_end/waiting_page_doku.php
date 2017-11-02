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
                            <div class="col-md-12">
                              <div class="col-md-3"></div>
                              <div class="col-md-6" style="text-align: -webkit-center;">
                                <img style="padding-top: 10px;" src="<?php echo base_url('asset/img/ring.svg'); ?>" class="img-responsive" alt="logo">
                              </div>
                              <div class="col-md-3"></div>
                            </div>
                          </div>

                          <br/>
                          <p style="text-align: center;">Mohon Tunggu<br/>Permintaan anda sedang di proses...</p>
                      </div>
                      <div class="col-md-4"></div>
                </div>

                <!--Field Hidden untuk POST data ke website DOKU-->
                <form action="https://staging.doku.com/Suite/Receive" id="MerchatPaymentPage" name="MerchatPaymentPage" method="POST" >
                   <input type="hidden" name="BASKET" id="BASKET" value="<?php echo htmlspecialchars($data_payment_doku['basket']); ?>">
                   <input type="hidden" name="MALLID" id="MALLID" value="<?php echo $data_payment_doku['mallid']; ?>">
                   <input type="hidden" name="CHAINMERCHANT" id="CHAINMERCHANT" value="<?php echo $data_payment_doku['chainmerchant']; ?>">
                   <input type="hidden" name="CURRENCY" id="CURRENCY" value="<?php echo $data_payment_doku['currency']; ?>">
                   <input type="hidden" name="PURCHASECURRENCY" id="PURCHASECURRENCY" value="<?php echo $data_payment_doku['purchase_currency']; ?>">
                   <input type="hidden" name="AMOUNT" id="AMOUNT" value="<?php echo $data_payment_doku['amount']; ?>">
                   <input type="hidden" name="PURCHASEAMOUNT" id="PURCHASEAMOUNT" value="<?php echo $data_payment_doku['purchase_amount']; ?>">
                   <input type="hidden" name="TRANSIDMERCHANT" id="TRANSIDMERCHANT" value="<?php echo $data_payment_doku['transidmerchant']; ?>">
                   <input type="hidden" name="SHAREDKEY" id="SHAREDKEY" value="WoL1yQ3At72k">
                   <input type="hidden" name="WORDS" id="WORDS" value="<?php echo $data_payment_doku['words']; ?>">
                   <input type="hidden" name="REQUESTDATETIME" id="REQUESTDATETIME" value="">
                   <input type="hidden" name="SESSIONID" id="SESSIONID" value="">
                   <input type="hidden" name="PAYMENTCHANNEL" id="PAYMENTCHANNEL" value="">
                   <input type="hidden" name="EMAIL" id="EMAIL" value="<?php echo $data_payment_doku['email']; ?>">
                   <input type="hidden" name="NAME" id="NAME" value="<?php echo $data_payment_doku['name']; ?>">
                </form>
                 <script type="text/javascript">
                   getRequestDateTime();
                   genSessionID();
                 </script>
              </div>
            </div>
        </div>
      </section>


