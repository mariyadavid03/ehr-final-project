<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient Registration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
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

    
       
        <br>
        <br>
        <br>
        <form>
           
        <div class="row justify-content-center">
                <div class="col-md-3 py-3" style="background-color:#D9D9D9; ">
                <div class="row">
                 <h4 class="mb-4 text-center"><u><b>Diagnosis</b></u></h4>
                </div>
                    <div class="form-group">
                        <label for="patientNumber">Patient Health Number:</label>
                        <input type="text" class="form-control" id="patientNumber" placeholder="Enter PHN" required>
                    </div>
                    <div class="form-group">
                        <label for="dateOfBirth">Date Of Birthday:</label>
                        <input type="date" class="form-control" id="dateOfBirth" required>
                    </div>
                </div>




    
                <div class="col-md-4 py-3 " style=" background-color:#D9D9D9; margin-left:10px;">
                <div class="row">
                 <h4 class="mb-4 text-center"><u><b>Complication</b></u></h4>
                </div>
                <div class="d-flex">
                <div>
                <div class="row">
                <label for="patientPicture"><U>Micro Vascular</U></label>
                </div>

                <div class="form-group">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="phoneCheckbox">
                        <label class="form-check-label" for="phoneCheckbox">
                           Neuropathy
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="phoneCheckbox">
                        <label class="form-check-label" for="phoneCheckbox">
                           Neuropathy
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="phoneCheckbox">
                        <label class="form-check-label" for="phoneCheckbox">
                           Neuropathy
                        </label>
                    </div>
                    <br>
                    <div class="row">
                <label for="patientPicture"><U>Macro Vascular</U></label>
                
                </div>
                <div class="form-group">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="phoneCheckbox">
                        <label class="form-check-label" for="phoneCheckbox">
                           IHD
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="phoneCheckbox">
                        <label class="form-check-label" for="phoneCheckbox">
                           Stroke/TIA
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="phoneCheckbox">
                        <label class="form-check-label" for="phoneCheckbox">
                           Peripharal Vascular Dis
                        </label>
                    </div>                
                </div>    
            </div>    
        </div>

        <div style="margin-left: 10px;">
                <div class="row">
                <label for="patientPicture"><U>Foot</U></label>
                </div>

                <div class="form-group">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="phoneCheckbox">
                        <label class="form-check-label" for="phoneCheckbox">
                           Foot Ulcer/Callosity
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="phoneCheckbox">
                        <label class="form-check-label" for="phoneCheckbox">
                           Charcot's Arthropathy
                        </label>
                    </div>
                    <br>
                    <br>
                    <div class="row">
                <label for="patientPicture"><U>Core Morbidities</U></label>
                
                </div>
                <div class="form-group">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="phoneCheckbox">
                        <label class="form-check-label" for="phoneCheckbox">
                           Hypertension
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="phoneCheckbox">
                        <label class="form-check-label" for="phoneCheckbox">
                           Dyslipidaemia
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="phoneCheckbox">
                        <label class="form-check-label" for="phoneCheckbox">
                          NAFLD
                        </label>
                    </div>     
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="phoneCheckbox">
                        <label class="form-check-label" for="phoneCheckbox">
                          Obesity(BMI>23)
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="phoneCheckbox">
                        <label class="form-check-label" for="phoneCheckbox">
                          Smoking
                        </label>
                    </div>               
                </div>    
            </div>
            </div>        
        </div>
            



        </form>
        
    </div>
    <br>

    
    <div class="row justify-content-center" style="margin-top: 10px;">
    <div class="py-3" style="background-color:#D9D9D9; width: 804px; height:auto">
    <div class="row">
            <h4 class="mb-4 text-center"><u><b>History</b></u></h4>
    </div>
                <div class="d-flex">
                    <div class="form-group">
                        <label for="patientNumber">Reffered By</label>
                        <input type="text" class="form-control" id="patientNumber" placeholder="Reffered By" required>
                    </div>
                    <div class="form-group" style="margin-left: 90px;">
                        <label for="dateOfBirth">Substance Use</label>
                        <input type="text" class="form-control" id="patientNumber" placeholder="Substance Use" required>
                    </div>
                    <div class="form-group" style="margin-left: 90px;">
                        <label for="dateOfBirth">Current Medication</label>
                        <input type="text" class="form-control" id="patientNumber" placeholder="Current Medication" required>
                    </div>
                </div>
                
                <div class="d-flex" style="margin-top: 20px;">
                <div class="d-flex">
                    <div class="form-group">
                        <label for="patientNumber">Post Medical History</label>
                        <input type="text" class="form-control" id="patientNumber" placeholder="Post Medical History" required>
                     </div>

                     <div class="py-4" style="margin-left:3px">
                        <button type="button" class="btn " style="border-radius: 50%;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
                            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"/>
                            <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4"/>
                        </svg>
                        </button>
                        </div>
                </div>    
                <div class="d-flex" style="margin-left:40px">
                    <div class="form-group">
                        <label for="patientNumber">Allergies</label>
                        <input type="text" class="form-control" id="patientNumber" placeholder="Allergies" required>
                     </div>

                     <div class="py-4" style="margin-left:3px">
                        <button type="button" class="btn " style="border-radius: 50%;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
                            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"/>
                            <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4"/>
                        </svg>
                        </button>
                        </div>
                </div>
                </div>    

    </div>
    </div>
<br>
<div class="row justify-content-center" style="margin-top: 10px;">
    <div class="py-3" style="background-color:#D9D9D9; width: 804px; height:auto">
    <div class="row">
            <h4 class="mb-4 text-center"><u><b>Family And Social History</b></u></h4>
    </div>
    <div class="row d-flex">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="patientNumber">Name</label>
                        <input type="text" class="form-control" id="patientNumber" placeholder="Name" required>
                    </div>
                    <div class="form-group">
                        <label for="dateOfBirth">Relationship</label>
                        <input type="text" class="form-control" id="patientNumber" placeholder="Relationship" required>
                    </div>
                    <div class="form-group">
                        <label for="dateOfBirth">Diseases</label>
                        <input type="text" class="form-control" id="patientNumber" placeholder="Diseases" required>
                    </div>
                </div>
                <div class="col-md-4" style="margin-left:30px;">
                    <div class="form-group">
                        <label for="patientNumber">Occupation</label>
                        <input type="text" class="form-control" id="patientNumber" placeholder="Occupation" required>
                    </div>
                    <div class="form-group">
                        <label for="dateOfBirth">Education Level</label>
                        <input type="text" class="form-control" id="patientNumber" placeholder="Education Level" required>
                    </div>
                </div>
            
                </div>
                </div>    

    </div>

    <div class="row justify-content-center text-center" style="margin-top: 10px;">
    <div>
    <button type="button" class="btn btn-primary">SAVE</button>
    </div>
    </div>
    
</body>
</html>