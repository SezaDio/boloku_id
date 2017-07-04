<aside class="right-side">
                <!-- Content Header (Page header) -->
                <section class="content-header" style="margin-top: 45px;">
                    <h1>
                       Detail Produk
                    </h1>
                    <ol class="breadcrumb">
                        <li><i class="fa fa-dashboard"></i>Youth Shopping</li>
                        <li class="active">Kelola Shopping</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <!-- left column -->
                        <div>
                            <div class="col-md-1">
                            </div><!--/.col (left) -->

                            <div class="col-md-10">
                                <!-- general form elements -->
                                <div class="box box-primary">
                                    <!--Mulai Tampilkan Data Table-->
                                    <div class="box-body" style="align-content: center; min-height: 450px;">
                                        <div style="padding-bottom: 10px">
                                            <div class="col-sm-12">
                                               <H3 style="text-align: center;"><?php echo $id_produk->nama_produk;?></H3>
                                               <hr color="red">
                                            </div>
                                        </div>
                                            <!--Gambar Produk-->
                                            <div class="col-sm-4" style="padding-top: 20px; text-align: center;">
                                                <div style="height:250px; width: 250px">
                                                    
                                                        <img style="border: solid currentColor; height:100%" src="<?php echo base_url('asset/upload_img_shopping/'.$id_produk->path_gambar); ?>">
                                                    
                                                </div>
                                            </div>

                                            <!--Detail Produk-->
                                            <div class="col-sm-8" style="padding-top: 20px;">
                                                <div >
                                                    <div style="padding: 10px">
                                                        <table class="table">
                                                            <tr>
                                                                <td style="width:25%;"><label>Jenis Produk</label></td>
                                                                <td style="width:1%;"><label>:</label></td>
                                                                <td><label><?php echo $id_produk->jenis_produk;?></label></td>
                                                            </tr>
                                                            <tr>
                                                                <td style="width:25%;"><label>Harga Produk</label></td>
                                                                <td style="width:1%;"><label>:</label></td>
                                                                <td><label><?php echo $id_produk->harga_produk;?></label></td>
                                                            </tr>
                                                            <tr>
                                                                <td style="width:25%;"><label>Penjual</label></td>
                                                                <td style="width:1%;"><label>:</label></td>
                                                                <td><label><?php echo $id_produk->posted_by;?></label></td>
                                                            </tr>
                                                            <tr>
                                                                <td style="width:25%;"><label>No. Telephone</label></td>
                                                                <td style="width:1%;"><label>:</label></td>
                                                                <td><label><?php echo $id_produk->phone_number;?></label></td>
                                                            </tr>
                                                            <tr>
                                                                <td style="width:25%;"><label>Deksripsi Produk</label></td>
                                                                <td style="width:1%;"><label>:</label></td>
                                                                <td><label> <?php echo $id_produk->deskripsi_produk;?> </label></td>
                                                            </tr>
                                                        </table>
                                                    </div>
                                                </div>    

                                            </div>
                                            <div style="padding-left: 330px; padding-right: 20px; text-align: justify;">
                                                <p></p>
                                            </div>                                  
                                    </div><!-- /.box-body -->
                                </div><!-- /.box -->
                            </div><!--/.col (left) -->
                            <div class="col-md-4" style="padding-left: 155px; position: absolute; margin-top: 390px;">
                                <?php if($id_produk->status==1){?>
                                    <!-- Tombol kembali -->
									<a href="<?php echo site_url('KelolaShopping');?>"><button class="btn btn-warning btn-sm"><i class="glyphicon glyphicon-arrow-left" ></i> Kembali</button></a>

                                    <!-- Tombol Edit -->
                                    <a href="<?php echo site_url('KelolaShopping/edit_shopping/'.$id_produk->id_produk);?>"><button id="edit-button-produk" type="submit" class="btn btn-info btn-sm"><i class="glyphicon glyphicon-pencil" ></i> Edit</button></a>

									<!-- Tombol Hapus -->
									<a href="<?php echo site_url('KelolaShopping/delete_detail_produk/'.$id_produk->id_produk);?>"><button class="btn btn-danger btn-sm"><i class="glyphicon glyphicon-trash" ></i> Hapus</button></a>
                            </div>
                                <?php } else {?>
                            <div class="col-md-10" style="position: absolute; margin-left: -40px;">    
                                    <!-- Tombol kembali -->
                                    <a href="<?php echo site_url('KelolaShopping/validasi_shopping');?>"><button class="btn btn-warning btn-sm"><i class="glyphicon glyphicon-arrow-left" ></i> Kembali</button></a>
                                    <!-- Tombol Edit -->
                                    <a href="<?php echo site_url('KelolaShopping/edit_shopping/'.$id_produk->id_produk);?>"><button id="edit-button-produk" type="submit" class="btn btn-info btn-sm"><i class="glyphicon glyphicon-pencil" ></i> Edit</button></a>
                                    <!-- Tombol Setuju -->
                                    <a href="<?php echo site_url('KelolaShopping/setuju_detail_produk/'.$id_produk->id_produk);?>"><button id="success-button-produk" type="submit" class="btn btn-success btn-sm"><i class="glyphicon glyphicon-ok" ></i> Setuju</button></a>
                                    <!-- Tombol Hapus -->
                                    <a href="<?php echo site_url('KelolaShopping/tolak_detail_produk/'.$id_produk->id_produk);?>"><button  id="delete-button-produk" type="submit" class="btn btn-danger btn-sm"><i class="glyphicon glyphicon-remove" ></i> Tolak</button>
                            </div>
                                <?php }?>
                            
                            <div class="col-md-1">
                            </div><!--/.col (left) -->
                        </div>
                    </div>   <!-- /.row -->
                </section><!-- /.content -->
            </aside><!-- /.right-side -->