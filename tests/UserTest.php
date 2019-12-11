<?php 

    use PHPUnit\Framework\TestCase;

    class UserTest extends TestCase {

        public function testReturnsFullName() {
            // loading user class using autoloader
            // require "User.php";

            $user = new User;
            $user->first_name = "Tom";
            $user->last_name = "Test";

            $this->assertEquals("Tom Test", $user->getFullName());
        }

        /**
         * @test tells PHPUnit this is test even w/o test in name
         */
        public function full_name_is_empty_by_default() {

            $user = new User;

            $this->assertEquals("", $user->getFullName());
        }

        public function testNotificationSent() {
            $user = new User;
            $user->email = "test@test.com";
            $mock_mailer = $this->createMock(Mailer::class);
            $mock_mailer->expects($this->once())->method('sendMessage')->willReturn(true);
            $user->setMailer($mock_mailer);

            $this->assertTrue($user->notify("Hello"));
        }
    }
?>