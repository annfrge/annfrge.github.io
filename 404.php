<?php
$titulo = "Error 404 | Acho Coffee";
$description = "Error";
include ("_partials/header.php");
?>
<div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container text-center error-wrapper">
        <div class="row justify-content-center">
            <div class="col-lg-6">
            <i class="bi bi-exclamation-triangle display-1"></i>
            <h3 class="display-1">404</h3>
            <h3 class="mb-4">Acho! Aquí no hay café… ni página.</h3>
            <p class="mb-4"> Algo ha salido mal, pero lo arreglamos con un espresso.</p>
                <a class="btn-acho float py-3 px-5" href="index.php">Volver al inicio</a>
        </div>
        </div>
    </div>
</div>
    <!-- 404 End -->
<?php include("_partials/footer.min.php") ?>