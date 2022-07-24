<?php
    // FUNCTIONS.
    
    // 1. 'standard function': pre ES6.
    echo "---- standard function ----<br>";
    function registerUser() {
        echo 'User registered my Dude.<br>';
    }
    registerUser();
    // 1b. 'standard function': use of 'global' variables.
    echo "---- standard function use of global variables----<br>";
    $z = 29;
    function unregisterUser() {
        global $z;
        echo 'User not registered Bro.<br>' . $z;
    }
    unregisterUser();
    // 2a. 'arguments': input variables.
    echo "---- standard function use of arguments ----<br>";
    function regiUser($email) {
        echo "Email: $email now registered kiddo!<br>";
    }
    regiUser('mynextalbumis@gmail.com');
    // 2b. 'multiple arguments': multiple input variables.
    echo "---- standard function use of multiple arguments ----<br>";
    function summingUp($a, $b) {
        return "a + b = " . $a + $b . ".<br>";
    }
    $answerIs = summingUp(40, 90);
    echo $answerIs;
    // 2c. 'default parameters': specifies a parameter if none is called.
    echo "---- standard function default parameters ----<br>";
    function sizingUp($a = 99, $b = 44) {
        return "a + b = " . $a + $b . ".<br>";
    }
    $answerWillBe = sizingUp(40, 90); //40 + 90.
    echo $answerWillBe;
    $answerWillBe2 = sizingUp(); // 99 + 44.
    echo $answerWillBe2;
    $answerWillBe3 = sizingUp(90); // 90 + 44.
    echo $answerWillBe3;
    $answerWillBe4 = sizingUp(99, 90); // 99 + 90.
    echo $answerWillBe4;
    // 3 'anonymous function': function is unnamed and is set as a variable. NOTE: a ';' must be included.
    echo "---- anonymous function ----<br>";
    $subtract = function($n1, $n2) {
        return "n1 - n2 = " . $n1 - $n2 . ".<br>";
    };
    echo $subtract(100, 1);
    // 4 'arrow function': ES6 shorthand. NOTE: a ';' must be included.
    echo "---- arrow function ----<br>";
    $subtract2 = fn($n1, $n2) => $n1 - $n2;
    echo $subtract2(100, 1);
?>