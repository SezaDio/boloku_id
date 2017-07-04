<aside class="right-side">
                <!-- Content Header (Page header) -->
                <section class="content-header" style="margin-top: 45px;">
                    <h1>
                       Kelola Pepak
                    </h1>
                    <ol class="breadcrumb">
                        <li><i class="fa fa-dashboard"></i>Youth Pepak</li>
                        <li class="active">Kelola Pepak</li>
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
										<a href="<?php echo site_url('KelolaPepak/tambah_pepak_check/');?>">
                                            <button type="submit" name="submit" class="btn btn-info"><i class="glyphicon glyphicon-plus" ></i> Tambah Pepak</button>
                                        </a>
									</div>
                                    <div class="form-group">
                                        <table class="table table-striped table-bordered table-hover" id="dataTables-list">
                                            <thead>
                                                <tr>
                                                    <th class="title-center" style="font-size:1em; text-align:center;">No.</th>
                                                    <th class="title-center" style="font-size:1em; text-align:center;">Kata Jawa</th>
                                                    <th class="title-center" style="font-size:1em; text-align:center;">Kata Indonesia</th>
                                                    <th class="title-center" style="font-size:1em; text-align:center;">Deskripsi</th>
                                                    <th class="title-center" style="font-size:1em; text-align:center;">Aksi</th>                                                        
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php 
                                                    foreach($listPepak as $item)
                                                    { ?>
                                                        <tr>
                                                            <td style="text-align: center;"><?php echo $item['id_pepak'] ?></td>
                                                            <td><?php echo $item['jawa'] ?></td>
                                                            <td><?php echo $item['indonesia'] ?></td>
                                                            <td><?php $deskripsi = substr($item['deskripsi_jawa'],0,50) . '...'; echo $deskripsi;?></td>
                                                            <td align="center">
                                                                <!-- Tombol lihat detail -->
                                                                <a href="<?php echo site_url('KelolaPepak/lihat_detail_pepak/'.$item['id_pepak']);?>"><button class="btn btn-warning btn-sm"><i class="glyphicon glyphicon-eye-open" ></i> Detail</button></a>

                                                                <!-- Tombol Hapus -->
                                                                <button onclick="delete_pepak_ajax(<?php echo $item['id_pepak']; ?>)" id="delete-button-coming" type="submit" class="btn btn-danger btn-sm"><i class="glyphicon glyphicon-trash" ></i> Hapus</button>
                                                            </td>
                                                        </tr>
                                                    <?php } ?>
                                            </tbody>
                                        </table>
										<input type="text" name="kata_kunci" id="kata_kunci" value="Cari"><input type="text" name="hasil" id="hasil" value="Hasil"><br />
										<input type="button" name="btn_search" id="btn_search" onclick="cariKata();" value="Cari" class="btn btn-success"/>
                                    </div>
                                </div><!-- /.box-body -->

                            </div><!-- /.box -->
                        </div><!--/.col (left) -->
                    </div>   <!-- /.row -->
                </section><!-- /.content -->
            </aside><!-- /.right-side -->
<script>
function delete_pepak_ajax(id_pepak)
{
	if (confirm("Anda yakin ingin menghapus kosakata ini ?"))
	{
		$.ajax({
			url: 'delete_pepak',
			type: 'POST',
			data: {id_pepak:id_pepak},
			success: function(){
						alert('Delete kosakata berhasil');
						location.reload();
					},
			error: function(){
						alert('Delete kosakata gagal');
					}
		});
	}
	else
	{
		alert(id_pepak + "Gagal dihapus");
	}
}

    function parseXml(str) {
      if (window.ActiveXObject) {
        var doc = new ActiveXObject('Microsoft.XMLDOM');
        doc.loadXML(str);
        return doc;
      } else if (window.DOMParser) {
        return (new DOMParser).parseFromString(str, 'text/xml');
      }
    }

function cariKata() {
        var kata=document.getElementById("kata_kunci").value;
		$.post('<?php echo site_url('KelolaPepak/cari_kata/'); ?>'+kata, function(dataKata){
		
			var xml = parseXml(dataKata);
			var getKata = xml.documentElement.getElementsByTagName("kata");
			
			if(getKata.length==0){
				alert("Kata kunci yang dicari tidak tersedia !");
			}
			else {
			for (var i = 0; i < getKata.length; i++) {
			  
			  var jawa = getKata[i].getAttribute("jawa");
			  var indonesia=getKata[i].getAttribute("indonesia");
			  var deskripsi_jawa=getKata[i].getAttribute("deskripsi_jawa");
			  
			  var hasil = document.getElementById("hasil");
			  hasil.value = indonesia;
			}
			}
		},"text");
}
</script>

            