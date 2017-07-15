<aside class="right-side">
                <!-- Content Header (Page header) -->
                <section class="content-header" style="margin-top: 45px;">
                    <h1>
                       Dashboard
                    </h1>
					<div id="instafeed"></div>
                    <ol class="breadcrumb">
                        <li class="active"><a href="#"><i class="glyphicon glyphicon-dashboard"></i> Dashboard</a></li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
                    <!-- Small boxes (Stat box) -->
                    <div class="row">
                        <div class="col-lg-3 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-aqua">
                                <div class="inner">
                                    <h3>
                                        150
                                    </h3>
                                    <p>
                                        New Orders
                                    </p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-bag"></i>
                                </div>
                                <a href="#" class="small-box-footer">
                                    More info <i class="glyphicon glyphicon-circle-arrow-right"></i>
                                </a>
                            </div>
                        </div><!-- ./col -->
                        <div class="col-lg-3 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-green">
                                <div class="inner">
                                    <h3>
                                        <?php echo $jum_approve_event;?>
                                    </h3>
                                    <p>
                                        Approved Event
                                    </p>
                                </div>
                                <div class="icon">
                                    <i class="glyphicon glyphicon-ok"></i>
                                </div>
                                <a href="<?php echo site_url('KelolaComing/index'); ?>" class="small-box-footer">
                                    More info <i class="glyphicon glyphicon-circle-arrow-right"></i>
                                </a>
                            </div>
                        </div><!-- ./col -->
                        <div class="col-lg-3 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-red">
                                <div class="inner">
                                    <h3>
                                        <?php echo $jum_pending_event;?>
                                    </h3>
                                    <p>
                                        Pending New Event
                                    </p>
                                </div>
                                <div class="icon">
                                    <i class="glyphicon glyphicon-hourglass"></i>
                                </div>
                                <a href="<?php echo site_url('KelolaComing/validasi_coming'); ?>" class="small-box-footer">
                                    More info <i class="glyphicon glyphicon-circle-arrow-right"></i>
                                </a>
                            </div>
                        </div><!-- ./col -->
                        <div class="col-lg-3 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-yellow">
                                <div class="inner">
                                    <h3>
                                        <?php echo $jum_pending_pepak;?>
                                    </h3>
                                    <p>
                                        Validasi Kosakata Pepak
                                    </p>
                                </div>
                                <div class="icon">
                                    <i class="glyphicon glyphicon-bell"></i>
                                </div>
                                <a href="<?php echo site_url('KelolaPepak/validasi_pepak'); ?>" class="small-box-footer">
                                    More info <i class="glyphicon glyphicon-circle-arrow-right"></i>
                                </a>
                            </div>
                        </div><!-- ./col -->
                    </div><!-- /.row -->

                    <div class="row">
                        <!-- Left col -->
                        <section class="col-lg-6 connectedSortable">
                            <div class="box box-primary">
                                <div class="box-header">
                                    <i class="glyphicon glyphicon-stats"></i>
                                    <h3 class="box-title">Statistik Member</h3>
                                </div>
                                <div class="box-body">
                                    <!-- panggil grafik ocit -->
                                    <div id="container" class="chart" style="min-width: 400px; height: 360px; margin: 0 auto">
                                    </div>
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                        </section>

                        <!-- right col (We are only adding the ID to make the widgets sortable)-->
                        <section class="col-lg-6 connectedSortable">
                            <div class="box box-primary">
                                <div class="box-header">
                                    <i class="glyphicon glyphicon-th-list"></i><h3 class="box-title"> Daftar Event Terdekat</h3>
                                </div>
                                <div class="box-body">
                                    <ol type="number" class="todo-list">
                                        <?php
                                            foreach ($daftar_event_terdekat as $event_terdekat){?>
                                                <li>
                                                    
                                                    <!-- todo text -->
                                                    <span class="text">
                                                        <?php echo htmlspecialchars($event_terdekat['nama_coming']); ?>
                                                    </span>
                                                    <!-- Emphasis label -->
                                                    <small class="label label-danger">
                                                        <i class="glyphicon glyphicon-calendar"></i>
                                                        <?php
                                                            $tgl_mulai=$event_terdekat['tgl_mulai'];
                                                            $tgl_selesai=$event_terdekat['tgl_selesai'];

                                                            if ($tgl_mulai == $tgl_selesai) 
                                                            {
                                                                echo $tgl_mulai;   
                                                            }
                                                            else
                                                            {
                                                                echo $tgl_mulai." s/d ".$tgl_selesai;
                                                            }
                                                        ?>
                                                    </small>
                                                    <!-- General tools such as edit or delete-->
                                                    <div class="tools">
                                                        <a href="#" target="_blank" title="Lihat">
                                                            <i class="glyphicon glyphicon-eye-open"></i>
                                                        </a>
                                                        <a href="<?php echo site_url('KelolaComing/edit_comming_soon/'.$event_terdekat['id_coming']);?>" title="Edit">
                                                            <i class="glyphicon glyphicon-pencil"></i>
                                                        </a>
                                                        <a href="<?php echo site_url('AdminDashboard/delete_event/'.$event_terdekat['id_coming']);?>" class="deleteButton" title="Hapus">
                                                            <i class="glyphicon glyphicon-trash"></i>
                                                        </a>
                                                    </div>
                                                </li>
                                            <?php   }
                                            ?>
                                    </ol>
                                </div><!-- /.box-body -->
                                <div class="box-footer clearfix no-border" style="text-align: right;">
                                    <a href="<?php echo site_url('KelolaComing/tambah_coming_check/');?>"><button class="btn btn-info"><i class="glyphicon glyphicon-plus"></i> Tambah Event</button></a>
                                </div>
                            </div><!-- /.box -->
                        </section><!-- right col -->
                    </div>

                </section><!-- /.content -->
            </aside><!-- /.right-side -->

            
            <script src="<?php echo base_url('asset/js/highcharts.js?ver=b1.0'); ?>"></script>
            <script src="<?php echo base_url('asset/js/exporting.js?ver=b1.0'); ?>"></script>
           <script src="<?php echo base_url('asset/js/grafik_tahun.js?ver=b1.0'); ?>"></script>