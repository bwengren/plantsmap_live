<div class="rows">
  <div class="small-12 columns">
    <?php if (!empty($title)): ?>
      <h3><?php print $title; ?></h3>
    <?php endif; ?>

    <ul id="tiles">
      <li>
        <div class="promo-box" style="padding-bottom:0px">
          <h3 class="white text-center">Browse Plants, Gardens and Organizations</h3>
          <div>
            <a class="button expand" href="/explore/gardens">Explore Gardens</a>
            <!-- <a class="button expand" href="/explore/collections">Explore Collections</a> -->
            <a class="button expand" href="/explore/plants">Explore Plants</a>
            <a class="button expand" href="/explore/organizations">Explore Organizations</a>
            <!-- <a class="button expand" href="/explore">Explore Everything</a> -->
          </div>
        </div>
      </li>
      <?php foreach ($rows as $id => $row): ?>
        <li<?php if ($classes_array[$id]) { print ' class="' . $classes_array[$id] .'"';  } ?>>
          <?php print $row; ?>
        </li>
      <?php endforeach; ?>
    </ul>

  </div>
</div>

  <script src="/sites/all/themes/plantsmap_custom/js/jquery.imagesloaded.js"></script>
  <script src="/sites/all/themes/plantsmap_custom/js/jquery.wookmark.min.js"></script>

  <style>
/**
 * Grid container
 */
#tiles {
  list-style-type: none;
  position: relative; /** Needed to ensure items are laid out relative to this container **/
  margin: 0;
  padding: 0;
}

/**
 * Grid items
 */
#tiles li {
  width: 200px;
  background-color: #ffffff;
  /*border: 1px solid #DAD9D1;*/
  box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.05);
  display: none; /** Hide items initially to avoid a flicker effect **/
  cursor: pointer;
  padding: 0;
}

#tiles li.inactive {
  visibility: hidden;
  opacity: 0;
}

#tiles li img {
  display: block;
}

/**
 * Grid item text
 */
#tiles li p {
  font-size: 13px;
  line-height: 20px;
  font-weight: 200;
  margin: 7px 0 2px 7px;
}
  </style>
  <script type="text/javascript">
    (function ($){
      $('#tiles').imagesLoaded(function() {
        // Prepare layout options.
        var options = {
          itemWidth: 200, // Optional min width of a grid item
          autoResize: true, // This will auto-update the layout when the browser window is resized.
          container: $('#tiles'), // Optional, used for some extra CSS styling
          offset: 15, // Optional, the distance between grid items
          outerOffset: 20, // Optional the distance from grid to parent
          flexibleWidth: '47%', // Optional, the maximum width of a grid item
          fillEmptySpace: true
        };

        // Get a reference to your grid items.
        var handler = $('#tiles li');

        var $window = $(window);
        $window.resize(function() {
          var windowWidth = $window.width(),
              newOptions = { flexibleWidth: '50%' };

          // Breakpoint
          if (windowWidth < 1024) {
            newOptions.flexibleWidth = '100%';
          }

          handler.wookmark(newOptions);
        });

        // Call the layout function.
        handler.wookmark(options);
      });
    })(jQuery);
  </script>