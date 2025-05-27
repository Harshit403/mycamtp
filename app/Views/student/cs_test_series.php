<?= $this->extend('student/layout/layout') ?>
<?=$this->section('title')?>
Best CS Test Series for CSEET, CS Executive & CS Professional | Mission CS Test Series
<?=$this->endSection()?>
<?= $this->section('meta_description') ?>
Top-rated CS Test Series with mentorship by AIRs. Get chapter-wise, unit-wise & full syllabus test papers for CSEET, CS Executive & CS Professional exams.
<?=$this->endSection()?>
<?= $this->section('meta_keywords') ?>
CS test series, company secretary test series, CS online test series, CS mock test series, best CS test series, CS executive test series, CSEET test series, CS professional test series, ICSI test series, ICSI pre-test, free CS test series, test series for CS executive, test series for CS professional, CS mock test series, CS exam test series, free test series, affordable test series, best test series, CS exams, ICSI exams, CS executive new syllabus test series, CS executive free test series, CS lecture, CS executive lectures, CS executive notes, CS mock test, Mission CS test series, CS test series for June 2025
<?=$this->endSection()?>
<meta name="author" content="Mission CS Test Series">
<meta name="robots" content="index, follow">
<link rel="canonical" href="https://missioncstestseries.com/">

<!-- Open Graph / Facebook -->
<meta property="og:title" content="Best CS Test Series | Mission CS Test Series">
<meta property="og:description" content="Top-rated CS Test Series with mentorship by AIRs for CSEET, CS Executive & CS Professional exams">
<meta property="og:type" content="website">
<meta property="og:url" content="https://missioncstestseries.com/">
<meta property="og:image" content="https://missioncstestseries.com/assets/images/og-image.jpg">


