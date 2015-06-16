#!/bin/sh
# Somewhat automated site install
# you may need to add drush to PATH
cd drupal_root/

# Install site command - fails? run again
drush si standard \
  --db-su=lokalni \
  --db-su-pw=lokalni \
  --db-url=mysql://lokalni:lokalni@localhost/theming \
  --account-mail=theming_buk@bluefish.rs \
  --account-name=admin \
  --account-pass=plavac \
  --site-mail=theming_buk@bluefish.rs \
  --site-name="Theming testing" \
  install_configure_form.site_default_country=RS

# Let files be world writable
chmod -R 777 drupal_root/sites/default/files

# Get rid of toolbar and into Adminimal
drush en -y adminimal_admin_menu

# Activate all needed modules for themes
drush en -y libraries html5_tools elements jquery_update magic
# Kalatheme
# Libraries API 2.1+
# Panels 3.3+
# Views 3.x
# JQuery Update 2.x (with JQuery version set to 1.7+)
# PHP 5.3+
# Optional but highly recommended: Panopoly Theme.
# Optional: Breakpoints
drush en -y panels breakpoints

# Useful for some further style testing
#drush en -y styleguide styleguide_palette


# Activate all base themes to be able to drush generate subthemes
# commenterd ones are NOT yet drush buildable
drush en -y \
  adaptivetheme \
  arctica \
  aurora \
  basic \
  bassline \
  boilerplate \
  bootstrap \
  boron \
  framework \
  gesso \
  groundwork \
  kalatheme \
  mothership \
  om \
  omega \
  radix \
  sasson \
  titon \
  tundra \
  zen

# Build drush subthemes

# Activate all starter themes
# Activate all contrib themes
drush en -y \
  bamboo \
  bootstrap_clean_blog \
  business \
  business_responsive_theme \
  corporateclean \
  da_vinci \
  gratis \
  html5_simplified \
  parrot \
  responsive_bartik \
  simpleclean \
  touchpro \
  zeropoint

# Activate all generated subthemes
drush en -y \
  adaptive_cat \
  aurora_cat \
  bassline_cat \
  boiler-cat \
  boot_cat \
  gesso_cat \
  ground-cat \
  kala_cat \
  om_cat \
  omega_cat \
  omega_ohm \
  radix_default \
  radix_simplex \
  radix_spacelab \
  sassoncat \
  zen_cat

# Deactivate base themesthat are not needed
drush en -y \
  adaptivetheme \
  arctica \
  aurora \
#  basic \
  bassline \
  boilerplate \
  bootstrap \
#  boron \
#  framework \
  gesso \
  groundwork \
  kalatheme \
  mothership \
  om \
  omega \
  radix \
  sasson \
#  titon \
  tundra \
  zen
