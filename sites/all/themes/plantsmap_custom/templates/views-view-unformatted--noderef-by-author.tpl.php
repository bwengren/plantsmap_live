<?php if (!empty($title)): ?>
  <h3><?php print $title; ?></h3>
<?php endif; ?>
<h5></h5>
<div class="row">
  <div class="small-12 columns">
    <ul class="small-block-grid-2 medium-block-grid-4 large-block-grid-6 columns">
      <li>
        <div class="panel">
          <div class="promo-box">
          <h4 class="text-center">
            <span class="white"><?php print $view->get_title() ?></span>
          </h4>
          </div>
        </div>
      </li>
      <?php foreach ($rows as $id => $row): ?>
        <li<?php if ($classes_array[$id]) { print ' class="' . $classes_array[$id] .'"';  } ?>>
          <div class="panel">
            <?php print $row; ?>
          </div>
        </li>
      <?php endforeach; ?>
    </ul>
  </div>
</div>