<style>
    /* Modern Color Variables */
    :root {
        --primary: #e63e58;
        --primary-light: rgba(230, 62, 88, 0.8);
        --primary-dark: #c9344d;
        --secondary: #fbe7ec;
        --light: #ffffff;
        --dark: #1a1a1a;
        --gray: #6c757d;
        --light-gray: #f8f9fa;
        --glass: rgba(255, 255, 255, 0.15);
        --glass-border: rgba(255, 255, 255, 0.2);
        --shadow: 0 8px 32px rgba(0, 0, 0, 0.1);
        --transition: all 0.4s cubic-bezier(0.25, 0.8, 0.25, 1);
    }

    /* Modern Fonts */
    @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Manrope:wght@600;700;800&display=swap');
    
    body {
        font-family: 'Inter', sans-serif;
        color: var(--dark);
        line-height: 1.7;
        background-color: #fafafa;
        overflow-x: hidden;
    }
    
    h1, h2, h3, h4 {
        font-family: 'Manrope', sans-serif;
        font-weight: 700;
        color: var(--dark);
        line-height: 1.3;
    }
    
    /* Modern Hero Section - Enhanced Design */
    .hero {
        background: linear-gradient(135deg, #2b5876 0%, #4e4376 100%);
        color: white;
        padding: 150px 0 180px;
        text-align: center;
        position: relative;
        overflow: hidden;
    }
    
    .hero::before {
        content: '';
        position: absolute;
        bottom: -50px;
        left: 0;
        width: 100%;
        height: 100px;
        background: url('<?=base_url()?>assets/images/wave.svg') center/cover no-repeat;
        z-index: 1;
    }
    
    .hero-content {
        max-width: 800px;
        margin: 0 auto;
        position: relative;
        z-index: 2;
    }
    
    .hero h1 {
        font-size: 3.5rem;
        margin-bottom: 20px;
        animation: fadeIn 1s ease-out;
        color: white;
        text-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
    }
    
    .hero p {
        font-size: 1.3rem;
        max-width: 700px;
        margin: 0 auto 40px;
        animation: fadeIn 1s ease-out 0.2s forwards;
        opacity: 0;
        color: rgba(255, 255, 255, 0.9);
    }
    
    .hero-btns {
        display: flex;
        justify-content: center;
        gap: 20px;
        animation: fadeIn 1s ease-out 0.4s forwards;
        opacity: 0;
    }
    
    .hero-image {
        position: absolute;
        right: 5%;
        bottom: 0;
        height: 90%;
        z-index: 1;
        animation: float 6s ease-in-out infinite;
    }
    
    /* Section Styling */
    .section {
        padding: 100px 0;
        position: relative;
    }
    
    .section-title {
        text-align: center;
        margin-bottom: 60px;
    }
    
    .section-title h2 {
        font-size: 2.5rem;
        margin-bottom: 15px;
    }
    
    .section-title p {
        font-size: 1.2rem;
        color: var(--gray);
        max-width: 700px;
        margin: 0 auto;
    }
    
    /* Content Section */
    .content-section {
        background: white;
        border-radius: 16px;
        padding: 40px;
        box-shadow: var(--shadow);
        margin-bottom: 40px;
    }
    
    .content-section h1 {
        text-align: center;
        color: var(--primary);
        margin-bottom: 30px;
    }
    
    .content-section p {
        font-size: 1rem;
        text-align: justify;
        margin-bottom: 20px;
    }
    
    .content-section strong {
        color: var(--primary);
    }
    
    /* Plan Options */
    .plan-option {
        margin-bottom: 30px;
    }
    
    .plan-option h3 {
        color: var(--dark);
        margin-bottom: 10px;
        font-size: 1.2rem;
    }
    
    /* Buying Steps */
    .buying-steps {
        padding-left: 20px;
        margin-top: 30px;
    }
    
    .buying-steps li {
        margin-bottom: 15px;
        font-size: 1rem;
        position: relative;
        padding-left: 30px;
    }
    
    .buying-steps .step {
        color: var(--primary);
        font-weight: bold;
        position: absolute;
        left: 0;
    }
    
    /* Centered Image */
    .centered-image {
        display: flex;
        justify-content: center;
        align-items: center;
        background-color: var(--light-gray);
        padding: 30px 0;
        margin: 40px 0;
    }
    
    .centered-image img {
        max-width: 100%;
        height: auto;
        border-radius: 8px;
        box-shadow: var(--shadow);
    }
    
    /* Modern Glassmorphism Cards */
    .glass-card {
        background: var(--glass);
        backdrop-filter: blur(10px);
        -webkit-backdrop-filter: blur(10px);
        border-radius: 16px;
        border: 1px solid var(--glass-border);
        box-shadow: var(--shadow);
        padding: 30px;
        transition: var(--transition);
    }
    
    .glass-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 15px 30px rgba(0, 0, 0, 0.2);
    }
    
    /* Why Choose Us Section - Modern Grid */
    .features {
        padding: 100px 0;
        position: relative;
    }
    
    .features::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: url('<?=base_url()?>assets/images/dots-pattern.png') center/cover;
        opacity: 0.05;
        z-index: -1;
    }
    
    .feature-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 30px;
        margin-top: 50px;
    }
    
    .feature-card {
        background: white;
        border-radius: 16px;
        padding: 40px 30px;
        box-shadow: var(--shadow);
        transition: var(--transition);
        text-align: center;
        border: 1px solid rgba(0, 0, 0, 0.05);
    }
    
    .feature-card:hover {
        transform: translateY(-10px) scale(1.02);
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
    }
    
    .feature-icon {
        width: 80px;
        height: 80px;
        background: linear-gradient(135deg, var(--primary), var(--primary-dark));
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 25px;
        color: white;
        font-size: 2rem;
        box-shadow: 0 10px 20px rgba(230, 62, 88, 0.3);
    }
    
    /* Test Series Plans Section */
    .plans-section {
        background-color: var(--light-gray);
    }
    
    .plans-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 30px;
    }
    
    .plan-card {
        background: white;
        border-radius: 16px;
        overflow: hidden;
        box-shadow: var(--shadow);
        transition: var(--transition);
        position: relative;
    }
    
    .plan-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 15px 30px rgba(0, 0, 0, 0.15);
    }
    
    .plan-header {
        background: linear-gradient(135deg, var(--primary), var(--primary-dark));
        color: white;
        padding: 25px;
        text-align: center;
    }
    
    .plan-header h3 {
        font-size: 1.8rem;
        margin-bottom: 5px;
    }
    
    .plan-header .price {
        font-size: 2.5rem;
        font-weight: 700;
        margin-bottom: 10px;
    }
    
    .plan-header .duration {
        font-size: 1rem;
        opacity: 0.9;
    }
    
    .plan-body {
        padding: 30px;
    }
    
    .plan-features {
        list-style: none;
        padding: 0;
        margin-bottom: 30px;
    }
    
    .plan-features li {
        padding: 8px 0;
        border-bottom: 1px solid rgba(0, 0, 0, 0.05);
        display: flex;
        align-items: center;
    }
    
    .plan-features li i {
        color: var(--primary);
        margin-right: 10px;
    }
    
    .plan-tag {
        position: absolute;
        top: 20px;
        right: -30px;
        background: #ffc107;
        color: var(--dark);
        padding: 5px 30px;
        transform: rotate(45deg);
        font-weight: 600;
        font-size: 0.8rem;
    }
    
    /* Buying Process Section */
    .process-steps {
        display: flex;
        justify-content: center;
        flex-wrap: wrap;
        gap: 30px;
        margin-top: 50px;
    }
    
    .process-step {
        flex: 1;
        min-width: 250px;
        max-width: 300px;
        text-align: center;
        position: relative;
    }
    
    .process-step:not(:last-child)::after {
        content: '→';
        position: absolute;
        right: -25px;
        top: 50%;
        transform: translateY(-50%);
        color: var(--gray);
        font-size: 1.5rem;
    }
    
    .step-number {
        width: 60px;
        height: 60px;
        background: linear-gradient(135deg, var(--primary), var(--primary-dark));
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        font-size: 1.5rem;
        font-weight: 700;
        margin: 0 auto 20px;
        box-shadow: 0 10px 20px rgba(230, 62, 88, 0.3);
    }
    
    .step-content h3 {
        margin-bottom: 15px;
    }
    
    /* Testimonials Section - WhatsApp Style */
    .testimonials-section {
        background: linear-gradient(135deg, #f5f7fa 0%, #e4e8eb 100%);
    }
    
    .testimonials-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 30px;
        margin-top: 50px;
    }
    
    .testimonial-card {
        background: white;
        border-radius: 16px;
        padding: 0;
        box-shadow: var(--shadow);
        position: relative;
        overflow: hidden;
    }
    
    .whatsapp-chat {
        width: 100%;
        height: 400px;
        object-fit: cover;
        border-radius: 16px;
        transition: transform 0.5s ease;
    }
    
    .testimonial-card:hover .whatsapp-chat {
        transform: scale(1.03);
    }
    
    .testimonial-overlay {
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        background: linear-gradient(to top, rgba(0,0,0,0.8), transparent);
        padding: 20px;
        color: white;
    }
    
    .testimonial-author {
        display: flex;
        align-items: center;
    }
    
    .testimonial-author img {
        width: 50px;
        height: 50px;
        border-radius: 50%;
        object-fit: cover;
        margin-right: 15px;
        border: 3px solid var(--primary);
    }
    
    .author-info h4 {
        margin-bottom: 5px;
    }
    
    .author-info p {
        color: rgba(255, 255, 255, 0.8);
        font-size: 0.9rem;
        margin: 0;
    }
    
    .whatsapp-badge {
        display: inline-block;
        background: #25D366;
        color: white;
        padding: 5px 10px;
        border-radius: 4px;
        font-size: 0.8rem;
        margin-top: 5px;
    }
    
    /* Schedule Section */
    .schedule-card {
        background: white;
        border-radius: 16px;
        padding: 30px;
        box-shadow: var(--shadow);
        margin-bottom: 30px;
    }
    
    .schedule-table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
    }
    
    .schedule-table th, 
    .schedule-table td {
        padding: 15px;
        text-align: left;
        border-bottom: 1px solid rgba(0, 0, 0, 0.05);
    }
    
    .schedule-table th {
        background: var(--primary);
        color: white;
    }
    
    .schedule-table tr:nth-child(even) {
        background: rgba(0, 0, 0, 0.02);
    }
    
    /* Modern Notice Banner with Marquee */
    .notice-banner {
        background: linear-gradient(90deg, var(--primary), var(--primary-dark));
        color: white;
        padding: 15px 0;
        position: relative;
        overflow: hidden;
    }
    
    .notice-banner .container {
        position: relative;
        z-index: 2;
    }
    
    .marquee {
        display: flex;
        align-items: center;
        white-space: nowrap;
        animation: scroll 20s linear infinite;
    }
    
    .marquee:hover {
        animation-play-state: paused;
    }
    
    .marquee p {
        display: inline-flex;
        align-items: center;
        margin: 0 40px 0 0;
        font-weight: 600;
        font-size: 1.1rem;
    }
    
    .marquee p span {
        background: rgba(255, 255, 255, 0.2);
        padding: 5px 15px;
        border-radius: 50px;
        font-weight: 700;
        margin-left: 15px;
    }
    
    .notice-banner::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: url('<?=base_url()?>assets/images/dots-pattern.png') center/cover;
        opacity: 0.1;
    }
    
    /* Quick Links */
    .quick-links {
        display: flex;
        justify-content: center;
        gap: 15px;
        margin: 30px 0;
        flex-wrap: wrap;
    }
    
    .quick-links a {
        display: inline-block;
        padding: 12px 25px;
        background: white;
        color: var(--primary);
        border-radius: 50px;
        font-weight: 600;
        text-decoration: none;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        transition: var(--transition);
    }
    
    .quick-links a:hover {
        background: var(--primary);
        color: white;
        transform: translateY(-3px);
    }
    
    /* Modern Footer - Improved bottom section */
    .footer {
        background: linear-gradient(135deg, #1a1a1a, #2a2a2a);
        color: white;
        padding: 80px 0 0;
        position: relative;
    }
    
    .footer::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 5px;
        background: linear-gradient(90deg, var(--primary), var(--primary-dark));
    }
    
    .footer-content {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 40px;
        margin-bottom: 60px;
    }
    
    .footer-logo {
        margin-bottom: 20px;
    }
    
    .footer-logo h3 {
        color: white;
        font-size: 1.8rem;
        margin-bottom: 10px;
    }
    
    .footer-logo h3 span {
        color: var(--primary);
    }
    
    .footer-about p {
        color: rgba(255, 255, 255, 0.7);
        margin-bottom: 20px;
    }
    
    .footer-links h4 {
        color: white;
        font-size: 1.3rem;
        margin-bottom: 25px;
        position: relative;
        padding-bottom: 10px;
    }
    
    .footer-links h4::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        width: 50px;
        height: 3px;
        background: var(--primary);
    }
    
    .footer-links ul {
        list-style: none;
        padding: 0;
    }
    
    .footer-links li {
        margin-bottom: 12px;
    }
    
    .footer-links a {
        color: rgba(255, 255, 255, 0.7);
        transition: var(--transition);
        text-decoration: none;
        display: flex;
        align-items: center;
    }
    
    .footer-links a:hover {
        color: white;
        transform: translateX(5px);
    }
    
    .footer-links a i {
        margin-right: 10px;
        color: var(--primary);
    }
    
    .social-links {
        display: flex;
        gap: 15px;
        margin-top: 20px;
    }
    
    .social-links a {
        width: 45px;
        height: 45px;
        background: rgba(255, 255, 255, 0.1);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        font-size: 1.2rem;
        transition: var(--transition);
    }
    
    .social-links a:hover {
        background: var(--primary);
        transform: translateY(-5px);
    }
    
    /* Improved Footer Bottom Section */
    .footer-bottom {
        background: rgba(0, 0, 0, 0.2);
        padding: 25px 0;
        text-align: center;
        border-top: 1px solid rgba(255, 255, 255, 0.05);
    }
    
    .footer-bottom p {
        color: rgba(255, 255, 255, 0.5);
        margin: 0;
        font-size: 0.9rem;
    }
    
    .footer-bottom a {
        color: rgba(255, 255, 255, 0.7);
        transition: var(--transition);
        text-decoration: none;
    }
    
    .footer-bottom a:hover {
        color: var(--primary);
    }
    
    /* Modern Buttons */
    .btn {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        padding: 14px 32px;
        border-radius: 50px;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 1px;
        transition: var(--transition);
        text-align: center;
        font-size: 0.95rem;
        border: none;
        cursor: pointer;
        position: relative;
        overflow: hidden;
    }
    
    .btn-primary {
        background: linear-gradient(135deg, var(--primary), var(--primary-dark));
        color: white;
        box-shadow: 0 10px 20px rgba(230, 62, 88, 0.3);
    }
    
    .btn-primary:hover {
        transform: translateY(-3px);
        box-shadow: 0 15px 30px rgba(230, 62, 88, 0.4);
    }
    
    .btn-outline {
        background: transparent;
        color: white;
        border: 2px solid white;
    }
    
    .btn-outline:hover {
        background: white;
        color: var(--primary);
    }
    
    .btn-block {
        display: block;
        width: 100%;
    }
    
    /* Animations */
    @keyframes fadeIn {
        from { opacity: 0; transform: translateY(20px); }
        to { opacity: 1; transform: translateY(0); }
    }
    
    @keyframes float {
        0%, 100% { transform: translateY(0); }
        50% { transform: translateY(-15px); }
    }
    
    @keyframes scroll {
        0% { transform: translateX(0); }
        100% { transform: translateX(-50%); }
    }
    
    /* Responsive Styles */
    @media (max-width: 1200px) {
        .hero-image {
            opacity: 0.3;
        }
    }
    
    @media (max-width: 992px) {
        .hero h1 {
            font-size: 2.8rem;
        }
        
        .hero p {
            font-size: 1.1rem;
        }
        
        .process-step:not(:last-child)::after {
            display: none;
        }
        
        .process-steps {
            flex-direction: column;
            align-items: center;
        }
        
        .process-step {
            max-width: 100%;
        }
        
        .hero-image {
            display: none;
        }
    }
    
    @media (max-width: 768px) {
        .hero {
            padding: 120px 0 150px;
            background-attachment: scroll;
        }
        
        .hero h1 {
            font-size: 2.3rem;
        }
        
        .hero-btns {
            flex-direction: column;
            gap: 15px;
        }
        
        .btn {
            width: 100%;
        }
        
        .feature-grid, 
        .plans-grid,
        .testimonials-grid {
            grid-template-columns: 1fr;
        }
        
        .footer-content {
            grid-template-columns: 1fr;
        }
        
        .content-section {
            padding: 30px;
        }
    }
    
    @media (max-width: 576px) {
        .hero h1 {
            font-size: 2rem;
        }
        
        .marquee p {
            font-size: 0.9rem;
        }
        
        .section {
            padding: 60px 0;
        }
        
        .section-title h2 {
            font-size: 2rem;
        }
        
        .whatsapp-chat {
            height: 300px;
        }
        
        .quick-links a {
            width: 100%;
            text-align: center;
        }
    }
