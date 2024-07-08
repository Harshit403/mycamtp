<?= $this->extend('student/layout/layout') ?>
<?=$this->section('title')?>
	Student Profile
<?=$this->endSection()?>
<?= $this->section('meta_description') ?>
<!-- enter your meta description -->
<?=$this->endSection()?>
<?= $this->section('meta_keywords') ?>
<!-- enter your meta keywords widthout tag -->
<?=$this->endSection()?>
<?=$this->section('content')?>
	<section class="container profile_container mainContainer">
		<h2 class="text-center">Profile</h2>
			<form id="studentProfileForm">
				<div class="row">
					<div class="col-md-6">
						<label class="form-label">Student Name</label>
						<input type="text"  class="form-control" name="student_name" value="<?=!empty($studentDetails) ? $studentDetails->student_name : ''?>">
					</div>
					<div class="col-md-6">
						<label class="form-label">Student Email</label>
						<input type="text"  class="form-control" name="email" value="<?=!empty($studentDetails) ? $studentDetails->email : ''?>" readonly>
					</div>
					<div class="col-md-6">
						<label class="form-label">Student Mobile No.</label>
						<input type="text"  class="form-control" name="mobile_no" value="<?=!empty($studentDetails) ? $studentDetails->mobile_no : ''?>">
					</div>
					<div class="col-md-6">
						<label class="form-label">City Name</label>
						<input type="text"  class="form-control" name="city_name" value="<?=!empty($studentDetails) ? $studentDetails->city_name : ''?>">
					</div>
					<div class="col-md-6">
						<label class="form-label">State Name</label>
						<input type="text"  class="form-control" name="city_name" value="<?=!empty($studentDetails) ? $studentDetails->state_name : ''?>">
					</div>
					<div class="col-md-6">
						<label class="form-label">Category Name</label>
						<select name="category_id" class="form-control form-select" id="category_id">
							<?php if (!empty($categoryDetails)): ?>
								<?php foreach ($categoryDetails as $categoryItem): ?>
									<option value="<?=$categoryItem->category_id?>"><?=$categoryItem->category_name?></option>
								<?php endforeach ?>
							<?php endif ?>
						</select>
					</div>
					<div class="col-md-6">
						<label class="form-label">Level Name</label>
						<select name="current_level" class="form-control form-select" id="current_level">
						</select>
					</div>
				</div>
			</form>
			<div class="row">
				<div class="col-md-12 d-flex justify-content-end">
					<a href="javascript:void(0)" class="btn btn-sm btn-success udpateStudentProfile"><i class="bi bi-arrow-up-circle"></i> Update Profile</a>
				</div>
			</div>
	</section>
<?= $this->endSection() ?>
<?=$this->section('jsContent')?>
<script src="<?=base_url()?>assets/student/js/profile.js?v=1.0.0"></script>
<?= $this->endSection() ?>