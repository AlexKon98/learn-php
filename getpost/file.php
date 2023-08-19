<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <!-- Обязательно указывать форме атрибут enctype="multipart/form-data", чтобы отправлять файлы -->
  <form action="/file.php" method="post" enctype="multipart/form-data">
    <input type="file" name="photo">
    <input type="submit" value="Отправить">
  </form>
</body>
</html>

<?php
if (isset($_FILES['photo'])) {
  try {
    move_uploaded_file($_FILES['photo']['tmp_name'], './' . $_FILES['photo']['name']);
?>

<img src="<?php echo './' . $_FILES['photo']['name'] ?>" alt="">

<?php
  } catch (Exception $e) {
    echo $e->getMessage();
  }
}
?>
