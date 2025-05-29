<?= $this->extend('student/layout/layout') ?>
<?=$this->section('title')?>
  CS Test Series: For CSEET, CS Executive and CS Professional 
<?= $this->endSection() ?>
<?= $this->section('meta_description') ?>
Most Trusted CS Test Series for CSEET CS Executive and CS Professional | Mission CS Test Series
<?=$this->endSection()?>
<?= $this->section('meta_keywords') ?>
cs test series, cstestseries , cs executive test series, cs professional test series, icsi test series, cs executive test series, cs online test Series, cs exam, cs exams test series, cs exams, best test series for cs exams
<?=$this->endSection()?>
<?=$this->section('content')?>
<style>
    .fullscreen {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: #F8F8F8; /* Change to your desired color */
    display: flex;
    justify-content: center;
    align-items: center;
    overflow: hidden;
    }
     .modal {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.7);
        display: none;
        justify-content: center;
        align-items: flex-start;
        z-index: 9999;
        overflow-y: auto;
        padding-top: 10px;
    }

    .modal-content {
        background: #fff;
        width: 90%;
        max-width: 500px;
        border-radius: 10px;
        padding: 20px;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
    }

    .modal-header {
        font-size: 20px;
        font-weight: bold;
        color: #e63e58;
        text-align: center;
        margin-bottom: 20px;
    }

    select {
        width: 100%;
        padding: 10px;
        margin-bottom: 15px;
        border: 1px solid #ddd;
        border-radius: 5px;
    }

    .btn-submit {
        background-color: #e63e58;
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        font-size: 16px;
        width: 100%;
        text-align: center;
    }

    .btn:hover {
        background-color: #d0344c;
    }

    .card-container {
        margin-top: 20px;
    }

    .fa-download {
        content: "\f019";
    }

    .card-modal {
        background: linear-gradient(135deg, #fff, #f8f9fa);
        border: 1px solid #ddd;
        border-radius: 10px;
        padding: 15px;
        margin-bottom: 15px;
        text-align: center;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .card:hover {
        transform: translateY(-5px);
        box-shadow: 0 6px 20px rgba(0, 0, 0, 0.15);
    }

    .card-title {
        font-size: 18px;
        color: #333;
        margin-bottom: 10px;
        font-weight: bold;
    }

    .card-price {
        font-size: 16px;
        color: #e63e58;
        margin: 10px 0;
        font-weight: bold;
    }

    .card-btn {
        background: #e63e58;
        color: white;
        padding: 8px 15px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        font-size: 14px;
        margin-top: 10px;
    }

    .card-btn:hover {
        background: #d0344c;
    }

    .close-modal {
        position: absolute;
        top: -17px;
        right: 0px;
        background: none;
        border: none;
        font-size: 43px;
        font-weight: bold;
        color: #333;
        cursor: pointer;
        transition: color 0.3s ease;
    }

    .close-modal:hover {
        color: red;
    }

    .back-btn {
        background: #e63e58;
        color: white;
        border: none;
        padding: 8px 15px;
        border-radius: 5px;
        font-size: 14px;
        cursor: pointer;
        display: block;
        text-align: center;
        margin: 10px auto;
        max-width: 150px;
    }

    .back-btn:hover {
        background: #d0344c;
    }

    .checkout-btn {
        display: block;
        margin: 10px auto;
        padding: 10px;
        text-align: center;
        background-color: #198754;
        color: white;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }

    .checkout-btn:hover {
        background-color: #e63939;
    }

    @media (max-width: 768px) {
        .modal-content {
            width: 95%;
        }
  }
</style>
<div class="modal" id="modal">
    <div class="modal-content">
        <button class="close-modal" onclick="closeModal()">×</button>
        <div class="modal-header">Select Your Options</div>
        <div>
            <select id="select1"></select>
            <select id="select2"></select>
            <button class="btn btn-submit" id="submit">Submit</button>
        </div>
        <div id="contentArea"></div>
    </div>
</div>
<body>
    <div class="mcs-overlay" id="mcsOverlay"></div>
    <!-- Hero Section -->
    <section class="mcs-hero">
        <div class="mcs-container">
            <div class="mcs-hero-content">
                <span class="mcs-badge mcs-badge-primary animate__animated animate__fadeInDown">India's #1 CS Test Series</span>
                <h1 class="animate__animated animate__fadeInUp">Master CS Exams with Our Expert-Led Test Series</h1>
                <p class="animate__animated animate__fadeInUp">Comprehensive mock tests, personalized mentorship, and advanced analytics to help you rank among the top candidates.</p>
                <div class="mcs-hero-buttons animate__animated animate__fadeInUp">
                  <a href="#schedules">  <button class="mcs-btn mcs-btn-primary">View Schedules</button> </a>
                   <a href="#copies"> <button class="mcs-btn mcs-btn-secondary">View Demo Copies</button></a>
                </div>
            </div>
            
            <div class="mcs-hero-image animate__animated animate__fadeIn">
                <img src="https://images.unsplash.com/photo-1523240795612-9a054b0db644?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" alt="CS Students Learning">
            </div>
        </div>
        
        <!-- Floating elements for background animation -->
        <div class="mcs-floating-element"></div>
        <div class="mcs-floating-element"></div>
        <div class="mcs-floating-element"></div>
    </section>

    <!-- Category Selection -->
    <section class="mcs-category-selection mcs-section" data-aos="fade-up">
        <div class="mcs-container">
            <div class="mcs-category-card">
                <h2>Select Your CS Stage</h2>
                <form class="mcs-category-form">
                    <a href="javascript:void(0)" <button type="button" onclick="openModal()" class="mcs-btn mcs-btn-primary">Choose Test Series</button> </a>
                </form>
            </div>
        </div>
    </section>

	
<section class="mcs-cards-section mcs-section" data-aos="fade-up">
    <div class="mcs-container">
        <div class="mcs-section-title" id="mcs-cards-grid">
            <h2>Explore Our Test Series</h2>
            <p>Comprehensive test series designed for each stage of your CS journey</p>
        </div>
        
        <div class="mcs-cards-grid">
            <?php
            try {
                if (!is_array($level_list) && !$level_list instanceof Traversable) {
                    throw new Exception("Invalid data: Level list is not iterable.");
                }

                $delay = 100;
                foreach ($level_list as $levelRow): ?>
                    <div class="mcs-card" data-aos="fade-up" data-aos-delay="<?= $delay ?>">
                        <div class="mcs-card-icon">
                            <i class="fas fa-book"></i>
                        </div>
                        <h3><?= htmlspecialchars($levelRow->level_name) ?></h3>
                        <a href="<?= base_url() ?>type?category=<?= htmlspecialchars($levelRow->category_short_name) ?>&&level=<?= htmlspecialchars($levelRow->level_short_name) ?>">
                            <button class="mcs-btn mcs-btn-primary">Buy Now</button>
                        </a>
                    </div>
                    <?php $delay += 100; ?>
                <?php endforeach;
            } catch (Exception $e) { ?>
                <div class="alert alert-danger" role="alert">
                    Error: <?= htmlspecialchars($e->getMessage()) ?>
                </div>
            <?php } ?>
        </div>
    </div>
</section>


	
<!-- <section class="mcs-cards-section mcs-section" data-aos="fade-up">
    <div class="mcs-container">
        <div class="mcs-section-title" id="mcs-cards-grid">
            <h2>Explore Our Test Series</h2>
            <p>Comprehensive test series designed for each stage of your CS journey</p>
        </div>
        
        <div class="mcs-cards-grid">
            <div class="mcs-card" data-aos="fade-up" data-aos-delay="100">
                <div class="mcs-card-icon">
                    <i class="fas fa-book"></i>
                </div>
                <h3>CSEET</h3>
                <button class="mcs-btn mcs-btn-primary">Buy Now</button>
            </div>
            
            <div class="mcs-card" data-aos="fade-up" data-aos-delay="200">
                <div class="mcs-card-icon">
                    <i class="fas fa-book"></i>
                </div>
                <h3>CS Executive</h3>
                <ul class="mcs-card-features">
                    <li>30+ Module-wise Mock Tests</li>
                    <li>Previous Year Solved Papers</li>
                    <li>Advanced Performance Analytics</li>
                </ul>
                <button class="mcs-btn mcs-btn-primary">Buy Now</button>
            </div>
            
            <div class="mcs-card" data-aos="fade-up" data-aos-delay="300">
                <div class="mcs-card-icon">
                    <i class="fas fa-book"></i>
                </div>
                <h3>CS Professional</h3>
                <ul class="mcs-card-features">
                    <li>40+ Comprehensive Mock Tests</li>
                    <li>Expert Mentorship Sessions</li>
                    <li>Time Management Strategies</li>
                </ul>
                <button class="mcs-btn mcs-btn-primary">Buy Now</button>
            </div>
        </div>
    </div>
</section> -->

    <!-- Steps Section -->
    <section class="mcs-steps mcs-section" data-aos="fade-up">
        <div class="mcs-container">
            <div class="mcs-section-title">
                <h2>How It Works</h2>
                <p>Simple steps to get started with our test series and boost your preparation</p>
            </div>
            
            <div class="mcs-steps-content">
                <div class="mcs-step-card" data-aos="fade-up" data-aos-delay="100">
                    <div class="mcs-step-icon">
                        <i class="fas fa-search"></i>
                    </div>
                    <h3>Choose Your Test Series</h3>
                    <p>Select from our comprehensive test series designed for each CS stage.</p>
                    <div class="mcs-step-number">1</div>
                </div>
                
                <div class="mcs-step-card" data-aos="fade-up" data-aos-delay="200">
                    <div class="mcs-step-icon">
                        <i class="fas fa-shopping-cart"></i>
                    </div>
                    <h3>Purchase & Enroll</h3>
                    <p>Complete your purchase and get instant access to your dashboard.</p>
                    <div class="mcs-step-number">2</div>
                </div>
                
                <div class="mcs-step-card" data-aos="fade-up" data-aos-delay="300">
                    <div class="mcs-step-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>Test & Improve</h3>
                    <p>Take tests, analyze performance, and track your progress.</p>
                    <div class="mcs-step-number">3</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="mcs-features mcs-section" data-aos="fade-up" id="features" id="features">
        <div class="mcs-container">
            <div class="mcs-section-title">
                <h2>Our Powerful Features</h2>
                <p>Designed to give you the competitive edge in your CS exam preparation</p>
            </div>
            
            <div class="mcs-features-content">
                <div class="mcs-feature-card" data-aos="fade-up" data-aos-delay="100">
                    <div class="mcs-feature-icon">
                        <i class="fas fa-file-alt"></i>
                    </div>
                    <h3>Full-Length Mock Tests</h3>
                    <p>Practice with tests that simulate the actual exam pattern and difficulty level.</p>
                </div>
                
                <div class="mcs-feature-card" data-aos="fade-up" data-aos-delay="200">
                    <div class="mcs-feature-icon">
                        <i class="fas fa-chart-pie"></i>
                    </div>
                    <h3>Advanced Analytics</h3>
                    <p>Detailed performance reports with strengths, weaknesses, and improvement areas.</p>
                </div>
                
                <div class="mcs-feature-card" data-aos="fade-up" data-aos-delay="300">
                    <div class="mcs-feature-icon">
                        <i class="fas fa-user-graduate"></i>
                    </div>
                    <h3>Expert Mentorship</h3>
                    <p>One-on-one guidance from top CS professionals and exam toppers.</p>
                </div>
                
                <div class="mcs-feature-card" data-aos="fade-up" data-aos-delay="400">
                    <div class="mcs-feature-icon">
                        <i class="fas fa-clock"></i>
                    </div>
                    <h3>Time Management Tools</h3>
                    <p>Learn to optimize your exam time with our specialized tools and techniques.</p>
                </div>
                
                <div class="mcs-feature-card" data-aos="fade-up" data-aos-delay="500">
                    <div class="mcs-feature-icon">
                        <i class="fas fa-book"></i>
                    </div>
                    <h3>Comprehensive Solutions</h3>
                    <p>Detailed explanations for every question to enhance your understanding.</p>
                </div>
                
                <div class="mcs-feature-card" data-aos="fade-up" data-aos-delay="600">
                    <div class="mcs-feature-icon">
                        <i class="fas fa-mobile-alt"></i>
                    </div>
                    <h3>Mobile-Friendly Platform</h3>
                    <p>Access tests and study materials anytime, anywhere on any device.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Download Section -->
    <section class="mcs-download-section mcs-section" data-aos="fade-up" id="copies" id="copies">
        <div class="mcs-container">
            <div class="mcs-section-title">
                <h2>Get Free Sample Papers</h2>
                <p>Experience our test quality before you enroll with our free sample papers</p>
            </div>
            
            <div class="mcs-download-buttons">
                <button class="mcs-btn mcs-btn-accent">CS Foundation</button>
                <button class="mcs-btn mcs-btn-accent">CS Executive</button>
                <button class="mcs-btn mcs-btn-accent">CS Professional</button>
            </div>
        </div>
    </section>

    <!-- Content Section -->
    <section class="mcs-content-section mcs-section" data-aos="fade-up">
        <div class="mcs-container">
            <div class="mcs-section-title">
                <h2>Why Choose Mission CS?</h2>
                <p>Here's what makes us the preferred choice for CS aspirants nationwide</p>
            </div>
            
            <div class="mcs-content-grid">
                <div class="mcs-content-image" data-aos="fade-right">
                    <img src="https://images.unsplash.com/photo-1581094794329-c8112a89af12?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" alt="CS Students Learning">
                </div>
                
                <div class="mcs-content-text" data-aos="fade-left">
                    <ul class="mcs-content-list">
                        <li>Designed by CS Toppers and Industry Experts with 15+ years experience</li>
                        <li>AI-powered performance analysis with personalized recommendations</li>
                        <li>Flexible subscription plans to suit every budget and study schedule</li>
                        <li>Regularly updated content aligned with the latest exam patterns</li>
                        <li>24/7 doubt resolution support from our expert faculty</li>
                        <li>Proven track record with 85% of our students clearing exams in first attempt</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="mcs-stats-section mcs-section" data-aos="fade-up">
        <div class="mcs-container">
            <div class="mcs-stats-grid">
                <div class="mcs-stat-item" data-aos="zoom-in" data-aos-delay="100">
                    <div class="mcs-stat-number" data-count="10000">0</div>
                    <div class="mcs-stat-text">Successful Students</div>
                </div>
                
                <div class="mcs-stat-item" data-aos="zoom-in" data-aos-delay="200">
                    <div class="mcs-stat-number" data-count="95">0</div>
                    <div class="mcs-stat-text">Success Rate</div>
                </div>
                
                <div class="mcs-stat-item" data-aos="zoom-in" data-aos-delay="300">
                    <div class="mcs-stat-number" data-count="50">0</div>
                    <div class="mcs-stat-text">Expert Faculty</div>
                </div>
                
                <div class="mcs-stat-item" data-aos="zoom-in" data-aos-delay="400">
                    <div class="mcs-stat-number" data-count="500">0</div>
                    <div class="mcs-stat-text">Mock Tests</div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQs Section -->
    <section class="mcs-faqs mcs-section" data-aos="fade-up" id="faqs">
        <div class="mcs-container">
            <div class="mcs-section-title">
                <h2>Frequently Asked Questions</h2>
                <p>Find answers to common questions about our test series and services</p>
            </div>
            
            <div class="mcs-accordion">
                <div class="mcs-accordion-item" data-aos="fade-up" data-aos-delay="100">
                    <div class="mcs-accordion-header">
                        <h3>How do I access the tests after payment?</h3>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="mcs-accordion-content">
                        <div class="mcs-accordion-content-inner">
                            <p>Immediately after successful payment, you'll receive an email with login credentials to access your personalized dashboard. All purchased test series will be available in your account under "My Tests" section. You can start taking tests right away!</p>
                        </div>
                    </div>
                </div>
                
                <div class="mcs-accordion-item" data-aos="fade-up" data-aos-delay="200">
                    <div class="mcs-accordion-header">
                        <h3>What is your refund policy?</h3>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="mcs-accordion-content">
                        <div class="mcs-accordion-content-inner">
                            <p>We offer a 7-day no-questions-asked refund policy. If you're not satisfied with our test series for any reason, simply email us within 7 days of purchase for a full refund. After 7 days, we offer partial refunds on unused test credits.</p>
                        </div>
                    </div>
                </div>
                
                <div class="mcs-accordion-item" data-aos="fade-up" data-aos-delay="300">
                    <div class="mcs-accordion-header">
                        <h3>Are the tests updated for the latest exam pattern?</h3>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="mcs-accordion-content">
                        <div class="mcs-accordion-content-inner">
                            <p>Yes, our content team continuously monitors exam pattern changes and updates all test series accordingly. We release new tests every month to reflect the latest trends and ensure our students are always prepared for current exam requirements.</p>
                        </div>
                    </div>
                </div>
                
                <div class="mcs-accordion-item" data-aos="fade-up" data-aos-delay="400">
                    <div class="mcs-accordion-header">
                        <h3>Can I access tests on mobile devices?</h3>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="mcs-accordion-content">
                        <div class="mcs-accordion-content-inner">
                            <p>Absolutely! Our platform is fully responsive and works seamlessly on smartphones, tablets, and desktops. You can download our mobile app (available for iOS and Android) for an even better experience with offline test-taking capabilities.</p>
                        </div>
                    </div>
                </div>
                
                <div class="mcs-accordion-item" data-aos="fade-up" data-aos-delay="500">
                    <div class="mcs-accordion-header">
                        <h3>How does the mentorship program work?</h3>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="mcs-accordion-content">
                        <div class="mcs-accordion-content-inner">
                            <p>Our mentorship program pairs you with an experienced CS professional who will review your test performance, identify weak areas, and create a customized study plan. You'll have scheduled video calls, unlimited email support, and priority response to all your queries.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<!-- Testimonials Section -->
<section class="mcs-testimonials mcs-section" data-aos="fade-up" id="testimonials">
    <div class="mcs-container">
        <div class="mcs-section-title">
            <h2>Student Feedback</h2>
            <p>Real WhatsApp conversations from our satisfied students</p>
        </div>
        
        <div class="mcs-testimonial-slider">
            <div class="mcs-testimonial-track">
                <div class="mcs-testimonial-card" data-aos="fade-up" data-aos-delay="100">
                    <div class="mcs-testimonial-image">
                        <img src="https://charteredteam.in/home/assets/images/testimonial3.jpg" alt="WhatsApp testimonial 1">
                    </div>
                </div>
                
                <div class="mcs-testimonial-card" data-aos="fade-up" data-aos-delay="200">
                    <div class="mcs-testimonial-image">
                        <img src="https://charteredteam.in/home/assets/images/testimonial3.jpg" alt="WhatsApp testimonial 2">
                    </div>
                </div>
                
                <div class="mcs-testimonial-card" data-aos="fade-up" data-aos-delay="300">
                    <div class="mcs-testimonial-image">
                        <img src="path-to-whatsapp-screenshot-3.jpg" alt="WhatsApp testimonial 3">
                    </div>
                </div>
                
                <div class="mcs-testimonial-card" data-aos="fade-up" data-aos-delay="400">
                    <div class="mcs-testimonial-image">
                        <img src="path-to-whatsapp-screenshot-4.jpg" alt="WhatsApp testimonial 4">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> 
    <!-- Blog Section -->
<section class="mcs-blog mcs-section" data-aos="fade-up" id="blogs">
    <div class="mcs-container">
        <div class="mcs-section-title">
            <h2>Latest From Our Blog</h2>
            <p>Expert tips, strategies, and insights to help you excel in CS exams</p>
        </div>
        
        <div class="mcs-blog-grid">
            <?php 
            if (!empty($blog_list)): 
                $limited_blogs = array_slice($blog_list, 0, 3); // Limit to 3
                $delay = 100;
                foreach ($limited_blogs as $blogRow): ?>
                    <div class="mcs-blog-card" data-aos="fade-up" data-aos-delay="<?= $delay ?>">
                        <div class="mcs-blog-image">
                            <img 
                                data-src="<?= base_url() . htmlspecialchars($blogRow->blog_temp_image) ?>" 
                                alt="<?= htmlspecialchars($blogRow->blog_heading) ?>" 
                                class="mcs-lazy-image"
                            >
                        </div>
                        <div class="mcs-blog-content">
                            <span class="mcs-blog-date"><?= date("F j, Y", strtotime($blogRow->blog_created_date ?? 'now')) ?></span>
                            <h3 class="mcs-blog-title"><?= htmlspecialchars($blogRow->blog_heading) ?></h3>
                            <p class="mcs-blog-excerpt">
                                <?php
                                $blogText = !empty($blogRow->blog_text) ? strip_tags($blogRow->blog_text) : '';
                                echo strlen($blogText) > 100 ? substr($blogText, 0, 100) . '...' : $blogText;
                                ?>
                            </p>
                            <a href="<?= base_url() ?>blog?item=<?= htmlspecialchars($blogRow->blog_short_name) ?>" class="mcs-read-more">
                                Read More <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                    <?php $delay += 100; ?>
                <?php endforeach; ?>

                <?php if (count($blog_list) > 3): ?>
                    <div style="text-align: center; width: 100%; margin-top: 1.5rem;">
                        <a href="<?= base_url() ?>blog-list">
                            <button class="cs-btn-demo">Read More Blogs</button>
                        </a>
                    </div>
                <?php endif; ?>
            <?php else: ?>
                <p class="mcs-no-blogs">No blogs available at the moment.</p>
            <?php endif; ?>
        </div>
    </div>
</section>


    <!-- Newsletter Section -->
    <section class="mcs-newsletter mcs-section" data-aos="fade-up">
        <div class="mcs-container">
            <h2>Get Exam Tips & Special Offers</h2>
            <p>Subscribe to our newsletter and stay updated with the latest preparation strategies and exclusive discounts</p>
            <form class="mcs-newsletter-form">
                <input type="email" placeholder="Enter your email address" required>
                <button type="submit">Subscribe</button>
            </form>
        </div>
    </section>

    <!-- Popular Test Series -->
    <section class="mcs-popular-test-series mcs-section" data-aos="fade-up">
        <div class="mcs-container">
            <div class="mcs-section-title">
                <h2>Our Popular Test Series</h2>
                <p>Comprehensive packages designed for maximum exam readiness</p>
            </div>
            
            <div class="mcs-series-grid">
                <div class="mcs-series-card" data-aos="fade-up" data-aos-delay="100">
                    <div class="mcs-series-image">
                        <img src="https://images.unsplash.com/photo-1434030216411-0b793f4b4173?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" alt="CS Foundation">
                        <span class="mcs-series-badge">Best Seller</span>
                    </div>
                    <div class="mcs-series-content">
                        <h3 class="mcs-series-title">CS Foundation Complete Pack</h3>
                        <div class="mcs-series-price">₹2,999 <span>₹4,500</span></div>
                        <ul class="mcs-series-features">
                            <li>15 Full-Length Mock Tests</li>
                            <li>Chapter-wise Practice Tests</li>
                            <li>Detailed Solutions & Analysis</li>
                            <li>2 One-on-One Mentorship Sessions</li>
                            <li>Access for 6 Months</li>
                        </ul>
                        <div class="mcs-series-buttons">
                            <button class="mcs-btn mcs-btn-primary">Enroll Now</button>
                            <button class="mcs-btn mcs-btn-secondary">View Details</button>
                        </div>
                    </div>
                </div>
                
                <div class="mcs-series-card" data-aos="fade-up" data-aos-delay="200">
                    <div class="mcs-series-image">
                        <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" alt="CS Executive">
                        <span class="mcs-series-badge">New</span>
                    </div>
                    <div class="mcs-series-content">
                        <h3 class="mcs-series-title">CS Executive Pro Package</h3>
                        <div class="mcs-series-price">₹4,999 <span>₹7,200</span></div>
                        <ul class="mcs-series-features">
                            <li>25 Full-Length Mock Tests</li>
                            <li>Module-wise Question Banks</li>
                            <li>Advanced Performance Analytics</li>
                            <li>4 Mentorship Sessions</li>
                            <li>Access for 1 Year</li>
                        </ul>
                        <div class="mcs-series-buttons">
                            <button class="mcs-btn mcs-btn-primary">Enroll Now</button>
                            <button class="mcs-btn mcs-btn-secondary">View Details</button>
                        </div>
                    </div>
                </div>
                
                <div class="mcs-series-card" data-aos="fade-up" data-aos-delay="300">
                    <div class="mcs-series-image">
                        <img src="https://images.unsplash.com/photo-1521791055366-0d553872125f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1469&q=80" alt="CS Professional">
                    </div>
                    <div class="mcs-series-content">
                        <h3 class="mcs-series-title">CS Professional Ultimate</h3>
                        <div class="mcs-series-price">₹6,999 <span>₹9,800</span></div>
                        <ul class="mcs-series-features">
                            <li>40 Full-Length Mock Tests</li>
                            <li>Previous Year Papers with Solutions</li>
                            <li>Personalized Study Planner</li>
                            <li>8 Mentorship Sessions</li>
                            <li>Lifetime Access</li>
                        </ul>
                        <div class="mcs-series-buttons">
                            <button class="mcs-btn mcs-btn-primary">Enroll Now</button>
                            <button class="mcs-btn mcs-btn-secondary">View Details</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Showcase Section -->
    <section class="mcs-showcase mcs-section" data-aos="fade-up">
        <div class="mcs-container">
            <div class="mcs-section-title">
                <h2>Our Achievements</h2>
                <p>Proud milestones in our journey of empowering CS aspirants</p>
            </div>
            
            <div class="mcs-showcase-grid">
                <div class="mcs-showcase-card" data-aos="fade-up" data-aos-delay="100">
                    <div class="mcs-showcase-image">
                        <img src="https://images.unsplash.com/photo-1523240795612-9a054b0db644?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" alt="Students">
                    </div>
                    <div class="mcs-showcase-content">
                        <h3 class="mcs-showcase-title">10,000+ Successful Students</h3>
                        <p class="mcs-showcase-text">Join our community of achievers who cleared CS exams with our guidance and are now building successful careers.</p>
                        <a href="#" class="mcs-showcase-btn">Read Stories</a>
                    </div>
                </div>
                
                <div class="mcs-showcase-card" data-aos="fade-up" data-aos-delay="200">
                    <div class="mcs-showcase-image">
                        <img src="https://images.unsplash.com/photo-1521791055366-0d553872125f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1469&q=80" alt="Faculty">
                    </div>
                    <div class="mcs-showcase-content">
                        <h3 class="mcs-showcase-title">50+ Expert Faculty Members</h3>
                        <p class="mcs-showcase-text">Learn from the best - our faculty includes CS toppers, industry veterans, and subject matter experts.</p>
                        <a href="#" class="mcs-showcase-btn">Meet Faculty</a>
                    </div>
                </div>
                
                <div class="mcs-showcase-card" data-aos="fade-up" data-aos-delay="300">
                    <div class="mcs-showcase-image">
                        <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" alt="Awards">
                    </div>
                    <div class="mcs-showcase-content">
                        <h3 class="mcs-showcase-title">Award-Winning Platform</h3>
                        <p class="mcs-showcase-text">Recognized as "Best CS Test Series Platform" by Education Times for 3 consecutive years.</p>
                        <a href="#" class="mcs-showcase-btn">View Awards</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Back to Top Button -->
    <div class="mcs-back-to-top" id="mcsBackToTop">
        <i class="fas fa-arrow-up"></i>
    </div>

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
function closeModal() {
    const modal = document.getElementById('modal');
    if (modal) {
        modal.style.display = 'none'; // Hides the modal
    }
}


	    
        // Initialize AOS (Animate On Scroll)
        AOS.init({
            duration: 800,
            easing: 'ease-in-out',
            once: false,
            mirror: true,
            offset: 100
        });

        // Mobile Menu Toggle
        const mcsMenuToggle = document.getElementById('mcsMenuToggle');
        const mcsMobileMenu = document.getElementById('mcsMobileMenu');
        const mcsCloseMenu = document.getElementById('mcsCloseMenu');
        const mcsOverlay = document.getElementById('mcsOverlay');
        
        mcsMenuToggle.addEventListener('click', () => {
            mcsMobileMenu.classList.add('active');
            mcsOverlay.classList.add('active');
            document.body.style.overflow = 'hidden';
        });
        
        mcsCloseMenu.addEventListener('click', () => {
            mcsMobileMenu.classList.remove('active');
            mcsOverlay.classList.remove('active');
            document.body.style.overflow = '';
        });
        
        mcsOverlay.addEventListener('click', () => {
            mcsMobileMenu.classList.remove('active');
            mcsOverlay.classList.remove('active');
            document.body.style.overflow = '';
        });
        
        // Accordion Functionality
        document.querySelectorAll('.mcs-accordion-header').forEach(header => {
            header.addEventListener('click', () => {
                const accordionItem = header.parentElement;
                const accordionContent = header.nextElementSibling;
                const accordionIcon = header.querySelector('i');
                
                // Close all other accordion items
                document.querySelectorAll('.mcs-accordion-item').forEach(item => {
                    if (item !== accordionItem) {
                        item.querySelector('.mcs-accordion-header').classList.remove('active');
                        item.querySelector('.mcs-accordion-content').style.maxHeight = null;
                    }
                });
                
                // Toggle current accordion item
                header.classList.toggle('active');
                
                if (header.classList.contains('active')) {
                    accordionContent.style.maxHeight = accordionContent.scrollHeight + 'px';
                } else {
                    accordionContent.style.maxHeight = null;
                }
            });
        });
        
        // Back to Top Button
        const mcsBackToTop = document.getElementById('mcsBackToTop');
        
        window.addEventListener('scroll', () => {
            if (window.pageYOffset > 300) {
                mcsBackToTop.classList.add('active');
            } else {
                mcsBackToTop.classList.remove('active');
            }
        });
        
        mcsBackToTop.addEventListener('click', () => {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });
        
        // Testimonial Slider
        const mcsTrack = document.querySelector('.mcs-testimonial-track');
        let isDown = false;
        let startX;
        let scrollLeft;

        mcsTrack.addEventListener('mousedown', (e) => {
            isDown = true;
            startX = e.pageX - mcsTrack.offsetLeft;
            scrollLeft = mcsTrack.scrollLeft;
            mcsTrack.style.cursor = 'grabbing';
        });

        mcsTrack.addEventListener('mouseleave', () => {
            isDown = false;
            mcsTrack.style.cursor = 'grab';
        });

        mcsTrack.addEventListener('mouseup', () => {
            isDown = false;
            mcsTrack.style.cursor = 'grab';
        });

        mcsTrack.addEventListener('mousemove', (e) => {
            if(!isDown) return;
            e.preventDefault();
            const x = e.pageX - mcsTrack.offsetLeft;
            const walk = (x - startX) * 2;
            mcsTrack.scrollLeft = scrollLeft - walk;
        });

        // Header Scroll Effect
        window.addEventListener('scroll', () => {
            const header = document.querySelector('.mcs-header');
            if (window.scrollY > 100) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }
        });

        // Counter Animation for Stats
        const mcsCounters = document.querySelectorAll('.mcs-stat-number');
        const speed = 200;

        function animateCounters() {
            mcsCounters.forEach(counter => {
                const target = +counter.getAttribute('data-count');
                const count = +counter.innerText;
                const increment = target / speed;
                
                if(count < target) {
                    counter.innerText = Math.ceil(count + increment);
                    setTimeout(animateCounters, 1);
                } else {
                    counter.innerText = target;
                }
            });
        }

        // Start counter animation when stats section is in view
        const mcsStatsSection = document.querySelector('.mcs-stats-section');
        const mcsObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if(entry.isIntersecting) {
                    animateCounters();
                    mcsObserver.unobserve(entry.target);
                }
            });
        }, { threshold: 0.5 });

        mcsObserver.observe(mcsStatsSection);

        // Ripple Effect for Buttons
        const mcsButtons = document.querySelectorAll('.mcs-btn-primary, .mcs-btn-accent');

        mcsButtons.forEach(button => {
            button.addEventListener('click', function(e) {
                e.preventDefault();
                
                const x = e.clientX - e.target.getBoundingClientRect().left;
                const y = e.clientY - e.target.getBoundingClientRect().top;
                
                const ripple = document.createElement('span');
                ripple.classList.add('ripple');
                ripple.style.left = `${x}px`;
                ripple.style.top = `${y}px`;
                
                this.appendChild(ripple);
                
                setTimeout(() => {
                    ripple.remove();
                }, 1000);
            });
        });

        // Add ripple effect styles dynamically
        const style = document.createElement('style');
        style.textContent = `
            .ripple {
                position: absolute;
                background: rgba(255, 255, 255, 0.4);
                border-radius: 50%;
                transform: scale(0);
                animation: ripple 0.6s linear;
                pointer-events: none;
                width: 20px;
                height: 20px;
                margin-left: -10px;
                margin-top: -10px;
            }
            
            @keyframes ripple {
                to {
                    transform: scale(10);
                    opacity: 0;
                }
            }
        `;
        document.head.appendChild(style);
    </script>






  <!-- Mini Install Bar -->
  <div id="custom-install-bar" style="display: none;">
    <div id="install-bar-content">
      <p>🚀 Install <strong>Mission CS Test Series</strong> app for a faster, smoother experience!</p>
      <button class="install-app" id="install-app-button">Install Now</button>
      <button id="close-install-bar">&times;</button> <!-- Close button -->
    </div>
  </div>

  <script>
    let deferredPrompt;

    // Listen for the beforeinstallprompt event
    window.addEventListener('beforeinstallprompt', (e) => {
      // Prevent the default mini-infobar
      e.preventDefault();
      // Save the event for triggering later
      deferredPrompt = e;

      // Show the custom install bar with animation
      const installBar = document.getElementById('custom-install-bar');
      installBar.style.display = 'block';
      installBar.style.bottom = '0'; // Slide in the mini bar
    });

    // Handle the install button click
    document.getElementById('install-app-button').addEventListener('click', () => {
      if (deferredPrompt) {
        // Show the default install prompt
        deferredPrompt.prompt();

        // Handle the user's choice
        deferredPrompt.userChoice.then((choiceResult) => {
          if (choiceResult.outcome === 'accepted') {
            console.log('User accepted the install prompt');
          } else {
            console.log('User dismissed the install prompt');
          }
          deferredPrompt = null;
        });
      }

      // Hide the custom install bar with slide-out animation
      const installBar = document.getElementById('custom-install-bar');
      installBar.style.bottom = '-50px'; // Slide out the mini bar
      setTimeout(() => {
        installBar.style.display = 'none';
      }, 300); // Hide after animation
    });

    // Hide the bar once the app is installed
    window.addEventListener('appinstalled', () => {
      console.log('PWA was installed');
      const installBar = document.getElementById('custom-install-bar');
      installBar.style.display = 'none';
    });

    // Close the install bar when the close button is clicked
    document.getElementById('close-install-bar').addEventListener('click', () => {
      const installBar = document.getElementById('custom-install-bar');
      installBar.style.bottom = '-50px'; // Slide out the mini bar
      setTimeout(() => {
        installBar.style.display = 'none';
      }, 300); // Hide after animation
    });
  </script>


<script>
  // Check if the app is running in PWA mode
  if (window.matchMedia('(display-mode: standalone)').matches || window.navigator.standalone) {
    // Redirect to the dashboard
    window.location.href = '/dashboard';
  }
</script>
	

<?= $this->endSection() ?>
<?=$this->section('jsContent')?>
  <script type="text/javascript">
    var pageType = 'index';
  </script>
  <script src="<?=base_url()?>assets/student/js/view.js?1.0.3"></script>
<script type="text/javascript" src="<?= base_url() ?>assets/student/js/buy-now-modal.js?v=1"></script>
<?= $this->endSection() ?>
