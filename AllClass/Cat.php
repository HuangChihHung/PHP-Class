<?php

include_once "Animal.php";

class Cat extends Animal
{
    private $petName;




    public function __construct($petNameFromOut)
    {
        parent::__construct("貓");
        $this->petName = $petNameFromOut;
    }


    function getPetName(){

        return $this->getPetName();

    }

}

$cat = new Cat("Kitty");
echo $cat->getAnimalType();