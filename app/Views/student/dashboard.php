<?= $this->extend('student/layout/dashboard_layout') ?>
<?= $this->section('title') ?>
Student Dashboard
<?= $this->endSection() ?>
<?= $this->section('meta_description') ?>
<!-- enter your meta description -->
<?= $this->endSection() ?>
<?= $this->section('meta_keywords') ?>
<!-- enter your meta keywords widthout tag -->
<?= $this->endSection() ?>
<?= $this->section('content') ?>
<style>
    /* --- Main Styles --- */
    body {
        margin: 0;
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
    }

    .wrapper {
        padding: 20px;
        padding-bottom: 80px; /* Space for fixed footer on mobile */
    }

    /* --- Checkout Button --- */
    .checkout-btn {
        display: block;
        margin: 10px auto;
        padding: 12px 24px;
        text-align: center;
        background-color: #4a6bff !important;
        color: white;
        font-weight: bold;
        border: none;
        border-radius: 8px;
        cursor: pointer;
        box-shadow: 0 0 0 rgba(74, 107, 255, 0.7);
        animation: pulse 1s infinite;
        transition: all 0.2s ease;
    }

    .checkout-btn:hover {
        background-color: #3a5bef;
        transform: translateY(-1px);
    }

    @keyframes pulse {
        0% {
            box-shadow: 0 0 0 0 rgba(74, 107, 255, 0.7);
        }

        70% {
            box-shadow: 0 0 0 12px rgba(74, 107, 255, 0);
        }

        100% {
            box-shadow: 0 0 0 0 rgba(74, 107, 255, 0);
        }
    }

    /* --- Modals --- */
    .modal {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.7);
        display: none;
        justify-content: center;
        align-items: flex-start;
        z-index: 9999;
        overflow-y: auto;
        padding-top: 10px;
    }

    .modal-content {
        background: #fff;
        width: 90%;
        max-width: 500px;
        border-radius: 10px;
        padding: 20px;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
        position: relative; /* For close button positioning */
    }


    .modal-header {
        font-size: 20px;
        font-weight: bold;
        color: #e63e58;
        text-align: center;
        margin-bottom: 20px;
    }

    select {
        width: 100%;
        padding: 10px;
        margin-bottom: 15px;
        border: 1px solid #ddd;
        border-radius: 5px;
    }

    .btn-submit {
        background-color: #e63e58;
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        font-size: 16px;
        width: 100%;
        text-align: center;
    }

    .btn:hover {
        background-color: #d0344c;
    }

    .card-container {
        margin-top: 20px;
    }

    .fa-download {
        content: "\f019";
    }

    .card-modal {
        background: linear-gradient(135deg, #fff, #f8f9fa);
        border: 1px solid #ddd;
        border-radius: 10px;
        padding: 15px;
        margin-bottom: 15px;
        text-align: center;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .card:hover {
        transform: translateY(-5px);
        box-shadow: 0 6px 20px rgba(0, 0, 0, 0.15);
    }

    .card-title {
        font-size: 18px;
        color: #333;
        margin-bottom: 10px;
        font-weight: bold;
    }

    .card-price {
        font-size: 16px;
        color: #e63e58;
        margin: 10px 0;
        font-weight: bold;
    }

    .card-btn {
        background: #e63e58;
        color: white;
        padding: 8px 15px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        font-size: 14px;
        margin-top: 10px;
    }

    .card-btn:hover {
        background: #d0344c;
    }

    .close-modal {
        position: absolute;
        top: -17px;
        right: 0px;
        background: none;
        border: none;
        font-size: 43px;
        font-weight: bold;
        color: #333;
        cursor: pointer;
        transition: color 0.3s ease;
    }

    .close-modal:hover {
        color: red;
    }

    .back-btn {
        background: #e63e58;
        color: white;
        border: none;
        padding: 8px 15px;
        border-radius: 5px;
        font-size: 14px;
        cursor: pointer;
        display: block;
        text-align: center;
        margin: 10px auto;
        max-width: 150px;
    }

    .back-btn:hover {
        background: #d0344c;
    }

    @media (max-width: 768px) {
        .modal-content {
            width: 95%;
        }
    }

    /* --- Header --- */
    .pd-header {
        background-color: #e63e58;
        color: white;
        padding: 15px;
        text-align: center;
        border-radius: 10px;
        margin-bottom: 20px;
    }

    .pd-header h1 {
        margin: 0;
        font-size: 20px;
    }

    /* --- Menu --- */
    .pd-menu {
        display: grid;
        /* Default: 2 columns on smallest screens */
        grid-template-columns: repeat(2, 1fr);
        gap: 10px;
        padding: 15px;
        margin-bottom: 20px;
    }

    /* Adjust for 3 columns on screens wider than 400px */
    @media (min-width: 400px) {
        .pd-menu {
            grid-template-columns: repeat(3, 1fr);
        }
    }

    /* Adjust for 3 columns on screens wider than 500px (if needed, or keep 3 from 400px) */
    @media (min-width: 500px) {
        .pd-menu {
            grid-template-columns: repeat(3, 1fr); /* Ensure 3 columns */
            /* Or adjust gap/padding if needed for larger screens */
            /* gap: 15px; */
            /* padding: 20px; */
        }
    }

    /* Adjust for 6 columns on larger desktop screens if desired */
    @media (min-width: 768px) {
        .pd-menu {
            grid-template-columns: repeat(auto-fit, minmax(100px, 1fr));
            /* gap: 10px; */
            /* padding: 15px; */
        }
    }

    .pd-menu-item {
        text-align: center;
        padding: 15px;
        background: white;
        border-radius: 10px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease;
    }

    .pd-menu-item:hover {
        transform: translateY(-5px);
    }

    .pd-menu-item p {
        margin: 0;
        font-size: 14px;
        color: #333;
    }

    /* --- Countdown Card --- */
    .pd-countdown-card {
        margin: 15px auto;
        max-width: 90%;
        background: white;
        border-radius: 10px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        padding: 15px;
        text-align: center;
        margin-bottom: 20px;
    }

    .pd-countdown-card button {
        width: 100%;
        padding: 10px;
        border: none;
        background: #e63e58;
        color: white;
        border-radius: 25px;
        font-size: 16px;
        cursor: pointer;
        transition: background 0.3s ease;
    }

    .pd-countdown-card button:hover {
        background: #d6374f;
    }

    /* --- Toggle Switch --- */
    .pd-switch-container {
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 20px 0;
    }

    .toggle-switch {
        position: relative;
        display: inline-block;
        width: 30px;
        height: 17px;
        margin-right: 5px;
    }

    .toggle-switch input {
        opacity: 0;
        width: 0;
        height: 0;
    }

    .slider {
        position: absolute;
        cursor: pointer;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-color: #ccc;
        transition: 0.4s;
        border-radius: 17px;
    }

    .slider:before {
        position: absolute;
        content: "";
        height: 13px;
        width: 13px;
        left: 3px;
        bottom: 3px;
        background-color: white;
        transition: 0.4s;
        border-radius: 50%;
    }

    input:checked+.slider {
        background-color: #e63e58;
    }

    input:checked+.slider:before {
        transform: translateX(13px);
    }

    .toggle-label {
        font-size: 8px;
        color: #333;
        font-weight: bold;
    }

    /* --- Social Media Card --- */
    .pd-social-media-card {
        margin: 15px auto;
        max-width: 90%;
        background: white;
        border-radius: 10px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        padding: 15px;
        margin-bottom: 20px;
    }

    .pd-social-media {
        display: flex;
        justify-content: space-around;
        align-items: center;
    }

    .pd-social-media a {
        text-decoration: none;
        color: #e63e58;
        font-size: 24px;
        transition: color 0.3s ease;
    }

    .pd-social-media a:hover {
        color: #d6374f;
    }

    /* --- Courses Section (if used) --- */
    .pd-courses-section {
        padding: 15px;
    }

    .pd-courses-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 10px;
    }

    .pd-courses-header h2 {
        margin: 0;
        font-size: 18px;
    }

    .pd-courses {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
        gap: 10px;
    }

    .pd-course-card {
        background: white;
        padding: 10px;
        border-radius: 10px;
        text-align: center;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease;
    }

    .pd-course-card:hover {
        transform: translateY(-5px);
    }

    .pd-course-card img {
        max-width: 40px;
        margin-bottom: 10px;
    }

    .pd-course-card h3 {
        margin: 0;
        font-size: 14px;
    }

    .pd-course-card p {
        margin: 0;
        font-size: 12px;
        color: #666;
    }

    /* --- Referral Section --- */
    .referral-section {
        max-width: 500px;
        margin: 20px auto;
        padding: 20px;
        background-color: #ffffff;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        border-radius: 8px;
        text-align: center;
        position: relative;
        margin-bottom: 20px;
    }

    .referral-section h3,
    .referral-section h4 {
        margin: 0 0 15px;
        color: #333;
    }

    /* --- New Styles for Commission Info --- */
    .referral-commission-info {
        background-color: #f8f9fa;
        border-left: 4px solid #e63e58;
        padding: 12px 15px;
        margin: 15px 0;
        border-radius: 0 5px 5px 0;
        text-align: left;
        font-size: 14px;
        color: #555;
    }

    .referral-commission-info strong {
        color: #e63e58;
    }

    .referral-actions {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        align-items: center;
        gap: 10px;
        margin-top: 15px;
    }

    .referral-actions input {
        flex: 2 1 auto;
        max-width: 300px;
        min-width: 200px;
        padding: 8px;
        border: 1px solid #ccc;
        border-radius: 5px;
        font-size: 14px;
        text-align: center;
    }

    .action-buttons {
        display: flex;
        gap: 10px;
    }

    .action-button {
        padding: 8px 12px;
        background: #e63e58;
        color: white;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 5px;
        white-space: nowrap;
        font-size: 14px;
    }

    .action-button i {
        font-size: 14px;
    }

    .action-button.share {
        background: #e63e58;
    }

    .action-button.withdraw {
        width: 100%;
        margin-top: 15px;
    }

    button:hover {
        opacity: 0.9;
    }

    @media (max-width: 480px) {
        .referral-section {
            padding: 15px;
            margin: 10px;
        }

        .referral-actions {
            flex-direction: column;
            align-items: center;
        }

        .referral-actions input {
            width: 100%;
        }

        .action-buttons {
            justify-content: center;
            width: 100%;
        }

        .action-buttons .action-button {
            flex: 1;
            min-width: 45%;
        }

        .action-button.withdraw {
            width: 100%;
            min-width: auto;
        }
    }

    /* --- Footer --- */
    /* Default: Horizontal bar at the bottom */
    .unique-footer {
        position: fixed;
        bottom: 0;
        width: 100%;
        background: white;
        display: flex;
        justify-content: space-around;
        padding: 10px 0;
        border-top: 1px solid #ccc;
        z-index: 100;
    }

    .unique-footer-item {
        text-align: center;
        text-decoration: none !important;
        color: inherit;
    }

    .unique-footer-item-icon {
        font-size: 20px;
        color: #666;
        transition: color 0.3s ease;
    }

    .unique-footer-item-text {
        margin: 0;
        font-size: 12px;
        color: #666;
        transition: color 0.3s ease;
    }

    .unique-footer-item.active .unique-footer-item-icon,
    .unique-footer-item.active .unique-footer-item-text {
        color: #e63e58;
    }

    /* --- Desktop Adjustments for Footer (Vertical Sidebar) --- */
    @media (min-width: 768px) {
        .wrapper {
            margin-left: 80px; /* Adjust for sidebar width */
            padding: 20px;
            padding-bottom: 20px; /* Less padding needed as footer is sidebar */
        }

        /* Transform the footer into a vertical sidebar */
        .unique-footer {
            display: flex;
            flex-direction: column;
            justify-content: space-around;
            position: fixed;
            top: 0;
            left: 0;
            width: 80px;
            height: 100vh;
            padding: 20px 0;
            background: white;
            border-right: 1px solid #ccc;
            /* Reset bottom positioning */
            bottom: auto;
        }

        .unique-footer .unique-footer-item {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 15%; /* Distribute items vertically */
            cursor: pointer;
        }

        /* Ensure referral section and other cards look good on desktop */
        .referral-section,
        .pd-social-media-card,
        .pd-countdown-card,
        .pd-header {
            max-width: none; /* Allow full width within wrapper */
            margin-left: auto;
            margin-right: auto;
        }

        #logoutModal .modal-content {
            max-width: 400px;
        }

        /* Ensure modals are centered correctly on desktop */
        .modal {
            align-items: center;
            padding-top: 0;
        }

        .overlay-modal-ultra-unique {
            align-items: center;
            padding-top: 0;
        }

        #withdrawPopup,
        #sharePopup {
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }
    }

    /* --- Logout Modal --- */
    #logoutModal {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.6);
        display: flex;
        justify-content: center;
        align-items: center;
        opacity: 0;
        visibility: hidden;
        transition: opacity 0.3s ease, visibility 0.3s ease;
        z-index: 1000;
    }

    #logoutModal.show {
        opacity: 1;
        visibility: visible;
    }

    .logout-modal-content {
        background: white;
        border-radius: 10px;
        padding: 20px;
        text-align: center;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
        transform: scale(0.8);
        transition: transform 0.3s ease;
        width: 90%;
        max-width: 400px;
    }

    #logoutModal.show .logout-modal-content {
        transform: scale(1);
    }

    .logout-modal-content h2 {
        margin: 0 0 10px;
        font-size: 20px;
        color: #333;
    }

    .logout-modal-content p {
        margin: 0 0 20px;
        color: #555;
    }

    .logout-modal-buttons {
        display: flex;
        justify-content: center;
        gap: 10px;
    }

    .logout-modal-cancel,
    .logout-modal-confirm {
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        font-size: 14px;
        font-weight: bold;
        transition: background 0.3s ease;
    }

    .logout-modal-cancel {
        background: #ccc;
        color: #333;
    }

    .logout-modal-confirm {
        background: #e63e58;
        color: white;
    }

    .logout-modal-cancel:hover {
        background: #bbb;
    }

    .logout-modal-confirm:hover {
        background: #d6374f;
    }

    /* --- Mentorship Modal --- */
    .mentorship-modal {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.6);
        display: flex;
        justify-content: center;
        align-items: center;
        visibility: hidden;
        opacity: 0;
        transition: visibility 0.3s ease, opacity 0.3s ease;
        z-index: 1000;
    }

    .mentorship-modal.show {
        visibility: visible;
        opacity: 1;
    }

    .mentorship-modal-content {
        background: white;
        border-radius: 10px;
        padding: 20px;
        text-align: center;
        width: 90%;
        max-width: 400px;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
        transform: scale(0.8);
        transition: transform 0.3s ease;
        position: relative;
    }

    .mentorship-modal.show .mentorship-modal-content {
        transform: scale(1);
    }

    .mentorship-lock-content,
    .mentorship-whatsapp-content {
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .mentorship-lock-icon,
    .mentorship-whatsapp-icon {
        font-size: 50px;
        margin-bottom: 10px;
        color: #e63e58;
    }

    .mentorship-modal-content h2 {
        font-size: 20px;
        margin: 10px 0;
    }

    .mentorship-modal-content p {
        color: #555;
        margin-bottom: 20px;
    }

    .mentorship-modal-button {
        padding: 10px 20px;
        background: #e63e58;
        color: white;
        border: none;
        border-radius: 5px;
        text-decoration: none;
        font-weight: bold;
        transition: background 0.3s ease;
    }

    .mentorship-modal-button:hover {
        background: #d6374f;
    }

    .mentorship-close-button {
        position: absolute;
        top: 10px;
        right: 10px;
        font-size: 20px;
        color: #555;
        background: none;
        border: none;
        cursor: pointer;
        transition: color 0.3s ease;
    }

    .mentorship-close-button:hover {
        color: #e63e58;
    }

    /* --- Buy Now Modal (if used) --- */
    .buyNowModal {
        z-index: 9999;
    }

    .button-buy-now-hyper-unique {
        background-color: #e63e58;
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        font-size: 16px;
        margin: 20px auto;
        display: block;
        text-align: center;
        width: 200px;
        text-transform: uppercase;
    }

    .button-buy-now-hyper-unique:hover {
        background-color: #d0344c;
    }

    .overlay-modal-ultra-unique {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.7);
        display: none;
        justify-content: center;
        align-items: flex-start;
        z-index: 9999;
        overflow-y: auto;
        padding-top: 10px;
    }

    .modal-box-super-unique {
        background: #fff;
        width: 90%;
        max-width: 500px;
        border-radius: 10px;
        padding: 20px;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
        position: relative;
        z-index: 10000;
    }

    .modal-title-mega-unique {
        font-size: 20px;
        font-weight: bold;
        color: #e63e58;
        text-align: center;
        margin-bottom: 20px;
    }

    .dropdown-select-absolutely-unique {
        width: 100%;
        padding: 10px;
        margin-bottom: 15px;
        border: 1px solid #ddd;
        border-radius: 5px;
    }

    .submit-button-extremely-unique {
        background-color: #e63e58;
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        font-size: 16px;
        width: 100%;
        text-align: center;
    }

    .submit-button-extremely-unique:hover {
        background-color: #d0344c;
    }

    .container-plans-super-unique {
        margin-top: 20px;
        opacity: 0;
        transform: translateY(20px);
        transition: all 0.5s ease;
    }

    .container-plans-super-unique.active {
        opacity: 1;
        transform: translateY(0);
    }

    .card-plan-ultra-unique {
        background: linear-gradient(135deg, #fff, #f8f9fa);
        border: 1px solid #ddd;
        border-radius: 10px;
        padding: 15px;
        margin-bottom: 15px;
        text-align: center;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .card-plan-ultra-unique:hover {
        transform: translateY(-5px);
        box-shadow: 0 6px 20px rgba(0, 0, 0, 0.15);
    }

    .title-plan-extra-unique {
        font-size: 18px;
        color: #333;
        margin-bottom: 10px;
        font-weight: bold;
    }

    .price-tag-ultra-unique {
        font-size: 16px;
        color: #e63e58;
        margin: 10px 0;
        font-weight: bold;
    }

    .button-add-to-cart-unique {
        background: #e63e58;
        color: white;
        padding: 8px 15px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        font-size: 14px;
        margin-top: 10px;
    }

    .button-add-to-cart-unique:hover {
        background: #d0344c;
    }

    .button-close-modal-extremely-unique {
        position: absolute;
        top: 10px;
        right: 20px;
        font-size: 18px;
        cursor: pointer;
        color: #fff;
    }

    .button-back-to-plans-unmatched {
        background: #e63e58;
        color: white;
        border: none;
        padding: 8px 15px;
        border-radius: 5px;
        font-size: 14px;
        cursor: pointer;
        display: block;
        text-align: center;
        margin: 10px auto;
        max-width: 150px;
    }

    .button-back-to-plans-unmatched:hover {
        background: #d0344c;
    }

    .button-dummy-hidden-special {
        background: green;
        color: white;
        border: none;
        padding: 10px 20px;
        border-radius: 5px;
        font-size: 14px;
        cursor: pointer;
        position: fixed;
        bottom: 20px;
        right: 20px;
        display: none;
        z-index: 2000;
    }

    .button-dummy-hidden-special:hover {
        background: #d0344c;
    }

    @media (max-width: 768px) {
        .modal-box-super-unique {
            width: 95%;
        }
    }

    /* --- Withdraw Popup --- */
    #withdrawPopup {
        display: none;
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 90%;
        max-width: 400px;
        background: white;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
        border-radius: 10px;
        padding: 20px;
        z-index: 1000;
    }

    #withdrawPopup h3 {
        margin-top: 0;
        font-size: 18px;
        color: #e63e58;
    }

    #withdrawPopup input {
        width: 100%;
        margin-bottom: 10px;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
    }

    #withdrawPopup button {
        padding: 10px;
        margin: 5px 0;
        width: calc(50% - 5px);
        background: #e63e58;
        color: white;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }

    #withdrawPopup button.cancel {
        background: #ccc;
        color: #333;
    }

    #popupOverlay {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.5);
        z-index: 999;
    }

    @media (max-width: 480px) {
        #withdrawPopup {
            width: 95%;
        }
    }

    /* --- Share Popup --- */
    #sharePopup {
        display: none;
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        padding: 20px;
        background: #fff;
        border-radius: 8px;
        box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
        z-index: 1000;
        text-align: center;
    }

    #sharePopup h3 {
        margin-bottom: 15px;
        margin-top: 0;
    }

    .share-icons {
        display: flex;
        justify-content: center;
        gap: 20px;
        margin-bottom: 15px;
    }

    .share-icon-link {
        text-decoration: none;
        color: inherit;
    }

    .share-icon-link i {
        font-size: 24px;
        transition: transform 0.2s ease;
    }

    .share-icon-link i.fa-whatsapp {
        color: #25D366;
    }

    .share-icon-link i.fa-facebook {
        color: #4267B2;
    }

    .share-icon-link i.fa-twitter {
        color: #1DA1F2;
    }

    .share-icon-link i.fa-envelope {
        color: #DD4B39;
    }

    .share-icon-link:hover i {
        transform: scale(1.2);
    }


    #closePopup {
        margin-top: 10px;
        padding: 8px 15px;
        border: none;
        background: #e63e58;
        color: #fff;
        border-radius: 4px;
        cursor: pointer;
        font-size: 14px;
    }

    #closePopup:hover {
        background: #d0344c;
    }
