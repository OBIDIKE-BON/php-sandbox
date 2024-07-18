<?php
setcookie('name', '', time() - 3600, '/');

// session_destroy();
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
<body>
    <div class="flex justify-center bg-red-900 h-screen">
        <div class="bg-gray-400 p-8 rounded shadow-md h-[250px] w-full max-w-md">
            <h1 class="text-2xl font-semibold mb-6">Session Destroyed</hjson>
            <br>
            <a href="page.php" class="text-blue-500">Go to page</a>
            <br>
            <a href="index.php" class="text-blue-500">Go to Home</a>
        </div>
    </div>
</body>
</html>