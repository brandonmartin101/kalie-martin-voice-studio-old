<?php
  date_default_timezone_set('America/Denver');
  // pull the form values
  $emailTo = "kaliemartinvoicestudio@gmail.com";
  $subject = "Prospective Student: ".$_POST["firstName"]." ".$_POST["lastName"]." ".date('l jS \of F Y h:i A T');
  //populate message body
  $body = $_POST["firstName"]." ".$_POST["lastName"]." has asked to be contacted about lessons.
  Email address: ".$_POST["emailAddress"]."
  Phone number: ".$_POST["phoneNumber"]."
  Preferred contact method: ".$_POST["preferContact"]."
  Voice type: ".$_POST["voiceType"]."
  Age: ".$_POST["age"]."
  Source: ".$_POST["source"]."
  What they are looking for: ".$_POST["whyMe"]."
  Questions: ".$_POST["questions"];
  $headers = "from: prospectivestudent@kaliemartinvoicestudio.com";

  // send email and return
  if (mail($emailTo, $subject, $body, $headers)) {
    $message = "Email Sent";
  } else {
    $message = "Email Failed";
  }

  echo $message;
?>