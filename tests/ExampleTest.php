<?php 
    //Basic PHP Unit unit test

    //one way to extend framwork
    use PHPUnit\Framework\TestCase;

    class ExampleTest extends TestCase {

        //test public methods must start with 'test'
        public function testAddingTwoAndTwo() {
            //assert equals is from parent class
            $this->assertEquals(4, 2 + 2);
        }
    }
?>