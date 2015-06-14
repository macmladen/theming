<?php
function ds_mothership_2colpredefine() {
  return array(
    'label' => t('Mothership: 2 col markup'),
    'regions' => array(
      'top' => t('top'),
      'main' => t('main'),
      'main_nowrapper' => t('main nowrapper'),
      'sidebar' => t('sidebar'),
      'bottom' => t('bottom'),
    ),
//  'css' => TRUE,
    'image' => TRUE,
  );
}
