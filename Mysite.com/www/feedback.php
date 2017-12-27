<html>
<head>
		<meta charset="utf-8">
		<title>yurets</title> 
		<link rel="stylesheet" href="Universal/obratka.css">
		<meta name="keywords" content="TV,chanel"/>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
	
		
		<script src="jsSeo.js"> </script>
		
</head>
<body id ="bodycolor">
	<ul class="topnav" id="myTopnav">
		<li><a href="mi.php" class="active">&#160;&#160;Home&#160;&#160;</a></li>
		<li><a href="" >&#160;&#160;News&#160;&#160;</a></li>
		<li><a href="feedback.php" >Contacts</a></li>
		<li><a href="index.php" >General</a></li>
		<li class="icon"><a href="javascript:void(0);" style="font-size:15px;" onclick="myFunction()" >&#9776;</a></li>
	
	</ul>
	
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
	<div> &#160;&#160;&#160;&#160;&#160;&#160;<img  src="chat.png" id="kartinkil" color="white" width="5%" height="5%" alt="sdfsdf" > </div>
	
	
	
	<div class="canvas"  style="color:white;" id="canvas"></div>
	<script src="canvas.js"></script>
	<p id="voprosu" style="margin-left:15%;">Если у вас есть отзывы,оставьте их здесь!!!<div> </div></p>
	<form id="localStorageTest" method="POST" action="feedback.php" class="contact_form">
	<p id="nameus">
            <label>Имя:&#160;&#160;</label>
            <input class="stored" type="text" name="name" id="name" placeholder="Введите ваше имя" required  />
        </p >
        <p id="emailus">
            <label>Email:</label>
            <input type="email"  name="email" id="email" class="stored" placeholder="Введите электронный адрес" required />
            <span class="form_hint"> "name@something.com"</span>
        </p>
         <p id="phoneus">
            <label for="tel">Телефон:</label>
            <input  type="tel" name="tel" id="tel" class="stored" placeholder="Введите номер телефона" required  pattern="380[0-9]{2}-[0-9]{3}-[0-9]{2}-[0-9]{2}"  />
            <span class="form_hint"></span>
        </p>
        <p id="textus">
            <label>Текст сообщения:</label>
            <textarea class="stored" name="message" id="message" cols="40" rows="6" required placeholder="Оставьте ваш отзыв..."></textarea>
        </p>
		<input name="bezspama" type="text" style="display:none" value="" />
		
		<input name="do_feedback" type="submit" class="demo-button" value="Submit" style="margin-left:20%;"/>
		
		
</form>
	</div>
	<footer>
		<span class="left"> Все права защищены &copy; 2017</span>
	</footer>
	
</body>
</html>