<?php
require_once 'database.php';

// Prepare a SELECT statement
$stmt = $pdo->prepare('SELECT * FROM `Blog`.`posts`');

// Execute the statement
$stmt->execute();

// Fetch the results
$posts = $stmt->fetchAll();

// var_dump($posts);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <title>Blog</title>
</head>

<body class="bg-gray-100">
  <header class="bg-blue-500 text-white p-4">
    <div class="container mx-auto">
      <h1 class="text-3xl font-semibold">My Blog</h1>
    </div>
  </header>
  <div class="container mx-auto p-4 mt-4">
    <?php foreach ($posts as $post) : ?>
      <div class="post_item md my-4" data-id="<?=$post['id'] ?>">
        <div class="rounded-lg shadow-md">
          <div class="p-4">
            <h2 class="text-xl font-semibold"><?= $post['title']; ?></h2>
            <p class="text-gray-700 text-lg mt-2"><?= $post['body']; ?></p>
          </div>
        </div>
      </div>
    <?php endforeach; ?>
  </div>

<form id="showPost" action="post.php" method="post" style="display: none;">
  <input type="hidden" name="post_id" id="post_id" value="">
</form>

<script>
      document.querySelectorAll('.post_item').forEach(element => {
        element.addEventListener('click', event => {
          event.preventDefault();
          
          const postId = element.getAttribute('data-id');

          document.getElementById('post_id').value = postId;

          document.getElementById('showPost').submit();
        });
      });

</script>

</body>

</html>