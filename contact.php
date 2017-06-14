<html>

<head>
  <title>Sent</title>
</head>

<body>

  <?php

  $name = $_POST['username'];
  $userEmail = $_POST['emailaddress'];
  $message = htmlspecialchars($_POST['message']);

  $to = 'smorebtofficail@gmail.com';

  $subject = "Contact from" . $name;

  $message = $message;

  $headers = "From: " . $name . " <" . $userEmail . ">\r\n";
  $headers .= "Reply-To: " . $userEmail . "\r\n";
  $headers .= "Content-type: text\html\r\n";

  mail($to, $subject, $message, $headers);

  echo "<p>Your email has been sent. The developers will contact you with a reply as soon as they can.</></br></br>";
  echo "<p>PLEASE NOTE: If you have used this feauture for spamming, you WILL face consequenses!</>";

   ?>

</body>

</html>
