<header>
  <nav>
    <h1>Alex Mayer</h1>
    <?php wp_nav_menu(array('theme_location' => 'header-menu')); ?>
    <!--<ul id="menu">
      <li><a class="active" href="/">Start</a></li>
      <li><a href="/">Leistungen</a></li>
      <li><a href="/">Blog</a></li>
      <li><a href="/">Über Mich</a></li>
      <li><a href="/">Kontakt</a></li>
    </ul>-->
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