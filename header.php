<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Collapsible sidebar using Bootstrap 4</title>

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="style.css">

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
</head>

<body>
    <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3>Data Kelautan dan Perikanan</h3>
            </div>

            <ul class="list-unstyled components">
                <p> Selamat Datang </p>
                <li class="active">
                    <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Perikanan</a>
                    <ul class="collapse list-unstyled" id="homeSubmenu">
                        <li>
                            <a href="pengertianperikanan.php">Pengertian</a>
                        </li>
                        <li>
                            <a href="klasifikasihewan.php">Klasifikasi Hewan Laut</a>
                        </li>
                        <li>
                            <a href="pemanfaatan.php">Pemanfaatan</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="form.php">Form Data</a>
                </li>
                <li>
                    <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Kelautan</a>
                    <ul class="collapse list-unstyled" id="pageSubmenu">
                        <li>
                            <a href="pengertiankelautan.php">Pengertian</a>
                        </li>
                        <li>
                            <a href="ekologilaut.php">Ekologi laut</a>
                        </li>
                        <li>
                            <a href="hukumlaut.php">Hukum Laut</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="menjagalaut.php">Menjaga Laut</a>
                </li>
            </ul>
        </nav>
