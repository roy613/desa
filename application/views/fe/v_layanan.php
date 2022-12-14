<style>
  .btn-floating {
    position: fixed;
    right: 18px;
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
      <h2>Layanan Kantor Desa Karangan Hilir</h2>
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
            <i class="bi bi-briefcase"></i>
            </div>
            <a href="#" onclick="kerja()" class="stretched-link">
              <h3>Surat Rekomendasi <br> Kerja</h3>
            </a>
            
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
            <i class="bi bi-bookmark-star"></i>
            </div>
            <a href="#" onclick="proposal()" class="stretched-link">
              <h3>Surat Rekomendasi <br> Proposal</h3>
            </a>
          
          </div>
        </div>
      </div><!-- End Service Item -->

      <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="200">
        <div class="service-item">
          <!-- <div class="img">
                <img src="assets/img/services-1.jpg" class="img-fluid" alt="">
              </div> -->
          <div class="details position-relative">
            <div class="icon">
            <i class="bi bi-box-arrow-in-up-left"></i>
            </div>
            <a href="#" onclick="pkerja()" class="stretched-link">
              <h3>Pengantar Rekom <br> Kerja Ke Kecamatan</h3>
            </a>
            
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
            <i class="bi bi-person-hearts"></i>
            </div>
            <a href="#" onclick="nikah()" class="stretched-link">
              <h3>Surat Pengantar <br> Nikah</h3>
            </a>
            
          </div>
        </div>
      </div><!-- End Service Item -->
      <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="200">
        <div class="service-item">
          <!-- <div class="img">
                <img src="assets/img/services-1.jpg" class="img-fluid" alt="">
              </div> -->
          <div class="details position-relative">
            <div class="icon">
            <i class="bi bi-binoculars-fill"></i>
            </div>
            <a href="#" onclick="hilang()" class="stretched-link">
              <h3>Surat Pengantar <br> Kehilangan</h3>
            </a>
            
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
            <i class="bi bi-check2-square"></i>
            </div>
            <a href="#" onclick="skck()" class="stretched-link">
              <h3>Surat Pengantar <br> SKCK</h3>
            </a>
        
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
            <a href="#" onclick="usaha()" class="stretched-link">
              <h3>Surat Keterangan<br> Usaha</h3>
            </a>
           
          </div>
        </div>
      </div><!-- End Service Item -->
      <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="200">
        <div class="service-item">
          <!-- <div class="img">
                <img src="assets/img/services-1.jpg" class="img-fluid" alt="">
              </div> -->
          <div class="details position-relative">
            <div class="icon">
            <i class="bi bi-geo-alt-fill"></i>
            </div>
            <a href="#" onclick="domisili()" class="stretched-link">
              <h3>Surat Keterangan<br> Domisili</h3>
            </a>
         
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
            <i class="bi bi-geo"></i>
            </div>
            <a href="#" onclick="pindah()" class="stretched-link">
              <h3>Surat Keterangan <br> Pindah Penduduk</h3>
            </a>
           
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
            <i class="bi bi-list-nested"></i>
            </div>
            <a href="#" onclick="kematian()" class="stretched-link">
              <h3>Surat Keterangan <br> Kematian</h3>
            </a>
            
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
              <i class="bi bi-activity"></i>
            </div>
            <a href="#" onclick="kelahiran()" class="stretched-link">
              <h3>Surat Keterangan<br> Kelahiran</h3>
            </a>
            
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
            <i class="bi bi-wallet2"></i>
            </div>
            <a href="#" onclick="tidakmampu()" class="stretched-link">
              <h3>Surat Keterangan<br> Tidak Mampu</h3>
            </a>
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
            <i class="bi bi-file-earmark-arrow-up"></i>
            </div>
            <a href="https://sites.google.com/view/disdukcapilkutaitimur/home" target="_blank" class="stretched-link">
              <h3>Link Layanan <br>Dukcapil Kutim</h3>
            </a>
          </div>
        </div>
      </div><!-- End Service Item -->
    </div>

  </div>
</section><!-- End Services Section -->