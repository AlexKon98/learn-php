<?php

// т.к. куки можно изменить на клиенте и они имеют определенное время жизни, то для хранения каких либо важных данных лучше использовать сессии, они хранятся на сервере и могут быть бесконечными

session_start();
if (!isset($_SESSION['sent'])) {
  $_SESSION['sent'] = 0;
} else {
  if ($_POST['form-checker']) {
    $_SESSION['sent']++;
  }
}
$sent = $_SESSION['sent'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <p>Form was sent <?php echo $sent; ?> times</p>
  <form action="/session.php" name="test" method="post">
    <input type="hidden" name="form-checker" value="1">
    <input type="submit" value="Send">
  </form>
</body>
</html>
