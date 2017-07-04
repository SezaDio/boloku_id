<aside class="left-side sidebar-offcanvas">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    <!-- sidebar menu: : style can be found in sidebar.less -->
                    <ul class="sidebar-menu">
                        <li class="active">
                            <a href="<?php echo base_url()?>">
                                 <i class="glyphicon glyphicon-dashboard"></i> <span>Dashboard</span>
                            </a>
                        </li>

                        <li>
                            <a href="<?php echo site_url('KelolaWow/index'); ?>">
                                <i class="glyphicon glyphicon-star"></i> <span> Youth Wow </span>
                            </a>
                        </li>

                        <li class="treeview">
                            <a href="#">
                                <i class="glyphicon glyphicon-collapse-up"></i> <span> Youth Update </span>
                            </a>
                        </li>
                        
                        <li class="treeview">
                            <a href="#">
                                <i class="glyphicon glyphicon-list-alt"></i> <span> Youth News </span>
                                <i class="glyphicon glyphicon-menu-right pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="<?php echo site_url('KelolaNews/index'); ?>"><i class="glyphicon glyphicon-minus"></i> Kelola News </a></li>
                                <li><a href="<?php echo site_url('KelolaNews/validasi_news'); ?>"><i class="glyphicon glyphicon-minus"></i> Validasi News</a></li>
                            </ul>
                        </li>
                        
                        <li class="treeview">
                            <a href="#">
                                <i class="glyphicon glyphicon-book"></i><span> Youth Pepak </span>
                                <i class="glyphicon glyphicon-menu-right pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="<?php echo site_url('KelolaPepak/index'); ?>"><i class="glyphicon glyphicon-minus"></i> Kelola Pepak</a></li>
                                <li><a href="<?php echo site_url('KelolaPepak/validasi_pepak'); ?>"><i class="glyphicon glyphicon-minus"></i> Validasi Pepak</a></li>
                            </ul>
                        </li>
                        
                        <li class="treeview">
                            <a href="#">
                                <i class="glyphicon glyphicon-asterisk"></i> <span> Youth Karepmu </span>
                                <i class="glyphicon glyphicon-menu-right pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="add_event.php"><i class="glyphicon glyphicon-minus"></i> Kelola Posting Karepmu     </a></li>
                                <li><a href="event_editors.php"><i class="glyphicon glyphicon-minus"></i> Kelola Stiker</a></li>
                            </ul>
                        </li>


                        <li class="treeview">
                            <a href="#">
                                <i  class="glyphicon glyphicon-shopping-cart"></i> <span> Youth Shopping </span>
                                <i class="glyphicon glyphicon-menu-right pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="<?php echo site_url('KelolaShopping/index'); ?>"><i class="glyphicon glyphicon-minus"></i> Kelola Shopping </a></li>
                                <li><a href="<?php echo site_url('KelolaShopping/validasi_shopping'); ?>"><i class="glyphicon glyphicon-minus"></i> Validasi Shopping </a></li>
                            </ul>
                        </li>
                        

                        <li class="treeview">
                            <a href="#">
                                <i class="glyphicon glyphicon-th-list"></i> <span> Youth Coming Soon </span>
                                <i class="glyphicon glyphicon-menu-right pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="<?php echo site_url('KelolaComing/index'); ?>"><i class="glyphicon glyphicon-minus"></i> Kelola Coming Soon</a></li>
                                <li><a href="<?php echo site_url('KelolaComing/validasi_coming'); ?>"><i class="glyphicon glyphicon-minus"></i> Validasi Coming Soon</a></li>
                            </ul>
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