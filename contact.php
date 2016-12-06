<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<p style="color:#cecece"> Liceul Teoretic "Radu Vladescu" </p> 
<title> Guns N' Roses </title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>

<div id="website">
  <div id="header"> <a href="#" class="logo"><img src="images/flag.png" alt="" width="165" height="150" /></a>
    <ul id="menu">
    <li><a href="despre.html">Guns N' Roses</a></li>
      <li><a href="istorie.html" >Istorie</a></li>
      <li><a href="albume.html">Albume</a></li>
      <li><a href="foto.html">Fotografii</a></li>
      <li><a href="video.html">Videoclipuri</a></li>
	        <li><a href="membri.html">Membrii trupei</a></li>
			 <li><a href="nom.html" id="active">Contact</a></li>
    </ul>
  </div>
<div id="content">

<form action="contact.php" method="POST">
<?php
require_once('config.php');
$nume=$_POST["nume"];
$prenume=$_POST['prenume'];
$email=$_POST['email'];
$mesaj=$_POST['mesaj'];

$introducere_date="INSERT INTO contact VALUES   ('','$nume','$prenume','$email','$mesaj')";

if(mysql_query($introducere_date,$conexiune))
echo '<div align="center"><p class="titlu">Mesajul dumneavoastra a fost trimis cu succes! </p></div>';
else
echo "Mesajul nu a putut fi transmis!";
?>
</form>
</div>

</div>
<div id="footer">
<div id="left">Profesor indrumator,<br> Leica Doina </br> </div>
<div id="center" >An 2014 </div>
<div id="right" style="text-align:right;"> Elev, <br> Andrei Elena-Larisa </br></div> 
<marquee behavior="left" style="padding-top: 8px;">Guns N' Roses</marquee></div>
</div>
</body>
</html>
</html>