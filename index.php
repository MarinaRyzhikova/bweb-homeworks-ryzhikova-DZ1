<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Тест формы</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<h1>Пример формы</h1>
<form action="dadata.php" method="POST">

    <strong>Ваше имя<span class="mf-req">*</span></strong><br>
    <input type="text" name="user_name" value=""><br>

    <strong>Ваше отчество<span class="mf-req">*</span></strong><br>
    <input type="text" name="user_second_name" value=""><br>

    <strong>Ваша фамилия<span class="mf-req">*</span></strong><br>
    <input type="text" name="user_last_name" value=""><br>
    <input type="hidden" name="API-key" value="$e6cfaf86c8aa8fdbe061ad369ee15b96d997f765">
    <input type="hidden" name="key" value="1e4d1dbbdbb5e14868352263ff1454300c61118d">

    <input type="submit" name="submit" value="Отправить">
</form>
</body>
</html>