<?php
class Stack {
    public $stack;
    public $limit;
    public function __construct($limit = 20)
    {
$this->stack = array();
        $this->limit = $limit;
    }
    public function push($data){
        array_unshift($this->stack,$data);
    }
    public function pop(){
        array_shift($this->stack);
    }
    public function top(){
        return $this->stack[0];
    }
    public function isEmpty(){
return count( $this->stack) ===0;
    }
}
