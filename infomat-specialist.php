<?php

/* @var $this yii\web\View */
$this->title = 'Медицинский портал Ставропольского края';
?>




<!DOCTYPE html>
<html lang="ru">
<head>

<meta name="description" content="Первая страница раздела">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Инфомат-специалист</title>
<!-- 1. Подключаем скомпилированный и минимизированный файл CSS Bootstrap 3 -->
<link href="/css/bootstrap-theme.css" rel="stylesheet">
<link href="/css/bootstrap-theme.min.css" rel="stylesheet">
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/bootstrap.css" rel="stylesheet">


<style>
body {
	background-image:
		url(https://2.downloader.disk.yandex.ru/preview/72a58ae5021e7fce8c9a28788c4f64321ca57a5a0cb1340bbb896b5a7d34e872/inf/5GapED9xTGmBmakjy4azS_sucGctdbN2Kc4nQnCtmwHaIrE301JtKhIxl2bA4u9Nudr7uyp6ka-_c73rc5MAxA%3D%3D?uid=0&filename=background.png&disposition=inline&hash=&limit=0&content_type=image%2Fpng&tknv=v2&size=1280x857);
	background-position: center center;
	background-repeat: no-repeat;
	background-attachment: fixed;
	background-size: cover;
	background-color: white;
}

.mypanel {
	text-align: center;
	font-family: RobotoMedium;
	color: #535352;
	font-size: 42px;
	margin-top: 5px;
	color: #535352;
}

.word {
	border-radius: 6px;
	background: -webkit-linear-gradient(90deg, #586397 0%, #7b8de7 100%);
	background: -moz-linear-gradient(90deg, #586397 0%, #7b8de7 100%);
	background: -o-linear-gradient(90deg, #586397 0%, #7b8de7 100%);
	background: -ms-linear-gradient(90deg, #586397 0%, #7b8de7 100%);
	background: linear-gradient(0deg, #586397 0%, #7b8de7 100%);
	box-shadow: 0px 5px 7px 0px rgba(0, 0, 0, 0.18);
	color: white;
	font-size: 36px;
	font-family: RobotoMedium;
	vertical-align: text-top;
	text-align: center;
	margin: 5px;
	width: 510px;
	height: 196px;
}


.round {
	margin-left: 190px;
	width: 124px;
	height: 124px;
	background-repeat: no-repeat;
	background-position: center;
	background-image: url(img/Medical-Doctor.png);
	/* Путь к фоновому изображению */
	border-radius: 50%; /* Превращаем в круг */
	background-color: #7181d0;
}

@font-face {
	font-family: 'RobotoMedium';
	src: url('fonts/RobotoMedium.woff2') format('woff2'),
		url('fonts/RobotoMedium.ttf') format('truetype'),
		/* Только если нужна поддержка старых Android, иначе закомментировать */		 
       url('fonts/RobotoMedium.woff') format('woff');
	font-weight: normal;
	font-style: normal;
}


.yellow {
	color: yellow;
	font-size: 50pt;
	vertical-align: middle;
	text-align: left;
}

.select_specialist {
	margin-left: -42px;
	font-family: RobotoMedium;
	color: #6a6a6b;
	font-size: 40px; /* Approximation due to font substitution */
	font-weight: 500;
	text-align: center;
}

.nazad {
	width: 265px; 
	height: 93px; 
	font-family: RobotoMedium;
	color: #fefefe;
	font-size: 40px; /* Approximation due to font substitution */
	font-weight: 500;
	text-align: left;
	border-radius: 6px;
	background: -webkit-linear-gradient(90deg, #586397 0%, #7b8de7 100%);
	background: -moz-linear-gradient(90deg, #586397 0%, #7b8de7 100%);
	background: -o-linear-gradient(90deg, #586397 0%, #7b8de7 100%);
	background: -ms-linear-gradient(90deg, #586397 0%, #7b8de7 100%);
	background: linear-gradient(0deg, #586397 0%, #7b8de7 100%);
	box-shadow: 0px 5px 7px 0px rgba(0, 0, 0, 0.18);
	font-family: RobotoMedium;
}

.context {
	width: 560px;
	height: 60px;
	opacity: 0.65;
}

.context_font {
	font-family: RobotoMedium;
	font-size: 25px;
	margin-right: 10px;
	padding: 5px;
}

.select_page  {

	border-radius: 6px;
	background: linear-gradient(0deg, #586397 0%, #7b8de7 100%);
	box-shadow: 0px 5px 7px 0px rgba(0, 0, 0, 0.18);
	width: 65px;
	height: 65px;
	font-family: RobotoMedium;
	color: white;
	font-size: 36px;

}

.select_page_active  {

	width: 65px;
	height: 65px;
	font-family: RobotoMedium;
	color: white;
	font-size: 36px;

}


.btn:hover{
 	 background: linear-gradient(20deg, #586397 50%, #7b8de7 160%);
 	 color: white;
}


.btn:active {
	
	color: white;
}


.btn:focus {
	
	color: white;
}





<!--********************** cтиль для бегущей строки **********************-->

 	 @-webkit-keyframes scroll { 0% {
	-webkit-transform: translate(0, 0);
	transform: translate(0, 0);
	}
	100% {-webkit-transform: translate(-100%,0);transform: translate(-100%,0)}}


	@-moz-keyframes scroll { 0% {
	-moz-transform: translate(0, 0);
	transform: translate(0, 0);
	}
	100% {-moz-transform: translate(-100%,0);transform: translate(-100%,0)}}


	@keyframes scroll { 0% {
	transform: translate(0, 0);
	}
	100%{transform: translate(-100%,0)}}


	.marquee {
    display: block;
    width: 100%;
    white-space: nowrap;
    overflow: hidden;
	}

	.marquee span {
    display: inline-block;
    padding-left: 100%;
    -webkit-animation: scroll 30s infinite linear;
    -moz-animation: scroll 30s infinite linear;
    animation: scroll 30s infinite linear;
	}



</style>
</head>


<body>

	<!--  ********************* Верхняя панель ********************** -->
	<div class="panel panel-default"
		style="background-color: #ffffff; box-shadow: 0px 5px 7px 0px rgba(0, 0, 0, 0.18); width: 1920px; height: 105px">
		<h1 class="mypanel marquee">
			<span> <img src="img/gerb.png" width="50" height="64" align="middle"
				alt="" style="margin-right: 10px; margin-top: -15px"> ЕДИНЫЙ ПОРТАЛ ЗДРАВООХРАНЕНИЯ
				СТАВРОПОЛЬСКОГО КРАЯ&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<big style="color: red">8-800-200-26-03 телефон горячей линии</big>
			</span>
		</h1>
	</div>
	<!--  *********************************************************** -->





	<div class="row" style="margin-top: 35px">

		<div class="col-md-4">
			<button class="btn nazad button-primary" type="button"                   style="margin-left: 50px">
				<span class="glyphicon glyphicon-menu-left yellow"></span>НАЗАД
			</button>
		</div>
		<div class="col-md-4 ">
			<div class="round"></div>
		</div>
		<div class="col-xs-3" style="margin-top: -10px; margin-left: -20px">
			<div class="bg-warning context">
				<p class="context_font text-center">Специальность: Акушерство и
					гинекология</p>
			</div>
		</div>

	</div>





	<!-- ************* строка Выберите специалиста *************** -->
	<div class="row" style="margin-top: -5px">
		<h1 class="select_specialist" >Выберите специалиста</h1>
	</div>
	<!-- ******************************************************** -->






	<div class="row" style="margin-top: 10px">

		<div class="col-md-4">
			<button class="btn word" type="button"        style="margin-left: 50px">
				<div style="color: #f3e549">884</div>
				<p>Карпов</p>
				<p>Карп Карпович</p>
			</button>
		</div>
		<div class="col-md-4">
			<button class="btn word" type="button"        style="margin-left: 31px">
				<div style="color: #f3e549">884</div>
				<p>Карпов</p>
				<p>Карп Карпович</p>
			</button>
		</div>
		<div class="col-md-4">
			<button class="btn word" type="button"         style="margin-left: 13px">
				<div style="color: #f3e549">884</div>
				<p>Карпов</p>
				<p>Карп Карпович</p>
			</button>
		</div>

	</div>





	<div class="row" style="margin-top: 50px">

		<div class="col-md-4">
			<button class="btn word button-primary" type="button"         style="margin-left: 50px">
				<div style="color: #f3e549">884</div>
				<p>Карпов</p>
				<p>Карп Карпович</p>
			</button>
		</div>
		<div class="col-md-4">
			<button class="btn word button-primary" type="button"          style="margin-left: 31px">
				<div style="color: #f3e549">884</div>
				<p>Карпов</p>
				<p>Карп Карпович</p>
			</button>
		</div>
		<div class="col-md-4">
			<button class="btn word button-primary" type="button"          style="margin-left: 13px">
				<div style="color: #f3e549">884</div>
				<p>Карпов</p>
				<p>Карп Карпович</p>
			</button>
		</div>

	</div>





	<div class="row">


		<div data-toggle="buttons" style="margin-top: 43pt; margin-left: 1525px">
  			<label class="btn select_page_active btn-danger" style="margin: 12px">     <!-- СТИЛЬ SELECT_PAGE_ACTIVE ПРИСВАИВАЕТСЯ КНОПКЕ С ЦИФРОЙ СООТВЕТСТВУЮЩЕЙ НОМЕРУ СТРАНИЦЫ  -->
    			<input type="radio" >1
  			</label>
  			<label class="btn select_page button-primary" style="margin: 12px">
    			<input type="radio" >2
  			</label>
  			<label class="btn select_page button-primary" style="margin: 12px">
    			<input type="radio" >3
  			</label>
		</div>
	

	</div>




</body>
</html>






