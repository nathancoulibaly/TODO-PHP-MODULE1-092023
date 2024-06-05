<?php
header('Location:index.php');
include('fct/item.php');
include('fct/request.php');
include('config/app.php');

$items = getitems();
$id = get('item');

unset($items[$id]);

saveItems($items);
?>