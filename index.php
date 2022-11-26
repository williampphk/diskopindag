
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Website resmi Dinas Koperasi, Perindustrian dan Perdagangan Kota Malang">
  <meta name="keywords" content="malang,dinas,koperasi,dagang,indsutri,diskopindag,perdagangan,pasar">
  <title>Diskopindag Kota Malang | Event</title>
  <link rel="icon" href="https://diskopindag.malangkota.go.id/image/site/1622779402_malkot_logo_32x32.png"sizes="32x32" />
  <link rel="preconnect" href="https://fonts.gstatic.com"/>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&display=swap" rel="stylesheet"/>
  <link rel="stylesheet" href="https://diskopindag.malangkota.go.id/css/tiny-slider.css">
  <link rel="stylesheet" href="https://diskopindag.malangkota.go.id/css/styles.min.css"/>
  <link rel="stylesheet" href="https://diskopindag.malangkota.go.id/css/boxicons.min.css">
</head>
<body id="body" data-bs-spy="scroll" data-bs-target="#mainNav" data-bs-offset="0" tabindex="0">

<!-- Preloader-->
  <div id="preloader" class="preloader">
    <div class="preloader__inner">
      <div class="preloader__spinner"></div>
      <span class="preloader__text">Memuat...</span>
    </div>
  </div>
  <!-- Topbar -->
  <nav class="topbar">
    <div class="container">
      <ul class="topbar__nav">
        <li class="topbar__item">
          <a href="https://malangkota.go.id/" target="_blank">Pemkot Malang</a>
        </li>
        <li class="topbar__item">
          <a href="http://kota.directory/malang-directory/" target="_blank">Direktori</a>
        </li>
        <li class="topbar__item">
          <a href="https://smartcity.malangkota.go.id/" target="_blank">Smart City</a>
        </li>
      </ul>
    </div>
  </nav>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light" id="mainNav">
    <div class="container">
      <a class="navbar-brand" href="/">
        <img src="https://diskopindag.malangkota.go.id/image/site/1622779402_logo.png" alt="DISKOPINDAG MALANG">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
        aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <i class="bx bx-menu-alt-right"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link active" href="/">Beranda</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="/profile">Profil</a>
          </li>
          <li class="nav-item dropdown" data-toggle="hover">
            <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Layanan</a>
            <div class="dropdown-menu">
                              <a href="https://sambat.malangkota.go.id/" class="dropdown-item">Kritik dan Saran</a>
                              <a href="https://sembako.malangkota.go.id/" class="dropdown-item">Sembako</a>
                              <a href="https://metrologi.malangkota.go.id/" class="dropdown-item">Metrologi</a>
                              <a href="https://pasarmbois.malangkota.go.id/" class="dropdown-item">Marketplace UMKM</a>
                          </div>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="/information">Informasi</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="/event">Event</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="/news">Berita</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#kontak">Kontak</a>
          </li>
          <button class="btn btn-primary" type="submit">Daftar</button>
          <button type="button" class="btn btn-outline-primary">Login</button>
          <li class="nav-item">
            <a class="nav-link" href="javascript:void(0)" id="openSearchBtn">
              <i class="bx bx-fw bx-search-alt"></i>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- main -->
  <main>

  <section class="py-5 text-center container">
    <div class="row py-lg-5">
      <div class="col-lg-6 col-md-9 mx-auto">
        <h1 class="fw-light">Event</h1>
        <p class="lead text-muted">Something short and leading about the collection below—its contents, the creator, etc. Make it short and sweet, but not too short so folks don’t simply skip over it entirely.</p>
        
      </div>
    </div>
  </section>

  <!-- Search overlay -->
  <div class="overlay" id="searchBox">
    <button type="button" class="btn btn-link overlay__close" aria-label="Close" id="closeSearchBtn">
      <i class="bx bx-fw bx-x"></i>
    </button>
    <div class="overlay__content">
      <form action="https://diskopindag.malangkota.go.id/search" id="search-form">
        <div class="input-group">
          <input type="text" class="form-control form-control-lg" placeholder="Cari ..." aria-label="Search"
            aria-describedby="search-button" name="search">
          <button type="submit" id="search-button">
            <i class="bx bx-fw bx-search-alt"></i>
          </button>
        </div>
      </form>
    </div>

    <div class="overlay__wave">
      <svg viewBox="0 0 1440 135" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path
          d="M1440 0.844691V135H0V0.844691C238.272 55.7142 478.272 83.1489 720 83.1489C961.728 83.1489 1201.73 55.7142 1440 0.844691Z"
          fill="white" />
      </svg>
    </div>
  </div>

  <style>
  .commodity .card .card-header .card-img {
    width: 90px;
    height: 90px;
  }

  /* feed ig css */
  .instagram_feed {
    overflow: hidden;
  }

  .instagram_feed .instagram_new {
    width: 50%;
    float: left;
    padding: .5rem;
    box-sizing: border-box;
  }

  .instagram_feed img.insta-image {
    position: absolute;
    left: 0;
    top: 0;
    object-fit: cover;
    width: 100%;
    height: 100%;
    transition: all 0.3s ease 0s;
  }

  .instagram_feed .insta-link {
    position: relative;
    display: block;
    background: #232323;
    padding-top: 100%;
  }

  .instagram_feed .insta-link:hover .insta-image {
    opacity: 0.2;
  }

  @media (min-width: 40em) {
    .instagram_feed .instagram_new {
      width: 33.3333%;
      padding: 1rem;
    }
  }

