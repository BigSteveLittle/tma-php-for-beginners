<?php
    // EXCEPTIONS.

    /* PHP has an exception model similar to that of other programming languages. An exception can be thrown, and caught ("catched") within PHP. Code may be surrounded in a try block, to facilitate the catching of potential exceptions. Each 'try' must have at least one corresponding 'catch' or 'finally block'. */
    
    // 1. 'inverse()': will take a number and make it the divisor of '1'. Includes a 'throw new Exception()' statement if division is not possible. 
    function inverse($x) {
        if(!$x) {
            throw new Exception("Hey, error bro. Division by zero don't work.");
        }
        return 1/$x;
    }
    // 2. 'try catch': sets an output in a code block (try) then references the above Exception statement if the code fails.
    try {
        echo inverse(4) . '<hr>';
        echo inverse(0); // This code is caught by the 'catch' & the custom error is output.
    }
    catch(Exception $e) {
        echo 'Caught Exception:', ' ', $e->getMessage(), '<hr>';
    }
    // 3. 'finally': code that is part of a 'finally' block will not run through the 'try catch'.
    finally {
        echo 'Finally: <br>';
        echo inverse(3) . '<hr>';
        echo 'Finally: <br>';
        echo inverse(2) . '<hr>';
        echo 'Finally: <br>';
        echo inverse(0); // Code will not be caught by the 'catch' & results in a 'Fatal error'.
    }
    

    