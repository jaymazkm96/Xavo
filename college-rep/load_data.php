 <?php  
 //load_data.php  
 $connect = mysqli_connect("localhost", "root", "", "testing");  
 $output = '';  
 if(isset($_POST["brand_id"]))  
 {  
      if($_POST["brand_id"] != '')  
      {  
           $sql = "SELECT * FROM product WHERE brand_id = '".$_POST["brand_id"]."'";  
      }  
      else  
      {  
           $sql = "SELECT * FROM product";  
      }  
      $result = mysqli_query($connect, $sql);  
      while($row = mysqli_fetch_array($result))  
      {  
           $output .= '<div class="col-md-3"><a href="s1.php"><div style="border:1px solid #ccc; padding:20px; margin-bottom:20px;">'.$row["product_name"].'</div></a></div>';  
      }  
      echo $output;  
 }  
 ?>  