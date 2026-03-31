<?php

    $json_str = '{"nome":"Murilo", "idade":38, "sexo" "M"}';

    $obj = json_decode($json_str);

    echo $obj;

    echo "<hr>";

    echo "nome: $obj->nome<br>";
    echo "idade: $obj->idade<br>"; 
    echo "sexo: $obj->sexo<br>";  
?>