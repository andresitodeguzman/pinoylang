<?php

namespace Pinoylang;

class Translator {

  public $code;
  private $words = array(
    "sabawat("=>"foreach(",
    "bawat("=>"for(",
    "ibalik("=>"return(",
    "sabihin("=>"echo(",
    "ipakita("=>"print(",
    "_Tama_"=>"True",
    "_Mali_"=>"False",
    "_Meron_"=>"True",
    "_Wala_"=>"False",
    "subukan{"=>"try{",
    "saluhin("=>"catch(",
    "_WalangLaman_"=>"Null",
    "Klase"=>"Class",
    "walanglaman("=>"empty(",
    "kung("=>"if(",
    "ibapa"=>"else",
    "habang{"=>"while{",
    "gawin{"=>"do{",
    "gawain:"=>"function",
    "sakali("=>"case(",
    "karaniwan:"=>"default:",
    "tapusin("=>"die(",
    "bilangin("=>"count(",
    "_bilang_"=>"as",
    "groupo("=>"array(",
    "isama("=>"include(",
    "kailangan("=>"kailangan(",
    '$ito'=>'$this',
    "pangalan"=>"namespace",
    "_katumbas_"=>"==",
    "_hindi_katumbas_"=>"!==",
    "var "=>"$",
    "_lahat_"=>"Public",
    "_kanya_"=>"Private",
    "_kanila_"=>"Protected",
    "_bago_" => "new"
  );

  function __construct($code){
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
