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
                        <span>Toggle Sidebar</span>
                    </button>
                    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-align-justify"></i>
                    </button>
                </div>
            </nav>

         <b>PENTINGNYA PERAN PERIKANAN DAN MANFAATNYA BAGI INDONESIA</b> 

                <p> Indonesia merupakan negara yang terdiri dari banyak pulau. Dengan wilayah yang terdiri dari sepertiga berupa daratan, dan dua per tiga dikelilingi oleh perairan atau lautan. Oleh karena itu Indonesia disebut sebagai Negara Kepulauan. Dan sudah terkenal sebagai Negara Kepulauan terbesar di dunia.
                
                Pada Sektor Kelautan dan Perikanan sebagai sektor potensial bagi sumber pertumbuhan ekonomi baru merupakan sumber penghidupan masyarakat banyak dan harapan masa depan bangsa. Indonesia merupakan negara kepulauan dan 2/3 wilayahnya merupakan lautan, karenanya potensi ikan di Indonesia sangat berlimpah. Secara fisik, sektor kelautan dan perikanan memilki potensi yang sangat besar.
                
                Tingginya keanekaragaman hayati membuat potensi peluang semakin besar untuk dikembangkan, seperti sebagai sumber plasma nutfah, sumber pangan, bahan baku industri farmasi dan kosmetik, dan pendukung untuk pengembangan kawasan industri dan pariwisata.
                
                Potensi-potensi tersebut di atas tidak akan memberikan dampak yang signifikan apabila tidak dikelola secara profesional dengan tetap memperhatikan aspek pengelolaan yang berwawasan lingkungan.
                
                Berbagai macam kekayaan laut Indonesia dapat dikelola oleh masyarakat. Namun hal paling utama dapat dimanfaatkan sebesar-besarnya adalah sektor perikanan. Dengan wilayah dan hasil laut yang besar, tentu sektor perikanan menjadi perhatian penting. Karena sektor tersebut mampu untuk menunjang kemajuan perekonomian bangsa.
                
                Pemasaran produk perikanan dapat menjadi penghela bagi pengembangan sub sistem produksi baik dari hulu sampai hilir. Peningkatan pemasaran akan mampu mendorong terjadinya peningkatan produksi di sisi hulu maupun peningkatan produksi pengolahan di sisi hilir yang pada akhirnya mampu menyerap tenaga kerja sektor perikanan yang cukup besar. Sebagai penyedia lapangan kerja, perikanan telah berkontribusi terhadap penciptaan dan pengembangan industri rumah tangga, usaha mikro kecil menengah dan industri besar berskala ekspor. Peningkatan pertumbuhan ekonomi ditunjukkan dari kontribusi peningkatan kesejahteraan masyarakat pengolah dan pemasar hasil perikanan.
            </p>

            <p><b>Berikut Manfaat Ekonomi Perikanan <b> </p>

                <p> Memenuhi kebutuhan pangan dan gizi masyarakat. Ikan merupakan lauk sumber protein hewani yang bak bagi perkembangan tubuh manusia. Juga mengandung omega 3 yang aik bagi perkembangan otak manusia. Sehingga keberadaannya sangat penting untuk pemenuhan kebutuhan gizi tersebut. Demi generasi penerus bangsa yang sehat dan pintar. <br>

                Memberikan penghasilan bagi masyarakat terutama mereka yang hidup di daerah dekat perairan. Masyarakat di daerah pesisir atau perairan mayoritas menggantungkan hidupnya pada hasil menangkap ikan (nelayan). Mereka menangkap ikan dan menjualnya untuk memenuhi kebutuhan sehari-hari.<br>

                Menaikkan derajat ekonomi rakyat. Penghasilan yang diperoleh masyarakat dari penjualan ikan adalah untuk memenuhi kebutuhan ekonomi. Jika penjualan tersebut memberikan hasil yang besar, akan terjadi lonjakan pemenuhan kebutuhan. Dari pemenuhan kebutuhan primer, menjadi kebutuhan sekunder bahkan tersier. Hal ini dikarenakan derajat ekonomi yang meningkat. <br>

                Membantu pertumbuhan ekonomi nasional. Pertumbuhan ekonomi rakyat yang baik (pada poin 3) secara otomatis memengaruhi pertumbuhan ekonomi nasional yang baik pula.<br>
                
                Membantu pemenuhan pangan dunia sebagai pemasok (ekspor) perikanan. Seperti halnya masyarakat Indonesia, penduduk dunia pun membutuhkan ikan untuk pemenuhan pangan dan gizinya. Apabila di dalam negerinya tidak tercukupi, tentu mereka akan mengimpor. Di sinilah kesempatan baik Indonesia untuk memasok (mengekspor) ikan-ikan pada negara-negara yang memerlukan. <br> 

                <p> <b> Manfaat Sosial Perikanan <b> </p>

                <p> Selain dalam segi ekonomi, perikanan juga mampu memberikan manfaat dalam segi sosial, yaitu menjalin hubungan atau relasi. Karena sektor perikanan memerlukan banyak orang yang menanganinya. Sehingga akan otomatis terjalin hubungan dengan banyak orang. Misal antara nelayan dengan pembeli, penjual ikan dengan pemborong, pedagang besar maupun kecil, konsumen, pemerintah daerah, dan sebagainya. Di samping itu, tingkat ekonomi yang baik masyarakat pesisir akan memberikan kepercayaan diri yang baik pula dalam kehidupan sosialnya
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
