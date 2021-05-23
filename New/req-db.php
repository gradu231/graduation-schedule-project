<?php

function addNewReq($conn,$fullName,$university_number,$project_title,$project_description){

    $sql = "INSERT INTO `request`(`full_name`, `university_number`, `project_title`, `project_description`) "
            . "VALUES ('$fullName',$university_number','$project_title','$project_description')";
    
 if (mysqli_query($conn, $sql)) {
        echo '<script type="text/javascript">';
        echo ' alert("Requested successfully")';  //not showing an alert box.
        echo '</script>';
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
   
}

function loadAllReqInTable($conn){
  
     $sql = "SELECT * FROM request";
     $result = mysqli_query($conn, $sql);
     
     if (mysqli_num_rows($result) > 0){
         
         echo ' <table class="table text-center">
                        <tr>
                            <th>Student Name</th>
                            <th>ID Number</th>
                            <th>Project Title</th>
                            <th>Project Description</th>
                        
                        </tr>';
         
          while($row = mysqli_fetch_assoc($result)) {
              echo '<tr>';
              echo '<td>'.$row['fullName'].'</td>';
              echo '<td>'.$row['university_number'].'</td>';
              echo '<td>'.$row['project_title'].'</td>';
              echo '<td>'.$row['project_description'].'</td>';
              echo '<td>  <a href="edit.php?id='.$row['id'].'" class="btn btn-success btn-sm">Accept</a>';
              echo '  <a href="all-client.php?clientID='.$row['id'].'" class="btn btn-danger btn-sm">Reject</a></td>';
              echo '</tr>';
      }
      
      echo '</table>';
         
     }// end if
      else {
      echo "No Students";
    }
     

}

function loadSingleClient($conn,$req_id){
   
    $sql = "SELECT * FROM `request` WHERE id = '$req_id'";
    
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
      // output data of each row
      while($row = mysqli_fetch_assoc($result)) {
          $req = $row;
      }
    } else {
      echo "0 results";
    }
    return $req;
      
}

function rejectReq($conn,$req_id){
    
        $sql = "DELETE FROM `request` WHERE id ='$req_id'" ;
    
 if (mysqli_query($conn, $sql)) {
        echo '<script type="text/javascript">';
        echo ' alert("Rejected successfully")';  
        echo '</script>';
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
    
}

function AcceptReq($conn,$req_id){
    
    
 if (mysqli_query($conn, $sql)) {
        echo '<script type="text/javascript">';
        echo ' alert("Accepteded successfully")';  
        echo '</script>';
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
    
}




