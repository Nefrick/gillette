<?php
return array(
    'product/([0-9]+)'      => 'product/view/$1',   // actionIndex в CatalogController
    'cart/add/([0-9]+)'     => 'cart/add/$1',       // actionAdd   в CartController
    'cart/addAjax/([0-9]+)' => 'cart/addAjax/$1',   // actionAdd   в CartController
    'cart'                  => 'cart/index',        // actionIndex в CartController
    ''                      => 'site/index'         // actionIndex в SiteController
);