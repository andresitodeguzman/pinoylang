<?php

namespace Pinoylang;

class Translator {

  public $code;
  private $words = array(
    "sabawat("=>"foreach(",
    "bawat("=>"for(",
    "ibalik"=>"return",
    "sabihin"=>"echo",
    "ipakita"=>"print",
    "Tama"=>"True",
    "Mali"=>"False",
    "subukan"=>"try",
    "saluhin"=>"catch",
    "Wala"=>"Null",
    "Klase"=>"Class",
    "walanglaman("=>"empty(",
    "kung"=>"if",
    "ibapa"=>"else",
    "habang"=>"while",
    "gawin"=>"do",
    "gawain"=>"function",
    "sakali"=>"case",
    "karaniwan"=>"default",
    "tapusin"=>"die",
    "bilangin"=>"count",
    "bilang"=>"as"
  );

  function __construct(String $code){
    $this->code = $code;
  }

  public function translate(){
    $code = $this->code;
    foreach($this->words as $key => $value){
      $code = str_replace($key,$value,$code);
    }
    return $code;
  }

}

?>
