<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Prescription</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="../Css/Reciption P reg.css">
<!-- Link jQuery -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- Link Bootstrap JS (including Popper.js) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>


</head>
<body>
<header class="row py-3" style="background-color: dodgerblue;">
    <div class="col text-center">
      <h2 class="text-white mb-0"><b>Add Prescription</b></h2>
    </div>
  </header>

    <div class="container">
       
        <br>
        <br>
        <br>
        <br>

<form>
           
           <div class=" justify-content-center d-flex">
                   <div class="col-md-4 py-3">
                   <div class="d-flex">
                       <div class="form-group mx-1">
                           <label for="patientNumber">Drug Name:</label>
                           <input type="text" class="form-control" id="patientNumber" placeholder="Enter Glucoose Level" required>
                       </div>
                       <div class="form-group mx-1">
                       <label for="patientNumber">Dosage:</label>
                           <input type="text" class="form-control" id="patientNumber" placeholder="Enter BP Diastolic" required>
                       </div>
                   </div>
                   <div class="d-flex">
                       <div class="form-group mx-1">
                           <label for="patientNumber">Frequency:</label>
                           <input type="text" class="form-control" id="patientNumber" placeholder="Enter Glucoose Level" required>
                       </div>
                       <div class="form-group mx-1">
                       <label for="patientNumber">Duration:</label>
                           <input type="text" class="form-control" id="patientNumber" placeholder="Enter BP Diastolic" required>
                       </div>
                   </div>

                   <div sclass="form-group mx-1">
                   <button type="submit" class="btn btn-primary">ADD</button>
                   </div>
                   </div>
                   
                   

                   <div class="col- py-3 mx-5" style="width:67%;" >
        <div class="table-responsive">
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Drug Name</th>
                    <th>Dosage (per day)</th>
                    <th>Frequency</th>
                    <th>Duration</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Aspirin</td>
                    <td>10ml</td>
                    <td>3 times</td>
                    <td>ongoing</td>
                    <td><button type="button" class="btn btn-primary btn-sm">Delete</button></td>
                </tr>
                <tr>
                    <td>Samiru Geethmal</td>
                    <td>568</td>
                    <td>568</td>
                    <td>568</td>
                    <td><button type="button" class="btn btn-primary btn-sm">Delete</button></td>
                </tr>
                <tr>
                    <td>Samiru Geethmal</td>
                    <td>568</td>
                    <td>568</td>
                    <td>568</td>
                    <td><button type="button" class="btn btn-primary btn-sm">Delete</button></td>
                </tr>
                <tr>
                    <td>Samiru Geethmal</td>
                    <td>568</td>
                    <td>568</td>
                    <td>568</td>
                    <td><button type="button" class="btn btn-primary btn-sm">Delete</button></td>
                </tr>
                <tr>
                    <td>Samiru Geethmal</td>
                    <td>568</td>
                    <td>568</td>
                    <td>568</td>
                    <td><button type="button" class="btn btn-primary btn-sm">Delete</button></td>
                </tr>
            </tbody>
        </table>
    </div>
      
           </div>
           </div>
               

<br>

           <div class="row justify-content-center">

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