</style>

<!-- Modern Hero Section with Enhanced Design -->
<section class="hero">
    <div class="container">
        <div class="hero-content">
            <h1>Master Your CS Exams With Precision</h1>
            <p>Comprehensive test series designed by ICSI rank holders to help you excel in CSEET, CS Executive & CS Professional exams</p>
            <div class="hero-btns">
                <a href="#test-series" class="btn btn-primary">Explore Test Series</a>
                <a href="#features" class="btn btn-outline">Learn How It Works</a>
            </div>
        </div>
    </div>
    <img src="<?=base_url()?>assets/images/hero-image.png" alt="CS Exam Preparation" class="hero-image">
</section>

<!-- Notice Banner with Marquee -->
<div class="notice-banner">
    <div class="container">
        <div class="marquee">
            <p>
                <i class="fas fa-bullhorn"></i> 
                Limited Time Offer: Get 20% Off on All Test Series 
                <span>Use Code: MISSION20</span>
            </p>
            <p>
                <i class="fas fa-star"></i> 
                New Batch Starting Soon - Enroll Now 
                <span>Limited Seats</span>
            </p>
            <p>
                <i class="fas fa-chart-line"></i> 
                98% Success Rate in Last Exam 
                <span>Join Our Winners</span>
            </p>
        </div>
    </div>
