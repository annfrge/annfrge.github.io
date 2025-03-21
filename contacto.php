<?php
$pagina = 'contacto.php';
$titulo = "Contacto | Acho Coffee";
$description = "¿Quieres comunicarte con nosotros? Mandanos un correo.";
include ("_partials/header.php");
?>
<!-- CONTACTO -->
<div class="container-fluid product py-5">
    <div class="container contacto-wrapper p-3">
        <div class="row g-5">
            <div class="col-lg-6 m-0 p-0 wow fadeInUp" data-wow-delay="0.1s">
                <form class="validacion p-xl-4" action="proceso-contacto.php" method="POST" novalidate>
                    <caption>
                        <div class="col-12 wow fadeIn" data-wow-delay="0.6s"><h2 class="text-center section">¡Contacta con nosotros!</h2></div>
                    </caption>
                    <div class="row g-3">
                        <div class="col-12">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre" required>
                                <div class="invalid-feedback">
                                    Este campo es obligatorio.
                                </div>
                                <label for="nombre">Nombre y Apellidos</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="email" class="form-control" id="email" name="email" placeholder="Email" required 
                                title="Introduce una dirección de email válida: example@gmail.com">
                                <div class="invalid-feedback email">
                                    Este campo es obligatorio.
                                </div>
                                <label for="email">Email</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating">
                            <input type="tel" class="form-control" id="tel" name="tel" placeholder="Teléfono" required
                            pattern="^(\+34\s?|34\s?|0)?[67]\d{2}(\s?\d{3}){2}$|^(\+34\s?|34\s?|0)?[9]\d{2}(\s?\d{3}){2}$|^(\+34\s?|34\s?|0)?[8]\d{2}(\s?\d{3}){2}$"
                            title="El número debe ser válido en España, con o sin (+34)">
                                <div class="invalid-feedback tel">
                                    Este campo es obligatorio.
                                </div>
                                <label for="tel">Teléfono</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-floating">
                                <textarea class="form-control" placeholder="Leave a message here" id="message" name="message" style="height: 120px" required></textarea>
                                <div class="invalid-feedback">
                                    Este campo es obligatorio.
                                </div>
                                <label for="message">Mensaje</label>
                            </div>
                        </div>
                        <div>
                            <input id="agree" name="agree" class="politica-check" type="checkbox" required>
                            <label for="agree" class="d-inline">Acepto la política de privacidad</label>
                            <div class="invalid-feedback">
                                    Acepta para continuar
                            </div>
                            
                        </div>
                        <div class="col-12 text-center">
                            <input type="hidden" name="recaptcha_response" id="recaptchaResponse">
                            <button class="btn-contacto float py-3 px-5" type="submit">Enviar</button>
                            <p class="py-3">reCAPTCHA invisible de Google <span class="float"><a id="captcha_privacy_link" href="https://policies.google.com/privacy" target="_blank" rel="noopener noreferrer">Política de privacidad</a></span> y <span class="float"><a id="captcha_terms_link" href="https://policies.google.com/terms" target="_blank" rel="noopener noreferrer">Condiciones de uso</a></span>.</p>
                        </div>
                    </div>
                </form>
<div class="modal" tabindex="-1" id="feedback">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">¡Mensaje enviado!</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>Nos ha llegado tu mensaje. No somos velocistas, pero te responderemos lo antes posible. Mientras tanto, vente a por un café 😉☕️</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn-acho float" data-bs-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="h-100">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2981.2872791558657!2d-0.8773227235946803!3d41.64953467969326!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd5915a064e6bbed%3A0x258e1a60d1b28636!2sAcho%20Coffee!5e0!3m2!1ses!2ses!4v1740999184284!5m2!1ses!2ses" width="100%" height="100%" style="border:0;" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</div>
<!-- CONTACTO termina -->

<?php include("_partials/footer.min.php") ?>