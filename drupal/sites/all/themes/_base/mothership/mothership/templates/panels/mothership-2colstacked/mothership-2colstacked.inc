<?php

// Plugin definition
$plugin = array(
  'title' => t('mothership 2 column stacked'),
  'category' => t('Mothership'),
  'icon' => 'mothership-2colstacked.png',
  'theme' => 'mothership-2colstacked',
  'css' => 'mothership-2colstacked.admin.css',
  'regions' => array(
    'top' => t('<div class="l-top">'),
    'main1' => t('<div class="l-main">'),
    'main2' => t('<aside class="l-sidebar">'),
    'bottom' => t('Bottom <div class="l-bottom">')
  ),
);
