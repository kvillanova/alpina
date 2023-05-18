<?php
get_header();
?>
<main>
    <?php
    $query = new WP_Query([
        'post_type' => 'destaques'
    ]);
    if ($query->have_posts()) :
    ?>
        <div class="fluid-row">
            <div id="carrossel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <?php
                    while ($query->have_posts()) :
                        $query->the_post();
                    ?>
                        <div class="carousel-item px-0<?=$query->current_post==0 ? ' active' : ''; ?>">
                            <div class="carousel-item__content d-lg-flex flex-wrap justify-content-between align-items-center">
                                <div class="d-flex flex-column ps-5 px-5 py-3 px-lg-0 py-lg-0 ms-5 me-auto align-items-start col-lg-4">
                                    <h2 class="carousel-item__titulo">
                                        <?= strip_tags(get_post_meta($post->ID, 'titulo_do_destaque', true), ['b', 'strong', 'i', 'em']); ?>
                                    </h2>
                                    <p class="carousel-item__texto p_texto">
                                        <?= strip_tags(get_post_meta($post->ID, 'texto_de_paragrafo', true), ['b', 'strong', 'i', 'em']); ?>
                                    </p>
                                    <a href="#" class="nav-link text-white active">
                                        <?= strip_tags(get_post_meta($post->ID, 'texto_do_botao', true), ['b', 'strong', 'i', 'em']); ?>
                                        <img class="seta-link ms-3" src="<?= get_stylesheet_directory_uri(); ?>/assets/svg/seta-link.svg">
                                    </a>
                                </div>
                                <img class="img-fluid col-lg-6 col-12" src="<?= get_the_post_thumbnail_url($post->ID, 'full');?>" alt="">
                            </div>
                        </div>
                    <?php endwhile; ?>
                </div>

                <div class="carousel__controles d-flex justify-contents-between align-items-center">

                    <div class="carousel__setas d-flex me-auto">
                        <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon"></span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
                            <span class="carousel-control-next-icon"></span>
                        </button>
                    </div>

                    <div class="carousel-indicators me-5">
                        <?php for ($i = 0; $i < $query->post_count; $i++) : ?>
                            <button type="button" data-bs-target="#carrossel" data-bs-slide-to="<?= $i; ?>" <?= $i === 0 ? ' class="active"' : ''; ?>></button>
                        <?php endfor; ?>
                    </div>

                </div>
            </div>
        </div>
    <?php endif; //destaques ; 
    ?>
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