<?php
require("./counter.php");

function index(){
    $text = $_POST['textos'];
    $new_count = new Counter($text);
    $res = array('total' => $new_count->getLength(), 'palavras'=> $new_count->getArray());
    echo json_encode($res);
}

index();

?>
