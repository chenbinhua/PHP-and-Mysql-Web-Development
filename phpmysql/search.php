<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Book-O-R Catalog Search</title>
</head>
<body>
<h1>Book-O-R Catalog Search</h1>
<form action="results.php" method="post">
    Choose Search Type:<br>
    <select name="searchtype" id="">
        <option value="author">Author</option>
        <option value="title">Title</option>
        <option value="isbn">Isbn</option>
    </select>
    <br>
    Enter Search Term:<br>
    <input type="text" name="searchterm" size="40"><br>
    <input type="submit" name="submit" value="Search">
</form>
</body>
</html>