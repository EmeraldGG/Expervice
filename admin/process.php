<?php

session_start();
$mysqli = new mysqli('localhost', 'root', '', 'expervicedb') or die(mysqli_error($mysqli));

$collect = json_decode(file_get_contents('profile.json'));
$mitra_token = $collect->mitra_token;
$query = $mysqli->query("SELECT * FROM mitra WHERE mitra_token = '$mitra_token'") or die($mysqli->error);
if ($query->fetch_assoc() == NULL){
    die("akun tidak terdaftar");
}    
else if (isset($_POST['insert_item'])) {
    $collect = json_decode(file_get_contents('profile.json'));
    $mitra_token = $collect->mitra_token;
    $query = $mysqli->query("SELECT * FROM mitra WHERE mitra_token = '$mitra_token'") or die($mysqli->error);
    while ($row = $query->fetch_assoc()):
        $name_mitra = $row['name_mitra'];
        $location = $row['location'];
    endwhile;
    $resi = resiGenerator();
    $name = $_POST['name'];
    $price = $_POST['price'];
    $weight = $_POST['weight'];
    $address = $_POST['address'];
    $date = date("d/m/Y");
    $time = date("H:i:s");
    $phone_number = $_POST['phone_number'];
    $description = "Barang diterima oleh pihak Expervice";
    $mysqli->query("INSERT INTO item VALUES('$resi','$name','$price','$weight','$address','$phone_number','$mitra_token','Dikirim')") or die($mysqli->error);
    $mysqli->query("INSERT INTO track VALUES('$date','$time','$location','$description','$resi')") or die($mysqli->error) or die($mysqli->error);  
    $_SESSION['message'] = "Data telah ditambahkan dengan nomor resi : '$resi'";
    $_SESSION['msg_type'] = "success";
}

else if (isset($_POST['find'])) {
    $resi = $_POST['resi'];
    $_SESSION['message'] = $resi;
}

else if (isset($_GET['update'])) {
    $collect = json_decode(file_get_contents('profile.json'));
    $resi = $_GET['update'];
    $mitra_token = $collect->mitra_token;
    $query = $mysqli->query("SELECT * FROM mitra WHERE mitra_token = '$mitra_token'") or die($mysqli->error);
    while ($row = $query->fetch_assoc()):
        $name_mitra = $row['name_mitra'];
        $location = $row['location'];
    endwhile;
    $description = "barang berada di " . $name_mitra . "(" . $location . ")";
    $date = date("d/m/Y");
    $time = date("H:i:s");
    $mysqli->query("UPDATE item SET last_mitra = '$mitra_token' WHERE resi = '$resi'") or die($mysqli->error);
    $mysqli->query("INSERT INTO track VALUES('$date','$time','$location','$description','$resi')") or die($mysqli->error) or die($mysqli->error);  
    echo '<script type="text/javascript">';
    echo 'alert("Data terupdate kelokasi terkini");';
    echo 'window.location.href = "dashboard.php";';
    echo '</script>';
    //header('Location: '."dashboard.php");
}

else if (isset($_GET['done'])) {
    $collect = json_decode(file_get_contents('profile.json'));
    $resi = $_GET['done'];
    $mitra_token = $collect->mitra_token;
    $query = $mysqli->query("SELECT * FROM mitra WHERE mitra_token = '$mitra_token'") or die($mysqli->error);
    while ($row = $query->fetch_assoc()):
        $name_mitra = $row['name_mitra'];
        $location = $row['location'];
    endwhile;
    $date = date("d/m/Y");
    $time = date("H:i:s");
    $description = "Barang telah diterima oleh pembeli";
    $mysqli->query("UPDATE item SET status = 'Diterima' WHERE resi ='$resi'") or die($mysqli->error);
    $mysqli->query("INSERT INTO track VALUES('$date','$time','$location','$description','$resi')") or die($mysqli->error);
    echo '<script type="text/javascript">';
    echo 'alert("Pesanan telah diterima");';
    echo 'window.location.href = "dashboard.php";';
    echo '</script>';
    //header('Location: '."dashboard.php");
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
