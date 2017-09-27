<aside class="right-side">
                <!-- Content Header (Page header) -->
                <section class="content-header" style="margin-top: 45px;">
                    <h1>
                       Edit FAQ
                    </h1>
					<div id="instafeed"></div>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i>Kelola FAQ</a></li>
                        <li class="active">Edit FAQ</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <!-- left column -->
                        <div class="col-md-12">
                            <!-- general form elements -->
                            <div class="box box-primary">
                                
                                <!-- form start -->
								
                                <form role="form" enctype="multipart/form-data" action="<?php echo site_url('KelolaFaq/edit_faq/'.$idFaq);?>" method="POST">
                                    <div class="box-body">
                                        <div style="margin-top:10px; margin-bottom:30px">
                                            <?php if($this->session->flashdata('msg_gagal')!=''){?>
                                                <div class="alert alert-danger alert-dismissable">
                                                    <i class="glyphicon glyphicon-remove"></i>
                                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                    <?php echo $this->session->flashdata('msg_gagal');?> 
                                                </div>
                                            <?php }?>
                                        </div>
										
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Pertanyaan FAQ :</label>
                                            <input type="text" required name="pertanyaan" class="form-control" id="exampleInputEmail1" value="<?php 
                                                    if (isset($dataFaq['pertanyaan']))
                                                    {
                                                        echo htmlspecialchars($dataFaq['pertanyaan']);
                                                    }
                                            ?>">
                                            
                                        </div>

                                        <div class="form-group">
											<div class='box-header'>
												 <label>Jawaban FAQ :</label>
											</div>
											<div class='box-body pad'>
												<textarea required id="editor_wow" name="jawaban" rows="10" cols="80">
													<?php 
                                                        if (isset($dataFaq['jawaban']))
                                                        {
                                                            echo htmlspecialchars($dataFaq['jawaban']);
                                                        }
                                                    ?>
												</textarea>                                    
											</div>
                                        </div>
                                    </div><!-- /.box-body -->
                                    <input type="hidden" name="id_faq" value="<?php echo $idFaq; ?>">
                                    <div class="box-footer">
                                        <button type="submit" name="save" value="1" class="btn btn-primary"><i class="glyphicon glyphicon-floppy-saved"></i> Simpan</button>
                                    </div>
                                </form>
                            </div><!-- /.box -->
                        </div><!--/.col (left) -->

                        <div class="col-md-2"></div>
                    </div>   <!-- /.row -->
                </section><!-- /.content -->
            </aside><!-- /.right-side -->