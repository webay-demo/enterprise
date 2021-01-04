<?php

if(isset($_POST['submit'])){

// the message

    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $city = $_POST['city'];
    $msg = $_POST['message'];

    $to = "ansingh3335@gmail.com";
         $subject = "Callback Request From Website";
         
         $message = "Name: ".$name." \nPhone: ".$phone." \n";
         $message .= "Email: ".$email." \n";
         $message .= "City: ".$city." \n";
         $message .= "Message: ".$msg;
         
         $header = "From:".$email." \r\n";
        //  $header .= "Cc:afgh@somedomain.com \r\n";
        //  $header .= "MIME-Version: 1.0\r\n";
        //  $header .= "Content-type: text/html\r\n";
         
         $action = mail ($to,$subject,$message,$header);

    if($action == true){
        header("Location: ../contact.php?msg=success");
    } else {
        header("Location: ../contact.php?msg=error");
    }

}

?>