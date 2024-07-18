<?php
setcookie('name', 'John Doe', time() + 3600, '/');

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
    <div class="flex justify-center bg-blue-900 h-screen">
        <div class="bg-gray-400 p-8 rounded shadow-md h-[250px] w-full max-w-md">
            <h1 class="text-2xl font-semibold mb-6">
                <?php echo isset($_COOKIE['name']) ? 'Cookie created succefully' : 'Cookie creation failed'; ?>
            </h1>

            <a href="page.php" class="text-blue-500">Go to page</a>
        </div>
    </div>
</body>

</html>