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
		<div class="row mt-2">
			<div class="col-md-6">
				<label>Password</label>
				<input type="password" id="student_password" class="form-control form-control-sm" placeholder="Enter your new password">
			</div>
			<div class="col-md-12 d-flex justify-content-end">
				<a href="javascript:void(0)" class="btn btn-sm btn-success changeStudentPass"><i class="bi bi-key"></i> Change Password</a>
			</div>
		</div>
	</section>
<?= $this->endSection() ?>
<?=$this->section('jsContent')?>
<script src="<?=base_url()?>assets/student/js/profile.js?v=1.0.1"></script>
<?= $this->endSection() ?>

<style>
/* Global Styling */
body {
    background-color: #f9f9f9;
    font-family: 'Arial', sans-serif;
}

/* Profile Heading */
.profile-heading {
    color: #e63e58;
    font-size: 2.5rem;
    font-weight: bold;
    text-transform: uppercase;
    margin-bottom: 20px;
}

/* Card Styling */
.profile-card {
    background: #fff;
    border: none;
    border-radius: 12px;
    padding: 20px 30px;
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
}

.profile-card .form-label {
    font-size: 14px;
    font-weight: bold;
    color: #555;
}

.form-control-custom {
    border: 1px solid #ddd;
    border-radius: 8px;
    padding: 10px 15px;
    font-size: 16px;
    transition: all 0.3s ease-in-out;
}

.form-control-custom:focus {
    border-color: #e63e58;
    box-shadow: 0 0 5px rgba(230, 62, 88, 0.5);
}

/* Update Button */
.btn-update {
    background-color: #e63e58;
    color: #fff;
    padding: 12px 25px;
    font-size: 16px;
    font-weight: bold;
    border: none;
    border-radius: 8px;
    transition: all 0.3s ease-in-out;
}

.btn-update:hover {
    background-color: #d32d4f;
    box-shadow: 0 4px 12px rgba(230, 62, 88, 0.4);
}

/* Responsive Design */
@media (max-width: 768px) {
    .profile-heading {
        font-size: 1.8rem;
    }

    .profile-card {
        padding: 15px 20px;
    }

    .form-control-custom {
        font-size: 14px;
        padding: 8px 12px;
    }

    .btn-update {
        font-size: 14px;
        padding: 10px 20px;
    }
}

@media (max-width: 576px) {
    .profile-heading {
        font-size: 1.5rem;
    }

    .btn-update {
        width: 100%;
    }
}
</style>
