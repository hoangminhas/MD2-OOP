<?php
class Dog {
    public $name;
    public $breed;

    public function __construct($name, $breed)
    {
        $this->name = $name;
        $this->breed = $breed;
    }

    function setName($newNam){
        $this->name = $newNam;
    }

    function getName(){
        return $this->name;
    }

    function setBreed($newBreed){
        $this->breed = $newBreed;
    }

    function getBreed(){
        return $this->breed;
    }

    function getInfor(){
        return "Hello, my name is $this->name. And I am a $this->breed.";
    }
}