</div>

<!-- Quick Links -->
<div class="container">
    <div class="quick-links">
        <a href="#buy-steps">How to Buy?</a>
        <a href="#testimonials">Testimonials</a>
        <a href="https://schedule.missioncstestseries.com/">Schedules</a>
        <a href="<?=base_url()?>plans">Available Plans</a>
    </div>
</div>

<!-- Mission CS Test Series Content -->
<section class="section">
    <div class="container">
        <div class="content-section">
            <h1>Mission CS Test Series</h1>

            <p>
                <strong>Mission CS Test Series</strong> is the only Test Series that provides <strong>weekly Mentorship sessions by AIR</strong> and <strong>Unseen questions</strong> as per ICSI Pattern, making it the best CS Test Series for each level of CS Exams.
            </p>

            <p>
                We have a team of professionals to <strong>solve your doubts and queries</strong> and to <strong>evaluate the Answer Sheets</strong> of students. Our Test Series is the only platform that provides a test experience similar to real ICSI Exams.
            </p>

            <div class="centered-image">
                <img src="<?=base_url()?>assetItems/image/cs1.png" alt="CS Exam Preparation">
            </div>

            <h2 style="color: var(--primary); margin-top: 30px; margin-bottom: 20px;">Which Plan is Best?</h2>

            <div class="plan-option">
                <h3>Chapter-wise Test Series</h3>
                <p>Those students who need more practice and writing practice can opt for the <strong>Chapter-wise Plan</strong>.</p>
            </div>

            <div class="plan-option">
                <h3>Unit-wise Test Series</h3>
                <p>Those students who need to <strong>analyze their strength or weakness</strong> to improve it before appearing for CS Exams can opt for the <strong>Unit-wise Plan</strong>.</p>
            </div>

            <div class="plan-option">
                <h3>Full Syllabus Test Series</h3>
                <p>This is the best option to <strong>evaluate your real preparation</strong> after analyzing and improving your mistakes.</p>
            </div>
        </div>
    </div>
