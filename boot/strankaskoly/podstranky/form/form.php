<?php
if (isset($_POST['submit'])) {
    $to = "laufik@davidlaufik.studenthosting.sk";
    $from = $_POST['email'];
    $name = $_POST['meno'];
    $subject = "Odosielatel" . "\r\n" . $name . "\r\n" . "(" . $from . ")";
    $message = $_POST['sprava'];

    $header_array = [
        "Content-type: text/html; charset=UTF-8",
        "From: " . $from
    ];

    if (isset($_POST['sendCopy']) && $_POST['sendCopy'] == 1) {
        $to .= "," . $from; 
    }

    $headers = implode("\r\n", $header_array);
    mail($to, $subject, $message, $headers);
    header('Location: form.php');
}

?>