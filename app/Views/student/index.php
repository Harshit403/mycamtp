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
.cs-btn-demo {
  background-color: #e63e58;
  color: #fff;
  border: none;
  padding: 0.8rem 1.5rem;
  font-size: 1rem;
  border-radius: 5px;
  cursor: pointer;
  transition: all 0.3s ease-in-out;
}

.cs-btn-demo:hover {
  background-color: #bf3246;
}
</style>

<?php if (session()->get('studentDetails') !== null): ?>
<style>
    .cs-container {
      margin-top: 5rem;
  }
</style>
<?php else: ?>
<style>
    .cs-container {
      margin-top: 8rem;
  }
</style>
<?php endif; ?>

<div class="cs-container">
  <!-- Left Section -->
  <div class="cs-text-section">
    <h1>Mission <span class="cs-highlight">CS Test Series</span></h1>
    <p class="cs-description text-start">We offer the most affordable and Quality CS Test series for CS Executive and CS Professional exams, along with live Mentorship from Rankers and Qualified Company Secretaries.</p>
    <p class="cs-description text-start">Each of our test series is designed by AIRs considering the needs of CS Executive and Professional exams.</p>

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
  <!-- Right Section -->
  <div class="cs-image-section">
    <img class="cs-desktop-img" src="https://executivetestseries.click/wp-content/uploads/2024/12/pie8.png" alt="Pie Chart">
  </div>
</div>

<style>
  .cs-container {
    display: flex;
    flex-direction: row; /* Default to row layout for desktop */
    justify-content: space-between;
    align-items: center;
    padding: 2rem;
    gap: 2rem;
  }

  .cs-text-section {
    flex: 1;
  }

  .cs-text-section h1 {
    font-size: 2.5rem;
    color: #000;
    margin-bottom: 1rem;
  }

  .cs-highlight {
    color: #e63e58;
  }

  .cs-description {
    font-size: 1rem;
    margin: 1rem 0;
    color: #000000;
  }

  .cs-btn-demo {
    background-color: #e63e58;
    color: #fff;
    border: none;
    padding: 0.8rem 1.5rem;
    font-size: 1rem;
    border-radius: 5px;
    cursor: pointer;
    transition: all 0.3s ease-in-out;
  }

  .cs-btn-demo:hover {
    background-color: #bf3246;
  }

  .cs-image-section {
    flex: 1;
    display: flex;
    justify-content: center;
    align-items: center;
  }

  .cs-desktop-img {
    width: 100%;
    max-width: 400px;
    height: auto;
  }

  /* Responsive Design */
  @media screen and (max-width: 768px) {
    .cs-container {
      flex-direction: column; /* Switch to column layout for mobile */
      align-items: center;
      text-align: center;
    }

    .cs-text-section {
      margin-bottom: 1rem;
    }

    .cs-text-section h1 {
      font-size: 2rem;
    }

    .cs-description {
      font-size: 0.9rem;
    }

    .cs-image-section {
      width: 100%;
    }

    .cs-desktop-img {
      max-width: 300px;
    }
  }
</style>


<style>
@keyframes slideRight {
    0%, 100% { transform: translateX(0); }
    50% { transform: translateX(5px); }
}
</style>

 <section class="py-5 category container" id="category-section">
        <h1 class="text-uppercase text-center">Category</h1>
        <div class="d-flex align-items-center justify-content-center flex-wrap" style="gap:10px 20px;">
          <?php if (!empty($categoryDetails)): ?>
              <?php foreach ($categoryDetails as $categoryRow): ?>
                  <a href="<?=base_url()?>level?category=<?=$categoryRow->category_short_name?>" class="btn" style="display: block; background-color: #e63e58; width: 88%; color: #fff; font-size: 14px; font-weight: bold; padding: 10px 20px; text-align: center; border-radius: 10px;"><?=$categoryRow->category_name?>  <i class="fas fa-arrow-right" style="margin-left: 10px; animation: slideRight 1s infinite;"></i></a>
              <?php endforeach ?>
          <?php endif ?>
        </div>
    </section> 


