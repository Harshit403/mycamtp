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

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Comprehensive mock tests, expert mentorship, and performance analytics for CS aspirants. Join India's #1 CS Test Series for Foundation, Executive & Professional levels.">
    <title>Mission CS Test Series | Top-Ranked CS Exam Preparation</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Montserrat:wght@700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css">
    <style>
        :root {
            --mcs-primary-color: #e63946;
            --mcs-primary-dark: #c1121f;
            --mcs-primary-light: #f8edeb;
            --mcs-secondary-color: #1d3557;
            --mcs-accent-color: #457b9d;
            --mcs-light-color: #f1faee;
            --mcs-dark-color: #1a1a2e;
            --mcs-text-color: #333;
            --mcs-text-light: #6c757d;
            --mcs-white: #ffffff;
            --mcs-gray: #e9ecef;
            --mcs-success: #2a9d8f;
            --mcs-warning: #e9c46a;
            --mcs-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            --mcs-transition: all 0.3s ease;
            --mcs-transition-slow: all 0.6s cubic-bezier(0.16, 1, 0.3, 1);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            color: var(--mcs-text-color);
            line-height: 1.7;
            overflow-x: hidden;
            background-color: var(--mcs-white);
        }

        h1, h2, h3, h4 {
            font-weight: 700;
            line-height: 1.3;
            color: var(--mcs-dark-color);
        }

        a {
            text-decoration: none;
            color: inherit;
            transition: var(--mcs-transition);
        }

        ul {
            list-style: none;
        }

        img {
            max-width: 100%;
            height: auto;
        }

        .mcs-container {
            width: 90%;
            max-width: 1320px;
            margin: 0 auto;
            padding: 0 15px;
        }

        .mcs-section {
            padding: 6rem 0;
            position: relative;
        }

        .mcs-section-title {
            text-align: center;
            margin-bottom: 4rem;
            position: relative;
            overflow: hidden;
        }

        .mcs-section-title h2 {
            font-size: 3rem;
            font-family: 'Montserrat', sans-serif;
            margin-bottom: 1.5rem;
            background: linear-gradient(90deg, var(--mcs-primary-color), var(--mcs-secondary-color));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            display: inline-block;
            position: relative;
        }

        .mcs-section-title h2::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 4px;
            background: linear-gradient(90deg, var(--mcs-primary-color), var(--mcs-secondary-color));
            border-radius: 2px;
        }

        .mcs-section-title p {
            color: var(--mcs-text-light);
            max-width: 700px;
            margin: 0 auto;
            font-size: 1.2rem;
        }

        .mcs-btn {
            display: inline-block;
            padding: 0.8rem 1.5rem;
            border-radius: 50px;
            font-weight: 600;
            text-align: center;
            cursor: pointer;
            transition: var(--mcs-transition);
            border: none;
            font-size: 0.9rem;
            box-shadow: var(--mcs-shadow);
            position: relative;
            overflow: hidden;
            z-index: 1;
        }

        .mcs-btn::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 0;
            height: 100%;
            background-color: rgba(255, 255, 255, 0.2);
            transition: var(--mcs-transition);
            z-index: -1;
        }

        .mcs-btn:hover::before {
            width: 100%;
        }

        .mcs-btn-primary {
            background-color: var(--mcs-primary-color);
            color: var(--mcs-white);
        }

        .mcs-btn-primary:hover {
            background-color: var(--mcs-primary-dark);
            transform: translateY(-5px);
            box-shadow: 0 15px 30px rgba(230, 57, 70, 0.4);
        }

        .mcs-btn-secondary {
            background-color: transparent;
            color: var(--mcs-primary-color);
            border: 2px solid var(--mcs-primary-color);
        }

        .mcs-btn-secondary:hover {
            background-color: var(--mcs-primary-color);
            color: var(--mcs-white);
            transform: translateY(-5px);
            box-shadow: 0 15px 30px rgba(230, 57, 70, 0.3);
        }

        .mcs-btn-accent {
            background-color: var(--mcs-accent-color);
            color: var(--mcs-white);
        }

        .mcs-btn-accent:hover {
            background-color: #3a6a8a;
            transform: translateY(-5px);
            box-shadow: 0 15px 30px rgba(69, 123, 157, 0.3);
        }

        .mcs-badge {
            display: inline-block;
            padding: 0.5rem 1.2rem;
            border-radius: 50px;
            font-size: 0.85rem;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
            transition: var(--mcs-transition);
        }

        .mcs-badge-primary {
            background-color: var(--mcs-primary-light);
            color: var(--mcs-primary-color);
        }

        .mcs-badge-secondary {
            background-color: rgba(29, 53, 87, 0.1);
            color: var(--mcs-secondary-color);
        }

        /* Header */
        .mcs-header {
            background-color: var(--mcs-white);
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
            position: fixed;
            width: 100%;
            z-index: 999;
            top: 0;
            transition: all 0.4s cubic-bezier(0.16, 1, 0.3, 1);
        }

        .mcs-header.scrolled {
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15);
        }

        .mcs-header-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 1rem 0;
        }

        .mcs-logo {
            display: flex;
            align-items: center;
            gap: 0.8rem;
        }

        .mcs-logo img {
            height: 45px;
            transition: var(--mcs-transition);
        }

        .mcs-logo h1 {
            color: var(--mcs-primary-color);
            font-size: 2rem;
            font-family: 'Montserrat', sans-serif;
            font-weight: 900;
            background: linear-gradient(90deg, var(--mcs-primary-color), var(--mcs-secondary-color));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            letter-spacing: -1px;
        }

        .mcs-nav ul {
            display: flex;
            gap: 2rem;
        }

        .mcs-nav ul li a {
            color: var(--mcs-text-color);
            font-weight: 500;
            position: relative;
            padding: 0.5rem 0;
            font-size: 1.05rem;
        }

        .mcs-nav ul li a::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 0;
            height: 3px;
            background-color: var(--mcs-primary-color);
            transition: var(--mcs-transition-slow);
            border-radius: 3px;
        }

        .mcs-nav ul li a:hover::after,
        .mcs-nav ul li a.active::after {
            width: 100%;
        }

        .mcs-nav ul li a:hover,
        .mcs-nav ul li a.active {
            color: var(--mcs-primary-color);
        }

        .mcs-header-actions {
            display: flex;
            align-items: center;
            gap: 1rem;
        }

        .mcs-cart-button {
            position: relative;
            color: var(--mcs-text-color);
            font-size: 1.2rem;
            transition: var(--mcs-transition);
        }

        .mcs-cart-button:hover {
            color: var(--mcs-primary-color);
            transform: translateY(-2px);
        }

        .mcs-cart-count {
            position: absolute;
            top: -8px;
            right: -8px;
            background-color: var(--mcs-primary-color);
            color: var(--mcs-white);
            border-radius: 50%;
            width: 22px;
            height: 22px;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 0.75rem;
            font-weight: 600;
            transition: var(--mcs-transition);
        }

        .mcs-menu-toggle {
            display: none;
            cursor: pointer;
            font-size: 1.8rem;
            color: var(--mcs-text-color);
            transition: var(--mcs-transition);
            z-index: 1002;
        }

        .mcs-menu-toggle:hover {
            color: var(--mcs-primary-color);
        }

        /* Mobile Menu */
        .mcs-mobile-menu {
            position: fixed;
            top: 0;
            right: -100%;
            width: 100%;
            max-width: 400px;
            height: 100vh;
            background-color: var(--mcs-white);
            box-shadow: -5px 0 30px rgba(0, 0, 0, 0.1);
            z-index: 1001;
            transition: all 0.6s cubic-bezier(0.77, 0, 0.175, 1);
            overflow-y: auto;
            padding: 2.5rem;
            display: flex;
            flex-direction: column;
        }

        .mcs-mobile-menu.active {
            right: 0;
        }

        .mcs-mobile-menu-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 3rem;
            padding-bottom: 1.5rem;
            border-bottom: 1px solid var(--mcs-gray);
        }

        .mcs-close-menu {
            font-size: 1.8rem;
            cursor: pointer;
            color: var(--mcs-text-light);
            transition: var(--mcs-transition);
        }

        .mcs-close-menu:hover {
            color: var(--mcs-primary-color);
            transform: rotate(90deg);
        }

        .mcs-mobile-nav ul {
            display: flex;
            flex-direction: column;
            gap: 1.2rem;
        }

        .mcs-mobile-nav ul li a {
            display: block;
            padding: 1rem 1.5rem;
            border-radius: 8px;
            font-weight: 500;
            font-size: 1.1rem;
            transition: var(--mcs-transition);
            border-left: 3px solid transparent;
        }

        .mcs-mobile-nav ul li a:hover,
        .mcs-mobile-nav ul li a.active {
            background-color: var(--mcs-primary-light);
            color: var(--mcs-primary-color);
            border-left: 3px solid var(--mcs-primary-color);
            transform: translateX(10px);
        }

        .mcs-mobile-actions {
            margin-top: auto;
            display: flex;
            flex-direction: column;
            gap: 1.2rem;
            padding-top: 2rem;
            border-top: 1px solid var(--mcs-gray);
        }

        .mcs-mobile-actions .mcs-btn {
            width: 100%;
            text-align: center;
        }

        .mcs-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.7);
            z-index: 1000;
            opacity: 0;
            visibility: hidden;
            transition: var(--mcs-transition-slow);
            backdrop-filter: blur(5px);
        }

        .mcs-overlay.active {
            opacity: 1;
            visibility: visible;
        }

        /* Hero Section */
        .mcs-hero {
            padding: 15rem 0 8rem;
            background: linear-gradient(135deg, rgba(241, 250, 238, 0.95) 0%, rgba(168, 218, 220, 0.95) 100%), 
                        url('https://images.unsplash.com/photo-1434030216411-0b793f4b4173?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80') no-repeat center center/cover;
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        .mcs-hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url('data:image/svg+xml;utf8,<svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg"><path fill="%23e63946" fill-opacity="0.03" d="M45.8,-45.8C59.3,-32.2,70.3,-16.1,69.8,-0.5C69.3,15.2,57.3,30.3,43.8,43.8C30.3,57.3,15.2,69.3,-1.2,70.5C-17.5,71.7,-35,62,-48.5,48.5C-62,35,-71.5,17.5,-71.9,-0.5C-72.2,-18.5,-63.4,-37,-49.9,-50.6C-36.5,-64.2,-18.2,-72.8,-0.3,-72.5C17.7,-72.2,35.3,-62.9,45.8,-45.8Z" transform="translate(100 100)" /></svg>');
            background-size: 50%;
            opacity: 0.5;
            animation: float 20s linear infinite;
        }

        .mcs-hero-content {
            max-width: 850px;
            margin: 0 auto;
            position: relative;
            z-index: 1;
        }

        .mcs-hero .mcs-badge {
            margin-bottom: 1.5rem;
            animation: fadeInDown 1s ease-out, pulse 2s infinite 1s;
            box-shadow: 0 5px 15px rgba(230, 57, 70, 0.2);
        }

        .mcs-hero h1 {
            font-size: 3.8rem;
            margin-bottom: 1.5rem;
            line-height: 1.2;
            font-family: 'Montserrat', sans-serif;
            font-weight: 900;
            text-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            animation: fadeInUp 0.8s ease-out 0.2s both;
        }

        .mcs-hero p {
            font-size: 1.4rem;
            margin-bottom: 3rem;
            color: var(--mcs-text-light);
            animation: fadeInUp 0.8s ease-out 0.4s both;
        }

        .mcs-hero-buttons {
            display: flex;
            justify-content: center;
            gap: 1.5rem;
            animation: fadeInUp 0.8s ease-out 0.6s both;
        }

        .mcs-hero-image {
            margin-top: 4rem;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
            animation: fadeIn 1s ease-out 0.8s both, float 6s ease-in-out infinite;
            transform-style: preserve-3d;
        }

        .mcs-hero-image img {
            transition: var(--mcs-transition-slow);
        }

        .mcs-hero-image:hover img {
            transform: scale(1.05) rotate(1deg);
        }

        /* Floating Elements */
        .mcs-floating-element {
            position: absolute;
            background-color: var(--mcs-primary-color);
            opacity: 0.1;
            border-radius: 50%;
            filter: blur(20px);
            z-index: 0;
            animation: float 15s ease-in-out infinite;
        }

        .mcs-floating-element:nth-child(1) {
            width: 300px;
            height: 300px;
            top: 10%;
            left: 5%;
            animation-delay: 0s;
        }

        .mcs-floating-element:nth-child(2) {
            width: 200px;
            height: 200px;
            bottom: 15%;
            right: 10%;
            animation-delay: 2s;
            animation-duration: 12s;
        }

        .mcs-floating-element:nth-child(3) {
            width: 150px;
            height: 150px;
            top: 50%;
            left: 20%;
            animation-delay: 4s;
            animation-duration: 18s;
        }

        /* Category Selection */
        .mcs-category-selection {
            background-color: var(--mcs-white);
            position: relative;
            z-index: 1;
            padding-top: 8rem;
        }

        .mcs-category-card {
            background: linear-gradient(135deg, var(--mcs-secondary-color), var(--mcs-dark-color));
            border-radius: 15px;
            padding: 4rem 3rem;
            color: var(--mcs-white);
            text-align: center;
            margin-top: -80px;
            box-shadow: 0 30px 60px rgba(29, 53, 87, 0.2);
            transform: translateY(0);
            transition: var(--mcs-transition-slow);
            position: relative;
            overflow: hidden;
        }

        .mcs-category-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 40px 80px rgba(29, 53, 87, 0.3);
        }

        .mcs-category-card::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: radial-gradient(circle, rgba(255,255,255,0.1) 0%, rgba(255,255,255,0) 70%);
            transform: rotate(30deg);
            transition: var(--mcs-transition-slow);
        }

        .mcs-category-card:hover::before {
            transform: rotate(0) scale(1.2);
        }

        .mcs-category-card h2 {
            margin-bottom: 2rem;
            font-size: 2.5rem;
            font-family: 'Montserrat', sans-serif;
            position: relative;
            display: inline-block;
        }

        .mcs-category-card h2::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 60px;
            height: 3px;
            background-color: var(--mcs-primary-color);
            border-radius: 3px;
        }

        .mcs-category-form {
            display: flex;
            justify-content: center;
            gap: 1.5rem;
            flex-wrap: wrap;
            max-width: 800px;
            margin: 0 auto;
        }

        .mcs-category-form select {
            padding: 1rem 1.5rem;
            border-radius: 50px;
            border: none;
            font-size: 1.1rem;
            min-width: 300px;
            background-color: var(--mcs-white);
            color: var(--mcs-text-color);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            appearance: none;
            background-image: url("data:image/svg+xml;charset=UTF-8,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='none' stroke='currentColor' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'%3e%3cpolyline points='6 9 12 15 18 9'%3e%3c/polyline%3e%3c/svg%3e");
            background-repeat: no-repeat;
            background-position: right 1.5rem center;
            background-size: 1rem;
            cursor: pointer;
            transition: var(--mcs-transition);
        }

        .mcs-category-form select:focus {
            outline: none;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
        }

        .mcs-category-form button {
            padding: 1rem 2.5rem;
            font-size: 1.1rem;
            border: none;
            transition: var(--mcs-transition);
        }

        /* Steps Section */
        .mcs-steps {
            background-color: var(--mcs-light-color);
            position: relative;
            overflow: hidden;
        }

        .mcs-steps::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 150px;
            background-color: var(--mcs-white);
            clip-path: polygon(0 0, 100% 0, 100% 50%, 0 100%);
        }

        .mcs-steps::after {
            content: '';
            position: absolute;
            bottom: 0;
            right: 0;
            width: 300px;
            height: 300px;
            background: url('data:image/svg+xml;utf8,<svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg"><path fill="%23e63946" fill-opacity="0.05" d="M45.8,-45.8C59.3,-32.2,70.3,-16.1,69.8,-0.5C69.3,15.2,57.3,30.3,43.8,43.8C30.3,57.3,15.2,69.3,-1.2,70.5C-17.5,71.7,-35,62,-48.5,48.5C-62,35,-71.5,17.5,-71.9,-0.5C-72.2,-18.5,-63.4,-37,-49.9,-50.6C-36.5,-64.2,-18.2,-72.8,-0.3,-72.5C17.7,-72.2,35.3,-62.9,45.8,-45.8Z" transform="translate(100 100)" /></svg>');
            background-size: contain;
            background-repeat: no-repeat;
            z-index: 0;
        }

        .mcs-steps-content {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 3rem;
            margin-top: 4rem;
            position: relative;
            z-index: 1;
        }

        .mcs-step-card {
            background-color: var(--mcs-white);
            border-radius: 15px;
            padding: 3rem 2.5rem;
            text-align: center;
            transition: var(--mcs-transition-slow);
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.08);
            position: relative;
            overflow: hidden;
            z-index: 1;
            transform: translateY(0);
        }

        .mcs-step-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 5px;
            height: 0;
            background-color: var(--mcs-primary-color);
            transition: var(--mcs-transition-slow);
            z-index: -1;
        }

        .mcs-step-card:hover {
            transform: translateY(-15px);
            box-shadow: 0 25px 60px rgba(0, 0, 0, 0.15);
        }

        .mcs-step-card:hover::before {
            height: 100%;
        }

        .mcs-step-icon {
            width: 90px;
            height: 90px;
            background-color: var(--mcs-primary-light);
            border-radius: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 2rem;
            font-size: 2.5rem;
            color: var(--mcs-primary-color);
            transition: var(--mcs-transition-slow);
            box-shadow: 0 10px 30px rgba(230, 57, 70, 0.2);
        }

        .mcs-step-card:hover .mcs-step-icon {
            background-color: var(--mcs-primary-color);
            color: var(--mcs-white);
            transform: rotateY(180deg) scale(1.1);
            box-shadow: 0 15px 40px rgba(230, 57, 70, 0.3);
        }

        .mcs-step-card h3 {
            margin-bottom: 1.5rem;
            font-size: 1.6rem;
            position: relative;
            display: inline-block;
        }

        .mcs-step-card h3::after {
            content: '';
            position: absolute;
            bottom: -8px;
            left: 50%;
            transform: translateX(-50%);
            width: 40px;
            height: 2px;
            background-color: var(--mcs-primary-color);
            transition: var(--mcs-transition);
        }

        .mcs-step-card:hover h3::after {
            width: 80px;
        }

        .mcs-step-card p {
            color: var(--mcs-text-light);
            font-size: 1.05rem;
        }

        .mcs-step-number {
            position: absolute;
            top: 20px;
            right: 20px;
            font-size: 4rem;
            font-weight: 900;
            color: rgba(29, 53, 87, 0.03);
            transition: var(--mcs-transition);
            font-family: 'Montserrat', sans-serif;
        }

        .mcs-step-card:hover .mcs-step-number {
            color: rgba(230, 57, 70, 0.05);
            transform: scale(1.1);
        }

        /* Features Section */
        .mcs-features {
            background-color: var(--mcs-white);
            position: relative;
            overflow: hidden;
        }

        .mcs-features::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 300px;
            height: 300px;
            background: url('data:image/svg+xml;utf8,<svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg"><path fill="%231d3557" fill-opacity="0.05" d="M45.8,-45.8C59.3,-32.2,70.3,-16.1,69.8,-0.5C69.3,15.2,57.3,30.3,43.8,43.8C30.3,57.3,15.2,69.3,-1.2,70.5C-17.5,71.7,-35,62,-48.5,48.5C-62,35,-71.5,17.5,-71.9,-0.5C-72.2,-18.5,-63.4,-37,-49.9,-50.6C-36.5,-64.2,-18.2,-72.8,-0.3,-72.5C17.7,-72.2,35.3,-62.9,45.8,-45.8Z" transform="translate(100 100)" /></svg>');
            background-size: contain;
            background-repeat: no-repeat;
        }

        .mcs-features-content {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 3rem;
            margin-top: 4rem;
            position: relative;
            z-index: 1;
        }

        .mcs-feature-card {
            background-color: var(--mcs-white);
            border-radius: 15px;
            padding: 3rem 2.5rem;
            text-align: center;
            transition: var(--mcs-transition-slow);
            border: 1px solid var(--mcs-gray);
            position: relative;
            overflow: hidden;
            transform: translateY(0);
        }

        .mcs-feature-card:hover {
            transform: translateY(-15px);
            box-shadow: 0 25px 60px rgba(0, 0, 0, 0.1);
            border-color: transparent;
        }

        .mcs-feature-card::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 0;
            background-color: var(--mcs-primary-color);
            transition: var(--mcs-transition-slow);
            z-index: -1;
        }

        .mcs-feature-card:hover::after {
            height: 100%;
        }

        .mcs-feature-icon {
            width: 80px;
            height: 80px;
            background-color: var(--mcs-primary-light);
            border-radius: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 2rem;
            font-size: 2.2rem;
            color: var(--mcs-primary-color);
            transition: var(--mcs-transition-slow);
            transform-style: preserve-3d;
        }

        .mcs-feature-card:hover .mcs-feature-icon {
            background-color: var(--mcs-white);
            color: var(--mcs-primary-color);
            transform: rotateY(180deg) scale(1.1);
            box-shadow: 0 15px 40px rgba(230, 57, 70, 0.2);
        }

        .mcs-feature-card h3 {
            margin-bottom: 1.5rem;
            font-size: 1.5rem;
            transition: var(--mcs-transition);
        }

        .mcs-feature-card:hover h3 {
            color: var(--mcs-white);
        }

        .mcs-feature-card p {
            color: var(--mcs-text-light);
            transition: var(--mcs-transition);
        }

        .mcs-feature-card:hover p {
            color: rgba(255, 255, 255, 0.9);
        }

        /* Download Section */
        .mcs-download-section {
            background: linear-gradient(135deg, var(--mcs-secondary-color), var(--mcs-dark-color));
            color: var(--mcs-white);
            text-align: center;
            position: relative;
            overflow: hidden;
            padding: 7rem 0;
        }

        .mcs-download-section::before {
            content: '';
            position: absolute;
            top: -50px;
            left: -50px;
            width: 200px;
            height: 200px;
            background-color: rgba(255, 255, 255, 0.05);
            border-radius: 50%;
            animation: float 15s ease-in-out infinite;
        }

        .mcs-download-section::after {
            content: '';
            position: absolute;
            bottom: -100px;
            right: -100px;
            width: 300px;
            height: 300px;
            background-color: rgba(255, 255, 255, 0.05);
            border-radius: 50%;
            animation: float 20s ease-in-out infinite reverse;
        }

        .mcs-download-section .mcs-section-title h2 {
            color: var(--mcs-white);
            -webkit-text-fill-color: var(--mcs-white);
        }

        .mcs-download-section .mcs-section-title p {
            color: rgba(255, 255, 255, 0.8);
        }

        .mcs-download-buttons {
            display: flex;
            justify-content: center;
            gap: 1.5rem;
            flex-wrap: wrap;
            margin-top: 3rem;
        }

        .mcs-download-buttons .mcs-btn {
            animation: pulse 2s infinite;
        }

        /* Content Section */
        .mcs-content-section {
            background-color: var(--mcs-light-color);
            position: relative;
            overflow: hidden;
        }

        .mcs-content-section::before {
            content: '';
            position: absolute;
            bottom: 0;
            right: 0;
            width: 300px;
            height: 300px;
            background: url('data:image/svg+xml;utf8,<svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg"><path fill="%23e63946" fill-opacity="0.05" d="M45.8,-45.8C59.3,-32.2,70.3,-16.1,69.8,-0.5C69.3,15.2,57.3,30.3,43.8,43.8C30.3,57.3,15.2,69.3,-1.2,70.5C-17.5,71.7,-35,62,-48.5,48.5C-62,35,-71.5,17.5,-71.9,-0.5C-72.2,-18.5,-63.4,-37,-49.9,-50.6C-36.5,-64.2,-18.2,-72.8,-0.3,-72.5C17.7,-72.2,35.3,-62.9,45.8,-45.8Z" transform="translate(100 100)" /></svg>');
            background-size: contain;
            background-repeat: no-repeat;
            z-index: 0;
        }

        .mcs-content-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 4rem;
            align-items: center;
            position: relative;
            z-index: 1;
        }

        .mcs-content-image {
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 20px 50px rgba(0, 0, 0, 0.1);
            transform: perspective(1000px) rotateY(-10deg);
            transition: var(--mcs-transition-slow);
        }

        .mcs-content-image:hover {
            transform: perspective(1000px) rotateY(0deg);
            box-shadow: 0 30px 70px rgba(0, 0, 0, 0.15);
        }

        .mcs-content-image img {
            transition: var(--mcs-transition-slow);
        }

        .mcs-content-image:hover img {
            transform: scale(1.05);
        }

        .mcs-content-text {
            position: relative;
        }

        .mcs-content-list {
            margin-top: 2.5rem;
        }

        .mcs-content-list li {
            margin-bottom: 1.8rem;
            padding-left: 3.5rem;
            position: relative;
            font-size: 1.15rem;
            transition: var(--mcs-transition);
        }

        .mcs-content-list li:hover {
            transform: translateX(10px);
        }

        .mcs-content-list li::before {
            content: '\f00c';
            font-family: 'Font Awesome 6 Free';
            font-weight: 900;
            position: absolute;
            left: 0;
            top: 0;
            width: 40px;
            height: 40px;
            background-color: var(--mcs-primary-light);
            color: var(--mcs-primary-color);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.2rem;
            box-shadow: 0 5px 15px rgba(230, 57, 70, 0.2);
            transition: var(--mcs-transition);
        }

        .mcs-content-list li:hover::before {
            background-color: var(--mcs-primary-color);
            color: var(--mcs-white);
            transform: scale(1.1);
        }

        /* Stats Section */
        .mcs-stats-section {
            background: linear-gradient(135deg, var(--mcs-primary-color), var(--mcs-primary-dark));
            color: var(--mcs-white);
            padding: 6rem 0;
            position: relative;
            overflow: hidden;
        }

        .mcs-stats-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url('data:image/svg+xml;utf8,<svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg"><path fill="%23ffffff" fill-opacity="0.05" d="M45.8,-45.8C59.3,-32.2,70.3,-16.1,69.8,-0.5C69.3,15.2,57.3,30.3,43.8,43.8C30.3,57.3,15.2,69.3,-1.2,70.5C-17.5,71.7,-35,62,-48.5,48.5C-62,35,-71.5,17.5,-71.9,-0.5C-72.2,-18.5,-63.4,-37,-49.9,-50.6C-36.5,-64.2,-18.2,-72.8,-0.3,-72.5C17.7,-72.2,35.3,-62.9,45.8,-45.8Z" transform="translate(100 100)" /></svg>');
            background-size: 50%;
            opacity: 0.5;
            animation: float 20s linear infinite;
        }

        .mcs-stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 3rem;
            text-align: center;
            position: relative;
            z-index: 1;
        }

        .mcs-stat-item {
            padding: 2rem;
            background-color: rgba(255, 255, 255, 0.1);
            border-radius: 15px;
            backdrop-filter: blur(5px);
            transition: var(--mcs-transition-slow);
            transform: translateY(0);
        }

        .mcs-stat-item:hover {
            transform: translateY(-10px);
            background-color: rgba(255, 255, 255, 0.2);
        }

        .mcs-stat-number {
            font-size: 3.5rem;
            font-weight: 700;
            font-family: 'Montserrat', sans-serif;
            margin-bottom: 0.5rem;
            transition: var(--mcs-transition);
        }

        .mcs-stat-item:hover .mcs-stat-number {
            color: var(--mcs-warning);
        }

        .mcs-stat-text {
            font-size: 1.2rem;
            opacity: 0.9;
        }

        /* FAQs Section */
        .mcs-faqs {
            background-color: var(--mcs-white);
            position: relative;
            overflow: hidden;
        }

        .mcs-faqs::before {
            content: '';
            position: absolute;
            top: 0;
            right: 0;
            width: 300px;
            height: 300px;
            background: url('data:image/svg+xml;utf8,<svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg"><path fill="%231d3557" fill-opacity="0.05" d="M45.8,-45.8C59.3,-32.2,70.3,-16.1,69.8,-0.5C69.3,15.2,57.3,30.3,43.8,43.8C30.3,57.3,15.2,69.3,-1.2,70.5C-17.5,71.7,-35,62,-48.5,48.5C-62,35,-71.5,17.5,-71.9,-0.5C-72.2,-18.5,-63.4,-37,-49.9,-50.6C-36.5,-64.2,-18.2,-72.8,-0.3,-72.5C17.7,-72.2,35.3,-62.9,45.8,-45.8Z" transform="translate(100 100)" /></svg>');
            background-size: contain;
            background-repeat: no-repeat;
        }

        .mcs-accordion {
            max-width: 900px;
            margin: 0 auto;
            position: relative;
            z-index: 1;
        }

        .mcs-accordion-item {
            margin-bottom: 1.5rem;
            background-color: var(--mcs-white);
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
            border: 1px solid var(--mcs-gray);
            transition: var(--mcs-transition);
        }

        .mcs-accordion-item:hover {
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.1);
        }

        .mcs-accordion-header {
            background-color: var(--mcs-white);
            padding: 1.8rem;
            cursor: pointer;
            display: flex;
            justify-content: space-between;
            align-items: center;
            transition: var(--mcs-transition);
        }

        .mcs-accordion-header:hover {
            background-color: var(--mcs-light-color);
        }

        .mcs-accordion-header h3 {
            margin: 0;
            font-size: 1.3rem;
            color: var(--mcs-dark-color);
            font-weight: 600;
            transition: var(--mcs-transition);
        }

        .mcs-accordion-header i {
            transition: var(--mcs-transition-slow);
            color: var(--mcs-text-light);
        }

        .mcs-accordion-header.active {
            background-color: var(--mcs-light-color);
        }

        .mcs-accordion-header.active h3 {
            color: var(--mcs-primary-color);
        }

        .mcs-accordion-header.active i {
            transform: rotate(180deg);
            color: var(--mcs-primary-color);
        }

        .mcs-accordion-content {
            padding: 0 1.8rem;
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.6s cubic-bezier(0.16, 1, 0.3, 1);
        }

        .mcs-accordion-content-inner {
            padding: 1.8rem 0;
            font-size: 1.05rem;
            color: var(--mcs-text-light);
            line-height: 1.8;
        }

        /* Testimonials Section */
        .mcs-testimonials {
            background-color: var(--mcs-light-color);
            position: relative;
            overflow: hidden;
        }

        .mcs-testimonials::before {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 150px;
            background-color: var(--mcs-white);
            clip-path: polygon(0 50%, 100% 0, 100% 100%, 0 100%);
        }

        .mcs-testimonials::after {
            content: '';
            position: absolute;
            top: 0;
            right: 0;
            width: 300px;
            height: 300px;
            background: url('data:image/svg+xml;utf8,<svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg"><path fill="%23e63946" fill-opacity="0.05" d="M45.8,-45.8C59.3,-32.2,70.3,-16.1,69.8,-0.5C69.3,15.2,57.3,30.3,43.8,43.8C30.3,57.3,15.2,69.3,-1.2,70.5C-17.5,71.7,-35,62,-48.5,48.5C-62,35,-71.5,17.5,-71.9,-0.5C-72.2,-18.5,-63.4,-37,-49.9,-50.6C-36.5,-64.2,-18.2,-72.8,-0.3,-72.5C17.7,-72.2,35.3,-62.9,45.8,-45.8Z" transform="translate(100 100)" /></svg>');
            background-size: contain;
            background-repeat: no-repeat;
            z-index: 0;
        }

        .mcs-testimonial-slider {
            max-width: 1100px;
            margin: 4rem auto 0;
            position: relative;
            z-index: 1;
        }

        .mcs-testimonial-track {
            display: flex;
            gap: 2rem;
            overflow-x: auto;
            scroll-snap-type: x mandatory;
            scroll-behavior: smooth;
            -webkit-overflow-scrolling: touch;
            padding-bottom: 2rem;
        }

        .mcs-testimonial-track::-webkit-scrollbar {
            height: 8px;
        }

        .mcs-testimonial-track::-webkit-scrollbar-track {
            background: rgba(0, 0, 0, 0.05);
            border-radius: 10px;
        }

        .mcs-testimonial-track::-webkit-scrollbar-thumb {
            background: var(--mcs-primary-color);
            border-radius: 10px;
        }

        .mcs-testimonial-card {
            background-color: var(--mcs-white);
            border-radius: 20px;
            padding: 3rem;
            min-width: 340px;
            text-align: center;
            box-shadow: 0 20px 50px rgba(0, 0, 0, 0.08);
            position: relative;
            scroll-snap-align: start;
            transition: var(--mcs-transition);
            transform: scale(0.98);
        }

        .mcs-testimonial-card:hover {
            transform: scale(1);
            box-shadow: 0 25px 60px rgba(0, 0, 0, 0.15);
        }

        .mcs-testimonial-card::before {
            content: '\201C';
            position: absolute;
            top: 30px;
            left: 30px;
            font-size: 6rem;
            color: var(--mcs-primary-light);
            font-family: serif;
            line-height: 1;
            z-index: 0;
        }

        .mcs-testimonial-avatar {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            object-fit: cover;
            margin: 0 auto 1.5rem;
            border: 4px solid var(--mcs-primary-light);
            position: relative;
            z-index: 1;
            transition: var(--mcs-transition);
        }

        .mcs-testimonial-card:hover .mcs-testimonial-avatar {
            transform: scale(1.1);
            border-color: var(--mcs-primary-color);
        }

        .mcs-testimonial-text {
            font-style: italic;
            margin-bottom: 2rem;
            color: var(--mcs-text-light);
            position: relative;
            z-index: 1;
            line-height: 1.8;
            font-size: 1.1rem;
        }

        .mcs-testimonial-author {
            font-weight: 700;
            margin-bottom: 0.5rem;
            font-size: 1.3rem;
            position: relative;
            z-index: 1;
        }

        .mcs-testimonial-role {
            color: var(--mcs-text-light);
            font-size: 0.95rem;
            margin-bottom: 1rem;
            position: relative;
            z-index: 1;
        }

        .mcs-testimonial-rating {
            color: var(--mcs-warning);
            margin-top: 1.5rem;
            font-size: 1rem;
            position: relative;
            z-index: 1;
        }

        /* Blog Section */
        .mcs-blog {
            background-color: var(--mcs-white);
            position: relative;
            overflow: hidden;
        }

        .mcs-blog::before {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 300px;
            height: 300px;
            background: url('data:image/svg+xml;utf8,<svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg"><path fill="%231d3557" fill-opacity="0.05" d="M45.8,-45.8C59.3,-32.2,70.3,-16.1,69.8,-0.5C69.3,15.2,57.3,30.3,43.8,43.8C30.3,57.3,15.2,69.3,-1.2,70.5C-17.5,71.7,-35,62,-48.5,48.5C-62,35,-71.5,17.5,-71.9,-0.5C-72.2,-18.5,-63.4,-37,-49.9,-50.6C-36.5,-64.2,-18.2,-72.8,-0.3,-72.5C17.7,-72.2,35.3,-62.9,45.8,-45.8Z" transform="translate(100 100)" /></svg>');
            background-size: contain;
            background-repeat: no-repeat;
        }

        .mcs-blog-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 3rem;
            margin-top: 4rem;
            position: relative;
            z-index: 1;
        }

        .mcs-blog-card {
            background-color: var(--mcs-white);
            border-radius: 15px;
            overflow: hidden;
            transition: var(--mcs-transition-slow);
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.08);
            border: 1px solid var(--mcs-gray);
            transform: translateY(0);
        }

        .mcs-blog-card:hover {
            transform: translateY(-15px);
            box-shadow: 0 25px 60px rgba(0, 0, 0, 0.15);
            border-color: transparent;
        }

        .mcs-blog-image {
            height: 220px;
            overflow: hidden;
            position: relative;
        }

        .mcs-blog-image::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(to top, rgba(0,0,0,0.3), transparent);
            opacity: 0;
            transition: var(--mcs-transition);
        }

        .mcs-blog-card:hover .mcs-blog-image::after {
            opacity: 1;
        }

        .mcs-blog-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: var(--mcs-transition-slow);
        }

        .mcs-blog-card:hover .mcs-blog-image img {
            transform: scale(1.1);
        }

        .mcs-blog-content {
            padding: 2rem;
        }

        .mcs-blog-date {
            display: block;
            font-size: 0.85rem;
            color: var(--mcs-text-light);
            margin-bottom: 0.8rem;
            transition: var(--mcs-transition);
        }

        .mcs-blog-card:hover .mcs-blog-date {
            color: var(--mcs-primary-color);
        }

        .mcs-blog-title {
            font-size: 1.4rem;
            margin-bottom: 1.2rem;
            transition: var(--mcs-transition);
            line-height: 1.4;
        }

        .mcs-blog-card:hover .mcs-blog-title {
            color: var(--mcs-primary-color);
        }

        .mcs-blog-excerpt {
            color: var(--mcs-text-light);
            margin-bottom: 1.8rem;
            font-size: 1rem;
            line-height: 1.7;
        }

        .mcs-read-more {
            color: var(--mcs-primary-color);
            font-weight: 600;
            font-size: 0.95rem;
            display: flex;
            align-items: center;
            gap: 0.5rem;
            transition: var(--mcs-transition);
        }

        .mcs-read-more i {
            transition: var(--mcs-transition);
        }

        .mcs-blog-card:hover .mcs-read-more {
            transform: translateX(5px);
        }

        .mcs-blog-card:hover .mcs-read-more i {
            transform: translateX(5px);
        }

        /* Newsletter Section */
        .mcs-newsletter {
            background: linear-gradient(135deg, var(--mcs-secondary-color), var(--mcs-dark-color));
            color: var(--mcs-white);
            text-align: center;
            padding: 6rem 0;
            position: relative;
            overflow: hidden;
        }

        .mcs-newsletter::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url('data:image/svg+xml;utf8,<svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg"><path fill="%23ffffff" fill-opacity="0.05" d="M45.8,-45.8C59.3,-32.2,70.3,-16.1,69.8,-0.5C69.3,15.2,57.3,30.3,43.8,43.8C30.3,57.3,15.2,69.3,-1.2,70.5C-17.5,71.7,-35,62,-48.5,48.5C-62,35,-71.5,17.5,-71.9,-0.5C-72.2,-18.5,-63.4,-37,-49.9,-50.6C-36.5,-64.2,-18.2,-72.8,-0.3,-72.5C17.7,-72.2,35.3,-62.9,45.8,-45.8Z" transform="translate(100 100)" /></svg>');
            background-size: 50%;
            opacity: 0.5;
            animation: float 20s linear infinite;
        }

        .mcs-newsletter .mcs-container {
            max-width: 800px;
            position: relative;
            z-index: 1;
        }

        .mcs-newsletter h2 {
            font-size: 2.5rem;
            margin-bottom: 1.5rem;
            font-family: 'Montserrat', sans-serif;
        }

        .mcs-newsletter p {
            color: rgba(255, 255, 255, 0.8);
            margin-bottom: 3rem;
            font-size: 1.2rem;
            max-width: 600px;
            margin-left: auto;
            margin-right: auto;
        }

        .mcs-newsletter-form {
            display: flex;
            max-width: 600px;
            margin: 0 auto;
            border-radius: 50px;
            overflow: hidden;
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.2);
            transition: var(--mcs-transition);
        }

        .mcs-newsletter-form:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 50px rgba(0, 0, 0, 0.3);
        }

        .mcs-newsletter-form input {
            flex: 1;
            padding: 1.2rem 1.8rem;
            border: none;
            font-size: 1.1rem;
            outline: none;
        }

        .mcs-newsletter-form button {
            padding: 0 2.5rem;
            border-radius: 0;
            background-color: var(--mcs-primary-color);
            color: var(--mcs-white);
            border: none;
            cursor: pointer;
            font-weight: 600;
            font-size: 1.1rem;
            transition: var(--mcs-transition);
        }

        .mcs-newsletter-form button:hover {
            background-color: var(--mcs-primary-dark);
        }

        /* Popular Test Series */
        .mcs-popular-test-series {
            background-color: var(--mcs-light-color);
            position: relative;
            overflow: hidden;
        }

        .mcs-popular-test-series::before {
            content: '';
            position: absolute;
            top: 0;
            right: 0;
            width: 300px;
            height: 300px;
            background: url('data:image/svg+xml;utf8,<svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg"><path fill="%23e63946" fill-opacity="0.05" d="M45.8,-45.8C59.3,-32.2,70.3,-16.1,69.8,-0.5C69.3,15.2,57.3,30.3,43.8,43.8C30.3,57.3,15.2,69.3,-1.2,70.5C-17.5,71.7,-35,62,-48.5,48.5C-62,35,-71.5,17.5,-71.9,-0.5C-72.2,-18.5,-63.4,-37,-49.9,-50.6C-36.5,-64.2,-18.2,-72.8,-0.3,-72.5C17.7,-72.2,35.3,-62.9,45.8,-45.8Z" transform="translate(100 100)" /></svg>');
            background-size: contain;
            background-repeat: no-repeat;
        }

        .mcs-series-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 3rem;
            margin-top: 4rem;
            position: relative;
            z-index: 1;
        }

        .mcs-series-card {
            background-color: var(--mcs-white);
            border-radius: 15px;
            overflow: hidden;
            transition: var(--mcs-transition-slow);
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.08);
            border: 1px solid var(--mcs-gray);
            transform: translateY(0);
        }

        .mcs-series-card:hover {
            transform: translateY(-15px);
            box-shadow: 0 25px 60px rgba(0, 0, 0, 0.15);
            border-color: transparent;
        }

        .mcs-series-image {
            height: 200px;
            overflow: hidden;
            position: relative;
        }

        .mcs-series-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: var(--mcs-transition-slow);
        }

        .mcs-series-card:hover .mcs-series-image img {
            transform: scale(1.1);
        }

        .mcs-series-badge {
            position: absolute;
            top: 20px;
            right: 20px;
            background-color: var(--mcs-primary-color);
            color: var(--mcs-white);
            padding: 0.5rem 1rem;
            border-radius: 50px;
            font-size: 0.8rem;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
            box-shadow: 0 5px 15px rgba(230, 57, 70, 0.3);
        }

        .mcs-series-content {
            padding: 2rem;
        }

        .mcs-series-title {
            font-size: 1.5rem;
            margin-bottom: 0.8rem;
            transition: var(--mcs-transition);
        }

        .mcs-series-card:hover .mcs-series-title {
            color: var(--mcs-primary-color);
        }

        .mcs-series-price {
            font-size: 1.8rem;
            font-weight: 700;
            color: var(--mcs-primary-color);
            margin-bottom: 1.5rem;
            display: flex;
            align-items: center;
        }

        .mcs-series-price span {
            font-size: 1.2rem;
            color: var(--mcs-text-light);
            text-decoration: line-through;
            margin-left: 0.8rem;
        }

        .mcs-series-features {
            margin-bottom: 2rem;
        }

        .mcs-series-features li {
            margin-bottom: 0.8rem;
            padding-left: 2rem;
            position: relative;
            font-size: 0.95rem;
            transition: var(--mcs-transition);
        }

        .mcs-series-features li:hover {
            transform: translateX(5px);
        }

        .mcs-series-features li::before {
            content: '\f00c';
            font-family: 'Font Awesome 6 Free';
            font-weight: 900;
            position: absolute;
            left: 0;
            color: var(--mcs-success);
        }

        .mcs-series-buttons {
            display: flex;
            gap: 1rem;
        }

        .mcs-series-buttons .mcs-btn {
            flex: 1;
            padding: 0.8rem;
            font-size: 0.95rem;
        }

        /* Showcase Section */
        .mcs-showcase {
            background-color: var(--mcs-white);
            position: relative;
            overflow: hidden;
        }

        .mcs-showcase::before {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 300px;
            height: 300px;
            background: url('data:image/svg+xml;utf8,<svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg"><path fill="%231d3557" fill-opacity="0.05" d="M45.8,-45.8C59.3,-32.2,70.3,-16.1,69.8,-0.5C69.3,15.2,57.3,30.3,43.8,43.8C30.3,57.3,15.2,69.3,-1.2,70.5C-17.5,71.7,-35,62,-48.5,48.5C-62,35,-71.5,17.5,-71.9,-0.5C-72.2,-18.5,-63.4,-37,-49.9,-50.6C-36.5,-64.2,-18.2,-72.8,-0.3,-72.5C17.7,-72.2,35.3,-62.9,45.8,-45.8Z" transform="translate(100 100)" /></svg>');
            background-size: contain;
            background-repeat: no-repeat;
        }

        .mcs-showcase-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 3rem;
            margin-top: 4rem;
            position: relative;
            z-index: 1;
        }

        .mcs-showcase-card {
            background-color: var(--mcs-white);
            border-radius: 15px;
            overflow: hidden;
            transition: var(--mcs-transition-slow);
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.08);
            border: 1px solid var(--mcs-gray);
            transform: translateY(0);
        }

        .mcs-showcase-card:hover {
            transform: translateY(-15px);
            box-shadow: 0 25px 60px rgba(0, 0, 0, 0.15);
            border-color: transparent;
        }

        .mcs-showcase-image {
            height: 220px;
            overflow: hidden;
            position: relative;
        }

        .mcs-showcase-image::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(to top, rgba(0,0,0,0.3), transparent);
            opacity: 0;
            transition: var(--mcs-transition);
        }

        .mcs-showcase-card:hover .mcs-showcase-image::after {
            opacity: 1;
        }

        .mcs-showcase-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: var(--mcs-transition-slow);
        }

        .mcs-showcase-card:hover .mcs-showcase-image img {
            transform: scale(1.1);
        }

        .mcs-showcase-content {
            padding: 2rem;
            text-align: center;
        }

        .mcs-showcase-title {
            font-size: 1.5rem;
            margin-bottom: 1rem;
            transition: var(--mcs-transition);
        }

        .mcs-showcase-card:hover .mcs-showcase-title {
            color: var(--mcs-primary-color);
        }

        .mcs-showcase-text {
            color: var(--mcs-text-light);
            margin-bottom: 1.5rem;
            line-height: 1.7;
        }

        .mcs-showcase-btn {
            display: inline-block;
            padding: 0.8rem 1.8rem;
            border-radius: 50px;
            background-color: var(--mcs-primary-color);
            color: var(--mcs-white);
            font-weight: 600;
            transition: var(--mcs-transition);
        }

        .mcs-showcase-card:hover .mcs-showcase-btn {
            background-color: var(--mcs-primary-dark);
            transform: translateY(-3px);
            box-shadow: 0 10px 25px rgba(230, 57, 70, 0.3);
        }

        /* Footer */
        .mcs-footer {
            background-color: var(--mcs-dark-color);
            color: var(--mcs-white);
            padding: 7rem 0 0;
            position: relative;
        }

        .mcs-footer::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 150px;
            background-color: var(--mcs-white);
            clip-path: polygon(0 0, 100% 0, 100% 100%, 0 70%);
        }

        .mcs-footer-content {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 4rem;
            margin-top: 5rem;
            position: relative;
            z-index: 1;
        }

        .mcs-footer-logo {
            margin-bottom: 2rem;
            font-size: 2rem;
            font-family: 'Montserrat', sans-serif;
            font-weight: 900;
            background: linear-gradient(90deg, var(--mcs-white), var(--mcs-primary-color));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            letter-spacing: -1px;
            display: inline-block;
        }

        .mcs-footer-about p {
            color: rgba(255, 255, 255, 0.7);
            margin-bottom: 2rem;
            font-size: 1rem;
            line-height: 1.8;
        }

        .mcs-footer-social {
            display: flex;
            gap: 1.2rem;
        }

        .mcs-footer-social a {
            width: 45px;
            height: 45px;
            background-color: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: var(--mcs-transition);
            font-size: 1.2rem;
        }

        .mcs-footer-social a:hover {
            background-color: var(--mcs-primary-color);
            transform: translateY(-5px) scale(1.1);
        }

        .mcs-footer-title {
            font-size: 1.3rem;
            margin-bottom: 2rem;
            position: relative;
            padding-bottom: 1rem;
            font-weight: 600;
        }

        .mcs-footer-title::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 50px;
            height: 3px;
            background-color: var(--mcs-primary-color);
            border-radius: 3px;
        }

        .mcs-footer-links li {
            margin-bottom: 1rem;
        }

        .mcs-footer-links a {
            color: rgba(255, 255, 255, 0.7);
            transition: var(--mcs-transition);
            display: flex;
            align-items: center;
            gap: 0.8rem;
            font-size: 1rem;
        }

        .mcs-footer-links a:hover {
            color: var(--mcs-primary-color);
            transform: translateX(10px);
        }

        .mcs-footer-links i {
            font-size: 0.8rem;
            color: var(--mcs-primary-color);
            transition: var(--mcs-transition);
        }

        .mcs-footer-links a:hover i {
            transform: scale(1.3);
        }

        .mcs-footer-contact p {
            display: flex;
            align-items: flex-start;
            gap: 1rem;
            color: rgba(255, 255, 255, 0.7);
            margin-bottom: 1.5rem;
            font-size: 1rem;
            line-height: 1.7;
        }

        .mcs-footer-contact i {
            color: var(--mcs-primary-color);
            margin-top: 0.3rem;
            font-size: 1.1rem;
        }

        .mcs-footer-bottom {
            text-align: center;
            padding: 2rem 0;
            margin-top: 5rem;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            position: relative;
            z-index: 1;
        }

        .mcs-footer-bottom p {
            color: rgba(255, 255, 255, 0.5);
            font-size: 0.9rem;
        }

        .mcs-footer-bottom a {
            color: var(--mcs-primary-color);
            font-weight: 600;
        }

        /* Back to Top Button */
        .mcs-back-to-top {
            position: fixed;
            bottom: 30px;
            right: 30px;
            width: 60px;
            height: 60px;
            background-color: var(--mcs-primary-color);
            color: var(--mcs-white);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            cursor: pointer;
            opacity: 0;
            visibility: hidden;
            transition: all 0.6s cubic-bezier(0.16, 1, 0.3, 1);
            z-index: 999;
            box-shadow: 0 10px 30px rgba(230, 57, 70, 0.4);
            transform: scale(0.8);
        }

        .mcs-back-to-top.active {
            opacity: 1;
            visibility: visible;
            transform: scale(1);
        }

        .mcs-back-to-top:hover {
            background-color: var(--mcs-primary-dark);
            transform: scale(1.1) translateY(-5px);
            box-shadow: 0 15px 40px rgba(230, 57, 70, 0.5);
        }

