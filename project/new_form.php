<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet"  type="text/css" href="css/color_theme.css">
    <link rel="stylesheet"  type="text/css" href="css/form.css">
    <link rel="stylesheet" href="css/card_yapısı.css">
    <link rel="icon" href="images/icon1.png" type="icon/image-x">
    <title>Web Weavers</title>
    <style>
      .yon
      {
        color: #000;
        transition: .2s;
      }
      .yon:hover
      {
        transition: .2s;
        color: #ffffff;
      }
    </style>
</head>

<body>

    <!-- navbar - start -->
    <nav class="navbar navbar-expand-md navbar-light fixed-top navbararkaplan ">
        <div class="container ">
            <a class="navbar-brand " href="anasayfa.html"><i class="fa-solid fa-feather mr-4"
                    style="color: #000000;"></i>Akıllı Tarım</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class=" nav-link" href="anasayfa.html">Anasayfa</a>
                    </li>   
                    <li class="nav-item">
                        <a class=" nav-link" href="hakkımda.html">Hakkımızda</a>
                    </li>
                    <li class="nav-item">
                        <a class=" nav-link" href="Turkiye.html">Türkiye</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Şehirler
                        </a>
                        <div class="dropdown-menu navbararkaplan" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="Antalya.html">Antalya</a>
                            <a class="dropdown-item" href="Antalya.html">Adana</a>
                            <a class="dropdown-item" href="Antalya.html">Adıyaman</a>
                            <a class="dropdown-item" href="Antalya.html">Afyon</a>
                            <a class="dropdown-item" href="Antalya.html">Ağrı</a>
                            <a class="dropdown-item" href="Antalya.html">Amasya</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Form
                        </a>
                        <div class="dropdown-menu navbararkaplan" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="new_form.php">Formlar</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="newform/index.html">Yeni Form Ekle</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class=" nav-link" href="iletisim.html">İletişim</a>
                    </li>
                    <li class="nav-item">
                        <a class=" nav-link" href="log-in.html">Kullanıcı Giriş/Oluşturma</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- navbar - end -->

    <div class="populer_form" style="word-wrap: break-word; overflow-wrap: break-word;">
      <h3 class="text-center populer"> 
        Popüler Konular
      </h3>
      <?php
        include("connect.php");
        $pop = $connection->prepare("SELECT * FROM form order by views desc limit 6");
        $pop->execute();
        
        while($den = $pop->fetch(PDO::FETCH_ASSOC))
        {
          $idpop = $den['id'];
          $problem_titlepop = substr($den['problem_title'],0,30);
          echo
          "
            <div class='icerik_pop'>
            <a style = 'text-decoration: none;' href='click_form.php?id=".$idpop."'><h5 style='padding: 8px; color:black;'>$problem_titlepop</h5></a>
            </div>
            
          ";
        }
      ?>
    </div>

    <div class="container mt-5">
      <div class='row mt-5'>
        <div class="col-md-9">
        <h2 class="form_baslik">En Son Eklenen Konular</h2>
        </div>
      <?php
        $datacek = $connection->prepare("SELECT * FROM form order by id desc");
        $datacek->execute();

        while ($row = $datacek->fetch(PDO::FETCH_ASSOC))
        {
          $id = $row['id'];
          $ad = $row['name'];
          $problem_title = $row['problem_title'];
          $problem = substr($row['problem'],0,195);
          $views = $row['views'];
          $time = $row['time'];
          $img = $row['ss'];

          echo
          "
            <div class='col-md-4 m-0'>
            <div class='card card-testimonial mt-5  mb-2'  style='background-color: #f3eccc ;'>
                <div class='icon'> <i class='fa fa-quote-right'></i> </div>
                  <div class='table m-0 p-4'>
                    <h3 class='text-success m-0 p-0'><b>$problem_title</b></h3>
                    <h5 class='populer'>$problem
                    </h5> </div>
                    <div class='ftr'>
                    <h4 class='card-caption'>$ad</h4>
                    <h6 class='category'>Görüntülenme: $views</h6>
                    <h6 class='category'>Tarih: $time</h6>
                    <div class='card-avatar'>
                        <a href='click_form.php?id=".$id."'> <img class='img icon_opacity' src='$img' alt = 'http://adamthemes.com/demo/code/cards/images/avatar3.png'> </a>
                    </div>
                  </div>
                </div>
              </div>
              <div class='col-md-1 m-0'></div>





          ";
        }

      ?>

    </div>
    </div>
    
    <!-- footer --- start -->
    <div class="navbararkaplan ">
        <footer class="container py-5 mt-5">

            <div class="row">

                <div class="col-6 col-md">

                    <h4>İçerik</h4>

                    <ul class="list-unstyled text-small">

                        <li><a class="footerrr " href="anasayfa.html">Anasayfa</a></li>

                        <li><a class="footerrr" href="hakkımda.html">Hakkımızda</a></li>

                        <li><a class="footerrr" href="Turkiye.html">Türkiye</a></li>

                        <li><a class="footerrr" href="iletisim.html">İletişim</a></li>

                        <li><a class="footerrr" href="new_form.php">Form Sayfası</a></li>

                        <li><a class="footerrr" href="newform/index.html">Yeni Form Ekle</a></li>

                        <li><a class="footerrr" href="log-in.html">Kullanıcı Giriş</a></li>

                        <li><a class="footerrr" href="newuser.html">Kullanıcı Oluşturma</a></li>

                    </ul>

                </div>

                <div class="col-6 col-md">
                    <h4>Şehirler</h4>
                    <ul class="list-unstyled text-small">
                        <li><a class="footerrr" href="Antalya.html">Antalya</a></li>

                        <li><a class="footerrr" href="Antalya.html">İstanbul</a></li>

                        <li><a class="footerrr" href="Antalya.html">Ankara</a></li>

                        <li><a class="footerrr" href="Antalya.html">İzmir</a></li>

                        <li><a class="footerrr" href="Antalya.html">Sivas</a></li>

                        <li><a class="footerrr" href="Antalya.html">Hatay</a></li>

                        <li><a class="footerrr" href="Antalya.html">Van</a></li>

                        <li><a class="footerrr" href="Antalya.html">Aydın</a></li>

                    </ul>
                </div>

                <div class="col-6 col-md">

                    <h4>Şehirler</h4>

                    <ul class="list-unstyled text-small">

                        <li><a class="footerrr" href="Antalya.html">Malatya</a></li>

                        <li><a class="footerrr" href="Antalya.html">Muğla</a></li>

                        <li><a class="footerrr" href="Antalya.html">Trabzon</a></li>

                        <li><a class="footerrr" href="Antalya.html">Bursa</a></li>

                        <li><a class="footerrr" href="Antalya.html">Diyarbakır</a></li>

                        <li><a class="footerrr" href="Antalya.html">Samsun</a></li>

                        <li><a class="footerrr" href="Antalya.html">Giresun</a></li>

                        <li><a class="footerrr" href="Antalya.html">Kars</a></li>

                    </ul>
                </div>

            </div>
        </footer>

    </div>
    <!-- footer --- end -->



    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"
        integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+"
        crossorigin="anonymous"></script>
        
    <script src="https://kit.fontawesome.com/fba4296352.js" crossorigin="anonymous"></script>

</body>
</html>



<!-- <div class='row'>
            <div class='col-lg-12 inceleform rounded m-auto mt-5 p-4 h-10'>
              <div class='text-dark formdivi'>
                <h3>$problem_title</h3>
                <p class='m-0 p-0 text-black-50'>$ad</p>
              </div>
              <div class='formdivi text-dark-emphasis fs-4'>
                <p>$problem</p>
              </div>
              <div class='d-flex justify-content-center m-3'>
              <a class='btn btn-outline-warning border-warning rounded-pill btn-md w-25 justify-content-center d-flex yon' href='click_form.php?id=".$id."' ><b>İncele</b></a>
              </div>
              <div class='d-flex justify-content-end'> 
                <p>$time</p>
                <p>&nbsp;</p>
                <p>&nbsp;</p>
                <p>Görüntülenme: $views</p>
              </div>
            </div>
          </div> -->