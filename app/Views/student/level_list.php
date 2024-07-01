<?= $this->extend('student/layout/layout') ?>
<?=$this->section('content')?>
	<section class="container level_conatainer mainContainer">
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
				<h2 class="text-center"><?=$levelRow->level_more_details_heading?></h2>
				<p>
					<?=$levelRow->level_more_details?>
				</p>
			</div>
		</div>
	</section>
<?= $this->endSection() ?>
<?=$this->section('jsContent')?>
<?= $this->endSection() ?>
