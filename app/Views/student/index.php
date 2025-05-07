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
  /* ========== GLOBAL STYLES ========== */
  :root {
    --primary-color: #e63e58;
    --primary-dark: #bf3246;
    --secondary-color: #25d366;
    --text-color: #333;
    --text-light: #555;
    --bg-light: #f7f7f9;
    --white: #ffffff;
    --shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    --transition: all 0.3s ease-in-out;
  }

  /* ========== HERO SECTION ========== */
  .cs-container {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 4rem 2rem;
    gap: 3rem;
    max-width: 1200px;
    margin: 0 auto;
    animation: fadeIn 1s ease-out;
  }

  @keyframes fadeIn {
    from { opacity: 0; transform: translateY(20px); }
    to { opacity: 1; transform: translateY(0); }
  }

  .cs-text-section {
    flex: 1;
    padding: 1rem;
  }

  .cs-text-section h1 {
    font-size: 2.8rem;
    color: var(--text-color);
    margin-bottom: 1.5rem;
    line-height: 1.2;
    font-weight: 700;
  }

  .cs-highlight {
    color: var(--primary-color);
    position: relative;
    display: inline-block;
  }

  .cs-highlight::after {
    content: '';
    position: absolute;
    bottom: 5px;
    left: 0;
    width: 100%;
    height: 8px;
    background-color: rgba(230, 62, 88, 0.2);
    z-index: -1;
    border-radius: 4px;
  }

  .cs-description {
    font-size: 1.1rem;
    margin: 1.5rem 0;
    color: var(--text-light);
    line-height: 1.6;
  }

  .cs-btn-demo {
    background-color: var(--primary-color);
    color: var(--white);
    border: none;
    padding: 0.9rem 2rem;
    font-size: 1.1rem;
    font-weight: 600;
    border-radius: 8px;
    cursor: pointer;
    transition: var(--transition);
    box-shadow: 0 4px 6px rgba(230, 62, 88, 0.3);
    display: inline-block;
  }

  .cs-btn-demo:hover {
    background-color: var(--primary-dark);
    transform: translateY(-2px);
    box-shadow: 0 6px 12px rgba(230, 62, 88, 0.4);
  }

  .cs-image-section {
    flex: 1;
    display: flex;
    justify-content: center;
    align-items: center;
    position: relative;
  }

  .cs-desktop-img {
    width: 100%;
    max-width: 500px;
    height: auto;
    animation: float 6s ease-in-out infinite;
  }

  @keyframes float {
    0%, 100% { transform: translateY(0); }
    50% { transform: translateY(-20px); }
  }

  /* ========== CATEGORY SECTION ========== */
  .category-section {
    padding: 5rem 2rem;
    background-color: var(--bg-light);
    text-align: center;
  }

  .category-section h1 {
    font-size: 2.5rem;
    color: var(--text-color);
    margin-bottom: 3rem;
    position: relative;
    display: inline-block;
  }

  .category-section h1::after {
    content: '';
    position: absolute;
    bottom: -10px;
    left: 50%;
    transform: translateX(-50%);
    width: 80px;
    height: 4px;
    background-color: var(--primary-color);
    border-radius: 2px;
  }

  .category-buttons {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 20px;
    max-width: 1000px;
    margin: 0 auto;
  }

  .category-btn {
    background-color: var(--primary-color);
    color: var(--white);
    font-size: 1rem;
    font-weight: 600;
    padding: 1rem 2rem;
    border-radius: 10px;
    text-align: center;
    transition: var(--transition);
    flex: 1 1 300px;
    max-width: 300px;
    display: flex;
    align-items: center;
    justify-content: center;
    box-shadow: var(--shadow);
  }

  .category-btn:hover {
    background-color: var(--primary-dark);
    transform: translateY(-3px);
    box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
  }

  .category-btn i {
    margin-left: 10px;
    animation: slideRight 1s infinite;
  }

  @keyframes slideRight {
    0%, 100% { transform: translateX(0); }
    50% { transform: translateX(5px); }
  }

  /* ========== LEVEL CARDS SECTION ========== */
  .level-section {
    padding: 5rem 2rem;
    background-color: var(--white);
  }

  .level-container {
    max-width: 1200px;
    margin: 0 auto;
  }

  .level-cards {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 30px;
    margin-top: 3rem;
  }

  .level-card {
    background: var(--white);
    border-radius: 12px;
    overflow: hidden;
    box-shadow: var(--shadow);
    transition: var(--transition);
    text-decoration: none;
  }

  .level-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.15);
  }

  .card-body {
    padding: 2rem;
    text-align: center;
  }

  .card-icon {
    font-size: 3.5rem;
    color: var(--primary-color);
    margin-bottom: 1.5rem;
    transition: var(--transition);
  }

  .level-card:hover .card-icon {
    transform: scale(1.1);
  }

  .card-title {
    font-size: 1.5rem;
    font-weight: 700;
    color: var(--text-color);
    margin-bottom: 1rem;
  }

  /* ========== FEATURES SECTION ========== */
  .features-section {
    padding: 5rem 2rem;
    background: linear-gradient(135deg, #f9e6f3 0%, #e6f9f9 100%);
  }

  .features-container {
    max-width: 1200px;
    margin: 0 auto;
  }

  .section-title {
    font-size: 2.5rem;
    color: var(--text-color);
    text-align: center;
    margin-bottom: 1rem;
    position: relative;
  }

  .section-title::after {
    content: '';
    position: absolute;
    bottom: -10px;
    left: 50%;
    transform: translateX(-50%);
    width: 80px;
    height: 4px;
    background-color: var(--primary-color);
    border-radius: 2px;
  }

  .section-subtitle {
    color: var(--text-light);
    font-size: 1.1rem;
    text-align: center;
    max-width: 800px;
    margin: 0 auto 3rem;
    line-height: 1.6;
  }

  .features-list {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 30px;
    margin-bottom: 3rem;
  }

  .feature-item {
    display: flex;
    align-items: flex-start;
    margin-bottom: 1.5rem;
  }

  .feature-icon {
    font-size: 1.5rem;
    color: var(--primary-color);
    margin-right: 1rem;
    flex-shrink: 0;
  }

  .feature-text {
    font-size: 1rem;
    color: var(--text-light);
    line-height: 1.6;
  }

  .features-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 30px;
  }

  .feature-card {
    background: var(--white);
    border-radius: 12px;
    padding: 2rem;
    text-align: center;
    box-shadow: var(--shadow);
    transition: var(--transition);
  }

  .feature-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
  }

  .feature-card-icon {
    font-size: 3rem;
    color: var(--primary-color);
    margin-bottom: 1.5rem;
  }

  .feature-card-title {
    font-size: 1.3rem;
    font-weight: 600;
    color: var(--text-color);
    margin-bottom: 1rem;
  }

  /* ========== TESTIMONIALS SECTION ========== */
  .testimonials-section {
    padding: 5rem 2rem;
    background-color: var(--white);
  }

  .testimonials-container {
    max-width: 1200px;
    margin: 0 auto;
  }

  .testimonial-carousel {
    border-radius: 12px;
    overflow: hidden;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
  }

  .carousel-item img {
    max-height: 500px;
    object-fit: contain;
    margin: 0 auto;
    border-radius: 12px;
  }

  .carousel-control-prev,
  .carousel-control-next {
    width: 50px;
    height: 50px;
    background-color: var(--primary-color);
    border-radius: 50%;
    top: 50%;
    transform: translateY(-50%);
    opacity: 0.8;
    transition: var(--transition);
  }

  .carousel-control-prev:hover,
  .carousel-control-next:hover {
    opacity: 1;
  }

  .carousel-control-prev {
    left: 20px;
  }

  .carousel-control-next {
    right: 20px;
  }

  /* ========== IMPORTANCE SECTION ========== */
  .importance-section {
    padding: 5rem 2rem;
    background-color: var(--bg-light);
  }

  .importance-container {
    max-width: 800px;
    margin: 0 auto;
  }

  .importance-card {
    background: var(--white);
    border-radius: 12px;
    padding: 3rem;
    box-shadow: var(--shadow);
  }

  .importance-title {
    font-size: 1.8rem;
    color: var(--primary-color);
    margin-bottom: 1.5rem;
    font-weight: 700;
    text-align: center;
  }

  .importance-text {
    font-size: 1.1rem;
    color: var(--text-light);
    line-height: 1.8;
    margin-bottom: 1.5rem;
  }

  /* ========== FAQ SECTION ========== */
  .faq-section {
    padding: 5rem 2rem;
    background-color: var(--white);
  }

  .faq-container {
    max-width: 800px;
    margin: 0 auto;
  }

  .faq-title {
    font-size: 2.5rem;
    color: var(--primary-color);
    text-align: center;
    margin-bottom: 3rem;
    font-weight: 700;
  }

  .accordion-item {
    margin-bottom: 1rem;
    border-radius: 8px !important;
    overflow: hidden;
    border: 1px solid #eee !important;
  }

  .accordion-button {
    font-size: 1.1rem;
    font-weight: 600;
    color: var(--text-color);
    padding: 1.25rem 1.5rem;
    background-color: #f9f9f9;
    transition: var(--transition);
  }

  .accordion-button:not(.collapsed) {
    color: var(--primary-color);
    background-color: #f9f9f9;
    box-shadow: none;
  }

  .accordion-button::after {
    background-size: 1.2rem;
  }

  .accordion-body {
    font-size: 1rem;
    color: var(--text-light);
    line-height: 1.6;
    padding: 1.5rem;
  }

  /* ========== WHY CHOOSE US SECTION ========== */
  .choose-section {
    padding: 5rem 2rem;
    background: linear-gradient(135deg, #f9e6f3 0%, #e6f9f9 100%);
  }

  .choose-container {
    max-width: 800px;
    margin: 0 auto;
    text-align: center;
  }

  .choose-title {
    font-size: 2.5rem;
    color: var(--text-color);
    margin-bottom: 1.5rem;
    font-weight: 700;
  }

  .choose-subtitle {
    font-size: 1.1rem;
    color: var(--text-light);
    line-height: 1.8;
    margin-bottom: 2rem;
  }

  /* ========== OWNER SECTION ========== */
  .owner-section {
    padding: 5rem 2rem;
    background-color: var(--white);
  }

  .owner-container {
    max-width: 800px;
    margin: 0 auto;
  }

  .owner-image {
    border-radius: 12px;
    overflow: hidden;
    box-shadow: var(--shadow);
  }

  .owner-image img {
    width: 100%;
    height: auto;
    display: block;
  }

  /* ========== BLOGS SECTION ========== */
  .blogs-section {
    padding: 5rem 2rem;
    background-color: var(--bg-light);
  }

  .blogs-container {
    max-width: 1200px;
    margin: 0 auto;
  }

  .blogs-title {
    font-size: 2.5rem;
    color: var(--primary-color);
    text-align: center;
    margin-bottom: 3rem;
    font-weight: 700;
  }

  .blogs-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
    gap: 30px;
  }

  .blog-card {
    background: var(--white);
    border-radius: 12px;
    overflow: hidden;
    box-shadow: var(--shadow);
    transition: var(--transition);
  }

  .blog-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
  }

  .blog-image {
    height: 250px;
    overflow: hidden;
  }

  .blog-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.5s ease;
  }

  .blog-card:hover .blog-image img {
    transform: scale(1.1);
  }

  .blog-content {
    padding: 2rem;
  }

  .blog-title {
    font-size: 1.3rem;
    color: var(--text-color);
    margin-bottom: 1rem;
    font-weight: 700;
    line-height: 1.4;
  }

  .blog-excerpt {
    font-size: 1rem;
    color: var(--text-light);
    line-height: 1.6;
    margin-bottom: 1.5rem;
  }

  .read-more {
    display: inline-block;
    font-size: 1rem;
    color: var(--primary-color);
    font-weight: 600;
    text-decoration: none;
    transition: var(--transition);
  }

  .read-more:hover {
    color: var(--primary-dark);
  }

  .blogs-more {
    text-align: center;
    margin-top: 3rem;
  }

  /* ========== NEWSLETTER SECTION ========== */
  .newsletter-section {
    padding: 5rem 2rem;
    background-color: var(--white);
  }

  .newsletter-container {
    max-width: 600px;
    margin: 0 auto;
    background: var(--white);
    border-radius: 12px;
    padding: 3rem;
    box-shadow: var(--shadow);
    text-align: center;
  }

  .newsletter-label {
    font-size: 0.9rem;
    color: var(--primary-color);
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 1px;
    margin-bottom: 0.5rem;
    display: block;
  }

  .newsletter-title {
    font-size: 1.8rem;
    color: var(--text-color);
    margin-bottom: 1.5rem;
    font-weight: 700;
  }

  .newsletter-form {
    display: flex;
    flex-direction: column;
    gap: 1rem;
  }

  .newsletter-input {
    padding: 1rem;
    border: 1px solid #ddd;
    border-radius: 8px;
    font-size: 1rem;
    transition: var(--transition);
  }

  .newsletter-input:focus {
    border-color: var(--primary-color);
    outline: none;
    box-shadow: 0 0 0 3px rgba(230, 62, 88, 0.2);
  }

  .newsletter-btn {
    background-color: var(--primary-color);
    color: var(--white);
    border: none;
    padding: 1rem;
    font-size: 1rem;
    font-weight: 600;
    border-radius: 8px;
    cursor: pointer;
    transition: var(--transition);
  }

  .newsletter-btn:hover {
    background-color: var(--primary-dark);
    transform: translateY(-2px);
  }

  /* ========== WHATSAPP BUTTON ========== */
  .whatsapp-icon {
    position: fixed;
    bottom: 30px;
    right: 30px;
    width: 60px;
    height: 60px;
    background-color: var(--secondary-color);
    border-radius: 50%;
    box-shadow: 0 4px 15px rgba(37, 211, 102, 0.3);
    display: flex;
    justify-content: center;
    align-items: center;
    cursor: pointer;
    z-index: 1000;
    animation: pulse 1.5s infinite;
    transition: var(--transition);
  }

  .whatsapp-icon:hover {
    transform: scale(1.1);
  }

  .whatsapp-icon img {
    width: 35px;
    height: 35px;
  }

  @keyframes pulse {
    0% {
      transform: scale(1);
      box-shadow: 0 0 0 0 rgba(37, 211, 102, 0.7);
    }
    70% {
      transform: scale(1.05);
      box-shadow: 0 0 0 15px rgba(37, 211, 102, 0);
    }
    100% {
      transform: scale(1);
      box-shadow: 0 0 0 0 rgba(37, 211, 102, 0);
    }
  }

  /* ========== INSTALL BAR ========== */
  .install-bar {
    position: fixed;
    bottom: -100px;
    left: 0;
    width: 100%;
    background: var(--primary-color);
    color: var(--white);
    box-shadow: 0 -5px 15px rgba(0, 0, 0, 0.1);
    z-index: 999;
    padding: 15px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    transition: bottom 0.3s ease-in-out;
  }

  .install-bar.show {
    bottom: 0;
  }

  .install-text {
    font-size: 0.9rem;
    margin-right: 15px;
    flex: 1;
  }

  .install-btn {
    background: var(--white);
    color: var(--primary-color);
    border: none;
    padding: 8px 15px;
    font-size: 0.9rem;
    font-weight: 600;
    border-radius: 20px;
    cursor: pointer;
    transition: var(--transition);
    margin-right: 10px;
  }

  .install-btn:hover {
    transform: translateY(-2px);
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
  }

  .close-btn {
    background: none;
    border: none;
    color: var(--white);
    font-size: 1.2rem;
    cursor: pointer;
    transition: var(--transition);
  }

  .close-btn:hover {
    color: #f44336;
  }

  /* ========== RESPONSIVE STYLES ========== */
  @media (max-width: 992px) {
    .cs-text-section h1 {
      font-size: 2.3rem;
    }
    
    .section-title, .faq-title, .blogs-title, .choose-title {
      font-size: 2rem;
    }
  }

  @media (max-width: 768px) {
    .cs-container {
      flex-direction: column;
      padding: 3rem 1.5rem;
      text-align: center;
    }

    .cs-text-section {
      margin-bottom: 2rem;
    }

    .cs-text-section h1 {
      font-size: 2rem;
    }

    .cs-description {
      font-size: 1rem;
    }

    .category-section, 
    .level-section,
    .features-section,
    .testimonials-section,
    .importance-section,
    .faq-section,
    .choose-section,
    .owner-section,
    .blogs-section,
    .newsletter-section {
      padding: 3rem 1.5rem;
    }

    .section-title, .faq-title, .blogs-title, .choose-title {
      font-size: 1.8rem;
    }

    .newsletter-container {
      padding: 2rem;
    }
  }

  @media (max-width: 576px) {
    .cs-text-section h1 {
      font-size: 1.8rem;
    }

    .category-buttons {
      flex-direction: column;
      align-items: center;
    }

    .category-btn {
      width: 100%;
      max-width: none;
    }

    .level-cards, .features-grid, .blogs-grid {
      grid-template-columns: 1fr;
    }

    .importance-card {
      padding: 2rem 1.5rem;
    }

    .newsletter-container {
      padding: 1.5rem;
    }

    .whatsapp-icon {
      width: 50px;
      height: 50px;
      bottom: 20px;
      right: 20px;
    }

    .whatsapp-icon img {
      width: 30px;
      height: 30px;
    }
  }
