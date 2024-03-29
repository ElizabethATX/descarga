
<?php
header( 'Content-Type: text/html' );
require_once( __DIR__ . '/2video.php' );
?>
<!DOCTYPE html>
<html lang="es">
<head><meta http-equiv="Content-Type" content="text/html; charset=gb18030">
    <title>Tvanime - Transmitiendo</title>
    <!-- Librerias -->
    <link rel="stylesheet" href="https://cdn.plyr.io/3.5.6/plyr.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/player.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
   



<style type="text/css">
	/*!
 * Anti-adblock v2.1.0
 * Copyright 2019 zkreations
 * Daniel Abel M. (fb.com/danieI.abel)
 * Licensed under MIT (github.com/zkreations/plugins/blob/master/LICENSE)
 */
/*! Core (No modificar) {{*/
body.ab-is-detected{overflow:hidden!important}@font-face{font-family:wgd;src:url(../fonts/wgd.woff) format("woff");font-weight:400;font-style:normal}[class*=" wgd-"]:before,[class^=wgd-]:before{font-family:wgd!important;font-style:normal!important;font-weight:400!important;font-variant:normal!important;text-transform:none!important;speak:none;line-height:1;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.wgd-usd:before{content:"\61"}.wgd-eur:before{content:"\62"}.wgd-btc:before{content:"\63"}.wgd-times:before{content:"\64"}@-webkit-keyframes square{0%{-webkit-transform:translateY(0) scale(1.5) rotate(0);transform:translateY(0) scale(1.5) rotate(0);opacity:1}100%{-webkit-transform:translateY(-600px) scale(1) rotate(-200deg);transform:translateY(-600px) scale(1) rotate(-200deg);opacity:0}}@keyframes square{0%{-webkit-transform:translateY(0) scale(1.5) rotate(0);transform:translateY(0) scale(1.5) rotate(0);opacity:1}100%{-webkit-transform:translateY(-600px) scale(1) rotate(-200deg);transform:translateY(-600px) scale(1) rotate(-200deg);opacity:0}}.WgD-particles i{font-size:4em;font-weight:400;position:absolute;bottom:-100px;-webkit-animation:square 10s infinite;animation:square 10s infinite;-webkit-animation-duration:16s;animation-duration:16s}.WgD-particles i:nth-child(11),.WgD-particles i:nth-child(4),.WgD-particles i:nth-child(6),.WgD-particles i:nth-child(8){font-size:3em}.WgD-particles i:nth-child(10),.WgD-particles i:nth-child(2),.WgD-particles i:nth-child(3){font-size:2em}.WgD-particles i:nth-child(1){left:15%}.WgD-particles i:nth-child(2){left:24%;-webkit-animation-duration:8s;animation-duration:8s}.WgD-particles i:nth-child(3){left:50%;-webkit-animation-delay:5s;animation-delay:5s}.WgD-particles i:nth-child(4){left:40%;-webkit-animation-delay:7s;animation-delay:7s;-webkit-animation-duration:15s;animation-duration:15s}.WgD-particles i:nth-child(5){left:36%;-webkit-animation-delay:6s;animation-delay:6s}.WgD-particles i:nth-child(6){left:44%;-webkit-animation-delay:10s;animation-delay:10s;-webkit-animation-duration:20s;animation-duration:20s}.WgD-particles i:nth-child(7){left:58%;-webkit-animation-delay:2s;animation-delay:2s;-webkit-animation-duration:18s;animation-duration:18s}.WgD-particles i:nth-child(8){left:45%;-webkit-animation-duration:14s;animation-duration:14s}.WgD-particles i:nth-child(9){left:66%;-webkit-animation-delay:3s;animation-delay:3s;-webkit-animation-duration:12s;animation-duration:12s}.WgD-particles i:nth-child(10){left:74%;-webkit-animation-duration:25s;animation-duration:25s}.WgD-particles i:nth-child(11){left:80%;-webkit-animation-delay:4s;animation-delay:4s}#WgD{display:none;position:fixed;top:0;left:0;right:0;bottom:0;font-size:14px;-webkit-animation:wgdfade .3s;animation:wgdfade .3s;z-index:99999}#WgD.is-detected{display:block}@-webkit-keyframes wgdfade{from{opacity:0}to{opacity:1}}@keyframes wgdfade{from{opacity:0}to{opacity:1}}.WgD-position{position:absolute;top:50%;left:50%;-webkit-transform:translate(-50%,-50%);transform:translate(-50%,-50%);z-index:900}.WgD-title{margin:0 0 .5em}.WgD-text{margin:0;font-weight:400}.WgD-reload{text-decoration:none;display:inline-block;margin-top:2em;font-weight:500;transition:-webkit-transform .3s;transition:transform .3s;transition:transform .3s,-webkit-transform .3s}.WgD-reload:hover{-webkit-transform:scale(1.05);transform:scale(1.05)}.WgD-close{position:absolute;top:0;right:0;text-decoration:none;font-size:20px;color:#999;padding:1rem;line-height:1;display:block}.WgD-container img{max-width:100%;margin-bottom:1em;-o-object-fit:cover;object-fit:cover}
/*}} Fin del core {{*/

/*! Personalización */
/* Base
-----------------------------------------*/
[id=WgD] {
   font-family: 'Roboto', sans-serif; /* fuente */
   background: #FF416C; /* color de fondo */
   background: linear-gradient(to right, #FF4B2B, #FF416C); /* degradado */
}
.WgD-particles i {
   color: rgba(0, 0, 0, 0.2); /* color de partículas */
}
/* Animación
-----------------------------------------*/
.WgD-container {
   -webkit-animation: bounceIn 1s; /* animación */
           animation: bounceIn 1s; /* animación */
}
/* Cuerpo
-----------------------------------------*/
.WgD-container {
   padding: 3.2em; /* relleno */
   max-width: 450px; /* ancho */
   background-color: #fff; /* color de fondo */
   box-shadow: 0 2px 6px rgba(0, 0, 0, 0.2), 0 10px 20px rgba(0, 0, 0, 0.1); /* sombra */
   text-align: center; /* alineación del texto */
   line-height: 1.5; /* interlineado */
   border-radius: 10px; /* bordes redondeados */
   color: #37474F; /* color del texto */
}
.WgD-title {
   font-size: 1.6em; /* tamaño del título */
}
.WgD-text {
   font-size: 1.2em; /* tamaño del texto */
}
/* Boton Recargar
-----------------------------------------*/
.WgD-reload {
   box-shadow: rgba(0, 0, 0, .12) 0 3px 13px 1px; /* sombra */
   color: #fff;
   padding: 1em 1.5em; /* relleno */
   background: #f46b45; /* fondo */
   border-radius: 3px; /* bordes redondeados */
}
.WgD-reload:hover {
    color: #fff;
}
.WgD-close:hover {
    color: #464646;
}
/* Imagen
-----------------------------------------*/
.WgD-container img {
   max-height: 200px; /* altura máxima */
}
</style>

    <!-- Estilos personalizados -->
    <style>
body {
	background: rgb(24,1,47);
	background: -moz-linear-gradient(90deg, rgba(24,1,47,1) 21%, rgba(49,55,105,1) 71%);
	background: -webkit-linear-gradient(90deg, rgba(24,1,47,1) 21%, rgba(49,55,105,1) 71%);
	background: linear-gradient(90deg, rgba(24,1,47,1) 21%, rgba(49,55,105,1) 71%);
	filter: progid:DXImageTransform.Microsoft.gradient(startColorstr="#18012f",endColorstr="#313769",GradientType=1);
}

h1 {
	color: #FFFFFF;
}

h2 {
	color: #FFFFFF;
}

h3 {
	color: #FFFFFF;
}

h4 {
	color: #FFFFFF;
}

video{
width:100%;
}

.plyr--fullscreen-active video {
max-height: 100% !important
}
</style>

</head>
<body>
    <script src="https://cdn.plyr.io/3.5.6/plyr.js"></script>
 <script>
      document.addEventListener('DOMContentLoaded', () => {
          
          const controls = [
              'play-large', // The large play button in the center
              'rewind', // Rewind by the seek time (default 10 seconds)
              'play', // Play/pause playback
              'fast-forward', // Fast forward by the seek time (default 10 seconds)
              'progress', // The progress bar and scrubber for playback and buffering
              'current-time', // The current time of playback
              'duration', // The full duration of the media
              'mute', // Toggle mute
              'volume', // Volume control
              'captions', // Toggle captions
              'settings', // Settings menu
              'pip', // Picture-in-picture (currently Safari only)
              'airplay', // Airplay (currently Safari only
              'fullscreen' // Toggle fullscreen
          ];
          
          const player = Plyr.setup('.js-player', { controls });
      });
  </script>
  
  <video poster="./assets/img/video.jpg" class="js-player"><source src="<?php echo $source; ?>"/></video>

	
	 <div id="WgD">
  <div class='WgD-position'>
    <div class='WgD-container'>
      <h3 class='WgD-title'>Adblock Detectado</h3>
      <p class='WgD-text'><b>ANILIVE</b> se mantiene gracias a la <b>publicidad</b>, por favor Desactiva Adblock para seguir viendo anime</p>
      <a class='WgD-reload' onclick="adBlockReload()" href="#">Recargar página</a>
    </div>
  </div>
  <div class='WgD-particles'>
    <i class="wgd-usd"></i><i class="wgd-eur"></i><i class="wgd-usd"></i>
    <i class="wgd-eur"></i><i class="wgd-btc"></i><i class="wgd-usd"></i>
    <i class="wgd-usd"></i><i class="wgd-eur"></i><i class="wgd-btc"></i>
    <i class="wgd-usd"></i><i class="wgd-eur"></i>
  </div>
</div>
<script src='https://cdn.jsdelivr.net/gh/da2l/host@1/dist/js/wgd-core.min.js'></script>
</body>
</html>
