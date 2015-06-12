<?php
/*
mothership
instead of a div print an article for unformatted data

 */
?>
<?php if (theme_get_setting('mothership_poorthemers_helper')) { ?>
  <!--tpl: mothership/templates/views-view-unformatted.tpl.php -->
<?php } ?>

<?php if (!empty($title)): ?>
  <h3><?php print $title; ?></h3>
<?php endif; ?>

<?php foreach ($rows as $id => $row): ?>
  <article<?php if ($classes_array[$id]) { print ' class="' . $classes_array[$id] . '"'; } ?>>
    <?php print $row; ?>
  </article>
<?php endforeach; ?>


<?php if (theme_get_setting('mothership_poorthemers_helper')) { ?>
  <!--/ tpl: mothership/templates/views-view-unformatted.tpl.php -->
<?php } ?>

