<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../css/estilos.css">
        <link rel="stylesheet" href="../css/botones.css">
    </head>
    <header>
        <div class="contenedorLogo"></div>
        <div class="menuEstilo">
            <ul>
                <li  onclick="window.location='./';">BLOG</li>
                <li onclick="window.location='../calendario';">RESERVAR CITA</li>
                <li  onclick="window.location='../';">CONÓCEME</li>
                <li class="inicioSesionMenuFoto" onclick="window.location='../login/';"><div></div</li>
            </ul>
        </div>
    </header>
    <body>
        <div class="contenedorRedes">
            <a href="https://www.facebook.com/people/Francisco-Jesus-Lorente-Soriano/100009851920542/">
                <img src="../includes/imagenes/facebook.svg" alt="">
            </a>
            <a href="https://www.instagram.com/fran_lorente_/?igshid=315snsbn07qk">
                <img src="../includes/imagenes/instagram.svg" alt="">
            </a>
        </div>        
    <main>
        <div class="contenedorVideo">
            <h3>Demostración caso real de Nuria – Cómo reconectar con la tristeza para redescubrir la felicidad, el amor y la ilusión por la vida con la Intervención Estratégica ®</h3>
            <br>
            <iframe src="https://player.vimeo.com/video/426988989?autoplay=0&amp;title=0&amp;byline=0&amp;wmode=transparent&amp;autopause=0" 
                frameborder="0" allowfullscreen="" wmode="opaque"></iframe>
        </div>
        <div class="articulos">
            <h1 class="arsTitulo">Artículos de Interés</h1>
            <?php include './blog.php';?>
            </div>

<div id="graphcomment"></div>
    <script type="text/javascript">
    
      /* - - - CONFIGURATION VARIABLES - - - */
    
      var __semio__params = {
        graphcommentId: "coachingestrategicojesuslorente", // make sure the id is yours
    
        behaviour: {
          // HIGHLY RECOMMENDED
          //  uid: "...", // uniq identifer for the comments thread on your page (ex: your page id)
        },
    
        // configure your variables here
    
      }
    
      /* - - - DON'T EDIT BELOW THIS LINE - - - */
    
      function __semio__onload() {
        __semio__gc_graphlogin(__semio__params)
      }
    
    
      (function() {
        var gc = document.createElement('script'); gc.type = 'text/javascript'; gc.async = true;
        gc.onload = __semio__onload; gc.defer = true; gc.src = 'https://integration.graphcomment.com/gc_graphlogin.js?' + Date.now();
        (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(gc);
      })();
      
    
    </script>
</main>
<footer><?php include './includes/footer.php';?></footer>
</body>
</html>