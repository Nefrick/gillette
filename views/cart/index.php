<?php include(ROOT.'/views/layouts/header.php'); ?>
<body>

<nav class="main-nav">
    <div class="container">
        <div class="row">

            <!-- Logo -->
            <div class="col-lg-2 col-sm-3 hidden-xs">
                <a href="/" class="logo"><img src="/template/img/logo.png" alt="Logo Gillette"></a>
            </div>

            <!-- Contact Cart -->
            <div class="col-lg-5 col-sm-9 col-xs-12 col-lg-push-5">
                <div class="contact">
                    <a class="phone" href="tel:+79167200011"><img src="/template/img/phone.png" alt="phone"> +7-916-720-00-11</a>
                </div>
                <a href="#" class="toggle-mnu hidden-lg"><span></span></a>
                <div class="cart">
                    <a href="/cart">
                        <p>Товаров в корзине: <span id="cart-count"><?php echo Cart::countItems(); ?></span></p>
                    </a>
                </div>
            </div>
            <!-- Menu -->
            <div class="col-lg-5 col-md-12 col-lg-pull-5">
                <nav class="top-mnu">
                    <ul>
                        <li class="active"><a href="#">Каталог</a></li>
                        <li><a href="#">Оплата и Доставка</a></li>
                        <li><a href="#">Отзывы</a></li>
                        <li><a class="vk" href="#"><img src="/template/img/vk.png" alt="vk"></a></li>
                    </ul>
                </nav>
            </div>


        </div>
    </div>
</nav>
    <section>
        <div class="container">
            <div class="row">

                <div class="col-sm-12 padding-right">
                    <div class="features_items">
                        <h2 class="title text-center">Корзина</h2>

                        <?php if ($productsInCart): ?>
                            <p>Вы выбрали такие товары:</p>
                            <table class="table-bordered table-striped table">
                                <tr>
                                    <th>Код товара</th>
                                    <th>Название</th>
                                    <th>Стомость, руб</th>
                                    <th>Количество, шт</th>
                                    <th>Удалить</th>
                                </tr>
                                <?php foreach ($products as $product): ?>
                                    <tr>
                                        <td><?php echo $product['code'];?></td>
                                        <td>
                                            <a href="/product/<?php echo $product['id'];?>">
                                                <?php echo $product['name'];?>
                                            </a>
                                        </td>
                                        <td><?php echo $product['price_day'];?></td>
                                        <td><?php echo $productsInCart[$product['id']];?></td>
                                        <td>
                                            <a href="/cart/delete/<?php echo $product['id'];?>">
                                                <i class="fa fa-times">X</i>
                                            </a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                                <tr>
                                    <td colspan="3">Общая стоимость:</td>
                                    <td><?php echo $totalPrice;?></td>
                                </tr>

                            </table>
                            <a class="btn btn-default checkout" href="/cart/checkout"><i class="fa fa-shopping-cart"></i> Оформить заказ</a>
                        <?php else: ?>
                            <p>Корзина пуста</p>
                            <a class="btn btn-default checkout" href="/"><i class="fa fa-shopping-cart"></i> Вернуться к покупкам</a>
                        <?php endif; ?>

                    </div>

                </div>
            </div>
        </div>
    </section>

<?php include ROOT . '/views/layouts/footer.php'; ?>