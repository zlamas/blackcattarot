<?php

$titles = [
    '404' => 'Страница не найдена',
    'amulets' => 'Амулеты',
    'decorations' => 'Магия камней',
    'decorations/tigrovyy-glaz' => 'Тигровый глаз - Магия камней',
    'decorations/agat' => 'Агат - Магия камней',
    'decorations/shungit' => 'Шунгит - Магия камней',
    'decorations/perlamutr' => 'Перламутр - Магия камней',
    'decorations/zhemchug' => 'Жемчуг - Магия камней',
    'mustarot' => 'Музыкальное Таро',
    'order' => 'Сделать заказ',
    'school' => 'Школа Таро',
    'services' => 'Расценки',
    'godovoy' => 'Годовой расклад',
];

$descriptions = [
    'index' => 'Меня зовут Екатерина Нагорная. Я журналист, писатель, психолог и просто женщина с широким кругом общения. Судьба развернула меня и поставила на путь истинный — занялась таро профессионально. Я делаю свой вклад в помощь людям, оказавшимся в сложных жизненных ситуациях.',
];

if (!isset($page)) {
    $page = $_GET['p'];
}

$content_dir = $_SERVER['DOCUMENT_ROOT'].'/content/';

if (!file_exists($content_dir.$page.'.html')) {
    http_response_code(404);
    $page = '404';
}

$title = $titles[$page] ?? '';
$description = $descriptions[$page] ?? '';

require_once $content_dir.'header.php';
require_once $content_dir.$page.'.html';
require_once $content_dir.'footer.php';
