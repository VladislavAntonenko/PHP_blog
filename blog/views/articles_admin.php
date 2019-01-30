<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Мой первый блог</title>
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <h1>Мой первый блог</h1>
    <a href="index.php?action=add">Добавить статью</a>
    <div>
        <div>
            <table class="admin-table">
                <tr>
                    <th>Дата</th>
                    <th>Заголовок</th>
                    <th></th>
                    <th></th>
                </tr>
                <?php foreach ($articles as $a): ?>
                <tr>
                    <td><?=$a['date']?></td>
                    <td><?=$a['title']?></td>
                    <td><a href="index.php?action=edit&id=<?=$a['id'] ?>">Редактировать</a> </td>
                    <td><a href="index.php?action=delete&id=<?=$a['id'] ?>">Удалить</a> </td>
                </tr>
    <?php endforeach; ?>
            </table>
            </div>
    <footer>
        <p>Мой первый блог<br>Copyright &copy; 2019</p>
    </footer>
</div>
</body>
</html>