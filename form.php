    <?php
      $name =$_POST["name"];
      $to="cyb912013@gmail.com";
      $email=$_POST["email"];
      $subject =$_POST["subject"];
      $message =$_POST["message"]; 
     $message =" Message: $message \n name: $name\nemail: $email";
     $headers = 'From: webmaster@example.com' . "\r\n" .
    'Reply-To: webmaster@example.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
     mail($to, $subject, $message, $headers);

?>