<!DOCTYPE html>
<html lang="en">
   <head>
      <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta name="description" content="">
      <meta name="author" content="Wong Kongkow">

      <title> Wong Kongkow </title>

      <link rel="shortcut icon" href="<?php echo base_url('asset/img/favicon.ico'); ?>" type="image/x-icon">
      <link rel="icon" href="<?php echo base_url('asset/img/favicon.ico'); ?>" type="image/x-icon">

      <!-- Core Bootstrap File -->
      <link href="<?php echo base_url('asset/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet" type="text/css" />

      <!-- Mega Menu -->
      <link rel="stylesheet" type="text/css" href="<?php echo base_url('asset/css/megaMenu.css'); ?>">

      <!-- Template Core Css -->
      <link href="<?php echo base_url('asset/css/style_front_end.css'); ?>" rel="stylesheet" type="text/css">
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


      <!-- Theme Color -->
      <link rel="stylesheet" id="color" href="<?php echo base_url('asset/css/colors/defualt.css'); ?>">

      <!-- For Style Switcher -->
      <link rel="stylesheet" id="theme-color" type="text/css" href="#" />
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
                              <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" href=""><i class="ti-user"></i> Sign In <span class="caret"></span></a>
                              <div class="dropdown-menu" style="width: 250px; padding: 2px;">
                                    <div style="background-color: steelblue; text-align:center; padding:5px; border-radius:inherit;" >
                                       <label>Sign In Youthers</label>
                                    </div>
                                    <form style="padding:10px;" class="omb_loginForm" id="form-login" action="<?php //echo site_url('Account/login'); ?>" autocomplete="on" method="POST">
                                       <?php 
                                             //$this->load->library('form_validation');
                                             //echo validation_errors(); 
                                       ?>

                                       <p style="color:red; font-family: Comic Sans Ms;"><?php //echo $this->session->flashdata('notification'); ?></p>
                                       
                                       <div class="input-group">
                                             <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                             <input type="text" class="form-control" name="username" placeholder="username" required value="<?php //echo set_value('username'); ?>">
                                       </div>
                                       <span class="help-block"></span>
                                                                     
                                       <div class="input-group">
                                             <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                             <input  type="password" class="form-control" name="password" placeholder="Password" required value="<?php //echo set_value('password'); ?>">
                                       </div><br>
                                       <button class="btn btn-colored-blog pull-right" type="submit" name="login"><span class="glyphicon glyphicon-log-in"></span> Sign In</button>
                                       <p class="omb_forgotPwd" style="color:blue; font-size:small; padding:6px;"><a style="color:blue;" href="#">Forgot password?</a></p>
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

                              </div>
                        </li>
                        <li> <i class="ti-calendar"></i> Saturday 28 January, 2017</li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </section>

      <!--Big Logo-->
      <section class="logo-row logo-center">
         <div class="container">
            <div class="row">
               <div class="col-md-12 col-sm-12 col-xs-12">
                  <div class="logo"> <a href="#"><img alt="" src="<?php echo base_url('asset/img/logo1.png'); ?>"></a> </div>
               </div>
            </div>
         </div>
      </section>

      <!--Navigation Bar-->
      <section class="menu-container-section">
         <nav id="menu-3" class="megaMenu">
            <div class="nav-container">
               <div class="sticky-container">
                  <!-- mobile trigger button for show the collapse drop down -->
                  <ul class="menu-mobile-trigger">
                     <li><i class="fa fa-bars"></i></li>
                  </ul>
                  <ul class="menu-logo hidden-md">
                     <li>
                        <a href="#">
                        <img src="<?php echo base_url('asset/img/logo-small.png'); ?>" class="img-responsive" alt="logo">
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

                     <!--Menu Wong Kongkow Home-->
                     <li class="active">
                        <a href="<?php echo base_url(''); ?>">
                           <span class="text">  Home </span>
                        </a>
                     </li>

                     <!--Menu Wong Kongkow News-->
                     <li>
                        <a href="javascript:void (0)">
                        <span class="text">News</span>
                        </a>
                        <div class="drop-down-large space-remove nav-tabs">
                           <div class="col-sm-3 col-md-2 space-remove">
                              <ul class="nav nav-tabs vertical" role="tablist">
                                 <li class="active"><a href="#tab1" role="tab" data-toggle="tab"> <i class="fa fa-file-text"></i> All </a></li>
                                 <li><a href="#tab2" role="tab" data-toggle="tab"> <i class="fa fa-compress"></i> Member News </a></li>
                                 <li><a href="#tab3" role="tab" data-toggle="tab"> <i class="fa fa-picture-o"></i> Recomended News </a></li>
                                 <li><a href="#tab4" role="tab" data-toggle="tab"> <i class="fa fa-video-camera"></i> Comunity News </a></li>
                                 <li><a href="#tab4" role="tab" data-toggle="tab"> <i class="fa fa-video-camera"></i> Wong Kongkow News </a></li>
                              </ul>
                           </div>
                           <div class="col-sm-9 col-md-10 space-remove">
                              <div class="tab-content vertical">
                                 <div class="active tab-pane fade in" id="tab1">
                                    <div class="row">
                                       <article class="col-md-4 col-sm-4 col-xs-12">
                                          <div class="grid-1">
                                             <div class="picture">
                                                <div class="category-image">
                                                   <a href="standard-post.html">
                                                   <img alt="" class="img-responsive" src="images/posts/40.jpg">
                                                   </a>
                                                   <div class="catname">
                                                      <a class="btn btn-green" href="#">
                                                         <div>Travel</div>
                                                      </a>
                                                   </div>
                                                   <div class="hover-show-div">
                                                      <a href="" class="post-type">
                                                      <i class="ti-music-alt"></i>
                                                      </a>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="detail">
                                                <div class="caption">
                                                   <h5>
                                                      <a href="standard-post.html">Computer issue for United Airlines in the U.S.</a>
                                                   </h5>
                                                </div>
                                                <ul class="post-tools">
                                                   <li> by <a href=""> <strong> Arsoo</strong> </a></li>
                                                   <li>  5 Hours Ago </li>
                                                   <li><a href=""> <i class="ti-thought"></i> 57</a> </li>
                                                </ul>
                                             </div>
                                          </div>
                                       </article>
                                       <article class="col-md-4 col-sm-4 col-xs-12">
                                          <div class="grid-1">
                                             <div class="picture">
                                                <div class="category-image">
                                                   <a href="standard-post.html">
                                                   <img alt="" class="img-responsive" src="images/posts/41.jpg">
                                                   </a>
                                                   <div class="catname">
                                                      <a class="btn btn-pink" href="#">
                                                         <div>Life Style</div>
                                                      </a>
                                                   </div>
                                                   <div class="hover-show-div">
                                                      <a href="" class="post-type">
                                                      <i class="ti-quote-left"></i>
                                                      </a>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="detail">
                                                <div class="caption">
                                                   <h5>
                                                      <a href="standard-post.html">Super Bowl battles a domain for being John</a>
                                                   </h5>
                                                </div>
                                                <ul class="post-tools">
                                                   <li> by <a href=""> <strong> Arsoo</strong> </a></li>
                                                   <li>  3 Hours ago </li>
                                                   <li><a href=""> <i class="ti-thought"></i> 57</a> </li>
                                                </ul>
                                             </div>
                                          </div>
                                       </article>
                                       <article class="col-md-4 col-sm-4 col-xs-12">
                                          <div class="grid-1">
                                             <div class="picture">
                                                <div class="category-image">
                                                   <a href="standard-post.html">
                                                   <img alt="" class="img-responsive" src="images/posts/42.jpg">
                                                   </a>
                                                   <div class="catname">
                                                      <a class="btn btn-lightblue" href="#">
                                                         <div>technology</div>
                                                      </a>
                                                   </div>
                                                   <div class="hover-show-div">
                                                      <a href="" class="post-type">
                                                      <i class="ti-image"></i>
                                                      </a>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="detail">
                                                <div class="caption">
                                                   <h5>
                                                      <a href="standard-post.html">Charity is buying a search engine for research papers</a>
                                                   </h5>
                                                </div>
                                                <ul class="post-tools">
                                                   <li> by <a href=""> <strong> Arsoo</strong> </a></li>
                                                   <li>  5 mins Ago </li>
                                                   <li><a href=""> <i class="ti-thought"></i> 57</a> </li>
                                                </ul>
                                             </div>
                                          </div>
                                       </article>
                                    </div>
                                 </div>
                                 <div class="tab-pane fade in" id="tab2">
                                    <div class="row">
                                       <article class="col-md-4 col-sm-4 col-xs-12">
                                          <div class="grid-1">
                                             <div class="picture">
                                                <div class="category-image">
                                                   <a href="standard-post.html">
                                                   <img alt="" class="img-responsive" src="images/posts/63.jpg">
                                                   </a>
                                                   <div class="catname">
                                                      <a class="btn btn-green" href="#">
                                                         <div>Travel</div>
                                                      </a>
                                                   </div>
                                                   <div class="hover-show-div">
                                                      <a href="" class="post-type">
                                                      <i class="ti-music-alt"></i>
                                                      </a>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="detail">
                                                <div class="caption">
                                                   <h5>
                                                      <a href="standard-post.html">Computer issue for United Airlines in the U.S.</a>
                                                   </h5>
                                                </div>
                                                <ul class="post-tools">
                                                   <li> by <a href=""> <strong> Arsoo</strong> </a></li>
                                                   <li>  5 Hours Ago </li>
                                                   <li><a href=""> <i class="ti-thought"></i> 57</a> </li>
                                                </ul>
                                             </div>
                                          </div>
                                       </article>
                                       <article class="col-md-4 col-sm-4 col-xs-12">
                                          <div class="grid-1">
                                             <div class="picture">
                                                <div class="category-image">
                                                   <a href="standard-post.html">
                                                   <img alt="" class="img-responsive" src="images/posts/62.jpg">
                                                   </a>
                                                   <div class="catname">
                                                      <a class="btn btn-pink" href="#">
                                                         <div>Life Style</div>
                                                      </a>
                                                   </div>
                                                   <div class="hover-show-div">
                                                      <a href="" class="post-type">
                                                      <i class="ti-quote-left"></i>
                                                      </a>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="detail">
                                                <div class="caption">
                                                   <h5>
                                                      <a href="standard-post.html">Super Bowl battles a domain for being John</a>
                                                   </h5>
                                                </div>
                                                <ul class="post-tools">
                                                   <li> by <a href=""> <strong> Arsoo</strong> </a></li>
                                                   <li>  3 Hours ago </li>
                                                   <li><a href=""> <i class="ti-thought"></i> 57</a> </li>
                                                </ul>
                                             </div>
                                          </div>
                                       </article>
                                       <article class="col-md-4 col-sm-4 col-xs-12">
                                          <div class="grid-1">
                                             <div class="picture">
                                                <div class="category-image">
                                                   <a href="standard-post.html">
                                                   <img alt="" class="img-responsive" src="images/posts/61.jpg">
                                                   </a>
                                                   <div class="catname">
                                                      <a class="btn btn-lightblue" href="#">
                                                         <div>technology</div>
                                                      </a>
                                                   </div>
                                                   <div class="hover-show-div">
                                                      <a href="" class="post-type">
                                                      <i class="ti-image"></i>
                                                      </a>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="detail">
                                                <div class="caption">
                                                   <h5>
                                                      <a href="standard-post.html">Charity is buying a search engine for research papers</a>
                                                   </h5>
                                                </div>
                                                <ul class="post-tools">
                                                   <li> by <a href=""> <strong> Arsoo</strong> </a></li>
                                                   <li>  5 mins Ago </li>
                                                   <li><a href=""> <i class="ti-thought"></i> 57</a> </li>
                                                </ul>
                                             </div>
                                          </div>
                                       </article>
                                    </div>
                                 </div>
                                 <div class="tab-pane fade in" id="tab3">
                                    <div class="row">
                                       <article class="col-md-4 col-sm-4 col-xs-12">
                                          <div class="grid-1">
                                             <div class="picture">
                                                <div class="category-image">
                                                   <a href="standard-post.html">
                                                   <img alt="" class="img-responsive" src="images/posts/60.jpg">
                                                   </a>
                                                   <div class="catname">
                                                      <a class="btn btn-green" href="#">
                                                         <div>Travel</div>
                                                      </a>
                                                   </div>
                                                   <div class="hover-show-div">
                                                      <a href="" class="post-type">
                                                      <i class="ti-music-alt"></i>
                                                      </a>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="detail">
                                                <div class="caption">
                                                   <h5>
                                                      <a href="standard-post.html">Computer issue for United Airlines in the U.S.</a>
                                                   </h5>
                                                </div>
                                                <ul class="post-tools">
                                                   <li> by <a href=""> <strong> Arsoo</strong> </a></li>
                                                   <li>  5 Hours Ago </li>
                                                   <li><a href=""> <i class="ti-thought"></i> 57</a> </li>
                                                </ul>
                                             </div>
                                          </div>
                                       </article>
                                       <article class="col-md-4 col-sm-4 col-xs-12">
                                          <div class="grid-1">
                                             <div class="picture">
                                                <div class="category-image">
                                                   <a href="standard-post.html">
                                                   <img alt="" class="img-responsive" src="images/posts/59.jpg">
                                                   </a>
                                                   <div class="catname">
                                                      <a class="btn btn-pink" href="#">
                                                         <div>Life Style</div>
                                                      </a>
                                                   </div>
                                                   <div class="hover-show-div">
                                                      <a href="" class="post-type">
                                                      <i class="ti-quote-left"></i>
                                                      </a>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="detail">
                                                <div class="caption">
                                                   <h5>
                                                      <a href="standard-post.html">Super Bowl battles a domain for being John</a>
                                                   </h5>
                                                </div>
                                                <ul class="post-tools">
                                                   <li> by <a href=""> <strong> Arsoo</strong> </a></li>
                                                   <li>  3 Hours ago </li>
                                                   <li><a href=""> <i class="ti-thought"></i> 57</a> </li>
                                                </ul>
                                             </div>
                                          </div>
                                       </article>
                                       <article class="col-md-4 col-sm-4 col-xs-12">
                                          <div class="grid-1">
                                             <div class="picture">
                                                <div class="category-image">
                                                   <a href="standard-post.html">
                                                   <img alt="" class="img-responsive" src="images/posts/58.jpg">
                                                   </a>
                                                   <div class="catname">
                                                      <a class="btn btn-lightblue" href="#">
                                                         <div>technology</div>
                                                      </a>
                                                   </div>
                                                   <div class="hover-show-div">
                                                      <a href="" class="post-type">
                                                      <i class="ti-image"></i>
                                                      </a>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="detail">
                                                <div class="caption">
                                                   <h5>
                                                      <a href="standard-post.html">Charity is buying a search engine for research papers</a>
                                                   </h5>
                                                </div>
                                                <ul class="post-tools">
                                                   <li> by <a href=""> <strong> Arsoo</strong> </a></li>
                                                   <li>  5 mins Ago </li>
                                                   <li><a href=""> <i class="ti-thought"></i> 57</a> </li>
                                                </ul>
                                             </div>
                                          </div>
                                       </article>
                                    </div>
                                 </div>
                                 <div class="tab-pane fade" id="tab4">
                                    <div class="row">
                                       <article class="col-md-4 col-sm-4 col-xs-12">
                                          <div class="grid-1">
                                             <div class="picture">
                                                <div class="category-image">
                                                   <a href="standard-post.html">
                                                   <img alt="" class="img-responsive" src="images/posts/58.jpg">
                                                   </a>
                                                   <div class="catname">
                                                      <a class="btn btn-green" href="#">
                                                         <div>Travel</div>
                                                      </a>
                                                   </div>
                                                   <div class="hover-show-div">
                                                      <a href="" class="post-type">
                                                      <i class="ti-music-alt"></i>
                                                      </a>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="detail">
                                                <div class="caption">
                                                   <h5>
                                                      <a href="standard-post.html">Computer issue for United Airlines in the U.S.</a>
                                                   </h5>
                                                </div>
                                                <ul class="post-tools">
                                                   <li> by <a href=""> <strong> Arsoo</strong> </a></li>
                                                   <li>  5 Hours Ago </li>
                                                   <li><a href=""> <i class="ti-thought"></i> 57</a> </li>
                                                </ul>
                                             </div>
                                          </div>
                                       </article>
                                       <article class="col-md-4 col-sm-4 col-xs-12">
                                          <div class="grid-1">
                                             <div class="picture">
                                                <div class="category-image">
                                                   <a href="standard-post.html">
                                                   <img alt="" class="img-responsive" src="images/posts/57.jpg">
                                                   </a>
                                                   <div class="catname">
                                                      <a class="btn btn-pink" href="#">
                                                         <div>Life Style</div>
                                                      </a>
                                                   </div>
                                                   <div class="hover-show-div">
                                                      <a href="" class="post-type">
                                                      <i class="ti-quote-left"></i>
                                                      </a>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="detail">
                                                <div class="caption">
                                                   <h5>
                                                      <a href="standard-post.html">Super Bowl battles a domain for being John</a>
                                                   </h5>
                                                </div>
                                                <ul class="post-tools">
                                                   <li> by <a href=""> <strong> Arsoo</strong> </a></li>
                                                   <li>  3 Hours ago </li>
                                                   <li><a href=""> <i class="ti-thought"></i> 57</a> </li>
                                                </ul>
                                             </div>
                                          </div>
                                       </article>
                                       <article class="col-md-4 col-sm-4 col-xs-12">
                                          <div class="grid-1">
                                             <div class="picture">
                                                <div class="category-image">
                                                   <a href="standard-post.html">
                                                   <img alt="" class="img-responsive" src="images/posts/56.jpg">
                                                   </a>
                                                   <div class="catname">
                                                      <a class="btn btn-lightblue" href="#">
                                                         <div>technology</div>
                                                      </a>
                                                   </div>
                                                   <div class="hover-show-div">
                                                      <a href="" class="post-type">
                                                      <i class="ti-image"></i>
                                                      </a>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="detail">
                                                <div class="caption">
                                                   <h5>
                                                      <a href="standard-post.html">Charity is buying a search engine for research papers</a>
                                                   </h5>
                                                </div>
                                                <ul class="post-tools">
                                                   <li> by <a href=""> <strong> Arsoo</strong> </a></li>
                                                   <li>  5 mins Ago </li>
                                                   <li><a href=""> <i class="ti-thought"></i> 57</a> </li>
                                                </ul>
                                             </div>
                                          </div>
                                       </article>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </li>

                     <!--Menu Wong Kongkow Wow-->
                     <li>
                        <a href="<?php echo base_url('FrontControl_Wow'); ?>">
                           <span class="text">  Wow </span> 
                        </a>
                     </li>

                     <!--Menu Wong Kongkow Shopping-->
                     <li>
                        <a href="<?php echo base_url('FrontControl_Shopping'); ?>">
                           <span class="text"> Shopping </span>
                        </a>
                     </li>

                     <!--Menu Wong Kongkow Comming Soon-->
                     <li>
                        <a href="<?php echo base_url('FrontControl_CommingSoon'); ?>">
                        <span class="text"> Comming Soon</span>
                        </a>
                     </li>

                     <!--Menu Wong Kongkow Karepmu-->
                     <li>
                        <a href="#">
                           <span class="text"> Karepmu</span>
                        </a>
                     </li>

                     <!--Menu Wong Kongkow Contact-->
                     <li>
                        <a href="javascript:void (0)">
                        <span class="text">Contact</span>
                        </a>
                        <div class="drop-down-medium col-md-8 col-md-pull-1">
                           <div class="col-sm-3">
                              <div class="list-items">
                                 <h4>Blog Pages</h4>
                                 <ul>
                                    <li>
                                       <a href="blog-grids.html"> <i class="ti-angle-right"></i> Blog Grid</a>
                                       <hr>
                                    </li>
                                    <li>
                                       <a href="blog-grids-2.html"> <i class="ti-angle-right"></i> Blog Grid 2</a>
                                       <hr>
                                    </li>
                                    <li>
                                       <a href="blog-listing.html"> <i class="ti-angle-right"></i> Blog Listing</a>
                                       <hr>
                                    </li>
                                    <li>
                                       <a href="blog-grids-small.html"> <i class="ti-angle-right"></i> Blog Grid Small</a>
                                       <hr>
                                    </li>
                                 </ul>
                              </div>
                           </div>
                           <div class="col-sm-3">
                              <div class="list-items">
                                 <h4>Detail Pages</h4>
                                 <ul>
                                    <li>
                                       <a href="standard-post.html"> <i class="ti-angle-right"></i> Statndard Post</a>
                                       <hr>
                                    </li>
                                    <li>
                                       <a href="standard-post2.html"> <i class="ti-angle-right"></i> Statndard Post 2</a>
                                       <hr>
                                    </li>
                                    <li>
                                       <a href="standard-post-full.html"> <i class="ti-angle-right"></i> Full Width Image</a>
                                       <hr>
                                    </li>
                                    <li>
                                       <a href="standard-post-full-width.html"> <i class="ti-angle-right"></i> Full Width Post</a>
                                       <hr>
                                    </li>
                                 </ul>
                              </div>
                           </div>
                           <div class="col-sm-3">
                              <div class="list-items">
                                 <h4>Extra Pages</h4>
                                 <ul>
                                    <li>
                                       <a href="about.html"> <i class="ti-angle-right"></i> About</a>
                                       <hr>
                                    </li>
                     
                                    <li>
                                       <a href="contact.html"> <i class="ti-angle-right"></i> Contact</a>
                                       <hr>
                                    </li>
                                    <li>
                                       <a href="contact-2.html"> <i class="ti-angle-right"></i> Contact 2</a>
                                       <hr>
                                    </li>
                                    <li>
                                       <a href="404.html"> <i class="ti-angle-right"></i> 404 Pages</a>
                                       <hr>
                                    </li>
                                 </ul>
                              </div>
                           </div>
                           <div class="col-sm-3">
                              <div class="list-items">
                                 <h4>Order List</h4>
                                 <ol>
                                    <li>
                                       <a href="auther-posts.html">Auther Posts</a>
                                       <hr>
                                    </li>
                                    <li>
                                       <a href="#">Items</a>
                                       <hr>
                                    </li>
                                    <li>
                                       <a href="#">Items</a>
                                       <hr>
                                    </li>
                                    <li>
                                       <a href="#">Items</a>
                                       <hr>
                                    </li>
                                 </ol>
                              </div>
                           </div>
                           <div class="clearfix"></div>
                           <div class="col-sm-12">
                              <h4>Paragraph</h4>
                              <p>
                                 Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab corporis eaque eos esse
                                 exercitationem fuga, id laudantium maiores officiis perferendis quidem veniam? Ducimus
                                 esse excepturi hic provident sunt velit voluptas?
                                 <a href="#">Readmore...</a>
                              </p>
                           </div>
                        </div>
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
      