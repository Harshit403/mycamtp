<?= $this->extend('student/layout/layout') ?>
<?=$this->section('title')?>
	<?=$category_info->category_name?>
<?=$this->endSection()?>
<?= $this->section('meta_description') ?>
Most Trusted CS Test Series for CSEET CS Executive and CS Professional | Mission CS Test Series
<?=$this->endSection()?>
<?= $this->section('meta_keywords') ?>
cs test series, cstestseries , cs executive test series, cs professional test series, icsi test series, cs executive test series, cs online test Series, cs exam, cs exams test series, cs exams, best test series for cs exams
<?=$this->endSection()?>
<?=$this->section('content')?>

<style>
    .button-85 {
        padding: 0.6em 2em;
        border: none;
        outline: none;
        color: rgb(255, 255, 255);
        background: #111;
        cursor: pointer;
        position: relative;
        z-index: 1;
        border-radius: 10px;
        user-select: none;
        -webkit-user-select: none;
        touch-action: manipulation;
        text-align: center;
        width: 95%; /* Button width reduced by 5% */
    }

    .button-auto {
	justify-content: center;
        margin: 12px; /* Center the button within its container */
    }

    .button-85:before {
        content: "";
        background: linear-gradient(
            45deg,
            #ff0000,
            #ff7300,
            #fffb00,
            #48ff00,
            #00ffd5,
            #002bff,
            #7a00ff,
            #ff00c8,
            #ff0000
        );
        position: absolute;
        top: -2px;
        left: -2px;
        background-size: 400%;
        z-index: -1;
        filter: blur(5px);
        width: calc(100% + 4px);
        height: calc(100% + 4px);
        animation: glowing-button-85 20s linear infinite;
        transition: opacity 0.3s ease-in-out;
        border-radius: 10px;
    }

    @keyframes glowing-button-85 {
        0% {
            background-position: 0 0;
        }
        50% {
            background-position: 400% 0;
        }
        100% {
            background-position: 0 0;
        }
    }

    .button-85:after {
        z-index: -1;
        content: "";
        position: absolute;
        width: 100%;
        height: 100%;
        background: #222;
        left: 0;
        top: 0;
        border-radius: 10px;
    }

    /* Flexbox centering for button container */
    .d-flex {
        display: flex;
    }

    .justify-content-center {
        justify-content: center;
    }

    /* Ensure full-width on smaller screens */
    @media (max-width: 768px) {
        .button-85 {
            width: 100%; /* Full width on smaller screens */
        }
    }
</style>



<section class="container mb-5 section mainContainer">
    <div class="row">
        <div class="col-md-12">
            <h2 class="text-center"><?=$category_info->category_more_details_heading?></h2>
        </div>
    </div>
    <div class="row">
        <?php foreach ($level_list as $levelRow): ?>
            <div class="col-md-3 d-flex justify-content-center"> <!-- Centering button container -->
                <a href="<?=base_url()?>type?category=<?=$levelRow->category_short_name?>&&level=<?=$levelRow->level_short_name?>" style="text-decoration: none; width: 100%;">
                    <button class="button-85 button-auto" role="button"><?=$levelRow->level_name?></button>
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
