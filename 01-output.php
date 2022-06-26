<?php
    // 'echo': output strings, numbers, HTML etc.
    echo 'Hello mate.', 123, 10.5, '<h1>Heading</h1>';
    echo '<br>';
    // 'print': as echo but only handles 1 argument.
    print 'beetroot';
    echo '<br>';
    //'print_r()': output single values as well as arrays.
    print_r('Hello');
    echo '<br>';
    // print_r([1,2,3,4,5]);
    echo '<br>';
    // 'var_dump()': returns verbose information.
    var_dump("G'Day");
    echo '<br>';
    var_dump(true);
    echo '<br>';
    // 'var_export()': as var_dump(), but outputs a string representation of a value.
    var_export('Hello');
    echo '<br>';
    var_export(44);
    echo '<br>';
?>
    <!-- Inline HTML. -->
    <h1><?php echo 'Heading1'; ?></h1>
    <h1><?= 'Heading2'; ?></h1>