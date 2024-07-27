
<?php
 if(isset($_POST['submit'])){
    $name =$_POST['name'];
    $mailFrom =$_POST['email'];
   
    $message =$_POST['message'];

    $mailTo = "info@newinning.in";
    $headers = "From: ".$mailFrom;
   
    $txt = "Message : " .$message ;
  

    mail($mailTo, $name, $txt, $headers);

    header("Location: contact.php");
 }
?>
