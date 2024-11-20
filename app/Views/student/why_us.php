<?= $this->extend('student/layout/layout') ?>
<?= $this->section('title') ?>
    Why Us
<?= $this->endSection() ?>
<?= $this->section('meta_description') ?>
<!-- enter your meta description -->
<?=$this->endSection()?>
<?= $this->section('meta_keywords') ?>
<!-- enter your meta keywords widthout tag -->
<?=$this->endSection()?>
<?= $this->section('content') ?>
    <section class="container mb-5 section mainContainer">
      <!--  <div class="text-center">
            <h2>Why Us</h2>
        </div>
        <div class="whyUsContainer py-3">
            <div class="row" style="min-height:50vh !important">
                <div class="col-md-12 text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
            </div>
        </div> -->

  <style>
    /* Styles for the Mission CS Test Series Page */
    body {
      font-family: Arial, sans-serif;
      background-color: #e3fcff;
      margin: 0;
      padding: 0;
      color: #333;
    }

    .msc-container {
      max-width: 800px;
      margin: 20px auto;
      padding: 20px;
      background-color: #fff;
      border-radius: 8px;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    }

    .msc-header {
      text-align: center;
      background-color: #2fbccd;
      color: #fff;
      padding: 20px;
      border-radius: 8px 8px 0 0;
    }

    .msc-header h1 {
      margin: 0;
      font-size: 24px;
    }

    .msc-header p {
      margin: 5px 0 0;
      font-size: 16px;
    }

    .msc-section {
      margin: 20px 0;
    }

    .msc-h2 {
      color: #2fbccd;
      margin-bottom: 10px;
    }

    .msc-ul {
      list-style-type: disc;
      padding-left: 20px;
    }

    .msc-ul li {
      margin-bottom: 8px;
    }

    .msc-test-button {
      background-color: #2fbccd;
      color: #fff;
      border: none;
      padding: 10px 15px;
      margin: 10px 5px;
      border-radius: 4px;
      cursor: pointer;
      font-size: 16px;
      transition: background-color 0.3s;
    }

    .msc-test-button:hover {
      background-color: #239a9c;
    }

    .msc-enroll {
      text-align: center;
      margin-top: 20px;
    }

    /* Enroll Now Button with blinking animation */
    .msc-enroll-button {
      background-color: #ff6347; /* Initial color */
      color: #fff;
      border: none;
      padding: 15px 30px;
      font-size: 18px;
      border-radius: 5px;
      cursor: pointer;
      transition: background-color 0.3s;
      animation: blinkEffect 1.5s infinite; /* Blink effect */
    }

    .msc-enroll-button:hover {
      background-color: #ff4500; /* Hover color */
    }

    /* Blinking animation */
    @keyframes blinkEffect {
      0% {
        opacity: 1;
        background-color: #ff6347;
      }
      50% {
        opacity: 0.5;
        background-color: #ff4500;
      }
      100% {
        opacity: 1;
        background-color: #ff6347;
      }
    }

    /* Responsive Design */
    @media (max-width: 768px) {
      .msc-container {
        max-width: 100%;
        margin: 10px;
        padding: 15px;
      }

      .msc-header h1 {
        font-size: 20px;
      }

      .msc-header p {
        font-size: 14px;
      }

      .msc-h2 {
        font-size: 18px;
      }

      .msc-test-button, .msc-enroll-button {
        font-size: 14px;
        padding: 10px 20px;
      }

      .msc-test-button {
        width: 100%;
        margin: 10px 0;
      }

      .msc-enroll-button {
        width: 100%;
      }
    }

    @media (max-width: 480px) {
      .msc-header h1 {
        font-size: 18px;
      }

      .msc-header p {
        font-size: 12px;
      }

      .msc-h2 {
        font-size: 16px;
      }

      .msc-test-button, .msc-enroll-button {
        font-size: 12px;
        padding: 8px 15px;
      }
    }
  </style>

  <div class="msc-container">
    <header class="msc-header">
      <h1>Mission CS Test Series</h1>
      <p>Helping CS Students Achieve Their Dream of Becoming a Company Secretary</p>
    </header>
    
    <section class="msc-section">
      <h2 class="msc-h2">Why Choose Us?</h2>
      <p>
        Mission CS Test Series is considered to be the best CS test series.  
        It has already helped CS students complete their journey of becoming Company Secretaries.
      </p>
      <p>
        Each of our CS Test Series papers is prepared and evaluated by rankers and Company Secretaries.  
        We strictly follow the ICSI trend to evaluate answer sheets. Our test series is based on the latest ICSI pattern and includes unseen questions to familiarize students with the exam environment.
      </p>
    </section>

    <section class="msc-section">
      <h2 class="msc-h2">Types of Test Series We Offer:</h2>
      <ul class="msc-ul">
        <li>Chapterwise Test Series</li>
        <li>Unit-wise Test Series</li>
        <li>Full Syllabus Test Series</li>
      </ul>
    </section>

    <section class="msc-section">
      <h2 class="msc-h2">Key Features of Mission CS Test Series:</h2>
      <ul class="msc-ul">
        <li>Small batches for more focus</li>
        <li>Detailed performance feedback</li>
        <li>Proven strategies for securing top ranks</li>
        <li>Special attention to each student</li>
      </ul>
    </section>

    <div class="msc-buttons">
      <button class="msc-test-button">CSEET Test Series</button>
      <button class="msc-test-button">CS Executive Test Series</button>
      <button class="msc-test-button">CS Professional Test Series</button>
    </div>

    <div class="msc-enroll">
      <button class="msc-enroll-button">Enroll Now</button>
    </div>
  </div>

    </section>
<?= $this->endSection() ?>
<?= $this->section('jsContent') ?>
<?= $this->endSection() ?>