.mcs-cards-section {
    background-color: var(--mcs-white);
    position: relative;
    padding: 4rem 0;
}

.mcs-cards-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 2rem;
    margin-top: 2rem;
}

.mcs-card {
    background-color: var(--mcs-white);
    border-radius: 15px;
    padding: 3rem 2rem;
    text-align: center;
    transition: var(--mcs-transition-slow);
    box-shadow: 0 15px 40px rgba(0, 0, 0, 0.08);
    border: 1px solid var(--mcs-gray);
    display: flex;
    flex-direction: column;
    align-items: center;
}

.mcs-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 25px 60px rgba(0, 0, 0, 0.15);
    border-color: transparent;
}

.mcs-card-icon {
    width: 80px;
    height: 80px;
    background-color: var(--mcs-primary-light);
    border-radius: 20px;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 1.5rem;
    font-size: 2.2rem;
    color: var(--mcs-primary-color);
    transition: var(--mcs-transition-slow);
}

.mcs-card:hover .mcs-card-icon {
    background-color: var(--mcs-primary-color);
    color: var(--mcs-white);
    transform: scale(1.1);
    box-shadow: 0 15px 40px rgba(230, 57, 70, 0.2);
}

.mcs-card h3 {
    margin-bottom: 1.5rem;
    font-size: 1.5rem;
    color: var(--mcs-secondary-color);
    transition: var(--mcs-transition);
}

