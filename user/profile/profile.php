<?php
if (isset($_SESSION['id_user'])) {
    $id = $_SESSION['id_user'];

    $query = mysqli_query($koneksi, "SELECT * FROM user WHERE id_user='$id'");
    $data = mysqli_fetch_array($query);

    if (mysqli_num_rows($query) == 1) {
?>
        <div class="container p-5">
            <div class="row">
              <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
                <div class="card cardLog border-0 shadow rounded-3 my-5">
                  <div class="login card-body p-4 p-sm-5">
                    <h1 class="card-title text-center mb-5 fs-5"><i class="bi bi-person-fill"></i><strong>UPDATE PROFILE</strong></h1>
                    <hr class="w-25 mx-auto">
                    <form action="index.php?page=update-proses" method="post">
                        <input type="hidden" name="id_user" value="<?= $id ?>">
                        <div class="mb-2">
                            <label for="nama_lengkap" class="form-label">Nama</label>
                            <input type="text" name="nama_lengkap" id="nama_lengkap" class="form-control" placeholder="Masukkan nama" value="<?= $data['nama_lengkap'] ?>">
                        </div>
                        <div class="mb-2">
                            <label for="username" class="form-label">Username</label>
                            <input type="text" name="username" id="username" class="form-control" placeholder="Masukkan username" value="<?= $data['username'] ?>">
                        </div>
                        <div class="mb-2">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" name="password" id="password" class="form-control" placeholder="Masukkan password">
                        </div>
                        <div class="mb-2">
                            <label for="alamat" class="form-label">Alamat</label>
                            <textarea name="alamat" id="alamat" class="form-control" placeholder="Masukkan Alamat"
                            style="height: 100px; width: 100%;" required><?= $data['alamat'] ?> </textarea>
                        </div>
                        <input type="submit" value="Update" name="update" class="btn btn-primary">
                        <a class="btn btn-md btn-warning py-2 px-2" href="index.php?page=profile" role="button">Kembali</a>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
<?php
    } else {
        header("Location:index.php?page=profile");
    }
} else {
    header("Location:index.php?page=profile");
}
?>