<?PHP
    function rus2translit($string) {
        $array = array(
            "А" => "A",
            "И" => "I",
            "С" => "S",
            "Б" => "B",
            "Й" => "Y",
            "Т" => "T",
            "Ы" => "Y",
            "В" => "V",
            "К" => "K",
            "У" => "U",
            "Г" => "G",
            "Л" => "L",
            "Ф" => "F",
            "Э" => "E",
            "Д" => "D",
            "М" => "M",
            "Х" => "KH",
            "Ю" => "YU",
            "Е" => "EYE",
            "Н" => "N",
            "Ц" => "TS",
            "Я" => "YA",
            "Ё" => "EYE",
            "О" => "O",
            "Ч" => "CH",
            "Ж" => "ZH",
            "П" => "P",
            "Ш" => "SH",
            "З" => "Z",
            "Р" => "R",
            "Щ" => "SHCH",
        );
        return strtr($string, $array);
    };
    function str2url($str) {
        // переводим в транслит
        $str = rus2translit($str);
        // в нижний регистр
        $str = strtolower($str);
        // заменям все ненужное нам на "-"
        $str = preg_replace('~[^-a-z0-9_]+~u', '-', $str);
        // удаляем начальные и конечные '-'
        $str = trim($str, "-");
        return $str;
    }
    $myString = "ПРИВЕТ";
    echo rus2translit($myString);
?>