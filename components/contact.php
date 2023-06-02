<section class="section" id="contact">
    <div class="f-elements f-elements--center f-col">
        <div class="contact">
            <div class="container">
                <div class="f-elements f-col gap-sm">
                    <p class="contact__title">Formulario de Contacto</p>
                    <div class="f-elements f-col md:f-row md:f-row--reverse gap-md">
                        <div class="f-elements f-col md:w-50">
                            <img src="./assets/img/contact.webp" alt="logo" class="contact__img" />
                        </div>
                        <div class="f-elements f-col f-elements--center md:w-50">
                            <div class="f-elements f-col gap-md">
                                <p class="contact__description">
                                    El apoyo que nos brindan las empresas e instituciones privadas,
                                    públicas y familias de noble corazón mediante la donación de diversos artículos en desuso,
                                    nos permite seguir con esta labor social.
                                </p>
                                <p class="contact__description">
                                    Gracias a ti, apoyamos desde niños hasta adultos mayores ubicados en las zonas más alejadas de nuestro Perú,
                                    así como a Centros de Salud, Colegios, Asentamientos Humanos y familias que no tienen la solvencia económica
                                    para adquirir artículos de primera necesidad.
                                </p>
                                <p class="contact__description">
                                    De parte del equipo de Esperanza Viva, muchas gracias.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="f-elements f-elements--center f-col gap-sm w-100">
                <form action="" method="" class="form f-elements f-col gap-sm" id="contact-form">
                    <div class="f-elements f-col gap-sm">
                        <div class="f-elements f-col gap-sm">
                            <input type="text" name="name" placeholder="Nombre completo" class="form__input" id="name"/>
                        </div>
                        <div class="f-elements f-col gap-sm">
                            <input type="email" name="mail" placeholder="Correo electronico" required class="form__input" id="mail"/>
                        </div>
                        <div class="f-elements f-col gap-sm">
                            <input type="tel" name="tel" placeholder="Teléfono / Celular" required class="form__input" id="tel"/>
                        </div>
                        <div class="f-elements f-col gap-sm">
                            <textarea name="description" placeholder="Comentarios" required class="form__textarea" id="description"></textarea>
                        </div>
                        <div id="response"></div>
                        <div class="form__button">
                            <button class="button button--primary" id="submit"><i class="bi bi-envelope-heart"></i> Deseo donar</button>
                        </div>
                    </div>
                </form>
                <script src="js/form.js"></script>
                <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
            </div>
        </div>
    </div>
</section>