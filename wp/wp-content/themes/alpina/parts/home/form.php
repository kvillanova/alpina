<div id="form" class="px-5 my-5 container gx-5">
    <div class="row">
        <div class="form-holder col-lg-5 col">
        <h2 class="form__titulo">Já pensou em fazer parte do <strong>nosso time de Alpinistas?</strong></h2>
            <?php
            $form = do_shortcode('[contact-form-7 id="27" title="Formulário Grande"]');
            echo $form;
            ?>
        </div>
        <img class="d-none d-lg-block me-5 col-lg-6" src="<?=get_template_directory_uri() ;?>/assets/img/form-side.png" alt="Formulário">
    </div>
</div>