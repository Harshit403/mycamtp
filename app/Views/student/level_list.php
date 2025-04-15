<?= $this->extend('student/layout/layout') ?>
<?=$this->section('title')?>
    <?=$category_info->category_name?>
<?=$this->endSection()?>
<?= $this->section('meta_description') ?>
<!-- enter your meta description -->
<?=$this->endSection()?>
<?= $this->section('meta_keywords') ?>
<!-- enter your meta keywords widthout tag -->
<?=$this->endSection()?>
<?=$this->section('content')?>
    <section class="container mb-5 section mainContainer">

    <style>
    @keyframes slideRight {
        0%, 100% { transform: translateX(0); }
        50% { transform: translateX(5px); }
    }
    .level-btn {
        display: block; 
        margin: 0.5rem auto; 
        background-color: #e63e58; 
        max-width: 300px;
        width: 100%;
        color: #fff; 
        font-size: 14px; 
        font-weight: bold; 
        padding: 10px 20px; 
        text-align: center; 
        border-radius: 10px;
    }
    .level-btn:hover {
        color: #fff;
        text-decoration: none;
        background-color: #c9344d;
    }
    .level-container {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
    }
    .level-col {
        flex: 0 0 100%;
        max-width: 100%;
        padding: 0 15px;
    }
    @media (min-width: 576px) {
        .level-col {
            flex: 0 0 50%;
            max-width: 50%;
        }
    }
    @media (min-width: 768px) {
        .level-col {
            flex: 0 0 33.333%;
            max-width: 33.333%;
        }
    }
    @media (min-width: 992px) {
        .level-col {
            flex: 0 0 25%;
            max-width: 25%;
        }
    }
    </style>
        <div class="d-flex justify-content-center" style="margin-top: 10rem;">
            <div class="col-md-12">
                <h2 class="text-center"><?=$category_info->category_more_details_heading?></h2>
            </div>
        </div>
        <div class="level-container">
            <?php foreach ($level_list as $levelRow): ?>
                <div class="level-col">
                    <a href="<?=base_url()?>type?category=<?=$levelRow->category_short_name?>&&level=<?=$levelRow->level_short_name?>" class="level-btn">
                        <?=$levelRow->level_name?>
                        <i class="fas fa-arrow-right" style="margin-left: 10px; animation: slideRight 1s infinite;"></i>
                    </a>
                </div>
            <?php endforeach ?>
        </div>
        <div class="row">
            <div class="col-md-12">
                <p>
                    <?=$category_info->category_more_details?>
                </p>
            </div>
        </div>
    </section>
<?= $this->endSection() ?>
<?=$this->section('jsContent')?>
<?= $this->endSection() ?>
