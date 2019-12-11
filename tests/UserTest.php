<?php 

    use PHPUnit\Framework\TestCase;

    class UserTest extends TestCase {

        public function testReturnsFullName() {
            require "User.php";

            $user = new User;
            $user->first_name = "Tom";
            $user->last_name = "Test";

            $this->assertEquals("Tom Test", $user->getFullName());
        }

        public function testFullNameIsEmptyByDefault() {

            $user = new User;

            $this->assertEquals("", $user->getFullName());
        }
    }
?>