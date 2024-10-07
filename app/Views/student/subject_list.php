<?= $this->extend('student/layout/layout') ?>
<?=$this->section('title')?>
	<?=$type_info->type_name?>
<?=$this->endSection()?>
<?= $this->section('meta_description') ?>
<!-- enter your meta description -->
<?=$this->endSection()?>
<?= $this->section('meta_keywords') ?>
<!-- enter your meta keywords widthout tag -->
<?=$this->endSection()?>
<?=$this->section('content')?>
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
