<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>添加图书</title>
</head>
<body>
      <h1>添加图书</h1>
      <form action="/phpmysql/insert_book.php" method="post">
          <label for="isbn">ISBN: </label><input type="text" name="isbn" id="isbn"><br>
          <label for="author">Author: </label><input type="text" name="author" id="author"><br>
          <label for="title">Title: </label><input type="text" name="title" id="title"><br>
          <label for="price">Price: </label><input type="text" name="price" id="price"><br>
          <input type="submit" value="提交">

      </form>
</body>
</html>