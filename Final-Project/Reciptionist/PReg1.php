<?php
    session_start();
    require_once ('../data/conn.php');
	require_once('../data/methods.php');
?>
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
        <form method="post" enctype="multipart/form-data">
           
        <div class="row justify-content-center">
                <div class="col-md-4 py-3" style="background-color:#D9D9D9; ">
                <h4 class="mb-4 txt-center"><u><b>Personal Details</b></u></h4>
                <div class="form-group">
                        <label for="patientNumber">Patient Health Number:</label>
                        <input type="text" class="form-control" name="phn" maxlength="11" id="patientNumber" placeholder="Enter PHN" required>
                    </div>
                    <div class="form-group">
                        <label for="nic">NIC:</label>
                        <input type="text" class="form-control" maxlength="12" name="nic" id="nic" placeholder="Enter NIC" required>
                    </div>
                    <div class="form-group">
                        <label for="firstName">Name:</label>
                        <div class="row">
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="fname" id="firstName" placeholder="First Name" required>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="lname" id="lastName" placeholder="Last Name" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="firstName">Name With Initial:</label>
                        <div class="row">
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="nameInitials" id="firstName" placeholder="First Name" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="dateOfBirth">Date Of Birthday:</label>
                        <input type="date" class="form-control" name="dob" id="dateOfBirth" required>
                    </div>
                    <div class="form-group">
                        <label for="gender">Gender:</label>
                        <select class="form-control" id="gender" name="gender" required>
                            <option value="">Select Gender</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="patientPicture">Patient Picture:</label>
                        <input type="file" name="ppicture" class="form-control" id="patientPicture" required>
                    </div>
                </div>

                <div class="col-md-4 py-3" style=" background-color:#D9D9D9; margin-left:10px">
                <h4 class="mb-4 txt-center"><u><b>Contact Details</b></u></h4>
                <div class="row">
                <label for="patientPicture">Address</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="houseNo" id="Housenumber" placeholder="House Number" required>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="street" id="Street" placeholder="Street" required>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="city" id="City" placeholder="City" required>
                            </div>
                        </div>
                    <div class="form-group">
                        <label for="phoneNumber">Phone Number:</label>
                        <input type="tel" maxlength="10" class="form-control" name="number" id="phoneNumber" placeholder="Enter Phone Number" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" name="email" id="email" placeholder="Enter Email" required>
                    </div>
                    <br>
                 
                    <h4 class="mb-4 txt-center"><u><b>Emergency Contact Details</b></u></h4>
                    <div class="form-group">
                        <label for="emergencyContactName">Name:</label>
                        <input type="text" class="form-control" id="lastName" name="econtactName" placeholder="Enter Name" required>
                    </div>
                    <div class="form-group">
                        <label for="emergencyContactName">Relationsip:</label>
                        <input type="text" class="form-control" id="lastName" name="econtactRelate" placeholder="Enter Name" required>
                    </div>
                    <div class="form-group">
                        <label for="emergencyContactName">Phone Number:</label>
                        <input type="tel" maxlength="10" class="form-control" id="lastName" name="econtactNumber" placeholder="Enter Name" required>
                    </div>

             </div>
    
            </div>
            <div class="containercol-md-6  " style="margin-left: 874px; margin-top:9px;">
            <button type="submit" name="btnNext" class="btn btn-secondary">
            NEXT
            </button>
            
            </div>
        </form>

        <?php
            if(isset($_POST['btnNext'])){
                $phn = $_POST["phn"];
                $nic = $_POST["nic"];
                $fname = $_POST["fname"];
                $lname = $_POST["lname"];
                $nameInitials = $_POST["nameInitials"];
                $dob = $_POST["dob"];
                $gender = $_POST["gender"];
                $houseNo = $_POST["houseNo"];
                $street = $_POST["street"];
                $city = $_POST["city"];
                $number = $_POST["number"];
                $email = $_POST["email"];
                $econtactName = $_POST["econtactName"];
                $econtactRelate = $_POST["econtactRelate"];
                $econtactNumber = $_POST["econtactNumber"];
                if(isset($_FILES['ppicture'])){
                    $file_tmp = $_FILES['ppicture']['tmp_name'];
                }

                try{
                    $conn = conn::getConnection();
                    $query1 = $conn->prepare("INSERT INTO `emergency_contact`(`name`, `relationship`, `contact`) 
                    VALUES (:name,:relate, :contact)");
                    $query1->execute([':name' => $econtactName, ':relate' => $econtactRelate, ':contact' => $econtactNumber]);               
                    $emergencyContactId = $conn->lastInsertId();

                    if($file_tmp){
                        $file_data = file_get_contents($file_tmp);

                        try{
                        $query = $conn->prepare("INSERT INTO `patient`(`phn`, `nic`, `first_name`, `last_name`, `name_with_intials`, `dob`, `house_no`, `street`, `city`, `gender`, `contact`, `email`,`emergency_contact_id`, `picture`) 
                        VALUES 
                        (:phn,:nic,:fname, :lname, :nameInitials, :dob, :houseNo, :street, :city, :gender, :contact, :email, :econtactID, :picture)");
                        
                        $query->execute([':phn' => $phn,':nic' => $nic,':fname' => $fname, ':lname' => $lname, ':nameInitials' => $nameInitials, ':dob'=> $dob,
                        ':houseNo' => $houseNo,':street' => $street,':city' => $city,':gender' => $gender,':contact' => $number,':email' => $email, ':econtactID' => $emergencyContactId, ':picture' => $file_data]);
                        
                        } catch (Exception $e){
                            echo 'Erro occured during insertion:  ' .$e->getMessage();
                        }
                    } else {
                        try{
                            $query = $conn->prepare("INSERT INTO `patient`(`phn`, `nic`, `first_name`, `last_name`, `name_with_intials`, `dob`, `house_no`, `street`, `city`, `gender`, `contact`, `email`,`emergency_contact_id`) 
                            VALUES 
                            (:phn,:nic,:fname, :lname, :nameInitials, :dob, :houseNo, :street, :city, :gender, :contact, :email, :econtactID)");
                            
                            $query->execute([':phn' => $phn,':nic' => $nic,':fname' => $fname, ':lname' => $lname, ':nameInitials' => $nameInitials, ':dob'=> $dob,
                            ':houseNo' => $houseNo,':street' => $street,':city' => $city,':gender' => $gender,':contact' => $number,':email' => $email, ':econtactID' => $emergencyContactId]);
                            
                            } catch (Exception $e){
                                echo 'Erro occured during insertion : ' .$e->getMessage();
                            }
                    }
                        
                    
                } catch(Exception $e){
                    echo 'Erro: ' .$e->getMessage();
                }
            }
        ?>
        
    </div>
    <br>
    <br>
           
</body>
</html>