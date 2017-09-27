<aside class="right-side">
                <!-- Content Header (Page header) -->
                <section class="content-header" style="margin-top: 45px;">
                    <h1>
                       Kelola Event
                    </h1>
                    <ol class="breadcrumb">
                        <li><i class="fa fa-dashboard"></i>Event & News Control</li>
                        <li class="active">Kelola Event</li>
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
										<a href="<?php echo site_url('KelolaComing/tambah_coming_check/');?>">
                                            <button type="submit" name="submit" class="btn btn-info"><i class="glyphicon glyphicon-plus"></i> Tambah Event</button>
                                        </a>
									</div>
                                    <div class="form-group">

                                        <table class="table table-striped table-bordered table-hover" id="dataTables-list">
                                            <thead>
                                                <tr>
                                                    <th class="title-center" style="font-size:1em; text-align:center;">No.</th>
                                                    <th class="title-center" style="font-size:1em; text-align:center;">Judul Event</th>
                                                    <th class="title-center" style="font-size:1em; text-align:center;">Posted By</th>
                                                    <th style="text-align: center; width: 80px;" class="title-center" style="font-size:1em; text-align:center;">Kategori Event</th>
                                                    <th class="title-center" style="font-size:1em; text-align:center;">Waktu Posting</th>
                                                    <th style="text-align: center; width: 70px;" class="title-center" style="font-size:1em; text-align:center;">Jumlah Like & Hits</th>
                                                    <th class="title-center" style="font-size:1em; text-align:center;">Top Event</th>
                                                    <th style="text-align: center; width: 250px;" class="title-center" style="font-size:1em; text-align:center;">Aksi</th>                                                        
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php 
                                                    foreach($listComing as $item)
                                                    { ?>
                                                        <tr>
                                                            <td style="text-align: center;"><?php echo $item['id_coming'] ?></td>
                                                            <td><?php echo $item['nama_coming'] ?></td>
                                                            <td><?php echo $item['posted_by'] ?></td>
                                                            <td><?php echo $item['kategori_coming'] ?></td>
                                                            <td><?php echo $item['tanggal_posting'] ?></td>
                                                            <td style="text-align: center;"><?php 
                                                                    $jumlah_like_hits = $item['like'] + $item['hits']; 
                                                                    echo $jumlah_like_hits;
                                                                ?>
                                                            </td>
                                                            <td style="text-align: center;"><input type="checkbox" id="coming<?php echo $item['id_coming'] ?>" onclick="topEvent(<?php echo $item['id_coming'] ?>)" <?php if($item['top_event']==1){?> checked="checked" <?php } ?>></td>

                                                            <td align="center">
                                                                 <!-- Tombol tambah Press Release -->
                                                                <form  style="float: left;" role="form" enctype="multipart/form-data" action="<?php echo site_url('KelolaNews/tambah_news_check/');?>" method="POST">
                                                                    <button value="<?php echo $item['id_coming']; ?>" name="press_release" type="submit" class="btn bg-purple"><i class="glyphicon glyphicon-plus" ></i> Press Release</button>
                                                                </form>

                                                                <!-- Tombol lihat detail -->
                                                                <a href="<?php echo site_url('KelolaComing/lihat_detail_coming/'.$item['id_coming']);?>"><button class="btn btn-warning btn-sm"><i class="glyphicon glyphicon-eye-open" ></i> Detail</button></a>

                                                                <!-- Tombol Hapus -->
                                                                <button onclick="delete_coming_ajax(<?php echo $item['id_coming']; ?>)" id="delete-button-coming" type="submit" class="btn btn-danger btn-sm"><i class="glyphicon glyphicon-trash" ></i> Hapus</button>
                                                            </td>
                                                        </tr>
                                                    <?php } ?>
                                            </tbody>
											<input type="hidden" value="<?php echo $jumlahTop;?>" id="jumlah_top">
                                        </table>
                                    </div>
                                </div><!-- /.box-body -->

                            </div><!-- /.box -->
                        </div><!--/.col (left) -->
                    </div>   <!-- /.row -->
                </section><!-- /.content -->
            </aside><!-- /.right-side -->
			<script>
			function topEvent(idComing){
					var jumlahTop = document.getElementById("jumlah_top").value;
					var check = document.getElementById("coming"+idComing).checked;
						if(check){
							if(jumlahTop < 3){
								$.ajax({
								url: 'top_event',
								type: 'POST',
								data: {idComing:idComing},
								success: function(){
											alert('Event berhasil menjadi Top Event');
											location.reload();
										},
								error: function(){
											alert('Event gagal menjadi Top Event');
											
										}
								});
							} else{
								alert("Maksimal 3 Top Event !\nUbah salah satu event menjadi event biasa !");
								location.reload();
								
							}
						} else{
							$.ajax({
							url: 'untop_event',
							type: 'POST',
							data: {idComing:idComing},
							success: function(){
										alert('Event berhasil diubah menjadi event biasa');
										location.reload();
									},
							error: function(){
										alert('Event berhasil diubah menjadi event biasa');
									}
							});
							
						}
				}
			
			</script>


            