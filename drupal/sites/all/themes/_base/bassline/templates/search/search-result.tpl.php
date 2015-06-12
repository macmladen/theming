<?php

/**
 * @file
 * Template file for individual search result.
 */

?>

<article>
  <?php print render($title_prefix); ?>
  <h3><a href="<?php print $url; ?>"><?php print $title; ?></a></h3>
  <?php print render($title_suffix); ?>
    <?php if ($snippet): ?>
      <p><?php print $snippet; ?></p>
    <?php endif; ?>
   <?php if ($info): ?>
     <footer><?php print $info; ?></footer>
  <?php endif; ?>
</article>
