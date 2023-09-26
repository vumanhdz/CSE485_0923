<?php
 require 'connect_database.php';
 if(isset($_GET['id'])){
    echo "has been clicked";
    $userid = $_GET['id'];
   if(!empty($userid)){
      echo "<pre>";
      print_r($_POST);
      $sql = "DELETE FROM `theloai` WHERE ma_tloai = '$userid'";
      echo $sql;
         if($conn -> query($sql) == TRUE){
            echo "Delete successfully";
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