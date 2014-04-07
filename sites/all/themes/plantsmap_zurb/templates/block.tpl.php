<div id="<?php print $block_html_id; ?>" class="clearfix <?php print $classes; ?>"<?php print $attributes; ?>> <?php print render($title_prefix); ?>
  <?php if ($block->subject): ?>
  <h2 class="block-title" <?php print $title_attributes; ?>><?php print $block->subject ?></h2>
  <?php endif;?>
  <?php print render($title_suffix); ?>
  <div class="content"<?php print $content_attributes; ?>> <?php print $content ?> </div>
</div>