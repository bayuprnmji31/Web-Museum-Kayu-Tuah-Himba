<!doctype html>
<html lang="en">
   <head>
   <style>
      .grid {
         display: grid;
         grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
         gap: 20px;
      }

      .grid-item {
         display: flex;
         flex-direction: column;
      }

      .post {
         background-color: #fff;
         border: 1px solid #ddd;
         border-radius: 4px;
         overflow: hidden;
         box-shadow: 0 2px 4px rgba(0,0,0,0.1);
         display: flex;
         flex-direction: column;
         height: 100%;
      }

      .feature-image img {
         width: 100%;
         height: auto;
         display: block;
      }

      .entry-content {
         padding: 15px;
         flex: 1;
      }


      .entry-content h3 {
         margin: 0 0 10px;
      }


      .entry-content p {
         margin: 0;
         flex: 1; 
      }

        @media (max-width: 768px) {
            .grid-item {
                flex: 1 0 46%;
            }
        }
        @media (max-width: 480px) {
            .grid-item {
                flex: 1 0 100%;
            }
        }

        /* Modal styles */
        .modal {
            display: none;
            position: fixed;
            z-index: 1; /* Sit on top */
            left: 0;
            top: 0;
            width: 100%; /* Full width */
            height: 100%; /* Full height */
            overflow: auto; /* Enable scroll if needed */
            background-color: rgb(0,0,0); /* Fallback color */
            background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
        }
        .modal-content {
            background-color: #fefefe;
            margin: 10% auto; /* Center vertically and horizontally */
            padding: 20px;
            border: 1px solid #888;
            width: 90%; /* Default width */
            max-width: 600px; /* Max width for larger screens */
            border-radius: 10px; /* Rounded corners for aesthetic */
            box-shadow: 0 5px 15px rgba(0,0,0,0.3);
        }
        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }
        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }
        #modalImage {
            width: 100%;
            height: auto;
            border-radius: 10px;
            max-height: 300px; /* Limit the height of the image */
            object-fit: cover; /* Make sure the image fits nicely */
        }
        #modalTitle {
            margin-top: 20px;
        }
        #modalDescription {
            margin-top: 10px;
            text-align: justify;
        }
    </style>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

      <!-- favicon -->
      <link rel="icon" type="image/png" href="assets/museum-kayu/MUSEUM KAYU TAUH HIMBA_prev_ui.png">
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="assets/vendors/bootstrap/css/bootstrap.min.css" media="all">
      <!-- Fonts Awesome CSS -->
      <link rel="stylesheet" type="text/css" href="assets/vendors/fontawesome/css/all.min.css">
      <!-- jquery-ui css -->
      <link rel="stylesheet" type="text/css" href="assets/vendors/jquery-ui/jquery-ui.min.css">
      <!-- modal video css -->
      <link rel="stylesheet" type="text/css" href="assets/vendors/modal-video/modal-video.min.css">
      <!-- light box css -->
      <link rel="stylesheet" type="text/css" href="assets/vendors/lightbox/dist/css/lightbox.min.css">
      <!-- slick slider css -->
      <link rel="stylesheet" type="text/css" href="assets/vendors/slick/slick.css">
      <link rel="stylesheet" type="text/css" href="assets/vendors/slick/slick-theme.css">
      <!-- google fonts -->
      <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,400&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&display=swap" rel="stylesheet">
      <!-- Custom CSS -->
      <link rel="stylesheet" type="text/css" href="style.css">
      <title>Museum Kayu | Tuah Himba  </title>
   </head>
   <body class="home">
      <div id="siteLoader" class="site-loader">
         <div class="preloader-content">
            <img src="assets/images/loader1.gif" alt="">
         </div>
      </div>
      <div id="page" class="full-page">
         <header id="masthead" class="site-header header-primary">
            <!-- header html start -->
            <div class="top-header">
               <div class="container">
                  <div class="row">
                     <div class="col-lg-8 d-none d-lg-block">
                        <div class="header-contact-info">
                           <ul>
                              <li>
                                 <a href="#"><i class="fas fa-phone-alt"></i> +628115841117</a>
                              </li>
                              <li>
                                 <a href="mailto:info@Travel.com"><i class="fas fa-envelope"></i> disdikbud@kukarkab.go.id</a>
                              </li>
                              <li>
                                 <i class="fas fa-map-marker-alt"></i> Museum Kayu, Jalan, Panji, Tenggarong, Kutai Kartanegara Regency, East Kalimantan 75513
                              </li>
                           </ul>
                        </div>
                     </div>
                     <div class="col-lg-4 d-flex justify-content-lg-end justify-content-between">
                        <div class="header-social social-links">
                           <ul>
                              <li><a href="https://www.facebook.com/share/AiTxNNdMdBPt8Fu4/?mibextid=qi2Omg"><i class="fab fa-facebook-f" aria-hidden="true"></i></a></li>
                              <li><a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
                              <li><a href="#"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
                           </ul>
                        </div>
                        <div class="header-search-icon">
                           <button class="search-icon">
                              <i class="fas fa-search"></i>
                           </button>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="bottom-header">
               <div class="container d-flex justify-content-between align-items-center">
                  <div class="site-identity">
                     <h1 class="site-title">
                        <a href="index.html">
                           <img class="white-logo" src="assets/museum-kayu/MUSEUM KAYU TAUH HIMBA_prev_ui.png" alt="logo">
                           <img class="black-logo" src="assets/museum-kayu/MUSEUM KAYU TAUH HIMBA_prev_ui.png" alt="logo">
                        </a>
                     </h1>
                  </div>
                  <div class="main-navigation d-none d-lg-block">
                     <nav id="navigation" class="navigation">
                        <ul>
                           <li class="#">
                              <a href="index.php">Beranda</a>
                           </li>
                           <li class="menu-item-has-children">
                              <a href="#">Pages</a>
                              <ul>
                                 <li>
                                    <a href="about.php">Tentang</a>
                                 </li>
                                 <li>
                                    <a href="gallery.php">Galeri</a>
                                 </li>
                                 <li>
                                    <a href="testimonial-page.php">Ulasan</a>
                                 </li>
                                 <li>
                                    <a href="contact.php">Kontak</a>
                                 </li>
                                 <li>
                                    <a href="faq.php">FAQ</a>
                                 </li>
                              </ul>
                           </li>
                           <li class="menu-item-has-children">
                              <a href="#">Koleksi</a>
                              <ul>
                                 <li><a href="koleksi1.php">Ruangan</a></li>
                                 <li><a href="koleksi2.php">Koleksi Herbal</a></li>
                                 <li><a href="koleksi3.php">Koleksi Kayu</a></li>
                                 <li><a href="koleksi4.php">Koleksi Kerajinan Rotan</a></li>
                                 <li><a href="koleksi5.php">Koleksi Peralatan</a></li>
                                 <li><a href="koleksi6.php">Koleksi Lainnya</a></li>
                              </ul>
                           </li>
                        </ul>
                     </nav>
                  </div>
               </div>
            </div>
            <div class="mobile-menu-container"></div>
         </header>
         <main id="content" class="site-main">
            <!-- Inner Banner html start-->
            <section class="inner-banner-wrap">
               <div class="inner-baner-container" style="background-image: url(assets/herbal/HERBAL3.jpg);">
                  <div class="container">
                     <div class="inner-banner-content">
                        <h1 class="inner-title">HERBAL</h1>
                     </div>
                  </div>
               </div>
               <div class="inner-shape"></div>
            </section>
            <!-- Inner Banner html end-->
            <div class="archive-section blog-archive">
               <div class="archive-inner">
                     <div class="container">
                        <div class="row">
                           <div class="col-lg-12">
                                 <!-- blog post item html start -->
                                 <div class="grid row">
                                    <?php
                                    include 'common.php';
                                    // Query untuk mengambil data dari tabel ruangan
                                    $sql = "SELECT gambar, judul, deskripsi FROM herbal";
                                    $result = $conn->query($sql);

                                    if ($result->num_rows > 0) {
                                       // Output data dari setiap row
                                       while($row = $result->fetch_assoc()) {
                                             $judul = htmlspecialchars($row["judul"]);
                                             $deskripsi = htmlspecialchars($row["deskripsi"]);
                                             $gambar = 'assets/herbal/' . htmlspecialchars($row["gambar"]);

                                             echo '<div class="grid-item col-lg-3">';
                                             echo '<article class="post">';
                                             echo '<figure class="feature-image">';
                                             echo "<img src='$gambar' alt='$judul' onclick='openModal(\"$gambar\", \"$judul\", \"$deskripsi\")'>";
                                             echo '</figure>';
                                             echo '<div class="entry-content">';
                                             echo "<h3><a href='#' onclick='openModal(\"$gambar\", \"$judul\", \"$deskripsi\")'>$judul</a></h3>";
                                             echo '<p>' . $deskripsi . '</p>';
                                             echo '</div>';
                                             echo '</article>';
                                             echo '</div>';
                                       }
                                    } else {
                                       echo "0 results";
                                    }

                                    $conn->close();
                                    ?>
                                 </div>
                           </div>
                        </div>
                     </div>
               </div>
            </div>
            <!-- Modal -->
            <div id="myModal" class="modal">
               <div class="modal-content">
                     <span class="close" onclick="closeModal()">&times;</span>
                     <img id="modalImage" src="" alt="" style="width: 100%; height: auto;">
                     <h3 id="modalTitle"></h3>
                     <p id="modalDescription"></p>
               </div>
            </div>
         </main>
         <footer id="colophon" class="site-footer footer-primary">
            <div class="top-footer">
               <div class="container">
                  <div class="row">
                     <div class="col-lg-4 col-md-6">
                        <aside class="widget widget_text">
                           <h3 class="widget-title">
                              Tentang Museum
                           </h3>
                           <div class="textwidget widget-text">
                              Pengelolaan Museum Kayu Tuah Himba ini berada di bawah wewenang Dinas Kebudayaan dan Pariwisata setempat
                           </div>
                           <div class="award-img" style="text-align: center;">
                              <a href="#"><img src="assets/museum-kayu/Lambang_Kab._Kutai_Kertanegara.png" alt=""></a>
                          </div>                          
                        </aside>
                     </div>
                     <div class="col-lg-4 col-md-6">
                        <aside class="widget widget_text">
                           <h3 class="widget-title">INFORMASI KONTAK</h3>
                           <div class="textwidget widget-text">
                              Untuk informasi lebih lanjut tentang museum kami, jangan ragu untuk menghubungi tim kami. Kami siap membantu Anda menjelajahi koleksi kami, mengatur tur, dan menjawab pertanyaan apa pun yang Anda miliki.
                              <ul>
                                 <li>
                                    <a href="#">
                                       <i class="fas fa-phone-alt"></i>
                                       +628115841117
                                    </a>
                                 </li>
                                 <li>
                                    <a href="#">
                                       <i class="fas fa-envelope"></i>
                                       disdikbud@kukarkab.go.id
                                    </a>
                                 </li>
                                 <li>
                                    <i class="fas fa-map-marker-alt"></i>
                                    Museum Kayu, Jalan, Panji, Tenggarong, Kutai Kartanegara Regency, East Kalimantan 75513
                                 </li>
                              </ul>
                           </div>
                        </aside>
                     </div>
                     <div class="col-lg-4 col-md-6">
                        <aside class="widget widget_newslatter">
                           <h3 class="widget-title">IKUTI AKTIVITAS KAMI</h3>
                           <div class="widget-text">
                              Tetap Terhubung! Ikuti Kami untuk Mendapatkan Berita Terbaru, Acara Khusus, dan Lebih Banyak Lagi.
                           </div>
                           <form class="newslatter-form" action="contact.php">
                              <input type="submit" name="" value="IKUTI SEKARANG">
                           </form>
                        </aside>
                     </div>
                  </div>
               </div>
            </div>
            <div class="buttom-footer">
               <div class="container">
                  <div class="row align-items-center">
                     <div class="col-md-5">
                        <div class="footer-menu">
                           <ul>
                              <li>
                                 <a href="#">Privacy Policy</a>
                              </li>
                              <li>
                                 <a href="#">Term & Condition</a>
                              </li>
                              <li>
                                 <a href="faq.php">FAQ</a>
                              </li>
                           </ul>
                        </div>
                     </div>
                     <div class="col-md-2 text-center">
                        <div class="footer-logo">
                           <a href="#"><img src="assets//museum-kayu/MUSEUM KAYU TAUH HIMBA_prev_ui.png" alt=""></a>
                        </div>
                     </div>
                     <div class="col-md-5">
                        <div class="copy-right text-right">Copyright © 2024 Museum Kayu Himbah Tuah All rights reserveds</div>
                     </div>
                  </div>
               </div>
            </div>
         </footer>
         
         <a id="backTotop" href="#" class="to-top-icon">
            <i class="fas fa-chevron-up"></i>
         </a>
         <!-- custom search field html -->
         <div class="header-search-form">
            <div class="container">
               <div class="header-search-container">
                  <form class="search-form" role="search" method="get" >
                     <input type="text" name="s" placeholder="Enter your text...">
                  </form>
                  <a href="#" class="search-close">
                     <i class="fas fa-times"></i>
                  </a>
               </div>
            </div>
         </div>
         <!-- header html end -->
      </div>
      <script>
        function openModal(image, title, description) {
            document.getElementById('modalImage').src = image;
            document.getElementById('modalTitle').innerText = title;
            document.getElementById('modalDescription').innerText = description;
            document.getElementById('myModal').style.display = "block";
        }

        function closeModal() {
            document.getElementById('myModal').style.display = "none";
        }

        window.onclick = function(event) {
            var modal = document.getElementById('myModal');
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    </script>

      <!-- JavaScript -->
      <script src="assets/js/jquery.js"></script>
      <script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
      <script src="assets/vendors/bootstrap/js/bootstrap.min.js"></script>
      <script src="assets/vendors/jquery-ui/jquery-ui.min.js"></script>
      <script src="assets/vendors/countdown-date-loop-counter/loopcounter.js"></script>
      <script src="assets/js/jquery.counterup.js"></script>
      <script src="assets/vendors/modal-video/jquery-modal-video.min.js"></script>
      <script src="assets/vendors/masonry/masonry.pkgd.min.js"></script>
      <script src="assets/vendors/lightbox/dist/js/lightbox.min.js"></script>
      <script src="assets/vendors/slick/slick.min.js"></script>
      <script src="assets/js/jquery.slicknav.js"></script>
      <script src="assets/js/custom.min.js"></script>
   </body>
</html>