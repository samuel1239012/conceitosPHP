<?php

// laço de repetção for


for($i=1; $i<=10 ; $i++){
// inicial comp saida

    if($i == 5 || $i == 8){
        //break; // interrompe o laço
        //$i = 100;
        continue; // ele volta para o inicio
    }else{
        echo"<br>i = " . $i;
    }

}

?>