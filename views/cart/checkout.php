<?php include ROOT . '/views/layouts/header.php'; ?>

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


                    <?php if ($result): ?>
                        <p>Заказ оформлен. Мы Вам перезвоним.</p>
                    <?php else: ?>

                        <p>Выбрано товаров: <?php echo $totalQuantity; ?>, на сумму: <?php echo $totalPrice; ?>, руб.</p><br/>

                        <?php if (!$result): ?>

                            <div class="col-sm-4">
                                <?php if (isset($errors) && is_array($errors)): ?>
                                    <ul>
                                        <?php foreach ($errors as $error): ?>
                                            <li> - <?php echo $error; ?></li>
                                        <?php endforeach; ?>
                                    </ul>
                                <?php endif; ?>

                                <p>Для оформления заказа заполните форму. Наш менеджер свяжется с Вами.</p>

                                <div class="login-form">
                                    <form action="#" method="post">

                                        <p>Ваша имя</p>
                                        <input type="text" name="userName" placeholder="" value="<?php echo $userName; ?>"/>

                                        <p>Номер телефона</p>
                                        <input type="text" name="userPhone" placeholder="" value="<?php echo $userPhone; ?>"/>

                                        <p>Комментарий к заказу</p>
                                        <input type="text" name="userComment" placeholder="Сообщение" value="<?php echo $userComment; ?>"/>

                                        <br/>
                                        <br/>
                                        <input type="submit" name="submit" class="btn btn-default" value="Оформить" />
                                    </form>
                                </div>
                            </div>

                        <?php endif; ?>

                    <?php endif; ?>

                </div>

            </div>
        </div>
    </div>
</section>

<?php include ROOT . '/views/layouts/footer.php'; ?>
