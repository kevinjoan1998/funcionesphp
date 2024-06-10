<?php
/*function get_pokemon() {
    $numero_aleatorio = rand(1, 5);
    switch ($numero_aleatorio) {
        case 1:
            echo "Pikachu <br>";
            break;
        case 2:
            echo "Charmander <br>";
            break;
        case 3:
            echo "Mewtwo <br>";
            break;
        default:
            echo "Lo siento, no hay ningún Pokemon para ti<br>";
    }
}

// Llamando a la función 20 veces
for ($i = 0; $i < 20; $i++) {
    get_pokemon();
}
?>

<?php*/
function buscar_dia($dia_buscado) {
    // Convertimos a minúsculas
    $dia_buscado = strtolower($dia_buscado);
    // Primer letra en mayúscula para que coincida con array
    $dia_buscado = ucfirst($dia_buscado);

    $dias = array(
        "Lunes" => "Monday",
        "Martes" => "Tuesday",
        "Miercoles" => "Wednesday",
        "Jueves" => "Thursday",
        "Viernes" => "Friday",
        "Sabado" => "Saturday",
        "Domingo" => "Sunday"
    );

    foreach ($dias as $español => $ingles) {
        if ($dia_buscado === $español) {
            echo "\n\t El día $dia_buscado se escribe en inglés $ingles ";
            break;
        }
    }
    return $dia_buscado;
}

$dia_buscado = "Lunes";
buscar_dia($dia_buscado);
?>
