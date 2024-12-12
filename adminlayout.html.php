<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="../style.css">
        <title><?=$title?></title>
    </head>
    <body>
        <header id="admin">
            <h1>Website post question from student <br />
            manager post , user , module </h1></header>
        <nav>
            <ul>
            <li><a href="post.php">post List</a></li>
            <li><a href="addpost.php">Add a new post</a></li>
            <li><a href="login/Logout.php">Public Site/Logout</a></li>
            </ul>
        </nav>
        <main>
            <?=$output?>
        </main>
        <footer>&copy; GreenWich University</footer>
    </body>
</html>
