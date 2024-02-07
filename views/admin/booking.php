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
              <h2 class="sec__title font-size-30 text-white">Pesanan</h2>
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
                <div>
                  <h3 class="title">Daftar Pesanan</h3>
                </div>
              </div>
            </div>
            <div class="form-content">
              <div class="table-form table-responsive">
                <table id="pesanan" class="table" style="width:100%">
                  <thead>
                    <tr>
                      <th scope="col">Email Pelanggan</th>
                      <th scope="col">No Pesanan</th>
                      <th scope="col">Nama Pelanggan</th>
                      <th scope="col">Rute</th>
                      <th scope="col">Shuttle</th>
                      <th scope="col">Biaya</th>
                      <th scope="col">Metode Pembayaran</th>
                      <th scope="col">Status</th>
                      <th scope="col">Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">khairul@gmail.com</th>
                      <td>
                        <div class="table-content">
                          <h3 class="title">OID0702240001</h3>
                        </div>
                      </td>
                      <td>Khairul</td>
                      <td>Banda Aceh - Ulim</td>
                      <td>PT. Putra Sejahtera Abadi</td>
                      <td>Rp. 181.000</td>
                      <td>BSI</td>
                      <td><span class="badge badge-success py-1 px-2">Selesai</span></td>
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
                          <h3 class="title">OID0702240002</h3>
                        </div>
                      </td>
                      <td>Khairul</td>
                      <td>Banda Aceh - Ulim</td>
                      <td>PT. Putra Sejahtera Abadi</td>
                      <td>Rp. 181.000</td>
                      <td>BSI</td>
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
                          <h3 class="title">OID0702240003</h3>
                        </div>
                      </td>
                      <td>Khairul</td>
                      <td>Banda Aceh - Ulim</td>
                      <td>PT. Putra Sejahtera Abadi</td>
                      <td>Rp. 181.000</td>
                      <td>BSI</td>
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
                          <h3 class="title">OID0702240004</h3>
                        </div>
                      </td>
                      <td>Khairul</td>
                      <td>Banda Aceh - Ulim</td>
                      <td>PT. Putra Sejahtera Abadi</td>
                      <td>Rp. 181.000</td>
                      <td>BSI</td>
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