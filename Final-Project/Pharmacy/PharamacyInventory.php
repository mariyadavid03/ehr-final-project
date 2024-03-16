<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Drug Ineventory</title>

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
<link rel="stylesheet" href="../Css/Modalpopup.css">
<link rel="stylesheet" href="../Css/PharamacyInven.css">


</head>

<body id="body-pd"> 
<header class="header" id="header">
    <div class="header_toggle"> <i class='bx bx-menu' id="header-toggle"></i> </div>
    <a href="#"  id="open-modal">
        <div class="header_img"> <img src="https://i.imgur.com/hczKIze.jpg" alt=""> </div>
    </a>
</header>
    <div class="l-navbar" id="nav-bar">
        <nav class="nav">
            <div>
                <div class="nav_list"> 
                    <a href="#" class="nav_link active"> <i class='bx bx-grid-alt nav_icon'></i> <span class="nav_name">Home</span> </a> 
                    <a href="#" class="nav_link"> <i class='bx bx-user nav_icon'></i> <span class="nav_name">Inventory</span> </a> 
                    <a href="#" class="nav_link"> <i class='bx bx-message-square-detail nav_icon'></i> <span class="nav_name">Add Drugs</span> </a> 
                    <a href="#" class="nav_link"><i class= 'bx bx-'></i> <span class="nav_name">Inbox</span>
                </div>
            </div> <a href="#" class="nav_link"> <i class='bx bx-log-out nav_icon'></i> <span class="nav_name">SignOut</span> </a>
        </nav>
    </div>
    <!--Container Main start-->
    <div class="height-100 bg-light">
       
    <br>
    <br>
    <br>
   
        <div class="row mt-5">
        <div class="col-md-5 mx-auto">
            <div class="input-group">
                <input class="form-control border-end-0 border" type="search" value="Search Drug" id="example-search-input">
                <span class="input-group-append">
                    <button class="btn btn-outline-secondary bg-white border-start-0 border-bottom-0 border ms-n5" type="button">
                        <i class="fa fa-search"></i>
                    </button>
                </span>
            </div>
        </div>
        <br>
        <br>
        <div class="container">
                <div class="row">
                    
                    
                    <div class="col-md-12">
                    <h4>Drug List</h4>
                    <div class="table-responsive">
            
                            
                          <table id="mytable" class="table table-bordred table-striped">
                               
                               <thead>
                               <th>ID</th>
                               <th>Name</th>
                               <th>Qty</th>
                               <th>Exp</th>
                               <th>Action</th>
                               </thead>
                                <tbody>
                                    <tr>
                                        <td>01</td>
                                        <td>Penadol</td>
                                        <td>12</td>
                                        <td>01/01/2024</td>
                                        <td>
                                            <button type="button" class="btn btn-primary btn-sm">Edit</button>
                                            <button type="button" class="btn btn-primary btn-sm">Delete</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>01</td>
                                        <td>Penadol</td>
                                        <td>12</td>
                                        <td>01/01/2024</td>
                                        <td>
                                            <button type="button" class="btn btn-primary btn-sm">Edit</button>
                                            <button type="button" class="btn btn-primary btn-sm">Delete</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>01</td>
                                        <td>Penadol</td>
                                        <td>12</td>
                                        <td>01/01/2024</td>
                                        <td>
                                            <button type="button" class="btn btn-primary btn-sm">Edit</button>
                                            <button type="button" class="btn btn-primary btn-sm">Delete</button>
                                        </td>
                                    </tr>
                                </tbody>   
                            </table>

                            
                        </div>
                        
                    </div>
                </div>
            </div>
    </div>












    <!--Modal start-->    
            <div class="modal__container" id="modal-container">
                <div class="modal__content">
                    <div class="modal__close close-modal" title="Close">
                        <i class='bx bx-x'></i>
                    </div>

                    <h1 class="modal__title">Account Details</h1>

                    <img src="../Images/images/pngwing.com.png" class="Profilepicture" srcset="">
                    <br>
                    <br>
                    <h5 class="details"><B>Name:</B> <span>Pethum</span></h5>
                    <h5 class="details"><B>Username:</B> <span>Pethum</span></h5>
                    <h5 class="details"><B>ID:</B><span>Pethum</span></h5>

                </div>
            </div>
    <!--Modal end-->
    


    <!--Container Main end-->
    <script src="../Java Script/main.js"></script>
    <script src="../Java Script/Reciption.JS"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js"></script> 

    

    </div> 
</body>
</html>