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
            <a class="navbar-brand" href="index.php">EXPERVICE ADMIN</a>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="dashboard.php">Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="insert_item.php">Input barang</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="set_location.php">Update lokasi barang</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="expedition_done.php">Konfirmasi pesanan selesai</a>
                </li>
            </ul>
        </nav>
        <?php require_once 'process.php'; ?>
        <div class="row justify-content-center" style="margin-top: 30px">
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
        <div class="row justify-content-center">
            <?php if (isset($_SESSION['message'])): ?>
                <?php $resi = $_SESSION['message']; ?>
                <?php $result = $mysqli->query("SELECT * FROM item WHERE resi = '$resi' && status = 'dikirim'") or die($mysqli->error); ?>
            <?php else : ?>
                <?php $result = $mysqli->query("SELECT * FROM item WHERE status = 'dikirim'") or die($mysqli->error); ?>
            <?php endif; ?>
                <div class="row justify-content-center">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Resi</th>
                                <th>Nama</th>
                                <th>Harga</th>
                                <th>Operasi</th>
                            </tr>
                        </thead>
                        <?php while ($row = $result->fetch_assoc()): ?>
                            <tr>
                                <td><?php echo $row['resi']; ?></td>
                                <td><?php echo $row['name']; ?></td>
                                <td><?php echo $row['price']; ?></td>
                                <td><a href="process.php?done=<?php echo $row['resi']; ?>" class ="btn btn-info" name="Done">Selesaikan Pengiriman</a>
                            </tr>
                        <?php endwhile; ?>
            </div>
        </table>  
    </div>
</body>