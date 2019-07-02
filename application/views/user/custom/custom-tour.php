 <!-- Page Content -->
 <div class="container">

<!-- Page Heading/Breadcrumbs -->
<h1 class="mt-4 mb-3">Make Your Trip
  <small>Now</small>
</h1>

<ol class="breadcrumb">
  <li class="breadcrumb-item">
    <a href="<?= base_url(); ?>">Home</a>
  </li>
  <li class="breadcrumb-item">
    <a href="<?= base_url('custom'); ?>">Custom Tour</a>
  </li>
  <li class="breadcrumb-item active">Booking Now</li>
</ol>

<!-- Intro Content -->
<?= $this->session->flashdata('message'); ?>
<div class="row">
  <div class="col-lg-6">
    <img class="img-fluid rounded mb-4" src="<?= base_url(); ?>assets/img/sin3.jpg" alt="">
  </div>
  <div class="col-lg-6">
    <h2>Trip To Malaysia</h2>
    <div class="row">
        <div class="col-3">
            <p><i class="fas fa-map-marker-alt"></i> Malaysia </p>
        </div>
    </div>

    <b>Kuala Lumpur - Johor Bahru - Penang - Kuching - Langkawi Pulau</b>
    <p>Saat ke Malaysia kita akan mengunjungi Kota Kuala Lumpur yang merupakan Ibu Kota dan Kota terbesar di Malaysia yang berkembang pesat.
      Dilanjut dengan kota Johor Bahru dengan Taman Bermain Legoland yang menyenangkan.
      Kota Penang yang kaya akan kuliner akan kita kunjungi juga,
      Kuching dengan Flora dan Fauna yang langka serta Langkawi Pulau merupakan tempat yang menyenangkan untuk bersantai.</p>

    <!-- form -->
    <div class="row">
        <div class="col">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-info mb-3" data-toggle="modal" data-target=".bd-example-modal-xl"><i class="fas fa-check"></i> Start Planning </button>
        </div>
        <div class="col">
          <p> </p>
        </div>
    </div>
  <!-- / form -->
    
  </div>
</div>
<!-- /.row -->

<!-- Team Members -->
    <div class="row">
      <div class="col-sm-2">
        <p>
          <button class="btn btn-info" type="button" data-toggle="collapse" data-target="#tourLainnya" aria-expanded="false" aria-controls="tourLainnya">
            Other Tour
          </button>
        </p>  
      </div>
      <div class="col-sm-3">
        <p>
          <button class="btn btn-info" type="button" data-toggle="collapse" data-target="#syaratKetentuan" aria-expanded="false" aria-controls="syaratKetentuan">
            Terms and Conditions
          </button>
        </p>    
      </div>
      <div class="col-sm-4">
        <p>
          <button class="btn btn-info" type="button" data-toggle="collapse" data-target="#itinerary" aria-expanded="false" aria-controls="syaratKetentuan">
            Itinerary
          </button>
        </p>    
      </div>
    </div>
 

<!-- itinerary -->
<div class="row">
  <div class="col">
    <div class="collapse" id="itinerary">
      <div class="card card-body">
        <h6 class="text-info"><strong>Itinerary</strong></h6>
        <p>isi disini</p>
      </div>
    </div>
  </div>
</div>
<!-- akhir itinerary -->

<!-- syarat dan ketentuan -->
<div class="row">
  <div class="col">
    <div class="collapse" id="syaratKetentuan">
      <div class="card card-body">
      <h6 class="text-info"><strong>Terms and Conditions</strong></h6>
        <p>isi disini</p>
      </div>
    </div>
  </div>
</div>
<!-- akhir syarat dan ketentuan -->

<!-- tour lainnya -->
<div class="row collapse" id="tourLainnya">
      <div class="col-lg-4 col-sm-6 portfolio-item" >
        <div class="card h-100">
          <a href="#"><img class="card-img-top" src="<?= base_url(); ?>assets/img/kl.jpg" alt=""></a>
          <div class="card-body">
            <h4 class="card-title">
              <a href="#" class="text-info">Trip To Kuala Lumpur 4D3N</a>
            </h4>
            <p class="card-text">Penjelasan</p>
          </div>
          <div class="card-footer">
              <a href="#" class="btn btn-info">View Detail</a>
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
            <p class="card-text">Penjelasan</p>
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
                <a href="#" class="text-info">Trip To Bangkok 5D4N</a>
              </h4>
              <p class="card-text">Penjelasan</p>
            </div>
            <div class="card-footer">
                <a href="#" class="btn btn-info">View Detail</a>
              </div>
          </div>
      </div>     
</div>
<!-- /.row -->



</div>
<!-- /.container -->


