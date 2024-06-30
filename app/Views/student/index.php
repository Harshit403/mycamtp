<?= $this->extend('student/layout/layout') ?>
<?=$this->section('content')?>
  <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel" style="margin-top: 79px;">
      <div class="carousel-inner">
        <div class="carousel-item active" data-bs-interval="5000">
          <img src="<?=base_url()?>carousel/assets/img.jpg" class="d-block w-100 imgClass" alt="...">
        </div>
        <div class="carousel-item" data-bs-interval="5000">
          <img src="<?=base_url()?>carousel/assets/img.jpg" class="d-block w-100 imgClass" alt="...">
        </div>
        <div class="carousel-item">
          <img src="<?=base_url()?>carousel/assets/img.jpg" class="d-block w-100 imgClass" alt="...">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
  </div>
    <section class="header-text container py-3" id="intro-section">
        <h1 class="text-uppercase text-center">The Key of <font class="text-success">success</font></h1>
        <p class= "py-2 px-1" style="background-color: #F1F0FE;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    </section>
 <!--  <section class="py-5 category container" id="category-section">
        <h1 class="text-uppercase text-center">Category</h1>
        <div class="d-flex align-items-center justify-content-center flex-wrap" style="gap:10px 20px;">
          <?php if (!empty($categoryDetails)): ?>
              <?php foreach ($categoryDetails as $categoryRow): ?>
                  <a class="strached-link" href="<?=base_url()?>level?category=<?=$categoryRow->category_short_name?>" style="text-decoration: none;"><div class="card">
                      <h2><?=$categoryRow->category_name?></h2>
                  </div></a>
              <?php endforeach ?>
          <?php endif ?>
        </div>
    </section> -->


<section class="py-3 category container" id="category-section">
    <h1 class="text-uppercase text-center">Category</h1>
    <div id="category-parent" class="d-flex align-items-center justify-content-center flex-wrap" style="gap:10px 20px;">
        <?php if (!empty($categoryDetails)): ?>
            <?php foreach ($categoryDetails as $categoryRow): ?>
                <a class="category-link stretched-link" href="<?=base_url()?>level?category=<?=$categoryRow->category_short_name?>" style="text-decoration: none;">
                    <div class="category-child">
                        <div class="category-card">
                            <div class="category-card-content">
                                <?=$categoryRow->category_name?>
                            </div>
                        </div>
                    </div>
                </a>
            <?php endforeach ?>
        <?php endif ?>
    </div>
</section>



<style> 

/* Parent class for the container */
#category-parent {
    display: flex;
    align-items: center;
    justify-content: center;
    flex-wrap: wrap;
    gap: 25px 0px;
}

/* Child class for each card */
#category-parent .category-child {
    position: relative;
    display: flex;
    justify-content: center;
    align-items: center;
}

/* Card class */
#category-parent .category-card {
    width: 360px; /* Card width */
    height: 80px; /* Card height */
    background: #6451CE; /* Card background color */
    border-radius: 15px; /* Card border radius */
    display: flex;
    justify-content: center;
    align-items: center;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    transition: transform 0.2s ease-in-out;
}

#category-parent .category-card:hover {
    transform: scale(1.05);
}

/* Content class */
#category-parent .category-card-content {
    font-size: 1.5em; /* Reduced font size */
    color: white;
    font-weight: bold;
}

/* Pulse effect for the card */
#category-parent .category-child::before {
    content: "";
    position: absolute;
    top: 50%;
    left: 50%;
    width: 340px; /* Width of the pulse effect */
    height: 90px; /* Height of the pulse effect */
    background: rgba(100, 81, 206, 0.4); /* Pulse effect color */
    border-radius: 15px; /* Border radius to match the card */
    transform: translate(-50%, -50%);
    animation: pulse 2s infinite;
    z-index: -1;
}

@keyframes pulse {
    0% {
        transform: translate(-50%, -50%) scale(1);
        opacity: 1;
    }
    100% {
        transform: translate(-50%, -50%) scale(1.2);
        opacity: 0;
    }
}



