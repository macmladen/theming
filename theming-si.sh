# Install command - fails? run again
drush -r drupal_root si standard \
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
drush en -y libraries html5_tools elements jquery_update magic

# Useful for some further style testing
#drush en -y styleguide styleguide_palette

# Generate test content, 20 pages, 20 articles
drush en -y devel_generate
drush generate-content 20 --types=page
drush generate-content 20 --types=article
