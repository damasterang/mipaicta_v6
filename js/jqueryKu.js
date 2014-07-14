$(document).ready(function(){

	var animation = '<div class="wrapperAnimationInfo"><img id="animationLayer1" class="imgAnimation" src="img/layer1.png" alt=""/><img id="animationLayer2" class="imgAnimation" src="img/layer2.png" alt=""/><img id="animationLayer3" class="imgAnimation" src="img/layer3.png" alt=""/></div>';

	$('.contentItem').html(animation);

	$('.sosmed').hover(function() {
		var id = $(this).attr('id');
		var id = id.split("_");
		var src = id[0];
		$(this).attr('src', 'img/'+src+"R.png");
		$(this).css({
			'-webkit-transform': 'scale(1.2,1.2)',
			'-moz-transform': 'scale(1.2,1.2)'
		});
	}, function() {
		var id = $(this).attr('id');
		var id = id.split("_");
		var src = id[0];
		$(this).attr('src', 'img/'+src+".png");
		$(this).css({
			'-webkit-transform': 'scale(1,1)',
			'-moz-transform': 'scale(1,1)'
		});
	});

	$('.email').hover(function() {
		var id = $(this).attr('id');
		var id = id.split("_");
		var src = id[1];
		console.log(src);
		$('#email_info_'+src).show();
	}, function() {
		var id = $(this).attr('id');
		var id = id.split("_");
		var src = id[1];
		$('#email_info_'+src).hide();
	});

	$('.logoPage').click(function(){
		window.location.assign("http://localhost/mipaicta/spesifikasi.php");
	});

	var menu = '<nav><ul class="firstLevel"><li id="kategori">Category</li><li class="liMenu" id="osMenu" ><a class="hasSub upMenu" id="os" href="#"><img id="osMenuImg" src="img/osMenu_grayscale.png" alt="osMenu"> Operation System</a><ul class="sub os"><li><a href="os1.php">Android</a></li><li><a href="os2.php">iOS</a></li><li><a href="os3.php">BlackBerry</a></li><li><a href="os4.php">Windows Phone</a></li></ul></li><li class="liMenu" id="merkMenu" ><a class="hasSub upMenu" id="merk" href="#"><img id="merkMenuImg" src="img/merkMenu_grayscale.png" alt="merk"> Merk</a><ul class="sub merk"><li><ul class="subMerk1"><li><a href="acer.php">Acer</a></li><li><a href="advan.php">Advan</a></li><li><a href="alcatel.php">Alcatel</a></li><li><a href="apple.php">Apple</a></li><li><a href="asus.php">Asus</a></li><li><a href="blackberry.php">Blackberry</a></li><li><a href="evercoss.php">Evercoss</a></li><li><a href="htc.php">HTC</a></li><li><a href="Huawei.php">Huawei</a></li><li><a href="Imo.php">Imo</a></li></ul><ul class="subMerk1"><li><a href="Ktouch.php">Ktouch</a></li><li><a href="Lenovo.php">Lenovo</a></li><li><a href="LG.php">LG</a></li><li><a href="mito.php">Mito</a></li><li><a href="Nokia.php">Nokia</a></li><li><a href="Polytron.php">Polytron</a></li><li><a href="Samsung.php">Samsung</a></li><li><a href="Smartfren.php">Smartfren</a></li><li><a href="Sony.php">Sony</a></li><li><a href="Treq.php">Treq</a></li></ul></li></ul></li><li class="liMenu" id="kameraMenu" ><a class="upMenu" href="kamera.php"><img id="kameraMenuImg" src="img/kameraMenu_grayscale.png" alt="kameraMenu">Good Camera</a></li><li class="liMenu" id="performaMenu" ><a class="upMenu" href="performa.php"><img id="performaMenuImg" src="img/performaMenu_grayscale.png" alt="performa">Good Performance</a></li><li class="liMenu" id="bateraiMenu" ><a class="upMenu" id="bateraiMenu" href="baterai.php"><img id="bateraiMenuImg" src="img/bateraiMenu_grayscale.png" alt="baterai">Long Battery Life</a></li><li class="liMenu" id="dualSimMenu" ><a class="upMenu" id="dualSimMenu" href="dualsim.php"><img id="dualSimMenuImg" src="img/dualSimMenu_grayscale.png" alt="dual Sim">Dual Sim</a></li><li class="liMenu" id="hargaMenu" ><a class="hasSub upMenu" id="harga" href="#"><img id="hargaMenuImg" src="img/hargaMenu_grayscale.png" alt="harga">Price</a><ul class="sub harga"><li><a href="harga1.php">&lt; 1 Juta</a></li><li><a href="harga2.php">1 - 2 Juta</a></li><li><a href="harga3.php">2 - 3 Juta</a></li><li><a href="harga4.php">3 - 4 Juta</a></li><li><a href="harga5.php">4 - 5 Juta</a></li><li><a href="harga6.php">5 - 6 Juta</a></li><li><a href="harga7.php">6 - 7 Juta</a></li><li><a href="harga8.php">&gt; 7 Juta</a></li></ul></li></ul><img id="arrowMenu" src="img/arrowMenu.png" alt="arrowMenu"/></nav>';

	$('.menu').html(menu);

	var firstStart = 1;

	$("#arrowMenu").click(function(){
		if (firstStart == 1) {
			$(".menu").animate({left: '0'}, 'slow');
			firstStart = 0;
			// $(this).animate({webkitTransform: 'rotate(180deg)'}, 'fast');
			$("#content").animate({left: '120px'}, 'slow');
			firstStart = 0;
			$(this).css({
				'-webkit-transform': 'rotate(180deg)',
				'-moz-transform': 'rotate(180deg)',
				'right': '0px'
			});
		} else {
			$(this).css({
				'-webkit-transform': 'rotate(0deg)',
				'-moz-transform': 'rotate(0deg)',
				'right': '-36px'
			});
			$("#content").animate({left: '0'}, 'slow');
			$(".menu").animate({left: '-220'}, 'slow');
			firstStart = 1;
		};
	});
	$( '.hasSub' ).hover(function() {
		var id = $(this).attr('id');
		// $(this).css({'background': '#2980B9', 'color': '#fff'});
			// $('.sub').hide();
		$('.'+id).css({
			visibility: 'visible',
			display: 'none'
		}).fadeIn('fast');
	}, function() {
		// $(this).css({'background': 'transparent', 'color': '#000'});
		var id = $(this).attr('id');
		$('.'+id).css({
			visibility: 'hidden'
		});
	});

	$( '.liMenu' ).hover(function() {
		var id = $(this).attr('id');
		var id2 = id+"Img";
		var src = "img/"+id+".png";
		$("#"+id2).attr('src', src);
	}, function() {
		var id = $(this).attr('id');
		var id2 = id+"Img";
		var src = "img/"+id+"_grayscale.png";
		$("#"+id2).attr('src', src);
	});

	$('.imgTrigger').click(function(){
		$('.expandOption').fadeOut();
		var id = $(this).attr('id');
		var id = id.split("_");
		$('#'+id[1]+'_option').fadeIn();
	});

	$( '.imgTrigger' ).hover(function() {
		var id = $(this).attr('id');
		var id = id.split("_");
		$('#'+id[1]+'_info').fadeIn('fast');
	}, function() {
		var id = $(this).attr('id');
		var id = id.split("_");
		$('#'+id[1]+'_info').fadeOut('fast');
	});

	$('.optionO').click(function(){
		var id = $(this).attr('id');
		var id = id.split("_");
		var inputVal = id[1];
		$('input[name='+id[0]+']').val(inputVal);
		$('#'+id[0]+'_val').text(id[2]);
		$('#'+id[0]+'_option').fadeOut();
	});

	$( '.sub' ).hover(function() {
		$(this).css({
			visibility: 'visible'
		});
	}, function() {
		$(this).fadeOut('fast');
	});

	// $('.os').hover(function() {
	// 	$('#os').css({'background': '#2980B9', 'color': '#fff'});
	// }, function() {
	// 	$('#os').css({'background': 'transparent', 'color': '#000'});
	// });

	// $('.merk').hover(function() {
	// 	$('#merk').css({'background': '#2980B9', 'color': '#fff'});
	// }, function() {
	// 	$('#merk').css({'background': 'transparent', 'color': '#000'});
	// });

	// $('.price').hover(function() {
	// 	$('#price').css({'background': '#2980B9', 'color': '#fff'});
	// }, function() {
	// 	$('#price').css({'background': 'transparent', 'color': '#000'});
	// });


	$(function() {
  		$('a[href*=#]:not([href=#])').click(function() {
    		if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      	var target = $(this.hash);
      	target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      	if (target.length) {
        		$('html,body').animate({
          		scrollTop: target.offset().top
        		}, 1000);
        		return false;
      	}
    		}
  		});
	});

	$(".circle").bind('mouseover',function(){
		$('.par').hide();
		$('#showCircle').show();
		var eqVal = $(this).index();
		$('.circleArrow').eq( eqVal ).fadeIn();
		$('.par').eq( eqVal ).fadeIn();
	});
	$(".circle").bind('mouseout',function(){
		$('.par').hide();
		$('.circleArrow').hide();
		// $('#KArrow, #SArrow').fadeOut();
		$('#showCircle').hide();
	});

	//////////
	//ajax
	/////////

	$('#go').click(point);


})

