<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient Registration</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="../Css/Reciption P reg.css">
</head>
<body>
<header class="row py-3" style="background-color: dodgerblue;">
    <div class="col-1 d-flex align-items-center" style="margin-left: 20px;">
      <a href="#" class="btn btn-danger" style="background-color: red;">Back</a>
    </div>
    <div class="col text-center">
      <h2 class="text-white mb-0"><b>Patient Registration</b></h2>
    </div>
  </header>

    <div class="container">
       
        <br>
        <br>
        <br>
        <form>
           
        <div class="row justify-content-center">
                <div class="col-md-4 py-3" style="background-color:#D9D9D9; ">
                <h4 class="mb-4 txt-center"><u><b>Personal Details</b></u></h4>
                    <div class="form-group">
                        <label for="patientNumber">Patient Health Number:</label>
                        <input type="text" class="form-control" id="patientNumber" placeholder="Enter PHN" required>
                    </div>
                    <div class="form-group">
                        <label for="nic">NIC:</label>
                        <input type="text" class="form-control" id="nic" placeholder="Enter NIC" required>
                    </div>
                    <div class="form-group">
                        <label for="firstName">Name:</label>
                        <div class="row">
                            <div class="col-md-6">
                                <input type="text" class="form-control" id="firstName" placeholder="First Name" required>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" id="lastName" placeholder="Last Name" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="firstName">Name With Initial:</label>
                        <div class="row">
                            <div class="col-md-6">
                                <input type="text" class="form-control" id="firstName" placeholder="First Name" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="dateOfBirth">Date Of Birthday:</label>
                        <input type="date" class="form-control" id="dateOfBirth" required>
                    </div>
                    <div class="form-group">
                        <label for="gender">Gender:</label>
                        <select class="form-control" id="gender" required>
                            <option value="">Select Gender</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="patientPicture">Patient Picture:</label>
                        <input type="file" class="form-control" id="patientPicture">
                    </div>
                </div>

                <div class="col-md-4 py-3" style=" background-color:#D9D9D9; margin-left:10px">
                <h4 class="mb-4 txt-center"><u><b>Contact Details</b></u></h4>
                <div class="row">
                <label for="patientPicture">Address</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" id="Housenumber" placeholder="House Number" required>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" id="Street" placeholder="Street" required>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" id="City" placeholder="City" required>
                            </div>
                        </div>
                    <div class="form-group">
                        <label for="phoneNumber">Phone Number:</label>
                        <input type="tel" class="form-control" id="phoneNumber" placeholder="Enter Phone Number" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" id="email" placeholder="Enter Email" required>
                    </div>
                    <br>
                 
                    <h4 class="mb-4 txt-center"><u><b>Personal Details</b></u></h4>
                    <div class="form-group">
                        <label for="emergencyContactName">Name:</label>
                        <input type="text" class="form-control" id="lastName" placeholder="Enter Name" required>
                    </div>
                    <div class="form-group">
                        <label for="emergencyContactName">Relationsip:</label>
                        <input type="text" class="form-control" id="lastName" placeholder="Enter Name" required>
                    </div>
                    <div class="form-group">
                        <label for="emergencyContactName">Phone Number:</label>
                        <input type="tel" class="form-control" id="lastName" placeholder="Enter Name" required>
                    </div>

                    
                </div>

                
            </div>
            <div class="containercol-md-6  " style="margin-left: 874px; margin-top:9px;">
            <a href="../Reciptionist/PReg2.php" class="btn btn-secondary">NEXT</a>  
            </div>
        </form>
        
    </div>
    <br>
    <br>
           
</body>
</html>