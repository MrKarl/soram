<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<style>
.navbar-brand,
.navbar-nav li a {
    line-height: 70px;
    height: 70px;
    padding-top: 0;
}
.navbar {
	width:100%;
	background-color: transparent;
	border-color:transparent;
}

.navbar-contents {
	max-width: 980px;
	margin: auto;
}

@media (min-width: 768px) {
  .navbar-nav.navbar-center {
    position: absolute;
    left: 50%;
    transform: translatex(-50%);
    /*padding-right: 10px;
    padding-left: 10px;*/
  }

  .navbar-contents {
	
	margin: auto;
  }
}

.navbar-default .navbar-brand {
	padding-left:20px;
}


@media screen and (max-width: 768px) {
  .navbar-contents {
	width:100%;
	margin: auto;
    overflow-y: hidden;
    max-height: none;
  }

  /*.navbar-default .navbar-brand {
  	padding-left:20px;
  }*/

  .navbar-default .navbar-collapse, .navbar-default .navbar-form {
    /*overflow-y: hidden;
    max-height: none;*/
    border: none;
  }
}

@media screen and (min-width: 769px) and (max-width: 980px) {

}

@media screen and (min-width: 768px) and (max-width:790px) {
	.navbar-nav.navbar-center {
	    left: 46%;
	}
}
@media screen and (max-width: 980px) {
	.navbar-brand, .navbar-nav li a {
	    padding-right: 7px;
	    padding-left: 7px;
	}
}


@media screen and (min-width: 981px) {

}

.navbar-nav.navbar-right a {
	padding-right: 3px;
    padding-left: 3px;
}

#soram_logo {
	height:53px;
	width:48px;
    top: 9px;
    position: relative;
}

.nav.navbar-nav.navbar-center a {
  	font-family: 'NanumSquare';
  	font-weight: 200;
  	font-size: 16px;
  	letter-spacing: -0.4px;
  	text-align: center;
  	color: #ffffff;
}

.nav.navbar-nav.navbar-right a {
	font-family: 'NanumSquare';
	font-weight: 200;
  	letter-spacing: -0.3px;
  	text-align: center;
  	color: #fff;
}

.nav.navbar-nav.navbar-right {
    margin-right: 20px;
    font-size: 12px;
}

#counsel a {
	color:white;
}

@media screen and (min-width: 769px) {
	.navbar-default .navbar-nav>li>a:focus, .navbar-default .navbar-nav>li>a:hover {
		color:white;
	    background-color: transparent;
	    padding-bottom: 0px;
	}

	.navbar-default .navbar-nav>.active>a, .navbar-default .navbar-nav>.active>a:focus, .navbar-default .navbar-nav>.active>a:hover {
	    color:white;
	    background-color: initial;
	}

	.navbar-default .navbar-nav>li>a:after, .navbar-default .navbar-nav>li>a:after {
		content: '';
		display: block;
		height: 2px;
		width: 0;
		background: transparent;
		transition: width 1s ease;
	    margin-top: -20px;
	}
	.navbar-default .navbar-nav>li>a:hover:after, .navbar-default .navbar-nav>li>a:hover:after  {
		width: 100%;
		background: white;
	}
}

#navbar {
	transition: background-color .6s ease;
}

#private-contact { 
    position: relative;
    top: 17px;
    padding: 10px;
    background-color: transparent;
    border-style: none;
    color: white;
    margin-left: 10px;
    border: 2px solid white;
}

#private-contact svg {
	transition: all 1s ease;
}

#private-contact:hover svg {
	/*opacity: 1;*/
	transform: translateX(8px);
	webkit-transform: translateX(8px);
}

</style>
<nav id="navbar" class="navbar navbar-default navbar-fixed-top" role="navigation">
	<!-- <div class="navbar-mask"></div> -->
	<div class="navbar-contents">
	    <div class="navbar-header">
	        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
	            <span class="sr-only">Toggle navigation</span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	        </button>

	        <a class="navbar-brand" href="/">
	        	<img src="/assets/img/logo.png" alt="soram logo" id="soram_logo" />
        	</a>
	    </div>

	    <div class="collapse navbar-collapse">
	    	<ul class="nav navbar-nav navbar-center">
	        	<li><a href="">소람 소개</a></li>
	        	<li><a href="">호전 스토리</a></li>
	            <li><a href="">치료법</a></li>
	            <li><a href="">암 치료 정보</a></li>
	            <li><a href="">고객센터</a></li>
	        </ul>

	        <ul class="nav navbar-nav navbar-right">
	        	<li><a href="">마이페이지</a></li>
	            
	            <li>
	            	<button href="#" id="private-contact" class="menu-item-hover">1:1 상담
	    				<span>
					        <span class="menu-item">
								<svg xmlns="http://www.w3.org/2000/svg" width="14.5" height="10.5">
									<path fill="none" stroke="#fff" d="M8.756.498L13.502 5 8.756 9.502M.496 4.497h12.011"/>
								</svg>
					        </span>
					    </span>
					</button>

				</li>

	        </ul>
	    </div>
    </div>
</nav>