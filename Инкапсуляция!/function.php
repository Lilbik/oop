<!--(Класс - человек)  (Обект - Вася - пупкин - 25 лет(уже задание критерий)) 
(Свойства - имя - фамилия - возраст и т.д) (Действия которые может совершать человек Называються (МЕТОДЫ))-->


<?php

class Rectangle {
    width;
    height;
// конструктор вызываеться при создание обекта!
    constructor(){
        $this.width = w;
        $this.height = h;
    }
// Методы 
    calcArea(){
        return $this.width * $this.height;
    }
}
// С помощю NEW - мы можем создать обект! 
const rect = new Rectangle( 5, 10)
const rect = new Rectangle( 22, 110)
const rect = new Rectangle( 15, 50)
rect.calcArea()
