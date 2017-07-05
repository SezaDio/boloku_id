<aside class="right-side">
                <!-- Content Header (Page header) -->
                <section class="content-header" style="margin-top: 45px;">
                    <h1>
                       Kelola Challenge Update
                    </h1>
                    <ol class="breadcrumb">
                        <li><i class="fa fa-dashboard"></i>Kelola Challenge Update</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <!-- left column -->
                        <div class="col-md-12">
                            <!-- general form elements -->
                            <div class="box box-primary">

                                <!--Mulai Tampilkan Data Table-->
                                <div class="box-body">
									<div style="margin-top:10px; margin-bottom:30px">
										<?php if($this->session->flashdata('msg_berhasil')!=''){?>
                                            <div class="alert alert-success alert-dismissable">
                                                <i class="glyphicon glyphicon-ok"></i>
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                <?php echo $this->session->flashdata('msg_berhasil');?> 
                                            </div>
                                        <?php }?>
										<a href="<?php echo site_url('KelolaChallenge/tambah_challenge_check/');?>">
                                            <button type="submit" name="submit" class="btn btn-info"><i class="glyphicon glyphicon-plus"></i> Tambah Challenge Update</button>
                                        </a>
										<input placeholder="Cari Challenge Update" name="search" class="form-control" type="text" id="kata_kunci">
										<button onclick="cariChallenge()">Cari</button><br/><br/><br/>
										<div>
											<div class="content">
												<div class="row" id="challenge" style="display:block">
													<?php foreach($listChallenge as $item){ ?>
                                                    <div class="col-md-4" style="text-align: center">
													<div class="well" style="padding:10px">
															<input onclick="publish(<?php echo $item['id_challenge']?>)" type="checkbox" name="challenge" id="challenge<?php echo $item['id_challenge']?>" value="<?php echo $item['id_challenge']?>" <?php if($item['status']==1){?>checked="checked"<?php } ?>>  
														<img height="100%" width="100%" alt="" src="<?php echo base_url('asset/upload_img_challenge/'.$item['path_gambar']); ?>">
														<br/><?php 	echo $item['judul_challenge']; ?>
														<br/>
														<!-- Tombol lihat detail -->
														<a href="<?php echo site_url('KelolaChallenge/edit_challenge/'.$item['id_challenge']);?>"><button class="btn btn-warning btn-sm"><i class="glyphicon glyphicon-pencil" ></i> Edit</button></a>
														
														<!-- Tombol Hapus -->
														<a href="<?php echo site_url('KelolaChallenge/delete_challenge/'.$item['id_challenge']);?>"><button class="btn btn-danger btn-sm"><i class="glyphicon glyphicon-trash" ></i> Hapus</button></a>
													</div>
													</div>
													<?php } ?>
												</div>
												<div class="row" id="hasil_search" style="display:none">
												<h1>TEST</h1>
												</div>
											</div>
										</div>
									</div>
                                    <div class="form-group">
                                        
                                    </div>
                                </div><!-- /.box-body -->

                            </div><!-- /.box -->
                        </div><!--/.col (left) -->
                    </div>   <!-- /.row -->
                </section><!-- /.content -->
            </aside><!-- /.right-side -->


            
			<script type="text/javascript">
				function publish(idChallenge){
					var check = document.getElementById("challenge"+idChallenge).checked;
						if(check){
							$.ajax({
							url: 'KelolaChallenge/publish_challenge',
							type: 'POST',
							data: {idChallenge:idChallenge},
							success: function(){
										alert('Content berhasil di publish');
										location.reload();
									},
							error: function(){
										alert('Content gagal di publish');
									}
							});
						} else{
							$.ajax({
							url: 'KelolaChallenge/unpublish_challenge',
							type: 'POST',
							data: {idChallenge:idChallenge},
							success: function(){
										alert('Content berhasil di unpublish');
										location.reload();
									},
							error: function(){
										alert('Content gagal di unpublish');
									}
							});
						}
				}
				  function parseXml(str) {
					  if (window.ActiveXObject) {
						var doc = new ActiveXObject('Microsoft.XMLDOM');
						doc.loadXML(str);
						return doc;
					  } else if (window.DOMParser) {
						return (new DOMParser).parseFromString(str, 'text/xml');
					  }
					}

				function cariChallenge() {
						var kata=document.getElementById("kata_kunci").value;
						$.post('<?php echo site_url('KelolaChallenge/cari_challenge/'); ?>'+kata, function(dataChallenge){
						
							var xml = parseXml(dataChallenge);
							var getChallenge = xml.documentElement.getElementsByTagName("challenge");
							
							/*if(getKata.length==0){
							
								document.getElementById("hasil").style.display = "none";
								document.getElementById("notFound").style.display = "block";
								document.getElementById("kata").innerHTML = kata;
							}
							else {
							document.getElementById("notFound").style.display = "none";
							document.getElementById("hasil").style.display = "block";*/
							document.getElementById("challange").style.display = "none";
							document.getElementById("hasil_search").style.display = "none";
							for (var i = 0; i < getChallenge.length; i++) {
							  
							  var id_challenge = getChallenge[i].getAttribute("id_challenge");
							  var judul_challenge = getChallenge[i].getAttribute("judul_challenge");
							  var deskripsi = getChallange[i].getAttribute("deskripsi");
							  var path_gambar = getChallange[i].getAttribute("path_gambar");
							  
							  
							  //document.getElementById("arti").innerHTML = "<b>"+jawa+"</b> yang berarti <b>"+indonesia+"</b>";
							  //document.getElementById("deskripsikata").innerHTML = "<strong>"+deskripsi_jawa+"</strong>";
							}
							//}
						},"text");
				}
			</script>