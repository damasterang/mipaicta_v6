<?php
    if (isset($_GET['kk'])) {

        include ('connect.php');
        $sql4 = "DELETE FROM persentase";
        $query4 = mysql_query($sql4);
        $sql5 = "DELETE FROM pagePersentase";
        $query5 = mysql_query($sql5);

        $os = $_POST['os'];
        $ds = $_POST['ds'];
        $mi = $_POST['mi'];
        $me = $_POST['me'];
        $ram = $_POST['ram'];
        $cp = $_POST['cp'];
        $lyr = $_POST['lyr'];
        $kp = $_POST['kp'];
        $ks = $_POST['ks'];
        $bat = $_POST['bat'];
        $hrg = $_POST['hrg'];
        // $dr = $_POST['dr'];

        $input = array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

        switch ($os) {
            case "android":
                $input[0] = 1;
                break;
            case "ios":
                $input[1] = 1;
                break;
            case "bb":
                $input[2] = 1;
                break;
            case "wp":
                $input[3] = 1;
                break;
        }
        switch ($ds) {
            case "y":
                $input[4] = 1;
                break;
        }
        switch ($mi) {
            case "4gb":
                $input[5] = 1;
                break;
            case "8gb":
                $input[6] = 1;
                break;
            case "16gb":
                $input[7] = 1;
                break;
            case "32gb":
                $input[8] = 1;
                break;
            case "64gb":
                $input[9] = 1;
                break;
        }
        switch ($me) {
            case "32gb":
                $input[10] = 1;
                break;
            case "64gb":
                $input[11] = 1;
                break;
        }
        switch ($ram) {
            case "<1gb":
                $input[12] = 1;
                break;
            case "1gb-2gb":
                $input[13] = 1;
                break;
            case ">=3gb":
                $input[14] = 1;
                break;
        }
        switch ($cp) {
            case "1core":
                $input[15] = 1;
                break;
            case "2core":
                $input[16] = 1;
                break;
            case "4core":
                $input[17] = 1;
                break;
            case "8core":
                $input[18] = 1;
                break;
        }
        switch ($lyr) {
            case "3-5inc":
                $input[19] = 1;
                break;
            case ">5inc":
                $input[20] = 1;
                break;
        }
        switch ($kp) {
            case "4mp":
                $input[21] = 1;
                break;
            case "4-8mp":
                $input[22] = 1;
                break;
            case "9-13mp":
                $input[23] = 1;
                break;
            case ">13mp":
                $input[24] = 1;
                break;
        }
        switch ($ks) {
            case "vga":
                $input[25] = 1;
                break;
            case "1-3mp":
                $input[26] = 1;
                break;
            case ">3mp":
                $input[27] = 1;
                break;
        }
        switch ($bat) {
            case "1-2rb mAh":
                $input[28] = 1;
                break;
            case "2-3rb mAh":
                $input[29] = 1;
                break;
            case "3-4rb mAh":
                $input[30] = 1;
                break;
            case ">4rb mAh":
                $input[31] = 1;
                break;
        }
        switch ($hrg) {
            case "<1jt":
                $input[32] = 1;
                break;
            case "1-2jt":
                $input[33] = 1;
                break;
            case "2-3jt":
                $input[34] = 1;
                break;
            case "3-4jt":
                $input[35] = 1;
                break;
            case "4-5jt":
                $input[36] = 1;
                break;
            case "5-6jt":
                $input[37] = 1;
                break;
            case "6-7jt":
                $input[38] = 1;
                break;
            case ">7jt":
                $input[39] = 1;
                break;
        }
        // switch ($dr) {
        //     case "y":
        //         $input[40] = 1;
        //         break;
        // }

        $nilai = 0;
        $jdt = 0;
        $jat = 0;

        $sql = "SELECT * FROM matriks m, proses p WHERE m.no=p.no";
        $query = mysql_query($sql);
        while ($row = mysql_fetch_array($query, MYSQLI_ASSOC)) {
            for ($dt = 0; $dt < 40; $dt++) {
                $t = $dt + 1;
                $h = $row['col' . $t];
                $nilai += $h * $input[$dt];
                $jdt += $h;
                $jat += $input[$dt];
            }
            $no = $row['no'];
            $sim = $nilai / sqrt($jdt * $jat);
            $awal = round($sim * 100, 2);
            $sql2 = "INSERT INTO persentase VALUES ('" . $no . "','" . $awal . "')";
            $query2 = mysql_query($sql2);
            $nilai = 0;
            $jdt = 0;
            $jat = 0;
        }
            // $os = 'ios';
            // $ds = 'd';
            // $mi = 'd';
            // $me = 'd';
            // $ram = 'd';
            // $cp = 'd';
            // $lyr = 'd';
            // $kp = 'd';
            // $ks = 'd';
            // $bat = 'd';
            // $hrg = 'd';
            // $dr = 'd';

        if ($_GET['kk'] == 'harga1') {

            //////////
            // harga1
            //////////

            $sql2 = "SELECT * FROM tampilan t, proses s, persentase p where t.no=p.no and t.no=s.no and s.no=p.no and s.hrg<=1000000";               
            $query2 = mysql_query($sql2);

            while ($row = mysql_fetch_array($query2, MYSQLI_ASSOC)) {
                $no = $row['no'];
                $persen = $row['persen'];
                $sqlInsert = "INSERT INTO pagePersentase VALUES ('$no','$persen')";
                $queryInsert = mysql_query($sqlInsert);
            }

            $sql3 = "SELECT * FROM tampilan t, proses s, pagePersentase p where t.no=p.no and t.no=s.no and s.no=p.no and s.hrg<1000000 order by persen desc LIMIT 12";               
            $query3 = mysql_query($sql3);

        } elseif ($_GET['kk'] == 'harga2') {

            // $sql4 = "DELETE FROM persentase";
            // $query4 = mysql_query($sql4);

            //////////
            // harga2
            //////////

            $sql2 = "SELECT * FROM tampilan t, proses s, persentase p where t.no=p.no and t.no=s.no and s.no=p.no and (s.hrg>1000000 and s.hrg<=2000000) and p.persen>0";
            $query2 = mysql_query($sql2);

            while ($row = mysql_fetch_array($query2, MYSQLI_ASSOC)) {
                $no = $row['no'];
                $persen = $row['persen'];
                $sqlInsert = "INSERT INTO pagePersentase VALUES ('$no','$persen')";
                $queryInsert = mysql_query($sqlInsert);
            }

            $sql3 = "SELECT * FROM tampilan t, proses s, pagePersentase p where t.no=p.no and t.no=s.no and s.no=p.no and (s.hrg>1000000 and s.hrg<=2000000) and p.persen>0 order by persen desc LIMIT 12";
            $query3 = mysql_query($sql3);

        } elseif ($_GET['kk'] == 'harga3') {

            //////////
            // harga3
            //////////

            $sql2 = "SELECT * FROM tampilan t, proses s, persentase p where t.no=p.no and t.no=s.no and s.no=p.no and (s.hrg>2000000 and s.hrg<=3000000) and p.persen>0";
            $query2 = mysql_query($sql2);

            while ($row = mysql_fetch_array($query2, MYSQLI_ASSOC)) {
                $no = $row['no'];
                $persen = $row['persen'];
                $sqlInsert = "INSERT INTO pagePersentase VALUES ('$no','$persen')";
                $queryInsert = mysql_query($sqlInsert);
            }

            $sql3 = "SELECT * FROM tampilan t, proses s, pagePersentase p where t.no=p.no and t.no=s.no and s.no=p.no and (s.hrg>2000000 and s.hrg<=3000000) and p.persen>0 order by persen desc LIMIT 12";
            $query3 = mysql_query($sql3);

        } elseif ($_GET['kk'] == 'harga4') {

            //////////
            // harga4
            //////////

            $sql2 = "SELECT * FROM tampilan t, proses s, persentase p where 
            t.no=p.no and t.no=s.no and s.no=p.no and (s.hrg>3000000 and s.hrg<=4000000) and p.persen>0";
            $query2 = mysql_query($sql2);

            while ($row = mysql_fetch_array($query2, MYSQLI_ASSOC)) {
                $no = $row['no'];
                $persen = $row['persen'];
                $sqlInsert = "INSERT INTO pagePersentase VALUES ('$no','$persen')";
                $queryInsert = mysql_query($sqlInsert);
            }

            $sql3 = "SELECT * FROM tampilan t, proses s, pagePersentase p where 
            t.no=p.no and t.no=s.no and s.no=p.no and (s.hrg>3000000 and s.hrg<=4000000) and p.persen>0 order by persen desc LIMIT 12";
            $query3 = mysql_query($sql3);

        } elseif($_GET['kk'] == 'harga5'){

            //////////
            // harga5
            //////////

            $sql2 = "SELECT * FROM tampilan t, proses s, persentase p where t.no=p.no and t.no=s.no and s.no=p.no and (s.hrg>4000000 and s.hrg<=5000000) and p.persen>0";
            $query2 = mysql_query($sql2);

            while ($row = mysql_fetch_array($query2, MYSQLI_ASSOC)) {
                $no = $row['no'];
                $persen = $row['persen'];
                $sqlInsert = "INSERT INTO pagePersentase VALUES ('$no','$persen')";
                $queryInsert = mysql_query($sqlInsert);
            }

            $sql3 = "SELECT * FROM tampilan t, proses s, pagePersentase p where t.no=p.no and t.no=s.no and s.no=p.no and (s.hrg>4000000 and s.hrg<=5000000) and p.persen>0 order by persen desc limit 12";
            $query3 = mysql_query($sql3);

        } elseif($_GET['kk'] == 'harga6'){

            //////////
            // harga6
            //////////

            $sql2 = "SELECT * FROM tampilan t, proses s, persentase p where t.no=p.no and t.no=s.no and s.no=p.no and (s.hrg>5000000 and s.hrg<=6000000) and p.persen>0";
            $query2 = mysql_query($sql2);

            while ($row = mysql_fetch_array($query2, MYSQLI_ASSOC)) {
                $no = $row['no'];
                $persen = $row['persen'];
                $sqlInsert = "INSERT INTO pagePersentase VALUES ('$no','$persen')";
                $queryInsert = mysql_query($sqlInsert);
            }

            $sql3 = "SELECT * FROM tampilan t, proses s, pagePersentase p where t.no=p.no and t.no=s.no and s.no=p.no and (s.hrg>5000000 and s.hrg<=6000000) and p.persen>0 order by persen desc LIMIT 12";
            $query3 = mysql_query($sql3);

        } elseif($_GET['kk'] == 'harga7'){

            //////////
            // harga7
            //////////

            $sql2 = "SELECT * FROM tampilan t, proses s, persentase p where t.no=p.no and t.no=s.no and s.no=p.no and (s.hrg>6000000 and s.hrg<=7000000) and p.persen>0";
            $query2 = mysql_query($sql2);

            while ($row = mysql_fetch_array($query2, MYSQLI_ASSOC)) {
                $no = $row['no'];
                $persen = $row['persen'];
                $sqlInsert = "INSERT INTO pagePersentase VALUES ('$no','$persen')";
                $queryInsert = mysql_query($sqlInsert);
            }

            $sql3 = "SELECT * FROM tampilan t, proses s, pagePersentase p where t.no=p.no and t.no=s.no and s.no=p.no and (s.hrg>6000000 and s.hrg<=7000000) and p.persen>0 order by persen desc LIMIT 12";
            $query3 = mysql_query($sql3);

        } elseif($_GET['kk'] == 'harga8'){

            $sql2 = "SELECT * FROM tampilan t, proses s, persentase p where t.no=p.no and t.no=s.no and s.no=p.no and s.hrg>7000000 and p.persen>0";
            $query2 = mysql_query($sql2);

            while ($row = mysql_fetch_array($query2, MYSQLI_ASSOC)) {
                $no = $row['no'];
                $persen = $row['persen'];
                $sqlInsert = "INSERT INTO pagePersentase VALUES ('$no','$persen')";
                $queryInsert = mysql_query($sqlInsert);
            }

            $sql3 = "SELECT * FROM tampilan t, proses s, pagePersentase p where t.no=p.no and t.no=s.no and s.no=p.no and s.hrg>7000000 and p.persen>0 order by persen desc LIMIT 12";
            $query3 = mysql_query($sql3);
        }

        $string = '';
        while ($row = mysql_fetch_array($query3, MYSQLI_ASSOC)) {
            $no = $row['no'];
            $merk = $row['merk'];
            $tipe = $row['tipe'];
            $persen = $row['persen'];
            $gambar = $row['link'];
            $string .= $merk . "|" . $tipe . "|" . $persen . "|" . $gambar .  "|" . $no . "||";
        }
        echo $string;  
    }
?>

