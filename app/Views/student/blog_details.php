<?= $this->extend('student/layout/layout') ?>
<?= $this->section('title') ?>
    <?=!empty($blog_item->blog_heading) ? $blog_item->blog_heading : ''?>
<?= $this->endSection() ?>
<?= $this->section('meta_description') ?>
<!-- enter your meta description -->
<?=$this->endSection()?>
<?= $this->section('meta_keywords') ?>
<!-- enter your meta keywords widthout tag -->
<?=$this->endSection()?>
<?= $this->section('content') ?>
<section class="container  mb-5 section mainContainer">
    <div class="row py-3">
        <div class="col-md-12 h2 text-center">
            <?=!empty($blog_item->blog_heading) ? $blog_item->blog_heading : ''?>
        </div>
    </div>
    <div class="row pb-3" style="min-height:50vh !important">
        <div class="col-md-12 text-center">
            <div class="w-100">
                <?php
                    $blogData = str_replace("<p>","",$blog_item->blog_text);
                    $blogData = str_replace("</p>","",$blogData);
                ?>
                <?=$blogData?>
            </div>
        </div>
    <div>
</section>
<?= $this->endSection() ?>