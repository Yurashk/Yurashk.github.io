<html>
<head>
		
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width; initial-scale=1.0">
		<title>yurets</title> 
		
		<link rel="stylesheet" href="Universal/Universal.css">
		
		
		
</head>
<body id ="bodycolor">
	<ul class="topnav" id="myTopnav">
		<li><a href="mi.php" class="active">&#160;&#160;Home&#160;&#160;</a></li>
		<li><a href="" >&#160;&#160;News&#160;&#160;</a></li>
		<li><a href="feedback.php" >Contacts</a></li>
		<li><a href="about.php" >About US</a></li>
		<li class="icon"><a href="javascript:void(0);" style="font-size:15px;" onclick="myFunction()" >&#9776;</a></li>
	
	</ul>
	<div id="informationAboutFilms">
		<div id="BlockFoto"><img class="img" style="cursor:pointer" src="Universal/img/patrul.jpg"> </div>
		<div id="BlockInformation">
		<p>Название:	Призрачный патруль</p>
		<p>Оригинальное название:	R.I.P.D.</p>
		<p>Год:	2013</p>
		<p>Страна:	США</p>
		<p>Слоган:	«Они защищают наш мир от гостей с того света»</p>
		<p>Режиссер:	Роберт Швентке</p>
		Жанр:	Боевики, Комедии, Криминальные, ФантастическиеНик Уокер — молодой полицейский, который полностью отдается своей работе и 
		каждый день служит на благо родины. Главная цель в его жизни — борьба с преступным миром. 
		Во время очередного задержания опасных преступников,<p> Ник получает тяжелое ранение, после которого погибает. 
		Однако миссия молодого человека не заканчивается на этом, и он оказывается на службе в призрачном патруле. 
		</p>
		 </div>
	</div>
	<div id="informationAboutFilms">
		<div id="BlockFoto"><img class="img" style="cursor:pointer" src="Universal/img/PP33887.jpg">  </div>
		<div id="BlockInformation"> </div>
	</div>
	<div id="informationAboutFilms">
		<div id="BlockFoto"><img class="img" style="cursor:pointer" src="Universal/img/patrul.jpg">  </div>
		<div id="BlockInformation"> </div>
	</div>
	<div id="informationAboutFilms">
		<div id="BlockFoto"><img class="img" style="cursor:pointer" src="Universal/img/Gladiator.jpg">  </div>
		<div id="BlockInformation"> </div>
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
        $("link[rel=stylesheet]").attr({href : "Universal/Universal.css"});
      }
    }
  });
</script>
</body>
</html>