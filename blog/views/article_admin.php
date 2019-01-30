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
    <div>
        <form method="post" action="index.php?action=<?=$_GET['action']?>&id=<?=$_GET['id']?>">
            <div class="col-md-2"><label>
                Название<br>
                <input type="text" name="title" value="<?=$article['title']?>" class="form-item" autofocus required></label><br></div>
            <div class="col-md-2"><label>
                Дата<br>
                <input type="date" name="date" value="<?=$article['date']?>" class="form-item" required><br>
                </label></div>
            <div class="col-md-5"><label>
                Содержимое<br>
                <textarea class="form-item" name="content" required rows="20"><?=$article['content']?></textarea><br>
            </label>
            <input type="submit" value="Сохранить" class="btn"></div>
        </form>
    </div>
    <footer>
        <p>Мой первый блог<br>Copyright &copy; 2019</p>
    </footer>
</div>
</body>
</html>