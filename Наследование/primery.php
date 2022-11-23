//  

<?php
// Класс человек!
class Person{
    private firstName;
    private lastName;
    private age;


    constructor(firstName, lastName, age) {
        $this.firstName = firstName;
        $this.lastName = lastName;
        $this.age = age;
    }
// Возращаем через "return" строку с Именем и Фамилией Обекта!!
    public get fullName(){
        return 'Фамилия ${$this._lastName} Имя - ${this._firstName}'
    }
/////////////
    get firstName(){
        return $this._firstName;
    }

    set firstName(){
        $this._firstName = value;
    }

    get lastName(){
        return $this._lastName;
    }

    set lastName(){
        $this._lastName = value;
    }

    get age(){
        return $this._age;
    }
// Ну возраст мы немного коректируем для того что возраст не может быть меньше 0!
    set age(value){
        if (value < 0){
            $this._age = 0;
        } else {
            $this._age = value;
        }
    }

}




// Класс Роботник! И что бы не дублировать класс Человека мы через (extends) вызываем всё что там вписали и нам остаёться только внести изменения!
class Employee extends Person{
    private inn;
    private number;
    private snils; 

// Мы вызвали конструктор и что мы сделали Мы в (super вызывает в первую очередь! класса Человек)
// Но так же и внесли новые параметры для класса Роботник!
    constructor(firstName, lastName, age, inn, number, snils) {
        super(firstName, lastName, age);
        $this.inn = inn;
        $this.number = number;
        $this.snils = snils;
    }

}
// первое свойством мы меняем Имя. Фамилия.Возраст i добовляем новые изменения 15 i 15 i 15!
// Конструктор тоже передаеться сюда 
const employee1 = new Emoloyee("Ulbi" "TV", 15, 15, 15, 15)
//выводим то что у нас получилось и видим что у нашего Класса роботник есть свои указаные нами _firstName  "Ulbi"- _lastName "TV" - _age "15"!
console.log(employee1)





// Создали класс Разрабочик - Добовляем до него ещё одно свойство!
// Так же мы поместили сюда класс роботник а в нём уже есть и класс Человек!
class Developer extends Employee {
    private level;

// Снова дополняем его!
    constructor(firstName, lastName, age, inn, number, snils, level, language) {
        super(firstName, lastName, age, inn, number, snils);
        $this.level = level;
        $this.language = language;
    }
}

// Передаём все необходимые аргументы!
const ulbiTV = new Developer("Ulbi" "TV", 15, 15, 15, 15, 'SENIOR', 'PHP')
// на прямую делаем запрос и получаем содержимое в нем а тоесть (Фамилия ТV - Имя - Ulbi)
console.log(ulbiTV.fullName)
