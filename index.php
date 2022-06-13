<?php
class Vehicle{
    private $brand;
    function get_brand(){
        return $this->brand;
    }
    function set_brand($value){
        $this->brand=$value;
    }
}

class Car extends Vehicle{
    function print(){
        echo $this->brand;
    }
}
$obj=new Car();
$obj->set_brand('toyota');
echo $obj->get_brand();

// $obj->print();
?>