<?php

if(!isset($_POST['submit']))
{
    $name = $_POST['name'];
    $contact = $_POST['contact'];
    $Email = $_POST['email'];
    $Appliancetype = $_POST['appliance-type'];
    $AppointmentDate = $_POST['date'];
    $AppointmentTime = $_POST['time'];
    $Address = $_POST['address'];
    $City = $_POST['city'];
    $Pincode = $_POST['pincode'];
    $Comments = $_POST['comments'];
    if($name=='' || $contact=='' || $Email=='' ||$Appliancetype=='' || $AppointmentDate==''|| $AppointmentTime=='' ||$Address==''
        ||$City==''|| $Pincode==''|| $Comments=='')
    {
        echo '<script>alert("All fileds are required!")</script>';
        header("Refresh: 5; url=https://appliancerepaircrew.ca/");
        
    }

    else{

        $email_from    = "info@appliancerepaircrew.ca";
        $email_subject =  "New Appointment Schedule for $name";
        $email_body    = " You have received a new message from the client $name. \n
                           Name=$name. \n
                           Contact=$contact .\n
                           Email: $Email \n
                           Appliance-type: $Appliancetype \n
                           Appointment-Date:$AppointmentDate \n
                           Appointment-Time:$AppointmentTime \n
                           Address:$Address \n
                           City:$City \n
                           Pincode:$Pincode \n
                           Comments:$Comments \n";

       $to = "appliancerepairscrew@gmail.com , info@appliancerepaircrew.ca" ;
       $headers ="From: $email_from\r\n";

mail($to,$email_subject,$email_body,$headers);

echo '<script>alert("Thankyou your Appointment is submitted our crew will get in touch with you")</script>';

header("Refresh: 2; url=https://appliancerepaircrew.ca/");

    }
    
}


?>