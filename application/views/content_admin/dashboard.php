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
                                <a href="#" class="small-box-footer">
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
                                <a href="#" class="small-box-footer">
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
                                <a href="#" class="small-box-footer">
                                    More info <i class="glyphicon glyphicon-circle-arrow-right"></i>
                                </a>
                            </div>
                        </div><!-- ./col -->
                    </div><!-- /.row -->
                </section><!-- /.content -->
            </aside><!-- /.right-side -->