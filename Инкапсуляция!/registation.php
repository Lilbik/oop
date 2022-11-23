<?php
// Создали базу даных 
class Database{
// Свойства!
    private url;
    private port;
    private username;
    private password;
    private tables;
// в таблице создали пустой Массив
    public function __constructor($url, $port, $username, $password)
    {
        $this->url = $url;
        $this->port = $port;
        $this->username = $username;
        $this->password = $password;
        $this->tables = [];
    }

    constructor(url, port, username, password){
        $this.url = url;
        $this.port = port;
        $this.username = username;
        $this.password = password;
        $this.tables = []
    }
// Создаём метод и аргументом мы будем принимать новую таблицу и добавлять эту таблицу в массив
// Таким образом мы на прямую взаимодействуем с массивом (TABLES) при єтом на прямую мы изменять его не можем.
    public createNewTable(table){
        $this._tables.push(table);
    }
// мы можем сделать определёный Метод внутри Класса и затем в нужном нам месте просто вызвать! Как внизу!
    public clearTables() { 
        $this._tables = [];
    }

// И создали так что не моги меня даные! 
    get url(){
        return $this._url;
    }

    get port(){
        return $this._port;
    }

    get username(){
        return $this._username;
    }

    get password(){
        return $this._password;
    }

    get tables(){
        return $this._tables;
    }
}

// создаем обект 
const db = new Database( 1, 2, 3, 4)
// вызываем специальный метод и передаём сюда соответсвущий обект 
db.createNewTable(table {name: 'roles'})
db.createNewTable(table {name: 'users'})
