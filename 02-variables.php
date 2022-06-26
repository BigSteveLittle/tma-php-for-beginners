<?php
    // PHP DATA TYPES.
    /*
        String      Series of characters surrounded by quotes.
        Integer     Whole numbers.
        Float       Decimal numbers.
        Boolean     'true' or 'false'. 
        Array       Specific variable which can hold more than one value.
        Object      A class.
        NULL        An empty variable.
        Resource    Specific variable which holds a resource.
    */

    // VARIABLE NAMING RULES.
    /*
        - Must be prefixed with $.
        - Must start with a letter or the underscore character.
        - Can't start with a number.
        - Can only contain alpha-numeric characters and underscores (A-z, 0-9, and _).
        - Are case-sensitive ($name and $NAME are two different variables).
    */

    // EXAMPLES.
    $name = 'Engelburt'; // String.
    $age = 21; // Integer.
    $isGay = true; // Boolean.
    $cashOnHand = 1120.15; // Float.

    echo "$name <br>";
    echo "$age <br>";
    echo "$isGay <br>"; // When a boolean is echoed it shows a '1' for true and '' for false.
    var_dump($isGay);
    echo "<br> $$cashOnHand<br>";

    // QUOTE MARKS AND CONCATENATION.
    echo '<p>$name is $age years old. <p>'; // as ' or " quotes in JS, single ' quotes will not parse variable values.

    // Concatenation.
    echo '<p>' . $name . ' is ' . $age . ' years old. <p>'; // Concatenation is required to parse variable values with ' single quotes.

    // Double
    echo "<p>$name is $age years old. <p>"; // As per back-ticks ` in JS, double " quotes in PHP will parse variable values.
    echo "<p>${name} is ${age} years old. <p>"; // Alternate syntax may be clearer. 

    // OPERATORS.
    echo 10 - 5;
    echo '<br>';
    echo 5 * 6;
    echo '<br>';
    echo 10 / 2;
    echo '<br>';
    echo 10 % 3;
    echo '<br>';

    // Quotes and Integers.
    $x = 5 + 5;
    var_dump($x);
    $x = '5' + '5'; // PHP will still recognise integers wether in quotes or not.
    var_dump($x);
    echo '<br>';

    // Constants.
    define('HOST', 'localhost'); 
    define('DB_NAME', 'db_dev');
    echo HOST;
    echo '<br>';
    echo DB_NAME;
?>