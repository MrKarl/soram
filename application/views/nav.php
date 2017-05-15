<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<style>
#brand-logo {
	position:relative;
    margin-right: 112px;
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
			<li><a href="#">암 정보</a></li>
			<li><a href="#">고객센터</a></li>
		</ul>
		
		<ul class="nav navbar-nav navbar-right">
			<li>
				<a href="#">로그인</a>
			</li>
			<li>
				<a href="#" id="private_contact">1:1 상담</a>
			</li>
		</ul>
  </div>
</nav>