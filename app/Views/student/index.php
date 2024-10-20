<?= $this->extend('student/layout/layout') ?>
<?=$this->section('title')?>
  Mission CS Test Series 
<?= $this->endSection() ?>
<?= $this->section('meta_description') ?>
Most Trusted CS Test Series for CSEET CS Executive and CS Professional | Mission CS Test Series
<?=$this->endSection()?>
<?= $this->section('meta_keywords') ?>
cs test series, cstestseries , cs executive test series, cs professional test series, icsi test series, cs executive test series, cs online test Series, cs exam, cs exams test series, cs exams, best test series for cs exams
<?=$this->endSection()?>
<?=$this->section('content')?>

<script type="application/ld+json">
    {
      "@context" : "https://schema.org",
      "@type" : "WebSite",
      "name" : "Mission CS Test Series",
      "alternateName" : "CS Test Series",
      "url" : "https://missioncstestseries.com/"
    }
</script>

<div itemscope itemtype="https://schema.org/WebSite">
  <link itemprop="url" href="https://missioncstestseries.com" />
    <meta itemprop="name" content="Mission CS Test Series"/>
    <meta itemprop="alternateName" content="CS Test Series"/>
</div>

 <!-- <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel" style="margin-top: 79px;">
      <div class="carousel-inner">
        <div class="carousel-item active" data-bs-interval="5000">
          <img src="<?=base_url()?>carousel/assets/img.jpg" class="d-block w-100 imgClass" alt="...">
        </div>
        <div class="carousel-item" data-bs-interval="5000">
          <img src="<?=base_url()?>carousel/assets/img.jpg" class="d-block w-100 imgClass" alt="...">
        </div>
        <div class="carousel-item">
          <img src="<?=base_url()?>carousel/assets/img.jpg" class="d-block w-100 imgClass" alt="...">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
  </div> -->
   <!-- <section class="header-text container py-5 m-2" id="intro-section">
        <h1 class="text-uppercase text-center">The Key of <font class="text-success">success</font></h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    </section> -->
<!-- <div>
  <section class="container text-center mt-5 py-5 bg-white">
    <h1 class="text-danger mb-4 fw-bolder" style="color: #FF1744; font-size: 2.5rem;">MISSION CS <span class="text-danger"> Test Series</span></h1>
    <p class="lead text-dark font-weight-light">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
  </section>
</div> -->

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

<style>
/* Light, clean background suitable for top section */
.test-series {
    margin-top: 0;
    background-color: #E3FCFF; /* Soft blueish background */
    padding: 120px 20px; /* Spacious top section padding */
    border-radius: 0 0 50px 50px; /* Soft rounding at the bottom */
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05); /* Gentle shadow */
    position: relative;
    z-index: 1;
    overflow: hidden;
}

/* Decorative element to make top portion pop */
.test-series::before, .test-series::after {
    content: "";
    position: absolute;
    border-radius: 50%;
    background-color: rgba(0, 128, 128, 0.1);
    z-index: 0;
}

/* First decorative element: large soft teal circle */
.test-series::before {
    top: -150px;
    left: -150px;
    width: 400px;
    height: 400px;
}

/* Second decorative element: smaller circle for added depth */
.test-series::after {
    bottom: -120px;
    right: -100px;
    width: 250px;
    height: 250px;
    background-color: rgba(0, 128, 128, 0.15);
}

/* Added gradient wave effect to the background */
.wave-effect {
    position: absolute;
    bottom: 0;
    left: 0;
    width: 100%;
    height: 120px;
    background: url('https://www.svgrepo.com/show/344416/wave.svg') no-repeat bottom;
    background-size: cover;
    z-index: 1;
}

.container {
    max-width: 1200px;
    margin: 0 auto;
    text-align: center;
    z-index: 2;
    position: relative;
    padding: 0 20px;
}

/* Elegant and engaging heading */
.section-title {
    font-size: 60px; /* Larger, bolder title */
    font-weight: 800;
    color: #007B7B; /* Dark teal for a professional touch */
    margin-bottom: 25px;
    letter-spacing: 1.5px;
    line-height: 1.2;
}