</style>






    <section class="py-5 container" id="content-section">
        <h1 class="text-center text-uppercase">Our Goals</h1>
        <div class="row">
            <div class="col-md-8">
                <nav>
                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                        <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Home</button>
                        <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Profile</button>
                        <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Contact</button>
                    </div>
                </nav>
                <div class="tab-content" id="nav-tabContent">
                  <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab" tabindex="0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                  consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                  cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                  proident, sunt in culpa qui officia deserunt mollit anim id est laborum.1</div>
                  <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab" tabindex="0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                  consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                  cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                  proident, sunt in culpa qui officia deserunt mollit anim id est laborum.2</div>
                  <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab" tabindex="0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                  consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                  cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                  proident, sunt in culpa qui officia deserunt mollit anim id est laborum.3</div>
                </div>
            </div>
            <div class="col-md-4">
                <img src="<?=base_url()?>/assetItems/image/image2.jpg" class="img-thumbnail" style="width: 400px;">
            </div>
        </div>
    </section>
    <section class="py-5 container" id="faq-section">
        <h1 class="text-uppercase text-center">FAQ</h1>
        <div class="row">
            <div class="col-md-6">
                <div class="accordion accordion-flush" id="accordionFlushExample">
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingOne">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                        Accordion Item #1
                      </button>
                    </h2>
                    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                      <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the first item's accordion body.</div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingTwo">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                        Accordion Item #2
                      </button>
                    </h2>
                    <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                      <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the second item's accordion body. Let's imagine this being filled with some actual content.</div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingThree">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                        Accordion Item #3
                      </button>
                    </h2>
                    <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                      <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion body. Nothing more exciting happening here in terms of content, but just filling up the space to make it look, at least at first glance, a bit more representative of how this would look in a real-world application.</div>
                    </div>
                  </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="accordion accordion-flush" id="accordionFlushExample1">
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingOne1">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne1" aria-expanded="false" aria-controls="flush-collapseOne1">
                        Accordion Item #1
                      </button>
                    </h2>
                    <div id="flush-collapseOne1" class="accordion-collapse collapse" aria-labelledby="flush-headingOne1" data-bs-parent="#accordionFlushExample1">
                      <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the first item's accordion body.</div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingTwo1">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo1" aria-expanded="false" aria-controls="flush-collapseTwo1">
                        Accordion Item #2
                      </button>
                    </h2>
                    <div id="flush-collapseTwo1" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo1" data-bs-parent="#accordionFlushExample1">
                      <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the second item's accordion body. Let's imagine this being filled with some actual content.</div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingThree1">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree1" aria-expanded="false" aria-controls="flush-collapseThree">
                        Accordion Item #3
                      </button>
                    </h2>
                    <div id="flush-collapseThree1" class="accordion-collapse collapse" aria-labelledby="flush-headingThree1" data-bs-parent="#accordionFlushExample1">
                      <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion body. Nothing more exciting happening here in terms of content, but just filling up the space to make it look, at least at first glance, a bit more representative of how this would look in a real-world application.</div>
                    </div>
                  </div>
                </div>
            </div>
        </div>
    </section>
    <section class="py-5 container" id="blog-section">
        <h1 class="text-uppercase text-center">Blogs</h1>
        <div class="row">
            <?php if (!empty($blog_list)): ?>
              <?php foreach ($blog_list as $blogRow): ?>
                <div class="col-sm-3">
                    <div class="card">
                        <img src="<?=base_url().$blogRow->blog_temp_image?>" class="card-img-top" alt="blog items image">
                      <div class="card-body">
                        <h5 class="card-title"><?=$blogRow->blog_heading?></h5>
                        <?php
                          $blogText = '';
                          if (!empty($blogRow->blog_text)) {
                            $blogText = strip_tags($blogRow->blog_text);
                          }
                          $blogText = strlen($blogText) > 20  ? substr($blogText, 0,20).'...' : $blogText;
                        ?>
                        <p class="card-text"><?=$blogText?></p>
                        <a href="<?=base_url()?>blog?item=<?=$blogRow->blog_short_name?>" class="btn btn-custom">Read More <i class="bi bi-arrow-right"></i></a>
                      </div>
                    </div>
                </div>
              <?php endforeach ?>
            <?php endif ?>
            
        </div>
        <?php if (!empty($blog_list) && count($blog_list) > 4): ?>
          <div class="row mt-2">
              <div class="col-md-12 d-flex justify-content-end">
                  <a href="<?=base_url()?>blog-list" class="btn btn-sm btn-custom">View More <i class="bi bi-arrow-right"></i></a>
              </div>
          </div>
        <?php endif ?>
    </section>
    <section class="py-5 container" id="testimonial-screen">
        <h1 class="text-uppercase text-center">TESTIMONIALS</h1>
        <div>
          <div id="carouselExampleDark" class="carousel carousel-dark slide">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active" data-bs-interval="10000">
                <img src="<?=base_url()?>assetItems/image/image1.jpg" class="d-block w-100" alt="..." style="height: 300px;">
              </div>
              <div class="carousel-item" data-bs-interval="2000">
                <img src="<?=base_url()?>assetItems/image/image2.jpg" class="d-block w-100" alt="..." style="height: 300px;">
              </div>
              <div class="carousel-item">
                <img src="<?=base_url()?>assetItems/image/image3.jpg" class="d-block w-100" alt="..." style="height: 300px;">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        </div>
    </section>
    <section class="py-5 container" id="contact-section">
        <h1 class="text-center text-uppercase">Contact Us</h1>
        <div class="row">
            <div class="col-md-6">
                <div class="row address-container">
                    <div class="col-md-6 mb-4">
                        <div class="card" style="background: #fafbff;border: none;height:14rem;">
                            <div class="card-body">
                                <h2><i class="bi bi-geo-alt"></i></h2>
                                <h4>Address</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card" style="background: #fafbff;border: none;height:14rem;">
                            <div class="card-body">
                                <h2><i class="bi bi-telephone"></i></h2>
                                <h4>Call Us</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mt-4">
                        <div class="card" style="background: #fafbff;border: none;height:14rem;">
                            <div class="card-body">
                                <h2><i class="bi bi-envelope"></i></h2>
                                <h4>Email</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 my-4">
                        <div class="card" style="background: #fafbff;border: none;height:14rem;">
                            <div class="card-body">
                                <h2><i class="bi bi-clock"></i></h2>
                                <h4>Open Hours</h4>
                                <p>We are available 24*7</p>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
            <div class="col-md-6 mb-4" style="background:#fafbff">
                <div class="d-flex align-items-center justify-content-center">
                    <div class="row pt-3">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" id="name" placeholder="Your Name" class="form-control form-control-sm">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="email" id="email" placeholder="Your Email" class="form-control form-control-sm">
                            </div>
                        </div>
                        <div class="col-md-12 mt-2">
                            <div class="form-group">
                                <input type="text" id="email" placeholder="Subject" class="form-control form-control-sm">
                            </div>
                        </div>
                        <div class="col-md-12 mt-2">
                            <textarea class="form-control" name="message" id="message" rows="6" placeholder="Message" required=""></textarea>
                        </div>
                        <div class="col-md-12 text-center mt-2">
                            <a href="javascript:void(0)" class="btn btn-custom btn-sm">Send Message</a>
                        </div>
                    </div>
                </div>
               
            </div>
        </div>
    </section>
<?= $this->endSection() ?>
<?=$this->section('jsContent')?>
<?= $this->endSection() ?>
