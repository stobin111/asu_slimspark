<?php dpm($variables, "variables"); ?>

<!-- custom page template -->
<header id="header">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <?php if (!empty($page['header'])): ?>
          <?php print render($page['header']); ?>
        <?php endif; ?>
          <h1 class="header__sitename"><a href="/" title="Home" rel="home"><span><?php print render($variables['site_name']); ?></span></a></h1>
      </div>
    </div>
  </div>
</header>
<div class="navmenu">
    <div class="container">
        <?php if (!empty($page['navigation'])): ?>
            <?php print render($page['navigation']); ?>
        <?php endif; ?>
    </div>
</div>
<div class="container-fluid">
  <div class="row">
    <section class="">
      <?php print render($page['content']); ?>
    </section>
  </div>
</div>
<footer class="footer">
    <div class="container">
      <?php print render($page['footer']); ?>
    </div>
</footer>
