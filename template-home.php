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
        <div class="service-card">
          <div class="img-wrap"><img
              src="https://images.unsplash.com/photo-1622253692010-333f2da6031d?auto=format&fit=crop&w=500&q=80"
              alt="Hospital and clinical staffing"></div>
          <div class="service-card-body">
            <h3>Hospital &amp; Clinical Staffing</h3>
            <p>Providing acute care facilities, emergency centers, and surgery clinics with experienced registered
              nurses and specialists.</p>
            <a href="careers.html">See open shifts <i class="fa-solid fa-arrow-right"></i></a>
          </div>
        </div>
        <div class="service-card">
          <div class="img-wrap"><img
              src="https://images.unsplash.com/photo-1584515979956-d9f6e5d09982?auto=format&fit=crop&w=500&q=80"
              alt="Long-term and assisted living staffing"></div>
          <div class="service-card-body">
            <h3>Long-Term &amp; Assisted Living</h3>
            <p>Placing compassionate geriatric care specialists, certified nursing assistants, and support professionals
              in retirement homes.</p>
            <a href="careers.html">See open shifts <i class="fa-solid fa-arrow-right"></i></a>
          </div>
        </div>
        <div class="service-card">
          <div class="img-wrap"><img
              src="https://images.unsplash.com/photo-1537368910025-700350fe46c7?auto=format&fit=crop&w=500&q=80"
              alt="In-home and private duty care"></div>
          <div class="service-card-body">
            <h3>In-Home &amp; Private Care</h3>
            <p>Deploying dedicated post-surgical aides, companionship specialists, and private duty caregivers for
              direct home wellness support.</p>
            <a href="careers.html">See open shifts <i class="fa-solid fa-arrow-right"></i></a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- CALLOUT BAR -->
  <section class="callout-bar">
    <div class="container callout-bar-content">
      <h2>Let's talk — reach our coordinators anytime at (123) 456-7890</h2>
      <a href="#contact" class="btn">Contact Us <i class="fa-solid fa-angle-right"></i></a>
    </div>
  </section>

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
          <img src="https://images.unsplash.com/photo-1576765608535-5f04d1e3f289?auto=format&fit=crop&w=700&q=80"
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
      <div class="testimonial-grid">
        <div class="testimonial-card">
          <div class="stars">★★★★★</div>
          <p class="quote">"When we've had last-minute call-offs, Munwi's Care has always had someone qualified ready to
            step in."</p>
          <div class="testimonial-author">
            <div class="avatar">D</div>
            <div><b>Director of Nursing</b><span>Skilled Nursing Facility</span></div>
          </div>
        </div>
        <div class="testimonial-card">
          <div class="stars">★★★★★</div>
          <p class="quote">"Every caregiver they've sent has been thoroughly credentialed and genuinely caring with our
            residents."</p>
          <div class="testimonial-author">
            <div class="avatar">A</div>
            <div><b>Administrator</b><span>Assisted Living Community</span></div>
          </div>
        </div>
        <div class="testimonial-card">
          <div class="stars">★★★★★</div>
          <p class="quote">"Communication is fast and honest. We always know exactly who is coming and when."</p>
          <div class="testimonial-author">
            <div class="avatar">R</div>
            <div><b>Practice Manager</b><span>Outpatient Clinic</span></div>
          </div>
        </div>
      </div>
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
          <img src="https://images.unsplash.com/photo-1581056771107-24ca5f033842?auto=format&fit=crop&w=700&q=80"
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
        <form class="contact-form" id="intake-form">
          <div class="field"><label for="name">Name*</label><input class="form-control" id="name" type="text" required>
          </div>
          <div class="field"><label for="email">Email*</label><input class="form-control" id="email" type="email"
              required></div>
          <div class="field full"><label for="message">Message / Comment*</label><textarea class="form-control"
              id="message" required></textarea></div>
          <div class="field full form-submit"><button type="submit" class="btn btn-primary">Send Message</button></div>
        </form>
      </div>
    </div>
  </section>



  <!-- UPGRADED FOOTER SECTION (BALANCED MULTI-COLUMN DESIGN) -->
<?php get_footer(); ?>
