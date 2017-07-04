<aside class="right-side">
                <!-- Content Header (Page header) -->
                <section class="content-header" style="margin-top: 45px;">
                    <h1>
                       Validasi Pepak
                    </h1>
                    <ol class="breadcrumb">
                        <li><i class="fa fa-dashboard"></i>Youth Pepak</li>
                        <li class="active">Validasi Pepak</li>
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
                                    <div class="form-group">
                                        <table class="table table-striped table-bordered table-hover" id="dataTables-list">
                                            <thead>
                                                <tr>
                                                    <th class="title-center" style="font-size:1em; text-align:center;">No.</th>
                                                    <th class="title-center" style="font-size:1em; text-align:center;">Kata Jawa</th>
                                                    <th class="title-center" style="font-size:1em; text-align:center;">Kata Indonesia</th>
                                                    <th class="title-center" style="font-size:1em; text-align:center;">Deskripsi</th>
                                                    <th class="title-center" style="font-size:1em; text-align:center;">Aksi</th>                                                        
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php 
                                                    foreach($listPepak as $item)
                                                    { ?>
                                                        <tr>
                                                            <td style="text-align: center;"><?php echo $item['id_pepak'] ?></td>
                                                            <td><?php echo $item['jawa'] ?></td>
                                                            <td><?php echo $item['indonesia'] ?></td>
                                                            <td><?php $deskripsi = substr($item['deskripsi_jawa'],0,50) . '...'; echo $deskripsi;?></td>
                                                            <td align="center">
                                                                <!-- Tombol lihat detail -->
                                                                <a href="<?php echo site_url('KelolaPepak/lihat_detail_pepak/'.$item['id_pepak']);?>"><button class="btn btn-warning btn-sm"><i class="glyphicon glyphicon-eye-open" ></i> Detail</button></a>
																
																<!-- Tombol Setuju -->
                                                                <button onclick="setuju_pepak_ajax(<?php echo $item['id_pepak']; ?>)" id="success-button-coming" type="submit" class="btn btn-success btn-sm"><i class="glyphicon glyphicon-ok" ></i> Setuju</button>
                                                                
                                                                <!-- Tombol Hapus -->
                                                                <button onclick="tolak_pepak_ajax(<?php echo $item['id_pepak']; ?>)" id="delete-button-coming" type="submit" class="btn btn-danger btn-sm"><i class="glyphicon glyphicon-remove" ></i> Tolak</button>
                                                                
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


            