</style>

</head>

<body style="margin-top: 6rem;">
    <div class="wrapper">
        <div class="pd-header">
            <?php
            date_default_timezone_set('Asia/Kolkata');
            $studentData = (session()->get('studentDetails') !== null) ? session()->get('studentDetails') : '';
            $hour = date('H');
            if ($hour < 12) {
                $greeting = 'morning';
            } elseif ($hour < 18) {
                $greeting = 'afternoon';
            } else {
                $greeting = 'evening';
            }
            ?>
            <h1>Good <?= $greeting ?>, <?= $studentData['student_name'] ?? 'Guest' ?></h1>
        </div>

        <!-- Toggle Switch for Free Content -->
        <div class="pd-switch-container">
            <label class="toggle-switch">
                <input type="checkbox" id="contentToggle">
                <span class="slider"></span>
            </label>
            <span class="toggle-label" id="toggleLabel">Switch to Free Content</span>
        </div>

        <div class="pd-countdown-card">
            <?php
            $date1 = date_create(EXAM_DATE);
            $date2 = date_create(date('Y-m-d'));
            $diff = date_diff($date1, $date2);
            $daysLeft = $diff->days;
            if ($date2 > $date1) {
                $daysLeft = "Exam has passed!";
            }
            ?>
            <button><?= ($daysLeft === "Exam has passed!") ? $daysLeft : "â³ $daysLeft Days Left For Exam" ?></button>
        </div>

        <div class="pd-social-media-card">
            <div class="pd-social-media">
                <a href="https://www.instagram.com/" target="_blank"><i class="fab fa-instagram"></i></a>
                <a href="https://www.facebook.com/" target="_blank"><i class="fab fa-facebook"></i></a>
                <a href="https://telegram.me/csmission" target="_blank"><i class="fab fa-telegram"></i></a>
                <a href="https://www.youtube.com/" target="_blank"><i class="fab fa-youtube"></i></a>
            </div>
        </div>

        <div class="pd-menu">
            <a href="<?= base_url() ?>my-resources/subject" class="menu-link" style="text-decoration: none;">
                <div class="pd-menu-item">
                    <i class="fa-solid fa-pencil" style="color: #e63e58; margin-bottom: 10px; font-size: 24px;"></i>
                    <p>Test Paper</p>
                </div>
            </a>
            <a href="<?= base_url() ?>my-resources/notes/subject-list" class="menu-link"
                style="text-decoration: none;">
                <div class="pd-menu-item">
                    <i class="fa-solid fa-book-open"
                        style="color: #e63e58; margin-bottom: 10px; font-size: 24px;"></i>
                    <p>Notes</p>
                </div>
            </a>
            <a href="<?= base_url() ?>my-resources/amendment/subject-list" id="amendmentMenu" class="menu-link"
                style="text-decoration: none;">
                <div class="pd-menu-item">
                    <i class="fas fa-book" style="color: #e63e58; margin-bottom: 10px; font-size: 24px;"></i>
                    <p>Amendments</p>
                </div>
            </a>
            <a href="<?= base_url() ?>my-resources/qbank/subject-list" id="qbankMenu" class="menu-link"
                style="text-decoration: none;">
                <div class="pd-menu-item">
                    <i class="fa-solid fa-book-open"
                        style="color: #e63e58; margin-bottom: 10px; font-size: 24px;"></i>
                    <p>Que. Bank</p>
                </div>
            </a>
            <a href="javascript:void(0)" class="menu-link" onclick="openModal()" style="text-decoration: none;">
                <div class="pd-menu-item">
                    <i class="fa-solid fa-cart-shopping"
                        style="color: #e63e58; margin-bottom: 10px; font-size: 24px;"></i>
                    <p>Buy Now</p>
                </div>
            </a>
            <a href="#" id="mentorshipMenu" class="menu-link" style="text-decoration: none;">
                <div class="pd-menu-item">
                    <i class="fas fa-user-tie" style="color: #e63e58; margin-bottom: 10px; font-size: 24px;"></i>
                    <p>Mentorship</p>
                </div>
            </a>
        </div>

        <!-- --- Referral Section HTML --- -->
        <div class="referral-section">
            <h3>Your Referral Link</h3>
            <div class="referral-actions">
                <input type="text" id="referralLink"
                    value="<?= base_url() ?>auth?auth=register&ref=<?= $studentData['id'] ?>" readonly>
                <div class="action-buttons">
                    <button onclick="copyReferralLink()" class="action-button">
                        <i class="fas fa-copy"></i> Copy
                    </button>
                    <button id="shareButton" class="action-button share">
                        <i class="fas fa-share-alt"></i> Share
                    </button>
                </div>
            </div>

            <!-- --- New Commission Info Block --- -->
            <div class="referral-commission-info">
                <strong>Earn 10% flat!</strong> You will receive 10% of the sale price for every purchase made by a
                user who signs up using your referral link.
            </div>
            <!-- --- End Commission Info Block --- -->

            <h4>Referral Balance: â‚¹<span id="referralBalance"><?= number_format($balance, 2) ?></span></h4>
            <button onclick="openWithdrawPopup()" class="action-button withdraw">
                Withdraw
            </button>
        </div>
        <!-- --- End Referral Section HTML --- -->

        <div id="popupOverlay" onclick="closeWithdrawPopup()"></div>
        <div id="withdrawPopup">
            <h3>Withdraw Balance</h3>
            <input type="number" name="amount" id="amount" placeholder="Enter Amount" required>
            <input type="text" id="upiId" name="upiId" placeholder="Enter UPI ID" required>
            <div style="display: flex; gap: 10px;">
                <button id="requestPayout">Submit</button>
                <button class="cancel" onclick="closeWithdrawPopup()">Cancel</button>
            </div>
        </div>
    </div> <!-- End .wrapper -->

    <!-- --- Footer --- -->
    <div class="unique-footer" style="margin-top: 5rem;">
        <a href="<?= base_url() ?>dashboard" class="unique-footer-item active" style="text-decoration: none;">
            <i class="fas fa-home unique-footer-item-icon"></i>
            <p class="unique-footer-item-text">Home</p>
        </a>
        <a href="<?= base_url() ?>profile" class="unique-footer-item" style="text-decoration: none;">
            <i class="fas fa-user unique-footer-item-icon"></i>
            <p class="unique-footer-item-text">Profile</p>
        </a>
        <a href="<?= base_url() ?>invoice" class="unique-footer-item" style="text-decoration: none;">
            <i class="fas fa-file-invoice unique-footer-item-icon"></i>
            <p class="unique-footer-item-text">Invoice</p>
        </a>
        <a href="#" id="logoutButton" class="unique-footer-item" style="text-decoration: none;">
            <i class="fas fa-sign-out-alt unique-footer-item-icon"></i>
            <p class="unique-footer-item-text">Logout</p>
        </a>
    </div>
    <!-- --- End Footer --- -->

    <!-- --- Modals --- -->
    <div class="modal" id="modal">
        <div class="modal-content">
            <button class="close-modal" onclick="closeModal()">Ã—</button>
            <div class="modal-header">Select Your Options</div>
            <div>
                <select id="select1"></select>
                <select id="select2"></select>
                <button class="btn btn-submit" id="submit">Submit</button>
            </div>
            <div id="contentArea"></div>
        </div>
    </div>

    <div id="logoutModal">
        <div class="logout-modal-content">
            <h2>Confirm Logout</h2>
            <p>Are you sure you want to logout?</p>
            <div class="logout-modal-buttons">
                <button id="cancelLogout" class="logout-modal-cancel">Cancel</button>
                <button id="confirmLogout" class="logout-modal-confirm">Logout</button>
            </div>
        </div>
    </div>

    <!-- Mentorship Modal -->
    <div id="mentorshipModal" class="mentorship-modal">
        <div class="mentorship-modal-content">
            <?php if (!empty($notes_sub)): ?>
                <div class="mentorship-whatsapp-content">
                    <i class="fab fa-whatsapp mentorship-whatsapp-icon"></i>
                    <h2>Contact Mentor</h2>
                    <p>Reach out to your mentor for assistance.</p>
                    <a href="https://wa.me/918929592998?text=I%20have%20successfully%20enrolled%20in%20the%20Full%20Module%20Test%20Series%20and%20would%20like%20to%20request%20access%20to%20the%20mentorship%20program%2C%20as%20it%20is%20now%20unlocked%20with%20my%20enrollment."
                        class="mentorship-modal-button">Contact Mentor</a>
                </div>
            <?php else: ?>
                <div class="mentorship-lock-content">
                    <i class="fas fa-lock mentorship-lock-icon"></i>
                    <h2>Mentorship Locked</h2>
                    <p>Enroll now to unlock mentorship!</p>
                    <a href="javascript:void(0)" onclick="openModal()" class="mentorship-modal-button">Enroll
                        Now</a>
                </div>
            <?php endif; ?>
            <button id="closeMentorshipModal" class="mentorship-close-button">&times;</button>
        </div>
    </div>

    <!-- Share Popup -->
    <div id="sharePopup">
        <h3>Share Referral Link</h3>
        <div class="share-icons">
            <!-- WhatsApp -->
            <a id="shareWhatsApp" target="_blank" class="share-icon-link" title="Share on WhatsApp">
                <i class="fab fa-whatsapp"></i>
            </a>
            <!-- Facebook -->
            <a id="shareFacebook" target="_blank" class="share-icon-link" title="Share on Facebook">
                <i class="fab fa-facebook"></i>
            </a>
            <!-- Twitter -->
            <a id="shareTwitter" target="_blank" class="share-icon-link" title="Share on Twitter">
                <i class="fab fa-twitter"></i>
            </a>
            <!-- Email -->
            <a id="shareEmail" target="_blank" class="share-icon-link" title="Share via Email">
                <i class="fas fa-envelope"></i>
            </a>
        </div>
        <button id="closePopup">Close</button>
    </div>
    <!-- --- End Modals --- -->

