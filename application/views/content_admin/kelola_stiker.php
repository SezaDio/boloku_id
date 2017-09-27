<aside class="right-side">
                <!-- Content Header (Page header) -->
                <section class="content-header" style="margin-top: 45px;">
                    <h1>
                       Kelola Stiker
                    </h1>
					
                    <ol class="breadcrumb">
                        <li><i class="fa fa-dashboard"></i>Stiker</li>
                        <li class="active">Kelola Stiker</li>
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
										
										<!--Tambah stiker-->
										<a href="<?php echo site_url('KelolaStiker/tambah_stiker_check/');?>">
                                            <button type="submit" name="submit" class="btn btn-info"><i class="glyphicon glyphicon-plus"></i> Tambah Stiker</button>
                                        </a>

										

										<!--Form Cari-->
										<div class="col-md-3 input-group margin" style="margin-top: -34px; margin-left: 800px;">
	                                        <input placeholder="Cari Stiker" type="text" id="kata_kunci" name="search" type="text" class="form-control">
	                                        <span class="input-group-btn">
	                                            <button onclick="cariStiker()" class="btn btn-info btn-flat" type="button"><i class="glyphicon glyphicon-search"></i></button>

	                                    		<button onclick="lihatSemua()" class="btn btn-primary" type="button"><i class="glyphicon glyphicon-eye"></i> All</button><br/><br/>
	                                        </span>
	                                    </div><!-- /input-group -->

										
										
										<!--Main Content-->
										<div class="row" id="stikerdiv">
											<?php foreach($listStiker as $item){ ?>
                                            <div class="col-md-4" style="text-align: center">
												<div class="well" style="padding:10px">
													
													<input onclick="publish(<?php echo $item['id_stiker']?>)" type="checkbox" name="stiker" id="stiker<?php echo $item['id_stiker']?>" value="<?php echo $item['id_stiker']?>" <?php if($item['status']==1){?>checked="checked"<?php } ?>>  
													<img style="border: black solid 2px;" height="250px" width="100%" alt="" src="<?php echo base_url('asset/upload_img_stiker/'.$item['path_gambar']); ?>"/>
													
													<br><br>
													<?php echo $item['nama_stiker']; ?>
													<br><br>

													<!-- Tombol lihat detail -->
													<a href="<?php echo site_url('KelolaStiker/edit_stiker/'.$item['id_stiker']);?>"><button class="btn btn-warning btn-sm"><i class="glyphicon glyphicon-pencil" ></i> Edit</button></a>
													
													<!-- Tombol Hapus -->
													<a href="<?php echo site_url('KelolaStiker/delete_stiker/'.$item['id_stiker']);?>"><button class="btn btn-danger btn-sm"><i class="glyphicon glyphicon-trash" ></i> Hapus</button></a>
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
			
				function publish(idStiker){
					var check = document.getElementById("stiker"+idStiker).checked;
						if(check){
							$.ajax({
							url: 'publish_stiker',
							type: 'POST',
							data: {idStiker:idStiker},
							success: function(){
										alert('Stiker berhasil di publish');
										location.reload();
									},
							error: function(){
										alert('Stiker gagal di publish');
									}
							});
						} else{
							$.ajax({
							url: 'unpublish_stiker',
							type: 'POST',
							data: {idStiker:idStiker},
							success: function(){
										alert('Stiker berhasil di unpublish');
										location.reload();
									},
							error: function(){
										alert('Stiker gagal di unpublish');
									}
							});
							
						}
				}
			
				function publish2(idStiker){
					var check = document.getElementById("stiker"+idStiker).checked;
						if(check){
							$.ajax({
							url: 'unpublish_stiker',
							type: 'POST',
							data: {idStiker:idStiker},
							success: function(){
										alert('Stiker berhasil di unpublish');
										location.reload();
									},
							error: function(){
										alert('Stiker gagal di unpublish');
									}
							});
						} else{
							$.ajax({
							url: 'publish_stiker',
							type: 'POST',
							data: {idStiker:idStiker},
							success: function(){
										alert('Stiker berhasil di publish');
										location.reload();
									},
							error: function(){
										alert('Stiker gagal di publish');
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

				function cariStiker() {
						var kata=document.getElementById("kata_kunci").value;
						$.post('<?php echo site_url('KelolaStiker/cari_stiker/'); ?>'+kata, function(dataStiker){
						
							var xml = parseXml(dataStiker);
							var getStiker = xml.documentElement.getElementsByTagName("stiker");
							
							/*if(getKata.length==0){
							
								document.getElementById("hasil").style.display = "none";
								document.getElementById("notFound").style.display = "block";
								document.getElementById("kata").innerHTML = kata;
							}
							else {
							document.getElementById("notFound").style.display = "none";
							document.getElementById("hasil").style.display = "block";*/
							document.getElementById("stikerdiv").style.display = "none";
							document.getElementById("hasil_search").style.display = "block";
							var divhasil='';
							
							for (var i = 0; i < getStiker.length; i++) {
							  
							  var id_stiker = getStiker[i].getAttribute("id_stiker");
							  var nama_stiker = getStiker[i].getAttribute("nama_stiker");
							  var deskripsi = getStiker[i].getAttribute("deskripsi");
							  var status = getStiker[i].getAttribute("status");
							  var path_gambar = getStiker[i].getAttribute("path_gambar");
							  var ischeck='';
							  if (status==1) {
								ischeck += 'checked="checked"';
							  }
							  var getUrl = window.location;
							  var baseUrl = getUrl .protocol + "//" + getUrl.host ;
							  
							  
							  divhasil += '<div class="col-md-4" style="text-align: center">';
							  divhasil += '<div class="well" style="padding:10px">';
							  divhasil += '<input onclick="publish2('+id_stiker+')" type="checkbox" name="stiker" id="stiker'+id_stiker+'" value="'+id_stiker+'" '+ischeck+'>';
							  divhasil += '<img height="100%" width="100%" alt="" src="'+baseUrl+'/asset/upload_img_stiker/'+path_gambar+'">';
							  divhasil += '<br/>'+nama_stiker+'<br/>';
							  divhasil += '<a href="'+baseUrl+'/Kelolastiker/edit_stiker/'+id_stiker+'"><button class="btn btn-warning btn-sm"><i class="glyphicon glyphicon-pencil" ></i> Edit</button></a>';
							  divhasil += '<a href="'+baseUrl+'/Kelolastiker/delete_stiker/'+id_stiker+'"><button class="btn btn-danger btn-sm"><i class="glyphicon glyphicon-trash" ></i> Hapus</button></a>';
							  
							  
							  divhasil += "</div></div>";
							  
							  //document.getElementById("arti").innerHTML = "<b>"+jawa+"</b> yang berarti <b>"+indonesia+"</b>";
							  //document.getElementById("deskripsikata").innerHTML = "<strong>"+deskripsi_jawa+"</strong>";
							}
							document.getElementById("hasil_search").innerHTML = divhasil;
							//}
						},"text");
				}
				
				function lihatSemua(){
					document.getElementById("stikerdiv").style.display = "block";
					document.getElementById("hasil_search").style.display = "none";
				}
				
			</script>