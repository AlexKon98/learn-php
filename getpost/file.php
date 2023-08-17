<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <!-- Обязательно указывать форме атрибут enctype, чтобы отправлять файлы -->
  <form action="/file.php" method="post" enctype="multipart/form-data">
    <input type="file" name="photo">
    <input type="submit" value="Отправить">
  </form>
</body>
</html>

<?php
var_dump($_FILES);
?>