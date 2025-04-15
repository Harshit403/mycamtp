<?= $this->extend('student/layout/layout') ?>
<?=$this->section('title')?>
    CS Executive Test Series
<?=$this->endSection()?>
<?= $this->section('meta_description') ?>
    CS Executive Test Series for June 2025
<?=$this->endSection()?>
<?= $this->section('meta_keywords') ?>
    CS EXECUTIVE TEST SERIES,CS EXECUTIVE, MOCK TEST,CS EXECUTIVE MOCK TEST SERIES, ICSI TEST SERIES, ICSI EXAMS, CS EXAMS, ICSI EXAMS, CS EXAM, CS NOTES, ICSI NOTES, CS EXECUTIVE FREE TEST SERIES, CS EXECUTIVE FREE NOTES, CS NOTES, MISSION CS TEST SERIES, CS TEST SERIES, CS EXAM TEST SERIES, CS EXECUTIVE LECTURES, CS LECTURES, CS EXECUTIVE NEW SYLLABUS TEST SERIES, FREE TEST SERIES, TEST SERIES
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
    <h1 class="page-heading">CS Executive Test Series</h1>
    
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
            <p>When preparing for professional exams like Company Secretary (CS) exams, it is crucial to focus on understanding each and every concept thoroughly, along with sufficient writing practice. Without adequate writing practice, you may face several challenges, such as time management issues and difficulties with presentation.</p>

            <p>The Institute of Company Secretaries of India (ICSI) has significantly changed the pattern of CS exams (CS Executive and CS Professional). Instead of direct questions, the exams now include case-based questions. Writing answers to case-based questions can be challenging without sufficient practice before appearing for the ICSI exams.</p>
        </div>
        
        <div class="content-section">
            <h2>CS Executive Subjects</h2>
            <p>The new syllabus of CS Executive has 7 subjects with different coverage:</p>
            <ul>
                <li><span class="important">Jurisprudence, Interpretation & General Laws (JIGL)</span></li>
                <li><span class="important">Company Law</span></li>
                <li><span class="important">Setting up of Business Entities & Closure</span></li>
                <li><span class="important">Corporate Accounting & Financial Management</span></li>
                <li><span class="important">Capital Market & Securities Laws</span></li>
                <li><span class="important">Economic, Commercial & Intellectual Property Laws (ECIPL)</span></li>
                <li><span class="important">Tax Laws (Income Tax and Goods and Services Tax)</span></li>
            </ul>
        </div>
        
        <div class="test-plan">
            <h3>Chapter-wise Test Series</h3>
            <p>In this Test Series plan, you will get:</p>
            <ul>
                <li>One test for each chapter (20 to 50 marks each)</li>
                <li>Two full syllabus test papers (100 marks each)</li>
            </ul>
        </div>

        <div class="test-plan">
            <h3>Unit-wise Test Series</h3>
            <p>In this Test Series plan, you will get:</p>
            <ul>
                <li>Four unit papers (20 to 50 marks each), with each test paper combining a few chapters</li>
                <li>One full syllabus test paper (100 marks)</li>
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
            <h2>Why CS Test Series is Important</h2>
            <ul>
                <li><span class="important">Covers the Entire Syllabus</span>: Our CS Test Series includes chapter-wise, unit-wise, and full syllabus tests, so you practice all topics properly.</li>
                <li><span class="important">Case-Based Questions</span>: Since the exam pattern now focuses on case-based questions, our CS Mock Test Series prepares you to handle these types of problems with confidence.</li>
                <li><span class="important">Better Time Management</span>: Practicing timed tests helps you get used to managing your time in the actual exam.</li>
                <li><span class="important">Improves Writing Skills</span>: You will learn how to present your answers in a structured way, which is important for getting good marks.</li>
            </ul>
        </div>
        
        <div class="content-section">
            <h2>How CS Mock Test Series Helps</h2>
            <p>The CS Executive Test Series is not just about practicing; it's also about improving. When you keep solving mock tests regularly, you gain confidence and see steady progress. These tests help you manage time better, understand concepts clearly, and reduce silly mistakes.</p>
            <p>Students who practice with CS Test Series often perform much better because they are familiar with the question patterns and know how to structure their answers. It also helps reduce exam anxiety since you already know what to expect in the exam.</p>
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
