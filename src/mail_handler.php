<?php
error_reporting(-1);
ini_set('display_errors', 'On');
set_error_handler("var_dump");
if(isset($_POST['submit'])){
    $to = "hello@saramagdits.com"; // my email address
    $server_email = "hello@saramagdits.com";
    $sender_email = $_POST['email']; // this is the sender's Email address
    $subject = $_POST['subject'];
    $subject2 = "Copy of your form submission";
    $message = "You received an email from " . $sender_email . "\n\n" . "The following was sent from your portfolio:" . "\n\n" . $_POST['message'];
    $message2 = "Here is a copy of your message:" . "\n\n" . $_POST['message'];
    $headers = "From:" . $server_email;
    $headers2 = "From:" . $to;
//    mail('saramagdits@gmail.com', 'This was sent from the portfolio', 'Body of Message Here', 'From: admin@example.com');

    //mail($to,$subject,$message,$headers); // sends a copy to myself
    mail($to,$subject,$message,$server_email); // sends a copy to myself
    if (isset($_POST['checkbox'])){
        mail($sender_email,$subject2,$message2,$server_email); // sends a copy to the sender if they checked "send me a copy"
    }
    echo "Mail Sent. Thank you, I will get back to you shortly.";
    }
?>
