<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/estilos.css">
    <link rel="stylesheet" href="./css/estiloconoceme.css">
</head>
<header>
        <div class="contenedorLogo"></div>
        <div class="menuEstilo">
            <ul>
                <li  onclick="window.location='./blog/';">BLOG</li>
                <li  onclick="window.location='./calendario/';">RESERVAR CITA</li>
                <li  onclick="window.location='./';">CONÓCEME</li>
                <li class="inicioSesionMenuFoto" onclick="window.location='./login/';"><div></div</li>
            </ul>
        </div>
    </header>
<body>
    <?php
        session_start();
        require ("./sql/funciones.php");
        error_reporting(E_ERROR);
        comprobarRolInicio();
    ?>
    <main>
        <div class="contenedorRedes">
            <a href="https://www.facebook.com/people/Francisco-Jesus-Lorente-Soriano/100009851920542/">
                <img src="./includes/imagenes/facebook.svg" alt="">
            </a>
            <a href="https://www.instagram.com/fran_lorente_/?igshid=315snsbn07qk">
                <img src="./includes/imagenes/instagram.svg" alt="">
            </a>
        </div> 
        <div class="contenedorConoceme">
        <h1>Permíteme que me presente:</h1>
            <div class="contenedorMiInfo">
                <img src="./includes/imagenes/fotoPerfil.png" alt="">
                <div class="contenedorMitexto">
                    <div>
                        <p>
                            Mi misión es ayudarte a ti a sanar esas heridas del pasado que no te deja vivir, a desbloquear tu miedo, tu tristeza, tu culpa o tu 
                            resentimiento y a potenciar todo lo bueno que llevas dentro... en tan sólo una sesión.
                            Correo de contacto: <a href="mailto:info@coachingestrategicojesuslorente.com">info@coachingestrategicojesuslorente.com</a> 
                        </p>
                    </div>
                    <div>
                        <p>
                            Me formé en la mejor escuela de Intervención Estratégica ® de habla Hispana con un de los mejores referentes del mercado: Tino Fernández.
                        </p>
                    </div>
                    <div>
                        <p>
                            Mi nombre es Jesús Lorente, soy Interventor Estratégico y ayudo a mis clientes a ser 
                            libres e ilimitados para vivir desde su esencia mas pura y poderosa.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="contenedorOpiniones">
            <h1>¿Quieres saber lo que piensan mis clientes de mí? Aquí te dejo sus opiniones...</h1>
            <div>
                <h2>Gladis</h2>
                <p>Me ayudó mucho a desahogarme por que me sentía muy estresada no me sentía segura de mi pero con Jesús 
                    aprendí a valorarme  yo mismo como mujer y como madre y me sentí relajada</p>
            </div>
            <div>
                <h2>Carmen</h2>
                <p>
                    Tuve la oportunidad de tener una sesión con Jesús en un momento crucial para mí a nivel profesional, donde mis miedos 
                    boicoteaban constantemente mis pasos, yo me esforzaba y esforzaba por darles la vuelta y ahí seguía el bloqueo, 
                    la sesión con él fue muy agradable, llena de confianza y complicidad, me hizo descubrir cosas sobre mi miedo que ni yo misma sabía. 
                    Desde entonces soy otra a todos los niveles, se lo que quiero más que nunca y gracias a él ya no tengo miedo porque el me ha hecho ver lo 
                    valiente que soy y que esos miedos no eran reales, estaban solo, en mi mente. Millones de gracias Jesús eres un gran interventor estratégico, 
                    gracias por ayudarme a conseguir mis sueños. Altamente recomendables sin ninguna duda.
                </p>
            </div>
            <div>
                <h2>Jone M.</h2>
                <p>
                    Hice una intervención estratégica con Jesús. Fue genial, estupenda y con un resultado maravilloso. 
                    Me sentí en la sesión arropada en todo momento y con mucha confianza , gracias a Jesús que te trata con mucha sensibilidad y confianza. 
                    Al terminar la sesión me sentía con fuerza interior y con más confianza conmigo misma. Gracias Jesús por el trabajo tan maravilloso que haces
                </p>
            </div>
            <div>
                <h2>C.M.P.</h2>
                <p>
                    Para mi ha sido una experiencia muy valiosa, pues pude integrar en el corazón lo que antes estaba sólo en mi mente:
                    El gran amor que siento por mis padres. Ese amor inmenso que sentimos por ellos cuando somos niñas/os y que con el paso del tiempo,
                     al menos en mi caso, se va difuminando hasta desaparecer. La sesión con Francisco Jesús ha resultado ser la llave maestra para mi corazón rebelde. 
                     Me fue acompañando de un modo cariñoso  y afable hasta mi infancia. Observar y analizar, con la experiencia adulta, sucesos y emociones sentidas como 
                     niña me ayudó a liberarme de creencias que me estaban dañando. En ese proceso Francisco Jesús fue mi zahorí. Su buen hacer y su paciencia dieron su fruto.
                     Hoy puedo mirar amorosamente a mis padres. Durante la sesión hubo momentos de lágrimas. Las doy por buenas y necesarias. Han pasado ya varias semanas desde 
                     la intervención y su efecto permanece. Estoy muy contenta y agradecida por ello a Francisco Jesús. Lo recomendaría sin dudar a cualquiera que esté dispuesto/a 
                     realmente a mirar qué hay en su interior.
                </p>
            </div>
            <div>
                <h2>Solitaria</h2>
                <p>
                    Doy gracias por la ayuda a Jesús me sentía muy maltratada psicológicamente 
                    con una baja autoestima después de mi intervención y gracias al trabajo que hicimos juntos ahora poco a poco estoy mejorando.  
                    La intervención la recomiendo si o si mucho que ganar nada que perder. 
                </p>
            </div>
            <div>
                <h2>Laura M.</h2>
                <p>
                    Jesús me ha ayudado a tener mucha claridad sobre lo que me bloqueaba. Tiene una gran escucha activa y eso hace que se quede con todas las palabras que dices 
                    y que nos sabotean en el día a día sin darnos cuenta. Gracias por haberme sentido comprendida y por haberme dado luz donde no la veía. 
                </p>
            </div>
            <div>
                <h2>Isabel M.</h2>
                <p>
                    La intervención fue increíble. Jesus me ayudo a sacar ese lider que todos llevamos dentro y que no somos conscientes. Me sentí con una gran fortaleza interior, 
                    confianza y coraje para superar todos los obstáculos que aparecen en nuestro camino. Muchas gracias, Jesus, admiro tu motivación diaria para ayudar a la gente 
                    a crecer y a salir de esos bloqueos que nos paralizan.  
                </p>
            </div>
            <div>
                <h2>M.G.E.</h2>
                <p>
                    Pues en la intervención me encontré a gusto, escuchada, comprendida, y después también note un cambio a mejor en relación conmigo, me mostraste cosas 
                    que no había visto antes, Recomiendo las intervenciones estratégicas pues es un antes y un después en el sentir de la persona intervenida, 
                    un cambio en su vida Mis iniciales.
                </p>
            </div>
            <div>
                <h2>A.P.M.</h2>
                <p>
                    Al principio sentí confusión y después mucha tranquilidad de ver como el iba deslizando esa madeja que me tenía bloqueada y me hacía tanto daño en mi vida 
                    Ahora me siento más tranquila, tengo más confianza en mí y eso me hace más feliz Es maravilloso tener una persona que te pueda ayudar como Jesús.
                </p>
            </div>
        </div>
    </main>
    <footer><?php include './includes/footer.php';?></footer>
</body>
</html>