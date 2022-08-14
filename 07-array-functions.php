<?php
    // ARRAY FUNCTIONS.
    echo "---- STANDARD ARRAY FUNCTIONS ----<br>";
    // 1. '$fruits': contains common fruits.
    $fruits = ['apple', 'orange', 'pear'];
    // 2. 'grape': push grape on to array of fruits.
    $fruits[] = 'grape';
    // 3. 'array_push': ad objects to the end of the array.
    array_push($fruits, 'blueberry', 'strawberry');
    // 4. 'array_unshift': ads objects to the beginning of the array.
    array_unshift($fruits, 'blueberry');
    // 5. 'array_pop': will remove the last object.
    array_pop($fruits);
    // 6. 'array_shift': removes object from the beginning of the array.
    array_shift($fruits);
    // 7. 'unset': removes an object via its index.
    unset($fruits[3]);
    print_r($fruits);
    echo "<br><br>---- BREAKING UP ARRAYS INTO CHUNKS ----<br>";
    // 8. 'array_chunk': formats data in to meaningful groups.
    $chunked_array= array_chunk($fruits, 4);
    print_r($chunked_array);
    echo "<br><br>---- COMBINING ARRAYS ----<br>";
    // 9. 'array_merge': will merge 2 or more arrays.
    $arr1 = [1,2,3];
    $arr2 = [4,5,6];
    $arr3 = array_merge($arr1, $arr2);
    $arr4 = [...$arr1, ...$arr2];
    print_r($arr3);
    print_r($arr4);
    echo "<br><br>---- MERGE ARRAYS ----<br>";
    // 10. 'array_combine': will merge 2 or more arrays.
    $a = ['green', 'red', 'yellow'];
    $b = ['avocado', 'apple', 'banana'];
    $c = array_combine($a, $b);
    print_r($c);
    echo "<br><br>---- ARRAY_KEYS ----<br>";
    // 11. 'array_keys': prints numerical keys.
    $keys = array_keys($c);
    print_r($keys);
    echo "<br><br>---- ARRAY_FLIP ----<br>";
    // 12. 'array_flip': swaps around thr values and keys.
    $flipped = array_flip($c);
    print_r($flipped);
    echo "<br><br>---- RANGE OF NUMBERS ----<br>";
    $numbers = range(1, 20);
    print_r($numbers);
    echo "<br><br>---- ARRAY_MAP ----<br>";
    // 13. 'array_map': $newNumbers is a function that will return the word 'Number' as a descriptor.
    $newNumbers = array_map(function($number) {
        return "Number ${number}";
    }, $numbers);
    print_r($newNumbers);
    echo "<br><br>---- ARRAY_FILTER ----<br>";
    // 14. 'array_filter': description.
    $lessThan10 = array_filter($numbers, fn($number) => $number <= 10);
    print_r($lessThan10);
    echo "<br><br>---- ARRAY_REDUCE ----<br>";
    // 15. 'array_reduce': description.
    $sum = array_reduce($numbers, fn($carry, $number) => $carry + $number);
    var_dump($sum);

?>