<?php
require 'index.php';

function test_suma() {
    if (suma(2, 3) !== 5) {
        throw new Exception("Error: La suma de 2 + 3 no es 5");
    }
}

test_suma();
echo "✅ Pruebas ejecutadas correctamente";
