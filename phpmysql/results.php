<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Book-O-R Search Results</title>
</head>
<body>
<h1>Book-O-R Search Results</h1>
<?php
$searchtype=$_POST['searchtype'];
$searchterm=trim($_POST['searchterm']);
if (!$searchtype || !$searchterm){
    echo 'You have not entered search details,Please go back and try again.';
    exit;
}
if(!get_magic_quotes_gpc()){
    $searchtype=addslashes($searchtype);
    $searchterm=addslashes($searchterm);
}
@ $db=new mysqli('localhost','homestead','Jzhr2016','books');
if(mysqli_connect_errno()){
    echo 'Error:Could not connect to database.Please try again later.';
    exit;
}
$query="select * from books where ".$searchtype." like '%".$searchterm."%'";
$result=$db->query($query);

//返回记录条数
$num_results=$result->num_rows;
echo "<p> Number of books found:".$num_results."</p>";
for ($i=0;$i<$num_results;$i++){
    $row=$result->fetch_assoc();
    echo "<p><strong>".($i+1)."Title: ";
    echo htmlspecialchars(stripslashes($row['title']));
    echo "</strong><br>Author:";
    echo stripslashes($row['author']);
    echo '<br>ISBN:';
    echo stripslashes($row['isbn']);
    echo "<br >Price";
    echo stripslashes($row['price']);
    echo "</p>";
}
$result->free();
$db->close();
?>
</body>
</html>