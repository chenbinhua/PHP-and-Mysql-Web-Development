
<?php
/**
 * 字符串操作
 */
header('content-type:text/html;charset=utf-8');

//表单变量
$name=$_POST['name'];
$email=$_POST['email'];
$feedback=$_POST['feedback'];

//默认邮箱地址和主题
$email_arrary=explode('@',$email);
if(strstr($feedback,'shop'))
    $toAddress='shop@example.com';
else if(strstr($feedback,'delivery'))
    $toAddress='delivery@example.com';
echo $toAddress;
$offcolor=array('sex','fuck','makelove');
$feedback=str_replace($offcolor,'***',$feedback);
echo $feedback;
$subject='Feedback from web site';

$mailContent='Customer name'.$name.'\n'.
            'Customer email'.$email.'\n'.
            'Customer comments'.$feedback.'\n';

$fromAddress='From:webserver@example.com';

//发送邮件

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bob's Auto Parts - Feedback Submitted</title>
</head>
<body>
       <h1>Feedback submintted</h1>
       <p>Your feedback has benn sent.</p>
</body>
</html>
