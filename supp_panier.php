<?php

   session_start();
    
    if(isset($_POST['supp_panier'])){

            unset($_SESSION['products']);

    } header('Location:index.php');
    
?>

