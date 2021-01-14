
<?php
$context = Timber::context();

$stories_args = array(
  'post_type' => 'post',
  'category_name' => 'stories',
  'numberposts' => 3,
  'order' => 'DESC'
);

$inventions_args = array(
  'post_type' => 'post',
  'category_name' => 'inventions',
  'numberposts' => 3,
  'order' => 'DESC'
);

$context['inventions'] = Timber::get_posts($inventions_args);
$context['stories'] = Timber::get_posts($stories_args);
$context['post'] = Timber::get_post();

/*echo "<pre>";
print_r($context['inventions']);
echo "</pre>";*/

Timber::render('front-page.twig', $context);
