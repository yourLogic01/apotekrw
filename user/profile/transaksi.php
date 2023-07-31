<section class="py-lg-2">
        <div class="container-fluid p-5">
            <div class="row">
              <div class="col-sm-9 col-md-7 col-lg-5 ">
                    <a class="btn btn-md btn-primary py-2 px-2" href="index.php?page=home" role="button">Kembali ke menu utama</a>
                </div>
                <div class="col-lg-12 py-2">
                <table class="table table-hover table-striped table-bordered">
              <thead>
                <tr>
                  <th scope="col ">No.</th>
                  <th scope="col">resi</th>
                  <th scope="col">nama obat</th>
                  <th scope="col">jumlah beli</th>
                  <th scope="col">total</th>
                </tr>
              </thead>
              <tbody>
              <?php
                    $id = $_SESSION['id_user'];
                    $query = mysqli_query($koneksi, "SELECT * FROM jual JOIN obat on jual.id=obat.id  where id_user=$id order by resi asc");
                    $no = 1;
                    if (mysqli_num_rows($query) > 0) {
                    foreach ($query as $data) {
                    ?>
                        <tr>
                            <td><?= $no++ ?></td>
                            <td><?= $data['resi'] ?></td>
                            <td><?= $data['nama_obat'] ?></td>
                            <td><?= $data['jum_item'] ?></td>
                            <td><?= $data['total'] ?></td>
                        </tr>
                    <?php
                    }
                    } else {
                        ?>
                        <tr>
                            <td colspan="5">
                                <div class="alert alert-danger">Tidak ada data...</div>
                            </td>
                        </tr>
                    <?php
                    }
                    ?>
            </table>
                </div>
                </div>
              </div>
            </div>
          </div>      
    </section>

