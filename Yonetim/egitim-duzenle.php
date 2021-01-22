

        <!-- Topbar -->
        <?php require_once 'topbar.php'; ?>
        <!-- End of Topbar -->
<?php
$egitimsor=$db->prepare("SELECT * FROM egitim where id=:id");
$egitimsor->execute(array(
"id"=>$_GET["egitim_id"]

));
$egitimcekid=$egitimsor->fetch(PDO::FETCH_ASSOC);


  ?>
        <!-- Begin Page Content -->
        <div class="container-fluid">
          <!-- Content Row -->
          <div class="row">

            <div class="col-xl-8 col-lg-12">

              <!-- Area Chart -->
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary text-center">EĞİTİM AYARLARI DÜZENLE</h6>
                </div>
                <div class="card-body">
                  <?php if (@$_GET["durum"]=="ok") { ?>
                  <div class="alert alert-success" > Başarıyla Güncellendi</div>
                  <?php } elseif (@$_GET["durum"]=="no") { ?>
                    <div class="alert alert-danger" > Bir Hata Oluştu</div>
                  <?php } ?>

                  </div>
                  <form  action="../ayarlar/islem.php" method="POST" class="user">
                  <b><center>Başlık</center></b>
                <div class="form-group">
                  <input type="text" class="form-control form-control-user" name="baslik" value="<?php echo $egitimcekid["baslik"]; ?>" id="exampleInputEmail" placeholder="">
                </div>
                <div class="form-group row">
                </div>
                <b><center>Alt Başlık</center></b>
                <div class="form-group">
                  <input type="text" class="form-control form-control-user" name="altbaslik" value="<?php echo $egitimcekid["altbaslik"]; ?>" id="exampleInputEmail" placeholder="">
                </div>
                <div class="form-group row">
                </div>
                <b><center>İçerik</center></b>
                <div class="form-group">
                  <input type="text" class="form-control form-control-user" name="icerik" value="<?php echo $egitimcekid["icerik"]; ?>" id="exampleInputEmail" placeholder="">
                </div>
                <div class="form-group row">
                </div>
                <b><center>Tarih</center></b>
                <div class="form-group">
                  <input type="text" class="form-control form-control-user" name="tarih" value="<?php echo $egitimcekid["tarih"]; ?>" id="exampleInputEmail" placeholder="">
                </div>
                 <input type="hidden" class="form-control form-control-user" name="egitim_id" value="<?php echo $egitimcekid["id"]; ?>" id="exampleInputEmail" placeholder="">
                <div class="form-group row">
                </div>
                 <div class="form-group">
                  <input type="submit" value="Kaydet" name="egitimguncelle" class="form-control btn btn-success" id="exampleInputEmail" placeholder="Edit">
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