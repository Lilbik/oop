<!--С Интерфейса нельзя сделать Обект! -->

<!-- Есть два типа Интерфейса 
// интерфейс для чтения!
1) interface Reader {
    read(url);
}
// интерфес для записи! 
2) interface Writer {
    write(data);
}

-->
<?php

// "Implements" - фунция под розумнивает собой что мы должны использовать все Методы что есть в Интерфейсы
class Fileclient implements Reader, Writer {
    read(url) {
        // логика!
    }
    write(data) {
        // логика!
    }
}
?>





<?php

class User {
    username: String;
    age: number;
}

class Car {

}

// Если мы будем репозиторий обобщоный ТИП <T> то он будет использовать <User>
interface Repository<T> {
//  Метод так называемые Крут
    create: (obj: T) => T;
    get: () => T;
    delete: (obj: T) => T;
    update: (obj: T) => T;
} 

// "Repository" - работа в разными сущнастями а именно для КРТУТО ПИРАЦИЙ!
class UserRepo implements Repository<User> {
    create(obj: User): User {
        return undefined;
    }

    delete(obj: User): User {
        return undefined; 
    }

    get(): User {
        return undefined;    
    }

    update(obj: User): User {
        return undefined;
    }
}

// Делаем Интерфейс делаем какие должны быть методы а потом уже под сделаный интерфейс мы релизуем КЛАСС
class CarRepo implements Repository<Car> {
    create(obj: Car): Car {
        return undefined;
    }

    delete(obj: Car): Car {
        return undefined; 
    }

    get(): Car {
        return undefined;    
    }

    update(obj: Car): Car {
        return undefined;
    }
}