<?php
function get_pokemon() {
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

<?php 
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





<?php
function sumar($a, $b){
  // Se verifica si las variables $a y $b son numéricas
  if (is_numeric($a) && is_numeric($b)) {
    $resp = $a + $b;
    echo "El resultado de la suma de $a + $b: $resp";
  } else {
    echo "Error: Las variables deben ser numéricas.";
  }
}

// Se llama a la función sumar con dos argumentos
sumar(4, 5); 

?>


<?php
if (!function_exists('sumar')) {
  function sumar($a = 0, $b = 0) {
    $resp = $a + $b;
    echo "El resultado de la suma de $a + $b: $resp";
  }
}

$arreglos = [1, 2];

// Usando el operador de propagación de argumentos
sumar(...$arreglos);
// Sin el operador de propagación
sumar($arreglos[0], $arreglos[1]); // Se pasan los elementos del array como argumentos individuales

// Con el operador de propagación
sumar(...$arreglos); // Equivalente a sumar(1, 2)
