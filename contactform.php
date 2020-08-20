<?php
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $mailfrom = $_POST['mail'];
    $phonenumber = $_POST['phonenumber'];
    $productcode = $_POST['productcode'];
    $address = $_POST['address'];
    $landmark = $_POST['land mark'];
    $city = $_POST['city'];
    $District = $_POST['District'];
    $pincode = $_POST['pin code'];
    $state = $_POST['state'];
    $contry = $_POST['contry'];
    
    $mailTo = "abdulvajidt0711@gmail.com";
    $headers = "from: ".$mailfrom;
    $text = "New order from ".$name.".\n\n".$phonenumber.".\n".$productcode.".\n".$address.".\n".$landmark.".\n".$city.".\n".$District.".\n".$pincode.".\n".$state.".\n".$contry;


    mail($mailTo, $text, $headers);
    header("Location: index.php?mailsend");


}