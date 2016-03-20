<?php
  date_default_timezone_set('America/Denver');
  // pull the form values
  $emailTo = "kaliemartinvoicestudio@gmail.com";
  $subject = "Student Report: ".$_POST["singerName"]." ".date('l jS \of F Y h:i A T');
  $body = $_POST["singerName"]." has just submitted a practice report.
  They practiced ".$_POST["numberHoursPracticed"]." hours.
  Exercises done: ".$_POST["exercisesDone"]."
  Repertoire they worked on: ".$_POST["repertoireDone"]."
  They rated their repertoire: ".$_POST["repertoireScale"]."
  They want to work on: ".$_POST["toWorkOn"]."
  They had this concern:".$_POST["openQuestion"];
  $headers = "from: studentreport@kaliemartinvoicestudio.com";

  // send email and return
  if (mail($emailTo, $subject, $body, $headers)) {
    $message = "Email Sent";
  } else {
    $message = "Email Failed";
  }

  echo $message;
?>