<style>        
        .unique-solutions-section {
            text-align: center;
        }

        .unique-icon {
            font-size: 50px;
            color: #e63e58;
            margin-top: 20px;
        }

        .unique-card-solutions {
            border: none;
            border-radius: 12px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .unique-card-solutions:hover {
            transform: translateY(-10px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }

        .unique-card-title {
            font-weight: bold;
            color: #333;
            margin-top: 10px;
        }

        .unique-card-body {
            text-align: center;
            padding: 20px;
        }
</style>

<section class="my-3">
    <div class="custom-bg-container">
        <div class="unique-solutions-section">
            <div class="container">
                <div class="row gy-4">
                    <?php 
                    try {
                        // Ensure $level_list is an array or iterable
                        if (!is_array($level_list) && !$level_list instanceof Traversable) {
                            throw new Exception("Invalid data: Level list is not iterable.");
                        }
                        
                        foreach ($level_list as $levelRow): ?>
                            <div class="col-12 col-md-4">
                                <!-- Card with Link -->
                                <a href="<?= base_url() ?>type?category=<?= htmlspecialchars($levelRow->category_short_name) ?>&&level=<?= htmlspecialchars($levelRow->level_short_name) ?>" style="text-decoration: none;">
                                    <div class="card unique-card-solutions">
                                        <div class="unique-card-body">
                                            <i class="fa-solid fa-layer-group unique-icon"></i>
                                            <h5 class="unique-card-title"><?= htmlspecialchars($levelRow->level_name) ?></h5>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        <?php endforeach; 
                    } catch (Exception $e) { ?>
                        <div class="alert alert-danger" role="alert">
                            Error: <?= htmlspecialchars($e->getMessage()) ?>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</section>

    <style>
        .super-custom-bg-wrapper {
            background: linear-gradient(90deg, #f9e6f3, #e6f9f9);
            padding: 60px 20px;
        }

	.container-xy {
            text-align: center;
        }
	.container-xy {
            text-align: center;
	}
        .icon-heart-custom {
            font-size: 50px;
            color: #E63E58;
        }

        .title-solutions-custom {
            font-weight: bold;
            font-size: 24px;
            color: #333;
        }

        .subtitle-solutions-custom {
            color: #555;
            font-size: 16px;
            margin-top: 10px;
            margin-bottom: 30px;
        }

        .card-solutions-custom {
            border: none;
            border-radius: 12px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .card-solutions-custom:hover {
            transform: translateY(-10px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }

        .card-img-custom {
            width: 80px;
            height: auto;
            margin-top: 20px;
        }

        .card-title-custom {
            font-weight: bold;
            color: #333;
            margin-top: 10px;
        }

        .card-body-custom {
            text-align:  center;
            padding: 20px;
        }

	.list-xy {
            text-align: left !important;
	}
	list-zx {
             text-align: left !important;
	}
    </style>

<section>
    <div class="super-custom-bg-wrapper">
        <div class="section-unique-solutions">
            <h2 class="title-solutions-custom text-center">One Minute Read</h2>
            <div class="subtitle-solutions-custom text-start">
         <div class="list-zx text-start">
         <ul class="list-unstyled text-start list-xy">
        <li class="d-flex align-items-center mb-2 text-start">
            <i class="fas fa-lightbulb me-2 text-start" style="color: #e63e58;"></i> Hidden Strategy by AIRs
        </li>
        <li class="d-flex align-items-center mb-2 text-start">
            <i class="fas fa-book-open me-2 text-start" style="color: #e63e58;"></i> Case-based Questions
        </li>
        <li class="d-flex align-items-center text-start mb-2">
            <i class="fas fa-user-cog me-2 text-start" style="color: #e63e58;"></i> Personalised Study Plan
        </li>
        <li class="d-flex align-items-center mb-2 text-start">
            <i class="fas fa-file-alt me-2 text-start" style="color: #e63e58;"></i> Test Series like Real Exam's Paper
        </li>
        <li class="d-flex align-items-center mb-2 text-start">
            <i class="fas fa-brain me-2 text-start" style="color: #e63e58;"></i> Understand What Examiner Expects from You
        </li>
        <li class="d-flex align-items-center mb-2 text-start">
            <i class="fas fa-check-circle me-2 text-start" style="color: #e63e58;"></i> ICSI Level Checking
        </li>
    </ul>
	 </div>	    
	</div>			    
            <div class="container-xy">
                <div class="row gy-4">
                    <div class="col-12 col-md-4">
                        <div class="card card-solutions-custom">
                            <div class="card-body-custom">
                               <i class="fa-solid fa-book-open-reader icon-heart-custom"></i>
                                <h5 class="card-title-custom">Test Series</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="card card-solutions-custom">
                            <div class="card-body-custom">
                               <i class="fa-solid fa-video icon-heart-custom"></i>
                                <h5 class="card-title-custom">1-1 Mentorship</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="card card-solutions-custom">
                            <div class="card-body-custom">
                              <i class="fa-solid fa-bullseye icon-heart-custom"></i>
                                <h5 class="card-title-custom">Rankers Support</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

			    
    <style>

        .unique-solutions-section {
            text-align: center;
        }

        .unique-title-solutions {
            font-weight: bold;
            font-size: 24px;
            color: #333;
        }

        .unique-subtitle-solutions {
            color: #555;
            font-size: 16px;
            margin-top: 10px;
            margin-bottom: 30px;
        }

        .carousel-item img {
            max-height: 200px;
            object-fit: contain;
            margin: 0 auto;
        }

        .unique-carousel-container {
            border: none;
            border-radius: 12px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }
    </style>
<section class="my-3">
    <div class="custom-bg-container">
        <div class="unique-solutions-section">
            <h2 class="unique-title-solutions text-center">Trusted By Thousands of CS Students</h2>

            <!-- Carousel Section -->
            <div id="uniqueSolutionCarousel" class="carousel slide unique-carousel-container" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="<?=base_url()?>/assetItems/image/img-sld-1.jpg" class="d-block w-100" alt="Websites">
                        <div class="carousel-caption">
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="<?=base_url()?>/assetItems/image/img-sld-2.jpg" class="d-block w-100" alt="Mobile Apps">
                        <div class="carousel-caption">
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="<?=base_url()?>/assetItems/image/img-sld-3.jpg" class="d-block w-100" alt="Desktop App">
                        <div class="carousel-caption">
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="<?=base_url()?>/assetItems/image/img-sld-4.jpg" class="d-block w-100" alt="Cloud Solutions">
                        <div class="carousel-caption">
                        </div>
                    </div>
                </div>

                <!-- Carousel Controls -->
                <button class="carousel-control-prev" type="button" data-bs-target="#uniqueSolutionCarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#uniqueSolutionCarousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>
</section>

<section>
   <!-- Card Section -->
    <div class="container mt-5">
        <div class="card shadow-sm border-0 mb-3" style="border-radius: 15px;">
            <div class="card-body">
                <div class="container-title-not">
                  <h1-not>Why Test Series is Important?</h1-not>
                </div>
                <div class="text-start" style="font-family: Arial, sans-serif; line-height: 1.6; color: #333;">
                 <p>Passing CS Exams Isn't Easy.
                 Just studying randomly or writing CS exams without a proper plan won't help in CS exams. Many students study for 14 to 16 hours a day—reading, learning, practicing, memorizing, and revising—but still fail.
                 <p>They don't fail because they don't study but because they don't follow the right strategy.
                 <p>Don't take multiple attempts to improve your mistakes one by one. Just write our mock test series and improve before appearing for ICSI exams.</p>
		</div>
	    </div>
        </div>
    </div>
</section>

<style>
          .faq-sec {
            text-align: center;
            background: #fff;
            color: #000;
            border-radius: 8px;
            padding: 2rem;
            max-width: 1200px;
            margin: 1rem auto;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
        }


        .accordion-a {
            border: none;
            margin-bottom: 1rem;
        }

        .accordion-a-item {
            background-color: #f7f7f7;
            border: 1px solid #ddd;
            margin-bottom: 1rem;
            border-radius: 8px;
            overflow: hidden;
        }

        .accordion-a-header {
            cursor: pointer;
            padding: 1rem;
            font-size: 1.2rem;
            font-weight: 500;
            color: #000;
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #f7f7f7;
            border: none;
            transition: all 0.3s ease;
        }

        .accordion-a-header:hover {
            background-color: #e5e5e5;
        }

        .accordion-a-header:after {
            content: '+';
            font-size: 1.5rem;
            color: #888;
            transition: transform 0.3s ease;
        }

        .accordion-a-header.active:after {
            content: '-';
            color: #000;
        }

        .accordion-a-body {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.3s ease, padding 0.3s ease;
            background-color: #fff;
            padding: 0 1rem;
        }

        .accordion-a-body p {
            margin: 1rem 0;
            color: #444;
        }

        .accordion-a-body.active {
            max-height: 500px;
            padding: 1rem;
        }

        /* Responsive Styling */
        @media (max-width: 768px) {

            .accordion-a-header {
                font-size: 1rem;
                padding: 0.8rem;
            }

            .accordion-a-body p {
                font-size: 0.9rem;
            }
        }

        @media (max-width: 480px) {

            .faq-sec {
                padding: 1rem;
            }

            .accordion-a-header {
                font-size: 0.9rem;
                padding: 0.7rem;
            }

            .accordion-a-body p {
                font-size: 0.8rem;
            }
        }
    

</style>

<section class="faq-sec faq-section" id="faq-section">
    <h1-not>FAQs</h1-not>
    <div class="accordion-a">
        <div class="accordion-a-item">
            <div class="accordion-a-header" onclick="toggleAccordiona(this)">
                What is the Mission CS Test Series?
            </div>
            <div class="accordion-a-body">
                <p>
                    Mission CS Test Series offers comprehensive test series tailored for Company Secretary (CS) students, covering CSEET, CS Executive, and CS Professional levels. The test series are designed to align with the latest examination trends and provide a real-exam experience.
                </p>
            </div>
        </div>

        <div class="accordion-a-item">
            <div class="accordion-a-header" onclick="toggleAccordiona(this)">
                How can I enroll in the test series?
            </div>
            <div class="accordion-a-body">
                <p>
                    To enroll, visit the Mission CS Test Series website, select your desired course level (CSEET, Executive, or Professional), and choose a test series package. After completing the payment, you will get immediate access to the test materials.
                </p>
            </div>
        </div>

        <div class="accordion-a-item">
            <div class="accordion-a-header" onclick="toggleAccordiona(this)">
                What are the unique features of the Mission CS Test Series?
            </div>
            <div class="accordion-a-body">
                <p>
                    The test series is designed with a blend of unseen and unique questions based on the ICSI pattern. Other features include personalized feedback, progress tracking, and a flexible study schedule.
                </p>
            </div>
        </div>

        <div class="accordion-a-item">
            <div class="accordion-a-header" onclick="toggleAccordiona(this)">
                Can I attempt the test series at my own pace?
            </div>
            <div class="accordion-a-body">
                <p>
                    Yes, with Mission CS Test Series, you can study and take the tests at your own pace, anytime and from anywhere.
                </p>
            </div>
        </div>

        <div class="accordion-a-item">
            <div class="accordion-a-header" onclick="toggleAccordiona(this)">
                Do you provide feedback after tests?
            </div>
            <div class="accordion-a-body">
                <p>
                    Yes, after each test, you receive detailed feedback on your performance, including tips for improvement and suggestions for enhancing your presentation skills.
                </p>
            </div>
        </div>

        <div class="accordion-a-item">
            <div class="accordion-a-header" onclick="toggleAccordiona(this)">
                What is the refund policy for the test series?
            </div>
            <div class="accordion-a-body">
                <p>
                    The refund policy of Mission CS Test Series ensures that if you cancel your subscription within the stipulated time, you may be eligible for a refund based on the policy terms.
                </p>
            </div>
        </div>
    </div>
</section>

<script>
    function toggleAccordiona(header) {
        const body = header.nextElementSibling;
        const isActive = header.classList.contains('active');

        // Close all open accordions
        document.querySelectorAll('.accordion-a-header').forEach((el) => el.classList.remove('active'));
        document.querySelectorAll('.accordion-a-body').forEach((el) => {
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

<section>
    <div class="super-custom-bg-wrapper">
        <div class="section-unique-solutions">
            <h2 class="title-solutions-custom text-center">Why Mission CS TEST SERIES?</h2>
            <p class="subtitle-solutions-custom text-start">We have carefully  Designed  each Question Paper after analysing  the whole syllabus,  Past Trend,  and considering the Amendments. 
<br>
Each Questions  is selected  based on ABC Analysis  which means we focus on Important  topics. 
This ensures  that  you Prepare  Smartly  not blindly</p>
        </div>
    </div>
</section>


  <style>
    /* Sticky WhatsApp Icon Styles */
    .whatsapp-icon {
      position: fixed;
      bottom: 85px;
      right: 20px;
      width: 60px;
      height: 60px;
      background-color: #25d366;
      border-radius: 50%;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
      display: flex;
      justify-content: center;
      align-items: center;
      cursor: pointer;
      z-index: 1000;
      animation: pulse 1.5s infinite;
    }

    .whatsapp-icon img {
      width: 35px;
      height: 35px;
    }

    .whatsapp-icon:hover {
      transform: scale(1.1);
      transition: transform 0.3s;
    }

    @keyframes pulse {
      0% {
        transform: scale(1);
        box-shadow: 0 0 0 0 rgba(37, 211, 102, 0.7);
      }
      50% {
        transform: scale(1.1);
        box-shadow: 0 0 0 10px rgba(37, 211, 102, 0);
      }
      100% {
        transform: scale(1);
        box-shadow: 0 0 0 0 rgba(37, 211, 102, 0);
      }
  </style>

<body>
  <!-- WhatsApp Icon -->
  <div class="whatsapp-icon" onclick="redirectToWhatsApp()">
    <img src="https://upload.wikimedia.org/wikipedia/commons/6/6b/WhatsApp.svg" alt="WhatsApp Icon">
  </div>

  <script>
    // Redirect to WhatsApp Chat
    function redirectToWhatsApp() {
      const phoneNumber = "+918929592998"; // Replace with your WhatsApp number
      const message = "Hello! I am looking for a test series."; // Optional initial message
      const url = `https://wa.me/${phoneNumber}?text=${encodeURIComponent(message)}`;
      window.open(url, "_blank");
    }
  </script>

<style>
.mcst-blog-section {
    padding: 40px 20px;
}

.mcst-title {
    font-size: 2.8rem;
    color: #e63e58;
    text-align: center;
    margin-bottom: 10px;
    font-weight: 700;
}

.mcst-subtitle {
    text-align: center;
    color: #666;
    margin-bottom: 40px;
    font-size: 1rem;
}

.mcst-blog-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
    gap: 30px;
    justify-content: center;
    padding: 0 10px;
}

.mcst-blog-card {
    background-color: #ffffff;
    border-radius: 12px;
    overflow: hidden;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.mcst-blog-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 15px rgba(0, 0, 0, 0.15);
}

.mcst-blog-image {
    height: 200px;
    padding: 5px;
    overflow: hidden;
    position: relative;
}

.mcst-blog-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.5s ease;
}

.mcst-blog-card:hover .mcst-blog-image img {
    transform: scale(1.1);
}

.mcst-blog-content {
    padding: 20px;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
}

.mcst-blog-heading {
    font-size: 1.25rem;
    color: #333;
    margin: 0 0 10px;
    font-weight: bold;
    line-height: 1.3;
}

.mcst-blog-text {
    font-size: 0.9rem;
    color: #555;
    line-height: 1.6;
    margin-bottom: 15px;
    text-align: justify;
}

.mcst-read-more {
    display: inline-block;
    font-size: 0.9rem;
    color: #e63e58;
    text-decoration: none;
    font-weight: bold;
    transition: color 0.3s ease;
}

.mcst-read-more:hover {
    color: #d22c45;
}

.mcst-no-blogs {
    text-align: center;
    color: #888;
    font-size: 1rem;
    margin-top: 20px;
}
.mcst-lazy-image {
    filter: blur(5px);
    transition: filter 0.3s ease-in-out;
}

.mcst-lazy-image[src] {
    filter: blur(0);
}
@media (max-width: 768px) {
    .mcst-title {
        font-size: 2.2rem;
    }

    .mcst-subtitle {
        font-size: 0.9rem;
    }
	}
</style>

<section class="mcst-blog-section">
    <div class="mcst-container">
        <div class="mcst-header">
            <h1 class="mcst-title">Our Blogs</h1>
        </div>
        <div class="mcst-blog-grid">
            <?php 
            if (!empty($blog_list)): 
                $limited_blogs = array_slice($blog_list, 0, 3); // Get only the first 3 blogs
                foreach ($limited_blogs as $blogRow): 
            ?>
                    <div class="mcst-blog-card">
                        <div class="mcst-blog-image">
                            <img 
                                data-src="<?=base_url().$blogRow->blog_temp_image?>" 
                                alt="Blog Image" 
                                class="mcst-lazy-image"
                            >
                        </div>
                        <div class="mcst-blog-content">
                            <h3 class="mcst-blog-heading"><?=$blogRow->blog_heading?></h3>
                            <p class="mcst-blog-text">
                                <?php
                                $blogText = '';
                                if (!empty($blogRow->blog_text)) {
                                    $blogText = strip_tags($blogRow->blog_text);
                                }
                                $blogText = strlen($blogText) > 20  ? substr($blogText, 0,20).'...' : $blogText;
                                echo $blogText;
                                ?>
                            </p>
                            <a href="<?=base_url()?>blog?item=<?=$blogRow->blog_short_name?>" class="mcst-read-more">
                                Read More <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>
            <?php 
                endforeach; 
            ?>
                <?php if (count($blog_list) > 3): ?>
                   <div style="text-align: center;">
                    <a href="<?=base_url()?>blog-list"> 
                    <button class="cs-btn-demo">Read More blogs</button>
                    </a>
                   </div>
                <?php endif; ?>
            <?php 
            else: 
            ?>
                <p class="mcst-no-blogs">No blogs available at the moment.</p>
            <?php endif; ?>
        </div>
    </div>
</section>


<script>
	document.addEventListener("DOMContentLoaded", function () {
    const lazyImages = document.querySelectorAll(".mcst-lazy-image");

    const lazyLoad = (image) => {
        const src = image.getAttribute("data-src");
        if (!src) return;
        image.src = src;
        image.removeAttribute("data-src");
    };

    const observer = new IntersectionObserver(
        (entries, observer) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    lazyLoad(entry.target);
                    observer.unobserve(entry.target);
                }
            });
        },
        { threshold: 0.1 }
    );

    lazyImages.forEach((image) => observer.observe(image));
});
</script>

<section class="d-flex justify-content-center align-items-center" id="newsletter_section" style="background-color: #f7f7f9; padding: 40px 0;">
  <div class="row align-items-center justify-content-center" style="margin: 0; padding: 0;">
    <!-- Newsletter Section -->
    <div class="col-md-6">
      <div class="unique-newsletter-box p-4" style="background: #ffffff; border-radius: 10px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);">
        <h6 style="color: #e63e58; font-size: 14px; font-weight: bold; text-transform: uppercase;">Newsletter</h6>
        <h2 style="font-size: 20px; color: #333; font-weight: bold; margin-bottom: 20px;">Join to get exclusive updates and contents for free.</h2>
        <div class="form-group mb-3"> 
          <input type="email" class="form-control newsLetterForm" style="border: 1px solid #ddd; border-radius: 6px; font-size: 14px; padding: 10px;" placeholder="Email address" required>
	</div>
        <a href="javascript:void(0)" class="btn addNewsLetterBtn" style="display: block; background-color: #e63e58; color: #fff; font-size: 14px; font-weight: bold; padding: 10px 20px; text-align: center; border-radius: 6px;">Join Now</a>
      </div>
    </div>
  </div>
</section>

  <style>
    /* Mini Info Bar at the bottom */
    #custom-install-bar {
      position: fixed;
      bottom: -50px; /* Initially hidden */
      left: 0;
      width: 100%;
      background: #4caf50;
      color: white;
      box-shadow: 0 -5px 10px rgba(0, 0, 0, 0.2);
      z-index: 1000;
      font-family: 'Arial', sans-serif;
      padding: 10px;
      text-align: center;
      border-radius: 25px 25px 0 0;
      transition: bottom 0.3s ease-in-out;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    #install-bar-content {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 0 15px;
      flex: 1;
    }

    #install-bar-content p {
      margin: 0;
      font-size: 14px;
      flex: 1;
    }

    #install-app-button {
      padding: 8px 15px;
      font-size: 14px;
      font-weight: bold;
      color: #4caf50;
      background: white;
      border: none;
      border-radius: 15px;
      cursor: pointer;
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    #install-app-button:hover {
      transform: scale(1.05);
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);
    }

    /* Close Button Style */
    #close-install-bar {
      background: none;
      border: none;
      font-size: 20px;
      color: white;
      cursor: pointer;
      margin-left: 10px;
    }

    /* Close Button Hover Effect */
    #close-install-bar:hover {
      color: #f44336;
    }

  </style>



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

<!-- start webpushr code --> <script>(function(w,d, s, id) {if(typeof(w.webpushr)!=='undefined') return;w.webpushr=w.webpushr||function(){(w.webpushr.q=w.webpushr.q||[]).push(arguments)};var js, fjs = d.getElementsByTagName(s)[0];js = d.createElement(s); js.id = id;js.async=1;js.src = "https://cdn.webpushr.com/app.min.js";fjs.parentNode.appendChild(js);}(window,document, 'script', 'webpushr-jssdk'));webpushr('setup',{'key':'BKyPm_qNFX-rSaSabH_2G-ub8FGSHPXSGzzM23zaP8NIm2N_rskcfDEVZ7qrSnOdO3sAWLPfMZeYTlbxjZBp1VQ' });</script><!-- end webpushr code -->

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
<?= $this->endSection() ?>
