<?php
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

/**
 * Функция генерации статуса авторизации.
 *
 * @return integer статус авторизации
 */

function auth_status() {
    return $is_auth = rand(0, 1);
};

/**
 * Функция определения времени до конца аукциона (условно определено время жизни каждого лота до полуночи).
 *
 * var $current_time текущая дата и время в формате unixtime
 * var $midnight дата и время полуночи следующего дня в формате unixtime
 * var $diff время до полуночи в формате unixtime
 *
 * @return integer секундах до конца аукциона
 */

function time_until_midnight() {
    $current_time = strtotime('now');
    $midnight = strtotime('tomorrow midnight');

    $diff = $midnight - $current_time;

    return $diff;
};
?>