<!-- Modal -->
<div class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-info" id="exampleModalLabel"><i class="far fa-check-circle"></i>Checkout</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      
        <!-- form -->
        <form name="formpesanan" method="post" action="<?= base_url(); ?>pesanan/checkout/pesan">
        
            <div class="row">
                <!-- col 1 -->
                <div class="col-8">
                    <!-- detail Pemesanan -->
                    <div class="row">
                        <div class="col">
                            <h6><strong class="text-info">1. Data Diri</strong></h6>
                        </div>
                    </div>
                    <div class="row">
                    <div class="col-3">
                    <div class="form-group">
                            <label for="formGroupExampleInput"><b>ID Negara</b></label>
                              <input type="number" min="0" class="form-control" id="formGroupExampleInput" placeholder="M0124" name="id_negara" readonly>
                          </div>  
                      </div> 
                      <div class="col-3">
                    <div class="form-group">
                            <label for="formGroupExampleInput"><b>Negara</b></label>
                              <input type="number" min="0" class="form-control" id="formGroupExampleInput" placeholder="Malaysia" name="nm_negara" readonly>
                          </div>  
                      </div> 
                      <div class="col">   
                          <div class="form-group">
                            <label for="formGroupExampleInput"><b>Jumlah Peserta</b></label>
                              <input type="number" min="1" class="form-control" id="formGroupExampleInput" placeholder="" name="jml_peserta">
                          </div>            
                        </div>
                      </div>
                      <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="formGroupExampleInput"><b>Tanggal Berangkat</b></label>
                                <input type="date" class="form-control" id="formGroupExampleInput" placeholder="DD/MM/YY" name="tgl_berangkat">
                            </div>            
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="formGroupExampleInput"><b>Tanggal Pulang</b></label>
                                <input type="date" class="form-control" id="formGroupExampleInput" placeholder="DD/MM/YY" name="tgl_pulang">
                            </div>            
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">       
                            <div class="form-group">
                                <label for="exampleFormControlInput1"><b>Nama Lengkap</b></label>
                                <input type="text" class="form-control" id="FullName" placeholder="" name="nm_lengkap">
                            </div>
                        </div>
                    </div>
					<div class="row">
					  <div class="col">
						<div class="form-group">
                            <label for="exampleFormControlInput1"><b>Nomor KTP</b></label>
                            <input min="1" class="form-control" id="NoKTP" placeholder="" name="no_ktp">
                        </div>
					  </div>
					  <div class="col">
						<div class="form-group">
                            <label for="exampleFormControlInput1"><b>Nomor Paspor</b></label>
                            <input min="1" class="form-control" id="PassportCardNumber" placeholder="" name="no_paspor">
                        </div>
					  </div>
					</div>
                    <div class="row">
						<div class="col">  
                            <div class="form-group">
                                <label for="exampleFormControlSelect1"><b>Jenis Kelamin</b></label>
                                <select class="form-control" id="Gender" name="jns_kelamin">
                                    <option selected hidden disabled>Pilih salah satu</option>
                                    <option value="P">Perempuan</option>
                                    <option value="L">Laki-laki</option>
                                </select>
                            </div>
						</div>
                        <div class="col">
                            <div class="form-group">
                                <label for="exampleFormControlInput1"><b>Nomor Telepon</b></label>
                                <input type="char_from_digit" min="0" class="form-control" id="PhoneNumber" placeholder="" name="no_telepon">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="exampleFormControlInput1"><b>Alamat Email</b></label>
                                <input type="email" class="form-control" id="EmailAddress" placeholder="" name="almt_email">
                            </div>
                        </div>
                    </div>
                    <!-- akhir detail pemesanan -->
                    <hr>
                    <!-- detail tamu -->
                    <div class="row">
                        <div class="col">
                            <h6><strong class="text-info">2. Detail Trip</strong></h6>
                        </div>
                    </div>
					<div class="form-group">
                        <label for="exampleFormControlSelect1"><b>Pesawat Terbang</b></label>
                                <select class="form-control" id="AirPlane" name="pswt_terbang">
                                    <option selected hidden disabled>Pilih salah satu</option>
                                    <option value="1">Lion Air</option>
                                    <option value="2">Garuda</option>
                                    <option value="3">Batik Air</option>
                                </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1"><b>Hotel</b></label>
                                <select class="form-control" id="Hotel" name="hotel">
                                    <option selected hidden disabled>Pilih salah satu</option>
                                    <option value="1">Bintang 2 - Hotel A</option>
                                    <option value="2">Bintang 4 - Hotel B</option>
                                    <option value="3">Bintang 5 - Hotel C</option>
                                </select>
                    </div>
                    <!-- akhir detail tamu -->

                </div>
                <!-- col 2 -->
                <div class="col">
                    <div class="row">
                        <div class="col">
                            <h6><strong class="text-info">Detail Tour</strong></h6>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <img class="img-fluid rounded mb-4" src="<?= base_url(); ?>assets/img/sin3.jpg" alt="">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <h6><strong class="text-info">Trip To Malaysia</strong></h6>
                        </div>
                    </div>
                    <div class="row text-info">
                        <div class="col">
                            <p><i class="fas fa-map-marker-alt"></i> Malaysia</p>
                        </div>
                        <div class="col">
                            <p><i class="far fa-clock"></i> Berapa lama .. ditulis disini </p>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col">
                            <p><strong>Tanggal Berangkat</strong></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <p><strong>Tanggal Pulang</strong></p>
                        </div>                        
                    </div>
                    <div class="row mb-3">
                        <div class="col">
                            <p><strong>Harga</strong></p>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col">
                            <p><strong>Total</strong> Rp.</p>
                        </div>
                    </div>
                    
                </div>
                <!-- akhir col 2 -->
            </div>
            <div class="modal-footer">
        <button type="submit" class="btn btn-info"><i class="fas fa-check" ></i> Booking Now </button>
      </div>
        </form>
      </div>
    </div>
  </div>
</div>