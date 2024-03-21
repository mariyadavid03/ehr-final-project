<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Doctor Note</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="../Css/Reciption P reg.css">
<!-- Link jQuery -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- Link Bootstrap JS (including Popper.js) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>


</head>
<body>
<header class="row py-3" style="background-color: dodgerblue;">
    <div class="col-1 d-flex align-items-center" style="margin-left: 20px;">
      <a href="#" class="btn btn-danger" style="background-color: red;">Back</a>
    </div>
    <div class="col text-center">
      <h2 class="text-white mb-0"><b>Add Doctor Note</b></h2>
    </div>
  </header>

    <div class="container">
       
        <br>
        <br>
        <br>
        <div class="row">
  <div class="col-md-auto ms-auto" style="margin-right:170px;">  
    <div class="dropdown">
      <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
        Appointment Type
      </button>
      <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton1">
        <li><a class="dropdown-item" href="#">Action 1</a></li>
        <li><a class="dropdown-item" href="#">Another action</a></li>
        <li><a class="dropdown-item" href="#">Something else here</a></li>
      </ul>
    </div>
  </div>
</div>
<br>

<form>
           
           <div class="row justify-content-center">
                   <div class="col-md-4 py-3" style="background-color:#D9D9D9; ">
                   <div class="row">
                    <h4 class="mb-4 text-center"><u><b>Vital Signs</b></u></h4>
                   </div>
                   <div class="d-flex">
                       <div class="form-group mx-1">
                           <label for="patientNumber">Glucoose Level:</label>
                           <input type="text" class="form-control" id="patientNumber" placeholder="Enter Glucoose Level" required>
                       </div>
                       <div class="form-group mx-1">
                       <label for="patientNumber">BP Diastolic:</label>
                           <input type="text" class="form-control" id="patientNumber" placeholder="Enter BP Diastolic" required>
                       </div>
                   </div>
                   <div class="d-flex">
                       <div class="form-group mx-1">
                           <label for="patientNumber">Heart Rate:</label>
                           <input type="text" class="form-control" id="patientNumber" placeholder="Enter Glucoose Level" required>
                       </div>
                       <div class="form-group mx-1">
                       <label for="patientNumber">BP Systolic:</label>
                           <input type="text" class="form-control" id="patientNumber" placeholder="Enter BP Diastolic" required>
                       </div>
                   </div>
                   </div>
   
   
   
       
                   <div class="col-md-4 py-3 " style=" background-color:#D9D9D9; margin-left:10px;">
                   <div class="row">
                    <h4 class="mb-4 text-center"><u><b>Lab</b></u></h4>
                   </div>
                   <div class="d-flex">
                   <div class="dropdown">
                    <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                    Type
                    </button>
                    <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton1">
                        <li><a class="dropdown-item" href="#">Action 1</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                    </div>
                    <div style="margin-left: 8px;">
                        <a href="#" class="btn btn-primary">+Request Lab Test</a>
                    </div>
               </div>
               <br>
                <div>
                    <H6><B>Test Type 1</B></H6>
                    <H6><B>Test Type 2</B></H6>
                    <H6><B>Test Type 3</B></H6>
                </div>    
           </div>       
           </div>
               

<br>

           <div class="row justify-content-center">
                   <div class="col- py-3" style="background-color:#D9D9D9; width: 67%;">
                   <div class="d-flex">
                       <div class="form-group mx-1" style="width: 50%;">
                           <label for="patientNumber">Patient Condition:</label>
                           <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" style="width: 100%;"></textarea>
                       </div>
                       <div class="form-group" style="margin-left: 30px; width: 50%;">
                       <label for="patientNumber">Instruction:</label>
                       <textarea class="form-control" id="exampleFormControlTextarea1" rows="5"></textarea>
                       </div>
                   </div>
                   <div class="d-flex">
                       <div class="form-group mx-1" style="width: 50%;">
                           <label for="patientNumber">Patient Concern:</label>
                           <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" style="width: 100%;"></textarea>
                       </div>
                       <div class="form-group" style="margin-left: 30px; width: 50%;">
                       <label for="patientNumber">Note:</label>
                       <textarea class="form-control" id="exampleFormControlTextarea1" rows="5"></textarea>
                       </div>
                   </div>
                   <div class="d-flex">
                       <div class="form-group mx-1">
                           <label for="patientNumber">Next Visit Date:</label>
                           <input type="date" class="form-control" name="dob" id="dateOfBirth" required>
                       </div>
                   </div>
      
           </div>
           <div class="row justify-content-center text-center" style="margin-top: 10px;">
    <div>
    <button type="submit" class="btn btn-primary">SAVE</button>
    </div>
    </div>
           </form>
        
    </div>
    <br>
    <br>
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-boQlKl8gq5zSWmmL3Yf1JNls4c0hVhU8zZH7zpVbQW0y1qivUX8ptTsnpmT4EYuh" crossorigin="anonymous"></script>          
</body>
</html>