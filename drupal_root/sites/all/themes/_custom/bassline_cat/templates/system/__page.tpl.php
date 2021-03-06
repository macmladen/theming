<?php

/**
 * @file
 * Default theme implementation to display a single Drupal page.
 */

?>

<header>
  <div class="container">
    <?php if ($logo): ?>
      <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
        <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>"/>
      </a>
    <?php endif; ?>

    <?php if ($site_name || $site_slogan): ?>
      <div id="name-and-slogan">
        <?php if ($site_name): ?>
          <?php if ($title): ?>
            <div id="site-name"><strong>
              <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>"
                 rel="home"><span><?php print $site_name; ?></span></a>
            </strong></div>
          <?php else: /* Use h1 when the content title is empty */ ?>
            <h1 id="site-name">
              <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>"
                 rel="home"><span><?php print $site_name; ?></span></a>
            </h1>
          <?php endif; ?>
        <?php endif; ?>

        <?php if ($site_slogan): ?>
          <div id="site-slogan"><?php print $site_slogan; ?></div>
        <?php endif; ?>
      </div>
    <?php endif; ?>

    <?php print render($page['header']); ?>
  </div>
</header>

<?php if ($main_menu): ?>
  <nav>
    <?php print theme('links__system_main_menu', array(
      'links' => $main_menu,
      'attributes' => array(
        'id' => 'main-menu',
        'class' => array('links', 'inline', 'clearfix')),
      'heading' => t('Main menu')
    )); ?>
  </nav>
<?php endif; ?>

<?php if ($breadcrumb): ?>
  <div id="breadcrumb" class="container">
    <?php print $breadcrumb; ?>
  </div>
<?php endif; ?>

<?php print $messages; ?>

<div class="container">
  <div class="row">
    <?php if (!empty($page['sidebar_first'])) : ?>
      <div class="col-sm-3 sidebar-first">
        <?php print render($page['sidebar_first']); ?>
      </div>
    <?php endif; ?>

    <main id="content" role="main" class="<?php print $content_column_class; ?>clearfix">
      <?php print render($title_prefix); ?>
      <?php if ($title): ?>
        <h1 class="title" id="page-title"><?php print $title; ?></h1>
      <?php endif; ?>
      <?php print render($title_suffix); ?>

      <?php if ($tabs): ?>
        <div class="tabs">
          <?php print render($tabs); ?>
        </div>
      <?php endif; ?>

      <?php print render($page['help']); ?>

      <?php if ($action_links): ?>
        <ul class="action-links">
          <?php print render($action_links); ?>
        </ul>
      <?php endif; ?>

      <?php print render($page['content']); ?>

      <?php print $feed_icons; ?>
    </main>
    <?php if (!empty($page['sidebar_second'])) : ?>
      <div class="col-sm-3 sidebar-second">
        <?php print render($page['sidebar_second']); ?>
      </div>
    <?php endif; ?>
  </div>
</div>

<?php if (!empty($page['footer'])) : ?>
  <footer>
    <div class="container">
      <?php print render($page['footer']); ?>
    </div>
  </footer>
<?php endif; ?>
