<header id="header-full" class="header hide-for-small" role="banner">

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

    <div class="small-4 columns">
      <?php if ($logo): ?>
      <div class="logo pull-left site-logo">
        <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home">
          <img src="<?php print $logo; ?>" alt="<?php print $site_name; ?>" />
        </a>
      </div>
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
              <a href="/user">
                <span class="icon-lock"></span>
                <br/>login
              </a>
              <?php } ?>
          </div>
        </div>

      </nav>
    </div><!-- outer wrap small-4 -->

  </div>
</header>

<header class="top-bar show-for-small cf">
  <ul class="title-area">
    <li >
      <div class="left micro-logo">
        <img src="http://plantsmap.com/sites/default/files/pm-logo-mini.png">
      </div>
      <h3 class="white">
        <a href="/" class="white">Plants Map</a>
      </h3>
    </li>
    <li class="toggle-topbar menu-icon">
      <a href="#"></a>
    </li>
  </ul>
</header>

<div class="top-bar-section" style="display:none">
<ul class="">
  <li>
    <a href="/explore">
      <span class="icon-search"></span>
      explore
    </a>
  </li>
  <li>
    <a href="/map">
      <span class="icon-location"></span>
      map
    </a>
  </li>
  <li>
    <a href="/journal">
      <span class="icon-book"></span>
      journal
    </a>
  </li>
  <li>
    <a href="/about">
      <span class="icon-question"></span>
      about
    </a>
  </li>
  <li>
    <?php if (user_is_logged_in()) { ?>
      <a href="/user/logout">
        <span class="icon-lock"></span>logout
      </a>
      <?php } ?>
    <?php if (!user_is_logged_in()) { ?>
      <a href="/user">
        <span class="icon-lock"></span>login
      </a>
      <?php } ?>
  </li>
</ul>
</div>

<?php if ($messages) { ?>
<div id="console" class="cf">
  <div class="msg alert-box alert">
    <div class="row">
      <div class="small-12 columns">
        <?php print $messages; ?>
      </div>
    </div>
  </div>
</div>
<?php } ?>


<?php if ($page['header']): ?>
  <?php print render($page['header']); ?>
<?php endif; ?>

<?php if (($main_menu) || ($page['search_box'])): ?>
<div id="main-menu" class="clearfix site-main-menu">
  <div class="container">
    <div class="navbar">
      <?php if ($main_menu): ?>
      <div class="navbar-inner">
        <div class="container">
          <?php endif; ?>
          <?php if ($page['search_box']): ?>
          <!-- <div id="nav-search" class="nav-search"> <?php print render($page['search_box']); ?> </div> -->
          <?php endif; ?>
          <?php if ($main_menu): ?>
          <!-- <a class="btn btn-navbar collapsed" data-toggle="collapse" data-target=".nav-collapse"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </a> -->
          <?php if ($primary_nav || !empty($page['navigation'])): ?>
          <div class="nav-collapse collapse">
            <nav id="main-nav" role="navigation">
              <?php if (($primary_nav) && empty($page['navigation'])): ?>
              <?php print render($primary_nav); ?>

              <?php endif; ?>
              <?php if (!empty($page['navigation'])): ?>
              <?php print render($page['navigation']); ?>
              <?php endif; ?>
            </nav>
          </div>
          <?php endif; ?>
          <?php endif; ?>
          <?php if ($main_menu): ?>
        </div>
      </div>
      <?php endif; ?>
    </div>
  </div>
</div>
<!-- /#main-menu -->
<?php endif; ?>


<section class="pitch title">
  <div class="row">
    <div class="small-10 small-centered columns text-center">
      <?php print render($title_prefix); ?>
      <?php if ($title): ?>
      <h1 class="title white large" id="page-title"> <?php print $title; ?> </h1>
      <?php endif; ?>
      <?php print render($title_suffix); ?>
    </div>
  </div>
</section>

<?php if ((($user->uid) && ($page['admin_shortcuts'])) || (($user->uid) && ($secondary_nav))): ?>
<div id="admin-shortcuts" class="admin-shortcuts clearfix">
  <?php print render($secondary_nav); ?> <?php print render($page['admin_shortcuts']); ?>
</div>
<?php endif; ?>
<!-- /#admin-shortcuts -->

<div id="main" class="cf main" role="main">
  <!-- new layout -->

    <?php if ($page['main_top']): ?>
    <div class="row">
      <div class="small-12-columns"> <?php print render($page['main_top']); ?> </div>
    </div>
    <?php endif; ?>

    <div class="row">

      <?php if ($page['sidebar_first']): ?>
        <div id="sidebar-first" class="sidebar large-3 columns">
          <?php print render($page['sidebar_first']); ?>
        </div>
        <!-- /#sidebar-first -->
      <?php endif; ?>

      <div id="content" class="<?php if (($page['sidebar_first']) && ($page['sidebar_second'])): print 'medium-6 columns'; elseif (($page['sidebar_first']) || ($page['sidebar_second'])): print 'large-9 columns'; else: print 'small-12 columns'; endif; ?>">
        <?php if (isset($tabs['#primary'][0]) || isset($tabs['#secondary'][0])): ?>
          <?php print render($tabs); ?>
        <?php endif; ?>
        <?php print render($page['content']); ?>
      </div>

      <?php if ($page['sidebar_second']): ?>
      <div id="sidebar-second" class="sidebar large-3 columns site-sidebar-second">
        <?php print render($page['sidebar_second']); ?>
      </div>
      <?php endif; ?>
      <!-- /#sidebar-second -->
  </div>

</div>
<!-- /#main, /#main-wrapper -->

<?php if ($page['main_lower']): ?>
  <?php print render($page['main_lower']); ?>
<?php endif; ?>
<?php if ($page['main_bottom']): ?>
  <?php print render($page['main_bottom']); ?>
<?php endif; ?>

<?php if ((($user->uid) && ($page['admin_shortcuts'])) || (($user->uid) && ($secondary_nav))): ?>
<div class="admin-shortcuts clearfix">
  <?php print render($secondary_nav); ?> <?php print render($page['admin_shortcuts']); ?>
</div>
<?php endif; ?>
<!-- /#admin-shortcuts -->


<section class="social">
  <div class="row">
    <div class="small-12 columns text-center">
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
  </div>
</section>

<footer>
  <div class="row">
    <div id="footer-content" class="small-12 columns footer-content">
      &copy; Copyrighted <?php echo date("Y"); ?> <?php print $site_name; ?>
      <?php print render($page['footer']); ?>
    </div>
  </div>
</footer>
<!-- /#footer -->
