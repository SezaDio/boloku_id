<aside class="right-side">
                <!-- Content Header (Page header) -->
                <section class="content-header" style="margin-top: 45px;">
                    <h1>
                       Detail Event
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
                        
                            <div class="col-md-1">
                            </div><!--/.col (left) -->

                            <div class="col-md-10">
                                <!-- general form elements -->
                                <div class="box box-primary">

                                    <!--Mulai Tampilkan Data Table-->
                                    <div class="box-body" style="align-content: center;">
                                        <H3 style="text-align: center;"><?php echo $id_coming->nama_coming;?></H3>
                                        <p style="text-align: center;">Diposting oleh : <?php echo $id_coming->posted_by;?></p>
                                        <hr>

                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="box-body">
                                                    <!--Gambar Event-->
                                                    <div style="height:250px; width: 250px; text-align:center;">
                                                        <img style="border: solid currentColor; height:100%" src="<?php echo base_url('asset/upload_img_coming/'.$id_coming->path_gambar); ?>">
                                                    </div><br>
                                                    <div style="margin-left: 20px;">
                                                        <?php if($id_coming->status==1){?>
                                                            <!-- Tombol kembali -->
                                                            <a href="<?php echo site_url('KelolaComing');?>"><button class="btn btn-warning btn-sm"><i class="glyphicon glyphicon-arrow-left" ></i> Kembali</button></a>
                                                            <!-- Tombol Edit -->
                                                            <a href="<?php echo site_url('KelolaComing/edit_comming_soon/'.$id_coming->id_coming);?>"><button id="edit-button-coming" type="submit" class="btn btn-info btn-sm"><i class="glyphicon glyphicon-pencil" ></i> Edit</button></a>
                                                            <!-- Tombol Hapus -->
                                                            <a href="<?php echo site_url('KelolaComing/delete_detail_coming/'.$id_coming->id_coming);?>"><button class="btn btn-danger btn-sm"><i class="glyphicon glyphicon-trash" ></i> Hapus</button></a>
                                                    </div>
                                                    <div style="width: 300px;">
                                                        <?php } else {?>
                                                        
                                                            <!-- Tombol kembali -->
                                                            <a href="<?php echo site_url('KelolaComing/validasi_Coming');?>"><button class="btn btn-warning btn-sm"><i class="glyphicon glyphicon-arrow-left" ></i> Kembali</button></a>
                                                            <!-- Tombol Edit -->
                                                            <a href="<?php echo site_url('KelolaComing/edit_comming_soon/'.$id_coming->id_coming);?>"><button id="edit-button-coming" type="submit" class="btn btn-info btn-sm"><i class="glyphicon glyphicon-pencil" ></i> Edit</button></a>
                                                            <!-- Tombol Setuju -->
                                                            <a href="<?php echo site_url('KelolaComing/setuju_detail_coming/'.$id_coming->id_coming);?>"><button id="success-button-coming" type="submit" class="btn btn-success btn-sm"><i class="glyphicon glyphicon-ok" ></i> Setuju</button></a>
                                                            <!-- Tombol Hapus -->
                                                            <a href="<?php echo site_url('KelolaComing/tolak_detail_coming/'.$id_coming->id_coming);?>"><button  id="delete-button-coming" type="submit" class="btn btn-danger btn-sm"><i class="glyphicon glyphicon-remove" ></i> Tolak</button></a>
                                                    
                                                        <?php }?>
                                                    </div>
                                                </div>
                                            </div>

                                            <!--Detail Event-->
                                            <div class="col-sm-8" style="padding-top: 10px;">   
                                                <div class="box-group" id="accordion">

                                                    <!--Accordion for information event-->
                                                    <div class="panel box box-primary">
                                                        <div class="box-header">
                                                            <h4 class="box-title">
                                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                                                                    Informasi Event
                                                                </a>
                                                            </h4>
                                                        </div>
                                                        <div id="collapseOne" class="panel-collapse collapse">
                                                            <div class="box-body">
                                                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!--Accordion for Press Release List-->
                                                    <div class="panel box box-danger">
                                                        <div class="box-header">
                                                            <h4 class="box-title">
                                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                                                                    Daftar Press Release News
                                                                </a>
                                                            </h4>
                                                        </div>
                                                        <div id="collapseTwo" class="panel-collapse collapse">
                                                            <div class="box-body">
                                                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!--Accordion for Testimoni List-->
                                                    <div class="panel box box-success">
                                                        <div class="box-header">
                                                            <h4 class="box-title">
                                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                                                                    Daftar Testimoni
                                                                </a>
                                                            </h4>
                                                        </div>
                                                        <div id="collapseThree" class="panel-collapse collapse">
                                                            <div class="box-body">
                                                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS. Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        

                                    </div><!-- /.box-body -->

                                </div><!-- /.box -->
                            </div><!--/.col (left) -->
                            
                            
                            <div class="col-md-1">
                            </div><!--/.col (left) -->
                        
                    </div>   <!-- /.row -->
                </section><!-- /.content -->
            </aside><!-- /.right-side -->