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
            <a class="navbar-brand" href="dashboard.php">EXPERVICE ADMIN</a>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" href="dashboard.php">Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="insert_item.php">Input barang</a>
                </li>
                 <li class="nav-item">
                    <a class="nav-link" href="set_location.php">Update lokasi barang</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="expedition_done.php">Konfirmasi pesanan selesai</a>
                </li>
            </ul>
        </nav>

            <div class="p-5 text-center" style="background-color: #4B7BEC">
                <h1 class="mb-3 text-white">Expervice</h1>
                <h4 class="mb-3 text-white">Melayani barang anda dengan aman</h4>
            </div>
        </header>
    </body>
</html>