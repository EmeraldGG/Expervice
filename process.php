<?php
session_start();
$mysqli = new mysqli('localhost', 'root', '', 'expervicedb') or die(mysqli_error($mysqli));

if (isset($_POST['insert_item'])) {
    $resi = resiGenerator();
    $name = $_POST['name'];
    $price = $_POST['price'];
    $weight = $_POST['weight'];
    $address = $_POST['address'];
    $phone_number = $_POST['phone_number'];
    $mysqli->query("INSERT INTO item VALUES('$resi','$name','$price','$weight','$address','$phone_number','[current location]')") or
            die($mysqli->error);
    $_SESSION['message'] = "Data telah ditambahkan dengan nomor resi : '$resi'";
    $_SESSION['$resi'] = $resi;
    $_SESSION['msg_type'] = "success";
}

else if (isset($_POST['find'])) {
    $resi = $_POST['resi'];
    $_SESSION['message'] = $resi;
}

function resiGenerator($length = 10) {
    $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}
