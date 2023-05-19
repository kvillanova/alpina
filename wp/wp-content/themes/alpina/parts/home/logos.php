<div id="logos" class="p-5 bg-white text-dark d-flex flex-column align-itens-center justify-content-center">
    <p class="text-center">Não é sobre chegar ao topo,<br>
        é sobre como e <strong>com quem você chega lá.</strong></p>
    <div class="logos-container d-flex p-5 flex-nowrap overflow-hidden justify-content-center align-items-center">
        <div class="logos-wrapper d-flex flex-row position-relative">
            <div class="logos d-flex flex-row justify-content-start align-items-center">
                <?php $glob = glob(get_template_directory() . '/assets/img/logo*.png');
                $glob = array_map('basename', $glob);
                ?>
                <?php foreach ($glob as $logo) : ?>
                    <img class="mx-5" src="<?= get_template_directory_uri(); ?>/assets/img/<?= $logo ?>" alt="Logo">
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>