<?= $this->extend('student/layout/layout') ?>
<?= $this->section('title') ?>
    BUY TEST SERIES - Mission CS Test Series 
<?= $this->endSection() ?>
<?= $this->section('meta_description') ?>
<!-- enter your meta description -->
<?=$this->endSection()?>
<?= $this->section('meta_keywords') ?>
<!-- enter your meta keywords widthout tag -->
<?=$this->endSection()?>
<?= $this->section('content') ?>
<style>
    .fullscreen {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: #F8F8F8; /* Change to your desired color */
    display: flex;
    justify-content: center;
    align-items: center;
    overflow: hidden;
    }
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
<div class="fullscreen"></div>
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
<?= $this->endSection() ?>
<?= $this->section('jsContent') ?>
<script>
// Function to open the modal
function openModal() {
    document.getElementById('modal').style.display = 'flex';
}

// Function to close the modal and go back or redirect to homepage
function closeModal() {
    if (history.length > 1) {
        history.back(); // Go back if there's a previous page
    } else {
        window.location.href = 'https://missioncstestseries.com'; // Redirect to homepage
    }
}

// Automatically open the modal when the page loads
window.onload = function() {
    openModal();
};
</script>
<script type="text/javascript" src="<?= base_url() ?>assets/student/js/buy-now-modal.js?v=1"></script>
<?= $this->endSection() ?>
