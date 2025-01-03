<?= $this->extend('student/layout/layout') ?>
<?= $this->section('title') ?>
    <?=!empty($blog_item->blog_heading) ? $blog_item->blog_heading : ''?>
<?= $this->endSection() ?>
<?= $this->section('meta_description') ?>
Most Trusted CS Test Series for CSEET CS Executive and CS Professional | Mission CS Test Series
<?=$this->endSection()?>
<?= $this->section('meta_keywords') ?>
cs test series, cstestseries , cs executive test series, cs professional test series, icsi test series, cs executive test series, cs online test Series, cs exam, cs exams test series, cs exams, best test series for cs exams
<?=$this->endSection()?>
<?= $this->section('content') ?>
<section class="container  mb-5 section mainContainer" style="margin-top: 6rem;">
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
