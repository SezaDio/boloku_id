<aside class="right-side">
                <!-- Content Header (Page header) -->
                <section class="content-header" style="margin-top: 45px;">
                    <h1>
                       Kelola Pendaftar
                    </h1>
					<h2>
						<b><?php echo $nama_event?></b>
					</h2>
                    <ol class="breadcrumb">
                        <li><i class="fa fa-dashboard"></i>Kelola Pendaftar</li>
                        <li class="active"><?php echo $nama_event?></li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
				    <div class="row">
						<div class="modal"  id="verifikasi_bayar">
							<div class="modal-content" id="verifikasi_bayar2">
							
							</div>
						</div>
						
						
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
									</div>
                                    <div class="form-group">
                                        <table class="table table-striped table-bordered table-hover" id="dataTables-list">
                                            <thead>
                                                <tr>
                                                    <th class="title-center" style="font-size:1em; text-align:center;">No.</th>
                                                    <th class="title-center" style="font-size:1em; text-align:center;">Nama Pendaftar</th>
                                                    <th class="title-center" style="font-size:1em; text-align:center;">Email</th>
                                                    <th class="title-center" style="font-size:1em; text-align:center;">Telepon</th>
                                                    <th class="title-center" style="font-size:1em; text-align:center;">Alamat</th>
													<?php if($jenis_event==0){?>
                                                    <th class="title-center" style="font-size:1em; text-align:center;">Status Bayar</th>
													<?php }?>
                                                    <th class="title-center" style="font-size:1em; text-align:center;">Aksi</th>                                                        
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $i=0;
                                                    foreach($listPendaftar as $item)
                                                    { $i++;?>
                                                        <tr>
                                                            <td style="text-align: center;"><?php echo $i ?></td>
                                                            <td><?php echo $item['nama_pendaftar'] ?></td>
                                                            <td><?php echo $item['email'] ?></td>
                                                            <td><?php echo $item['telepon'] ?></td>
                                                            <td><?php echo $item['alamat'] ?></td>
															<?php if($jenis_event==0){?>
                                                            <td style="text-align:center"><?php if($item['status_bayar']==0){?> <b style="color:red">Belum Bayar</b> <?php } elseif ($item['status_bayar']==1){?><b style="color:red">Menunggu Verifikasi</b> <?php } else {?> <b style="color:green">Sudah Bayar</b> <?php } ?></td>
															<?php }?>
                                                            <td align="center">
                                                                <!-- Tombol lihat detail -->
																<?php if($jenis_event==0){?>
																        <a href="#"><button <?php if($item['status_bayar']==0){?>class="btn btn-danger btn-sm" disabled="disabled" <?php } elseif($item['status_bayar']==1) {?> class="btn btn-danger btn-sm" onclick="verifikasi_bayar(<?php echo $item['id_pendaftar']?>)" <?php } else {?>class="btn btn-success btn-sm" disabled<?php } ?>><i class="glyphicon glyphicon-eye-open" ></i>Verifikasi Bayar</button></a>
																<?php }?>
                                                            </td>
                                                        </tr>
                                                    <?php } ?>
                                            </tbody>
                                        </table>
										<a href="<?php echo site_url('KelolaPendaftar');?>"><button class="btn btn-warning btn-sm" ><i class="glyphicon glyphicon-arrow-left" ></i> Kembali</button></a>
                                    </div>
                                </div><!-- /.box-body -->

                            </div><!-- /.box -->
                        </div><!--/.col (left) -->
                    </div>   <!-- /.row -->
                </section><!-- /.content -->
            </aside><!-- /.right-side -->

