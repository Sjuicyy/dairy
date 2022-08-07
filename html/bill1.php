<?php
session_start();
if (!($_SESSION['status'] == 'logedin')) {
  header('Location: auth-login-basic.php');
}
?>
<!DOCTYPE html>
<!-- beautify ignore:start -->
<html>
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
    />

    <title>Dashboard </title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="../assets/img/final.png" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet"
    />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="../assets/vendor/fonts/boxicons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="../assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="../assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="../assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

    <link rel="stylesheet" href="../assets/vendor/libs/apex-charts/apex-charts.css" />

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="../assets/vendor/js/helpers.js"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="../assets/js/config.js"></script>
    <style>
        p.smaller{
            line-height: .2;
        }
        body{
              font-family: 'Muli', sans-serif;
        }
    </style>
  </head>

  <body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">

        <!-- Layout container -->
        <div class="layout-page">
          <!-- Navbar -->

          <nav
            class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
            id="layout-navbar"
          >

            <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
              <!-- Search -->
              <div class="navbar-nav align-items-center">
                <div class="nav-item d-flex align-items-center">
                  <i class="bx bx-search fs-4 lh-0"></i>
                  <input
                    type="text"
                    class="form-control border-0 shadow-none"
                    placeholder="Search..."
                    aria-label="Search..."
                  />
                </div>
              </div>
              <!-- /Search -->

              <ul class="navbar-nav flex-row align-items-center ms-auto">
                <!-- Place this tag where you want the button to render. -->
                  <?php
$a = $_SESSION['User'];
require_once 'Connection.php';
$sql = "SELECT * from admin where Email='$a'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  while ($data = mysqli_fetch_array($result)) {
?>

                <!-- User -->
                <li class="nav-item navbar-dropdown dropdown-user dropdown">
                  <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                    <div class="avatar avatar-online">
                      <img src="../assets/img/<?php echo $data['Photo']; ?>" alt class="w-px-40 h-auto rounded-circle" />
                    </div>
                  </a>
                  <ul class="dropdown-menu dropdown-menu-end">


                    <li>
                      <a class="dropdown-item" href="#">
                        <div class="d-flex">
                          <div class="flex-shrink-0 me-3">
                            <div class="avatar avatar-online">
                              <img src="../assets/img/<?php echo $data['Photo']; ?>" alt class="w-px-40 h-auto rounded-circle" />
                            </div>
                          </div>
                          <div class="flex-grow-1">
                            <span class="fw-semibold d-block"><?php echo $data['Name']; ?></span>
                            <small class="text-muted">Admin</small>
                          </div>
                        </div>
                      </a>
                    </li>
                    <li>
                      <div class="dropdown-divider"></div>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">
                        <i class="bx bx-user me-2"></i>
                        <span class="align-middle">My Profile</span>
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">
                        <i class="bx bx-cog me-2"></i>
                        <span class="align-middle">Settings</span>
                      </a>
                    </li>

                    <li>
                      <div class="dropdown-divider"></div>
                    </li>
                    <li>
                      <a class="dropdown-item" href="auth-login-basic.php">
                        <i class="bx bx-power-off me-2"></i>
                        <span class="align-middle">Log Out</span>
                      </a>
                    </li>
                  </ul>
                </li>
                      <?php
  }
}

?>
                <!--/ User -->
              </ul>
            </div>
          </nav>
          <!-- / Navbar -->



<div class="container  m-5 border text-dark">

<div class="text-center">

    <p class="h2 mt-2 text-dark" style="font-family :aaa;"><u><b>kaleshwar dairy</b></u></p>
    <p class="smaller">Jawlakhel-2,Lalitpur</p>
    <p class="smaller">Contact : 9848857845,099-543438</p>
    <hr class="text-dark">
    <br>
</div>
        <div class="row">
            <p class="col-6 text-start col smaller">Bill no:</p>
            <p class="col-6 text-start col smaller">Date:</p>
        </div>
        <p class="col"> Name:</p>
            <div class="row">
                <p class="col smaller">Address:</p>
                <p class="col smaller">Contact:</p>
            </div>
            <br>
        <table class="table table-bordered text-dark" style="border: 5px">
        <tbody>
                <tr>
                    <td ><b>S.No.</b></td>
                    <td style="width:60%"><b>Product</b></td>
                    <td style="width:10%"><b>Quantity</b></td>
                    <td style="width:20%"><b>Unit price</b></td>
                    <td style="width:40%"><b>Amount</b></td>
                </tr>
            
                <tr>
                <td>1</td>
                <td>aaaa</td>
                <td>aaaa</td>
                <td >aaaa</td>
                <td >aaaa</td>
               
                </tr>
                <tr>
                <td>2</td>
                <td>aaaa</td>
                <td>aaaa</td>
                <td>aaaa</td>
                <td>aaaa</td>
                </tr>
                <tr>
                <td>3</td>
                <td>aaaa</td>
                <td>aaaa</td>
                <td>aaaa</td>
                <td>aaaa</td>
                </tr>
                <tr>
                <td>4</td>
                <td>aaaa</td>
                <td>aaaa</td>
                <td>aaaa</td>
                <td>aaaa</td>
                </tr>
                <tr>
                <td colspan="3" class="text-center"><b>Thank You For Visiting</b></td>
                <td><b>Total</b></td>
                <td ></td>
                </tr>
        </tbody>
        </table>
        <div class="horizontal_line"></div>
    <div class="line"></div>
    <div>
    </div>
    </div>









          <div class="content-wrapper">


            <!-- Footer -->
            <footer class="content-footer footer bg-footer-theme">
              <div class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
                <div class="mb-2 mb-md-0">
                  ©
                  <script>
                    document.write(new Date().getFullYear());
                  </script>
                  , made with ❤️ by
                  <a href="http://pritambajagain.com.np" target="_blank" class="footer-link fw-bolder">D Czar</a>
                </div>

              </div>
            </footer>
            <!-- / Footer -->

            <div class="content-backdrop fade"></div>
          </div>
          <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
      </div>

      <!-- Overlay -->

    </div>
    <!-- / Layout wrapper -->


    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="../assets/vendor/libs/jquery/jquery.js"></script>
    <script src="../assets/vendor/libs/popper/popper.js"></script>
    <script src="../assets/vendor/js/bootstrap.js"></script>
    <script src="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

    <script src="../assets/vendor/js/menu.js"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="../assets/vendor/libs/apex-charts/apexcharts.js"></script>

    <!-- Main JS -->
    <script src="../assets/js/main.js"></script>

    <!-- Page JS -->
    <script src="../assets/js/dashboards-analytics.js"></script>

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
  </body>
</html>