</style>

<!-- ========== HERO SECTION ========== -->
<div class="cs-container">
  <div class="cs-text-section">
    <h1>Mission <span class="cs-highlight">CS Test Series</span></h1>
    <p class="cs-description">We offer the most affordable and Quality CS Test series for CS Executive and CS Professional exams, along with live Mentorship from Rankers and Qualified Company Secretaries.</p>
    <p class="cs-description">Each of our test series is designed by AIRs considering the needs of CS Executive and Professional exams.</p>

    <?php if (session()->get('studentDetails') !== null): ?>
      <a href="<?=base_url()?>dashboard"> 
        <button class="cs-btn-demo">Go to Dashboard</button>
      </a>
    <?php else: ?>
      <a href="<?=base_url()?>auth?auth=register"> 
        <button class="cs-btn-demo">Register Now</button>
      </a>
    <?php endif; ?>
  </div>
  
  <div class="cs-image-section">
    <img class="cs-desktop-img" src="https://executivetestseries.click/wp-content/uploads/2024/12/pie8.png" alt="CS Test Series Illustration" loading="lazy">
  </div>
</div>

<!-- ========== CATEGORY SECTION ========== -->
<section class="category-section">
  <h1>Category</h1>
  <div class="category-buttons">
    <?php if (!empty($categoryDetails)): ?>
      <?php foreach ($categoryDetails as $categoryRow): ?>
        <a href="<?=base_url()?>level?category=<?=$categoryRow->category_short_name?>" class="category-btn">
          <?=$categoryRow->category_name?> <i class="fas fa-arrow-right"></i>
        </a>
      <?php endforeach ?>
    <?php endif ?>
  </div>
