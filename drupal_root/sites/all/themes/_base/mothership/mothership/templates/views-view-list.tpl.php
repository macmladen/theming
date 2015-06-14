<?php
/*
mothership:
only prints out the class="" if theres a class for it

 */
?>
<?php if (theme_get_setting('mothership_poorthemers_helper')) { ?>
  <!--tpl: mothership/templates/views-view-list.tpl.php -->
<?php } ?>

<?php print $wrapper_prefix; ?>
<?php if (!empty($title)) : ?>
  <h3><?php print $title; ?></h3>
<?php endif; ?>
<?php print $list_type_prefix; ?>

<?php foreach ($rows as $id => $row): ?>

  <?php if (!empty($classes_array[$id])): ?>
    <li class="<?php print $classes_array[$id]; ?>"><?php print $row; ?></li>
  <?php else: ?>
    <li><?php print $row; ?></li>
  <?php endif; ?>

<?php endforeach; ?>

<?php print $list_type_suffix; ?>
<?php print $wrapper_suffix; ?>

<?php if (theme_get_setting('mothership_poorthemers_helper')) { ?>
  <!--/ tpl: mothership/templates/views-view-list.tpl.php -->
<?php } ?>

