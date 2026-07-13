<?php 
/**
 * Template Name: Home Page
 * 
 * @package MunwisTheme
 */

get_header(); 

// Fetch Customizer settings
$hero_kicker = get_theme_mod( 'munwis_hero_kicker', 'On-Call 24 Hours a Day, 7 Days a Week' );
$hero_title_main = get_theme_mod( 'munwis_hero_title_main', 'Compassion. Quality. ' );
$hero_title_accent = get_theme_mod( 'munwis_hero_title_accent', 'Trust.' );
$hero_lead = get_theme_mod( 'munwis_hero_lead', "Munwi's Care connects certified, reliable clinical professionals with hospitals, nursing environments, and private residential communities — whenever the need arises." );
$contact_phone = get_theme_mod( 'munwis_contact_phone', '(123) 456-7890' );
?>
  <!-- HERO SECTION -->
  <?php get_template_part( 'template-parts/home/hero' ); ?>

  <!-- PROMO CARDS (WITH SIGNATURE ARCH DESIGN) -->
  <?php get_template_part( 'template-parts/home/promo-cards' ); ?>

  <!-- ABOUT / NURSE-LED PROFILE -->
  <?php get_template_part( 'template-parts/home/about' ); ?>

  <!-- WHY TRUST US (CARDS FORMAT) -->
  <?php get_template_part( 'template-parts/home/why-us' ); ?>

  <!-- SERVICES (UPGRADED UNIQUE DESIGN) -->
  <section id="services" class="services-section">
    <div class="container">
      <div class="section-head center">
        <div class="eyebrow">Our Services</div>
        <h2>Staffing built around your setting</h2>
        <p>Delivering qualified, fully vetted, and patient-centered staffing models across local clinical channels.</p>
      </div>
      <div class="services-grid">
        <?php
        $services_query = new WP_Query( [
            'post_type'      => 'service',
            'posts_per_page' => 3,
            'orderby'        => 'menu_order title',
            'order'          => 'ASC',
        ] );

        if ( $services_query->have_posts() ) :
            while ( $services_query->have_posts() ) : $services_query->the_post();
                $img_url = get_the_post_thumbnail_url( get_the_ID(), 'large' );
                if ( ! $img_url ) {
                    // Fallback image if none uploaded
                    $img_url = 'https://images.unsplash.com/photo-1622253692010-333f2da6031d?auto=format&fit=crop&w=500&q=80';
                }
                ?>
                <div class="service-card">
                  <div class="img-wrap"><img src="<?php echo esc_url( $img_url ); ?>" alt="<?php echo esc_attr( get_the_title() ); ?>"></div>
                  <div class="service-card-body">
                    <h3><?php the_title(); ?></h3>
                    <p><?php echo wp_trim_words( get_the_excerpt() ? get_the_excerpt() : get_the_content(), 15 ); ?></p>
                    <a href="<?php the_permalink(); ?>">Learn more <i class="fa-solid fa-arrow-right"></i></a>
                  </div>
                </div>
                <?php
            endwhile;
            wp_reset_postdata();
        else :
            echo '<p>No services found. Please add services from the dashboard.</p>';
        endif;
        ?>
      </div>
    </div>
  </section>

  <!-- CALLOUT BAR -->
  <?php get_template_part( 'template-parts/callout-bar' ); ?>

  <!-- DEPEND SECTION -->
  <section class="depend-section">
    <div class="container depend-grid">
      <div class="depend-card">
        <div class="eyebrow">Reliability, built in</div>
        <h2>A reputation built on showing up.</h2>
        <p>Munwi's Care has built its reputation on our absolute commitment to supplying qualified care personnel. We
          work directly with facility administrators to support compliance ratios and never leave a shift uncovered.</p>
        <a href="#contact" class="btn btn-ghost">Talk to our team <i class="fa-solid fa-angle-right"></i></a>
      </div>
      <div class="depend-image">
        <div class="frame">
          <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/reliability.jpg' ); ?>"
            alt="Compassionate patient care coordination">
        </div>
      </div>
    </div>
  </section>

  <!-- PROCESS -->
  <section class="process-section">
    <div class="container">
      <div class="section-head center">
        <div class="eyebrow">How it works</div>
        <h2>From vacancy to placement, fast</h2>
      </div>
      <div class="process-grid">
        <div class="process-step">
          <div class="num">1</div>
          <h3>Tell us what you need</h3>
          <p>Share your facility's shift, specialty, and ratio requirements — anytime, day or night.</p>
        </div>
        <div class="process-step">
          <div class="num">2</div>
          <h3>We match &amp; verify</h3>
          <p>We match credentialed, registry-checked professionals to your exact requirements.</p>
        </div>
        <div class="process-step">
          <div class="num">3</div>
          <h3>Coverage confirmed</h3>
          <p>Your placement is confirmed and supported for the full length of the assignment.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- TESTIMONIALS -->
  <section class="testimonial-section">
    <div class="container">
      <div class="section-head center">
        <div class="eyebrow">Feedback from partners</div>
        <h2>Trusted by facilities like yours</h2>
      </div>
      <div class="swiper testimonial-swiper" style="padding-bottom: 50px; overflow: hidden; margin: 0 -15px; padding: 15px;">
        <div class="swiper-wrapper">
        <?php
        $testi_query = new WP_Query( [
            'post_type'      => 'testimonial',
            'posts_per_page' => -1,
            'orderby'        => 'date',
            'order'          => 'DESC',
        ] );

        if ( $testi_query->have_posts() ) :
            while ( $testi_query->have_posts() ) : $testi_query->the_post();
                $author_name = get_the_title();
                $initial = ! empty( $author_name ) ? substr( $author_name, 0, 1 ) : 'T';
                // Only use the manual excerpt so it doesn't auto-generate from the quote content
                $role = has_excerpt() ? get_the_excerpt() : '';
                ?>
                <div class="swiper-slide">
                  <div class="testimonial-card" style="height: 100%;">
                  <div class="stars">★★★★★</div>
                  <p class="quote"><?php echo wp_strip_all_tags( get_the_content() ); ?></p>
                  <div class="testimonial-author">
                    <div class="avatar"><?php echo esc_html( $initial ); ?></div>
                    <div><b><?php echo esc_html( $author_name ); ?></b>
                      <?php if ( $role ) : ?>
                      <span><?php echo esc_html( $role ); ?></span>
                      <?php endif; ?>
                    </div>
                  </div>
                  </div>
                </div>
                <?php
            endwhile;
            wp_reset_postdata();
        else :
            echo '<p>No testimonials found. Please add testimonials from the dashboard.</p>';
        endif;
        ?>
          </div>
        <div class="swiper-pagination" style="bottom: 0;"></div>
      </div>

      <script>
        document.addEventListener('DOMContentLoaded', function() {
          if (typeof Swiper !== 'undefined') {
            const swiperContainer = document.querySelector('.testimonial-swiper');
            const slideCount = swiperContainer ? swiperContainer.querySelectorAll('.swiper-slide').length : 0;
            
            new Swiper('.testimonial-swiper', {
              slidesPerView: 1,
              spaceBetween: 30,
              loop: slideCount > 3,
              autoplay: {
                delay: 4000,
                disableOnInteraction: false,
                pauseOnMouseEnter: true,
              },
              pagination: {
                el: '.swiper-pagination',
                clickable: true,
              },
              breakpoints: {
                768: {
                  slidesPerView: 2,
                },
                1024: {
                  slidesPerView: 3,
                }
              }
            });
          }
        });
      </script>
    </div>
  </section>

  <!-- WHERE WE WORK -->
  <section id="work" class="work-section">
    <div class="container work-grid">
      <div class="work-content">
        <div class="eyebrow">Where we work</div>
        <h2>Settings we staff every day</h2>
        <ul class="work-list">
          <li><i class="fa-solid fa-house"></i> Residential Homes</li>
          <li><i class="fa-solid fa-hospital"></i> Hospitals</li>
          <li><i class="fa-solid fa-hospital-user"></i> One-on-One Care</li>
          <li><i class="fa-solid fa-truck-medical"></i> Rehab Clinics</li>
          <li><i class="fa-solid fa-user-nurse"></i> Skilled Nursing</li>
          <li><i class="fa-solid fa-clinic-medical"></i> Outpatient</li>
          <li><i class="fa-solid fa-brain"></i> Mental Health Centers</li>
          <li><i class="fa-solid fa-bed"></i> Inpatient</li>
        </ul>
      </div>
      <div class="work-image">
        <div class="frame">
          <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/we-work.jpg' ); ?>"
            alt="Clinical environment where Munwi's Care staff works">
        </div>
      </div>
    </div>
  </section>

  <!-- CONTACT -->
  <section id="contact" class="contact-section">
    <div class="container">
      <div class="contact-card">
        <div class="eyebrow" style="display:flex; justify-content:center;">Get in touch</div>
        <h2>Do you have questions?</h2>
        <p>Whether checking credential details, coverage options, or shift availability, our team is prepared to assist
          you.</p>
        <?php
        $home_form = get_theme_mod( 'munwis_home_form' );
        if ( ! empty( $home_form ) ) {
            echo do_shortcode( $home_form );
        }
        ?>
      </div>
    </div>
  </section>



  <!-- UPGRADED FOOTER SECTION (BALANCED MULTI-COLUMN DESIGN) -->
<?php get_footer(); ?>
