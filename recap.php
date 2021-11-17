<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
    <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <title>Récapitulatif des produits</title>
    </head>
    <body>

    <a href="index.php">Ajouter d'autres produits</a>         
    <?php
    
            if(isset($_SESSION['products']) > 0){
                foreach($_SESSION['products'] as $produits){
                    @$resultat += $produits["qtt"];
            } echo "<span class='texte'>(".@$resultat." actuellement)</span><br>";
        } else {echo "";}
            
            if(!isset($_SESSION['products']) || empty($_SESSION['products'])){
                echo "<p>Aucun produit en session...</p>";
            }
            else{
                echo "<table>",
                        "<thead>",
                            "<tr>",
                                "<th>#</th>",
                                "<th>Nom</th>",
                                "<th>Prix</th>",
                                "<th>Quantité</th>",
                                "<th>Total</th>",
                            "</tr>",
                        "</thead>",
                        "<tbody>";
                    $totalGeneral = 0;
                    foreach($_SESSION['products'] as $index => $product){
                        //on calcule le total de la ligne içi
                        $total = $product['price']*$product['qtt'];
                        echo "<tr>",
                                "<td class='index'>".$index."</td>",
                                "<td>".$product["name"]."&nbsp; <a href='supp_article.php?id=$index'><input class='supp' type='submit' name='supp_art' value='X'></td>",
                                "<td>".number_format($product['price'], 2, ",", "$&nbsp;")."</td>",
                                "<td>",
                                    "<a class='black' href='modif_qtt.php?id=$index&mode=decr'>&minus;</a>&nbsp;",
                                    $product["qtt"]."&nbsp;",
                                    "<a class='black' href='modif_qtt.php?id=$index&mode=incr'>&plus;</a></td>",
                                "<td>".number_format($total, 2, ",", "$&nbsp;")."</td>",
                            "</tr>";
                        $totalGeneral+= $total;
                    }
                    echo "<tr>",
                            "<td class='total' colspan=4>&nbsp; TOTAL DU PANIER &nbsp;</td>",
                            "<td class='total price'><strong>".number_format($totalGeneral, 2, ",", "&nbsp;"). "&nbsp;€</strong></td>",
                        "</tr>",
                        "</tbody>",
                        "</table>",
                        "<form action='supp_panier.php' method='post'><input type='submit' class='supp_panier' name='supp_panier' value='Supprimer panier'></form>",
                        "<form method='POST' action='promo.php'>",
                        "<input type='text' name='pass' placeholder='code promo'><input type='submit' name='sub'></form>";
                }
            
        ?>

    </body>
</html>