</style>
<header class="header home" id="beranda">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-7 order-2 order-lg-1">
          <div class="home-greetings">
            <h1 class="home-greetings__heading">
              Dinas Koperasi, Perindustrian dan Perdagangan Kota Malang
            </h1>
            <p class="home-greetings__desc">
            Mewujudkan Sektor Koperasi, Industri dan Perdagangan Yang Tangguh Dan Berdaya Saing
            </p>
            <div class="home-greetings__buttons">
              <a class="btn btn-primary me-3" href="/profile">Tentang Diskopindag</a>
              <a class="btn btn-link" target="_blank" href="https://sembako.malangkota.go.id/">Lihat Sembako Malang</a>
            </div>
          </div>
        </div>
        <div class="col-lg-5 col-xl-4 order-1 order-lg-2">
          <div class="home-video" id="introVideoCard" data-bs-toggle="modal" data-bs-target="#homeVideoModal">
            <button id="homeVideoBtn" class="home-video__play-btn">
              <i class="bx bx-fw bx-play-circle"></i>
            </button>
            <video loop muted autoplay poster="https://diskopindag.malangkota.go.id/img/home_video.png" class="home-video__video">
              <source src="https://diskopindag.malangkota.go.id/videos/home_video.mp4" type="video/mp4">
            </video>
          </div>
        </div>
      </div>
    </div>
    <div class="header__wave">
      <svg viewBox="0 0 1440 135" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path
          d="M1440 0.844691V135H0V0.844691C238.272 55.7142 478.272 83.1489 720 83.1489C961.728 83.1489 1201.73 55.7142 1440 0.844691Z"
          fill="white" />
      </svg>
    </div>
  </header>

  <!-- Intro Video Modal -->
  <div class="modal fade" id="homeVideoModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header d-flex justify-content-end">
          <button type="button" class="modal-close" data-bs-dismiss="modal" aria-label="Close" id="homeVideoModalClose">
            <i class="bx bx-x"></i>
          </button>
        </div>
        <div class="modal-body">
          <div class="ratio ratio-16x9">
            <iframe id="homeVideoSrc" title="YouTube video player" frameborder="0"
              allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
            </iframe>
          </div>
        </div>
      </div>
    </div>
  </div>

  <main>
    <!-- Event -->
    <section class="section events">
      <div class="container">
        <ul class="nav nav-pills justify-content-center" id="events-tab" role="tablist">
          <li class="nav-item" role="presentation">
            <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button"
              role="tab" aria-controls="pills-home" aria-selected="true">Event Rutin</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button"
              role="tab" aria-controls="pills-contact" aria-selected="false">Event Umum</button>
          </li>
        </ul>
        <div class="tab-content" id="pills-tabContent">
          <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
            <h1 class="section__title">Event Rutin</h1>
            <p class="section__subtitle">Kegiatan rutin 2x Seminggu</p>

            <div class="row justify-content-center">
                        </div>

          </div>
          <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
            <h1 class="section__title">Event Umum</h1>
            <p class="section__subtitle">Kegiatan umum</p>

            <div class="row justify-content-center">
                          <div class="col-md-6 col-lg-4">
                <div class="card card--article mb-4">
                  <img src="https://diskopindag.malangkota.go.id/image/event/1632874119_195997418_1413592838997283_7572459254445964135_n(1).jpg" alt="">
                  <div class="card-body">
                    <small class="d-flex flex-column text-muted mb-5">
                      <span class="mb-1">
                        <i class="bx bx-fw bx-calendar"></i> 3 Juni 2021
                      </span>
                      <span>
                        <i class="bx bx-fw bx-map"></i> Aula Diskoperindag Kota Malang
                      </span>
                    </small>
                    <h6 class="fw-normal">
                      Umum
                    </h6>
                    <h1 class="card-title">
                      <a href="https://diskopindag.malangkota.go.id/event/costing-untuk-menentukan-harga-jual">
                        Costing untuk menentukan harga jual
                    </h1>
                    </a>
                  </div>
                </div>
              </div>
                             <div class="col-md-6 col-lg-4">
                <div class="card card--article mb-4">
                  <img src="https://diskopindag.malangkota.go.id/image/event/1632874244_196912899_325866248922761_1289115337884393880_n(1).jpg" alt="">
                  <div class="card-body">
                    <small class="d-flex flex-column text-muted mb-5">
                      <span class="mb-1">
                        <i class="bx bx-fw bx-calendar"></i> 8 Juni 2021
                      </span>
                      <span>
                        <i class="bx bx-fw bx-map"></i> Aula Diskoperindag Kota Malang
                      </span>
                    </small>
                    <h6 class="fw-normal">
                      Umum
                    </h6>
                    <h1 class="card-title">
                      <a href="https://diskopindag.malangkota.go.id/event/digitalisasi-umkm-bersama-grab">
                        Digitalisasi UMKM bersama Grab
                    </h1>
                    </a>
                  </div>
                </div>
              </div>
                             <div class="col-md-6 col-lg-4">
                <div class="card card--article mb-4">
                  <img src="https://diskopindag.malangkota.go.id/image/event/1632874390_198191244_3004992149768481_6838150754236715737_n.jpg" alt="">
                  <div class="card-body">
                    <small class="d-flex flex-column text-muted mb-5">
                      <span class="mb-1">
                        <i class="bx bx-fw bx-calendar"></i> 10 Juni 2021
                      </span>
                      <span>
                        <i class="bx bx-fw bx-map"></i> Aula Diskoperindag Kota Malang
                      </span>
                    </small>
                    <h6 class="fw-normal">
                      Umum
                    </h6>
                    <h1 class="card-title">
                      <a href="https://diskopindag.malangkota.go.id/event/mendatangkan-calon-pembeli-dari-instagram-secara-otomatis">
                        Mendatangkan Calon Pembeli dari Instagram secara Otomatis
                    </h1>
                    </a>
                  </div>
                </div>
              </div>
                           </div>
          </div>
        </div>

        <div class="d-flex justify-content-center mt-5">
          <a href="/event" target="_blank" class="btn btn-secondary">Lihat semua Event</a>
        </div>
      </div>
    </section>

    <!-- infografis -->
    <section class="section infographics">
      <div class="container">
        <h1 class="section__title">Infografis</h1>
        <p class="section__subtitle">Data seputar Koperasi, Perindustrian dan Perdagangan</p>

        <div class="row mb-5">
          <div class="col-lg-6">
            <div class="card card--basic mb-3 mb-lg-0">
              <div class="card-body">
                <div class="card-title">
                  <h1>Usaha mikro berdasar bidang usaha</h1>
                  <span>INFOGRAFIS</span>
                </div>
                <div id="chartInfogrphicBusiness" class="chart mb-5"></div>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="card card--basic">
              <div class="card-body">
                <div class="card-title">
                  <h1>Industri berdasar kelas</h1>
                  <span>INFOGRAFIS</span>
                </div>
                <div id="chartInfogrphicClass" class="chart mb-5"></div>
              </div>
            </div>
          </div>
        </div>

        <div class="row justify-content-center">
          <div class="col-sm-6 col-lg-3 col-xl-2">
            <div class="infographics-counter">
              <span class="infographics-counter__number"> 627 </span>
              <span class="infographics-counter__title"> Total Koperasi </span>
            </div>
          </div>
          <div class="col-sm-6 col-lg-3 col-xl-2">
            <div class="infographics-counter">
              <span class="infographics-counter__number"> 359 </span>
              <span class="infographics-counter__title"> Koperasi Aktif </span>
            </div>
          </div>
          <div class="col-sm-6 col-lg-3 col-xl-2">
            <div class="infographics-counter">
              <span class="infographics-counter__number"> 70 </span>
              <span class="infographics-counter__title"> Koperasi Terverifikasi  </span>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Komoditas -->
    <section class="section commodity">
      <div class="container">
        <h1 class="section__title">Harga Rata - Rata Komoditas</h1>
        <p class="section__subtitle">Per tanggal <span id="today"></span></p>

        <div class="row justify-content-center">
                  <div class="col-sm-6 col-lg-4 col-xl-3">
            <div class="card">
              <div class="card-header">
                <img src="https://diskopindag.malangkota.go.id/image/commodity/1622437770_beras.png" class="card-img" alt="Image">
              </div>
              <div class="card-body">
                <h6 class="card-title">Beras Bengawan</h6>
                <span class="card-text">Rp 12.500 / Kg</span>
                                <span class="badge badge--blue">Stabil</span>
                              </div>
            </div>
          </div>
                  <div class="col-sm-6 col-lg-4 col-xl-3">
            <div class="card">
              <div class="card-header">
                <img src="https://diskopindag.malangkota.go.id/image/commodity/1622438012_minyak-goreng1.png" class="card-img" alt="Image">
              </div>
              <div class="card-body">
                <h6 class="card-title">Minyak Goreng Tanpa Merk / Minyak Curah</h6>
                <span class="card-text">Rp 14.714 / Ltr</span>
                                <span class="badge badge--blue">Stabil</span>
                              </div>
            </div>
          </div>
                  <div class="col-sm-6 col-lg-4 col-xl-3">
            <div class="card">
              <div class="card-header">
                <img src="https://diskopindag.malangkota.go.id/image/commodity/1622445489_bawang-merah.png" class="card-img" alt="Image">
              </div>
              <div class="card-body">
                <h6 class="card-title">Bawang Merah</h6>
                <span class="card-text">Rp 27.714 / Kg</span>
                                <span class="badge badge--blue">Stabil</span>
                              </div>
            </div>
          </div>
                  <div class="col-sm-6 col-lg-4 col-xl-3">
            <div class="card">
              <div class="card-header">
                <img src="https://diskopindag.malangkota.go.id/image/commodity/1622445629_sapi.png" class="card-img" alt="Image">
              </div>
              <div class="card-body">
                <h6 class="card-title">Dagin Sapi Murni</h6>
                <span class="card-text">Rp 55.857 / Kg</span>
                                <span class="badge badge--blue">Stabil</span>
                              </div>
            </div>
          </div>
                  <div class="col-sm-6 col-lg-4 col-xl-3">
            <div class="card">
              <div class="card-header">
                <img src="https://diskopindag.malangkota.go.id/image/commodity/1622445769_garam.png" class="card-img" alt="Image">
              </div>
              <div class="card-body">
                <h6 class="card-title">Garam Dapur</h6>
                <span class="card-text">Rp 8.000 / Kg</span>
                                <span class="badge badge--blue">Stabil</span>
                              </div>
            </div>
          </div>
                  <div class="col-sm-6 col-lg-4 col-xl-3">
            <div class="card">
              <div class="card-header">
                <img src="https://diskopindag.malangkota.go.id/image/commodity/1622446046_cabe-merah-keriting.png" class="card-img" alt="Image">
              </div>
              <div class="card-body">
                <h6 class="card-title">Cabe Merah Besar Keriting</h6>
                <span class="card-text">Rp 19.429 / Kg</span>
                                <span class="badge badge--red">Turun</span>
                              </div>
            </div>
          </div>
                  <div class="col-sm-6 col-lg-4 col-xl-3">
            <div class="card">
              <div class="card-header">
                <img src="https://diskopindag.malangkota.go.id/image/commodity/1622446156_tomat.png" class="card-img" alt="Image">
              </div>
              <div class="card-body">
                <h6 class="card-title">Tomat</h6>
                <span class="card-text">Rp 6.286 / Kg</span>
                                <span class="badge badge--blue">Stabil</span>
                              </div>
            </div>
          </div>
                  <div class="col-sm-6 col-lg-4 col-xl-3">
            <div class="card">
              <div class="card-header">
                <img src="https://diskopindag.malangkota.go.id/image/commodity/1622446280_ikan-tongkol.png" class="card-img" alt="Image">
              </div>
              <div class="card-body">
                <h6 class="card-title">Ikan Tongkol</h6>
                <span class="card-text">Rp 30.429 / Kg</span>
                                <span class="badge badge--blue">Stabil</span>
                              </div>
            </div>
          </div>
                </div>

      </div>
    </section>

    <!-- Jadwal -->
    <section class="section schedules">
      <div class="container">
        <h1 class="section__title">Jadwal Tera</h1>
        <p class="section__subtitle">Kegiatan UPT. Metrologi Legal Kota Malang</p>

        <div class="row justify-content-center">
          <div class="col-lg-5">
            <div class="schedules__text">
              <img src="https://diskopindag.malangkota.go.id/image/tera/1622771527_logo_metrologi.png" alt="Metrologi">
              <p>
                Tera / tera ulang diartikan membandingkan alat ukur milik masyarakat dengan standart dari UPT Metrologi Legal Kota Malang dengan tujuan agar alat ukur kesalahannya tidak melebihi dari pada batas kesalahan yang diijinkan.

