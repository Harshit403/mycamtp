<?= $this->extend('student/layout/layout') ?>
<?=$this->section('title')?>
	<?=$type_info->type_name?>
<?=$this->endSection()?>
<?= $this->section('meta_description') ?>
Most Trusted CS Test Series for CSEET CS Executive and CS Professional | Mission CS Test Series
<?=$this->endSection()?>
<?= $this->section('meta_keywords') ?>
cs test series, cstestseries , cs executive test series, cs professional test series, icsi test series, cs executive test series, cs online test Series, cs exam, cs exams test series, cs exams, best test series for cs exams
<?=$this->endSection()?>
<?=$this->section('content')?>
	<section class="container  mb-5 subject_container mainContainer">
	<style>
.modal {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.7);
        display: none;
        justify-content: center;
        align-items: flex-start;
        z-index: 9999;
        overflow-y: auto;
        padding-top: 10px;
    }

    .modal-content {
        background: #fff;
        width: 90%;
        max-width: 500px;
        border-radius: 10px;
        padding: 20px;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
    }

    .modal-header {
        font-size: 20px;
        font-weight: bold;
        color: #e63e58;
        text-align: center;
        margin-bottom: 20px;
    }

    select {
        width: 100%;
        padding: 10px;
        margin-bottom: 15px;
        border: 1px solid #ddd;
        border-radius: 5px;
    }

    .btn-submit {
        background-color: #e63e58;
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        font-size: 16px;
        width: 100%;
        text-align: center;
    }

    .btn:hover {
        background-color: #d0344c;
    }

    .card-container {
        margin-top: 20px;
    }

    .fa-download {
        content: "\f019";
    }

    .card-modal {
        background: linear-gradient(135deg, #fff, #f8f9fa);
        border: 1px solid #ddd;
        border-radius: 10px;
        padding: 15px;
        margin-bottom: 15px;
        text-align: center;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .card:hover {
        transform: translateY(-5px);
        box-shadow: 0 6px 20px rgba(0, 0, 0, 0.15);
    }

    .card-title {
        font-size: 18px;
        color: #333;
        margin-bottom: 10px;
        font-weight: bold;
    }

    .card-price {
        font-size: 16px;
        color: #e63e58;
        margin: 10px 0;
        font-weight: bold;
    }

    .card-btn {
        background: #e63e58;
        color: white;
        padding: 8px 15px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        font-size: 14px;
        margin-top: 10px;
    }

    .card-btn:hover {
        background: #d0344c;
    }

    .close-modal {
        position: absolute;
        top: -17px;
        right: 0px;
        background: none;
        border: none;
        font-size: 43px;
        font-weight: bold;
        color: #333;
        cursor: pointer;
        transition: color 0.3s ease;
    }

    .close-modal:hover {
        color: red;
    }

    .back-btn {
        background: #e63e58;
        color: white;
        border: none;
        padding: 8px 15px;
        border-radius: 5px;
        font-size: 14px;
        cursor: pointer;
        display: block;
        text-align: center;
        margin: 10px auto;
        max-width: 150px;
    }

    .back-btn:hover {
        background: #d0344c;
    }

    .checkout-btn {
        display: block;
        margin: 10px auto;
        padding: 10px;
        text-align: center;
        background-color: #198754;
        color: white;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }

    .checkout-btn:hover {
        background-color: #e63939;
    }

    @media (max-width: 768px) {
        .modal-content {
            width: 95%;
        }
		}
	</style>
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
<div class="modal" id="modal">
    <div class="modal-content">
        <button class="close-modal" onclick="closeModal()">×</button>
        <div class="modal-header">Select Your Options</div>
        <div>
            <select id="select1"></select>
            <select id="select2"></select>
            <button class="btn btn-submit" id="submit">Submit</button>
        </div>
        <div id="contentArea"></div>
    </div>
</div>
	</section>
<?= $this->endSection() ?>
<?=$this->section('jsContent')?>
<script type="text/javascript" src="<?= base_url() ?>assets/student/js/buy-now-modal.js?v=1"></script>
<?= $this->endSection() ?>
