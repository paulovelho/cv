<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Paulo Henrique Martins — Curriculum Vitae</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Paulo Henrique Martins — Software Developer. Curriculum vitae, experience and skills.">
    <link rel="icon" href="img/favicon.svg" type="image/svg+xml">
    <link rel="icon" href="img/favicon-32.png" sizes="32x32" type="image/png">
    <link rel="apple-touch-icon" href="img/apple-touch-icon.png">
    <link href="css/font-awesome.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
  </head>
  <body>
    <a class="skip-link" href="#main">Skip to content</a>
    <div id="scroll-progress"></div>

    <header class="topnav">
      <div class="topnav-inner">
        <a class="brand" href="#top">
          <img src="img/avatar.jpg" alt="">
          Paulo Martins
        </a>
        <nav class="nav-links" id="nav-links">
          <a href="#about">About</a>
          <a href="#timeline">Timeline</a>
          <a href="#portfolio">Portfolio</a>
          <a href="#experience">Experience</a>
        </nav>
        <div class="nav-controls">
          <button id="theme-toggle" class="icon-btn" type="button" aria-label="Toggle dark mode">
            <span class="fa fa-moon-o" aria-hidden="true"></span>
            <span class="fa fa-sun-o" aria-hidden="true"></span>
          </button>
          <button id="nav-toggle" class="nav-toggle" type="button" aria-label="Toggle menu" aria-expanded="false" aria-controls="nav-links">
            <span></span>
          </button>
        </div>
      </div>
    </header>

    <div class="app-shell" id="top">
      <aside class="sidebar">
        <?php include("sections/header.html"); ?>
        <?php include("sections/contact.html"); ?>
        <?php include("sections/skill-box.html"); ?>
        <?php include("sections/languages.html"); ?>
        <?php include("sections/hobbies.html"); ?>
      </aside>

      <main class="main-content" id="main">
        <section class="section reveal" id="about">
          <div class="section-head"><span class="tag">01</span><h2>About Me</h2></div>
          <?php include("sections/about-me.html"); ?>
          <?php include("sections/writer.html"); ?>
        </section>

        <section class="section reveal" id="timeline">
          <div class="section-head"><span class="tag">02</span><h2>Timeline</h2></div>
          <?php include("sections/education.html"); ?>
        </section>

        <section class="section reveal" id="portfolio">
          <div class="section-head"><span class="tag">03</span><h2>Portfolio</h2></div>

          <div class="portfolio-grid">
            <?php include("sections/portfolio/magrathea-php2.html"); ?>
            <?php include("sections/portfolio/guia-lol.html"); ?>
          </div>
        </section>

        <section class="section reveal" id="experience">
          <div class="section-head"><span class="tag">04</span><h2>Experience</h2></div>

          <div class="job-list">
            <?php include("sections/experience/toptal.html"); ?>
            <?php include("sections/experience/platypus.html"); ?>
            <?php include("sections/experience/botecaria.html"); ?>
            <?php include("sections/experience/baires.html"); ?>
            <?php include("sections/experience/alpar.html"); ?>
            <?php include("sections/experience/savedo.html"); ?>
            <?php include("sections/experience/element-wave.html"); ?>
            <?php include("sections/experience/aprimo.html"); ?>
            <?php include("sections/experience/easypay.html"); ?>
            <?php include("sections/experience/labone.html"); ?>
            <?php include("sections/experience/ewti.html"); ?>
          </div>
        </section>
      </main>
    </div>

    <footer class="site-footer">
      &copy; <?php echo date("Y"); ?> Paulo Henrique Martins — built with HTML, CSS &amp; vanilla JS.
      <br><a href="docs/cv_paulo.pdf">Download CV (PDF)</a>
    </footer>

    <dialog id="lightbox">
      <div class="lightbox-frame">
        <img src="" alt="">
        <div class="lightbox-controls">
          <button type="button" class="lightbox-prev" aria-label="Previous image"><span class="fa fa-chevron-left"></span></button>
          <button type="button" class="lightbox-next" aria-label="Next image"><span class="fa fa-chevron-right"></span></button>
        </div>
        <button type="button" class="lightbox-close" aria-label="Close"><span class="fa fa-times"></span></button>
      </div>
    </dialog>

    <div id="toast" role="status" aria-live="polite"></div>

    <button id="back-to-top" type="button" aria-label="Back to top">
      <span class="fa fa-arrow-up"></span>
    </button>

    <script src="js/scripts.js"></script>
  </body>
</html>
