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
  <div class="dashboard-bread dashboard--bread dashboard-bread-2">
    <div class="container-fluid">
      <div class="row align-items-center">
        <div class="col-lg-6">
          <div class="breadcrumb-content">
            <div class="section-heading">
              <h2 class="sec__title font-size-30 text-white">Lokasi</h2>
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
              <div class="d-flex align-items-center justify-content-between">
                <h3 class="title">Daftar Lokasi</h3>
                <a href="" class="theme-btn">Tambah</a>
              </div>
            </div>
            <div class="form-content">
              <div class="table-form table-responsive">
                <table id="pesanan" class="table" style="width:100%">
                  <thead>
                    <tr>
                      <th scope="col">Provinsi</th>
                      <th scope="col">Kabupaten/Kota</th>
                      <th scope="col">Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">Aceh</th>
                      <td>Banda Aceh</td>
                      <td>
                        <div class="table-content">
                          </div>
                          <a href="admin-dashboard-orders-details.html" class="theme-btn bg-warning theme-btn-small mr-2"
                            data-toggle="tooltip" data-placement="top" title="Edit"><i
                              class="la la-pencil"></i></a>
                          <a href="admin-dashboard-orders-details.html" class="theme-btn bg-danger theme-btn-small mr-2"
                            data-toggle="tooltip" data-placement="top" title="Hapus"><i
                              class="la la-trash"></i></a>
                      </td>
                    </tr>
                    <tr>
                      <th scope="row">Aceh</th>
                      <td>Ulim</td>
                      <td>
                        <div class="table-content">
                          </div>
                          <a href="admin-dashboard-orders-details.html" class="theme-btn bg-warning theme-btn-small mr-2"
                            data-toggle="tooltip" data-placement="top" title="Edit"><i
                              class="la la-pencil"></i></a>
                          <a href="admin-dashboard-orders-details.html" class="theme-btn bg-danger theme-btn-small mr-2"
                            data-toggle="tooltip" data-placement="top" title="Hapus"><i
                              class="la la-trash"></i></a>
                      </td>
                    </tr>
                    <tr>
                      <th scope="row">Sumatera Utara</th>
                      <td>Medan</td>
                      <td>
                        <div class="table-content">
                          </div>
                          <a href="admin-dashboard-orders-details.html" class="theme-btn bg-warning theme-btn-small mr-2"
                            data-toggle="tooltip" data-placement="top" title="Edit"><i
                              class="la la-pencil"></i></a>
                          <a href="admin-dashboard-orders-details.html" class="theme-btn bg-danger theme-btn-small mr-2"
                            data-toggle="tooltip" data-placement="top" title="Hapus"><i
                              class="la la-trash"></i></a>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div><!-- end form-box -->
        </div><!-- end col-lg-12 -->
      </div><!-- end row -->

      <!-- ================================
    START FOOTER AREA
================================= -->
      <?php include('../src/admin/footer.php'); ?>

      <script>
        $('#pesanan').DataTable({
          language: {
            url: '../../js/json/dataTables.id.json',
          },
        });
      </script>
      <!-- ================================
   END FOOTER AREA
================================= -->