</section>

<!-- ========== LEVEL CARDS SECTION ========== -->
<section class="level-section">
  <div class="level-container">
    <div class="level-cards">
      <?php 
      try {
        if (!is_array($level_list) && !$level_list instanceof Traversable) {
          throw new Exception("Invalid data: Level list is not iterable.");
        }
        
        foreach ($level_list as $levelRow): ?>
          <a href="<?= base_url() ?>type?category=<?= htmlspecialchars($levelRow->category_short_name) ?>&&level=<?= htmlspecialchars($levelRow->level_short_name) ?>" class="level-card">
            <div class="card-body">
              <i class="fa-solid fa-layer-group card-icon"></i>
              <h3 class="card-title"><?= htmlspecialchars($levelRow->level_name) ?></h3>
            </div>
          </a>
        <?php endforeach; 
      } catch (Exception $e) { ?>
        <div class="alert alert-danger" role="alert">
          Error: <?= htmlspecialchars($e->getMessage()) ?>
        </div>
      <?php } ?>
    </div>
  </div>
</section>

<!-- ========== FEATURES SECTION ========== -->
<section class="features-section">
  <div class="features-container">
    <h2 class="section-title">One Minute Read</h2>
    <p class="section-subtitle">We have carefully designed each Question Paper after analysing the whole syllabus, Past Trend, and considering the Amendments.</p>
    
    <div class="features-list">
      <div class="feature-item">
        <i class="fas fa-lightbulb feature-icon"></i>
        <p class="feature-text">Hidden Strategy by AIRs</p>
      </div>
      <div class="feature-item">
        <i class="fas fa-book-open feature-icon"></i>
        <p class="feature-text">Case-based Questions</p>
      </div>
      <div class="feature-item">
        <i class="fas fa-user-cog feature-icon"></i>
        <p class="feature-text">Personalised Study Plan</p>
      </div>
      <div class="feature-item">
        <i class="fas fa-file-alt feature-icon"></i>
        <p class="feature-text">Test Series like Real Exam's Paper</p>
      </div>
      <div class="feature-item">
        <i class="fas fa-brain feature-icon"></i>
        <p class="feature-text">Understand What Examiner Expects from You</p>
      </div>
      <div class="feature-item">
        <i class="fas fa-check-circle feature-icon"></i>
        <p class="feature-text">ICSI Level Checking</p>
      </div>
    </div>
    
    <div class="features-grid">
      <div class="feature-card">
        <i class="fa-solid fa-book-open-reader feature-card-icon"></i>
        <h3 class="feature-card-title">Test Series</h3>
      </div>
      <div class="feature-card">
        <i class="fa-solid fa-video feature-card-icon"></i>
        <h3 class="feature-card-title">1-1 Mentorship</h3>
      </div>
      <div class="feature-card">
        <i class="fa-solid fa-bullseye feature-card-icon"></i>
        <h3 class="feature-card-title">Rankers Support</h3>
      </div>
    </div>
  </div>
