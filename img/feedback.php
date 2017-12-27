<html>
<head>
		<meta charset="utf-8">
		<title>yurets</title> 
		<link rel="stylesheet" type="text/css" href="PP.css"/> 
		<link rel="shortcut icon" type="image/x-icon" href="PP.css"/> 
		<meta name="keywords" content="TV,chanel"/>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
		
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
	
 <?php 
 require "db.php";

 $data = $_POST;
 if(isset($data['do_feedback']) )
 {
 	// ---
   $errors = array();
   if( trim($data['name']) == '')
   {
     $errors[]= 'Введите Имя!';
   }

   if( trim($data['email']) == '')
   {
     $errors[]= 'Введите EMAIL!';
   }

   if( trim($data['tel']) == '')
   {
     $errors[]= 'Введите телефон!';
   }

   if(empty($errors) )
   {
     $user = R::dispense('feedback');
     $user->name = $data['name'];
     $user->email = $data['email'];
     $user->telephone = $data['tel'];
     R::store($user);
   } else
   {
   	echo '<div 	>'.array_shift($errors).'</div><hr>';
   }

 }
 ?>
	
	<form method="POST" action="feedback.php" class="contact_form">
	<p>
            <label>Имя:</label>
            <input class="stored" type="text" name="name" id="name" placeholder="Введите ваше имя" required  />
        </p>
        <p>
            <label>Email:</label>
            <input type="email"  name="email" id="email" class="stored" placeholder="Введите электронный адрес" required />
            <span class="form_hint">Правильный формат "name@something.com"</span>
        </p>
         <p>
            <label for="tel">Телефон:</label>
            <input  type="tel" name="tel" id="tel" class="stored" placeholder="Введите номер телефона" required  pattern="380[0-9]{2}-[0-9]{3}-[0-9]{2}-[0-9]{2}"  />
            <span class="form_hint">Правильный формат "38095-(xxx)-(xx)-(xx)"</span>
        </p>
        <p>
            <label>Текст сообщения:</label>
            <textarea class="stored" name="message" id="message" cols="40" rows="6" required placeholder="Напишите что"></textarea>
        </p>
		<input name="bezspama" type="text" style="display:none" value="" />

		<input name="do_feedback" type="submit" class="demo-button" value="Submit" />
</form>
	</div>
	<footer>
		<span class="left"> Все права защищены &copy; 2017</span>
		<span class="right">социальные кнопки<img src=" " alt=" Facebook" title=" Facebook"</span>
	</footer>
	
</body>
</html>