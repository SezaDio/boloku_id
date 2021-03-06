<aside style="position: fixed;" class="left-side sidebar-offcanvas">
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
                            <a href="<?php echo site_url('KelolaFaq/index'); ?>">
                                <i class="glyphicon glyphicon-question-sign"></i> <span> Kelola FAQ </span>
                            </a>
                        </li>

                        <li>
                            <a href="<?php echo site_url('KelolaWow/index'); ?>">
                                <i class="glyphicon glyphicon-star"></i> <span> Ngerti Rak ? </span>
                            </a>
                        </li>

                        <li>
                             <a href="<?php echo site_url('KelolaStiker/index'); ?>">
                                <i class="glyphicon glyphicon-certificate"></i> <span> Kelola Stiker </span>
                            </a>
                        </li>

                        <li>
                            <a href="<?php echo site_url('KelolaArtikel/index'); ?>">
                                <i class="glyphicon glyphicon-file"></i> <span> Kelola Artikel </span>
                            </a>
                        </li>

						
						<li>
                            <a href="<?php echo site_url('KelolaHeader/index'); ?>">
                                <i class="glyphicon glyphicon-picture"></i> <span> Kelola Header </span>
                            </a>
                        </li>

                        <li>
                            <a href="<?php echo site_url('FrontControl_ContactUs/kelola_message'); ?>">
                                <i class="glyphicon glyphicon-envelope"></i> <span> Kelola Message </span>
                            </a>
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

                        <li>
                            <a href="<?php echo site_url('KelolaChallenge/index'); ?>">
                                <i class="glyphicon glyphicon-collapse-up"></i> <span> Challenge Update </span>
                            </a>
                        </li>


                        <li>
                            <a href="<?php echo site_url('KelolaPendaftar/index'); ?>">
                                <i class="glyphicon glyphicon-list-alt"></i> <span> Kelola Pendaftaran </span>
                            </a>
                        </li>
                        
                        <li class="treeview">
                            <a href="#">
                                <i class="glyphicon glyphicon-th-list"></i> <span> Kelola Event & News</span>
                                <i class="glyphicon glyphicon-menu-right pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="<?php echo site_url('KelolaComing/index'); ?>"><i class="glyphicon glyphicon-minus"></i> Kelola Event</a></li>
                                <li><a href="<?php echo site_url('KelolaComing/validasi_coming'); ?>"><i class="glyphicon glyphicon-minus"></i> Validasi Event</a></li>
                            </ul>
                        </li>

                        
                        <li class="treeview">
                            <a href="#">
								<i class="glyphicon glyphicon-user"></i> <span> Member Control</span>
								<i class="glyphicon glyphicon-menu-right pull-right"></i>
							</a> 
							<ul class="treeview-menu">
                                <li><a href="<?php echo site_url('KelolaMember/index'); ?>"><i class="glyphicon glyphicon-minus"></i> Kelola Member</a></li>
                                <li><a href="<?php echo site_url('KelolaMember/validasi_member'); ?>"><i class="glyphicon glyphicon-minus"></i> Validasi Member</a></li>
                            </ul>
                        </li> 
                        
						<?php if($this->session->userdata('status_admin')=='Super Admin'){?>
                        <li>
                            <a href="<?php echo site_url('KelolaAdmin/index'); ?>">
							<i class="glyphicon glyphicon-cog"></i> <span>Administrator Control</span></a>  
                        </li>
						<?php } ?>
                    </ul>
                </section>
                <!-- /.sidebar -->
            </aside>