<?= $this->extend('student/layout/layout') ?>
<?=$this->section('title')?>
  Mission CS Test Series 
<?= $this->endSection() ?>
<?= $this->section('meta_description') ?>
<!-- enter your meta description -->
<?=$this->endSection()?>
<?= $this->section('meta_keywords') ?>
<!-- enter your meta keywords widthout tag -->
<?=$this->endSection()?>
<?=$this->section('content')?>

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
    width: 70%; /* Reduced width for smaller cards */
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
    font-size: 16px; /* Reduced text size */
    color: #333;
    white-space: normal; /* Allow text wrapping */
    line-height: 1.4; /* Adjust line-height for readability */
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
        font-size: 20px; /* Further reduce icon size */
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
</style>
<section class="test-series">
    <div class="container">
        <h1 class="section-title">Mission CS Test Series</h1>
        <p class="intro-text">Affordable, high-quality CS Test series for CS Executive and Professional exams. Get live mentorship from Rankers and Qualified Company Secretaries.</p>
        <p class="description">Each series is curated by top rankers, designed to ensure success in your exams.</p>
        
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
    <h1 class="text-uppercase text-center">Category</h1>
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

<!-- <section class="py-5 container" id="image-section">
<div class="container-fluid">
        <img src="<?=base_url()?>/assetItems/image/owner.jpg" class="img-fluid" alt="Responsive image">
    </div>
</section> -->


<section class="py-5 container" id="image-section">
  <div class="container-fluid">
    <div class="image-wrapper">
      <img src="<?=base_url()?>/assetItems/image/owner.jpg" class="ranker-image" alt="Ranker Image">
    </div>
  </div>
</section>

<style>
  /* Section without background color, just padding */
  #image-section {
    padding: 20px 0;
    display: flex;
    justify-content: center;  /* Horizontally centers the content */
    align-items: center;      /* Vertically centers the content */
    height: 100vh;            /* Full height of the viewport */
    text-align: center;       /* Ensures content is aligned */
    position: relative;
  }

  /* Image wrapper with visually appealing border */
  .image-wrapper {
    padding: 5px;
    border: 5px solid transparent;
    border-radius: 15px; /* Rounded corners */
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
    max-width: 98%; /* Now fills 95% of the screen width */
    overflow: hidden;
    display: inline-block;
    position: relative; /* For pseudo-element positioning */
  }

  /* Border decoration using pseudo-elements */
  .image-wrapper::before {
    content: '';
    position: absolute;
    top: -10px;
    left: -10px;
    right: -10px;
    bottom: -10px;
    border-radius: 20px; /* Slightly larger rounded corners */
    background: linear-gradient(135deg, #FF6F61, #6FA3EF); /* Colorful gradient */
    z-index: -1; /* Places the gradient behind the image */
    filter: blur(15px); /* Softens the edges of the gradient */
  }

  /* Making the image fit and responsive */
  .ranker-image {
    width: 100%; /* Full width of the wrapper */
    height: auto;
    object-fit: cover; /* Ensures proper scaling while maintaining aspect ratio */
    border-radius: 10px; /* Rounded corners for the image */
  }

  /* Hover effects for interactive design */
  .image-wrapper:hover {
    box-shadow: 0 15px 40px rgba(0, 0, 0, 0.3);
    transform: scale(1.02);
    transition: all 0.3s ease;
  }

  /* Media Queries for different screen sizes */
  @media (max-width: 768px) {
    .image-wrapper {
      padding: 8px;
      border-radius: 12px;
      max-width: 95%; /* Keep it 95% width for tablets */
    }

    .ranker-image {
      object-fit: contain; /* Makes the image fit well on smaller devices */
    }
  }

  @media (max-width: 480px) {
    #image-section {
      padding: 20px 0;
      height: auto; /* Removes the fixed height for mobile devices */
    }

    .image-wrapper {
      padding: 5px;
      border-radius: 8px;
      max-width: 95%; /* Ensure image still fits 95% of mobile screen */
    }

    .ranker-image {
      object-fit: contain;
      width: 100%;
    }
  }
