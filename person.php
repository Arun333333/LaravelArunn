<?php 
//use PHPunit\Framework\TestCase;
class Person {
    private $firstname;
    private $lastname;
    
    public function __construct($firstn,$lastn){
        $this->firstname=$firstn;
        $this->lastname=$lastn;
    }
    public function getfullname(){
        return $this->firstname." ".$this->lastname;
    }

}