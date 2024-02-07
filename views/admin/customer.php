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
              <h2 class="sec__title font-size-30 text-white">Pelanggan</h2>
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
                <h3 class="title">Daftar Pelanggan</h3>
                <a href="" class="theme-btn">Tambah</a>
              </div>
            </div>
            <div class="form-content">
              <div class="table-form table-responsive">
                <table id="pesanan" class="table" style="width:100%">
                  <thead>
                    <tr>
                      <th scope="col">Email Pelanggan</th>
                      <th scope="col">Nama Pelanggan</th>
                      <th scope="col">Telepon</th>
                      <th scope="col">Tanggal Lahir</th>
                      <th scope="col">Alamat</th>
                      <th scope="col">Tanggal Daftar</th>
                      <th scope="col">Status</th>
                      <th scope="col">Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">khairul@gmail.com</th>
                      <td>
                        <div class="table-content">
                          <h3 class="title">Kairul</h3>
                        </div>
                      </td>
                      <td>082341415165</td>
                      <td>12 Januari 1991</td>
                      <td>Lampriet, Banda Aceh</td>
                      <td>07 Februari 2024</td>
                      <td><span class="badge badge-success py-1 px-2">Aktif</span></td>
                      <td>
                        <div class="table-content">
                          <a href="admin-dashboard-orders-details.html" class="theme-btn theme-btn-small mr-2"
                            data-toggle="tooltip" data-placement="top" title="View details"><i
                              class="la la-eye"></i></a>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <th scope="row">khairul@gmail.com</th>
                      <td>
                        <div class="table-content">
                          <h3 class="title">Kairul</h3>
                        </div>
                      </td>
                      <td>082341415165</td>
                      <td>12 Januari 1991</td>
                      <td>Lampriet, Banda Aceh</td>
                      <td>07 Februari 2024</td>
                      <td><span class="badge badge-info py-1 px-2">Ditahan</span></td>
                      <td>
                        <div class="table-content">
                          <a href="admin-dashboard-orders-details.html" class="theme-btn theme-btn-small mr-2"
                            data-toggle="tooltip" data-placement="top" title="View details"><i
                              class="la la-eye"></i></a>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <th scope="row">khairul@gmail.com</th>
                      <td>
                        <div class="table-content">
                          <h3 class="title">Kairul</h3>
                        </div>
                      </td>
                      <td>082341415165</td>
                      <td>12 Januari 1991</td>
                      <td>Lampriet, Banda Aceh</td>
                      <td>07 Februari 2024</td>
                      <td><span class="badge badge-warning text-white py-1 px-2">Ditunda</span></td>
                      <td>
                        <div class="table-content">
                          <a href="admin-dashboard-orders-details.html" class="theme-btn theme-btn-small mr-2"
                            data-toggle="tooltip" data-placement="top" title="View details"><i
                              class="la la-eye"></i></a>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <th scope="row">khairul@gmail.com</th>
                      <td>
                        <div class="table-content">
                          <h3 class="title">Kairul</h3>
                        </div>
                      </td>
                      <td>082341415165</td>
                      <td>12 Januari 1991</td>
                      <td>Lampriet, Banda Aceh</td>
                      <td>07 Februari 2024</td>
                      <td><span class="badge badge-danger py-1 px-2">Ditolak</span></td>
                      <td>
                        <div class="table-content">
                          <a href="admin-dashboard-orders-details.html" class="theme-btn theme-btn-small mr-2"
                            data-toggle="tooltip" data-placement="top" title="View details"><i
                              class="la la-eye"></i></a>
                        </div>
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