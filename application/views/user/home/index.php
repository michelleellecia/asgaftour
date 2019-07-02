<header>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <!-- Slide One - Set the background image for this slide in the line below -->
        <div class="carousel-item active" style="background-image: url('<?= base_url(); ?>assets/img/london.jpg')">
          <div class="carousel-caption d-none d-md-block">
          </div>
        </div>
        <!-- Slide Two - Set the background image for this slide in the line below -->
        <div class="carousel-item" style="background-image: url('<?= base_url(); ?>assets/img/kl.jpg')">
          <div class="carousel-caption d-none d-md-block">
          </div>
        </div>
        <!-- Slide Three - Set the background image for this slide in the line below -->
        <div class="carousel-item" style="background-image: url('<?= base_url(); ?>assets/img/sin.jpg')">
          <div class="carousel-caption d-none d-md-block">
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </header>

  <!-- Pencarian -->
<section class="color">
    <div class="container">
        <div class="row">
            <div class="col">
              <br>
                <h2> <img src="img/search.png" alt="" style="width: 20px;"><i class="fas fa-fw fa-search"></i> Look for your dream tour </h2>
                <hr style="background-color:#ffffff;">
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-sm text-center">
                <div class="form-group">
                    <h5>Search Category</h5>
                    <select class="form-control">
                    <option>All Category</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                    </select>
                </div>
            </div>
            <div class="col-sm text-center">                
                <div class="form-group">
                    <h5>Search Destination</h5>
                    <select class="form-control">
                    <option>All Destination</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                    </select>
                </div>
            </div>
            <div class="col-sm text-center">
                <div class="form-group">
                    <h5>Search Duration</h5>
                    <select class="form-control">
                    <option>All Duration</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                    </select>
                </div>
            </div>
            <div class="col-sm text-center">
                <div class="form-group">
                  <br>
                    <button type="button" class="btn btn-warning"><i class="fas fa-fw fa-search"></i> Search </button>
                </div>
            </div>
        </div>
        <br>
    </div>
</section>

<!-- Deskripsi -->
<section class="deskripsi">
    <div class="container">
        <div class="row mt-5  text-center">
            <div class="col-sm">
                <img src="<?= base_url(); ?>assets/img/koper.png" alt="">
                <h2 class="mt-3"><b>Profesional & Terpercaya</b></h2>
                <p>Pelayanan yang baik dan profesional terhadap customer dari Tim Kelana Tour </p>
            </div>
            <div class="col-sm">
                <img src="<?= base_url(); ?>assets/img/paspor.png" alt="">
                <h2 class="mt-3"><b>Berbagai Tujuan Wisata</b></h2>
                <p>Berbagai tujuan wisata terbaik dan terpopuler di Jawa Timur dan Bali tersedia disini</p>
            </div>
            <div class="col-sm">
                <img src="<?= base_url(); ?>assets/img/uang.png" alt="">
                <h2 class="mt-3"><b>Harga Bersahabat</b></h2>
                <p>Harga yang bersahabat dan transparan memudahkan anda untuk melakukan transaksi</p>
            </div>
            <div class="col-sm">
                <img src="<?= base_url(); ?>assets/img/pohon.png" alt="">
                <h2 class="mt-3"><b>Dokumentasi Premium</b></h2>
                <p>Kami memberikan Dokumentasi Premium dari para fotografer lokal agar perjalanan anda lebih berkesan</p>
            </div>
        </div>
    </div>
</section>

  <!-- Page Content -->
