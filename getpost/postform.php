<?php
if (isset($_POST['title']) && isset($_POST['author'] ) && isset($_POST['content'])) {
  $article = [
    'title' => $_POST['title'],
    'author' => $_POST['author'],
    'content' => $_POST['content'],
  ];
  file_put_contents('article.json', json_encode($article));
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
  <form name="post_article" method="post" action="/postform.php ">
    <label for="title">
      <span>Заголовок</span>
      <input type="text" name="title" id="title">
    </label>
    <label for="author">
      <span>Автор</span>
      <input type="text" name="title" id="author">
    </label>
    <label for="content">
      <span>Содержимое</span>
      <textarea name="content" id="content" cols="30" rows="10"></textarea>
    </label>
    <input type="submit" value="Отправить статью">
  </form>
</body>
</html>

<?php
}
?>