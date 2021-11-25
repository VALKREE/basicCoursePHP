<?PHP
  function seacrh($string){
      $string = str_replace(" ", "_", $string);
      echo $string;
  };
  seacrh("Какая-то строка с пробелами.");
?>