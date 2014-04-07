<div id="auth_box" class="password">
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
      <a href="/user/login" class="button expand">Log in</a>
    </div>

    <?php if (variable_get('user_register')): ?>
    <div class="register_link">
      <a href="/user/register" class="button expand">Create an account</a>
    </div>
    <?php endif; ?>

    <div class="back_link">
      <a href="<?php print url('<front>'); ?>">&larr; Return to <?php print $site_name; ?></a>
    </div>
  </div>
</div>
