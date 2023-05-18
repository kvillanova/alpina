<?php
get_header();
?>
<main>
<?php require_once __DIR__ . "/parts/carrossel-home.php"; ?>
    <div id="solucoes" class="px-5 my-5">
        <div class="d-flex flex-column flex-lg-row justify-content-between align-items-start align-items-lg-center">
            <h1>Soluções</h1>
            <p class="p_texto">Nós queremos ser o seu parceiro estratégico. Saiba o que podemos fazer <strong>pelo seu negócio!</strong></p>
            <a class="nav-link text-white" href="#">Entrar em contato <img class="seta-link ms-3" src="<?= get_stylesheet_directory_uri(); ?>/assets/svg/seta-link.svg"></a>
        </div>
        <div class="d-flex flex-column flex-lg-row justify-content-between align-items-center">
            <div class="col-3">Tecnologia</div>
            <div class="col-3">Marketing Digital</div>
        </div>
    </div>
</main>
<?php get_footer(); ?>