/* Subtle description to support heading */
.intro-text {
    font-size: 24px;
    color: #4D4D4D; /* Soft grey for text */
    margin-bottom: 20px;
    line-height: 1.8;
}

.description {
    font-size: 20px;
    font-style: italic;
    color: #333;
    margin-bottom: 40px;
}

/* Clean and visually appealing list of benefits */
.benefits-list {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 10px; /* Space between list items */
    padding: 0;
    margin: 0;
    list-style: none;
    position: relative;
}

/* Reduced card size and text adjustments */
.benefits-list li {
    background-color: #FFFFFF;
    padding: 20px; /* Reduced padding */
    width: 90%; /* Reduced width for smaller cards */
    max-width: 260px; /* Optional: Max width for consistency */
    border-radius: 12px;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1); /* Subtle shadow for depth */
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    text-align: left;
    position: relative;
}

/* Lift effect and shadow change on hover */
.benefits-list li:hover {
    transform: translateY(-10px);
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.15);
}

/* Icon design and color */
.benefits-list li i {
    font-size: 24px; /* Reduced icon size */
    color: #007B7B; /* Match with the title color */
    margin-right: 10px; /* Adjust margin for compact layout */
}

.benefits-list li span {
    font-size: 17px; /* Reduced text size */
    color: #333;
    white-space: normal; /* Allow text wrapping */
    line-height: 1.1; /* Adjust line-height for readability */
}

/* Responsive styling */
@media (max-width: 992px) {
    .section-title {
        font-size: 50px;
    }

    .benefits-list li {
        width: 45%; /* Two per row on tablets */
    }
}

@media (max-width: 768px) {
    .section-title {
        font-size: 38px;
    }

    .benefits-list li {
        width: 100%; /* One per row on mobile devices */
    }
    .intro-text {
        font-size: 20px;
    }
}

