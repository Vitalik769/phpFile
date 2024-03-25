<?php

// Вдалі функції:

// Функція для обчислення факторіалу числа
function factorial($n) {
    if ($n < 0) {
        return "Факторіал від'ємного числа не визначений";
    }
    $result = 1;
    for ($i = 1; $i <= $n; $i++) {
        $result *= $i;
    }
    return $result;
}

// Функція для перевірки, чи є число простим
function isPrime($number) {
    if ($number <= 1) {
        return false;
    }
    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i === 0) {
            return false;
        }
    }
    return true;
}

// Невдалі функції:

// Функція для додавання двох чисел
function addNumbers($a, $b) {
    return $a + $b;
    // Невдала, бо не враховує можливості помилки
}

// Функція для виведення повідомлення про вітання
function welcomeMessage($name) {
    echo "Привіт, $name!";
    // Невдала, бо функція має виводити результат, а не виводить його із викликуючого коду
}

// Виклики функцій:
echo "Факторіал числа 5: " . factorial(5) . "\n";
echo "Число 7 просте? " . (isPrime(7) ? "Так" : "Ні") . "\n";

// Приклади викликів невдалих функцій:
$result = addNumbers(3, 4); // Помилка, потрібно використовувати return
welcomeMessage("John"); // Помилка, функція не повертає значення

?>
