<?php

class user{
// Свойства!
    private username;
    private password;
    private id;

// id будет получаться уникальным 
    constructor(username, password){
        $this.username = username;
        $this.password = password;
        $this.id = generateRandomId();
    }
// Имя и пароль мы менять можем а Id можем только получать!
    get username(){
        return $this._username;
    }

    set username(){
        $this._username = value;
    }

    get password(){
        return $this.password;
    }

    set password(){
        $this.password = value;
    }

    get id(){
        return $this.id;
    }
}
// создаем обект 
const user = new User('Ulbi','Timuo')
// пробуем изменить Id и получаем ошибку! 
user.id = 5;