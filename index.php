<?php
require('data.php');
require('helpers.php');
require('functions.php');

$is_auth = rand(0, 1);

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
