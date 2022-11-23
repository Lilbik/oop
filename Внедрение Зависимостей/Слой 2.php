<!--ПАТТЕРНЫ ПРОЕКТИРОВАНИЯ - "singleton"-->

<?php

class Database {
    usr: number;
// "Static" - нам даёт возможность Что к нему можно обращаться без создания КЛАССА!
// Не обезательно создавать обект или метод что бы работать со "Static"
    private static instance: Database;
// С помощю конструктора мы делаем проверку лежит ли что то в конструкторе 
// То тогда мі возращаем то что находиться у нас в "Instance"
// Єто нам гарантирует создание только одного такого КЛАССА 
    constructor() {
        if (Database.instance) {
            return Database.instance;
        }
        $this.url = Math.random();
        Database.instance = $this;
    }
}

// сколько мы бы не создавали обектов то будем иметь всего Один и Тотже Результат 
const db1 = new Database()
const db2 = new Database()
const db3 = new Database()
const db4 = new Database()

console.log(db1.url)
console.log(db2.url)
console.log(db3.url)
