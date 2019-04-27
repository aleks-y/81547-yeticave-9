<?php
require('data.php');
require('helpers.php');

$is_auth = rand(0, 1);

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
