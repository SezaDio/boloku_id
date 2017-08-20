	<section class="my-breadcrumb" style="background-image: url(asset/img/faq.jpg);">
         <div class="container page-banner">
            <div class="row">
               <div class="col-sm-12 col-md-12 col-xs-12">
                  <h1 style="color: white; opacity: 0;">&nbsp;</h1>
               </div>
            </div>
         </div>
      </section>

      <section class="main-content">
         <div class="container">
 			<?php foreach ($listFaq as $faq) 
 			{ ?>
 				<!--Profil boloku.id-->
     			<div class="row">
     				<div class="col-md-12">
     					<div class="col-md-1"></div>
	                	<div class="col-md-10 col-sm-6 col-xs-12" style="padding-bottom: 15px;">
	                		<div class="item" style="background-color: white; padding:10px;">
                   			<h3 class="main-heading"><strong><?php echo $faq['pertanyaan']; ?></strong></h3>
                            <div class="caption">
                               <h5><?php echo $faq['jawaban']; ?></h5>
                            </div>	                                 
	                       </div>
	                		<hr style="border: solid 1px #f44a56; margin-top: auto; opacity: 0.4;"></hr>
	                	</div>
	                	<div class="col-md-1"></div>
	                </div>
	            </div>
 			<?php } ?>
         </div>
      </section>
