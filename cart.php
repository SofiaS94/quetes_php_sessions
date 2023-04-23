<?php require 'inc/head.php'; ?>
<?php require 'inc/data/products.php'; ?>
<section class="cookies container-fluid">
    <div class="row">
        <?php
        foreach ($_SESSION['cart'] as $cookie) { ?>

        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
            <figure class="thumbnail text-center">
                <img src="assets/img/product-<?= $cookie; ?>.jpg" alt="<?= $catalog[$cookie]['name']; ?>"
                    class="img-responsive">
                <figcaption class="caption">
                    <h3><?= $catalog[$cookie]['name']; ?></h3>
                    <p><?= $catalog[$cookie]['description']; ?></p>

                </figcaption>
            </figure>
        </div>
        <?php }
        ?>
    </div>
</section>
<?php require 'inc/foot.php'; ?>