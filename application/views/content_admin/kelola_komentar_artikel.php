<aside class="right-side">
                <!-- Content Header (Page header) -->
                <section class="content-header" style="margin-top: 45px;">
                    <h1>
                       Kelola Komentar Artikel
                    </h1>
                    <ol class="breadcrumb">
                        <li>Kelola Artikel</li>
                        <li class="active">Kelola Komentar Artikel</li>
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
									<div style="margin-top:10px; margin-bottom:30px">
										<?php if($this->session->flashdata('msg_berhasil')!=''){?>
                                            <div class="alert alert-success alert-dismissable">
                                                <i class="glyphicon glyphicon-ok"></i>
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                <?php echo $this->session->flashdata('msg_berhasil');?> 
                                            </div>
                                        <?php }?>
									</div>

                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <table class="table">
                                                    <?php
                                                        if(count($listKomentar)>0)
                                                        {
                                                            foreach ($listKomentar as $komentar) 
                                                            {?>
                                                                <tr>
                                                                    <td style="width: 500px; padding-top: 12px;">
                                                                        <i class="glyphicon glyphicon-user"></i> <?php echo $komentar['nama_member']; ?> || <i class="glyphicon glyphicon-calendar"></i> <?php echo $komentar['tgl_posting']; ?>
                                                                        <br><br>
                                                                        <?php echo $komentar['isi_komentar']; ?>
                                                                    </td>
                                                                    <td>
                                                                        <!-- Tombol Hapus -->
                                                                        <button onclick="delete_komentar_ajax(<?php echo $komentar['id_komentar']; ?>)" id="delete-button-testimoni" type="submit" class="btn btn-danger btn-sm"><i class="glyphicon glyphicon-trash" ></i> Hapus</button>
                                                                    </td>
                                                                </tr>
                                                                
                                                            <?php } 
                                                        }
                                                        else
                                                        {?>
                                                            <tr>
                                                                <td>Tidak ada komentar untuk artikel ini</td>
                                                            </tr>
                                                        <?php } ?>
                                                    
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- /.box-body -->

                            </div><!-- /.box -->
                        </div><!--/.col (left) -->
                    </div>   <!-- /.row -->
                </section><!-- /.content -->
            </aside><!-- /.right-side -->


            