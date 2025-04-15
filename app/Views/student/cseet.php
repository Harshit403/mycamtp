<?= $this->extend('student/layout/layout') ?>
<?=$this->section('title')?>
    CSEET Test Series
<?=$this->endSection()?>
<?= $this->section('meta_description') ?>
    CSEET TEST SERIES BY ALL INDIA RANKERS
<?=$this->endSection()?>
<?= $this->section('meta_keywords') ?>
    CSEET, CSEET TEST SERIES, TEST SERIES, CSEET MOCK TEST SERIES, CSEET MOCK TEST, MOCK TEST SERIES, CS TEST SERIES, ICSI TEST SERIES, ICSI EXAMS, CS EXAM, ICSI, ICSI MOCK TEST,CS EXAMS, MISSION CS TEST SERIES, CSEET NOTES, CSEET LECTURES, CSEET FREE NOTES
<?=$this->endSection()?>
<?=$this->section('content')?>
<section class="container contact_us_container mainContainer">

<style>
    /* Color Scheme from Original */
    :root {
        --primary: #e63e58;
        --primary-dark: #c9344d;
        --secondary: #fbe7ec;
        --light: #ffffff;
        --dark: #333333;
        --shadow: 0 8px 15px rgba(0, 0, 0, 0.1);
    }
    
    /* Animations */
    @keyframes fadeIn {
        from { opacity: 0; transform: translateY(20px); }
        to { opacity: 1; transform: translateY(0); }
    }
    
    @keyframes iconBounce {
        0%, 100% { transform: translateY(0); }
        50% { transform: translateY(-5px); }
    }
    
    /* Base Styles */
    body {
        font-family: 'Arial', sans-serif;
        background: #f8f9fa;
        line-height: 1.6;
    }
    
    .page-heading {
        font-size: 2.5rem;
        color: var(--dark);
        text-align: center;
        margin: 3rem 0;
        position: relative;
        animation: fadeIn 0.8s ease-out;
    }
    
    .page-heading::after {
        content: '';
        display: block;
        width: 80px;
        height: 4px;
        background: var(--primary);
        margin: 15px auto;
        border-radius: 2px;
    }
    
    /* Cards Container */
    .cards-container {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 30px;
        padding: 20px;
        max-width: 1200px;
        margin: 0 auto;
    }
    
    /* Card Design */
    .card {
        background: var(--light);
        border-radius: 15px;
        box-shadow: var(--shadow);
        overflow: hidden;
        transition: all 0.3s cubic-bezier(0.25, 0.46, 0.45, 0.94);
        position: relative;
        animation: fadeIn 0.6s ease-out;
    }
    
    .card:hover {
        transform: translateY(-10px);
        box-shadow: 0 12px 25px rgba(0, 0, 0, 0.15);
    }
    
    .card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 5px;
        background: var(--primary);
    }
    
    .card-content {
        padding: 25px;
    }
    
    .card h2 {
        font-size: 1.5rem;
        color: var(--dark);
        margin: 15px 0;
        position: relative;
    }
    
    .price-tag {
        font-size: 2.5rem;
        color: var(--primary);
        margin: 15px 0;
        font-weight: 700;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    
    .price-tag::before {
        content: '₹';
        font-size: 1.8rem;
        margin-right: 5px;
    }
    
    /* Features List */
    .features {
        list-style: none;
        padding: 0;
        margin: 25px 0;
    }
    
    .features li {
        padding: 12px 0;
        border-bottom: 1px dashed #eee;
        display: flex;
        align-items: center;
        transition: all 0.3s ease;
    }
    
    .features li:hover {
        transform: translateX(10px);
    }
    
    .features li span {
        color: var(--primary);
        margin-right: 10px;
        font-size: 1.2rem;
        animation: iconBounce 2s infinite;
    }
    
    /* Buttons */
    .button-group {
        display: flex;
        gap: 10px;
        margin-top: 25px;
        flex-wrap: wrap;
    }
    
    .btn-primary,
    .btn-secondary {
        flex: 1;
        padding: 12px 25px;
        border-radius: 25px;
        font-weight: 600;
        transition: all 0.3s ease;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 8px;
        min-width: 160px;
    }
    
    .btn-primary {
        background: var(--primary);
        color: var(--light);
        border: 2px solid var(--primary);
    }
    
    .btn-primary:hover {
        background: var(--primary-dark);
        transform: scale(1.05);
    }
    
    .btn-secondary {
        background: var(--secondary);
        color: var(--primary);
        border: 2px solid var(--primary);
    }
    
    .btn-secondary:hover {
        background: var(--primary);
        color: var(--light);
        transform: scale(1.05);
    }
    
    /* Content Sections */
    .content-section {
        background: var(--light);
        border-radius: 15px;
        padding: 30px;
        margin: 30px auto;
        max-width: 800px;
        box-shadow: var(--shadow);
    }
    
    .content-section h2 {
        color: var(--primary);
        font-size: 1.8rem;
        margin-bottom: 20px;
        padding-left: 20px;
        border-left: 4px solid var(--primary);
    }
    
    .content-section p {
        margin-bottom: 15px;
    }
    
    .content-section ul {
        padding-left: 20px;
    }
    
    .content-section li {
        margin-bottom: 10px;
        position: relative;
        padding-left: 25px;
    }
    
    .content-section li::before {
        content: '✓';
        color: var(--primary);
        font-weight: bold;
        position: absolute;
        left: 0;
    }
    
    /* Responsive Design */
    @media (max-width: 768px) {
        .cards-container {
            grid-template-columns: 1fr;
        }
        
        .button-group {
            flex-direction: column;
        }
        
        .btn-primary,
        .btn-secondary {
            width: 100%;
        }
        
        .page-heading {
            font-size: 2rem;
        }
    }
</style>

<body>
<div class="" style="margin-top: 10px">
    <h1 class="page-heading">CSEET Test Series</h1>
    
    <div class="cards-container">
        <!-- Chapterwise Test Series Card -->
        <div class="card">
            <div class="card-content">
                <h2>Chapterwise Test Series</h2>
                <div class="price-tag">999</div>
                <ul class="features">
                    <li><span>✔</span>Weekly Mentorship by AIR</li>
                    <li><span>✔</span>Chapter-Wise Tests</li>
                    <li><span>✔</span>2 Full Syllabus Tests</li>
                    <li><span>✔</span>Target Based Approach</li>
                    <li><span>✔</span>Revision Strategy</li>
                    <li><span>✔</span>48hr Evaluation</li>
                    <li><span>✔</span>Suggested Answers</li>
                    <li><span>✔</span>Flexible Scheduling</li>
                </ul>
                <div class="button-group">
                    <a href="<?=base_url()?>buy" class="btn-primary">
                        <i class="fas fa-shopping-cart"></i> Buy Now
                    </a>
                    <a href="https://urgent-maryanne-itzharshit-27371710.koyeb.app/" class="btn-secondary">
                        <i class="fas fa-calendar-alt"></i> Schedule
                    </a>
                </div>
            </div>
        </div>

        <!-- Unit-wise Test Series Card -->
        <div class="card">
            <div class="card-content">
                <h2>Unit-wise Test Series</h2>
                <div class="price-tag">499</div>
                <ul class="features">
                    <li><span>✔</span>4 Unit Tests</li>
                    <li><span>✔</span>1 Full Syllabus Test</li>
                    <li><span>✔</span>Monthly Mentorship</li>
                    <li><span>✔</span>Target Based Approach</li>
                    <li><span>✔</span>48hr Evaluation</li>
                    <li><span>✔</span>Suggested Answers</li>
                    <li><span>✔</span>Flexible Scheduling</li>
                </ul>
                <div class="button-group">
                    <a href="<?=base_url()?>buy" class="btn-primary">
                        <i class="fas fa-shopping-cart"></i> Buy Now
                    </a>
                    <a href="https://urgent-maryanne-itzharshit-27371710.koyeb.app/" class="btn-secondary">
                        <i class="fas fa-calendar-alt"></i> Schedule
                    </a>
                </div>
            </div>
        </div>

        <!-- Full Syllabus Test Series Card -->
        <div class="card">
            <div class="card-content">
                <h2>Full Syllabus Test Series</h2>
                <div class="price-tag">149</div>
                <ul class="features">
                    <li><span>✔</span>1 Full Syllabus Test</li>
                    <li><span>✔</span>Target Based Approach</li>
                    <li><span>✔</span>1 Mentorship Session</li>
                    <li><span>✔</span>48hr Evaluation</li>
                    <li><span>✔</span>Suggested Answers</li>
                    <li><span>✔</span>Flexible Scheduling</li>
                </ul>
                <div class="button-group">
                    <a href="<?=base_url()?>buy" class="btn-primary">
                        <i class="fas fa-shopping-cart"></i> Buy Now
                    </a>
                    <a href="https://urgent-maryanne-itzharshit-27371710.koyeb.app/" class="btn-secondary">
                        <i class="fas fa-calendar-alt"></i> Schedule
                    </a>
                </div>
            </div>
        </div>
    </div>

    <main>
        <div class="content-section">
            <h2>About Our Test Series</h2>
            <p>
                Our CS test series is designed to help students easily prepare and pass their CS exams like <strong>CS Executive</strong>, 
                <strong>CS Professional</strong>, and <strong>CSEET</strong>. We strictly follow the new <strong>ICSI syllabus</strong> and exam pattern, 
                ensuring students practice the right type of questions. The new ICSI syllabus includes tougher questions, and our <strong>CS mock tests</strong> match the same difficulty level. 
                With over 8 years of experience, our team focuses on helping students identify and fix their mistakes to achieve better <strong>CS results</strong>.
            </p>
        </div>
        
        <div class="content-section">
            <h2>Our Experience</h2>
            <p>
                We have been one of the first platforms to provide <strong>online CS mock tests</strong>. Our team, which includes rank holders 
                and experienced professionals, ensures high-quality <strong>CS test papers</strong> and provides proper feedback to students. Evaluated <strong>CS mock test</strong> 
                sheets are returned within 1-2 days, along with valuable tips to improve. This quick feedback process allows students to improve before their next <strong>CS mock test</strong>.
            </p>
        </div>
        
        <div class="content-section">
            <h2>What Our CS Test Series Covers</h2>
            <p>
                For the <strong>June 2025 CS exams</strong>, we have prepared a comprehensive test series for all levels—<strong>CSEET</strong>, <strong>CS Executive</strong>, and <strong>CS Professional</strong>. 
                Our <strong>CS mock tests</strong> are based on the latest <strong>ICSI syllabus</strong> and exam trends, helping students understand the type of questions to expect. 
                Amendments are also included, ensuring students stay updated with the latest syllabus changes.
            </p>
        </div>
        
        <div class="content-section">
            <h2>Common Challenges Faced by Students</h2>
            <p>
                Many students fail their <strong>CS Executive</strong> or <strong>CS Professional</strong> exams even after thorough revision. 
                This often happens because they don't know their weak areas or how to improve their approach. Our <strong>CS test series</strong> 
                addresses this issue by helping students find and fix mistakes like poor presentation, lack of conceptual clarity, or slow writing speed. 
                Our expert team provides step-by-step guidance to improve performance in the actual exams, resulting in better <strong>CS results</strong>.
            </p>
        </div>
        
        <div class="content-section">
            <h2>How Our CS Test Series Helps</h2>
            <ul>
                <li><strong>Solid Concepts:</strong> We help students build a strong foundation of concepts, essential for scoring well in <strong>CS Executive</strong> and <strong>CS Professional</strong> exams.</li>
                <li><strong>Proper Revision:</strong> Our <strong>CS mock tests</strong> are structured to ensure students revise the entire <strong>ICSI syllabus</strong> effectively.</li>
                <li><strong>Mistake Analysis:</strong> Detailed feedback highlights over 130 common mistakes students make, helping them avoid losing marks in exams.</li>
            </ul>
        </div>
        
        <div class="content-section">
            <h2>Proven Success and Affordable Pricing</h2>
            <p>
                Our <strong>CS test series</strong> has a proven success rate, with many students clearing their exams on the first attempt. 
                Some have even achieved top ranks in <strong>CS results</strong>. We ensure our <strong>CS mock tests</strong> are affordable 
                and provide excellent value for the time and effort students invest in their preparation.
            </p>
        </div>
        
        <div class="content-section">
            <h2>Why Choose Our CS Test Series?</h2>
            <p>
                If you are preparing for the <strong>June 2025 CS exams</strong>, our <strong>CS test series</strong> is the perfect choice. 
                From <strong>CS Executive</strong> to <strong>CS Professional</strong>, our team will guide you to improve your concepts, writing skills, and speed. 
                With regular practice and feedback, you can confidently pass your <strong>CS exams</strong> and achieve excellent <strong>CS results</strong>.
            </p>
        </div>
    </main>
</div>

<!-- Font Awesome for Icons -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

</body>    
</section>
<?= $this->endSection() ?>
<?=$this->section('jsContent')?>
<?= $this->endSection() ?>
