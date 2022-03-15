<?php
include('enviar.php')
?>
<!DOCTYPE html>
<html lang="es-AR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="Desarrollador web, Desarrollo Front-end, Desarrollo Frontend, HTML, HTML5, CSS, CSS3, JavaScript, Portafolio, Portfolio.">
    <title>Front End | Alejandro Mancilla</title>
    <link rel="shortcut icon" href="imagenes/logo2.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer">
    <link rel="stylesheet" href="estilos/estilos.css">
    <link rel="stylesheet" href="estilos/queries.css">
</head>
<body id="body">
    <!-- header position static a partir de min-width: 768px y position absolute (bottom: 0) -->
    <header>
        <!-- nav position static a partir de min-width: 768px y position absolute (botton: 0) -->
        <nav>
            <!-- logo que se modifica en el modo oscuro y claro -->
            <img src="imagenes/logo2.png" alt="logo" id="logo">
            <ul id="menu" class="menu">
                <li><a href="#inicio" title="ir a la sección Inicio"><i class="fa-solid fa-house"></i>inicio</a></li>
                <li><a href="#sobreMi" title="ir a la sección sobre mi"><i class="fa-solid fa-user"></i>sobre mi</a></li>
                <li><a href="#servicios" title="ir a la sección servicios"><i class="fa-solid fa-briefcase"></i>servicios</a></li>
                <li><a href="#portafolio" title="ir a la sección portafolio"><i class="fa-solid fa-image"></i>portafolio</a></li>
                <li><a href="#form" title="ir a contacto"><i class="fa-solid fa-share-nodes"></i>Contáctame</a></li>
                <!-- boton que solo esta disponible en dispositivos moviles -->
                <li class="noMostrarLaptop"><button class="cerrar" id="cerrar"><i class="fa-solid fa-xmark"></i>cerrar</button></li> 
            </ul>
            <div>
                <!-- boton modo oscuro (sol) ó claro (luna) -->
                <button id="btnDark">
                    <i class="fa-solid fa-moon" id="darkMode"></i>
                </button>
                <!-- boton menú solo disponible en dispositivos moviles -->
                <button id="btnMenu">
                    <i class="fa-solid fa-shapes"></i>
                </button>
            </div>
        </nav>
    </header>
    <main class="indicadorScroll">
        <section class="inicio" id="inicio">
            <!-- aside solo disponible a partir de min-width: 768px, boton scroll al inicio -->
            <aside class="aside">
                <button id="ScrollTop">
                    <i class="fa-solid fa-circle-arrow-up"></i>
                </button>
            </aside>
            <article>
                <div class="inicio-foto">
                    <img src="imagenes/foto1.png" alt="mi foto de perfil">
                </div>
                <div class="inicio-presentacion">
                    <h1>Hola, Soy Alejandro Mancilla</h1>
                    <h3>- Desarrollador Frontend -</h3>
                    <p>
                        Con solidos conocimientos en diseño web y desarrollo de software.
                    </p>
                </div>
            </article>
        </section>
        <section class="sobreMi" id="sobreMi">
            <article>
                <div class="sobreMi-introduccion">
                    <h2>Sobre mí</h2>
                    <p>
                        Soy desarrollador web freelance con amplio conocimiento en las tecnologías Html 5, CSS3 y JavaScript. Soy estudiante de la Licenciatura en Sistemas Informaticos en la Universidad Nacional de General Sarmiento - Buenos Aires, Argentina y complemento mi formación con cursos dictados en diferentes plataformas educativas como <a href="https://www.educacionit.com/" target="_blank"  rel="ir a EducacionIt" style="text-decoration: none;">Educación It</a> y <a href="http://www.udemy.com/" target="_blank" rel="ir a Udemy" style="text-decoration: none;">Udemy</a>, entre otros.
                    </p>
                </div>
                <div class="sobreMi-habilidades-descarga">
                    <h2>Habilidades</h2>
                    <div class="sobreMi-habilidades">
                        <div>
                            <i class="fab fa-html5"></i>
                            <h3>Html 5</h3>
                        </div>
                        <div>
                            <i class="fab fa-css3-alt"></i>
                            <h3>CSS3</h3>
                        </div>
                        <div>
                            <i class="fab fa-js"></i>
                            <h3>JS</h3>
                        </div>
                        <div>
                            <i class="fab fa-java"></i>
                            <h3>Java</h3>
                        </div>
                        <div>
                            <i class="fab fa-python"></i>
                            <h3>Python</h3>
                        </div>
                        <div>
                            <i class="fab fa-github"></i>
                            <h3>Git</h3>
                        </div>
                    </div>
                </div>
                <!-- boton de descarga de mi curriculum vitae -->
                <div class="boton-curriculum">
                    <button><a href="documentos/Alejandro Mancilla.pdf" target="_blank" title="descargá mi curriculum">Descarga CV<i class="fas fa-file-pdf"></i></a></button>
                </div>
            </article>
        </section>
        <section class="servicios" id="servicios">
            <h2>Servicios</h2>
            <article class="servicio-article">
                <!-- display flex en dispositivos moviles, a partir de min-width: 596px -->
                <div class="servicio-div">
                    <div>
                        <i class="fa-solid fa-mobile-screen-button"></i>
                    </div>
                    <div>
                        <h3>100% adaptable</h3>
                    </div>
                    <div>
                        <p>Tu sitio web será adaptable a cualquier tipo de dispositivos (computadoras de escritorio, tablets ó telefonos moviles).</p>
                    </div>
                </div>
                <div class="servicio-div">
                    <div><i class="fa-solid fa-pen-ruler"></i></div>
                    <div>
                        <h3>Diseño creativo</h3>
                    </div>
                    <div>
                        <p>Un buen diseño web le ayudará a atraer a potenciales clientes, ya que esta será la cara digital de su empresa.</p>
                    </div>
                </div>
                <div class="servicio-div">
                    <div>
                        <i class="fa-solid fa-terminal"></i>
                    </div>
                    <div>
                        <h3>Desarrollo</h3></div>
                    <div>
                        <p>Conozco la importancia del diseño web y puedo ayudarte a crear un sitio web profesional, agradable y sofisticado.</p>
                    </div>
                </div>
                <div class="servicio-div">
                    <div>
                        <i class="fa-solid fa-users"></i>
                    </div>
                    <div>
                        <h3>Integración de redes sociales</h3>
                    </div>
                    <div>
                        <p>Hoy existen diversas redes sociales y estás te pueden asegurar la presencia en las diferentes plataformas, por lo tanto es importante la integración de tu sitio con tus redes. </p>
                    </div>
                </div>
                <div class="servicio-div">
                    <div>
                        <i class="fa-solid fa-stopwatch"></i>
                    </div>
                    <div>
                        <h3>Performance</h3>
                    </div>
                    <div>
                        <p>Los sitios de alto rendimiento atraen y mejoran el interes de los usuarios, lo que ayudará a captar la atención de más cliente.</p>
                    </div>
                </div>
                <div class="servicio-div">
                    <div>
                        <i class="fa-brands fa-sith"></i>
                    </div>
                    <div>
                        <h3>SEO</h3>
                    </div>
                    <div>
                        <p>El posicionamiento web es un pilar importante e indispensable para que tu empresa se destaque y gane visibilidad en el mundo digital.</p>
                    </div>
                </div>
            </article>
            <div class="separacion"></div>
        </section>
        <section class="portafolio" id="portafolio">
            <h2>Portafolio</h2>
            <div class="portafolio-div">
                <section class="portafolio-JavaPython Java">
                    <div class="hover">
                        <h3>Juego en Java</h3>
                        <p>Proyecto para la Facultad - <a href="https://github.com/Ale1981Diego/boss-rabbit" target="_blank" title="ver codigo del juego en Java">ir al Repositorio</a></p>
                    </div>
                    <div class="portafolio-imagen">
                        <img src="imagenes/BossRabbitRabber.png" alt="Juego en Java">
                    </div>
                </section> 
                <section class="portafolio-JavaPython">
                    <div class="hover">
                        <h3>Juego en Python</h3>
                        <p>Proyecto para la Facultad - <a href="https://github.com/Ale1981Diego/juego-ahorcado" target="_blank" title="ver codigo del juego en Python">ir al Repositorio</a></p>
                    </div>
                    <div class="portafolio-imagen">
                        <img src="imagenes/ahoracado.png" alt="Juego en  Python">
                    </div>
                </section>
            </div>
        </section>
        <section class="formulario" id="form">
            <h2>Contactame</h2>
            <form action="enviar.php" method="post" id="formulario">
                <div class="datos-input">
                    <input type="text" placeholder="Nombre y apellido" name="nombre" id="nombre">
                    <input type="text" placeholder="Telefono" name="tel" id="tel">
                    <input type="text" placeholder="Mail" name="mail" id="mail">
                    <input type="text" placeholder="Asunto" name="asunto" id="asunto">
                </div>
                <div class="textarea">
                    <textarea name="area" id="datos-area" placeholder="Escribe un mensaje"></textarea>
                </div>
                <div>
                    <button type="submit" name="enviar" id="btnSubmit">Enviar<i class="fa-solid fa-paper-plane"></i></button>
                </div>
            </form>
        </section>
    </main>
    <footer class="contacto">
        <h2>Mis redes</h2>
        <div class="flex-contacto">
            <div class="contacto-redes">
                <div class="contacto-enlaces">
                    <div>
                        <a href="http://www.linkedin.com/in/alejandro-mancilla-664289209/" target="_blank" title="Añademe a tu red de LinkedIn">LinkedIn<i class="fa-brands fa-linkedin-in"></i></a>
                    </div>
                    <div>
                        <a href="http://github.com/Ale1981Diego" target="_blank" title="Sigueme en Git">GitHub<i class="fa-brands fa-github"></i></a>
                    </div>
                    <div>
                        <a href="http://api.whatsapp.com/send?phone=541135850040" target="_blank" title="comunicate conmigo a través de  whatsapp">WhatsApp<i class="fa-brands fa-whatsapp"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="copy">
            <div>&copy Copyright 2021</div>
            <div> <a href="#inicio" title="volver al inicio"><span class="llaves">{</span><span class="iniciales">A:M</span><span class="llaves">}</span> Desarrollador Frontend</a> | Created by Alejandro Mancilla
            </div>
        </div>
    </footer>
    <script src="js/JS.js"></script>
</body>
</html>