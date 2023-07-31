<section id="elemen">
    <div class="container-fluid py-3 text-center" id="headingAccordion">
      <div id="accordion">
        <div class="card">
          <div class="card-header" id="heading">
            <h5 class="mb-0">
              <a class="btn btn-outline-dark " data-toggle="collapse" href="#collapseOne" aria-expanded="false"
                aria-controls="collapseOne" id="accordionHead">
                < < Tablet > >
              </a>
            </h5>
          </div>
          <div id="collapseOne" class="collapse" aria-labelledby="heading" data-parent="#accordion">
            <table class="table table-hover table-striped table-bordered">
              <thead>
                <tr>
                  <th scope="col ">No.</th>
                  <th scope="col">Nama Obat</th>
                  <th scope="col">Stok</th>
                  <th scope="col">Harga</th>
                  <th scope="col">Beli</th>
                </tr>
              </thead>
              <tbody>
              <?php
                    $query = mysqli_query($koneksi, "SELECT * FROM obat where id_kategori=3");
                    $no = 1;
                    if (mysqli_num_rows($query) > 0) {
                    foreach ($query as $data) {
                    ?>
                        <tr>
                            <td><?= $no++ ?></td>
                            <td><?= $data['nama_obat'] ?></td>
                            <td><?= $data['stok'] ?></td>
                            <td><?= $data['harga'] ?></td>
                            <td>
                                <div class="btn-group">
                                    <a href="index.php?page=beli&id=<?= $data['id'] ?>" class="btn btn-sm btn-success"><i class="bi bi-cart4"></i></a>
                                </div>
                            </td>
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


          <!--Elemen-->
          <div class="card">
            <div class="card-header" id="heading">
              <h5 class="mb-0">
                <a class="btn collapsed btn-outline-dark" data-toggle="collapse" href="#collapseTwo"
                  aria-expanded="false" aria-controls="collapseTwo" id="accordionHead">
                  < < Sirup > >
                </a>
              </h5>
            </div>
            <div id="collapseTwo" class="collapse" aria-labelledby="heading" data-parent="#accordion">
            <table class="table table-hover table-striped table-bordered">
              <thead>
                <tr>
                  <th scope="col ">No.</th>
                  <th scope="col">Nama Obat</th>
                  <th scope="col">Stok</th>
                  <th scope="col">Harga</th>
                  <th scope="col">Beli</th>
                </tr>
              </thead>
              <tbody>
              <?php
                    $query = mysqli_query($koneksi, "SELECT * FROM obat where id_kategori=5");
                    $no = 1;
                    if (mysqli_num_rows($query) > 0) {
                    foreach ($query as $data) {
                    ?>
                        <tr>
                            <td><?= $no++ ?></td>
                            <td><?= $data['nama_obat'] ?></td>
                            <td><?= $data['stok'] ?></td>
                            <td><?= $data['harga'] ?></td>
                            <td>
                                <div class="btn-group">
                                    <a href="index.php?page=beli&id=<?= $data['id'] ?>" class="btn btn-sm btn-success"><i class="bi bi-cart4"></i></a>
                                </div>
                            </td>
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


            <div class="card">
              <div class="card-header" id="heading">
                <h5 class="mb-0">
                  <a class="btn collapsed btn-outline-dark" data-toggle="collapse" href="#collapseThree"
                    aria-expanded="false" aria-controls="collapseThree" id="accordionHead">
                    < < Kapsul > >
                  </a>
                </h5>
              </div>
              <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
              <table class="table table-hover table-striped table-bordered">
              <thead>
                <tr>
                  <th scope="col ">No.</th>
                  <th scope="col">Nama Obat</th>
                  <th scope="col">Stok</th>
                  <th scope="col">Harga</th>
                  <th scope="col">Beli</th>
                </tr>
              </thead>
              <tbody>
                    <?php
                            $query = mysqli_query($koneksi, "SELECT * FROM obat where id_kategori=2");
                            $no = 1;
                            if (mysqli_num_rows($query) > 0) {
                            foreach ($query as $data) {
                            ?>
                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td><?= $data['nama_obat'] ?></td>
                                    <td><?= $data['stok'] ?></td>
                                    <td><?= $data['harga'] ?></td>
                                    <td>
                                        <div class="btn-group">
                                            <a href="index.php?page=beli&id=<?= $data['id'] ?>" class="btn btn-sm btn-success"><i class="bi bi-cart4"></i></a>
                                        </div>
                                    </td>
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

            <div class="card">
              <div class="card-header" id="heading">
                <h5 class="mb-0">
                  <a class="btn collapsed btn-outline-dark" data-toggle="collapse" href="#collapseFour"
                    aria-expanded="false" aria-controls="collapseFour" id="accordionHead">
                    < < Pil > >
                  </a>
                </h5>
              </div>
              <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
              <table class="table table-hover table-striped table-bordered">
              <thead>
                <tr>
                  <th scope="col ">No.</th>
                  <th scope="col">Nama Obat</th>
                  <th scope="col">Stok</th>
                  <th scope="col">Harga</th>
                  <th scope="col">Beli</th>
                </tr>
              </thead>
              <tbody>
                    <?php
                            $query = mysqli_query($koneksi, "SELECT * FROM obat where id_kategori=1");
                            $no = 1;
                            if (mysqli_num_rows($query) > 0) {
                            foreach ($query as $data) {
                            ?>
                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td><?= $data['nama_obat'] ?></td>
                                    <td><?= $data['stok'] ?></td>
                                    <td><?= $data['harga'] ?></td>
                                    <td>
                                        <div class="btn-group">
                                            <a href="index.php?page=beli&id=<?= $data['id'] ?>" class="btn btn-sm btn-success"><i class="bi bi-cart4"></i></a>
                                        </div>
                                    </td>
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

            <div class="card">
              <div class="card-header" id="heading">
                <h5 class="mb-0">
                  <a class="btn collapsed btn-outline-dark" data-toggle="collapse" href="#collapseFive"
                    aria-expanded="false" aria-controls="collapseFive" id="accordionHead">
                    < < Tetes > >
                  </a>
                </h5>
              </div>
              <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordion">
              <table class="table table-hover table-striped table-bordered">
              <thead>
                <tr>
                  <th scope="col ">No.</th>
                  <th scope="col">Nama Obat</th>
                  <th scope="col">Stok</th>
                  <th scope="col">Harga</th>
                  <th scope="col">Beli</th>
                </tr>
              </thead>
              <tbody>
                    <?php
                            $query = mysqli_query($koneksi, "SELECT * FROM obat where id_kategori=4");
                            $no = 1;
                            if (mysqli_num_rows($query) > 0) {
                            foreach ($query as $data) {
                            ?>
                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td><?= $data['nama_obat'] ?></td>
                                    <td><?= $data['stok'] ?></td>
                                    <td><?= $data['harga'] ?></td>
                                    <td>
                                        <div class="btn-group">
                                            <a href="index.php?page=beli&id=<?= $data['id'] ?>" class="btn btn-sm btn-success"><i class="bi bi-cart4"></i></a>
                                        </div>
                                    </td>
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

  </section>