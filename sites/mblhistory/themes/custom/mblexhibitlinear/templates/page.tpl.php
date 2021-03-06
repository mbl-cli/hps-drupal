<?php
/**
 * @file
 * Returns the HTML for a single Drupal page.
 *
 * Zen documentation for this file is available online.
 * @see https://drupal.org/node/1728148
 *
 */
?>
<div class="page">
  <div class="header-navigation swimlane">
    <div class="bucket header-navigation__bucket">
      <header class="header<?php if ($logo) print " with-logo"; ?>" id="header" role="banner">
        <?php if ($logo || $site_name): ?>
          <div class="header__brand">
            <?php if ($logo): ?>
              <a href="<?php print $front_page; ?>" title="<?php print t('Go to home page.'); ?>" rel="home" class="header__logo" id="logo"><img src="<?php print $logo; ?>" alt="<?php $site_name ? print "{$site_name}" : print t('Home'); ?>" class="header__logo-image" /></a>
            <?php endif; ?>

            <?php if ($site_name): ?>
              <h1 class="header__site-name" id="site-name">
                <a href="<?php print $front_page; ?>" title="<?php print t('Go to home page.'); ?>" class="header__site-link" rel="home"><span><?php print $site_name; ?></span></a>
              </h1>
            <?php endif; ?>
          </div>
        <?php endif; ?>
      </header>

      <?php
        // @note $main_menu is turned off in theme settings. Instead we use
        //       a custom menu inside the navigation region, this allows
        //       expanded menu items for dropdown behaviour.
        print render($page['navigation']);
      ?>
    </div>
  </div>

  <div class="main" id="main" role="main">
    <?php // @see http://webaim.org/techniques/skipnav/#altorders ?>
    <a id="main-content"></a>
    <?php
      $highlighted = render($page['highlighted']);
      $actions = render($action_links);
      $tabs_menu = render($tabs);
      if ($highlighted || $breadcrumb || $title || $messages || $actions || $tabs_menu):
    ?>
      <header class="main__header swimlane" id="main-header">
        <div class="bucket main__header__bucket">
          <div class="main__header__panel--ish">
            <?php print $highlighted; ?>
            <?php print $breadcrumb; ?>
            <?php print render($title_prefix); ?>
            <?php if ($title): ?>
              <h1 class="page__title title" id="page-title"><?php print $title; ?></h1>
            <?php endif; ?>
            <?php print render($title_suffix); ?>
            <?php print $messages; ?>
            <?php print render($page['help']); ?>
            <?php if ($actions): ?>
              <ul class="action-links"><?php print $actions; ?></ul>
            <?php endif; ?>
            <?php print $tabs_menu; ?>
          </div>
        </div>
      </header>
    <?php endif; ?>

    <div class="main__content swimlane--ish main__content__bucket--ish" id="content">
      <div class="main__content__panel--ish">
        <?php print render($page['content']); ?>
        <?php print $feed_icons; ?>
      </div>
    </div>

  </div>

  <?php print render($page['bottom']); ?>
  <?php print render($page['footer']); ?>
</div>
