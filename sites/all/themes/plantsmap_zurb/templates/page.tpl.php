<!--.page -->
<div role="document" class="page">

<!--.l-header region -->
<header role="banner" class="l-header">

  <?php if ($top_bar): ?>
    <!--.top-bar -->
    <?php if ($top_bar_classes): ?>
    <div class="<?php print $top_bar_classes; ?>">
    <?php endif; ?>
      <nav class="top-bar"<?php print $top_bar_options; ?>>
        <ul class="title-area show-for-small">
          <li class="name">
            <div class="left micro-logo">
              <img src="http://plantsmap.com/sites/default/files/pm-logo-mini.png">
            </div>
            <h1><?php print $linked_site_name; ?></h1>
          </li>
          <li class="toggle-topbar menu-icon">
            <a href="#">
              <span><?php print $top_bar_menu_text; ?></span>
            </a>
          </li>
        </ul>
        <section class="top-bar-section">
          <?php if ($top_bar_main_menu) :?>
            <div class="show-for-small">
            <?php print $top_bar_main_menu; ?>
            </div>
          <?php endif; ?>
          <?php if ($top_bar_secondary_menu) :?>
            <?php if (user_is_logged_in()) { ?>
              <?php print $top_bar_secondary_menu; ?>
              <?php } ?>
          <?php endif; ?>
        </section>
      </nav>
    <?php if ($top_bar_classes): ?>
    </div>
    <?php endif; ?>
    <!--/.top-bar -->
  <?php endif; ?>

</header>
<!--/.l-header -->

<header class="hide-for-small header main-nav" role="banner">

  <div class="row">

    <div class="small-4 columns text-center">
      <nav class="row">
        <div class="small-4 columns">
          <div class="top-nav">
            <a href="/explore">
              <span class="icon-search"></span>
              <br/>explore
            </a>
          </div>
        </div>
        <div class="small-4 columns">
          <div class="top-nav">
            <a href="/map">
              <span class="icon-location"></span>
              <br/>map
            </a>
          </div>
        </div>
        <div class="small-4 columns">
          <div class="top-nav">
              <span class="icon-leaf"></span>
              <br/>discover
            </div>
          </div>
      </nav>
    </div><!-- outer wrap small-4 -->

    <div class="small-4 columns text-center">
      <?php if ($logo): ?>
        <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home">
          <img class="logo" src="<?php print $logo; ?>" alt="<?php print $site_name; ?>" />
        </a>
      <?php endif; ?>
      <!-- /#logo -->
    </div>

    <div class="small-4 columns text-center">
      <nav class="row">
        <div class="small-4 columns">
          <div class="top-nav">
            <a href="/journal">
            <span class="icon-book"></span>
            <br/>journal</a>
          </div>
        </div>

        <div class="small-4 columns">
          <div class="top-nav">
          <a href="/about">
            <span class="icon-question"></span>
            <br/>about</a>
          </div>
        </div>

        <div class="small-4 columns">
          <div class="top-nav">
            <?php if (user_is_logged_in()) { ?>
              <a href="/user/logout">
                <span class="icon-lock"></span>
                <br/>logout
              </a>
              <?php } ?>
            <?php if (!user_is_logged_in()) { ?>
              <a href="/sign-in">
                <span class="icon-lock"></span>
                <br/>sign in
              </a>
              <?php } ?>
          </div>
        </div>

      </nav>
    </div><!-- outer wrap small-4 -->

  </div>
</header>

<?php if ($messages && !$zurb_foundation_messages_modal): ?>
  <!--/.l-messages -->
  <div class="l-messages text-center">
    <div class="large-12 columns">
      <?php if ($messages): print $messages; endif; ?>
    </div>
  </div>
  <!--/.l-messages -->
<?php endif; ?>

<?php if (!empty($page['header'])): ?>
  <?php print render($page['header']); ?>
