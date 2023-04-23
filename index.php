<?php require 'inc/data/products.php'; ?>
<?php require 'inc/head.php'; ?>

<?php

if (isset($_GET['add_to_cart'])) {
    $_SESSION['cart'][] = $_GET['add_to_cart'];
}

?>

<section class="cookies container-fluid">
    <div class="row">
        <?php foreach ($catalog as $id => $cookie) { ?>
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
            <figure class="thumbnail text-center">
                <img src="assets/img/product-<?= $id; ?>.jpg" alt="<?= $cookie['name']; ?>" class="img-responsive">
                <figcaption class="caption">
                    <h3><?= $cookie['name']; ?></h3>
                    <p><?= $cookie['description']; ?></p>
                    <form method="post" action="?add_to_cart=<?= $id; ?>">
                        <input type="number" name="quantity" value="1" min="1">
                        <button type="submit" class="btn btn-primary">
                            <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Ajouter au panier
                        </button>
                    </form>
                </figcaption>
            </figure>
        </div>
        <?php } ?>
    </div>
</section>
<?php require 'inc/foot.php'; ?>