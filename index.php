<?php
//turn on error reporting
ini_set('display_errors',1);
error_reporting(E_ALL);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
    <title>Pair Program 2</title>
</head>
<body>

<?php
    echo "<title>Pair Program 2</title>";

    echo "<h1>Pair Program 2</h1>";
    echo "<p>PHP Array Practice</p>";

    $numbers = [7,9,8,9,8,8,6];


    function printArr($numbers)
    {
        $arrayLength = count($numbers);
        for ($i = 0; $i <$arrayLength; $i++)
        {
            echo "<p>$numbers[$i]</p>";
        }
    }

    printArr($numbers);

?>

</body>
</html>

