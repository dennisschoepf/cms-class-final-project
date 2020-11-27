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
          <li>
            <a href="/" class="bg-accent-bright">
              <h3>Design</h3>
              <img src="<?php echo get_template_directory_uri() ?>/images/design_icon.svg" alt="Design Icon" />
            </a>
          </li>
          <li>
            <a href="/" class="bg-accent-reg">
              <h3>Strategie</h3>
              <img src="<?php echo get_template_directory_uri() ?>/images/strategy_icon.svg" alt="Strategy Icon" />
            </a>
          </li>
          <li>
            <a href="/" class="bg-accent-dark">
              <h3>Consulting</h3>
              <img src="<?php echo get_template_directory_uri() ?>/images/consulting_icon.svg" alt="Consulting Icon" />
            </a>
          </li>
        </ul>
      </section>
      <section class="maxwidthcontainer" id="news">
        <h2>News</h2>
        <ul>
          <li>
            <a href="/">365 Postkarten</a> - Eine Liebeserklärung für jeden Tag!
            <a href="/">[mehr erfahren]</a>
          </li>
          <li>
            <a href="/">Award Nominierung</a> - Tolle News: Ich bin bei der
            Endauswahl 2020! <a href="/">[mehr erfahren]</a>
          </li>
          <li>
            <a href="/">CMYK erklärt</a> - Der neueste
            <a href="/">Blog</a>-Eintrag <a href="/">[mehr erfahren]</a>
          </li>
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