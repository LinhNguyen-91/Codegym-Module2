<?php
include ('Node.php');
class LinkedList{
    protected $firstNode;
    protected $lastNode;
    protected $count;
    public function __construct()
    {
        $this->firstNode = null;
        $this->lastNode = null;
        $this->count = 0;

    }
    public  function add($index){
        $node = new Node($data);

            $beforeNode = $this->firstNode;

            for($i = 1; $i < $index; $i++) {
                $beforeNode = $beforeNode->next;
            }

            $node->next = $beforeNode->next;
            $beforeNode->next = $node;

            $this->count++;

    }
    public function addFirst(){
        $node = new Node($data);

        if($this->isEmpty()) {
            $this->firstNode = $this->lastNode = $node;
        }

            $node->next = $this->firstNode;

            $this->firstNode = $node;

            $this->count++;

    }
    public function addLast(){
        $node = new Node($data);

        if($this->isEmpty()) {
            $this->firstNode = $this->lastNode = $node;
        }

            $this->lastNode->next = $node;

            $this->lastNode = $node;

        $this->count++;

    }
public  function remove($index){
    $beforeNode = $this->firstNode;
    $currentNode = $this->firstNode->next;

            for($i = 0; $i < $index; $i++) {
                $beforeNode = $currentNode;
                $currentNode = $currentNode->next;
            }

            $beforeNode->next = $currentNode->next;

            $this->count--;

}
public function delete($Obj){
    $beforeNode = $this->firstNode;
    $currentNode = $this->firstNode->next;

    for($i = 0; $i < $this->count; $i++) {
        if ($currentNode->data != $Obj) {
            $beforeNode = $currentNode;
            $currentNode = $currentNode->next;
        } else {
            $beforeNode->next = $currentNode->next;
            break;
        }
    }
    $this->count--;
}
public function get($index){
    $node = $this->firstNode;

            for($i = 0; $i < $index; $i++) {
                $node = $node->next;
            }

            return $node->data;

}
public function size(){
        return $this->count;
}
public function printList(){
    $arr = array();

            $node = $this->firstNode;

            for($i = 0; $i < $this->count; $i++) {
                $arr[] = $node->data;
                $node = $node->next;
            }

            return $arr;

}
    public function contains($item) {
        $node = $this->firstNode;

            for($i = 0; $i < $this->count; $i++) {
                if($node->data === $item) {
                    return true;
                }

                $node = $node->next;
            }

            return false;
        }
public function indexOf($item){
    $node = $this->firstNode;

    for($i = 0; $i < $this->count; $i++) {
        if($node->data === $item) {
            return $i;
        }

        $node = $node->next;
    }

    return -1;
}
}