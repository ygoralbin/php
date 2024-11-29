<?php
function incrementarContador() {
    $arquivo = 'contador.txt';

    if (!file_exists($arquivo)) {
        file_put_contents($arquivo, '0');
    }

    $contador = (int)file_get_contents($arquivo);
    $contador++;

    file_put_contents($arquivo, (string)$contador);

    return $contador;
}
?>
