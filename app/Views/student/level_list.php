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




		<div class="row">
			<div class="col-md-12">
				<h2 class="text-center"><?=$category_info->category_more_details_heading?></h2>
			</div>
		</div>
		<div class="row">
			<?php foreach ($level_list as $levelRow): ?>
				<div class="col-md-3">
                                <a href="<?=base_url()?>type?category=<?=$levelRow->category_short_name?>&&level=<?=$levelRow->level_short_name?>" class="btn" style="display: block; background-color: #e63e58; width: 88%; color: #fff; font-size: 14px; font-weight: bold; padding: 10px 20px; text-align: center; border-radius: 10px;"><?=$levelRow->level_name?><i class="fas fa-arrow-right" style="margin-left: 10px; animation: slideRight 1s infinite;"></i></a>
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
