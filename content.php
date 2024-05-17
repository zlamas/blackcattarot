<?php

if (!isset($page)) {
	$page = $_GET['p'];
}
$content_dir = $_SERVER['DOCUMENT_ROOT'].'/content/';

if (!file_exists($content_dir.$page.'.html')) {
	http_response_code(404);
	$page = '404';
}

switch ($page) {
	case 'main':
		$description = 'Меня зовут Екатерина Нагорная. Я журналист, писатель, психолог и просто женщина с широким кругом общения. Судьба развернула меня и поставила на путь истинный — занялась таро профессионально. Я делаю свой вклад в помощь людям, оказавшимся в сложных жизненных ситуациях.';
		break;
	case '404':
		$title = 'Страница не найдена';
		break;
	case 'amulets':
		$title = 'Амулеты';
		break;
	case 'decorations':
		$title = 'Магия камней';
		break;
	case 'decorations/tigrovyy-glaz':
		$title = 'Тигровый глаз - Магия камней';
		break;
	case 'decorations/agat':
		$title = 'Агат - Магия камней';
		break;
	case 'decorations/shungit':
		$title = 'Шунгит - Магия камней';
		break;
	case 'decorations/perlamutr':
		$title = 'Перламутр - Магия камней';
		break;
	case 'mustarot':
		$title = 'Музыкальное Таро';
		break;
	case 'order':
		$title = 'Сделать заказ';
		break;
	case 'school':
		$title = 'Школа Таро';
		break;
	case 'services':
		$title = 'Расценки';
}

require_once $content_dir.'header.php';
require_once $content_dir.$page.'.html';
require_once $content_dir.'footer.php';
