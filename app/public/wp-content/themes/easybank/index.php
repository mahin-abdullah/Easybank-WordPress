<?php get_header(); ?>

<div class="hero">
      <div class="container__hero row">
        <div class="hero__wrapper">
          <div class="hero__img">
            <img src="<?php echo get_theme_file_uri('/images/image-mockups.png'); ?>" alt="Intro" />
          </div>
        </div>

        <div class="hero__content">
          <h1>Next generation<span></span> digital banking</h1>
          <p>
            Take your financial life online. Your Easybank account will be a
            one-stop-shop for spending, saving, budgeting, investing, and much
            more.
          </p>

          <div class="hero__cta">
            <a class="btn" href="#">Request Invite</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Services -->
    <div class="services">
      <div class="container">
        <div class="services__intro">
          <h2>Why choose Easybank?</h2>
          <p>
            We leverage Open Banking to turn your bank account into your
            financial hub.<span></span>Control your finances like never before.
          </p>
        </div>

        <div class="row__lg">
          <div class="col">
            <div class="services__img">
              <img src="<?php echo get_theme_file_uri('/images/icon-online.svg'); ?>" alt="banking" />
            </div>
            <h5>Online Banking</h5>
            <p>
              Our modern web and mobile applications allow you to keep track of
              your finances wherever you are in the world.
            </p>
          </div>

          <div class="col">
            <div class="services__img">
              <img src="<?php echo get_theme_file_uri('/images/icon-budgeting.svg'); ?>" alt="budgeting" />
            </div>
            <h5>Simple Budgeting</h5>
            <p>
              See exactly where your money goes each month. Receive
              notifications when you're close to your hitting limits.
            </p>
          </div>

          <div class="col">
            <div class="services__img">
              <img src="<?php echo get_theme_file_uri('/images/icon-onboarding.svg'); ?>" alt="onboarding" />
            </div>
            <h5>Fast Onboarding</h5>
            <p>
              We don't do branches. Open your account in minutes online and
              start taking control of your finances right away.
            </p>
          </div>

          <div class="col">
            <div class="services__img">
              <img src="<?php echo get_theme_file_uri('/images/icon-api.svg'); ?>" alt="api" />
            </div>
            <h5>Open API</h5>
            <p>
              Manage your savings, investments, pension, and much more from one
              account. Tracking your money has never been easier.
            </p>
          </div>
        </div>
      </div>
    </div>

    <!-- Articles Section -->

    <div class="articles">
      <div class="articles__intro">
        <h2>Latest Articles</h2>
      </div>
      <div class="container grid row__card">
        <div class="card one">
          <img
            class="card__img"
            src="<?php echo get_theme_file_uri('/images/image-currency.jpg'); ?>"
            alt="image-currency" 
          />
          <p class="author">
            By Claire Robinson
          </p>
          <p class="card__title">Receive money in any currency with no fees</p>
          <p class="card__content">
            The world is getting smaller and we're becoming more mobile. So why
            should you be forced to only receive money in a single..
          </p>
        </div>

        <div class="card two">
          <img
            class="card__img"
            src="<?php echo get_theme_file_uri('/images/image-restaurant.jpg'); ?>"
            alt="image-currency"
          />
          <p class="author">
            By Wilson Huton
          </p>
          <p class="card__title">Treat yourself without worrying about money</p>
          <p class="card__content">
            Our simple budgeting feature allows you to separate out your
            spending and set realistic limits each month. That means you..
          </p>
        </div>

        <div class="card three">
          <img
            class="card__img"
            src="<?php echo get_theme_file_uri('/images/image-plane.jpg'); ?>"
            alt="image-currency" 
          />
          <p class="author">
            By Wilton Hutton
          </p>
          <p class="card__title">Take your Easybank card wherever you go</p>
          <p class="card__content">
            We want you to enjoy your travels. This is why we don't charge any
            fees on purchases while you re abroad. We'll even show you..
          </p>
        </div>

        <div class="card four">
          <img
            class="card__img"
            src="<?php echo get_theme_file_uri('/images/image-confetti.jpg'); ?>"
            alt="image-currency" 
          />
          <p class="author">
            By Claire Robinson
          </p>
          <p class="card__title">Our invite-only Beta accounts are now live!</p>
          <p class="card__content">
            After a lot of hard work by the whole team, we're excited to launch
            our closed beta. It's easy to request an invite through the site..
          </p>
        </div>
      </div>
    </div>

<?php get_footer(); ?>