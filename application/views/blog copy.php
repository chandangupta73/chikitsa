<?php
require_once("inc/head.php");
require_once("inc/header.php");
?>

<!-- View: blog_view.php -->

<div class="container-fluid blog py-5">
    <div class="container py-5">
        <div class="section-title mb-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="sub-style">
                <h4 class="sub-title px-3 mb-0">Our Blog</h4>
            </div>
            <h1 class="display-3 mb-4">
                Excellent Facility and High Quality Therapy
            </h1>
            <p class="mb-0">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat
                deleniti amet at atque sequi quibusdam cumque itaque repudiandae
                temporibus, eius nam mollitia voluptas maxime veniam necessitatibus
                saepe in ab? Repellat!
            </p>
        </div>
        <div class="row g-4 justify-content-center">
            <?php foreach ($latest as $blog): ?>
                <div class="col-md-6 col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="blog-item rounded">
                        <div class="blog-img">
                            <img src="<?= base_url() ?>uploads/blog/<?= $blog['imgPath']; ?>" class="img-fluid w-100"
                                alt="Image" />
                        </div>
                        <div class="blog-content p-4">
                            <div class="d-flex justify-content-between mb-4">
                                <p class="mb-0 text-muted">
                                    <i class="fa fa-calendar-alt text-primary"></i>
                                    <?= date('d M Y', strtotime($blog['date'])); ?>
                                </p>
                                <a href="#" class="text-muted"><span class="fa fa-comments text-primary"></span> 3
                                    Comments</a>
                            </div>
                            <a href="<?= base_url('' . $blog['slug']); ?>" class="h4"><?= $blog['title']; ?></a>
                            <p class="my-4"><?= substr($blog['msg'], 0, 100); ?>...</p>
                            <a href="<?= base_url('' . $blog['slug']); ?>"
                                class="btn btn-primary rounded-pill text-white py-2 px-4 mb-1">Read More</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <!-- Pagination -->
        <div class="pagination">
            <?= $this->pagination->create_links(); ?>
        </div>
        <!-- <div class="margin">
            <div class="l-12 site-pagination">
                <div class="col text-center">
                    <div class="block-27">
                        <ul>
                            <li><?php echo $this->pagination->create_links(); ?></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div> -->
    </div>
</div>


