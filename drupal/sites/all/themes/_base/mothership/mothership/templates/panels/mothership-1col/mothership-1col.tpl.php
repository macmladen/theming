<?php
/**
 * @file
 * page layout with header & footer markup
 */
?>

<?php if (theme_get_setting('mothership_poorthemers_helper')) { ?>
  <!-- tpl: templates/panels/mothership-1colstacked/mothership-1colstacked.tpl.php -->
<?php } ?>

<?php
/* Use Drupals basic markup for the backend  */
if (arg(0) == "admin") {
  ?>

  <div class="panel-display" <?php if (!empty($css_id)) {
    print "id=\"$css_id\"";
  } ?>>

    <div class="panel-panel panel-col-100">
      <div class="inside"><?php print $content['main1']; ?></div>
    </div>

  </div>


<?php
}
else {
  /*  and a clean mean markup for the frontend w*/
  ?>

  <article class="lr-1col" <?php if (!empty($css_id)) {
    print "id=\"$css_id\"";
  } ?>>

    <?php if (!empty($variables['display']->title)) { ?>
      <header>
        <h2><?php print $variables['display']->title; ?></h2>
      </header>
    <?php } ?>

    <?php if ($content['main1']): ?>
      <div class="l-main"><?php print $content['main1']; ?></div>
    <?php endif; ?>


  </article>
<?php } ?>

<?php if (theme_get_setting('mothership_poorthemers_helper')) { ?>
  <!-- tpl: templates/panels/mothership-1colstacked/mothership-1colstacked.tpl.php -->
<?php } ?>


