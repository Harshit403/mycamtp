<?= $this->extend('student/layout/layout') ?>
<?= $this->section('title') ?>
    Subject List
<?= $this->endSection() ?>
<?= $this->section('meta_description') ?>
Most Trusted CS Test Series for CSEET CS Executive and CS Professional | Mission CS Test Series
<?= $this->endSection() ?>
<?= $this->section('meta_keywords') ?>
cs test series, cstestseries, cs executive test series, cs professional test series, icsi test series, cs executive test series, cs online test Series, cs exam, cs exams test series, cs exams, best test series for cs exams
<?= $this->endSection() ?>
<?= $this->section('content') ?>

<style>
    /* Buy any plan section styles */
.buy-plan-card {
    text-align: center;
    background: #fff;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s, box-shadow 0.3s;
}

.buy-plan-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
}

.icon-container {
    margin-bottom: 15px;
    font-size: 100px;
    color: #e63e58; /* Matches your website's color */
}

.animated-icon {
    animation: bounce 1.5s infinite;
}

@keyframes bounce {
    0%, 20%, 50%, 80%, 100% {
        transform: translateY(0);
    }
    40% {
        transform: translateY(-10px);
    }
    60% {
        transform: translateY(-5px);
    }
}

.buy-plan-title {
    font-size: 24px;
    font-weight: bold;
    color: #333;
    margin-bottom: 10px;
}

.btn-modern {
    display: inline-block;
    background-color: #e63e58;
    color: #fff;
    padding: 10px 20px;
    font-size: 18px;
    font-weight: bold;
    text-transform: uppercase;
    text-decoration: none;
    border-radius: 5px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    transition: background-color 0.3s, box-shadow 0.3s;
}

.btn-modern:hover {
    background-color: #d12b47;
    box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
    }
    </style>

<section class="container mainContainer mb-5 section" style="min-height: 400px;">
    <div class="text-center">
        <h2 style="font-size: 22px; color: #e63e58; font-weight: bold; letter-spacing: 1px;">Subject List</h2>
    </div>
    <div class="row my-4 subjectContainer">
        <?php 
            $urlPart = '';
            if (!empty($item_type) && $item_type == 'free') {
                $urlPart = '/free';
            }
        ?>
        <?php if (!empty($fetchAvailbleSubject)): ?>
            <?php foreach ($fetchAvailbleSubject as $key => $subjectRow): ?>
                <div class="col-md-4 mb-4">
                    <div class="card shadow-sm" style="border-radius: 10px; transition: transform 0.3s, box-shadow 0.3s;">
                        <div class="card-body" style="padding: 15px;">
                            <h5 class="subject-name" style="font-size: 16px; font-weight: bold; color: #333; margin-bottom: 8px;">
                                <b>Subject:</b> <?= $subjectRow['subject_name'] ?>
                            </h5>
                            <p class="plan-name" style="font-size: 14px; color: #666; margin-bottom: 0;">
                                <b>Type:</b> <?= $subjectRow['type_name'] ?>
                            </p>
                        </div>
                        <div class="card-footer bg-white border-0 d-flex justify-content-between align-items-center" style="padding: 10px 15px;">
                            <a href="<?= base_url() ?>/my-resources/paper<?= $urlPart ?>?subject=<?= $subjectRow['subject_short_name'] ?>" 
                               class="btn btn-sm" 
                               style="flex: 1; max-width: 45%; background-color: #e63e58; color: white; font-size: 12px; text-transform: uppercase; font-weight: bold; border-radius: 6px; text-align: center;">
                                <i class="bi bi-book"></i> View Paper
                            </a>
                            <a href="https://urgent-maryanne-itzharshit-27371710.koyeb.app/" 
                               class="btn btn-sm" 
                               style="flex: 1; max-width: 45%; background-color: #333; color: white; font-size: 12px; text-transform: uppercase; font-weight: bold; border-radius: 6px; text-align: center;">
                                <i class="bi bi-arrow-down-circle"></i> Schedule
                            </a>
                        </div>
                    </div>
                </div>
            <?php endforeach ?>
        <?php else: ?>
                    <ul>
    <li style="display: flex; justify-content: center; align-items: center;">
        <div class="buy-plan-card">
            <div class="icon-container">
                <i class="fas fa-lock animated-icon"></i>
            </div>
            <h3 class="buy-plan-title">No Subjects Available</h3>
            <a class="btn btn-modern" href="<?=base_url()?>buy">Buy any plan</a>
        </div>
           </li>
                    </ul>
        <?php endif ?>
    </div>
</section>
<?= $this->endSection() ?>
<?= $this->section('jsContent') ?>
    <script src="<?= base_url() ?>assets/js/custom_js/view.js?v=1.0.2"></script>
<?= $this->endSection() ?>
