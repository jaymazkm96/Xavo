 <?php  
 //fetch.php  
 $connect = mysqli_connect("localhost", "root", "", "testing");  
 if(isset($_POST["participant_id"]))  
 {  
      $query = "SELECT * FROM tbl_participant WHERE id = '".$_POST["participant_id"]."'";  
      $result = mysqli_query($connect, $query);  
      $row = mysqli_fetch_array($result);  
      echo json_encode($row);  
 }  
 ?>