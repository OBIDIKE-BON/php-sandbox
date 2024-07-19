<?php
require_once 'database.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Prepare a SELECT statement
  if (!isset($_POST['post_id'])) {
    header('Location: index.php');
    exit;
  }
  $stmt = $pdo->prepare('SELECT * FROM `Blog`.`posts` WHERE id = :id');
  $id = htmlspecialchars($_POST['post_id']);
  $arguments = ['id' => $id];
  $stmt->execute($arguments);
  $post = $stmt->fetch();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <title>Post One</title>
</head>

<body class="bg-gray-100">
  <header class="bg-blue-500 text-white p-4">
    <div class="container mx-auto">
      <h1 class="text-3xl font-semibold">My Blog</h1>
    </div>
  </header>
  <div class="container mx-auto p-4 mt-4 w-full max-w-md">
    <div class="md my-4">
      <div class="rounded-lg shadow-md">
        <div class="p-4">
          <h2 class="text-xl font-semibold"><?= $post['title'] ?> </h2>
          <p class="text-gray-700 text-lg mt-2 mb-5"><?= $post['body'] ?></p>
          <a href="index.php">Go Back</a>
        </div>
      </div>
    </div>
    <div class="p-4 gap-4 flex items-center justify-center">
      <a href="edit.php?id=<?= $post['id'] ?>" class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600 focus:outline-none">Update</a>
      <form method="post" action="delete.php">
        <button name="submit" value="<?= $post['id'] ?>" class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600 focus:outline-none">Delete</button>
      </form>
    </div>
  </div>
</body>

</html>