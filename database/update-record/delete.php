<?php
require_once 'database.php';

function closeThis(): void
{
    header('location: index.php');
    exit;
}


if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit'])) {
    $id = htmlspecialchars($_POST['submit']);

    $sql = 'DELETE FROM posts WHERE id = :id';

    try {
        $stmt = $pdo->prepare($sql);

        $params = [
            'id' => $id
        ];
        echo $id;
        if ($stmt->execute($params)) {
            closeThis();
        } else {
            echo "<script> alert('An error ocoured \nplease contact support');</script>";
        }
        echo $id, $body;
    } catch (Exception $e) {
        error_log($e->getMessage());
        echo "<script> alert('An error ocoured');</script>";
        closeThis();
    }
}
echo "<script> alert('Unauthorised');</script>";
closeThis();
