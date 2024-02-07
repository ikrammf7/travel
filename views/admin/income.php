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
              <h2 class="sec__title font-size-30 text-white">Pendapatan</h2>
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
                  <h3 class="title">Daftar Pendapatan</h3>
                </div>
              </div>
            </div>
            <div class="form-content">
              <div class="table-form table-responsive">
                <table id="pendapatan" class="table" style="width:100%">
                  <thead>
                    <tr>
                      <th scope="col">Customer Email</th>
                      <th scope="col">Customer Name</th>
                      <th scope="col">Package Name</th>
                      <th scope="col">Total Cost</th>
                      <th scope="col">Payment Method</th>
                      <th scope="col">Status</th>
                      <th scope="col">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">alexsmith@gmail.com</th>
                      <td>
                        <div class="table-content">
                          <h3 class="title">Alex Smith</h3>
                        </div>
                      </td>
                      <td>Trip of New York – Discover America</td>
                      <td>$399</td>
                      <td>PayPal</td>
                      <td><span class="badge badge-success py-1 px-2">Completed</span></td>
                      <td>
                        <div class="table-content">
                          <a href="admin-dashboard-orders-details.html" class="theme-btn theme-btn-small mr-2"
                            data-toggle="tooltip" data-placement="top" title="View details"><i
                              class="la la-eye"></i></a>
                          <a href="#" class="theme-btn theme-btn-small" data-toggle="modal" data-target="#modalPopup"><i
                              class="la la-envelope"></i></a>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <th scope="row">markhardson@gmail.com</th>
                      <td>
                        <div class="table-content">
                          <h3 class="title">Mark Hardson</h3>
                        </div>
                      </td>
                      <td>America’s National Parks with Denver</td>
                      <td>$399</td>
                      <td>Payoneer</td>
                      <td><span class="badge badge-warning text-white py-1 px-2">Pending</span></td>
                      <td>
                        <div class="table-content">
                          <a href="admin-dashboard-orders-details.html" class="theme-btn theme-btn-small mr-2"
                            data-toggle="tooltip" data-placement="top" title="View details"><i
                              class="la la-eye"></i></a>
                          <a href="#" class="theme-btn theme-btn-small" data-toggle="modal" data-target="#modalPopup"><i
                              class="la la-envelope"></i></a>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <th scope="row">davidmartin@gmail.com</th>
                      <td>
                        <div class="table-content">
                          <h3 class="title">David Martin</h3>
                        </div>
                      </td>
                      <td>Eastern Discovery Start New Orleans</td>
                      <td>$399</td>
                      <td>Skrill</td>
                      <td><span class="badge badge-info py-1 px-2">On Hold</span></td>
                      <td>
                        <div class="table-content">
                          <a href="admin-dashboard-orders-details.html" class="theme-btn theme-btn-small mr-2"
                            data-toggle="tooltip" data-placement="top" title="View details"><i
                              class="la la-eye"></i></a>
                          <a href="#" class="theme-btn theme-btn-small" data-toggle="modal" data-target="#modalPopup"><i
                              class="la la-envelope"></i></a>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <th scope="row">johndoe@gmail.com</th>
                      <td>
                        <div class="table-content">
                          <h3 class="title">John Doe</h3>
                        </div>
                      </td>
                      <td>New york to Beijing</td>
                      <td>$399</td>
                      <td>PayPal</td>
                      <td><span class="badge badge-danger py-1 px-2">Delayed</span></td>
                      <td>
                        <div class="table-content">
                          <a href="admin-dashboard-orders-details.html" class="theme-btn theme-btn-small mr-2"
                            data-toggle="tooltip" data-placement="top" title="View details"><i
                              class="la la-eye"></i></a>
                          <a href="#" class="theme-btn theme-btn-small" data-toggle="modal" data-target="#modalPopup"><i
                              class="la la-envelope"></i></a>
                        </div>
                      </td>
                    </tr>

                    <tr>
                      <th scope="row">joshpurdil@gmail.com</th>
                      <td>
                        <div class="table-content">
                          <h3 class="title">Josh Purdila</h3>
                        </div>
                      </td>
                      <td>Los Angeles to San Francisco Express</td>
                      <td>$399</td>
                      <td>PayPal</td>
                      <td><span class="badge badge-success py-1 px-2">Completed</span></td>
                      <td>
                        <div class="table-content">
                          <a href="admin-dashboard-orders-details.html" class="theme-btn theme-btn-small mr-2"
                            data-toggle="tooltip" data-placement="top" title="View details"><i
                              class="la la-eye"></i></a>
                          <a href="#" class="theme-btn theme-btn-small" data-toggle="modal" data-target="#modalPopup"><i
                              class="la la-envelope"></i></a>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <th scope="row">kamranadi@gmail.com</th>
                      <td>
                        <div class="table-content">
                          <h3 class="title">Kamran Adi</h3>
                        </div>
                      </td>
                      <td>Istanbul to Dhaka</td>
                      <td>$399</td>
                      <td>PayPal</td>
                      <td><span class="badge badge-success py-1 px-2">Completed</span></td>
                      <td>
                        <div class="table-content">
                          <a href="admin-dashboard-orders-details.html" class="theme-btn theme-btn-small mr-2"
                            data-toggle="tooltip" data-placement="top" title="View details"><i
                              class="la la-eye"></i></a>
                          <a href="#" class="theme-btn theme-btn-small" data-toggle="modal" data-target="#modalPopup"><i
                              class="la la-envelope"></i></a>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <th scope="row">markdoe@gmail.com</th>
                      <td>
                        <div class="table-content">
                          <h3 class="title">Mark Doe</h3>
                        </div>
                      </td>
                      <td>London to Dubai</td>
                      <td>$399</td>
                      <td>Neteller</td>
                      <td><span class="badge badge-success py-1 px-2">Completed</span></td>
                      <td>
                        <div class="table-content">
                          <a href="admin-dashboard-orders-details.html" class="theme-btn theme-btn-small mr-2"
                            data-toggle="tooltip" data-placement="top" title="View details"><i
                              class="la la-eye"></i></a>
                          <a href="#" class="theme-btn theme-btn-small" data-toggle="modal" data-target="#modalPopup"><i
                              class="la la-envelope"></i></a>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <th scope="row">brendoneich@gmail.com</th>
                      <td>
                        <div class="table-content">
                          <h3 class="title">Brendon Eich</h3>
                        </div>
                      </td>
                      <td>New York: Museum of Modern Art</td>
                      <td>$399</td>
                      <td>Stripe</td>
                      <td><span class="badge badge-success py-1 px-2">Completed</span></td>
                      <td>
                        <div class="table-content">
                          <a href="admin-dashboard-orders-details.html" class="theme-btn theme-btn-small mr-2"
                            data-toggle="tooltip" data-placement="top" title="View details"><i
                              class="la la-eye"></i></a>
                          <a href="#" class="theme-btn theme-btn-small" data-toggle="modal" data-target="#modalPopup"><i
                              class="la la-envelope"></i></a>
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
        $('#pendapatan').DataTable({
          language: {
            url: '../../js/json/dataTables.id.json',
          },
        });
      </script>
      <!-- ================================
   END FOOTER AREA
================================= -->