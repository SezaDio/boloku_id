<aside class="right-side">
                <!-- Content Header (Page header) -->
                <section class="content-header" style="margin-top: 45px;">
                    <h1>
                       Kelola Challenge
                    </h1>
					
                    <ol class="breadcrumb">
                        <li><i class="fa fa-dashboard"></i>Challenge Update</li>
                        <li class="active">Kelola Challenge</li>
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
										
										<!--Tambah Challenge-->
										<a href="<?php echo site_url('KelolaChallenge/tambah_challenge_check/');?>">
                                            <button type="submit" name="submit" class="btn btn-info"><i class="glyphicon glyphicon-plus"></i> Tambah Challenge</button>
                                        </a>

										<!--Tombol ubah challenge-->
										<button id="ganti" class="btn btn-warning"><i class="glyphicon glyphicon-pencil" ></i> Ubah Nama Challenge</button>

										<!--Ubah Nama Challenge-->
										<div class="input-group margin ganti_nama" id="ubah_nama_challenge" style="margin-left: 327px; margin-top: -34px;">
											<input style="width: 250px;" class="form-control" type="text" name="nama_challenge" id="nama_baru" value="<?php echo $nama_challenge ?>"> 
											
											<button onclick="simpanNamaChallenge()" class="btn btn-primary">
												<i class="glyphicon glyphicon-floppy-saved" ></i> Simpan
											</button>
										</div>

										<!--Form Cari-->
										<div class="col-md-3 input-group margin" style="margin-top: -34px; margin-left: 800px;">
	                                        <input placeholder="Cari Judul Challenge" type="text" id="kata_kunci" name="search" type="text" class="form-control">
	                                        <span class="input-group-btn">
	                                            <button onclick="cariChallenge()" class="btn btn-info btn-flat" type="button"><i class="glyphicon glyphicon-search"></i></button>

	                                    		<button onclick="lihatSemua()" class="btn btn-primary" type="button"><i class="glyphicon glyphicon-eye"></i> All</button><br/><br/>
	                                        </span>
	                                    </div><!-- /input-group -->

										<!--Nama Challenge-->
										<div style="text-align: center;" id="nama_challenge">
											<h2>" <?php echo $nama_challenge;?> "</h2> 
										</div><br>
										
										<!--Main Content-->
										<div class="row" id="challengediv">
											<?php foreach($listChallenge as $item){ ?>
                                            <div class="col-md-4" style="text-align: center">
												<div class="well" style="padding:10px">
													
													<input onclick="publish(<?php echo $item['id_challenge']?>)" type="checkbox" name="challenge" id="challenge<?php echo $item['id_challenge']?>" value="<?php echo $item['id_challenge']?>" <?php if($item['status']==1){?>checked="checked"<?php } ?>>  
													<img style="border: black solid 2px;" height="250px" width="100%" alt="" src="<?php echo base_url('asset/upload_img_challenge/'.$item['path_gambar']); ?>"/>
													
													<br><br>
													<?php echo $item['judul_challenge']; ?>
													<br><br>

													<!-- Tombol lihat detail -->
													<a href="<?php echo site_url('KelolaChallenge/edit_challenge/'.$item['id_challenge']);?>"><button class="btn btn-warning btn-sm"><i class="glyphicon glyphicon-pencil" ></i> Edit</button></a>
													
													<!-- Tombol Hapus -->
													<a href="<?php echo site_url('KelolaChallenge/delete_challenge/'.$item['id_challenge']);?>"><button class="btn btn-danger btn-sm"><i class="glyphicon glyphicon-trash" ></i> Hapus</button></a>
												</div>
											</div>
											<?php } ?>
										</div>
										
										<div class="row" id="hasil_search" style="display:none">
											<h1>tes<input type="checkbox"></h1>
										</div>
										
									</div>
                                </div><!-- /.box-body -->

                            </div><!-- /.box -->
                        </div><!--/.col (left) -->
                    </div>   <!-- /.row -->
                </section><!-- /.content -->
            </aside><!-- /.right-side -->


            
			<script type="text/javascript">

				$(".ganti_nama").hide();
                $("#ganti").click(function(){
                    $(".ganti_nama").toggle();
                });
			
				function publish(idChallenge){
					var check = document.getElementById("challenge"+idChallenge).checked;
						if(check){
							$.ajax({
							url: 'publish_challenge',
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
							url: 'unpublish_challenge',
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
			
				function publish2(idChallenge){
					var check = document.getElementById("challenge"+idChallenge).checked;
						if(check){
							$.ajax({
							url: 'unpublish_challenge',
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
						} else{
							$.ajax({
							url: 'publish_challenge',
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
							document.getElementById("challengediv").style.display = "none";
							document.getElementById("hasil_search").style.display = "block";
							var divhasil='';
							
							for (var i = 0; i < getChallenge.length; i++) {
							  
							  var id_challenge = getChallenge[i].getAttribute("id_challenge");
							  var judul_challenge = getChallenge[i].getAttribute("judul_challenge");
							  var deskripsi = getChallenge[i].getAttribute("deskripsi");
							  var status = getChallenge[i].getAttribute("status");
							  var path_gambar = getChallenge[i].getAttribute("path_gambar");
							  var ischeck='';
							  if (status==1) {
								ischeck += 'checked="checked"';
							  }
							  var getUrl = window.location;
							  var baseUrl = getUrl .protocol + "//" + getUrl.host + "/" + getUrl.pathname.split('/')[1];
							  
							  
							  divhasil += '<div class="col-md-4" style="text-align: center">';
							  divhasil += '<div class="well" style="padding:10px">';
							  divhasil += '<input onclick="publish2('+id_challenge+')" type="checkbox" name="challenge" id="challenge'+id_challenge+'" value="'+id_challenge+'" '+ischeck+'>';
							  divhasil += '<img height="100%" width="100%" alt="" src="'+baseUrl+'/asset/upload_img_challenge/'+path_gambar+'">';
							  divhasil += '<br/>'+judul_challenge+'<br/>';
							  divhasil += '<a href="'+baseUrl+'/KelolaChallenge/edit_challenge/'+id_challenge+'"><button class="btn btn-warning btn-sm"><i class="glyphicon glyphicon-pencil" ></i> Edit</button></a>';
							  divhasil += '<a href="'+baseUrl+'/KelolaChallenge/delete_challenge/'+id_challenge+'"><button class="btn btn-danger btn-sm"><i class="glyphicon glyphicon-trash" ></i> Hapus</button></a>';
							  
							  
							  divhasil += "</div></div>";
							  
							  //document.getElementById("arti").innerHTML = "<b>"+jawa+"</b> yang berarti <b>"+indonesia+"</b>";
							  //document.getElementById("deskripsikata").innerHTML = "<strong>"+deskripsi_jawa+"</strong>";
							}
							document.getElementById("hasil_search").innerHTML = divhasil;
							//}
						},"text");
				}
				
				function lihatSemua(){
					document.getElementById("challengediv").style.display = "block";
					document.getElementById("hasil_search").style.display = "none";
				}
				
				function simpanNamaChallenge(){
					var namaBaru = document.getElementById("nama_baru").value;
					$.ajax({
						url: 'KelolaChallenge/ubah_nama_challenge',
						type: 'POST',
						data: {namaBaru:namaBaru},
						success: function(){
								alert('Nama challenge berhasil diubah');
								location.reload();
						},
						error: function(){
								alert('Nama challenge gagal diubah');
						}
				    });
					
				}
			</script>