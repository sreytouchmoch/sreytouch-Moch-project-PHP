<?php include_once('partials/header.php'); 
include_once('partials/navbar.php'); 

if (isset($_GET['page'])){
    if($_GET['page'] == 'pages'){
        include_once('pages/home.php');
    }elseif ($_GET['page'] == 'food'){
        include_once('pages/food.php');
    }elseif($_GET['page'] == 'ice_cream'){
         include_once('pages/ice_cream.php');
    }else{
       include_once('pages/404.php');  
    };
}else{
    include_once('pages/home.php');
}

include_once('partials/footer.php'); 
