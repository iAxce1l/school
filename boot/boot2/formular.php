<?php
if(isset($_POST['submit'])) {
    $to = "laufik@davidlaufik.studenthosting.sk";
    $from = $_POST['email'];
    $first_name = $_POST['meno'];
    $last_name = $_POST['priezvisko'];
    $subject = "Odosielatel" . "\r\n" . $first_name . "\r\n" . $last_name . "\r\n" . "(" . $from . ")";
    $message = $_POST['sprava'];
    
$header_array = [
    "Content-type: text/html; charset=UTF-8",
    "From" . $from
];

$headers = implode("\r\n" , $header_array);
mail($to,$subject,$message,$headers);
header('Location: index.php');

}
?>