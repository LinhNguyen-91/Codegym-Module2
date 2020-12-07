<?php

function kiemTraDauNgoac($bieuThuc){
    $dauNgoac = new SplStack();

    for($x=0;$x<strlen($bieuThuc);$x++){
        if ($bieuThuc[$x]== '(' ) {
            $dauNgoac->push($bieuThuc[$x]);
        }

        if ($bieuThuc[$x]==')'){
            if ($dauNgoac->isEmpty())
                return false;
            else {
                $dauNgoac->pop();
            }
        }
    }

    return !$dauNgoac->isEmpty();
}

echo kiemTraDauNgoac('s * (s – a) * ((s – b) * (s – c) ') ? 'đúng':'sai';