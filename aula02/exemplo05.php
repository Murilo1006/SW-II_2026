<?php

$nomes = ['Fulano', 'Ciclano', 'Beltrano'];
// echo $nomes;

foreach ($nomes as $nome) {
    echo "O nome é $nome <br>"; 
}

foreach ($nomes as $chave => $valor) {
    echo "$chave <br>"; 
}
?>