<?php if (theme_get_setting('mothership_poorthemers_helper')) { ?>
  <!-- panels-pane--menu_tree--main-menu.tpl.php -->
  <!--  path: <?php print (__FILE__) ?> -->
  <!--  them hook Suggestions: -->
  <?php
  foreach ($theme_hook_suggestions as $key => $value) {
    print '<!--  ' . $value . '  --> ';
  }
  ?>
<?php } ?>

<?php if ($pane_prefix): ?>
  <?php print $pane_prefix; ?>
<?php endif; ?>


<?php
if (!empty($pane->css['css_class'])) {
  $css_class = 'class="' . $pane->css['css_class'] . '"';
}
else {
  $css_class = "";
}
if (!empty($pane->css['css_id'])) {
  $css_id = 'id="' . $pane->css['css_id'] . '"';
}
else {
  $css_id = "";
}
?>
<nav role="navigation" <?php print $css_class ?><?php print $css_id ?>>
  <?php // print $classes; ?>

  <?php if ($admin_links): ?>
    <?php print $admin_links; ?>
  <?php endif; ?>

  <?php print render($title_prefix); ?>
  <?php if ($title): ?>
    <h2<?php print $title_attributes; ?>><?php print $title; ?></h2>
  <?php endif; ?>
  <?php print render($title_suffix); ?>

  <?php print render($content); ?>

</nav>

<?php if ($pane_suffix): ?>
  <?php print $pane_suffix; ?>
<?php endif; ?>


<?php if (theme_get_setting('mothership_poorthemers_helper')) { ?>
  <!-- / panels-pane--menu_tree--main-menu.tpl.php -->
<?php } ?>
