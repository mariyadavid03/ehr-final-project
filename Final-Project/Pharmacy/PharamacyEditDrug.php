<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Drug</title>

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
<link rel="stylesheet" href="../Css/PharamacyEditDrug.css">


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
            </div> 
            <a href="#" class="nav_link"> <i class='bx bx-log-out nav_icon'></i> <span class="nav_name">SignOut</span> </a>
        </nav>
    </div>

    <!--Container Main start-->
    <div class="height-100 bg-light">
    <h4><center>Edit Drug</center></h4>

    <br>
        <form method="post">
        <div class="add-drug-container">
            <div class="div-1">
                <br><br>
                <label>Status</label>
                <select id="">
                    <option value="oral" selected>Available</option>
                    <option value="insulin">Unavailable</option>
                </select>
                <br><br>
            <label>Manufacter Date</label>
                <input type="date" name="" id="datepicker" required>

            </div>
            <div class="div-1">
            <br><br>
            <label>Manufacter</label>
                <input type="text" placeholder="Name" id="" required> 
                
            <br><br>
            <label>Expiry Date</label>
                <input type="date" name="" id="datepicker" required>
            </div>
                
        </div>
        <button type="submit">Update</button>
        </form>
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