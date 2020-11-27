<!DOCTYPE html>
<html lang="de">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Alex Mayer</title>
  <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri() ?>/images/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri() ?>/images/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri() ?>/images/favicon-16x16.png">
  <link rel="manifest" href="<?php echo get_template_directory_uri() ?>/images/site.webmanifest">
  <link rel="shortcut icon" href="<?php echo get_template_directory_uri() ?>/images/favicon.ico">
  <meta name="msapplication-TileColor" content="#da532c">
  <meta name="theme-color" content="#ffffff">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>
  <?php get_header(); ?>
  <main>
    <?php if (is_front_page()) { ?>
      <section class="maxwidthcontainer" id="services">
        <h2>Leistungen</h2>
        <ul>
          <?php
          $services_query = new WP_Query(array('category_name' => 'leistungen', 'order' => 'DESC', 'posts_per_page' => 3));
          if ($services_query->have_posts()) :
            while ($services_query->have_posts()) : $services_query->the_post(); ?>
              <li>
                <a href="<?php the_permalink(); ?>" class="<?php the_title(); ?>">
                  <h3><?php the_title(); ?></h3>
                  <?php the_post_thumbnail() ?>
                </a>
              </li>
            <?php endwhile;
          else : ?>
            Erster Post demnächst...
          <?php endif;
          wp_reset_postdata();
          ?>
        </ul>
      </section>
      <section class="maxwidthcontainer" id="news">
        <h2>News</h2>
        <ul>
          <?php
          $news_query = new WP_Query(array('category_name' => 'news', 'order' => 'DESC', 'posts_per_page' => 3));
          if ($news_query->have_posts()) :
            while ($news_query->have_posts()) : $news_query->the_post(); ?>
              <li>
                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a><span>-</span><?php the_excerpt() ?>
                <a href="<?php the_permalink(); ?>">[mehr erfahren]</a>
              </li>
            <?php endwhile;
          else : ?>
            Erster Post demnächst...
          <?php endif;
          wp_reset_postdata();
          ?>
        </ul>
      </section>
      <section class="maxwidthcontainer" id="references">
        <h2>Referenzen</h2>
        <ul>
          <?php
          $references_query = new WP_Query(array('category_name' => 'referenzen', 'order' => 'DESC', 'posts_per_page' => 3));
          if ($references_query->have_posts()) :
            while ($references_query->have_posts()) : $references_query->the_post(); ?>
              <li class="<?php the_field('css_class'); ?>">
                <div class="image-wrapper">
                  <img src="<?php the_field('image'); ?>" alt="<?php the_title(); ?>" />
                </div>
                <?php
                if (strcmp(get_field('css_class'), 'mueller-ag') === 0) { ?>
                  <blockquote>
                    <span class="blockquote-content"><?php the_field('quote'); ?></span>
                  </blockquote>
                <?php } else { ?>
                  <blockquote><?php the_field('quote'); ?></blockquote>
                <?php } ?>
                <cite><?php the_title(); ?> <br> <?php the_field('company'); ?></cite>
                <?php
                if (strcmp(get_field('css_class'), 'mueller-ag') === 0) { ?>
                  <div class="quotation-decoration">
                    <img src="<?php echo get_template_directory_uri() ?>/images/quotation_icon.svg" alt="Quotation" />
                  </div>
                <?php }
                if (strcmp(get_field('css_class'), 'tom-herzog') === 0) { ?>
                  <div class="fill-item"></div>
                <?php } ?>
              </li>
            <?php endwhile;
          else : ?>
            Erster Post demnächst...
          <?php endif;
          wp_reset_postdata();
          ?>
        </ul>
      </section>
    <?php } else {
      if (have_posts()) {
        while (have_posts()) {
          the_post();
          the_content();
        }
      }
    } ?>
  </main>
  <?php get_footer(); ?>
  <?php wp_footer(); ?>
</body>

</html>