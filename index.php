<html>
<head>
		
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width; initial-scale=1.0">
		<title>yurets</title> 
		<link rel="stylesheet" href="style.css">
		
		
</head>
<body>
	<ul class="topnav" id="myTopnav">
	    
		<div class="canvas"  style="color:white;" id="canvas"></div>
		<div id="b">
		<img  src="chat.png" id="kartinkil" color="white" width="5%" height="5%" alt="sdfsdf"> </div>
		
		<script src="canvas.js"></script>
		<li><a href="mi.php" class="active">Home</a></li>
		<li><a href="" >News</a></li>
		<li><a href="feedback.php" >Contacts</a></li>
		<li><a href="index.php" >About US</a></li>
		<li class="icon"><a href="javascript:void(0);" style="font-size:15px;" onclick="myFunction()" >&#9776;</a></li>
	
	</ul>
	<div id="wrapper">
			<div id="articless">
				<article id="leftbl">
					<img class="img" src="images/oskar.jpg" id="kartinkil" width="100%" height="100%" alt="sdfsdf">
				</article>
				<article id="senterbl">
					<div class="slideshow-conteiner">
						<div class="mySlides fade" >
						<a  class="next" href="Disney.php"  ><img class="img" style="cursor:pointer" src="images/Walt_Disney.jpg" width="100%" height="100%" alt="sdfsdf"></a>
						</div>
						<div class="mySlides fade">
						<a  class="next" href="Disney.php" ><img src="images/dreamworks.jpg" style="cursor:pointer"width="100%" height="100%" alt=""></a>
						</div>
						<div class="mySlides fade">
						<a  class="next"  href="Universal.php" ><img src="images/universal.jpg"style="cursor:pointer" width="100%" height="100%" alt=""></a>
		</div>
	</div>
	
	
				</article>
				<article id="rightbl">
					<img class="img" src="images/oskar1.jpg" id="kartinkir" width="100%" height="100%" alt="sdfsdf">
				</article>
			
		</div>
	</div>
	<script src="script1.js"></script>
	<script src="java.js"></script>
	<footer>
		<span class="left"> Все права защищены &copy; 2017</span>
		
	</footer>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js"></script>

<script type="text/javascript">
  $(document).ready(function(){
    $(window).bind("resize", resizeWindow);
    function resizeWindow(e){
      var newWindowWidth = $(window).width();

      // If width width is below 600px, switch to the mobile stylesheet
      if(newWindowWidth < 900){
        $("link[rel=stylesheet]").attr({href : "mobile.css"});
      } else if(newWindowWidth > 600){
        // Else if width is above 600px, switch to the large stylesheet
        $("link[rel=stylesheet]").attr({href : "style.css"});
      }
    }
  });
</script>
</body>
</html>