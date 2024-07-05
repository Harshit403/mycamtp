<?= $this->extend('student/layout/layout') ?>
<?=$this->section('title')?>
	<?=$category_info->category_name?>
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
					<a href="<?=base_url()?>type?category=<?=$levelRow->category_short_name?>&&level=<?=$levelRow->level_short_name?>" style="text-decoration: none;">
						<div class="card card-success text-center">
							<div class="card-body">
								<?=$levelRow->level_name?>
							</div>
						</div>
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
