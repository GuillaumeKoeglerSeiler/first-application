<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <title>Ajout produit</title>

    </head>
    <body>
        <h2 class="multicolor">Un code promo se cache sur le site, à vous de le trouver !!</h2>
    <div class="formu">
    <div class="a1"><a href="recap.php">Voir le panier</a></div>
    <?php
        if(isset($_SESSION['products']) > 0){
            foreach($_SESSION['products'] as $produits){
                @$resultat += $produits["qtt"];
            }
    echo "<span class='texte'>(".@$resultat." produits)</span><br>";
        if(isset($_GET['echec']) && $_GET['echec']) {
            echo "<br><span class='ephemere'><i class='fas fa-exclamation-triangle'></i> Aucun produit ajouté au panier</span>";} 
            } 
        if (isset($_GET['succes']) && $_GET['succes']) {
            echo "<br><span class='ephemere'><i class='fas fa-check-circle'></i> Vous venez d'ajouter un produit au panier</span>";}
    ?>
            
            <div class="h"><h1>&nbsp;Ajouter un produit&nbsp;</h1></div>
            <form action="traitement.php" method="post">
                <p>
                    <div class="label"><label>
                        Nom du produit :
                        <input type="text" name="name">
                    </label></div>
                </p>
                <p>
                    <div class="label"><label>
                        Prix du produit :&nbsp;
                        <input type="number" name="price" step="any">
                    </label></div>
                </p>
                <p>
                    <div class="label"><label>
                        Quantité désirée :
                        <input type="number" name="qtt" value="1">
                    </label></div>
                </p>
                <p>
                    <input class="sub" type="submit" name="submit" value="Ajouter le produit">
                </p>
            </form>
        </div>
        <div class="code_promo">dl12</div>
    </body>
</html>