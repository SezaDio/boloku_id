<aside class="right-side">
                <!-- Content Header (Page header) -->
                <section class="content-header" style="margin-top: 45px;">
                    <h1>
                       Kelola Pendaftar
                    </h1>
                    <ol class="breadcrumb">
                        <li><i class="fa fa-dashboard"></i>Kelola Pendaftar</li>
                        <li class="active">Kelola Pendaftar</li>
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
										<a href="<?php echo site_url('KelolaPendaftar/tambah_pendaftar_check/');?>">
                                            <button type="submit" name="submit" class="btn btn-info"><i class="glyphicon glyphicon-plus" ></i> Tambah Pendaftar</button>
                                        </a>
									</div>
									<div class="form-group">
                                        <div class="nav-tabs-custom">
                                            <ul class="nav nav-tabs">
                                                <li class="active"><a href="#eventgratis" data-toggle="tab">Event gratis</a></li>
                                                <li><a href="#eventbayar" data-toggle="tab">Event bayar</a></li>
                                            </ul>
											<div class="tab-content">
                                                
                                                <!--Tab Youthers News-->
                                                <div class="tab-pane active" id="eventgratis">
									
													<table class="table">
														<?php 
														    foreach ($listEventGratis->result() as $data) 
																{ ?>   
																<tr>
																	<td style="width: 400px;">
																		<b><a href="#"><?php echo $data->nama_coming; ?></a></b><br>
																		 <?php echo "Posted By: ".$data->posted_by; ?>
																	</td>
																	<td style="text-align: center; padding-top: 13px;">
																		<!-- Tombol Lihat Pendaftar -->
																		<a href="<?php echo site_url('KelolaPendaftar/list_pendaftar/'.$data->id_coming);?>"><button id="lihat-button-pendaftar" type="submit" class="btn btn-warning btn-sm"><i class="glyphicon glyphicon-search" ></i> Lihat Pendaftar</button></a>

																	</td>
																</tr>
																<?php } ?>
														
													</table>
												</div>
												<div class="tab-pane" id="eventbayar">
													<table class="table">
														<?php 
														    foreach ($listEventBayar->result() as $data) 
																{ ?>   
																<tr>
																	<td style="width: 400px;">
																		<b><a href="#"><?php echo $data->nama_coming; ?></a></b><br>
																		 <?php echo "Posted By: ".$data->posted_by; ?>
																	</td>
																	<td style="text-align: center; padding-top: 13px;">
																		<!-- Tombol Lihat Pendaftar -->
																		<a href="<?php echo site_url('KelolaPendaftar/list_pendaftar/'.$data->id_coming);?>"><button id="lihat-button-pendaftar" type="submit" class="btn btn-warning btn-sm"><i class="glyphicon glyphicon-search" ></i> Lihat Pendaftar</button></a>

																	</td>
																</tr>
																<?php } ?>
														
													</table>
												</div>
											</div>
                                </div><!-- /.box-body -->

                            </div><!-- /.box -->
                        </div><!--/.col (left) -->
                    </div>   <!-- /.row -->
                </section><!-- /.content -->
            </aside><!-- /.right-side -->


            