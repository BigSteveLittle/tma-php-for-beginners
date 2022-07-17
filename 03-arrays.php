<?php
    // ARRAYS.
    $numbers = [1, 44, 55, 22];
    $fruits = array('apple', 'orange', 'pear');
    // Output.
    print_r($numbers);
    echo '<br>';
    var_dump($numbers);
    echo '<br>';
    echo $fruits[1];
    echo '<br>';

    // Associative array.
    $colours = [
        1 => 'red', 
        4 => 'blue', 
        9 => 'purple'
    ];
    $hexColours = [
        'red' => '#f00', 
        'blue' => '#0f0', 
        'green' => '#00f' 
    ];
    // Output.
    echo $colours[9];
    echo '<br>';
    echo $hexColours['green'];
    echo '<br>';
    var_dump($hexColours);
    echo '<br>';

    $person = [
        'firstName' => 'Engelburt', 
        'lastName' => 'Humperdink',
        'email' => 'mynextalbumis@gmail.com' 
    ];
    // Output.
    echo $person['lastName'];
    echo '<br>';

    // Multidimensional array.
    $people = [
        [
            'firstName' => 'Engelburt', 
            'lastName' => 'Humperdink',
            'email' => 'mynextalbumis@gmail.com' 
        ],
        [
            'firstName' => 'Steve', 
            'lastName' => 'Little',
            'email' => 'bigsteve@redandblackzone.com' 
        ],
        [
            'firstName' => 'Bela', 
            'lastName' => 'Lugosi',
            'email' => 'dracula@gmail.com' 
        ]
        ];
    // Output.
    print_r($people);
    echo '<br>';
    echo $people[2]['lastName'];
    echo '<br>';

    // json_encode() turns a PHP array into json script.
    var_dump(json_encode($people));
    echo '<br>';
    echo json_encode($people);
    echo '<br>';
?>