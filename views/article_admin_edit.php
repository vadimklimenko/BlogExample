<!DOCTYPE html>
<html>
<head>
    <meta charset="utf8">
    <title> My Blog</title>
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1>Блог</h1>
        <div>
            <form method="post" action="index.php?action=<?=$_GET['action']?>&id=<?=$_GET['id']?>">
                <div>
                    <label> Название<br> <input type="text" name="title" value="<?=$article['title']?>" class="form=item" autofocus required> 
                    </label>
                </div>
                
                <div>
                    <label> Дата<br> <input type="date" name="date" value="<?=$article['date']?>" class="form=item" required>
                    </label>
                </div>
                
                <div>
                    <label> Содержимое<br><textarea class="form=item" name="content" required><?=$article['content']?></textarea>
                    </label>
                </div>
                <input type="submit" value="Сохранить" class="btn">
            </form>
        </div>
        <footer>
            <p>Блог<br>Copywriting &copy; 2017</p>
        </footer>
    </div>       
</body>
</html>
    