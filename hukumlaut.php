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
                            <a href="https://www.marinespecies.org/aphia.php?p=taxdetails&id=210378">Klasifikasi Hewan Laut</a>
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
                    <a href="masukdansaran.php">masukan dan saran</a>
                </li>
            </ul>
        </nav>
        <!-- Page Content  -->
        <div id="content">

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="btn btn-info">
                        <i class="fas fa-align-left"></i>
                        <span>Menur</span>
                    </button>
                    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-align-justify"></i>
                    </button>
                </div>
            </nav>
            <p> Konvensi Perserikatan Bangsa-Bangsa tentang Hukum Laut (bahasa Inggris: United Nations Convention on the Law of the Sea, UNCLOS) juga disebut Konvensi Hukum Laut Internasional atau Hukum Perjanjian Laut, adalah perjanjian internasional yang dihasilkan dari Konferensi Perserikatan Bangsa-Bangsa tentang Hukum Laut yang ketiga (UNCLOS III) yang berlangsung dari tahun 1973 sampai dengan tahun 1982. Konvensi Hukum Laut ini mendefinisikan hak dan tanggung jawab negara dalam penggunaan lautan di dunia serta menetapkan pedoman untuk bisnis, lingkungan, dan pengelolaan sumber daya alam laut. Konvensi disimpulkan pada tahun 1982, menggantikan perjanjian internasional mengenai laut tahun 1958. UNCLOS diberlakukan pada tahun 1994, setahun setelah Guyana menjadi negara ke 60 untuk menandatangani perjanjian. Untuk saat ini telah ada 158 negara, termasuk Uni Eropa, telah bergabung dalam konvensi. </p>
            
            <p>
            Dalam perumusan konvensi ini, Sekretaris Jenderal Perserikatan Bangsa-Bangsa menerima instrumen ratifikasi dan aksesi, sedangkan Perserikatan Bangsa-Bangsa menyediakan dukungan untuk pertemuan negara-negara peserta konvensi. PBB tidak memiliki peran operasional langsung dalam pelaksanaan konvensi. Peran PBB hanyalah melalui organisasi-organisasi dunia yang menangani masalah-masalah maritim dan kelautan seperti Organisasi Maritim Internasional. </p>

            <p>
            Sebagai tindak lanjut atas ratifikasi UNCLOS tersebut, kini Indonesia sejak tahun 2014 telah memiliki payung hukum yang menekankan kewilayahan laut Indonesia yang diatur dalam Undang-Undang Nomor 32 Tahun 2014 tentang Kelautan, yang disahkan pada tanggal 17 Oktober 2014, dan dicantumkan dalam Lembaran Negara Republik Indonesia Tahun 2014 Nomor 294, dan Tambahan Lembaran Negara Republik Indonesia Nomor 5603. </p>
</p>
        </div>
    </div>
    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
        });
    </script>
</body>

</html>
