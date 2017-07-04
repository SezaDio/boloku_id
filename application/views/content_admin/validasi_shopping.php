<aside class="right-side">
                <!-- Content Header (Page header) -->
                <section class="content-header" style="margin-top: 45px;">
                    <h1>
                       Validasi Shopping
                    </h1>
                    <ol class="breadcrumb">
                        <li><i class="fa fa-dashboard"></i>Youth Shopping</li>
                        <li class="active">Validasi Shopping</li>
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
                                                    <th class="title-center" style="font-size:1em; text-align:center;">Nama Produk</th>
                                                    <th class="title-center" style="font-size:1em; text-align:center;">Jenis Produk</th>
                                                    <th class="title-center" style="font-size:1em; text-align:center;">Harga Produk</th>
                                                    <th class="title-center" style="font-size:1em; text-align:center;">Posted By</th>
                                                    <th class="title-center" style="font-size:1em; text-align:center;">Telephone</th>
                                                    <th class="title-center" style="font-size:1em; text-align:center;">Waktu Posting</th>
                                                    <th class="title-center" style="font-size:1em; text-align:center;">Aksi</th>                                                        
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php 
                                                    foreach($listProduk as $item)
                                                    { ?>
                                                        <tr>
                                                            <td style="text-align: center;"><?php echo $item['id_produk'] ?></td>
                                                            <td><?php echo $item['nama_produk'] ?></td>
                                                            <td><?php echo $item['jenis_produk'] ?></td>
                                                            <td><?php echo "Rp ".$item['harga_produk'] ?></td>
                                                            <td><?php echo $item['posted_by'] ?></td>
                                                            <td><?php echo $item['phone_number'] ?></td>
                                                            <td><?php echo $item['tanggal_posting'] ?></td>
                                                            <td align="center">
                                                                <!-- Tombol lihat detail -->
                                                                <a href="<?php echo site_url('KelolaShopping/lihat_detail_produk/'.$item['id_produk']);?>"><button class="btn btn-warning btn-sm"><i class="glyphicon glyphicon-eye-open" ></i> Detail</button></a>
																
																<!-- Tombol Setuju -->
                                                                <button onclick="setuju_produk_ajax(<?php echo $item['id_produk']; ?>)" id="success-button-produk" type="submit" class="btn btn-success btn-sm"><i class="glyphicon glyphicon-ok" ></i> Setuju</button>
                                                                
                                                                <!-- Tombol Hapus -->
                                                                <button onclick="tolak_produk_ajax(<?php echo $item['id_produk']; ?>)" id="delete-button-produk" type="submit" class="btn btn-danger btn-sm"><i class="glyphicon glyphicon-remove" ></i> Tolak</button>
                                                                
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


            