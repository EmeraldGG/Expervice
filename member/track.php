<html>
    <head>
        <title></title>
        <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </head>

    <body>
        <?php require_once 'process.php'; ?>
        <?php
        if (isset($_GET['track_resi'])):
            $resi = $_GET['track_resi'];
            $result = $mysqli->query("SELECT * FROM track WHERE resi = '$resi'") or die($mysqli->error);
            
                ?>
                <nav class="navbar navbar-expand-sm navbar-dark" style="background-color: #4B7BEC">
                    <!-- Brand -->
                    <a class="navbar-brand" href="index.php">EXPERVICE</a>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" href="index.php">Pengiriman</a>
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

                <div class="container" style="margin-top: 20px;">
                    <table class="table" style="text-align: center;">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">Tanggal</th>
                                <th scope="col">Jam</th>
                                <th scope="col">Keterangan</th>
                            </tr>
                        </thead>
                        <?php while ($row = $result->fetch_assoc()): ?>
                        <tr>
                            <td scope="col"><?php echo $row['Date']; ?></td>
                            <td scope="col"><?php echo $row['Time']; ?></td>
                            <td scope="col"><?php echo $row['Description']; ?></td>
                        </tr>
                    <?php endwhile; ?>
                <?php endif; ?>
            </table>
        </div>
    </body>
</html>