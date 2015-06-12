# Theming experiments

Theming experiments in search for HTML 5 and responsive excellence in Drupal 7 theming, it may be useful to anyone wishing to explore theming aspects in most popular and newest Drupal themes.

## Installing

Just clone the repository the usual way, make `/drupal` accessible as *docroot* for your web server.

*Recommended* way to install is `drush` way *but please* change anything in curly brackets `{` and `}` with your own data, these are _dummies_ and *that does not work!*

```shell
drush si standard --db-url=mysql://{db_user}:{db_pass}@localhost/{db_name} --account-mail={mail_user}@{domain.com} --account-name={drupal_user} --account-pass={drupal_pass} --site-mail={drupal_site}@{domain.com} --site-name="{Your_site_name}" install_configure_form.site_default_country={cc}
```

## Testing

There is shell script that changes theme and downloads resulting HTML to some directory. However it *must be* adapted in order to work, it is not done foolproof.

Changing theme from drush:

```shell
drush vset theme_default {theme_machine_name}
```

You may need `drush cc all
