<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP_ASSIGNMENT</title>
</head>

<body>
    <h1>The patterns are below :</h1>
    <form action="./pattern.php" method="post">
        <label for="num">enter any number:</label>
        <input type="text" name="number" id="num">
        <input type="submit">
    </form>
    <?php
    $num = $_POST['number'];
    $num = (int) $num;
    echo "<h5>The number of rows are :" . $num . "</h5>";
    $star = '*';
    $blank = '&nbsp&nbsp';
    // Right half pyrmind
    for ($i = 0; $i < $num; $i++) {
        echo str_repeat($star, $i + 1) . '<br>';

    }
    echo '<br>';
    //  Left half pyrmind
    for ($i = 0; $i < $num; $i++) {
        echo str_repeat($blank, $num - ($i + 1)) . str_repeat($star, ($i + 1)) . '<br>';
    }
    echo '<br>';
    // pyramid
    $pyramid_star_num = 1;
    for ($i = 0; $i < $num; $i++) {
        echo str_repeat($blank, $num - ($i + 1)) . str_repeat($star, ($pyramid_star_num)) . str_repeat($blank, $num - ($i + 1)) . '<br>';
        $pyramid_star_num += 2;
    }
    // hollow square
    echo '<br>';
    for ($i = 0; $i < $num; $i++) {
        if ($i == 0 or $i == $num - 1) {
            echo str_repeat($star, $num) . "<br>";
        } else {
            echo str_repeat($star, 1) . str_repeat($blank, $num - 2) . str_repeat($star, 1) . "<br>";
        }
    }
    echo '<br>';
    // hollow pyramid
    $pyramid_star_num = 1;
    for ($i = 0; $i < $num; $i++) {
        if ($i == 0 or $i == $num - 1) {
            echo str_repeat($blank, $num - ($i + 1)) . str_repeat($star, ($pyramid_star_num)) . str_repeat($blank, $num - ($i + 1)) . '<br>';
        } else {
            echo str_repeat($blank, $num - ($i + 1)) . str_repeat($star, 1) . str_repeat($blank, $pyramid_star_num - 2) . str_repeat($star, 1) . '<br>';
        }
        $pyramid_star_num += 2;
    }


    ?>
</body>

</html>