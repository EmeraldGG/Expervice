<html>
    <head>
        <title></title>
        <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </head>
    <body>
        <nav class="navbar navbar-expand-sm navbar-dark" style="background-color: #4B7BEC">
                    <!-- Brand -->
            <a class="navbar-brand" href="index.php">EXPERVICE</a>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Pengiriman</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="price.php">Cek Harga</a>
                </li>
                 <li class="nav-item">
                    <a class="nav-link" href="location.php">Lokasi Kami</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about.php">Tentang Kami</a>
                </li>
            </ul>
        </nav>
        <div style="margin-top: 100px;">
            <?php require_once 'process.php'; ?>
            <?php
            
            if (isset($_SESSION['message'])): ?>
            
            <div class="alert alert-<?=$_SESSION['msg_type']?>">
                <?php
                    echo $_SESSION['message'];
                    unset($_SESSION['message']);
                ?>
            </div>
            <?php endif ?>
<<<<<<< Updated upstream:insert_item.php
            <div style="margin: 100px 400px 100px 400px;">
=======
            <div style="margin: 80px 400px 50px 400px;">
>>>>>>> Stashed changes:admin/insert_item.php
            <form actions="process.php" method="POST">
                <div class="form-group">
                    <label>Nama</label>
                    <input type="text" name="name" class="form-control" value="">
                </div>
                <div class="form-group">
                    <label for="jenispengiriman">Jenis Pengiriman</label>
                    <select class="form-control" id="jenispengiriman">
                    <option>Same Day Service</option>
                    <option>Over Night Service</option>
                    <option>Regular Service</option>
                    <option>Economy Service</option>
                    <option>Trucking Service</option>
                    <option>International Service</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Berat(kg)</label>
                    <input type="text" name="weight" class="form-control" value="">
                </div>
                <div class="form-group">
                    <label>Alamat</label>
                    <input type="text" name="address" class="form-control" value="">
                </div>
                <div class="form-group">
                    <label>Nomor Telepon</label>
                    <input type="text" name="phone_number" class="form-control" value="">
                </div>
                <div class="form-group" style="text-align: center; margin-top: 50px;">
                    <button type="submit" class="btn btn-primary" name="insert_item">Tambahkan barang</button>
                </div>
            </form>
            </div>
        </div>
    </body>