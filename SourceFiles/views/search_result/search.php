<?php include ROOT . '/views/layouts/header.php'; ?>
<div class="container">
        <div class="col-sm-9 padding-right">
            <div class="features_items"><!--features_items-->
                <h2 class="title text-center">Результаты поиска</h2>

                <?php foreach ($searchProducts as $prod): ?>
                    <div class="col-sm-4">
                        <div class="product-image-wrapper">
                            <div class="single-products">
                                <div class="productinfo text-center">
                                    <img src="<?php echo Product::getImage($prod['id']); ?>" alt="" />
                                    <h2><?php echo $prod['price'];?>$</h2>
                                    <p>
                                        <a href="/product/<?php echo $prod['id'];?>">
                                            <?php echo $prod['name'];?>
                                        </a>
                                    </p>
                                    <a href="#" class="btn btn-default add-to-cart" data-id="<?php echo $prod['id']; ?>"><i class="fa fa-shopping-cart"></i>В корзину</a>
                                </div>
                                <?php if ($prod['is_new']): ?>
                                    <img src="/template/images/home/new.png" class="new" alt="" />
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                <?php endforeach;?>

            </div><!--features_items-->
            <?php echo $pagination->get(); ?>
        </div>
        </div>
<?php include ROOT . '/views/layouts/footer.php'; ?>
