<?php
	
	include 'connect.php';

	if (isset($_GET['calcPage'])) {
		// $startNum = $_GET['startNum'];
		$sql = "SELECT COUNT(*) FROM pagePersentase WHERE persen <> 0";
		$query = mysql_query($sql);
		$result = mysql_fetch_row($query);
		$page = $result[0];
		$before = $page/12;
		$after = round($before, 0, PHP_ROUND_HALF_EVEN);
		$page = $after;
		if ($before >= 1) {
			if ($after != $before) {
				if ($before > $after) {
					$page = $after+1;
				} elseif ($before < $after) {
					$page = $after;
				}
			}
		} else {
			$page = 1;
		}
		$resultPage = '';
		// echo $before."<br>";
		// echo $after."<br>";
		// echo $page."<br>";
		// if ($page == 1) {
		// 	$resultPage = '<div><div>';
		// } else {
			for ($i=1; $i <= $page; $i++) { 
				$resultPage .= "<button id='page-" . $i . "' 		onclick='pageGo(".$i.")'	class='pageBtn'>" . $i . "</button>";
			}
		// }

		echo $resultPage;

	} elseif (isset($_GET['showPage'])) {
		$pageNum = $_POST['page'];
		// $pageNum = 2;
		$startNum = ($pageNum-1)*12;
		$sql = "SELECT * FROM tampilan t, pagePersentase p WHERE t.no=p.no AND p.persen <> 0 ORDER by persen desc LIMIT $startNum, 12";
		$query3 = mysql_query($sql);
		$string = '';
		while ($row = mysql_fetch_array($query3, MYSQLI_ASSOC)) {
			$no = $row['no'];
		   $merk = $row['merk'];
		   $tipe = $row['tipe'];
		   $persen = $row['persen'];
		   $gambar = $row['link'];
		   $string .= $merk . "|" . $tipe . "|" . $persen . "|" . $gambar . "|" . $no . "||";
		}
		echo "$string";
	}

?>