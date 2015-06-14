<?php
/**
 * @file
 * page layout with header & footer markup
 */
?>

<?php if (theme_get_setting('mothership_poorthemers_helper')) { ?>
  <!-- tpl: templates/panels/mothership-2colstacked/mothership-2colstacked.tpl.php -->
<?php } ?>

<?php
/* Use Drupals basic markup for the backend  */
if (arg(0) == "admin") {
  ?>

  <div class="panel-display" <?php if (!empty($css_id)) {
    print "id=\"$css_id\"";
  } ?>>

    <div class="panel-panel panel-col-100">
      <div class="inside"><?php print $content['top']; ?></div>
    </div>


    <div class="panel-panel panel-col-100">
      <div class="panel-panel panel-col-75">
        <div class="inside"><?php print $content['main1']; ?></div>
      </div>
      <div class="panel-panel panel-col-25">
        <div class="inside"><?php print $content['main2']; ?></div>
      </div>

    </div>

    <div class="panel-panel panel-col-100">
      <div class="inside"><?php print $content['bottom']; ?></div>
    </div>

  </div>

  </div>


<?php
}
else {
  /*  and a clean mean markup for the frontend w*/
  ?>

  <article class="lr-2col" <?php if (!empty($css_id)) {
    print "id=\"$css_id\"";
  } ?>>

    <?php if (!empty($variables['display']->title)) { ?>
      <header>
        <h2><?php print $variables['display']->title; ?></h2>
      </header>
    <?php } ?>

    <?php if ($content['top']): ?>
      <div class="l-top"><?php print $content['top']; ?></div>
    <?php endif; ?>

    <?php if ($content['main1']): ?>
      <div class="l-main"><?php print $content['main1']; ?></div>
    <?php endif; ?>

    <?php if ($content['main2']): ?>
      <aside class="l-sidebar"><?php print $content['main2']; ?></aside>
    <?php endif; ?>


    <?php if ($content['bottom']): ?>
      <div class="l-bottom"><?php print $content['bottom']; ?></div>
    <?php endif; ?>


  </article>
<?php } ?>

<?php if (theme_get_setting('mothership_poorthemers_helper')) { ?>
  <!-- tpl: templates/panels/mothership-2colstacked/mothership-2colstacked.tpl.php -->
<?php } ?>


