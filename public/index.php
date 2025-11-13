<?php
include_once $_SERVER["DOCUMENT_ROOT"] . ("/app/models/PokemonFuego.php");
include_once $_SERVER["DOCUMENT_ROOT"] . ("/app/models/Pokemon.php");
include_once $_SERVER["DOCUMENT_ROOT"] . ("/app/models/PokemonElectrico.php");
include_once $_SERVER["DOCUMENT_ROOT"] . ("/app/models/PokemonAgua.php");
include_once $_SERVER["DOCUMENT_ROOT"] . ("/app/models/Movimiento.php");
include_once $_SERVER["DOCUMENT_ROOT"] . ("/app/models/Entrenador.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/public/css/styles.css">
    </link>
</head>

<body>
    <header> Este es mi mini proyecto de PHP que trata de Pokemon</header>
    <section class="pokemon-card">
        <?php

        // Creo todos los movimientos
        $pokemon1Movientos = [
            new Movimiento("Pistola agua", 30),
            new Movimiento("Escaldar", 50),
            new Movimiento("Rayo Burbuja", 10),
            new Movimiento("Latigo", 5)
        ];

        $pokemon2Movientos = [
            new Movimiento("Rayo", 80),
            new Movimiento("Trueno", 100),
            new Movimiento("Bola Voltio", 45),
            new Movimiento("ImpacTrueno", 130)
        ];

        $pokemon3Movientos = [
            new Movimiento("Ascuas", 25),
            new Movimiento("Llamarada", 35),
            new Movimiento("Giro Fuego", 75),
            new Movimiento("Colmillo Íngneo", 200)
        ];
        echo "<br>";
        // Creo todos los pokemons y su entrenador
        $pokemon1 = new PokemonAgua("Squirtel", 25, 10, $pokemon1Movientos, 1);
        echo "Número de Pokémon creados: " . Pokemon::contarPokemons() . "<br>";
        $pokemon2 = new PokemonElectrico("Pikachu", 50, 20, $pokemon2Movientos, 130);
        echo "Número de Pokémon creados: " . Pokemon::contarPokemons() . "<br>";
        $pokemon3 = new PokemonFuego("Charmander", 50, 20, $pokemon3Movientos, 130);
        echo "Número de Pokémon creados: " . Pokemon::contarPokemons() . "<br>";
        $pokemons = [$pokemon1, $pokemon2, $pokemon3];
        echo "<br><br><br>";
        $entrenador = new Entrenador("As", 20, $pokemons);
        $movimiento = new Movimiento("Calzinación", 300);



        // Muestro el entrenador con sus pokemons
        echo "<h2> Aqui se muestran todos los pokemons con su entrenador </h2>";
        echo $entrenador;
        echo "<br><br><br><br>";
        echo "<h2> Aqui se van a mostrar todos los metodos </h2> ";
        // Aqui hago todos los metodos
        echo "<ul>";
        echo "<li>";
        $pokemon1->atacar($pokemon3, 45);
        echo "</li>";
        echo "<li>";
        $pokemon2->aprenderMovimiento("chispa");
        echo "</li>";
        echo "<li>";
        $pokemon2->eliminarMovimiento("chispa");
        echo "</li>";
        echo "<li>";
        $pokemon2->cargar(20);
        echo "</li>";
        echo "<li>";
        $pokemon1->nadar();
        echo "</li>";
        echo "<li>";
        $movimiento->ejecutar();
        echo "</li>";
        $entrenador->agregarPokemon($pokemon1);
        $entrenador->eliminarPokemon($pokemon1)



        ?>
    </section>

    <footer>Hasta aquí la primera entrega</footer>
</body>

</html>