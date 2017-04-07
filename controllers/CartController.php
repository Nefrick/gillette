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

    /**
     * Action для добавления товара в корзину синхронным запросом
     * @param integer $id <p>id товара</p>
     */
    public function actionDelete($id)
    {
        // Удаляем заданный товар из корзины
        Cart::deleteProduct($id);
        // Возвращаем пользователя в корзину
        header("Location: /cart");
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

    /**
     * Action для страницы "Оформление покупки"
     */
    public function actionCheckout()
    {
        // Получием данные из корзины
        $productsInCart = Cart::getProducts();
        // Если товаров нет, отправляем пользователи искать товары на главную

        if ($productsInCart == false) {
            header("Location: /");
        }

        // Находим общую стоимость
        $productsIds = array_keys($productsInCart);
        $products = Product::getProductsByIds($productsIds);
        $totalPrice = Cart::getTotalPrice($products);

        // Количество товаров
        $totalQuantity = Cart::countItems();

        // Поля для формы

        $userName = false;
        $userPhone = false;
        $userComment = false;

        // Статус успешного оформления заказа
        $result = false;

        $userId = false;

        // Обработка формы
        if (isset($_POST['submit'])) {
            // Если форма отправлена
            // Получаем данные из формы
            $userName = $_POST['userName'];
            $userPhone = $_POST['userPhone'];
            $userComment = $_POST['userComment'];
            // Флаг ошибок
            $errors = false;
            // Валидация полей
            if (!User::checkName($userName)) {
                $errors[] = 'Неправильное имя';
            }
            if (!User::checkPhone($userPhone)) {
                $errors[] = 'Неправильный телефон';
            }
            if ($errors == false) {
                // Если ошибок нет
                // Сохраняем заказ в базе данных
                $result = Order::save($userName, $userPhone, $userComment, $userId, $productsInCart);
                if ($result) {
                    // Если заказ успешно сохранен
                    // Оповещаем администратора о новом заказе по почте
                    $adminEmail = 'it.nefrick@gmail.com';
                    $message = '<a href="http://digital-mafia.net/admin/orders">Список заказов</a>';
                    $subject = 'Новый заказ!';
                    mail($adminEmail, $subject, $message);
                    // Очищаем корзину
                    Cart::clear();
                }
            }
        }
        // Подключаем вид
        require_once(ROOT.'/views/cart/checkout.php');
        return true;
    }
}