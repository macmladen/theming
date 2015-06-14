<?php
 // print_r($variables['theme_hook_suggestions']);
 ?>

<?php if( theme_get_setting('mothership_poorthemers_helper') ){ ?>
<!--tpl: /ds_layouts/mothership_2col/mothership-2colpredefine.tpl.php -->
<?php } ?>

<div class="lr-2col <?php if ($classes){ print $classes ;} ?>">

  <?php if (isset($title_suffix['contextual_links'])): ?>
  <?php print render($title_suffix['contextual_links']); ?>
  <?php endif; ?>

  <?php if ($top) : ?>
    <<?php print $top_wrapper ?> <?php if($top_classes){ print 'class="'. trim($top_classes) .'"';} ?>>
      <?php print $top; ?>
    </<?php print $top_wrapper ?>>
  <?php endif ?>


  <?php if ($main) : ?>
    <div class="l-main <?php if($main_classes){ print  trim($main_classes) ;} ?>">
      <?php print $main; ?>
    </div>
  <?php endif ?>

  <?php if ($main_nowrapper) : ?>
    <?php print $main_nowrapper; ?>
  <?php endif ?>

  <?php if ($sidebar) : ?>
    <aside class="l-sidebar <?php if($sidebar_classes){ print trim($sidebar_classes) ;} ?>">
      <?php print $sidebar; ?>
    </aside>
  <?php endif ?>


  <?php if ($bottom) : ?>
    <div class="l-bottom <?php if($bottom_classes){ print trim($bottom_classes);} ?>">

      <?php print $bottom; ?>

      <?php if (!empty($drupal_render_children)): ?>
        <?php print $drupal_render_children ?>
      <?php endif; ?>
    </div>


  <?php endif; ?>

</<?php print $layout_wrapper ?>>


<?php if( theme_get_setting('mothership_poorthemers_helper') ){ ?>
<!--tpl: /ds_layouts/mothership_2col/mothership-2col.tpl.php  -->
<?php } ?>
