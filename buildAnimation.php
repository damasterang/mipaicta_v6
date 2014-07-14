<!DOCTYPE html>
<html>
	<head>
		<title>animation</title>
		<style>
			.wrapperAnimationInfo{
				position: relative;
			}
				.imgAnimation{
					position: absolute;
				}
				#animationLayer1{
					width: 121px;
					top: 0;
					left: 68px;
				}
				#animationLayer2{
					width: 76px;
					top: 33px;
					left: 90px;
					animation:         rotate 5s infinite ease-in-out; /* CSS3 */
					-moz-animation:    rotate 5s infinite ease-in-out; /* Firefox */
					-webkit-animation: rotate 5s infinite ease-in-out; /* Webkit */
				}
				#animationLayer3{
					width: 256px;
					top: 53px;
					left: 0;
				}

			@keyframes rotate {
			  0% {
			        -ms-transform: rotate(0deg);
			         -o-transform: rotate(0deg);
			            transform: rotate(0deg);
			  }
			  50% {
			        -ms-transform: rotate(180deg);
			         -o-transform: rotate(180deg);
			            transform: rotate(180deg);
			  }
			  100% {
			        -ms-transform: rotate(0deg);
			         -o-transform: rotate(0deg);
			            transform: rotate(0deg);
			  }
			}
			@-webkit-keyframes rotate {
			  0% {
			    -webkit-transform: rotate(0deg);
			  }
			  50% {
			    -webkit-transform: rotate(180deg);
			  }
			  100% {
			    -webkit-transform: rotate(0deg);
			  }
			}
			@k-moz-eyframes rotate {
			  0% {
			       -moz-transform: rotate(0deg);
			  }
			  50% {
			       -moz-transform: rotate(180deg);
			  }
			  100% {
			       -moz-transform: rotate(0deg);
			  }
			}
		</style>
	</head>
	<body>
		<div class="wrapperAnimationInfo">
			<img id="animationLayer1" class="imgAnimation" src="img/layer1.png" alt=""/>
			<img id="animationLayer2" class="imgAnimation" src="img/layer2.png" alt=""/>
			<img id="animationLayer3" class="imgAnimation" src="img/layer3.png" alt=""/>
		</div>
	</body>
</html>