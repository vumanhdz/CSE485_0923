<?php
 require 'connect_database.php';
 if(isset($_POST['btn_insert'])){
    echo "has been clicked";
   $username = $_POST['txtCatName'];
   if(!empty($username)){
      echo "<pre>";
      print_r($_POST);
      $sql = "INSERT INTO `theloai`(`ten_tloai`) VALUES ('$username')";
         if($conn -> query($sql) == TRUE){
            echo "Insert successfully";
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