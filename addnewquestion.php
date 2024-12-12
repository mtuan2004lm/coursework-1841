<?php
if(isset($_POST['posttext'])){
    try{
        include 'include/DatabaseConnection.php';
        include 'include/DatabaseFunction.php';
        insertPost($pdo, $_POST['posttext'],$_POST['user'], $_POST['module'], $_FILES['fileToUpload']['name']);
        header('location: post.php');
    }catch (PDOException $e){
        $title = 'An error has occurred';
        $output = 'Database error: ' . $e->getMessage();
    }
}else{
    include 'include/DatabaseConnection.php';
    include 'include/DatabaseFunction.php';
    include 'include/uploadFile.php';
    $title = 'Add a new post';
    $user = allUser($pdo);
    $module = allModule($pdo);
    ob_start();
    include 'templates/addpost.html.php';
    $output = ob_get_clean();
}
include 'templates/layout.html.php';
