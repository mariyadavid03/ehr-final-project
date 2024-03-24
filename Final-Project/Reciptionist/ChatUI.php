<?php
    session_start();
    require_once ('../data/conn.php');
    require_once('../data/methods.php');

    $currentDate = date('Y-m-d'); 
    $currentTime = date('H:i:s'); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient Registration</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css">
    <link rel="stylesheet" href="../Css/ChatUI.CSS">

</head>



<body>

    <?php

        
            $username = $_SESSION['logged_username'];
            $user_id = $_SESSION['logged_id'];
            $name = $_SESSION['logged_name'];

            echo "usernam: ".$name;
    ?>

    <header class="row py-3" style="background-color: dodgerblue;">
    <div class="col-1 d-flex align-items-center" style="margin-left: 20px;">
      <a href="#" class="btn btn-danger" style="background-color: red;">Back</a>
    </div>
    <div class="col text-center">
      <h2 class="text-white mb-0"><b>Messages</b></h2>
    </div>
    <div class="col-2 d-flex align-items-center justify-content-end" style="margin-right: 33px; ">
    
  </div>
  </header>
<div class="containder py-4 px-5">
  <div class="row rounded-lg overflow-hidden shadow">
    <!-- Users box-->
    <div class="col-5 px-0">
      <div class="bg-white">

        <div class="bg-gray px-4 py-2 bg-light">
          <p class="h5 mb-0 py-1">Recent</p>
        </div>

        <div class="messages-box">
          <div class="list-group rounded-0">

          
        <?php
            try{
                $conn = conn::getConnection();
                $messageQuery = "SELECT `message_id`, `text`, `status`, `date`, `time`, `sender_id`, `receiver_id` FROM `message`";
                $result = $conn->query($messageQuery);
                $result->execute();
                $messages = $result->fetchAll(PDO::FETCH_ASSOC);
                
            } catch(Exception $e){
                echo "Error: ".$e->getMessage();
            }
        ?>

        <?php foreach ($messages as $message) :?> 
            <?php $status = $message['status']; ?>
            <?php
            
                $sender_id = $message['sender_id'];
                $sender_role_query = "SELECT `role` FROM `user` WHERE `user_id` = :sender_id";
                $sender_role_stmt = $conn->prepare($sender_role_query);
                $sender_role_stmt->bindParam(':sender_id', $sender_id);
                $sender_role_stmt->execute();
                $sender_role_result = $sender_role_stmt->fetch(PDO::FETCH_ASSOC);

                if ($sender_role_result) {
                    $sender_role = $sender_role_result['role'];
                    // Fetch sender's name based on role
                    switch ($sender_role) {
                        case 'admin':
                            $sender_name_query = "SELECT `name` FROM `admin` WHERE `user_id` = :sender_id";
                            break;
                        case 'pharamcist':
                            $sender_name_query = "SELECT `name` FROM `pharmacist` WHERE `user_id` = :sender_id";
                            break;
                        case 'lab technician':
                            $sender_name_query = "SELECT `name` FROM `lab_technician` WHERE `user_id` = :sender_id";
                            break;
                        default:
                            $sender_name_query = "SELECT `username` FROM `user` WHERE `user_id` = :sender_id";
                            break;
                    }

                        // Fetch sender's name
                        $sender_name_stmt = $conn->prepare($sender_name_query);
                        $sender_name_stmt->bindParam(':sender_id', $sender_id);
                        $sender_name_stmt->execute();
                        $sender_name_result = $sender_name_stmt->fetch(PDO::FETCH_ASSOC);
                        $sender_name = $sender_name_result['name'];

                }

            ?>
            <a href="#" class="list-group-item list-group-item-action list-group-item-light rounded-0">

            <!--<a class="list-group-item list-group-item-action active text-white rounded-0">-->
            
            
            <div class="media">
           <?php
                $reciverId = $message['sender_id'];
           ?>
                <img src="https://upload.wikimedia.org/wikipedia/commons/7/7e/Circle-icons-profile.svg" alt="user" width="50" class="rounded-circle">
                <div class="media-body ml-4">
                    <?php if ($status == 'Sent'): ?>
                    <div class="dot"></div>
                    <?php else : ?>
                    <div class="dot-hidden"></div>
                    <?php endif; ?>
                  <div class="d-flex align-items-center justify-content-between mb-1">
                    <h6 class="mb-0" style="padding-bottom: 10px;"> <?php echo $sender_name;  ?> </h6><small class="small font-weight-bold"> <?php echo $message['date'];?></small>
                  </div>
                </div> 
              </div>
            </a>

        <?php endforeach; ?>


          </div>
        </div>
      </div>
    </div>
    
    
    <!-- Chat Box-->
    <div class="col-7 px-0">
      <div class="px-4 py-5 chat-box bg-white">

        <!-- Sender Message-->
        <div class="media w-50 mb-3"><img src="https://bootstrapious.com/i/snippets/sn-chat/avatar.svg" alt="user" width="50" class="rounded-circle">
          <div class="media-body ml-3">
            <div class="bg-light rounded py-2 px-3 mb-2">
              <p class="text-small mb-0 text-muted">Test which is a new approach all solutions</p>
            </div>
            <p class="small text-muted">12:00 PM | Aug 13</p>
          </div>
        </div>

        <!-- Reciever Message-->
                <div class="media w-50 ml-auto mb-3">
                <div class="media-body">
                    <div class="bg-primary rounded py-2 px-3 mb-2">
                    <p class="text-small mb-0 text-white">Apollo University, Delhi, India Test</p>
                    </div>
                    <p class="small text-muted">12:00 PM | Aug 13</p>
                </div>
                </div>

      </div>

      <!-- Typing area -->
      <form action="#" method="post" class="bg-light">
        <div class="input-group">
          <input type="text" placeholder="Type a message" name="inputText" aria-describedby="button-addon2" class="form-control rounded-0 border-0 py-4 bg-light" required>
          <div class="input-group-append">
            <button id="button-addon2" type="submit" name="btnSend" class="btn btn-link"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-send" viewBox="0 0 16 16">
                <path d="M15.854.146a.5.5 0 0 1 .11.54l-5.819 14.547a.75.75 0 0 1-1.329.124l-3.178-4.995L.643 7.184a.75.75 0 0 1 .124-1.33L15.314.037a.5.5 0 0 1 .54.11ZM6.636 10.07l2.761 4.338L14.13 2.576zm6.787-8.201L1.591 6.602l4.339 2.76z"/>
                </svg>
            </button>
          </div>
        </div>
      </form>

        <?php
            if(isset($_POST['btnSend'])){
                $text = $_POST["inputText"];
                $senderId = $_SESSION['logged_id'];
                $currentDate = date('Y-m-d');
                $currentTime = date('H:i:s');

                try{
                    $conn = conn::getConnection();
                    $textQuery = "INSERT INTO `message`(`text`, `status`, `date`, `time`, `sender_id`, `receiver_id`) 
                                    VALUES 
                                    (:text, :status, :date, :time, :sender_id, receiver_id)";
                    $stmt = $conn->prepare($textQuery);

                    $stmt->bindValue(':text', $text);
                    $stmt->bindValue(':status', 'Sent'); 
                    $stmt->bindValue(':date', $currentDate);
                    $stmt->bindValue(':time', $currentTime);
                    $stmt->bindValue(':sender_id', $senderId);
                    $stmt->bindValue(':receiver_id', $reciverId);
                    $stmt->execute();
                } catch(Exception $e){
                    echo "EROOR: ".$e->getMessage();
                }
            }

        ?>
    </div>
  </div>
</div>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js"></script>        
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</body>
</html>