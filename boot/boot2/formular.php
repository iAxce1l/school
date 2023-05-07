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

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // pripojenie
    $servername = 'edudb-02.nameserver.sk';
    $username = 'davidlaufik_stu1';
    $password = 'odTWxPjI3';
    $dbname = 'davidlaufik_odp';
    $conn = new mysqli($servername, $username, $password, $dbname);

    // kontrola pripojenia
    if ($conn->connect_error) {
        die('Nepripojil si sa na DB: ' . $conn->connect_error);
    }

    // vkladanie dát
    $meno = $_POST['meno'];
    $priezvisko = $_POST['priezvisko'];
    $email = $_POST['email'];
    $sprava = $_POST['sprava'];
    $sql = "INSERT INTO udaje (meno, priezvisko, email, sprava) VALUES ('$meno', '$priezvisko', '$email', '$sprava')";

    if ($conn->query($sql) === TRUE) {
        echo 'Dáta boli uložené';
    } else {
        echo 'Došlo k chybe: ' . $conn->error;
    }

    $conn->close();
}
?>
