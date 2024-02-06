<?php

function calculator($bil1, $operator, $bil2){

    if($operator == '+'){
        $hasil = $bil1 + $bil2;
    }elseif($operator == '-'){
        $hasil = $bil1 - $bil2;
    }elseif ($operator == '*'){
        $hasil = $bil1 * $bil2;
    }elseif($operator == '/'){
        $hasil = $bil1 / $bil2;
    }else{
        'tidak ada operator';
    }
    return $hasil;
}
echo calculator('50','*', '8');

?>