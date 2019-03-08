<?php 
if(isset($_POST['submit'])){
    $to = "sidney.marvin.fricke@gmail.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $name = $_POST['name'];
 // $last_name = $_POST['last_name'];
    $subject = "Reply von Nami-mc.site";
    $message = $name . "Schrieb:" . $_POST['message'];
    $headers = "From:" . $from;
	
    mail($to,$subject,$message,$headers);
	// echo "E-Mail wurde Gesendet!" . $first_name . ", Wir werden so früh wie möglich antworten.";
	// You can also use header('Location: thank_you.php'); to redirect to another page.
    // You cannot use header and echo together. It's one or the other.
    header('Location: send.html');
	}
?>