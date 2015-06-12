<?php if (theme_get_setting('mothership_poorthemers_helper')) { ?>
  <!-- TPL: panels-pane-views.tpl (panels-pane-<?php print $pane->type ?> -- <?php print $pane->subtype ?>)  -->
<?php } ?>



<?php if ($admin_links): ?>
  <?php print $admin_links; ?>
<?php endif; ?>

<?php if ($title): ?>
  <h2><?php print $title; ?></h2>
<?php endif; ?>

<?php print render($content); ?>


<?php if (theme_get_setting('mothership_poorthemers_helper')) { ?>
  <!-- /tpl panels-pane-views.tpl (panels-pane-<?php print $pane->type ?>-<?php print $pane->subtype ?>)  -->
<?php } ?>

