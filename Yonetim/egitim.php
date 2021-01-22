<?php require_once'../ayarlar/baglan.php'; 

$egitimbak=$db->prepare("SELECT * FROM egitim");
$egitimbak->execute();




?>

        <!-- Topbar -->
        <?php require_once 'topbar.php'; ?>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Egitim Ayarları</h6><div align="right"><a href="egitim-ekle.php" class="btn btn-success">Eğitim Ekle</a></div>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Başlık</th>
                      <th>Alt Başlık</th>
                      <th>İçerik</th>
                      <th>Tarih</th>
                      <th>İşlem</th>
                      <th>İşlem</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php while ($egitimcek=$egitimbak->fetch(PDO::FETCH_ASSOC))  { ?>
                      <tr>
                      <td><?php echo $egitimcek["baslik"];  ?></td>
                      <td><?php echo $egitimcek["altbaslik"];  ?></td>
                      <td><?php echo $egitimcek["icerik"];  ?></td>
                      <td><?php echo $egitimcek["tarih"];  ?></td>
                      <td><a href="egitim-duzenle.php?egitim_id=<?php echo $egitimcek["id"];?>" class="btn btn-info">Güncelle</a></td>
                      <td><a href="../ayarlar/islem.php?egitim_sil=<?php echo $egitimcek["id"];?>&silindi=ok" class="btn btn-danger">Sil</td>
                    </tr>



                    <?php } ?>
                    

                    
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

     <?php require_once 'footer.php'; ?>