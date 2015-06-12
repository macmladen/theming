<?php
/**
 * @file
 * page layout with header & footer markup
 */
?>

<?php if (theme_get_setting('mothership_poorthemers_helper')) { ?>
  <!-- tpl:  mothership-html5page.tpl.php -->
<?php } ?>

<?php
/* Use Drupals basic markup for the backend  */
if (arg(0) == "admin") {
  ?>

  <div
    class="panel-2col-stacked clearfix panel-display" <?php if (!empty($css_id)) {
    print "id=\"$css_id\"";
  } ?>>

    <?php if ($content['top']): ?>
      <div class="panel-panel panel-col-100">
        <div class="inside"><?php print $content['top']; ?></div>
      </div>
    <?php endif; ?>

    <?php if ($content['main']): ?>
      <div class="panel-panel panel-col-100">
        <div class="inside"><?php print $content['main']; ?></div>
      </div>
    <?php endif; ?>

    <?php if ($content['bottom']): ?>
      <div class="panel-panel panel-col-100">
        <div class="inside"><?php print $content['bottom']; ?></div>
      </div>
    <?php endif; ?>

  </div>

<?php
}
else {
  /*  and a clean mean markup for the frontend w*/
  ?>
  <div class="l-container" <?php if (!empty($css_id)) {
    print "id=\"$css_id\"";
  } ?>>

    <header role="banner">
      <?php print $content['top']; ?>
    </header>

    <main role="main" id="main-content">

      <?php print $content['main']; ?>
    </main>

    <footer role="contentinfo">
      <?php print $content['bottom']; ?>
    </footer>
  </div>
<?php } ?>

<?php if (theme_get_setting('mothership_poorthemers_helper')) { ?>
  <!-- / tpl:  mothership-html5page.tpl.php -->
<?php } ?>