Dalam dunia perdagangan penggunaan alat ukur sangatlah penting karena dipergunakan untuk transaksi antara pemilik barang dan konsumennya ataupun bila di perusahaan alat ukur sebagai alat untuk meningkatkan kualitas produk yang dipasarkan dengan maksud agar produk bisa bersaing di pasar. Selain hal tersebut UPT Metrologi Legal Kota Malang berusaha semaksimal mungkin untuk meningkatkan pelayanan di wilayah Kota Malang.
              </p>
              <button class="btn btn-lg btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#teraGraphicsModal">Lihat Grafis Tera & Tera Ulang</button>
            </div>
          </div>
          <div class="col-lg-5">
            <div class="schedules__table">
              <table>
                <thead>
                  <tr>
                    <th><i class="bx bx-fw bx-calendar"></i> Tanggal Pelaksanaan</th>
                    <th><i class="bx bx-fw bx-map"></i> Lokasi</th>
                  </tr>
                </thead>
                <tbody>
                                  <tr>
                    <td colspan="4"><center>Jadwal Kosong</center></td>
                  </tr>
                                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Modal Grafis Tera -->
    <div class="modal fade" id="teraGraphicsModal" tabindex="-1" aria-labelledby="teraGraphicsLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <div>
              <h5 class="modal-title" id="teraGraphicsLabel">Perbandingan Tera dan Tera Ulang Tahun 2021</h5>
              <h6 class="modal-subtitle">Infografis</h6>
            </div>

            <button type="button" class="modal-close" data-bs-dismiss="modal" aria-label="Close">
              <i class="bx bx-x"></i>
            </button>
          </div>
          <div class="modal-body">
            <div id="teraChart" class="chart"></div>
          </div>
        </div>
      </div>
    </div>

    <!-- Sentra industri -->
    <section class="section industry">
      <div class="container">
        <h1 class="section__title">Sentra Industri Unggulan</h1>
        <p class="section__subtitle">Aneka ragam industri yang ada di Kota Malang</p>

        <div class="row" data-masonry='{"percentPosition": true, "horizontalOrder": false }' id="industryGrid">
                  <div class="col-sm-6 col-lg-4 col-xl-3 mb-4">
            <div class="flip-card">
              <div class="flip-card__content">
                <div class="flip-card__front" style="background-image: url('https://diskopindag.malangkota.go.id/image/industry/1622441320_rohani-1.jpg')">
                </div>
                <div class="flip-card__back">
                  <div class="flip-card__text">
                    <h3 class="flip-card__title">Keripik Tempe</h3>
                    <p class="flip-card__subtitle">
                      Bunulrejo, Purwantoro, Blimbing
                    </p>
                    <a href="https://diskopindag.malangkota.go.id/industry/Keripik%20Tempe" class="btn btn-primary">Baca Selengkapnya</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
                  <div class="col-sm-6 col-lg-4 col-xl-3 mb-4">
            <div class="flip-card">
              <div class="flip-card__content">
                <div class="flip-card__front" style="background-image: url('https://diskopindag.malangkota.go.id/image/industry/1622441990_antique-3.jpg')">
                </div>
                <div class="flip-card__back">
                  <div class="flip-card__text">
                    <h3 class="flip-card__title">Batik</h3>
                    <p class="flip-card__subtitle">
                      Klojen
                    </p>
                    <a href="https://diskopindag.malangkota.go.id/industry/Batik" class="btn btn-primary">Baca Selengkapnya</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
                  <div class="col-sm-6 col-lg-4 col-xl-3 mb-4">
            <div class="flip-card">
              <div class="flip-card__content">
                <div class="flip-card__front" style="background-image: url('https://diskopindag.malangkota.go.id/image/industry/1622442482_marsalia-3.jpg')">
                </div>
                <div class="flip-card__back">
                  <div class="flip-card__text">
                    <h3 class="flip-card__title">Fashion</h3>
                    <p class="flip-card__subtitle">
                      Griya Shanta
                    </p>
                    <a href="https://diskopindag.malangkota.go.id/industry/Fashion" class="btn btn-primary">Baca Selengkapnya</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
                  <div class="col-sm-6 col-lg-4 col-xl-3 mb-4">
            <div class="flip-card">
              <div class="flip-card__content">
                <div class="flip-card__front" style="background-image: url('https://diskopindag.malangkota.go.id/image/industry/1622442828_lita-art-gallery.jpg')">
                </div>
                <div class="flip-card__back">
                  <div class="flip-card__text">
                    <h3 class="flip-card__title">Painting</h3>
                    <p class="flip-card__subtitle">
                      Klojen
                    </p>
                    <a href="https://diskopindag.malangkota.go.id/industry/Painting" class="btn btn-primary">Baca Selengkapnya</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
                  <div class="col-sm-6 col-lg-4 col-xl-3 mb-4">
            <div class="flip-card">
              <div class="flip-card__content">
                <div class="flip-card__front" style="background-image: url('https://diskopindag.malangkota.go.id/image/industry/1632840929_rotan.jpg')">
                </div>
                <div class="flip-card__back">
                  <div class="flip-card__text">
                    <h3 class="flip-card__title">Rotan</h3>
                    <p class="flip-card__subtitle">
                      Balearjosari, Blimbing
                    </p>
                    <a href="https://diskopindag.malangkota.go.id/industry/Rotan" class="btn btn-primary">Baca Selengkapnya</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
                  <div class="col-sm-6 col-lg-4 col-xl-3 mb-4">
            <div class="flip-card">
              <div class="flip-card__content">
                <div class="flip-card__front" style="background-image: url('https://diskopindag.malangkota.go.id/image/industry/1632842216_kue-basah.jpg')">
                </div>
                <div class="flip-card__back">
                  <div class="flip-card__text">
                    <h3 class="flip-card__title">Kue Basah</h3>
                    <p class="flip-card__subtitle">
                      Seluruh kelurahan Malang
                    </p>
                    <a href="https://diskopindag.malangkota.go.id/industry/Kue%20Basah" class="btn btn-primary">Baca Selengkapnya</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
                  <div class="col-sm-6 col-lg-4 col-xl-3 mb-4">
            <div class="flip-card">
              <div class="flip-card__content">
                <div class="flip-card__front" style="background-image: url('https://diskopindag.malangkota.go.id/image/industry/1632840966_keramik.jpg')">
                </div>
                <div class="flip-card__back">
                  <div class="flip-card__text">
                    <h3 class="flip-card__title">Keramik</h3>
                    <p class="flip-card__subtitle">
                      Dinoyo, Lowokwaru
                    </p>
                    <a href="https://diskopindag.malangkota.go.id/industry/Keramik" class="btn btn-primary">Baca Selengkapnya</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
                  <div class="col-sm-6 col-lg-4 col-xl-3 mb-4">
            <div class="flip-card">
              <div class="flip-card__content">
                <div class="flip-card__front" style="background-image: url('https://diskopindag.malangkota.go.id/image/industry/1622443701_marning.jpg')">
                </div>
                <div class="flip-card__back">
                  <div class="flip-card__text">
                    <h3 class="flip-card__title">Marning Jagung</h3>
                    <p class="flip-card__subtitle">
                      Pandanwangi, Blimbing
                    </p>
                    <a href="https://diskopindag.malangkota.go.id/industry/Marning%20Jagung" class="btn btn-primary">Baca Selengkapnya</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
                  <div class="col-sm-6 col-lg-4 col-xl-3 mb-4">
            <div class="flip-card">
              <div class="flip-card__content">
                <div class="flip-card__front" style="background-image: url('https://diskopindag.malangkota.go.id/image/industry/1632840947_gerabah2.jpg')">
                </div>
                <div class="flip-card__back">
                  <div class="flip-card__text">
                    <h3 class="flip-card__title">Gerabah</h3>
                    <p class="flip-card__subtitle">
                      Penanggungan, Klojen
                    </p>
                    <a href="https://diskopindag.malangkota.go.id/industry/Gerabah" class="btn btn-primary">Baca Selengkapnya</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
                  <div class="col-sm-6 col-lg-4 col-xl-3 mb-4">
            <div class="flip-card">
              <div class="flip-card__content">
                <div class="flip-card__front" style="background-image: url('https://diskopindag.malangkota.go.id/image/industry/1622444047_sanitair.jpg')">
                </div>
                <div class="flip-card__back">
                  <div class="flip-card__text">
                    <h3 class="flip-card__title">Sanitair</h3>
                    <p class="flip-card__subtitle">
                      Karangbesuki, Sukun
                    </p>
                    <a href="https://diskopindag.malangkota.go.id/industry/Sanitair" class="btn btn-primary">Baca Selengkapnya</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
                  <div class="col-sm-6 col-lg-4 col-xl-3 mb-4">
            <div class="flip-card">
              <div class="flip-card__content">
                <div class="flip-card__front" style="background-image: url('https://diskopindag.malangkota.go.id/image/industry/1632842233_stempel.jpg')">
                </div>
                <div class="flip-card__back">
                  <div class="flip-card__text">
                    <h3 class="flip-card__title">Plat Nomor</h3>
                    <p class="flip-card__subtitle">
                      Bunulrejo, Purwantoro, Blimbing
                    </p>
                    <a href="https://diskopindag.malangkota.go.id/industry/Plat%20Nomor" class="btn btn-primary">Baca Selengkapnya</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
                  <div class="col-sm-6 col-lg-4 col-xl-3 mb-4">
            <div class="flip-card">
              <div class="flip-card__content">
                <div class="flip-card__front" style="background-image: url('https://diskopindag.malangkota.go.id/image/industry/1632842199_lolliop.jpg')">
                </div>
                <div class="flip-card__back">
                  <div class="flip-card__text">
                    <h3 class="flip-card__title">Lolipop</h3>
                    <p class="flip-card__subtitle">
                      Lesanpuro, Kedungkandang
                    </p>
                    <a href="https://diskopindag.malangkota.go.id/industry/Lolipop" class="btn btn-primary">Baca Selengkapnya</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
                  <div class="col-sm-6 col-lg-4 col-xl-3 mb-4">
            <div class="flip-card">
              <div class="flip-card__content">
                <div class="flip-card__front" style="background-image: url('https://diskopindag.malangkota.go.id/image/industry/1632839984_mebel.jpg')">
                </div>
                <div class="flip-card__back">
                  <div class="flip-card__text">
                    <h3 class="flip-card__title">Mebel</h3>
                    <p class="flip-card__subtitle">
                      Purwantoro,Pandanwangi, Purwodadi, Polowijen, Polehan, Balearjosari, Bunulrejo, Blimbing
                    </p>
                    <a href="https://diskopindag.malangkota.go.id/industry/Mebel" class="btn btn-primary">Baca Selengkapnya</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
                  <div class="col-sm-6 col-lg-4 col-xl-3 mb-4">
            <div class="flip-card">
              <div class="flip-card__content">
                <div class="flip-card__front" style="background-image: url('https://diskopindag.malangkota.go.id/image/industry/1622444523_alas-kaki.jpg')">
                </div>
                <div class="flip-card__back">
                  <div class="flip-card__text">
                    <h3 class="flip-card__title">Alas Kaki</h3>
                    <p class="flip-card__subtitle">
                      Gadang, Sukun
                    </p>
                    <a href="https://diskopindag.malangkota.go.id/industry/Alas%20Kaki" class="btn btn-primary">Baca Selengkapnya</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
                  <div class="col-sm-6 col-lg-4 col-xl-3 mb-4">
            <div class="flip-card">
              <div class="flip-card__content">
                <div class="flip-card__front" style="background-image: url('https://diskopindag.malangkota.go.id/image/industry/1632840914_raket.jpg')">
                </div>
                <div class="flip-card__back">
                  <div class="flip-card__text">
                    <h3 class="flip-card__title">Raket</h3>
                    <p class="flip-card__subtitle">
                      Bandungrejosari
                    </p>
                    <a href="https://diskopindag.malangkota.go.id/industry/Raket" class="btn btn-primary">Baca Selengkapnya</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
                </div>

      </div>
    </section>

    <!-- Market -->
    <section class="section market">
      <div class="container">
        <h1 class="section__title">Pasar</h1>
        <p class="section__subtitle">Pasar-pasar yang ada di Kota Malang</p>

        <div class="row" data-masonry='{"percentPosition": true, "horizontalOrder": false }' id="industryGrid">
                    <div class="col-sm-6 col-lg-4 col-xl-3 mb-4">
            <div class="flip-card">
              <div class="flip-card__content">
                <div class="flip-card__front" style="background-image: url('https://diskopindag.malangkota.go.id/image/market/1622439358_Salinan BESAR 3.jpg')">
                </div>
                <div class="flip-card__back">
                  <div class="flip-card__text">
                    <h3 class="flip-card__title">Pasar Besar Malang</h3>
                    <p class="flip-card__subtitle">
                      Pasar Besar
                    </p>
                    <a href="https://diskopindag.malangkota.go.id/market/Pasar%20Besar%20Malang" class="btn btn-primary">Baca Selengkapnya</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
                  <div class="col-sm-6 col-lg-4 col-xl-3 mb-4">
            <div class="flip-card">
              <div class="flip-card__content">
                <div class="flip-card__front" style="background-image: url('https://diskopindag.malangkota.go.id/image/market/1622439579_Salinan blimbing.jpg')">
                </div>
                <div class="flip-card__back">
                  <div class="flip-card__text">
                    <h3 class="flip-card__title">Pasar Blimbing</h3>
                    <p class="flip-card__subtitle">
                      Blimbing
                    </p>
                    <a href="https://diskopindag.malangkota.go.id/market/Pasar%20Blimbing" class="btn btn-primary">Baca Selengkapnya</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
                  <div class="col-sm-6 col-lg-4 col-xl-3 mb-4">
            <div class="flip-card">
              <div class="flip-card__content">
                <div class="flip-card__front" style="background-image: url('https://diskopindag.malangkota.go.id/image/market/1622439703_Salinan OOD.jpg')">
                </div>
                <div class="flip-card__back">
                  <div class="flip-card__text">
                    <h3 class="flip-card__title">Pasar Oro - Oro Dowo</h3>
                    <p class="flip-card__subtitle">
                      Oro - Oro Dowo
                    </p>
                    <a href="https://diskopindag.malangkota.go.id/market/Pasar%20Oro%20-%20Oro%20Dowo" class="btn btn-primary">Baca Selengkapnya</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
                  <div class="col-sm-6 col-lg-4 col-xl-3 mb-4">
            <div class="flip-card">
              <div class="flip-card__content">
                <div class="flip-card__front" style="background-image: url('https://diskopindag.malangkota.go.id/image/market/1622439774_Salinan sawojajar.jpg')">
                </div>
                <div class="flip-card__back">
                  <div class="flip-card__text">
                    <h3 class="flip-card__title">Pasar Sawojajar</h3>
                    <p class="flip-card__subtitle">
                      Sawojajar
                    </p>
                    <a href="https://diskopindag.malangkota.go.id/market/Pasar%20Sawojajar" class="btn btn-primary">Baca Selengkapnya</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
                  <div class="col-sm-6 col-lg-4 col-xl-3 mb-4">
            <div class="flip-card">
              <div class="flip-card__content">
                <div class="flip-card__front" style="background-image: url('https://diskopindag.malangkota.go.id/image/market/1622439844_Salinan kedungkandang.jpg')">
                </div>
                <div class="flip-card__back">
                  <div class="flip-card__text">
                    <h3 class="flip-card__title">Pasar Kedung Kandang</h3>
                    <p class="flip-card__subtitle">
                      Kedung Kandang
                    </p>
                    <a href="https://diskopindag.malangkota.go.id/market/Pasar%20Kedung%20Kandang" class="btn btn-primary">Baca Selengkapnya</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
                  <div class="col-sm-6 col-lg-4 col-xl-3 mb-4">
            <div class="flip-card">
              <div class="flip-card__content">
                <div class="flip-card__front" style="background-image: url('https://diskopindag.malangkota.go.id/image/market/1622439898_Salinan bunul.jpg')">
                </div>
                <div class="flip-card__back">
                  <div class="flip-card__text">
                    <h3 class="flip-card__title">Pasar Bunul</h3>
                    <p class="flip-card__subtitle">
                      Bunul
                    </p>
                    <a href="https://diskopindag.malangkota.go.id/market/Pasar%20Bunul" class="btn btn-primary">Baca Selengkapnya</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
                  <div class="col-sm-6 col-lg-4 col-xl-3 mb-4">
            <div class="flip-card">
              <div class="flip-card__content">
                <div class="flip-card__front" style="background-image: url('https://diskopindag.malangkota.go.id/image/market/1622439949_Salinan kebalen.jpg')">
                </div>
                <div class="flip-card__back">
                  <div class="flip-card__text">
                    <h3 class="flip-card__title">Pasar Kebalen</h3>
                    <p class="flip-card__subtitle">
                      Kebalen
                    </p>
                    <a href="https://diskopindag.malangkota.go.id/market/Pasar%20Kebalen" class="btn btn-primary">Baca Selengkapnya</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
                  <div class="col-sm-6 col-lg-4 col-xl-3 mb-4">
            <div class="flip-card">
              <div class="flip-card__content">
                <div class="flip-card__front" style="background-image: url('https://diskopindag.malangkota.go.id/image/market/1622440022_Salinan induk gadang 2.JPG')">
                </div>
                <div class="flip-card__back">
                  <div class="flip-card__text">
                    <h3 class="flip-card__title">Pasar Gadang</h3>
                    <p class="flip-card__subtitle">
                      Gadang
                    </p>
                    <a href="https://diskopindag.malangkota.go.id/market/Pasar%20Gadang" class="btn btn-primary">Baca Selengkapnya</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
                  <div class="col-sm-6 col-lg-4 col-xl-3 mb-4">
            <div class="flip-card">
              <div class="flip-card__content">
                <div class="flip-card__front" style="background-image: url('https://diskopindag.malangkota.go.id/image/market/1622440104_Salinan klojen 1.jpg')">
                </div>
                <div class="flip-card__back">
                  <div class="flip-card__text">
                    <h3 class="flip-card__title">Pasar Klojen</h3>
                    <p class="flip-card__subtitle">
                      Klojen
                    </p>
                    <a href="https://diskopindag.malangkota.go.id/market/Pasar%20Klojen" class="btn btn-primary">Baca Selengkapnya</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
                  <div class="col-sm-6 col-lg-4 col-xl-3 mb-4">
            <div class="flip-card">
              <div class="flip-card__content">
                <div class="flip-card__front" style="background-image: url('https://diskopindag.malangkota.go.id/image/market/1622440163_Salinan buku wilis.jpg')">
                </div>
                <div class="flip-card__back">
                  <div class="flip-card__text">
                    <h3 class="flip-card__title">Pasar Buku Wilis</h3>
                    <p class="flip-card__subtitle">
                      Wilis
                    </p>
                    <a href="https://diskopindag.malangkota.go.id/market/Pasar%20Buku%20Wilis" class="btn btn-primary">Baca Selengkapnya</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
                  <div class="col-sm-6 col-lg-4 col-xl-3 mb-4">
            <div class="flip-card">
              <div class="flip-card__content">
                <div class="flip-card__front" style="background-image: url('https://diskopindag.malangkota.go.id/image/market/1622440239_Salinan bunga1.jpg')">
                </div>
                <div class="flip-card__back">
                  <div class="flip-card__text">
                    <h3 class="flip-card__title">Pasar Bunga</h3>
                    <p class="flip-card__subtitle">
                      Splendid
                    </p>
                    <a href="https://diskopindag.malangkota.go.id/market/Pasar%20Bunga" class="btn btn-primary">Baca Selengkapnya</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
                  <div class="col-sm-6 col-lg-4 col-xl-3 mb-4">
            <div class="flip-card">
              <div class="flip-card__content">
                <div class="flip-card__front" style="background-image: url('https://diskopindag.malangkota.go.id/image/market/1622440381_Salinan burung.jpg')">
                </div>
                <div class="flip-card__back">
                  <div class="flip-card__text">
                    <h3 class="flip-card__title">Pasar Hewan</h3>
                    <p class="flip-card__subtitle">
                      Splendid
                    </p>
                    <a href="https://diskopindag.malangkota.go.id/market/Pasar%20Hewan" class="btn btn-primary">Baca Selengkapnya</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
                  <div class="col-sm-6 col-lg-4 col-xl-3 mb-4">
            <div class="flip-card">
              <div class="flip-card__content">
                <div class="flip-card__front" style="background-image: url('https://diskopindag.malangkota.go.id/image/market/1622440442_Salinan talun.jpg')">
                </div>
                <div class="flip-card__back">
                  <div class="flip-card__text">
                    <h3 class="flip-card__title">Pasar Talun</h3>
                    <p class="flip-card__subtitle">
                      Talun
                    </p>
                    <a href="https://diskopindag.malangkota.go.id/market/Pasar%20Talun" class="btn btn-primary">Baca Selengkapnya</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
                </div>

      </div>
    </section>

    <!-- Instagram -->
    <section class="section">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h2 class="section__title">Instagram Diskopindag</h2>
            <p class="section__subtitle">Aktifitas Diskopindag di sosial media</p>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div id="instagram-feed1" class="instagram_feed"></div>
          </div>
        </div>
      </div>
    </section>

    <!-- Berita -->
    <section class="section news">
      <div class="container">
        <h1 class="section__title">Berita</h1>
        <p class="section__subtitle">Artikel terbaru seputar Diskopindag Malang</p>

        <div class="tns-wrapper">
                  <div class="tns-item">
            <div class="card card--article">
              <img src="https://diskopindag.malangkota.go.id/image/news/1657524552_1650248718338 fix.png" alt="">
              <div class="card-body">
                <h6 class="fw-normal">
                Umum
                </h6>
                <h1 class="card-title mb-4">
                  <a href="https://diskopindag.malangkota.go.id/news/revitalisasi-pasar-momentum-kebangkitan-pasar-rakyat">
                   REVITALISASI PASAR MOMENTUM KEBANGKITAN PASAR RAKYAT
                  </a>
                </h1>
                <small class="d-block fs-small text-muted"><i class="bx bx-fw bx-calendar"></i> 11 Jul 2022</small>
              </div>
            </div>
          </div>
                  <div class="tns-item">
            <div class="card card--article">
              <img src="https://diskopindag.malangkota.go.id/image/news/1657208841_Capture.JPG" alt="">
              <div class="card-body">
                <h6 class="fw-normal">
                Umum
                </h6>
                <h1 class="card-title mb-4">
                  <a href="https://diskopindag.malangkota.go.id/news/pemerintahan-kota-malang-punya-umkm-corner-di-pasar-kasin">
                   Pemerintahan Kota Malang Punya UMKM Corner di Pasar Kasin
                  </a>
                </h1>
                <small class="d-block fs-small text-muted"><i class="bx bx-fw bx-calendar"></i> 07 Jul 2022</small>
              </div>
            </div>
          </div>
                  <div class="tns-item">
            <div class="card card--article">
              <img src="https://diskopindag.malangkota.go.id/image/news/1657032984_sdfgds.JPG" alt="">
              <div class="card-body">
                <h6 class="fw-normal">
                Umum
                </h6>
                <h1 class="card-title mb-4">
                  <a href="https://diskopindag.malangkota.go.id/news/diskopindag-gelar-fasilitasi-pengurusan-izin-usaha-koperasi">
                   Diskopindag Gelar Fasilitasi Pengurusan Izin Usaha Koperasi
                  </a>
                </h1>
                <small class="d-block fs-small text-muted"><i class="bx bx-fw bx-calendar"></i> 05 Jul 2022</small>
              </div>
            </div>
          </div>
                  <div class="tns-item">
            <div class="card card--article">
              <img src="https://diskopindag.malangkota.go.id/image/news/1657031467_Capture.JPG" alt="">
              <div class="card-body">
                <h6 class="fw-normal">
                Umum
                </h6>
                <h1 class="card-title mb-4">
                  <a href="https://diskopindag.malangkota.go.id/news/kegiatan-pemberdayaan-melalui-kemitraan-usaha-mikro">
                   Kegiatan Pemberdayaan melalui Kemitraan Usaha Mikro
                  </a>
                </h1>
                <small class="d-block fs-small text-muted"><i class="bx bx-fw bx-calendar"></i> 05 Jul 2022</small>
              </div>
            </div>
          </div>
                  <div class="tns-item">
            <div class="card card--article">
              <img src="https://diskopindag.malangkota.go.id/image/news/1654610080_WhatsApp Image 2022-06-07 at 08.05.46.jpeg" alt="">
              <div class="card-body">
                <h6 class="fw-normal">
                Umum
                </h6>
                <h1 class="card-title mb-4">
                  <a href="https://diskopindag.malangkota.go.id/news/pelatihan-skkni-digelar-diskopindag-kota-malang">
                   Pelatihan SKKNI Digelar Diskopindag Kota Malang
                  </a>
                </h1>
                <small class="d-block fs-small text-muted"><i class="bx bx-fw bx-calendar"></i> 07 Jun 2022</small>
              </div>
            </div>
          </div>
                  <div class="tns-item">
            <div class="card card--article">
              <img src="https://diskopindag.malangkota.go.id/image/news/1654262388_messageImage_1654262190511.jpg" alt="">
              <div class="card-body">
                <h6 class="fw-normal">
                Umum
                </h6>
                <h1 class="card-title mb-4">
                  <a href="https://diskopindag.malangkota.go.id/news/workshop-pembekalan-pendamping-umkm-bisnis-langsung-laris-legalitas-bisnis-bagi-usaha-mikro">
                   Workshop Pembekalan Pendamping UMKM “Bisnis Langsung Laris &amp; Legalitas Bisnis” Bagi Usaha Mikro
                  </a>
                </h1>
                <small class="d-block fs-small text-muted"><i class="bx bx-fw bx-calendar"></i> 03 Jun 2022</small>
              </div>
            </div>
          </div>
                </div>
      </div>
    </section>
  </main>

  <footer class="footer" id="kontak">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-5">
          <div class="footer__about">
            <p class="footer__desc">
              Dinas Koperasi, Perindustrian dan Perdagangan merupakan lembaga bertipe A yang menyelenggarakan urusan pemerintahan bidang koperasi, bidang perindustrian, bidang usaha mikro, dan bidang perdagangan.
            </p>

            <ul class="footer__contact">
              <li>
                <i class="bx bx-map"></i>
                <span>
                Jl. Simpang Terusan Danau Sentani No.3 Malang 65138
                </span>
              </li>
              <li>
                <i class="bx bx-mail-send"></i>
                <span>
                diskopindag.kotamalang@gmail.com
                </span>
              </li>
              <li>
                <i class="bx bx-phone"></i>
                <span>
                (0341) 716546
                </span>
              </li>
            </ul>

            <ul class="footer__socmed">
              <li>
                <a href="https://www.facebook.com/diskopindagmalang/?modal=admin_todo_tour"><i class="bx bx-fw bxl-facebook"></i></a>
              </li>
              <li>
                <a href="https://twitter.com/diskopindag"><i class="bx bx-fw bxl-twitter"></i></a>
              </li>
              <li>
                <a href="https://www.instagram.com/diskopindagmalang/"><i class="bx bx-fw bxl-instagram-alt"></i></a>
              </li>
              <li>
                <a href="https://www.youtube.com/channel/UCX_1dhUXjQRRXHID0xMs8pw/featured"><i class="bx bx-fw bxl-youtube"></i></a>
              </li>
            </ul>

            <p class="footer__copy">
              copyright 2021 - Diskopindag Malang
            </p>
          </div>
        </div>
        <div class="col-lg-5 position-relative">
          <div class="footer__map">
            <h1 class="footer__sambat-title">Yuk lapor sambatmu seputar Malang</h1>
            <div class="footer__sambat-logo">
              <a href="https://sambat.malangkota.go.id/" target="_blank"><img src="https://diskopindag.malangkota.go.id/img/logo/sambat-online.png" alt="SAMBAT Pemkot Malang"></a>
            </div>
            <div class="footer__divider"></div>
            <h1 class="footer__diskopindag-title">Lokasi Diskopindag Malang</h1>
            <div class="footer__diskopindag-map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3951.260539779671!2d112.66837231474214!3d-7.972003094258327!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd628f700181a8d%3A0x65508a920d48e0da!2sDinas%20Koperasi%20Perindustrian%20dan%20Perdagangan%20Kota%20Malang!5e0!3m2!1sen!2sid!4v1622169972691!5m2!1sen!2sid" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
  
  <!-- WhatsApp Btn -->
  <a href="https://wa.me/62823353208440" target="_blank" class="whatsapp-btn" id="whatsAppBtn">
    <span class="whatsapp-btn__icon">
      <i class="bx bxl-whatsapp"></i>
    </span>
    <span class="whatsapp-btn__text">WhatsApp</span>
  </a>

  <script src="https://diskopindag.malangkota.go.id/js/popper.min.js"></script>
  <script src="https://diskopindag.malangkota.go.id/js/bootstrap.min.js"></script>
  
  <script src="https://diskopindag.malangkota.go.id/js/main.js"></script>
  <script src="https://diskopindag.malangkota.go.id/js/vanilla-tilt.min.js"></script>
