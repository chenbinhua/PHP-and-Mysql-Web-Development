<?php
class ShowProduct{
    public $title;
    public $mainName;
    public $firstName;

    function __construct($title,$mainName,$firstName)
    {
        $this->title=$title;
        $this->mainName=$mainName;
        $this->firstName=$firstName;
    }

    public function getProduct()
    {
        return $this->firstName.$this->mainName;
    }
}
$product1=new ShowProduct('php','binhua','chen');
print_r($product1->getProduct());