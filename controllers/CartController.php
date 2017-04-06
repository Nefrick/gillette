<?php


class CartController
{
    public function actionAdd($id)
    {
        // Добавление товара в корзину
        Cart::addProduct($id);

        //Возвращаем пользователя на страницу
        $referrer = $_SERVER['HTTP_REFERER'];
        header("Location: $referrer");
    }

    public function actionAddAjax($id)
    {
        // Добавляем товар в корзину
        echo Cart::addProduct($id);
        return true;
    }

    public function actionIndex()
    {
        $productsInCart = false;

        //Получим данные из корзины
        $productsInCart = Cart::getProducts();

        if($productsInCart){
            //Получаем полную информацию для списка
            $productsIds = array_keys($productsInCart);
            $products = Product::getProductsByIds($productsIds);

            //Получаем общую стоимость товаров
            $totalPrice = Cart::getTotalPrice($products);
        }

        require_once(ROOT . '/views/cart/index.php');

        return true;
    }
}