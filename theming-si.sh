# Install command - fails? run again
drush -r drupal_root/ si standard \
  --db-su=lokalni \
  --db-su-pw=lokalni \
  --db-url=mysql://lokalni:lokalni@localhost/theming \
  --account-mail=theming_buk@bluefish.rs \
  --account-name=admin \
  --account-pass=plavac \
  --site-mail=theming_buk@bluefish.rs \
  --site-name="Theming testing" \
  install_configure_form.site_default_country=RS

# Let it be world writable
chmod -R 777 drupal_root/sites/default/files

# Get rid of toolbar and into Adminimal
drush -r drupal_root/ en -y adminimal_admin_menu

# Activate all needed modules for themes
drush -r drupal_root/ en -y libraries html5_tools elements jquery_update magic

# Useful for some further style testing
#drush -r drupal_root/ en -y styleguide styleguide_palette

# Generate test content, 20 pages, 20 articles
drush -r drupal_root/ en -y devel_generate
drush -r drupal_root/ generate-content 20 --types=page
drush -r drupal_root/ generate-content 20 --types=article


# Activate all needed modules for themes
drush -r drupal_root/ en -y \
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
drush -r drupal_root/ en -y \
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

# Activate all needed modules for themes
drush -r drupal_root/ en -y \
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