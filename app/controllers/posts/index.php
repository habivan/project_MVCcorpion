<?php 
$title = 'My Home';

/** @var \myfrm\Db $db */

$db = \myfrm\App::get(\myfrm\Db::class);

$page = $_GET['page'] ?? 1;
$per_page = 3;
$total = $db->query("SELECT count(*) FROM posts")->getColumn();
$pagination =  new \myfrm\Pagination($page, $per_page, $total);

$start = $pagination->getStart();

$per_page = 3;
$total = $db->query("SELECT count(*) FROM posts")->getColumn();
$pages_cnt = ceil($total / $per_page);
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
if($page < 1){
  $page =1;
}
if($page > $pages_cnt){
  $page = $pages_cnt;
}
$start = ($page - 1) * $per_page;

$articles = $db->query("select * from posts LIMIT $start, $per_page")->findAll();
// $array = $db->query("select * from posts order by id desc limit 3")->findAll();
$array = db()->query("select * from posts order by id desc limit 3")->findAll(); //тоже самое , но через функцию хелпер.
require_once VIEWS . '/posts/index.tpl.php';