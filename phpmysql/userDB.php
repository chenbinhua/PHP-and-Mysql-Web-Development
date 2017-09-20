<?php
$name=$_POST['name'];
$password=$_POST['password'];
$db=new mysqli('localhost','homestead','Jzhr2016','auth');
$passMd5=sha1($password);
$query="select * from users where name='".$name."' and password='".$passMd5."'";
$user=$db->query($query);
$row=$user->num_rows;
if($row==1){
    echo "登录成功";
}else{
    echo "用户名或者密码不正确";
}