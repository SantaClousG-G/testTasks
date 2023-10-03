<?php
global $items;
$items = array('site1.ru', 'site', 'site1.ru', 'siteweb.com');
var_export(test($items));
function test($items) {
    $sites = [];
    $result = [];
    foreach($items as $item) {        
        preg_match('/(site1\.ru)/', $item, $matches);
        if ($matches) {
            $sites[] = 'site1.ru';
        } 
        else {
            $sites[] = 'site2.ru';
        }
        if(count($result) < count($sites)) {
            $result[count($sites)] = count($sites);
        }
    }
    testTwo($result);
    return $sites;
}
function testTwo($arr) {
    $newArr = [];
    foreach($arr as $itemRes) {
        if($itemRes > 0) $newArr[] = $itemRes;
	    }
}

?>
