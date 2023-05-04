<?php
if(isset($_POST['submit'])) {
    $to = "laufik@davidlaufik.studenthosting.sk";
    $from = $_POST['email'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $subject = "Odosielatel" . "\r\n" . $first_name . "\r\n" . $last_name . "\r\n" . "(" . $from . ")";
    $message = $_POST['message'];
    
$header_array = [
    "Content-type: text/html; charset=UTF-8",
    "From" . $from
];

$headers = implode("\r\n" . $header_array);
mail($to,$subject,$message,$headers);
header('Location: index.php');

}
?>