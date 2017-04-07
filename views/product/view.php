<?php include(ROOT.'/views/layouts/header.php'); ?>

<body>
<header class="main-head">
    <div class="container">
        <div class="row">

            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="item">
                   <img src="/upload/images/products/<?php echo $product['id'].'.png'; ?>" alt="<?php echo $product['name']; ?>">

                        <div class="p-name">
                            <span><?php echo $product['name']; ?></span>
                        </div>
                        <p><?php echo $product['description']; ?></p>
                    <div class="block-price">
                        <div class="price">
                            <p>Обычная цена</p>
                            <span><?php echo $product['price']; ?></span><span> руб.</span>
                        </div>
                        <div class="sale">
                            <p>Цена сегодня</p>
                            <span><?php echo $product['price_day']; ?></span> <span>руб.</span>
                        </div>
                    </div>
                    <a class="buy" data-id="<?php echo $product['id']; ?>" href="/cart/add/<?php echo $product['id']; ?>">Купить</a>
                </div>
            </div>
        </div>
    </div>
</header>

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

<?php include(ROOT.'/views/layouts/footer.php'); ?>