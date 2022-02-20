<?php


    sesión_inicio();

    if(!isset($_SESSION['usuarios'])){
      eco '
          <script>
              alert("Por favor debes iniciar sesión");
              ventana.ubicación = "index.php";
          </script>      
          ';
          header('Ubicación: index.php');
          session_destroy();
          morir();
         
          
    }
  

?>


<!DOCTYPEhtml>
<html lang="es">
  <cabeza>
    <!-- Metaetiquetas requeridas -->
    <juego de caracteres meta="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <enlace href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="hoja de estilo" integridad="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin= "anónimo">
    <enlace rel="hoja de estilo" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

    <title>Tecno-Salud.</title>
    <enlace rel="hoja de estilo" href="main.css">
  </cabeza>
  <cuerpo clase="img">
    <!-- cabezera -->
    <header class="contenedor-fluido bg-secundario d-flex justificar-contenido-centro">
        <p class="text-info mb-0 p-2 fs-6">Siempre pensando en usted.</p>
    </encabezado>
    <nav class="barra de navegación barra de navegación-expand-lg barra de navegación-luz bg-luz p-3">
        <div class="contenedor-líquido">
          <a class="marca-barra-de-navegación" href="#">
              <span class="text-primary fs-5 fw-bold"><img src="logotecnosalud2.png" style="altura: 100px;"></span>
            </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label ="Alternar navegación">
            <span class="navbar-toggler-icon"></span>
          </botón>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">

              <li class="elemento de navegación">
                <a class="nav-link active" aria-current="page" href="#intro">Inicio</a>
              </li>
              
              <li class="elemento de navegación">
                <a class="nav-link" href="#equipo">Nosotros</a>
              </li>

              <li class="elemento de navegación">
                <a class="nav-link" href="#fff">Contactos</a>
              </li>
            </ul>
           
          </div>
        </div>
      </nav>
    
 <!-- imagenes -->

 <div id="carouselExampleControls" class="diapositiva del carrusel" data-bs-ride="carrusel">
    <div class="carrusel-interior">

      <div class="carrusel-elemento activo" data-bs-interval="3000" >
        <img src="pexels-negative-space-48604.jpg" class="d-block w-100" alt="pexels-hannah-nelson-1456951">
      </div>

      
      <div class="carrusel-item" data-bs-interval="2000">
        <img src="pexels-karolina-grabowska-4021769.jpg" class="d-block w-100" alt="pexels-pixabay-461049">
      </div>

      <div class="carrusel-item" data-bs-interval="2000">
        <img src="pexels-vidal-balielo-jr-1682497.jpg" class="d-block w-100" alt="pexels-pixabay-461049">
      </div>


    </div>
    <button class="carrusel-control-prev" type="button" data-bs-target="#carruselExampleControls" data-bs-slide="prev">
      <span class="carrusel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Anterior</span>
    </botón>
    <button class="carrusel-control-siguiente" type="button" data-bs-target="#carruselExampleControls" data-bs-slide="siguiente">
      <span class="carrusel-control-siguiente-icono" aria-hidden="true"></span>
      <span class="visually-hidden">Siguiente</span>
    </botón>
  </div>

  <!-- introducción -->
  

  <sección clase="w-50 mx-auto text-center pt-5" id="intro">
    <h1 class="p-3 fs-2 border-top border-3"> <span><img src="TECNOSALUD.jpg" class="logo__tecno-salud"></span> Es una agencia única para suplir necesidades de las entidades prestadoras de servicios en salud.</h1>
    <p class="p-3 fs-4">Esta herramienta le permite a todos los empleados del sistema de salud, consultar de manera ágil, sencilla y dinámica, las tecnologías, servicios y especialistas incluidos o no en el <span class= "text-primary">PBS</span> (Plan de Benficios en Salud) y como se manejan internamente en cada <span class="text-primary">IPS</span> (Institucion Prestadora de Servicios en Salud).< /p>

<br><br><br>
  </sección>
   
<Div align = "center"> <iframe width = "850" height = "700" frameBorder = "0" scrolling = "no" src = https://docs.google.com/spreadsheets/d/10hTAP_dJDDj8ZSt--YBAEMyFU_H09 -6l/edit?usp=sharing&ouid=117826462787175756156&rtpof=true&sd=true&Action = embedview&wdbipreview = true&wdHideSheetTabs = true&WdAllowInteractividad = true& = PivotTable1& = B4&wdHideGridlines = true wdHideHeaders wdDownloadButton = true &=iframe>&"


