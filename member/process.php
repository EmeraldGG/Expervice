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
    $mysqli->query("INSERT INTO item VALUES('$resi','$name','$price','$weight','$address','$phone_number','')") or
            die($mysqli->error);
    $_SESSION['message'] = "Data telah ditambahkan dengan nomor resi : '$resi'";
    $_SESSION['msg_type'] = "success";
}

else if (isset($_POST['find'])) {
    $resi = $_POST['resi'];
    $_SESSION['message'] = $resi;
}

else if (isset($_GET['update'])){
    $resi = $_GET['update'];
    $location = $_GET['location'];
    $description = $_GET['description'];
    $date = date("d/m/Y");
    $time = date("H:i:s");
    $mysqli->query("UPDATE item SET location_now = 'bekasi' WHERE resi = '$resi'");
    $mysqli->query("INSERT INTO track VALUES('$date','$time','$location','$description','$resi')");
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

session_destroy();