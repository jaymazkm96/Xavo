<?php
$connect = mysqli_connect("localhost", "root", "", "testing");
$output='';
    $message='';
if(isset($_POST["employee_id"]))
{
    
 $query = "DELETE FROM tbl_participant WHERE id = '".$_POST["employee_id"]."'";
    $message='Data Deleted';
 if(mysqli_query($connect, $query))
 {  
     $output .= '<label class="text-success">' . $message . '</label>';  
           $select_query = "SELECT * FROM tbl_participant ORDER BY id DESC";  
           $result = mysqli_query($connect, $select_query);  
           $output .= '  
                <table class="table table-bordered">  
                     <tr>  
                          <th width="55%">Name</th>  
                          <th width="15%">Edit</th>  
                          <th width="15%">View</th>
                          <th width="15%">Delete</th>
                     </tr>  
           ';  
           while($row = mysqli_fetch_array($result))  
           {  
                $output .= '  
                     <tr>  
                          <td>' . $row["name"] . '</td>  
                          <td><input type="button" name="edit" value="Edit" id="' . $row["id"] . '" class="btn btn-info btn-xs edit_data" /></td>  
                          <td><input type="button" name="view" value="view" id="' . $row["id"] . '" class="btn btn-info btn-xs view_data" /></td> 
                          <td><input type="button" name="delete" value="Delete" id="' . $row["id"] . '"class="btn btn-danger btn-xs delete"/></td>
                     </tr>  
                ';  
           }  
           $output .= '</table>';  
 }
     echo $output;  
}
?>