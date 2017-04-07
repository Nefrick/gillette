<?php
return array(
    'product/([0-9]+)'      => 'product/view/$1',   // actionIndex  в CatalogController
    'cart/add/([0-9]+)'     => 'cart/add/$1',       // actionAdd    в CartController
    'cart/addAjax/([0-9]+)' => 'cart/addAjax/$1',   // actionAdd    в CartController
    'cart/checkout'         => 'cart/checkout',     // actionAdd    в CartController
    'cart/delete/([0-9]+)'  => 'cart/delete/$1',    // actionDelete в CartController
    'cart'                  => 'cart/index',        // actionIndex  в CartController
    // Пользователь:
    'user/login' => 'user/login',
    // Управление товарами:
    'admin/product/create'          => 'adminProduct/create',
    'admin/product/update/([0-9]+)' => 'adminProduct/update/$1',
    'admin/product/delete/([0-9]+)' => 'adminProduct/delete/$1',
    'admin/product'                 => 'adminProduct/index',
    // Управление заказами:
    'admin/order/update/([0-9]+)' => 'adminOrder/update/$1',
    'admin/order/delete/([0-9]+)' => 'adminOrder/delete/$1',
    'admin/order/view/([0-9]+)' => 'adminOrder/view/$1',
    'admin/order' => 'adminOrder/index',
    // Админпанель:
    'admin' => 'admin/index',
    '' => 'site/index'         // actionIndex  в SiteController
);