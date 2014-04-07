<div id="auth_box" class="login">
  <div id="top_part">
    <h1 id="the_logo">
      <img src="<?php print $logo; ?>" alt="<?php print $site_name; ?>">
    </h1>
  </div>

  <div id="middle_part">
    <h4 class="title"><?php print $title; ?></h4>

    <?php print $messages; ?>
    
    <?php if (module_exists('hybridauth') && !user_is_logged_in()) {
          $element['#type'] = 'hybridauth_widget';
          print drupal_render($element);
        }
        ?>    
    <?php print render($page['content']); ?>

  </div>

  <div id="bottom_part" style="margin:20px 0 ">
    <div class="password_link">
      <a href="/user/password" class="button expand">Forgot your password?</a>
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
