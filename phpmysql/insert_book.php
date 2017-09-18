<?php
$isbn=trim($_POST['isbn']);
$author=trim($_POST['author']);
$title=trim($_POST['title']);
$price=trim($_POST['price']);

if(!$isbn || !$author || !$title || !$price){
    exit('有数据没填入，请重新提交');
}
if(!get_magic_quotes_gpc()){
    $isbn=addslashes($isbn);
    $author=addslashes($author);
    $title=addslashes($title);
    $price=doubleval($price);
}
@ $db=new mysqli('localhost','homestead','Jzhr2016','books');

if(mysqli_connect_errno()){
    exit('数据库连接失败');
}
$query="insert into books values ('".$isbn."','".$author."','".$title."','".$price."')";
$result=$db->query($query);
if($result){
    echo "共有".$db->affected_rows."条记录受影响";
}else{
    echo "数据写入失败";
}
$db->close();


