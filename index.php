<?php
$pagina = 'index.php';
$titulo="Acho Coffee | café de especialidad";
$description="¿Buscas el mejor café en Zaragoza? Este es tu sitio. Café de especialidad y desayunos que realmente valen la pena. Auténtico y con buen sabor.";
include("_partials/header.php");
 ?>
<!-- HERO -->
<div class="container-xxl">
    <div class="container">
        <div class="row margin-title hero-wrapper align-items-center justify-content-center">
        <div class="col-12 col-lg-6 d-flex justify-content-center"> <!-- Imagen -->
                <div class="img-hero wow fadeIn" data-wow-delay="0.2s"></div>
            </div>
            <div class="col-12 col-lg-6 text-center"> <!-- Texto -->
                <h1 class="d-flex flex-column">
                    <span class="wow fadeIn" data-wow-delay="0.2s">acho</span> 
                    <span class="wow fadeIn" data-wow-delay="0.4s">coffee</span>
                </h1>
                <h3 class="basker-font wow fadeIn" data-wow-delay="0.5s">cafetería de especialidad</h3>  
            </div>
        </div>
    </div>
</div>

<!--SOBRE NOSOTROS-->
<div class="container-xxl">
    <div class="container historia-wrapper">
        <div class="col-12 d-xl-none margin-title wow fadeIn" data-wow-delay="0.2s"><h2 class="text-center section mb-0">Sobre Nosotros</h2></div>
        <div class="row g-5 mt-0">  
            <div class="col-12 col-xl-7 galeria">
                <div class="row g-1">
                    <div class="col-6 text-end p-0 m-0">
                        <img class="galeria1 img-fluid wow fadeIn" data-wow-delay="0.1s" src="img/sobre-3.jpg" alt="Dueño de Acho Coffee en Zaragoza">
                        <img class="galeria2 wow fadeIn" data-wow-delay="0.3s" src="img/sobre-2.jpg" alt="Café de especialidad en Zaragoza con latte art en Acho Coffee">
                    </div>
                    <div class="col-6">
                        <img class="galeria3 img-fluid wow mt-3 mt-xl-4 fadeIn" data-wow-delay="0.2s" src="img/sobre-4.jpg" alt="Cafetería pet-friendly en Zaragoza con ambiente acogedor y café artesanal">
                        <img class="galeria4 img-fluid wow fadeIn" data-wow-delay="0.4s" src="img/sobre-6.jpg" alt="Acho Coffee, cafetería en Zaragoza con café de especialidad y branding único">                  
                    </div>
                </div>
            </div>
            <div class="col-12 col-xl-5 historia-acho-coffee  wow fadeIn" data-wow-delay="0.5s">
                <div class="col-12 wow d-none d-xl-block  fadeIn" data-wow-delay="0.2s">
                    <h2 class="text-center text-xl-start mb-0">Sobre Nosotros</h2>
                </div>
                <div>
                <p>Aquí no servimos cualquier café. En Acho Coffee, hacemos café de verdad, del bueno, el que te despierta y te hace volver por más. Desde 2021, estamos en Zaragoza sirviendo café de especialidad.</p>
                <p>
                 Todo empezó con una idea clara, traer buen café y prepararlo bien. Por eso trabajamos con los mejores granos de Etiopía, Costa Rica, colombia, Brasil y más rincones cafeteros top del mundo. <br> Por eso aquí cada café tiene su historia y su método. Un espresso con carácter, un V60 que saca todos los matices o un cold brew que refresca sin perder intensidad. Si no sabes de qué va, ven y lo pruebas.</p>
                 <p>Y porque sabemos que un buen café también pide buen acompañamiento, tenemos lo que toca: tostadas bien servidas, sándwiches con fundamento y tartas que nunca fallan.</p>
                <p>Nos flipa el café y queremos que a ti también. Te esperamos.</p>
                </div>
                
            </div>
        
        </div>
    </div>
</div>
<!-- SOBRE NOSOTROS termina -->



<!-- HORARIO -->
    <div class="horario-wrapper">
        <div class="horario-background wow fadeInUp" data-wow-delay="0.2s"></div>
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.3s">
                <h2>Horario</h2>
            </div>
            <div class="d-flex justify-content-center wow fadeInUp" data-wow-delay="0.4s">
                <ul class="list-unstyled horario row row-cols-12 row-cols-md-2 text-center text-md-start">
                    <li class="basker-font">Lunes</li>
                    <li>Cerrado</li>
                    <li class="basker-font">Martes-Viernes</li>
                    <li>8:00-13:00/15:30-20:00</li>
                    <li class="basker-font">Sabado</li>
                    <li>09:30-20:00</li>
                    <li class="basker-font">Domingo</li>
                    <li>09:30-19:00</li>
                </ul>
            </div>
        </div>    
    </div>
    <div class="container carrousel-feed text-center">
        <h3>¡Siguenos en Intagram!</h3>
    <div class="elfsight-app-db1735c6-81b7-4786-9b45-813f0484ad50" data-elfsight-app-lazy></div>
    </div>
    
<!-- HORARIO termina -->

<?php include("_partials/footer.min.php") ?>