<!-- Композиция и Агрегация!-->
<?php

class Engine{
    
    drive() {
        console.log('Двигатель работает')
    }
}

class Wheel{
    
    drive() {
        console.log('Колеса едут')
    } 
}

class Flat {
// Так же создали Класс квартира в котором так же может использоваться паралейно с машиной "freshener" пахучка!
    freshener: Freshener;

    constructor(freshener) {
        $this.freshener = freshener;
    }
}

// В классе сразу говорим что у нас будет один двигатель и Массив колес!
class Car{
    engine: Engine;
    eheels: Wheel[];
    freshener: Freshener;

// Мы указали в конструкторе что "freshener" живёт одельной жизню от Класса кар!
// Так же если уддать Класс Кра то колеса и двигатель исщезнут а "freshener" отнанеться жить!
    constructor(freshener){
        // Агрегация
        $this.freshener = freshener;
        // Композиция ! 
        $this.engine = new Engine()
        $this.wheels.push(Wheel())
        $this.wheels.push(Wheel())
        $this.wheels.push(Wheel())
        $this.wheels.push(Wheel())

    }
// Делегирование! 
    drive() {
        $this.engine.drive();
        for (let i = 0; i < $this.wheels.length; i++) {
            $this.wheels[i].drive()
        }
    }
}

// если мы вызавим то что у казали выше то получим(Двигатель работает и 4 раза колеса едут!)
const bmw = new Car()
bmw.drive()