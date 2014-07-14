<?php
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

    $input = array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

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
        case "1gb-2bg":
            $input[13] = 1;
            break;
        case ">2gb":
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
    }
    switch ($hrg) {
        case "<1jt":
            $input[31] = 1;
            break;
        case "1-2jt":
            $input[32] = 1;
            break;
        case "2-3jt":
            $input[33] = 1;
            break;
        case "3-4jt":
            $input[34] = 1;
            break;
        case "4-5jt":
            $input[35] = 1;
            break;
        case "5-6jt":
            $input[36] = 1;
            break;
        case "6-7jt":
            $input[37] = 1;
            break;
        case ">7jt":
            $input[38] = 1;
            break;
    }
    // switch ($dr) {
    //     case "y":
    //         $input[40] = 1;
    //         break;
    // }

    // $nilai = 0;
    // $jdt = 0;
    // $jat = 0;

    // $sql = "SELECT * FROM matriks m, proses p WHERE m.no=p.no";
    // $query = mysql_query($sql);
    // while ($row = mysql_fetch_array($query, MYSQLI_ASSOC)) {
    //     for ($dt = 0; $dt < 40; $dt++) {
    //         $t = $dt + 1;
    //         $h = $row['col' . $t];
    //         $nilai += $h * $input[$dt];
    //         $jdt += $h;
    //         $jat += $input[$dt];
    //     }
    //     $no = $row['no'];
    //     $sim = $nilai / sqrt($jdt * $jat);
    //     $awal = round($sim * 100, 2);
    //     $sql2 = "INSERT INTO persentase VALUES ('" . $no . "','" . $awal . "')";
    //     $query2 = mysql_query($sql2);
    //     $nilai = 0;
    //     $jdt = 0;
    //     $jat = 0;
    // }
    if ($_GET['kk']) {
        
        if ($_GET['kk'] == 'spesifikasi') {

            ////////////////
            // spesifikasi
            ///////////////

            $sqlPlus = "SELECT * FROM matriks m, proses p WHERE m.no=p.no";
            calculate($sqlPlus, $input);
            sendRequest();
                
            // $sql2 = "SELECT * FROM tampilan t, persentase p WHERE t.no=p.no AND p.persen > 0";
            // $query2 = mysql_query($sql2);


            // while ($row = mysql_fetch_array($query2, MYSQLI_ASSOC)) {
            //     $no = $row['no'];
            //     $persen = $row['persen'];
            //     $sqlInsert = "INSERT INTO pagePersentase VALUES ('$no','$persen')";
            //     $queryInsert = mysql_query($sqlInsert);
            // }    

            // $sql3 = "SELECT * FROM tampilan t, pagePersentase p WHERE t.no=p.no ORDER by persen desc LIMIT 0, 12";
            // $query3 = mysql_query($sql3);

        } else if ($_GET['kk'] == 'os1') {

            ////////////////
            // os1 android
            ///////////////

            $sqlPlus = "SELECT * FROM matriks m, proses p where m.no=p.no and p.os='Android'";
            calculate($sqlPlus,$input);
            sendRequest();

        } elseif ($_GET['kk'] == 'os2') {

            ///////////
            // os2 iOs
            ///////////

            $sqlPlus = "SELECT * FROM matriks m, proses p where m.no=p.no and p.os='IOS'";
            calculate($sqlPlus,$input);
            sendRequest();

        } elseif ($_GET['kk'] == 'os3') {

            //////////////////
            // os3 blackberry
            //////////////////

            $sqlPlus = "SELECT * FROM matriks m, proses p where m.no=p.no and p.os='BlackBerry OS'";
            calculate($sqlPlus,$input);
            sendRequest();

        } elseif ($_GET['kk'] == 'os4') {

            /////////////////////
            // os4 windows phone
            /////////////////////

            $sqlPlus = "SELECT * FROM matriks m, proses p where m.no=p.no and p.os='Windows'";
            calculate($sqlPlus,$input);

            sendRequest();
                        
        } elseif ($_GET['kk'] == 'kamera') {

            /////////////////////
            // kamera
            /////////////////////

            $sqlPlus = "SELECT * FROM matriks m, proses p where m.no=p.no and p.kp>=8 and p.ks>=2";
            calculate($sqlPlus,$input);
            sendRequest();

        } elseif ($_GET['kk'] == 'performa') {
            
            /////////////////////
            // performa
            /////////////////////
			$sqlPlus = "SELECT * FROM matriks m, proses p where m.no=p.no and p.cp>=1 and p.ram>1";
            calculate($sqlPlus,$input);
            sendRequest();

        } elseif ($_GET['kk'] == 'baterai') {
           
            /////////////////////
            // baterai
            /////////////////////

            $sqlPlus = "SELECT * FROM matriks m, proses p where m.no=p.no and bat>3000";
            calculate($sqlPlus,$input);
            sendRequest();

        } elseif ($_GET['kk'] == 'dualSim') {
            
            /////////////////////
            // dual sim
            /////////////////////

            $sqlPlus = "SELECT * FROM matriks m, proses p where m.no=p.no and p.ds='Ya'";
            calculate($sqlPlus,$input);
            sendRequest();

        } elseif ($_GET['kk'] == 'harga1') {
            
            /////////////////////
            // kurang 1jt
            /////////////////////

            $sqlPlus = "SELECT * FROM matriks m, proses p WHERE m.no=p.no AND p.hrg<1000000";
            calculate($sqlPlus,$input);
            sendRequest();

        } elseif ($_GET['kk'] == 'harga2') {
           
            /////////////////////
            // 1jt - 2jt
            /////////////////////

            $sqlPlus = "SELECT * FROM matriks m, proses p WHERE m.no=p.no AND (p.hrg>1000000 AND p.hrg<=2000000)";
            calculate($sqlPlus,$input);
            sendRequest();

        } elseif ($_GET['kk'] == 'harga3') {
            
            /////////////////////
            // 2jt - 3jt
            /////////////////////

            $sqlPlus = "SELECT * FROM matriks m, proses p WHERE m.no=p.no AND (p.hrg>2000000 AND p.hrg<=3000000)";
            calculate($sqlPlus,$input);
            sendRequest();

        } elseif ($_GET['kk'] == 'harga4') {

            /////////////////////
            // 3jt - 4jt
            /////////////////////

            $sqlPlus = "SELECT * FROM matriks m, proses p WHERE m.no=p.no AND (p.hrg>3000000 AND p.hrg<=4000000)";
            calculate($sqlPlus,$input);
            sendRequest();

        } elseif ($_GET['kk'] == 'harga5') {
            
            /////////////////////
            // 4jt - 5jt
            /////////////////////
            
            $sqlPlus = "SELECT * FROM matriks m, proses p WHERE m.no=p.no AND (p.hrg>4000000 AND p.hrg<=5000000)";
            calculate($sqlPlus,$input);
            sendRequest();

        } elseif ($_GET['kk'] == 'harga6') {
            
            /////////////////////
            // 5jt - 6jt
            /////////////////////
            
            $sqlPlus = "SELECT * FROM matriks m, proses p WHERE m.no=p.no AND (p.hrg>5000000 AND p.hrg<=6000000)";
            calculate($sqlPlus,$input);
            sendRequest();

        } elseif ($_GET['kk'] == 'harga7') {
            
            /////////////////////
            // 6jt - 7jt
            /////////////////////
            
            $sqlPlus = "SELECT * FROM matriks m, proses p WHERE m.no=p.no AND (p.hrg>6000000 AND p.hrg<=7000000)";
            calculate($sqlPlus,$input);
            sendRequest();

        } elseif ($_GET['kk'] == 'harga8') {
            
            /////////////////////
            // lebih 7jt
            /////////////////////
            
            $sqlPlus = "SELECT * FROM matriks m, proses p WHERE m.no=p.no AND p.hrg>7000000";
            calculate($sqlPlus,$input);
            sendRequest();

        }  elseif ($_GET['kk'] == 'acer') {
            
            /////////////////////
            // acer
            /////////////////////
            
            $sqlPlus = "SELECT * FROM matriks m, proses p WHERE m.no=p.no AND p.merk='Acer'";
            calculate($sqlPlus,$input);
            sendRequest();

        }  elseif ($_GET['kk'] == 'advan') {
            
            /////////////////////
            // advan
            /////////////////////
            
            $sqlPlus = "SELECT * FROM matriks m, proses p WHERE m.no=p.no AND p.merk='Acer'";
            calculate($sqlPlus,$input);
            sendRequest();

        }  elseif ($_GET['kk'] == 'alcatel') {
            
            /////////////////////
            // alcatel
            /////////////////////
            
            $sqlPlus = "SELECT * FROM matriks m, proses p WHERE m.no=p.no AND p.merk='Alcatel'";
            calculate($sqlPlus,$input);
            sendRequest();

        }  elseif ($_GET['kk'] == 'apple') {
            
            /////////////////////
            // apple
            /////////////////////
            
            $sqlPlus = "SELECT * FROM matriks m, proses p WHERE m.no=p.no AND p.merk='Apple'";
            calculate($sqlPlus,$input);
            sendRequest();

        }  elseif ($_GET['kk'] == 'asus') {
            
            /////////////////////
            // asus
            /////////////////////
            
            $sqlPlus = "SELECT * FROM matriks m, proses p WHERE m.no=p.no AND p.merk='Asus'";
            calculate($sqlPlus,$input);
            sendRequest();

        }  elseif ($_GET['kk'] == 'blackberry') {
            
            /////////////////////
            // blackberry
            /////////////////////
            
            $sqlPlus = "SELECT * FROM matriks m, proses p WHERE m.no=p.no AND p.merk='BlackBerry'";
            calculate($sqlPlus,$input);
            sendRequest();

        } elseif ($_GET['kk'] == 'evercoss') {
            
            /////////////////////
            // evercoss
            /////////////////////
            
            $sqlPlus = "SELECT * FROM matriks m, proses p WHERE m.no=p.no AND p.merk='Evercoss'";
            calculate($sqlPlus,$input);
            sendRequest();

        } elseif ($_GET['kk'] == 'htc') {
            
            /////////////////////
            // htc
            /////////////////////
            
            $sqlPlus = "SELECT * FROM matriks m, proses p WHERE m.no=p.no AND p.merk='HTC'";
            calculate($sqlPlus,$input);
            sendRequest();

        } elseif ($_GET['kk'] == 'huawei') {
            
            /////////////////////
            // huawei
            /////////////////////
            
            $sqlPlus = "SELECT * FROM matriks m, proses p WHERE m.no=p.no AND p.merk='Huawei'";
            calculate($sqlPlus,$input);
            sendRequest();

        } elseif ($_GET['kk'] == 'imo') {
            
            /////////////////////
            // imo
            /////////////////////
            
            $sqlPlus = "SELECT * FROM matriks m, proses p WHERE m.no=p.no AND p.merk='IMO'";
            calculate($sqlPlus,$input);
            sendRequest();

        }  elseif ($_GET['kk'] == 'ktouch') {
            
            /////////////////////
            // ktouch
            /////////////////////
            
            $sqlPlus = "SELECT * FROM matriks m, proses p WHERE m.no=p.no AND p.merk='KTouch'";
            calculate($sqlPlus,$input);
            sendRequest();

        }  elseif ($_GET['kk'] == 'lenovo') {
            
            /////////////////////
            // lenovo
            /////////////////////
            
            $sqlPlus = "SELECT * FROM matriks m, proses p WHERE m.no=p.no AND p.merk='Lenovo'";
            calculate($sqlPlus,$input);
            sendRequest();

        } elseif ($_GET['kk'] == 'lg') {
            
            /////////////////////
            // LG
            /////////////////////
            
            $sqlPlus = "SELECT * FROM matriks m, proses p WHERE m.no=p.no AND p.merk='LG'";
            calculate($sqlPlus,$input);
            sendRequest();

        }  elseif ($_GET['kk'] == 'mito') {
            
            /////////////////////
            // mito
            /////////////////////
            
            $sqlPlus = "SELECT * FROM matriks m, proses p WHERE m.no=p.no AND p.merk='Mito'";
            calculate($sqlPlus,$input);
            sendRequest();

        }  elseif ($_GET['kk'] == 'nokia') {
            
            /////////////////////
            // nokia
            /////////////////////
            
            $sqlPlus = "SELECT * FROM matriks m, proses p WHERE m.no=p.no AND p.merk='Nokia'";
            calculate($sqlPlus,$input);
            sendRequest();

        }  elseif ($_GET['kk'] == 'polytron') {
            
            /////////////////////
            // polytron
            /////////////////////
            
            $sqlPlus = "SELECT * FROM matriks m, proses p WHERE m.no=p.no AND p.merk='Polytron'";
            calculate($sqlPlus,$input);
            sendRequest();

        }  elseif ($_GET['kk'] == 'samsung') {
            
            /////////////////////
            // samsung
            /////////////////////
            
            $sqlPlus = "SELECT * FROM matriks m, proses p WHERE m.no=p.no AND p.merk='Samsung'";
            calculate($sqlPlus,$input);
            sendRequest();

        }  elseif ($_GET['kk'] == 'smartfren') {
            
            /////////////////////
            // smartfren
            /////////////////////
            
            $sqlPlus = "SELECT * FROM matriks m, proses p WHERE m.no=p.no AND p.merk='Smartfren'";
            calculate($sqlPlus,$input);
            sendRequest();

        } elseif ($_GET['kk'] == 'sony') {
            
            /////////////////////
            // sony
            /////////////////////
            
            $sqlPlus = "SELECT * FROM matriks m, proses p WHERE m.no=p.no AND p.merk='Sony'";
            calculate($sqlPlus,$input);
            sendRequest();

        } elseif ($_GET['kk'] == 'treq') {
            
            /////////////////////
            // treq
            /////////////////////
            
            $sqlPlus = "SELECT * FROM matriks m, proses p WHERE m.no=p.no AND p.merk='Treq'";
            calculate($sqlPlus,$input);
            sendRequest();

        }



    }

