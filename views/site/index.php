
<?php include(ROOT.'/views/layouts/header.php'); ?>

<body>

<header class="main-head" style="background-image: url(/template/img/header_bg.png);">
    <div class="container">
        <div class="row">
            <div class="col-md-12 title">
                <h1>Сменные кассеты для бритья Gillette</h1>
                <h3>Ревоюционное бритье без раздражения</h3>
            </div>
            <div class="stock col-md-6 col-xs-7">
                <h3>Оригинальные кассеты Gillette по выгодной цене</h3>
                <h2>Акция! Скидки до -53%!</h2>

                <div class="tail-arrow">
                    <div class="tail"></div>
                    <div class="arrow"></div>
                </div>

                <a class="choise" href="#">Выбрать свой Gillette</a>
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


<section class="product-list">

    <div class="container">

        <div class="row">

            <h2>Каталог товаров</h2>

            <?php foreach ($latestProducts as $product): ?>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="item">
                        <a href="/product/<?php echo $product['id']; ?>"> <img src="/template/img/products/<?php echo $product['image']; ?>" alt="product">

                        <div class="p-name">
                            <span><?php echo $product['name']; ?></span>
                        </div>
                        </a>
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
            <?php endforeach; ?>

        </div>

</section>

<!-- End product-list -->
<!-- Testemonials -->
<section class="slider-comment">
    <div class="container">
        <div class="row">
            <h2>Что о нас говорят довольные покупатели</h2>
            <div class="slider owl-carousel owl-theme">

                <div class="slide">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-10 col-md-offset-1">
                                <div class="col-md-3">
                                    <div class="img-wrap">
                                        <img src="/template/img/face.jpg" alt="Review">
                                    </div>
                                </div>
                                <div class="col-md-9">
                                    <div class="slide-descr">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="slide">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-10 col-md-offset-1">
                                <div class="col-md-3">
                                    <div class="img-wrap">
                                        <img src="/template/img/face.jpg" alt="Review">
                                    </div>
                                </div>
                                <div class="col-md-9">
                                    <div class="slide-descr">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="slide">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-10 col-md-offset-1">
                                <div class="col-md-3">
                                    <div class="img-wrap">
                                        <img src="/template/img/face.jpg" alt="Review">
                                    </div>
                                </div>
                                <div class="col-md-9">
                                    <div class="slide-descr">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="slide">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-10 col-md-offset-1">
                                <div class="col-md-3">
                                    <div class="img-wrap">
                                        <img src="/template/img/face.jpg" alt="Review">
                                    </div>
                                </div>
                                <div class="col-md-9">
                                    <div class="slide-descr">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="slide">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-10 col-md-offset-1">
                                <div class="col-md-3">
                                    <div class="img-wrap">
                                        <img src="/template/img/face.jpg" alt="Review">
                                    </div>
                                </div>
                                <div class="col-md-9">
                                    <div class="slide-descr">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="slide">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-10 col-md-offset-1">
                                <div class="col-md-3">
                                    <div class="img-wrap">
                                        <img src="/template/img/face.jpg" alt="Review">
                                    </div>
                                </div>
                                <div class="col-md-9">
                                    <div class="slide-descr">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
</section>

<?php include(ROOT.'/views/layouts/footer.php'); ?>