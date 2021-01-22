

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
                  <h6 class="m-0 font-weight-bold text-primary text-center">GENEL AYARLAR</h6>
                </div>
                <div class="card-body">
                  <?php if (@$_GET["durum"]=="ok") { ?>
                  <div class="alert alert-success" > Başarıyla Güncellendi</div>
                  <?php } elseif (@$_GET["durum"]=="no") { ?>
                    <div class="alert alert-danger" > Bir Hata Oluştu</div>
                  <?php } ?>

                  </div>
                  <form  action="../ayarlar/islem.php" method="POST" class="user">
                  <b><center>Ayar Title</center></b>
                <div class="form-group">
                  <input type="text" class="form-control form-control-user" name="ayar_title" value="<?php echo $ayarcek["ayar_title"]; ?>" id="exampleInputEmail" placeholder="">
                </div>
                <div class="form-group row">
                </div>
                <b><center>Ayar Description</center></b>
                <div class="form-group">
                  <input type="text" class="form-control form-control-user" name="ayar_desc" value="<?php echo $ayarcek["ayar_desc"]; ?>" id="exampleInputEmail" placeholder="">
                </div>
                <div class="form-group row">
                </div>
                <b><center>Author</center></b>
                <div class="form-group">
                  <input type="text" class="form-control form-control-user" name="ayar_author" value="<?php echo $ayarcek["ayar_author"]; ?>" id="exampleInputEmail" placeholder="">
                </div>
                <div class="form-group row">
                </div>
                <b><center>Ayar Keywords</center></b>
                <div class="form-group">
                  <input type="text" class="form-control form-control-user" name="ayar_keywords" value="<?php echo $ayarcek["ayar_keywords"]; ?>" id="exampleInputEmail" placeholder="">
                </div>
                <div class="form-group row">
                </div>
                 <div class="form-group">
                  <input type="submit" value="Kaydet" name="ayarkaydet" class="form-control btn btn-success" id="exampleInputEmail" placeholder="Edit">
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