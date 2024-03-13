<?php 

$title = 'About';


$post = '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi porro fuga minima! Veniam aperiam quam 
        libero. Cum, et? Accusantium, in porro fugiat hic natus laudantium quibusdam ducimus, sunt debitis, unde quae maiores?</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi porro fuga minima! Veniam aperiam quam modi. Blanditiis nobis fugiat a veniam amet quaerat et, vitae numquam, repellat ipsa eveniet omnis dolores error officia libero. Cum, et? Accusantium, in porro fugiat hic natus laudantium quibusdam ducimus, sunt debitis, unde quae maiores?</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi porro fuga minima! Veniam aperiam quam modi. Blanditiis nobis fugiat a veniam amet quaerat et, vitae numquam, repellat ipsa eveniet omnis dolores error officia libero. Cum, et? Accusantium, in porro fugiat hic natus laudantium quibusdam ducimus, sunt debitis, unde quae maiores?</p>';

$array = $db->query("select * from posts order by id desc limit 3")->findAll();

require_once VIEWS . '/about.tpl.php';
