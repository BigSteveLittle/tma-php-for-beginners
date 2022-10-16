<?php
    // FILE HANDLING.

    // File handling is the ability to read and write files on the server.
    // PHP has built in functions for reading and writing files.
    
    $file = 'extras/movies.txt';
    
    // 1. 'file_exists' and 'readfile': file_exists will check if the file isset. While readfile can be used to output a file's content.
    if(file_exists($file)) {
        echo htmlspecialchars(readfile($file));
        $handle = fopen($file, 'r');
        $contents = fread($handle, filesize($file));
        fclose($handle);
        echo htmlspecialchars($contents);
        echo '<hr>';
    }
    else {
        $handle = fopen($file, 'w');
        $contents = 'Bringing up Baby (1938)' . PHP_EOL . 
                    'Duck soup (1933)' . PHP_EOL . 
                    'Rear Window (1954)' . PHP_EOL . 
                    'Treasure Island (1950)' . PHP_EOL . 
                    'Those Calloways (1965)' . PHP_EOL . 
                    'Tonka (1958)' . PHP_EOL;
        fwrite($handle, $contents);
        fclose($handle);
        echo htmlspecialchars($contents);
    }
?>