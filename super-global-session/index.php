<?php
session_start();

$_SESSION['name'] = 'John Doe';

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
                <?php echo isset($_SESSION['name']) ? 'Session created succefully' : 'Session creation failed'; ?>  
            </h1>
        </div>
    </div>
</body>
</html>