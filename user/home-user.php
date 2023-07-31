<!-- utama -->
<div class="container-fluid bg-overlay d-flex justify-content-center align-items-center" id="gambar">
  <div class="row text-center">
    <h1>Your health is our priority</h1>
    <br><br>
    <h4>Temukan obat yang kau butuhkan untuk kesehatan disini</h4>
    <br><br>
    <div class="container mb-3">
      <a href="index.php?page=obat"><button type="button" class="btn btn-explore btn-lg btn3d"></span>Mulai Mencari <i
            class="bi bi-arrow-up-right-square p-1"></i></i></button></a>
    </div>
  </div>
</div>

<!--Card Jasa-->
<section id="elemen" class="py-5">
  <div class="row text-center">
    <h1>Jasa yang kami tawarkan</h1>
  </div>
  <div class="container">
    <div class="row justify-content-center baris1">

      <div class="col-sm-3" >
        <div class="card h-100"
          style="width: 18rem; margin-top: 20px; height: auto; min-height: 300px; width: 100%; border-radius: 10%;" id="jasa" onclick="vaksin();">
          <img class="card-img-top border-0 " src="../assets/images/vaksinasi.jpeg" alt="vaksinasi"
            style="height: 300px; border-radius: 10%;">
          <div class="card-body text-center" style="background-size: cover;">
            <h2 class="card-text">Vaksinasi</h2>
          </div>
        </div>
      </div>

      <div class="col-sm-3">
        <div class="card h-100"
          style="width: 18rem; margin-top: 20px; height: auto; min-height: 300px; width: 100%; border-radius: 10%;" id="jasa" onclick="checkup();">
          <img class="card-img-top border-0 " src="../assets/images/checkup.jpeg" alt="checkup"
            style="height: 300px; border-radius: 10%;">
          <div class="card-body text-center" style="background-size: cover;">
            <h2 class="card-title">Check-up kesehatan</h2>
          </div>
        </div>
      </div>

      <div class="col-sm-3">
        <div class="card h-100"
          style="width: 18rem; margin-top: 20px; height: auto; min-height: 300px; width: 100%; border-radius: 10%;" id="jasa" onclick="delivery();">
          <img class="card-img-top border-0 " src="../assets/images/delivery.jpeg" alt="delivery"
            style="height: 300px; border-radius: 10%;">
          <div class="card-body text-center" style="background-size: cover;">
            <h2 class="card-title">Antar pesanan</h2>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Why Choose Us -->
<section id="showoff-1">
  <div class="container py-4" id="WhyChoose">
    <div class="img-col">
      <img src="../assets/images/why choose us.jpeg" alt="us" class="img-fluid"
        style="height:50%; max-height: 50%; border-radius: 5%;">
    </div>
    <div class="text-col mb-6">
      <h2>Kenapa harus ApoteKrw?</h2>
      <p class="lead">Barang-barang kami terjamin!</p>
      <p>ApoteKrw telah menjadi apotek dengan kredibitas tinggi yang didukung oleh Ikatan Kedokteran indonesia.
        Kami juga selalu mengawasi produk-produk yang tersedia demi menjaga keamanan dan keselamatan para pelanggan
        kami.</p>
      <br>
      <a class="btn btn-md btn-primary py-2 px-2" href="index.php?page=whychoseus" role="button">Lanjut baca</a>
    </div>
  </div>
</section>

<script>
  function vaksin(){
    window.location.replace('index.php?page=vaksinasi');
  }
  function delivery(){
    window.location.replace('index.php?page=delivery');
  }
  function checkup(){
    window.location.replace('index.php?page=checkup');
  }
</script>