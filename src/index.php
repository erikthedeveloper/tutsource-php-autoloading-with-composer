<?php

require '../vendor/autoload.php';

$load_me    = new LoadMe;
$foo_class1 = new UselessClass;
$foo_class2 = new UselessClass('Foo is not Bar ... yet Baz!');
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Composer Playground</title>
</head>
<body>
    <h1>Welcome and <?php echo $load_me->hello('World') ?></h1>
    <h2>Foo1: <?php echo $foo_class1->getFoo() ?></h2>
    <h2>Foo2: <?php echo $foo_class2->getFoo() ?></h2>
</body>
</html>