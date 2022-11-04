<?php get_header(); ?>

  <main>
    <section class="image-text">
      <img
        class="image-text__image"
        src="https://picsum.photos/600/350"
        alt="Random image from lorem picsum"
      >

      <div class="image-text__details">
        <?php $itTitle = "We are a social change charity, helping people to improve their lives through digital." ?>
        <h2 class="image-text__title title">
          <?php esc_html_e($itTitle, 'reason'); ?>
        </h2>

        <?php $itText = "We tackle the most pressing issues of our time, working with partners in thousands of communities across the UK and futher afield." ?>
        <p class="image-text__text">
          <?php esc_html_e($itText, 'reason'); ?>
        </p>

        <a class="image-text__cta btn" href="#">
          <?php esc_html_e('Learn more about us', 'reason'); ?>
        </a>
      </div>
    </section>

    <section class="help">
      <div class="container">
      <?php $hTitle = "How can we help you?" ?>
        <h3 class="help__title title">
          <?php esc_html_e($hTitle, 'reason'); ?>
        </h3>

      <?php $hText = "Let us know who you are and what you're looking for, and we'll help get you to the right place." ?>
        <p class="help__introduction">
          <?php esc_html_e($hText, 'reason'); ?>
        </p>

        <div class="help__box">
          <?php
            echo sprintf(
              esc_html__('I am %s', 'reason'),
              '<a class="help__link" href="#">' .
              esc_html__('an individual', 'reason') . 
              '</a>'
            );

            echo sprintf(
              esc_html__('and I %s', 'reason'),
              '<a class="help__link" href="#">' .
              esc_html__('want to learn', 'reason') . 
              '</a>'
            )
          ?>
          <a href="#" class="help__link btn">
            <?php esc_html_e('Start now', 'reason'); ?>
          </a>
        </div>
      </div>
    </section>

    <section class="what">
      <div class="container">
      <?php $hTitle = "What do we do?" ?>
        <h3 class="what__title title">
          <?php esc_html_e($hTitle, 'reason'); ?>
        </h3>

      <?php $hText = "Let us know who you are and what you're looking for, and we'll help get you to the right place." ?>
        <p class="what__introduction">
          <?php esc_html_e($hText, 'reason'); ?>
        </p>

        <div class="what__grid">
          <div class="what__item">
            <h4 class="what__subtitle">
              <?php esc_html_e('Get online week', 'reason'); ?>
            </h4>

            <div class="what__text">
              <?php esc_html_e('Lorem ipsum dolor sit amet', 'reason'); ?>
            </div>

            <a class="what__link btn" href="#">
              <?php esc_html_e('Read more', 'reason'); ?>
            </a>
          </div>

          <div class="what__item">
            <h4 class="what__subtitle">
              <?php esc_html_e('Learn my way', 'reason'); ?>
            </h4>

            <div class="what__text">
              <?php esc_html_e('Lorem ipsum dolor sit amet', 'reason'); ?>
            </div>

            <a class="what__link btn" href="#">
              <?php esc_html_e('Read more', 'reason'); ?>
            </a>
          </div>

          <div class="what__item">
            <h4 class="what__subtitle">
              <?php esc_html_e('Make it click', 'reason'); ?>
            </h4>
        
            <div class="what__text">
              <?php esc_html_e('Lorem ipsum dolor sit amet', 'reason'); ?>
            </div>

            <a class="what__link btn" href="#">
              <?php esc_html_e('Read more', 'reason'); ?>
            </a>
          </div>

          <div class="what__item">
            <h4 class="what__subtitle">
              <?php esc_html_e('Digital you', 'reason'); ?>
            </h4>
            
            <div class="what__text">
              <?php esc_html_e('Lorem ipsum dolor sit amet', 'reason'); ?>
            </div>

            <a class="what__link btn" href="#">
              <?php esc_html_e('Read more', 'reason'); ?>
            </a>
          </div>
        </div>

        <a class="what__link btn" href="#">
          <?php esc_html_e('More about what we do', 'reason'); ?>
        </a>
      </div>
    </section>
  </main>

<?php
get_footer();
