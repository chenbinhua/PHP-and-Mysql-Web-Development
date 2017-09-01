<?php
/**
 * @param $fileInfo
 * @param array $allowExt
 * @param int $maxSize
 * @return array
 */
function uploadFile($fileInfo,$allowExt=array('jpeg', 'jpg', 'png', 'gif'),$maxSize=2097152)
{
    /**
     * 返回错误信息
     */
    if ($fileInfo['error'] > UPLOAD_ERR_OK) {
        switch ($fileInfo) {
            case 1:
                $mess = '上传文件超过配置值';
                break;
            case 2:
                $mess = '超过表单值';
                break;
        }
    }

    /*
     * 检查文件上传类型
     */
    $ext = pathinfo($fileInfo['name'], PATHINFO_EXTENSION);

    if (!in_array($ext, $allowExt)) {
        exit('非法文件类型');
    }



    if ($fileInfo['size'] > $maxSize) {
        exit('上传文件过大');
    }

    if (!is_uploaded_file($fileInfo['tmp_name'])) {
        exit('文件不是POST提交');
    }

    $path = 'upload';
    if (!file_exists($path)) {
        mkdir($path, 0777, true);
    }
    $uniName = md5(uniqid(microtime(true), true)) . '.' . $ext;
    $destination = $path . '/' . $uniName;
    if (!@move_uploaded_file($fileInfo['tmp_name'], $destination)) {
        echo '文件上传失败';
    }

    //文件上传成功
    return array(
        'newName'=>$destination,
        'size'=>$fileInfo['size'],
        'type'=>$fileInfo['type']
    );
}