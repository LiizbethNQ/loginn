<!DOCTYPE html>
           <div class="container-fluid scrollbar" id="style-1">

<!-- inicia encabezado de la pagina 
 --> 

 <html lang="en">
 <meta charset="UTF-8">
<link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

      <script defer src="https://use.fontawesome.com/releases/v5.4.1/js/all.js" integrity="sha384-L469/ELG4Bg9sDQbl0hvjMq8pOcqFgkSpwhwnslzvVVGpDjYJ6wJJyYjvG3u8XW7" crossorigin="anonymous"></script>
      <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
      <script src="js/index.js"></script>

<div id="logo">
<img src="SENSUS.png" width="250" height="130">
</div>

<div id="head">
<?php
session_start();
if (isset($_SESSION['usuario'])) {
  echo "";
}else{
  header("Location: index.html");
  exit();
}
echo "<h2>Bienvenid@</h2>"
.$_SESSION['usuario'];
?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a target="_blank" href="https://vimeo.com/es/"class="btn bg-s" align="right"><span class="font-weight-bold">Iniciar sesón en Vimeo</span></a>


<a href="control/cerrar.php" class="btn bg-s" align="right"><span class="font-weight-bold">Cerrar sesión</span></a>

</div>

<head>
<!-- estilos css
 --> 
  <style>
    #scroll{
        border:5px;
        height:100px;
        width:300px;
        overflow-y:scroll;
    }
#pantalla {
width: 100%;
background:#ffffff;
margin: 5px;
}
#head {
width: 100%;
background:#ffffff;
margin: 5px;
}
#logo {
width: 100%;
float: center;
}
#video {
float: left;
width: 55%;
margin: 5px;
}

#chat {
float: right;
 width: 30%;
}


    </style>

  <title>SensusOnline</title>
      
</head>

<!-- inicia encabezado de la pagina 
 -->
<br>


      <body background="fondo-4.jpg" >

             <h1><div align ="center">Sensus México Online</div></h1>
             <br>
<!--target="_blank" permite direccionar el link hacia una pestaña nueva  del navegador-->
  <br>

<div id="video">
<iframe src="https://player.vimeo.com/video/359405441" width="900" height="400" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe></div>


<div id="chat">
<iframe src="https://vimeo.com/live-chat/359405441" width="400" height="400" frameborder="0"></iframe></div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

</body>
</div>

</html>





