# Theming experiments

Theming experiments in search for HTML 5 and responsive excellence in Drupal 7 theming, it may be useful to anyone wishing to explore theming aspects in most popular and newest Drupal themes.

## CAVEAT

> **Shell scripts must be changed** with your own data like user names, directory names and passwords in order to be useful.

> **Nothing here is _fool proof_** and nothing is supposed to be _user friendly_ as this is [developers](https://youtu.be/I14b-C67EXY?t=1m24s) testing repository and as such, assumes basic knowledge of setting up Drupal website and testing by using command line.

This is intended to be tested on local machine with local web server environment so if you are still here you know what to do.

In case something puzzles you, feel free to ask.

## Installing

Just clone the repository the usual way, make `/drupal_root` accessible as *docroot* for your web server.

*Recommended* way to install is `drush` way *but please* change anything in curly brackets `{` and `}` with your own data, these are _dummies_ and *that does not work!*

```shell
# drush install the site
drush si standard \
  --db-su={db_user_to_create_db} \
  --db-su-pw={db_pass_to_create_db} \
  --db-url=mysql://{db_user}:{db_pass}@localhost/{db_name} \
  --account-mail={mail_user}@{domain.com} \
  --account-name={drupal_user} \
  --account-pass={drupal_pass} \
  --site-mail={drupal_site}@{domain.com} \
  --site-name="{Your_site_name}" \
  install_configure_form.site_default_country={cc}
```

This installation may not go well and you may need to repeat same command (first may just made the **db** and fail to proceed claiming that there is no db for it. The **same** next run should go just fine).

After Drupal is operational (first check by opening in browser), you need few more modules for themes that are dependent on them. Also, in order to build themes from the base themes, drush requires those themes to be enabled first. Then they may (and I would say should) be disabled so we end up only with enabled themes that are going to be tested.

```
# Let it be world writable
chmod -R 777 drupal_root/sites/default/files

# Get rid of toolbar and into Adminimal
drush -r drupal_root/ en -y adminimal_admin_menu

# Activate all needed modules for themes
drush -r drupal_root/ en -y libraries html5_tools elements jquery_update magic

# Useful for some further style testing
#drush -r drupal_root/ en -y styleguide styleguide_palette
```

## Testing

First we need some content. To lessen the hassle, lets just have `drush` do that for us, shall we?

```
# Generate test content, 20 pages, 20 articles
drush -r drupal_root/ en -y devel_generate
drush -r drupal_root/ generate-content 20 --types=page
drush -r drupal_root/ generate-content 20 --types=article
```

Included shell script changes theme and saves resulting HTML to target directory. However it *must be* adapted in order to work, it is not done foolproof, it does not ask for any input and only goes over themes added in the `ALLTHEMES` array.

It will set the theme, save front page as HTML to theme named file in target directory and then it will **pause** so you can reload in browser and make screenshot (On Mac CMD+SHIFT+4, [SPACE], then click on browser to select and dump screen).

I activate Firefox built in **Inspection** and choose **performance** to get HTML / CSS / JS sizes. You may also use **YSlow** to analyse even further but I suspect that results will be quite similar unless you also making some other alteration to code generation by using some modules like **AdvAgg** or change server options. You already have everything at yours disposal so knock yourself out :)

You just execute it by

```
./testing-themes.sh
```

Changing theme from drush:

```shell
drush vset theme_default {theme_machine_name}
```

You may need `drush cc all`
