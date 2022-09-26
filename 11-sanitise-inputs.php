<?php
    // $_GET and $_POST SUPERGLOBALS.
    
    // 1. '$_GET': allows the passing of data through URLs.
    if(isset($_GET['submit'])) {
        echo htmlspecialchars($_GET['person-name']);
        $age = filter_input(INPUT_GET, 'age', FILTER_SANITIZE_SPECIAL_CHARS);
    }
    
?>

<a href="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>?person-name=Dude&age=99">Clunk</a>

<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="GET">
    <div>
        <label for="person-name">Name: </label>
        <input type="text" name="person-name">
    </div>
    <div>
        <label for="age">Age: </label>
        <input type="text" name="age">
    </div>
    <button type="submit" name="submit">Submit</button>
</form>

<?php
    // 2. '$_POST': allows the passing of data through forms.
    if(isset($_POST['submit'])) {
        echo htmlspecialchars($_POST['person-name']);
        $age = filter_var($_POST['age'], FILTER_SANITIZE_SPECIAL_CHARS);
    }
?>

<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
    <div>
        <label for="person-name">Name: </label>
        <input type="text" name="person-name">
    </div>
    <div>
        <label for="age">Age: </label>
        <input type="text" name="age">
    </div>
    <button type="submit" name="submit">Submit</button>
</form>