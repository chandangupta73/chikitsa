<?php
require_once('inc/head-blog.php');
require_once('inc/header.php');
?>

<div class="banner-img">
  <img src="<?= base_url() ?>assets/img/blog.png" alt="Banner Image" />
</div>

<!-- Section -->
<div class="section">
    <div class="container py-5">
        <div class="row">
            <!-- Main Blog Content -->
            <div class="col-md-8 mb-4">
                <?php foreach ($d as $res) { ?>
                    <div class="post-content">
                        <h2 style="font-size: 35px;" class="display-4 text-primary"><?= $res['title']; ?></h2>
                        <figure class="my-4">
                            <img src="<?= base_url(); ?>uploads/blog/<?= $res['imgPath']; ?>" class="img-fluid rounded"
                                alt="<?= $res['title']; ?>">
                        </figure>
                        <p class="lead text-muted"><?= $res['msg']; ?></p>
                    </div>
                <?php } ?>
            </div>

            <!-- Sidebar -->
            <div class="col-md-4">
                <!-- Latest Posts Widget -->
                <div class="aside-widget mb-4">
                    <?php foreach ($latest as $res) { ?>
                        <div class="post-widget mb-3">
                            <a class="post-img" href="<?= base_url() . $res['slug']; ?>">
                                <img src="<?= base_url(); ?>uploads/blog/<?= $res['imgPath']; ?>" class="img-fluid rounded"
                                    alt="<?= $res['title']; ?>">
                            </a>
                            <div class="post-body">
                                <div class="post-category">
                                    <a href="<?= base_url() . $res['slug']; ?>"
                                        class="badge badge-primary"><?= $res['cat']; ?></a>
                                </div>
                                <h5 class="post-title">
                                    <a href="<?= base_url() . $res['slug']; ?>"
                                        class="text-dark"><?= substr($res['title'], 0, 65) . (strlen($res['title']) > 65 ? '...' : '') ?></a>
                                </h5>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>


<?php
require_once('inc/footer.php');
?>