function point() {
		
	// $('.contentItem').html("<div class='center middle loading'><img src='img/circle-loading-animation.gif'/></div>");

	// $('.contentItem').html("<div class='center middle loading'><img src='img/412.gif'/></div>");

	// $('.contentItem').html("<div class='center middle loading'><img src='img/481.gif'/></div>");
	
	$('.contentItem').html('<div class="center middle loading"><div class="bubblingG"><span id="bubblingG_1"></span><span id="bubblingG_2"></span><span id="bubblingG_3"></span></div></div>');
	
	$('.page').html('');
	
	var target = 'process.php';
	switch (idPage) {
		case "spesifikasi":
		   var target = 'process.php?kk=spesifikasi';
		   break;
		case "os1":
			target = 'process.php?kk=os1';
			break;
		case "os2":
			target = 'process.php?kk=os2';
			break;
		case "os3":
			target = 'process.php?kk=os3';
			break;
		case "os4":
			target = 'process.php?kk=os4';
			break;
		case "dualSim":
			target = 'process.php?kk=dualSim';
			break;
		case "kamera":
			target = 'process.php?kk=kamera';
			break;
		case "baterai":
			target = 'process.php?kk=baterai';
			break;
		case "performa":
			target = 'process.php?kk=performa';
			break;
		case "harga1":
			target = 'process.php?kk=harga1';
			break;
		case "harga2":
			target = 'process.php?kk=harga2';
			break;
		case "harga3":
			target = 'process.php?kk=harga3';
			break;
		case "harga4":
			target = 'process.php?kk=harga4';
			break;
		case "harga5":
			target = 'process.php?kk=harga5';
			break;
		case "harga6":
			target = 'process.php?kk=harga6';
			break;
		case "harga7":
			target = 'process.php?kk=harga7';
			break;
		case "harga8":
			target = 'process.php?kk=harga8';
			break;
		case "acer":
			target = 'process.php?kk=acer';
			break;
		case "advan":
			target = 'process.php?kk=advan';
			break;
		case "alcatel":
			target = 'process.php?kk=alcatel';
			break;
		case "apple":
			target = 'process.php?kk=apple';
			break;
		case "asus":
			target = 'process.php?kk=asus';
			break;
		case "blackberry":
			target = 'process.php?kk=blackberry';
			break;
		case "evercoss":
			target = 'process.php?kk=evercoss';
			break;
		case "htc":
			target = 'process.php?kk=htc';
			break;
		case "huawei":
			target = 'process.php?kk=huawei';
			break;
		case "imo":
			target = 'process.php?kk=imo';
			break;
		case "ktouch":
			target = 'process.php?kk=ktouch';
			break;
		case "lenovo":
			target = 'process.php?kk=lenovo';
			break;
		case "lg":
			target = 'process.php?kk=lg';
			break;
		case "mito":
			target = 'process.php?kk=mito';
			break;
		case "nokia":
			target = 'process.php?kk=nokia';
			break;
		case "polytron":
			target = 'process.php?kk=politron';
			break;
		case "samsung":
			target = 'process.php?kk=samsung';
			break;
		case "smartfren":
			target = 'process.php?kk=smartfren';
			break;
		case "sony":
			target = 'process.php?kk=sony';
			break;
		case "treq":
			target = 'process.php?kk=treq';
			break;
 	}

	$.post(target,
		{
			os : $("input[name='os']").val(),
			ds : $("input[name='ds']").val(),
			mi : $("input[name='mi']").val(),
			me : $("input[name='me']").val(),
			ram : $("input[name='ram']").val(),
			cp : $("input[name='cp']").val(),
			lyr : $("input[name='lyr']").val(),
			kp : $("input[name='kp']").val(),
			ks : $("input[name='ks']").val(),
			bat : $("input[name='bat']").val(),
			hrg : $("input[name='hrg']").val(),
			dr : $("input[name='dr']").val()
		},
		function(data) 
		{
			var newData = data.split("||"); // memisah data dari server menjadi array data_baru
			var outputHtml = '';
			for (i = 0; i < newData.length - 1; i++) {
				var newItem = newData[i].split('|'); // memisah data dari data_baru menjadi newItem
				// $string .= $merk . "|" . $tipe . "|" . $persen . "|" . $gambar . "||";
				var height = newItem[2]*1.8;

				outputHtml += "<div onclick='detailPlay("+newItem[4]+")' class='bigBrow'><div class='imgWrapper'><img src='"+newItem[3]+"' alt='phone' class='imgItem'></div><div class='tipe'>" + newItem[0] +" "+ newItem[1] + "</div><div class='wrapperPercent'><div class='percent' style='height: "+height+"px'></div><div class='whitePercent'></div><div class='percentVal'>"+newItem[2]+"%</div></div></div>";
				// <div class="wrapperPercent">
				// 		<div class="percent" style="height: 90px"></div>
				// 		<div class="percentVal">90%</div>
				// 	</div>
			}



			$('.contentItem').delay(2000).html(outputHtml)
			// $('#content').html(data);

			$('.whitePercent').animate({height: 0}, 5000);

			$.get('pageParser.php?calcPage=1205', 
				function(data) {
					$('.page').html(data);

					$('.pageBtn').eq(0).css({
						'color': '#2980B9',
						'background-color': '#fff',
						'border': '1px solid #2980B9'
					});						

					$('.pageBtn').click(function(){
						$('.pageBtn').css({
							'background-color': '#2980B9',
							'color': '#fff'
						});
						$(this).css({
							'color': '#2980B9',
							'background-color': '#fff',
							'border': '1px solid #2980B9'
						});
					});
			});

		});

	}

