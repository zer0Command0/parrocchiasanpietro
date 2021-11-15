<?php

if( function_exists('acf_add_local_field_group') ):

	acf_add_local_field_group(array(
		'key' => 'group_61917190baa5b',
		'title' => 'Chi siamo page',
		'fields' => array(
			array(
				'key' => 'field_619171ee8fd89',
				'label' => 'Chi siamo',
				'name' => 'chi_siamo',
				'type' => 'textarea',
				'instructions' => 'Inserisci il testo per l\'area Chi Siamo',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => '',
				'placeholder' => '',
				'maxlength' => '',
				'rows' => '',
				'new_lines' => '',
			),
			array(
				'key' => 'field_6191724b8fd8b',
				'label' => 'Nome Parroco 1',
				'name' => 'nome_parroco_1',
				'type' => 'text',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => '',
				'placeholder' => 'Nome e Cognome',
				'prepend' => 'Don',
				'append' => '',
				'maxlength' => '',
			),
			array(
				'key' => 'field_619172858fd8c',
				'label' => 'Biografia Parroco 1',
				'name' => 'biografia_parroco_1',
				'type' => 'textarea',
				'instructions' => 'Inserisci la biografia del parroco',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => '',
				'placeholder' => '',
				'maxlength' => '',
				'rows' => 10,
				'new_lines' => '',
			),
			array(
				'key' => 'field_619172b08fd8d',
				'label' => 'Foto Parroco 1',
				'name' => 'foto_parroco_1',
				'type' => 'image',
				'instructions' => 'Carica la foto del Parroco 1',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'return_format' => 'url',
				'preview_size' => 'thumbnail',
				'library' => 'all',
				'min_width' => '',
				'min_height' => '',
				'min_size' => '',
				'max_width' => '',
				'max_height' => '',
				'max_size' => '',
				'mime_types' => '',
			),
			array(
				'key' => 'field_619172dc8fd8e',
				'label' => 'Nome Parroco 2',
				'name' => 'nome_parroco_2',
				'type' => 'text',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => '',
				'placeholder' => 'Nome e Cognome',
				'prepend' => 'Don',
				'append' => '',
				'maxlength' => '',
			),
			array(
				'key' => 'field_619172e68fd8f',
				'label' => 'Biografia Parroco 2',
				'name' => 'biografia_parroco_2',
				'type' => 'textarea',
				'instructions' => 'Inserisci la biografia del parroco',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => '',
				'placeholder' => '',
				'maxlength' => '',
				'rows' => 10,
				'new_lines' => '',
			),
			array(
				'key' => 'field_619172ee8fd90',
				'label' => 'Foto Parroco 2',
				'name' => 'foto_parroco_2',
				'type' => 'image',
				'instructions' => 'Carica la foto del Parroco 1',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'return_format' => 'url',
				'preview_size' => 'thumbnail',
				'library' => 'all',
				'min_width' => '',
				'min_height' => '',
				'min_size' => '',
				'max_width' => '',
				'max_height' => '',
				'max_size' => '',
				'mime_types' => '',
			),
		),
		'location' => array(
			array(
				array(
					'param' => 'page_template',
					'operator' => '==',
					'value' => 'page-whoweare.php',
				),
			),
		),
		'menu_order' => 0,
		'position' => 'normal',
		'style' => 'default',
		'label_placement' => 'top',
		'instruction_placement' => 'label',
		'hide_on_screen' => array(
			0 => 'permalink',
			1 => 'the_content',
			2 => 'excerpt',
			3 => 'discussion',
			4 => 'comments',
			5 => 'revisions',
			6 => 'slug',
			7 => 'author',
			8 => 'format',
			9 => 'page_attributes',
			10 => 'featured_image',
			11 => 'categories',
			12 => 'tags',
			13 => 'send-trackbacks',
		),
		'active' => true,
		'description' => '',
		'show_in_rest' => 0,
	));

	acf_add_local_field_group(array(
		'key' => 'group_618e7d9249213',
		'title' => 'Homepage',
		'fields' => array(
			array(
				'key' => 'field_618e7da40858e',
				'label' => 'Slider Home 1',
				'name' => 'slider_home_1',
				'type' => 'url',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => '',
				'placeholder' => '',
			),
			array(
				'key' => 'field_618e7ddb0858f',
				'label' => 'Slider Home 2',
				'name' => 'slider_home_2',
				'type' => 'url',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => '',
				'placeholder' => '',
			),
			array(
				'key' => 'field_618e7dde08590',
				'label' => 'Slider Home 3',
				'name' => 'slider_home_3',
				'type' => 'url',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => '',
				'placeholder' => '',
			),
			array(
				'key' => 'field_6191743fd7d67',
				'label' => 'Pagina Chi Siamo',
				'name' => 'pagina_chi_siamo',
				'type' => 'post_object',
				'instructions' => 'Seleziona la pagina chi siamo',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'post_type' => array(
					0 => 'page',
				),
				'taxonomy' => '',
				'allow_null' => 0,
				'multiple' => 0,
				'return_format' => 'id',
				'ui' => 1,
			),
		),
		'location' => array(
			array(
				array(
					'param' => 'page_template',
					'operator' => '==',
					'value' => 'page-home.php',
				),
			),
		),
		'menu_order' => 0,
		'position' => 'normal',
		'style' => 'default',
		'label_placement' => 'top',
		'instruction_placement' => 'label',
		'hide_on_screen' => array(
			0 => 'permalink',
			1 => 'the_content',
			2 => 'excerpt',
			3 => 'discussion',
			4 => 'comments',
			5 => 'revisions',
			6 => 'slug',
			7 => 'author',
			8 => 'format',
			9 => 'featured_image',
			10 => 'categories',
			11 => 'tags',
			12 => 'send-trackbacks',
		),
		'active' => true,
		'description' => '',
		'show_in_rest' => 0,
	));

endif;