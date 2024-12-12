<?php
require "login/Check.php";
try{
    include '../include/DatabaseConnection.php';
    include '../include/DatabaseFunction.php';

    $posts = allPost($pdo);
    $title= 'Post list';
    $totalpost = totalpost($pdo);
    
    ob_start();
    include '../templates/adminpost.html.php';
    $output = ob_get_clean();
}catch (PDOException $e){
    $title = 'An error has occured';
    $output= 'Database error:' . $e->getMessage();
}
include '../templates/adminlayout.html.php'; 