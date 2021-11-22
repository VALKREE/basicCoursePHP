<?PHP
    $i = 1;
    while($i <= 100){
        $n = $i / 3;
        if(is_int($n) === true){
            echo $i."<br>";
        }
        
        $i++;
    }
?>