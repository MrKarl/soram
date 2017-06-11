<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<style>
#brand-logo {
	position:relative;
    margin-right: 112px;
}
@media (min-width: 768px) {
	.navbar-nav.navbar-center {
		position: absolute;
		left: 50%;
		transform: translateX(-50%);
		top: 14px;
	}

	.navbar-nav.navbar-right {
		font-size:14px;
		color:#000000;
		position: relative;
		top: 14px;	
	}
}

.navbar {
    border-color: transparent;
	border-radius: 0;
	margin-bottom:0;
	opacity: 0.8;
	height:70px;
	background-color: #ffffff;
	/*color:#868686;*/
	color:#fff;
	font-size:18px;
	/*font-family: AppleSDGothicNeo;*/
	font-family: 'Nanum Square';
	z-index: 9999;
}

.navbar-nav li a {
	color: #868686;
    font-size: 18px;
    line-height: 11px;
    letter-spacing: -0.4px;
}

.navbar-right li a {
	font-size: 14px;
	font-weight: bold;
	color: #000000;
	margin-right:30px;
}

</style>

<nav id="navbar" class="navbar" role="navigation">
	<div class="navbar-header">
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
      		<span class="icon-bar"></span>
      		<span class="icon-bar"></span>
      		<span class="icon-bar"></span>
    	</button> 
	</div>

	<div class="navbar-collapse collapse">
		<ul class="nav navbar-nav navbar-left" id="brand-logo">
			<li>
				<a href="/"><img src="/assets/img/logo.png" alt="soram logo"/></a>
			</li>
		</ul>

		<ul class="nav navbar-nav navbar-center">
			<li><a href="#">소람 소개</a></li>
			<li><a href="#">치료법</a></li>
			<li><a href="#">암 치료 정보</a></li>
			<li><a href="#">고객센터</a></li>
		</ul>
		
		<ul class="nav navbar-nav navbar-right">
			<li>
				<a href="#">로그인</a>
			</li>
			<li>
				<!-- <a href="#" id="private_contact">1:1 상담</a> -->

				<a href="#" id="private_contact">1:1 상담
					<svg xmlns="http://www.w3.org/2000/svg" width="14.5" height="10.5">
					    <path fill="none" stroke="#01B3F1" d="M8.756.498L13.502 5 8.756 9.502M.496 4.497h12.011"/>
					</svg>
				</a>

				

			</li>
		</ul>
  </div>
</nav>