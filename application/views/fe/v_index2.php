<style>
  .btn-floating {
    position: fixed;
    right: 25px;
    overflow: hidden;
    width: 50px;
    height: 50px;
    border-radius: 100px;
    border: 0;
    z-index: 999;
    color: rgb(250, 249, 249);
    transition: .2s;
  }

  .btn-floating:hover {
    width: auto;
    padding: 0 20px;
    cursor: pointer;
  }

  .btn-floating span {
    font-size: 16px;
    margin-left: 5px;
    transition: .2s;
    line-height: 0px;
    display: none;
  }

  .btn-floating.back {
    bottom: 40px;
    background-color: rgb(47, 195, 1);
    border: 2px solid rgb(28, 117, 36);
  }

  .btn-floating.home {
  bottom: 100px;
  background-color: salmon;
  border: 2px solid darkorchid;
}

  .btn-floating:hover span {
    display: inline-block;
  }

  .btn-floating:hover i {
    margin-bottom: -2px;
    height: 30px;
  }
</style>
<main id="main">
  <!-- <section id="hero-animated" class="hero-animated d-flex align-items-center">
  
  </section> -->

  <!-- ======= F.A.Q Section ======= -->
  <section id="faq" class="faq">
    <div class="container-fluid" data-aos="fade-up">
      <!-- <div class="section-header">
        <h2>SELAMAT DATANG</h2>
        <p>Di Layanan Online Kantor Desa xxxxxxxxxxxxxx</p>
      </div> -->
      <div class="row gy-4">

        <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch  order-2 order-lg-1">

          <div class="content px-xl-5">
            <h3><strong>Selamat Datang</strong> di Layanan Online Kantor Desa xxxxxxx</h3>
            <p>
              fdgefg efqgfegfe efgeegef efgefgfeg efgeegfefvdfgfevefg dfbddvffd dfvffdvdd dfvvfdfv dfddfdff dddfddv ddf dffdff dffdfdfv dffddf dfv dddfvddv ddvddf ddf dddffssvdddfdfv dff dddfdddfvddv dffddv dddfff
            </p>
            <div class="d-flex">
              <a href="<?php echo base_url('layanan'); ?>" class="btn-get-started scrollto">Pilih Pelayanan</a>
            </div>
          </div>
        </div>

        <div class="col-lg-5 align-items-stretch order-1 order-lg-2 img" style='background-image: url("<?php echo base_url(); ?>assets/img/laki.png");'>&nbsp;</div>
      </div>

    </div>

  </section><!-- End F.A.Q Section -->

  <a href="<?php echo base_url('login'); ?>">
    <button class="btn-floating back">
    <i class="bi bi-person-circle"></i>
      <span>Login</span>
    </button>
  </a>
  <a href="javascript:;" onclick="ceksurat()">
    <button class="btn-floating home">
    <i class="bi bi-search"></i>
      <span>Cek Surat</span>
    </button>
  </a>



</main><!-- End #main -->