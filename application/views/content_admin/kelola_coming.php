<aside class="right-side">
                <!-- Content Header (Page header) -->
                <section class="content-header" style="margin-top: 45px;">
                    <h1>
                       Kelola Coming Soon
                    </h1>
                    <ol class="breadcrumb">
                        <li><i class="fa fa-dashboard"></i>Youth Coming Soon</li>
                        <li class="active">Kelola Coming Soon</li>
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
                                            <button type="submit" name="submit" class="btn btn-info"><i class="glyphicon glyphicon-plus"></i> Tambah Comming Soon</button>
                                        </a>
									</div>
                                    <div class="form-group">
                                        <table class="table table-striped table-bordered table-hover" id="dataTables-list">
                                            <thead>
                                                <tr>
                                                    <th class="title-center" style="font-size:1em; text-align:center;">No.</th>
                                                    <th class="title-center" style="font-size:1em; text-align:center;">Coming Soon</th>
                                                    <th class="title-center" style="font-size:1em; text-align:center;">Posted By</th>
                                                    <th class="title-center" style="font-size:1em; text-align:center;">Waktu Posting</th>
                                                    <th class="title-center" style="font-size:1em; text-align:center;">Aksi</th>                                                        
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
                                                            <td><?php echo $item['tanggal_posting'] ?></td>
                                                            <td align="center">
                                                                <!-- Tombol lihat detail -->
                                                                <a href="<?php echo site_url('KelolaComing/lihat_detail_coming/'.$item['id_coming']);?>"><button class="btn btn-warning btn-sm"><i class="glyphicon glyphicon-eye-open" ></i> Detail</button></a>

                                                                <!-- Tombol Hapus -->
                                                                <button onclick="delete_coming_ajax(<?php echo $item['id_coming']; ?>)" id="delete-button-coming" type="submit" class="btn btn-danger btn-sm"><i class="glyphicon glyphicon-trash" ></i> Hapus</button>
                                                            </td>
                                                        </tr>
                                                    <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div><!-- /.box-body -->

                            </div><!-- /.box -->
                        </div><!--/.col (left) -->
                    </div>   <!-- /.row -->
                </section><!-- /.content -->
            </aside><!-- /.right-side -->


            