<?= $this->extend('student/layout/layout') ?>
<?= $this->section('title') ?>
    Why Us - Mission CS Test Series 
<?= $this->endSection() ?>
<?= $this->section('meta_description') ?>
<!-- enter your meta description -->
<?=$this->endSection()?>
<?= $this->section('meta_keywords') ?>
<!-- enter your meta keywords widthout tag -->
<?=$this->endSection()?>
<?= $this->section('content') ?>

  <section>     
  <div class="container my-4">
    <header class="text-center bg-info text-white p-4 rounded-top">
      <h1 class="h3">Mission CS Test Series</h1>
      <p class="mb-0">Helping CS Students Achieve Their Dream of Becoming a Company Secretary</p>
    </header>
    
    <div class="bg-white shadow p-4 rounded-bottom">
      <section class="mb-4">
        <h2 class="h5 text-info">Why Choose Us?</h2>
        <p>
          Mission CS Test Series is considered to be the best CS test series.  
          It has already helped CS students complete their journey of becoming Company Secretaries.
        </p>
        <p>
          Each of our CS Test Series papers is prepared and evaluated by rankers and Company Secretaries.  
          We strictly follow the ICSI trend to evaluate answer sheets. Our test series is based on the latest ICSI pattern and includes unseen questions to familiarize students with the exam environment.
        </p>
      </section>
        
      <!-- Buttons Section -->
      <div class="d-grid gap-3">
        <button class="btn btn-info text-white w-100">CSEET Test Series</button>
        <button class="btn btn-info text-white w-100">CS Executive Test Series</button>
        <button class="btn btn-info text-white w-100">CS Professional Test Series</button>
      </div>
        &nbsp
      <section class="mb-4">
        <h2 class="h5 text-info">Types of Test Series We Offer:</h2>
        <ul class="list-unstyled ps-3">
          <li><b></b>Chapterwise Test Series</b></li>
          <li><b></b>Unit-wise Test Series</b></li>
          <li><b></b>Full Syllabus Test Series</b></li>
        </ul>
      </section>

      <section class="mb-4">
        <h2 class="h5 text-info">Key Features of Mission CS Test Series:</h2>
        <ul class="list-unstyled ps-3">
          <li>Small batches for more focus</li>
          <li>Detailed performance feedback</li>
          <li>Proven strategies for securing top ranks</li>
          <li>Special attention to each student</li>
        </ul>
      </section>

      <!-- Enroll Button -->
      <div class="text-center mt-4">
        <button class="btn btn-danger btn-lg w-100 animate-blink">Enroll Now</button>
      </div>
    </div>
  </div>

  <!-- Blinking Animation -->
  <style>
    @keyframes blinkEffect {
      0% { opacity: 1; }
      50% { opacity: 0.5; }
      100% { opacity: 1; }
    }

    .animate-blink {
      animation: blinkEffect 1.5s infinite;
    }
  </style>
  <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script> -->
    </section>

<?= $this->endSection() ?>
<?= $this->section('jsContent') ?>
<?= $this->endSection() ?>
