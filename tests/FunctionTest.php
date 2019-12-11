<?php 

    //Testing multiple assertions in same test and also importing external functions
    use PHPUnit\Framework\TestCase;

    class FunctionTest extends TestCase {

        public function testAddReturnsCorrectSum() {
            require_once 'functions.php';

            $this->assertEquals(4, add(2,2));
            $this->assertEquals(8, add(5,3));
        }

        public function testDoesNotReturnIncorrectSum() {
            $this->assertNotEquals(5, add(2,2));
        }
    }
?>