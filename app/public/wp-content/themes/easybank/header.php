<!DOCTYPE html>
<html lang="en">
<head>
  <?php wp_head(); ?>
</head>
<body>
  
<header>
      <div class="container">
        <nav>
          <div class="logo">
            <img src="<?php echo get_theme_file_uri('/images/logo.svg'); ?>" alt="Logo of Easybank" />
          </div>

          <input type="checkbox" id="nav-toggle" class="nav-toggle" />
          <div class="nav__list">
            <ul class="nav__list--flex">
              <li class="nav__item"><a class="nav__link" href="<?php echo site_url(); ?>">Home</a></li>
              <li class="nav__item"><a class="nav__link" href="#">About</a></li>
              <li class="nav__item">
                <a class="nav__link" href="#">Contact</a>
              </li>
              <li class="nav__item"><a class="nav__link" href="#">Blog</a></li>
              <li class="nav__item">
                <a class="nav__link" href="#">Careers</a>
              </li>
            </ul>
          </div>

          <div class="nav__item nav__item--btn">
            <a class="nav__link btn" href="#">Request Invite</a>
          </div>

          <label for="nav-toggle" class="nav-toggle-label">
            <span></span>
          </label>
        </nav>
      </div>
    </header>