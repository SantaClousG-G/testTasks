<?php 
global $item;

$prices = array(531200, 399000, 126900);
$c = getMinPrice($prices);
echo $c ;


function getMinPrice($item) {
    usort($item, function($a, $b) {return $a - $b;});
    return formatPrice($item[0]);
    // return formatPrice(usort($item->prices, function($a, $b) {return $a->price - $b->price;})[0]->price);
}

function formatPrice($price) {
    return preg_replace('/\B(?=(\d{3})+(?!\d))/', ',',$price);       
}
?>
<!-- 
исправлена ошибка в вызове функии formatprice (price с маленькой буквы)
строка <<return formatPrice(usort($item->prices, function($a, $b) {return $a->price - $b->price;})[0]->price);>> не работала 
так как функция usort возвращает не массив, а значение bool, изменяя при этом сам входной масив $item
поэтому было принято решение вынести функцию из return и возвращать 1 элемент отсортированного массива

-->