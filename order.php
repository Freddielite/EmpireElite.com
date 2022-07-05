<?php  
 
if(isset($_POST['submit'])) {
 $mailto = "fredose2000@gmail.com";  //My email address
 //getting customer data
 $name = $_POST['name']; //getting customer name
 $surname = $_POST['surname']; //getting customer surname
 $phone = $_POST['tel']; //getting customer Phone number
 $address = $_POST['address']; //getting customer address
 $fromEmail = $_POST['email']; //getting customer email
 $items = $_POST['items']; //getting customer number of items
 $description = $_POST['description']; //getting customer description of items
 $pic = $_POST['pic']; //getting picture of commodity
 $phone = $_POST['tick']; //checkbox
 $subject2 = "Confirmation: Message was submitted successfully | EmpireElite"; // For customer confirmation
 
 //Email body I will receive
 $message = "Client Name: " . $name . "\n"
 . "Phone Number: " . $phone . "\n\n"
 . "Client Message: " . "\n" . $_POST['message'];
 
 //Message for client confirmation
 $message2 = "Dear" . $name . "\n"
 . "Thank you for contacting us. We will get back to you shortly!" . "\n\n"
 . "You submitted the following message: " . "\n" . $_POST['feedback'] . "\n\n"
 . "Regards," . "\n" . "- EmpireElite";
 
 //Email headers
 $headers = "From: Client" . $fromEmail; // Client email, I will receive
 $headers2 = "From: " . $mailto; // This will receive client
 
 //PHP mailer function
 
  $result1 = mail($mailto, $subject, $message, $headers); // This email sent to My address
  $result2 = mail($fromEmail, $subject2, $message2, $headers2); //This confirmation email to client
 
  //Checking if Mails sent successfully
 
  if ($result1 && $result2) {
    $success = "Your Message was sent Successfully!";
  } else {
    $failed = "Sorry! Message was not sent, Try again Later.";
  }
 
}
 
?>