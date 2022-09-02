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
  .btn-floating:hover span {
    display: inline-block;
  }

  .btn-floating:hover i {
    margin-bottom: -2px;
    height: 30px;
  }
  .btn-floating.kembali {
    bottom: 30px;
    background-color: rgb(47, 195, 1);
    border: 2px solid rgb(28, 117, 36);
  }
</style>
<a href="<?php echo base_url(); ?>">
    <button class="btn-floating kembali">
    <i class="bi bi-arrow-left-circle-fill"></i>
      <span>Home</span>
    </button>
  </a>
<section id="services" class="services">
  <div class="container" data-aos="fade-up">

 
    <div class="section-header">
      <h2>Layanan Kantor Desa xxxxxxxxx</h2>
      <p>Silahkan Pilih Layanan Yang Anda Butuhkan</p>
    </div>

    <div class="row gy-5 jenis">

      <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="200">
        <div class="service-item">
          <!-- <div class="img">
                <img src="assets/img/services-1.jpg" class="img-fluid" alt="">
              </div> -->
          <div class="details position-relative">
            <div class="icon">
              <i class="bi bi-activity"></i>
            </div>
            <a href="javascript:;" onclick="ijin()" class="stretched-link">
              <h3>Nesciunt Mete</h3>
            </a>
            <p>Provident nihil minus qui consequatur non omnis maiores. Eos accusantium minus dolores iure perferendis.</p>
          </div>
        </div>
      </div><!-- End Service Item -->

      <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="300">
        <div class="service-item">
          <!-- <div class="img">
                <img src="assets/img/services-2.jpg" class="img-fluid" alt="">
              </div> -->
          <div class="details position-relative">
            <div class="icon">
              <i class="bi bi-broadcast"></i>
            </div>
            <a href="#" class="stretched-link">
              <h3>Eosle Commodi</h3>
            </a>
            <p>Ut autem aut autem non a. Sint sint sit facilis nam iusto sint. Libero corrupti neque eum hic non ut nesciunt dolorem.</p>
          </div>
        </div>
      </div><!-- End Service Item -->

      <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="400">
        <div class="service-item">
          <!-- <div class="img">
                <img src="assets/img/services-3.jpg" class="img-fluid" alt="">
              </div> -->
          <div class="details position-relative">
            <div class="icon">
              <i class="bi bi-easel"></i>
            </div>
            <a href="#" class="stretched-link">
              <h3>Formulir</h3>
            </a>
            <p>Ut excepturi voluptatem nisi sed. Quidem fuga consequatur. Minus ea aut. Vel qui id voluptas adipisci eos earum corrupti.</p>
          </div>
        </div>
      </div><!-- End Service Item -->
    </div>

  </div>
</section><!-- End Services Section -->