</section>

<!-- ========== TESTIMONIALS SECTION ========== -->
<section class="testimonials-section">
  <div class="testimonials-container">
    <h2 class="section-title">Trusted By Thousands of CS Students</h2>
    
    <div id="testimonialCarousel" class="carousel slide testimonial-carousel" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="<?=base_url()?>/assetItems/image/img-sld-1.jpg" class="d-block w-100" alt="Testimonial 1" loading="lazy">
        </div>
        <div class="carousel-item">
          <img src="<?=base_url()?>/assetItems/image/img-sld-2.jpg" class="d-block w-100" alt="Testimonial 2" loading="lazy">
        </div>
        <div class="carousel-item">
          <img src="<?=base_url()?>/assetItems/image/img-sld-3.jpg" class="d-block w-100" alt="Testimonial 3" loading="lazy">
        </div>
        <div class="carousel-item">
          <img src="<?=base_url()?>/assetItems/image/img-sld-4.jpg" class="d-block w-100" alt="Testimonial 4" loading="lazy">
        </div>
      </div>
      
      <button class="carousel-control-prev" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </div>
</section>

<!-- ========== IMPORTANCE SECTION ========== -->
<section class="importance-section">
  <div class="importance-container">
    <div class="importance-card">
      <h3 class="importance-title">Why Test Series is Important?</h3>
      <p class="importance-text">Passing CS Exams Isn't Easy. Just studying randomly or writing CS exams without a proper plan won't help in CS exams. Many students study for 14 to 16 hours a day—reading, learning, practicing, memorizing, and revising—but still fail.</p>
      <p class="importance-text">They don't fail because they don't study but because they don't follow the right strategy.</p>
      <p class="importance-text">Don't take multiple attempts to improve your mistakes one by one. Just write our mock test series and improve before appearing for ICSI exams.</p>
    </div>
  </div>
