<?php

	include 'connect.php';

	$id = $_POST['id'];
	// $id = 10;

	$sql = "SELECT * FROM proses p, tampilan t WHERE p.no = t.no AND p.no = '$id'";
	$query = mysql_query($sql);
	$string = '';
	while ($row = mysql_fetch_array($query, MYSQLI_ASSOC)) {
		$id = $row['no'];
		$merk = $row['merk'];
		$tipe = $row['tipe'];
		$os = $row['os'];
		$dualSim = $row['ds'];
		$memoriInternal = $row['mi'];
		$memoriEksternal = $row['me'];
		$layar = $row['lyr'];
		$ram = $row['ram'];
		$prosessor = $row['cp'];
		$kameraPrimer = $row['kp'];
		$kameraSekunder = $row['ks'];
		$baterai = $row['bat'];
		// $durability = $row['dr'];
		$harga = $row['hrg'];
		$gambar = $row['link'];
		$string .= $id."|".$merk."|".$tipe."|".$os."|".$dualSim."|".$memoriInternal."|".$memoriEksternal."|".$layar."|".$ram."|".$prosessor."|".$kameraPrimer."|".$kameraSekunder."|".$baterai."|".$harga."|".$gambar;
	}
	echo $string;

?>		