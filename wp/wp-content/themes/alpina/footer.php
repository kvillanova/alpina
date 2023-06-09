<footer class="py-5">
    <nav class="container">

        <div class="d-flex flex-column flex-lg-row ms-5 top-social justify-content-between align-items-center pb-5">
            <img src="<?= get_template_directory_uri(); ?>/assets/svg/logo-branco-alpina.svg" alt="Alpina">
            <div class="social d-flex flex-row justify-content-around py-3 py-lg-0">
                <i class="me-3 bi bi-instagram"></i>
                <i class="mx-3 bi bi-linkedin"></i>
                <i class="mx-3 bi bi-whatsapp"></i>
                <i class="ms-3 bi bi-youtube"></i>
            </div>
        </div>

        <div class="d-flex flex-column flex-lg-row justify-content-between px-5 py-5 row">
            <div class="d-flex flex-row justify-content-between col-8">

                <div class="d-flex flex-column col-2 flex-grow-1">
                    <a class="nav-link text-white" href="#">Início</a>
                    <a class="nav-link text-white" href="#">Sobre</a>
                    <a class="nav-link text-white" href="#">Soluções</a>
                    <a class="nav-link text-white" href="#">Tecnologia</a>
                    <a class="nav-link text-white" href="#">Marketing Digital</a>
                    <a class="nav-link text-white" href="#">Cases</a>
                    <a class="nav-link text-white" href="#">Aprenda</a>
                    <a class="nav-link text-white" href="#">Contato</a>
                </div>

                <div class="d-flex flex-column flex-lg-row col-5 flex-grow-1 justify-content-between">
                    <div class="d-flex flex-column flex-grow-1">
                        <a class="nav-link text-white" href="#">Suporte</a>
                        <a class="nav-link text-white" href="#">Chamados</a>
                        <a class="nav-link text-white" href="#">E-mail</a>
                        <a class="nav-link text-white" href="#">Chat Online</a>
                    </div>
                    <div class="d-flex flex-column flex-grow-1">
                        <h4>Atendimento</h4>
                        <a class="nav-link text-white" href="#"><i class="bi bi-whatsapp me-1"></i> (54) 98358-4713</a>
                        <a class="nav-link text-white" href="#"><i class="bi bi-telephone me-1"></i> (54) 9999-9999</a>
                    </div>
                </div>

            </div>
            <div class="d-flex flex-column col-3 flex-grow-1 flex-shrink-1">
                <h4>ALP NEWS</h4>
                <p>Assine nossa newsletter e receba insights sobre Tecnologia, Marketing e Negócios</p>
                <div class="form-holder">
                    <?php
                    $form = do_shortcode('[contact-form-7 id="28" title="Formulário pequeno"]');
                    echo $form;
                    ?>
                </div>
            </div>


        </div>

    </nav>
</footer>
<?php wp_footer(); ?>
</body>

</html>