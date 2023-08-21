<?php
  if (isset($_POST['name'])  && !empty($_POST['name'])) {
    setcookie('username', $_POST['name'], 3600);
  }

  if (isset($_COOKIE['username']) && $_COOKIE['username'] === $_POST['username']) {
    echo 'Form was successfully send';
  } else {
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="/cookie-test.php" method="post">
    <label for="text">
      <span>Text</span>
      <input type="text" name="text" id="text">
    </label>
    <input type="submit" value="Send">
  </form>
</body>
</html>

<?php
}
?>