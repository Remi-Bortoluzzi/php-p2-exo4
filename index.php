<?php
    $magnitudeScale = 7;
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Exercice 4</title>
</head>
<body>
    <?php
        switch ($magnitudeScale) {
            case 1:
                echo '<p>Micro-séisme impossible à ressentir.</p>';
            break;
            case 2:
                echo '<p>Micro-séisme impossible à ressentir mais enregistrable par les sismomètres.</p>';
            break;
            case 3:
                echo '<p>Ne cause pas de dégats mais commence à pouvoir être légèrement ressenti.</p>';
            break;
            case 4:
                echo '<p>Séisme capable de faire bouger des objets mais ne causant généralement pas de dégats.</p>';
            break;
            case 5:
                echo '<p>Séisme capable d\'engendrer des dégats importants sur de vieux bâtiments ou bien des bâtiments présentants des défauts de construction. Peu de dégats sur des bâtiments modernes.</p>';
            break;
            case 6:
                echo '<p>Fort séisme capable d\'engendrer des destructions majeures sur une large distance (180 km) autour de l\'épicentre.</p>';
            break;
            case 7:
                echo '<p>Séisme capable de destructions majeures à modérées sur une très large zone en fonction de la distance.</p>';
            break;
            case 8:
                echo '<p>Séisme capable de destructions majeures sur une très large zone de plusieurs centaines de kilomètres.</p>';
            break;
            case 9:
                echo '<p>Séisme capable de tout détruire sur une très vaste zone.</p>';
            break;
        }
    ?>
</body>
</html>