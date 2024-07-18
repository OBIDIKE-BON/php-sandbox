<?php
session_start();

$name = $_SESSION['name'] ?? 'Guest';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class='bg-gray-400'>
    <div class="flex justify-center h-screen-1/2">
        <div class="bg-gray-400 p-8 rounded shadow-md w-full max-w-md">
            <h1 class="text-2xl font-semibold mb-6">Welcome, <?php echo $name; ?></h1>
        </div>
    </div>
</body>
</html>