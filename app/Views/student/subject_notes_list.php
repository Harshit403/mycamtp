<?= $this->extend('student/layout/layout') ?>
<?= $this->section('title') ?>
    Subjects List
<?= $this->endSection() ?>
<?= $this->section('meta_description') ?>
Most Trusted CS Test Series for CSEET CS Executive and CS Professional | Mission CS Test Series
<?=$this->endSection()?>
<?= $this->section('meta_keywords') ?>
cs test series, cstestseries , cs executive test series, cs professional test series, icsi test series, cs executive test series, cs online test Series, cs exam, cs exams test series, cs exams, best test series for cs exams
<?=$this->endSection()?>
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
    <section class="container mb-5 mainContainer">
        <div class="notesSubContainer my-3">
            <div class="row">
                <?php 
                    $urlPart = '';
                    if (!empty($item_type)) {
                        $urlPart = '/free';
                    }
                ?>
                <?php if (!empty($subject_id_details)): ?>
                    <?php $i = 0;?>
                    <?php foreach ($subject_id_details as $value): ?>
                        <div class="col-md-3 <?=($i > 0) ? 'mb-2' : ''?>">
                            <div class="card" style="height: 10rem !important;">
                                <div class="card-body p-3">
                                    <img src="<?=base_url()?>/assetItems/image/icon.svg">
                                    <a href="<?=base_url()?>my-resources/notes/notes-list<?=$urlPart ?>?subject=<?=$value->subject_short_name?>" class="stretched-link text-decoration-none"><h2 class="text-dark"><?=$value->subject_name?></h2></a>
                                </div>
                            </div>
                        </div>
                        <?php $i++;?>
                    <?php endforeach?>
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
        </div>
    </section>
<?= $this->endSection() ?>
<?= $this->section('jsContent') ?>
    <script type="text/javascript">
        var pageType="student_sub_list";
    </script>
    <script src="<?=base_url()?>assets/js/custom_js/student_dashboard.js?v=1.0.2"></script>
<?= $this->endSection() ?>