<?php endif; ?>

  <?php if (!empty($page['featured'])): ?>
    <!--/.featured -->
    <section class="l-featured row">
      <div class="large-12 columns">
        <?php print render($page['featured']); ?>
      </div>
    </section>
    <!--/.l-featured -->
  <?php endif; ?>

  <?php if (!empty($page['help'])): ?>
    <!--/.l-help -->
    <section class="l-help row">
      <div class="large-12 columns">
        <?php print render($page['help']); ?>
      </div>
    </section>
    <!--/.l-help -->
  <?php endif; ?>

  <!-- Page titles -->
  <?php if ($title && !$is_front): ?>
    <?php print render($title_prefix); ?>
    <section class="pitch title">
      <div class="row">
        <div class="small-12 columns text-center">
          <h1 id="page-title" class="title white large"><?php print $title; ?></h1>
        </div>
      </section>
      <?php print render($title_suffix); ?>
  <?php endif; ?>

  <div class="main">
    <main role="main" class="row">
      <div class="<?php print $main_grid; ?> columns">
        <?php if (!empty($page['highlighted'])): ?>
          <div class="highlight panel callout">
            <?php print render($page['highlighted']); ?>
          </div>
        <?php endif; ?>

        <a id="main-content"></a>

        <?php if (!empty($tabs)): ?>
          <?php print render($tabs); ?>
          <?php if (!empty($tabs2)): print render($tabs2); endif; ?>
        <?php endif; ?>

        <?php if ($action_links): ?>
          <ul class="action-links">
            <?php print render($action_links); ?>
          </ul>
        <?php endif; ?>

        <?php print render($page['content']); ?>
      </div>
      <!--/.main region -->

      <?php if (!empty($page['sidebar_first'])): ?>
        <aside role="complementary" class="<?php print $sidebar_first_grid; ?> sidebar-first columns sidebar">
          <?php print render($page['sidebar_first']); ?>
        </aside>
      <?php endif; ?>

      <?php if (!empty($page['sidebar_second'])): ?>
        <aside role="complementary" class="<?php print $sidebar_sec_grid; ?> sidebar-second columns sidebar">
          <?php print render($page['sidebar_second']); ?>
        </aside>
      <?php endif; ?>
    </main>
  </div>
  <!--/.main-->

  <?php if (!empty($page['triptych_first']) || !empty($page['triptych_middle']) || !empty($page['triptych_last'])): ?>
    <!--.triptych-->
    <section class="l-triptych row">
      <div class="triptych-first large-4 columns">
        <?php print render($page['triptych_first']); ?>
      </div>
      <div class="triptych-middle large-4 columns">
        <?php print render($page['triptych_middle']); ?>
      </div>
      <div class="triptych-last large-4 columns">
        <?php print render($page['triptych_last']); ?>
      </div>
    </section>
    <!--/.triptych -->
  <?php endif; ?>

  <?php if (!empty($page['footer_firstcolumn']) || !empty($page['footer_secondcolumn']) || !empty($page['footer_thirdcolumn']) || !empty($page['footer_fourthcolumn'])): ?>
    <!--.footer-columns -->
    <section class="row l-footer-columns">
      <?php if (!empty($page['footer_firstcolumn'])): ?>
        <div class="footer-first large-3 columns">
          <?php print render($page['footer_firstcolumn']); ?>
        </div>
      <?php endif; ?>
      <?php if (!empty($page['footer_secondcolumn'])): ?>
        <div class="footer-second large-3 columns">
          <?php print render($page['footer_secondcolumn']); ?>
        </div>
      <?php endif; ?>
      <?php if (!empty($page['footer_thirdcolumn'])): ?>
        <div class="footer-third large-3 columns">
          <?php print render($page['footer_thirdcolumn']); ?>
        </div>
      <?php endif; ?>
      <?php if (!empty($page['footer_fourthcolumn'])): ?>
        <div class="footer-fourth large-3 columns">
          <?php print render($page['footer_fourthcolumn']); ?>
        </div>
      <?php endif; ?>
    </section>
    <!--/.footer-columns-->
  <?php endif; ?>

  <!--.l-footer-->
  <footer role="contentinfo">
    <div class="row">
    <?php if (!empty($page['footer'])): ?>
      <div class="footer large-6 columns">
        <small><?php print render($page['footer']); ?></small>
      </div>
    <?php endif; ?>

    <?php if ($site_name) :?>
      <div class="copyright large-4 columns">
        <small>&copy; <?php print date('Y') . ' ' . check_plain($site_name) . ' ' . t('All rights reserved.'); ?></small><br/>
      </div>
      <div class="large-4 columns text-center">
        <small>Need help? Contact us <br/><a href="mailto:support@plantsmap.com">support@plantsmap.com</a></small>
      </div>
      <div class="large-4 columns text-right">
        <a href="https://www.facebook.com/plantsmap" target="_blank">
          <span class="icon-facebook fb"></span>
        </a>

        <a href="http://twitter.com/plantsmap" target="_blank">
          <span class="icon-twitter twitter"></span>
        </a>
        <a href="http://www.pinterest.com/plantsmap/" target="_blank">
          <span class="icon-pinterest pinned"></span>
        </a>
        <a href="http://google.com/+Plantsmap" rel="publisher" target="_blank">
          <span class="icon-google-plus google"></span>
        </a>
      </div>
    <?php endif; ?>
    </div>
  </footer>
  <!--/.footer-->

  <?php if ($messages && $zurb_foundation_messages_modal): print $messages; endif; ?>
</div>
<!--/.page -->
