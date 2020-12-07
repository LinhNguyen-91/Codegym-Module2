<?php
class  Node {
    public $value;
    public $next;
    function __construct($value)
    {
        $this->data = $value;
        $this->next = NULL;
    }

    function readNode()
    {
        return $this->value;
    }
}
class Queue
{
    private $front;
    private $back;
    private $count;

    function __construct()
    {
        $this->front = NULL;
        $this->back = NULL;
        $this->count = 0;
    }

    public function isEmpty()
    {
        return $this->count === 0;
    }

    public function enqueue($value)
    {
        if ($this->front != NULL) {
            $link = new Node($value);
            $this->back->next = $link;
            $link->next = NULL;
            $this->back = $link;
            $this->count++;
        } else{
            $this->front = $this->back = new Node ($value);
            $this ->count++;
        }
    }
    public function dequeue(){
        $ketQua =  $this->front->data;
        $this->front = $this->front->next;
            $this->count--;
return $ketQua;
    }
}