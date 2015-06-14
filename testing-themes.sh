#!/bin/bash
# put your path to drush here:
PATH=/Users/mladen/Sites/drush/:$PATH

# Testing themes by setting and then downloading resulting html of home page
#
# The themes got into this testing by first claiming to be HTML 5 and then by 
# popularity and recent entries. Feel free to suggest some other for inclusion.
#
# Themes are divided into three groups:
#   - Drupal system (including Responsive Bartik) as a reference point
#   - Themes made from base themes but just bare made
#   - Other standalone themes which could be a good start
#
# TODO:
# - auto fill ALL_THEMES
# - some other testing method like behat?

DRUPAL_ROOT=drupal_root
DRUPAL_SITE=theming.loc
TEST_HTML=test_theme_html
ALLTHEMES=(
  "bartik"
  "seven"
  "stark"
  "responsive_bartik"

  "adaptive_cat"
  "aurora_cat"
  "bassline_cat"
  "boiler-cat"
  "boot_cat"
  "boron"
  "gesso_cat"
  "ground-cat"
  "kala_cat"
  "om_cat"
  "omega_cat"
  "omega_ohm"
  "radix_default"
  "radix_simplex"
  "radix_spacelab"
  "sassoncat"
  "zen_cat"

  "bootstrap_clean_blog"
  "business_responsive_theme"
  "da_vinci"
  "simpleclean"
  "titon"
  "zeropoint"
)

## Testing Drupal themes
for THEME in "${ALLTHEMES[@]}"; do
  drush -r ${DRUPAL_ROOT} vset theme_default "${THEME}"
  curl -Ls http://${DRUPAL_SITE} > ${TEST_HTML}/"${THEME}".html
  # This pauses so you can reload page in browser and inspect performance
  # -p "Press [SPACE] to continue"
  read -n 1
done
