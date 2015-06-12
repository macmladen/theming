#!/bin/bash
PATH=/Users/mladen/Sites/drush/:$PATH
# Testing themes by setting and then downloading resulting html of home page


## Testing Drupal themes
# Testing Bartik
drush -r ../theming.loc vset theme_default bartik
curl -Ls http://theming.loc > theme_html/bartik.html
read -n 1

# Testing Seven
drush -r ../theming.loc vset theme_default seven
curl -Ls http://theming.loc > theme_html/seven.html
read -n 1

# Testing Stark
drush -r ../theming.loc vset theme_default stark
curl -Ls http://theming.loc > theme_html/stark.html
read -n 1

# Testing Responsive_bartik
drush -r ../theming.loc vset theme_default responsive_bartik
curl -Ls http://theming.loc > theme_html/responsive_bartik.html
read -n 1


## Testing first class
# Testing Adaptive_cat
drush -r ../theming.loc vset theme_default adaptive_cat
curl -Ls http://theming.loc > theme_html/adaptive_cat.html
read -n 1

# Testing Boot_cat
drush -r ../theming.loc vset theme_default boot_cat
curl -Ls http://theming.loc > theme_html/boot_cat.html
read -n 1

# Testing Omega_cat
drush -r ../theming.loc vset theme_default omega_cat
curl -Ls http://theming.loc > theme_html/omega_cat.html
read -n 1

# Testing Omega_ohm
drush -r ../theming.loc vset theme_default omega_ohm
curl -Ls http://theming.loc > theme_html/omega_ohm.html
read -n 1

# Testing Radix_default
drush -r ../theming.loc vset theme_default radix_default
curl -Ls http://theming.loc > theme_html/radix_default.html
read -n 1

# Testing Radix_simplex
drush -r ../theming.loc vset theme_default radix_simplex
curl -Ls http://theming.loc > theme_html/radix_simplex.html
read -n 1

# Testing Radix_spacelab
drush -r ../theming.loc vset theme_default radix_spacelab
curl -Ls http://theming.loc > theme_html/radix_spacelab.html
read -n 1

# Testing Zen_cat
drush -r ../theming.loc vset theme_default zen_cat
curl -Ls http://theming.loc > theme_html/zen_cat.html
read -n 1


## Testing others
# Testing aurora_cat
drush -r ../theming.loc vset theme_default aurora_cat
curl -Ls http://theming.loc > theme_html/aurora_cat.html
read -n 1

# Testing boiler_cat
drush -r ../theming.loc vset theme_default boiler-cat
curl -Ls http://theming.loc > theme_html/boiler-cat.html
read -n 1

# Testing boron
drush -r ../theming.loc vset theme_default boron
curl -Ls http://theming.loc > theme_html/boron.html
read -n 1

# Testing om_cat
drush -r ../theming.loc vset theme_default om_cat
curl -Ls http://theming.loc > theme_html/om_cat.html
read -n 1

# Testing sassoncat
drush -r ../theming.loc vset theme_default sassoncat
curl -Ls http://theming.loc > theme_html/sassoncat.html
read -n 1


## Testing new themes
# Testing bootstrap_clean_blog
drush -r ../theming.loc vset theme_default bootstrap_clean_blog
curl -Ls http://theming.loc > theme_html/bootstrap_clean_blog.html
read -n 1

# Testing business_responsive_theme
drush -r ../theming.loc vset theme_default business_responsive_theme
curl -Ls http://theming.loc > theme_html/business_responsive_theme.html
read -n 1

# Testing da_vinci
drush -r ../theming.loc vset theme_default da_vinci
curl -Ls http://theming.loc > theme_html/da_vinci.html
read -n 1

# Testing simpleclean
drush -r ../theming.loc vset theme_default simpleclean
curl -Ls http://theming.loc > theme_html/simpleclean.html
read -n 1

# Testing titon
drush -r ../theming.loc vset theme_default titon
curl -Ls http://theming.loc > theme_html/titon.html
read -n 1

# Testing zeropoint
drush -r ../theming.loc vset theme_default zeropoint
curl -Ls http://theming.loc > theme_html/zeropoint.html
read -n 1


## Testing new base
# Testing bassline_cat
drush -r ../theming.loc vset theme_default bassline_cat
curl -Ls http://theming.loc > theme_html/bassline_cat.html
read -n 1

# Testing gesso_cat
drush -r ../theming.loc vset theme_default gesso_cat
curl -Ls http://theming.loc > theme_html/gesso_cat.html
read -n 1

# Testing cat
drush -r ../theming.loc vset theme_default ground-cat
curl -Ls http://theming.loc > theme_html/ground-cat.html
read -n 1

# Testing kala_cat
drush -r ../theming.loc vset theme_default kala_cat
curl -Ls http://theming.loc > theme_html/kala_cat.html
read -n 1
