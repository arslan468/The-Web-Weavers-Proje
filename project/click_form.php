<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="css/color_theme.css">
    <link rel="stylesheet" href="css/form.css">
  
    <title>Akıllı Tarım</title>
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

      .form_yorum
      {
        background-color: #f3eccc;
        border-radius: 30px;

      }
    </style>
</head>

<body>

        <!-- navbar - start -->
        <nav class="navbar navbar-expand-md navbar-light fixed-top navbararkaplan ">
            <div class="container ">
              <a class="navbar-brand " href="anasayfa.html">Akıllı Tarım</a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
          
              <div>
                <ul class="navbar-nav">
                  <li class="nav-item active">
                    <a class=" nav-link" href="anasayfa.html">Anasayfa</a>
                  </li>
                  <li class="nav-item">
                    <a class=" nav-link" href="hakkımda.html">Hakkımızda</a>
                  </li>
                  <li class="nav-item">
                    <a class=" nav-link" href="Turkiye.html">Türkiye</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Şehirler
                    </a>
                    <div class="dropdown-menu navbararkaplan" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="Antalya.html">Antalya</a>
                      <a class="dropdown-item" href="Antalya.html">Antalya</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="Turkiye.html">Türkiye</a>
                    </div>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Form
                    </a>
                    <div class="dropdown-menu navbararkaplan" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="new_form.php">Formlar</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="/project/newform/index.html">Yeni Form Ekle</a>
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

    <div class="container mt-5">
      <?php
        include("connect.php");
        $form_id = @$_GET["id"];

        $datacek = $connection->prepare("SELECT * FROM form WHERE id=?");

        $datacek->execute(array($form_id));

        while($goruntu = $datacek->fetch(PDO::FETCH_ASSOC))
        {
            $id = $goruntu['id'];
            $name = $goruntu['name'];
            $problem_title = $goruntu['problem_title'];
            $problem = $goruntu['problem'];
            $views = $goruntu['views'];
            $time = $goruntu['time'];
            $foto = $goruntu['ss'];

            $views += 1;

            echo
            "
            <div class='icon_form'>
              <div class='card-avatar'> <img class='img rounded-circle shadow-4-strong img-fluid' src='$foto'>
              </div>
            </div>
            <div class='container mt-5'>
                <div class='row mt-5'>
                    <div class='col-md-12 text-center mt-5'>
                    <h1 class='sayfa_fontu'>$problem_title</h1>
                    </div>

                    <div class='col-md-6'>
                    <h3 class='sayfa_fontu text-secondary'>
                        $name
                    </h3>
                    </div>

                    
                    <div class='col-md-12'>
                    <h3 class='sayfa_fontu form_text_color'>$problem</h3>
                    </div>
                    <div class='col-md-12 justify-content-end text-end'>
                    <h5>

                        Görüntülenme: $views
                    </h5>
                    <h5>
                        Yazıldığı Tarih: $time
                    </h5>
                    </div>

                    

                </div>



                <div class='row mt-5'>
                    <div class='mb-5 form_yorum'>
                    <div class='col-md-12'>
                        <h4 class='m-3 p-1'>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis, itaque. Quis, asperiores iure? Nulla iure exercitationem rem molestiae, perferendis laborum quis aut quas quae delectus eaque dignissimos hic tempora earum.
                        Fuga tempore labore similique asperiores reiciendis reprehenderit animi. Dolores eligendi expedita, quas quod, laborum ullam illum ipsa voluptate, adipisci fuga excepturi delectus minima totam accusantium. </h4>

                    </div>
                    
                    <div class='row'>
                        <div class='col-md-4 justify-content-start'>                <h4>Mehmet Alp Arslan</h4>
                        </div>
                        <div style='margin-left:10%;' class='col-md-2 justify-content-end'>
                        <a href='#' class='icon_opacity'><img  src='up_icon.png'></a>
                        <a href='#' class='icon_opacity'><img  src='down_icon.png'></a>
                        </div>
                        <div class='col-md-4 text-end'><h5 class='text-end m-3'>
                        Yazıldığı Tarih: 2023-05-29 13:20:46
                        </h5></div>
                    </div>
                    </div>
                </div>

                <div class='row mt-5'>
                <div class='mb-5 form_yorum'>
                <div class='col-md-12'>
                    <h4 class='m-3 p-1'>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis, itaque. Quis, asperiores iure? Nulla iure exercitationem rem molestiae, perferendis laborum quis aut quas quae delectus eaque dignissimos hic tempora earum.
                    Fuga tempore labore similique asperiores reiciendis reprehenderit animi. Dolores eligendi expedita, quas quod, laborum ullam illum ipsa voluptate, adipisci fuga excepturi delectus minima totam accusantium. </h4>

                </div>
                
                <div class='row'>
                    <div class='col-md-4 justify-content-start '>                <h4>Mehmet Alp Arslan</h4>
                    </div>
                    <div style='margin-left:10%;' class='col-md-2 justify-content-end'>
                    <a href='#' class='icon_opacity'><img  src='up_icon.png'></a>
                    <a href='#' class='icon_opacity'><img  src='down_icon.png'></a>
                    </div>
                    <div class='col-md-4 text-end'><h5 class='text-end m-3'>
                    Yazıldığı Tarih: 2023-05-29 13:20:46
                    </h5></div>
                </div>
                </div>
            </div>


            </div>

            ";
            $goruntulenme = $connection->prepare("UPDATE form SET views=? WHERE id=$id");
            $goruntulenme->execute(array($views));
        }
      ?>



    </div>


    <footer class="iletisim">
      <div class="container">
        <h1 id = "baslik">
            Cevapla 
        </h1>
        <div class="row">
            <div class="col-md-12">
                <form method = "POST">
                    <div class="form-outline mb-1">
                      <input placeholder="Ad-Soyad" name = "ad" type="text" id="form4Example1" class="form-control" />
                      <label class="form-label text-light" for="form4Example1">Ad-Soyad</label>
                    </div>
                  
                    <div class="form-outline mb-1">
                      <input placeholder="Email" type="email" name ="mail" id="form4Example2" class="form-control" />
                      <label class="form-label text-light" for="form4Example2">Email</label>
                    </div>

                  
                    <div class="form-outline mb-4">
                      <textarea placeholder="Çözüm Öneriniz" name="mesaj" class="form-control" id="form4Example3" rows="2"></textarea>
                      <label class="form-label text-light" for="form4Example3">Mesajınız</label>
                    </div>                  
                    <div class="form-check d-flex justify-content-center mb-4">
                        <input type="submit" name = "btnUser" id = "btnNewuser" value = "Gönder" class = "btn btn-outline-warning border-warning rounded-pill btn-md w-25 justify-content-center d-flex yon">
                    </div>
                  </form>
            </div>
        </div>
      </div>
  </footer>

      <!-- footer --- start -->
      <div class="navbararkaplan ">
      
      <footer class="container py-5 mt-5">

        <div class="row">

          <div class="col-6 col-md">

            <h4>İçerik</h4>

            <ul class="list-unstyled text-small">

              <li><a class="footerrr " href="anasayfa.html">Anasayfa</a></li>

              <li><a class="footerrr" href="hakkımızda.html">Hakkımızda</a></li>

              <li><a class="footerrr" href="hakkımızda.html">Türkiye</a></li>

              <li><a class="footerrr" href="iletisim.html">İletişim</a></li>

              <li><a class="footerrr" href="iletisim.html">Kullanıcı Giriş</a></li>

              <li><a class="footerrr" href="iletisim.html">Kullanıcı Oluşturma</a></li>

            </ul>

          </div>

          <div class="col-6 col-md">
            <h4>Şehirler</h4>
            <ul class="list-unstyled text-small">
              <li><a class="footerrr" href="#">İstanbul</a></li>

              <li><a class="footerrr" href="#">Ankara</a></li>

              <li><a class="footerrr" href="#">İzmir</a></li>

              <li><a class="footerrr" href="#">Antalya</a></li>

              <li><a class="footerrr" href="#">Sivas</a></li>

              <li><a class="footerrr" href="#">Hatay</a></li>

            </ul>
          </div>

          <div class="col-6 col-md">

              <h4>Şehirler</h4>

              <ul class="list-unstyled text-small">

                <li><a class="footerrr" href="#">Malatya</a></li>

                <li><a class="footerrr" href="#">Muğla</a></li>

                <li><a class="footerrr" href="#">Trabzon</a></li>
                
                <li><a class="footerrr" href="#">Bursa</a></li>  

                <li><a class="footerrr" href="#">Diyarbakır</a></li>

                <li><a class="footerrr" href="#">Samsun</a></li>

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
</body>
</html>

<!-- 

$datacek = $connection->prepare("SELECT * FROM form order by views desc");
        $datacek->execute();

        while ($row = $datacek->fetch(PDO::FETCH_ASSOC))
        {
          $id = $row['id'];
          $ad = $row['name'];
          $problem_title = $row['problem_title'];
          $problem = $row['problem'];
          $views = $row['views'];
          $time = $row['time'];

          echo
          "
          <div class='row'>
            <div class='col-lg-12 bg-opacity-50 bg-success bg-gradient rounded m-auto mt-5 h-10'>
              <div class='text-dark formdivi'>
                <h3>$problem_title</h3>
                <p class='m-0 p-0 text-black-50'>$ad</p>
              </div>
              <div class='formdivi text-dark-emphasis'>
                <h4>$problem</h4>
              </div>
              <div class='d-flex justify-content-start'>
              <a class='btn btn-outline-success btn-md w-100 yon' href='click_form.php?id=".$id."' ><b>İncele</b></a>
              </div>
              <div class='d-flex justify-content-end'> 
                <p>$time</p>
                <p>&nbsp;</p>
                <p>&nbsp;</p>
                <p>Görüntülenme: $views</p>
              </div>
            </div>
          </div>


          ";
        } -->