<script src="https://diskopindag.malangkota.go.id/js/masonry.pkgd.min.js"></script>
<script src="https://diskopindag.malangkota.go.id/js/echarts.min.js"></script>
<script src="https://diskopindag.malangkota.go.id/js/tiny-slider.js"></script>
<script src="https://diskopindag.malangkota.go.id/js/jquery.min.js"></script>
<script src="https://diskopindag.malangkota.go.id/js/jquery-feed-instagram-graph.js"></script>
<!-- <script src="https://diskopindag.malangkota.go.id/js/main.js"></script> -->
  <script>
    window.onload = function () {

      VanillaTilt.init(document.getElementById("introVideoCard"), {
        max: 5,
        speed: 800,
        reverse: true,
        glare: true,
        "max-glare": 0.4
      });

      const homeVideoBtn      = document.getElementById("introVideoCard");
      const homeVideoCloseBtn = document.getElementById("homeVideoModalClose");
      const homeVideoSrc      = document.getElementById("homeVideoSrc");
      const homeVideoPlay     = '?autoplay=1';
      const homeVideoMute     = '&mute=1';
      const homeVideoEmbed    = 'https://www.youtube.com/embed/bimfBMTUtC0'+homeVideoPlay;

      homeVideoBtn.addEventListener("click", function() {
        homeVideoSrc.setAttribute("src", homeVideoEmbed);
      });

      homeVideoCloseBtn.addEventListener("click", function() {
        homeVideoSrc.removeAttribute("src");
      });

      // Infographics
      const usaha = [{"id":1,"industry_category":"Usaha Mikro Kuliner","year":"2021","total":580,"created_by":1,"updated_by":1,"deleted_by":null,"created_at":"2021-06-08T02:50:49.000000Z","updated_at":"2021-09-28T11:13:20.000000Z","deleted_at":null},{"id":3,"industry_category":"Usaha Mikro Jasa","year":"2021","total":1230,"created_by":1,"updated_by":1,"deleted_by":null,"created_at":"2021-06-08T04:14:07.000000Z","updated_at":"2021-09-28T11:13:38.000000Z","deleted_at":null},{"id":4,"industry_category":"Usaha Mikro Dagang","year":"2021","total":3984,"created_by":1,"updated_by":1,"deleted_by":null,"created_at":"2021-06-08T04:14:27.000000Z","updated_at":"2021-09-28T11:14:07.000000Z","deleted_at":null},{"id":5,"industry_category":"Usaha Mikro Kriya","year":"2021","total":204,"created_by":1,"updated_by":null,"deleted_by":null,"created_at":"2021-09-28T11:14:47.000000Z","updated_at":"2021-09-28T11:14:47.000000Z","deleted_at":null},{"id":6,"industry_category":"Usaha Mikro Fesyen","year":"2021","total":4,"created_by":1,"updated_by":1,"deleted_by":null,"created_at":"2021-09-28T11:15:38.000000Z","updated_at":"2021-09-28T11:15:52.000000Z","deleted_at":null},{"id":7,"industry_category":"Usaha Mikro Lainnya","year":"2021","total":2348,"created_by":1,"updated_by":null,"deleted_by":null,"created_at":"2021-09-28T11:16:24.000000Z","updated_at":"2021-09-28T11:16:24.000000Z","deleted_at":null}]
      const businessChart       = echarts.init(document.getElementById('chartInfogrphicBusiness'));
      const businessChartOption = {
        color: '#855CF8',
        tooltip: {},
        dataset: [{
          dimensions: ['name', 'number'],
          source:
              usaha.map(usaha => {
              return [usaha.industry_category, usaha.total]
              })
        }, {
          transform: {
            type: 'sort',
            config: { dimension: 'number', order: 'desc' }
          }
        }],
        xAxis: {
          grid: false,
          type: 'category',
          axisLabel: { interval: 0, rotate: 30 },
        },
        yAxis: {
          show: false
        },
        series: {
          type: 'bar',
          encode: { x: 'name', y: 'score' },
          datasetIndex: 1
        }
      };
      businessChart.setOption(businessChartOption);

      const kelas = [{"id":1,"industry_class":"Mikro","year":"2021","total":1048,"created_by":1,"updated_by":1,"deleted_by":null,"created_at":"2021-06-08T03:18:26.000000Z","updated_at":"2021-06-08T03:24:48.000000Z","deleted_at":null},{"id":5,"industry_class":"Kecil","year":"2021","total":580,"created_by":1,"updated_by":1,"deleted_by":null,"created_at":"2021-06-08T04:02:08.000000Z","updated_at":"2021-09-29T06:38:44.000000Z","deleted_at":null},{"id":6,"industry_class":"Menengah","year":"2021","total":735,"created_by":1,"updated_by":null,"deleted_by":null,"created_at":"2021-06-08T04:02:33.000000Z","updated_at":"2021-06-08T04:02:33.000000Z","deleted_at":null}]
      const classChart       = echarts.init(document.getElementById('chartInfogrphicClass'));
      const classChartOption = {
        tooltip: {},
        legend: {
          orient: 'horizontal',
          bottom: 'bottom',
        },
        textStyle: {
          fontFamily: 'Inter'
        },
        color: ['#798FFF', '#FFDD87', '#FF7585'],
        series: [
          {
            label: {
              show: false
            },
            name: 'Kelas',
            type: 'pie',
            radius: '50%',
            data: 
              kelas.map(kelas => {
              return {value: kelas.total, name: kelas.industry_class}
              })
            ,
            emphasis: {
              itemStyle: {
                shadowBlur: 10,
                shadowOffsetX: 0,
                shadowColor: 'rgba(0, 0, 0, 0.2)'
              }
            }
          }
        ]
      };
      classChart.setOption(classChartOption);

      const data = [{"id":1,"calibration_id":1,"year":"2021","month":1,"calibration":75,"recalibration":141,"created_by":1,"updated_by":1,"deleted_by":null,"created_at":"2021-06-02T08:21:01.000000Z","updated_at":"2021-09-28T11:42:36.000000Z","deleted_at":null},{"id":3,"calibration_id":1,"year":"2021","month":2,"calibration":54,"recalibration":1024,"created_by":1,"updated_by":1,"deleted_by":null,"created_at":"2021-06-07T03:02:36.000000Z","updated_at":"2021-09-28T11:42:00.000000Z","deleted_at":null},{"id":4,"calibration_id":1,"year":"2021","month":3,"calibration":37,"recalibration":2447,"created_by":1,"updated_by":null,"deleted_by":null,"created_at":"2021-06-07T04:00:50.000000Z","updated_at":"2021-06-07T04:00:50.000000Z","deleted_at":null},{"id":5,"calibration_id":1,"year":"2021","month":4,"calibration":60,"recalibration":1414,"created_by":1,"updated_by":null,"deleted_by":null,"created_at":"2021-06-07T04:02:53.000000Z","updated_at":"2021-06-07T04:02:53.000000Z","deleted_at":null},{"id":6,"calibration_id":1,"year":"2021","month":5,"calibration":29,"recalibration":295,"created_by":1,"updated_by":1,"deleted_by":null,"created_at":"2021-09-28T11:37:54.000000Z","updated_at":"2021-09-28T11:45:32.000000Z","deleted_at":null},{"id":7,"calibration_id":1,"year":"2021","month":6,"calibration":40,"recalibration":1041,"created_by":1,"updated_by":1,"deleted_by":null,"created_at":"2021-09-28T11:38:37.000000Z","updated_at":"2021-09-28T11:45:11.000000Z","deleted_at":null},{"id":8,"calibration_id":1,"year":"2021","month":7,"calibration":4,"recalibration":49,"created_by":1,"updated_by":1,"deleted_by":null,"created_at":"2021-09-28T11:39:03.000000Z","updated_at":"2021-09-28T11:44:28.000000Z","deleted_at":null},{"id":9,"calibration_id":1,"year":"2021","month":8,"calibration":48,"recalibration":1186,"created_by":1,"updated_by":1,"deleted_by":null,"created_at":"2021-09-28T11:43:04.000000Z","updated_at":"2021-09-28T11:44:14.000000Z","deleted_at":null}]
      const teraModal = document.getElementById('teraGraphicsModal')
      teraModal.addEventListener('shown.bs.modal', function (event) {
       const teraChart = echarts.init(document.getElementById('teraChart'));
       const teraChartOption = {
         tooltip: {},
         legend:{data : ['Tera', 'Tera Ulang']},
         xAxis: {
           type: 'category',
           data: data.map(month => {
             return month.month
           })
         },
         yAxis: {
           show: false,
           type: 'value'
         },
         series: [{
           name : 'Tera',
           data: data.map(tera => {
             return tera.calibration
           }),
           type: 'line'
         },
         {
          name : 'Tera Ulang',
           data: data.map(tera => {
             return tera.recalibration
           }),
           type: 'line'
         }]
       };
       teraChart.setOption(teraChartOption);
      })


      // News
      let slider = tns({
          container: '.tns-wrapper',
          items: 3,
          slideBy: 'page',
          controls: false,
          gutter: 32,
          navPosition: 'bottom',
          speed: 800,
          fixedWidth: 408,
          mouseDrag: true,
          swipeAngle: false,
          rewind: true,
        });
    }
    const monthNames = ["Januari", "Februari", "Maret", "April", "Mei", "Juni",
        "Juli", "Agustus", "September", "Oktober", "November", "Desember"];
    const dateObj = new Date();
    const month = monthNames[dateObj.getMonth()];
    const day = String(dateObj.getDate()).padStart(2, '0');
    const year = dateObj.getFullYear();
    const output =  day  +' '+ month +' '+ year;

    document.getElementById("today").innerHTML = output;


  </script>
</body>
</html>