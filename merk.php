<!DOCTYPE html>
<html>
	<head>
		<title>Baterai</title>
		<script type="text/javascript" src="js/jquery-1.11.0.min.js"></script>
		<link rel="stylesheet" type="text/css" href="css/style2.css">
		<script type="text/javascript">
			var idPage = 'baterai';
		</script>
		<script type="text/javascript" src="js/jqueryKu.js"></script>
	</head>
	<body>
		<div id="headerPlacePage"></div>

		<div id="main">
			<div id="content">
				<div class="contentItem"></div>
				<div class="page"></div>
			</div>
			<div id="bottomOption">
				<div class="hidden">
					<input type="text" name="os" value="d"/>
					<input type="text" name="ds" value="d"/>
					<input type="text" name="mi" value="d"/>
					<input type="text" name="me" value="d"/>
					<input type="text" name="ram" value="d"/>
					<input type="text" name="cp" value="d"/>
					<input type="text" name="lyr" value="d"/>
					<input type="text" name="kp" value="d"/>
					<input type="text" name="ks" value="d"/>
					<input type="text" name="bat" value="d"/>
					<input type="text" name="dr" value="d"/>
					<input type="text" name="hrg" value="d"/>
				</div>
				<div class="justOption">

					<div class="wrapperOption">

						<img class="imgTrigger" id="show_os" src="img/os.png" alt="os">
						<div id="os_val" class="valOption"></div>

						<div class="expandOption" id="os_option">
							<div class="litteArrow"></div>
							<div class="optionDetail">
								<div id="os_d_none" class="optionO">none</div>
								<div id="os_android_Android" class="optionO">Android</div>
								<div id="os_ios_iOS" class="optionO">iOS</div>
								<div id="os_bb_Blackberry" class="optionO">Blackberry</div>
								<div id="os_wp_Windows Phone" class="optionO">Windows Phone</div>
							</div>
						</div>

						<div id="os_info" class="informationKat">
							<div class="infoArrow rightArrow"></div>
							<div class="infoDetail">Sistem Operasi</div>
						</div>
					</div>

					<div class="wrapperOption">

						<img class="imgTrigger" id="show_ds" src="img/dualSim.png" alt="dualSim">
						<div id="ds_val" class="valOption"></div>

						<div class="expandOption" id="ds_option">
							<div class="litteArrow"></div>
							<div class="optionDetail">
								<div id="ds_d_none" class="optionO">none</div>
								<div id="ds_y_Ya" class="optionO">Ya</div>
								<div id="ds__Tidak" class="optionO">Tidak</div> 
								<!-- beda -->
							</div>
						</div>

						<div id="ds_info" class="informationKat">
							<div class="infoArrow rightArrow"></div>
							<div class="infoDetail">Dual Sim</div>
						</div>
					</div>

					<div class="wrapperOption">
						<img class="imgTrigger" id="show_mi" src="img/memoriInternal.png" alt="Memori Internal">
						<div id="mi_val" class="valOption"></div>

						<div class="expandOption" id="mi_option">
							<div class="litteArrow"></div>
							<div class="optionDetail">
								<div id="mi_d_none" class="optionO">none</div>
								<div id="mi_4gb_<=4gb" class="optionO"><=4gb</div>
								<div id="mi_8gb_8gb" class="optionO">8gb</div>
								<div id="mi_16gb_16gb" class="optionO">16gb</div>
								<div id="mi_32gb_32gb" class="optionO">32gb</div>
								<div id="mi_64gb_64gb" class="optionO">64gb</div>
								<!-- beda -->
							</div>
						</div>

						<div id="mi_info" class="informationKat">
							<div class="infoArrow rightArrow"></div>
							<div class="infoDetail">Memori Internal</div>
						</div>
					</div>

					<div class="wrapperOption">
						<img class="imgTrigger" id="show_me" src="img/memoriEksternal.png" alt="Memori Eksternal">
						<div id="me_val" class="valOption"></div>

						<div class="expandOption" id="me_option">
							<div class="litteArrow"></div>
							<div class="optionDetail">
								<div id="me_d_none" class="optionO">none</div>
								<div id="me_32gb_32gb" class="optionO">32gb</div>
								<div id="me_64gb_>=64gb" class="optionO">>=64gb</div>
								<!-- beda -->
							</div>
						</div>

						<div id="me_info" class="informationKat">
							<div class="infoArrow rightArrow"></div>
							<div class="infoDetail">Memori Eksternal</div>
						</div>
					</div>

					<div class="wrapperOption">
						<img class="imgTrigger" id="show_ram" src="img/ram.png" alt="RAM">
						<div id="ram_val" class="valOption"></div>

						<div class="expandOption" id="ram_option">
							<div class="litteArrow"></div>
							<div class="optionDetail">
								<div id="ram_d_none" class="optionO">none</div>
								<div id="ram_<1gb_<1gb" class="optionO">&lt;1 GB</div>
								<div id="ram_1gb-2bg_1 - 2 GB" class="optionO">1 - 2 GB</div>
								<div id="ram_>2gb_>2gb" class="optionO">&gt;2 GB</div>
								<!-- beda -->
							</div>
						</div>

						<div id="ram_info" class="informationKat">
							<div class="infoArrow rightArrow"></div>
							<div class="infoDetail">RAM</div>
						</div>
					</div>

					<div class="wrapperOption">
						<img class="imgTrigger" id="show_cp" src="img/prosesor.png" alt="Prosessor">
						<div id="cp_val" class="valOption"></div>

						<div class="expandOption" id="cp_option">
							<div class="litteArrow"></div>
							<div class="optionDetail">
								<div id="cp_d_none" class="optionO">none</div>
								<div id="cp_1core_Single Core" class="optionO">Single Core</div>
								<div id="cp_2core_Dual Core" class="optionO">Dual Core</div>
								<div id="cp_4core_Quad Core" class="optionO">Quad Core</div>
								<div id="cp_8core_Octa Core" class="optionO">Octa Core</div>
								<!-- beda -->
							</div>
						</div>

						<div id="cp_info" class="informationKat">
							<div class="infoArrow rightArrow"></div>
							<div class="infoDetail">Prosessor</div>
						</div>
					</div>

					<div class="wrapperOption">
						<img class="imgTrigger" id="show_lyr" src="img/layar.png" alt="Layar">
						<div id="lyr_val" class="valOption"></div>

						<div class="expandOption" id="lyr_option">
							<div class="litteArrow"></div>
							<div class="optionDetail">
								<div id="lyr_d_none" class="optionO">none</div>
								<div id="lyr_3-5inc_2 - 4 inc" class="optionO">2 - 4 inc</div>
								<div id="lyr_>5inc_> 4 inc" class="optionO">&gt; 4 inc</div>
								<!-- beda -->
							</div>
						</div>

						<div id="lyr_info" class="informationKat">
							<div class="infoArrow rightArrow"></div>
							<div class="infoDetail">Layar</div>
						</div>
					</div>

					<div class="wrapperOption">
						<img class="imgTrigger" id="show_kp" src="img/kameraPrimer.png" alt="Kamera Primer">
						<div id="kp_val" class="valOption"></div>

						<div class="expandOption" id="kp_option">
							<div class="litteArrow"></div>
							<div class="optionDetail">
								<div id="kp_d_none" class="optionO">none</div>
								<div id="kp_4mp_4 mp" class="optionO">&lt;4 MP</div>
								<div id="kp_4-8mp_4 - 8 MP" class="optionO">4 - 8 MP</div>
								<div id="kp_9-13mp_9 - 13 MP" class="optionO">9 - 13 MP</div>
								<div id="kp_>13mp_> 13 MP" class="optionO">&gt; 13 MP</div>
								<!-- beda -->
							</div>
						</div>

						<div id="kp_info" class="informationKat">
							<div class="infoArrow rightArrow"></div>
							<div class="infoDetail">Kamera Primer</div>
						</div>
					</div>

					<div class="wrapperOption">
						<img class="imgTrigger" id="show_ks" src="img/kameraSekunder.png" alt="Kamera Sekunder">
						<div id="ks_val" class="valOption"></div>

						<div class="expandOption" id="ks_option">
							<div class="litteArrow"></div>
							<div class="optionDetail">
								<div id="ks_d_none" class="optionO">none</div>
								<div id="ks_vga_VGA" class="optionO">VGA</div>
								<div id="ks_1-3mp_1 - 3 MP" class="optionO">1 - 3 MP</div>
								<div id="ks_>3mp_> 3 MP" class="optionO">&gt; 3 MP</div>
								<!-- beda -->
							</div>
						</div>

						<div id="ks_info" class="informationKat">
							<div class="infoArrow rightArrow"></div>
							<div class="infoDetail">Kamera Sekunder</div>
						</div>
					</div>

					<div class="wrapperOption">
						<img class="imgTrigger" id="show_bat" src="img/baterai.png" alt="Baterai">
						<div id="bat_val" class="valOption"></div>

						<div class="expandOption" id="bat_option">
							<div class="litteArrow"></div>
							<div class="optionDetail">
								<div id="bat_d_none" class="optionO">none</div>
								<div id="bat_1-2rb mAh_1000 - 2000 mAH" class="optionO">1000 - 2000 mAH</div>
								<div id="bat_2-3rb mAh_2001 - 3000 mAH" class="optionO">2001 - 3000 mAH</div>
								<div id="bat_3-4rb mAh_3001 - 4000 mAH" class="optionO">3001 - 4000 mAH</div>
							</div>
						</div>

						<div id="bat_info" class="informationKat">
							<div class="infoArrow rightArrow"></div>
							<div class="infoDetail">Baterai</div>
						</div>
					</div>

					<div class="wrapperOption">
						<img class="imgTrigger" id="show_hrg" src="img/harga.png" alt="Harga">
						<div id="hrg_val" class="valOption"></div>

						<div class="expandOption" id="hrg_option">
							<div class="litteArrow"></div>
							<div class="optionDetail">
								<div id="hrg_d_none" class="optionO">none</div>
								<div id="hrg_<1jt_<=1 jt" class="optionO">&lt;=1 jt</div>
								<div id="hrg_1-2jt_1 - 2 jt" class="optionO">1 - 2 jt</div>
								<div id="hrg_2-3jt_2 - 3 jt" class="optionO">2 - 3 jt</div>
								<div id="hrg_3-4jt_3 - 4 jt" class="optionO">3 - 4 jt</div>
								<div id="hrg_4-5jt_4 - 5 jt" class="optionO">4 - 5 jt</div>
								<div id="hrg_5-6jt_5 - 6 jt" class="optionO">5 - 6 jt</div>
								<div id="hrg_6-7jt_6 - 7 jt" class="optionO">6 - 7 jt</div>
								<div id="hrg_>7jt_> 7 jt" class="optionO">&gt; 7 jt</div>

							</div>
						</div>

						<div id="hrg_info" class="informationKat">
							<div class="infoArrow rightArrow"></div>
							<div class="infoDetail">Harga</div>
						</div>
					</div>
					<div class="wrapperOption">
						<div id="go">Go</div>
					</div>
				</div>

			</div>
		</div>

		<div id="headerPage">
			<a class="aLogo" href="spesifikasi.php">
				<div id="logoPage">
					<div class="mindReaderPage">Mind</div>
					<img src="img/logo3.png" alt="logo">
					<div class="mindReaderPage">Reader</div>
				</div>
			</a>
		</div>

		<div id="upDetail">
				<div id="detailItem">
					<div id="wrapperItem">
						<div id="nameItem">Samsung blalba</div>
						<img src="img/phone.png" alt="phone">
						<img id="close" src="img/close.png">
						<table>
							<tr>
								<td><img src="img/os.png"></td>
								<td class="addLeft">Android</td>
								<td><img src="img/layar.png"></td>
								<td class="addLeft">sentuh</td>
							</tr>
							<tr>
								<td><img src="img/dualSim.png"></td>
								<td class="addLeft">Yes</td>
								<td><img src="img/kameraPrimer.png"></td>
								<td class="addLeft">3mp</td>
							</tr>
							<tr>
								<td><img src="img/memoriInternal.png"></td>
								<td class="addLeft">45gb</td>
								<td><img src="img/kameraSekunder.png"></td>
								<td class="addLeft">3mp</td>
							</tr>
							<tr>
								<td><img src="img/memoriEksternal.png"></td>
								<td class="addLeft">34mp</td>
								<td><img src="img/baterai.png"></td>
								<td class="addLeft">4324mah</td>
							</tr>
							<tr>
								<td><img src="img/ram.png"></td>
								<td class="addLeft">2 gb</td>
								<td><img src="img/harga.png"></td>
								<td class="addLeft">3jt</td>
								<!-- <td><img src="img/durability.png"></td>
								<td class="addLeft">yes</td> -->
							</tr>
							<tr>
								<td><img src="img/prosesor.png"></td>
								<td class="addLeft">12amd</td>
							</tr>
						</table>
					</div>
				</div>
			</div>
		<div class="menu"></div>
	</body>
</html>