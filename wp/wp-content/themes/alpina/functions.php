<?php
add_theme_support('post-thumbnails');
add_action( 'init', 'register_post_types' );
add_action('wp_enqueue_scripts', 'send_scripts');
function register_post_types() {
	$labels = [
		'name'                     => esc_html__( 'Destaques', 'your-textdomain' ),
		'singular_name'            => esc_html__( 'Destaque', 'your-textdomain' ),
		'add_new'                  => esc_html__( 'Adicionar novo', 'your-textdomain' ),
	];
	$args = [
		'label'               => esc_html__( 'Destaques', 'your-textdomain' ),
		'labels'              => $labels,
		'description'         => '',
		'public'              => true,
		'hierarchical'        => false,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'show_ui'             => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'show_in_rest'        => true,
		'query_var'           => true,
		'can_export'          => true,
		'delete_with_user'    => true,
		'has_archive'         => true,
		'rest_base'           => '',
		'show_in_menu'        => true,
		'menu_position'       => '',
		'menu_icon'           => 'dashicons-cover-image',
		'capability_type'     => 'post',
		'supports'            => ['title','thumbnail'],
		'taxonomies'          => [],
		'rewrite'             => [
			'with_front' => false,
		],
	];

	register_post_type( 'destaques', $args );

	$labels = [
		'name'                     => esc_html__( 'Soluções', 'your-textdomain' ),
		'singular_name'            => esc_html__( 'Solução', 'your-textdomain' ),
		'add_new'                  => esc_html__( 'Adicionar nova', 'your-textdomain' ),
	];
	$args = [
		'label'               => esc_html__( 'Destaques', 'your-textdomain' ),
		'labels'              => $labels,
		'description'         => '',
		'public'              => true,
		'hierarchical'        => false,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'show_ui'             => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'show_in_rest'        => true,
		'query_var'           => true,
		'can_export'          => true,
		'delete_with_user'    => true,
		'has_archive'         => true,
		'rest_base'           => '',
		'show_in_menu'        => true,
		'menu_position'       => '',
		'menu_icon'           => 'dashicons-businesswoman',
		'capability_type'     => 'post',
		'supports'            => ['title','thumbnail'],
		'taxonomies'          => [],
		'rewrite'             => [
			'with_front' => false,
		],
	];

	register_post_type( 'solucoes', $args );

	$labels = [
		'name'                     => esc_html__( 'Tópicos', 'your-textdomain' ),
		'singular_name'            => esc_html__( 'Tópicos', 'your-textdomain' ),
		'add_new'                  => esc_html__( 'Adicionar novo', 'your-textdomain' ),
	];
	$args = [
		'label'               => esc_html__( 'Tópicos', 'your-textdomain' ),
		'labels'              => $labels,
		'description'         => '',
		'public'              => true,
		'hierarchical'        => false,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'show_ui'             => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'show_in_rest'        => true,
		'query_var'           => true,
		'can_export'          => true,
		'delete_with_user'    => true,
		'has_archive'         => true,
		'rest_base'           => '',
		'show_in_menu'        => true,
		'menu_position'       => '',
		'menu_icon'           => 'dashicons-image-flip-horizontal',
		'capability_type'     => 'post',
		'supports'            => ['title','thumbnail'],
		'taxonomies'          => [],
		'rewrite'             => [
			'with_front' => false,
		],
	];

	register_post_type( 'topicos', $args );
}


add_filter( 'rwmb_meta_boxes', 'register_meta_boxes' );

function register_meta_boxes( $meta_boxes ) {
    $prefix = '';

    $meta_boxes[] = [
        'title'   => esc_html__( 'Metaboxes', 'online-generator' ),
        'id'         => 'untitled',
        'post_types' => ['destaques'],
        'context'    => 'normal',
        'fields'     => [
            [
                'type' => 'wysiwyg',
                'name' => esc_html__( 'Título do Destaque', 'online-generator' ),
                'id'   => $prefix . 'titulo_do_destaque',
            ],
            [
                'type' => 'wysiwyg',
                'name' => esc_html__( 'Texto de Parágrafo', 'online-generator' ),
                'id'   => $prefix . 'texto_de_paragrafo',
            ],
            [
                'type' => 'text',
                'name' => esc_html__( 'Texto do Botão', 'online-generator' ),
                'id'   => $prefix . 'texto_do_botao',
            ],
            [
                'type' => 'text',
                'name' => esc_html__( 'Link do Botão', 'online-generator' ),
                'id'   => $prefix . 'link_do_botao',
            ],
        ],
    ];

	$meta_boxes[] = [
        'title'   => esc_html__( 'Metaboxes', 'online-generator' ),
        'id'      => 'untitled',
        'context' => 'normal',
		'post_types' => ['solucoes'],
        'fields'  => [
            [
                'type'  => 'text',
                'name'  => esc_html__( 'Ítens', 'online-generator' ),
                'id'    => $prefix . 'itens',
                'clone' => true,
            ],
            [
                'type'    => 'select_advanced',
                'name'    => esc_html__( 'Ícone', 'online-generator' ),
                'id'      => $prefix . 'icone',
                'options' => [
                    'tech' => esc_html__( 'tech', 'online-generator' ),
                    'mkt'  => esc_html__( 'mkt', 'online-generator' ),
                ],
            ],
        ],
    ];

	$meta_boxes[] = [
        'title'   => esc_html__( 'Metaboxes', 'online-generator' ),
        'id'         => 'untitled',
        'post_types' => ['topicos'],
        'context'    => 'normal',
        'fields'     => [
            [
                'type' => 'wysiwyg',
                'name' => esc_html__( 'Título do Tópico', 'online-generator' ),
                'id'   => $prefix . 'titulo_do_topico',
            ],
            [
                'type' => 'wysiwyg',
                'name' => esc_html__( 'Texto de Parágrafo', 'online-generator' ),
                'id'   => $prefix . 'texto_de_paragrafo',
            ],
            [
                'type' => 'text',
                'name' => esc_html__( 'Texto do Botão', 'online-generator' ),
                'id'   => $prefix . 'texto_do_botao',
            ],
            [
                'type' => 'text',
                'name' => esc_html__( 'Link do Botão', 'online-generator' ),
                'id'   => $prefix . 'link_do_botao',
            ],
        ],
    ];

    return $meta_boxes;
}

function send_scripts() {
	wp_enqueue_script('menu', get_template_directory_uri() . '/assets/js/menu.js', ['jquery'], false, true);
	wp_enqueue_script('slider', get_template_directory_uri() . '/assets/js/slider.js', ['jquery'], false, true);
}
?>