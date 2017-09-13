<?php
require_once ('file_exceptions.php');


$tires=$_POST['tireqty'];
$oil=$_POST['oilqty'];
$sparkqty=$_POST['sparkqty'];
$address=$_POST['address'];
$date=date('Y-m-d H:i:s');
$DOCUMENT_ROOT=$_SERVER['DOCUMENT_ROOT'];
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bob's Auto Parts - Order Results</title>
</head>
<body>
 <h1>Bob's Auto Parts</h1>
<h2>Order Results</h2>

 <?php
 $date=date('H:i,jS F');
 echo "<p> Order processed at".$date."</p>";
 echo "<p> you order is as follows</p>";

 $totalqty=0;
 $totalqty=$tires+$oil+$sparkqty;
 echo '<p>items ordered:'.$totalqty.'<br>';
 if($totalqty==0){
     echo "you did not order anything on the previous page!<br>";
 }else{
     if($tires>0){
         echo $tires.' tires<br>';
     }
     if($oil>0){
         echo $oil.' oil<br>';
     }
     if($sparkqty>0){
         echo $sparkqty.' sparkqty<br>';
     }
 }

 $totalamount=0.00;

 define('TIRERPICE',100);
 define('OILPRICE',10);
 define('SPARKPRICE',4);

 $totalamount=$tires*TIRERPICE+$oil*OILPRICE+$sparkqty*SPARKPRICE;
 $totalamount=number_format($totalamount,2,'.',' ');

 echo '<p> Total of order is'.$totalamount.'</p>';
 echo '<p> Address to ship to is'.$address.'</p>';

 $outputstring=$date."\t".$tires." tires\t".$oil." oil\t".$sparkqty." sparkqty plugs\t\$".$totalamount."\t".$address."\n";

 try
 {
     if(!($fp=@fopen("$DOCUMENT_ROOT/phpmysql/order/order.txt",'ab')))
         throw new fileOpenException("open",42);
     if(!flock($fp,LOCK_EX))
         throw new fileLockException();
     if(!fwrite($fp,$outputstring,strlen($outputstring)))
         throw new fileWriteException();
     flock($fp,LOCK_UN);
     fclose($fp);
     echo "<p>Order writen.</p>";
 }
 catch (fileOpenException $foe)
 {
     echo "<p><strong>Order file could not be opend.please contact our webmaster for help.</strong>";
 }
 catch (Exception $e)
 {
     echo "<p><strong>your Order could not be processed at this time. please tyr again later.</strong>";
 }
 ?>

</body>
</html>