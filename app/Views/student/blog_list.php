<?= $this->extend('student/layout/layout') ?>
<?= $this->section('title') ?>
    Blog List
<?= $this->endSection() ?>
<?= $this->section('meta_description') ?>
<!-- enter your meta description -->
<?=$this->endSection()?>
<?= $this->section('meta_keywords') ?>
<!-- enter your meta keywords without tag -->
<?=$this->endSection() ?>
<?= $this->section('content') ?>
<style>
 body {
    font-family: 'Roboto', sans-serif;
    background-color: #f9f9f9;
    margin: 0;
    padding: 0;
}

.mcst-blog-list-section {
    padding: 40px 0;
}

.mcst-blog-title {
    font-size: 2.5rem;
    color: #e63e58;
    margin-bottom: 20px;
    text-transform: uppercase;
    font-weight: bold;
}

.mcst-blog-card {
    background-color: #fff;
    border-radius: 15px;
    overflow: hidden;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s, box-shadow 0.3s;
}

.mcst-blog-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
}

.mcst-blog-image img {
    width: 100%;
    height: auto;
    display: block;
    object-fit: cover;
}

.mcst-blog-content {
    padding: 15px;
}

.mcst-blog-heading {
    font-size: 1.25rem;
    color: #333;
    margin: 0 0 10px;
}

.mcst-blog-text {
    font-size: 0.9rem;
    color: #555;
    line-height: 1.6;
    margin-bottom: 15px;
}

.mcst-read-more {
    display: inline-block;
    font-size: 0.85rem;
    color: #e63e58;
    text-decoration: none;
    font-weight: bold;
    transition: color 0.3s;
}

.mcst-read-more:hover {
    color: #d22c45;
}

.mcst-lazy-load {
    opacity: 0;
    transition: opacity 0.5s;
}

.mcst-lazy-load[data-loaded="true"] {
    opacity: 1;
}

@media (max-width: 768px) {
    .mcst-blog-title {
        font-size: 2rem;
    }
	}
</style>
<section class="mcst-blog-list-section">
    <div class="mcst-container">
        <div class="mcst-row mcst-py-4">
            <div class="mcst-col-12 mcst-text-center">
                <h1 class="mcst-blog-title">Blog List</h1>
            </div>
        </div>
        <div class="mcst-row">
            <?php if (!empty($blog_items)): ?>
                <?php foreach ($blog_items as $blogRow): ?>
                    <div class="mcst-col-lg-4 mcst-col-md-6 mcst-col-sm-12 mcst-mb-4">
                        <div class="mcst-blog-card">
                            <div class="mcst-blog-image">
                                <img 
                                    src="<?=base_url().$blogRow->blog_temp_image?>" 
                                    alt="Blog Image" 
                                    class="mcst-lazy-load"
                                >
                            </div>
                            <div class="mcst-blog-content">
                                <h3 class="mcst-blog-heading"><?=$blogRow->blog_heading?></h3>
                                <p class="mcst-blog-text">
                                    <?php 
                                        $blog_text = trim($blogRow->blog_text);
                                        if (!empty($blog_text)) {
                                            if (strlen($blog_text) > 100) {
                                                $blog_text = substr((strip_tags($blog_text)), 0, 100) . '...';
                                            }
                                        }
                                        echo $blog_text;
                                    ?>
                                </p>
                                <a href="<?=base_url()?>blog?item=<?=$blogRow->blog_short_name?>" class="mcst-read-more">
                                    Read More <i class="bi bi-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <div class="mcst-col-12 mcst-text-center">
                    <p>No blogs available at the moment.</p>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>
<script>
	document.addEventListener("DOMContentLoaded", function () {
    const lazyImages = document.querySelectorAll(".mcst-lazy-load");

    const lazyLoad = (image) => {
        const src = image.getAttribute("src");
        if (!src) return;
        image.setAttribute("data-loaded", "true");
    };

    const observer = new IntersectionObserver(
        (entries, observer) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    lazyLoad(entry.target);
                    observer.unobserve(entry.target);
                }
            });
        },
        { threshold: 0.1 }
    );

    lazyImages.forEach((image) => observer.observe(image));
});
</script>
<?= $this->endSection() ?>
