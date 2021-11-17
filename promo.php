<?php

session_start();

    if (isset($_POST["pass"]) AND $_POST["pass"] == "dl12"){
	    echo "<span class='retour'>La promo c'est que vous pouvez fixer vos propres prix</span>";
    }
    else {
        echo "<span class='retour'>Vous avez saisi un mauvais code promo</span>";
    }

?>
<!DOCTYPE html>
    <html>
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="style.css">
        </head>
        <body>
    <br>
        <div class="a2"><a class="a3" href="recap.php">Retournez au panier</a></div>
        </body>
    </html>


