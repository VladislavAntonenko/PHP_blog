<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Мой первый блог</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <h1>Мой первый блог</h1>
    <div>
        <?php foreach ($articles as $a): ?>
        <div class="article">
            <h3><a href="article.php?id=<?=$a['id']?>"><?=$a['title']?></a></h3>
            <em>Опубликовано: <?=$a['date']?></em>
            <p><?=$a['content']?></p>
        </div>
    </div>
    <?php endforeach; ?>
    <footer>
        <p>Мой первый блог<br>Copyright &copy; 2019</p>
    </footer>
</div>
</body>
</html>