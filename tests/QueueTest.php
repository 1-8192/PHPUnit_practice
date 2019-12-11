<?php 

    use PHPUnit\Framework\TestCase;

    class QueueTest extends TestCase {
        public function testNewQueueIsEmpty() {
            $queue = new Queue;

            $this->assertEquals(0, $queue->getCount());
            return $queue;
        }

        //to add dependency to another test must return value in first test, then add comment block with @depends and needed test
        /**
         * @depends testNewQueueIsEmpty
         */
        public function testAnItemIsAddedToTheQueue(Queue $queue) {
            $queue->push(12);

            $this->assertEquals(1, $queue->getCount());
            return $queue;
        }

        /**
         * @depends testAnItemIsAddedToTheQueue
         */
        public function testAnItemIsRemovedFromTheQueue(Queue $queue) {
            $item = $queue->pop();

            $this->assertEquals(0, $queue->getCount());
            $this->assertEquals(12, $item);
        }
    }
?>
