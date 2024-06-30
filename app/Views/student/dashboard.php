<?= $this->extend('student/layout/dashboard_layout') ?>
<?=$this->section('content')?>
	<style type="text/css">
	    .flexMobileContainer{
            display: flex;
            flex-direction: row;
            flex-wrap: wrap;
            grid-gap: 10px;
        }
        .flexMobileContainer > .grid-Elem {
            background-color: #fafbff !important;
            flex: 1 1 25%;
        }
        .grid-Elem .btnClass {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

	    .btnClass > i{
	        font-size: 40px;
	        color: #1AB79D !important;
	    }
	    .btnClass > p, .largeBtn > p{
	        font-weight: bold;
	        font-size: 14px;
	    }
	    a:hover{
	        color: grey;
	    }
	    .largeBtn{
	        background-color: #fafbff !important;
	    }
	</style>
	<section style="margin-top: 6rem;" class="container">
		<?php
	        $studentData = (session()->get('studentDetails')!==null) ? session()->get('studentDetails') : '';
	        $timestamp = time();
	        $am_pm = date('a', $timestamp);
	    ?>
		<div class="container">
            <div class="px-4 py-3" style="background-color: #C7D2FE; position: relative;overflow: hidden;">
            <div>
                <h1 style="color: #000; letter-spacing: 3;">Good <?=($am_pm=='am') ? 'morning' : 'afternoon'?>, <?=$studentData['student_name']?> </h1>
                <h5>Today's Decisions Determines Tomorow Success.</h5>
            </div>
            <div style="right: 0px;position: absolute;top:1px" class="imageDisplay">
                <svg width="319" height="198" xmlns:xlink="http://www.w3.org/1999/xlink"><defs><path id="welcome-a" d="M64 0l64 128-64-20-64 20z"></path><path id="welcome-e" d="M40 0l40 80-40-12.5L0 80z"></path><path id="welcome-g" d="M40 0l40 80-40-12.5L0 80z"></path><linearGradient x1="50%" y1="0%" x2="50%" y2="100%" id="welcome-b"><stop stop-color="#A5B4FC" offset="0%"></stop><stop stop-color="#818CF8" offset="100%"></stop></linearGradient><linearGradient x1="50%" y1="24.537%" x2="50%" y2="100%" id="welcome-c"><stop stop-color="#4338CA" offset="0%"></stop><stop stop-color="#6366F1" stop-opacity="0" offset="100%"></stop></linearGradient></defs><g fill="none" fill-rule="evenodd"><g transform="rotate(64 36.592 105.604)"><mask id="welcome-d" fill="#fff"><use xlink:href="#welcome-a"></use></mask><use fill="url(#welcome-b)" xlink:href="#welcome-a"></use><path fill="url(#welcome-c)" mask="url(#welcome-d)" d="M64-24h80v152H64z"></path></g><g transform="rotate(-51 91.324 -105.372)"><mask id="welcome-f" fill="#fff"><use xlink:href="#welcome-e"></use></mask><use fill="url(#welcome-b)" xlink:href="#welcome-e"></use><path fill="url(#welcome-c)" mask="url(#welcome-f)" d="M40.333-15.147h50v95h-50z"></path></g><g transform="rotate(44 61.546 392.623)"><mask id="welcome-h" fill="#fff"><use xlink:href="#welcome-g"></use></mask><use fill="url(#welcome-b)" xlink:href="#welcome-g"></use><path fill="url(#welcome-c)" mask="url(#welcome-h)" d="M40.333-15.147h50v95h-50z"></path></g></g></svg>
            </div>
        </div>
		<div class="row mt-4">
            <div class="col-6">
                <div class="card" style="background-color: #FFF;">
                    <?php
                        $date1=date_create(EXAM_DATE);
                        $date2=date_create(date('Y-m-d'));
                        $diff=date_diff($date1,$date2);
                        $daysLeft = $diff->days;
                    ?>
                    <p style="font-size: 14px;font-weight: bold;padding-left: 5px;">Countdown to the exam:</p>
                    <p style="font-size: 18px; color: #f44336; font-weight: bold;padding-left: 5px;">⏳<?=$daysLeft?> Days</p>
                </div>
            </div>
            <div class="col-6">
                <div class="card" style="background-color: #FFF; height: 100%; display: flex; justify-content: space-between;padding-left: 10px;">
                    <div class="row">
                        <div class="col-12 font-weight-bold">
                            Connect With Us
                        </div>
                        <div class="d-flex flex-wrap flex-row justify-content-around align-items-center">
                            <a href="https://Instagram.com/mycsmtp" style="color: #1AB79D;font-size: 20px;"><i class="bi bi-instagram"></i></a>
                            <a href="https://telegram.dog/mycsmtp" style="color: #1AB79D;font-size: 20px;"><i class="bi bi-telegram"></i></a>
                            <a href="https://facebook.com/mycsmtp" style="color: #1AB79D;font-size: 20px;"><i class="bi bi-facebook"></i></a>
                            <a href="https://youtube.com/@mycsmtp" style="color: #1AB79D;font-size: 20px;"><i class="bi bi-youtube"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="dashboardContainerMobile my-3" >
            <!-- <div class="row"> -->
               <!--  <div class="col-12 " style="text-align: right;">
                    <?php if (!empty($item_type) && $item_type=='free'): ?>
                        <a href="<?=base_url()?>dashboard" class="btn btn-success">Paid Content</a> 
                        <?php else: ?>
                        <a href="<?=base_url()?>dashboard/free" class="btn btn-success freeBtn">Free Content</a>   
                    <?php endif ?>
                </div> -->
            <div class="flexMobileContainer">
                <div class="grid-Elem">
                    <a href="<?=base_url()?>my-resources/subject" class="btn btnClass btn-sm"><i class="bi bi-newspaper"></i> <p>Test Paper</p></a>
                </div>
                <div class="grid-Elem">
                     <a href="<?=base_url()?>my-resources/notes/subject-list" class="btn btnClass btn-sm"><i class="bi bi-clipboard-fill"></i><p>Notes</p></a>
                </div>
                <div class="grid-Elem">
                    <a href="<?=base_url()?>my-resources/amendment/subject-list" class="btn btnClass btn-sm"><i class="bi bi-clipboard-fill"></i><p>Amendments</p></a>
                </div>
                <div class="grid-Elem">
                    <a href="<?=base_url()?>my-resources/qbank/subject-list" class="btn btnClass btn-sm"><i class="bi bi-book-fill"></i><p>Question Bank</p></a>
                </div>
                <div class="grid-Elem">
                    <a href="<?=base_url()?>#category-section" class="btn btnClass btn-sm"><i class="bi bi-cart-check-fill"></i><p>Buy Now</p></a>
                </div>
                <div class="grid-Elem">
                    <a href="#" class="btn btnClass btn-sm"><i class="bi bi-people-fill"></i><p>Mentoring</p></a>
                </div>
                <div class="grid-Elem">
                    <a href="<?=base_url()?>#contact-section" class="btn btnClass btn-sm"><i class="bi bi-telephone-fill"></i><p>Contact Us</p></a>
                </div>
                <div class="grid-Elem" style="flex-basis: 100%;">
                    <a href="#" style="width: 100% !important;height: 50px; font-size: 20px; font-weight: bold; text-align: left;" class="btn p-3 largeBtn "><p><i class="bi bi-chat-fill" style="color: #1AB79D"></i> Ask Your Query</p></a>
                </div>
            </div>
        </div>
        <div class="dashboardContainer my-3">
            <div class="row mt-3">
            </div>
            <div class="row">
                <div class="col-md-6 mt-3">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between">
                            <div class="d-flex flex-wrap" style="gap:10px;">
                                <img src="<?=base_url()?>assetItems/image/icon.svg">
                                <h4 class="text-dark">My Test Papers</h4>
                            </div>
                            <div>
                                <a href="<?=base_url()?>my-resources/subject" class="btn btn-sm btn-custom"><i class="bi bi-list"></i> View More</a>
                            </div>
                        </div>
                        <div class="card-body p-3">
                            <?php if (!empty($fetch_sub)): ?>
                                <ul class="list-group">
                                    <?php foreach ($fetch_sub as $value): ?>
                                        <li class="list-group-item">
                                            <div class="d-flex justify-content-between">
                                            <div><?=$value['subject_name']?></div>
                                            <div><a class="btn btn-sm" style="background-color: #C7D2FE" href="<?=base_url()?>my-resources/paper?subject=<?=$value['subject_short_name']?>"><i class="bi bi-arrow-right"></i></a></div>
                                            </div>
                                        </li>
                                    <?php endforeach ?>
                                    <?php if (count($fetch_sub) < 3): ?>
                                        <?php
                                            for ($i=0; $i < (3-count($fetch_sub)) ; $i++) { 
                                                ?>
                                                    <li class="list-group-item" style="height: 35px;">
                                                    </li>
                                                <?php
                                            }
                                        ?>
                                    <?php endif ?>
                                </ul>
                            <?php else: ?>
                                <?php if (!empty($item_type) && $item_type=='free'): ?>
                                    <div class="d-flex justify-content-center">
                                        <a href="#" class="stretched-link d-flex justify-content-center"><i class="fas fa-box-open" style="font-size: 100px; pointer-events: none;"></i>
                                        </a>
                                    </div>
                                <?php else: ?>
                                    <div class="d-flex justify-content-center">
                                        <a href="#" class="stretched-link d-flex justify-content-center"><i class="bi bi-lock-fill" style="font-size: 100px; pointer-events: none;"></i>
                                        </a>
                                    </div>  
                                <?php endif ?>
                            <?php endif ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mt-3">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between">
                            <div class="d-flex flex-wrap" style="gap:10px;">
                                <img src="<?=base_url()?>assetItems/image/icon.svg">
                                <h4 class="text-dark">My Notes</h4>
                            </div>
                            <div>
                                <a href="<?=base_url()?>my-resources/notes/subject-list/<?=$item_type?>" class="btn btn-sm btn-custom"><i class="bi bi-list"></i> View More</a>
                            </div>
                        </div>
                        <div class="card-body p-3">
                            <?php if (!empty($notes_sub)): ?>
                                <ul class="list-group">
                                    <?php foreach ($notes_sub as $notesRow): ?>
                                        <li class="list-group-item">
                                            <div class="d-flex justify-content-between">
                                            <div><?=$notesRow->subject_name?></div>
                                            <div><a class="btn btn-sm" style="background-color: #C7D2FE" href="<?=base_url()?>my-resources/notes/notes-list/<?=$notesRow->subject_id?>"><i class="bi bi-arrow-right"></i></a></div>
                                            </div>
                                        </li>
                                    <?php endforeach ?>
                                    <?php if (count($notes_sub) < 3): ?>
                                        <?php
                                            for ($i=0; $i < (3-count($notes_sub)) ; $i++) { 
                                                ?>
                                                    <li class="list-group-item" style="height: 35px;">
                                                    </li>
                                                <?php
                                            }
                                        ?>
                                    <?php endif ?>
                                </ul>
                            <?php else: ?>
                                <?php if (!empty($item_type) && $item_type=='free'): ?>
                                    <div class="d-flex justify-content-center">
                                        <a href="#" class="stretched-link d-flex justify-content-center"><i class="fas fa-box-open" style="font-size: 100px; pointer-events: none;"></i>
                                        </a>
                                    </div>
                                <?php else: ?>
                                    <div class="d-flex justify-content-center">
                                        <a href="#" class="stretched-link d-flex justify-content-center"><i class="bi bi-lock-fill" style="font-size: 100px; pointer-events: none;"></i>
                                        </a>
                                    </div>  
                                <?php endif ?>
                            <?php endif ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mt-3">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between">
                            <div class="d-flex flex-wrap" style="gap:10px;">
                                <img src="<?=base_url()?>assetItems/image/icon.svg">
                                <h4 class="text-dark">Amendments</h4>
                            </div>
                            <div>
                                <a href="<?=base_url()?>my-resources/amendment/subject-list" class=" btn btn-sm btn-custom"><i class="bi bi-list"></i> View More</a>
                            </div>
                        </div>
                        <div class="card-body">
                               <?php if (!empty($amendment_sub)): ?>
                                <ul class="list-group">
                                    <?php foreach ($amendment_sub as $amendmentRow): ?>
                                        <li class="list-group-item">
                                            <div class="d-flex justify-content-between">
                                            <div><?=$amendmentRow->subject_name?></div>
                                            <div><a class="btn btn-sm" style="background-color: #C7D2FE" href="<?=base_url()?>amendment/amendment-list?subject=<?=$amendmentRow->subject_short_name?>"><i class="bi bi-arrow-right"></i></a></div>
                                            </div>
                                        </li>
                                    <?php endforeach ?>
                                    <?php if (count($amendment_sub) < 3): ?>
                                        <?php
                                            for ($i=0; $i < (3-count($amendment_sub)) ; $i++) { 
                                                ?>
                                                    <li class="list-group-item" style="height: 35px;">
                                                    </li>
                                                <?php
                                            }
                                        ?>
                                    <?php endif ?>
                                </ul>
                            <?php else: ?>
                                <?php if (!empty($item_type) && $item_type=='free'): ?>
                                    <div class="d-flex justify-content-center">
                                        <a href="#" class="stretched-link d-flex justify-content-center"><i class="fas fa-box-open" style="font-size: 100px; pointer-events: none;"></i>
                                        </a>
                                    </div>
                                <?php else: ?>
                                    <div class="d-flex justify-content-center">
                                        <a href="#" class="stretched-link d-flex justify-content-center"><i class="bi bi-lock-fill" style="font-size: 100px; pointer-events: none;"></i>
                                        </a>
                                    </div>  
                                <?php endif ?>
                            <?php endif ?>
                        </div>
                    </div>
                </div>
                <?php if (empty($item_type)): ?>
                    <div class="col-md-6 mt-3">
                       <div class="card">
                            <div class="card-header d-flex justify-content-between">
                                <div class="d-flex flex-wrap" style="gap:10px;">
                                    <img src="<?=base_url()?>assetItems/image/icon.svg">
                                    <h4 class="text-dark">Question Bank</h4>
                                </div>
                                <div>
                                    <a href="<?=base_url()?>my-resources/qbank/subject-list" class=" btn btn-sm btn-custom"><i class="bi bi-list"></i> View More</a>
                                </div>
                            </div>
                            <div class="card-body">
                                <?php if (!empty($qbank_sub)): ?>
                                    <ul class="list-group">
                                        <?php foreach ($qbank_sub as $qbankRow): ?>
                                            <li class="list-group-item">
                                                <div class="d-flex justify-content-between">
                                                <div><?=$qbankRow->subject_name?></div>
                                                <div><a class="btn btn-sm" style="background-color: #C7D2FE" href="<?=base_url()?>qbank/qbank-list/<?=$qbankRow->subject_id?>"><i class="bi bi-arrow-right"></i></a></div>
                                                </div>
                                            </li>
                                        <?php endforeach ?>
                                        <?php if (count($qbank_sub) < 3): ?>
                                            <?php
                                                for ($i=0; $i < (3-count($qbank_sub)) ; $i++) { 
                                                    ?>
                                                        <li class="list-group-item" style="height: 35px;">
                                                        </li>
                                                    <?php
                                                }
                                            ?>
                                        <?php endif ?>
                                    </ul>
                                <?php else: ?>
                                    <div class="d-flex justify-content-center">
                                         <a href="#" class="stretched-link d-flex justify-content-center"><i class="bi bi-lock-fill" style="font-size: 100px; pointer-events: none;"></i></a>
                                    </div>
                                <?php endif ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mt-3">
                        <div class="card">
                            <div class="card-header d-flex justify-content-between">
                                <div class="d-flex flex-wrap" style="gap:10px;">
                                    <img src="<?=base_url()?>assetItems/image/icon.svg">
                                    <h4 class="text-dark">Buy Now</h4>
                                </div>
                            </div>
                            <div class="card-body d-flex justify-content-center">
                                <a href="<?=base_url()?>#category-section" class="stretched-link"><i class="bi bi-cart-check-fill" style="font-size: 100px; pointer-events: none;"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mt-3">
                        <div class="card">
                            <div class="card-header d-flex justify-content-between">
                                <div class="d-flex flex-wrap" style="gap:10px;">
                                    <img src="<?=base_url()?>assetItems/image/icon.svg">
                                    <h4 class="text-dark">Mentoring</h4>
                                </div>
                            </div>
                            <div class="card-body d-flex justify-content-center">
                                <a href="#" class="stretched-link"><i class="bi bi-lock-fill" style="font-size: 100px; pointer-events: none;"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mt-3">
                        <div class="card">
                            <div class="card-header d-flex justify-content-between">
                                <div class="d-flex flex-wrap" style="gap:10px;">
                                    <img src="<?=base_url()?>assetItems/image/icon.svg">
                                    <h4 class="text-dark">Doubts</h4>
                                </div>
                            </div>
                            <div class="card-body d-flex justify-content-center">
                                <a href="#" class="stretched-link"><i class="bi bi-lock-fill" style="font-size: 100px; pointer-events: none;"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mt-3">
                        <div class="card">
                            <div class="card-header d-flex justify-content-between">
                                <div class="d-flex flex-wrap" style="gap:10px;">
                                    <img src="<?=base_url()?>assetItems/image/icon.svg">
                                    <h4 class="text-dark">Contact Us</h4>
                                </div>
                            </div>
                            <div class="card-body d-flex justify-content-center">
                                <a href="<?=base_url()?>#contact-section" class="stretched-link"><i class="bi bi-telephone-fill" style="font-size: 100px; pointer-events: none;"></i></a>
                            </div>
                        </div>
                    </div>
                <?php endif ?>  
            </div>
        </div>
		</div>
	</section>
<?=$this->endSection()?>
<?=$this->section('jsContent')?>
<?=$this->endSection()?>