<!-- ================================
    START NAVBAR AREA
================================= -->
<?php include('../../views/src/admin/navbar.php'); ?>
<!-- ================================
    END NAVBAR AREA
================================= -->

<!-- ================================
    START SIDEBAR AREA
================================= -->
<?php include('../../views/src/admin/sidebar.php'); ?>
<!-- ================================
    END SIDEBAR AREA
================================= -->

<!-- ================================
    START DASHBOARD AREA
================================= -->

<div class="dashboard-content-wrap">
  <div class="dashboard-bread dashboard--bread dashboard-bread-2">
    <div class="container-fluid">
      <div class="row align-items-center">
        <div class="col-lg-6">
          <div class="breadcrumb-content">
            <div class="section-heading">
              <h2 class="sec__title font-size-30 text-white">Profil</h2>
            </div>
          </div><!-- end breadcrumb-content -->
        </div><!-- end col-lg-6 -->
      </div><!-- end row -->
    </div>
  </div><!-- end dashboard-bread -->
  <div class="dashboard-main-content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12">
          <div class="form-box">
            <div class="form-title-wrap">
              <h3 class="title">Setelan Profil</h3>
            </div>
            <div class="form-content">
              <div class="user-profile-action d-flex align-items-center pb-4">
                <div class="user-pro-img">
                  <img src="../../images/team1.jpg" alt="user-image">
                </div>
                <div class="upload-btn-box">
                  <div class="file-upload-wrap file-upload-wrap-2">
                    <input type="file" name="files[]"
                      class="multi file-upload-input with-preview MultiFile-applied MultiFile" maxlength="1"
                      id="MultiFile1_F1" value="">
                    <span class="file-upload-text"><i class="la la-upload mr-2"></i>Unggah Gambar</span>
                  </div>
                </div>
              </div>
              <div class="contact-form-action">
                <form action="#">
                  <div class="row">
                    <div class="col-lg-6 responsive-column">
                      <div class="input-box">
                        <label class="label-text">Nama Website</label>
                        <div class="form-group">
                          <span class="la la-globe form-icon"></span>
                          <input class="form-control" type="text" value="" placeholder="Nama Website">
                        </div>
                      </div>
                    </div><!-- end col-lg-6 -->
                    <div class="col-lg-6 responsive-column">
                      <div class="input-box">
                        <label class="label-text">Alamat Email</label>
                        <div class="form-group">
                          <span class="la la-envelope form-icon"></span>
                          <input class="form-control" type="text" value="" placeholder="Alamat Email">
                        </div>
                      </div>
                    </div><!-- end col-lg-6 -->
                    <div class="col-lg-6 responsive-column">
                      <div class="input-box">
                        <label class="label-text">Telepon</label>
                        <div class="form-group">
                          <span class="la la-phone form-icon"></span>
                          <input class="form-control" type="text" value="" placeholder="Telepon">
                        </div>
                      </div>
                    </div><!-- end col-lg-6 -->
                    <div class="col-lg-6 responsive-column">
                      <div class="input-box">
                        <label class="label-text">Alamat</label>
                        <div class="form-group">
                          <span class="la la-map form-icon"></span>
                          <input class="form-control" type="text" value="" placeholder="Alamat">
                        </div>
                      </div>
                    </div><!-- end col-lg-6 -->
                    <div class="col-lg-12">
                      <div class="btn-box">
                        <button class="theme-btn" type="button">Simpan</button>
                      </div>
                    </div><!-- end col-lg-12 -->
                  </div><!-- end row -->
                </form>
              </div>
            </div>
          </div><!-- end form-box -->
        </div><!-- end col-lg-6 -->
        <div class="col-lg-12">
          <div class="form-box">
            <div class="form-title-wrap">
              <h3 class="title">Ganti Email</h3>
            </div>
            <div class="form-content">
              <div class="contact-form-action">
                <form action="#">
                  <div class="row">
                    <div class="col-lg-12 responsive-column">
                      <div class="input-box">
                        <label class="label-text">Email</label>
                        <div class="form-group">
                          <span class="la la-envelope form-icon"></span>
                          <input class="form-control" type="text" placeholder="Email">
                        </div>
                      </div>
                    </div><!-- end col-lg-12 -->
                    <div class="col-lg-12 responsive-column">
                      <div class="input-box">
                        <label class="label-text">Email Baru</label>
                        <div class="form-group">
                          <span class="la la-envelope form-icon"></span>
                          <input class="form-control" type="text" placeholder="Email Baru">
                        </div>
                      </div>
                    </div><!-- end col-lg-12 -->
                    <div class="col-lg-12">
                      <div class="btn-box">
                        <button class="theme-btn" type="button">Simpan</button>
                      </div>
                    </div><!-- end col-lg-12 -->
                  </div><!-- end row -->
                </form>
              </div>
            </div>
          </div><!-- end form-box -->
        </div><!-- end col-lg-6 -->
        <div class="col-lg-12">
          <div class="form-box">
            <div class="form-title-wrap">
              <h3 class="title">Ganti Kata Sandi</h3>
            </div>
            <div class="form-content">
              <div class="contact-form-action">
                <form action="#">
                  <div class="row">
                    <div class="col-lg-6 responsive-column">
                      <div class="input-box">
                        <label class="label-text">Kata Sandi</label>
                        <div class="form-group">
                          <span class="la la-lock form-icon"></span>
                          <input class="form-control" type="text" placeholder="Kata Sandi">
                        </div>
                      </div>
                    </div><!-- end col-lg-6 -->
                    <div class="col-lg-6 responsive-column">
                      <div class="input-box">
                        <label class="label-text">Kata Sandi Baru</label>
                        <div class="form-group">
                          <span class="la la-lock form-icon"></span>
                          <input class="form-control" type="text" placeholder="Kata Sandi Baru">
                        </div>
                      </div>
                    </div><!-- end col-lg-6 -->
                    <div class="col-lg-12">
                      <div class="btn-box">
                        <button class="theme-btn" type="button">Simpan</button>
                      </div>
                    </div><!-- end col-lg-12 -->
                  </div><!-- end row -->
                </form>
              </div>
            </div>
          </div><!-- end form-box -->
        </div><!-- end col-lg-6 -->
        <div class="col-lg-12">
          <div class="form-box">
            <div class="form-title-wrap">
              <h3 class="title">Rekening Bank</h3>
            </div>
            <div class="form-content">
              <div class="contact-form-action">
                <form method="post">
                  <div class="row">
                    <div class="col-lg-12 col-sm-12">
                      <div class="input-box">
                        <label class="label-text">Nama Bank</label>
                        <div class="form-group">
                          <select class="form-select col-12" id="bank" data-placeholder="Pilih Bank"
                            name="state">
                            <option value=""></option>
                            <option value="AL">Bank Aceh</option>
                            <option value="AL">Bank Syariah Indonesia - BSI</option>
                            <option value="AL">Bank Rakyat Indonesia - BRI</option>
                            <option value="AL">Bank Negara Indonesia - BNI</option>
                            <option value="WY">CIMB Niaga</option>
                          </select>
                        </div>
                      </div>
                    </div><!-- end col-lg-4 -->
                    <div class="col-lg-12 col-sm-12">
                      <div class="input-box">
                        <label class="label-text">Nama Rekening</label>
                        <div class="form-group">
                          <span class="la la-pencil form-icon"></span>
                          <input class="form-control" type="text" name="text" value="" placeholder="Nama Rekening">
                        </div>
                      </div>
                    </div><!-- end col-lg-4 -->
                    <div class="col-lg-12 col-sm-12">
                      <div class="input-box">
                        <label class="label-text">Nomor Rekening</label>
                        <div class="form-group">
                          <span class="la la-pencil form-icon"></span>
                          <input class="form-control" type="text" name="text" value="" placeholder="Nomor Rekening">
                        </div>
                      </div>
                    </div><!-- end col-lg-6 -->
                    <div class="col-lg-12">
                      <div class="btn-box">
                        <button class="theme-btn" type="submit">Simpan</button>
                      </div>
                    </div><!-- end col-lg-12 -->
                  </div><!-- end row -->
                </form>
              </div>
            </div>
          </div><!-- end form-box -->
        </div><!-- end col-lg-6 -->
      </div><!-- end row -->

      <!-- ================================
    START SIDEBAR AREA
================================= -->
      <?php include('../../views/src/admin/footer.php'); ?>

      <script>
        $('#bank').select2({
          theme: "bootstrap-5",
          width: "100%",
          placeholder: $(this).data('placeholder'),
        });
      </script>
      <!-- ================================
   END SIDEBAR AREA
================================= -->