</body>
<?= $this->endSection() ?>
<?= $this->section('jsContent') ?>
<script type="text/javascript" src="<?= base_url() ?>assets/student/js/buy-now-modal.js?v=1"></script>
<script>
    // --- Share Popup Logic ---
    document.addEventListener('DOMContentLoaded', function () {
        const referralLink = document.getElementById('referralLink') ? document.getElementById('referralLink').value : '';

        if (referralLink) {
            // Update share links dynamically
            document.getElementById('shareWhatsApp').href = `https://wa.me/?text=Check%20out%20this%20website%20%3A%20${encodeURIComponent(referralLink)}`;
            document.getElementById('shareFacebook').href = `https://www.facebook.com/sharer/sharer.php?u=${encodeURIComponent(referralLink)}`;
            document.getElementById('shareTwitter').href = `https://twitter.com/intent/tweet?url=${encodeURIComponent(referralLink)}&text=Join%20now%20via%20my%20referral%20link!`;
            document.getElementById('shareEmail').href = `mailto:?subject=Join this amazing website&body=Use my referral link to join: ${encodeURIComponent(referralLink)}`;
        }

        const shareButton = document.getElementById('shareButton');
        const sharePopup = document.getElementById('sharePopup');
        const closePopup = document.getElementById('closePopup');

        if (shareButton && sharePopup && closePopup) {
            shareButton.addEventListener('click', async () => {
                if (navigator.share && referralLink) {
                    try {
                        await navigator.share({
                            title: 'Join via Referral Link',
                            text: 'Check out this CS Test Series website!',
                            url: referralLink
                        });
                        console.log('Content shared successfully');
                    } catch (error) {
                        console.error('Error sharing:', error);
                    }
                } else {
                    // Show fallback popup if Web Share API is not supported or link is missing
                    if (referralLink) {
                        sharePopup.style.display = 'block';
                    } else {
                         console.error('Referral link element or value not found.');
                    }
                }
            });

            closePopup.addEventListener('click', () => {
                sharePopup.style.display = 'none';
            });

             // Close popup if user clicks outside
             sharePopup.addEventListener('click', function(event) {
                 if (event.target === sharePopup) {
                     sharePopup.style.display = 'none';
                 }
             });
        } else {
            console.warn('Share button, popup, or close button not found.');
        }
    });
    // --- End Share Popup Logic ---

    // --- Withdraw Popup Logic ---
    function openWithdrawPopup() {
        const overlay = document.getElementById("popupOverlay");
        const popup = document.getElementById("withdrawPopup");
        if (overlay && popup) {
            overlay.style.display = "block";
            popup.style.display = "block";
        }
    }

    function closeWithdrawPopup() {
        const overlay = document.getElementById("popupOverlay");
        const popup = document.getElementById("withdrawPopup");
        if (overlay && popup) {
            overlay.style.display = "none";
            popup.style.display = "none";
        }
    }
    // --- End Withdraw Popup Logic ---

    // --- Copy Referral Link Logic ---
    function copyReferralLink() {
        const linkInput = document.querySelector("#referralLink");
        if (linkInput) {
            const linkValue = linkInput.value;
            if (linkValue) {
                navigator.clipboard.writeText(linkValue).then(() => {
                     // Check if Bootstrap toast/alert library is available, otherwise use alert
                     if (typeof $ !== 'undefined' && typeof $.toast !== 'undefined') {
                         $.toast({
                             heading: 'Success',
                             text: 'Referral link copied to clipboard!',
                             showHideTransition: 'slide',
                             icon: 'success',
                             position: 'top-right'
                         });
                     } else {
                         alert("Referral link copied to clipboard!");
                     }
                }).catch((err) => {
                    console.error("Failed to copy the link: ", err);
                    alert("Failed to copy the link. Please try manually.");
                });
            } else {
                 console.error("Referral link input is empty.");
                 alert("Referral link is empty.");
            }
        } else {
             console.error("Referral link input element not found.");
             alert("Unable to find referral link.");
        }
    }
    // --- End Copy Referral Link Logic ---

    // --- Request Payout Logic (requires jQuery) ---
    document.addEventListener('DOMContentLoaded', function() {
         // Ensure jQuery is loaded before attaching the handler
         if (typeof $ !== 'undefined') {
              $('#requestPayout').on('click', function () {
                  let upiId = $('#upiId').val().trim();
                  let amount = $('#amount').val().trim();

                  if (upiId === '') {
                      alert('Please enter a valid UPI ID.');
                      return;
                  }

                  let upiRegex = /^[a-zA-Z0-9.\-_]{2,}@[a-zA-Z]{2,}$/;
                  if (!upiRegex.test(upiId)) {
                      alert('Please enter a valid UPI ID (e.g., abc@upi).');
                      return;
                  }

                  if (amount === '' || isNaN(amount) || amount <= 0) {
                      alert('Please enter a valid amount.');
                      return;
                  }

                  // Ensure balance is correctly formatted as a number for comparison
                  let maxBalance = parseFloat('<?= json_encode($balance) ?>');
                  let enteredAmount = parseFloat(amount);

                  if (isNaN(enteredAmount) || enteredAmount <= 0) {
                       alert('Please enter a valid numeric amount.');
                       return;
                  }

                  if (enteredAmount > maxBalance) {
                      alert('Entered amount exceeds your available balance.');
                      return;
                  }

                  let studentData = {
                      amount: enteredAmount,
                      upi_id: upiId
                  };

                  // Use the global baseUrl variable if defined, otherwise construct it
                  let requestUrl = (typeof baseUrl !== 'undefined') ? baseUrl + 'requestPayout' : '<?= base_url() ?>requestPayout';

                  $.ajax({
                      url: requestUrl,
                      type: 'POST',
                      data: JSON.stringify(studentData),
                      contentType: 'application/json',
                      success: function (response) {
                          try {
                              let res = typeof response === 'string' ? JSON.parse(response) : response;
                              if (res.success) {
                                  // Update balance display if needed (optional)
                                  // let newBalance = maxBalance - enteredAmount;
                                  // document.getElementById('referralBalance').textContent = newBalance.toFixed(2);
                                  alert(res.message || 'Payout request submitted successfully.');
                                  closeWithdrawPopup(); // Close popup on success
                                  // Optionally, reset the form
                                  $('#upiId').val('');
                                  $('#amount').val('');
                              } else {
                                  alert(res.message || 'Failed to submit payout request.');
                              }
                          } catch (e) {
                              console.error("Error parsing success response:", e, response);
                              alert('Unexpected response format.');
                          }
                      },
                      error: function (xhr, status, error) {
                          console.error('Payout Request Error:', status, error, xhr.responseText);
                          alert('Something went wrong while submitting the request. Please try again later.');
                      }
                  });
              });
         } else {
              console.warn("jQuery is not loaded. Payout request functionality might not work.");
              // Fallback or disable the button if jQuery is essential
              const payoutButton = document.getElementById('requestPayout');
              if (payoutButton) {
                   payoutButton.disabled = true;
                   payoutButton.textContent = 'Functionality Unavailable';
              }
         }
    });
    // --- End Request Payout Logic ---


    // --- Logout Modal Logic ---
    document.addEventListener('DOMContentLoaded', function () {
        const logoutButton = document.getElementById('logoutButton');
        const modal = document.getElementById('logoutModal');
        const cancelLogout = document.getElementById('cancelLogout');
        const confirmLogout = document.getElementById('confirmLogout');

        if (logoutButton && modal && cancelLogout && confirmLogout) {
            logoutButton.addEventListener('click', function (e) {
                e.preventDefault();
                modal.classList.add('show');
            });

            cancelLogout.addEventListener('click', function () {
                modal.classList.remove('show');
            });

            confirmLogout.addEventListener('click', function () {
                window.location.href = "<?= base_url() ?>logout";
            });

            window.addEventListener('click', function (e) {
                if (e.target === modal) {
                    modal.classList.remove('show');
                }
            });
        }
    });
    // --- End Logout Modal Logic ---

    // --- Content Toggle Logic ---
    document.addEventListener('DOMContentLoaded', function () {
        const toggle = document.getElementById("contentToggle");
        const toggleLabel = document.getElementById("toggleLabel");
        const menuLinks = document.querySelectorAll(".pd-menu a.menu-link");

        function updateMenuLinks(isFree) {
            menuLinks.forEach(link => {
                let href = link.getAttribute("href");
                if (href) {
                    href = href.replace(/\/free$/, "");
                    if (isFree) {
                        if (!href.endsWith("/free")) {
                            href += "/free";
                        }
                    }
                    link.setAttribute("href", href);
                }
            });
            if (toggleLabel) {
                toggleLabel.textContent = isFree ? "Free Content Enabled" : "Switch to Free Content";
            }
        }

        if (toggle) {
            toggle.addEventListener("change", function () {
                const isFree = this.checked;
                updateMenuLinks(isFree);
                localStorage.setItem("freeContent", isFree);
            });

            (function initializeToggle() {
                const isFree = localStorage.getItem("freeContent") === "true";
                toggle.checked = isFree;
                updateMenuLinks(isFree);
            })();
        }

        // Additional toggle logic for hiding/showing menu items
        const contentToggle = document.getElementById('contentToggle');
        const amendmentMenu = document.getElementById('amendmentMenu');
        const qbankMenu = document.getElementById('qbankMenu');
        const mentorshipMenu = document.getElementById('mentorshipMenu');
        const menuItems = document.querySelectorAll('.pd-menu-item p');
        const icons = document.querySelectorAll('.pd-menu-item i');

        if (contentToggle) {

            function toggleContent(isChecked) {
                if (amendmentMenu) amendmentMenu.style.display = isChecked ? 'none' : '';
                if (qbankMenu) qbankMenu.style.display = isChecked ? 'none' : '';
                if (mentorshipMenu) mentorshipMenu.style.display = isChecked ? 'none' : '';

                menuItems.forEach(item => {
                    item.style.color = isChecked ? 'black' : '';
                });
                icons.forEach(icon => {
                    if (!isChecked) {
                        if (icon.style.color === 'black') {
                             icon.style.color = '#e63e58';
                        }
                    } else {
                        icon.style.color = 'black';
                    }
                });

                localStorage.setItem('contentToggleState', isChecked);
                localStorage.setItem('iconColor', isChecked ? 'black' : '#e63e58');
            }

            const savedState = localStorage.getItem('contentToggleState');
            if (savedState !== null) {
                const isChecked = savedState === 'true';
                contentToggle.checked = isChecked;
                toggleContent(isChecked);
            }

            contentToggle.addEventListener('change', function () {
                toggleContent(this.checked);
            });
        }
    });
    // --- End Content Toggle Logic ---

    // --- Mentorship Modal Logic ---
    document.addEventListener("DOMContentLoaded", function () {
        const mentorshipMenu = document.getElementById("mentorshipMenu");
        const mentorshipModal = document.getElementById("mentorshipModal");
        const closeModal = document.getElementById("closeMentorshipModal");

        if (mentorshipMenu && mentorshipModal && closeModal) {
            mentorshipMenu.addEventListener("click", function (e) {
                e.preventDefault();
                mentorshipModal.classList.add("show");
            });

            closeModal.addEventListener("click", function () {
                mentorshipModal.classList.remove("show");
            });

            window.addEventListener("click", function (e) {
                if (e.target === mentorshipModal) {
                    mentorshipModal.classList.remove("show");
                }
            });
        } else {
            if (!mentorshipMenu) console.error('Mentorship menu not found!');
        }
    });
    // --- End Mentorship Modal Logic ---
</script>
<?= $this->endSection() ?>
