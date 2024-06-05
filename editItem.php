<?php
header('Location:index.php');
include('fct/item.php');
include('fct/request.php');
include('config/app.php');

$items = getitems();
$id = post('editItem');


$items[$id]['intitule'] = post('intitule');


saveItems($items);

?>