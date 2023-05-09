<?php
if (isset($_POST['submit'])) {
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

    $headers = implode("\r\n", $header_array);
    mail($to, $subject, $message, $headers);
    header('Location: index.php');

}
?>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $servername = 'edudb-02.nameserver.sk';
    $username = 'davidlaufik_stu1';
    $password = 'odTWxPjI3';
    $dbname = 'davidlaufik_odp';
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    if (!$conn) {
        die('Nepripojil si sa na DB :(: ' . mysqli_connect_error());
    }

    $meno = $_POST['meno'];
    $priezvisko = $_POST['priezvisko'];
    $email = $_POST['email'];
    $sprava = $_POST['sprava'];
    $sql = "INSERT INTO udaje (meno, priezvisko, email, sprava) VALUES ('$meno', '$priezvisko', '$email', '$sprava')";

    if (mysqli_query($conn, $sql)) {
        echo 'Dáta boli uložené';
    } else {
        echo 'Došlo k chybe :( : ' . mysqli_error($conn);
    }

    mysqli_close($conn);
}

?>