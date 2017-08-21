<?php if(!isset($active)){$active=0;} ?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta name="description" content="">
      <meta name="author" content="Wong Kongkow">

      <title> boloku.id </title>

      <link rel="shortcut icon" href="<?php echo base_url('asset/img/Icon Web.ico'); ?>" type="image/x-icon">
      <link rel="icon" href="<?php echo base_url('asset/img/Icon Web.ico'); ?>" type="image/x-icon">

      <!-- Core Bootstrap File -->
      <link href="<?php echo base_url('asset/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet" type="text/css" />

      <!-- Mega Menu -->
      <link rel="stylesheet" type="text/css" href="<?php echo base_url('asset/css/megaMenu.css'); ?>">

      <!-- Template Core Css -->
      <link href="<?php echo base_url('asset/css/style_front_end.css?v=3'); ?>" rel="stylesheet" type="text/css">
      <link href="<?php echo base_url('asset/css/breakingNews.css'); ?>" rel="stylesheet" type="text/css">
      <link href="<?php echo base_url('asset/css/magnific-popup.css'); ?>" rel="stylesheet" type="text/css">

      <!-- ANIMATE CSS -->
      <link href="<?php echo base_url('asset/css/animate.min.css'); ?>" rel="stylesheet" type="text/css">

      <!-- ZERO GRID CSS -->
      <link href="<?php echo base_url('asset/css/zerogrid.css'); ?>" rel="stylesheet" type="text/css">

      <!-- Responsive slider CSS -->
      <link href="<?php echo base_url('asset/css/slider/responsiveslides.css'); ?>" rel="stylesheet" type="text/css">

      <!-- Font Awesome Icons -->
      <link href="<?php echo base_url('asset/css/font-awesome.min.css'); ?>" rel="stylesheet" type="text/css">
      <link rel="stylesheet" href="<?php echo base_url('asset/css/themify-icons.css'); ?>" type="text/css">

      <!-- Owl Slider Css -->
      <link href="<?php echo base_url('asset/css/owl.carousel.css'); ?>" rel="stylesheet" type="text/css">
      <link href="<?php echo base_url('asset/css/owl.theme.default.css'); ?>" rel="stylesheet" type="text/css">

      <!-- daterange picker -->
      <link href="<?php echo base_url('asset/css/daterangepicker/daterangepicker-bs3.css'); ?>" rel="stylesheet" type="text/css" />

      <!-- Theme Color -->
      <link rel="stylesheet" id="color" href="<?php echo base_url('asset/css/colors/defualt.css'); ?>">

      

      <script type="text/javascript" src="<?php echo base_url('asset/js/jquery.min.js'); ?>"></script>
      <!-- Bootstrap Core Js --> 
      <script type="text/javascript" src="<?php echo base_url('asset/bootstrap/js/bootstrap.min.js'); ?>"></script>
   </head>

   <body>
      <!--Top Bar-->
      <section class="topbar" style="display: block;">
         <div class="container">
            <div class="row">
               <div class="col-md-12 col-sm-12 col-xs-12 nopadding">
                  <div class="col-md-6 col-sm-3 col-xs-12">
                     
                  </div>
                  <div class="col-md-6 col-sm-9 col-xs-12">
                     <ul>
                        <li class="dropdown" role="presentation">
                              <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" href=""><i class="ti-user"></i> <?php if(isset($this->session->userdata['is_logged_in'])){echo $this->session->userdata['username'];} else {?>Sign In <?php } ?><span class="caret"></span></a>
                              <div class="dropdown-menu" style="margin-left: -40px; width: 250px; padding: 2px;">
									<?php if(isset($this->session->userdata['is_logged_in'])) {?>
									<div style="background-color: steelblue; text-align:center; padding:5px; border-radius:inherit;" >
                              <label><?php echo $this->session->userdata['nama_member'] ?></label>
                           </div>   
									<br>
									<a href="<?php echo site_url('KelolaMember/dashboard_member'); ?>"><button class="btn btn-warning" type="submit" name="profil" ><span class="glyphicon glyphicon-log-in"></span> Lihat Profilmu</button></a>
									<button class="btn btn-colored-blog" type="submit" name="logout"><a href="<?php echo site_url('Account/logout_member'); ?>"><span class="glyphicon glyphicon-log-out"></span> Logout</a></button>
									<?php } else {?>
                                    <div style="background-color: steelblue; text-align:center; padding:5px; border-radius:inherit;" >
                                       <label>Sign In Member</label>
                                    </div>
                                    <form style="padding:10px;" class="omb_loginForm" id="form-login" action="<?php echo site_url('Account/login_member'); ?>" autocomplete="on" method="POST">
                                       <?php 
											echo $this->session->flashdata('notification');
											echo $this->session->userdata('is_logged_in');
                                             //$this->load->library('form_validation');
                                             //echo validation_errors(); 
                                       ?>

                                       <p style="color:red; font-family: Comic Sans Ms;"><?php //echo $this->session->flashdata('notification'); ?></p>
                                       
                                       <div class="input-group">
                                             <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                             <input type="text" class="form-control" name="username" id="username_login" placeholder="username" required value="<?php //echo set_value('username'); ?>">
                                       </div>
                                       <span class="help-block"></span>
                                                                     
                                       <div class="input-group">
                                             <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                             <input  type="password" class="form-control" name="password" id="password_login" placeholder="Password" required value="<?php //echo set_value('password'); ?>">
                                       </div><br>
                                       <button class="btn btn-colored-blog pull-right" type="submit" name="login"><span class="glyphicon glyphicon-log-in"></span> Sign In</button>
                                       <p class="omb_forgotPwd" style="color:blue; font-size:small; padding:6px;"><a href="<?php echo site_url('KelolaMember/reset_password_member');?>" style="color:blue;" >Forgot password?</a></p>
                                       
                                       <!--
                                       <div class="col-sm-4 omb_login"><hr class="omb_hrOr"></div>      
                                       <div class="col-sm-4" style="margin-top: 9px"><p style="color:black;">OR</p></div>
                                       <div class="col-sm-4 omb_login"><hr class="omb_hrOr"></div>
                                       
                                       <div>
                                          <div class="col-sm-6">
                                             <button class="btn btn-primary" type="submit" name="login"><label>facebook</label></button>
                                          </div>
                                          <div class="col-sm-6">
                                             <button class="btn btn-danger" type="submit" name="login"><label>GMail</label></button>
                                          </div>
                                       </div>-->
                                    </form>
                                    <hr style="border: solid 1px #f44a56; margin-top: auto; opacity: 0.4;"></hr>
                                    <a href="<?php echo site_url('KelolaMember/registrasi_member_baru');?>">
                                       <button style="padding: 10px; margin-top: -15px; width: 100%;" class="btn btn-warning" type="submit" name="login"> Kamu Bukan Boloku ?</button>
                                    </a>
									<?php } ?>
                              </div>
                        </li>
                        <li> <i class="ti-calendar"></i> <?php echo date('d-M-Y') ?></li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </section>

      <!--Navigation Bar-->
      <section class="menu-container-section" style="background-color: white;">
         <nav id="menu-3" class="megaMenu">
            <div class="nav-container">
               <div class="sticky-container">
                  <!-- mobile trigger button for show the collapse drop down -->
                  <ul class="menu-mobile-trigger">
                     <li><i class="fa fa-bars"></i></li>
                  </ul>
                  <ul class="menu-logo hidden-md">
                     <li>
                        <a href="<?php echo base_url(''); ?>">
                           <img style="padding: 5px;" src="<?php echo base_url('asset/img/logo_boloku.png'); ?>" class="img-responsive" alt="logo">
                        </a>
                     </li>
                  </ul>
                  <ul class="menu-search-bar-mobile">
                     <li>
                        <form action="#">
                           <button type="submit"><i class="fa fa-search"></i></button>
                           <input type="search" name="s" placeholder="Search...">
                        </form>
                     </li>
                  </ul>
                  <ul class="menu-links pull-right">

                     <!--Menu boloku Home-->
                     <li <?php if($active==1){
                           echo "class='active'";
                        } ?> >
                        <a href="<?php echo base_url(''); ?>">
                           <span class="text">  Home </span>
                        </a>
                     </li>

                     <!--Menu boloku Wow-->
                     <li <?php if($active==2){
                           echo "class='active'";
                        } ?>>
                        <a href="<?php echo base_url('event_page'); ?>">
                           <span class="text">  Event </span> 
                        </a>
                     </li>

                     <!--Menu boloku Shopping-->
                     <li <?php if($active==3){
                           echo "class='active'";
                        } ?>>
                        <a href="<?php echo base_url('ngertirak'); ?>">
                           <span class="text"> Ngerti Rak ? </span>
                        </a>
                     </li>

                     <!--Menu boloku Karepmu-->
                     <li <?php if($active==4){
                           echo "class='active'";
                        } ?>>
                        <a href="<?php echo base_url('faq'); ?>">
                           <span class="text"> FAQ </span>
                        </a>
                     </li>

                     <!--Menu boloku Contact-->
                     <li <?php if($active==5){
                           echo "class='active'";
                        } ?>>
                        <a href="<?php echo base_url('contact_us'); ?>">
                           <span class="text"> Contact Us </span>
                        </a>
                     </li>
                  </ul>

                  <ul class="menu-search-bar-desktop">
                     <li>
                        <a href="javascript:void(0)">
                        <i class="fa fa-search"></i>
                        </a>
                        <div id="open-1" class="drop-down">
                           <form action="#">
                              <input type="search" name="s" placeholder="Search...">
                              <button type="submit">Search</button>
                           </form>
                        </div>
                     </li>
                  </ul>
               </div>
            </div>
         </nav>
      </section>
      