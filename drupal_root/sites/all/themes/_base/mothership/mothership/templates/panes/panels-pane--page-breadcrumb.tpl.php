<?php
/*
@todo: clean up the mess that $content puts out
remove the div change it with a nav instead add in li tags etc.
 */
?>
<?php if (theme_get_setting('mothership_poorthemers_helper')) { ?>
  <!-- .tpl: panels-pane--page-breadcrumb.tpl.php -->
  <!--  path: <?php print (__FILE__) ?> -->
  <!--  Suggestions: -->
  <?php
  foreach ($theme_hook_suggestions as $key => $value) {
    print '<!--' . $value . '  --> ';
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

<?php if (!empty($css_class) OR !empty($css_id)){ ?>
<nav role="navigation" <?php print $css_class ?><?php print $css_id ?>>
  <?php } ?>

  <?php if ($admin_links): ?>
    <?php print $admin_links; ?>
  <?php endif; ?>

  <?php print render($content); ?>

  <?php if ($links): ?>
    <div class="links">
      <?php print $links; ?>
    </div>
  <?php endif; ?>


  <?php if (!empty($css_class) OR !empty($css_id)){ ?>
</nav>
<?php } ?>

<?php if ($pane_suffix): ?>
  <?php print $pane_suffix; ?>
<?php endif; ?>
<?php if (theme_get_setting('mothership_poorthemers_helper')) { ?>
  <!-- / tpl: panels-pane--page-breadcrumb.tpl.php -->
<?php } ?>
