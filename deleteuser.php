<?php  
 $connect = mysqli_connect("localhost", "root", "", "punchana");  
 $sql = "DELETE FROM users WHERE id = '".$_POST["id"]."'";  
 if(mysqli_query($connect, $sql))  
 {  
      echo 'Data Deleted';  
 }  
 ?>