</style>


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

<style>
  .cs-container {
        display: flex;
        justify-content: center;
        align-items: center;
        margin: 3px 0; 
        
    }

    .cs-card {
        width: 100%;
        max-width: 400px;
        background-color: #ffffff;
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
        border-radius: 10px;
        overflow: hidden;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .cs-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 12px 24px rgba(0, 0, 0, 0.2);
    }

    .cs-card-header {
        background: linear-gradient(135deg, #2FBCCD, #138f7f); /* Gradient applied */
        padding: 10px; /* Add some padding */
        color: #fff;
        text-align: center;
    }

    .cs-card-header h1 {
        font-size: 1.3rem; /* Adjusted font size */
        margin: 0;
    }

    .cs-card-content {
        padding: 15px; /* Adjust padding for content readability */
        color: #333;
        font-size: 0.9rem; /* Adjust font size for readability */
        line-height: 1.4;
        text-align: justify;
    }

    .cs-card-content p {
        margin-bottom: 10px; /* Adjusted margin for paragraph separation */
    }

    /* Responsive styles */
    @media (max-width: 768px) {
        .cs-card {
            max-width: 90%; /* Adjust max-width for tablets */
        }
    }

    @media (max-width: 480px) {
        .cs-card {
            max-width: 100%; /* Full width for smaller screens */
        }

        .cs-card-header h1 {
            font-size: 1.1rem; /* Adjust font size for smaller screens */
        }

        .cs-card-content {
            font-size: 0.8rem; /* Adjust font size for better readability on mobile */
        }
    }
</style>

<div class="cs-container">
    <div class="cs-card">
        <div class="cs-card-header">
            <h1>My Mission CS Test Series</h1>
        </div>
        <div class="cs-card-content">
            <p>Mission CS Test Series is designed by Rankers who have years of experience. We have carefully crafted each test to cover the entire syllabus and provide you with the best practice and revision. You will get access to multiple tests, each with detailed solutions and explanations. You will also get feedback and analysis of your performance, along with tips and tricks to improve your score.</p>
            <p>Mission CS Test Series is the most trusted and reliable test series for the CS exams. Thousands of students have used our test series and achieved their dream of becoming a professional. You can be one of them too. Join Mission CS Test Series today and get ready to conquer the CS Exams.</p>
        </div>
    </div>
</div>


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
    <h1 class="text-uppercase text-center">FAQ</h1>
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
        <h1 class="text-uppercase text-center">Blogs</h1>
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
        <h1 class="text-uppercase text-center">TESTIMONIALS</h1>
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
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card" style="background: #fafbff;border: none;height:14rem;">
                            <div class="card-body">
                                <h2><i class="bi bi-telephone"></i></h2>
                                <h4>Call Us</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mt-4">
                        <div class="card" style="background: #fafbff;border: none;height:14rem;">
                            <div class="card-body">
                                <h2><i class="bi bi-envelope"></i></h2>
                                <h4>Email</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 my-4">
                        <div class="card" style="background: #fafbff;border: none;height:14rem;">
                            <div class="card-body">
                                <h2><i class="bi bi-clock"></i></h2>
                                <h4>Open Hours</h4>
                                <p>We are available 24*7</p>
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
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card" style="background: #fafbff;border: none;height:14rem;">
                        <div class="card-body">
                            <h2><i class="bi bi-telephone"></i></h2>
                            <h4>Call Us</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mt-4">
                    <div class="card" style="background: #fafbff;border: none;height:14rem;">
                        <div class="card-body">
                            <h2><i class="bi bi-envelope"></i></h2>
                            <h4>Email</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 my-4">
                    <div class="card" style="background: #fafbff;border: none;height:14rem;">
                        <div class="card-body">
                            <h2><i class="bi bi-clock"></i></h2>
                            <h4>Open Hours</h4>
                            <p>We are available 24*7</p>
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
