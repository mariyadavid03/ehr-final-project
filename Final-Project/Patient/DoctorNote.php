<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient Home</title>

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
  <link rel="icon" type="imag/jpg" href="../Images/Icons/Dieabatecare.png">
<!--=============== CSS ===============-->
<link rel="stylesheet" href="../Css/Modalpopup.css">
<link rel="stylesheet" href="../Css/ReciptionHome.css">

</head>

<body id="body-pd" style="background-image:url(../Images/images/BG.jpg); background-size: 100% auto;"> 
<header class="header" id="header" style="background-color: #F0F1F3;">
    <div class="header_toggle"><i class='bx bx-menu' id="header-toggle"></i></div>
</header>
    <div class="l-navbar" id="nav-bar">
        <nav class="nav">
            <div>
                <div class="nav_list"> 
                    <a href="#" class="nav_link active"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-fill" viewBox="0 0 16 16"><path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L8 2.207l6.646 6.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293z"/><path d="m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293z"/></svg><span class="nav_name">Home</span></a>
                    <a href="#" class="nav_link "><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-text-fill" viewBox="0 0 16 16"><path d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0M9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1M4.5 9a.5.5 0 0 1 0-1h7a.5.5 0 0 1 0 1zM4 10.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5m.5 2.5a.5.5 0 0 1 0-1h4a.5.5 0 0 1 0 1z"/></svg><span class="nav_name">Visits Records</span></a>
                    <a href="#" class="nav_link"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-receipt-cutoff" viewBox="0 0 16 16"><path d="M3 4.5a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5m0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5m0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5m0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5m0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5M11.5 4a.5.5 0 0 0 0 1h1a.5.5 0 0 0 0-1zm0 2a.5.5 0 0 0 0 1h1a.5.5 0 0 0 0-1zm0 2a.5.5 0 0 0 0 1h1a.5.5 0 0 0 0-1zm0 2a.5.5 0 0 0 0 1h1a.5.5 0 0 0 0-1zm0 2a.5.5 0 0 0 0 1h1a.5.5 0 0 0 0-1z"/><path d="M2.354.646a.5.5 0 0 0-.801.13l-.5 1A.5.5 0 0 0 1 2v13H.5a.5.5 0 0 0 0 1h15a.5.5 0 0 0 0-1H15V2a.5.5 0 0 0-.053-.224l-.5-1a.5.5 0 0 0-.8-.13L13 1.293l-.646-.647a.5.5 0 0 0-.708 0L11 1.293l-.646-.647a.5.5 0 0 0-.708 0L9 1.293 8.354.646a.5.5 0 0 0-.708 0L7 1.293 6.354.646a.5.5 0 0 0-.708 0L5 1.293 4.354.646a.5.5 0 0 0-.708 0L3 1.293zm-.217 1.198.51.51a.5.5 0 0 0 .707 0L4 1.707l.646.647a.5.5 0 0 0 .708 0L6 1.707l.646.647a.5.5 0 0 0 .708 0L8 1.707l.646.647a.5.5 0 0 0 .708 0L10 1.707l.646.647a.5.5 0 0 0 .708 0L12 1.707l.646.647a.5.5 0 0 0 .708 0l.509-.51.137.274V15H2V2.118z"/></svg><span class="nav_name">Prescription</span> </a> 
                    <a href="#" class="nav_link"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clipboard-pulse" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M10 1.5a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5zm-5 0A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5v1A1.5 1.5 0 0 1 9.5 4h-3A1.5 1.5 0 0 1 5 2.5zm-2 0h1v1H3a1 1 0 0 0-1 1V14a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V3.5a1 1 0 0 0-1-1h-1v-1h1a2 2 0 0 1 2 2V14a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V3.5a2 2 0 0 1 2-2m6.979 3.856a.5.5 0 0 0-.968.04L7.92 10.49l-.94-3.135a.5.5 0 0 0-.895-.133L4.232 10H3.5a.5.5 0 0 0 0 1h1a.5.5 0 0 0 .416-.223l1.41-2.115 1.195 3.982a.5.5 0 0 0 .968-.04L9.58 7.51l.94 3.135A.5.5 0 0 0 11 11h1.5a.5.5 0 0 0 0-1h-1.128z"/></svg><span class="nav_name">Lab Results</span> </a> 
                    <a href="#" class="nav_link"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart-fill" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314"/></svg><span class="nav_name">Life Style Plan</span> </a> <a href="#" class="nav_link"></div>
            </div> 
                    <a href="#" class="nav_link"> <i class='bx bx-log-out nav_icon'></i> <span class="nav_name">SignOut</span> </a>
                   
        </nav>
    </div>
    <!--Container Main start-->
   
        
    <div class="container">
    <div class="row" style="margin-left: 11px;">
        <H2 style="-webkit-text-stroke: 1px black; color:white">Doctor Note</H2>
    </div>

    <!-- first row-->
    <div class="row">
            <div class="col-md-4 mx-4 d-flex justify-content-center "style="background-color: white; border-radius:18px; box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;">
                
            <div class="row py-4  text-center">
                <H5 style="color: black;"><B>Vital Sign</B></H5>
                <br>
                <div class="row d-flex " style="text-align: left;">
                    <div class="col mx-4">
                    <H6 style="color: black;"><img src="../Images/Icons/glucosemeter_4333055.png"><b>Glucose Level</b></H6>
                    <H6 style="color: black;"><img src="../Images/Icons/glucometer_8852600.png"><b>BP Diastolic</b></H6>
                    <H6 style="color: black;"><img src="../Images/Icons/heartrate.png"><b>Heart Rate</b></H6>
                    <H6 style="color: black;"><img src="../Images/Icons/glucometer_8852600.png"><b>BP Systolic</b></H6>
                    </div>
                    <div class="col" style="text-align: left; margin-left:-30px">
                    <H6>Glucose Level</H6>
                    <H6 style="margin-top: 14px;">Glucose Level</H6>
                    <H6 Style="margin-top: 14px;">Glucose Level</H6>
                    <H6 Style="margin-top: 14px;">Glucose Level</H6>
                    </div>
                </div>
            </div>
           
                
            </div>
            <br>
            <div class="col-md-4 mx-4 d-flex justify-content-center "style="background-color: white; border-radius:18px; box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;">
                
                <div class="row py-4  text-center">
                    <H5 style="color: black;"><B>Requested Lab Test</B></H5>
                    <br>
                    <div class="row d-flex " style="text-align: left;">
                    <div class="table-wrapper" style="height: 129px;">
                        <div class="col mx-4">
                        <H6 style="color: black;"><img src="../Images/Icons/clip-board_12590090.png"><b>Test 1</b></H6>
                        <H6 style="color: black;"><img src="../Images/Icons/clip-board_12590090.png"><b>Test 2</b></H6>
                        <H6 style="color: black;"><img src="../Images/Icons/clip-board_12590090.png"><b>Test 3</b></H6>
                        <H6 style="color: black;"><img src="../Images/Icons/clip-board_12590090.png"><b>Test 4</b></H6>
                        </div>
                    </div>
                    </div>
                </div>
               
                    
                </div>
        </div>
        <!-- second row-->
        <div class="row" style=" margin-top:10px ;">
            <div class="col-md-4 mx-4 d-flex justify-content-center "style=" background-color: white; border-radius:18px; box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;">
                
            <div class="row py-4  text-center">
                <H5 style="color: black;"><B>Patient Condition</B></H5>
                <br>
                <div class="row d-flex " style="text-align: Center;">
                <div class="table-wrapper" style="height: 160px;">
                        <div class="col mx-4">
                        <H6>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil molestias sint dolorem deserunt, corrupti maiores tenetur aperiam, aliquid maxime praesentium dignissimos expedita necessitatibus perspiciatis, laudantium nulla et iure eligendi ad.</H6>
                        </div>
                    </div>
                </div>
                </div>
           
                
            </div>
            <br>
            <div class="col-md-4 mx-4 d-flex justify-content-center "style="background-color: white; border-radius:18px; box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;">
                
                <div class="row py-4  text-center">
                    <H5 style="color: black;"><B>Instruction</B></H5>
                    <br>
                    <div class="row d-flex " style="text-align: Center;">
                    <div class="table-wrapper" style="height: 160px;">
                        <div class="col mx-4">
                        <H6>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil molestias sint dolorem deserunt, corrupti maiores tenetur aperiam, aliquid maxime praesentium dignissimos expedita necessitatibus perspiciatis, laudantium nulla et iure eligendi ad.</H6>
                        </div>
                    </div>
                    </div>
                </div>
               
                    
                </div>
        </div>

    <!-- third row-->
    <div class="row" style=" margin-top:10px ;">
            <div class="col-md-4 mx-4 d-flex justify-content-center "style=" background-color: white; border-radius:18px; box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;">
                
            <div class="row py-4  text-center">
                <H5 style="color: black;"><B>Patient Concern</B></H5>
                <br>
                <div class="row d-flex " style="text-align: Center;">
                        <div class="table-wrapper" style="height: 160px;">
                        <div class="col mx-4">
                        <H6>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil molestias sint dolorem deserunt, corrupti maiores tenetur aperiam, aliquid maxime praesentium dignissimos expedita necessitatibus perspiciatis, laudantium nulla et iure eligendi ad.</H6>
                        </div>
                    </div>
                </div>
            </div>
           
                
            </div>
            <br>
            <div class="col-md-4 mx-4 d-flex justify-content-center "style="background-color: white; border-radius:18px; box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;">
                
                <div class="row py-4  text-center">
                    <H5 style="color: black;"><B>Note</B></H5>
                    <br>
                    <div class="row d-flex " style="text-align: Center;">
                    <div class="table-wrapper" style="height: 160px;">
                        <div class="col mx-4">
                        <H6>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil molestias sint dolorem deserunt, corrupti maiores tenetur aperiam, aliquid maxime praesentium dignissimos expedita necessitatibus perspiciatis, laudantium nulla et iure eligendi ad.</H6>
                        </div>
                    </div>
                </div>
               
                    
                </div>
        </div>
   
    </div>

</div>
</div>
                       
    </div>
<br>
<br>       
    
    <!--Container Main end-->
    <script src="../Java Script/main.js"></script>
    <script src="../Java Script/Reciption.JS"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js"></script> 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js"></script> 
    
    <style>
        .table-wrapper {
    overflow-y: auto;
    }  
    .container {
    margin-left: 3rem;
    margin-right: 1rem;}

    #latestlabre{
        width: auto;
        height: 15px;
    }
    @media (max-width: 767px) { /* Target screens smaller than 768px (sm breakpoint) */
    .col-md-6{  /* Target the outer col-md-6 element */
      flex-direction: column; /* Stack the divs vertically on mobile */
    }
    .col-md-5 {
    margin-left: 0px;  /* Remove margin-left on mobile devices */
    }
    .col-md-5 {
    margin-left: 0px;  /* Remove left margin for better centering */
    margin-right: 0px; /* Remove right margin */
    }
    .container {
    margin-left: -1.5rem;
    }
  
    }


    #functions {
    transition: transform 190ms ease-out;

    }

    #functions:hover {
    transform: translate(0px, 0px) scale(1.1, 1.2);
    }
</style>
    
</body>
</html>