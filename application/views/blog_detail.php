<?php
require_once('inc/head-blog.php');
require_once('inc/header.php');
?>

<!-- Section -->
<div class="section py-5">
    <div class="container py-5">
        <div class="row">
            <!-- Main Blog Content -->
            <div class="col-md-8 mb-4">
                <?php foreach ($d as $res) { ?>
                    <div class="post-content">
                        <h2 class="display-4 text-primary"><?= $res['title']; ?></h2>
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
                    <div class="section-title">
                        <h2 class="title h3">Latest Posts</h2>
                    </div>
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

                <!-- Advertisement Widget -->
                <div class="aside-widget text-center mb-4">
                    <a href="#">
                        <img class="img-fluid" src="<?= base_url(); ?>assets/img/ad-1.jpg" alt="Advertisement">
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

</div>

<?php
require_once('inc/footer.php');
?>