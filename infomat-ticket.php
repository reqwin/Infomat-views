<?php

/* @var $this yii\web\View */
$this->title = 'Медицинский портал Ставропольского края';

frontend\assets\ParsleyJsAsset::register ( $this );
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
	background-color: #E6E9FF;
}

.mypanel {
	text-align: center;
	font-family: RobotoMedium;
	color: #535352;
	font-size: 42px;
	margin-top: -5px;
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
	width: 490px;
	height: 103px;
	color: white;
	font-size: 36px;
	font-family: RobotoMedium;
	vertical-align: text-top;
	text-align: center;
	font-weight: 500;
}

.word2 {
	border-radius: 6px;
	background: -webkit-linear-gradient(90deg, #b6021c 0%, #d57a87 100%);
	background: -moz-linear-gradient(90deg, #b6021c 0%, #d57a87 100%);
	background: -o-linear-gradient(90deg, #b6021c 0%, #d57a87 100%);
	background: -ms-linear-gradient(90deg, #b6021c 0%, #d57a87 100%);
	background: linear-gradient(0deg, #b6021c 0%, #d57a87 100%);
	box-shadow: 0px 5px 7px 0px rgba(0, 0, 0, 0.18);
	color: white;
	font-size: 36px;
	font-family: RobotoMedium;
	vertical-align: text-top;
	text-align: center;
	margin: 5px;
	width: 490px;
	height: 103px;
	font-weight: 500;
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
	height: 145px;
	opacity: 0.65;
}

.context_font {
	font-family: RobotoMedium;
	font-size: 25px;
	margin-right: 10px;
	margin-left: 20px
}

.form-label {
	font-family: RobotoMedium;
	color: #575757;
	font-size: 30px; /* Approximation due to font substitution */
	font-weight: 500;
	text-align: left;
}

.btn:hover {
	background: linear-gradient(0deg, #586397 10%, #4064E7 160%);
	color: white;
}

.btn:active {
	color: white;
}

.btn:focus {
	color: white;
}

.letter {
	font-size: 47px;
	font-family: RobotoMedim
}

.ticket {
	padding: 7px; /* Поля вокруг текста */
	margin: 0 0 1em; /* Отступы вокруг */
	border-radius: 4px;
	border-width: 1px;
	border-color: #9c9b9b;
	border-style: solid;
	background-color: #ffffff;
	width: 630px;
	height: 600px;
}

.myhead {
	font-family: RobotoMedium;
	color: #575858;
	font-size: 34px; /* Приближение из-за подстановки шрифтов */
	text-align: center;
	margin-top: 6px;
	opacity: 0.9
}

.myhead2 {
	font-family: Courier;
	color: #575858;
	font-size: 21px; /* Приближение из-за подстановки шрифтов */
	font-weight: 600;
	line-height: 18px; /* Приближение из-за подстановки шрифтов */
	text-align: center;
}

.mycell {
	font-family: Courier;
	color: #575858;
	font-size: 18px; /* Приближение из-за подстановки шрифтов */
	font-weight: 600;
	line-height: 15px; /* Приближение из-за подстановки шрифтов */
	text-align: left;
	margin-left: 35px;
}

.mycell2 {
	font-family: Courier;
	color: #575858;
	font-size: 18px; /* Приближение из-за подстановки шрифтов */
	font-weight: 600;
	line-height: 15px; /* Приближение из-за подстановки шрифтов */
	text-align: left;
	margin-left: 50px;
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

	<!--  ********************* Верхняя панель с бегущей строкой ********************** -->
	<div class="panel panel-default"
		style="background-color: #ffffff; box-shadow: 0px 5px 7px 0px rgba(0, 0, 0, 0.18); width: 1920px; height: 105px">
		<div class="mypanel marquee">
			<span> <img src="img/gerb.png" width="50" height="64" align="middle"
				alt="" style="margin-right: 10px; margin-top: -15px"> ЕДИНЫЙ ПОРТАЛ
				ЗДРАВООХРАНЕНИЯ СТАВРОПОЛЬСКОГО
				КРАЯ&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<big style="color: red">8-800-200-26-03 телефон горячей линии</big>
			</span>
		</div>
	</div>
	<!--  *********************************************************** -->


	<!-- ************* строка Персональные данные *************** -->
	<div class="row" style="margin-top: 30px">
		<h1 class="select_specialist">Вы успешно записаны на приём к врачу !</h1>
	</div>
	<!-- ******************************************************** -->




	<div class="col-md-4" style="margin-left: 295px; margin-top: 50px">


		<div class="ticket">

			<div class="panel panel-heading"
				style="width: 628px; height: 78px; margin-left: -7px; background: rgba(178, 238, 240, 0.90); margin-top: -7px">
				<h1 class="myhead">Талон на приём к врачу</h1>
			</div>

			<h2 class="myhead2">ГБУЗ СК "Предгорная центральная районная
				больница"</h2>

			<table style="margin-left: 30px; margin-top: 50px">
				<tbody>
					<tr>
						<td><p class="mycell">Номер записи</p></td>
						<td><p class="mycell2">1234567</p></td>
					</tr>
					<tr>
						<td><p class="mycell">Уникальный код отмены</p></td>
						<td><p class="mycell2">BEBEBE</p></td>
					</tr>

					<tr>
						<th colspan="2"><span style="opacity: 0.4;">&ndash; &ndash;
								&ndash; &ndash; &ndash; &ndash; &ndash; &ndash; &ndash; &ndash;
								&ndash; &ndash; &ndash; &ndash; &ndash; &ndash; &ndash; &ndash;
								&ndash; &ndash; &ndash; &ndash; &ndash; &ndash; &ndash; &ndash;
								&ndash; &ndash; &ndash; &ndash; &ndash; &ndash; &ndash; &ndash;
								&ndash; &ndash; &ndash; &ndash; &ndash; &ndash; &ndash; &ndash;
								&ndash; &ndash; &ndash; &ndash; </span></th>
					</tr>

					<tr>
						<td><p></p></td>
					</tr>

					<tr>

						<td><p class="mycell">ФИО</p></td>
						<td><p class="mycell2">Бодун Галина Ромова</p></td>
					</tr>
					<tr>
						<td><p class="mycell">Специальность</p></td>
						<td><p class="mycell2">Патологоанатом</p></td>
					</tr>

					<tr>
						<th colspan="2"><span style="opacity: 0.4;">&ndash; &ndash;
								&ndash; &ndash; &ndash; &ndash; &ndash; &ndash; &ndash; &ndash;
								&ndash; &ndash; &ndash; &ndash; &ndash; &ndash; &ndash; &ndash;
								&ndash; &ndash; &ndash; &ndash; &ndash; &ndash; &ndash; &ndash;
								&ndash; &ndash; &ndash; &ndash; &ndash; &ndash; &ndash; &ndash;
								&ndash; &ndash; &ndash; &ndash; &ndash; &ndash; &ndash; &ndash;
								&ndash; &ndash; &ndash; &ndash; </span></th>
					</tr>

					<tr>
						<td><p></p></td>
					</tr>

					<tr>

						<td><p class="mycell">Дата приёма</p></td>
						<td><p class="mycell2">Послезавтра</p></td>
					</tr>
					<tr>
						<td><p class="mycell">Время приёма</p></td>
						<td><p class="mycell2">С утреца где-то...</p></td>
					</tr>

					<tr>
						<th colspan="2"><span style="opacity: 0.4;">&ndash; &ndash;
								&ndash; &ndash; &ndash; &ndash; &ndash; &ndash; &ndash; &ndash;
								&ndash; &ndash; &ndash; &ndash; &ndash; &ndash; &ndash; &ndash;
								&ndash; &ndash; &ndash; &ndash; &ndash; &ndash; &ndash; &ndash;
								&ndash; &ndash; &ndash; &ndash; &ndash; &ndash; &ndash; &ndash;
								&ndash; &ndash; &ndash; &ndash; &ndash; &ndash; &ndash; &ndash;
								&ndash; &ndash; &ndash; &ndash; </span></th>
					</tr>

					<tr>
						<td><p></p></td>
					</tr>

					<tr>

						<td><p class="mycell">Кабинет</p></td>
						<td><p class="mycell2">С ремонтом</p></td>
					</tr>
					<tr>
						<td><p class="mycell">Режим работы</p></td>
						<td><p class="mycell2">Автономный</p></td>
					</tr>

					<tr>
						<th colspan="2"><span style="opacity: 0.4;">&ndash; &ndash;
								&ndash; &ndash; &ndash; &ndash; &ndash; &ndash; &ndash; &ndash;
								&ndash; &ndash; &ndash; &ndash; &ndash; &ndash; &ndash; &ndash;
								&ndash; &ndash; &ndash; &ndash; &ndash; &ndash; &ndash; &ndash;
								&ndash; &ndash; &ndash; &ndash; &ndash; &ndash; &ndash; &ndash;
								&ndash; &ndash; &ndash; &ndash; &ndash; &ndash; &ndash; &ndash;
								&ndash; &ndash; &ndash; &ndash; </span></th>
					</tr>

					<tr>
						<td><p></p></td>
					</tr>

					<tr>
						<td><p class="mycell">Пациент</p></td>
						<td><p class="mycell2">Живой</p></td>
					</tr>
					<tr>
						<td><p class="mycell">Дата рождения</p></td>
						<td><p class="mycell2">01.10.01.10.11.00</p></td>
					</tr>
				<tbody>
			</table>
		</div>
	</div>



	<div class="col-md-4" style="margin-left: 150px; margin-top: 437px">

		<div class="row" style="margin-top: -15px">

			<button class="btn word button-primary" type="button"
				style="margin-left: 13px">

				<p>РАСПЕЧАТАТЬ ТАЛОН</p>
			</button>

		</div>

		<div class="row" style="margin-top: 15px">

			<button class="btn word2 button-primary" type="button"
				style="margin-left: 13px">

				<p>ВЕРНУТЬСЯ НА ГЛАВНУЮ</p>
			</button>
		</div>
	</div>

</body>
</html>






