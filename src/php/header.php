<header>
  <nav>
    <h1>Alex Mayer</h1>
    <?php wp_nav_menu(array('theme_location' => 'header-menu')); ?>
    <button id="menu-trigger" class="hamburger hamburger--slider" type="button">
      <span class="hamburger-box">
        <span class="hamburger-inner"></span>
      </span>
    </button>
  </nav>
  <section id="hero">
    <?php if (has_post_thumbnail()) {
      the_post_thumbnail('full');
    } ?>
    <article>
      <h2>
        <span>
          <?php
          if (get_post_custom_values('herotext')) {
            $herotext = get_post_custom_values('herotext')[0];
            echo $herotext;
          }
          ?>
        </span>
      </h2>
      <button>Angebot einholen</button>
    </article>
  </section>
</header>