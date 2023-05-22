<div id="topicos" class="px-5 my-5 container">
    <?php
    $query = new WP_Query([
        'post_type' => 'topicos',
        'name' => 'esquerda'
    ]);
    if ($query->have_posts()) :
        $query->the_post();
    ?>
        <div id="topico-esquerda" class="position-relative d-flex flex-column flex-lg-row justify-content-center align-items-center">
            <div class="esquerda">
                <img class="selo-foto position-absolute" src="<?= get_template_directory_uri(); ?>/assets/img/selo.png" ;? alt="selo">
                <img src="<?= get_the_post_thumbnail_url($post->ID, 'full'); ?>" alt="Foto do tópico">
            </div>
            <div class="direita d-flex flex-column">
                <h4 class="topico__titulo esquerda position-absolute"><?= strip_tags(get_post_meta($post->ID, 'titulo_do_topico', true), ['b', 'strong', 'i', 'em']); ?></h4>
                <p class="mx-5"><?= strip_tags(get_post_meta($post->ID, 'texto_de_paragrafo', true), ['b', 'strong', 'i', 'em']); ?></p>
            </div>
        </div>
    <?php endif; ?>

    <?php
    $query = new WP_Query([
        'post_type' => 'topicos',
        'name' => 'direita'
    ]);
    if ($query->have_posts()) :
        $query->the_post();
    ?>
        <div id="topico-direita" class="position-relative mx-5 d-flex flex-column-reverse flex-lg-row justify-content-center align-items-center mt-5">
            <div class="esquerda mx-5">
                <h4 class="topico__titulo"><?= strip_tags(get_post_meta($post->ID, 'titulo_do_topico', true), ['b', 'strong', 'i', 'em']); ?></h4>
                <p class="my-5"><?= strip_tags(get_post_meta($post->ID, 'texto_de_paragrafo', true), ['b', 'strong', 'i', 'em']); ?></p>
                <button class="btn btn-outline-light px-3 mt-5"><?=get_post_meta($post->ID, 'texto_do_botao', true);?></button>
            </div>
            <div class="direita">
                <img src="<?= get_the_post_thumbnail_url($post->ID, 'full'); ?>" alt="Foto do tópico">
            </div>
        </div>
    <?php endif; ?>
</div>