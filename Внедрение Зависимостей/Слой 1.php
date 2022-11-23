 <?php

 interface UserRepo {
    getUsers: () => User[];
    // Удалить - Создать!
 }

 // Есть как йто метод в котором есть логика по роботе с
 class UserMongoDBRepo implements UserRepo {
    getUsers(): user[] {
        console.log('Используем подключение к монго и получаем пользователей')
        return [{age: 15, username: 'Пользователь из МОНГО ДБ'}];
    }
 }

 class UserPostgresRepo implements UserRepo {
    getUsers(): user[] {
        console.log('Используем подключение к POSTGRES и получаем пользователей')
        return [{age: 15, username: 'Пользователь из POSTGRES ДБ'}];
    }
 }  

 
 // Создаем под класс который будет использовать в себе или Монго или Пост
 class UserService {
// Указываем что в даном Классе мы используем "UserRepo" Но не Как КЛАСС а сам ИНТЕРФЕЙС!
    userRepo: UserRepo;

// Мы принимаем "UserRepo" через конструктор а тоесть мы его принимаем где то из ВНЕ
// Такой Тип действий Называеться ,Агрегация, 
    construckor(userRepo: UserRepo){
        $this.userRepo = userRepo;
    }

 // Длаем метод филтрацию пользователей по возрасту! 
// Мы вызываем метод Из Репозитория Который возращает нам список пользователей!
    filterUserByAge(age: number) {
        const users = $this.userRepo.getUsers();
// Тут должна расписаться кака єто логика в нашем случий єто ФИЛЬТРАЦИЯ!
    }
 }

 // Выводим в консоль и делаем обект и сюда мы так же предаем обект в нашем случей Второй (UserMongoDBRepo)
const UserService = new UserService(new UserMongoDBRepo())
userService.filterUserByAge(15)
// Если віведем єто в консоль то увидим
// 1) Пользователь из МОНГО ДБ
// Если в (new Пропишем UserPostgresRepo ) то увидим ( Пользователь из POSTGRES ДБ)
