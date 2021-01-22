

        <!-- Topbar -->
        <?php require_once 'topbar.php'; ?>
        <!-- End of Topbar -->
<?php
$becerisor=$db->prepare("SELECT * FROM beceri where id=:id");
$becerisor->execute(array(
"id"=>$_GET["beceri_id"]

));
$becericekid=$becerisor->fetch(PDO::FETCH_ASSOC);


  ?>
        <!-- Begin Page Content -->
        <div class="container-fluid">
          <!-- Content Row -->
          <div class="row">

            <div class="col-xl-8 col-lg-12">

              <!-- Area Chart -->
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary text-center">BECERİ AYARLARI DÜZENLE</h6>
                </div>
                <div class="card-body">
                  <?php if (@$_GET["durum"]=="ok") { ?>
                  <div class="alert alert-success" > Başarıyla Güncellendi</div>
                  <?php } elseif (@$_GET["durum"]=="no") { ?>
                    <div class="alert alert-danger" > Bir Hata Oluştu</div>
                  <?php } ?>

                  </div>
                  <form  action="../ayarlar/islem.php" method="POST" class="user">
                <div class="form-group row">
                </div>
                <b><center>İçerik</center></b>
                <div class="form-group">
                  <input type="text" class="form-control form-control-user" name="yetenek" value="<?php echo $becericekid["yetenek"]; ?>" id="exampleInputEmail" placeholder="">
                </div>
                 <input type="hidden" class="form-control form-control-user" name="beceri_id" value="<?php echo $becericekid["id"]; ?>" id="exampleInputEmail" placeholder="">
                <div class="form-group row">
                </div>
                 <div class="form-group">
                  <input type="submit" value="Kaydet" name="beceriguncelle" class="form-control btn btn-success" id="exampleInputEmail" placeholder="Edit">
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