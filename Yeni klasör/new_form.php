<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="css/color_theme.css">
    <title>Akıllı Tarım</title>
</head>

<body>

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
                <a class=" nav-link" href="#">Hakkımızda</a>
              </li>
              <li class="nav-item">
                <a class=" nav-link" href="Turkiye.html">Türkiye</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Şehirler
                </a>
                <div class="dropdown-menu navbararkaplan" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="#">Action</a>
                  <a class="dropdown-item" href="#">Another action</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">Something else here</a>
                </div>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Form
                </a>
                <div class="dropdown-menu navbararkaplan" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="form.html">Formlar</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">Yeni Form Ekle</a>
                </div>
              </li>
              <li class="nav-item">
                <a class=" nav-link" href="#">İletişim</a>
              </li>
              <li class="nav-item">
                <a class=" nav-link" href="log-in.html">Kullanıcı Giriş/Oluşturma</a>
              </li>
            </ul>
          </div>
        </div>
    </nav>

    <div class="container mt-5">
      <?php
        include("connect.php");
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
              <div class='d-flex justify-content-end'> 
                <p>$time</p>
                <p>&nbsp;</p>
                <p>&nbsp;</p>
                <p>Görüntülenme: $views</p>
              </div>
            </div>
          </div>


          ";
        }

      ?>

    </div>




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