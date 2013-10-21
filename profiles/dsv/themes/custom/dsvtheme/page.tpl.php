<?php
//kpr($theme_hook_suggestions);
//template naming
//page--[CONTENT TYPE].tpl.php
?>
<?php if( theme_get_setting('mothership_poorthemers_helper') ){ ?>
<!--page.tpl.php-->
<?php } ?>

<?php print $mothership_poorthemers_helper; ?>

<div id="container">

  <?php if ($page['top_links_left']): ?>
    <div id="top-links-left" class="top-links">
      <?php print render($page['top_links_left']); ?>
    </div>
  <?php endif; ?>

  <?php if ($page['top_links_right']): ?>
    <div id="top-links-right" class="top-links">
      <?php print render($page['top_links_right']); ?>
    </div>
  <?php endif; ?>

  <div id="head">

    <div class="clear-float"></div>
    <a href="http://dsv.su.se">
      <img src="<?php print $base_path . $directory; ?>/img/logo_dsv_se_small_dark_blue.png" class="dsv_logotype"/>
    </a>
    <a href="http://www.su.se">
      <img src="<?php print $base_path . $directory; ?>/img/logo_su_se_big_dark_blue.gif" class="su_logotype"/>
    </a>

    <?php if ($main_menu): ?>
    <div id="main-menu" class="navigation">
      <?php print theme('links__system_main_menu', array(
        'links' => $main_menu,
        'attributes' => array(
          'id' => 'main-menu-links',
          'class' => array('links', 'clearfix'),
        ),
        'heading' => array(
          'text' => t('Main menu'),
          'level' => 'h2',
          'class' => array('element-invisible'),
        ),
      )); ?>

    </div>
      <?php endif; ?>
  </div>

  <div id="breadcrumbs">
    <?php print $breadcrumb; ?> » <?php print $title; ?>

    <?php if ($action_links): ?>
      <ul class="action-links"><?php print render($action_links); ?></ul>
    <?php endif; ?>
  </div>
  <div id="content">
    <?php if ($page['highlights']): ?>
      <div class="highlights">
        <?php print render($page['highlights']); ?>
      </div>
    <?php endif; ?>

    <?php if ($page['sidebar_first']): ?>
      <div id="sidebar-first">
        <?php print render($page['sidebar_first']); ?>
      </div>
    <?php endif; ?>

    <div id="main-content">

      <?php if ($page['content_middle_top']): ?>
        <div id="content-middle-top">
          <?php print render($page['content_middle_top']); ?>
        </div>
      <?php endif; ?>

      <?php print render($title_prefix); ?>
      <?php if ($title): ?>
        <h1><?php print $title; ?></h1>
      <?php endif; ?>
      <?php print render($title_suffix); ?>

      <?php print render($page['content_pre']); ?>
      <?php print render($page['content']); ?>
      <?php print render($page['content_post']); ?>
    </div>
    <?php if ($page['sidebar_second']): ?>
      <div id="sidebar-second">
       <?php print render($page['sidebar_second']); ?>
      </div>
    <?php endif; ?>
  </div>

  <div id="footer" class="footer">
    <div class="footer-profile">
      <span class="profile-info" style="display: block;"><br /></span>
    </div>
    <div class="footer-top"></div>
    <div class="clear-float"></div>
    <div class="footer-left">
      <address><b>Institutionen f&ouml;r data- och systemvetenskap, DSV</b><br/>
          Stockholms universitet, DSV, Forum 100, 164 40 Kista | Telefon: <a href="tel:08162000">08-16 20 00</a>
      </address>
    </div>

    <?php if ($page['footer_links']): ?>
      <div class="footer-right">
        <?php print render($page['footer_links']); ?>
      </div>
    <?php endif; ?>

    <div class="clear-float"></div>
    <div class="footer-bottom"></div>
  </div>
</div>

<!--

<header role="banner">
  <div class="siteinfo">
    <?php if ($logo): ?>
      <figure>
      <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home">
        <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
      </a>
      </figure>
    <?php endif; ?>

    <?php if($site_name OR $site_slogan ): ?>
    <hgroup>
      <?php if($site_name): ?>
        <h1><?php print $site_name; ?></h1>
      <?php endif; ?>
      <?php if ($site_slogan): ?>
        <h2><?php print $site_slogan; ?></h2>
      <?php endif; ?>
    </hgroup>
    <?php endif; ?>
  </div>

  <?php if($page['header']): ?>
    <div class="header-region">
      <?php print render($page['header']); ?>
    </div>
  <?php endif; ?>

</header>

<div class="page">

  <div role="main" id="#main-content">
    <?php print render($title_prefix); ?>
    <?php if ($title): ?>
      <h1><?php print $title; ?></h1>
    <?php endif; ?>
    <?php print render($title_suffix); ?>

    <?php print $breadcrumb; ?>

    <?php if ($action_links): ?>
      <ul class="action-links"><?php print render($action_links); ?></ul>
    <?php endif; ?>

    <?php if (isset($tabs['#primary'][0]) || isset($tabs['#secondary'][0])): ?>
      <nav class="tabs"><?php print render($tabs); ?></nav>
    <?php endif; ?>

    <?php if($page['highlighted'] OR $messages){ ?>
      <div class="drupal-messages">
      <?php print render($page['highlighted']); ?>
      <?php print $messages; ?>
      </div>
    <?php } ?>
  </div>
</div>
<footer role="contentinfo">
  <?php print render($page['footer']); ?>
</footer>
-->
