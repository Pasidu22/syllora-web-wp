<?php get_header(); ?>

    <!-- Hero Section -->
    <section class="hero" id="home">
        <img src="https://images.unsplash.com/photo-1541339907198-e08756dedf3f?auto=format&fit=crop&q=80&w=1920" alt="University Campus" class="hero-bg">
        <div class="hero-overlay"></div>
        <div class="container">
            <div class="hero-content reveal active">
                <span class="hero-subtitle">Illuminate Your Path to Success</span>
                <h1 class="hero-title">Study in <span>the UK</span> & Beyond</h1>
                <p class="hero-desc">We guide students to achieve their academic goals globally. Discover top universities, secure scholarships, and get expert visa assistance with Syllora.</p>
                <div class="hero-btns">
                    <a href="#destinations" class="btn btn-primary">Find Out More <i class="fas fa-arrow-right"></i></a>
                    <a href="#about" class="btn btn-outline">Our Story</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="section section-bg-light" id="services">
        <div class="container">
            <div class="section-header reveal">
                <span class="section-subtitle">What We Offer</span>
                <h2 class="section-title">Our Premium Services</h2>
            </div>
            <div class="services-grid">
                <div class="service-card reveal">
                    <div class="service-icon">
                        <i class="fas fa-user-tie"></i>
                    </div>
                    <h3 class="service-title">Expert Counseling</h3>
                    <p class="service-desc">Personalized guidance on university admissions and career mapping from certified professionals.</p>
                </div>
                <div class="service-card reveal">
                    <div class="service-icon">
                        <i class="fas fa-university"></i>
                    </div>
                    <h3 class="service-title">University Admission</h3>
                    <p class="service-desc">We help secure your spot at top universities in the UK, Malta, Latvia, Dubai, Singapore, and Malaysia.</p>
                </div>
                <div class="service-card reveal">
                    <div class="service-icon">
                        <i class="fas fa-award"></i>
                    </div>
                    <h3 class="service-title">Scholarship Assistance</h3>
                    <p class="service-desc">Identify and apply for global scholarships to reduce your financial burden effortlessly.</p>
                </div>
                <div class="service-card reveal">
                    <div class="service-icon">
                        <i class="fas fa-passport"></i>
                    </div>
                    <h3 class="service-title">Visa Information</h3>
                    <p class="service-desc">Comprehensive support for student visas, ensuring a smooth and hassle-free application process.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section class="section" id="about">
        <div class="container">
            <div class="about-grid">
                <div class="about-img-wrap reveal">
                    <img src="https://images.unsplash.com/photo-1523240795612-9a054b0db644?auto=format&fit=crop&q=80&w=800" alt="Syllora Consultants" class="about-img">
                    <div class="about-experience">
                        <span class="about-experience-num">10</span>
                        <span class="about-experience-text">Years of<br>Excellence</span>
                    </div>
                </div>
                <div class="about-content reveal">
                    <div class="section-header">
                        <span class="section-subtitle">Who We Are</span>
                        <h2 class="section-title">A Global Leader in Overseas Education</h2>
                    </div>
                    
                    <p class="about-desc">Syllora (Pvt) Ltd is a leading education consultancy in Sri Lanka, dedicated to guiding students towards international academic and career success. With a strong international focus and extensive experience in the education sector, we support students who wish to pursue higher education in the United Kingdom, Malta, Latvia, Dubai, Singapore and Malaysia.</p>
                    <ul class="about-list">
                        <li><i class="fas fa-check"></i> Personalized guidance for program selection</li>
                        <li><i class="fas fa-check"></i> Proven track record of successful placements</li>
                        <li><i class="fas fa-check"></i> Transparent, professional, and free consultations</li>
                    </ul>

                    <a href="<?php echo esc_url( home_url( '/about' ) ); ?>" class="btn btn-primary" style="margin-top: 2rem;">Learn More <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </section>

    <!-- Destinations Section -->
    <section class="section section-bg-light" id="destinations">
        <div class="container">
            <div class="section-header reveal">
                <span class="section-subtitle">Study Destinations</span>
                <h2 class="section-title">Where would you like to Study?</h2>
            </div>
            <div class="destinations-grid">
                <div class="dest-card reveal">
                    <img src="https://images.unsplash.com/photo-1513635269975-59663e0ac1ad?auto=format&fit=crop&q=80&w=800" alt="United Kingdom" class="dest-img">
                    <div class="dest-overlay">
                        <h3 class="dest-title">United Kingdom</h3>
                        <a href="#" class="dest-link">Apply Now <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="dest-card reveal">
                    <img src="https://images.unsplash.com/photo-1533676802871-eca1ae998cd5?auto=format&fit=crop&q=80&w=800" alt="Malta" class="dest-img">
                    <div class="dest-overlay">
                        <h3 class="dest-title">Malta</h3>
                        <a href="#" class="dest-link">Apply Now <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="dest-card reveal">
                    <img src="https://images.unsplash.com/photo-1589710751893-f9a6770ad71b?auto=format&fit=crop&q=80&w=800" alt="Latvia" class="dest-img">
                    <div class="dest-overlay">
                        <h3 class="dest-title">Latvia</h3>
                        <a href="#" class="dest-link">Apply Now <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="dest-card reveal">
                    <img src="https://images.unsplash.com/photo-1512453979798-5ea266f8880c?auto=format&fit=crop&q=80&w=800" alt="Dubai" class="dest-img">
                    <div class="dest-overlay">
                        <h3 class="dest-title">Dubai</h3>
                        <a href="#" class="dest-link">Apply Now <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="dest-card reveal">
                    <img src="https://images.unsplash.com/photo-1525625293386-3f8f99389edd?auto=format&fit=crop&q=80&w=800" alt="Singapore" class="dest-img">
                    <div class="dest-overlay">
                        <h3 class="dest-title">Singapore</h3>
                        <a href="#" class="dest-link">Apply Now <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="dest-card reveal">
                    <img src="https://images.unsplash.com/photo-1508062878650-88b52897f298?auto=format&fit=crop&q=80&w=800" alt="Malaysia" class="dest-img">
                    <div class="dest-overlay">
                        <h3 class="dest-title">Malaysia</h3>
                        <a href="#" class="dest-link">Apply Now <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Events Section -->
    <section class="section section-events" id="events">
        <div class="container">
            <div class="section-header reveal">
                <span class="section-subtitle">Stay Updated</span>
                <h2 class="section-title">Upcoming Events</h2>
            </div>
            <div class="events-grid">
                <?php
                $events_query = new WP_Query(array(
                    'post_type' => 'event',
                    'posts_per_page' => 3,
                    'post_status' => 'publish'
                ));

                if ($events_query->have_posts()) :
                    while ($events_query->have_posts()) : $events_query->the_post();
                        // Retrieve custom fields
                        $event_date = get_post_meta(get_the_ID(), 'event_date', true);
                        $event_location = get_post_meta(get_the_ID(), 'event_location', true);
                        if (empty($event_date)) {
                            $event_date = get_the_date('M d, Y');
                        }
                        if (empty($event_location)) {
                            $event_location = 'Online / Campus';
                        }
                ?>
                        <div class="event-card reveal">
                            <div class="event-img-wrap">
                                <?php if (has_post_thumbnail()) : ?>
                                    <?php the_post_thumbnail('medium_large', array('class' => 'event-img')); ?>
                                <?php else : ?>
                                    <img src="https://images.unsplash.com/photo-1523050854058-8df90110c9f1?auto=format&fit=crop&q=80&w=800" alt="Default Event Image" class="event-img">
                                <?php endif; ?>
                                <span class="event-date-tag"><i class="far fa-calendar-alt"></i> <?php echo esc_html($event_date); ?></span>
                            </div>
                            <div class="event-content">
                                <h3 class="event-title"><?php the_title(); ?></h3>
                                <p class="event-location"><i class="fas fa-map-marker-alt"></i> <?php echo esc_html($event_location); ?></p>
                                <p class="event-excerpt"><?php echo wp_trim_words(get_the_excerpt(), 18); ?></p>
                                <a href="<?php the_permalink(); ?>" class="event-link">Details <i class="fas fa-chevron-right"></i></a>
                            </div>
                        </div>
                <?php
                    endwhile;
                    wp_reset_postdata();
                else :
                ?>
                    <p class="no-posts-msg">No upcoming events at the moment. Stay tuned!</p>
                <?php endif; ?>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="section section-dark" id="testimonials">
        <div class="container">
            <div class="section-header reveal">
                <span class="section-subtitle">Success Stories</span>
                <h2 class="section-title">What Our Students Say</h2>
            </div>
            <div class="testimonials-grid">
                <?php
                $testimonials_query = new WP_Query(array(
                    'post_type' => 'testimonial',
                    'posts_per_page' => 3,
                    'post_status' => 'publish'
                ));

                if ($testimonials_query->have_posts()) :
                    while ($testimonials_query->have_posts()) : $testimonials_query->the_post();
                ?>
                        <div class="testimonial-card reveal">
                            <div class="testimonial-quote-icon">
                                <i class="fas fa-quote-left"></i>
                            </div>
                            <div class="testimonial-body">
                                <?php the_content(); ?>
                            </div>
                            <div class="testimonial-user">
                                <div class="testimonial-avatar">
                                    <?php if (has_post_thumbnail()) : ?>
                                        <?php the_post_thumbnail('thumbnail', array('class' => 'avatar-img')); ?>
                                    <?php else : ?>
                                        <img src="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?auto=format&fit=crop&q=80&w=150" alt="Avatar Placeholder" class="avatar-img">
                                    <?php endif; ?>
                                </div>
                                <div class="testimonial-info">
                                    <h4 class="testimonial-name"><?php the_title(); ?></h4>
                                    <span class="testimonial-status">Verified Alumnus</span>
                                </div>
                            </div>
                        </div>
                <?php
                    endwhile;
                    wp_reset_postdata();
                else :
                ?>
                    <p class="no-posts-msg">See our success stories on campus soon!</p>
                <?php endif; ?>
            </div>
        </div>
    </section>

    <!-- Contact / Book Consultation Section -->
    <section class="section section-contact" id="contact">
        <div class="container">
            <div class="section-header reveal">
                <span class="section-subtitle">Get In Touch</span>
                <h2 class="section-title">Book Free Consultation</h2>
            </div>
            
            <div class="contact-form-wrap reveal">
                <?php if ( isset($_GET['status']) && $_GET['status'] == 'success' ) : ?>
                    <div class="alert alert-success" style="background: #d1fae5; color: #065f46; padding: 15px; border-radius: 8px; margin-bottom: 20px; text-align: center;">
                        Thank you! Your consultation request has been sent successfully. We will contact you soon.
                    </div>
                <?php elseif ( isset($_GET['status']) && $_GET['status'] == 'error' ) : ?>
                    <div class="alert alert-danger" style="background: #fee2e2; color: #991b1b; padding: 15px; border-radius: 8px; margin-bottom: 20px; text-align: center;">
                        Sorry, there was an error sending your message. Please try again.
                    </div>
                <?php endif; ?>
                
                <form action="<?php echo esc_url( admin_url('admin-post.php') ); ?>" method="POST" class="consultation-form">
                    <input type="hidden" name="action" value="submit_consultation_form">
                    <?php wp_nonce_field('consultation_form_nonce', 'consultation_nonce'); ?>
                    
                    <div class="form-row">
                        <div class="form-group">
                            <label for="title">Title</label>
                            <select name="title" id="title" class="form-control">
                                <option value="">Select Title</option>
                                <option value="Mr">Mr.</option>
                                <option value="Mrs">Mrs.</option>
                                <option value="Miss">Miss.</option>
                                <option value="Ms">Ms.</option>
                                <option value="Dr">Dr.</option>
                            </select>
                        </div>
                    </div>
                    
                    <div class="form-row" style="display: flex; gap: 15px;">
                        <div class="form-group" style="flex: 1;">
                            <label for="first_name">First Name</label>
                            <input type="text" id="first_name" name="first_name" class="form-control" required>
                        </div>
                        <div class="form-group" style="flex: 1;">
                            <label for="last_name">Last Name</label>
                            <input type="text" id="last_name" name="last_name" class="form-control" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" class="form-control" required>
                    </div>

                    <div class="form-row" style="display: flex; gap: 15px;">
                        <div class="form-group" style="flex: 1;">
                            <label for="mobile_number">Mobile number</label>
                            <input type="tel" id="mobile_number" name="mobile_number" class="form-control" required>
                        </div>
                        <div class="form-group" style="flex: 1;">
                            <label for="whatsapp_number">WhatsApp number</label>
                            <input type="tel" id="whatsapp_number" name="whatsapp_number" class="form-control">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="destination">Preferred Study Destination</label>
                        <select name="destination" id="destination" class="form-control" required>
                            <option value="">Select Destination</option>
                            <option value="United Kingdom">United Kingdom</option>
                            <option value="Malta">Malta</option>
                            <option value="Latvia">Latvia</option>
                            <option value="Dubai">Dubai</option>
                            <option value="Singapore">Singapore</option>
                            <option value="Malaysia">Malaysia</option>
                        </select>
                    </div>

                    <div class="form-row" style="display: flex; gap: 15px;">
                        <div class="form-group" style="flex: 1;">
                            <label for="pref_date">Preferred Date</label>
                            <input type="date" id="pref_date" name="pref_date" class="form-control">
                        </div>
                        <div class="form-group" style="flex: 1;">
                            <label for="pref_time">Preferred Time</label>
                            <input type="time" id="pref_time" name="pref_time" class="form-control">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="message">Your message</label>
                        <textarea id="message" name="message" class="form-control" rows="4"></textarea>
                    </div>

                    <div class="form-submit" style="text-align: center; margin-top: 20px;">
                        <button type="submit" class="btn btn-primary">Send Message</button>
                    </div>
                </form>
            </div>
        </div>
    </section>

<?php get_footer(); ?>



