<?php


class Cart
{
    public static function addProduct($id)
    {
        $id = intval($id);

        // empty array for product in cart

        $productsInCart = array();

        // Если в корзине есть товар то он хранится в сессии
        if (isset($_SESSION['products'])){
            // То заполним наш массив товарами
            $productsInCart = $_SESSION['products'];
        }

        // Если товар есть в корзине, но был добавлен еще раз, увеличиваем количество
        if(array_key_exists($id, $productsInCart)){
            $productsInCart[$id]++;
        } else {
            // Добавление нового товара в корзину
            $productsInCart[$id] = 1;
        }

        $_SESSION['products'] = $productsInCart;

        return self::countItems();
    }

    /**
     * Подсчет количества товаров в корзине (в сессии)
     * @return int
     */
    public static function countItems()
    {
        if(isset($_SESSION['products'])){
            $count = 0;
            foreach ($_SESSION['products'] as $id => $quantity) {
                $count = $count + $quantity;
            }
            return $count;
        } else {
            return 0;
        }
    }



    public static function getProducts()
    {
        if(isset($_SESSION['products'])){
            return $_SESSION['products'];
        }
        return false;
    }

    public static function getTotalPrice($products)
    {
        $productsInCart = self::getProducts();

        $total = 0;

        if($productsInCart){
            foreach ($products as $item){
                $total += $item['price_day'] * $productsInCart[$item['id']] ;
            }
        }
        return $total;
    }
}