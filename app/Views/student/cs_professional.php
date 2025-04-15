<?= $this->extend('student/layout/layout') ?>
<?=$this->section('title')?>
    CS Professional Test Series
<?=$this->endSection()?>
<?= $this->section('meta_description') ?>
    CS PROFESSIONAL TEST SERIES FOR JUNE 2025 
<?=$this->endSection()?>
<?= $this->section('meta_keywords') ?>
    CS PROFESSIONAL TEST SERIES, CS PROFESSIONAL,CS PROFESSIONAL MOCK TEST,CS PROFESSIONAL MOCK TEST SERIES, CS PROFESSIONAL NEW SYLLABUS TEST SERIES, CS PROFESSIONAL FREE TEST SERIES, ICSI TEST SERIES, FREE TEST SERIES,CS EXAMS TEST SERIES, CS TEST SERIES, PREMIUM TEST SERIES, CS PROFESSIONAL NEW TEST SERIES, CS PROFESSIONAL NOTES, CS PROFESSIONAL CLASSES, CS PROFESSIONAL LECTURES
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
    
    .important {
        color: var(--primary);
        font-weight: bold;
    }
    
    .test-plan {
        background-color: #f8f8f8;
        padding: 15px;
        margin: 20px 0;
        border-radius: 8px;
        border-left: 4px solid var(--primary);
    }
    
    .highlight {
        color: var(--primary);
        font-weight: bold;
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
    <h1 class="page-heading">CS Professional Test Series</h1>
    
    <div class="cards-container">
        <!-- Chapterwise Test Series Card -->
        <div class="card">
            <div class="card-content">
                <h2>Chapterwise Test Series</h2>
                <div class="price-tag">999</div>
                <ul class="features">
                    <li><span>✔</span>Weekly Mentorship by AIR</li>
                    <li><span>✔</span>Chapter-Wise Test For Each Subject</li>
                    <li><span>✔</span>2 Full Syllabus Test For Each Subject</li>
                    <li><span>✔</span>Target Based Approach</li>
                    <li><span>✔</span>Revision Strategy By AIR</li>
                    <li><span>✔</span>Evaluation In 48 Hours</li>
                    <li><span>✔</span>Suggested Answers Available</li>
                    <li><span>✔</span>Scheduled & UnScheduled Both Options</li>
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
                    <li><span>✔</span>4 unit tests - each covering 25% of syllabus</li>
                    <li><span>✔</span>1 Full Syllabus Test For Each Subject</li>
                    <li><span>✔</span>Target Based Approach</li>
                    <li><span>✔</span>Mentorship By AIRs- Once in a Month</li>
                    <li><span>✔</span>Evaluation In 48 Hours</li>
                    <li><span>✔</span>Suggested Answers for Reference</li>
                    <li><span>✔</span>Scheduled & UnScheduled Both Options</li>
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
                    <li><span>✔</span>1 full syllabus test for 100 marks</li>
                    <li><span>✔</span>Target Based Approach</li>
                    <li><span>✔</span>1 Mentorship Session By AIRs</li>
                    <li><span>✔</span>Evaluation In 48 Hours</li>
                    <li><span>✔</span>Suggested Answers for Reference</li>
                    <li><span>✔</span>Scheduled & UnScheduled Both Options</li>
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
            <p>CS Professional exams are the final level of CS Exams, and after passing CS Professional, students become Company Secretaries. But this journey is not as simple as it seems.</p>
            <p>CS Professional exams are one of the toughest exams in India. To clear this exam, students need to have an understanding of concepts and sufficient writing practice along with time management.</p>
        </div>
        
        <div class="content-section">
            <h2>CS Professional Subjects</h2>
            <p>CS subjects have different coverage. These subjects are:</p>
            <ul>
                <li><span class="important">Environmental, Social, and Governance</span></li>
                <li><span class="important">Drafting, Pleading, and Appearance</span></li>
                <li><span class="important">Compliance Management, Audit, and Due Diligence</span></li>
                <li><span class="important">Strategic Management and Corporate Finance</span></li>
                <li><span class="important">Corporate Restructuring, Valuation, and Insolvency</span></li>
            </ul>
            <p>Each module of CS Professional has open book exams in which students can bring study materials to exam centers with them.</p>
        </div>
        
        <div class="test-plan">
            <h3>Chapter-wise Test Series</h3>
            <p>In this Test Series plan, you will get:</p>
            <ul>
                <li>One test for each chapter having 20 to 50 marks</li>
                <li>Two full syllabus test papers of 100 marks each</li>
            </ul>
        </div>

        <div class="test-plan">
            <h3>Unit-wise Test Series</h3>
            <p>In this Test Series plan, you will get:</p>
            <ul>
                <li>Four unit tests by combining a few chapters</li>
                <li>One full syllabus test series</li>
            </ul>
        </div>

        <div class="test-plan">
            <h3>Full Syllabus Test Series</h3>
            <p>In this Test Series plan, you will get:</p>
            <ul>
                <li>One test paper of 100 marks</li>
            </ul>
        </div>
        
        <div class="content-section">
            <h2>Why Our <span class="highlight">CS Test Series</span> is Important</h2>
            <p>Preparing for CS Professional exams requires more than just studying the syllabus. Our <span class="highlight">CS Professional Test Series</span> is designed to help students enhance their writing skills, improve time management, and gain familiarity with the types of questions they will face in the exams.</p>
            
            <h3>Key Features</h3>
            <ul>
                <li><strong>Latest ICSI Pattern:</strong> Each test paper in our <span class="highlight">CS Mock Test Series</span> is updated according to the latest exam pattern</li>
                <li><strong>Comprehensive Coverage:</strong> Covers every aspect of the CS Professional syllabus</li>
                <li><strong>Quick Evaluation:</strong> Answersheets evaluated by qualified CS professionals within 48 hours</li>
            </ul>
            
            <h3>Benefits</h3>
            <ul>
                <li><strong>Boost Conceptual Understanding:</strong> Gain deeper understanding of each subject</li>
                <li><strong>Enhance Writing Speed:</strong> Improve speed and clarity in presenting answers</li>
                <li><strong>Develop Time Management:</strong> Learn to allocate time efficiently during exams</li>
                <li><strong>Reduce Exam Anxiety:</strong> Build confidence through practice with real exam patterns</li>
            </ul>
        </div>
        
        <div class="content-section">
            <h2>Success Stories Through Practice</h2>
            <p>Many students who have used our <span class="highlight">CS Professional Test Series</span> have achieved outstanding results in their exams. The structured approach provided by chapter-wise tests, unit tests, and full syllabus mock exams has been a game-changer for them.</p>
            <p>Our <span class="highlight">CS Mock Test</span> not only prepares students for the exams but also helps them develop skills required in their professional journey. Solving unseen case studies enhances their analytical skills and prepares them for real-world corporate challenges.</p>
        </div>
        
        <div class="content-section">
            <h2>Conclusion</h2>
            <p>CS Professional exams are not just about theoretical knowledge; they test practical application and analytical skills. With our <span class="highlight">CS Professional Test Series</span>, students can build a strong foundation, practice effectively, and boost their confidence.</p>
            <p>Whether you choose the chapter-wise, unit-wise, or full syllabus plan, our <span class="highlight">CS Mock Test Series</span> ensures you are thoroughly prepared. Invest in your success with our <span class="highlight">CS Test Series</span> and take a step closer to becoming a Company Secretary.</p>
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
