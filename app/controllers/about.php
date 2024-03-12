<?php 

$title = 'About';


$post = '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi porro fuga minima! Veniam aperiam quam 
        libero. Cum, et? Accusantium, in porro fugiat hic natus laudantium quibusdam ducimus, sunt debitis, unde quae maiores?</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi porro fuga minima! Veniam aperiam quam modi. Blanditiis nobis fugiat a veniam amet quaerat et, vitae numquam, repellat ipsa eveniet omnis dolores error officia libero. Cum, et? Accusantium, in porro fugiat hic natus laudantium quibusdam ducimus, sunt debitis, unde quae maiores?</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi porro fuga minima! Veniam aperiam quam modi. Blanditiis nobis fugiat a veniam amet quaerat et, vitae numquam, repellat ipsa eveniet omnis dolores error officia libero. Cum, et? Accusantium, in porro fugiat hic natus laudantium quibusdam ducimus, sunt debitis, unde quae maiores?</p>';

$array = array(
    array("title" => "Солнечные Зайчики Парка", "slug" => "<a href=\"link\">Солнечные Зайчики Парка</a>"),
    array("title" => "Поющие Птицы Леса", "slug" => "<a href=\"link\">Поющие Птицы Леса</a>"),
    array("title" => "Цветущие Розовые Сады", "slug" => "<a href=\"link\">Цветущие Розовые Сады</a>"),
    array("title" => "Живописные Осенние Пейзажи", "slug" => "<a href=\"link\">Живописные Осенние Пейзажи</a>"),
    array("title" => "Гуляющие Собаки Пляжа", "slug" => "<a href=\"link\">Гуляющие Собаки Пляжа</a>")
);

require_once VIEWS . '/about.tpl.php';
