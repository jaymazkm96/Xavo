 <?php  
 //load_data.php  
 $connect = mysqli_connect("localhost", "root", "", "testing");  
 $output = '';  
 if(isset($_POST["genre_id"]))  
 {  
      if($_POST["genre_id"] != '')  
      {  
           $sql = "SELECT * FROM event WHERE genre_id = '".$_POST["genre_id"]."'";  
      }  
      else  
      {  
           $sql = "SELECT * FROM event";  
      }  
      $result = mysqli_query($connect, $sql);  
      while($row = mysqli_fetch_array($result))  
      {  
           $output .= '<div class="col-md-3"><a href="s1.php"><div style="border:1px solid #ccc; padding:20px; margin-bottom:20px;">'.$row["event_name"].'</div></a></div>';  
      }  
      echo $output;  
 }  
 ?>  