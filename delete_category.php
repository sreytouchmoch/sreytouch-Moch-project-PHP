<?php
require_once('./database/database.php');
$id = $_GET['id'];
$isDeleted = deletecategory($id);
if($isDeleted){
    header('Location: index.php?page=ice_cream');
}