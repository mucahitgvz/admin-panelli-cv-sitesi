<?php require_once'../ayarlar/baglan.php'; 

$beceribak=$db->prepare("SELECT * FROM beceri");
$beceribak->execute();




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
              <h6 class="m-0 font-weight-bold text-primary">Beceri Ayarları</h6><div align="right"><a href="beceri-ekle.php" class="btn btn-success">Beceri Ekle</a></div>
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
                    <?php while ($becericek=$beceribak->fetch(PDO::FETCH_ASSOC))  { ?>
                      <tr>
                      <td><?php echo $becericek["yetenek"];  ?></td>
                      <td><a href="beceri-duzenle.php?beceri_id=<?php echo $becericek["id"];?>" class="btn btn-info">Güncelle</a></td>
                      <td><a href="../ayarlar/islem.php?beceri_sil=<?php echo $becericek["id"];?>&becerisil=ok" class="btn btn-danger">Sil</td>
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