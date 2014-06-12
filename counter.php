<?php
class Counter{

    public $array;
    public $lenght;
    public $text;

    public function __construct($text) {
        $this->array  = array();
        $this->lenght = 0;
        $this->text   = $text;
        $this->normalize_text();
        $this->group_words();


    }

    public function getText(){
        return $this->text;
    }

    public function getArray(){
        return $this->array;
    }

    public function getLength(){
        return $this->lenght;
    }

    private function group_words(){
        $text = $this->text;
        $arr_words = explode(" ", $text);
        $result  = array();
        for($i =0 ; $i< count($arr_words); $i++){
            $key = ($arr_words[$i]);
            $count = $this->count_word($arr_words, $key);
            if (trim($key) != ""){
                if (!array_key_exists($key, $result)){
                    $result[$key]=$count;
                }
            }
        }
        $this->array = $result;
        $this->lenght = array_sum($result);
    }

    private function count_word( $arr, $word){
        if (count($arr) == 0){
            return 0;
        } else if ( ($arr[0]) == $word ){
            array_shift($arr);
            return 1 + $this->count_word($arr, $word);
        } else{
            array_shift($arr);
            return 0 + $this->count_word($arr, $word);
        }
    }

    private function normalize_text(){
        $this->text = str_replace(array("\r", "\n"), " ", $this->text);
        $this->text = $this->strip_accents($this->text);
        $this->text = mb_strtolower($this->text);
    }

    private function strip_accents($string){
        return strtr(utf8_decode($string),
                utf8_decode('àáâãäçèéêëìíîïñòóôõöùúûüýÿÀÁÂÃÄÇÈÉÊËÌÍÎÏÑÒÓÔÕÖÙÚÛÜÝ?!,;:.'),
                            'aaaaaceeeeiiiinooooouuuuyyAAAAACEEEEIIIINOOOOOUUUUY      ');
    }

}
?>