.mcs-card:hover h3 {
    color: var(--mcs-primary-color);
}

.mcs-card-features {
    margin-bottom: 2rem;
    text-align: left;
    width: 100%;
    padding-left: 1.5rem;
}

.mcs-card-features li {
    margin-bottom: 0.8rem;
    position: relative;
    font-size: 0.95rem;
    color: var(--mcs-text-light);
    transition: var(--mcs-transition);
}

.mcs-card-features li::before {
    content: '\f00c';
    font-family: 'Font Awesome 6 Free';
    font-weight: 900;
    position: absolute;
    left: -1.5rem;
    color: var(--mcs-success);
    font-size: 0.8rem;
}

.mcs-card .mcs-btn {
    margin-top: auto;
    width: 80%;
}

/* Responsive Styles for Cards */
@media (max-width: 992px) {
    .mcs-cards-grid {
        grid-template-columns: repeat(2, 1fr);
    }
    
    .mcs-card:last-child {
        grid-column: span 2;
        max-width: 50%;
        margin: 0 auto;
    }
}

@media (max-width: 768px) {
    .mcs-cards-grid {
        grid-template-columns: 1fr;
    }
    
    .mcs-card:last-child {
        grid-column: span 1;
        max-width: 100%;
    }
}



.mcs-testimonial-image {
    width: 100%;
    height: 100%;
    padding: 1rem;
}

