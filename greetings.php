<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Приветствие</h1>
    <p>Просто файл, который хочет быть добродушным!</p>
    <form method="POST">
    <input type="text" name="name" placeholder="Введите ваше имя">
    <input type="submit" value="Отправить">
    </form>
    <?php
    if (isset($_POST["name"])) {
        print('Привет,'. $_POST['name']);
    }
    ?>
</body>
</html>