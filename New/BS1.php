<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="CSS/sheet.css">
  <script type="text/javascript" src="JS/sheet.js"></script>
</head>
<body>

<div class="jumbotron text-center bgimg" style = "background-image: url('c.jpg'); text-decoration:">
  <h1 style="margin-top:100px">Team Project</h1>
</div>
  
<div>
	<center>
  <p style = "color :#ffbb33;font-size:20px;background-color:none;margin-left:20px;margin-right:20px">Our project is about a site for designing a website for the graduation project, making the discussion process and submitting the project the best possible, and facilitating it for the student and the supervisor.</p> 
 </center></div>
<br><br><br>


<ul class="nav nav-tabs nav-justified">
  <li style="font-size:90px;padding-left:100px"><a data-toggle="pill" href="#chat" style="color:black"><span class="glyphicon glyphicon-comment" ></span></a></li>
  <li style="font-size:90px"><a data-toggle="pill" href="#vedio" style="color:black"><span class="glyphicon glyphicon-facetime-video" href="#video"></span></a></li>
  <li style="font-size:90px"><a data-toggle="pill" href="#file" style="color:black"><span class="glyphicon glyphicon-paperclip" href="#file"></span></a></li>
</ul>
<br><br><br><br>
<div class="tab-content">
  <div id="chat" class="tab-pane fade">	
    <center><h3>CHAT</h3></center>
    <div class="card rare-wind-gradient chat-room">
  <div class="card-body">
		<div class="container">
  <p>mariam<p>
  <p>Hello. How are you today?</p>
  <span class="time-right">11:00</span>
</div>

<div class="container darker">
   <p>dima<p>
  <p>hii</p>
  <span class="time-left">11:01</span>
</div>

<div class="container">
	<p>reem</p>
  <p>So, what do you wanna do today?</p>
  <span class="time-right">11:02</span>
</div>

<div class="container darker">
  <p>Nah, I dunno.or learn more coding perhaps?</p>
  <span class="time-left">11:05</span>
</div>
  </div>
</div>
	</div>
  <div id="vedio" class="tab-pane fade">
  <center>
    <h1>VEDIO CALL</h1>
	<br><br>
	<div class="raw" style="padding-left:550px">
	<div class="col-sm-2 col-md-2 col-lg-2"><label>Start Vedio call</label></div>
	<div class="col-sm-2 col-md-2 col-lg-2" ><button type="button" class="btn btn-info">Start Now</button></div>
	</div>
	</Center>
  </div>
  <div id="file" class="tab-pane fade">
  <center>
    <h1>Add File</h1>
	</center><br><br><br>
    <form style="padding-left:50px">
  <div class="form-group">
    <h3 for="exampleFormControlFile1">Submit your project file here</h3>
    <input type="file" class="form-control-file" id="exampleFormControlFile1">
	<div class="input-group mb-3"> <br><br><br>
  <input type="text" class="form-control" placeholder="file will added here" style="width:500px;high:1000px" aria-label="Recipient's username" aria-describedby="basic-addon2">
  <div class="input-group-append">
  </div>
</div>

  </div>
</form>

  </div>
</div>
<br><br><br><br><br>
</body>
</html>
