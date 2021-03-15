<?php
class Car {
    //private
    public $model;
    public function getModel()
    {
        return "The car model is " . $this->model;
    }
}

$mercedes = new Car();

////ini merupkana akses property berasal dari luar class.
$mercedes->model = "Mercedes benz";

echo $mercedes->getModel();

/*
Output : yaitu The car model is Mercedes benz

Penjelasan : 
Program akan berjalan dengan  normal walau melakukan akses property dari luar class.
*/