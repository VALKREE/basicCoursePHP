<?PHP
    $n = 10;
    $i = 0;
    do{
        if($i == 0){
            echo $i." - нуль<br/>";
        }else{
            if($i % 2){
                echo $i." - нечетное число<br/>";
            }else{
                echo $i." - четное число<br/>";
            }
        }
        
        $i++;
    } while ($i <= $n)
?>