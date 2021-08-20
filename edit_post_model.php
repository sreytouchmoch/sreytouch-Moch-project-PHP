<?php
    require_once('./database/database.php');

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        // print_r($_POST);
        $isUpdate = updatepost($_POST);
        print_r($_POST);
        echo $isUpdate;
        if($isUpdate){
            header('Location: index.php?page=food');
        }
    }