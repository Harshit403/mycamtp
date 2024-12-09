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

  <div class="cs-container mt-5">
    <!-- Left Section -->
    <div class="cs-text-section">
      <h1>Mission <span class="cs-highlight">CS Test Series</span></h1>
      <p class="cs-description">We offer the most affordable and Quality CS Test series for CS Executive and CS Professional exams, along with live Mentorship from Rankers and Qualified Company Secretaries.</p>
      <p class="cs-description">Each of our test series is designed by AIRs considering the needs of CS Executive and Professional exams.</p>
      <a href="<?=base_url()?>auth?auth=register"> <button class="cs-btn-demo">Register Now</button></a>
    </div>

    <!-- Right Section -->
    <div class="cs-image-section">
      <img class="cs-desktop-img" src="https://executivetestseries.click/wp-content/uploads/2024/12/pie8.png" alt="Pie Chart">
    </div>
  </div>

  
<section class="py-3 category container" id="category-section">
    <div class="container-title">
        <h1-not>Category</h1-not>
    </div>
    <div class="d-flex align-items-center justify-content-center flex-wrap" style="gap:10px 20px;">
      <?php if (!empty($categoryDetails)): ?>
          <?php foreach ($categoryDetails as $categoryRow): ?>
              <a class="stretched-link" href="<?=base_url()?>level?category=<?=$categoryRow->category_short_name?>" style="text-decoration: none;">
                  <button class="button-85" role="button"><?=$categoryRow->category_name?></button>
              </a>
          <?php endforeach ?>
      <?php endif ?>
    </div>
</section>

<section class="mt-5">
    <div class="custom-bg-container">
        <div class="unique-solutions-section">
            <div class="container">
                <div class="row gy-4">
                    <div class="col-12 col-md-4">
                        <!-- Card with Link -->
                        <a href="your-link-for-websites" style="text-decoration: none;">
                            <div class="card unique-card-solutions">
                                <div class="unique-card-body">
                                    <i class="fa-solid fa-layer-group unique-icon"></i>
                                    <h5 class="unique-card-title">Websites</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-12 col-md-4">
                        <!-- Card with Link -->
                        <a href="your-link-for-mobile-apps" style="text-decoration: none;">
                            <div class="card unique-card-solutions">
                                <div class="unique-card-body">
                                    <i class="fa-solid fa-layer-group unique-icon"></i>
                                    <h5 class="unique-card-title">Mobile Apps</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-12 col-md-4">
                        <!-- Card with Link -->
                        <a href="your-link-for-desktop-app" style="text-decoration: none;">
                            <div class="card unique-card-solutions">
                                <div class="unique-card-body">
                                    <i class="fa-solid fa-layer-group unique-icon"></i>
                                    <h5 class="unique-card-title">Desktop App</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

  <div class="slider-container">
    <div class="slider-text-section">
      <h1>Trusted by Thousands of CS Students</h1>
      <p>Mission CS Test Series are the best for CS exams because they have ICSI level questions in their papers. Mission CS Test Series also had substantial Positive results in the last CS exams, showing how good they are. Their answer sheet evaluation is the best in the industry, and they give detailed analysis and feedback. The CS Test Series is made by ICSI rankers and qualified CS which make the most trusted and reliable Test Series in the industry.</p>
      <a href="<?=base_url()?>/level?category=cs-test-series"> <button class="slider-cta-btn">Enroll Now</button></a>
    </div>
    <div class="image-slider">
      <div class="slider-wrapper">
        <img src="<?=base_url()?>/assetItems/image/img-sld-1.jpg" alt="Slide 1">
        <img src="<?=base_url()?>/assetItems/image/img-sld-2.jpg" alt="Slide 2">
        <img src="<?=base_url()?>/assetItems/image/img-sld-3.jpg" alt="Slide 3">
        <img src="<?=base_url()?>/assetItems/image/img-sld-4.jpg" alt="Slide 4">
      </div>
      <div class="slider-pagination">
        <span class="active"></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>

<section>
   <!-- Card Section -->
    <div class="container mt-5">
        <div class="card shadow-sm border-0 mb-3" style="border-radius: 15px;">
            <div class="card-body">
                <!--<h5 class="card-title text-center text-white py-2" style="background-color: #2FBCCD; border-radius: 10px;">Why Mission CS Test Series?</h5>-->
                <div class="container-title-not">
                  <h1-not>Why Mission CS Test Series?</h1-not>
                </div>
                <!-- <p class="card-text mt-3">Mission CS Test Series is designed by Rankers who have years of experience. We have carefully crafted each test to cover the entire syllabus and provide you with the best practice and revision. You will get access to multiple tests, each with detailed solutions and explanations. You will also get feedback and analysis of your performance, along with tips and tricks to improve your score.</p>
                <p class="card-text">Mission CS Test Series is the most trusted and reliable test series for the CS exams. Thousands of students have used our test series and achieved their dream of becoming a professional. You can be one of them too. Join Mission CS Test Series today and get ready to conquer the CS Exams.</p> -->
                <p>Mission CS Test Series is designed by Rankers who have years of experience. We have carefully designed each test to cover the entire syllabus and provide you with the best practice and revision. You will get access to multiple test series, each with detailed evaluation and  feedback on your answersheets. You will also get feedback and analysis of your performance, along with Improvement suggestions.</p>
                <p>Mission CS Test Series is the most trusted and reliable test series for the CS exams. Thousands of students have used our test series and achieved their dream of becoming a Company Secretary. You can be one of them too. Join Mission CS Test Series today and get ready to conquer the CS Exams.</p>
            </div>
        </div>
    </div>
