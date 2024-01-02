<?php

$firstname = isset($_POST['firstname']) ? $_POST['firstname'] : '';
$address = isset($_POST['address']) ? $_POST['address'] : '';
$contact = isset($_POST['contact']) ? $_POST['contact'] : '';
$email = isset($_POST['email']) ? $_POST['email'] : '';
$subject = isset($_POST['subject']) ? $_POST['subject'] : '';
$message = isset($_POST['message']) ? $_POST['message'] : '';



//database connection 
$conn = new mysqli('localhost','root','','database1');
if($conn->connect_error){
    die('connection failed' .$conn->connect_error);
}else{
   
    $stmt = $conn->prepare("INSERT INTO contacts(firstname, address, phone, email, subject, message) VALUES (?, ?, ?, ?, ?, ?)");
$stmt->bind_param("ssssss", $firstname, $address, $contact, $email, $subject, $message);

    
    $stmt->execute();
    echo "Sucessfully Created";
    $stmt->close();
    $conn->close();
}
?>