

        <!-- Topbar -->
        <?php require_once 'topbar.php'; ?>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">
          <!-- Content Row -->
          <div class="row">

            <div class="col-xl-8 col-lg-12">
<?php require_once'../ayarlar/baglan.php'; 

$hakkimdabak=$db->prepare("SELECT * FROM hakkimda");
$hakkimdabak->execute();
$hakkimdacek=$hakkimdabak->fetch(PDO::FETCH_ASSOC);



?>

              <!-- Area Chart -->
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary text-center">HAKKIMDA AYARLAR</h6>
                </div>
                <div class="card-body">
                  <?php if (@$_GET["durum"]=="ok") { ?>
                  <div class="alert alert-success" > Başarıyla Güncellendi</div>
                  <?php } elseif (@$_GET["durum"]=="no") { ?>
                    <div class="alert alert-danger" > Bir Hata Oluştu</div>
                  <?php } ?>

                  </div>
                  <form  action="../ayarlar/islem.php" method="POST" class="user">
                  <b><center>Ad</center></b>
                <div class="form-group">
                  <input type="text" class="form-control form-control-user" name="ad" value="<?php echo $hakkimdacek["ad"]; ?>" id="exampleInputEmail" placeholder="">
                </div>
                <div class="form-group row">
                </div>
                <b><center>Soyad</center></b>
                <div class="form-group">
                  <input type="text" class="form-control form-control-user" name="soyad" value="<?php echo $hakkimdacek["soyad"]; ?>" id="exampleInputEmail" placeholder="">
                </div>
                <div class="form-group row">
                </div>
                <b><center>Adres</center></b>
                <div class="form-group">
                  <input type="text" class="form-control form-control-user" name="adres" value="<?php echo $hakkimdacek["adres"]; ?>" id="exampleInputEmail" placeholder="">
                </div>
                <div class="form-group row">
                </div>
                <b><center>Telefon</center></b>
                <div class="form-group">
                  <input type="text" class="form-control form-control-user" name="telefon" value="<?php echo $hakkimdacek["telefon"]; ?>" id="exampleInputEmail" placeholder="">
                </div>
                <div class="form-group row">
                </div>
                <b><center>Mail</center></b>
                <div class="form-group">
                  <input type="text" class="form-control form-control-user" name="mail" value="<?php echo $hakkimdacek["mail"]; ?>" id="exampleInputEmail" placeholder="">
                </div>
                <div class="form-group row">
                </div>
                <b><center>İçerik</center></b>
                <div class="form-group">
                  <input type="text" class="form-control form-control-user" name="icerik" value="<?php echo $hakkimdacek["icerik"]; ?>" id="exampleInputEmail" placeholder="">
                </div>
                <div class="form-group row">
                </div>
                <b><center>Facebook</center></b>
                <div class="form-group">
                  <input type="text" class="form-control form-control-user" name="facebook" value="<?php echo $hakkimdacek["facebook"]; ?>" id="exampleInputEmail" placeholder="">
                </div>
                <div class="form-group row">
                </div>
                <b><center>Instagram</center></b>
                <div class="form-group">
                  <input type="text" class="form-control form-control-user" name="instagram" value="<?php echo $hakkimdacek["instagram"]; ?>" id="exampleInputEmail" placeholder="">
                </div>
                <div class="form-group row">
                </div>
                <b><center>Github</center></b>
                <div class="form-group">
                  <input type="text" class="form-control form-control-user" name="github" value="<?php echo $hakkimdacek["github"]; ?>" id="exampleInputEmail" placeholder="">
                </div>
                <div class="form-group row">
                </div>
                <b><center>Youtube</center></b>
                <div class="form-group">
                  <input type="text" class="form-control form-control-user" name="youtube" value="<?php echo $hakkimdacek["youtube"]; ?>" id="exampleInputEmail" placeholder="">
                </div>
                <div class="form-group row">
                </div>
                 <div class="form-group">
                  <input type="submit" value="Kaydet" name="hakkimdakaydet" class="form-control btn btn-success" id="exampleInputEmail" placeholder="Edit">
                </div>
                <hr>
                  
                
               
              </form>
                </div>
              </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

     <?php require_once 'footer.php'; ?>