</section>

<section class="faq-section">
    <h1 class="faq-title">FAQ</h1>
    <div class="accordion">
        <div class="accordion-item">
            <div class="accordion-header" onclick="toggleAccordion(this)">
                What is the Mission CS Test Series?
            </div>
            <div class="accordion-body">
                <p>
                    Mission CS Test Series offers comprehensive test series tailored for Company Secretary (CS) students, covering CSEET, CS Executive, and CS Professional levels. The test series are designed to align with the latest examination trends and provide a real-exam experience.
                </p>
            </div>
        </div>

        <div class="accordion-item">
            <div class="accordion-header" onclick="toggleAccordion(this)">
                How can I enroll in the test series?
            </div>
            <div class="accordion-body">
                <p>
                    To enroll, visit the Mission CS Test Series website, select your desired course level (CSEET, Executive, or Professional), and choose a test series package. After completing the payment, you will get immediate access to the test materials.
                </p>
            </div>
        </div>

        <div class="accordion-item">
            <div class="accordion-header" onclick="toggleAccordion(this)">
                What are the unique features of the Mission CS Test Series?
            </div>
            <div class="accordion-body">
                <p>
                    The test series is designed with a blend of unseen and unique questions based on the ICSI pattern. Other features include personalized feedback, progress tracking, and a flexible study schedule.
                </p>
            </div>
        </div>

        <div class="accordion-item">
            <div class="accordion-header" onclick="toggleAccordion(this)">
                Can I attempt the test series at my own pace?
            </div>
            <div class="accordion-body">
                <p>
                    Yes, with Mission CS Test Series, you can study and take the tests at your own pace, anytime and from anywhere.
                </p>
            </div>
        </div>

        <div class="accordion-item">
            <div class="accordion-header" onclick="toggleAccordion(this)">
                Do you provide feedback after tests?
            </div>
            <div class="accordion-body">
                <p>
                    Yes, after each test, you receive detailed feedback on your performance, including tips for improvement and suggestions for enhancing your presentation skills.
                </p>
            </div>
        </div>

        <div class="accordion-item">
            <div class="accordion-header" onclick="toggleAccordion(this)">
                What is the refund policy for the test series?
            </div>
            <div class="accordion-body">
                <p>
                    The refund policy of Mission CS Test Series ensures that if you cancel your subscription within the stipulated time, you may be eligible for a refund based on the policy terms.
                </p>
            </div>
        </div>
    </div>
</section>

<script>
    function toggleAccordion(header) {
        const body = header.nextElementSibling;
        const isActive = header.classList.contains('active');

        // Close all open accordions
        document.querySelectorAll('.accordion-header').forEach((el) => el.classList.remove('active'));
        document.querySelectorAll('.accordion-body').forEach((el) => {
            el.classList.remove('active');
            el.style.maxHeight = '0';
        });

        // Toggle current accordion
        if (!isActive) {
            header.classList.add('active');
            body.classList.add('active');
            body.style.maxHeight = body.scrollHeight + 'px';
        }
    }
</script>

<section class="py-5 container" id="blog-section">
    <div class="container-title">
        <h1-not>Blogs</h1-not>
    </div>
        <div class="row">
            <?php if (!empty($blog_list)): ?>
              <?php foreach ($blog_list as $blogRow): ?>
                <div class="col-sm-3">
                    <div class="card">
                        <img src="<?=base_url().$blogRow->blog_temp_image?>" class="card-img-top" alt="blog items image" style="height: 200px;">
                      <div class="card-body">
                        <h5 class="card-title"><?=$blogRow->blog_heading?></h5>
                        <?php
                          $blogText = '';
                          if (!empty($blogRow->blog_text)) {
                            $blogText = strip_tags($blogRow->blog_text);
                          }
                          $blogText = strlen($blogText) > 20  ? substr($blogText, 0,20).'...' : $blogText;
                        ?>
                        <p class="card-text"><?=$blogText?></p>
                        <a href="<?=base_url()?>blog?item=<?=$blogRow->blog_short_name?>" class="btn btn-custom">Read More <i class="bi bi-arrow-right"></i></a>
                      </div>
                    </div>
                </div>
              <?php endforeach ?>
            <?php endif ?>
            
        </div>
        <?php if (!empty($blog_list) && count($blog_list) > 4): ?>
          <div class="row mt-2">
              <div class="col-md-12 d-flex justify-content-end">
                  <a href="<?=base_url()?>blog-list" class="btn btn-sm btn-custom">View More <i class="bi bi-arrow-right"></i></a>
              </div>
          </div>
        <?php endif ?>
    </section>

