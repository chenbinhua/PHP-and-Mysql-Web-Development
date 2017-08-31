<?php

class upload{
    protected $fileName;
    protected $imgFlag;
    protected $maxSize;
    protected $allowMime;
    protected $allowExt;
    protected $uploadPath;
    protected $fileInfo;

    /**
     * upload constructor.
     * @param string $fileName
     * @param bool $imgFlag
     * @param string $uploadPath
     * @param int $maxSize
     * @param array $allowExt
     * @param array $allowMime
     */
    public function __construct($fileName='myFile',$imgFlag=true,$uploadPath='./upload',$maxSize=5242880,$allowExt=array('jpeg','jpg','png','gif'),$allowMime=array('image/jpg','image/jpeg','image/png','image/gif'))
    {
        $this->fileName=$fileName;
        $this->maxSize=$maxSize;
        $this->allowMime=$allowMime;
        $this->allowExt=$allowExt;
        $this->uploadPath=$uploadPath;
        $this->imgFlag=$imgFlag;
        $this->fileInfo=$_FILES[$this->fileName];
    }

    /**
     * 检查上传文件是否出错
     * @return bool
     */
    protected function checkError()
    {
        if($this->fileInfo['error']>UPLOAD_ERR_OK){
            switch ($this->fileInfo['error']){
                case 1:
                    $this->error='超过PHP配置文件大小';
                    break;
                case 2:
                    $this->error='超过表单限制大小';
                    break;
                case 3:
                    $this->error='文件部分上传';
                    break;
                case 4:
                    $this->error='没有选择文件上传';
                    break;
            }
            return false;
        }
        return true;
    }

    /**
     * 检查上传文件大小
     * @return bool
     */
    protected function checkSize()
    {
        if($this->fileInfo['size']>$this->maxSize){
            $this->error='上传文件超出限制大小';
            return false;
        }
        return true;
    }

    /**
     * 检查上传文件类型
     * @return bool
     */
    protected function checkExt()
    {
        $this->ext=strtolower(pathinfo($this->fileInfo['name'],PATHINFO_EXTENSION));
        if(!in_array($this->ext,$this->allowExt)){
            $this->error='文件类型错误';
            return false;
        }
        return true;
    }

    /**
     * 检查文件类型是否允许
     * @return bool
     */
    protected function checkMime()
    {
        if (!in_array($this->fileInfo['type'],$this->allowMime)){
            $this->error='不允许的文件类型';
            return false;
        }
        return true;
    }

    /**
     * 检查是否真实图片
     * @return bool
     */
    protected function checkTrueImg()
    {
        if($this->imgFlag){
            if(!@getimagesize($this->fileInfo['tmp_name'])){
                $this->error='不是真实图片';
                return false;
            }
            return true;
        }
    }

    /**
     * 检查文件上传方式
     * @return bool
     */
    protected function checkHTTPPost()
    {
        if(!is_uploaded_file($this->fileInfo['tmp_name'])){
            $this->error='文件不是通过HTTP post方式上传';
            return false;
        }
        return true;
    }

    /**
     * 显示错误
     */
    protected function showError(){
        exit('<span style="color:red">'.$this->error.'</span>');
    }

    /**
     * 检测目录不存在时创建目录
     */
    protected function checkUploadPath()
    {
        if(!file_exists($this->uploadPath)){
            mkdir($this->uploadPath,0777,true);
        }
    }

    /**
     * 生成唯一字符串
     * @return string
     */
    protected function getUniName()
    {
        return md5(uniqid(microtime(true), true));
    }

    /**
     * 上传文件
     * @return string
     */
    public function uploadFile()
    {
        if($this->checkError()&&$this->checkSize()&&$this->checkExt()&&$this->checkMime()&&$this->checkTrueImg()&&$this->checkHTTPPost())
        {
            $this->checkUploadPath();
            $this->uniName=$this->getUniName();
            $this->destination=$this->uploadPath.'/'.$this->uniName.'.'.$this->ext;
            if (move_uploaded_file($this->fileInfo['tmp_name'],$this->destination)){
                return $this->destination;
            }else{
                $this->error='文件移动失败';
                $this->showError();
            }

        }else{
            $this->showError();
        }
    }
}