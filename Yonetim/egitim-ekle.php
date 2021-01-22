

        <!-- Topbar -->
        <?php require_once 'topbar.php'; ?>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">
          <!-- Content Row -->
          <div class="row">

            <div class="col-xl-8 col-lg-12">

              <!-- Area Chart -->
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary text-center">EĞİTİM EKLE</h6>
                </div>
                <div class="card-body">
                  <?php if (@$_GET["durum"]=="ok") { ?>
                  <div class="alert alert-success" > Başarıyla Güncellendi</div>
                  <?php } elseif (@$_GET["durum"]=="no") { ?>
                    <div class="alert alert-danger" > Bir Hata Oluştu</div>
                  <?php } ?>

                  </div>
                  <form  action="../ayarlar/islem.php" method="POST" class="user">
                  <b><center>BAŞLIK</center></b>
                <div class="form-group">
                  <input type="text" class="form-control form-control-user" name="baslik"  id="exampleInputEmail" placeholder="BAŞLIK GİRİN">
                </div>
                <div class="form-group row">
                </div>
                <b><center>ALT BAŞLIK</center></b>
                <div class="form-group">
                  <input type="text" class="form-control form-control-user" name="altbaslik"  id="exampleInputEmail" placeholder="ALT BAŞLIK GİRİN">
                </div>
                <div class="form-group row">
                </div>
                <b><center>İÇERİK</center></b>
                <div class="form-group">
                  <input type="text" class="form-control form-control-user" name="icerik"  id="exampleInputEmail" placeholder="İÇERİK GİRİN">
                </div>
                <div class="form-group row">
                </div>
                <b><center>TARİH</center></b>
                <div class="form-group">
                  <input type="text" class="form-control form-control-user" name="tarih" id="exampleInputEmail" placeholder="TARİH GİRİN">
                </div>
                <div class="form-group row">
                </div>
                 <div class="form-group">
                  <input type="submit" value="Kaydet" name="egitimekle" class="form-control btn btn-success" id="exampleInputEmail" placeholder="Edit">
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