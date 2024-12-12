<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="style.css">
        <title><?=$title?></title>
    </head>
    <body>
        <header><h1>Website post question from student </h1></header>
        <nav>
            <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="post.php">Post List</a></li>
            <li><a href="addnewquestion.php">Add New Question</a></li> 
            <li><a href="admin/login/Login.html">Admin Login</a></li>    
        </ul>
        </nav>
        <main>
            <?=$output?>
        </main>
        <footer>&copy; GreenWich University</footer>
    </body>
</html>
