<?php

    $firstname = $_POST['firstname'];
    $address= $_POST['address'];
  $lastname=$_POST['lastname'];
$code=$POST['requestcode'];

if ($firstname == "")  {  
    echo  "Enter your first name!";
                        }

elseif (($firstname != "") &&  ($lastname == ""))  {  
    echo  "Enter your last name!";
                        }

elseif($address == "") {
    echo "Enter your address!";
}

else {

	echo " Thanks for registering your address " .  $firstname . 
          "! You will receive a postcard with a verification code in the mail to $address. ";

            include('submittedaddress.php');
    }




?>