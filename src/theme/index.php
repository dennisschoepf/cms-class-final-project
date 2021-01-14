<?php
$context          = Timber::context();

print_r($context);

$stories_args = array(
	'post_type' => 'post',
	'category_name' => 'stories',
	'numberposts' => 3,
	'order' => 'DESC'
)

$context['stories'] = new Timber::get_posts($stories_args);
$templates        = array( 'index.twig' );
if ( is_home() ) {
	array_unshift( $templates, 'front-page.twig', 'home.twig' );
}
Timber::render( $templates, $context );