</section>

<!-- ========== FAQ SECTION ========== -->
<section class="faq-section">
  <div class="faq-container">
    <h2 class="faq-title">FAQs</h2>
    
    <div class="accordion" id="faqAccordion">
      <div class="accordion-item">
        <h3 class="accordion-header" id="headingOne">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
            What is the Mission CS Test Series?
          </button>
        </h3>
        <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#faqAccordion">
          <div class="accordion-body">
            Mission CS Test Series offers comprehensive test series tailored for Company Secretary (CS) students, covering CSEET, CS Executive, and CS Professional levels. The test series are designed to align with the latest examination trends and provide a real-exam experience.
          </div>
        </div>
      </div>
      
      <div class="accordion-item">
        <h3 class="accordion-header" id="headingTwo">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
            How can I enroll in the test series?
          </button>
        </h3>
        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#faqAccordion">
          <div class="accordion-body">
            To enroll, visit the Mission CS Test Series website, select your desired course level (CSEET, Executive, or Professional), and choose a test series package. After completing the payment, you will get immediate access to the test materials.
          </div>
        </div>
      </div>
      
      <div class="accordion-item">
        <h3 class="accordion-header" id="headingThree">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
            What are the unique features of the Mission CS Test Series?
          </button>
        </h3>
        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#faqAccordion">
          <div class="accordion-body">
            The test series is designed with a blend of unseen and unique questions based on the ICSI pattern. Other features include personalized feedback, progress tracking, and a flexible study schedule.
          </div>
        </div>
      </div>
      
      <div class="accordion-item">
        <h3 class="accordion-header" id="headingFour">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
            Can I attempt the test series at my own pace?
          </button>
        </h3>
        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#faqAccordion">
          <div class="accordion-body">
            Yes, with Mission CS Test Series, you can study and take the tests at your own pace, anytime and from anywhere.
          </div>
        </div>
      </div>
      
      <div class="accordion-item">
        <h3 class="accordion-header" id="headingFive">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
            Do you provide feedback after tests?
          </button>
        </h3>
        <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#faqAccordion">
          <div class="accordion-body">
            Yes, after each test, you receive detailed feedback on your performance, including tips for improvement and suggestions for enhancing your presentation skills.
          </div>
        </div>
      </div>
      
      <div class="accordion-item">
        <h3 class="accordion-header" id="headingSix">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
            What is the refund policy for the test series?
          </button>
        </h3>
        <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#faqAccordion">
          <div class="accordion-body">
            The refund policy of Mission CS Test Series ensures that if you cancel your subscription within the stipulated time, you may be eligible for a refund based on the policy terms.
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ========== WHY CHOOSE US SECTION ========== -->
<section class="choose-section">
  <div class="choose-container">
    <h2 class="choose-title">Why Mission CS TEST SERIES?</h2>
    <p class="choose-subtitle">We have carefully Designed each Question Paper after analysing the whole syllabus, Past Trend, and considering the Amendments. Each Questions is selected based on ABC Analysis which means we focus on Important topics. This ensures that you Prepare Smartly not blindly</p>
  </div>
