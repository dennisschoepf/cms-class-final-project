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
    <img src="<?php echo get_template_directory_uri() ?>/images/hero.jpg" alt="Design Icon" />
    <article>
      <h2><span>Glänzende Ideen für leuchtende Augen</span></h2>
      <button>Angebot einholen</button>
    </article>
  </section>
</header>