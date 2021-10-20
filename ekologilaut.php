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

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="nav navbar-nav ml-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="#">Page</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Page</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Page</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Page</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

        <p> 
        Marine coasts are dynamic environments which constantly change, like the ocean which partially shape them. The Earth's natural processes, including weather and sea level change, result in the erosion, accretion and resculpturing of coasts as well as the flooding and creation of continental shelves and drowned river valleys.

The main agents responsible for deposition and erosion along coastlines are waves, tides and currents. The formation of coasts also depends on the nature of the rocks they are made of – the harder the rocks the less likely they are to erode, so variations in rock hardness result in coastlines with different shapes.

Tides often determine the range over which sediment is deposited or eroded. Areas with high tidal ranges allow waves to reach farther up the shore, and areas with lower tidal ranges produce deposition at a smaller elevation interval. The tidal range is influenced by the size and shape of the coastline. Tides do not typically cause erosion by themselves; however, tidal bores can erode as the waves surge up river estuaries from the ocean.
        </p>

        <br>
        <br> 
        <p>
        Continental coastlines usually have a continental shelf, a shelf of relatively shallow water, less than 200 metres deep, which extends 68 km on average beyond the coast. Worldwide, continental shelves occupy a total area of about 24 million km2 (9 million sq mi), 8% of the ocean's total area and nearly 5% of the world's total area. Since the continental shelf is usually less than 200 metres deep, it follows that coastal habitats are generally photic, situated in the sunlit epipelagic zone. This means the conditions for photosynthetic processes so important for primary production, are available to coastal marine habitats. Because land is nearby, there are large discharges of nutrient rich land runoff into coastal waters. Further, periodic upwellings from the deep ocean can provide cool and nutrient rich currents along the edge of the continental shelf.
        </p>
        <p>
        As a result, coastal marine life is the most abundant in the world. It is found in tidal pools, fjords and estuaries, near sandy shores and rocky coastlines, around coral reefs and on or above the continental shelf. Coastal fish include small forage fish as well as the larger predator fish that feed on them. Forage fish thrive in inshore waters where high productivity results from upwelling and shoreline run off of nutrients. Some are partial residents that spawn in streams, estuaries and bays, but most complete their life cycle in the zone.There can also be a mutualism between species that occupy adjacent marine habitats. For example, fringing reefs just below low tide level have a mutually beneficial relationship with mangrove forests at high tide level and sea grass meadows in between: the reefs protect the mangroves and seagrass from strong currents and waves that would damage them or erode the sediments in which they are rooted, while the mangroves and seagrass protect the coral from large influxes of silt, fresh water and pollutants. This additional level of variety in the environment is beneficial to many types of coral reef animals, which for example may feed in the sea grass and use the reefs for protection or breeding.
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
