<?= $this->extend('student/layout/dashboard_layout') ?>
<?=$this->section('title')?>
    Student Dashboard
<?=$this->endSection()?>
<?= $this->section('meta_description') ?>
<!-- enter your meta description -->
<?=$this->endSection()?>
<?= $this->section('meta_keywords') ?>
<!-- enter your meta keywords widthout tag -->
<?=$this->endSection()?>
<?=$this->section('content')?>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
  <style>
    body {
      margin: 0;
      font-family: Arial, sans-serif;
      background-color: #f4f4f4;
    }
    .header {
      background-color: #5b4efc;
      color: white;
      padding: 20px;
      text-align: center;
    }
    .header h1 {
      margin: 0;
      font-size: 24px;
    }
    .menu {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(100px, 1fr));
      gap: 10px;
      padding: 15px;
    }
    .menu-item {
      text-align: center;
      padding: 15px;
      background: white;
      border-radius: 10px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }
    .menu-item i {
      font-size: 24px;
      margin-bottom: 10px;
      color: #5b4efc;
    }
    .menu-item p {
      margin: 0;
      font-size: 14px;
      color: #333;
    }
    .countdown-card {
      margin: 15px auto;
      max-width: 90%;
      background: white;
      border-radius: 10px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
      padding: 15px;
      text-align: center;
    }
    .countdown-card button {
      width: 100%;
      padding: 10px;
      border: none;
      background: #5b4efc;
      color: white;
      border-radius: 25px;
      font-size: 16px;
      cursor: pointer;
    }
    .switch-content-button {
      margin-top: 10px;
      padding: 10px 20px;
      background: #fff;
      color: #5b4efc;
      border: 2px solid #5b4efc;
      border-radius: 25px;
      cursor: pointer;
      font-size: 14px;
      text-transform: uppercase;
      font-weight: bold;
      display: inline-block;
    }
    .social-media-card {
      margin: 15px auto;
      max-width: 90%;
      background: white;
      border-radius: 10px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
      padding: 15px;
    }
    .social-media {
      display: flex;
      justify-content: space-around;
      align-items: center;
    }
    .social-media a {
      text-decoration: none;
      color: #5b4efc;
      font-size: 24px;
    }
    .courses-section {
      padding: 15px;
    }
    .courses-header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-bottom: 10px;
    }
    .courses-header h2 {
      margin: 0;
      font-size: 18px;
    }
    .courses {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
      gap: 10px;
    }
    .course-card {
      background: white;
      padding: 10px;
      border-radius: 10px;
      text-align: center;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }
    .course-card img {
      max-width: 40px;
      margin-bottom: 10px;
    }
    .course-card h3 {
      margin: 0;
      font-size: 14px;
    }
    .course-card p {
      margin: 0;
      font-size: 12px;
      color: #666;
    }
    .footer {
      position: fixed;
      bottom: 0;
      width: 100%;
      background: white;
      display: flex;
      justify-content: space-around;
      padding: 10px 0;
      border-top: 1px solid #ccc;
    }
    .footer-item {
      text-align: center;
    }
    .footer-item i {
      font-size: 20px;
      color: #666;
    }
    .footer-item p {
      margin: 0;
      font-size: 12px;
      color: #666;
    }
    .footer-item.active i, .footer-item.active p {
      color: #5b4efc;
    }
  </style>
</head>
<body>

  <div class="header">
    <h1>Hi, Student</h1>
  </div>

  <div class="countdown-card">
    <button>Countdown: 10:00</button>
    <button class="switch-content-button" onclick="switchToFreeContent()">Switch to Free Content</button>
  </div>

  <div class="social-media-card">
    <div class="social-media">
      <a href="https://www.instagram.com" target="_blank"><i class="fab fa-instagram"></i></a>
      <a href="https://www.facebook.com" target="_blank"><i class="fab fa-facebook"></i></a>
      <a href="https://telegram.org" target="_blank"><i class="fab fa-telegram"></i></a>
      <a href="https://www.youtube.com" target="_blank"><i class="fab fa-youtube"></i></a>
    </div>
  </div>

  <div class="menu">
    <div class="menu-item">
      <i class="fas fa-th-large"></i>
      <p>Test Paper</p>
    </div>
    <div class="menu-item">
      <i class="fas fa-play-circle"></i>
      <p>Notes</p>
    </div>
    <div class="menu-item">
      <i class="fas fa-book"></i>
      <p>Amendments</p>
    </div>
    <div class="menu-item">
      <i class="fas fa-store"></i>
      <p>Question Bank</p>
    </div>
    <div class="menu-item">
      <i class="fas fa-video"></i>
      <p>Buy Now</p>
    </div>
    <div class="menu-item">
      <i class="fas fa-trophy"></i>
      <p>Mentorship</p>
    </div>
  </div>

  <div class="courses-section">
    <div class="courses-header">
      <h2>Courses</h2>
      <a href="#" style="color: #5b4efc; text-decoration: none;">See All</a>
    </div>
    <div class="courses">
      <div class="course-card">
        <img src="https://upload.wikimedia.org/wikipedia/commons/1/17/Google-flutter-logo.png" alt="Flutter">
        <h3>Flutter</h3>
        <p>55 Videos</p>
      </div>
      <div class="course-card">
        <img src="https://upload.wikimedia.org/wikipedia/commons/a/a7/React-icon.svg" alt="React Native">
        <h3>React Native</h3>
        <p>55 Videos</p>
      </div>
    </div>
  </div>

  <script>
    function switchToFreeContent() {
      alert("Switched to Free Content!");
      // Logic for switching to free content can be implemented here.
    }
  </script>

<?=$this->endSection()?>
<?=$this->section('jsContent')?>
<?=$this->endSection()?>
