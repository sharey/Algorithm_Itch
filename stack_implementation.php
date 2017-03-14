<?php
# Stack Implementation using PHP array functions - array_shift, array_unshift

class Stack
{
    protected $stack;
    protected $limit;
    
    public function __construct($limit = 10)
    {
        $this->stack = array();
        $this->limit = $limit;
    }
    
    function push($x)
    {
        if(count($this->stack) < $this->limit)
            array_unshift($this->stack, $x); // Insert an element into stack
        else
            echo "Stack is Full";
    }
    
    function pop()
    {
        if(count($this->stack) == 0)
            echo "Stack is Empty";
        else
            array_shift($this->stack); // Remove the top element from stack
    }
    
    function dump()
    {
        echo "<pre>";print_r($this->stack);
    }
}

$obj = new Stack();

$obj->push(2);
$obj->push(1);
$obj->push(5);
$obj->push(3);
$obj->dump();

$obj->pop();
$obj->dump();


