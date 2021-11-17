<?php

   session_start();

         $id = filter_input(INPUT_GET, "id", FILTER_VALIDATE_INT);

   if(isset($_SESSION['products'][$id])){

         unset($_SESSION['products'][$id]);
   }
      header('Location:recap.php');
   