<?= $this->extend('student/layout/layout') ?>
<?=$this->section('content')?>
	<section class="container type_container" style="padding-top: 5rem;">
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
			<?php if (!empty($type_list)): ?>
				<?php foreach ($type_list as $key => $typeRow): ?>
					<div class="col-md-3 mb-3 d-flex justify-content-center">
						<div class="card">
					        <div class="header">
					            <span class="students">⚡Popular</span>
					        </div>
					        <h2><?=$typeRow->batch_info?></h2>
					        <h3><?= $typeRow->type_name?></h3>
					        <div style="overflow-y: auto"><?=$typeRow->type_more_details?></div>
					        <div class="buttons">
					            <a class="btn btn-sm btn-custom syllabus-btn" href="<?=base_url().$typeRow->schedule_file?>" download="<?=$typeRow->file_name?>"><i class="bi bi-arrow-down-circle"></i> Download Schedule</a>
					            <a class="btn btn-sm fee-btn" href="<?=base_url()?>subject?category=<?=$typeRow->category_short_name?>&&level=<?=$typeRow->level_short_name?>&&type=<?=$typeRow->type_short_name?>"><i class="bi bi-book"></i> VIEW Subject</a>
					        </div>
					    </div>
					</div>
				<?php endforeach ?>
			<?php endif ?>
		</div>
	</section>
<?= $this->endSection() ?>
<?=$this->section('jsContent')?>
<?= $this->endSection() ?>