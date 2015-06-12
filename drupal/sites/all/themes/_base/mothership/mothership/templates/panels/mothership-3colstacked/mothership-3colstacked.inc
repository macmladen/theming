<?php

// Plugin definition
$plugin = array(
  'title' => t('mothership 3 column stacked'),
  'category' => t('Mothership'),
  'icon' => 'mothership-3colstacked.png',
  'theme' => 'mothership-3colstacked',
  'css' => 'mothership-3colstacked.admin.css',
  'regions' => array(
    'top' => t('.l-top'),
    'main1' => t('Main 1 <div> .l-main'),
    'main2' => t('<aside> .l-sidebar'),
    'main3' => t('<aside> .l-sidebar2'),
    'bottom' => t('<div> .l-bottom')
  ),
);
