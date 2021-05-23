<!DOCTYPE html>
<?php
session_start();

include_once 'config.php';
include_once 'main.php';
include_once 'req-db.php';
?>

<?php 

loadHeader("Add New Request");
loadNav();

?>
<head>
    <style type="text/css">
    *{
        margin:0;
        padding:0;
    }
    body{
        background-image: url(img/beige.jpg);
        font-family: sans-serif;
        margin-top: 40px;
    }
    .gradform{
        width: 800px;
        background-color: rgb(0, 0, 0,.6);
        margin:auto;
        color: #FFFFFF;
        padding:10px 0px 10px 0px;
        text-align: center;
        border-radius: 15px 15px 0px 0px;
    }

    .main{
        background-color:rgb(0, 0, 0,.5);
        width: 800px;
        margin: auto;
    }
    form{
        padding: 10px;
    }
    #name{
        width: 100%;
        height: 100px;
    }
    .name{
        margin-left:25px ;
        margin-top:30px ;
        width:125px;
        color: white;
        font-size: 18px;
        font-weight:700 ;
        
    }
    .fullname{
        position: relative;
        left: 100px;
        top: -37px;
        line-height: 40px;
        border-radius: 6px;
        padding: 0 22px;
        font-size: 16px;
    }

    .id{
        position: relative;
        left: 417px;
        top: -80px;
        line-height: 40px;
        border-radius: 6px;
        padding: 0 22px;
        font-size: 16px;
        color: #555;
    }

    .firstlabel{
        position: relative;
        color:#E5E5E5;
        text-transform:capitalize ;
        font-size: 14px;
        left:104px;
        top:-45px;
    }
    .secondlabel{
        position: relative;
        color:#E5E5E5;
        text-transform:capitalize ;
        font-size: 14px;
        left:175px;
        top:-45px;
    }

    .name2{
        margin-top: 175px;
    }
    .title{
        position: relative;
        left: 160px;
        top: -37px;
        line-height: 40px;
        width: 500px;
        border-radius: 6px;
        padding: 0 22px;
        font-size: 16px;
        color: #555;
    }

    .form-control{
        position: relative;
        left: 160px;
        top: -37px;
        line-height: 40px;
        width: 500px;
        border-radius: 6px;
        padding: 0 22px;
        font-size: 16px;
        color: #555;
    }

    button{
        background-color: #3BAF9F;
        display: block;
        margin: 20px 0px 0px 20px;
        text-align: center;
        border-radius: 12px;
        border: 2px solid #366473;
        padding: 14px 110px;
        outline: none;
        color: white;
        cursor: pointer;
        transition: 0.25px;
        margin-left: 255;
    }
    button:hover{
        background-color: #5390F5;
    }
    body {
        background-image: url('c.jpg');
         background-size: 1390px 860px;
    }
   
    </style>
</head>

<body>
    <div class="gradform"><h1>Graduation Form</h1></div>
    <div class="main">
        <form>
            <div id="name">
                <br> 
            <h6 class="name">Info</h6>
            <br> <br> <br>
                <input class="fullname" type="text" name="full_name" placeholder="Write your name.."><br>
                <label class="firstlabel">Full name</label>
            
                <input class="id" type="text" name="uni_id" placeholder="Enter your uni id..">
                <label class="secondlabel">ID</label>

    
            
           
            </div>

            <div class="name2">
            <h2 class="name">Project Title</h2>
            <input class="title" type="text" name="title">
            </div>

            <h2 class="name">Project Description</h2>
            <textarea class="form-control" id="address2" rows="3" name="desc" ></textarea><br>

            <button  type="submit">Submit</button>
        </form>
    </div>
</body>


<?php

if(isset($_POST['addReqButton'])){
    global $conn;
    $full_name = $_POST['full_name'];
    $university_number    = $_POST['uni_id'];
    $project_title      = $_POST['title'];
    $project_description  = $_POST['desc'];
     
   addNewReq($conn,$full_name,$university_number,$project_title,$project_description );
    
}

?>
  
       


<?php loadFooter(); ?>
