<aside class="right-side">
                <!-- Content Header (Page header) -->
                <section class="content-header" style="margin-top: 45px;">
                    <h1>
                       Detail Member
                    </h1>
                    <ol class="breadcrumb">
                        <li><i class="fa fa-dashboard"></i>Member Control</li>
                        <li class="active">Kelola Member</li>
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
                                        
                                            <!--Gambar Produk-->
                                            <div class="col-sm-4" style="padding-top: 20px; text-align: center;">
                                                <div style="height:250px; width: 250px">
                                                    <img style="border: solid currentColor; height:100%" src="<?php echo base_url('asset/upload_img_member/'.$id_member->path_foto); ?>">
                                                </div>
                                            </div>

                                            <!--Detail Produk-->
                                            <div class="col-sm-8" style="padding-top: 20px;">
                                                <div >
                                                    <div>
                                                        <table class="table">
                                                            
                                                            <tr>
                                                                <td style="width:25%;"><label>Username</label></td>
                                                                <td style="width:1%;"><label>:</label></td>
                                                                <td><label> <?php echo $id_member->username;?> </label></td>
                                                            </tr>
                                                        </table>
                                                    </div>
                                                </div> 
												<div >
                                                    <div >
                                                        <table class="table">
                                                            
                                                            <tr>
                                                                <td style="width:25%;"><label>Nama</label></td>
                                                                <td style="width:1%;"><label>:</label></td>
                                                                <td><label> <?php echo $id_member->nama_member;?> </label></td>
                                                            </tr>
                                                        </table>
                                                    </div>
                                                </div> 
												<div >
                                                    <div>
                                                        <table class="table">
                                                            
                                                            <tr>
                                                                <td style="width:25%;"><label>Email</label></td>
                                                                <td style="width:1%;"><label>:</label></td>
                                                                <td><label> <?php echo $id_member->email;?> </label></td>
                                                            </tr>
                                                        </table>
                                                    </div>
                                                </div> 
												<div >
                                                    <div>
                                                        <table class="table">
                                                            
                                                            <tr>
                                                                <td style="width:25%;"><label>Jumlah Poin</label></td>
                                                                <td style="width:1%;"><label>:</label></td>
                                                                <td><label> <?php echo $id_member->poin;?> </label></td>
                                                            </tr>
                                                        </table>
                                                    </div>
                                                </div> 
												<div >
                                                    <div>
                                                        <table class="table">
                                                            
                                                            <tr>
                                                                <td style="width:25%;"><label>Jumlah Post</label></td>
                                                                <td style="width:1%;"><label>:</label></td>
                                                                <td><label> <?php //echo $id_member->poin;?> </label></td>
                                                            </tr>
                                                        </table>
                                                    </div>
                                                </div> 
												<div >
                                                    <div>
                                                        <table class="table">
                                                            
                                                            <tr>
                                                                <td style="width:25%;"><label>Date Join</label></td>
                                                                <td style="width:1%;"><label>:</label></td>
                                                                <td><label> <?php echo $id_member->date_join;?> </label></td>
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
                                <?php if($id_member->status==1){?>
                                    <!-- Tombol kembali -->
									<a href="<?php echo site_url('KelolaMember');?>"><button class="btn btn-warning btn-sm"><i class="glyphicon glyphicon-arrow-left" ></i> Kembali</button></a>
                                    <!-- Tombol Edit -->
                                    <a href="<?php echo site_url('KelolaMember/edit_member/'.$id_member->id_member);?>"><button id="edit-button-member" type="submit" class="btn btn-info btn-sm"><i class="glyphicon glyphicon-pencil" ></i> Edit</button></a>
									<!-- Tombol Hapus -->
									<a href="<?php echo site_url('KelolaMember/delete_detail_member/'.$id_member->id_member);?>"><button class="btn btn-danger btn-sm"><i class="glyphicon glyphicon-trash" ></i> Hapus</button></a>
                            </div>
                                <?php } else {?>
                            <div class="col-md-10" style="position: absolute; margin-left: -47px;">    
                                    <!-- Tombol kembali -->
                                    <a href="<?php echo site_url('KelolaMember/validasi_member');?>"><button class="btn btn-warning btn-sm"><i class="glyphicon glyphicon-arrow-left" ></i> Kembali</button></a>
                               
                                    <!-- Tombol Setuju -->
                                    <a href="<?php echo site_url('KelolaMember/setuju_detail_member/'.$id_member->id_member);?>"><button id="success-button-member" type="submit" class="btn btn-success btn-sm"><i class="glyphicon glyphicon-ok" ></i> Setuju</button></a>
                                    <!-- Tombol Hapus -->
                                    <a href="<?php echo site_url('KelolaComing/tolak_detail_member/'.$id_member->id_member);?>"><button  id="delete-button-member" type="submit" class="btn btn-danger btn-sm"><i class="glyphicon glyphicon-remove" ></i> Tolak</button>
                            </div>
                                <?php }?>
                            
                            <div class="col-md-1">
                            </div><!--/.col (left) -->
                        </div>
                    </div>   <!-- /.row -->
                </section><!-- /.content -->
            </aside><!-- /.right-side -->