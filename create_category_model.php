<?php
 require_once('./database/database.php');

 if($_SERVER['REQUEST_METHOD'] == 'POST'){

     $isCreated = createcategory($_POST);
     echo $isCreated;

     if($isCreated){
         header('Location: index.php?page=ice_cream');
     }
}