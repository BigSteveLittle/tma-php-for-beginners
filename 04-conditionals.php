<?php
    // CONDITIONAL STATEMENTS.

    /* Operators.
        < Less than.
        > Greater than.
        <= Less than or equal to.
        >= Greater than or equal to.
        == Equal to.
        === Identical to (strict).
        !== Not equal to.
        !=== Not identical to (strict).
    */
    // 'if': execute code if a condition is met.
    $age = 2;
    if($age >= 18) {
        echo 'You are old enough to vote sister!!';
    }
    else {
        echo "Please don't be childish!!";
    }
    echo '<br>';
    // 'elseif': give 2nd or more option to be met.
    $theHour = date('H');
    if($theHour < 12) {
        echo 'Good Morning';
    }
    elseif($theHour > 12 && $theHour < 18) {
        echo 'Good Afternoon';
    } 
    else {
        echo 'Good Evening!';
    }
    echo '<br>the time is: ';
    echo date('H:i');
    echo '<br>';
    // 'if': using booleans.
    if(true) {
        echo 'It is true!';
    }
    echo '<br>';
    // 'empty()': referring to arrays.
    $posts = ['First Post', 'Second Post'];
    if(empty($posts)) {
        echo '2dar!<br>';
    }
    // '!': not equal to.
    if(!empty($posts)) {
        echo '2dar!<br>';
    }
    if(!empty($posts)) {
        echo $posts[1] . '<br>';
    }
    $posts2 = [];
    if(!empty($posts2)) {
        echo $posts2[1];
    }
    else {
        echo 'There are no posts bro.<br>';
    }
    // 'Ternary operator': shorthand conditional statement.
    echo !empty($posts) ? $posts[1] : 'There are no posts bro.';
    echo '<br>';
    // 'Ternary operator': as a variable.
    $secondPost = !empty($posts) ? $posts[1] : 'There are no posts bro.';
    echo $secondPost;
    echo '<br>';
    // 'Ternary operator': using 'null' assigns a value of null to $secondPost2 if first condition is not met.
    $secondPost2 = !empty($posts) ? $posts[1] : null;
    echo $secondPost2;
    echo '<br>';
    // 'null coalescing operator': even shorter shorthand.
    $secondPost3 = $posts[1] ?? null;
    echo $secondPost3;
    echo '<br>';
    // 'switch': offers a list of conditions that could be met.
    $favouriteColour = 'yellow';
    switch($favouriteColour) {
        case 'green':
            echo 'Bro your favourite colour is clearly green.';
            break;
        case 'purple':
            echo 'Bro your favourite colour is clearly purple';
            break;
        case 'aqua marine':
            echo 'Bro your favourite colour is clearly aqua marine';
            break;
        default:
            echo 'Man your fav colour is not green, purple or aqua marine. Whats doing bro?';
    }
?>
