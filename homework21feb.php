<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="homework21feb.php" method="POST">
  <p>Введите ваше имя:<br>
    Имя: <input type="text" name="firstname" value="Введите ваше имя"><br>
    <input type="submit" value="Отправить">
    <?php 
        if (!empty($_POST["firstname"])) {
            echo "Здравствуйте, ".$_POST["firstname"];
 } else { 
            echo "Введите имя";
    }
    ?>
</body>
</html>