<?php

function  main($text){
    $arr_words = explode(" ", $text);
    $length = count($arr_words);
    $total_words = 0;

    $pre  = array();
    for($i =0 ; $i< $length; $i++) {
        $key = ($arr_words[$i]);
        $count = count_word($arr_words, $key);
        if (trim($key) != ""){
            $pre[$key] = $count;
        }
    }
    $total_words = array_sum($pre);


    $e = array('total' => $total_words, 'arr'=> $pre);
    echo json_encode($e);
}


function  count_word( $arr, $word){
    if (count($arr) == 0){
        return 0;
    } else if ( ($arr[0]) == $word ){
        array_shift($arr);
        return 1 + count_word($arr, $word);
    } else{
        array_shift($arr);
        return 0 + count_word($arr, $word);
    }

}

function stripAccents($stripAccents){
    return strtr(utf8_decode($stripAccents),
            utf8_decode('àáâãäçèéêëìíîïñòóôõöùúûüýÿÀÁÂÃÄÇÈÉÊËÌÍÎÏÑÒÓÔÕÖÙÚÛÜÝ?!,:.'),
                        'aaaaaceeeeiiiinooooouuuuyyAAAAACEEEEIIIINOOOOOUUUUY     ');

}


echo "<pre>";
$text = trim("meu nome ! ? kareN,    É é e João. joao e karen");
$text = stripAccents($text);
$text = mb_strtolower($text);

echo($text);
main($text);
echo "</pre>";


?>
