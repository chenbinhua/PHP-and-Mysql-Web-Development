<?php
header('content-type:text/html;charset=utf-8');
$uploads_dir='upload';
$fileInfo=$_FILES['myFile'];
$maxSize=2097152;
$ext=pathinfo($fileInfo['name'],PATHINFO_EXTENSION);
$allowExt=array('jpeg','jpg','png','gif','wbmp');
$uniName=md5(uniqid(microtime(true),true)).'.'.$ext;
$destination=$uploads_dir.'/'.$uniName;
if ($fileInfo['error']==UPLOAD_ERR_OK){
    if ($fileInfo['size']>$maxSize){
        exit('上传文件过大');
    }

    if(!in_array($ext,$allowExt)){
        exit('非法文件类型');
    }
    if (!is_uploaded_file($fileInfo['tmp_name'])){
        exit('文件不是POST提交');
    }
    if (!getimagesize($fileInfo['tmp_name'])){
        exit('不是真正的图片类型');
    }
    if (move_uploaded_file($fileInfo['tmp_name'],$destination)){
        echo '文件上传成功';
    }


}

