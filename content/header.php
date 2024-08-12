<?php require_once $_SERVER['DOCUMENT_ROOT'].'/counter/counter.php' ?>
<!doctype html>
<html lang="ru">
<title><?php if (isset($title)) echo $title.' - ' ?>Официальный сайт таролога Екатерины Нагорной | Таро-консультации, обучение картам Таро</title>
<meta charset="utf-8">
<?php if (isset($description)) echo "<meta name=\"description\" content=\"$description\">" ?>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="apple-touch-icon" sizes="180x180" href="img/apple-touch-icon.png">
<link rel="icon" href="favicon.ico">
<link rel="icon" type="image/png" sizes="32x32" href="img/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="img/favicon-16x16.png">
<link rel="manifest" href="manifest.json">
<link rel="mask-icon" href="img/safari-pinned-tab.svg" color="#333333">
<meta name="msapplication-TileColor" content="#da532c">
<meta name="theme-color" content="#000000">
<link rel="preload" href="/fonts/edo.woff2" as="font" crossorigin>
<link rel="stylesheet" href="/css/common.css">
<link rel="stylesheet" href="/css/main.css?19">

<header class="header">
  <input class="nav-menu-toggle" id="menu-toggle" type="checkbox">
  <label class="nav-burger" for="menu-toggle"><span></span><span></span><span></span></label>
  <nav class="header-nav">
    <a class="nav-link nav-title" href="/" title="На главную">Black Cat Tarot</a>
    <div class="nav-list">
      <a class="nav-link nav-list-link" href="/school" title="Обучение">Обучение</a>
      <a class="nav-link nav-list-link" href="/amulets" title="Амулеты">Амулеты</a>
      <a class="nav-link nav-list-link" href="/decorations" title="Магия камней">Магия камней</a>
      <a class="nav-link nav-list-link" href="/mustarot" title="Музыкальное Таро">МузТаро</a>
      <a class="nav-link nav-list-link" href="/projector" title="Астральный Проектор">Астральный Проектор</a>
    </div>
    <div class="flex-center">
      <a class="nav-link" href="https://youtube.com/c/BlackCatTarotsociety" rel="noreferrer nofollow" target="_blank" title="YouTube-канал Black Cat Tarot">
        <svg class="nav-icon"><use href="/img/youtube.svg?v=1#svg"/></svg>
      </a>
      <a class="nav-link" href="https://youtube.com/c/TAROTLIVE_CAT" rel="noreferrer nofollow" target="_blank" title="YouTube-канал TAROT LIVE">
        <svg class="nav-icon"><use href="/img/live_icon.svg#svg"/></svg>
      </a>
      <a class="nav-link" href="https://t.me/black_cat_tarot" rel="noreferrer nofollow" target="_blank" title="Telegram">
        <svg class="nav-icon"><use href="/img/telegram.svg?v=1#svg"/></svg>
      </a>
      <a class="nav-link" href="https://dzen.ru/id/5c76e4ea4662f700ccc59b61" rel="noreferrer nofollow" target="_blank" title="Дзен">
        <svg class="nav-icon"><use href="/img/zen.svg?v=1#svg"/></svg>
      </a>
    </div>
    <div class="hr-gradient"></div>
  </nav>
</header>
<main class="main">
