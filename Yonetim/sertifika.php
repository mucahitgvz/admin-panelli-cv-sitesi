<?php require_once'../ayarlar/baglan.php'; 
$sertifikabak=$db->prepare("SELECT * FROM sertifika");
$sertifikabak->execute();
?>
        <?php require_once 'topbar.php'; ?>
        <div class="container-fluid">
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Sertifika Ayarları</h6><div align="right"><a href="sertifika-ekle.php" class="btn btn-success">Sertifika Ekle</a></div>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>                    
                      <th>İçerik</th>
                      <th>İşlem</th>
                      <th>İşlem</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php while ($sertifikacek=$sertifikabak->fetch(PDO::FETCH_ASSOC))  { ?>
                      <tr>
                      <td><?php echo $sertifikacek["sertifika"];  ?></td>
                      <td><a href="sertifika-duzenle.php?sertifika_id=<?php echo $sertifikacek["id"];?>" class="btn btn-info">Güncelle</a></td>
                      <td><a href="../ayarlar/islem.php?sertifika_sil=<?php echo $sertifikacek["id"];?>&sertifikasil=ok" class="btn btn-danger">Sil</td>
                    </tr>
                    <?php } ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
     <?php require_once 'footer.php'; ?>