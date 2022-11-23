<?php
// Класс человек!
class Person {
    private $firstName;
    private $lastName;
    private $age;

    public function __construct($firstName, $lastName, $age) {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->age = $age;
    }

    // Возращаем через "return" строку с Именем и Фамилией Обекта!!
    public function getFullName(){
        return 'Фамилия ' . $this->lastName. ' Имя - ' . $this->firstName;
    }
    /////////////

    public function getFirstName(){
        return $this->firstName;
    }

    public function setFirstName($value){
        $this->firstName = $value;
    }

    public function getLastName(){
        return $this->lastName;
    }

    public function setLastName($value){
        $this->lastName = $value;
    }

    public function getAge(){
        return $this->age;
    }

    // Ну возраст мы немного коректируем для того что возраст не может быть меньше 0!
    public function setAge($value){
        if ($value < 0){
            $this->age = 0;
        } else {
            $this->age = $value;
        }
    }

}

// Класс Роботник! И что бы не дублировать класс Человека мы через (extends) вызываем всё что там вписали и нам остаёться только внести изменения!
class Employee extends Person {
    private $inn;
    private $number;
    private $snils; 

// Мы вызвали конструктор и что мы сделали Мы в (super вызывает в первую очередь! класса Человек)
// Но так же и внесли новые параметры для класса Роботник!
    public function __construct($firstName, $lastName, $age, $inn, $number, $snils) {
        $this->inn = $inn;
        $this->number = $number;
        $this->snils = $snils;
        parent::__construct($firstName, $lastName, $age);
    }

}
// первое свойством мы меняем Имя. Фамилия.Возраст i добовляем новые изменения 15 i 15 i 15!
// Конструктор тоже передаеться сюда 

$employee1 = new Employee("Ulbi", "TV", 15, 15, 15, 15);

//выводим то что у нас получилось и видим что у нашего Класса роботник есть свои указаные нами _firstName  "Ulbi"- _lastName "TV" - _age "15"!
print_r($employee1);

echo '<hr>';

// Создали класс Разрабочик - Добовляем до него ещё одно свойство!
// Так же мы поместили сюда класс роботник а в нём уже есть и класс Человек!
class Developer extends Employee {
    private $level;

// Снова дополняем его!
    public function __construct($firstName, $lastName, $age, $inn, $number, $snils, $level, $language) {
        parent::__construct($firstName, $lastName, $age, $inn, $number, $snils);
        $this->level = $level;
        $this->language = $language;
    }
}

// Передаём все необходимые аргументы!
$ulbiTV = new Developer("Ulbi", "TV", 15, 15, 15, 15, 'SENIOR', 'PHP');
// на прямую делаем запрос и получаем содержимое в нем а тоесть (Фамилия ТV - Имя - Ulbi)
print_r($ulbiTV);
