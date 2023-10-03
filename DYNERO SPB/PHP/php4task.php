<?php
// class Singleton // Создавал чтобы проверить работоспособность так как класса ParentClass и интерфейса InterfaceOne не существует из-за чего выдается ошибка

class Singleton extends ParentClass implements InterfaceOne
{
      
    private static $instance;
        
    // Защита от создания через new 

    private function __construct() {}
     
    // Защита от создания через клонирование  

    private function __clone() {}
           
    // Защита от создания через unserialize
        
    private function __wakeup() {}
        
    // Возвращает единственный экземпляр класса
    public static function getInstance() {
        if (self::$instance === null) {
            self::$instance = new self;
        }
        return self::$instance;
    }
        
    // Функция которая что-то делает
    public function doAnyThing() {
        echo " Это шаблон одиночка (Singleton) наследуемый от ParentClass и реализующий интерфейс InterfaceOne ";
    }
}
   

// Использование

$Object = Singleton::getInstance();
$Object->doAnyThing();

// Singleton::getInstance()->doAnyThing();


// Проверка защиты создания 2 экземпляра класса 

// $Object2 = new Singleton();
// $Object3 = clone $Object;

  ?>