 <?php
    $name = $_POST['name'];
    $age = $_POST['age'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $desc = $_POST['desc'];
 
    $email_from='tazkiahoss@gmail.com';
    $email_subject= "New form Submission";
    $email_body="User Name: $name.\n".
                "User Age:$age.\n".
                "User Email:$email.\n".
                "User Phone:$phone.\n".
                "User Message:$desc.\n".
        $to="rakibjsjs3@gmail.com";                 
        $headers= "From: $email_from\r\n";
        $headers .="Reply-To:$email\r\n";
    
    
    mail($to,$email_subject,$email_body,$headers);
    header("Location:index.html");
                   
?>
