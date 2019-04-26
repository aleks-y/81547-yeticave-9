<?php
require('helpers.php');

$is_auth = rand(0, 1);

$user_name = 'Алексей'; // укажите здесь ваше имя

$categories = ['Доски и лыжи', 'Крепления', 'Ботинки', 'Одежда', 'Инструменты', 'Разное'];

$lots = [
    [
        'name' => '2014 Rossignol District Snowboard',
        'category' => 'Доски и лыжи',
        'price' => 10999,
        'img_url' => 'img/lot-1.jpg'
    ],
    [
        'name' => 'DC Ply Mens 2016/2017 Snowboard',
        'category' => 'Доски и лыжи',
        'price' => 159999,
        'img_url' => 'img/lot-2.jpg'
    ],
    [
        'name' => 'Крепления Union Contact Pro 2015 года размер L/XL',
        'category' => 'Крепления',
        'price' => 8000,
        'img_url' => 'img/lot-3.jpg'
    ],
    [
        'name' => 'Ботинки для сноуборда DC Mutiny Charocal',
        'category' => 'Ботинки',
        'price' => 10999,
        'img_url' => 'img/lot-4.jpg'
    ],
    [
        'name' => 'Куртка для сноуборда DC Mutiny Charocal',
        'category' => 'Одежда',
        'price' => 7500,
        'img_url' => 'img/lot-5.jpg'
    ],
    [
        'name' => 'Маска Oakley Canopy',
        'category' => 'Разное',
        'price' => 5400,
        'img_url' => 'img/lot-6.jpg'
    ]
];

/**
 * Функция форматирования цены лота
 *
 * @param float числовое значение цены лота в исходном формате
 *
 * @var string $ruble_letter символ рубля
 * @var float $pricce_rounded округлённое значение цены лота
 *
 * @return string форматированная цена с добавленным символом рубля
 */

function price_format($price) {
    $ruble_letter = '<b class="rub">р</b>';
    $price_rounded = ceil($price);

    if ($price_rounded > 999) {
        $price_formated = number_format($price_rounded, 0, ',', ' ');
    }

    return $price_formated . ' ' . $ruble_letter;
};

$page_content = include_template('index.php', [
    'categories' => $categories,
    'lots' => $lots
]);

$layout_content = include_template('layout.php', [
    'page_title' => 'Главная',
    'categories' => $categories,
    'page_content' => $page_content,
    'is_auth' => $is_auth,
    'user_name' => $user_name
]);

print($layout_content);
?>
