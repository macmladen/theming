<?php
// kpr($variables);
// kpr($variables['template_files']);
//  http://api.drupal.org/api/drupal/modules--block--block.tpl.php/7

if ($classes) {
  $classes = ' class="' . $classes . ' "';
}
?>

<?php if (theme_get_setting('mothership_poorthemers_helper')) { ?>
  <!-- .tpl: block--content.tpl.php -->
  <!--  path: <?php print (__FILE__) ?> -->
  <!--  Suggestions: -->
  <?php
  foreach ($theme_hook_suggestions as $key => $value) {
    print '<!--' . $value . '  --> ';
  }
  ?>
<?php } ?>

<?php print $mothership_poorthemers_helper; ?>

<?php print render($title_prefix); ?>
<?php if ($block->subject): ?>
  <h2<?php print $title_attributes; ?>><?php print $block->subject ?></h2>
<?php endif; ?>
<?php print render($title_suffix); ?>

<?php print $content ?>

<?php if (theme_get_setting('mothership_poorthemers_helper')) { ?>
  <!-- block--content.tpl.php -->
<?php } ?>
