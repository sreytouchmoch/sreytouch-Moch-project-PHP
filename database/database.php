<?php
    function db(){
        return new mysqli('localhost','root','','food_order');
    }
   
    function getpost(){
        return db()->query("SELECT * FROM post  ORDER BY post_id DESC");
    }
    function getcategory(){
        return db()->query("SELECT * FROM category ORDER BY category_id DESC");
    }
    
    function deletepost($id){
        return db()->query("DELETE FROM post WHERE post_id ='$id' ");
    }
    function deletecategory($id){
        return db()->query("DELETE FROM category WHERE category_id = $id");
    }
    function createpost($value){
        $name = $value['name'];
        $image =$value['image'];
        $price = $value['price'];
        $description= $value['description'];
        $date = $value['date'];
        $user =1;
        $category = 1;
        return db()->query("INSERT INTO post (name,image,price,description,date,user_id,category_id) VALUES ('$name','$image','$price','$description','$date','$user','$category')");
    }
    function createcategory($value){
        $name = $value['name'];
        $description = $value['description'];
        
        return db()->query("INSERT INTO category (name),(description) VALUES ('$name','$description')");
    }
    
    function selectpostOne($id) {
        return db()->query("SELECT * FROM post WHERE post_id = $id");
    }
    
    function updatecategory($value){
        $id = $value['id'];
        $name = $value['name'];
        $description = $value['description'];

        return db()->query("UPDATE category SET name='$name', description='$description' WHERE category_id = '$id' ");
    }
    function selectcategoryOne($id) {
        return db()->query("SELECT * FROM category WHERE category_id = $id");
    }

    function updatepost($value){
        $id = $value['id'];
        $name = $value['name'];
        $image = $value['image'];
        $price = $value['price'];
        $description =$value['description'];
        $date = $value['date'];
        return db()->query("UPDATE post SET name='$name' ,image='$image', price='$price', description ='$description',date='$date' WHERE post_id = '$id' ");
    }