</section>

<!-- Buying Steps Section -->
<section class="section" style="background-color: var(--light-gray);">
    <div class="container">
        <div class="content-section">
            <h1 id="buy-steps" style="color: var(--primary);">How to Buy Test Series?</h1>
            <ol class="buying-steps">
                <li><span class="step">Step 1:</span> Choose the Category, i.e., CS Test Series.</li>
                <li><span class="step">Step 2:</span> Select the Level of your Exams, i.e., CSEET, CS Executive, or CS Professional.</li>
                <li><span class="step">Step 3:</span> Choose the Plans, i.e., Chapter-wise Test Series, Unit-wise Test Series, or Full Syllabus Test Series, as per your requirements.</li>
                <li><span class="step">Step 4:</span> Choose the Subjects you want to buy.</li>
                <li><span class="step">Step 5:</span> Add subjects to the cart from the subjects list.</li>
                <li><span class="step">Step 6:</span> Click on the Cart Icon in the header of the website (located at the top).</li>
                <li><span class="step">Step 7:</span> Apply Promocode for discounts.</li>
                <li><span class="step">Step 8:</span> Make the payment. After successful payment, test papers, notes, and other resources will be credited to your Student's Dashboard.</li>
            </ol>
            
            <div class="centered-image">
                <img src="<?=base_url()?>assetItems/image/cs2.png" alt="CS Exam Preparation">
            </div>
        </div>
    </div>
