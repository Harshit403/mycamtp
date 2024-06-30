<?= $this->extend('student/layout/layout') ?>
<?=$this->section('content')?>

<style>
/* Custom card styles */
.custom-category-child {
    position: relative;
    display: flex;
    justify-content: center;
    align-items: center;
    margin: 15px 0; /* Adds 10px margin above and below each card */
}

.custom-category-card {
    width: 100%; /* Card width adjusted to fit the column */
    height: 40px; /* Reduced card height */
    background: #6451CE; /* Card background color */
    border-radius: 15px; /* Card border radius */
    display: flex;
    justify-content: center;
    align-items: center;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    transition: transform 0.2s ease-in-out;
}

.custom-category-card:hover {
    transform: scale(1.05);
}

.custom-category-card-content {
    font-size: 1.2em; /* Reduced font size by 20% */
    color: white;
    font-weight: bold;
}

/* Pulse effect for the card */
.custom-category-child::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    margin: auto;
    width: calc(100% + 20px); /* Width of the pulse effect (increased to include margins) */
    height: 60px; /* Height of the pulse effect (increased to include margins) */
    background: rgba(100, 81, 206, 0.4); /* Pulse effect color */
    border-radius: 15px; /* Border radius to match the card */
    animation: pulse 2s infinite;
    z-index: -1;
}

@keyframes pulse {
    0% {
        transform: scale(1);
        opacity: 1;
    }
    100% {
        transform: scale(1.2);
        opacity: 0;
    }
}

</style>

<section class="container level_conatainer" style="padding-top: 5rem;">
    <h2 class="text-center">Test Text</h2>
    <p>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
    </p>
    <div class="row">
        <?php foreach ($level_list as $levelRow): ?>
            <div class="col-md-3">
                <a href="<?=base_url()?>type?category=<?=$levelRow->category_short_name?>&&level=<?=$levelRow->level_short_name?>" style="text-decoration: none;">
                    <div class="custom-category-child">
                        <div class="custom-category-card">
                            <div class="custom-category-card-content">
                                <?=$levelRow->level_name?>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        <?php endforeach ?>
    </div>
</section>
<?= $this->endSection() ?>

<?=$this->section('jsContent')?>
<?= $this->endSection() ?>
