; Drush make file for custom modules and themes for the Embryo Project
; Encyclopedia

api = 2
core = 7.x

; Set projects defaults for modules and themes
defaults[projects][subdir] = "custom"

; Theme
projects[embryo][type] = theme
projects[embryo][download][type] = get
projects[embryo][download][url] = https://github.com/mbl-cli/hps-drupal/archive/2013.09.19.01.zip
projects[embryo][download][subtree] = hps-drupal-2013.09.19.01/sites/embryo/themes/custom/embryo

; Modules
projects[embryo_dspaced][type] = module
projects[embryo_dspaced][download][type] = get
projects[embryo_dspaced][download][url] = https://github.com/mbl-cli/hps-drupal/archive/2013.09.19.01.zip
projects[embryo_dspaced][download][subtree] = hps-drupal-2013.09.19.01/sites/embryo/modules/custom/embryo_dspaced

projects[embryo_redirect][type] = module
projects[embryo_redirect][download][type] = get
projects[embryo_redirect][download][url] = https://github.com/mbl-cli/hps-drupal/archive/2013.09.19.01.zip
projects[embryo_redirect][download][subtree] = hps-drupal-2013.09.19.01/sites/embryo/modules/custom/embryo_redirect