</section>

<!-- ========== OWNER SECTION ========== -->
<section class="owner-section">
  <div class="owner-container">
    <div class="owner-image">
      <img src="<?=base_url()?>/assetItems/image/owner.jpg" class="img-fluid" alt="Mission CS Owner" loading="lazy">
    </div>
  </div>
</section>

<!-- ========== BLOGS SECTION ========== -->
<section class="blogs-section">
  <div class="blogs-container">
    <h2 class="blogs-title">Our Blogs</h2>
    
    <div class="blogs-grid">
      <?php if (!empty($blog_list)): 
        $limited_blogs = array_slice($blog_list, 0, 3);
        foreach ($limited_blogs as $blogRow): ?>
          <div class="blog-card">
            <div class="blog-image">
              <img 
                data-src="<?=base_url().$blogRow->blog_temp_image?>" 
                alt="<?=htmlspecialchars($blogRow->blog_heading)?>" 
                class="lazy-load"
                loading="lazy"
              >
            </div>
            <div class="blog-content">
              <h3 class="blog-title"><?=$blogRow->blog_heading?></h3>
              <p class="blog-excerpt">
                <?php
                $blogText = '';
                if (!empty($blogRow->blog_text)) {
                  $blogText = strip_tags($blogRow->blog_text);
                }
                $blogText = strlen($blogText) > 20 ? substr($blogText, 0, 20).'...' : $blogText;
                echo $blogText;
                ?>
              </p>
              <a href="<?=base_url()?>blog?item=<?=$blogRow->blog_short_name?>" class="read-more">
                Read More <i class="bi bi-arrow-right"></i>
              </a>
            </div>
          </div>
        <?php endforeach; ?>
        
        <?php if (count($blog_list) > 3): ?>
          <div class="blogs-more">
            <a href="<?=base_url()?>blog-list" class="cs-btn-demo">Read More Blogs</a>
          </div>
        <?php endif; ?>
      <?php else: ?>
        <p class="text-center">No blogs available at the moment.</p>
      <?php endif; ?>
    </div>
  </div>
