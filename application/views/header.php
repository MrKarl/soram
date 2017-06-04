<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>소람 한방병원</title>



	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>

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
		font-family: 'Apple SD Gothic Neo';
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
		margin:auto;
		height:119px;
		width:109px;
		margin-bottom:40px;
	}

	#introduce .card-header-desc {
		font-size: 38px;
		line-height: 1.53;
		letter-spacing: -0.8px;
		text-shadow: 0 0 32px rgba(0, 0, 0, 0.5);
	}

	
	section {
		position:relative;
		width:100%;
	}

	#introduce {
		transition: background 2s linear;
		background-image: url(/assets/img/pic_exterior.png);
		height: 100%;
		background-position: center;
		background-repeat: no-repeat;
		background-size: cover;
		position: relative;
		top:-70px;
	}
	

	#introduce .card-header, #introduce .card-body , #introduce .card-footer {
		text-align: center;
		position: absolute;
		top: 50%;
		left: 50%;
		transform: translate(-50%, -50%);
		color: white;
	}

	.card-mask {
		height:100%;
		width:100%;
		background-color:black;
		opacity:1;
	}

	#facility {
		margin-top: -70px;
		min-height: 500px;
		text-align: center;
	}

	#facility {
		height:600px;
		background-image: url(/assets/img/pic_interior.png);
		height: 100%;
		background-position: center;
		background-repeat: no-repeat;
		background-size: cover;
		position: relative;
	}
	
	#facility .card-mask {
		opacity:0.8;
	}

	#facility .card-header, #facility .card-body , #facility .card-footer {
		text-align: center;
		position: absolute;
		top: 50%;
		left: 50%;
		transform: translate(-50%, -50%);
		color: white;
	}

	</style>
</head>
<body>