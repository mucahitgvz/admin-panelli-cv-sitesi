<?php 
require_once 'ayarlar/baglan.php';
$ayarsor=$db-> prepare("Select * from ayarlar");
$ayarsor->execute();
$ayarcek=$ayarsor->fetch(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="tr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="<?php echo $ayarcek["ayar_desc"]; ?>">
  <meta name="author" content="<?php echo $ayarcek["ayar_author"]; ?>">
  <meta name="keywords" content="<?php echo $ayarcek["ayar_keywords"]; ?>">
  <title><?php echo $ayarcek["ayar_title"]; ?></title>
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet">
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="css/resume.min.css" rel="stylesheet">
</head>
<?php 
require_once 'ayarlar/baglan.php';
$hakkimdasor=$db-> prepare("Select * from hakkimda");
$hakkimdasor->execute();
$hakkimdacek=$hakkimdasor->fetch(PDO::FETCH_ASSOC);
?>
<body id="page-top">
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">
    <a class="navbar-brand js-scroll-trigger" href="#page-top">
      <span class="d-block d-lg-none"><?php echo $hakkimdacek["ad"]; ?><?php echo $hakkimdacek["soyad"]; ?></span>
      <span class="d-none d-lg-block">
        <img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="img/profilfoto.jpg" alt="">
      </span>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="#about">Hakkımda</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="#experience">Deneyim</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="#education">Eğitim</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="#skills">Beceriler</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="#awards">Sertifikalarım</a>
        </li>
      </ul>
    </div>
  </nav>
  <div class="container-fluid p-0">
    <section class="resume-section p-3 p-lg-5 d-flex align-items-center" id="about">
      <div class="w-100">
        <h1 class="mb-0"><?php echo $hakkimdacek["ad"]; ?>
          <span class="text-primary"><?php echo $hakkimdacek["soyad"]; ?></span>
        </h1>
        <div class="subheading mb-5"><?php echo $hakkimdacek["adres"]; ?> <?php echo $hakkimdacek["telefon"]; ?>
          <a href="mailto:bilgi@mucahitgevez.com"><?php echo $hakkimdacek["mail"]; ?></a>
        </div>
        <p class="lead mb-5"><?php echo $hakkimdacek["icerik"]; ?></p>
        <div class="social-icons">
          <a href="<?php echo $hakkimdacek["youtube"]; ?>">
            <i class="fab fa-youtube"></i>
          </a>
          <a href="<?php echo $hakkimdacek["github"]; ?>">
            <i class="fab fa-github"></i>
          </a>
          <a href="<?php echo $hakkimdacek["instagram"]; ?>">
            <i class="fab fa-instagram"></i>
          </a>
          <a href="<?php echo $hakkimdacek["facebook"]; ?>">
            <i class="fab fa-facebook-f"></i>
          </a>
        </div>
      </div>
    </section>
    <hr class="m-0">
  <?php
 $deneyimsor=$db->prepare("SELECT * FROM deneyim");
 $deneyimsor->execute();
 ?>
    <section class="resume-section p-3 p-lg-5 d-flex justify-content-center" id="experience">
      <div class="w-100">
        <h2 class="mb-5">Deneyim</h2>
<?php while ($deneyimcek=$deneyimsor->fetch(PDO::FETCH_ASSOC)) {?>
        <div >
          <div >
            <h3 class="mb-0"><?php echo $deneyimcek["baslik"]; ?></h3>
            <div class="subheading mb-3"><?php echo $deneyimcek["altbaslik"]; ?></div>
            <p><?php echo $deneyimcek["icerik"]; ?></p>
          </div>
          <div class="resume-date text-md-right">
            <span class="text-primary"><?php echo $deneyimcek["tarih"]; ?> </span>
          </div>
        </div>
      </div>
      <hr>
<?php } ?>
    </section>
    <hr class="m-0">
    <section class="resume-section p-3 p-lg-5 d-flex align-items-center" id="education">
      <div class="w-100">
        <h2 class="mb-5">Eğitim</h2>
<?php
 $egitimsor=$db->prepare("SELECT * FROM egitim");
 $egitimsor->execute();
 ?>
        <?php while ($egitimcek=$egitimsor->fetch(PDO::FETCH_ASSOC)) {?>
        <div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-5">
          <div class="resume-content">
            <h3 class="mb-0"><?php echo $egitimcek["baslik"]; ?></h3>
            <div class="subheading mb-3"><?php echo $egitimcek["altbaslik"]; ?></div>
            <div><?php echo $egitimcek["icerik"]; ?></div>
          </div>
          <div class="resume-date text-md-right">
            <span class="text-primary"><?php echo $egitimcek["tarih"]; ?></span>
          </div>
        </div>
        <?php } ?>
      </div>
    </section>
    <hr class="m-0">
    <section class="resume-section p-3 p-lg-5 d-flex align-items-center" id="skills">
      <div class="w-100">
        <h2 class="mb-5">BECERİLERİM</h2>
        <div class="subheading mb-3">PROGRAMLAMA DİLLERİ VE ARAÇLARI </div>
        <ul class="fa-ul mb-0">
        <?php
        $becerisor=$db->prepare("SELECT * FROM beceri");
        $becerisor->execute();
        ?>
        <?php while ($becericek=$becerisor->fetch(PDO::FETCH_ASSOC)) {?>   
          <li>
            <i class="fa-li fa fa-check"></i>
            <?php echo $becericek["yetenek"]; ?>
          </li>
          <?php } ?>
        </ul>
      </div>
    </section>
    <hr class="m-0">
    <hr class="m-0">
    <section class="resume-section p-3 p-lg-5 d-flex align-items-center" id="awards">
      <div class="w-100">
        <h2 class="mb-5">ÖDÜLLER VE SERTİFİKALAR</h2>
        <ul class="fa-ul mb-0">
        <?php
        $sertifikasor=$db->prepare("SELECT * FROM sertifika");
        $sertifikasor->execute();
        ?>
        <?php while ($sertifikacek=$sertifikasor->fetch(PDO::FETCH_ASSOC)) {?>
          <li>
            <i class="fa-li fa fa-trophy text-warning"></i>
            <?php echo $sertifikacek["sertifika"]; ?>
          </li>
           <?php } ?>
        </ul>
      </div>
    </section>
  </div>
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="js/resume.min.js"></script>
</body>
</html>