<br><br><br><br>



    <!-- <img src="pexels-pixabay-40568.jpg" class="comienzo flotante redondeado" alt="...">
    <img src="pexels-artem-podrez-5726794.jpg" class="extremo flotante redondeado" alt="...">
    <img src="pexels-lukas-317356.jpg" class="bloque d mx-auto redondeado" alt="..."> -->


  <br><br>

  <hr>

  <!-- <sección clase="w-100">
    <h2 class="text-primary">Que debes saber. </h2>
    <p class="ht">Realice la búsqueda de Ayudas diagnosticas, Especialistas y Procedimientos , ingresados ​​o NO en el <span class="text-primary">PBS</span> (Plan de Beneficios en salud) permitiendo realizar todo el proceso para orientar, entregar y autorizar, de forma agil y segura.
      Por ejemplo: ‹‹citología›› ‹‹consulta alergologo››.</p>
  </sección>

  <hr>

  <sección clase="w-100">
    <h2 class="text-primary">Aquí conocerá todo acerca de los contenidos de los veneficios en salud.</h2>
    <p class="ht">Esta herramienta le permite al empleado del sector salud independiente de su rango acceder a un sistema de búsqueda en el que podrá consultar las tecnologías, servicios y especialistas incluidos en el <span class="text-primary" >PBS</span> , antiguo POS y financiados con recursos de la Unidad de Pago por Capitación y los NO financiados con recursos de la Unidad de Pago al que tienen derecho los colombianos residentes en el territorio nacional.</p>
    <p class="ht">Puede acceder a todo tipo de información relacionada con los beneficios en salud, resolver sus inquietudes y necesidades de manera inmediata, mejorando orientar al usuario aun sin el conocimiento completo de todo lo que incluye el <span class= "texto-principal">PBS</span> .</p>
    <p class="ht">Recuerde que también consultar el Metabuscador desde su dispositivo móvil o Tablet para los orientadores y anfitriones de las <span class="text-primary">IPS</span> también.</p>
    <img src="pexels-vidal-balielo-jr-1682497.jpg" class="comienzo flotante redondeado" alt="...">
    <img src="pexels-emma-bauso-2253879.jpg" class="extremo flotante redondeado" alt="...">
    <img src="pexels-andreas-wohlfahrt-2456327.jpg" class="bloque d mx-auto redondeado" alt="...">
  </sección> -->

  <!-- introducción -->
  <h2 class="text-primary text-center">Todo lo que necesitas saber</h2>

  <section class="contenedor-fluido">
    <div class="row w-75 mx-auto my-5 servicio-fila">
        <div class="col-lg-6 col-md-12 col-sm-12 d-flex justificar-contenido-iniciar my-5 icono-wrap">
          <img src="123.jpg" alt="Busquedas" width="180" height="160">
          <div>
            <h3 class="fs-5 mt-4 px-4 pd-1">Busquedas.</h3>
            <p clase="px4">
              Realice la búsqueda de Ayudas diagnosticas, Especialistas y Procedimientos. </p>
          </div>
        </div>
        <div class="col-lg-6 col-md-12 col-sm-12 d-flex justificar-contenido-iniciar my-5 icono-wrap">
          <img src="imagen2.png" alt="Proceso" ancho="180" alto="160">
          <div>
            <h3 class="fs-5 mt-4 px-4 pd-1">Proceso.</h3>
            <p clase="px4">
              Realiza todos tus procesos para orientar, entregar y autorizar, de forma ágil y segura.</p>
          </div>
        </div>
        <div class="col-lg-6 col-md-12 col-sm-12 d-flex justificar-contenido-iniciar my-5 icono-wrap">
          <img src="imagen3.jpg" alt="Beneficios" width="180" height="160">
          <div>
            <h3 class="fs-5 mt-4 px-4 pd-1">Beneficios</h3>
            <p clase="px4">
              Áqui conocerá todo acerca de los beneficios en salud. </p>
          </div>
        </div>
        <div class="col-lg-6 col-md-12 col-sm-12 d-flex justificar-contenido-iniciar my-5 icono-wrap">
          <img src="imagen4.png" alt="desarrollo" width="180" height="160">
          <div>
            <h3 class="fs-5 mt-4 px-4 pd-1">Herramienta.</h3>
            <p clase="px4">
              Esta herramienta le permite al empleado del sector salud independiente de su rango acceder a un sistema de búsqueda.</p>
          </div>
        </div>
        <div class="col-lg-6 col-md-12 col-sm-12 d-flex justificar-contenido-iniciar my-5 icono-wrap">
          <img src="imagen5.jpg" alt="Beneficios" width="180" height="160">
          <div>
            <h3 class="fs-5 mt-4 px-4 pd-1">Consultas.</h3>
            <p clase="px4">
              Podrá consultar las tecnologías, servicios y especialistas incluidos en el PBS y antiguo POS.</p>
          </div>
        </div>
        <div class="col-lg-6 col-md-12 col-sm-12 d-flex justificar-contenido-iniciar my-5 icono-wrap">
          <img src="imagen6.png" alt="desarrollo" width="180" height="160">
          <div>
            <h3 class="fs-5 mt-4 px-4 pd-1">Inquietudes.</h3>
            <p clase="px4">
              Resolver tus inquietudes y necesidades de manera inmediata desde tu computador o celular.</p>
          </div>
        </div>
    </div>
  </sección>

   <!-- Acerca de los ruidos -->

   <hr>

   <sección>
     <div class="w-50 m-auto text-center" id="equipo">
       <h2 class="mb-5 fs-2 text-primary">Nosotros somos un equipo con espectativas altas.</h2>
       <p class="fs-4">Siempre estamos buscando ayudar al personal de la salud para facilitar su trabajo y por medio de esta erramienta vamos a lograr un cambio grande para nuestros heroes de la salud.</p>
      </div>
      <div class="mt-5 texto-centro">
       <img class="img-fluid" src="trabajo-en-equipo.jpg" alt="equipo">
      </div>
   </sección>

   

   <!-- formulario -->

   

   
  
   
     <!-- formulario -->

   

      <br>

      <br>

   

   
     <!-- pie de página -->

     <!-- <footer class="w-100 d-flex aling-items justificar-content-center">
       <p class="fs-5 px-3 pt-3">Meta-SaluD. &Copiar; Todos Los Derechos Reservados 2021</p>
       <div id="iconos">
         <a href="#"><i class="bi bi-facebook"></i></a>
         <a href="#"><i class="bi bi-twitter"></i></a>
         <a href="#"><i class="bi bi-instagram"></i></a>
       </div>
     </pie de página> -->

    <!-- <encabezado>

    </encabezado>
    <div clase="cuerpo__pagina">
      <div class="cover"></div>
      <div class="contenedor__aeticle">
        <div class="caja__artículo"></div>
        <div class="caja__artículo"></div>
        <div class="caja__artículo"></div>
        <div class="caja__artículo"></div>
        <div class="caja__artículo"></div>
        <div class="caja__artículo"></div>
        <div class="caja__artículo"></div>
        <div class="caja__artículo"></div>
      </div>
      <div class="contenedor-testimonios">
        <div class="box__testimonials"></div>
        <div class="box__testimonials"></div>
        <div class="box__testimonials"></div>
      </div>
    </div> -->

    <footer class="w-100 d-flex aling-items justificar-content-center">
    

      <div class="contenedor__pie de página">
        <div clase="box__footer">
          <div clase="logotipo">
            <img class="logo__tecno-salud" src="TECNOSALUD.jpg" alt="">
          </div>
          <div class="términos">
            <p>LotS/somos una empreza que busca invoar en la creacion de hacer empresa colocando en el mundo digital los productos y servicios p>< PRODUCTOS y prestaciones que se pueden brindar en la vida cotidiana>/p>
          </div>
        </div>
        <div clase="box__footer">
          <h2>Soluciones</h2>
          <a href="#">desarrollo de aplicaciones</a>
          <a href="#">desarrollo de aplicaciones</a>
          <a href="#">desarrollo de aplicaciones</a>
          <a href="#">desarrollo de aplicaciones</a>

        </div>
        <div clase="box__footer">
          <h2>Compañías</h2>
          <a href="#">Acerca de</a>
          <a href="#">Trabajos</a>
          <a href="#">Procesos</a>
          <a href="#">Servicios</a>

        </div>
        <div clase="box__footer">
          <h2>Redes Sociales</h2>
          <a href="https://www.facebook.com/profile.php?id=100071049386823&sk=about"><i class="bi bi-facebook"></i>Facebook</a>
          <a href="#"><i class="bi bi-twitter"></i>twitter</a>
          <a href="https://www.instagram.com/metasalud36/"><i class="bi bi-instagram"></i>instagram</a>

        </div>
        <div class="box__copyringt">
          <hr>
          <p class="fs-5 px-3 pt-3">Tecno-SaluD. &Copiar; Todos Los Derechos Reservados 2021</p>
        </div>
      </div>
      

    </pie de página>






    <!-- Opción 1: Paquete Bootstrap con Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integridad="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" origen cruzado ="anónimo"></script>

   
  </cuerpo>
</html>
