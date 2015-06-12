<?php

$vars['arctica_attr_link'] = "";
if (!theme_get_setting('remove_attribution_link') && $vars['is_front']) {
  $vars['arctica_attr_link'] = '<p class="arctica-attr-link">' . arctica_attribution_link() . '</p>';
}

// Unlike built-in $main_menu variable, this supports nested menus
if ($vars['main_menu']) {
  $pid = variable_get('menu_main_links_source', 'main-menu');
  if (module_exists('i18n_menu')) {
    $tree = i18n_menu_translated_tree($pid);
  }
  else {
    $tree = menu_tree($pid);
  }
  $vars['main_menu_links'] = drupal_render($tree);
} else {
  $vars['main_menu_links'] =  FALSE;
}

$vars['secondary_menu_links'] = theme('links__system_secondary_menu',
  array(
    'links' => $vars['secondary_menu'],
    'attributes' => array(
      'id' => 'secondary-menu',
      'class' => array(
        'links', 'clearfix',
      ),
    ),
  )
);