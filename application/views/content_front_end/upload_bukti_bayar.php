<section class="my-breadcrumb" style="background-image: url(<?php echo base_url('asset/img/konfirmasi_pembayaran.png') ; ?>);">
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
					<form role="form" enctype="multipart/form-data" action="<?php echo site_url('KelolaPendaftar/upload_bukti/');?>" method="POST">
	                    <div class="col-md-10 col-sm-8 col-xs-12 nopadding" style="border-top: solid 1px #f44a56; border-bottom: solid 1px #f44a56; background-color: white; box-shadow: 0 1px 10px #f44a56;">
		               	  	<div style="text-align: center;">
		       					<h3><strong>Upload Bukti Pembayaran</h3>
		       					<hr style="border: solid 1px #f44a56; margin-top: auto; opacity: 0.4;"></hr>
		       			  	</div>
		                  	<div class="contact-form">
			                   
							    <div id="div_no_pendaftar" class="row">
							        <div class="col-md-12">
    			                        <div class="col-md-3"></div>
    			                        <div class="col-md-6 col-sm-12 col-xs-12">
    			                           <div class="form-group">
    			                              <input cols="12" rows="1" placeholder="Nomor Peserta" id="no_peserta" name="no_peserta" class="form-control" onpaste="validateNoPeserta()" required >
    			                           </div>
    			                        </div>
    			                        <div class="col-md-3"></div>
    			                    </div>
							    </div>
							    
							    
							    
						    </div>
						    <div class="row">
						        <div class="col-md-12">
						            <div class="col-md-1"></div>
						            <div class="col-md-10">
    							        <b><div id="validate_no_peserta"></div></b>
    								    <div style="padding-top: 20px; padding-bottom: 20px;" class="col-md-7 col-sm-12 col-xs-12">
    		                            	<button class="btn btn-colored-blog pull-right" type="submit" value="1" name="submit" id="submit_upload" disabled="disabled">Submit</button>
    									</div>
    								</div>
									<div class="col-md-1"></div>
								</div>
						    </div>
		                </div>
					</form>
			</div>

	                    <div class="col-md-1"></div>
                  </div>
               </div>
            </div>
        </div>
      </section>
	  <script>
	  var jawaban_rahasia;
	  $(document).ready(function() {
		  $("#no_peserta").keyup(validateNoPeserta);
	  });
	  
	  
	  function validateNoPeserta() {
		  var no_peserta = $("#no_peserta").val();
		  $.ajax({
			url: 'KelolaPendaftar/validate_no_peserta',	
			type: 'POST',
			dataType: 'json',
			data: {no_peserta:no_peserta},
			success: function(data_peserta){
						var data_peserta = JSON.parse(JSON.stringify(data_peserta));
						if(data_peserta.check>0) {
						   if(data_peserta.harga=='0'){
								document.getElementById("validate_no_peserta").style.color = "red";
								$("#validate_no_peserta").text("* No peserta terdaftar pada event gratis");  
								document.getElementById("submit_upload").disabled = true;
						   } else{
								document.getElementById("validate_no_peserta").style.color = "black";
								//document.getElementById("validate_no_peserta").style.text-align = "center";
								var divkategori='';
								divkategori += '<div class="row" style="border: solid 2px gray;">';
    								divkategori += '<div class="col-md-12" style="padding: unset; background-color: lightyellow;">';
    									divkategori += '<div class="col-md-6" style="padding-top: 30px;">';
    										divkategori += '<div><h3 style="text-align:center"><strong>'+data_peserta.nama_event+'</strong></h3></div>';
    										if(data_peserta.tgl_mulai==data_peserta.tgl_selesai){
    											divkategori += '<div><h5 style="text-align:center"><i class="glyphicon glyphicon-calendar"></i> '+data_peserta.tgl_mulai+'</h5></div>';
    										} else{
    											divkategori += '<div><h5 style="text-align:center"><i class="glyphicon glyphicon-calendar"></i> '+data_peserta.tgl_mulai+' s/d '+data_peserta.tgl_selesai+'</h5></div>';
    										}
    									divkategori += '</div>';
    									
    									divkategori +='<div class="col-md-6" style="border-left-style:solid; border-color:gray; border-width:1px; padding-top: 10px;">';
    									    divkategori += '<table style="border: none;">';
    									        divkategori +='<tr>';
    									            divkategori +='<td>';
    									                divkategori +='<p>Nama</p>';	
    									            divkategori +='</td>';
    									            divkategori +='<td style="width: 20px; text-align: center;">';
    									                divkategori +='<p>:</p>';	
    									            divkategori +='</td>';
    									            divkategori +='<td>';
    									                divkategori +='<p>'+data_peserta.nama_pendaftar+'</p>';	
    									            divkategori +='</td>';
    									        divkategori +='</tr>';
    									        divkategori +='<tr>';
    									            divkategori +='<td>';
    									                divkategori +='<p>E-Mail</p>';	
    									            divkategori +='</td>';
    									            divkategori +='<td style="width: 20px; text-align: center;">';
    									                divkategori +='<p>:</p>';	
    									            divkategori +='</td>';
    									            divkategori +='<td>';
    									                divkategori +='<p>'+data_peserta.email+'</p>';	
    									            divkategori +='</td>';
    									        divkategori +='</tr>';
    									        divkategori +='<tr>';
    									            divkategori +='<td>';
    									                divkategori +='<p>Telepon</p>';	
    									            divkategori +='</td>';
    									            divkategori +='<td style="width: 20px; text-align: center;">';
    									                divkategori +='<p>:</p>';	
    									            divkategori +='</td>';
    									            divkategori +='<td>';
    									                divkategori +='<p>'+data_peserta.telepon+'</p>';	
    									            divkategori +='</td>';
    									        divkategori +='</tr>';
    									        divkategori +='<tr>';
    									            divkategori +='<td>';
    									                divkategori +='<p>Jenis Tiket</p>';	
    									            divkategori +='</td>';
    									            divkategori +='<td style="width: 20px; text-align: center;">';
    									                divkategori +='<p>:</p>';	
    									            divkategori +='</td>';
    									            divkategori +='<td>';
    									                divkategori +='<p>'+data_peserta.nama_tiket+'</p>';	
    									            divkategori +='</td>';
    									        divkategori +='</tr>';
    									        divkategori +='<tr>';
    									            divkategori +='<td>';
    									                divkategori +='<p>Harga</p>';	
    									            divkategori +='</td>';
    									            divkategori +='<td style="width: 20px; text-align: center;">';
    									                divkategori +='<p>:</p>';	
    									            divkategori +='</td>';
    									            divkategori +='<td>';
    									                divkategori +='<p>Rp '+data_peserta.harga+'</p>';	
    									            divkategori +='</td>';
    									        divkategori +='</tr>';
    									        divkategori +='<tr>';
    									            divkategori +='<td>';
    									                divkategori +='<p>Alamat</p>';	
    									            divkategori +='</td>';
    									            divkategori +='<td style="width: 20px; text-align: center;">';
    									                divkategori +='<p>:</p>';	
    									            divkategori +='</td>';
    									            divkategori +='<td>';
    									                divkategori +='<p>'+data_peserta.alamat+'</p>';	
    									            divkategori +='</td>';
    									        divkategori +='</tr>';
        									divkategori +='</table>';
    									divkategori +='</div>';
    								
    				                divkategori +='</div>';
    				            divkategori +='</div>';
    				            
    				            divkategori +='<div class="row" style="padding: 20px;">';
								    divkategori +='<div class="col-md-12">';
								        divkategori +='<div class="col-md-2">';divkategori +='</div>';
								        divkategori +='<div class="col-md-8" style="text-align: center;">';
    										divkategori +='<label for="exampleInputFile" >Unggah Bukti Pembayaran :</label>';
											divkategori +='<input style="float: right;" class="form" type="file" name="filefoto" required >';
    										divkategori +='<p style="margin-top: auto; font-size: 1.0em; color:red;">*Tipe file diizinkan: jpg, jpeg, dan png (Max 2Mb)</p>';
								        divkategori +='</div>';
								        divkategori +='<div class="col-md-2">';divkategori +='</div>';
								    divkategori +='</div>';
								divkategori +='</div>';
								
									
								document.getElementById("validate_no_peserta").innerHTML = divkategori;
								document.getElementById("submit_upload").disabled = false;}
						}
						else {
							document.getElementById("validate_no_peserta").style.color = "red";
							$("#validate_no_peserta").text("* Nomor peserta tidak terdaftar");  
							document.getElementById("submit_upload").disabled = true;
						}
					},
			error: function(){
						alert('GAGAL');
					}
					
			});
		
		}
		
	  </script>