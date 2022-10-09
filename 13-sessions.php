<?php
    // SESSIONS.
    session_start();
    // 1. '$_SESSION[]': sessions are a way to store information (in variables) to be used across multiple pages. Unlike cookies, sessions are stored on the server not at client level.

    // 2. '$_POST': allows the passing of data through forms.
    if(isset($_POST['submit'])) {
        $username = filter_var($_POST['username'], FILTER_SANITIZE_SPECIAL_CHARS);
        $password = $_POST['password'];
        if($username === 'Fred' && $password === 'password') {
            $_SESSION['username'] = $username;
            header('Location: /php/tm-php-for-beginners/tma-php-for-beginners/extras/dashboard.php');
        }
        else {
            echo 'Incorrect login details bro.';
        }
    }
?>

<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
    <div>
        <label for="username">Username: </label>
        <input type="text" name="username">
    </div>
    <div>
        <label for="password">Password: </label>
        <input type="password" name="password">
    </div>
    <button type="submit" name="submit">Submit</button>
</form>
<p>Go directly to the <a href="./extras/dashboard.php">dashboard</a>.</p>