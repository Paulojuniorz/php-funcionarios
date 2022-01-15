<?php

function findId($funcionarios, $id) {
    foreach ($funcionarios as $func) {
        if ($func['id'] == $id) {
            return $func;
        }
        return null;
    }
}
   

    $funcionarios = [
        ['id' => 4, 'nome' => 'João', 'salario' => 1500],
        ['id' => 21, 'nome' => 'José', 'salario' => 1230.50],
        ['id' => 34, 'nome' => 'Paulo', 'salario' => 1678.54]
    ];

    $id = $_POST['id']; 

    $func = findId($funcionarios, $id);

    if(is_null($func)) {
        echo "não encontrado";
        die();
    } else{
    echo $func['nome'] . ', R$' . number_format($func['salario'], 2);
    };
?>


<!-- number_format(x,2) -->