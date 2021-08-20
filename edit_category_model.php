<?php
    require_once('./database/database.php');

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        // print_r($_POST);
        $isUpdate = updatecategory($_POST);
       
        if($isUpdate){
            header('Location: index.php?page=ice_cream');
        }
    }