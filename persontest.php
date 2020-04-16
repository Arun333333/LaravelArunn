<?php 
require_once('person.php');
use PHPunit\Framework\TestCase;
class Persontest extends TestCase{
        public function testsome(){
      $p = new Person('Arun','Sandhu');
        $this->assertEquals('Arun Sandhu' , $p->getfullname());
    }
}