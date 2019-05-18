<?php

if (isset($_POST['submit'])) {
    $first = $_POST['first-name'];
    $last = $_POST['last-name'];
    $mailFrom = $_POST['email'];
    $contact = $_POST['contact-reason'];
    $message = $_POST['message'];

    $mailTo = "clintonforster@gmail.com";
    $headers = "From: " .$mailFrom;
    $txt = "You have recieved an email from " .$name.".\n\n".$message;

mail($mailTo, $mailFrom, $txt, $headers);
header("Location: index.php?mailsend");
}
