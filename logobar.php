  <div class="container">
      <div class="logo">
        <a href="<?php echo get_site_url(); ?>">
          <?php $logo = get_field('logo', 5); ?>
          <?php $sublogo = get_field('sublogo', 5) ?>
          <img src="<?php echo $logo['url']; ?>" alt="HJC Logo">
          <img class="middle" src="<?php echo $sublogo['url']; ?>" alt="leadership + innovation for the non profit sector">
        </a>
      </div>

      <div class="hamburger">
        <button tabindex="0" href="#" id="nav-icon3">
          <span></span>
          <span></span>
          <span></span>
          <span></span>
        </button>
      </div>
    </div>