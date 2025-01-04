<?= $this->extend('student/layout/layout') ?>
<?=$this->section('title')?>
	<?=$type_info->type_name?>
<?=$this->endSection()?>
<?= $this->section('meta_description') ?>
Most Trusted CS Test Series for CSEET CS Executive and CS Professional | Mission CS Test Series
<?=$this->endSection()?>
<?= $this->section('meta_keywords') ?>
cs test series, cstestseries , cs executive test series, cs professional test series, icsi test series, cs executive test series, cs online test Series, cs exam, cs exams test series, cs exams, best test series for cs exams
<?=$this->endSection()?>
<?=$this->section('content')?>


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

	<section class="container  mb-5 subject_container mainContainer">
		<div class="row">
			<div class="col-md-12">
				<h2 class="text-center"><?=$type_info->type_info_heading?></h2>
			</div>
		</div>
		<div class="row">
			<?php if (!empty($subject_list)): ?>
				<?php foreach ($subject_list as $key => $subjectRow): ?>
					<div class="col-md-3">
						<div class="card">
					        <!-- <div class="badge"><?=$subjectRow->level_name?></div> -->
					        <div class="title"><?=$subjectRow->subject_name?></div>
					        <div class="price">₹<?=$subjectRow->offer_price?> <span class="original-price">₹<?=$subjectRow->original_price?></span></div>
					        <?php
					        	$discount = 0;
					        	if (!empty($subjectRow)) {
					        		$discount = 100-($subjectRow->offer_price/$subjectRow->original_price)*100;
					        	}
					        ?>
					        <div class="discount">[<?=$discount?>% OFF]</div>
					        <a href="javascript:void(0)" class="add-to-cart addToCartBtn btn btn-sm btn-custom" data-subject-id="<?=$subjectRow->subject_id?>"><i class="bi bi-cart-plus"></i> Add To Cart</a>
					        <a href="javascript:void(0)" class="add-to-cart addBuyNowBtn btn btn-sm btn-custom" data-subject-id="<?=$subjectRow->subject_id?>"><i class="bi bi-cart-plus"></i> Buy Now</a>
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
            <a class="btn btn-modern" href="<?=base_url()?>level/level-list">Buy any plan</a>
        </div>
           </li>
		 </ul>
			
			<?php endif ?>
		</div>
		<div class="row">
			<div class="col-md-12">
				<p>
					<?=$type_info->type_info?>
				</p>
			</div>
		</div>
	</section>
<?= $this->endSection() ?>
<?=$this->section('jsContent')?>
<?= $this->endSection() ?>
