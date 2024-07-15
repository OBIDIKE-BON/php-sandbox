<?php
$numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9];
$names = array('name', 'age', 'address');

function dump($value)
{
    echo '<pre>';
    var_dump($value);
    echo '</pre>';
}

// dump($numbers);
// $numbers[] = 'rich';
// dump($numbers);
// unset($numbers[3]);
// dump($numbers);
// $numbers = array_values($numbers);
// dump($numbers);

$sum = array_sum($numbers);
$len = count($numbers);
echo "The sum of $len numbers is $sum";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />

    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible" />

    <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport" />

    <title>Home | Stackfloat</title>

    <meta property="og:title" content="Home | Stackfloat" />

    <meta property="og:locale" content="en_US" />
    <link rel="icon" type="image/png" href="./assets/img/favicon.png" />

    <meta property="og:site_name" content="OgbahIsaac & Co" />
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <div class="container mx-auto">
        <h1 class="text-4xl font-bold text-center">Welcome to Stackfloat</h1>
        <p class="text-center bg-green-100 text-green-200"><?= pi() ;?></p>
    </div>
    <!-- <script defer src="https://cdn.tailwindcss.com"></script> -->
</body>

</html>