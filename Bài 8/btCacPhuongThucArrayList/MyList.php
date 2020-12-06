<?php
class MyList
{
    public $size;
    public $elements;

    private $danhsach;
    private $dodai;
    public function __construct($size, $elements)
    {
        $this->size = $size;
        $this->elements = $elements;
        $this->danhsach = $elements;
        $this->dodai = $size;
    }

    public function insert($index, $obj)
    {
        for ($x = $this->size - 1; $x >= $index; $x--) {
            $this->elements[$x] == $this->elements;

        }
        $this->elements[$index] = $obj;
        $this->size++;
    }

    public function add($obj)
    {

        array_push($this->elements, $obj);
        $this->size++;
    }

    public function remove($index)
    {

            array_splice($this->elements,$index,1);
        $this->size--;

    }



    public function get($index)
    {
       return $this->elements[$index];
    }

    public function clear()
    {
        $this->elements = array();
        $this->size = 0;
    }

    public function addAll($arr)
    {
        $this->elements = array_merge($this->elements, $arr);
        $this->size = $this->size + count($arr);
    }

    public function indexOf($obj)
    {
        for ($x = 0; $x <= $this->size; $x++) {
            if ($obj == $this->elements[$x]) {
                return $x;
            }
        }
        return 'Không tìm thấy';
    }

    public function isEmpty()
    {
        if ($this->size == 0) {
            return true;
        }
        return false;
    }

    public function sort()
    {
        sort($this->elements);
    }

    public function reset()
    {


        $this->elements = $this->danhsach;

        $this->size = $this->dodai;
}
public function size(){
        return $this->size();
}
}