<script type="text/javascript">
	function parseXml(str) {
	    if (window.ActiveXObject) {
			var doc = new ActiveXObject('Microsoft.XMLDOM');
			doc.loadXML(str);
			return doc;
		} else if (window.DOMParser) {
			return (new DOMParser).parseFromString(str, 'text/xml');
		}
	}
	
	function verifikasi_bayar(id_pendaftar){
		$.post('<?php echo site_url('KelolaPendaftar/verifikasi_bayar/'); ?>'+id_pendaftar, function(dataPendaftar){
			var getUrl = window.location;
			var baseUrl = getUrl .protocol + "//" + getUrl.host + "/" + getUrl.pathname.split('/')[1];
			var xml = parseXml(dataPendaftar);
			var getPendaftar = xml.documentElement.getElementsByTagName("pendaftar");
			var divhasil='';
			for (var i = 0; i < getPendaftar.length; i++) {
				var id_pendaftar = getPendaftar[i].getAttribute("id_pendaftar");
				var id_event = getPendaftar[i].getAttribute("id_event");
				var nama_pendaftar = getPendaftar[i].getAttribute("nama_pendaftar");
				var email = getPendaftar[i].getAttribute("email");
				var telepon = getPendaftar[i].getAttribute("telepon");
				var alamat = getPendaftar[i].getAttribute("alamat");
				var no_pendaftar = getPendaftar[i].getAttribute("no_pendaftar");
				var bukti_pembayaran;
			}
			$.post('<?php echo site_url('KelolaPendaftar/get_pembayaran/'); ?>'+no_pendaftar, function(dataPembayaran){
				var xml = parseXml(dataPembayaran);
				var getPembayaran = xml.documentElement.getElementsByTagName("pembayaran");
				for (var i = 0; i < getPembayaran.length; i++) {
					bukti_pembayaran = getPembayaran[i].getAttribute("bukti_pembayaran");
				}
				
			divhasil += '<b><a href="javascript:void(0)" class="close" onclick="closeVerifikasi()">&times;</a></b>';	
			divhasil += '<div class="box-body" style="align-content: center; min-height: 450px;">';
			divhasil += '<h1><b>Verifikasi Pembayaran</b></h1><hr>';
			divhasil += '<div class="col-sm-4" style="padding-top: 20px; text-align: center;">';
            divhasil += '<div style="height:250px; width: 250px">';
            divhasil += '<img style="border: solid currentColor; height:100%" src="'+baseUrl+'/asset/upload_img_pembayaran/'+bukti_pembayaran+'"></div></div>';
			
			divhasil += '<div class="col-sm-8" style="padding-top: 20px;">';
			divhasil += '<div ><div><table class="table">';
            divhasil += '<tr><td style="width:25%;"><label>Nama</label></td>';
			divhasil += '<td style="width:1%;"><label>:</label></td>';
            divhasil += '<td><label> '+nama_pendaftar+' </label></td></tr></table></div></div> ';
			
			divhasil += '<div ><div><table class="table">';
            divhasil += '<tr><td style="width:25%;"><label>Nomor Peserta</label></td>';
			divhasil += '<td style="width:1%;"><label>:</label></td>';
            divhasil += '<td><label> '+no_pendaftar+' </label></td></tr></table></div></div> ';
			
			divhasil += '<div ><div><table class="table">';
            divhasil += '<tr><td style="width:25%;"><label>Event</label></td>';
			divhasil += '<td style="width:1%;"><label>:</label></td>';
            divhasil += '<td><label> '+id_event+' </label></td></tr></table></div></div> ';
			
			divhasil += '<div ><div><table class="table">';
            divhasil += '<tr><td style="width:25%;"><label>Email</label></td>';
			divhasil += '<td style="width:1%;"><label>:</label></td>';
            divhasil += '<td><label> '+email+' </label></td></tr></table></div></div> ';
			
			divhasil += '<div ><div><table class="table">';
            divhasil += '<tr><td style="width:25%;"><label>Telepon</label></td>';
			divhasil += '<td style="width:1%;"><label>:</label></td>';
            divhasil += '<td><label> '+telepon+' </label></td></tr></table></div></div> ';
			
			
			divhasil += '<button onclick="verifikasi_bayar_check('+id_pendaftar+')" class="btn btn-danger btn-sm">Verifikasi</button>';
			divhasil += '</div></div>';
			
			document.getElementById("verifikasi_bayar2").innerHTML = divhasil;
			},"text");
			
		},"text");		
		document.getElementById("verifikasi_bayar").style.display = "block";
	}
	
	function verifikasi_bayar_check(id_pendaftar){
		$.ajax({
			url: '../verifikasi_bayar_check',	
			type: 'POST',
			data: {id_pendaftar:id_pendaftar},
			success: function(){
						alert('Pembayaran berhasil diverifikasi');
						location.reload();
					},
			error: function(){
						alert('Pembayaran gagal diverifikasi');
					}
		});
	}
	
	function closeVerifikasi(){
		document.getElementById("verifikasi_bayar").style.display = "none";
	}

</script>
            