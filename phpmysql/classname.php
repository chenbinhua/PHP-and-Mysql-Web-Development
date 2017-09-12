<?php
class classname
{
    public $attribute;
    function __construct($param)
    {
        $this->attribute=$param;
        echo $this->attribute;
    }

    public function operation()
    {
        echo 'this is operation';
    }

    function __destruct()
    {
        echo 'destruct';
    }
}