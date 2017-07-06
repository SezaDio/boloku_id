<aside class="left-side sidebar-offcanvas">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    <!-- sidebar menu: : style can be found in sidebar.less -->
                    <ul class="sidebar-menu">
                        <li class="active">
                            <a href="<?php echo site_url('AdminDashboard/index');?>">
                                 <i class="glyphicon glyphicon-dashboard"></i> <span>Dashboard</span>
                            </a>
                        </li>

                        <li>
                            <a href="<?php echo site_url('KelolaWow/index'); ?>">
                                <i class="glyphicon glyphicon-star"></i> <span> Ngerti Rak ? </span>
                            </a>
                        </li>
                        
                        <li class="treeview">
                            <a href="#">
                                <i class="glyphicon glyphicon-th-list"></i> <span> Event & News Control </span>
                                <i class="glyphicon glyphicon-menu-right pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="<?php echo site_url('KelolaComing/index'); ?>"><i class="glyphicon glyphicon-minus"></i> Kelola Event</a></li>
                                <li><a href="<?php echo site_url('KelolaComing/validasi_coming'); ?>"><i class="glyphicon glyphicon-minus"></i> Validasi Event</a></li>
                            </ul>
                        </li>

                        <li class="treeview">
                            <a href="#">
                                <i class="glyphicon glyphicon-book"></i><span> Pepak Semarang </span>
                                <i class="glyphicon glyphicon-menu-right pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="<?php echo site_url('KelolaPepak/index'); ?>"><i class="glyphicon glyphicon-minus"></i> Kelola Pepak</a></li>
                                <li><a href="<?php echo site_url('KelolaPepak/validasi_pepak'); ?>"><i class="glyphicon glyphicon-minus"></i> Validasi Pepak</a></li>
                            </ul>
                        </li>

                        <li class="treeview">
                            <a href="<?php echo site_url('KelolaChallenge/index'); ?>">
                                <i class="glyphicon glyphicon-collapse-up"></i> <span> Challenge Update </span>
                            </a>
                        </li>

                        <li class="treeview">
                            <a href="#">
                                <i class="glyphicon glyphicon-list-alt"></i> <span> Kelola Pendaftaran </span>
                            </a>
                        </li>
                        
                        <li>
                            <a href="overview_album.php"><i class="glyphicon glyphicon-cog"></i> <span>Member Control</span></a>  
                        </li> 
                        
                        <li>
                            <a href="overview_album.php"><i class="glyphicon glyphicon-cog"></i> <span>Administrator Control</span></a>  
                        </li>
                    </ul>
                </section>
                <!-- /.sidebar -->
            </aside>