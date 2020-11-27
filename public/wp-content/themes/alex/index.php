<!DOCTYPE html>
<html lang="de">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Alex Mayer</title>
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
          <li class="tina-ubuntu">
            <div class="image-wrapper">
              <img src="<?php echo get_template_directory_uri() ?>/images/img_ref2.jpg" alt="Tina Ubuntu, CEO Headless Ltd." />
            </div>
            <blockquote>
              Alex' Redesign hat maßgeblich mitgeholfen, unseren Umsatz um 20%
              in die Höhe zu treiben!
            </blockquote>
            <cite>Tina Ubuntu, <br> CEO Headless Ltd.</cite>
          </li>
          <li class="tom-herzog">
            <div class="image-wrapper">
              <img src="<?php echo get_template_directory_uri() ?>/images/img_ref1.jpg" alt="Tom Herzog, Cutter's Finest" />
            </div>
            <blockquote>
              Große Webkunst - Keine Kunst mit Alex Mayer!
            </blockquote>
            <cite>Tom Herzog, <br> Cutter's Finest</cite>
            <div class="fill-item"></div>
          </li>
          <li class="mueller-ag">
            <div class="image-wrapper">
              <img src="<?php echo get_template_directory_uri() ?>/images/img_ref3.jpg" alt="Vorstand Mueller AG" />
            </div>
            <blockquote>
              <span class="blockquote-content">Das Store-Konzept von Alex Mayer hat unsere größten Erwartungen
                übertroffen.</span>
            </blockquote>
            <cite>Vorstand Müller AG<br />KR Ernst Anker, Dr. Florian Eisner</cite>
            <div class="quotation-decoration">
              <img src="<?php echo get_template_directory_uri() ?>/images/quotation_icon.svg" alt="Quotation" />
            </div>
          </li>
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