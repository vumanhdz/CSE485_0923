<?php
 require 'connect_database.php';
 if(isset($_POST['txtCatId'])){
    echo "has been clicked";
    $userid = $_POST['txtCatId'];
    $username = $_POST['txtCatName'];
   if(!empty($username)){
      echo "<pre>";
      print_r($_POST);
      $sql = "UPDATE `theloai` SET ten_tloai = '$username' WHERE ma_tloai = '$userid'";
         if($conn -> query($sql) == TRUE){
            echo "Update successfully";
            header("Location: category.php");
         }
         else {
            echo "Error: {$sql}".$conn;
         }
      }else{
          echo "Please enter category name";
      }
 } 
?>