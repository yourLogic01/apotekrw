<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $query = mysqli_query($koneksi, "SELECT * FROM obat WHERE id='$id'");
    $data = mysqli_fetch_array($query);

    if (mysqli_num_rows($query) == 1) {
?>

<section class="py-lg-2">
        <div class="container p-5">
            <div class="row">
              <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
                <div class="card cardLog border-0 shadow rounded-3 my-5">
                  <div class="login card-body p-4 p-sm-5">
                    <h1 class="card-title text-center mb-5 fs-5"><strong><i class="bi bi-cart2 py-2"></i>Beli Obat</strong></h1>
                    <hr class="w-25 mx-auto">
                    <form action="index.php?page=beli-proses" id="beli-proses" method="post" autocomplete="off">
                    <input type="hidden" name="id" value="<?= $id ?>">
                    <input type="hidden" name="id_user" value="<?= $_SESSION['id_user'] ?>">
                        <div class="mb-2">
                            <label for="kd_obat" class="form-label">Kode obat</label>
                            <input type="text" readonly name="kd_obat" id="kd_obat" class="form-control" placeholder="Masukkan kode obat" value="<?= $data['kd_obat'] ?>" maxlength="6">
                        </div>
                        <div class="mb-2">
                            <label for="nama_obat" class="form-label">Nama obat</label>
                            <input type="text" readonly name="nama_obat" id="nama_obat" class="form-control" placeholder="Masukkan nama obat" value="<?= $data['nama_obat'] ?>">
                        </div>
                        <div class="mb-2">
                            <label for="harga" class="form-label">Harga</label>
                            <input onkeyup="sum();" readonly type="text" name="harga" id="harga" class="form-control" placeholder="Masukkan harga" value="<?= $data['harga'] ?>">
                        </div>
                        <div class="mb-2">
                            <label for="jum_item" class="form-label">Jumlah beli</label>
                            <input onkeyup="sum();" type="text" name="jum_item" id="jum_item" required class="form-control" value="" placeholder="Masukkan jumlah item yang akan dibeli">
                        </div>
                        <div class="mb-2">
                            <label for="total" class="form-label">Total</label>
                            <input type="text" readonly name="total" id="total" class="form-control" value="">
                        </div>
                        <div class="mb-2">
                            <label for="alamat" class="form-label">Alamat</label>
                            <textarea name="alamat" id="alamat" class="form-control" placeholder="Masukkan Alamat untuk pengiriman barang"
                            style="height: 100px; width: 100%;" required></textarea>
                        </div>
                        <div class="mb-2">
                            <label for="bayar" class="form-label">Metode Bayar</label>
                            <select name="bayar" id="bayar" class="form-select">
                                    <option value="" hidden>Pilih metode pembayaran</option>
                                    <option value="COD">COD</option>
                                    <option value="BRI">BRI</option>
                                    <option value="BCA">BCA</option>
                                    <option value="BTN">BTN</option>
                                    <option value="DANA">DANA</option>
                                    <option value="GOPAY">GOPAY</option>
                            </select>
                        </div>
                        <input type="submit" role="button" onclick="insert();" value="Bayar" name="bayar"  class="btn btn-primary">
                        <a class="btn btn-md btn-warning py-2 px-2" href="index.php?page=obat" role="button">Kembali</a>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>      
    </section>
    <?php
    } else {
        header("Location:index.php?page=obat");
    }
} else {
    header("Location:index.php?page=obat");
}
?>

<script>
    function sum() {
    let harga = document.getElementById('harga').value;
    let jumlah = document.getElementById('jum_item').value;
    let result = parseInt(harga) * parseInt(jumlah);
    if (!isNaN(result)) {
        document.getElementById('total').value = result;
    }
}


</script>
<script>
    // sending to database script
let form = document.getElementById("beli-proses");

function handleForm(event) {
    event.preventDefault();
}
form.addEventListener('submit', handleForm);
// Function
function insert(){
    $(document).ready(function() {
        $.ajax({
            // Action
            url: 'beli_proses.php',
            // Method
            type: 'POST',
            data: {
                // Get value
                id_user: $("input[name=id_user]").val(),
                id: $("input[name=id]").val(),
                jum_item: $("input[name=jum_item]").val(),
                alamat: $("textarea[name=alamat]").val(),
                bayar: $("select[name=bayar]").val(),
                total: $("input[name=total]").val(),
                action: "insert"
            },
            success: function(response) {
                // Response is the output of action file
                if (response == 1) {
                    // alert("Pembayaran Berhasil!");
                    window.location.replace('index.php?page=invoice');
                }else{
                    alert("error");
                    console.log(response);
                }
            },
            error: function(err) {
             console.log(err);
            }
            
        });
    });
}

</script>
