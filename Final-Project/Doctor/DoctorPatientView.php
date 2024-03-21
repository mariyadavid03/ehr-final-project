<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient Details</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="../Css/Modalpopup.css">
    <link rel="stylesheet" href="../Css/DoctorHome.Css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Link jQuery -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- Link Bootstrap JS (including Popper.js) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>

<!-- Link Boxicons CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!--=============== BOXICONS ===============-->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">

<!--=============== CSS ===============-->
<link rel="stylesheet" href="../Css/DoctorPviewModal.css">
<link rel="stylesheet" href="../Css/PrescriptionModal.css">

</head>



<body>
  <div class="container ">

<div class="row py-3 d-flex">
  <div class="col-1 d-flex align-items-center">
    <a href="#" class="btn btn-danger" style="background-color: red;">Back</a>
  </div>
  <div class="col text-center" style="display: table;">
  <h2 class="text-black mb-0" style="display: table-cell; vertical-align: middle;"><b>PATIENT DETAIL</b></h2>
</div>
  <div class="text-center" style="width:90px; margin-left:10px"  >
  <a href="#"  id="open-modal">
        <div class="header_img"> <img src="https://i.imgur.com/hczKIze.jpg" alt="" style="border-radius:50px; Width: 100px;"> </div>
  </a> 
  </div>
</div>


<div class="height-100 bg-light">
       <!--Modal start-->    
       <div class="modal__container" id="modal-container">
                <div class="modal__content">
                    <div class="modal__close close-modal" title="Close">
                        <i class='bx bx-x'></i>
                    </div>

                    <h1 class="modal__title"> Patient Account Details</h1>

                    <img src="../Images/images/patient.jpg" class="Profilepicture" srcset="">
                    <br>
                    <br>
                    <div class="row" style="float: left; margin-left:50px">
                      <div>
                    <h6 class="details" style="float: left"><B>Name:</B> <span>Pethum</span></h6><br>
                    <h6 class="details" style="float: left"><B>PHN:</B> <span>xxxx</span></h6><br>
                    <h6 class="details" style="float: left"><B>NIC:</B> <span>xxxx</span></h6><br>
                    <h6 class="details" style="float: left"><B>Age:</B> <span>xxxx</span></h6><br>
                    <h6 class="details" style="float: left"><B>Date of birthday:</B> <span>xxxx</span></h6><br>
                    <h6 class="details" style="float: left"><B>Tel No:</B> <span>xxxx</span></h6><br>
                    <h6 class="details" style="float: left"><B>Email:</B> <span>xxxx</span></h6><br>
                    <h6 class="details" style="float: left"><B>Address:</B><span>xxxx</span><br><span style="margin-left: 66px;">xxxx</span><br><span style="margin-left: 66px;">xxxx</span></h6><br>
                      </div>  
                  </div>
                </div>
            </div>





      <!--Prescreption View Modal start--> 

    <!--Modal end-->
    




  <br>
  <br>
  <br>
  </div>


  <div class="row ">
    <div class="col-sm">
    <div class="" style=" width:fit-content">
      <div  class="" style="background-color:dodgerblue; border-radius:16px;width:125%; box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 1px 3px 1px;">
      <div class="row text-center py-2">
        <H4 style="color: white;"><b>Latest Result</b></H4>
      </div>
      
      <div class="row text-center">
        <H4  style="color: white;">BP Diastolic: <span style="color: black;">100</span></H4>
      </div>
      <div class="row text-center">
        <H4  style="color: white;">BP Systolic: <span style="color: black;">100</span></H4>
      </div>
      <div class="row text-center">
        <H4  style="color: white;">Heart Rate: <span style="color: black;">100</span></H4>
      </div>
      <div class="row text-center">
        <H4  style="color: white;">Glucose Level: <span style="color: black;">100</span></H4>
      </div>

      </div>

      <br>
      <br>

      <div style="border-radius:16px;width:125%; box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 1px 3px 1px;">
      <div class="row text-center py-2">
        <H4 style="color: black;"><b>Medical Information</b></H4>
      </div>
      <br>
      <div class="row text-center">
        <H4>Date Of Diagnosis: <span style="color: black;">100</span></H4>
      </div>
      <div class="row text-center">
        <H4>Allergies: <span style="color: black;">100</span></H4>
      </div>
      <div class="row text-center">
        <H4>Medical Conditions: <span style="color: black;">100</span></H4>
      </div>
      <div class="row text-center">
        <H4>Diabetic Type: <span style="color: black;">100</span></H4>
      </div>
      <div class="row text-center">
        <H4>Substance Use: <span style="color: black;">100</span></H4>
      </div>
      <div class="row text-center">
        <H4>Medical Conditions: <span style="color: black;">100</span></H4>
      </div>

      </div>
      <br>
      <br>
      <div style="border-radius:16px;width:125%; box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 1px 3px 1px;">
      <div class="row text-center py-2">
        <H4 style="color: black;"><b>Family History</b></H4>
      </div>
      <br>
      <div class="row text-center d-flex justify-content-center">
  <table class="table table-bordered" style="width: 50%;">
    <tr>
      <th>Relationship</th>
      <th>Diseas</th>
    </tr>
    <tr>
      <td>Father</td>
      <td>Diabates 1</td>
    </tr>
  </table>
