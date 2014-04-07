<div id="auth_box" class="register">
  <div id="top_part">
    <h1 id="the_logo">
      <img src="<?php print $logo; ?>" alt="<?php print $site_name; ?>">
    </h1>
  </div>

  <div id="middle_part">
    <h4 class="title"><?php print $title; ?></h4>

    <?php print $messages; ?>
    
    <?php print render($page['content']); ?>
  </div>

  <div id="bottom_part">
    <div class="login_link">
      <a href="/user/Login" class="button expand">Sign in</a>
    </div>

    <div class="password_link">
      <a href="/user/password" class="button expand">Forgot your password?</a>
    </div>

    <div class="back_link">
      <a href="<?php print url('<front>'); ?>">&larr; Return to <?php print $site_name; ?></a>
    </div>
  </div>
</div>