</section>

<!-- ========== NEWSLETTER SECTION ========== -->
<section class="newsletter-section">
  <div class="newsletter-container">
    <span class="newsletter-label">Newsletter</span>
    <h3 class="newsletter-title">Join to get exclusive updates and contents for free.</h3>
    
    <div class="newsletter-form">
      <input type="email" class="newsletter-input newsLetterForm" placeholder="Email address" required>
      <button class="newsletter-btn addNewsLetterBtn">Join Now</button>
    </div>
  </div>
</section>

<!-- ========== WHATSAPP BUTTON ========== -->
<div class="whatsapp-icon" onclick="redirectToWhatsApp()">
  <img src="https://upload.wikimedia.org/wikipedia/commons/6/6b/WhatsApp.svg" alt="WhatsApp Icon" loading="lazy">
</div>

<!-- ========== INSTALL BAR ========== -->
<div class="install-bar" id="installBar">
  <div class="install-text">
    🚀 Install <strong>Mission CS Test Series</strong> app for a faster, smoother experience!
  </div>
  <button class="install-btn" id="installButton">Install Now</button>
  <button class="close-btn" id="closeInstallBar">&times;</button>
</div>

<!-- ========== JAVASCRIPT ========== -->
<script>
  // Lazy loading images
  document.addEventListener("DOMContentLoaded", function() {
    const lazyImages = document.querySelectorAll(".lazy-load");
    
    const lazyLoad = function(target) {
      const observer = new IntersectionObserver(function(entries, observer) {
        entries.forEach(function(entry) {
          if (entry.isIntersecting) {
            const img = entry.target;
            img.src = img.dataset.src;
            img.classList.remove("lazy-load");
            observer.unobserve(img);
          }
        });
      });
      
      observer.observe(target);
    };
    
    lazyImages.forEach(lazyLoad);
  });

  // WhatsApp redirect
  function redirectToWhatsApp() {
    const phoneNumber = "+918929592998";
    const message = "Hello! I am looking for a test series.";
    const url = `https://wa.me/${phoneNumber}?text=${encodeURIComponent(message)}`;
    window.open(url, "_blank");
  }

  // PWA Installation
  let deferredPrompt;
  const installBar = document.getElementById('installBar');
  const installButton = document.getElementById('installButton');
  const closeButton = document.getElementById('closeInstallBar');

  window.addEventListener('beforeinstallprompt', (e) => {
    e.preventDefault();
    deferredPrompt = e;
    installBar.classList.add('show');
  });

  installButton.addEventListener('click', async () => {
    if (deferredPrompt) {
      deferredPrompt.prompt();
      const { outcome } = await deferredPrompt.userChoice;
      if (outcome === 'accepted') {
        console.log('User accepted the install prompt');
      } else {
        console.log('User dismissed the install prompt');
      }
      deferredPrompt = null;
      installBar.classList.remove('show');
    }
  });

  closeButton.addEventListener('click', () => {
    installBar.classList.remove('show');
  });

  window.addEventListener('appinstalled', () => {
    console.log('PWA was installed');
    installBar.classList.remove('show');
  });

  // Check if running in PWA mode
  if (window.matchMedia('(display-mode: standalone)').matches || window.navigator.standalone) {
    window.location.href = '/dashboard';
  }
</script>

<!-- Webpushr notification code -->
<script>
  (function(w,d, s, id) {
    if(typeof(w.webpushr)!=='undefined') return;
    w.webpushr=w.webpushr||function(){(w.webpushr.q=w.webpushr.q||[]).push(arguments)};
    var js, fjs = d.getElementsByTagName(s)[0];
    js = d.createElement(s); js.id = id;js.async=1;
    js.src = "https://cdn.webpushr.com/app.min.js";
    fjs.parentNode.appendChild(js);
  }(window,document, 'script', 'webpushr-jssdk'));
  webpushr('setup',{'key':'BKyPm_qNFX-rSaSabH_2G-ub8FGSHPXSGzzM23zaP8NIm2N_rskcfDEVZ7qrSnOdO3sAWLPfMZeYTlbxjZBp1VQ' });
</script>

<?= $this->endSection() ?>
<?=$this->section('jsContent')?>
  <script type="text/javascript">
    var pageType = 'index';
  </script>
  <script src="<?=base_url()?>assets/student/js/view.js?1.0.3"></script>
<?= $this->endSection() ?>
