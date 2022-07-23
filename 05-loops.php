<?php
    // LOOPS.
    
    /* 1. 'for': 
        for(initialise ; condition ; increment) {
        // code to be executed;
        }
    */
    echo "---- for loop ----<br>";
    for($x = 2 ; $x <= 10 ; $x+=2) {
        echo $x . "<br>";
    }

    /* 2. 'while': 
        initialise;
        while(condition) {
        // code to be executed;
        increment;
        }
    */
    echo "---- while loop ----<br>";
        $y = 1;
        while($y <= 15) {
            echo $y . "<br>";
            $y++;
        }

    /* 3. 'do while': 
        initialise;
        do {
        // code to be executed;
        increment;
        }
        condition;
    */
    echo "---- do while loop ----<br>";
        $z = 1;
        do {
            echo $z . "<br>";
            $z++;
        }
        while($z <= 20);
    
    /* 4. 'foreach (for arrays)': 
        foreach(array as array-item) {
            // code to be executed;
        }
    */
    $posts = ['1st Post', '2nd Post', '3rd Post'];
    echo "---- for loop (for arrays) ----<br>";
        for($f = 0 ; $f < count($posts) ; $f++) {
            echo $posts[$f] . "<br>";
        }
    echo "---- foreach loop (for arrays) ----<br>";
        foreach($posts as $post) {
            echo $post . "<br>";
        }
    echo "---- foreach loop (for arrays) with index ----<br>";
        foreach($posts as $index => $post) {
            echo "$index - $post<br>";
        }
    echo "---- foreach loop (for arrays) with index starting at 1 ----<br>";
        foreach($posts as $index => $post) {
            echo ($index + 1) . " - $post<br>";
        }
    echo "---- foreach loop (for associative[multidimensional] arrays) with index ----<br>";
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
        foreach($people[2] as $key => $value) {
            echo "$key - $value<br>";
        }

    
?>