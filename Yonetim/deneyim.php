<?php require_once'../ayarlar/baglan.php'; 

$deneyimbak=$db->prepare("SELECT * FROM deneyim");
$deneyimbak->execute();




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
              <h6 class="m-0 font-weight-bold text-primary">Deneyim Ayarları</h6><div align="right"><a href="deneyim-ekle.php" class="btn btn-success">Deneyim Ekle</a></div>
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
                    <?php while ($deneyimcek=$deneyimbak->fetch(PDO::FETCH_ASSOC))  { ?>
                      <tr>
                      <td><?php echo $deneyimcek["baslik"];  ?></td>
                      <td><?php echo $deneyimcek["altbaslik"];  ?></td>
                      <td><?php echo $deneyimcek["icerik"];  ?></td>
                      <td><?php echo $deneyimcek["tarih"];  ?></td>
                      <td><a href="deneyim-duzenle.php?deneyim_id=<?php echo $deneyimcek["id"];?>" class="btn btn-info">Güncelle</a></td>
                      <td><a href="../ayarlar/islem.php?deneyim_sil=<?php echo $deneyimcek["id"];?>&durum=ok" class="btn btn-danger">Sil</td>
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