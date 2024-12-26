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
    background-color: #f8f9fa;
    margin: 0;
    padding: 0;
}

.mcst-blog-section {
    padding: 60px 20px;
}

.mcst-title {
    font-size: 2.8rem;
    color: #e63e58;
    text-align: center;
    margin-bottom: 10px;
    font-weight: 700;
}

.mcst-subtitle {
    text-align: center;
    color: #666;
    margin-bottom: 40px;
    font-size: 1rem;
}

.mcst-blog-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
    gap: 30px;
}

.mcst-blog-card {
    background-color: #ffffff;
    border-radius: 12px;
    overflow: hidden;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.mcst-blog-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 15px rgba(0, 0, 0, 0.15);
}

.mcst-blog-image {
    height: 200px;
    overflow: hidden;
    position: relative;
}

.mcst-blog-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.5s ease;
}

.mcst-blog-card:hover .mcst-blog-image img {
    transform: scale(1.1);
}

.mcst-blog-content {
    padding: 20px;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
}

.mcst-blog-heading {
    font-size: 1.25rem;
    color: #333;
    margin: 0 0 10px;
    font-weight: bold;
    line-height: 1.3;
}

.mcst-blog-text {
    font-size: 0.9rem;
    color: #555;
    line-height: 1.6;
    margin-bottom: 15px;
    text-align: justify;
}

.mcst-read-more {
    display: inline-block;
    font-size: 0.9rem;
    color: #e63e58;
    text-decoration: none;
    font-weight: bold;
    transition: color 0.3s ease;
}

.mcst-read-more:hover {
    color: #d22c45;
}

.mcst-no-blogs {
    text-align: center;
    color: #888;
    font-size: 1rem;
    margin-top: 20px;
}
.mcst-lazy-image {
    filter: blur(5px);
    transition: filter 0.3s ease-in-out;
}

.mcst-lazy-image[src] {
    filter: blur(0);
}
@media (max-width: 768px) {
    .mcst-title {
        font-size: 2.2rem;
    }

    .mcst-subtitle {
        font-size: 0.9rem;
    }
	}
</style>
<section class="mcst-blog-section">
    <div class="mcst-container">
        <div class="mcst-header">
            <h1 class="mcst-title">Our Blogs</h1>
            <p class="mcst-subtitle">Discover insights, stories, and tips curated just for you.</p>
        </div>
        <div class="mcst-blog-grid">
            <?php if (!empty($blog_items)): ?>
                <?php foreach ($blog_items as $blogRow): ?>
                    <div class="mcst-blog-card">
                        <div class="mcst-blog-image">
                            <img 
                                data-src="<?=base_url().$blogRow->blog_temp_image?>" 
                                alt="Blog Image" 
                                class="mcst-lazy-image"
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
                <?php endforeach; ?>
            <?php else: ?>
                <p class="mcst-no-blogs">No blogs available at the moment.</p>
            <?php endif; ?>
        </div>
    </div>
</section>
<script>
	document.addEventListener("DOMContentLoaded", function () {
    const lazyImages = document.querySelectorAll(".mcst-lazy-image");

    const lazyLoad = (image) => {
        const src = image.getAttribute("data-src");
        if (!src) return;
        image.src = src;
        image.removeAttribute("data-src");
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
