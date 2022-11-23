<!-- Это называеться (ad-hoc - Мнимый)-->
<?php

class Calculator {
    
// называеться это Мнимый потому что один Метод работает с двумя типами данных!
// Єто преисходит за перезагрузки Метода! и называеться Мнимым!
    add(a: number, b: number): number{
        return a + b;
    }

    add(a: string, b: string): string{
        return a + b;
    }
}

add(5,5)  -> result = 10;
add("5","5") -> result = "55";