<section>
    <div class="container mt-5">
        <div class="card shadow-sm border-0 mb-3" style="border-radius: 15px;">
            <div class="card-body">
                <!--<h5 class="card-title text-center text-white py-2" style="background-color: #2FBCCD; border-radius: 10px;">Why Mission CS Test Series?</h5>-->
                <div class="container-title-not">
                  <h1-not>Years of Impact</h1-not>
                </div>
                <p class="card-text mt-3">
To help CS students, we Created Instagram page. Later on , many qualified CS and CA  joined our team with the same motive.
<br>
Since 2019, we have helped thousands of CSEET, CS Executive, and CS Professional students on their journey. We have Hosted many free live mentorship sessions for CS Students and  also offered free Test Series for CS Students with evaluation. We also hosted  many free Live Guidance Sessions for qualified CS to guide them in their professional Journey.
<br>
Now, to help more CS students, we have launched MISSION CS TEST SERIES. It offers the most affordable and quality CS Test Series for CS exams, followed by live mentorship from Rankers.</p>
                  </div>
        </div>
    </div>
</section>

<section class="py-5 container" id="newsletter_section">
      <div class="row">
        <div class="col-md-6">
            <div class="row address-container">
                <div class="col-md-6 mb-4">
                    <div class="card" style="background: #fafbff;border: none;height:10rem;">
                        <div class="card-body">
                            <h2><i class="bi bi-geo-alt"></i></h2>
                            <h4>Address</h4>
                            <p>Ghaziabad, Delhi NCR</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card" style="background: #fafbff;border: none;height:10rem;">
                        <div class="card-body">
                            <h2><i class="bi bi-telephone"></i></h2>
                            <h4>Call Us</h4>
                            <p>+91 9873045724</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mt-4">
                    <div class="card" style="background: #fafbff;border: none;height:10rem;">
                        <div class="card-body">
                            <h2><i class="bi bi-envelope"></i></h2>
                            <h4>Email</h4>
                            <p>exam@missioncstestseries.com</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 my-4">
                    <div class="card" style="background: #fafbff;border: none;height:10rem;">
                        <div class="card-body">
                            <h2><i class="bi bi-clock"></i></h2>
                            <h4>Open Hours</h4>
                            <p>Sales: 24×7<br></p>
                            <p>Others: Monday - Friday(10:00 AM to 8:00 PM)</p>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
        <div class="col-md-6 d-flex justify-content-center">
          <div class="unique-newsletter-box">
            <h6 class="unique-text-primary mb-2">NEWSLETTER</h6>
            <h2 class="mb-4">Join to get exclusive contents for free.</h2>
            <div class="form-group">
                <input type="email" class="form-control unique-input newsLetterForm" placeholder="Email address" required>
            </div>
            <a href="javascript:void(0)" class="btn unique-btn-primary btn-block addNewsLetterBtn">Join Now</a>
            <ul class="list-unstyled">
                <li class="d-flex align-items-center mb-2">
                    <span class="unique-checkmark"></span>
                    <span>Get weekly reports</span>
                </li>
                <li class="d-flex align-items-center mb-2">
                    <span class="unique-checkmark"></span>
                    <span>Unlimited free resources</span>
                </li>
                <li class="d-flex align-items-center">
                    <span class="unique-checkmark"></span>
                    <span>Premium contents</span>
                </li>
            </ul>
          </div>
        </div>
      </div>
    </section>

<section class="py-5 container" id="image-section">
<div class="container-fluid">
        <img src="<?=base_url()?>/assetItems/image/owner.jpg" class="img-fluid" alt="Responsive image">
    </div>
</section> 

<section>
  <!-- Mini Install Bar -->
  <div id="custom-install-bar" style="display: none;">
    <div id="install-bar-content">
      <p>🚀 Install <strong>Mission CS Test Series</strong> for a faster, smoother experience!</p>
      <button id="install-app-button">Install Now</button>
      <button id="close-install-bar">&times;</button> <!-- Close button -->
    </div>
  </div>
</section>

<?= $this->endSection() ?>
<?=$this->section('jsContent')?>
  <script type="text/javascript">
    var pageType = 'index';
  </script>
  <script src="<?=base_url()?>assets/student/js/view.js?1.0.3"></script>
<?= $this->endSection() ?>
