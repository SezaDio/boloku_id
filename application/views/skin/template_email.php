<!DOCTYPE html>
<html>
	<head>
		<title><?php echo $subject; ?></title>
	</head>
	<body>
			<table style="width: 100%; background-color: lightcoral; color: white;">
				<!--Header-->
				<tr style="background-color: white;">
					<td>
						<img style="padding: 10px;  height: 24px" src="<?php echo base_url('asset\img\Logo_Boloku_new3.png'); ?>" alt="boloku.id"></a>
					</td>
				</tr>

				<!--Content-->
				<tr style="background-color: white;">
					<td style="color: black;">
						<?php echo $content; ?>
					</td>
				</tr>

				<!--Footer-->
				<tr style="text-align: center;">
					<td>
						<small><label>Ikuti kami :</label></small><br>
						<a href="https://boloku.id/">
							<img style="width: 32px; height: 32px;" src="<?php echo base_url('asset\img\website-icon.png'); ?>" alt="Website"></a>
						
						<a href="#">
							<img style="width: 32px; height: 32px;" src="<?php echo base_url('asset\img\mail-icon.png'); ?>" alt="E-Mail"></a>
						
						<a href="https://www.facebook.com/bolokuu.id/">
							<img style="width: 32px; height: 32px;" src="<?php echo base_url('asset\img\facebook-icon.png'); ?>" alt="Facebook"></a>
						
						<a href="https://instagram.com/boloku_id">
							<img style="width: 32px; height: 32px;" src="<?php echo base_url('asset\img\instagram-icon.png'); ?>" alt="Instagram"></a>
						
						<a href="https://line.me/ti/p/%40evv0880o">
							<img style="width: 32px; height: 32px;" src="<?php echo base_url('asset\img\line-icon.png'); ?>" alt="Line"></a>
						
						<a href="https://twitter.com/boloku_id">
							<img style="width: 32px; height: 32px;" src="<?php echo base_url('asset\img\twitter-icon.png'); ?>" alt="Twitter"></a>
					</td>
				</tr>
				<tr>
					<td style="text-align: center;">
						<hr style="border: solid 1px white; width: 500px;">
						<small>
							<label>Sekretariat :</label>
							<p>Gedung PKM Lama Universitas Diponegoro<br>Jln. Prof. Soedarto, SH Kampus UNDIP Tembalang 50275<br>Semarang</p>
						</small>
					</td>
				</tr>
			</table>
	</body>
</html>