<!DOCTYPE html>
<html lang="en">
    
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Doctor</title>
    <link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <link rel="stylesheet" href="../Css/AddUser.Css">
        <link rel="stylesheet" href="../Css/Adduserform.css">
</head>

<body>
  <div class="wrapper">
    <div class="row">
      <div class="col-6 button-column">
        <a href="../AdminManageUser.html" class="btn btn-danger active" style="background-color: red; color: white" role="button" aria-pressed="true">Back</a>
      </div>
    </div> 
    <form class="form">
	  <h2>Add Pharmacy User</h2>
	  <div class="form-group">
		  <label for="email">Name:</label>
		  <div class="relative">
			  <input class="form-control" id="name" type="text" pattern="[a-zA-Z\s]+" required="" autofocus="" title="Username should only contain letters. e.g. Piyush Gupta" autocomplete="" placeholder="Type your name here...">
			  <i class="fa fa-user"></i>
		  </div>
	  </div>
	  <div class="form-group">
	  	<label for="email">Staff ID:</label>
	  	<div class="relative">
		  	<input class="form-control" type="email" required="" placeholder="Type your email address..." pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
		  	<i class="fa fa-envelope"></i>
	  	</div>
	  </div>
	  <div class="form-group">
	  	<label for="email">Phone Number:</label>
	  	<div class="relative">
	  		<input class="form-control" type="text" maxlength="10" oninput="this.value=this.value.replace(/[^0-9]/g,'');" required="" placeholder="Type your Mobile Number...">
	  		<i class="fa fa-phone"></i>
	  	</div>
	  </div>
	  <div class="form-group">
	  	<label for="email">Email:</label>
	  	<div class="relative">
	  		<input class="form-control" type="Email" maxlength="" oninput="this.value=this.value.replace(/[^0-9]/g,'');" required="" placeholder="Type your Email Address...">
	  		<i class="fa fa-phone"></i>
	  	</div>
	  </div>
	  <div class="form-group">
	  	<label for="email">Username:</label>
	  	<div class="relative">
	  		<input class="form-control" type="text" required="" placeholder="Enter Your Username">
	  		<i class="fa fa-building"></i>
	  	</div>
	  </div>
	  <div class="form-group">
	  	<label for="email">Password:</label>
	  	<div class="relative">
	  		<input class="form-control" type="Password" required="" placeholder="Enter Your Password">
	  		<i class="fa fa-building"></i>
	  	</div>
	  </div>
		<div class="form-group">
			<label for="email">Attachment:</label>
	  	<div class="relative">
	  		<div class="input-group">
          <label class="input-group-btn">
            <span class="btn btn-default">
                Browse&hellip; <input type="file" style="display: none;" multiple>
            </span>
          </label>
          <input type="text" class="form-control" required="" placeholder="Attachment..." readonly>
          <i class="fa fa-link"></i>
      	</div>
	  	</div>
	  </div>     	
	  <div class="tright">
	  	<a href=""><button class="movebtn movebtnre" type="Reset"><i class="fa fa-fw fa-refresh"></i> Reset </button></a>
	  	<a href=""><button class="movebtn movebtnsu" type="Submit">Submit <i class="fa fa-fw fa-paper-plane"></i></button></a>
	  </div>
	</form>

	<div class="thanks" style="display: none;">
		<h4>Thank you!</h4>
		<p><small>Your message has been successfully sent.</small></p>
	</div>



  </div>











    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
        <script src="../Java Script/Admin.Js"></script>
        <script src="../Java Script/Adduserform.js"></script>
    
</body>


</html>