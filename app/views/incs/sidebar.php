<div class="col-md-4">
    <ul class="list-group">
        <?php foreach($array as $arr):?>
            <li class="list-group-item"><a href="/posts?id=<?=$arr['id']?>"><?=$arr['title']?></a></li>
        <?php endforeach;?>
    </ul>
</div>