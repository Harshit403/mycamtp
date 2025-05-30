<!-- navbar -->
<header>
  <script src="https://unpkg.com/@dotlottie/player-component@2.7.12/dist/dotlottie-player.mjs" type="module"></script>
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
      .mcs-btn-link {
  display: inline-block;
  text-decoration: none;
}

.mcs-btn-link button {
  width: 100%;
}
    </style>

  
  <style>
    #preloader {
      position: fixed;
      top: 0;
      left: 0;
      width: 100vw;
      height: 100vh;
      background-color: #e63e58;
      display: flex;
      justify-content: center;
      align-items: center;
      z-index: 9999;
      transition: opacity 0.5s ease, visibility 0.5s ease;
    }
    #preloader.hidden {
      display: none !important;
    }
    dotlottie-player {
      width: 150px;
      height: 150px;
    }
    #main-content {
      display: none;
      animation: fadeIn 0.8s ease-in-out;
    }
    #main-content.active {
      display: block;
    }
    #preloader p {
     color: white;
     font-size: 18px;
     margin-top: 10px;
     font-family: Arial, sans-serif;
    }
    @keyframes fadeIn {
      from { opacity: 0; }
      to { opacity: 1; }
    }
  </style>

<script>
window.addEventListener('DOMContentLoaded', () => {
  // Check if the app is running in PWA mode
  if (window.matchMedia('(display-mode: standalone)').matches) {
    // If in PWA mode, inject preloader
    const preloaderHTML = `
      <div id="preloader">
        <div style="text-align: center;">
          <dotlottie-player
            src="https://lottie.host/e9ab34df-5bf4-4002-8133-b43d78b8fa5b/NJ8yWP7naE.lottie"
            background="transparent"
            speed="1"
            loop
            autoplay>
          </dotlottie-player>
          <p>Mission CS Test Series</p>
        </div>
      </div>
    `;
    
    // Insert the preloader HTML into the body
    document.body.insertAdjacentHTML('afterbegin', preloaderHTML);
    
    const preloader = document.getElementById('preloader');

    // Hide the preloader after 1.5 seconds
    setTimeout(() => {
      preloader.classList.add('hidden');
      document.body.style.overflow = 'auto'; // Allow scrolling after preloader
    }, 1500); // Adjust delay as needed
  } else {
    // For website, skip adding the preloader and enable scrolling immediately
    document.body.style.overflow = 'auto';
  }
});
</script>
  
<?php 
  $uri = service('uri'); 
  $segment1 = $uri->getSegment(1);
?>
    <div style="display: none;">
        <div class="cartPopUpContainer"></div>
    </div>
  <!-- Header -->
    <header class="mcs-header">
        <div class="mcs-container mcs-header-container">
            <div class="mcs-logo">
                <img src="<?=base_url()?>/assetItems/image/logo.png" alt="Mission CS Logo">
              <!-- <h1>Mission CS</h1> -->
            </div>
            
            <nav class="mcs-nav">
                <ul>
                <li><a href="#" class="active">Home</a></li>
                <li><a href="#mcs-cards-grid">Test Series</a></li>
                <li><a href="#features">Features</a></li>
                <li><a href="#testimonials">Success Stories</a></li>
                <li><a href="#faqs">FAQs</a></li>
                <li><a href="#blogs">Blog</a></li>
                <li><a href="#newsletter">Contact</a></li>
                </ul>
            </nav>
         
            <div class="mcs-header-actions">
          <?php if (session()->get('studentDetails')==null): ?>
            <button class="mcs-btn mcs-btn-secondary" onclick="window.location.href='<?=base_url()?>auth?auth=login'">Login</button>
            <button class="mcs-btn mcs-btn-primary" onclick="window.location.href='<?=base_url()?>auth?auth=register'">SignUp</button>
          <?php else: ?>
              <button onclick="window.location.href='<?=base_url()?>dashboard'" class="mcs-btn mcs-btn-secondary">Dashboard</button>
              <button class="mcs-btn mcs-btn-primary" onclick="window.location.href='<?=base_url()?>logout'">Logout</button></a>
          <?php endif ?>
                <div class="mcs-cart-button showCartBtn">
                   <a href="javascript:void(0)" <i class="fas fa-shopping-cart"></i> </a>
                    <span class="mcs-cart-count cartCount">0</span>
                </div>
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
                <li><a href="#mcs-cards-grid">Test Series</a></li>
                <li><a href="#features">Features</a></li>
                <li><a href="#testimonials">Success Stories</a></li>
                <li><a href="#faqs">FAQs</a></li>
                <li><a href="#blogs">Blog</a></li>
                <li><a href="#newsletter">Contact</a></li>
            </ul>
        </div>
        
        <div class="mcs-mobile-actions">
          <?php if (session()->get('studentDetails')==null): ?>
            <a href="<?=base_url()?>auth?auth=login"> <button class="mcs-btn mcs-btn-secondary">Login</button></a>
            <a href="<?=base_url()?>auth?auth=register"> <button class="mcs-btn mcs-btn-primary">Sign Up</button></a>
          <?php else: ?>
              <a href="<?=base_url()?>dashboard"> <button class="mcs-btn mcs-btn-secondary">Dashboard</button></a>
            <a href="<?=base_url()?>logout"> <button class="mcs-btn mcs-btn-primary">Logout</button></a>
          <?php endif ?>
        </div>
    </div>
