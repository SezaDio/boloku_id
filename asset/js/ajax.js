function delete_produk_ajax(id_produk)
{
	if (confirm("Anda yakin ingin menghapus produk ini ?"))
	{;
		$.ajax({
			url: 'delete_produk',
			type: 'POST',
			data: {id_produk:id_produk},
			success: function(){
						alert('Delete produk berhasil');
						location.reload();
					},
			error: function(){
						alert('Delete produk gagal');
					}
		});
	}
	else
	{
		alert(id_produk + "Gagal dihapus");
	}
}

function tolak_produk_ajax(id_produk)
{
	if (confirm("Anda yakin ingin menolak produk ini ?"))
	{
		$.ajax({
			url: 'tolak_produk',
			type: 'POST',
			data: {id_produk:id_produk},
			success: function(){
						alert('Tolak produk berhasil');
						location.reload();
					},
			error: function(){
						alert('Tolak produk gagal');
					}
		});
	}
	else
	{
		alert(id_produk + "Gagal ditolak");
	}
}

function setuju_produk_ajax(id_produk)
{
	if (confirm("Anda yakin ingin menyetujui produk ini ?"))
	{
		$.ajax({
			url: 'setuju_produk',
			type: 'POST',
			data: {id_produk:id_produk},
			success: function(){
						alert('Setuju produk berhasil');
						location.reload();
					},
			error: function(){
						alert('Setuju produk gagal');
					}
		});
	}
	else
	{
		alert(id_produk + "Gagal disetujui");
	}
}

function delete_wow_ajax(id_wow)
{
	if (confirm("Anda yakin ingin menghapus posting Wow ini ?"))
	{
		$.ajax({
			url: 'delete_wow',
			type: 'POST',
			data: {id_wow:id_wow},
			success: function(){
						alert('Delete posting Wow berhasil');
						location.reload();
					},
			error: function(){
						alert('Delete posting Wow gagal');
					}
		});
	}
	else
	{
		alert(id_produk + "Gagal dihapus");
	}
}

function delete_coming_ajax(id_coming)
{
	if (confirm("Anda yakin ingin menghapus Coming Soon ini ?"))
	{;
		$.ajax({
			url: 'delete_coming',
			type: 'POST',
			data: {id_coming:id_coming},
			success: function(){
						alert('Delete Coming Soon berhasil');
						location.reload();
					},
			error: function(){
						alert('Delete Coming Soon gagal');
					}
		});
	}
	else
	{
		alert(id_coming + "Gagal dihapus");
	}
}

function tolak_coming_ajax(id_coming)
{
	if (confirm("Anda yakin ingin menolak Coming Soon ini ?"))
	{
		$.ajax({
			url: 'tolak_coming',
			type: 'POST',
			data: {id_coming:id_coming},
			success: function(){
						alert('Tolak Coming SOon berhasil');
						location.reload();
					},
			error: function(){
						alert('Tolak Coming Soon gagal');
					}
		});
	}
	else
	{
		alert(id_coming + "Gagal ditolak");
	}
}

function setuju_coming_ajax(id_coming)
{
	if (confirm("Anda yakin ingin menyetujui Coming Soon ini ?"))
	{
		$.ajax({
			url: 'setuju_coming',
			type: 'POST',
			data: {id_coming:id_coming},
			success: function(){
						alert('Setuju Coming Soon berhasil');
						location.reload();
					},
			error: function(){
						alert('Setuju Coming Soon gagal');
					}
		});
	}
	else
	{
		alert(id_coming + "Gagal disetujui");
	}
}

function delete_news_ajax(id_news)
{
	if (confirm("Anda yakin ingin menghapus News ini ?"))
	{
		$.ajax({
			url: 'delete_news',
			type: 'POST',
			data: {id_news:id_news},
			success: function(){
						alert('Delete News berhasil');
						location.reload();
					},
			error: function(){
						alert('Delete News gagal');
					}
		});
	}
	else
	{
		alert(id_news + "Gagal dihapus");
	}
}

function tolak_news_ajax(id_news)
{
	if (confirm("Anda yakin ingin menolak News ini ?"))
	{
		$.ajax({
			url: 'tolak_news',
			type: 'POST',
			data: {id_news:id_news},
			success: function(){
						alert('Tolak News berhasil');
						location.reload();
					},
			error: function(){
						alert('Tolak News gagal');
					}
		});
	}
	else
	{
		alert(id_news + "Gagal ditolak");
	}
}

function setuju_news_ajax(id_news)
{
	if (confirm("Anda yakin ingin menyetujui News ini ?"))
	{
	
		$.ajax({
			url: 'setuju_news',
			type: 'POST',
			data: {id_news:id_news},
			success: function(){
						alert('Setuju News berhasil');
						location.reload();
					},
			error: function(){
						alert('Setuju News gagal');
					}
		});
	}
	else
	{
		alert(id_news + "Gagal disetujui");
	}
}

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

function tolak_pepak_ajax(id_pepak)
{
	if (confirm("Anda yakin ingin menolak kosakata ini ?"))
	{
		$.ajax({
			url: 'tolak_pepak',
			type: 'POST',
			data: {id_pepak:id_pepak},
			success: function(){
						alert('Tolak kosakata berhasil');
						location.reload();
					},
			error: function(){
						alert('Tolak kosakata gagal');
					}
		});
	}
	else
	{
		alert(id_pepak + "Gagal ditolak");
	}
}

function setuju_pepak_ajax(id_pepak)
{
	if (confirm("Anda yakin ingin menyetujui kosakata ini ?"))
	{
	
		$.ajax({
			url: 'setuju_pepak',
			type: 'POST',
			data: {id_pepak:id_pepak},
			success: function(){
						alert('Setuju kosakata berhasil');
						location.reload();
					},
			error: function(){
						alert('Setuju kosakata gagal');
					}
		});
	}
	else
	{
		alert(id_pepak + "Gagal disetujui");
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
			  
			  
			}
			}
		},"text");
}