</section>

<!-- Why Choose Us Section -->
<section id="features" class="features">
    <div class="container">
        <div class="text-center">
            <h2>Why Mission CS Test Series?</h2>
            <p class="lead">Designed to give you the competitive edge in your CS exams</p>
        </div>
        
        <div class="feature-grid">
            <!-- Feature 1 -->
            <div class="feature-card">
                <div class="feature-icon">
                    <i class="fas fa-book-open"></i>
                </div>
                <h3>Case-Based Questions</h3>
                <p>Unseen case studies matching the latest ICSI exam pattern to prepare you for real exam scenarios.</p>
            </div>
            
            <!-- Feature 2 -->
            <div class="feature-card">
                <div class="feature-icon">
                    <i class="fas fa-user-graduate"></i>
                </div>
                <h3>Mentorship by AIRs</h3>
                <p>Weekly mentorship sessions with All India Rank holders to guide your preparation strategy.</p>
            </div>
            
            <!-- Feature 3 -->
            <div class="feature-card">
                <div class="feature-icon">
                    <i class="fas fa-file-alt"></i>
                </div>
                <h3>Quick Evaluation</h3>
                <p>Answer sheets evaluated within 48 hours with detailed feedback and suggested answers.</p>
            </div>
            
            <!-- Feature 4 -->
            <div class="feature-card">
                <div class="feature-icon">
                    <i class="fas fa-chart-line"></i>
                </div>
                <h3>Performance Analytics</h3>
                <p>Track your progress with detailed analytics and identify areas for improvement.</p>
            </div>
            
            <!-- Feature 5 -->
            <div class="feature-card">
                <div class="feature-icon">
                    <i class="fas fa-calendar-alt"></i>
                </div>
                <h3>Flexible Scheduling</h3>
                <p>Attempt tests as per your convenience with both scheduled and unscheduled options.</p>
            </div>
            
            <!-- Feature 6 -->
            <div class="feature-card">
                <div class="feature-icon">
                    <i class="fas fa-headset"></i>
                </div>
                <h3>Dedicated Support</h3>
                <p>24/7 support to resolve your queries and provide guidance throughout your preparation.</p>
            </div>
        </div>
    </div>
</section>

<!-- Test Series Plans Section -->
<section id="test-series" class="section plans-section">
    <div class="container">
        <div class="section-title">
            <h2>Our Test Series Plans</h2>
            <p>Choose the perfect plan that fits your preparation needs and budget</p>
        </div>
        
        <div class="plans-grid">
            <!-- Plan 1 -->
            <div class="plan-card">
                <div class="plan-header">
                    <h3>Basic</h3>
                    <div class="price">₹1,999</div>
                    <div class="duration">per month</div>
                </div>
                <div class="plan-body">
                    <ul class="plan-features">
                        <li><i class="fas fa-check"></i> 4 Chapter-wise Tests</li>
                        <li><i class="fas fa-check"></i> 2 Unit-wise Tests</li>
                        <li><i class="fas fa-check"></i> 1 Full Syllabus Test</li>
                        <li><i class="fas fa-check"></i> Basic Performance Analytics</li>
                        <li><i class="fas fa-check"></i> Email Support</li>
                        <li><i class="fas fa-times"></i> Mentorship Sessions</li>
                        <li><i class="fas fa-times"></i> Priority Evaluation</li>
                    </ul>
                    <a href="#" class="btn btn-primary btn-block">Get Started</a>
                </div>
            </div>
            
            <!-- Plan 2 (Popular) -->
            <div class="plan-card">
                <div class="plan-tag">Most Popular</div>
                <div class="plan-header">
                    <h3>Standard</h3>
                    <div class="price">₹3,999</div>
                    <div class="duration">per month</div>
                </div>
                <div class="plan-body">
                    <ul class="plan-features">
                        <li><i class="fas fa-check"></i> 8 Chapter-wise Tests</li>
                        <li><i class="fas fa-check"></i> 4 Unit-wise Tests</li>
                        <li><i class="fas fa-check"></i> 2 Full Syllabus Tests</li>
                        <li><i class="fas fa-check"></i> Advanced Performance Analytics</li>
                        <li><i class="fas fa-check"></i> Priority Support</li>
                        <li><i class="fas fa-check"></i> 2 Mentorship Sessions</li>
                        <li><i class="fas fa-check"></i> Priority Evaluation (48hrs)</li>
                    </ul>
                    <a href="#" class="btn btn-primary btn-block">Get Started</a>
                </div>
            </div>
            
            <!-- Plan 3 -->
            <div class="plan-card">
                <div class="plan-header">
                    <h3>Premium</h3>
                    <div class="price">₹5,999</div>
                    <div class="duration">per month</div>
                </div>
                <div class="plan-body">
                    <ul class="plan-features">
                        <li><i class="fas fa-check"></i> 12 Chapter-wise Tests</li>
                        <li><i class="fas fa-check"></i> 6 Unit-wise Tests</li>
                        <li><i class="fas fa-check"></i> 4 Full Syllabus Tests</li>
                        <li><i class="fas fa-check"></i> Comprehensive Analytics</li>
                        <li><i class="fas fa-check"></i> 24/7 Dedicated Support</li>
                        <li><i class="fas fa-check"></i> Weekly Mentorship</li>
                        <li><i class="fas fa-check"></i> Instant Evaluation (24hrs)</li>
                    </ul>
                    <a href="#" class="btn btn-primary btn-block">Get Started</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Test Schedule Section -->
