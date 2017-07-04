<aside class="right-side">
                <!-- Content Header (Page header) -->
                <section class="content-header" style="margin-top: 45px;">
                    <h1>
                       Validasi Member
                    </h1>
                    <ol class="breadcrumb">
                        <li><i class="fa fa-dashboard"></i>Member Control</li>
                        <li class="active">Validasi Member</li>
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
                                                    <th class="title-center" style="font-size:1em; text-align:center;">Username</th>
                                                    <th class="title-center" style="font-size:1em; text-align:center;">Nama</th>
                                                    <th class="title-center" style="font-size:1em; text-align:center;">Email</th>
                                                    <th class="title-center" style="font-size:1em; text-align:center;">Poin</th>
                                                    <th class="title-center" style="font-size:1em; text-align:center;">Aksi</th>                                                        
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php 
                                                    foreach($listMember as $item)
                                                    { ?>
                                                        <tr>
                                                            <td style="text-align: center;"><?php echo $item['id_member'] ?></td>
                                                            <td><?php echo $item['username'] ?></td>
                                                            <td><?php echo $item['nama_member'] ?></td>
                                                            <td><?php echo $item['email'];?></td>
                                                            <td><?php echo $item['poin'];?></td>
                                                            <td align="center">
                                                                <!-- Tombol lihat detail -->
                                                                <a href="<?php echo site_url('KelolaMember/lihat_detail_member/'.$item['id_member']);?>"><button class="btn btn-warning btn-sm"><i class="glyphicon glyphicon-eye-open" ></i> Detail</button></a>
																
																<!-- Tombol Setuju -->
                                                                <button onclick="setuju_member_ajax(<?php echo $item['id_member']; ?>)" id="success-button-member" type="submit" class="btn btn-success btn-sm"><i class="glyphicon glyphicon-ok" ></i> Setuju</button>
                                                                
                                                                <!-- Tombol Hapus -->
                                                                <button onclick="tolak_member_ajax(<?php echo $item['id_member']; ?>)" id="delete-button-member" type="submit" class="btn btn-danger btn-sm"><i class="glyphicon glyphicon-remove" ></i> Tolak</button>
                                                                
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


            