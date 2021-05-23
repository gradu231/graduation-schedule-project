<!DOCTYPE html>
<?php
session_start();


include_once 'config.php';
include_once 'main.php';
include_once 'req-db.php';
?>

<?php 

loadHeader("All Requests");
loadNav();






if(isset($_GET['ReqID'])){
    $ReqID = $_GET['ReqID'];
    if (!empty($ReqID)){
    global $conn;
    deleteReq($conn, $ReqID);
}
}


?>
<head>
<style>
    body {
        background-image: url('c.jpg');
         background-size: 1370px 630px;
      
    }
    </style>
</head>
<body>
<div class="container-fluid" >

    <div class="row">
        <div class="col-lg-1 "></div>
        <div class="col-lg-10 " style=" margin-top: 40px;  ">
            
            
             
      
         
            
            <div class="card shadow mb-4">
                <div class="card-header">
                    <h6 style="margin-top: 10px;">All Request</h6> 
                </div>
                <div class="card-body">
                    </body>
                   
                 <?php
                 
                 global $conn;
                 
                 loadAllReqInTable($conn);
                 ?>
                    
                  
                    
                </div>
                    
                </div>
                
    
            
           
        </div>
        <div class="col-lg-1 "> </div>
    </div>
    
</div>

<?php
 loadFooter();
?>
