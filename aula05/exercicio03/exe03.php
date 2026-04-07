<?php

    $json_str = file_get_contents("nomes.json");

    $produtos = json_decode($json_str, true);

    $produtos[] = [
        "nome" => "Mouse",
        "preco" => 50
    ];

    $json_novo = json_encode($produtos, JSON_PRETTY_PRINT);

    file_put_contents("produtos.json", $json_novo);

    echo "Produto adicionado com sucesso!";

?>
