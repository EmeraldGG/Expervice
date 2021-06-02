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
        <div style="margin: 30px 50px 30px 50px;">
            <div class="row">
                <div class="border border-primary" style="height: 720px; width: 900px; overflow-y: scroll">
                    <div style="margin: 20px 5px 20px 5px; text-align: center;">
                        <h2>Daftar Seluruh Pengiriman</h2>
                    </div>
                    <div class="container">
                        <table class="table" style="table-layout: fixed;">
                            <thead class="bg-primary text-white">
                                <tr>
                                    <th scope="col text-truncate" style="text-align: center;">Resi</th>
                                    <th scope="col text-truncate">Nama</th>
                                    <th scope="col text-truncate">Harga</th>
                                    <th scope="col text-truncate">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row" style="text-align: center;">7aFKvECElQ</th>
                                    <td class="text-truncate">Fazar Zulham Ibrahim</td>
                                    <td class="text-truncate">Rp 10.000.00,00</td>
                                    <td class="text-truncate">Diperjalanan</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col">
                    <div class="border border-primary" style="height: 410px; margin-bottom: 20px; overflow-y: scroll">
                        <div style="margin: 20px 5px 20px 5px; text-align: center;">
                            <h2>Daftar Pengiriman Selesai</h2>
                        </div>
                        <div class="container">
                            <table class="table" style="table-layout: fixed;">
                                <thead class="bg-primary text-white"">
                                    <tr>
                                        <th scope="col text-truncate" style="text-align: center;">Resi</th>
                                        <th scope="col text-truncate">Nama</th>
                                        <th scope="col text-truncate">Harga</th>
                                        <th scope="col text-truncate">Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row style=" style="text-align: center;">7aFKvECElQ</th>
                                        <td class="text-truncate">Fazar Zulham Ibrahim</td>
                                        <td class="text-truncate">Rp 10.000,00</td>
                                        <td class="text-truncate">Diperjalanan</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="border border-primary" style="height: 290px;">  
                        <div style="margin: 20px 5px 20px 5px; text-align: center;">
                            <h2>Perhitungan Pengiriman </h2>
                        </div>
                        <div class="container">
                            <table class="table" style="table-layout: fixed;">
                                <tbody class="text-truncate">
                                    <tr>
                                        <td scope="row">Pengiriman Diproses</td>
                                        <td>: 26</td>
                                    </tr>
                                    <tr>
                                        <td scope="row">Pengiriman Diperjalanan</td>
                                        <td>: 50</td>
                                    </tr>
                                    <tr>
                                        <td scope="row">Pengiriman Selesai</td>
                                        <td>: 100</td>
                                    </tr>
                                    <tr>
                                        <td scope="row">Jumlah Penghasilan</td>
                                        <td>: Rp xxx.xxx.xxx.xxx</td>
                                    </tr>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
     </div>
    </body>
</html>