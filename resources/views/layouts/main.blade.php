<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Website resmi Dinas Koperasi, Perindustrian dan Perdagangan Kota Malang" />
    <meta name="keywords" content="malang,dinas,koperasi,dagang,indsutri,diskopindag,perdagangan,pasar" />
    <title>Diskopindag Kota Malang | Event</title>
    <link rel="icon" href="https://diskopindag.malangkota.go.id/image/site/1622779402_malkot_logo_32x32.png" sizes="32x32" />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://diskopindag.malangkota.go.id/css/tiny-slider.css" />
    <link rel="stylesheet" href="https://diskopindag.malangkota.go.id/css/styles.min.css" />
    <link rel="stylesheet" href="https://diskopindag.malangkota.go.id/css/boxicons.min.css" />
    <!-- css -->
    <link rel="stylesheet" href="css/style.css" />
    <!-- css bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

    <!-- CDN Icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css" />
  </head>
  <body id="body" data-bs-spy="scroll" data-bs-target="#mainNav" data-bs-offset="0" tabindex="0">
    
    <!-- Navbar -->
   @include('partials.navbar')
    <!-- navbar end -->

    <!-- Search overlay -->
    <div class="overlay" id="searchBox">
      <button type="button" class="btn btn-link overlay__close" aria-label="Close" id="closeSearchBtn">
        <i class="bx bx-fw bx-x"></i>
      </button>
      <div class="overlay__content">
        <form action="https://diskopindag.malangkota.go.id/search" id="search-form">
          <div class="input-group">
            <input type="text" class="form-control form-control-lg" placeholder="Cari ..." aria-label="Search" aria-describedby="search-button" name="search" />
            <button type="submit" id="search-button">
              <i class="bx bx-fw bx-search-alt"></i>
            </button>
          </div>
        </form>
      </div>
      <div class="overlay__wave">
        <svg viewBox="0 0 1440 135" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M1440 0.844691V135H0V0.844691C238.272 55.7142 478.272 83.1489 720 83.1489C961.728 83.1489 1201.73 55.7142 1440 0.844691Z" fill="white" />
        </svg>
      </div>
    </div>
    <script src="https://diskopindag.malangkota.go.id/js/popper.min.js"></script>
    <script src="https://diskopindag.malangkota.go.id/js/bootstrap.min.js"></script>
    <script src="https://diskopindag.malangkota.go.id/js/main.js"></script>
    <script src="https://diskopindag.malangkota.go.id/js/vanilla-tilt.min.js"></script>
    <script src="https://diskopindag.malangkota.go.id/js/masonry.pkgd.min.js"></script>
    <script src="https://diskopindag.malangkota.go.id/js/echarts.min.js"></script>
    <script src="https://diskopindag.malangkota.go.id/js/tiny-slider.js"></script>
    <script src="https://diskopindag.malangkota.go.id/js/jquery.min.js"></script>
    <script src="https://diskopindag.malangkota.go.id/js/jquery-feed-instagram-graph.js"></script>
    <!-- overlay end -->

    <!-- section 1  -->
   <div class="container">
    @yield('container')
   </div>
    <!-- section 1 end -->

  </body>
</html>
