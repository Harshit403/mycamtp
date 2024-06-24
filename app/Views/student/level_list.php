<?= $this->extend('student/layout/layout') ?>
<?=$this->section('content')?>
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
						<div class="card card-success text-center">
							<div class="card-body">
								<?=$levelRow->level_name?>
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