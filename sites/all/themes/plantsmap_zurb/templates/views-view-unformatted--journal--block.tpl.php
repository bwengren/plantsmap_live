<section class="about spaced">
  <div class="row">
  <?php foreach ($rows as $id => $row): ?>
  <div<?php if ($classes_array[$id]) { print ' class="' . $classes_array[$id] .'"';  } ?>>
    <?php print $row; ?>
  </div>
  <hr class="show-for-small">
  <?php endforeach; ?>
  </div>
</section>