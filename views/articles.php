<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8">
        <title> My Blog</title>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <h1>Блог</h1>
            <a href="admin">Панель администратора</a>
            <div>
                <?php foreach($articles as $a): ?>
                <div class="article">
                    <h3>
                        <a href = "articles.php?id=<?=$a['id']?>"><?=$a['title']?></a></h3>
                    <em>Опубликовано: <?=$a['date']?></em>
                    <p><?=articles_intro($a['content'])?></p>
                </div>
                <?php endforeach ?>
            </div>
            <footer>
                <p>Блог<br>Copyright &copy; 2017</p>
            </footer>
        </div>
    </body>
</html>