<section id="schedule" class="section">
    <div class="container">
        <div class="section-title">
            <h2>Test Schedule</h2>
            <p>Upcoming test dates for our comprehensive test series</p>
        </div>
        
        <div class="schedule-card">
            <h3>CSEET Test Series Schedule</h3>
            <p>Comprehensive schedule for CSEET aspirants covering all subjects</p>
            
            <table class="schedule-table">
                <thead>
                    <tr>
                        <th>Test Name</th>
                        <th>Date</th>
                        <th>Duration</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Business Communication</td>
                        <td>June 15, 2025</td>
                        <td>2 Hours</td>
                    </tr>
                    <tr>
                        <td>Legal Aptitude</td>
                        <td>June 22, 2025</td>
                        <td>2 Hours</td>
                    </tr>
                    <tr>
                        <td>Full Syllabus Mock 1</td>
                        <td>June 29, 2025</td>
                        <td>3 Hours</td>
                    </tr>
                </tbody>
            </table>
            
            <div class="text-center" style="margin-top: 30px;">
                <a href="<?=base_url()?>schedules" class="btn btn-primary">View Full Schedule</a>
            </div>
        </div>
    </div>
</section>

<!-- Testimonials Section with WhatsApp Screenshots -->
<section id="testimonials" class="section testimonials-section">
    <div class="container">
        <div class="section-title">
            <h2>What Our Students Say</h2>
            <p>Success stories from students who aced their exams with our test series</p>
        </div>
        
        <div class="testimonials-grid">
            <!-- Testimonial 1 -->
            <div class="testimonial-card">
                <img src="<?=base_url()?>assets/images/testimonials/whatsapp-screenshot1.jpg" alt="WhatsApp Testimonial" class="whatsapp-chat">
                <div class="testimonial-overlay">
                    <div class="testimonial-author">
                        <img src="<?=base_url()?>assets/images/testimonials/student1.jpg" alt="Rahul Sharma">
                        <div class="author-info">
                            <h4>Rahul Sharma</h4>
                            <p>CS Professional, AIR 12</p>
                            <span class="whatsapp-badge"><i class="fab fa-whatsapp"></i> Verified</span>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Testimonial 2 -->
            <div class="testimonial-card">
                <img src="<?=base_url()?>assets/images/testimonials/whatsapp-screenshot2.jpg" alt="WhatsApp Testimonial" class="whatsapp-chat">
                <div class="testimonial-overlay">
                    <div class="testimonial-author">
                        <img src="<?=base_url()?>assets/images/testimonials/student2.jpg" alt="Priya Patel">
                        <div class="author-info">
                            <h4>Priya Patel</h4>
                            <p>CS Executive, AIR 8</p>
                            <span class="whatsapp-badge"><i class="fab fa-whatsapp"></i> Verified</span>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Testimonial 3 -->
            <div class="testimonial-card">
                <img src="<?=base_url()?>assets/images/testimonials/whatsapp-screenshot3.jpg" alt="WhatsApp Testimonial" class="whatsapp-chat">
                <div class="testimonial-overlay">
                    <div class="testimonial-author">
                        <img src="<?=base_url()?>assets/images/testimonials/student3.jpg" alt="Amit Kumar">
                        <div class="author-info">
                            <h4>Amit Kumar</h4>
                            <p>CSEET, AIR 3</p>
                            <span class="whatsapp-badge"><i class="fab fa-whatsapp"></i> Verified</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="section" style="background: linear-gradient(135deg, var(--primary), var(--primary-dark)); padding: 80px 0;">
    <div class="container">
        <div class="text-center">
            <h2 style="color: white; margin-bottom: 20px;">Ready to Ace Your CS Exams?</h2>
            <p style="color: rgba(255,255,255,0.9); max-width: 700px; margin: 0 auto 40px;">Join thousands of successful students who trusted Mission CS Test Series for their preparation</p>
            <a href="#test-series" class="btn btn-outline" style="border-color: white; color: white;">Enroll Now</a>
        </div>
    </div>
