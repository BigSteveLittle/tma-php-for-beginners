<?php
    // COOKIES.
    
    // 1. 'setcookie()': Cookies are a mechanism for storing data in the remote browser and thus tracking or identifying return users. You can set specific data to be stored in the browser, and then retrieve it when the user visits the site again.

    // setcookie($name, $value, $expire, $path, $domain, $secure, $httponly);
    
    setcookie('first_name', 'Jacky', time() + 86400 * 60, '', '', true, true);
    
    // setcookie('first_name', '', time() - 86400, '', '', true, true);

    if(isset($_COOKIE['first_name'])) {
        echo htmlspecialchars($_COOKIE['first_name']);
    }

    ?>