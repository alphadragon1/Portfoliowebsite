<?php
if(isset($_POST['submit'])){
  $name = $_POST['name'];
  $subject = $_POST['subject'];
  $email = $_POST['email'];
  $number = $_POST['number'];
  $message = $_POST['message'];
  

$mailto="willhuerta@hotmail.com";
$headers = "FRom: MY website". $email;
$txt = "You have Recieved a emial from". $name.".\n\n".$message;



mail($email, $subject, $txt, $headers);
header("location: index.php?mailsend");

}
?>