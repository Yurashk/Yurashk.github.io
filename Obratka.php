<html>
<head>
		
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width; initial-scale=1.0">
		<title>yurets</title> 
		
		<link rel="stylesheet" href="Universal/obratka.css">
		
		
		
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
	
	<form method="POST" action="feedback.php" class="contact_form">
	<p id="nameus">
            <label>Имя:</label>
            <input class="stored" type="text" name="name" id="name" placeholder="Введите ваше имя" required  />
        </p >
        <p id="emailus">
            <label>Email:</label>
            <input type="email"  name="email" id="email" class="stored" placeholder="Введите электронный адрес" required />
            <span class="form_hint">Правильный формат "name@something.com"</span>
        </p>
         <p id="phoneus">
            <label for="tel">Телефон:</label>
            <input  type="tel" name="tel" id="tel" class="stored" placeholder="Введите номер телефона" required  pattern="380[0-9]{2}-[0-9]{3}-[0-9]{2}-[0-9]{2}"  />
            <span class="form_hint">Правильный формат "38095-(xxx)-(xx)-(xx)"</span>
        </p>
        <p id="textus">
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
	
	<script src="script1.js"></script>
	<script src="java.js"></script>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js"></script>
	<script type="text/javascript">
  $(document).ready(function(){
    $(window).bind("resize", resizeWindow);
    function resizeWindow(e){
      var newWindowWidth = $(window).width();

      // If width width is below 700px, switch to the mobile stylesheet
      if(newWindowWidth < 850){
        $("link[rel=stylesheet]").attr({href : "Universal/Universalmobile.css"});
      } else if(newWindowWidth > 850){
        // Else if width is above 600px, switch to the large stylesheet
        $("link[rel=stylesheet]").attr({href : "Disney/Disney.css"});
      }
    }
  });
</script>
</body>
</html>