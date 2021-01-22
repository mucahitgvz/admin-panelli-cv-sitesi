<?php require_once'../ayarlar/baglan.php'; 
$ayarabak=$db->prepare("SELECT * FROM ayarlar");
$ayarabak->execute();
$ayarcek=$ayarabak->fetch(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="<?php echo $ayarcek["ayar_desc"]; ?>">
  <meta name="author" content="<?php echo $ayarcek["ayar_author"]; ?>">
  <meta name="keywords" content="<?php echo $ayarcek["ayar_keywords"]; ?>">
  <title><?php echo $ayarcek["ayar_title"]; ?></title>
  <title>Mücahit Gevez CV Resume</title>
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <link href="css/sb-admin-2.min.css" rel="stylesheet">
</head>
<body id="page-top">
  <div id="wrapper">
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Mücahit GEVEZ <sup>2021</sup></div>
      </a>
      <hr class="sidebar-divider my-0">
      <li class="nav-item">
        <a class="nav-link" href="index.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Yönetim Paneli</span></a>
      </li>
      <hr class="sidebar-divider">
      <div class="sidebar-heading">
        Site Araçları
      </div>
      <li class="nav-item">
        <li class="nav-item">
        <a class="nav-link" href="genel-ayarlar.php">
          <i class="fas fa-fw fa-cog"></i>
          <span>Genel Ayarlar</span></a>
      </li>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="hakkimda.php">
          <i class="fas fa-fw fa-cog"></i>
          <span>Hakkımda Ayarlar</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="deneyim.php">
          <i class="fas fa-fw fa-cog"></i>
          <span>Deneyim Ayarlar</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="egitim.php">
          <i class="fas fa-fw fa-cog"></i>
          <span>Eğitim Ayarlar</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="beceri.php">
          <i class="fas fa-fw fa-cog"></i>
          <span>Beceri Ayarlar</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="sertifika.php">
          <i class="fas fa-fw fa-cog"></i>
          <span>Sertifika Ayarlar</span></a>
      </li>
      <hr class="sidebar-divider d-none d-md-block">
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>
    </ul>
    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">
<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>
          <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Mücahit Gevez</span>
                <img class="img-profile rounded-circle" src="https://source.unsplash.com/QAB-WJcbgJk/60x60">
              </a>
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Profil
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                  Ayarlar
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                  Activity Log
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Güvenli Çıkış
                </a>
              </div>
            </li>
          </ul>
        </nav>