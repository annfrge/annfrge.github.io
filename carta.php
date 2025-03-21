<?php
$pagina = 'carta.php';
$titulo = "Carta | Acho Coffee";
$description = "Dale un vistazo a nuestra carta. enamorate de nuestro café y disfruta de nuestra repostería.";
include ("_partials/header.php");
?>
<!-- CARTA-->
<div class="container carta-wrapper">
    <div class="col-12 wow fadeIn" data-wow-delay="0.2s">
        <h2 class="text-center section mb-0">Carta</h2>
    </div>
    <div class="row row-cols-12 row-cols-md-2 py-5">
        <div class="accordion-carta">
            <div class="accordion-item wow fadeIn" data-wow-delay="0.3s">
                <h2 class="accordion-header">
                <button class="d-flex flex-row  align-items-center w-100 text-start m-0 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#cafe" aria-expanded="false" aria-controls="cafe">
                    <span class="col-auto flecha">▶</span>
                    <span class="col-11 col-md-10">Café</span>     
                </button>
                </h2>
                <div id="cafe" class="accordion-collapse row m-0 collapsed collapse" data-bs-toggle="collapse" data-bs-target="#cafe" aria-expanded="false" aria-controls="cafe">
                    <div class="accordion-body offset-1 offset-md-2 col">
                        <ul class="list-unstyled row row-cols-2">
                            <li>Espresso</li>
                            <li>2</li>
                            <li>Cortado</li>
                            <li>2</li>
                            <li>Flat white</li>
                            <li>2.5</li>
                            <li>Latte</li>
                            <li>2.2</li>
                            <li>Mocaccino</li>
                            <li>2.7</li>
                            <li>Batch brew</li>
                            <li>2</li>
                            <li>Filtro</li>
                            <li>4.5</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- CAFÉ FRÍO -->
            <div class="accordion-item wow fadeIn" data-wow-delay="0.4s">
                <h2 class="accordion-header">
                <button class="d-flex flex-row align-items-center w-100 text-start m-0 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#cafe-frio" aria-expanded="false" aria-controls="cafe-frio">
                    <span class="col-auto flecha">▶</span>
                    <span class="col-11 col-md-10">Café frío</span>     
                </button>
                </h2>
                <div id="cafe-frio" class="accordion-collapse row m-0 collapsed collapse" data-bs-toggle="collapse" data-bs-target="#cafe-frio" aria-expanded="false" aria-controls="cafe-frio">
                    <div class="accordion-body offset-1 offset-md-2 col">
                        <ul class="list-unstyled row row-cols-2">
                            <li>Espresso</li>
                            <li>2</li>
                            <li>Cortado</li>
                            <li>2</li>
                            <li>Flat white</li>
                            <li>2.5</li>
                            <li>Latte</li>
                            <li>2.2</li>
                            <li>Mocaccino</li>
                            <li>2.7</li>
                            <li>Batch brew</li>
                            <li>2</li>
                            <li>Filtro</li>
                            <li>4.5</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- PARA COMER -->
            <div class="accordion-item wow fadeIn" data-wow-delay="0.5s">
                <h2 class="accordion-header">
                <button class="d-flex flex-row  align-items-center w-100 text-start m-0 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#comer" aria-expanded="false" aria-controls="comer">
                    <span class="col-auto flecha">▶</span>
                    <span class="col-11 col-md-10">Para comer</span>     
                </button>
                </h2>
                <div id="comer" class="accordion-collapse row m-0 collapsed collapse" data-bs-toggle="collapse" data-bs-target="#comer" aria-expanded="false" aria-controls="comer">
                    <div class="accordion-body offset-1 offset-md-2 col">
                        <ul class="list-unstyled row row-cols-2">
                            <li>Espresso</li>
                            <li>2</li>
                            <li>Cortado</li>
                            <li>2</li>
                            <li>Flat white</li>
                            <li>2.5</li>
                            <li>Latte</li>
                            <li>2.2</li>
                            <li>Mocaccino</li>
                            <li>2.7</li>
                            <li>Batch brew</li>
                            <li>2</li>
                            <li>Filtro</li>
                            <li>4.5</li>
                        </ul>
                    </div>
                </div>
            </div>


            <!-- OTRAS BEBIDAS -->
            <div class="accordion-item wow fadeIn" data-wow-delay="0.6s">
                <h2 class="accordion-header">
                <button class="d-flex flex-row align-items-center w-100 text-start m-0 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#otras-bebidas" aria-expanded="false" aria-controls="otras-bebidas">
                    <span class="col-auto flecha">▶</span>
                    <span class="col-11 col-md-10">Otras bebidas</span>     
                </button>
                </h2>
                <div id="otras-bebidas" class="accordion-collapse row m-0 collapsed collapse" data-bs-toggle="collapse" data-bs-target="#otras-bebidas" aria-expanded="false" aria-controls="otras-bebidas">
                    <div class="accordion-body offset-1 offset-md-2 col">
                        <ul class="list-unstyled row row-cols-2">
                            <li>Espresso</li>
                            <li>2</li>
                            <li>Cortado</li>
                            <li>2</li>
                            <li>Flat white</li>
                            <li>2.5</li>
                            <li>Latte</li>
                            <li>2.2</li>
                            <li>Mocaccino</li>
                            <li>2.7</li>
                            <li>Batch brew</li>
                            <li>2</li>
                            <li>Filtro</li>
                            <li>4.5</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="galeria-carta wow fadeIn" data-wow-delay="0.4s"></div>
    </div>
</div>
<!-- CARTA termina -->

<?php include("_partials/footer.min.php") ?>