<div class="container">

    <h1 class="my-4 text-info"><strong>Tour Package</strong></h1>
  
    <div class="row">
      <div class="col-lg-4 col-sm-6 portfolio-item">
        <div class="card h-100">
          <a href="#"><img class="card-img-top" src="<?= base_url(); ?>assets/img/sin74.jpg" alt=""></a>
          <div class="card-body">
            <h4 class="card-title">
              <a href="#" class="text-info"><b>Trip To Singapore</b><br>3 Days 2 Night</br></a>
            </h4>
			<h8> A Moving Experience At Every Turn </h8>
            <!--<p class="card-text">Itinerary hari 1 

                    Makan Siang di Bugis Street
                    Window shopping di Bugis Street dan mall Bugis Junction
                    Sholat di Masjid Sultan
                    Foto Foto di Merlion Park, foto bersama patung Merlion
                    Jalan-jalan di Helix bridge (dekat Marina Bay Sands)
                    Malam harinya ke Marina Bay Sands mall untuk lihat air mancur Spectra spectacular.</p>-->
          </div>  
          <div class="card-footer">
            <a href="<?= base_url('tour/singapore'); ?>" class="btn btn-info">View Detail</a>
          </div>          
        </div>
      </div>
      <div class="col-lg-4 col-sm-6 portfolio-item">
        <div class="card h-100">
          <a href="#"><img class="card-img-top" src="<?= base_url(); ?>assets/img/bkk4.jpg" alt=""></a>
          <div class="card-body">
            <h4 class="card-title">
              <a href="#" class="text-info"><b>Trip To Bangkok</b><br>3 Days 2 Night</br></a>
            </h4>
			<h8> A Moving Experience At Every Turn </h8>
            <!--<p class="card-text">Itinerary Hari 1

              Pergi melihat Chinese Garden.
              Makan siang di Wat Arum
              Explore Wat Arum
              City Tour Bangkok.</p>-->
          </div>
          <div class="card-footer">
              <a href="#" class="btn btn-info">View Detail</a>
            </div>   
        </div>
      </div>
      <div class="col-lg-4 col-sm-6 portfolio-item">
        <div class="card h-100">
          <a href="#"><img class="card-img-top" src="<?= base_url(); ?>assets/img/sin3.jpg" alt=""></a>
          <div class="card-body">
            <h4 class="card-title">
              <a href="#" class="text-info"><b>Trip To Singapore</b><br>4 Days 3 Night</br></a>
            </h4>
			<h8> A Moving Experience At Every Turn </h8>
            <!--<p class="card-text">Itinerary hari 1 

              Berbelanja di Chinatown
              Pergi ke temple Buddha Tooth Relic Museum
              Sholat di masjid Chulia di jalan Mosque
              Pergi Ke Mustafa Center</p>-->
          </div>
          <div class="card-footer">
              <a href="<?= base_url('tour/singapore'); ?>" class="btn btn-info">View Detail</a>
            </div>
        </div>
      </div>
      <div class="col-lg-4 col-sm-6 portfolio-item">
        <div class="card h-100">
          <a href="#"><img class="card-img-top" src="<?= base_url(); ?>assets/img/kl.jpg" alt=""></a>
          <div class="card-body">
            <h4 class="card-title">
              <a href="#" class="text-info"><b>Trip To Kuala Lumpur</b><br>4 Days 3 Night</br></a>
            </h4>
			<h8> A Moving Experience At Every Turn </h8>
            <!--<p class="card-text">Itinerary hari 1 
              Twin Tower
              Dataran Merdeka
              Istana Negara
              Pindah ke Malaka
            </p>-->
          </div>
          <div class="card-footer">
              <a href="#" class="btn btn-info">Views Detail</a>
            </div>
        </div>
      </div>
      <div class="col-lg-4 col-sm-6 portfolio-item">
        <div class="card h-100">
          <a href="#"><img class="card-img-top" src="<?= base_url(); ?>assets/img/sin2.jpg" alt=""></a>
          <div class="card-body">
            <h4 class="card-title">
              <a href="#" class="text-info">Backpacking To Singapore</a>
            </h4>
			<h8> A Moving Experience At Every Turn </h8>
            <!--<p class="card-text">Itinerary hari 1 

              Makan Siang di Bugis Street
              Window shopping di Bugis Street dan mall Bugis Junction
              Sholat di Masjid Sultan
              Foto Foto di Merlion Park, foto bersama patung Merlion
              Jalan-jalan di Helix bridge (dekat Marina Bay Sands)
              Malam harinya ke Marina Bay Sands mall untuk lihat air mancur Spectra spectacular.</p>-->
          </div>
          <div class="card-footer">
              <a href="#" class="btn btn-info">View Detail</a>
            </div>
        </div>
      </div>
      
      <div class="col-lg-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <a href="#"><img class="card-img-top" src="<?= base_url(); ?>assets/img/bkk3.jpg" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="#" class="text-info"><b>Trip To Bangkok</b><br>5 Days 4 Night</br></a>
              </h4>
			  <h8> A Moving Experience At Every Turn </h8>
              <!--<p class="card-text">Pergi melihat Chinese Garden.
              Makan siang di Wat Arum
              Explore Wat Arum
              City Tour Bangkok.</p>-->
            </div>
            <div class="card-footer">
                <a href="#" class="btn btn-info">View Detail</a>
              </div>
          </div>
        </div>



    <!-- /.row -->

    <!-- Features Section -->
	<h2 class="my-4 text-info"><strong>Info and Article</strong></h2>
    <div class="row">
      <div class="col-lg-3">
        <p>Baca juga informasi menarik, tips & trik seputar traveling berikut ini !!! </p>
        <ul class="text-info">
          <li><a href="" class="text-info">Tips sebelum pergi ke Gunung Bromo</a></li>
          <li><a href="" class="text-info">Sunrise Point terbaik di Gunung Bromo</a></li>          
        </ul>
      </div>
      <div class="col-lg-3">
        <img class="img-fluid rounded" src="<?= base_url(); ?>assets/img/india.jpg" alt="">
      </div>
	  	  <div class="col-lg-3">
        <p>Baca juga informasi menarik, tips & trik seputar traveling berikut ini !!! </p>
        <ul class="text-info">
          <li><a href="" class="text-info">Tips sebelum pergi ke Gunung Bromo</a></li>
          <li><a href="" class="text-info">Sunrise Point terbaik di Gunung Bromo</a></li>          
        </ul>
      </div>
      <div class="col-lg-3">
        <img class="img-fluid rounded" src="<?= base_url(); ?>assets/img/india.jpg" alt="">
      </div>
	</div>
	<div class="row">
	  <div class="col-lg-3">
        <p>Baca juga informasi menarik, tips & trik seputar traveling berikut ini !!! </p>
        <ul class="text-info">
          <li><a href="" class="text-info">Tips sebelum pergi ke Gunung Bromo</a></li>
          <li><a href="" class="text-info">Sunrise Point terbaik di Gunung Bromo</a></li>          
        </ul>
      </div>
      <div class="col-lg-3">
        <img class="img-fluid rounded" src="<?= base_url(); ?>assets/img/india.jpg" alt="">
      </div>
	  	  <div class="col-lg-3">
        <p>Baca juga informasi menarik, tips & trik seputar traveling berikut ini !!! </p>
        <ul class="text-info">
          <li><a href="" class="text-info">Tips sebelum pergi ke Gunung Bromo</a></li>
          <li><a href="" class="text-info">Sunrise Point terbaik di Gunung Bromo</a></li>          
        </ul>
      </div>
      <div class="col-lg-3">
        <img class="img-fluid rounded" src="<?= base_url(); ?>assets/img/india.jpg" alt="">
      </div>
    </div>
    <!-- /.row -->

    <hr>

    <!-- Call to Action Section -->
    

  </div>
</div>
<!-- /.container -->