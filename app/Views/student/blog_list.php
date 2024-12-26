<?= $this->extend('student/layout/layout') ?>
<?= $this->section('title') ?>
    Blog List
<?= $this->endSection() ?>
<?= $this->section('content') ?>
<!-- Tailwind CSS -->
<link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

<section class="container mx-auto py-10">
    <h1 class="text-4xl font-bold text-center text-[#e63e58] mb-8">Blog List</h1>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 px-4">
        <?php if (!empty($blog_items)): ?>
            <?php foreach ($blog_items as $blogRow): ?>
                <div class="bg-white shadow-lg rounded-lg overflow-hidden transform transition duration-500 hover:scale-105 opacity-0 animate-fade-in-on-scroll">
                    <img src="<?= base_url() . $blogRow->blog_temp_image ?>" 
                         alt="Blog Image" 
                         class="w-full h-40 object-cover lazy" 
                         loading="lazy">
                    <div class="p-4">
                        <h2 class="text-xl font-semibold text-[#e63e58] truncate"><?= $blogRow->blog_heading ?></h2>
                        <p class="text-gray-600 mt-2 text-sm line-clamp-2">
                            <?php 
                                $blog_text = trim($blogRow->blog_text);
                                if (!empty($blog_text)) {
                                    if (strlen($blog_text) > 100) {
                                        $blog_text = substr(strip_tags($blog_text), 0, 100) . '...';
                                    }
                                }
                                echo $blog_text;
                            ?>
                        </p>
                        <div class="mt-4 flex justify-end">
                            <a href="<?= base_url() ?>blog?item=<?= $blogRow->blog_short_name ?>" 
                               class="text-[#e63e58] font-semibold hover:underline inline-flex items-center">
                                Read More 
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-4 h-4 ml-1">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            <?php endforeach ?>
        <?php else: ?>
            <p class="text-gray-500 text-center col-span-full">No blogs available at the moment.</p>
        <?php endif ?>
    </div>
</section>

<style>
@keyframes fade-in {
    from {
        opacity: 0;
        transform: translateY(20px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

.animate-fade-in-on-scroll {
    animation: fade-in 0.8s ease-out forwards;
    will-change: opacity, transform;
    visibility: hidden;
}

.reveal-on-scroll {
    visibility: visible;
}
</style>

<script>
document.addEventListener('DOMContentLoaded', () => {
    const elements = document.querySelectorAll('.animate-fade-in-on-scroll');
    const observer = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                entry.target.classList.add('reveal-on-scroll');
            }
        });
    }, { threshold: 0.1 });

    elements.forEach((el) => observer.observe(el));
});
</script>

<?= $this->endSection() ?>
