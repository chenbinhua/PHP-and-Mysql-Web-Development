<?php
header('content-type:text/html;charset=utf-8');
$document_root=$_SERVER['DOCUMENT_ROOT'];

$fp=fopen("$document_root/orders.txt",'rb');
if(!$fp){
    exit('文件读取不成功');
}
while(!feof($fp)){
    $order=fgets($fp,999);
    echo $order.'<br>';
}
echo filesize("$document_root/orders.txt");