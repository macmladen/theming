<?php if( theme_get_setting('mothership_poorthemers_helper') ){ ?>
<!--tpl: /ds_layouts/mothership_2col/mothership-2col.tpl.php  -->
<?php } ?>

<<?php print $layout_wrapper; print $layout_attributes; ?> <?php if ($classes){ print 'class="'. $classes .'"';} ?>>

  <?php if (isset($title_suffix['contextual_links'])): ?>
  <?php print render($title_suffix['contextual_links']); ?>
  <?php endif; ?>

  <?php if ($top) : ?>
    <<?php print $top_wrapper ?> <?php if($top_classes){ print 'class="'. trim($top_classes) .'"';} ?>>
      <?php print $top; ?>
    </<?php print $top_wrapper ?>>
  <?php endif ?>


  <?php if ($main) : ?>
    <<?php print $main_wrapper ?> <?php if($main_classes){ print 'class="'. trim($main_classes) .'"';} ?>>
      <?php print $main; ?>
    </<?php print $main_wrapper ?>>
  <?php endif ?>

  <?php if ($main_nowrapper) : ?>
    <?php print $main_nowrapper; ?>
  <?php endif ?>

  <?php if ($sidebar) : ?>
    <<?php print $sidebar_wrapper ?> <?php if($sidebar_classes){ print 'class="'. trim($sidebar_classes) .'"';} ?>>
      <?php print $sidebar; ?>
    </<?php print $sidebar_wrapper ?>>
  <?php endif ?>


  <?php if ($bottom) : ?>
    <<?php print $bottom_wrapper ?> <?php if($bottom_classes){ print 'class="'. trim($bottom_classes) .'"';} ?>">
    bottom
      <?php print $bottom; ?>
    </<?php print $bottom_wrapper ?>>
  <?php endif; ?>

</<?php print $layout_wrapper ?>>

<?php if (!empty($drupal_render_children)): ?>
  <?php print $drupal_render_children ?>
<?php endif; ?>

<?php if( theme_get_setting('mothership_poorthemers_helper') ){ ?>
<!--tpl: /ds_layouts/mothership_2col/mothership-2col.tpl.php  -->
<?php } ?>