@media (max-width: 576px) {
    .section-title {
        font-size: 32px;
    }

    .benefits-list li {
        width: 100%;
        padding: 15px; /* Reduced padding for smaller screens */
    }

    .benefits-list li i {
        font-size: 14px; /* Further reduce icon size */
    }

    .benefits-list li span {
        font-size: 14px; /* Further reduce text size */
    }

    .intro-text {
        font-size: 18px;
    }
    .description {
        font-size: 16px;
    }
}

        .container-title {
            text-align: center;
            padding: 20px;
        }

        h1-not {
            font-size: 1.6rem; /* Reduced to be closer to h2 size */
            font-weight: 700;
            background: linear-gradient(90deg, #2fbccd, #11999e, #0e7490);
            background-size: 200%;
            background-position: left;
            -webkit-background-clip: text;
            color: transparent;
            animation: gradient-move 5s ease-in-out infinite;
            text-transform: uppercase;
            letter-spacing: 2px;
            margin: 0;
            position: relative;
        }

        /* Light shadow effect for depth */
        h1-not::after {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 110%;
            height: 110%;
            background: radial-gradient(circle, rgba(47,188,205,0.2) 0%, rgba(255,255,255,0) 70%);
            z-index: -1;
        }
</style>
<section class="test-series">
    <div class="container">
        <h1 class="section-title">Mission CS Test Series</h1>
        <p class="intro-text">We offer the most affordable and Quality CS Test series for CS Executive and CS Professional exams, along with live Mentorship from Rankers and Qualified Company Secretaries.</p>
        <p class="description">Each of our test series is designed by AIRs considering the needs of CS Executive and Professional exams.</p>
        
        <ul class="benefits-list">
            <li><i class="fas fa-check-circle"></i> <span>Complete Exam Strategy by Rankers</span></li>
            <li><i class="fas fa-check-circle"></i> <span>Mentorship by Rankers</span></li>
            <li><i class="fas fa-check-circle"></i> <span>Real Exam-like Question Papers</span></li>
            <li><i class="fas fa-check-circle"></i> <span>Guidance Until Exams</span></li>
            <li><i class="fas fa-check-circle"></i> <span>Proven Rank Boosting Strategies</span></li>
            <li><i class="fas fa-check-circle"></i> <span>Question Papers Set by Rankers</span></li>
        </ul>
    </div>
    <div class="wave-effect"></div> <!-- Added wave effect -->
</section>

   <!-- <section class="py-5 category container" id="category-section">
        <h1 class="text-uppercase text-center">Category</h1>
        <div class="d-flex align-items-center justify-content-center flex-wrap" style="gap:10px 20px;">
          <?php if (!empty($categoryDetails)): ?>
              <?php foreach ($categoryDetails as $categoryRow): ?>
                  <a class="strached-link" href="<?=base_url()?>level?category=<?=$categoryRow->category_short_name?>" style="text-decoration: none;"><div class="card">
                      <h2><?=$categoryRow->category_name?></h2>
                  </div></a>
              <?php endforeach ?>
          <?php endif ?>
        </div>
    </section> -->
<section class="py-5 category container" id="category-section">
    <!-- <h1 class="text-uppercase text-center">Category</h1> -->
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


<section>
   <!-- Card Section -->
    <div class="container mt-5">
        <div class="card shadow-sm border-0 mb-3" style="border-radius: 15px;">
            <div class="card-body">
                <!--<h5 class="card-title text-center text-white py-2" style="background-color: #2FBCCD; border-radius: 10px;">Why Mission CS Test Series?</h5>-->
                <div class="container-title-not">
                  <h1-not>One Minute Read</h1-not>
                </div>
                 <p class="card-text mt-3">Passing CS exams isn't easy. Just studying randomly or writing CS exams without a proper plan won't help in  CS Exams. Many students study for  14 to 16hours a day, reading, learning, practicing , memorizing, and revising, but still fail.<br>

In ICSI Exams, the environment is different. You feel the pressure.</p><br>
You might see new questions that make you stressed. Without practice, it can take time to figure out how to answer new questions. There are case-based questions, and you might struggle with those. Time management IN CS  Exams is also a problem. When you solve past Attempt papers at home there may not be any restrict time limit, it's different from the ICSI exams, where time is limited. You might also make mistakes in how you present your answers.
<br>
If you don't prepare for CS exams while thinking about these issues, it may take you several attempts to resolve these problems.
<br>
At Mission CS Test Series, we have designed each question papers considering the above challenges so CS students can be ready for the problems they'll face in ICSI exams.</p>
                   </div>
        </div>
    </div>
</section>


<style>
    .button-85 {
        padding: 0.6em 2em;
        border: none;
        outline: none;
        color: rgb(255, 255, 255);
        background: #111;
        cursor: pointer;
        position: relative;
        z-index: 1;
        border-radius: 10px;
        user-select: none;
        -webkit-user-select: none;
        touch-action: manipulation;
        text-align: center;
        width: 95vw; /* Sets the button width to 100% of the viewport width */
        max-width: 100%; 
        display: inline-block;
    }

    .button-85:before {
        content: "";
        background: linear-gradient(
            45deg,
            #ff0000,
            #ff7300,
            #fffb00,
            #48ff00,
            #00ffd5,
            #002bff,
            #7a00ff,
            #ff00c8,
            #ff0000
        );
        position: absolute;
        top: -2px;
        left: -2px;
        background-size: 400%;
        z-index: -1;
        filter: blur(5px);
        width: calc(100% + 4px);
        height: calc(100% + 4px);
        animation: glowing-button-85 20s linear infinite;
        transition: opacity 0.3s ease-in-out;
        border-radius: 10px;
    }

    @keyframes glowing-button-85 {
        0% {
            background-position: 0 0;
        }
        50% {
            background-position: 400% 0;
        }
        100% {
            background-position: 0 0;
        }
    }

    .button-85:after {
        z-index: -1;
        content: "";
        position: absolute;
        width: 100%;
        height: 100%;
        background: #222;
        left: 0;
        top: 0;
        border-radius: 10px;
    }

    .d-flex {
        display: flex;
        justify-content: center;
        align-items: center;
    }
</style>

<section class="py-5 container" id="image-section">
<div class="container-fluid">
        <img src="<?=base_url()?>/assetItems/image/owner.jpg" class="img-fluid" alt="Responsive image">
    </div>
</section> 


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



  <!--  <section class="py-5 container" id="content-section">
        <h1 class="text-center text-uppercase">Our Goals</h1>
        <div class="row">
            <div class="col-md-8">
                <nav>
                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                        <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Home</button>
                        <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Profile</button>
                        <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Contact</button>
                    </div>
                </nav>
                <div class="tab-content" id="nav-tabContent">
                  <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab" tabindex="0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                  consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                  cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                  proident, sunt in culpa qui officia deserunt mollit anim id est laborum.1</div>
                  <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab" tabindex="0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                  consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                  cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                  proident, sunt in culpa qui officia deserunt mollit anim id est laborum.2</div>
                  <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab" tabindex="0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                  consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                  cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                  proident, sunt in culpa qui officia deserunt mollit anim id est laborum.3</div>
                </div>
            </div>
           <div class="col-md-4">
                <img src="<?=base_url()?>/assetItems/image/image2.jpg" class="img-thumbnail" style="width: 400px;">
            </div> -->

<div id="carouselExampleRide" class="carousel slide" data-bs-ride="true">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="<?=base_url()?>/assetItems/image/cr1.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="<?=base_url()?>/assetItems/image/cr2.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleRide" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleRide" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
      </div>
        </div>
    </section>

<section class="py-5 container" id="faq-section">
    <!-- <h1 class="text-uppercase text-center">FAQ</h1> -->
    <div class="container-title">
        <h1-not>FAQ</h1-not>
    </div>
   <div class="row">
        <div class="col-md-6">
            <div class="accordion accordion-flush" id="accordionFlushExample">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingOne">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                            What is the Mission CS Test Series?
                        </button>
                    </h2>
                    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            Mission CS Test Series offers comprehensive test series tailored for Company Secretary (CS) students, covering CSEET, CS Executive, and CS Professional levels. The test series are designed to align with the latest examination trends and provide a real-exam experience.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                            How can I enroll in the test series?
                        </button>
                    </h2>
                    <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            To enroll, visit the Mission CS Test Series website, select your desired course level (CSEET, Executive, or Professional), and choose a test series package. After completing the payment, you will get immediate access to the test materials.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                            What are the unique features of the Mission CS Test Series?
                        </button>
                    </h2>
                    <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            The test series is designed with a blend of unseen and unique questions based on the ICSI pattern. Other features include personalized feedback, progress tracking, and a flexible study schedule.
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="accordion accordion-flush" id="accordionFlushExample1">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingOne1">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne1" aria-expanded="false" aria-controls="flush-collapseOne1">
                            Can I attempt the test series at my own pace?
                        </button>
                    </h2>
                    <div id="flush-collapseOne1" class="accordion-collapse collapse" aria-labelledby="flush-headingOne1" data-bs-parent="#accordionFlushExample1">
                        <div class="accordion-body">
                            Yes, with Mission CS Test Series, you can study and take the tests at your own pace, anytime and from anywhere.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingTwo1">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo1" aria-expanded="false" aria-controls="flush-collapseTwo1">
                            Do you provide feedback after tests?
                        </button>
                    </h2>
                    <div id="flush-collapseTwo1" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo1" data-bs-parent="#accordionFlushExample1">
                        <div class="accordion-body">
                            Yes, after each test, you receive detailed feedback on your performance, including tips for improvement and suggestions for enhancing your presentation skills.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingThree1">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree1" aria-expanded="false" aria-controls="flush-collapseThree1">
                            What is the refund policy for the test series?
                        </button>
                    </h2>
                    <div id="flush-collapseThree1" class="accordion-collapse collapse" aria-labelledby="flush-headingThree1" data-bs-parent="#accordionFlushExample1">
                        <div class="accordion-body">
                            The refund policy of Mission CS Test Series ensures that if you cancel your subscription within the stipulated time, you may be eligible for a refund based on the policy terms.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



    <section class="py-5 container" id="blog-section">
       <!-- <h1 class="text-uppercase text-center">Blogs</h1> -->
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
    <section class="py-5 container" id="testimonial-screen">
        <!-- <h1 class="text-uppercase text-center">TESTIMONIALS</h1> -->
      <h1-not>Testimonials</h1-not>
        <div>
          <div id="carouselExampleDark" class="carousel carousel-dark slide">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active" data-bs-interval="10000">
                <img src="<?=base_url()?>assetItems/image/image1.jpg" class="d-block w-100" alt="..." style="height: 300px;">
              </div>
              <div class="carousel-item" data-bs-interval="2000">
                <img src="<?=base_url()?>assetItems/image/image2.jpg" class="d-block w-100" alt="..." style="height: 300px;">
              </div>
              <div class="carousel-item">
                <img src="<?=base_url()?>assetItems/image/image3.jpg" class="d-block w-100" alt="..." style="height: 300px;">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        </div>
    </section>
    <!-- <section class="py-5 container" id="contact-section">
        <h1 class="text-center text-uppercase">Contact Us</h1>
        <div class="row">
            <div class="col-md-6">
                <div class="row address-container">
                    <div class="col-md-6 mb-4">
                        <div class="card" style="background: #fafbff;border: none;height:14rem;">
                            <div class="card-body">
                                <h2><i class="bi bi-geo-alt"></i></h2>
                                <h4>Address</h4>
                                <p>Ghaziabad, Delhi NCR</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card" style="background: #fafbff;border: none;height:14rem;">
                            <div class="card-body">
                                <h2><i class="bi bi-telephone"></i></h2>
                                <h4>Call Us</h4>
                                <p>+91 9873045724</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mt-4">
                        <div class="card" style="background: #fafbff;border: none;height:14rem;">
                            <div class="card-body">
                                <h2><i class="bi bi-envelope"></i></h2>
                                <h4>Email</h4>
                                <p>exam@missioncstestseries.com</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 my-4">
                        <div class="card" style="background: #fafbff;border: none;height:14rem;">
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
            <div class="col-md-6 mb-4" style="background:#fafbff">
                <div class="d-flex align-items-center justify-content-center">
                    <div class="row pt-3">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" id="name" placeholder="Your Name" class="form-control form-control-sm">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="email" id="email" placeholder="Your Email" class="form-control form-control-sm">
                            </div>
                        </div>
                        <div class="col-md-12 mt-2">
                            <div class="form-group">
                                <input type="text" id="email" placeholder="Subject" class="form-control form-control-sm">
                            </div>
                        </div>
                        <div class="col-md-12 mt-2">
                            <textarea class="form-control" name="message" id="message" rows="6" placeholder="Message" required=""></textarea>
                        </div>
                        <div class="col-md-12 text-center mt-2">
                            <a href="javascript:void(0)" class="btn btn-custom btn-sm">Send Message</a>
                        </div>
                    </div>
                </div>
               
            </div>
        </div>
    </section> -->
    <section class="py-5 container" id="newsletter_section">
      <div class="row">
        <div class="col-md-6">
            <div class="row address-container">
                <div class="col-md-6 mb-4">
                    <div class="card" style="background: #fafbff;border: none;height:14rem;">
                        <div class="card-body">
                            <h2><i class="bi bi-geo-alt"></i></h2>
                            <h4>Address</h4>
                            <p>Ghaziabad, Delhi NCR</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card" style="background: #fafbff;border: none;height:14rem;">
                        <div class="card-body">
                            <h2><i class="bi bi-telephone"></i></h2>
                            <h4>Call Us</h4>
                            <p>+91 9873045724</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mt-4">
                    <div class="card" style="background: #fafbff;border: none;height:14rem;">
                        <div class="card-body">
                            <h2><i class="bi bi-envelope"></i></h2>
                            <h4>Email</h4>
                            <p>exam@missioncstestseries.com</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 my-4">
                    <div class="card" style="background: #fafbff;border: none;height:14rem;">
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
<?= $this->endSection() ?>
<?=$this->section('jsContent')?>
  <script type="text/javascript">
    var pageType = 'index';

  </script>
  <script src="<?=base_url()?>assets/student/js/view.js?1.0.3"></script>
<?= $this->endSection() ?>
