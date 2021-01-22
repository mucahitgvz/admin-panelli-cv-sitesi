        <?php require_once 'topbar.php'; ?>
<?php
$sertifikasor=$db->prepare("SELECT * FROM sertifika where id=:id");
$sertifikasor->execute(array(
"id"=>$_GET["sertifika_id"]

));
$sertifikacekid=$sertifikasor->fetch(PDO::FETCH_ASSOC);

  ?>
        <div class="container-fluid">
          <div class="row">
            <div class="col-xl-8 col-lg-12">
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary text-center">SERTİFİKA AYARLARI DÜZENLE</h6>
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
                  <input type="text" class="form-control form-control-user" name="sertifika" value="<?php echo $sertifikacekid["sertifika"]; ?>" id="exampleInputEmail" placeholder="">
                </div>
                 <input type="hidden" class="form-control form-control-user" name="sertifika_id" value="<?php echo $sertifikacekid["id"]; ?>" id="exampleInputEmail" placeholder="">
                <div class="form-group row">
                </div>
                 <div class="form-group">
                  <input type="submit" value="Kaydet" name="sertifikaguncelle" class="form-control btn btn-success" id="exampleInputEmail" placeholder="Edit">
                </div>
                <hr>
                  
                
               
              </form>
                </div>
              </div>
          </div>

        </div>

      </div>

     <?php require_once 'footer.php'; ?>