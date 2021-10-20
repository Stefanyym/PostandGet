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
                        <span>Menu</span>
                    </button>
                    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-align-justify"></i>
                    </button>
                </div>
            </nav>
            <nav class="navbar navbar-expand-lg navbar-light"  style="background-color: white;">
    </nav>
  </section>
</br>
    
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                  <img src="foto/5.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                 <h5>KELAUTAN </h5>
            </div>
            </div>

            <div class="carousel-item">
                <img src="foto/5.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block text-align">
            </div>
            </div>

            <div class="carousel-item text-align">
                <img src="foto/diving.png" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
            </div>
            </div>
        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>

    </div>
    <br>
    <br>
    <br>
    <div class="container">
        <div class="row">
        </div>
      <div class="row">
        <div class="col-md">
          <div class="card">
              <div class="card-body">
                <h5 class="card-title">KELAUTAN </h5>
                <p class="card-text">Marine habitats are habitats that support marine life. Marine life depends in some way on the saltwater that is in the sea (the term marine comes from the Latin mare, meaning sea or ocean). A habitat is an ecological or environmental area inhabited by one or more living species. The marine environment supports many kinds of these habitats. Marine habitats can be divided into coastal and open ocean habitats. Coastal habitats are found in the area that extends from as far as the tide comes in on the shoreline out to the edge of the continental shelf. Most marine life is found in coastal habitats, even though the shelf area occupies only seven percent of the total ocean area. Open ocean habitats are found in the deep ocean beyond the edge of the continental shelf.</p>
              </div>
              <div class="card-body">
              </div>
            </div>
        </div>
         <div class="col-md">
            <div class="card">
                    <div class="card-body">
                      <h5 class="card-title"></h5>
                      <p class="card-text">
                      Alternatively, marine habitats can be divided into pelagic and demersal zones. Pelagic habitats are found near the surface or in the open water column, away from the bottom of the ocean. Demersal habitats are near or on the bottom of the ocean. An organism living in a pelagic habitat is said to be a pelagic organism, as in pelagic fish. Similarly, an organism living in a demersal habitat is said to be a demersal organism, as in demersal fish. Pelagic habitats are intrinsically shifting and ephemeral, depending on what ocean currents are doing.
                      Marine habitats can be modified by their inhabitants. Some marine organisms, like corals, kelp, mangroves and seagrasses, are ecosystem engineers which reshape the marine environment to the point where they create further habitat for other organisms. By volume the ocean provides most of the habitable space on the planet. 
                    </p>
                    </div>
                    <div class="card-body">
                      </div>
                    </div>
                    </div>
                  </div>

    <br>
    <br>
    <br>
    <br> 
    <br> 

    <div class="container">
      <div class="row">
       <div class="col-md">
          <div class="card">
                <div class="card-body">
                  <h5 class="card-title">MARINE THOPOGRAPY</h5>
                  <p class="card-text">Marine (or seabed or ocean) topography refers to the shape the land has when it interfaces with the ocean. These shapes are obvious along coastlines, but they occur also in significant ways underwater. The effectiveness of marine habitats is partially defined by these shapes, including the way they interact with and shape ocean currents, and the way sunlight diminishes when these landforms occupy increasing depths. Tidal networks depend on the balance between sedimentary processes and hydrodynamics however, anthropogenic influences can impact the natural system more than any physical driver.

Marine topographies include coastal and oceanic landforms ranging from coastal estuaries and shorelines to continental shelves and coral reefs. Further out in the open ocean, they include underwater and deep sea features such as ocean rises and seamounts. The submerged surface has mountainous features, including a globe-spanning mid-ocean ridge system, as well as undersea volcanoes, oceanic trenches, submarine canyons, oceanic plateaus and abyssal plains.

The mass of the oceans is approximately 1.35×1018 metric tons, or about 1/4400 of the total mass of the Earth. The oceans cover an area of 3.618×108 km2 with a mean depth of 3,682 m, resulting in an estimated volume of 1.332×109 km3..</p>
                </div>
                <div class="card-body">
                  <a href="" class="card-link">website</a>
                </div>
                    </div>
                  </div>
                  </div>
              <br>
              <BR>
              <br>
          

                  <div class="container">
                    <div class="row">
                    <div class="col-md">
                      <div class="card">
                          <div class="card-body">
                            <form>
                              <h3>Tanyakan Sesuatu</h3>
                              <div class="mb-3">
                                <label for="exampleInputNama1" class="form-label">Nama</label>
                                <input type="Nama" class="form-control" id="exampleInputNama1" aria-describedby="Namahelp">
                              </div>
                              <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Email</label>
                                <input type="email" class="form-control" id="exampleInputEmail1">
                              </div>
                              <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Pesan</label>
                                <input type="Pesan" class="form-control" id="exampleInputPesan">
                              </div>
                              <div
                                class="btn btn-primary">Kirim
                              </div>
                            </form>
                        </div>
                    </div>
                    </div>
              
                     <div class="col-md">
                        <div class="card">
                              <div class="card-body">
                                <div class="embed-responsive embed-responsive-16by9">
                                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3967.03700262129!2d106.144474514198!3d-6.125722995564574!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e418adaa4f7f563%3A0x950ec58123df8596!2sUniversitas%20Pendidikan%20Indonesia%20(UPI)%20Kampus%20Serang!5e0!3m2!1sen!2sid!4v1633591384371!5m2!1sen!2sid" width="300" height="350" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                                </div>
                                  </div>
                                </div>
                                </div>
    <br>
    <br>
    <br>
    <div class="p-3 mb-2 bg-dark text-white text-center ">
      <p>
          STEFANY MARIYORI SIK B
      </p>
  </div>
                      
                  
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.min.js" integrity="sha384-PsUw7Xwds7x08Ew3exXhqzbhuEYmA2xnwc8BuD6SEr+UmEHlX8/MCltYEodzWA4u" crossorigin="anonymous"></script>
    -->
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
