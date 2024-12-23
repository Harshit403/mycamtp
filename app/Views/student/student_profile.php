<?= $this->extend('student/layout/layout') ?>
<?=$this->section('title')?>
    Student Profile
<?=$this->endSection()?>
<?= $this->section('meta_description') ?>
<!-- enter your meta description -->
<?=$this->endSection()?>
<?= $this->section('meta_keywords') ?>
<!-- enter your meta keywords without tag -->
<?=$this->endSection()?>
<?=$this->section('content')?>
<section class="container profile_container mainContainer py-5">
    <h2 class="text-center profile-heading">Student Profile</h2>
    <form id="studentProfileForm" class="profile-form mt-4">
        <div class="row gy-4">
            <div class="col-md-6">
                <label class="form-label">Student Name</label>
                <input type="text" class="form-control form-control-custom" name="student_name" 
                       value="<?= !empty($studentDetails) ? $studentDetails->student_name : '' ?>">
            </div>
            <div class="col-md-6">
                <label class="form-label">Student Email</label>
                <input type="text" class="form-control form-control-custom" name="email" 
                       value="<?= !empty($studentDetails) ? $studentDetails->email : '' ?>" readonly>
            </div>
            <div class="col-md-6">
                <label class="form-label">Student Mobile No.</label>
                <input type="text" class="form-control form-control-custom" name="mobile_no" 
                       value="<?= !empty($studentDetails) ? $studentDetails->mobile_no : '' ?>">
            </div>
            <div class="col-md-6">
                <label class="form-label">City Name</label>
                <input type="text" class="form-control form-control-custom" name="city_name" 
                       value="<?= !empty($studentDetails) ? $studentDetails->city_name : '' ?>">
            </div>
            <div class="col-md-6">
                <label class="form-label">State Name</label>
                <input type="text" class="form-control form-control-custom" name="state_name" 
                       value="<?= !empty($studentDetails) ? $studentDetails->state_name : '' ?>">
            </div>
            <div class="col-md-6">
                <label class="form-label">Category Name</label>
                <select name="category_id" class="form-control form-select form-control-custom" id="category_id">
                    <?php if (!empty($categoryDetails)): ?>
                        <?php foreach ($categoryDetails as $categoryItem): ?>
                            <option value="<?= $categoryItem->category_id ?>"><?= $categoryItem->category_name ?></option>
                        <?php endforeach ?>
                    <?php endif ?>
                </select>
            </div>
            <div class="col-md-6">
                <label class="form-label">Level Name</label>
                <select name="current_level" class="form-control form-select form-control-custom" id="current_level">
                </select>
            </div>
        </div>
    </form>
    <div class="row mt-5">
        <div class="col-md-12 d-flex justify-content-end">
            <button class="btn btn-update updateStudentProfile">
                <i class="bi bi-arrow-up-circle"></i> Update Profile
            </button>
        </div>
    </div>
</section>
<?= $this->endSection() ?>
<?=$this->section('jsContent')?>
<script src="<?= base_url() ?>assets/student/js/profile.js?v=1.0.0"></script>
<?= $this->endSection() ?>

<style>
/* Global Container Styling */
.profile_container {
    background: #f9f9f9;
    border-radius: 12px;
    padding: 30px;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
}

.profile-heading {
    color: #e63e58;
    font-weight: bold;
    font-size: 2rem;
    text-transform: uppercase;
    margin-bottom: 20px;
}

.profile-form .form-label {
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
    box-shadow: 0 0 8px rgba(230, 62, 88, 0.2);
}

.btn-update {
    background-color: #e63e58;
    color: #fff;
    font-weight: bold;
    padding: 12px 25px;
    border: none;
    border-radius: 8px;
    font-size: 16px;
    transition: all 0.3s ease-in-out;
}

.btn-update:hover {
    background-color: #d32d4f;
    box-shadow: 0 5px 15px rgba(230, 62, 88, 0.3);
}

.row {
    gap: 20px;
}

/* Responsive Design */
@media (max-width: 768px) {
    .profile-heading {
        font-size: 1.5rem;
    }

    .profile-form .form-label {
        font-size: 14px;
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
    .profile-container {
        padding: 15px;
    }

    .btn-update {
        width: 100%;
    }
}
</style>
