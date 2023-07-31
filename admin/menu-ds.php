<!-- utama -->
<div class="container-fluid bg-overlay" id="gambar">
    <div class="row text-center">
      <h1 class="pt-5">Selamat datang di Menu Dashboard Admin</h1>
      <br><br>
      <br><br>
    </div>
</div>
<div class="container">
<div class="row row-cols-1 row-cols-md-3 g-4 py-5">
            <div class="col-md-4">
                <div class="card " style="border-radius: 10px; background-color:#7ADFA9;">
                    <div class="card-body">
                        <img src="../assets/images/user.png" width="90px" class="img-fluid float-end p-3 me-3 mt-3">
                        <h2 class="p-3 ">USER</h2>
                        <div class="ms-3 mt-0">
                            <?php
                                include '../lib/koneksi.php';
                                $query = mysqli_query($koneksi, "SELECT id_user FROM user ORDER BY id_user");
                                $row = mysqli_num_rows($query);
                                ?>
                            <h2>
                                <?php
                                    echo $row;
                                    ?>
                            </h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card " style="border-radius: 10px; background-color:#7ADFA9;">
                    <div class="card-body">
                        <img src="../assets/images/capsules.png" width="90px" class="img-fluid float-end p-3 me-3 mt-3">
                        <h2 class="p-3 ">OBAT</h2>
                        <div class="ms-3 mt-0">
                            <?php
                                include '../lib/koneksi.php';
                                $query = mysqli_query($koneksi, "SELECT id FROM obat ORDER BY id");
                                $row = mysqli_num_rows($query);
                                ?>
                            <h2>
                                <?php
                                    echo $row;
                                    ?>
                            </h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card " style="border-radius: 10px; background-color:#7ADFA9;">
                    <div class="card-body">
                        <img src="../assets/images/categories.png" width="90px" class="img-fluid float-end p-3 me-3 mt-3">
                        <h2 class="p-3 ">KATEGORI</h2>
                        <div class="ms-3 mt-0">
                            <?php
                                include '../lib/koneksi.php';
                                $query = mysqli_query($koneksi, "SELECT id_kategori FROM kategori_obat ORDER BY id_kategori");
                                $row = mysqli_num_rows($query);
                                ?>
                            <h2>
                                <?php
                                    echo $row;
                                    ?>
                            </h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>

