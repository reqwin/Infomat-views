<?php

/* @var $this yii\web\View */
$this->title = 'Медицинский портал Ставропольского края';

frontend\assets\ParsleyJsAsset::register($this);
?>


<!DOCTYPE html>
<html lang="ru">
<head>

<meta name="description" content="Первая страница раздела">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Персональные данные</title>
<!-- 1. Подключаем скрипты и bootstrap-3 -->
<script src="https://code.jquery.com/jquery.min.js"></script>
<script type="text/javascript" src="js/moment-with-locales.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/bootstrap-datetimepicker.min.js"></script>
<script type="text/javascript" src="js/clndr.js"></script>
<link rel="stylesheet" type="text/css"
	href="css/bootstrap-datetimepicker.min.css" />
<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.css">
<link rel="stylesheet" type="text/css"
	href="css/bootstrap-theme.min.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet"
	href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.2/css/bootstrap-select.min.css">

<!-- Latest compiled and minified JavaScript -->
<script
	src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.2/js/bootstrap-select.min.js"></script>

<!-- (Optional) Latest compiled and minified JavaScript translation files -->
<script
	src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.2/js/i18n/defaults-*.min.js"></script>

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
	background-image: url(img/medical-user.png);
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
	height: 145px;
	opacity: 0.65;
}

.context_font {
	font-family: RobotoMedium;
	font-size: 25px;
	margin-right: 10px;
	margin-left: 20px
}

select {
	width: 513px;
	height: 60px;
	font-size: 26px;
	color: #7d7c7c;
	font-family: RobotoMedium;
	background: #ffffff;
	border: 1px solid #e3e3e3;
	-webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .05);
	box-shadow: inset 0 1px 1px rgba(0, 0, 0, .05)
}

.form-label {
	font-family: RobotoMedium;
	color: #575757;
	font-size: 30px; /* Approximation due to font substitution */
	font-weight: 500;
	text-align: left;
}

.sidebarForm select {
	border-top-width: 0px;
	border-bottom-width: 0px;
	border-left-width: 0px;
	border-right-width: 0px;
	width: 100%;
}

.btn:hover {
	background: linear-gradient(20deg, #586397 50%, #7b8de7 160%);
	color: white;
}


.btn:active {
	
	color: white;
}


.btn:focus {
	
	color: white;
}


.bigbox { -ms-transform: scale(2); -moz-transform: scale(2); -o-transform: scale(2);}



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

	.bootstrap-select
	{
		width: 100%;
	}
</style>
</head>


<body>

	<!--  ********************* Верхняя панель с бегущей строкой ********************** -->
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
			<button class="btn nazad" type="button"
				style="margin-left: 50px">
				<span class="glyphicon glyphicon-menu-left yellow"></span>НАЗАД
			</button>
		</div>
		<div class="col-md-4 ">
			<div class="round"></div>
		</div>
		<div class="col-xs-3" style="margin-top: -10px; margin-left: -20px">
			<div class="bg-warning context">
				<p class="context_font">Специальность: Акушерство и гинекология</p>
				<p class="context_font">Специалист: Карпов Карп Карпович</p>
				<p class="context_font">Дата и время: 14 марта 14:00</p>
			</div>
		</div>

	</div>



	<!-- ************* строка Персональные данные *************** -->
	<div class="row" style="margin-top: -15px">
		<h1 class="select_specialist">Персональные данные</h1>
	</div>
	<!-- ******************************************************** -->




	<div class="row" style="margin-top: 20px">

		<div class="col-md-4">
			<form role="form" style="margin-left: 54px">
				<div class="form-group">
					<label class="form-label" for="Family">Фамилия</label> <input
						type="text" class="form-control" id="Family"
						placeholder="Введите фамилию"
						style="font-size: 26px; width: 513px; height: 60px">
				</div>
				<div class="form-group">
					<label class="form-label" for="Name">Имя</label> <input type="text"
						class="form-control" id="Name" placeholder="Введите имя"
						style="font-size: 26px; width: 513px; height: 60px">
				</div>
				<div class="form-group">
					<label class="form-label checkbox" for="MiddleName">Отчество&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input
						type="checkbox" style="transform: scale(2); margin-top: 15px; margin-left: -30px;">Отсутствует
					</label> <input type="text" class="form-control" id="MiddleName"
						placeholder="Введите отчество"
						style="font-size: 26px; width: 513px; height: 60px">
				</div>
			</form>
		</div>

		<div class="col-md-4" style="margin-left: 38px">


			<label class="form-label">Пол</label>
			<form method="post" action="">
				<p>
					<select name="select">
						<option disabled></option>
						<option>МУЖСКОЙ</option>
						<option>ЖЕНСКИЙ</option>
					</select>
				</p>
			</form>


			<form role="form">
				<div class="form-group" style="margin-top: 14px">
					<label class="form-label" for="Name">Дата рождения</label>

					<div class='input-group date' id='datetimepicker5' style="width: 0px">
						<input type='text' class="form-control" placeholder="Выберите дату" style="font-family: RobotoMedium; font-size: 26px; color: #7d7c7c; width: 470px; height: 61px"> <span
							class="input-group-addon"> <span
							class="glyphicon glyphicon-calendar"></span>
						</span>
					</div>
				</div>
				    <script type="text/javascript">
      $(function () {
        $('#datetimepicker5').datetimepicker(
          {pickTime: false, language: 'ru'}
        );
      });
    </script>
			</form>
		</div>

	
	<div class="col-md-4" style="margin-left: -63px">
			<form role="form" style="margin-left: 54px">
				<div class="form-group">
					<label class="form-label" for="Family">Номер полиса</label> <input
						type="text" class="form-control" id="Family"
						placeholder="Введите номер"
						style="font-size: 26px; width: 513px; height: 60px">
				</div>
				<div class="form-group">
					<label class="form-label" for="Name">Номер телефона</label> <input type="text"
						class="form-control" id="Name" placeholder="Введите номер"
						style="font-size: 26px; width: 513px; height: 60px">
				</div>
				
			</form>
		</div>
	
	
	</div>



	<div class="row" style="margin-top: 105px">

		<button class="btn nazad" type="button"
			style="margin-left: 1540px">
			<span style="margin-left: 33px">ДАЛЕЕ</span><span
				class="glyphicon glyphicon-menu-right yellow"></span>
		</button>

	</div>


</body>
</html>






