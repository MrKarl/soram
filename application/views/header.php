<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>소람 한방병원</title>



	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<script
  src="https://code.jquery.com/jquery-3.2.1.min.js"
  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  crossorigin="anonymous"></script>

	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>



	
  	

  	<script type="text/javascript">
  	$(document).ready(function() {
	    $(window).scroll( function(){
	        $('.hide-scrolling').each( function(i){
	            var bottom_of_object = $(this).offset().top + $(this).outerHeight();
	            var bottom_of_window = $(window).scrollTop() + $(window).height();

	            if( bottom_of_window > bottom_of_object ){
	                $(this).animate({'opacity':'1'},500);
	            }
	        }); 
	    
	    });
	    
	});
  	</script>

	<style type="text/css">

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
		border-radius: 0;
		margin-bottom:0;
		opacity: 0.8;
		height:70px;
		background-color: #ffffff;
		color:#868686;
		font-size:18px;
		font-family: AppleSDGothicNeo;
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

	#private_contact {
		background-color: black;
		color:white;
	}

	#container {
		text-align: center;
	}

	.card-body {
		margin-top:45px;
	}

	.hide-scrolling {
	    opacity:0;
	}

	.card-header-title {
		display:inline-block;
		font-size:32px;
	}

	.card-header-left {
		display:inline-block;
		color:#aaaaaa;
		font-size:14px;
		float:right;
	}

	.card-header {
		color:white;
	}
	.card-header-title {
		font-family: AppleSDGothicNeo;
		text-align: center;
		color: #ffffff;
	}
	.card-header-desc {
		font-size:24px;
	}
	
	#introduce .card-header {
		position: relative;
		top:285px;
	}

	#introduce .card-header-title {
		font-size: 38px;
		line-height: 1.53;
		letter-spacing: -0.8px;
		text-shadow: 0 0 32px rgba(0, 0, 0, 0.5);
	}

	#introduce .card-header-logo {
		margin:auto;
		height:119px;
		width:109px;
		margin-bottom:40px;
	}
	section {
		position:relative;
		width:100%;
	}

	#introduce {
		background-image: url(/assets/img/pic_exterior.png);
		height: 100%;
		background-position: center;
		background-repeat: no-repeat;
		background-size: cover;
		position: relative;
	}
	

	#introduce .card-header, #introduce .card-body{
		text-align: center;
		position: absolute;
		top: 50%;
		left: 50%;
		transform: translate(-50%, -50%);
		color: white;
	}

	/*#introduce .card-hero-unit {
		position: absolute;
		top:-70px;
		left:0;
		background-image: url(/assets/img/pic_exterior.png);
		background-size: cover;
		background-repeat: no-repeat;
		width:100%;
		height:100%;
		z-index: -1;
	}


	#introduce .card-hero-unit::after {
		content: '';
		background-color: black;
		opacity: 0.4;
		height:100%;
		width:100%;
		position: absolute;
		top:0;
		left:0;
	}*/


	#facility {
		margin-top: -70px;
		min-height: 500px;
		text-align: center;
	}

	#facility .card-header {
		
		top:50px;
		transform: translateY(-50%);
	}

	#facility .card-hero-unit {
		position: absolute;
		top:0;
		left:0;
		background-image: url(/assets/img/pic_interior.png);
		background-size: cover;
		background-repeat: no-repeat;
		width:100%;
		height:100%;
		z-index:-1;
	}

	#facility .card-hero-unit::after {
		content: '';
		background-color: black;
		opacity: 0.8;
		height:100%;
		width:100%;
		position: absolute;
		top:0;
		left:0;
	}

	#hero-bg {
		height: 677.25px;
    	transform: translate3d(0px, 0px, 0px);
	}

	</style>
</head>
<body>