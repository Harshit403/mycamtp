<?= $this->extend('student/layout/layout') ?>
<?=$this->section('title')?>
	<?=$level_info->level_name?>
<?=$this->endSection()?>
<?= $this->section('meta_description') ?>
Most Trusted CS Test Series for CSEET CS Executive and CS Professional | Mission CS Test Series
<?=$this->endSection()?>
<?= $this->section('meta_keywords') ?>
cs test series, cstestseries , cs executive test series, cs professional test series, icsi test series, cs executive test series, cs online test Series, cs exam, cs exams test series, cs exams, best test series for cs exams
<?=$this->endSection()?>
<?=$this->section('content')?>
	<section class="container type_container mb-5 mainContainer">
		<div class="row">
			<div class="col-md-12">
				<h2 class="text-center"><?=$level_info->level_more_details_heading?></h2>
			</div>
		</div>
		<div class="row">
			<?php if (!empty($type_list)): ?>
				<?php foreach ($type_list as $key => $typeRow): ?>
					<div class="col-md-4 mb-3 d-flex justify-content-center">
						<div class="card">
					        <div class="header">
					            <span class="students">⚡Popular</span>
					        </div>
					        <h2 class="text-wrap" style="width: 17rem;"><?=$typeRow->batch_info?></h2>
					        <h3><?= $typeRow->type_name?></h3>
					        <div style="overflow-y: auto;text-align: left!important;"><?=$typeRow->type_more_details?></div>
					        <div class="buttons">
					            <a class="btn btn-sm btn-custom syllabus-btn" href="<?=base_url().$typeRow->schedule_file?>" download="<?=$typeRow->file_name?>"><i class="bi bi-arrow-down-circle"></i> Download Schedule</a>
					            <a class="btn btn-sm fee-btn" href="<?=base_url()?>subject?category=<?=$typeRow->category_short_name?>&&level=<?=$typeRow->level_short_name?>&&type=<?=$typeRow->type_short_name?>"><i class="bi bi-book"></i> VIEW Subject</a>
					        </div>
					    </div>
					</div>
				<?php endforeach ?>
			<?php endif ?>
		</div>
		<div class="row">
			<div class="col-md-12">
				<p>
					<?=$level_info->level_more_details?>
				</p>
			</div>
		</div>
	</section>
<?= $this->endSection() ?>
<?=$this->section('jsContent')?>
<?= $this->endSection() ?>