function pageGo (page) {

	$(this).css({
		'color': '#2980B9',
		'border': '1px solid #2980B9'
	});

	$.post('pageParser.php?showPage=1205',
		{
			page : page
		},
		function(data) {
			var newData = data.split("||"); // memisah data dari server menjadi array data_baru
			var outputHtml = '';
			for (i = 0; i < newData.length - 1; i++) {
				var newItem = newData[i].split('|'); // memisah data dari data_baru menjadi newItem
				var height = newItem[2]*1.8;
				outputHtml += "<div onclick='detailPlay("+newItem[4]+")' class='bigBrow'><div class='imgWrapper'><img src='"+newItem[3]+"' alt='phone' class='imgItem'></div><div class='tipe'>" + newItem[0] +" "+ newItem[1] + "</div><div class='wrapperPercent'><div class='percent' style='height: "+height+"px'></div><div class='whitePercent'></div><div class='percentVal'>"+newItem[2]+"%</div></div></div>";
			}

			
			$('.contentItem').html(outputHtml);

			$('.whitePercent').animate({height: 0}, 3000);
	});
}

function detailPlay(no){

	$('.menu').slideUp('fast');
	$('#bottomOption').slideUp(400);
	$('#upDetail').html('');

	$.post('detailPlay.php',
		{
			id: no
		}, 
		function(newData) {
			var outputHtml = '';
			var newItem = newData.split('|'); // memisah data dari data_baru menjadi newItem
			// $string .= $id."|".$merk."|".$tipe."|".$os."|".$dualSim."|".$memoriInternal."|".$memoriEksternal."|".$layar."|".$ram."|".$prosessor."|".$kameraPrimer."|".$kameraSekunder."|".$baterai."|".$harga."|".$gambar."||";
			if (newItem[9] = 1) {
				newItem[9] = 'Single Core';
			} else if(newItem[9] = 2){
				newItem[9] = 'Dual Core';
			} else if(newItem[9] = 4){
				newItem[9] = 'Quad Core';
			} else if(newItem[9] = 8){
				newItem[9] = 'Octa Core';
			}
			if (newItem[4] == 'Y') {
				newItem[4] = 'Ya';
			};

			outputHtml += '<div id="detailItem"><div id="wrapperItem"><div id="nameItem">'+newItem[1]+' - '+newItem[2]+'</div><img id="detailImg" src="'+newItem[14]+'" alt="phone"><img onclick="closeWindow()" id="close" src="img/close.png"><table><tr><td><img src="img/os.png"></td><td class="addLeft">'+newItem[3]+'</td><td><img src="img/layar.png"></td><td class="addLeft">'+newItem[7]+' inc</td></tr><tr><td><img src="img/dualSim.png"></td><td class="addLeft">'+newItem[4]+'</td><td><img src="img/kameraPrimer.png"></td><td class="addLeft">'+newItem[10]+' MP</td></tr><tr><td><img src="img/memoriInternal.png"></td><td class="addLeft">'+newItem[5]+' GB</td>	<td><img src="img/kameraSekunder.png"></td><td class="addLeft">'+newItem[11]+' MP</td></tr><tr><td><img src="img/memoriEksternal.png"></td><td class="addLeft">'+newItem[6]+' GB</td><td><img src="img/baterai.png"></td><td class="addLeft">'+newItem[12]+' mAH</td></tr><tr><td><img src="img/ram.png"></td><td class="addLeft">'+newItem[8]+' GB</td><td><img src="img/harga.png"></td><td class="addLeft">Rp.'+newItem[13]+'</td></tr><tr><td><img src="img/prosesor.png"></td><td class="addLeft">'+newItem[9]+'</td></tr></table></div></div>';
			$("#upDetail").html(outputHtml);
			$("#upDetail").fadeIn();
			$("#detailItem").fadeIn(300);
	});
}

function closeWindow(){
	$('#upDetail').hide(300);
	$('.menu').slideDown(300);
	$('#bottomOption').css('display', 'none').slideDown('fast');
}
