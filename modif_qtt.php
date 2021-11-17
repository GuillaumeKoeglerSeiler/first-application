<?php

session_start();

$id = filter_input(INPUT_GET, "id", FILTER_VALIDATE_INT);

$mode = filter_input(INPUT_GET, "mode", FILTER_VALIDATE_REGEXP, [
    "options" => [
        "regexp" => "/^(incr|decr)/"
    ]
]);

//$id == 0 est équivalent à $id == false ou id==null

if($id >= 0 && $mode){
    switch($mode){
        case"incr":
            $_SESSION['products'][$id]['qtt']++;
            break;
        case"decr":
            $_SESSION['products'][$id]['qtt']--;
            if($_SESSION["products"][$id]['qtt'] == 0){
                header("Location:supp_article.php?id=$id");
                die;
            }
            break;
    }
}
header('Location:recap.php');
die;
?>