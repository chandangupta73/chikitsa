<?php
require_once("inc/head.php");
require_once("inc/header.php");
?>
<div class="banner-img">
    <img src="<?= base_url() ?>assets/img/blog.png" alt="Banner Image" />
</div>
<div id="content" class="site-content py-5">
    <!-- Blog Section -->
    <div class="section">
        <div class="container">
            <div class="row mt-5">
                <!-- Main Blog Posts -->
                <div class="col-md-8 mb-4">
                    <?php foreach ($d1 as $res) { ?>
                        <div class="post post-row mb-4">
                            <a class="post-img" href="<?= base_url() . $res['slug']; ?>">
                                <img src="<?= base_url(); ?>uploads/blog/<?= $res['imgPath']; ?>" class="img-fluid rounded"
                                    alt="<?= $res['title']; ?>">
                            </a>
                            <div class="post-body my-3">
                                <div class="post-category">
                                    <a href="<?= base_url() . $res['slug']; ?>"
                                        class="badge badge-primary"><?= $res['cat']; ?></a>
                                </div>
                                <h3 class="post-title mt-3" style="font-size: 24px;">
                                    <a style="color: #4b3d74;"
                                        href="<?= base_url() . $res['slug']; ?>"><?= substr($res['title'], 0, 66); ?></a>
                                </h3>
                                <ul class="post-meta" style="color: #4b3d74;">
                                    <li><a style="color: #4b3d74;"
                                            href="<?= base_url() . $res['slug']; ?>"><?= $res['name']; ?></a></li>
                                    <li><?= $res['date']; ?></li>
                                </ul>
                                <p><?= substr($res['msg'], 0, 350); ?> ...</p>
                            </div>
                        </div>
                    <?php } ?>
                    <!-- Pagination -->
                    <div class="site-pagination text-center">
                        <div class="block-27">
                            <ul class="pagination justify-content-center">
                                <li><?php echo $this->pagination->create_links(); ?></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Sidebar -->
                <div class="col-md-4">
                    <!-- Latest Posts Widget -->
                    <div class="aside-widget mb-4">
                        <?php foreach ($latest as $res) { ?>
                            <div class="post post-widget mb-3">
                                <a class="post-img" href="<?= base_url() . $res['slug']; ?>">
                                    <img src="<?= base_url(); ?>uploads/blog/<?= $res['imgPath']; ?>"
                                        class="img-fluid rounded" alt="<?= $res['title']; ?>">
                                </a>
                                <div class="post-body mt-3">
                                    <div class="post-category ">
                                        <a href="<?= base_url() . $res['slug']; ?>"
                                            class="badge badge-primary"><?= $res['cat']; ?></a>
                                    </div>
                                    <h5 class="post-title mt-3">
                                        <a href="<?= base_url() . $res['slug']; ?>"
                                            class="text-dark"><?= substr($res['title'], 0, 65); ?></a>
                                    </h5>
                                </div>
                            </div>
                        <?php } ?>
                    </div>

                    <!-- Advertisement Widget -->
                    <!-- <div class="aside-widget text-center mb-4">
                        <a href="#" class="d-block">
                            <img class="img-fluid" src="<?= base_url(); ?>assets/img/ad-1.jpg" alt="Advertisement">
                        </a>
                    </div> -->
                </div>
            </div>
        </div>
    </div>

    <!-- Section with Ads -->
    <!-- <div class="section py-5 bg-light">
        <div class="container text-center">
            <a href="#" class="d-block mb-4">
                <img class="img-fluid" src="<?= base_url(); ?>assets/img/ad-2.jpg" alt="Advertisement">
            </a>
        </div>
    </div> -->

    <!-- Popular Posts Section -->
    <div class="section py-5">
        <div class="container">
            <div class="row">
                <?php foreach ($popular as $res) { ?>
                    <div class="col-md-4 mb-4">
                        <div class="post post-widget">
                            <a class="post-img" href="<?= base_url() . $res['slug']; ?>">
                                <img src="<?= base_url(); ?>uploads/blog/<?= $res['imgPath']; ?>" class="img-fluid rounded"
                                    alt="<?= $res['title']; ?>">
                            </a>
                            <div class="post-body mt-3">
                                <div class="post-category">
                                    <a href="<?= base_url() . $res['slug']; ?>"
                                        class="badge badge-primary"><?= $res['cat']; ?></a>
                                </div>
                                <h5 class="post-title mt-3">
                                    <a href="<?= base_url() . $res['slug']; ?>"
                                        class="text-dark"><?= substr($res['title'], 0, 75); ?></a>
                                </h5>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>
<style>
    .badge-primary {
        color: #fff;
        background-color: var(--bs-primary) !important;
        padding: 7px;
    }

    .page-item.active .page-link {
        z-index: 3;
        color: #fff;
        background-color: #4b3d74;;
        border-color: #4b3d74;;
    }

    .page-link {
        color: #4b3d74;;
    }
</style>
<?php require_once("inc/footer.php"); ?>