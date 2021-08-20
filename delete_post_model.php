<?php
require_once('database/database.php');
$id=$_GET['id'];
$isDeleted =deletepost($id);
if($isDeleted){
    header('Location: index.php?page=food');
}