<?php

// Enable support for Post Thumbnails on posts and pages.
add_theme_support( 'post-thumbnails' );

// Add default posts and comments RSS feed links to head.
add_theme_support( 'automatic-feed-links' );

/*
 * Let WordPress manage the document title.
 * By adding theme support, we declare that this theme does not use a
 * hard-coded <title> tag in the document head, and expect WordPress to
 * provide it for us.
 */
add_theme_support( 'title-tag' );

// Add Custom Post types
add_action('init', 'my_custom_init');
function my_custom_init()
{
	register_post_type(
	   'competences',
	   array(
	   	'label' => 'Compétences',
	   	'labels' => array(
	   		'name' => 'Compétences',
	   		'singular_name' => 'Compétence',
	   		'all_items' => 'Toutes les compétences',
	   		'add_new_item' => 'Ajouter une compétence',
	   		'edit_item' => 'Éditer la compétence',
	   		'new_item' => 'Nouvelle compétence',
	   		'view_item' => 'Voir la compétence',
	   		'search_items' => 'Rechercher parmi les compétences',
	   		'not_found' => 'Pas de compétence trouvée',
	   		'not_found_in_trash'=> 'Pas de compétence dans la corbeille'
	   		),
	   	'public' => true,
	   		'capability_type' => 'post',
	   		'supports' => array(
	   			'title',
	   		'editor',
	   		'thumbnail'
	   		),
	   		'has_archive' => true
	   	)
	);
	register_post_type(
	   'projet',
	   array(
	   	'label' => 'Projets',
	   	'labels' => array(
	   		'name' => 'Projets',
	   		'singular_name' => 'Projet',
	   		'all_items' => 'Tous les projets',
	   		'add_new_item' => 'Ajouter un projet',
	   		'edit_item' => 'Éditer le projet',
	   		'new_item' => 'Nouveau projet',
	   		'view_item' => 'Voir le projet',
	   		'search_items' => 'Rechercher parmi les projets',
	   		'not_found' => 'Pas de projet trouvé',
	   		'not_found_in_trash'=> 'Pas de projet dans la corbeille'
	   		),
	   	'public' => true,
	   		'capability_type' => 'post',
	   		'supports' => array(
	   			'title',
	   		'editor',
	   		'thumbnail'
	   		),
	   		'has_archive' => true
	   	)
	);
	register_post_type(
	   'valeurs',
	   array(
	   	'label' => 'Valeurs',
	   	'labels' => array(
	   		'name' => 'Valeurs',
	   		'singular_name' => 'Valeur',
	   		'all_items' => 'Toutes les valeurs',
	   		'add_new_item' => 'Ajouter une valeur',
	   		'edit_item' => 'Éditer la valeur',
	   		'new_item' => 'Nouvelle valeur',
	   		'view_item' => 'Voir la valeur',
	   		'search_items' => 'Rechercher parmi les valeurs',
	   		'not_found' => 'Pas de valeur trouvée',
	   		'not_found_in_trash'=> 'Pas de valeur dans la corbeille'
	   		),
	   	'public' => true,
	   		'capability_type' => 'post',
	   		'supports' => array(
	   			'title',
	   		'editor',
	   		'thumbnail'
	   		),
	   		'has_archive' => true
	   	)
	);
	register_taxonomy(
		'type',
		'projet',
		array(
			'label' => 'Types',
			'labels' => array(
				'name' => 'Types',
				'singular_name' => 'Type',
				'all_items' => 'Tous les types',
				'edit_item' => 'Éditer le type',
				'view_item' => 'Voir le type',
				'update_item' => 'Mettre à jour le type',
				'add_new_item' => 'Ajouter un type',
				'new_item_name' => 'Nouveau type',
				'search_items' => 'Rechercher parmi les types',
				'popular_items' => 'Types les plus utilisés'
			),
		'hierarchical' => true
		)
	);
}

// Menus de navigation
register_nav_menus(array(
    'principal' => 'Menu principal (principal)'
));


add_action( 'init', 'register_my_widget_theme' );