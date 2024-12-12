<?php
try{
    include '../include/DatabaseConnection.php';
    include '../include/DatabaseFunction.php';
    deletePost($pdo, $_POST['id']);
    header('location: post.php');
}catch(PDOException $e){
$title = 'An error has occured';
$output = 'Unable to connect to delete post: '.$e->getMessage();
}
include '../templates/layout.html.php';