.mcs-testimonial-image img {
    width: 100%;
    height: auto;
    border-radius: 10px;
    box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    transition: var(--mcs-transition);
}

.mcs-testimonial-card:hover .mcs-testimonial-image img {
    transform: scale(1.02);
    box-shadow: 0 10px 25px rgba(0,0,0,0.15);
}


        /* Animations */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes fadeInDown {
            from {
                opacity: 0;
                transform: translateY(-30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }

        @keyframes float {
            0% {
                transform: translateY(0px);
            }
            50% {
                transform: translateY(-20px);
            }
            100% {
                transform: translateY(0px);
            }
        }

        @keyframes pulse {
            0% {
                box-shadow: 0 0 0 0 rgba(230, 57, 70, 0.4);
            }
            70% {
                box-shadow: 0 0 0 15px rgba(230, 57, 70, 0);
            }
            100% {
                box-shadow: 0 0 0 0 rgba(230, 57, 70, 0);
            }
        }

        @keyframes ripple {
            0% {
                transform: scale(0.8);
                opacity: 1;
            }
            100% {
                transform: scale(2.5);
                opacity: 0;
            }
        }

        /* Responsive Styles */
        @media (max-width: 1200px) {
            .mcs-hero h1 {
                font-size: 3.2rem;
            }
            
            .mcs-section-title h2 {
                font-size: 2.5rem;
            }
        }

        @media (max-width: 992px) {
            .mcs-hero {
                padding: 12rem 0 6rem;
            }
            
            .mcs-hero h1 {
                font-size: 2.8rem;
            }
            
            .mcs-section {
                padding: 5rem 0;
            }
            
            .mcs-section-title h2 {
                font-size: 2.2rem;
            }
            
            .mcs-category-form {
                flex-direction: column;
                align-items: center;
            }
            
            .mcs-category-form select {
                width: 100%;
            }
        }

        @media (max-width: 768px) {
            .mcs-header-container {
             flex-wrap: wrap;
             gap: 1rem;
     				 	justify-content: space-between;
             align-items: center;
             flex-wrap: nowrap;
             padding: 1rem 0;
            }
           
        .mcs-logo {
            order: 1; /* Logo first */
            flex: 0 0 auto; /* Don't grow or shrink */
        }
        
        .mcs-header-actions {
            order: 2; /* Actions second */
            display: flex;
            align-items: center;
            gap: 1rem;
            flex: 0 0 auto; /* Don't grow or shrink */
        }
        
        .mcs-menu-toggle {
            order: 3; /* Menu toggle last */
            flex: 0 0 auto; /* Don't grow or shrink */
        }
        
        /* Adjust button sizes for mobile */
        .mcs-header-actions .mcs-btn {
            padding: 0.4rem 0.8rem;
            font-size: 0.7rem;
        }
        
        /* Adjust cart button size */
        .mcs-cart-button {
            font-size: 1rem;
        }
    

            .mcs-nav ul {
                display: none;
            }
            
            .mcs-menu-toggle {
                display: block;
            }
            
            .mcs-hero h1 {
                font-size: 2.4rem;
            }
            
            .mcs-hero p {
                font-size: 1.1rem;
            }
            
            .mcs-hero-buttons {
                flex-direction: column;
                gap: 1.2rem;
            }
            
            .mcs-btn {
                width: 100%;
            }
            
            .mcs-newsletter-form {
                flex-direction: column;
                border-radius: 50px;
                overflow: hidden;
            }
            
            .mcs-newsletter-form input {
                border-radius: 50px;
                margin-bottom: 1rem;
                text-align: center;
            }
            
            .mcs-newsletter-form button {
                border-radius: 50px;
                padding: 1.2rem;
            }
            
            .mcs-section-title h2 {
                font-size: 2rem;
            }
            
            .mcs-section-title p {
                font-size: 1.1rem;
            }
            
            .mcs-testimonial-track {
                padding-bottom: 1.5rem;
            }
            
            .mcs-testimonial-card {
                min-width: 280px;
            }
            
            .mcs-footer-content {
                grid-template-columns: 1fr;
                gap: 3rem;
            }
        }

        @media (max-width: 576px) {
            .mcs-hero {
                padding: 10rem 0 5rem;
            }
            
            .mcs-hero h1 {
                font-size: 2rem;
            }
            
            .mcs-hero p {
                font-size: 1rem;
            }
            
            .mcs-category-card {
                padding: 3rem 1.5rem;
                margin-top: -60px;
            }
            
            .mcs-category-card h2 {
                font-size: 1.8rem;
            }
            
            .mcs-section-title h2 {
                font-size: 1.8rem;
            }
            
            .mcs-testimonial-card {
                padding: 2.5rem 1.5rem;
            }
            
            .mcs-mobile-menu {
                max-width: 320px;
                padding: 2rem;
            }
            
            .mcs-back-to-top {
                width: 50px;
                height: 50px;
                font-size: 1.2rem;
            }
        }
    @media (max-width: 480px) {
        .mcs-header-container {
            gap: 0.5rem;
        }
        
        .mcs-header-actions .mcs-btn {
            padding: 0.3rem 0.6rem;
            font-size: 0.65rem;
        }
        
        .mcs-logo img {
            height: 35px; /* Smaller logo */
        }
    }
    </style>
</head>
<body>
    <!-- Header -->
    <header class="mcs-header">
        <div class="mcs-container mcs-header-container">
            <div class="mcs-logo">
                <img src="https://missioncstestseries.com//assetItems/image/logo.png" alt="Mission CS Logo">
              <!-- <h1>Mission CS</h1> -->
            </div>
            
            <nav class="mcs-nav">
                <ul>
                    <li><a href="#" class="active">Home</a></li>
                    <li><a href="#">Test Series</a></li>
                    <li><a href="#">Features</a></li>
                    <li><a href="#">Success Stories</a></li>
                    <li><a href="#">FAQs</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </nav>
            
            <div class="mcs-header-actions">
                <button class="mcs-btn mcs-btn-secondary">Login</button>
                <button class="mcs-btn mcs-btn-primary">SignUp</button>
                <a href="#" class="mcs-cart-button">
                    <i class="fas fa-shopping-cart"></i>
                    <span class="mcs-cart-count">0</span>
                </a>
                <div class="mcs-menu-toggle" id="mcsMenuToggle">
                    <i class="fas fa-bars"></i>
                </div>
            </div>
        </div>
    </header>

    <!-- Mobile Menu -->
    <div class="mcs-mobile-menu" id="mcsMobileMenu">
        <div class="mcs-mobile-menu-header">
            <div class="mcs-logo">
             <h1>Mission CS</h1> 
            </div>
            <div class="mcs-close-menu" id="mcsCloseMenu">
                <i class="fas fa-times"></i>
            </div>
        </div>
        
        <div class="mcs-mobile-nav">
            <ul>
                <li><a href="#" class="active">Home</a></li>
                <li><a href="#">Test Series</a></li>
                <li><a href="#">Features</a></li>
                <li><a href="#">Success Stories</a></li>
                <li><a href="#">FAQs</a></li>
                <li><a href="#">Blog</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </div>
        
        <div class="mcs-mobile-actions">
            <button class="mcs-btn mcs-btn-secondary">Login</button>
            <button class="mcs-btn mcs-btn-primary">Sign Up</button>
        </div>
    </div>
    <div class="mcs-overlay" id="mcsOverlay"></div>

    <!-- Hero Section -->
    <section class="mcs-hero">
        <div class="mcs-container">
            <div class="mcs-hero-content">
                <span class="mcs-badge mcs-badge-primary animate__animated animate__fadeInDown">India's #1 CS Test Series</span>
                <h1 class="animate__animated animate__fadeInUp">Master CS Exams with Our Expert-Led Test Series</h1>
                <p class="animate__animated animate__fadeInUp">Comprehensive mock tests, personalized mentorship, and advanced analytics to help you rank among the top candidates.</p>
                <div class="mcs-hero-buttons animate__animated animate__fadeInUp">
                    <button class="mcs-btn mcs-btn-primary">Get Started Now</button>
                    <button class="mcs-btn mcs-btn-secondary">Free Demo Test</button>
                </div>
            </div>
            
            <div class="mcs-hero-image animate__animated animate__fadeIn">
                <img src="https://images.unsplash.com/photo-1523240795612-9a054b0db644?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" alt="CS Students Learning">
            </div>
        </div>
        
        <!-- Floating elements for background animation -->
        <div class="mcs-floating-element"></div>
        <div class="mcs-floating-element"></div>
        <div class="mcs-floating-element"></div>
    </section>

    <!-- Category Selection -->
    <section class="mcs-category-selection mcs-section" data-aos="fade-up">
        <div class="mcs-container">
            <div class="mcs-category-card">
                <h2>Select Your CS Stage</h2>
                <form class="mcs-category-form">
                    <button type="button" class="mcs-btn mcs-btn-primary">Choose Test Series</button>
                </form>
            </div>
        </div>
    </section>


<section class="mcs-cards-section mcs-section" data-aos="fade-up">
    <div class="mcs-container">
        <div class="mcs-section-title">
            <h2>Explore Our Test Series</h2>
            <p>Comprehensive test series designed for each stage of your CS journey</p>
        </div>
        
        <div class="mcs-cards-grid">
            <div class="mcs-card" data-aos="fade-up" data-aos-delay="100">
                <div class="mcs-card-icon">
                    <i class="fas fa-book"></i>
                </div>
                <h3>CSEET</h3>
                <button class="mcs-btn mcs-btn-primary">Buy Now</button>
            </div>
            
            <div class="mcs-card" data-aos="fade-up" data-aos-delay="200">
                <div class="mcs-card-icon">
                    <i class="fas fa-book"></i>
                </div>
                <h3>CS Executive</h3>
                <ul class="mcs-card-features">
                    <li>30+ Module-wise Mock Tests</li>
                    <li>Previous Year Solved Papers</li>
                    <li>Advanced Performance Analytics</li>
                </ul>
                <button class="mcs-btn mcs-btn-primary">Buy Now</button>
            </div>
            
            <div class="mcs-card" data-aos="fade-up" data-aos-delay="300">
                <div class="mcs-card-icon">
                    <i class="fas fa-book"></i>
                </div>
                <h3>CS Professional</h3>
                <ul class="mcs-card-features">
                    <li>40+ Comprehensive Mock Tests</li>
                    <li>Expert Mentorship Sessions</li>
                    <li>Time Management Strategies</li>
                </ul>
                <button class="mcs-btn mcs-btn-primary">Buy Now</button>
            </div>
        </div>
    </div>
</section>

    <!-- Steps Section -->
    <section class="mcs-steps mcs-section" data-aos="fade-up">
        <div class="mcs-container">
            <div class="mcs-section-title">
                <h2>How It Works</h2>
                <p>Simple steps to get started with our test series and boost your preparation</p>
            </div>
            
            <div class="mcs-steps-content">
                <div class="mcs-step-card" data-aos="fade-up" data-aos-delay="100">
                    <div class="mcs-step-icon">
                        <i class="fas fa-search"></i>
                    </div>
                    <h3>Choose Your Test Series</h3>
                    <p>Select from our comprehensive test series designed for each CS stage.</p>
                    <div class="mcs-step-number">1</div>
                </div>
                
                <div class="mcs-step-card" data-aos="fade-up" data-aos-delay="200">
                    <div class="mcs-step-icon">
                        <i class="fas fa-shopping-cart"></i>
                    </div>
                    <h3>Purchase & Enroll</h3>
                    <p>Complete your purchase and get instant access to your dashboard.</p>
                    <div class="mcs-step-number">2</div>
                </div>
                
                <div class="mcs-step-card" data-aos="fade-up" data-aos-delay="300">
                    <div class="mcs-step-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>Test & Improve</h3>
                    <p>Take tests, analyze performance, and track your progress.</p>
                    <div class="mcs-step-number">3</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="mcs-features mcs-section" data-aos="fade-up">
        <div class="mcs-container">
            <div class="mcs-section-title">
                <h2>Our Powerful Features</h2>
                <p>Designed to give you the competitive edge in your CS exam preparation</p>
            </div>
            
            <div class="mcs-features-content">
                <div class="mcs-feature-card" data-aos="fade-up" data-aos-delay="100">
                    <div class="mcs-feature-icon">
                        <i class="fas fa-file-alt"></i>
                    </div>
                    <h3>Full-Length Mock Tests</h3>
                    <p>Practice with tests that simulate the actual exam pattern and difficulty level.</p>
                </div>
                
                <div class="mcs-feature-card" data-aos="fade-up" data-aos-delay="200">
                    <div class="mcs-feature-icon">
                        <i class="fas fa-chart-pie"></i>
                    </div>
                    <h3>Advanced Analytics</h3>
                    <p>Detailed performance reports with strengths, weaknesses, and improvement areas.</p>
                </div>
                
                <div class="mcs-feature-card" data-aos="fade-up" data-aos-delay="300">
                    <div class="mcs-feature-icon">
                        <i class="fas fa-user-graduate"></i>
                    </div>
                    <h3>Expert Mentorship</h3>
                    <p>One-on-one guidance from top CS professionals and exam toppers.</p>
                </div>
                
                <div class="mcs-feature-card" data-aos="fade-up" data-aos-delay="400">
                    <div class="mcs-feature-icon">
                        <i class="fas fa-clock"></i>
                    </div>
                    <h3>Time Management Tools</h3>
                    <p>Learn to optimize your exam time with our specialized tools and techniques.</p>
                </div>
                
                <div class="mcs-feature-card" data-aos="fade-up" data-aos-delay="500">
                    <div class="mcs-feature-icon">
                        <i class="fas fa-book"></i>
                    </div>
                    <h3>Comprehensive Solutions</h3>
                    <p>Detailed explanations for every question to enhance your understanding.</p>
                </div>
                
                <div class="mcs-feature-card" data-aos="fade-up" data-aos-delay="600">
                    <div class="mcs-feature-icon">
                        <i class="fas fa-mobile-alt"></i>
                    </div>
                    <h3>Mobile-Friendly Platform</h3>
                    <p>Access tests and study materials anytime, anywhere on any device.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Download Section -->
    <section class="mcs-download-section mcs-section" data-aos="fade-up">
        <div class="mcs-container">
            <div class="mcs-section-title">
                <h2>Get Free Sample Papers</h2>
                <p>Experience our test quality before you enroll with our free sample papers</p>
            </div>
            
            <div class="mcs-download-buttons">
                <button class="mcs-btn mcs-btn-accent">CS Foundation</button>
                <button class="mcs-btn mcs-btn-accent">CS Executive</button>
                <button class="mcs-btn mcs-btn-accent">CS Professional</button>
            </div>
        </div>
    </section>

    <!-- Content Section -->
    <section class="mcs-content-section mcs-section" data-aos="fade-up">
        <div class="mcs-container">
            <div class="mcs-section-title">
                <h2>Why Choose Mission CS?</h2>
                <p>Here's what makes us the preferred choice for CS aspirants nationwide</p>
            </div>
            
            <div class="mcs-content-grid">
                <div class="mcs-content-image" data-aos="fade-right">
                    <img src="https://images.unsplash.com/photo-1581094794329-c8112a89af12?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" alt="CS Students Learning">
                </div>
                
                <div class="mcs-content-text" data-aos="fade-left">
                    <ul class="mcs-content-list">
                        <li>Designed by CS Toppers and Industry Experts with 15+ years experience</li>
                        <li>AI-powered performance analysis with personalized recommendations</li>
                        <li>Flexible subscription plans to suit every budget and study schedule</li>
                        <li>Regularly updated content aligned with the latest exam patterns</li>
                        <li>24/7 doubt resolution support from our expert faculty</li>
                        <li>Proven track record with 85% of our students clearing exams in first attempt</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="mcs-stats-section mcs-section" data-aos="fade-up">
        <div class="mcs-container">
            <div class="mcs-stats-grid">
                <div class="mcs-stat-item" data-aos="zoom-in" data-aos-delay="100">
                    <div class="mcs-stat-number" data-count="10000">0</div>
                    <div class="mcs-stat-text">Successful Students</div>
                </div>
                
                <div class="mcs-stat-item" data-aos="zoom-in" data-aos-delay="200">
                    <div class="mcs-stat-number" data-count="95">0</div>
                    <div class="mcs-stat-text">Success Rate</div>
                </div>
                
                <div class="mcs-stat-item" data-aos="zoom-in" data-aos-delay="300">
                    <div class="mcs-stat-number" data-count="50">0</div>
                    <div class="mcs-stat-text">Expert Faculty</div>
                </div>
                
                <div class="mcs-stat-item" data-aos="zoom-in" data-aos-delay="400">
                    <div class="mcs-stat-number" data-count="500">0</div>
                    <div class="mcs-stat-text">Mock Tests</div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQs Section -->
    <section class="mcs-faqs mcs-section" data-aos="fade-up">
        <div class="mcs-container">
            <div class="mcs-section-title">
                <h2>Frequently Asked Questions</h2>
                <p>Find answers to common questions about our test series and services</p>
            </div>
            
            <div class="mcs-accordion">
                <div class="mcs-accordion-item" data-aos="fade-up" data-aos-delay="100">
                    <div class="mcs-accordion-header">
                        <h3>How do I access the tests after payment?</h3>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="mcs-accordion-content">
                        <div class="mcs-accordion-content-inner">
                            <p>Immediately after successful payment, you'll receive an email with login credentials to access your personalized dashboard. All purchased test series will be available in your account under "My Tests" section. You can start taking tests right away!</p>
                        </div>
                    </div>
                </div>
                
                <div class="mcs-accordion-item" data-aos="fade-up" data-aos-delay="200">
                    <div class="mcs-accordion-header">
                        <h3>What is your refund policy?</h3>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="mcs-accordion-content">
                        <div class="mcs-accordion-content-inner">
                            <p>We offer a 7-day no-questions-asked refund policy. If you're not satisfied with our test series for any reason, simply email us within 7 days of purchase for a full refund. After 7 days, we offer partial refunds on unused test credits.</p>
                        </div>
                    </div>
                </div>
                
                <div class="mcs-accordion-item" data-aos="fade-up" data-aos-delay="300">
                    <div class="mcs-accordion-header">
                        <h3>Are the tests updated for the latest exam pattern?</h3>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="mcs-accordion-content">
                        <div class="mcs-accordion-content-inner">
                            <p>Yes, our content team continuously monitors exam pattern changes and updates all test series accordingly. We release new tests every month to reflect the latest trends and ensure our students are always prepared for current exam requirements.</p>
                        </div>
                    </div>
                </div>
                
                <div class="mcs-accordion-item" data-aos="fade-up" data-aos-delay="400">
                    <div class="mcs-accordion-header">
                        <h3>Can I access tests on mobile devices?</h3>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="mcs-accordion-content">
                        <div class="mcs-accordion-content-inner">
                            <p>Absolutely! Our platform is fully responsive and works seamlessly on smartphones, tablets, and desktops. You can download our mobile app (available for iOS and Android) for an even better experience with offline test-taking capabilities.</p>
                        </div>
                    </div>
                </div>
                
                <div class="mcs-accordion-item" data-aos="fade-up" data-aos-delay="500">
                    <div class="mcs-accordion-header">
                        <h3>How does the mentorship program work?</h3>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="mcs-accordion-content">
                        <div class="mcs-accordion-content-inner">
                            <p>Our mentorship program pairs you with an experienced CS professional who will review your test performance, identify weak areas, and create a customized study plan. You'll have scheduled video calls, unlimited email support, and priority response to all your queries.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<!-- Testimonials Section -->
<section class="mcs-testimonials mcs-section" data-aos="fade-up">
    <div class="mcs-container">
        <div class="mcs-section-title">
            <h2>Student Feedback</h2>
            <p>Real WhatsApp conversations from our satisfied students</p>
        </div>
        
        <div class="mcs-testimonial-slider">
            <div class="mcs-testimonial-track">
                <div class="mcs-testimonial-card" data-aos="fade-up" data-aos-delay="100">
                    <div class="mcs-testimonial-image">
                        <img src="https://charteredteam.in/home/assets/images/testimonial3.jpg" alt="WhatsApp testimonial 1">
                    </div>
                </div>
                
                <div class="mcs-testimonial-card" data-aos="fade-up" data-aos-delay="200">
                    <div class="mcs-testimonial-image">
                        <img src="https://charteredteam.in/home/assets/images/testimonial3.jpg" alt="WhatsApp testimonial 2">
                    </div>
                </div>
                
                <div class="mcs-testimonial-card" data-aos="fade-up" data-aos-delay="300">
                    <div class="mcs-testimonial-image">
                        <img src="path-to-whatsapp-screenshot-3.jpg" alt="WhatsApp testimonial 3">
                    </div>
                </div>
                
                <div class="mcs-testimonial-card" data-aos="fade-up" data-aos-delay="400">
                    <div class="mcs-testimonial-image">
                        <img src="path-to-whatsapp-screenshot-4.jpg" alt="WhatsApp testimonial 4">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<!--    <section class="mcs-testimonials mcs-section" data-aos="fade-up">
        <div class="mcs-container">
            <div class="mcs-section-title">
                <h2>Success Stories</h2>
                <p>Hear from our students who achieved their CS dreams with our guidance</p>
            </div>
            
            <div class="mcs-testimonial-slider">
                <div class="mcs-testimonial-track">
                    <div class="mcs-testimonial-card" data-aos="fade-up" data-aos-delay="100">
                        <img src="https://randomuser.me/api/portraits/women/32.jpg" alt="Riya Sharma" class="mcs-testimonial-avatar">
                        <p class="mcs-testimonial-text">"Mission CS Test Series was a game-changer for my preparation. The detailed analytics helped me identify my weak areas, and the mentorship guided me to improve them. I secured All India Rank 12 in CS Professional!"</p>
                        <h4 class="mcs-testimonial-author">Riya Sharma</h4>
                        <p class="mcs-testimonial-role">CS Professional, AIR 12</p>
                        <div class="mcs-testimonial-rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                    
                    <div class="mcs-testimonial-card" data-aos="fade-up" data-aos-delay="200">
                        <img src="https://randomuser.me/api/portraits/men/45.jpg" alt="Amit Patel" class="mcs-testimonial-avatar">
                        <p class="mcs-testimonial-text">"The mock tests were so similar to the actual exam that I felt completely prepared on exam day. The time management strategies I learned helped me complete the paper with 30 minutes to spare!"</p>
                        <h4 class="mcs-testimonial-author">Amit Patel</h4>
                        <p class="mcs-testimonial-role">CS Executive, AIR 8</p>
                        <div class="mcs-testimonial-rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                    
                    <div class="mcs-testimonial-card" data-aos="fade-up" data-aos-delay="300">
                        <img src="https://randomuser.me/api/portraits/women/68.jpg" alt="Priya Gupta" class="mcs-testimonial-avatar">
                        <p class="mcs-testimonial-text">"As a working professional, I needed flexible study options. Mission CS allowed me to take tests at my convenience while providing the same quality as classroom coaching. Cleared all modules in first attempt!"</p>
                        <h4 class="mcs-testimonial-author">Priya Gupta</h4>
                        <p class="mcs-testimonial-role">CS Foundation, AIR 24</p>
                        <div class="mcs-testimonial-rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                    
                    <div class="mcs-testimonial-card" data-aos="fade-up" data-aos-delay="400">
                        <img src="https://randomuser.me/api/portraits/men/22.jpg" alt="Rahul Verma" class="mcs-testimonial-avatar">
                        <p class="mcs-testimonial-text">"The performance analytics were incredibly detailed, showing exactly where I needed to focus. My scores improved by 35% after just 2 months of using Mission CS test series."</p>
                        <h4 class="mcs-testimonial-author">Rahul Verma</h4>
                        <p class="mcs-testimonial-role">CS Executive, AIR 15</p>
                        <div class="mcs-testimonial-rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->

    <!-- Blog Section -->
    <section class="mcs-blog mcs-section" data-aos="fade-up">
        <div class="mcs-container">
            <div class="mcs-section-title">
                <h2>Latest From Our Blog</h2>
                <p>Expert tips, strategies, and insights to help you excel in CS exams</p>
            </div>
            
            <div class="mcs-blog-grid">
                <div class="mcs-blog-card" data-aos="fade-up" data-aos-delay="100">
                    <div class="mcs-blog-image">
                        <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1471&q=80" alt="CS Exam Preparation">
                    </div>
                    <div class="mcs-blog-content">
                        <span class="mcs-blog-date">June 15, 2025</span>
                        <h3 class="mcs-blog-title">10 Proven Strategies to Ace Your CS Exams</h3>
                        <p class="mcs-blog-excerpt">Discover the study techniques used by toppers to maximize retention and performance in CS exams...</p>
                        <a href="#" class="mcs-read-more">Read More <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
                
                <div class="mcs-blog-card" data-aos="fade-up" data-aos-delay="200">
                    <div class="mcs-blog-image">
                        <img src="https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" alt="Time Management">
                    </div>
                    <div class="mcs-blog-content">
                        <span class="mcs-blog-date">June 8, 2025</span>
                        <h3 class="mcs-blog-title">Mastering Time Management in CS Exams</h3>
                        <p class="mcs-blog-excerpt">Learn how to allocate time effectively across different sections to ensure you complete your paper...</p>
                        <a href="#" class="mcs-read-more">Read More <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
                
                <div class="mcs-blog-card" data-aos="fade-up" data-aos-delay="300">
                    <div class="mcs-blog-image">
                        <img src="https://images.unsplash.com/photo-1521791055366-0d553872125f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1469&q=80" alt="CS Career">
                    </div>
                    <div class="mcs-blog-content">
                        <span class="mcs-blog-date">June 1, 2025</span>
                        <h3 class="mcs-blog-title">Career Opportunities After CS: A Complete Guide</h3>
                        <p class="mcs-blog-excerpt">Explore the diverse career paths available to CS professionals in corporate, legal, and consulting sectors...</p>
                        <a href="#" class="mcs-read-more">Read More <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Newsletter Section -->
    <section class="mcs-newsletter mcs-section" data-aos="fade-up">
        <div class="mcs-container">
            <h2>Get Exam Tips & Special Offers</h2>
            <p>Subscribe to our newsletter and stay updated with the latest preparation strategies and exclusive discounts</p>
            <form class="mcs-newsletter-form">
                <input type="email" placeholder="Enter your email address" required>
                <button type="submit">Subscribe</button>
            </form>
        </div>
    </section>

    <!-- Popular Test Series -->
    <section class="mcs-popular-test-series mcs-section" data-aos="fade-up">
        <div class="mcs-container">
            <div class="mcs-section-title">
                <h2>Our Popular Test Series</h2>
                <p>Comprehensive packages designed for maximum exam readiness</p>
            </div>
            
            <div class="mcs-series-grid">
                <div class="mcs-series-card" data-aos="fade-up" data-aos-delay="100">
                    <div class="mcs-series-image">
                        <img src="https://images.unsplash.com/photo-1434030216411-0b793f4b4173?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" alt="CS Foundation">
                        <span class="mcs-series-badge">Best Seller</span>
                    </div>
                    <div class="mcs-series-content">
                        <h3 class="mcs-series-title">CS Foundation Complete Pack</h3>
                        <div class="mcs-series-price">₹2,999 <span>₹4,500</span></div>
                        <ul class="mcs-series-features">
                            <li>15 Full-Length Mock Tests</li>
                            <li>Chapter-wise Practice Tests</li>
                            <li>Detailed Solutions & Analysis</li>
                            <li>2 One-on-One Mentorship Sessions</li>
                            <li>Access for 6 Months</li>
                        </ul>
                        <div class="mcs-series-buttons">
                            <button class="mcs-btn mcs-btn-primary">Enroll Now</button>
                            <button class="mcs-btn mcs-btn-secondary">View Details</button>
                        </div>
                    </div>
                </div>
                
                <div class="mcs-series-card" data-aos="fade-up" data-aos-delay="200">
                    <div class="mcs-series-image">
                        <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" alt="CS Executive">
                        <span class="mcs-series-badge">New</span>
                    </div>
                    <div class="mcs-series-content">
                        <h3 class="mcs-series-title">CS Executive Pro Package</h3>
                        <div class="mcs-series-price">₹4,999 <span>₹7,200</span></div>
                        <ul class="mcs-series-features">
                            <li>25 Full-Length Mock Tests</li>
                            <li>Module-wise Question Banks</li>
                            <li>Advanced Performance Analytics</li>
                            <li>4 Mentorship Sessions</li>
                            <li>Access for 1 Year</li>
                        </ul>
                        <div class="mcs-series-buttons">
                            <button class="mcs-btn mcs-btn-primary">Enroll Now</button>
                            <button class="mcs-btn mcs-btn-secondary">View Details</button>
                        </div>
                    </div>
                </div>
                
                <div class="mcs-series-card" data-aos="fade-up" data-aos-delay="300">
                    <div class="mcs-series-image">
                        <img src="https://images.unsplash.com/photo-1521791055366-0d553872125f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1469&q=80" alt="CS Professional">
                    </div>
                    <div class="mcs-series-content">
                        <h3 class="mcs-series-title">CS Professional Ultimate</h3>
                        <div class="mcs-series-price">₹6,999 <span>₹9,800</span></div>
                        <ul class="mcs-series-features">
                            <li>40 Full-Length Mock Tests</li>
                            <li>Previous Year Papers with Solutions</li>
                            <li>Personalized Study Planner</li>
                            <li>8 Mentorship Sessions</li>
                            <li>Lifetime Access</li>
                        </ul>
                        <div class="mcs-series-buttons">
                            <button class="mcs-btn mcs-btn-primary">Enroll Now</button>
                            <button class="mcs-btn mcs-btn-secondary">View Details</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Showcase Section -->
    <section class="mcs-showcase mcs-section" data-aos="fade-up">
        <div class="mcs-container">
            <div class="mcs-section-title">
                <h2>Our Achievements</h2>
                <p>Proud milestones in our journey of empowering CS aspirants</p>
            </div>
            
            <div class="mcs-showcase-grid">
                <div class="mcs-showcase-card" data-aos="fade-up" data-aos-delay="100">
                    <div class="mcs-showcase-image">
                        <img src="https://images.unsplash.com/photo-1523240795612-9a054b0db644?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" alt="Students">
                    </div>
                    <div class="mcs-showcase-content">
                        <h3 class="mcs-showcase-title">10,000+ Successful Students</h3>
                        <p class="mcs-showcase-text">Join our community of achievers who cleared CS exams with our guidance and are now building successful careers.</p>
                        <a href="#" class="mcs-showcase-btn">Read Stories</a>
                    </div>
                </div>
                
                <div class="mcs-showcase-card" data-aos="fade-up" data-aos-delay="200">
                    <div class="mcs-showcase-image">
                        <img src="https://images.unsplash.com/photo-1521791055366-0d553872125f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1469&q=80" alt="Faculty">
                    </div>
                    <div class="mcs-showcase-content">
                        <h3 class="mcs-showcase-title">50+ Expert Faculty Members</h3>
                        <p class="mcs-showcase-text">Learn from the best - our faculty includes CS toppers, industry veterans, and subject matter experts.</p>
                        <a href="#" class="mcs-showcase-btn">Meet Faculty</a>
                    </div>
                </div>
                
                <div class="mcs-showcase-card" data-aos="fade-up" data-aos-delay="300">
                    <div class="mcs-showcase-image">
                        <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" alt="Awards">
                    </div>
                    <div class="mcs-showcase-content">
                        <h3 class="mcs-showcase-title">Award-Winning Platform</h3>
                        <p class="mcs-showcase-text">Recognized as "Best CS Test Series Platform" by Education Times for 3 consecutive years.</p>
                        <a href="#" class="mcs-showcase-btn">View Awards</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Back to Top Button -->
    <div class="mcs-back-to-top" id="mcsBackToTop">
        <i class="fas fa-arrow-up"></i>
    </div>

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        // Initialize AOS (Animate On Scroll)
        AOS.init({
            duration: 800,
            easing: 'ease-in-out',
            once: false,
            mirror: true,
            offset: 100
        });

        // Mobile Menu Toggle
        const mcsMenuToggle = document.getElementById('mcsMenuToggle');
        const mcsMobileMenu = document.getElementById('mcsMobileMenu');
        const mcsCloseMenu = document.getElementById('mcsCloseMenu');
        const mcsOverlay = document.getElementById('mcsOverlay');
        
        mcsMenuToggle.addEventListener('click', () => {
            mcsMobileMenu.classList.add('active');
            mcsOverlay.classList.add('active');
            document.body.style.overflow = 'hidden';
        });
        
        mcsCloseMenu.addEventListener('click', () => {
            mcsMobileMenu.classList.remove('active');
            mcsOverlay.classList.remove('active');
            document.body.style.overflow = '';
        });
        
        mcsOverlay.addEventListener('click', () => {
            mcsMobileMenu.classList.remove('active');
            mcsOverlay.classList.remove('active');
            document.body.style.overflow = '';
        });
        
        // Accordion Functionality
        document.querySelectorAll('.mcs-accordion-header').forEach(header => {
            header.addEventListener('click', () => {
                const accordionItem = header.parentElement;
                const accordionContent = header.nextElementSibling;
                const accordionIcon = header.querySelector('i');
                
                // Close all other accordion items
                document.querySelectorAll('.mcs-accordion-item').forEach(item => {
                    if (item !== accordionItem) {
                        item.querySelector('.mcs-accordion-header').classList.remove('active');
                        item.querySelector('.mcs-accordion-content').style.maxHeight = null;
                    }
                });
                
                // Toggle current accordion item
                header.classList.toggle('active');
                
                if (header.classList.contains('active')) {
                    accordionContent.style.maxHeight = accordionContent.scrollHeight + 'px';
                } else {
                    accordionContent.style.maxHeight = null;
                }
            });
        });
        
        // Back to Top Button
        const mcsBackToTop = document.getElementById('mcsBackToTop');
        
        window.addEventListener('scroll', () => {
            if (window.pageYOffset > 300) {
                mcsBackToTop.classList.add('active');
            } else {
                mcsBackToTop.classList.remove('active');
            }
        });
        
        mcsBackToTop.addEventListener('click', () => {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });
        
        // Testimonial Slider
        const mcsTrack = document.querySelector('.mcs-testimonial-track');
        let isDown = false;
        let startX;
        let scrollLeft;

        mcsTrack.addEventListener('mousedown', (e) => {
            isDown = true;
            startX = e.pageX - mcsTrack.offsetLeft;
            scrollLeft = mcsTrack.scrollLeft;
            mcsTrack.style.cursor = 'grabbing';
        });

        mcsTrack.addEventListener('mouseleave', () => {
            isDown = false;
            mcsTrack.style.cursor = 'grab';
        });

        mcsTrack.addEventListener('mouseup', () => {
            isDown = false;
            mcsTrack.style.cursor = 'grab';
        });

        mcsTrack.addEventListener('mousemove', (e) => {
            if(!isDown) return;
            e.preventDefault();
            const x = e.pageX - mcsTrack.offsetLeft;
            const walk = (x - startX) * 2;
            mcsTrack.scrollLeft = scrollLeft - walk;
        });

        // Header Scroll Effect
        window.addEventListener('scroll', () => {
            const header = document.querySelector('.mcs-header');
            if (window.scrollY > 100) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }
        });

        // Counter Animation for Stats
        const mcsCounters = document.querySelectorAll('.mcs-stat-number');
        const speed = 200;

        function animateCounters() {
            mcsCounters.forEach(counter => {
                const target = +counter.getAttribute('data-count');
                const count = +counter.innerText;
                const increment = target / speed;
                
                if(count < target) {
                    counter.innerText = Math.ceil(count + increment);
                    setTimeout(animateCounters, 1);
                } else {
                    counter.innerText = target;
                }
            });
        }

        // Start counter animation when stats section is in view
        const mcsStatsSection = document.querySelector('.mcs-stats-section');
        const mcsObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if(entry.isIntersecting) {
                    animateCounters();
                    mcsObserver.unobserve(entry.target);
                }
            });
        }, { threshold: 0.5 });

        mcsObserver.observe(mcsStatsSection);

        // Ripple Effect for Buttons
        const mcsButtons = document.querySelectorAll('.mcs-btn-primary, .mcs-btn-accent');

        mcsButtons.forEach(button => {
            button.addEventListener('click', function(e) {
                e.preventDefault();
                
                const x = e.clientX - e.target.getBoundingClientRect().left;
                const y = e.clientY - e.target.getBoundingClientRect().top;
                
                const ripple = document.createElement('span');
                ripple.classList.add('ripple');
                ripple.style.left = `${x}px`;
                ripple.style.top = `${y}px`;
                
                this.appendChild(ripple);
                
                setTimeout(() => {
                    ripple.remove();
                }, 1000);
            });
        });

        // Add ripple effect styles dynamically
        const style = document.createElement('style');
        style.textContent = `
            .ripple {
                position: absolute;
                background: rgba(255, 255, 255, 0.4);
                border-radius: 50%;
                transform: scale(0);
                animation: ripple 0.6s linear;
                pointer-events: none;
                width: 20px;
                height: 20px;
                margin-left: -10px;
                margin-top: -10px;
            }
            
            @keyframes ripple {
                to {
                    transform: scale(10);
                    opacity: 0;
                }
            }
        `;
        document.head.appendChild(style);
    </script>






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
