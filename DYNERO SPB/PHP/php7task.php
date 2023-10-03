<?php
class ObjectItem
{
    public $title;
    public $price;
    public $size;

    
    public function __construct($title, $price, $size)
    {
        $this->title = $title;
        $this->price = $price;
        $this->size = $size;
    }
}

class Price
{
    public $price;
    public $size;
    
    public function __construct($price, $size)
    {
        $this->price = $price;
        $this->size = $size;
    }
}

// Минимальная и максимальная цена
$minPrice = 1000;
$maxPrice = 800000;

//Создание изначального масива
$arrayobject = 1500;
$items[] = new ObjectItem('Каяк', $arrayobject,'1');

$arrayobject = 2231;
$items[] = new ObjectItem('Лодочка', $arrayobject,'2');


$arrayobject3[] = new Price(555000, '1');
$arrayobject3[] = new Price(366000, '2');
$arrayobject3[] = new Price(256000, '3');
$items[] = new ObjectItem('Лодка', $arrayobject3,'3');


$arrayobject4[] = new Price(650000, '1');
$arrayobject4[] = new Price(475000, '2');
$items[] = new ObjectItem('Самолет', $arrayobject4,'4');


$arrayobject = 6435;
$items[] = new ObjectItem('Велосипед', $arrayobject,'5');

$arrayobject = 2150;
$items[] = new ObjectItem('Велосипед', $arrayobject,'6');


$arrayobject5[] = new Price(650000, '1');
$arrayobject5[] = new Price(750000, '2');
$items[] = new ObjectItem('Вертолет', $arrayobject5,'7');



echo "</br>Исходный массив</br>";
echo '----------------------------------------------------------------------------</br>';
echo '<pre>';
print_r($items);
echo '</pre>';
echo '----------------------------------------------------------------------------</br>';

//Обработка исходного массива 
foreach($items as $key => $item){
    $temp = array();
    if(is_array($item->price)){
        foreach($item as $v){           
            if (is_array($v)) {
                foreach($v as $price3){
                    if ($price3->price > $minPrice && $price3->price < $maxPrice ){
                        $temp[]=$price3->price;//Запись всех цен одного элемента в массив 
                        sort($temp);                       
                        }
                    else{
                        unset($items[$key]); // Удаление элемента который не подходит по цене
                    }                        
                }                
            }                        
        }
        $old_key = $key;
        $new_key = $temp[0];
        if (array_key_exists($old_key, $items))
        {
            $keys = array_keys($items);
            $old_key_index = array_search($old_key, $keys);
            $keys[$old_key_index] = $new_key;
            $items = array_combine($keys, $items); //Перезапись ключей массива, изменение их на минимальную цену элемента
        }  
    }
    else{
        if ($item->price > $minPrice && $item->price < $maxPrice ){ //Сравнение цены с minPrice и maxPrice
            $temp[] = $item->price;
            sort($temp);
        }
        else{
            unset($items[$key]);// Удаление элемента который не подходит по цене

        }
        

        $old_key = $key;
        $new_key = $temp[0];
        if (array_key_exists($old_key, $items))
        {
            $keys = array_keys($items);
            $old_key_index = array_search($old_key, $keys);
            $keys[$old_key_index] = $new_key;
            $items = array_combine($keys, $items); //Перезапись ключей массива, изменение их на минимальную цену элемента
        }  
    };
     
};

//Сортировка  и вывод конечного масива по возрастанию
ksort($items);
echo "</br>Конечный обработанный массив</br>";
echo '----------------------------------------------------------------------------</br>';
echo '<pre>';
print_r($items);
echo '</pre>';
echo '----------------------------------------------------------------------------</br>';





?>