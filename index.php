<html>
    <head>
        <title></title>
        <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </head>
    <body>
        <?php require_once 'process.php'; ?>

        <header>
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

            <div class="p-5 text-center" style="background-color: #4B7BEC">
                <h1 class="mb-3 text-white">Expervice</h1>
                <h4 class="mb-3 text-white">Melayani barang anda dengan aman</h4>
            </div>
        </header>

        <div class="row justify-content-center" style="margin-top: 150px">
            <form actions="process.php" method="POST">
                <div class="form-group">
                    <label>Masukan kode resi</label>
                    <input type="text" name="resi" class="form-control" value="">
                </div>
                <div class="form-group" style="text-align: center;">
                    <button type="submit" class="btn btn-primary" name="find">Temukan</button>
                </div>
            </form>
        </div>
        <?php if (isset($_SESSION['message'])): ?>
            <div class="row justify-content-center">
                <?php $resi = $_SESSION['message']; ?>
                <?php $result = $mysqli->query("SELECT * FROM item WHERE resi = '$resi'") or die($mysqli->error); ?>
                <div class="row justify-content-center">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Nama</th>
                                <th>Harga</th>
                                <th>Lokasi barang</th>
                                <th>Operasi</th>
                            </tr>
                        </thead>
                        <?php while ($row = $result->fetch_assoc()): ?>
                            <tr>
                                <td><?php echo $row['name']; ?></td>
                                <td><?php echo $row['price']; ?></td>
                                <td><?php echo $row['location_now']; ?></td>
                                <td><a href="track.php?edit=<?php echo $row['resi']; ?>" class ="btn btn-info">Track</a>
                            </tr>
                        <?php endwhile; ?>
                    </table>
                </div>

                <?php unset($_SESSION['message']);
            endif ?>
        </div>
    </body>
</html>