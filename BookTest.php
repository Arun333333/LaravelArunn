<?php 
use PHPunit\Framework\TestCase;
class BookTest extends TestCase{
    public function testArray(){
        $this->assertEmpty([]);
    }
}