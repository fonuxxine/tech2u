<?php

if (isset($_POST['submit'])) {
    $first = $_POST['first'];
    $last = $_POST['last'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $mailTo = "lsm.team@utoronto.ca";
    $headers = "From: Tech2U - ".$email;
    $txt = "You have received an email from ".$first." ".$last.".\n\n".$message;

    mail($mailTo, $subject, $txt, $headers);
    header("Location: contacttech.html?mailsend");
}