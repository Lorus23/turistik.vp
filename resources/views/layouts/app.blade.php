<!DOCTYPE html>
<html lang="ru">
<head>
    <title>Главная страница</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="../../../public/css/libs.min.css">
    <link rel="stylesheet" href="../../../public/css/main.css">
    <link rel="stylesheet" href="../../../public/css/media.css">
</head>
<body>
<div class="wrapper">
    <header class="main-header">
        <div class="top-header">
            <div class="top-header__wrap">
                <div class="logotype-block">
                    <div class="logo-wrap"><a href="/"><img src="/public/img/logo.svg" alt="Логотип" class="logo-wrap__logo-img"></a></div>
                </div>
                <nav class="main-navigation">
                    <ul class="nav-list">
                        <li class="nav-list__nav-item"><a href="#" class="nav-list__nav-item__nav-link">Главная</a></li>
                        <li class="nav-list__nav-item"><a href="#" class="nav-list__nav-item__nav-link">Полезная информация</a></li>
                        <li class="nav-list__nav-item"><a href="#" class="nav-list__nav-item__nav-link">Последние акции</a></li>
                        <li class="nav-list__nav-item"><a href="#" class="nav-list__nav-item__nav-link">О сервисе</a></li>
                        <li class="nav-list__nav-item"><a href="#" class="nav-list__nav-item__nav-link">Новости</a></li>
                    </ul>
                </nav>
            </div>
        </div>
        <div class="bottom-header">
            <div class="search-form-wrap">
                <form class="search-form">
                    <input type="text" placeholder="Поиск..." class="search-form__input">
                    <button class="search-form__btn-search"><i class="icon icon-search"></i></button>
                </form>
            </div>
        </div>
    </header>
    <!-- header_end-->
        <main class="py-4">
            @yield('content')
        </main>
    <!-- sidebar-->
    <div class="sidebar">
        <div class="sidebar__sidebar-item">
            <div class="sidebar-item__title">Теги</div>
            <div class="sidebar-item__content">
                <ul class="tags-list">
                    <li class="tags-list__item"><a href="#" class="tags-list__item__link">путешествия по россии</a></li>
                    <li class="tags-list__item"><a href="#" class="tags-list__item__link">турция</a></li>
                    <li class="tags-list__item"><a href="#" class="tags-list__item__link">гоа</a></li>
                    <li class="tags-list__item"><a href="#" class="tags-list__item__link">авиабилеты</a></li>
                    <li class="tags-list__item"><a href="#" class="tags-list__item__link">отели</a></li>
                    <li class="tags-list__item"><a href="#" class="tags-list__item__link">европа</a></li>
                    <li class="tags-list__item"><a href="#" class="tags-list__item__link">азия</a></li>
                    <li class="tags-list__item"><a href="#" class="tags-list__item__link">тайланд</a></li>
                    <li class="tags-list__item"><a href="#" class="tags-list__item__link">хостелы</a></li>
                    <li class="tags-list__item"><a href="#" class="tags-list__item__link">шоппинг</a></li>
                </ul>
            </div>
        </div>
        <div class="sidebar__sidebar-item">
            <div class="sidebar-item__title">Категории</div>
            <div class="sidebar-item__content">
                <ul class="category-list">
                    <li class="category-list__item"><a href="#" class="category-list__item__link">
                            Вылеты из
                            столиц</a>
                        <ul class="category-list__inner">
                            <li class="category-list__item"><a href="#" class="category-list__item__link">Москва</a></li>
                            <li class="category-list__item"><a href="#" class="category-list__item__link">Санкт-Петербург</a></li>
                        </ul>
                    </li>
                    <li class="category-list__item"><a href="#" class="category-list__item__link">
                            Вылеты из
                            регионов</a>
                        <ul class="category-list__inner">
                            <li class="category-list__item"><a href="#" class="category-list__item__link">Москва</a></li>
                            <li class="category-list__item"><a href="#" class="category-list__item__link">Санкт-Петербург</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
</div>
<footer class="main-footer">
    <div class="content-footer">
        <div class="bottom-menu">
            <ul class="b-menu__list">
                <li class="b-menu__list__item"><a href="#" class="b-menu__list__item__link">Главная</a></li>
                <li class="b-menu__list__item"><a href="#" class="b-menu__list__item__link">Полезная информация</a></li>
                <li class="b-menu__list__item"><a href="#" class="b-menu__list__item__link">Последние акции</a></li>
                <li class="b-menu__list__item"><a href="#" class="b-menu__list__item__link">О сервисе</a></li>
            </ul>
        </div>
        <div class="copyright-wrap">
            <div class="copyright-text">Туристик<a href="#" class="copyright-text__link"> loftschool 2016</a></div>
        </div>
    </div>
</footer>
</div>
<!-- wrapper_end-->
<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
<script src="../../../public/js/main.js"></script>
</body>
</html>
