<?php
    // SUPERGLOBALS.
    // Builtin associative arrays with a specific set of variables that carry data.

    // 1. '$_POST': contains data for variables passed through a form.

    // 2. '$_GET': contains data for variables passed through a form via URL.
    
    // 3. '$_REQUEST': contains data for variables passed through a form or URL.

    // 4. '$_COOKIE': contains data for variables passed through a cookie.
    
    // 5. '$_SESSION': contains data for variables passed through a session.
    
    echo "<br><br>---- \$_SERVER [6] ----<br>";
    // 6. '$_SERVER': contains data for the server environment.
    var_dump($_SERVER);
    ?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>List of $_SERVER Output</title>
        </head>
        <body>
            <h3>List of Some $_SERVER Outputs</h3>
                <ul>
                    <li>Host: <?php echo htmlspecialchars($_SERVER['HTTP_HOST']); ?></li>
                    <li>Client Info: <?php echo htmlspecialchars($_SERVER['HTTP_USER_AGENT']); ?></li>
                    <li>Server Software: <?php echo htmlspecialchars($_SERVER['SERVER_SOFTWARE']); ?></li>
                    <li>Server Name: <?php echo htmlspecialchars($_SERVER['SERVER_NAME']); ?></li>
                    <li>Server Port: <?php echo htmlspecialchars($_SERVER['SERVER_PORT']); ?></li>
                    <li>Remote Address: <?php echo htmlspecialchars($_SERVER['REMOTE_ADDR']); ?></li>
                    <li>Document Root: <?php echo htmlspecialchars($_SERVER['DOCUMENT_ROOT']); ?></li>
                    <li>Remote Port: <?php echo htmlspecialchars($_SERVER['REMOTE_PORT']); ?></li>
                    <li>Request URI: <?php echo htmlspecialchars($_SERVER['REQUEST_URI']); ?></li>
                    <li>Current File Dir: <?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?></li>
                </ul>
        </body>
        </html>
    <?php
    // 7. '$_ENV': contains data for environment variables.
    
    // 8. '$_FILES': contains data for uploaded files.
    
    
?>