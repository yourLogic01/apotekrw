<section>
<div class="container p-5">
<div class="row">
    <div class="mx-auto text-center">
        <div class="card" style="height: 530px; width:100%;">
            <div class="card-body " >
                            <img src="../assets/images/user.png" class="img-fluid rounded-circle px-5 py-1 mb-3">
                            <h3 class="px-5 py-1"> Nama Lengkap : <?= $_SESSION['nama_lengkap']?></h3>
                            <h3 class="text-muted px-5 py-1">Alamat : <?= $_SESSION['alamat']?></h3>
                            <h3 class="text-muted px-5 py-1">Status : <?= $_SESSION['status']?></h3>
                            <div class="row py-3 mx-auto">
                                <div class="col-lg-3 mx-auto">
                                <a href="index.php?page=updateProfile&id=<?= $_SESSION['id_user'] ?>"><button type="button" class="btn btn-primary  mx-3"><i class="px-1 bi bi-person-bounding-box"></i>Update Profile</button></a>
                                </div>
                                <div class="col-lg-4 mx-auto">
                                <a href="index.php?page=transaksi&id=<?= $_SESSION['id_user']?>"><button type="button" class="btn btn-warning  mx-3"><i class="px-1 bi bi-card-checklist"></i>lihat daftar transaksi</button></a>
                                </div>
                            </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</section>
