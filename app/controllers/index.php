<?php 

$title = 'My Home';

$articles = array(
    array("author" => "John Doe", "date" => "2022-01-01", "content" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua."),
    array("author" => "Jane Smith", "date" => "2022-01-05", "content" => "Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat."),
    array("author" => "Adam Johnson", "date" => "2022-01-10", "content" => "Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur."),
    array("author" => "Eve Brown", "date" => "2022-01-15", "content" => "Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."),
    array("author" => "Mike Williams", "date" => "2022-01-20", "content" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.")
);


$array = array(
    array("title" => "Солнечные Зайчики Парка", "slug" => "<a href=\"#\">Солнечные Зайчики Парка</a>"),
    array("title" => "Поющие Птицы Леса", "slug" => "<a href=\"#\">Поющие Птицы Леса</a>"),
    array("title" => "Цветущие Розовые Сады", "slug" => "<a href=\"#\">Цветущие Розовые Сады</a>"),
    array("title" => "Живописные Осенние Пейзажи", "slug" => "<a href=\"#\">Живописные Осенние Пейзажи</a>"),
    array("title" => "Гуляющие Собаки Пляжа", "slug" => "<a href=\"#\">Гуляющие Собаки Пляжа</a>")
);


require_once VIEWS . '/index.tpl.php';