</section>

<!-- Modern Footer with Improved Bottom Section -->
<footer class="footer">
    <div class="container">
        <div class="footer-content">
            <div class="footer-about">
                <div class="footer-logo">
                    <h3>Mission <span>CS</span></h3>
                </div>
                <p>Providing quality test series for CS students since 2015. Our mission is to help every CS aspirant achieve their dream of becoming a Company Secretary.</p>
                <div class="social-links">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    <a href="#"><i class="fab fa-youtube"></i></a>
                </div>
            </div>
            
            <div class="footer-links">
                <h4>Quick Links</h4>
                <ul>
                    <li><a href="<?=base_url()?>"><i class="fas fa-chevron-right"></i> Home</a></li>
                    <li><a href="#test-series"><i class="fas fa-chevron-right"></i> Test Series</a></li>
                    <li><a href="#features"><i class="fas fa-chevron-right"></i> Features</a></li>
                    <li><a href="#how-it-works"><i class="fas fa-chevron-right"></i> How It Works</a></li>
                    <li><a href="#testimonials"><i class="fas fa-chevron-right"></i> Testimonials</a></li>
                    <li><a href="#faq"><i class="fas fa-chevron-right"></i> FAQs</a></li>
                </ul>
            </div>
            
            <div class="footer-links">
                <h4>Test Series</h4>
                <ul>
                    <li><a href="<?=base_url()?>type?category=cs-test-series&&level=cseet-test-series"><i class="fas fa-chevron-right"></i> CSEET Test Series</a></li>
                    <li><a href="<?=base_url()?>type?category=cs-test-series&&level=cs-executive-test-series"><i class="fas fa-chevron-right"></i> CS Executive Test Series</a></li>
                    <li><a href="<?=base_url()?>type?category=cs-test-series&&level=cs-professional-test-series"><i class="fas fa-chevron-right"></i> CS Professional Test Series</a></li>
                    <li><a href="#"><i class="fas fa-chevron-right"></i> Chapter-wise Tests</a></li>
                    <li><a href="#"><i class="fas fa-chevron-right"></i> Unit-wise Tests</a></li>
                    <li><a href="#"><i class="fas fa-chevron-right"></i> Full Syllabus Tests</a></li>
                </ul>
            </div>
            
            <div class="footer-links">
                <h4>Contact Us</h4>
                <ul>
                    <li><a href="#"><i class="fas fa-map-marker-alt"></i> 123 CS Plaza, New Delhi, India</a></li>
                    <li><a href="tel:+919876543210"><i class="fas fa-phone-alt"></i> +91 9876543210</a></li>
                    <li><a href="mailto:info@missioncstestseries.com"><i class="fas fa-envelope"></i> info@missioncstestseries.com</a></li>
                </ul>
            </div>
        </div>
    </div>
    
    <!-- Improved Footer Bottom Section -->
    <div class="footer-bottom">
        <div class="container">
            <p>&copy; 2023 Mission CS Test Series. All Rights Reserved. | <a href="#">Privacy Policy</a> | <a href="#">Terms & Conditions</a> | <a href="#">Refund Policy</a></p>
        </div>
    </div>
</footer>

<!-- Scripts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js"></script>
<script>
    // Animation on scroll
    function animateOnScroll() {
        const elements = document.querySelectorAll('.feature-card, .plan-card, .testimonial-card, .process-step, .schedule-card, .content-section');
        
        elements.forEach(element => {
            const elementPosition = element.getBoundingClientRect().top;
            const screenPosition = window.innerHeight / 1.3;
            
            if (elementPosition < screenPosition) {
                element.style.opacity = '1';
                element.style.transform = 'translateY(0)';
            }
        });
    }
    
    // Set initial state for animated elements
    document.querySelectorAll('.feature-card, .plan-card, .testimonial-card, .process-step, .schedule-card, .content-section').forEach(element => {
        element.style.opacity = '0';
        element.style.transform = 'translateY(20px)';
        element.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
    });
    
    // Run on load and scroll
    window.addEventListener('load', animateOnScroll);
    window.addEventListener('scroll', animateOnScroll);
    
    // Smooth scrolling for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            e.preventDefault();
            
            const targetId = this.getAttribute('href');
            if (targetId === '#') return;
            
            const targetElement = document.querySelector(targetId);
            if (targetElement) {
                window.scrollTo({
                    top: targetElement.offsetTop - 80,
                    behavior: 'smooth'
                });
            }
        });
    });
</script>

<?= $this->endSection() ?>
<?=$this->section('jsContent')?>
