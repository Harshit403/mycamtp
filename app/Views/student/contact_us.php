<?= $this->extend('student/layout/layout') ?>
<?=$this->section('title')?>
	contact us
<?=$this->endSection()?>
<?= $this->section('meta_description') ?>
<!-- enter your meta description -->
<?=$this->endSection()?>
<?= $this->section('meta_keywords') ?>
<!-- enter your meta keywords widthout tag -->
<?=$this->endSection()?>
<?=$this->section('content')?>
	<section class="container contact_us_container mainContainer" style="margin-top: 6rem;">


    <style>
        /* Reset & Global Styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f9f9f9;
            color: #333;
            line-height: 1.6;
        }

        .unique-container {
            width: 90%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 40px 0;
        }

        .unique-header {
            text-align: center;
            margin-bottom: 50px;
        }

        .unique-header h1 {
            font-size: 48px;
            color: #e63e58;
        }

        .unique-header p {
            color: #555;
            font-size: 18px;
            margin-top: 10px;
        }

        .unique-contact-section {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 30px;
        }

        .unique-contact-info,
        .unique-contact-form {
            padding: 20px;
            border-radius: 10px;
            background: #fff;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.05);
        }

        .unique-contact-info h2,
        .unique-contact-form h2 {
            margin-bottom: 20px;
            color: #e63e58;
        }

        .unique-info-item {
            margin-bottom: 20px;
            font-size: 16px;
        }

        .unique-info-item span {
            display: block;
            font-weight: bold;
            color: #e63e58;
        }

        .unique-contact-form form {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        .unique-contact-form input,
        .unique-contact-form textarea {
            width: 100%;
            padding: 12px 15px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 8px;
            outline: none;
            transition: all 0.3s ease;
        }

        .unique-contact-form input:focus,
        .unique-contact-form textarea:focus {
            border-color: #e63e58;
            box-shadow: 0 0 8px rgba(230, 62, 88, 0.2);
        }

        .unique-contact-form button {
            padding: 12px 20px;
            font-size: 18px;
            background: #e63e58;
            border: none;
            border-radius: 8px;
            color: #fff;
            cursor: pointer;
            transition: background 0.3s ease;
        }

        .unique-contact-form button:hover {
            background: #c02e47;
        }

        .unique-footer {
            text-align: center;
            padding: 20px 0;
            margin-top: 50px;
            background: #e63e58;
            color: #fff;
        }

        .unique-footer p {
            margin: 0;
            font-size: 14px;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .unique-contact-section {
                grid-template-columns: 1fr;
            }

            .unique-header h1 {
                font-size: 36px;
            }

            .unique-header p {
                font-size: 16px;
            }
        }

        @media (max-width: 480px) {
            .unique-contact-section {
                gap: 20px;
            }

            .unique-contact-info, .unique-contact-form {
                padding: 15px;
            }

            .unique-contact-form input,
            .unique-contact-form textarea {
                padding: 10px 12px;
            }

            .unique-contact-form button {
                font-size: 16px;
            }
        }
    </style>


    <div class="unique-container">
        <!-- Header Section -->
        <div class="unique-header">
            <h1>Contact Us</h1>
            <p>We are here to assist you. Reach out to us anytime!</p>
        </div>

        <!-- Contact Section -->
        <div class="unique-contact-section">
            <!-- Contact Info -->
            <div class="unique-contact-info">
                <h2>Contact Information</h2>
                <div class="unique-info-item">
                    <span>Phone:</span>
                    +91 9540097210
                </div>
                <div class="unique-info-item">
                    <span>Email:</span>
                    support@missioncstestseries.com
                </div>
                <div class="unique-info-item">
                    <span>Address:</span>
                    MISSION CS TEST SERIES, Dasna, Ghaziabad, Uttar Pradesh, 201302
                </div>
            </div>

            <!-- Contact Form -->
            <div class="unique-contact-form">
                <h2>Send Us a Message</h2>
                <form action="/submit-contact" method="POST">
                    <input type="text" name="name" placeholder="Your Name" required>
                    <input type="email" name="email" placeholder="Your Email" required>
                    <input type="tel" name="phone" placeholder="Your Phone Number" required>
                    <textarea name="message" rows="5" placeholder="Your Message" required></textarea>
                    <button type="submit">Send Message</button>
                </form>
            </div>
        </div>
    </div>

		
	</section>
<?= $this->endSection() ?>
<?=$this->section('jsContent')?>
<?= $this->endSection() ?>
