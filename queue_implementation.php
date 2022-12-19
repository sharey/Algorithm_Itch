<?php
# Queue Implementation using PHP array functions - array_unshift, array_pop

class Queue
{
    protected $queue;
    protected $limit;
    
    public function __construct($limit = 10)
    {
        $this->queue = array();
        $this->limit = $limit;
    }
    
    public function push($x)
    {
        if(count($this->queue) < $this->limit)
            array_unshift($this->queue, $x); // Insert an element into queue
        else
            echo "Queue is Full";
    }
    
    public function pop()
    {
        if(count($this->queue) == 0)
            echo "Queue is Empty";
        else
            array_pop($this->queue); // Remove the top element from stack
    }
    
    public function dump()
    {
        echo "<pre>";print_r($this->queue);
    }
}

$obj = new Queue();

$obj->push(2);
$obj->push(1);
$obj->push(5);
$obj->push(3);
$obj->push(9);
$obj->push(13);
$obj->push(33);
$obj->push(2);
$obj->push(11);
$obj->push(8);
$obj->dump();

$obj->pop();
$obj->dump();
