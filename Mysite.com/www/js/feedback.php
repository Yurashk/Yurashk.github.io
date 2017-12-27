<html>
<head>
		<meta charset="utf-8">
		<title>yurets</title> 
		<link rel="stylesheet" type="text/css" href="PP.css"/> 
		<link rel="shortcut icon" type="image/x-icon" href="PP.css"/> 
		<meta name="keywords" content="TV,chanel"/>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
		<script>
			$(document).ready (function(){
				$("#send").click(function(){
					$('#messageshow').hide();
				var name=$("#name").val();
				var email=$("#email").val();
				var subject=$("#subject").val();
				var massage=$("#massage").val();
				var fail="";
				if(name.length<3)fail="имя меньше 3 символов";
				else if(email.split('@').length-1==0 || email.split('.').length-1==0)
					fail="unkorrect mail";
				else if(subject.length<5)fail="Тема не меньше 5 символов";
				else if(massage.length<20)fail="сщщбщение не меньше 20 символов";
				if(fail !=""){
						$('#messageshow').html (fail+"<div class='clear'><br></div>");
						$('#messageshow').show();
						return false;
				};
				});
			});
			
		</script>
</head>
<body>
	<div id="page-wrap">
	<header>
		<a href="сайт.html" title="на главную" id="logo">Test site</a>
		<span class="contact"><a href="about.html"title="Информация о нас!">О нас!</a></span>
		<input type="Serch" class="field" placeholder="Давай помогу найти"/>
		<span class="right"><span class="contact">
		<a href="reg.html"title="Зарегестрируйтесь!">Регистрация!</a></span></span>
		<span class="right"><span class="contact">
		<a href="auth.html"title="войти!">Вход!</a></span></span>
	</header>
	<div class="clear"><br/></div>
	<center>
		<div id="menu">Разделы<hr/></div>
		<div id="menuHrefs">
			<a href="about.html">О нас </a>
			<a href="feedback.html">Обратная связь </a>
			<a href="auth.html">Вход </a>
			<a href="reg.html">регистрация </a>
		</div>
	</center>
	<div id="wrapper">
			<div id="articless">
				<form action=" " method="post" >
					<label for="subject">Тема сообщения</label>
					<input type="text"  id="subject" name="subject" placeholder="Тема сообщения"/>
					<label for="email">email</label>
					<input type="email" id="email" name="email" placeholder="adres@ukr.net"/>
					<label for="name">Введите ваше имя</label>
					<input type="text"  id="name" name="name" placeholder="Введите ваше имя"/>
					<label for="massage">Введите ваше сообщение</label>
					<textarea id="massage" name="massage" placeholder="Введите ваше сообщение"></textarea>
					<div id="messageshow"></div>
					<input type="submit" value="отправить" id="send" name="send"/>
				</form>
			</div>
	</div>
	</div>
	<footer>
		<span class="left"> Все права защищены &copy; 2017</span>
		<span class="right">социальные кнопки<img src=" " alt=" Facebook" title=" Facebook"</span>
	</footer>
	
</body>
</html>