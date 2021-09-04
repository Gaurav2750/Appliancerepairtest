<?php

if(!isset($_POST['submit']))
{
    $name = $_POST['name'];
    $client_email = $_POST['email'];
    $Comments = $_POST['comments'];
    if($name=='' || $client_email=='' || $Rating=='' ||$Comments=='')
    {
        echo '<script>alert("All fileds are required!")</script>';
        header("Refresh: 3; url=https://appliancerepaircrew.ca/");
    }

    else{

        $email_from    = "info@appliancerepaircrew.ca";
        $email_subject =  "New Review from $name";
        $email_body    = " You have received a new message from the client $name. \n
                           email: $client_email \n
                           Comments:$Comments \n";
       $to = "appliancerepairscrew@gmail.com, info@appliancerepaircrew.ca" ;
       $headers ="From: $email_from\r\n";

mail($to,$email_subject,$email_body,$headers);

echo '<script>alert("Thankyou your review is submitted")</script>';
header("Refresh: 3; url=https://appliancerepaircrew.ca/");

    }
    
}





?>