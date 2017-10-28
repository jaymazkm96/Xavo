 <?php  
 if(isset($_POST["participant_id"]))  
 {  
      $output = '';  
      $connect = mysqli_connect("localhost", "root", "", "testing");  
      $query = "SELECT * FROM tbl_participant WHERE id = '".$_POST["participant_id"]."'";  
      $result = mysqli_query($connect, $query);  
      $output .= '  
      <div class="table-responsive">  
           <table class="table table-bordered">';  
      while($row = mysqli_fetch_array($result))  
      {  
           $output .= '  
                <tr>  
                     <td width="30%"><label>Name</label></td>  
                     <td width="70%">'.$row["name"].'</td>  
                </tr>  
                 
                <tr>  
                     <td width="30%"><label>Gender</label></td>  
                     <td width="70%">'.$row["gender"].'</td>  
                </tr>  
                 
                <tr>  
                     <td width="30%"><label>Phone Number</label></td>  
                     <td width="70%">'.$row["phone-number"].' Year</td>  
                </tr>  
           ';  
      }  
      $output .= '  
           </table>  
      </div>  
      ';  
      echo $output;  
 }  
 ?>