<?php
include '../include/DatabaseConnection.php';
include '../include/DatabaseFunction.php';
try{
    if(isset($_POST['posttext'])){
        updatePost($pdo, $_POST['postid'], $_POST['posttext'], $_POST['module']);
        header('location: Post.php');
    } else {
        $post = getPost($pdo,$_GET['id']);
        $title = 'Edit Post';
        $module = allModule($pdo);
        ob_start();
        include '../templates/editpost.html.php';
        $output = ob_get_clean();
    }
} catch(PDOException $e) {
    $title = 'error has occurred';
    $output = 'Error editing post ' . $e->getMessage();
}
include '../templates/adminlayout.html.php';