?>

<?php
    function calculate($sqlPlus, $input){
        $nilai = 0;
        $jdt = 0;
        $jat = 0;

        $sql = $sqlPlus;
        $query = mysql_query($sql);
        while ($row = mysql_fetch_array($query, MYSQLI_ASSOC)) {
            for ($dt = 0; $dt < 39; $dt++) {
                $h = $row['col' . $dt];
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
    }

    function sendRequest(){

        $sql2 = "SELECT * FROM tampilan t, proses s, persentase p where t.no=p.no and t.no=s.no and s.no=p.no and p.persen>0";
            $query2 = mysql_query($sql2);

            while ($row = mysql_fetch_array($query2, MYSQLI_ASSOC)) {
                $no = $row['no'];
                $persen = $row['persen'];
                $sqlInsert = "INSERT INTO pagePersentase VALUES ('$no','$persen')";
                $queryInsert = mysql_query($sqlInsert);
            }
            
            $sql3 = "SELECT * FROM tampilan t, pagePersentase p where t.no=p.no order by persen desc LIMIT 12";
            $query3 = mysql_query($sql3);

        $string = '';
        while ($row = mysql_fetch_array($query3, MYSQLI_ASSOC)) {
            $no = $row['no'];
            $merk = $row['merk'];
            $tipe = $row['tipe'];
            $persen = $row['persen'];
            $gambar = $row['link'];
            $string .= $merk . "|" . $tipe . "|" . $persen . "|" . $gambar .  "|" . $no . "||";
        }
        echo "$string";

    }
?>

