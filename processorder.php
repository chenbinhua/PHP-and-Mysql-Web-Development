<?php
header('content-type:text/html;charset=utf-8');

$tires=$_POST['tireqty'];
$oil=$_POST['oilqty'];
$sparkqty=$_POST['sparkqty'];
$address=$_POST['address'];
$date=date('Y-m-d H:i:s');
$prices=array('tires'=>100,'oil'=>10,'spark'=>4);
foreach($prices as $key=>$price){
    echo $key.'-'.$price;
}

$DOCUMENT_ROOT=$_SERVER['DOCUMENT_ROOT'];
echo 'tires:'.$tires.'<br>oil:'.$oil.'<br>sparkqty:'.$sparkqty.'<br>address:'.$address;
$fp=fopen("$DOCUMENT_ROOT/orders.txt",'ab');
if(!$fp){
    echo '文件打开错误';
    exit;
}

$outputstring=$date."\t".$tires."\t".$oil."\t".$sparkqty."\t".$address."\n";
if(fwrite($fp,$outputstring,strlen($outputstring))){
    echo "订单写入成功";
};
fclose($fp);