<?php
    // STRING FUNCTIONS IN PHP.
    
    // 1. '$string': a series of words.
    $string = 'Hello World';
    echo $string;

    echo "<br><br>---- STRING LENGTH [2] ----<br>";
    // 2. 'strlen()': provides the length of characters in a string.
    echo strlen($string);

    echo "<br><br>---- FIRST STRING POSITION [3] ----<br>";
    // 3. 'strpos()': provides the numbered location of the first instance of a character in a string.
    echo strpos($string, 'o');

    echo "<br><br>---- LAST STRING POSITION [4] ----<br>";
    // 4. 'strrpos()': provides the numbered location of the last instance of a character in a string.
    echo strrpos($string, 'o');

    echo "<br><br>---- REVERSE STRING [5] ----<br>";
    // 5. 'strrev()': will reverse the contents of a string.
    echo strrev($string);

    echo "<br><br>---- LOWERCASE [6] ----<br>";
    // 6. 'strtolower()': will make every letter of the string lowercase.
    echo strtolower($string);

    echo "<br><br>---- UPPERCASE [7] ----<br>";
    // 7. 'strtoupper()': will make every letter of the string uppercase.
    echo strtoupper($string);

    echo "<br><br>---- CAPITALISE [8] ----<br>";
    // 8. 'ucwords()': will capitalise the first letter of each word contained in a string.
    echo ucwords($string);

    echo "<br><br>---- REPLACE [9] ----<br>";
    // 9. 'str_replace()': allows you to replace letters and words contained in a string.
    echo str_replace('World', 'Everyone', $string);

    echo "<br><br>---- SUBSTRING [10] ----<br>";
    // 10. 'substr()': will return a specified part of a string.
    echo substr($string, 0, 5);
    echo substr($string, 5);

    echo "<br><br>---- STARTS WITH [11] ----<br>";
    // 11. 'if(str_starts_with())': a conditional statement based on the contents of the string.
    if(str_starts_with($string, 'Hello')) {
        echo 'YES';
    }

    echo "<br><br>---- ENDS WITH [12] ----<br>";
    // 12. 'if(str_ends_with())': a conditional statement based on the contents of the string.
    if(str_ends_with($string, 'ld')) {
        echo 'YES';
    }

    echo "<br><br>---- SECURITY [13 + 14] ----<br>";
    // 13. 'htmlspecialchars()': protects HTML from code injection.
    $string2 = '<script>alert(1)</script>';
    echo htmlspecialchars($string2);
    echo '<br>';
    // 14. 'htmlentities()': protects HTML from code injection.
    echo htmlentities($string2);

    echo "<br><br>---- PRINTF() [15] ----<br>";
    // 15. 'printf()': allows aliases to be used in strings.
    printf('%s likes to %s', 'Steve', 'code');
    echo '<br>';
    printf('1+1=%f', 1+1);
?>