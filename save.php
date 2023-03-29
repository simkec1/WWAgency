<?php

$con = mysqli_connect("localhost", "root", "", "registration");

$ime = $_POST['ime'];
$prezime = $_POST['prezime'];
$telefon = $_POST['telefon'];
$email = $_POST['email'];
$grad = $_POST['grad'];
$notes = $_POST['notes'];

$sql = "INSERT INTO bookings(ime, prezime, telefon, email, grad, notes) VALUES('$ime', '$prezime', '$telefon', '$email', '$grad', '$notes')";
if (!mysqli_query($con, $sql)) {
    echo "Podaci nisu sacuvani";
} else {
    echo "Podaci su uspesno sacuvani";
}

?>