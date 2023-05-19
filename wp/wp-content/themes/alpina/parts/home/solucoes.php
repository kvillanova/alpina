<div id="solucoes" class="px-5 my-5 container">
    <div class="d-flex flex-column flex-lg-row justify-content-between align-items-start align-items-lg-center mb-3">
        <h1>Soluções</h1>
        <p class="p_texto">Nós queremos ser o seu parceiro estratégico. Saiba o que podemos fazer <strong>pelo seu negócio!</strong></p>
        <a class="nav-link text-white me-0 align-self-end align-self-lg-center" href="#">Entrar em contato <img class="seta-link ms-3" src="<?= get_stylesheet_directory_uri(); ?>/assets/svg/seta-link.svg"></a>
    </div>
    <?php
    $query = new WP_Query([
        'post_type' => 'solucoes'
    ]);
    if ($query->have_posts()) :
    ?>
        <div class="d-flex flex-column flex-lg-row justify-content-around align-items-center row gap-3">
            <?php while ($query->have_posts()) :
                $query->the_post();
            ?>
                <div class="solucao-home d-flex flex-column p-5 flex-grow-1 position-relative col-lg">
                    <div class="icone-link position-absolute justify-content-center align-items-center">
                        <img src="<?= get_template_directory_uri();?>/assets/svg/seta-link.svg" alt="Link">
                    </div>
                    <img class="icone" src="<?= get_template_directory_uri() . '/assets/svg/' .  get_post_meta($post->ID, 'icone', true); ?>.svg" alt="<?= get_post_meta($post->ID, 'icon', true); ?>">
                    <h4 class="mt-3 mb-5"><?= get_the_title(); ?></h4>
                    <ul class="itens list-unstyled">
                        <?php 
                        foreach(get_post_meta($post->ID, 'itens', false)[0] as $item): ?>
                        <li><?=$item;?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            <?php endwhile; ?>
        </div>
    <?php endif; ?>
</div>