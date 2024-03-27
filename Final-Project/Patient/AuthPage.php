<?php
    session_start();
    require_once ('../data/conn.php');
    require_once('../data/methods.php');
    /*if(!isset($_SESSION['phn'], $_SESSION['username'], $_SESSION['password'])) {      
        header("Location: PatientSignup.php");
        exit;
    }
    $phn = $_SESSION['phn'];
    $username = $_SESSION['username'];
    $password = $_SESSION['password'];
 
    try {
        $conn = conn::getConnection();
        $query = $conn->prepare("SELECT `email` FROM `patient` WHERE `phn` = :phn");
        $query->execute([':phn' => $phn]);
        $result = $query->fetch(PDO::FETCH_ASSOC);


        if($result) {
            $email = $result['email'];
        } else {
            $email = "Email not found";
        }
    } catch (Exception $e) {
        echo 'Error retrieving email from database: ' . $e->getMessage();
    }
    
    $verificationCode = mt_rand(100000, 999999);
    $_SESSION['verificationCode'] = $verificationCode;
*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Send Verification Code</title>
    <link rel="stylesheet" href="../Css/emailotp.css">
	<script src="https://smtpjs.com/v3/smtp.js"></script>
</head>
<body>
    
    <div class="form">
    <h2>Send Verification Code</h2>
    <input type="email" id="email" value="<?php echo $email; ?>" readonly>	
		<div class="otpverify">
			<input type="text" id="otp_inp" placeholder="Enter the OTP sent to your Email...">
			<button class="btn" id="otp-btn">Verify</button>
		</div>
		<button class="btn" onclick="sendOTP()">Send OTP</button>
	</div>
    <script src="emailotp.js"></script>
</body>
</html>