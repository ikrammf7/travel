<!-- ================================
    START NAVBAR AREA
================================= -->
<?php include('../src/admin/navbar.php'); ?>
<!-- ================================
    END NAVBAR AREA
================================= -->

<!-- ================================
    START SIDEBAR AREA
================================= -->
<?php include('../src/admin/sidebar.php'); ?>
<!-- ================================
    END SIDEBAR AREA
================================= -->

<!-- ================================
    START DASHBOARD AREA
================================= -->
<div class="dashboard-content-wrap">
  <div class="dashboard-bread dashboard-bread-2">
    <div class="container-fluid">
      <div class="row align-items-center">
        <div class="col-lg-6">
          <div class="breadcrumb-content">
            <div class="section-heading">
              <h2 class="sec__title font-size-30 text-white">
                Dashboard
              </h2>
            </div>
          </div>
          <!-- end breadcrumb-content -->
        </div>
        <!-- end col-lg-6 -->
      </div>
      <!-- end row -->
      <div class="row mt-4">
        <div class="col-lg-3 responsive-column-l">
          <div class="icon-box icon-layout-2 dashboard-icon-box pb-0">
            <div class="d-flex pb-3 justify-content-between">
              <div class="info-content">
                <p class="info__desc">Pesanan Hari Ini</p>
                <h4 class="info__title">55</h4>
              </div>
              <!-- end info-content -->
              <div class="info-icon icon-element bg-4">
                <i class="la la-shopping-cart"></i>
              </div>
              <!-- end info-icon-->
            </div>
            <div class="section-block"></div>
            <a href="admin-dashboard-booking.html"
              class="d-flex align-items-center justify-content-between view-all">Lihat Semua <i
                class="la la-angle-right"></i></a>
          </div>
        </div>
        <!-- end col-lg-3 -->
        <div class="col-lg-3 responsive-column-l">
          <div class="icon-box icon-layout-2 dashboard-icon-box pb-0">
            <div class="d-flex pb-3 justify-content-between">
              <div class="info-content">
                <p class="info__desc">Pendapatan Hari Ini</p>
                <h4 class="info__title">Rp. 4.220.000</h4>
              </div>
              <!-- end info-content -->
              <div class="info-icon icon-element bg-3">
                <i class="la la-money"></i>
              </div>
              <!-- end info-icon-->
            </div>
            <div class="section-block"></div>
            <a href="admin-dashboard-reviews.html"
              class="d-flex align-items-center justify-content-between view-all">Lihat Semua <i
                class="la la-angle-right"></i></a>
          </div>
        </div>
        <!-- end col-lg-3 -->
        <div class="col-lg-3 responsive-column-l">
          <div class="icon-box icon-layout-2 dashboard-icon-box pb-0">
            <div class="d-flex pb-3 justify-content-between">
              <div class="info-content">
                <p class="info__desc">Total Mitra</p>
                <h4 class="info__title">27</h4>
              </div>
              <!-- end info-content -->
              <div class="info-icon icon-element bg-2">
                <i class="la la-handshake"></i>
              </div>
              <!-- end info-icon-->
            </div>
            <div class="section-block"></div>
            <a href="admin-dashboard-subscribers.html"
              class="d-flex align-items-center justify-content-between view-all">Lihat Semua<i
                class="la la-angle-right"></i></a>
          </div>
        </div>
        <!-- end col-lg-3 -->
        <div class="col-lg-3 responsive-column-l">
          <div class="icon-box icon-layout-2 dashboard-icon-box pb-0">
            <div class="d-flex pb-3 justify-content-between">
              <div class="info-content">
                <p class="info__desc">Total Pelanggan</p>
                <h4 class="info__title">25</h4>
              </div>
              <!-- end info-content -->
              <div class="info-icon icon-element bg-1">
                <i class="la la-user"></i>
              </div>
              <!-- end info-icon-->
            </div>
            <div class="section-block"></div>
            <a href="admin-dashboard-wishlist.html"
              class="d-flex align-items-center justify-content-between view-all">Lihat Semua<i
                class="la la-angle-right"></i></a>
          </div>
        </div>
        <!-- end col-lg-3 -->
      </div>
      <!-- end row -->
    </div>
  </div>
  <!-- end dashboard-bread -->
  <div class="dashboard-main-content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-6 responsive-column--m">
          <div class="form-box">
            <div class="form-title-wrap">
              <div class="d-flex align-items-center justify-content-between">
                <ul class="chart-pagination d-flex">
                  <li>
                    <a href="#" class="theme-btn theme-btn-small mr-2">Hari</a>
                  </li>
                  <li>
                    <a href="#" class="theme-btn theme-btn-small theme-btn-transparent mr-2">Minggu</a>
                  </li>
                  <li>
                    <a href="#" class="theme-btn theme-btn-small theme-btn-transparent">Tahun</a>
                  </li>
                </ul>
                <div class="select-contain">
                  <select class="select-contain-select">
                    <option value="January">January</option>
                    <option value="February">February</option>
                    <option value="March">March</option>
                    <option value="April">April</option>
                    <option value="May">May</option>
                    <option value="June">June</option>
                    <option value="July">July</option>
                    <option value="August">August</option>
                    <option value="September">September</option>
                    <option value="October">October</option>
                    <option value="November">November</option>
                    <option value="December">December</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="form-content">
              <canvas id="line-chart"></canvas>
            </div>
          </div>
          <!-- end form-box -->
        </div>
        <!-- end col-lg-7-->
        <div class="col-lg-6 responsive-column--m">
          <div class="form-box dashboard-card">
            <div class="form-title-wrap">
              <h3 class="title">Total Pesanan</h3>
            </div>
            <div class="form-content">
              <canvas id="bar-chart"></canvas>
            </div>
          </div>
          <!-- end form-box -->
        </div>
        <!-- end col-lg-5 -->
      </div>
      <!-- end row -->

      <!-- ================================
    START SIDEBAR AREA
================================= -->
      <?php include('../src/admin/footer.php'); ?>
      <!-- ================================
   END SIDEBAR AREA
================================= -->