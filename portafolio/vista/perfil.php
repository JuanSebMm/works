<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Links de estilos -->

    <link rel="stylesheet" href="../estilos/cuerpo.css">  <!-- Estilos del cuerpo   -->
    <link rel="stylesheet" href="../estilos/menu.css">  <!-- Estilos del menu Lat -->
    <link rel="stylesheet" href="../estilos/galeria.css"> <!-- Estilos del Portafolio y galeri-->

    <title>Portafolio || Especialidades web</title>

</head>
<body>
    <!-- Menu   lateral -->
    <div id="sidemenu" class="menu-collapsed">
        <div id="header">
            <div id="tittle"></div>
            <div id="menu-btn">
                <div class="btn-hamburguer"></div>
                <div class="btn-hamburguer"></div>
                <div class="btn-hamburguer"></div>
            </div>
        </div>
     <!-- -------------- -->

     <!-- Info  Personal -->
         <div id="profile">
            <div id="photo"><img class="imagen" src="../img/mipersona.jpg" alt=""></div>
            <div id="name"><span>Juan sebastian Miranda</span></div>
         </div>


     <!-- Especialidades -->
         <div id="menu-items">
            <div class="item">
                <a href="manual/ManualIn.php">
                    <div class="icon"><img src="../img/manual.png" alt=""></div>
                    <div class="tittle"><span>Manual</span></div>
                </a>
                <a href="trabJs/trab.php">
                    <div class="icon"><img src="../img/engranaje.png" alt=""></div>
                    <div class="tittle"><span>Trabajos</span></div>
                </a>
                <a href="../crud/indexCrud.php">
                    <div class="icon"><img src="../img/crud.jpg" alt=""></div>
                    <div class="tittle"><span>CRUD</span></div>
                </a>
                <a href="trabJs/trab.php">
                    <div class="icon"><img src="../img/codigo.png" alt=""></div>
                    <div class="tittle"><span>Codigos JS</span></div>
                </a>
            </div>

         </div>
     <!-- -------------- -->

    </div>

    <div class="wrapper">

     <!-- Cuerpo del proyecto -->

         <main class="main">
          <div class="info-content">
              <h1><span> Juan</span> Sebastian <span>Miranda</span></h1>
              <p>Me desempe??o en manejar lenguajes de programacion como html:5, CSS, Java Script y el manejo de frameworks como es el de laravel.</p>
          </div>
        
          <div><img src="../img/construir.png" alt="Imagen de codigo"></div>

        
         </main>

      <!-- Estilos de hondas -->
      <div style="height: 150px; overflow: hidden;" ><svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;"><path d="M-22.29,-7.38 C4.80,354.78 209.65,-41.92 533.57,81.42 L500.27,-13.30 L0.00,0.00 Z" style="stroke: none; fill: #191c32;"></path></svg></div>

      <!-- Contenido Fortalezas -->

     <div class="about  contenido-textos">
         <img src="../img/Sobmi.png" alt="">
         <div class="about-info">
           <h3><span>1</span>Fortalezas</h3>
                     <p>En el lado del front end me desempe??o de manera organizada dandole estilos a mi codigo y tengo conocimiento en el manejo de bases de datos de datos, me guta manejar los nuevos retos que van proponiendo al momento de realizar un nuevo proyecto.</p>
                     <h3><span>2</span>Debilidades</h3>
                     <p>El back end no es una de mis especialidades ya que temporal mente no tengo un buen manejo de lenguajes como PHP y JS "Son los principales que manejo".</p>
         </div>
     </div>
     
     <!-- Tarjetas de lenguajes -->
      <section class="about-services">

       <div style="height: 150px; overflow: hidden;" ><svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;"><path d="M-27.36,47.88 C172.40,-55.73 323.08,126.81 500.00,49.98 L500.00,150.00 L0.00,150.00 Z" style="stroke: none; fill: #191c32;"></path></svg></div>

       <div class="tit-Gal">

           <div class="head">
               <h1><span>Lenguajes</span> Preferidos</h1>
           </div>
       

        <div class="cont-mainTr">      

         <div class="cont-tarjeta">
            <div class="cont-tarjeta__logo">

                <i class="fab fa-css3-alt"></i>
                <h1>Css++</h1>

            </div>
            <article>
               Me gusta manejar la hoja de estilos de css, al permitirme estilizar mi pagina web a placer me da la libertad de expresarme como me de gusto.
            </article>
         </div>

         <div class="cont-tarjeta">
            <div class="cont-tarjeta__logo">

                <i class="fab fa-html5"></i>
                <h1>Html:5</h1>

            </div>
            <article>
               El lenguaje html:5 al ser el principal lenguaje de hipertexto para estructurar una pagina web me permite manejar y organizar los contenidos a placer.
            </article>
         </div>

         <div class="cont-tarjeta">
            <div class="cont-tarjeta__logo">

                <i class="fab fa-node-js"></i>
                <h1>Java Script</h1>

            </div>
            <article>
               Al ser un lenguaje de programacion que me permite agregar interactividad a mi pagina lo manejo de una manera eficiente y sencilla
            </article>
         </div>

         <div class="cont-tarjeta">
            <div class="cont-tarjeta__logo">

                <i class="fab fa-php"></i>
                <h1>PHP</h1>

            </div>
            <article>
               El lenguaje de php lo utilizo para realizar el MVC("Modelo Vista Controlador") al momento de trabajar con bases de datos, este tambien me da la opcion de estilizar mi pagina pero con funciones distintas a las de js. 
            </article>
         </div>
        </div>
       </div>


       <div style="height: 150px; overflow: hidden;" ><svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;"><path d="M-4.79,45.89 C179.17,128.80 275.11,-17.25 501.41,60.70 L500.00,0.00 L0.00,0.00 Z" style="stroke: none; fill: #191c32;"></path></svg></div>


      </section>
      

     <!--Galeria con filtros -->       

      <section class="about-Wrk">

          <div class="Bod-gal">

              <div class="Cont-gal">   <!-- Contenedor galeria -->

                  <div class="Title-Gal">  <!-- cabecera de galeria -->

                     <div class="head">
                       <h1>Proyectos<span> En </span> Progreso</h1>
                     </div>

                      <form action="">
                          <input type="text" class="Bar-serch" id="Bar-serch" placeholder="Buscar">
                      </form>

                      <div class="categorias" id="categorias">
                          <a href="#" class="activo">Todos</a>
                          <a href="#">Html:5</a>
                          <a href="#">CSS++</a>
                          <a href="#">JS</a>
                          <a href="#">Laravel</a>
                      </div>

                  </div>    

                  <section class="grid" id="grid">

                      <div class="item"
                         data-categoria="html:5" 
                         data-etiquetas="html html:5"
                         data-descripcion="ejemplo1">

                          <div class="item-contenido">
                              <img src="../img/Sobmi.png" alt="">
                          </div>
                      </div>

                      <div class="item"
                         data-categoria="css++" 
                         data-etiquetas="css c++ css++"
                         data-descripcion= "lolito">
                        

                          <div class="item-contenido">
                              <img src="../img/construir.png" alt="">
                          </div>
                      </div>

                      <div class="item"
                         data-categoria="js" 
                         data-etiquetas="js java script"
                         data-descripcion='<a href="manual/index.php">Manual de usuario</a>'>

                          <div class="item-contenido">
                              <img src="../img/engranaje.png" alt="">
                          </div>
                      </div>

                      <div class="item"
                         data-categoria="html:5" 
                         data-etiquetas="html html:5"
                         data-descripcion="ejemplo1">

                          <div class="item-contenido">
                              <img src="../img/Sobmi.png" alt="">
                          </div>
                      </div>


                  </section>

                  <section class="overlay" id="overlay">
			        <div class="contenedor-img">
				      <button id="btn-cerrar-popup"><i class="fas fa-times"></i></button>
				      <img src="" alt="">
			       </div>
			       <p class="descripcion"></p>
		         </section>

              </div>  

          </div>
          
      </section> 
     

    </div>    
</body>

<!-- Links de librerias web -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/js/all.min.js">
</script>
<script src="https://cdn.jsdelivr.net/npm/muuri@0.9.5/dist/muuri.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/web-animations-js@2.3.2/web-animations.min.js"></script>


<!-- Links de carpetas -->
<script src="../js/Main.js"></script>
<script src="../js/galeria.js"></script>
</html>