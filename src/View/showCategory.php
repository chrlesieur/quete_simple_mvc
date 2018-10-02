
/**
 * Created by PhpStorm.
 * User: chris
 * Date: 02/10/18
 * Time: 12:05
 */
<!DOCTYPE html>
<html>
<head> ... </head>
<body>
   <main>
    <h1>Category <?= $category['title'] ?></h1>
<ul>
    <li>Id : <?= $category['id'] ?></li>
</ul>
<a href='/public/index.php?route=category'>Back to list</a>
</main>
</body>
</html>