</div>
      </div>
      <br>
      <br>
 <div style="border-radius:16px;width:125%;box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 1px 3px 1px;">
      <div class="row text-center py-2">
        <H4 style="color: black;"><B>Charts</B></H4>
      </div>
      <br>
      <div class="row text-center d-flex justify-content-center">
      <img src="../Images/images/landscape-placeholder-svgrepo-com.png" alt="Image description" class="img-fluid rounded mx-auto d-block" style="width: fit-content; margin-bottom:50px">




      </div>
      </div>
    </div>

  </div>

  <div class="col-md-7" >

  <!--Patient Records Results Start-->
    <div class="" style="margin-left:10px;">
      <div style="box-shadow: rgba(0, 0, 0, 0.15) 1.95px 1.95px 2.6px;">
        <div class="row">
          <H2>Visits Records</H2>
          <div>
          <a href="#" class="btn btn-primary">+ADD RECORD</a>
          </div>
        </div>
        <div class="col-md-12">

                    <div class="table-responsive">
            
                            
                          <table id="mytable" class="table table-bordred table-striped">
                               
                               <thead>
                               <th>NO</th>
                               <th>Date</th>
                               <th>Type</th>
                               <th>Notes</th>
                               </thead>
                <tbody>
                
                <tr>
              
                <td>01</td>
                <td>Samiru Geethmal</td>
                <td>568</td>
                <td><button type="button" class="btn btn-primary btn-sm">View Note</button></td>
                </tr>
                
                <tr>
              
              <td>01</td>
              <td>Samiru Geethmal</td>
              <td>568</td>
              <td><button type="button" class="btn btn-primary btn-sm">View Note</button></td>
              </tr>
                
                
              <tr>
              
                <td>01</td>
                <td>Samiru Geethmal</td>
                <td>568</td>
                <td><button type="button" class="btn btn-primary btn-sm">View Note</button></td>
                </tr>
                
                <tr>
              
              <td>01</td>
              <td>Samiru Geethmal</td>
              <td>568</td>
              <td><button type="button" class="btn btn-primary btn-sm">View Note</button></td>
              </tr>
                
              <tr>
              
                <td>01</td>
                <td>Samiru Geethmal</td>
                <td>568</td>
                <td><button type="button" class="btn btn-primary btn-sm">View Note</button></td>
                </tr>               
                </tbody>
                    
            </table>                
            </div>
            </div>
    </div>
    </div>
    <!--Patient Records Results End-->
    <br>
    <br>


    <!--Prescription Results Starts-->
    <div class="" style="margin-left:10px;box-shadow: rgba(0, 0, 0, 0.15) 1.95px 1.95px 2.6px;">
      <div>
        <div class="row">
          <H2>Prescreption</H2>
          <div>
          <a href="#" class="btn btn-primary">+ADD PRESCRIPTION</a>
          </div>
        </div>
        <div class="col-md-12">

                    <div class="table-responsive">
            
                            
                          <table id="mytable" class="table table-bordred table-striped">
                               
                               <thead>
                               <th>NO</th>
                               <th>Dates</th>
                               <th>Status</th>
                               <th>Action</th>
                               </thead>
                <tbody>
                
                <tr>
              
                <td>01</td>
                <td>Samiru Geethmal</td>
                <td>568</td>
                <td><button type="button" class="btn btn-primary btn-sm">View</button></td>
                </tr>
                
                <tr>
              
              <td>01</td>
              <td>Samiru Geethmal</td>
              <td>568</td>
              <td><button type="button" class="btn btn-primary btn-sm">View</button></td>
              </tr>
                
                
              <tr>
              
                <td>01</td>
                <td>Samiru Geethmal</td>
                <td>568</td>
                <td><button type="button" class="btn btn-primary btn-sm">View</button></td>
                </tr>
                
                <tr>
              
              <td>01</td>
              <td>Samiru Geethmal</td>
              <td>568</td>
              <td><button type="button" class="btn btn-primary btn-sm">View</button></td>
              </tr>
                
              <tr>
              
                <td>01</td>
                <td>Samiru Geethmal</td>
                <td>568</td>
                <td><button type="button" class="btn btn-primary btn-sm">View</button></td>
                </tr>               
                </tbody>
                    
            </table>                
            </div>
            </div>
    </div>
    </div>

    <!--Prescreption Results End-->
    <br>
    <br>


    <!--Lab Results Start-->
    <div class="" style="margin-left:10px; margin-left:10px;box-shadow: rgba(0, 0, 0, 0.15) 1.95px 1.95px 2.6px;">
      <div>
        <div class="row">
          <H2>Lab Result</H2>
          <div class="d-flex">
          <div class="dropdown" >
              <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                Type
              </button>

            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
              <li><a class="dropdown-item" href="#">Action 1</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
            </div>
            <div style="margin-left:10px">
              <a href="#" class="btn btn-primary">+REQUEST LAB TEST</a>
            </div>  
          </div>
        </div>
        <div class="col-md-12">

                    <div class="table-responsive">
            
                            
                          <table id="mytable" class="table table-bordred table-striped">
                               
                               <thead>
                               <th>Test NO</th>
                               <th>Test Type</th>
                               <th>Result Value</th>
                               <th>Test Result</th>
                               </thead>
                <tbody>
                
                <tr>
              
                <td>xxxx</td>
                <td>xxxxxxx</td>
                <td>xxxxxxx/td>
                <td><button type="button" class="btn btn-primary btn-sm">View</button></td>
                </tr>
                
                <tr>
              
              <td>01</td>
              <td>Samiru Geethmal</td>
              <td>568</td>
              <td><button type="button" class="btn btn-primary btn-sm">View</button></td>
              </tr>
                
                
              <tr>
              
                <td>01</td>
                <td>Samiru Geethmal</td>
                <td>568</td>
                <td><button type="button" class="btn btn-primary btn-sm">View</button></td>
                </tr>
                
                <tr>
              
              <td>01</td>
              <td>Samiru Geethmal</td>
              <td>568</td>
              <td><button type="button" class="btn btn-primary btn-sm">View</button></td>
              </tr>
                
              <tr>
              
                <td>01</td>
                <td>Samiru Geethmal</td>
                <td>568</td>
                <td><button type="button" class="btn btn-primary btn-sm">View</button></td>
                </tr>   
                </tbody>
                    
            </table>                
            </div>
            </div>
    </div>
    </div>
   <!--Lab Results End-->

    </div>
  
    

  </div>

  <script src="../Java Script/main.js"></script>
  <script src="../Java Script/Reciption.JS"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js"></script> 
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js"></script> 
  </div>
</div>

</div>
</body>
</html>