<!DOCTYPE html>
<html lang="tr">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Mücahit Gevez - Yönetim Paneli</title>
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <link href="css/sb-admin-2.min.css" rel="stylesheet">
</head>
<body class="bg-gradient-primary">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-xl-6 col-lg-12 col-md-9">
        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <div class="row">
              <div class="col-lg-12">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Yönetim Paneline Hoşgeldiniz</h1>
                  </div>
                  <form action="../ayarlar/islem.php" method="POST"class="user">
                    <div class="form-group">
                      <input type="text" class="form-control form-control-user" name="kullanici_mail" id="exampleInputEmail"  placeholder="Kullanıcı Adı">
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control form-control-user" name="kullanici_sifre" id="exampleInputPassword" placeholder="Şifre">
                    </div>
                    </div>
                    <button type="submit" name="admingiris" class="btn btn-primary btn-user btn-block">Giriş Yap</button>                
                  </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="js/sb-admin-2.min.js"></script>
</body>
</html>
