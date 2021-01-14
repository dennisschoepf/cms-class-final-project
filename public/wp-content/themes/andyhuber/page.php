<?php
$context = Timber::context();

$context['post'] = Timber::get_post();

/*echo "<pre>";
print_r($context['post']->slug);
echo "</pre>";*/

Timber::render(array('page-' . $context['post']->slug . '.twig', 'page.twig'), $context);
